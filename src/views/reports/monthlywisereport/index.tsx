import React, { useEffect, useState, useMemo } from "react";
import {
  Table,
  Spinner,
  Alert,
  Container,
  Form,
  Row,
  Col,
  Modal,
  Button
} from "react-bootstrap";
import PageBreadcrumb from "@/components/PageBreadcrumb";
import "../dailyreport/LeadReportTable.css";
import { getMonthlyWiseReportLeadsList, MonthlyWiseClickableReportRequest } from "@/services/reportsservice";
import type { MonthlyLead } from "@/services/reportsservice";
import type { MonthlyWiseReportPayload, MonthlyWiseClickableReportPayload } from "@/services/reportsservice";
import { getUserInfo } from "@/utils/auth";
import { useSortableData } from "@/hooks/useSortableData";
import YearSelect from '@/components/yearselect';
  import { toast } from 'react-toastify';

const MonthlyWiseReportTable: React.FC = () => {
  const now = new Date();
  const [selectedYear, setSelectedYear] = useState<string>(
    now.getFullYear().toString()
  );

  const [data, setData] = useState<MonthlyLead[]>([]);
  const [loading, setLoading] = useState<boolean>(false);
  const [error, setError] = useState<string>("");
  

  const user = getUserInfo();

  const fetchData = async () => {
    setLoading(true);
    setError("");

    const payload: MonthlyWiseReportPayload = {
      yearVal: selectedYear,
      userIdVal: user.id,
      tokenVal: user.access_token,
      typeVal: user.type,
    };

    try {
      const res = await getMonthlyWiseReportLeadsList(payload);
      if (res.response === "success") {
        setData(res.data);
      } else {
        setError(res.message || "Failed to fetch data");
      }
    } catch (err) {
      setError(err instanceof Error ? err.message : "Something went wrong");
    } finally {
      setLoading(false);
    }
  };

  useEffect(() => {
    fetchData();
  }, [selectedYear]);

  const allStatuses = useMemo(() => {
    const set = new Set<string>();
    data.forEach(({ statuses }) =>
      statuses.forEach(({ name }) => set.add(name))
    );
    return Array.from(set);
  }, [data]);

  const { sortedItems: sortedData, requestSort, sortConfig } = useSortableData(data);

  const footerTotals = useMemo(() => {
    return allStatuses.map((statusName) =>
      data.reduce((sum, row) => {
        const status = row.statuses.find((s) => s.name === statusName);
        return sum + (status ? status.count : 0);
      }, 0)
    );
  }, [data, allStatuses]);

  const grandTotal = useMemo(() => {
    return data.reduce((sum, row) => sum + row.total, 0);
  }, [data]);

  const SortArrow = ({ columnKey }: { columnKey: string }) => {
    if (sortConfig.key !== columnKey) return null;
    return sortConfig.direction === "asc" ? <> ↑</> : <> ↓</>;
  };
   const [showModal, setShowModal] = useState<boolean>(false);
   const [modalData, setModalData] = useState<any[]>([]); 
    
    const handleOpenModelPopupClick = async (dates: string[] | string, statusIds: string[]) => {
         setShowModal(true);
        setLoading(true);
    
        const payload: MonthlyWiseClickableReportPayload = {
        monthVal: Array.isArray(dates)
    ? dates.map((d) => d.slice(-2)) // Extracts "07" from "2025-07"
    : [dates.slice(-2)],
        leadStatusVal : statusIds,
        userIdVal: user.id,
        tokenVal: user.access_token,
        typeVal: user.type,
        yearVal:Array.isArray(dates) ? new Date(dates[0]).getFullYear().toString() : new Date(dates).getFullYear().toString(),
      };
    
        try {
          const response = await MonthlyWiseClickableReportRequest(payload);
          if (response.response === 'login_error') {
             setModalData([]);
              toast.dismiss();
                    toast.error(response.message);
                 } else if (response.response === 'error') {
                    setModalData([]);
                    toast.dismiss();
                    toast.error(response.message);
                 } else if (response.response === 'success') {
                  setModalData([]);
                  setModalData(response.data);
                  
                 }
        } catch (err) {
          setError(err instanceof Error ? err.message : "Something went wrong");
              toast.dismiss();
           toast.error('Something went wrong.');
                //  navigate('/login');
            setModalData([]);
        } finally {
          setLoading(false);
        }
      };
      // const statusesWithId = sortedData.find(d => d.statuses?.length)?.statuses || [];

  return (
    <Container fluid>
      <PageBreadcrumb title="Monthly Lead Report" />
      <div className="mt-4 bg-white p-4 shadow-sm rounded">
        <Form className="mb-3">
          <Row>
            <Col md={3}>

              <YearSelect value={selectedYear} onChange={(e) => setSelectedYear(e.target.value)} required />
            </Col>
          
            <Col md="auto">
              <button
                type="button"
                className="btn btn-primary"
                onClick={fetchData}
              >
                Go
              </button>
            </Col>
          </Row>
        </Form>

        {error && <Alert variant="danger">{error}</Alert>}

        {loading ? (
          <div className="text-center mt-4">
            <Spinner animation="border" />
          </div>
        ) : data.length === 0 ? (
          <div className="text-center text-muted mt-4">No data available.</div>
        ) : (
          <div className="table-wrapper">
            <Table className="styled-table mb-0" bordered hover>
              <thead>
                <tr>
                  <th onClick={() => requestSort("month")}>
                    Date <SortArrow columnKey="month" />
                  </th>
                  {allStatuses.map((status) => (
                    <th key={status} onClick={() => requestSort(status)}>
                      {status}
                      <SortArrow columnKey={status} />
                    </th>
                  ))}
                  <th onClick={() => requestSort("total")}>
                    Total <SortArrow columnKey="total" />
                  </th>
                </tr>
              </thead>
              <tbody>
                {sortedData.map(({ year_month, statuses, total }) => {
                  const [year, monthNum] = year_month.split("-");
                  const monthIndex = parseInt(monthNum, 10) - 1;

                  // Convert "2025-07" => "July 2025"
                  const monthLabel = new Date(parseInt(year, 10), monthIndex).toLocaleString("default", {
                    month: "long",
                    year: "numeric",
                  });

                  return (
                    <tr key={year_month}>
                      <td>{monthLabel}</td>
                      {allStatuses.map((statusName) => {
                        const status = statuses.find((s) => s.name === statusName);
                        const count = status?.count || 0;
                        const statusId = status?.id;

                        return (
                          <td
                            key={statusName}
                            style={{
                              cursor: count > 0 ? "pointer" : "default",
                            }}
                            onClick={() => {
                              if (count > 0 && statusId) {
                                handleOpenModelPopupClick(year_month, [statusId]);
                              }
                            }}
                          >
                            {count}
                          </td>
                        );
                      })}
                      <td
                        style={{
                          cursor: total > 0 ? "pointer" : "default",
                        }}
                        onClick={() => {
                          if (total > 0) {
                            const allStatusIds = statuses.map((s) => s.id).filter(Boolean);
                            handleOpenModelPopupClick(year_month, allStatusIds);
                          }
                        }}
                      >
                        {total}
                      </td>
                    </tr>
                  );
                })}
              </tbody>

              <tfoot>
                  <tr>
                  <td>Total</td>
                  {footerTotals.map((sum, idx) => {
                    const statusId = sortedData[0]?.statuses[idx]?.id;

                    return (
                      <td
                        key={idx}
                        style={{
                          cursor: sum > 0 ? "pointer" : "default",
                        }}
                        onClick={() => {
                          if (sum > 0 && statusId) {
                            const months = sortedData
                              .filter((item) => {
                                const status = item.statuses[idx];
                                return status && status.count > 0;
                              })
                              .map((item) => item.year_month); // ✅ FIXED here

                            handleOpenModelPopupClick(months, [statusId]);
                          }
                        }}
                      >
                        {sum}
                      </td>
                    );
                  })}

                  <td
                    style={{
                      cursor: grandTotal > 0 ? "pointer" : "default",
                    }}
                    onClick={() => {
                      if (grandTotal > 0) {
                        const allStatusIds = sortedData[0]?.statuses.map((s) => s.id).filter(Boolean) || [];
                        const allMonths = sortedData.map((item) => item.year_month); // ✅ FIXED here
                        handleOpenModelPopupClick(allMonths, allStatusIds);
                      }
                    }}
                  >
                    {grandTotal}
                  </td>
                </tr>
              </tfoot>

            </Table>
          </div>
        )}
      </div>

       <Modal show={showModal} onHide={() => setShowModal(false)} size="xl">
        <Modal.Header closeButton>
          <Modal.Title>Lead Details</Modal.Title>
        </Modal.Header>
        <Modal.Body>
         
          {loading ? (
            <p>Loading...</p>
          ) : Array.isArray(modalData) && modalData.length > 0 ? (
            <Table striped bordered hover responsive className="modal-lead-table">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Date</th>
                  <th>Details</th>
                  <th>Phone</th>
                  <th>Status</th>
                  <th>Branch</th>
                  <th>Source</th>
                  <th>Category</th>
                  <th>Country</th>
                </tr>
              </thead>
              <tbody>
                {modalData.map((lead:any, index:number) => (
                  <tr key={lead.id}>
                    <td>{index+1}</td>
                    <td>
                      <>
                        {lead.lead_date && (
                          <>
                            <span>L: {lead.lead_date}</span>
                            <br /><br />
                          </>
                        )}

                        {lead.followup_date && (
                          <>
                            <span>F: {lead.followup_date}</span>
                            <br /><br />
                          </>
                        )}

                        {lead.partial_walkin_date && (
                          <>
                            <span>PW: {lead.partial_walkin_date}</span>
                            <br /><br />
                          </>
                        )}

                        {lead.walkin_date && (
                          <>
                            <span>W: {lead.walkin_date}</span>
                            <br /><br />
                          </>
                        )}
                      </>
                    </td>
                    <td style={{ wordWrap: 'break-word', whiteSpace: 'normal', maxWidth: '90px' }}>
                      <>
                        {lead.full_name}
                        <br /><br />
                        {lead.email}
                      </>
                    </td>
                    <td>{lead.phone_number}</td>
                    <td>{lead.lead_status_name}</td>
                    <td>{lead.branchname}</td>
                    <td>{lead.source_name}</td>
                    <td>{lead.category_name}</td>
                    <td>{lead.country_name}</td>
                  </tr>
                ))}
              </tbody>
            </Table>
          ) : (
            <p>No data found.</p>
          )}
        </Modal.Body>
        <Modal.Footer>
          <Button variant="secondary" onClick={() => setShowModal(false)}>
            Close
          </Button>
        </Modal.Footer>
      </Modal>
    </Container>
  );
};

export default MonthlyWiseReportTable;
