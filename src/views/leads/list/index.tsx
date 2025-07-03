import React, { useEffect, useState } from 'react';
import { FaEye, FaEdit } from 'react-icons/fa';

import Select from 'react-select';
import DataTable from 'react-data-table-component';
import { format } from 'date-fns';
import {
  Container,
  Card,
  Table,
  Modal,
  Button,
  Form,
  Row,
  Col,
  Spinner,
  Alert,
} from 'react-bootstrap';
import DatePicker from 'react-datepicker';
import 'react-datepicker/dist/react-datepicker.css';

import type {
  LeadRequestPayload,
  LeadUpdateRequestPayload,
} from '@/services/leadservice';
import { getLeadsList, updateLead, addLeadFollowUp } from '@/services/leadservice';
import { SourceList, getCategoryList, getSubCategoryList } from '@/services/generalservice';
import type { Lead } from '@/types/lead.types';
import { getUserInfo } from '@/utils/auth';

import SourceSelect from '@/components/soucrelist';
import StatusSelect from '@/components/statusselect';
import ExecutiveSelect from '@/components/executiveselect';

interface OptionType {
  value: any;
  label: string;
}

interface LeadFormData {
  leadDateVal?: string;
  firstNameVal?: string;
  lastNameVal?: string;
  emailAddressVal?: string;
  phoneNumberVal?: string;
  sourceVal?: any;
  categoryVal?: any;
  subCategoryVal?: any;
  productVal?: any;
}

