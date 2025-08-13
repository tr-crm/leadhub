import { useState } from 'react';
import {
  Container,
  Form,
  Row,
  Col,
  Button,
  Alert,
  Card,
  Table,
} from 'react-bootstrap';
import PageBreadcrumb from '@/components/PageBreadcrumb';
import type { SeachOldCrmRequestPayload } from '@/services/leadservice';
import { getSeachOldCrmRequestList } from '@/services/leadservice';
import type { Lead } from '@/types/lead.types';
import { toast } from 'react-toastify';
import DataTable from 'react-data-table-component';

const GlobalSearch: React.FC = () => {
  const [contactsearch, setContactsearch] = useState('');
  const [namesearch, setNamesearch] = useState('');
  const [data, setData] = useState<Lead[]>([]);
  const [error, setError] = useState<string | null>(null);
  const [loading, setLoading] = useState(false);

  const fetchLead = async () => {
    if (!contactsearch.trim() && !namesearch.trim()) {
      toast.warning('Please enter a phone number or name to search.');
      return;
    }

    setLoading(true);
    setError(null);

    try {
      const payload: SeachOldCrmRequestPayload = {
        contactnoVal: contactsearch,
        namesearchVal: namesearch,
      };

      const response = await getSeachOldCrmRequestList(payload);

      if (response.response === 'login_error') {
        toast.error(response.message);
      } else if (response.response === 'error') {
        setData([]);
        toast.error(response.message);
      } else if (response.response === 'success') {
        setData(response.data || []);
      }
    } catch (err) {
      setError('Failed to fetch leads. Please try again.');
      toast.error('Failed to fetch leads. Please try again.');
    } finally {
      setLoading(false);
    }
  };

  const resetForm = () => {
    setContactsearch('');
    setNamesearch('');
    setData([]);
    setError(null);
  };

  const columns = [
    { name: 'Date', selector: (row: Lead) => row.lead_date || '-', sortable: true, width: '110px' },
    { name: 'Fist Name', selector: (row: any) => row.firstname || '-', sortable: true, wrap: true, with: '110px' },
    { name: 'Last Name', selector: (row: any) => row.lastname || '-', sortable: true, wrap: true, with: '110px' },
    { name: 'Phone No', selector: (row: any) => row.primary_contactno || '-', sortable: true,with: '110px',  wrap: true },
    { name: 'Email', selector: (row: any) => row.personal_emailid || '-', sortable: true,with: '130px',  wrap: true },
    // New fields below
  { name: 'Lead Type', selector: (row: any) => row.leadtype || '-', sortable: true, wrap: true },
  { name: 'Counselor', selector: (row: any) => row.counselorname || '-', sortable: true, wrap: true },
  { name: 'Counselor Email', selector: (row: any) => row.counseloremail || '-', sortable: true, wrap: true },
  { name: 'Lead At (Current)', selector: (row: any) => row.leadatcurrent || '-', sortable: true, wrap: true },
  { name: 'Lead At (Department)', selector: (row: any) => row.leadatdept || '-', sortable: true, wrap: true },
  { name: 'Process Consultant', selector: (row: any) => row.processconsultant || '-', sortable: true, wrap: true },
  { name: 'Process Manager', selector: (row: any) => row.processmanager || '-', sortable: true, wrap: true },
  { name: 'Telecaller', selector: (row: any) => row.telecaller || '-', sortable: true, wrap: true },
  { name: 'Sales Consultant', selector: (row: any) => row.salesconsultant || '-', sortable: true, wrap: true },
  { name: 'ACS Branch', selector: (row: any) => row.acsbranch || '-', sortable: true, wrap: true },
  { name: 'Intake', selector: (row: any) => row.intake || '-', sortable: true, wrap: true },
  { name: 'PR Branch', selector: (row: any) => row.pr_branch_name || '-', sortable: true, wrap: true },
  { name: 'PR Enrollment Date', selector: (row: any) => row.pr_enrollment_date || '-', sortable: true, wrap: true },
  { name: 'PR Sales Lead Status', selector: (row: any) => row.pr_sales_lead_status || '-', sortable: true, wrap: true },
  { name: 'PR Walk-in Date', selector: (row: any) => row.pr_walkin_date || '-', sortable: true, wrap: true },
  { name: 'Immigration Counselor', selector: (row: any) => row.immigration_counselor || '-', sortable: true, wrap: true },
  { name: 'Current Status', selector: (row: any) => row.lead_current_status || '-', sortable: true, wrap: true },
  { name: 'Backend Consultant', selector: (row: any) => row.backendconsultant || '-', sortable: true, wrap: true },
  ];

  const SubHeaderComponent = <div>Showing {data.length} result(s)</div>;

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
            {/* Left Column */}
            <Col md={6}>
              <div style={{ maxHeight: '300px', overflowY: 'auto' }}>
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
                          'branch_id',
                          'transferred_by',
                          'created_by',
                          'touch_status',
                          'executive_id',
                          'lead_status',
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

            {/* Right Column: Comments */}
         <Col md={6}>
            <h6>Comments</h6>
            <div style={{ maxHeight: '300px', overflowY: 'auto' }}>
              {Array.isArray(comments) && comments.length > 0 ? (
                comments.map((cmt, idx) => (
                  <Card key={idx} className="mb-2">
                    <Card.Body>
                      <Card.Title>Comment #{idx + 1}</Card.Title>
                      <Card.Text>{cmt.comments}</Card.Text>
                      <small className="text-muted">
                        {cmt.counselorname || cmt.addedby || 'Unknown'} -{' '}
                        {cmt.date_time
                          ? new Date(cmt.date_time).toLocaleString()
                          : 'No date'}
                      </small>
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
    <Container>
      <PageBreadcrumb title="Global Search" />

      <Form className="mb-4">
        <Row className="align-items-end">
          <Col md={3}>
            <Form.Group controlId="searchPhone">
              <Form.Label>Phone Number</Form.Label>
              <Form.Control
                type="text"
                value={contactsearch}
                onChange={(e) => setContactsearch(e.target.value)}
                placeholder="Search by Phone"
              />
            </Form.Group>
          </Col>
          <Col md={3}>
            <Form.Group controlId="searchName">
              <Form.Label>Full Name</Form.Label>
              <Form.Control
                type="text"
                value={namesearch}
                onChange={(e) => setNamesearch(e.target.value)}
                placeholder="Search by Name"
              />
            </Form.Group>
          </Col>
          <Col md="auto">
            <Button variant="primary" onClick={fetchLead}>
              Search
            </Button>{' '}
            <Button variant="secondary" onClick={resetForm}>
              Reset
            </Button>
          </Col>
        </Row>
      </Form>

      {error && <Alert variant="danger">{error}</Alert>}

      <DataTable
        columns={columns}
        data={data}
        progressPending={loading}
        pagination
        highlightOnHover
        pointerOnHover
        subHeader
        subHeaderComponent={SubHeaderComponent}
        responsive
        expandableRows
        expandableRowsComponent={ExpandedComponent}
      />
    </Container>
  );
};

export default GlobalSearch;
