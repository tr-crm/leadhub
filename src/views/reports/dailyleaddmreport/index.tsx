import { useState, useEffect, useMemo, useRef } from 'react';
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
import { getDailyDMLeadReportList, DailyLeadDmClickableReportRequest } from "@/services/reportsservice";
import type { DailyLead } from "@/services/reportsservice";
import type { RegionLeadReportRequest,DailyLeadDmMClickableReportPayload } from "@/services/reportsservice";
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
   const [showModal, setShowModal] = useState<boolean>(false);
   const [modalData, setModalData] = useState<any[]>([]); 


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

 

  const fetchData = async () => {
     if (!user) return;
    setLoading(true);
    setError("");

    const requestBody: RegionLeadReportRequest = {
      yearVal: selectedYear,
      monthVal: selectedMonth,
      userIdVal: user.id,
      tokenVal: user.access_token,
      typeVal: user.type,
      regionVal:region
    };

   
     try {
     const response = await getDailyDMLeadReportList(requestBody);
        
       
       if (response.response === 'login_error') {
         setData([]);
            setShowLogoutLoader(true);
          toast.dismiss();
               toast.error(response.message);

               
             } else if (response.response === 'error') {
                 setData([]);
                toast.dismiss();
               toast.error(response.message);
             } else if (response.response === 'success') {
                setData(response.data);
              
             }
        
      } catch (err:any) {
        toast.dismiss();
       toast.error('Something went wrong.');
            //  navigate('/login');
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

  
  const handleOpenModelPopupClick = async (dates: string[] | string, statusIds: string[]) => {
       setShowModal(true);
      setLoading(true);
  
      const payload: DailyLeadDmMClickableReportPayload = {
      leadDateVal: Array.isArray(dates) ? dates : [dates],
      leadStatusVal : statusIds,
      userIdVal: user.id,
      tokenVal: user.access_token,
      typeVal: user.type,
    };
  
      try {
        const response = await DailyLeadDmClickableReportRequest(payload);
        if (response.response === 'login_error') {
           setModalData([]);
            toast.dismiss();
                  toast.error(response.message);
                  setShowLogoutLoader(true);
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
 

  return (
    <Container fluid>
      <PageBreadcrumb title="Daily DM Lead Report" />
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
                    Date <SortArrow columnKey="date" />
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
                {sortedData.map(({ date, statuses, total }) => (
                  <tr key={date}>
                      <td>{date}</td>
                    {allStatuses.map((statusName) => {
                      const status = statuses.find((s) => s.name === statusName);
                      const count = status?.count || 0;
                      const statusId = status?.id;
                      return <td
                        key={statusName}
                        style={{
                          cursor: count > 0 ? "pointer" : "default",
                        }}
                        onClick={() => {
                          if (count > 0 && statusId) {
                            handleOpenModelPopupClick(date, [statusId]);
                          }
                        }}
                      >
                        {count}
                      </td>;
                    })}
                    <td
                      style={{ cursor: total > 0 ? "pointer" : "default"}}
                      onClick={() => {
                        if (total > 0) {
                          const allStatusIds = statuses.map((s) => s.id).filter(Boolean);
                          handleOpenModelPopupClick(date, allStatusIds);
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
                {footerTotals.map((sum, idx) => {
                  const statusName = allStatuses[idx]; // get status name by column index
                  const statusIds = sortedData
                    .flatMap((row) =>
                      row.statuses
                        .filter((s) => s.name === statusName && s.id)
                        .map((s) => s.id)
                    );
                  const allDates = sortedData.map((row) => row.date);

                  return (
                    <td
                      key={idx}
                      style={{
                        cursor: sum > 0 ? "pointer" : "default"
                      }}
                      onClick={() => {
                        if (sum > 0 && statusIds.length) {
                          handleOpenModelPopupClick(allDates, [...new Set(statusIds)]);
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
                    color: grandTotal > 0 ? "blue" : "black",
                  }}
                  onClick={() => {
                    if (grandTotal > 0) {
                      const allDates = sortedData.map((row) => row.date);
                      const allStatusIds = sortedData
                        .flatMap((row) => row.statuses.map((s) => s.id))
                        .filter(Boolean);
                      handleOpenModelPopupClick(allDates, [...new Set(allStatusIds)]);
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

export default DailyLeadReportTable;