const LeadsDataTable: React.FC = () => {
  const [data, setData] = useState<Lead[]>([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);
  const [showModal, setShowModal] = useState(false);
  const [selectedLead, setSelectedLead] = useState<Lead | null>(null);
  const [formData, setFormData] = useState<LeadFormData>({});
  const [isLoading, setIsLoading] = useState(false);

  const [fromDate, setFromDate] = useState<Date | null>(() => {
    const d = new Date();
    d.setDate(d.getDate() - 7);
    return d;
  });
  const [toDate, setToDate] = useState<Date | null>(new Date());
  const [sourceFilter, setSourceFilter] = useState('0');
  const [statusFilter, setStatusFilter] = useState('0');
  const [execFilter, setExecFilter] = useState('0');

  const [sourceOptions, setSourceOptions] = useState<OptionType[]>([]);
  const [categoryOptions, setCategoryOptions] = useState<OptionType[]>([]);
  const [subCategoryOptions, setSubCategoryOptions] = useState<OptionType[]>([]);

  const user = getUserInfo();

  const handleExecChange = (opt: OptionType | null) => setExecFilter(opt?.value ?? '0');
  const handleStatusChange = (opt: OptionType | null) => setStatusFilter(opt?.value ?? '0');
  const handleFilterSourceChange = (opt: OptionType | null) => setSourceFilter(opt?.value ?? '0');
  const [showViewModal, setShowViewModal] = useState(false);
  const [viewLead, setViewLead] = useState<Lead | null>(null);
  const [followupDate, setFollowupDate] = useState<Date | null>();
   const [walkinDate, setWalkinDate] = useState<Date | null>();
  const [followupStatus, setFollowupStatus] = useState<OptionType | null>(null);
  const [followupComment, setFollowupComment] = useState('');


  const fetchLeads = async () => {
    setLoading(true);
    setError(null);
    try {
      const payload: LeadRequestPayload = {
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
      const { data } = await getLeadsList(payload);
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

  useEffect(() => {
    const fetchSources = async () => {
      try {
        const sources = await SourceList(user.id, user.access_token);
        const options = sources.map((src: any) => ({
          value: src.id,
          label: src.display_name,
        }));
        setSourceOptions([{ value: 0, label: 'Select Source' }, ...options]);
      } catch (err) {
        console.error(err);
      }
    };
    fetchSources();
  }, [user.id, user.access_token]);

  useEffect(() => {
    const fetchCategories = async () => {
      try {
        const categories = await getCategoryList(user.id, user.access_token);
        const options = categories.map((cat: any) => ({
          value: cat.id,
          label: cat.display_name,
        }));
        setCategoryOptions([{ value: 0, label: 'Select Category' }, ...options]);
      } catch (err) {
        console.error('Failed to fetch categories', err);
      }
    };
    fetchCategories();
  }, [user.id, user.access_token]);

  const fetchSubCategories = async (categoryId: number) => {
    if (!categoryId) return;
    try {
      const subCategories = await getSubCategoryList(user.id, user.access_token, categoryId);
      const options = subCategories.map((sub: any) => ({
        value: sub.id,
        label: sub.display_name,
      }));
      setSubCategoryOptions([{ value: 0, label: 'Select Sub Category' }, ...options]);
    } catch (err) {
      console.error('Failed to fetch subcategories', err);
    }
  };

  useEffect(() => {
    const categoryId = formData.categoryVal?.value;
    if (categoryId) {
      fetchSubCategories(categoryId);
    }
  }, [formData.categoryVal]);

  const handleOpenModal = async (lead: Lead) => {
    const [firstName = '', lastName = ''] = (lead.full_name || '').split(' ');
    const matchedSource = sourceOptions.find((opt) => opt.value == lead.source_id) ?? null;
    const matchedCategory = categoryOptions.find((opt) => opt.value == lead.category_id) ?? null;
    // const matchedSubCategory = subCategoryOptions.find(
    //       (opt) => opt.value == lead.sub_category_id
    //     ) ?? null;

    setFormData({
      leadDateVal: lead.lead_date || '',
      firstNameVal: firstName,
      lastNameVal: lastName,
      emailAddressVal: lead.email || '',
      phoneNumberVal: lead.phone_number || '',
      sourceVal: matchedSource,
      categoryVal: matchedCategory,
      subCategoryVal: "",
    });

    await fetchSubCategories(lead.category_id);
    //  console.log(subCategoryOptions);
    const matchedSubCategory = subCategoryOptions.find((opt) => {

      return Number(opt.value) == Number(lead.sub_category_id);
    }) ?? null;



    setFormData((prev) => ({
      ...prev,
      subCategoryVal: matchedSubCategory
    }));

    setSelectedLead(lead);
    setShowModal(true);
  };

  const handleCloseModal = () => {
    setShowModal(false);
    setSelectedLead(null);
    setFormData({});
  };
  const handleViewClick = (lead: Lead) => {
    // console.log(lead.lead_status);
    // const leadstatus=lead.lead_status;
    setViewLead(lead);
    setFollowupDate(null);
    setWalkinDate(null);
    setFollowupStatus(null);
    setFollowupComment('');
    setShowViewModal(true);
  };

  const handleCloseViewModal = () => {
    setShowViewModal(false);
    setViewLead(null);
  };


  const handleFormChange = (key: keyof LeadFormData, value: any) =>
    setFormData((prev) => ({ ...prev, [key]: value }));

  const onSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    handleUpdateLead();
  };

  const handleUpdateLead = async () => {
    setIsLoading(true);
    try {
      if (!selectedLead) return;

      const payload: LeadUpdateRequestPayload = {
        id: selectedLead.id,
        leadDateVal: formData.leadDateVal ?? '',
        firstNameVal: formData.firstNameVal ?? '',
        lastNameVal: formData.lastNameVal ?? '',
        emailAddressVal: formData.emailAddressVal ?? '',
        phoneNumberVal: formData.phoneNumberVal ?? '',
        sourceVal: formData.sourceVal?.value ?? '',
        categoryVal: formData.categoryVal?.value ?? '',
        subCategoryVal: formData.subCategoryVal?.value ?? '',
         userIdVal: user.id,
      tokenVal: user.access_token,
      };

      await updateLead(payload);
      handleCloseModal();
      fetchLeads();
    } catch {
      alert('Failed to update lead.');
    } finally {
      setIsLoading(false);
    }
  };
  const submitFollowUp = async () => {
    if (!viewLead || !followupDate || !followupStatus) {
      alert('Please fill all required fields');
      return;
    }

    const payload = {
      leadIdVal: viewLead.id,
      followupDateVal: followupDate.toISOString().slice(0, 10),
      commentVal: followupComment,
      createdByVal: user.id,
      leadStatusVal: followupStatus.value,
       userIdVal: user.id,
      tokenVal: user.access_token,
    };

    try {
      await addLeadFollowUp(payload);
      alert('Follow-up saved!');
      handleCloseViewModal();
    } catch (err: any) {
      console.error(err);
      alert(err.message || 'Failed to save follow-up');
    }
  };


  const columns = [
    {
      name: 'ID',
      cell: (_row: Lead, index: number) => index + 1,
      width: '70px',
    },
    {
      name: 'Action',
      cell: (row: Lead) => (
        <div style={{ display: 'flex', gap: '8px' }}>
          <Button size="sm" variant="info" onClick={() => handleViewClick(row)}>
            <FaEye />
          </Button>

          <Button size="sm" variant="primary" onClick={() => handleOpenModal(row)}>
            <FaEdit />
          </Button>
        </div>
      ),
      button: true,
      width: '120px',
    },
    { name: 'Date', selector: (row: Lead) => row.lead_date || '-', sortable: true, width: '110px' },
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
  console.log(comments);

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






  // const ExpandedComponent: React.FC<{ data: Lead }> = ({ data }) => {
  //   const details = data;
  //   return (
  //     <div
  //       style={{
  //         backgroundColor: '#F9F9F9',
  //         padding: '15px',
  //         borderRadius: '5px',
  //         border: '1px solid #ddd',
  //         marginTop: '10px',
  //       }}
  //     >
  //       <strong>Full Details:</strong>
  //       {details && typeof details === 'object' ? (
  //         <table className="table table-sm mt-2">
  //           <tbody>
  //             {Object.entries(details).map(([key, value], index) => (
  //               <tr key={`${key}-${index}`}>
  //                 <th style={{ width: '150px', textTransform: 'capitalize' }}>{key.replace(/_/g, ' ')}</th>
  //                 <td>{String(value)}</td>
  //               </tr>
  //             ))}
  //           </tbody>
  //         </table>
  //       ) : (
  //         <div className="text-muted mt-2">No additional data available.</div>
  //       )}
  //     </div>
  //   );
  // };

  return (
    <Container fluid>
      <h2>Leads List</h2>
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
          <Col md={2}>
            <Form.Label>Source</Form.Label>
            <SourceSelect value={sourceFilter} onChange={handleFilterSourceChange} placeholder="All Sources" />
          </Col>
          <Col md={2}>
            <Form.Label>Status</Form.Label>
            <StatusSelect value={statusFilter} onChange={handleStatusChange} placeholder="All Status" />
          </Col>
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

      {/* <DataTable
        columns={columns}
        data={data}
        progressPending={loading}
        pagination
        highlightOnHover
        responsive
      /> */}
      <DataTable
       
        columns={columns}
        data={data}
        progressPending={loading}
        expandableRows
        expandableRowsComponent={ExpandedComponent}
        pagination
        selectableRows
        highlightOnHover
        pointerOnHover
        responsive
      />

      <Modal show={showModal} onHide={handleCloseModal} size="lg" centered>
        <Modal.Header closeButton>
          <Modal.Title>Update Lead</Modal.Title>
        </Modal.Header>
        <Modal.Body>
          {selectedLead ? (
            <Form onSubmit={onSubmit} className="mt-3">
              <Form.Group className="mb-3" controlId="leadDateVal">
                <Form.Label>Lead Date</Form.Label>
                <Form.Control
                  type="date"
                  value={formData.leadDateVal || ''}
                  onChange={(e) => handleFormChange('leadDateVal', e.target.value)}
                  required
                />
              </Form.Group>
              <Row>
                <Col md={6}>
                  <Form.Group controlId="firstNameVal">
                    <Form.Label>First Name</Form.Label>
                    <Form.Control
                      type="text"
                      value={formData.firstNameVal || ''}
                      onChange={(e) => handleFormChange('firstNameVal', e.target.value)}
                      required
                    />
                  </Form.Group>
                </Col>
                <Col md={6}>
                  <Form.Group controlId="lastNameVal">
                    <Form.Label>Last Name</Form.Label>
                    <Form.Control
                      type="text"
                      value={formData.lastNameVal || ''}
                      onChange={(e) => handleFormChange('lastNameVal', e.target.value)}
                    />
                  </Form.Group>
                </Col>
              </Row>
              <Form.Group controlId="emailAddressVal" className="mb-3">
                <Form.Label>Email</Form.Label>
                <Form.Control
                  type="email"
                  value={formData.emailAddressVal || ''}
                  onChange={(e) => handleFormChange('emailAddressVal', e.target.value)}
                  required
                />
              </Form.Group>
              <Form.Group controlId="phoneNumberVal" className="mb-3">
                <Form.Label>Phone</Form.Label>
                <Form.Control
                  type="tel"
                  value={formData.phoneNumberVal || ''}
                  onChange={(e) => handleFormChange('phoneNumberVal', e.target.value)}
                  required
                />
              </Form.Group>
              <Form.Group controlId="sourceVal" className="mb-3">
                <Form.Label>Source</Form.Label>
                <Select
                  options={sourceOptions}
                  value={formData.sourceVal}
                  onChange={(opt) => handleFormChange('sourceVal', opt)}
                  placeholder="Select Source"
                />
              </Form.Group>
              <Form.Group controlId="categoryVal" className="mb-3">
                <Form.Label>Category</Form.Label>
                <Select
                  options={categoryOptions}
                  value={formData.categoryVal}
                  onChange={(opt) => handleFormChange('categoryVal', opt)}
                  placeholder="Select Category"
                />
              </Form.Group>
              <Form.Group controlId="subCategoryVal" className="mb-3">
                <Form.Label>Sub Category</Form.Label>
                <Select
                  options={subCategoryOptions}
                  value={formData.subCategoryVal}
                  onChange={(opt) => handleFormChange('subCategoryVal', opt)}
                  placeholder="Select Sub Category"
                />
              </Form.Group>
              <Form.Group controlId="productVal" className="mb-3">
                <Form.Label>Product</Form.Label>
                <Select
                  options={categoryOptions}
                  value={formData.productVal}
                  onChange={(opt) => handleFormChange('productVal', opt)}
                  placeholder="Select Product"
                />
              </Form.Group>
              <Button variant="primary" type="submit" disabled={isLoading}>
                {isLoading ? <Spinner animation="border" size="sm" /> : 'Update Lead'}
              </Button>
            </Form>
          ) : (
            <Spinner />
          )}
        </Modal.Body>
      </Modal>
      <Modal show={showViewModal} onHide={handleCloseViewModal} centered>
        <Modal.Header closeButton>
          <Modal.Title>Lead Follow-Up</Modal.Title>
        </Modal.Header>
        <Modal.Body>
          {viewLead ? (
            <Form onSubmit={(e) => {
              e.preventDefault();
              submitFollowUp();
            }}>
              <Form.Group className="mb-3">
                <Form.Label>Status</Form.Label>
                <Form.Select
                  value={followupStatus?.value || ''} 
                  onChange={(e) => {
                    const val = e.target.value;
                    setFollowupStatus(val ? { value: val, label: val } : null);
                  }}
                  required
                >
                  <option value="" disabled>
                    Select Status
                  </option>
                  <option value="2">Follow Up</option>
                  <option value="3">Partial Walk-In</option>
                  <option value="5">Not Interested</option>
                  <option value="6">Joined Some Where Else</option>
                </Form.Select>

              </Form.Group>
               {followupStatus?.value === '2' && (
              <Form.Group className="mb-3">
                <Form.Label>Follow-Up Date</Form.Label>
                

                <Form.Control
                  type="date" required
                  value={followupDate ? format(followupDate, 'yyyy-MM-dd') : ''}
                  onChange={(e: React.ChangeEvent<HTMLInputElement>) => {
                    const value = e.target.value;
                    setFollowupDate(value ? new Date(value) : null);
                  }}
                />

              </Form.Group>
              )}

              {followupStatus?.value === '3' && (
              <Form.Group className="mb-3">
                <Form.Label>WalkIn Date</Form.Label>
                <Form.Control
                  type="date" required
                  value={walkinDate ? format(walkinDate, 'yyyy-MM-dd') : ''}
                  onChange={(e: React.ChangeEvent<HTMLInputElement>) => {
                    const value = e.target.value;
                    setWalkinDate(value ? new Date(value) : null);
                  }}
                />

              </Form.Group>
               )}



              <Form.Group className="mb-3">
                <Form.Label>Comment</Form.Label>
                <Form.Control
                  as="textarea"
                  rows={4}
                  value={followupComment}
                  onChange={(e) => setFollowupComment(e.target.value)}
                  required
                />
              </Form.Group>

              <Button type="submit" variant="primary">
                Save Follow-Up
              </Button>
            </Form>
          ) : (
            <Spinner />
          )}
        </Modal.Body>
      </Modal>

    </Container>
  );
};

export default LeadsDataTable;
