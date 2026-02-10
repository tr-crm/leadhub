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
  Card,
  Button
} from "react-bootstrap";
import Select from "react-select";
import DatePicker from 'react-datepicker';
import 'react-datepicker/dist/react-datepicker.css';
import PageBreadcrumb from "@/components/PageBreadcrumb";
import "../executivewiseleadreport/report.css";
import { getDailyExecutivewiseLeadReportList , getDailyExecutivewiseLeadReportClickableDetails} from "@/services/reportsservice";
import type { DailyLead } from "@/services/reportsservice";
import type { getDailyExecutivewiseLeadReportPayload ,getDailyExecutivewiseLeadReportClickablepayload } from "@/services/reportsservice";
import { useSortableData } from "@/hooks/useSortableData";
import RegionSelect from '@/components/regionselect';
 import { toast } from 'react-toastify';
import LogoutOverlay from '@/components/LogoutOverlay';
import { isAuthenticated, getUserInfo, logout } from '@/utils/auth';
import type { Lead } from '@/types/lead.types';
import DataTable from 'react-data-table-component';



const DailyExecutiveLeadReportTable: React.FC = () => {
  const [showLogoutLoader, setShowLogoutLoader] = useState<boolean>(false);
  
const EXCLUDED_STATUS_ID = "0"; // Branch Assigned
const EXCLUDED_STATUS_NAME = "Branch Assigned";

  const [currentPage, setCurrentPage] = useState(1);
  const [rowsPerPage, setRowsPerPage] = useState(10);

   const today = new Date(); 
  const [fromDate, setFromDate] = useState<Date | null>(today);
  const [toDate, setToDate] = useState<Date | null>(today);
  const [selectedFilter, setSelectedFilter] = useState<string>('custom');
      const formatDate = (date: Date | null) => {
      if (!date) return '';
      const y = date.getFullYear();
      const m = String(date.getMonth() + 1).padStart(2, '0');
      const d = String(date.getDate()).padStart(2, '0');
      return `${y}-${m}-${d}`;
    };
    const handleFilterChange = (val: string) => {
      setSelectedFilter(val);
      const today = new Date();
      let startDate: Date | null = null;
      let endDate: Date | null = null;
  
      if (val === 'today') {
        startDate = endDate = today;
      } else if (val === 'yesterday') {
        const yesterday = new Date(today);
        yesterday.setDate(today.getDate() - 1);
        startDate = endDate = yesterday;
      } else if (val === 'last_10_days') {
        const past = new Date(today);
        past.setDate(today.getDate() - 9);
        startDate = past;
        endDate = today;
      } else if (val === 'this_month') {
        const firstDay = new Date(today.getFullYear(), today.getMonth(), 1);
        const lastDay = new Date(today.getFullYear(), today.getMonth() + 1, 0);
        startDate = firstDay;
        endDate = lastDay;
      } else if (val === 'custom') {
        startDate = fromDate;
        endDate = toDate;
      } else if (val === 'all') {
        startDate = new Date('2025-09-01');
        endDate = today;
      }
  
      // Update state first
      setFromDate(startDate);
      setToDate(endDate);
  
    };
  
  
        
  
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
  const options = [
      { value: "0", label: "All Products" },
      { value: "1", label: "Test Prep" },
      { value: "2", label: "ACS" },
      { value: "3", label: "Immigration" },
    ];
  
    // ✅ keep only IDs
    const [category, setCategory] = useState<string[]>(["1", "2"]);
  
    const handleCategoryChange = (selected: any) => {
      if (!selected || selected.length === 0) {
        setCategory([]);
        return;
      }

      if (selected.some((opt: any) => opt.value === "0")) {
        setCategory(["0"]);
      } else {
        setCategory(selected.map((opt: any) => opt.value));
      }
    };


  const [showModal, setShowModal] = useState(false);
  const [modalData, setModalData] = useState<any[]>([]);

   const handleOpenModelPopupClick = async (executiveId: string[], statusId: string[]) => {
     setShowModal(true);
     setLoading(true);
     setCurrentPage(1); 
 
     const payload: getDailyExecutivewiseLeadReportClickablepayload = {
        fromDateVal: formatDate(fromDate),
        toDateVal: formatDate(toDate),
        userIdVal: user.id,
        tokenVal: user.access_token,
        typeVal: user.type,
        executiveIdVal: executiveId,
        leadStatusVal: statusId,
         catgoryIdVal: category,
          regionVal:region,
     };
 
     try {
       const response = await getDailyExecutivewiseLeadReportClickableDetails(payload); // create or import this API
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
         setModalData(response.data);
       }
     } catch (err) {
       toast.dismiss();
       toast.error("Something went wrong.");
       setModalData([]);
     } finally {
       setLoading(false);
     }
   };

   const handleCloseModal = () => {
    setShowModal(false);
    setModalData([]);  // or setModalData(null) if you prefer
  };
  const fetchData = async () => {
         if (!user) return;
    setLoading(true);
    setError("");

    const requestBody: getDailyExecutivewiseLeadReportPayload = {
     fromDateVal: formatDate(fromDate),
     toDateVal: formatDate(toDate),
      userIdVal: user.id,
      tokenVal: user.access_token,
      typeVal: user.type,
      regionVal:region,
      catgoryIdVal: category,
    };

   
     try {
     const response = await getDailyExecutivewiseLeadReportList(requestBody);
        
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
       toast.error('Something went wrong.');
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
  }, [fromDate, toDate]);

   

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
  return data.reduce((sum, row) => {
    const rowTotal = row.statuses
      .filter((s) => s.id !== EXCLUDED_STATUS_ID) // ❌ exclude Branch Assigned
      .reduce((r, s) => r + s.count, 0);
    return sum + rowTotal;
  }, 0);
}, [data]);

  const SortArrow = ({ columnKey }: { columnKey: string }) => {
    if (sortConfig.key !== columnKey) return null;
    return sortConfig.direction === "asc" ? <> ↑</> : <> ↓</>;
  };
