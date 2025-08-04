import React, { useEffect, useState, useMemo,useRef } from "react";
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
import { getMonthlySourceWiseReportLeadsList,getMonthlySourceWiseReportClickableLeadsList } from "@/services/reportsservice";
import type { MonthlyLead } from "@/services/reportsservice";
import type { MonthlySourceWiseReportPayload, getMonthlySourceWiseReportClickablePayload } from "@/services/reportsservice";
import { useSortableData } from "@/hooks/useSortableData";
import YearSelect from '@/components/yearselect';
 import { toast } from 'react-toastify';
import LogoutOverlay from '@/components/LogoutOverlay';
import { isAuthenticated, getUserInfo, logout } from '@/utils/auth';
const MonthlySourceWiseReportTable: React.FC = () => {
  const [showLogoutLoader, setShowLogoutLoader] = useState<boolean>(false);
  const now = new Date();
  const [selectedYear, setSelectedYear] = useState<string>(
    now.getFullYear().toString()
  );

  const [data, setData] = useState<MonthlyLead[]>([]);
  const [loading, setLoading] = useState<boolean>(false);
  const [error, setError] = useState<string>("");

  // const user = getUserInfo();
  // Memoize user so it doesn't cause continuous re-renders/useEffect triggers
                const user = useMemo(() => (isAuthenticated() ? getUserInfo() : null), []);
              
                // Ref to prevent double fetch in Strict Mode or repeated effect calls
                 const didFetchRef = useRef(false);
              
                useEffect(() => {
                  if (!user) {
                    setShowLogoutLoader(true);
                  }
                }, [user]);

  const fetchData = async () => {
      if (!user) return;
    setLoading(true);
    setError("");

    const payload: MonthlySourceWiseReportPayload = {
      yearVal: selectedYear,
      userIdVal: user.id,
      tokenVal: user.access_token,
      typeVal: user.type,
    };

    try {
      const response = await getMonthlySourceWiseReportLeadsList(payload);
     if (response.response === 'login_error') {
                        setData([]);
                         setShowLogoutLoader(true);
                      toast.dismiss();
     
                    toast.error(response.message);
            
                    // Optionally redirect to login page here
                  } else if (response.response === 'error') {
                      setData([]);
                     toast.dismiss();
                    toast.error(response.message);
                  } else if (response.response === 'success') {
                    setData([]);
                     setData(response.data);
                    
                  }
    } catch (err) {
      setError(err instanceof Error ? err.message : "Something went wrong");
    } finally {
      setLoading(false);
    }
  };

  useEffect(() => {
    if (!user) return;
       if (!didFetchRef.current) {
      fetchData()
        didFetchRef.current = true;
      }
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
  

  const [modalData, setModalData] = useState<any[]>([]);
  const [showModal, setShowModal] = useState(false);

  const handleCellClick = async (months: string[], sourceIds: string[]) => {
     setShowModal(true);
        const payload : getMonthlySourceWiseReportClickablePayload = {
         yearVal: selectedYear,
          userIdVal: user.id,
          tokenVal: user.access_token,
          typeVal: user.type,
          monthVal: months,
          sourceVal: sourceIds,
        };
    try {
      const response = await getMonthlySourceWiseReportClickableLeadsList(payload); // Use a separate API if needed
      if (response.response === "success") {
        setModalData(response.data);
       
      }
    } catch (err) {
      toast.error("Failed to fetch details.");
    }
  };

  return (
    <Container fluid>
      <PageBreadcrumb title="Monthly Lead Report" />
           {showLogoutLoader && (
  <LogoutOverlay
    duration={5} 
    onComplete={async () => {
      await logout(); // your logout function
    }}
  />
)}
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
               {sortedData.map(({ month, statuses, total }) => {
                const monthIndex = parseInt(month.slice(-2), 10) - 1;
                const displayMonth = new Date(0, monthIndex).toLocaleString("default", {
                  month: "long",
                });

                return (
                  <tr key={month}>
                    <td>{displayMonth}</td>

                    {allStatuses.map((statusName) => {
                      const status = statuses.find((s) => s.name === statusName);
                      const count = status ? status.count : 0;
                      const sourceId = status ? status.id.toString() : "";

                      return (
                        <td
                          key={statusName}
                          style={{
                            cursor: count > 0 ? "pointer" : "default",
                          }}
                          onClick={() => {
                            if (count > 0) {
                              // single month, single source
                              handleCellClick([month.slice(-2)], [sourceId]);
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
                          const allSourceIds = statuses.map((s: any) => s.id.toString());
                          // single month, all sources
                          handleCellClick([month.slice(-2)], allSourceIds);
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
                      // Try to find a sourceId for the current column index
                      const sourceId = sortedData.find(row => row.statuses[idx])?.statuses[idx]?.id?.toString();

                      return (
                        <td
                          key={idx}
                          style={{
                            cursor: sum > 0 ? "pointer" : "default",
                          }}
                          onClick={() => {
                            if (sum > 0 && sourceId) {
                              const allMonthValues = sortedData.map((d) => d.month.slice(-2)); // e.g., ["07", "08"]
                              handleCellClick(allMonthValues, [sourceId]); // All months, single source
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
                          const allMonthValues = sortedData.map((d) => d.month.slice(-2)); // e.g., ["07", "08"]
                          const allSourceIds = new Set<string>();

                          sortedData.forEach((d) => {
                            d.statuses.forEach((s: any) => {
                              allSourceIds.add(s.id.toString());
                            });
                          });

                          handleCellClick(allMonthValues, Array.from(allSourceIds)); // All months, all sources
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
          {modalData.length === 0 ? (
            <div className="text-center text-muted">No leads found.</div>
          ) : (
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
                {modalData.map((lead, index) => (
                  <tr key={index}>
                    <td>{index + 1}</td>
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
          )}
        </Modal.Body>
        <Modal.Footer>
        <Button
          variant="secondary"
          onClick={() => {
            setShowModal(false);
            setModalData([]); 
          }}
        >
          Close
        </Button>
        </Modal.Footer>
      </Modal>

    </Container>
  );
};

export default MonthlySourceWiseReportTable;
