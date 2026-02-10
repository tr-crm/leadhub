  import React, { useEffect, useState } from 'react';

  import DataTable from 'react-data-table-component';
  import {
    Container,
    Card,
    Table,
    Button,
    Form,
    Row,
    Col,
    Alert,
  } from 'react-bootstrap';
  import DatePicker from 'react-datepicker';
  import 'react-datepicker/dist/react-datepicker.css';
  import PageBreadcrumb from '@/components/PageBreadcrumb';
  import type {
    PartialWalkinPayload,
  } from '@/services/leadservice';
    import { getBranchList } from '@/services/generalservice';
  import { getPartialWalkinList} from '@/services/leadservice';
  import type { Lead } from '@/types/lead.types';
  import { getUserInfo } from '@/utils/auth';
    import Select from 'react-select';
  import SourceSelect from '@/components/soucrelist';
  import StatusSelect from '@/components/statusselect';
  import ExecutiveSelect from '@/components/executiveselect';
  import { getSavedFilters, addSavedFilters } from '@/services/userservice';

  interface OptionType {
    value: any;
    label: string;
  }

  
  const LeadsDataTable: React.FC = () => {
       const user = getUserInfo();
  const today = new Date(); 
    const [fromDate, setFromDate] = useState<Date | null>(today);
    const [toDate, setToDate] = useState<Date | null>(today);
    useEffect(() => {
      const fetchSavedFilters = async () => {
        try {
          const payload: any = {
            userIdVal: user.id,
            createdByVal: user.id,
            tokenVal: user.access_token,
            userTypeVal: user.type,
          };
          const res = await getSavedFilters(payload);
    
          if (res.response === "success" && res.data.length > 0) {
            const f = res.data[0];
            const parsedFrom = f.from_date ? new Date(f.from_date) : today;
            const parsedTo = f.to_date ? new Date(f.to_date) : today;
    
            setFromDate(parsedFrom);
            setToDate(parsedTo);
            setSelectedFilter(f.date_type || "all");
            setExecFilter(f.counselor_id);
            setStatusFilter(f.status_id);
          }
        } catch (err) {
          console.error("Error loading filters:", err);
        }
      };
    
      fetchSavedFilters();
    }, [user.id]);
    
    const [data, setData] = useState<Lead[]>([]);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState<string | null>(null);
  
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


    const [sourceFilter, setSourceFilter] = useState('0');
    const [statusFilter, setStatusFilter] = useState('0');
    const [execFilter, setExecFilter] = useState('0');
    const [currentPage, setCurrentPage] = useState(1);
    const [perPage, setPerPage] = useState(10);
      const [branchOptions, setBranchOptions] = useState<OptionType[]>([]);
      const [branch, setBranch] = useState('0');
 

    const handleExecChange = (opt: OptionType | null) => setExecFilter(opt?.value ?? '0');
    const handleStatusChange = (opt: OptionType | null) => setStatusFilter(opt?.value ?? '0');
    const handleFilterSourceChange = (opt: OptionType | null) => setSourceFilter(opt?.value ?? '0');
    const handleBranchChange = (opt: OptionType | null) => {
      setBranch(opt?.value ?? '0');
    };
    const showSourceFilter = false;  // set to false to hide
    const showStatusFilter = false;  // set to false to hide
 const [searchText, setSearchText] = useState('');
       const filteredData = (data || []).filter((row: Lead) =>
        Object.values(row)
          .join(' ')
          .toLowerCase()
          .includes(searchText.toLowerCase())
      );
        const SubHeaderComponent = (
          <Form.Control
            type="text"
            placeholder="Search..."
            value={searchText}
            onChange={(e) => setSearchText(e.target.value)}
            style={{ maxWidth: '300px' }}
          />
        );
        useEffect(() => {
            const fetchBranches = async () => {
              try {
                const branches = await getBranchList(user.id, user.access_token,'0',user.region,user.typ);
                const options = branches.map((bran: any) => ({
                  value: bran.id,
                  label: bran.display_name,
                }));
                setBranchOptions([{ value: '0', label: 'All Branch' }, ...options]);
              } catch (err) {
                console.error(err);
              }
            };
            fetchBranches();
          }, [user.id, user.access_token]);

    useEffect(() => {
      if (!user) return;
      if (!fromDate || !toDate) return;

      fetchLeads();
    }, [fromDate, toDate]);


    const fetchLeads = async () => {
      setLoading(true);
      setError(null);
      try {
        const payload: PartialWalkinPayload = {
          start: '200',
          sourceVal: sourceFilter,
          fromDateVal: formatDate(fromDate),
          toDateVal: formatDate(toDate),
          userIdVal: user.id,
          tokenVal: user.access_token,
          typeVal: user.type,
          leadstatusVal: statusFilter,
          executiveIdVal: execFilter,
          branchIdVal: branch,
        };
        const { data } = await getPartialWalkinList(payload);
        setData(data);
         
        try {
            const payload: any={
                userIdVal: user.id,
                createdByVal: user.id,
                tokenVal: user.access_token,
                userTypeVal: user.type,
                countryIdVal: user.country_id,
                counselorIdVal: execFilter,
                fromDateVal: fromDate?.toISOString().slice(0, 10) ?? '',
                toDateVal: toDate?.toISOString().slice(0, 10) ?? '',
                dateTypeVal: selectedFilter,
                statusIdVal: statusFilter,
            }
            const res = await addSavedFilters(payload);
  
            if (res.data?.response === "success" && res.data.data) {
              // const f = res.data.data;
              // setExecFilter(f.counselorIdVal || "0");
            }
          } catch (err) {
            console.error("Error loading filters:", err);
          }
          
      } catch {
        setError('Failed to fetch leads. Please try again.');
      } finally {
        setLoading(false);
      }
    };

     const columns = [
      {
        name: 'ID',
        cell: (_row: Lead, index: number) =>  (currentPage - 1) * perPage + index + 1,
        width: '70px',
      },
 
      
        { name: 'Partial Walkin Date', selector: (row: Lead) => row.partial_walkin_date || '-', sortable: true, width: '110px' },
      { name: 'Name', selector: (row: Lead) => row.full_name || '-', sortable: true },
      { name: 'Phone', selector: (row: Lead) => row.phone_number || '-', sortable: true, width: '110px' },
      { name: 'Source', selector: (row: Lead) => row.source_name || '-', sortable: true },
      { name: 'Category', selector: (row: Lead) => row.category_name || '-', sortable: true },
      { name: 'Product', selector: (row: Lead) => row.product_name || '-', sortable: true, width: '90px' },
      { name: 'Country', selector: (row: Lead) => row.country_name || '-', sortable: true, width: '90px' },
      { name: 'Branch Name', selector: (row: Lead) => row.branchname || '-', sortable: true, width: '110px' },
      { name: 'Status', selector: (row: Lead) => row.lead_status_name || '-', sortable: true, width: '120px', wrap: true },
      { name: 'Executive', selector: (row: Lead) => row.executive_name || '-', sortable: true },

    ];



    const ExpandedComponent: React.FC<{ data: Lead }> = ({ data }) => {
      if (!data || typeof data !== 'object') {
        return <div className="text-muted mt-2">No additional data available.</div>;
      }

      const { comments, ...rest } = data;

      return (
        <Card className="mt-3">
          <Card.Body>
            <Card.Title>Full Details</Card.Title>
             <Row>
              {/* Left Column: Details with scroll */}
                <Col md={4}>
                 <div style={{ maxHeight: '300px', overflowY: 'auto', width: '100%'  }}>
                 <Table striped bordered size="sm">
                    <tbody>
                      {Object.entries(rest)
                        .filter(([key]) =>
                          ![
                            'id',
                            'source_id',
                            'category_id',
                            'sub_category_id',
                            'product_id',
                            'country_id',
                            'status',
                            'touch_status',
                            'created_by',
                            'transferred_by',
                            'executive_id',
                            'lead_status'
                          ].includes(key)
                        )
                        .map(([key, value]) => (
                          <tr key={key}>
                            <th style={{ textTransform: 'capitalize' }}>
                              {key.replace(/_/g, ' ')}
                            </th>
                            <td>
                              {typeof value === 'object' && value !== null
                                ? JSON.stringify(value)
                                : String(value)}
                            </td>
                          </tr>
                        ))}
                    </tbody>
                  </Table>

                </div>
              </Col>

              {/* Right Column: Comments with scroll */}
              <Col md={6}>
                <h6>Comments</h6>
                <div style={{ maxHeight: '250px', overflowY: 'auto' }}>
                  {Array.isArray(comments) && comments.length > 0 ? (
                    comments.map((cmt, idx) => (
                      <Card key={idx} className="mb-2">
                        <Card.Body>

                          <Card.Text>{cmt.comment}</Card.Text>
                          {cmt.created_at && (
                            <small className="text-muted pull-right">
                              {cmt.created_by_name}  {new Date(cmt.created_at).toLocaleString()}
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
        {/* <h2>Leads List</h2> */}
          <PageBreadcrumb title={`Partial Walkin List (${Array.isArray(data) ? data.length : 0})`} />
        <Form className="mb-4">
          <Row className="align-items-end">
             <Col md={1}>
              <Form.Label>Quick Filter</Form.Label>
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
              <Form.Label>From Date</Form.Label>
              <DatePicker selected={fromDate} onChange={setFromDate} className="form-control" dateFormat="yyyy-MM-dd" />
            </Col>
            <Col md={2}>
              <Form.Label>To Date</Form.Label>
              <DatePicker selected={toDate} onChange={setToDate} className="form-control" dateFormat="yyyy-MM-dd" />
            </Col>
            {showSourceFilter && (
            <Col md={2}>
              <Form.Label>Source</Form.Label>
              <SourceSelect value={sourceFilter} onChange={handleFilterSourceChange} placeholder="All Sources" />
            </Col>
              )}
 {showStatusFilter && (
            <Col md={2}>
              <Form.Label>Status</Form.Label>
              <StatusSelect value={statusFilter} onChange={handleStatusChange} placeholder="All Status" />
            </Col>
              )}
            <Col md={2}>
              <Form.Label>Executive</Form.Label>
              <ExecutiveSelect value={execFilter} onChange={handleExecChange} showAllOption />
            </Col>
              <Col md={2}>
              <Form.Label>Branch</Form.Label>
              <Select
                options={branchOptions}
                value={branchOptions.find(opt => opt.value === branch)}
                onChange={handleBranchChange}
                
              />

            </Col>
            <Col md={2}>
              <Button variant="primary" onClick={fetchLeads}>Search</Button>
            </Col>
          </Row>
        </Form>

        {error && <Alert variant="danger">{error}</Alert>}

          <DataTable
            columns={columns}
            data={filteredData}
            progressPending={loading}
            expandableRows
            expandableRowsComponent={ExpandedComponent}
            pagination
            highlightOnHover
            pointerOnHover
              subHeader
   subHeaderComponent={SubHeaderComponent}
            responsive
            paginationPerPage={perPage}
            onChangePage={(page) => setCurrentPage(page)}
            onChangeRowsPerPage={(newPerPage, page) => {
              setPerPage(newPerPage);
              setCurrentPage(page);
            }}
          />

      </Container>
    );
  };

  export default LeadsDataTable;
