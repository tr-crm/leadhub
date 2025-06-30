import React, { useEffect, useState } from 'react';
import { FaEye, FaEdit } from 'react-icons/fa';

import Select from 'react-select';
import DataTable from 'react-data-table-component';
import type { TableColumn } from 'react-data-table-component';
import {
  Container,
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
import { getLeadsList, updateLead,addLeadFollowUp } from '@/services/leadservice';
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
  productVal?:any;
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
  const [sourceFilter, setSourceFilter] = useState('all');
  const [statusFilter, setStatusFilter] = useState('all');
  const [execFilter, setExecFilter] = useState('all');

  const [sourceOptions, setSourceOptions] = useState<OptionType[]>([]);
  const [categoryOptions, setCategoryOptions] = useState<OptionType[]>([]);
  const [subCategoryOptions, setSubCategoryOptions] = useState<OptionType[]>([]);

  const user = getUserInfo();

  const handleExecChange = (opt: OptionType | null) => setExecFilter(opt?.value ?? 'all');
  const handleStatusChange = (opt: OptionType | null) => setStatusFilter(opt?.value ?? 'all');
  const handleFilterSourceChange = (opt: OptionType | null) => setSourceFilter(opt?.value ?? 'all');
const [showViewModal, setShowViewModal] = useState(false);
const [viewLead, setViewLead] = useState<Lead | null>(null);
const [followupDate, setFollowupDate] = useState<Date | null>(new Date());
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
    console.log(lead.lead_status);
    // const leadstatus=lead.lead_status;
  setViewLead(lead);
  setFollowupDate(new Date());
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
    leadStatusVal:followupStatus.value
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


  const columns: TableColumn<Lead>[] = [
  { name: 'ID', cell: (_, i) => i + 1, width: '70px' },
  { name: 'Date', selector: (r) => r.lead_date || '-', sortable: true, width: '110px' },
  { name: 'Name', selector: (r) => r.full_name || '-', sortable: true },
  { name: 'Phone', selector: (r) => r.phone_number || '-', sortable: true, width: '110px' },
  { name: 'Source', selector: (r) => r.source_name || '-', sortable: true },
  { name: 'Category', selector: (r) => r.category_name || '-', sortable: true },
  { name: 'Product', selector: (r) => r.product_name || '-', sortable: true, width: '90px' },
  { name: 'Country', selector: (r) => r.country_name || '-', sortable: true, width: '90px' },
    { name: 'Status', selector: (r) => r.lead_status_name || '-', sortable: true, width: '110px' },
  { name: 'Executive', selector: (r) => r.executive_name || '-', sortable: true },
  {
    name: 'Action',
    cell: (r) => (
      <div style={{ display: 'flex', gap: '8px' }}>
        <Button size="sm" variant="info" onClick={() => handleViewClick(r)}>
  <FaEye />
</Button>

        <Button size="sm" variant="primary" onClick={() => handleOpenModal(r)}>
          <FaEdit />
        </Button>
      </div>
    ),
    button: true,
    width: '120px',
  },
];

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

      <DataTable
        columns={columns}
        data={data}
        progressPending={loading}
        pagination
        highlightOnHover
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
          <StatusSelect
            value={followupStatus?.value || ''}
            onChange={(opt: OptionType | null) => setFollowupStatus(opt)}
            placeholder="Select Status"
          />
         
        </Form.Group>
          <Form.Group className="mb-3">
          <Form.Label>Follow-Up Date</Form.Label>
          <DatePicker
            selected={followupDate}
            onChange={setFollowupDate}
            className="form-control"
            dateFormat="yyyy-MM-dd hh:mm"
          />
         
        </Form.Group>
        

        <Form.Group className="mb-3">
          <Form.Label>Comment</Form.Label>
          <Form.Control
            as="textarea"
            rows={3}
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
