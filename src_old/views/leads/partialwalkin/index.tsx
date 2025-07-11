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
  import { getPartialWalkinList} from '@/services/leadservice';
  import type { Lead } from '@/types/lead.types';
  import { getUserInfo } from '@/utils/auth';
  
  import SourceSelect from '@/components/soucrelist';
  import StatusSelect from '@/components/statusselect';
  import ExecutiveSelect from '@/components/executiveselect';
  

  interface OptionType {
    value: any;
    label: string;
  }

  
  const LeadsDataTable: React.FC = () => {
    const [data, setData] = useState<Lead[]>([]);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState<string | null>(null);
    const [fromDate, setFromDate] = useState<Date | null>(() => {
      const d = new Date();
      d.setDate(d.getDate() - 7);
      return d;
    });

    const [toDate, setToDate] = useState<Date | null>(new Date());
    const [sourceFilter, setSourceFilter] = useState('0');
    const [statusFilter, setStatusFilter] = useState('0');
    const [execFilter, setExecFilter] = useState('0');

    const user = getUserInfo();

    const handleExecChange = (opt: OptionType | null) => setExecFilter(opt?.value ?? '0');
    const handleStatusChange = (opt: OptionType | null) => setStatusFilter(opt?.value ?? '0');
    const handleFilterSourceChange = (opt: OptionType | null) => setSourceFilter(opt?.value ?? '0');
const showSourceFilter = false;  // set to false to hide
const showStatusFilter = false;  // set to false to hide


    const fetchLeads = async () => {
      setLoading(true);
      setError(null);
      try {
        const payload: PartialWalkinPayload = {
          start: '200',
          sourceVal: sourceFilter,
          fromDateVal: fromDate?.toISOString().slice(0, 10) ?? '',
          toDateVal: toDate?.toISOString().slice(0, 10) ?? '',
          userIdVal: user.id,
          tokenVal: user.access_token,
          typeVal: user.type,
          leadstatusVal: statusFilter,
          executiveIdVal: execFilter,
        };
        const { data } = await getPartialWalkinList(payload);
        setData(data);
      } catch {
        setError('Failed to fetch leads. Please try again.');
      } finally {
        setLoading(false);
      }
    };

    useEffect(() => {
      fetchLeads();
    }, [sourceFilter, statusFilter, fromDate, toDate, execFilter]);
    


    



    const columns = [
      {
        name: 'ID',
        cell: (_row: Lead, index: number) => index + 1,
        width: '70px',
      },
 
      
        { name: 'Partial Walkin Date', selector: (row: Lead) => row.followup_date || '-', sortable: true, width: '110px' },
      { name: 'Name', selector: (row: Lead) => row.full_name || '-', sortable: true },
      { name: 'Phone', selector: (row: Lead) => row.phone_number || '-', sortable: true, width: '110px' },
      { name: 'Source', selector: (row: Lead) => row.source_name || '-', sortable: true },
      { name: 'Category', selector: (row: Lead) => row.category_name || '-', sortable: true },
      { name: 'Product', selector: (row: Lead) => row.product_name || '-', sortable: true, width: '90px' },
      { name: 'Country', selector: (row: Lead) => row.country_name || '-', sortable: true, width: '90px' },
      { name: 'Status', selector: (row: Lead) => row.lead_status_name || '-', sortable: true, width: '110px' },
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
              <Col md={6}>
                <div style={{ maxHeight: '300px', overflowY: 'auto' }}>
                  <Table striped bordered size="sm">
                    <tbody>
                      {Object.entries(rest).map(([key, value]) => (
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
        <PageBreadcrumb title="Partial Walkin List" />
        <Form className="mb-4">
          <Row className="align-items-end">
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
              <Button variant="primary" onClick={fetchLeads}>Search</Button>
            </Col>
          </Row>
        </Form>

        {error && <Alert variant="danger">{error}</Alert>}

          <DataTable
            columns={columns}
            data={data}
            progressPending={loading}
            expandableRows
            expandableRowsComponent={ExpandedComponent}
            pagination
            highlightOnHover
            pointerOnHover
            responsive
          />

      </Container>
    );
  };

  export default LeadsDataTable;
