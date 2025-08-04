import React, { useEffect, useState, useMemo,useRef } from "react";

import {
  Table,
  Spinner,
  Alert,
  Container,
  Form,
  Row,
  Col,
  Modal
} from "react-bootstrap";
import PageBreadcrumb from "@/components/PageBreadcrumb";
import "../dailyreport/LeadReportTable.css";
import { getBranchwiseLeadReportList, getRegionLeadClickableDetails } from "@/services/reportsservice";
import type { DailyLead } from "@/services/reportsservice";
import type { BranchLeadReportRequest, RegionLeadClickablePayload } from "@/services/reportsservice";
import { useSortableData } from "@/hooks/useSortableData";
import YearSelect from '@/components/yearselect';
import MonthSelect from '@/components/monthselect';
import RegionSelect from '@/components/regionselect';
import { toast } from 'react-toastify';
import LogoutOverlay from '@/components/LogoutOverlay';
import { isAuthenticated, getUserInfo, logout } from '@/utils/auth';

const padMonth = (month: number) => String(month).padStart(2, "0");

const DailyLeadReportTable: React.FC = () => {
    const [showLogoutLoader, setShowLogoutLoader] = useState<boolean>(false);
  
  const now = new Date();
  const [selectedYear, setSelectedYear] = useState<string>(
    now.getFullYear().toString()
  );
  const [selectedMonth, setSelectedMonth] = useState<string>(
    padMonth(now.getMonth() + 1)
  );

    // Memoize user so it doesn't cause continuous re-renders/useEffect triggers
    const user = useMemo(() => (isAuthenticated() ? getUserInfo() : null), []);
  
    // Ref to prevent double fetch in Strict Mode or repeated effect calls
    const didFetchRef = useRef(false);
  
    useEffect(() => {
      if (!user) {
        setShowLogoutLoader(true);
      }
    }, [user]);
  const type=user.type

  const [data, setData] = useState<DailyLead[]>([]);
  const [loading, setLoading] = useState<boolean>(false);
  const [error, setError] = useState<string>("");
  const getInitialRegionValue = (): string => {
    if (type === '1' || type === '2') {
      return '1';
    } else if (user.region) {
      return String(user.region);
    }
    return '0';
  };
  const [region, setRegion] = useState<string>(getInitialRegionValue());

  const [modalData, setModalData] = useState<any[]>([]);
  const [showModal, setShowModal] = useState(false);

 

  const fetchData = async () => {
      if (!user) return;
    setLoading(true);
    setError("");

    const requestBody: BranchLeadReportRequest = {
      yearVal: selectedYear,
      monthVal: selectedMonth,
      userIdVal: user.id,
      tokenVal: user.access_token,
      typeVal: user.type,
      regionVal:region
    };

   
     try {
     const response = await getBranchwiseLeadReportList(requestBody);
        
    //    console.log(response.data.response);
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
      
        
      } catch (err:any) {
         toast.dismiss();
       toast.error(err.message || 'Something went wrong.');
        setData([]); // safe fallback
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
    }, [selectedYear, selectedMonth]);

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
const handleRegionChange = (selectedRegion:any) => {
   
    setRegion(selectedRegion);
  };
 


  
  const handleCloseModal = () => {
    setShowModal(false);
    setModalData([]);
  };

  const handleOpenModalPopupClick = async (branchIds: string[], statusIds: string[]) => {
    setShowModal(true);
    setLoading(true);

    const payload : RegionLeadClickablePayload = {
      branchIdVal: branchIds,
      leadStatusVal: statusIds,
      userIdVal: user.id,
      tokenVal: user.access_token,
      typeVal: user.type,
      yearVal: selectedYear,
      monthVal: selectedMonth,
    };

    try {
      const response = await getRegionLeadClickableDetails(payload);
      toast.dismiss();

      if (response.response === "login_error") {
        setModalData([]);
        setShowLogoutLoader(true);
        toast.error(response.message);
      } else if (response.response === "error") {
        setModalData([]);
        toast.error(response.message);
      } else if (response.response === "success") {
        setModalData(response.data);
      }
    } catch (err: any) {
      toast.dismiss();
      toast.error(err.message || "Something went wrong.");
      setModalData([]);
    } finally {
      setLoading(false);
    }
  };

  return (
    <Container fluid>
      <PageBreadcrumb title="Region Wise Lead Report" />
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
            <Col md={3}>
              <MonthSelect
                value={selectedMonth}
                onChange={(e) => setSelectedMonth(e.target.value)}
                required
              />


            </Col>
              {(user.type === '1' || user.type === '2') && (
             <Col md={3}>
            <RegionSelect
              value={region}
            //   onChange={handleRegionChange}
              onChange={(val) => {
                  handleRegionChange(val?.value);
                 
                }}
              label="Region"
              placeholder="All Regions"
            />

            
          </Col>
           )}
           {(user.type === '3' ) && (
             <Col md={3}>
            <RegionSelect
              value={region}
            //   onChange={handleRegionChange}
              onChange={(val) => {
                  handleRegionChange(val?.value);
                 
                }}
              label="Region"
              placeholder="All Regions"
              disabled
            />

            
          </Col>
           )}
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
                  <th onClick={() => requestSort("date")}>
                    Branch <SortArrow columnKey="date" />
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
                {sortedData.map(({ id, name, statuses, total }) => (
                  <tr key={name}>
                    <td>{name}</td>

                    {allStatuses.map((statusName) => {
                      const status = statuses.find((s: any) => s.name === statusName);
                      const count = status?.count || 0;
                      const statusId = status?.id?.toString() || "";
                      const branchId = id?.toString() || ""; // ✅ use id as branchId

                      if (count === 0 || !branchId || !statusId) {
                        return <td key={statusName}  style={{
                            cursor: "pointer",
                          }}>{count}</td>;
                      }

                      return (
                        <td
                          key={statusName}
                          style={{
                            cursor: "pointer",
                          }}
                          onClick={() => {
                            handleOpenModalPopupClick([branchId], [statusId]);
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
                          const branchIds = [id?.toString()];
                          const statusIds = statuses
                            .filter((s: any) => s?.count > 0) // ✅ only statuses with count
                            .map((s: any) => s.id.toString());

                          if (branchIds.length && statusIds.length) {
                            handleOpenModalPopupClick(branchIds, statusIds);
                          } else {
                            console.warn("No valid data to open modal");
                          }
                        }
                      }}
                    >
                      {total}
                    </td>

                  </tr>
                ))}
              </tbody>



            <tfoot>
              <tr>
                <td>Total</td>
                {footerTotals.map((sum, idx) => (
                  <td
                    key={idx}
                    style={{
                      cursor: Number(sum) > 0 ? "pointer" : "default",
                    }}
                    onClick={() => {
                      if (Number(sum) > 0) {
                        const statusName = allStatuses[idx];
                        const statusId = sortedData[0]?.statuses.find((s: any) => s.name === statusName)?.id?.toString();
                        const branchIds = sortedData.map((b: any) => b.id?.toString());
                        if (statusId) {
                          handleOpenModalPopupClick(branchIds, [statusId]);
                        }
                      }
                    }}
                  >
                    {sum}
                  </td>
                ))}
                <td
  style={{
    cursor: Number(grandTotal) > 0 ? "pointer" : "default",
  }}
  onClick={() => {
    if (Number(grandTotal) > 0) {
      const branchIds = sortedData.map((b: any) => b.id?.toString());

      const statusIdsSet = new Set<string>();
      sortedData.forEach(({ statuses }) => {
        statuses.forEach((s: any) => {
          if (s.count > 0 && s.id) {
            statusIdsSet.add(s.id.toString());
          }
        });
      });
      const statusIds = Array.from(statusIdsSet);

      if (statusIds.length > 0) {
        handleOpenModalPopupClick(branchIds, statusIds);
      }
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

       <Modal size="xl" show={showModal} onHide={handleCloseModal}>
        <Modal.Header closeButton>
          <Modal.Title>Lead Details</Modal.Title>
        </Modal.Header>
        <Modal.Body>
          {loading ? (
            <div className="text-center py-3">
              <Spinner animation="border" />
            </div>
          ) : modalData.length > 0 ? (
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

          ) : (
            <div className="text-center py-3">No data found</div>
          )}
        </Modal.Body>
      </Modal>
    </Container>
  );
};

export default DailyLeadReportTable;
