import { useState } from 'react';
import {
  Container,
  Form,
  Row,
  Col,
  Button,
  Alert,
  Card,
  Table
} from 'react-bootstrap';
import PageBreadcrumb from '@/components/PageBreadcrumb';
import type { SeachRequestPayload } from '@/services/leadservice';
import { getSeachRequestList } from '@/services/leadservice';
import type { Lead } from '@/types/lead.types';
import { toast } from 'react-toastify';
import { isAuthenticated, getUserInfo } from '@/utils/auth';
import DataTable from 'react-data-table-component'; // make sure to install & import this

const GlobalSearch: React.FC = () => {
  const user = isAuthenticated() ? getUserInfo() : null;
  const [search, setSearch] = useState<string>('');
  const [data, setData] = useState<Lead[]>([]);
  const [error, setError] = useState<string | null>(null);
  const [loading, setLoading] = useState<boolean>(false);
  const fetchLead = async () => {
    if (search.trim() === '') {
      toast.warning("Please enter a search value");
      return;
    }

    setLoading(true);
    setError(null);

    try {
      const payload: SeachRequestPayload = {
        searchVal: search,
        userIdVal: user.id,
        tokenVal: user.access_token,
        typeVal: user.type,
      };

      const response = await getSeachRequestList(payload);

      if (response.response === 'login_error') {
        toast.dismiss();
        toast.error(response.message);
      } else if (response.response === 'error') {
        setData([]);
        toast.dismiss();
        toast.error(response.message);
      } else if (response.response === 'success') {
        setData(response.data || []);
      }
    } catch (err) {
      setError('Failed to fetch leads. Please try again.');
      toast.dismiss();
      toast.error('Failed to fetch leads. Please try again.');
    } finally {
      setLoading(false);
    }
  };

  // Sample column definition (adjust to your Lead type structure)
  const columns = [
     { name: 'Date', selector: (row: Lead) => row.lead_date || '-', sortable: true, width: '110px' },
    { name: 'Name', selector: (row: Lead) => row.full_name || '-', sortable: true, width: '150px', wrap: true },
    { name: 'Phone', selector: (row: Lead) => row.phone_number || '-', sortable: true, width: '110px', wrap: true },
    { name: 'Source', selector: (row: Lead) => row.source_name || '-', sortable: true, wrap: true },
    { name: 'Category', selector: (row: Lead) => row.category_name || '-', sortable: true, wrap: true },
    { name: 'Product', selector: (row: Lead) => row.product_name || '-', sortable: true, width: '90px', wrap: true },
    { name: 'Branch', selector: (row: Lead) => row.branch_name || '-', sortable: true, width: '90px', wrap: true },
    { name: 'Status', selector: (row: Lead) => row.lead_status_name || '-', sortable: true, width: '110px', wrap: true },
    { name: 'Executive', selector: (row: Lead) => row.executive_name || '-', sortable: true, width: '150px', wrap: true },
  ];

 const ExpandedComponent: React.FC<{ data: Lead }> = ({ data }) => {
    if (!data || typeof data !== 'object') {
      return <div className="text-muted mt-2">No additional data available.</div>;
    }

    const { comments, ...rest } = data;
    console.log(comments);

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
                          'branch_id',
                          'transferred_by',
                          'created_by',
                          'touch_status',
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
              <div style={{ maxHeight: '250px', overflowY: 'auto' , width: '50%'}}>
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
 
 

  const SubHeaderComponent = <div>Showing {data.length} result(s)</div>;

  return (
    <Container>
      <PageBreadcrumb title="Global Search" />

      <Form className="mb-4">
        <Row className="align-items-end">
          <Col md={3}>
            <Form.Group controlId="formSearch">
              <Form.Control
                type="text"
                value={search}
                onChange={(e) => setSearch(e.target.value)}
                placeholder="Enter search"
              />
            </Form.Group>
          </Col>

          <Col md={2}>
            <Button variant="primary" onClick={fetchLead}>
              Search
            </Button>
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
        subHeader
        subHeaderComponent={SubHeaderComponent}
        responsive
        />

    </Container>
  );
};

export default GlobalSearch;
