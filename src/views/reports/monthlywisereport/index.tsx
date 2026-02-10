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
  Card,
  Button
} from "react-bootstrap";
import Select from "react-select";
import PageBreadcrumb from "@/components/PageBreadcrumb";
import "../executivewiseleadreport/report.css";
import { getMonthlyWiseReportLeadsList, MonthlyWiseClickableReportRequest } from "@/services/reportsservice";
import type { MonthlyLead } from "@/services/reportsservice";
import type { MonthlyWiseReportPayload, MonthlyWiseClickableReportPayload } from "@/services/reportsservice";
import { getUserInfo } from "@/utils/auth";
import YearSelect from '@/components/yearselect';
  import { toast } from 'react-toastify';
import type { Lead } from '@/types/lead.types';
import DataTable from 'react-data-table-component';
import RegionSelect from '@/components/regionselect';


const MonthlyWiseReportTable: React.FC = () => {
  const now = new Date();
  const [selectedYear, setSelectedYear] = useState<string>(
    now.getFullYear().toString()
  );
  const EXCLUDED_STATUS_ID = "0"; // Branch Assigned

  const [data, setData] = useState<MonthlyLead[]>([]);
  const [loading, setLoading] = useState<boolean>(false);
  const [error, setError] = useState<string>("");
  const [currentPage, setCurrentPage] = useState(1);
  const [rowsPerPage, setRowsPerPage] = useState(10);
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
  const user = getUserInfo();

  const fetchData = async () => {
    setLoading(true);
    setError("");

    const payload: MonthlyWiseReportPayload = {
      yearVal: selectedYear,
      userIdVal: user.id,
      tokenVal: user.access_token,
      typeVal: user.type,
      catgoryIdVal: category,
      regionVal: region,
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

   
    // 1️⃣ sort state
  const [sortConfig, setSortConfig] = useState<{
    key: keyof MonthlyLead | string;
    direction: "asc" | "desc";
  } | null>(null);
  
  // 2️⃣ requestSort function
  const requestSort = (key: keyof MonthlyLead | string) => {
    setSortConfig((prev) => {
      if (prev?.key === key) {
        return {
          key,
          direction: prev.direction === "asc" ? "desc" : "asc",
        };
      }
      return { key, direction: "asc" };
    });
  };
  
  // 3️⃣ sorted data
  const sortedData = useMemo(() => {
    if (!sortConfig) return data;
  
    return [...data].sort((a, b) => {
      let aValue = 0;
      let bValue = 0;
  
      if (sortConfig.key === "month") {
        aValue = parseInt(a.year_month.split("-")[1], 10);
        bValue = parseInt(b.year_month.split("-")[1], 10);
      } else if (sortConfig.key === "total") {
        aValue = a.total;
        bValue = b.total;
      } else {
        const aStatus = a.statuses.find(s => s.name === sortConfig.key);
        const bStatus = b.statuses.find(s => s.name === sortConfig.key);
        aValue = aStatus?.count ?? 0;
        bValue = bStatus?.count ?? 0;
      }
  
      if (aValue < bValue) return sortConfig.direction === "asc" ? -1 : 1;
      if (aValue > bValue) return sortConfig.direction === "asc" ? 1 : -1;
      return 0;
    });
  }, [data, sortConfig]);
  
   const SortArrow = ({ columnKey }: { columnKey: string }) => {
    if (!sortConfig || sortConfig.key !== columnKey) return null;
    return sortConfig.direction === "asc" ? <> ↑</> : <> ↓</>;
  };


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
         .filter((s) => String(s.id) !== EXCLUDED_STATUS_ID) // ❌ exclude Branch Assigned
         .reduce((r, s) => r + s.count, 0);
       return sum + rowTotal;
     }, 0);
   }, [data]);
 

   const type=user.type;
      const getInitialRegionValue = (): string => {
        if (type === '1' || type === '2') {
          return '1';
        } else if (user.region) {
          return String(user.region);
        }
        return '0';
      };
       const [region, setRegion] = useState<string>(getInitialRegionValue());
       const handleRegionChange = (selectedRegion:any) => {
     
      setRegion(selectedRegion);
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
        yearVal: selectedYear,
        catgoryIdVal : category, // Use the same category filter
        regionVal: region,
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
    
      const handleCloseModal = () => {
        setShowModal(false);
        setModalData([]);
        setCurrentPage(1);   // ✅ reset to page 1
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
      <PageBreadcrumb title="Monthly Lead Report" />
      <div className="mt-4 bg-white p-4 shadow-sm rounded">
        <Form className="mb-3">
          <Row>
            <Col md={2}>

              <YearSelect value={selectedYear} onChange={(e) => setSelectedYear(e.target.value)} required />
            </Col>
             {(user.type === '1' || user.type === '2') && (
             <Col md={2}>
              <RegionSelect
                value={region}
                onChange={(val) => {
                    handleRegionChange(val?.value ?? 0);
                  
                  }}
                label="Region"
                placeholder="All Regions"
              />

            
          </Col>
           )}
             {((user.type === '5') && (user.region === '1')) && (
                <Col md={3}>
        
                  <Form.Select value={region} onChange={(e) => handleRegionChange(e.target.value)}>
                      <option value="0">All Region</option>
                      <option value="1">TR</option>
                    </Form.Select>
                </Col>
              )}
             <Col md={4}>
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
            <Table className="styled-table mb-0" bordered hover>
              <thead>
                <tr>
                  <th onClick={() => requestSort("month")}>
                    Date <SortArrow columnKey="month" />
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
                {sortedData.map(({ year_month, statuses }) => {
                 const monthNo = year_month.split("-")[1].padStart(2, "0");
                  const monthIndex = Number(monthNo) - 1;

                  const displayMonth = new Date(0, monthIndex).toLocaleString("default", {
                    month: "long",
                  });
                   const rowTotal = statuses
                    .filter((s) => String(s.id) !== EXCLUDED_STATUS_ID)
                    .reduce((sum, s) => sum + s.count, 0);

                  return (
                    <tr key={monthNo}>
                      <td>{displayMonth}</td>
                       <td
                        style={{
                          cursor: rowTotal > 0 ? "pointer" : "default",
                        }}
                        onClick={() => {
                          if (rowTotal > 0) {
                            const allStatusIds = statuses.map((s) => s.id).filter(Boolean);
                            handleOpenModelPopupClick(monthNo, allStatusIds);
                          }
                        }}
                      >
                        {rowTotal}
                      </td>
                      {allStatuses.map((statusName) => {
                        const status = statuses.find((s) => s.name === statusName);
                        const count = status?.count || 0;
                        const statusId = status?.id;

                        return (
                          <td
                            key={statusName}
                            style={{
                              cursor: count > 0  ? "pointer" : "default",
                            }}
                            onClick={() => {
                              if (count > 0 && statusId && statusId !== EXCLUDED_STATUS_ID) {
                                handleOpenModelPopupClick(monthNo, [statusId]);
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
                      if (grandTotal > 0 ) {
                        const allStatusIds = sortedData[0]?.statuses.map((s) => s.id).filter(Boolean) || [];
                        const allMonthValues = sortedData.map(d => {
                          const month = d.year_month.split("-")[1];
                          return month.padStart(2, "0");
                        });
                        handleOpenModelPopupClick(allMonthValues, allStatusIds);
                      }
                    }}
                  >
                    {grandTotal}
                  </td>
                  {footerTotals.map((sum, idx) => {
                    const statusId = sortedData[0]?.statuses[idx]?.id;

                    return (
                      <td
                        key={idx}
                        style={{
                          cursor: sum > 0 ? "pointer" : "default",
                        }}
                        onClick={() => {
                         if (sum > 0 && statusId !== EXCLUDED_STATUS_ID) {
                            const months = sortedData
                              .filter((item) => {
                                const status = item.statuses[idx];
                                return status && status.count > 0;
                              })
                              .map((item) => {
                                const month = item.year_month.split("-")[1]; // get month part
                                return month.padStart(2, "0");               // pad single-digit months
                              });

                            handleOpenModelPopupClick(months, [statusId]);
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

export default MonthlyWiseReportTable;