const handleRegionChange = (selectedRegion:any) => {
   
    setRegion(selectedRegion);
  };

   

       const ExpandedComponent: React.FC<{ data: Lead }> = ({ data }) => {
        if (!data || typeof data !== 'object') {
          return <div className="text-muted mt-2">No additional data available.</div>;
        }

      const { comments, ...rest } = data;

        return (
          <Card className="my-3 border-0 shadow-sm">
            <Card.Body>
              <Card.Title className="mb-3">Full Details</Card.Title>
              <Row>
                <Col md={6}>
                  <div style={{ maxHeight: '300px', overflowY: 'auto' }}>
                    <Table striped bordered size="sm">
                      <tbody>
                        {Object.entries(rest)
                          .filter(([key]) =>
                            ![
                              'year','month','source_id', 'category_id', 'sub_category_id', 'product_id',
                              'country_id', 'status', 'branch_id', 'transferred_by',
                              'created_by', 'touch_status', 'executive_id', 'lead_status'
                            ].includes(key)
                          )
                          .map(([key, value]) => (
                            <tr key={key}>
                              <th style={{ textTransform: 'capitalize' }}>
                                {key.replace(/_/g, ' ')}
                              </th>
                              <td>{typeof value === 'object' && value !== null ? JSON.stringify(value) : String(value)}</td>
                            </tr>
                          ))}
                      </tbody>
                    </Table>
                  </div>
                </Col>

                <Col md={6}>
                  <h6 className="mb-2">Comments</h6>
                  <div style={{ maxHeight: '300px', overflowY: 'auto' }}>
                    {Array.isArray(comments) && comments.length > 0 ? (
                      comments.map((cmt, idx) => (
                        <Card key={idx} className="mb-2">
                          <Card.Body>
                            <Card.Text>{cmt.comment}</Card.Text>
                            {cmt.created_at && (
                              <small className="text-muted float-end">
                                {cmt.created_by_name} — {new Date(cmt.created_at).toLocaleString()}
                              </small>
                            )}
                          </Card.Body>
                        </Card>
                      ))
                    ) : (
                      <div className="text-muted">No comments available.</div>
                    )}
                  </div>
                </Col>
              </Row>
            </Card.Body>
          </Card>
        );
    };
 

  return (
    <Container fluid>
      <PageBreadcrumb title="Daily Wise Executive Report" />
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
            <Col md={2}>
            {/* <Form.Label>Quick Filter</Form.Label> */}
            <Form.Select
              value={selectedFilter}
              onChange={(e) => handleFilterChange(e.target.value)}
            >
              <option value="custom">Custom</option>
              <option value="today">Today</option>
              <option value="yesterday">Yesterday</option>
              <option value="last_10_days">Last 10 Days</option>
              <option value="this_month">This Month</option>
              <option value="all">All</option>
            </Form.Select>
          </Col>
           <Col md={2}>
            {/* <Form.Label>From Date</Form.Label> */}
            <DatePicker selected={fromDate} onChange={setFromDate} className="form-control" dateFormat="yyyy-MM-dd" />
            </Col>
            <Col md={2}>
            {/* <Form.Label>To Date</Form.Label> */}
            <DatePicker selected={toDate} onChange={setToDate} className="form-control" dateFormat="yyyy-MM-dd" />
            </Col>
              {(user.type === '1' || user.type === '2') && (
             <Col md={2}>
            <RegionSelect
              value={region}
            //   onChange={handleRegionChange}
              onChange={(val) => {
                  handleRegionChange(val?.value ?? 0);
                 
                }}
              label="Region"
              placeholder="All Regions"
            />

            
          </Col>
           )}
           {(user.type === '3' ) && (
             <Col md={2}>
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

            <Col md={3}>
             <Select
              options={options}
              isMulti
              value={options.filter((opt) => category.includes(opt.value))} // must pass objects
              onChange={handleCategoryChange}
              placeholder="Select categories..."
            />
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
            <Table className="styled-table mb-0 modal-lead-table" bordered hover >
              <thead>
                <tr>
                  <th onClick={() => requestSort("date")}>
                    Executive <SortArrow columnKey="date" />
                  </th>
                   <th onClick={() => requestSort("total")}>
                    Total <SortArrow columnKey="total" />
                  </th>
                  {allStatuses.map((status) => (
                    <th key={status} onClick={() => requestSort(status)}>
                      {status}
                      <SortArrow columnKey={status} />
                    </th>
                  ))}
                 
                </tr>
              </thead>
              <tbody>
                {sortedData.map(({ id, name, statuses }) => {
                  // ✅ Calculate row total (exclude Branch Assigned)
                  const rowTotal = statuses
                    .filter((s) => s.id !== EXCLUDED_STATUS_ID)
                    .reduce((sum, s) => sum + s.count, 0);

                  return (
                    <tr key={id}>
                      <td>{name}</td>

                      {/* ✅ TOTAL — same as footer (NOT clickable) */}
                      <td style={{ cursor: rowTotal > 0 ? "pointer" : "default", fontWeight: 600 }}
                      onClick={() => {
                                  if (rowTotal > 0) {
                                    const allStatusIds = statuses.map((s) => s.id);
                                    handleOpenModelPopupClick([id], allStatusIds); // ✅ id now exists
                                  }
                                }}
                      >
                        {rowTotal}
                      </td>

                      {/* Status columns */}
                      {allStatuses.map((statusName) => {
                        const status = statuses.find((s) => s.name === statusName);
                        const statusId = status?.id;
                        const count = status?.count ?? 0;

                        return (
                          <td
                            key={statusName}
                            style={{
                              cursor:
                                count > 0 && statusId !== EXCLUDED_STATUS_ID
                                  ? "pointer"
                                  : "default",
                              opacity: statusId === EXCLUDED_STATUS_ID ? 0.6 : 1,
                            }}
                            onClick={() => {
                              if (count > 0 && statusId) {
                                handleOpenModelPopupClick([id], [statusId]);
                              }
                            }}
                          >
                            {count}
                          </td>
                        );
                      })}
                    </tr>
                  );
                })}
              </tbody>


              <tfoot>
                <tr>
                  <td>Total</td>
                   <td
                    style={{
                      cursor: grandTotal > 0 ? "pointer" : "default",
                    }}
                    onClick={() => {
                      if (grandTotal > 0) {
                        const allIds = sortedData.map((row) => row.id);
                        const allSourceIds = sortedData
                          .flatMap((row) => row.statuses.map((s) => s.id))
                          .filter(Boolean);
                        handleOpenModelPopupClick(allIds, [...new Set(allSourceIds)]);
                      }
                    }}
                  >
                    {grandTotal}
                  </td>
                  {footerTotals.map((sum, idx) => {
                    const statusName = allStatuses[idx];
                    console.log(allStatuses);

                    // Collect all dates
                    const allIds = sortedData.map((row) => row.id);

                    // Collect all source IDs for this statusName across all rows
                    const sourceIds = sortedData
                      .flatMap((row) =>
                        row.statuses
                          .filter((s) => s.name === statusName && s.id)
                          .map((s) => s.id)
                      );

                    return (
                     <td
                      key={idx}
                      style={{
                        cursor:
                          sum > 0 && statusName !== EXCLUDED_STATUS_NAME
                            ? "pointer"
                            : "default",
                      
                      }}
                      onClick={() => {
                        if (
                          sum > 0 &&
                          statusName !== EXCLUDED_STATUS_NAME &&
                          sourceIds.length > 0
                        ) {
                          handleOpenModelPopupClick(allIds, [...new Set(sourceIds)]);
                        }
                      }}
                    >
                      {sum}
                    </td>

                    );
                  })}
                 
                </tr>
              </tfoot>

            </Table>
          </div>
        )}
      </div>

        <Modal show={showModal} onHide={handleCloseModal} size="xl" centered>
        <Modal.Header closeButton>
          <Modal.Title>Lead Details ({modalData.length})</Modal.Title>
        </Modal.Header>
        <Modal.Body style={{ maxHeight: '80vh', overflowY: 'auto' }}>
          {loading ? (
            <div className="text-center">
              <Spinner animation="border" />
              <p>Loading...</p>
            </div>
          ) : Array.isArray(modalData) && modalData.length > 0 ? (
            <DataTable
              columns={[
                {
                  name: "S.No",
                  cell: (_row, index) => (
                    <>{(currentPage - 1) * rowsPerPage + index + 1}</>
                  ),
                  width: "80px",
                },
                {
                  name: "Date",
                  selector: (row: Lead) => row.lead_date ?? '',
                  sortable: true,
                  format: (row: Lead) => (
                    <div style={{ lineHeight: "2" }}>
                      {row.lead_date && <div>L: {row.lead_date}</div>}
                      {row.followup_date && <div>F: {row.followup_date}</div>}
                      {row.partial_walkin_date && <div>PW: {row.partial_walkin_date}</div>}
                      {row.walkin_date && <div>W: {row.walkin_date}</div>}
                    </div>
                  ),
                  width: "120px",
                  grow: 2,
                },
                {
                  name: "Details",
                  selector: (row: Lead) => row.full_name ?? '',
                  sortable: true,
                  cell: (row) => (
                    <div style={{ whiteSpace: "normal", wordBreak: "break-word", maxWidth: "180px" }}>
                      <span>{row.full_name}</span>
                      <br /> <br />
                      <span>{row.email}</span>
                    </div>
                  ),
                   width: "130px",
                  grow: 2,
                },
                {
                  name: "Phone",
                  selector: (row: Lead) => row.phone_number ?? '-',
                  sortable: true,
                  width: "120px",
                  wrap: true,
                },
                {
                  name: "Status",
                  selector: (row: Lead) => row.lead_status_name ?? '-',
                  sortable: true,
                  wrap: true,
                },
                {
                  name: "Branch",
                  selector: (row: Lead) => row.branchname ?? '-',
                  sortable: true,
                  width: "120px",
                  wrap: true,
                },
                {
                  name: "Executive",
                  selector: (row: Lead) => row.executive_name ?? '-',
                  sortable: true,
                  width: "120px",
                  wrap: true,
                },
                
                {
                  name: "Source",
                  selector: (row: Lead) => row.source_name ?? '-',
                  sortable: true,
                   wrap: true,
                },
                {
                  name: "Product",
                  selector: (row: Lead) => row.category_name ?? '-',
                  sortable: true,
                   wrap: true,
                },
                {
                  name: "Country",
                  selector: (row: Lead) => row.country_name ?? '-',
                  sortable: true,
                   wrap: true,
                },
              ]}
              data={modalData}
              pagination
              paginationPerPage={rowsPerPage}
              paginationDefaultPage={currentPage}
              onChangePage={(page) => setCurrentPage(page)}
              onChangeRowsPerPage={(newPerPage, page) => {
                setRowsPerPage(newPerPage);
                setCurrentPage(page); // Update both
              }}
              responsive
              highlightOnHover
              dense
              expandableRows
              expandableRowsComponent={ExpandedComponent}
            />
          ) : (
            <p className="text-muted">No data found.</p>
          )}
        </Modal.Body>
        <Modal.Footer className="justify-content-end">
          <Button variant="secondary" onClick={handleCloseModal}>
            Close
          </Button>
        </Modal.Footer>
      </Modal>
    </Container>
  );
};

export default DailyExecutiveLeadReportTable;
