import { useState, useEffect, useMemo, useRef } from 'react';
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
import PageBreadcrumb from '@/components/PageBreadcrumb';
import type {
  LeadRequestPayload,
  LeadUpdateRequestPayload,
} from '@/services/leadservice';
import { getLeadsList, updateLead, addLeadFollowUp } from '@/services/leadservice';
import { SourceList, getCategoryList, getSubCategoryList, getBranchList, ProductList, ExecutiveList, StatusList,getQualityList } from '@/services/generalservice';
import type { Lead } from '@/types/lead.types';
import { toast } from 'react-toastify';
import SourceSelect from '@/components/soucrelist';
import StatusSelect from '@/components/statusselect';
import ExecutiveSelect from '@/components/executiveselect';
import LogoutOverlay from '@/components/LogoutOverlay';
import { isAuthenticated, getUserInfo, logout } from '@/utils/auth';

interface OptionType {
  value: any;
  label: string;
}

// interface LeadFormData {
//   leadDateVal?: string;
//   firstNameVal?: string;
//   lastNameVal?: string;
//   emailAddressVal?: string;
//   phoneNumberVal?: string;
//   sourceVal?: any;
//   categoryVal?: any;
//   subCategoryVal?: any;
//   productVal?: any;
//   branchVal?:any;
//   executiveIdVal?:any;
//   leadStatusVal:any;
// }
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
  branchVal?: any;
  executiveIdVal?: any;
  leadStatusVal?: any; // ← THIS is required
  qualityscoreVal?:any;
}


const LeadsDataTable: React.FC = () => {
    const [showLogoutLoader, setShowLogoutLoader] = useState<boolean>(false);

  const [data, setData] = useState<Lead[]>([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);
  const [showModal, setShowModal] = useState(false);
  const [selectedLead, setSelectedLead] = useState<Lead | null>(null);
  const [formData, setFormData] = useState<LeadFormData>({});



  const [isLoading, setIsLoading] = useState(false);
  const [selectedRows, setSelectedRows] = useState([]);
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
  const [ProductOptions, setProductOptions] = useState<OptionType[]>([]);
  const [branchOptions, setBranchOptions] = useState<OptionType[]>([]);
  const [loadingFollowUp, setLoadingFollowUp] = useState(false);
  const [executiveOptions, setExecutiveOptions] = useState<OptionType[]>([]);
  const [leadstatusOptions, setleadstatusOptions] = useState<OptionType[]>([]);
  const [qualityscoreOptions, setQualityscoreOptions] = useState<OptionType[]>([]);


  // Memoize user so it doesn't cause continuous re-renders/useEffect triggers
    const user = useMemo(() => (isAuthenticated() ? getUserInfo() : null), []);
  
    // Ref to prevent double fetch in Strict Mode or repeated effect calls
    const didFetchRef = useRef(false);
  
    useEffect(() => {
      if (!user) {
        setShowLogoutLoader(true);
      }
    }, [user]);
  const usertype = Number(user.type);
  const showTable = Number(usertype === 1) || Number(usertype === 2) || Number(usertype === 3);

  const handleExecChange = (opt: OptionType | null) => setExecFilter(opt?.value ?? '0');
  const handleStatusChange = (opt: OptionType | null) => setStatusFilter(opt?.value ?? '0');
  const handleFilterSourceChange = (opt: OptionType | null) => setSourceFilter(opt?.value ?? '0');
  const [showViewModal, setShowViewModal] = useState(false);
  const [viewLead, setViewLead] = useState<Lead | null>(null);
  const [followupDate, setFollowupDate] = useState<Date | null>();
  const [walkinDate, setWalkinDate] = useState<Date | null>();
  const [followupStatus, setFollowupStatus] = useState<OptionType | null>(null);
  const [followupComment, setFollowupComment] = useState('');
  const [followupBranch, setFollowupBranch] = useState<OptionType | null>(null);
  const [followupQualityScore, setFollowupQualityScore] = useState<OptionType | null>(null);



  const fetchLeads = async () => {
     if (!user) return;
    setLoading(true);
    setError(null);
    try {
      const payload: LeadRequestPayload = {
        start: '1000',
        sourceVal: sourceFilter,
        fromDateVal: fromDate?.toISOString().slice(0, 10) ?? '',
        toDateVal: toDate?.toISOString().slice(0, 10) ?? '',
        userIdVal: user.id,
        tokenVal: user.access_token,
        typeVal: user.type,
        leadstatusVal: statusFilter,
        executiveIdVal: execFilter,
      };
      // const { data } = await getLeadsList(payload);
        const response = await getLeadsList(payload);
      
      if (response.response === 'login_error') {
         toast.dismiss();
        toast.error(response.message);
        setShowLogoutLoader(true);
        return;
      } else if (response.response === 'error') {
         setData([]);  
          toast.dismiss();
        toast.error(response.message);
      } else if (response.response === 'success') {
         setData([]);  
      setData(response.data);
      }
    } catch {
      setError('Failed to fetch leads. Please try again.');
       toast.dismiss();
      toast.error('Failed to fetch leads. Please try again.');
    } finally {
      setLoading(false);
    }
  };

   useEffect(() => {
    if (!user) return;

    // Only fetch if we haven't already fetched for current params
    if (!didFetchRef.current) {
      fetchLeads();
      didFetchRef.current = true;
    }
  }, [sourceFilter, statusFilter, fromDate, toDate, execFilter]);
   useEffect(() => {
    const fetchQualityScore = async () => {
      try {
        const quality = await getQualityList(user.id, user.access_token);
        const options = quality.map((qua: any) => ({
          value: qua.id,
          label: qua.display_name,
        }));
        setQualityscoreOptions([{ value: null, label: 'Select Quality Score' }, ...options]);
      } catch (err) {
        console.error(err);
      }
    };
    fetchQualityScore();
  }, [user.id, user.access_token]);
  useEffect(() => {
    const fetchExecutives = async () => {
      try {
        const executives = await ExecutiveList(user.id, user.access_token, user.region, user.type);
        const options = executives.map((exe: any) => ({
          value: exe.id,
          label: exe.display_name,
        }));
        setExecutiveOptions([{ value: null, label: 'Select Executive' }, ...options]);
      } catch (err) {
        console.error(err);
      }
    };
    fetchExecutives();
  }, [user.id, user.access_token, user.region, user.type]);
  useEffect(() => {
    const fetchBranches = async () => {
      try {
        const branches = await getBranchList(user.id, user.access_token);
        const options = branches.map((bran: any) => ({
          value: bran.id,
          label: bran.display_name,
        }));
        setBranchOptions([{ value: null, label: 'Select Branch' }, ...options]);
      } catch (err) {
        console.error(err);
      }
    };
    fetchBranches();
  }, [user.id, user.access_token]);
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
    const fetchLeadStatus = async () => {
      try {
        const leadstatus = await StatusList(user.id, user.access_token);
        const options = leadstatus.map((leadsts: any) => ({
          value: leadsts.id,
          label: leadsts.display_name,
        }));
        setleadstatusOptions([{ value: null, label: 'Select Lead Status' }, ...options]);
      } catch (err) {
        console.error(err);
      }
    };
    fetchLeadStatus();
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
  const fetchProducts = async (categoryId: number) => {
    if (!categoryId) return;
    try {
      const getProductList = await ProductList(user.id, user.access_token, '0', categoryId);
      const options = getProductList.map((prod: any) => ({
        value: prod.id,
        label: prod.display_name,
      }));
      setProductOptions([{ value: 0, label: 'Select Product' }, ...options]);
    } catch (err) {
      console.error('Failed to fetch product', err);
    }
  };

  useEffect(() => {
    const categoryId = formData.categoryVal?.value;
    if (categoryId) {
      fetchProducts(categoryId);
    }
  }, [formData.categoryVal]);

  const handleOpenModal = async (lead: Lead) => {
    const [firstName = '', lastName = ''] = (lead.full_name || '').split(' ');
    const matchedSource = sourceOptions.find((opt) => opt.value == lead.source_id) ?? null;
    const matchedCategory = categoryOptions.find((opt) => opt.value == lead.category_id) ?? null;

    // Fetch sub-categories and products manually and use them
    const subCategories = await getSubCategoryList(user.id, user.access_token, lead.category_id);
    const subCategoryOptionsLocal = subCategories.map((sub: any) => ({
      value: sub.id,
      label: sub.display_name,
    }));
    setSubCategoryOptions([{ value: 0, label: 'Select Sub Category' }, ...subCategoryOptionsLocal]);

    const products = await ProductList(user.id, user.access_token, '0', lead.category_id);
    const productOptionsLocal = products.map((prod: any) => ({
      value: prod.id,
      label: prod.display_name,
    }));
    setProductOptions([{ value: 0, label: 'Select Product' }, ...productOptionsLocal]);



    // Match using local options
    const matchedSubCategory = subCategoryOptionsLocal.find(
      (opt) => Number(opt.value) === Number(lead.sub_category_id)
    ) ?? null;

    const matchedProduct = productOptionsLocal.find(
      (opt) => Number(opt.value) === Number(lead.product_id)
    ) ?? null;
    const matchedExecutive = executiveOptions.find(
      (opt) => Number(opt.value) === Number(lead.executive_id)
    ) ?? null;
    const matchedBranch = branchOptions.find(
      (opt) => Number(opt.value) === Number(lead.branch_id)
    ) ?? null;
    const matchedLeadStatus = leadstatusOptions.find(
      (opt) => Number(opt.value) === Number(lead.lead_status)
    ) ?? null;
     const matchedQualityScore = qualityscoreOptions.find(
      (opt) => Number(opt.value) === Number(lead.quality_id)
    ) ?? null;

    // Set form data
    setFormData({
      leadDateVal: lead.lead_date || '',
      firstNameVal: firstName,
      lastNameVal: lastName,
      emailAddressVal: lead.email || '',
      phoneNumberVal: lead.phone_number || '',
      sourceVal: matchedSource,
      categoryVal: matchedCategory,
      subCategoryVal: matchedSubCategory,
      productVal: matchedProduct,
      branchVal: matchedBranch,
      executiveIdVal: matchedExecutive,
      leadStatusVal: matchedLeadStatus,
      qualityscoreVal:matchedQualityScore
    });

    setSelectedLead(lead);
    setShowModal(true);
  };


  const handleCloseModal = () => {
    setShowModal(false);
    setSelectedLead(null);
    // setFormData({});
  };
  const handleViewClick = (lead: Lead) => {
    // console.log(lead.lead_status);
    // const leadstatus=lead.lead_status;
    setViewLead(lead);
    setFollowupDate(null);
    setWalkinDate(null);
    setFollowupStatus(null);
    setFollowupComment('');
    setFollowupQualityScore(null);
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
    if (!selectedLead) {
      setIsLoading(false);
      return;
    }

    setIsLoading(true);

    try {
      const payload: LeadUpdateRequestPayload = {
        idVal: selectedLead.id,
        leadDateVal: formData.leadDateVal ?? '',
        firstNameVal: formData.firstNameVal ?? '',
        lastNameVal: formData.lastNameVal ?? '',
        emailAddressVal: formData.emailAddressVal ?? '',
        phoneNumberVal: formData.phoneNumberVal ?? '',
        sourceVal: formData.sourceVal?.value ?? '',
         qualityscoreVal:formData.qualityscoreVal?.value ?? '',
        categoryVal: formData.categoryVal?.value ?? '',
        subCategoryVal: formData.subCategoryVal?.value ?? '',
        userIdVal: user.id,
        tokenVal: user.access_token,
        branchVal: formData.branchVal?.value ?? '',
        productVal: formData.productVal?.value ?? '',
        countryVal: formData.productVal?.value ?? '', // fixed line
        leadStatusVal: formData.leadStatusVal?.value ?? '',
        executiveIdVal: formData.executiveIdVal?.value ?? '',
        updatedByVal: user.id,
        regionVal: user.region,
        typeVal: user.type,
       
      };

      const response = await updateLead(payload);

      if (response.response === 'login_error') {
         toast.dismiss();
         toast.error(response.message);
        setShowLogoutLoader(true);
        return;
      } else if (response.response === 'error') {
         toast.dismiss();
        toast.error(response.message);
      } else if (response.response === 'success') {
         toast.dismiss();
        toast.success(response.message);
        handleCloseModal();
      }

      fetchLeads();
    } catch (err: any) {
      console.error('Update lead failed', err);
       toast.dismiss();
      toast.error(err.message || 'Failed to save follow-up.');
    } finally {
      setIsLoading(false); // Use the same loading state for consistency
    }
  };

  const submitFollowUp = async () => {
    if (!viewLead || !followupStatus) {
       toast.dismiss();
      toast.error('Please select a status and lead.');
      return;
    }

    setLoadingFollowUp(true); // Show spinner

    const status = followupStatus.value;

    if (status === '2' && (!followupDate || !followupQualityScore || !followupComment.trim())) {
       toast.dismiss();
      toast.error('Please fill in the follow-up date and quality score, comment.');
      setLoadingFollowUp(false);
      return;
    }

    if (status === '3' && (!walkinDate || !followupBranch || !followupQualityScore || !followupComment.trim())) {
       toast.dismiss();
      toast.error('Please fill in walk-in date, branch, quality score and comment.');
      setLoadingFollowUp(false);
      return;
    }

    const payload: any = {
      leadIdVal: viewLead.id,
      createdByVal: user.id,
      leadStatusVal: status,
      userIdVal: user.id,
      tokenVal: user.access_token,
      commentVal: followupComment.trim(),
       excutiveIdVal:viewLead.executive_id,
       qualityscoreVal:followupQualityScore?.value,
    };

    if (status === '2' && followupDate) {
      // payload.followupDateVal = followupDate.toISOString().slice(0, 10);
      if (followupDate) {
  payload.followupDateVal = `${followupDate.toLocaleDateString('en-CA')} ${followupDate.toLocaleTimeString('en-GB', {
    hour: '2-digit',
    minute: '2-digit',
  })}`;
} else {
  payload.followupDateVal = '';
}

    }

    if (status === '3' && walkinDate && followupBranch) {
      // payload.walkinDateVal = walkinDate.toISOString().slice(0, 10);

        if (walkinDate) {
  payload.walkinDateVal = `${walkinDate.toLocaleDateString('en-CA')} ${walkinDate.toLocaleTimeString('en-GB', {
    hour: '2-digit',
    minute: '2-digit',
  })}`;
} else {
  payload.walkinDateVal = '';
}
      payload.branchIdVal = followupBranch.value;
    }

    try {
      const response = await addLeadFollowUp(payload);

      if (response.response === 'login_error') {
         toast.dismiss();
        toast.error(response.message);
        setShowLogoutLoader(true);
        return;
      } else if (response.response === 'error') {
         toast.dismiss();
        toast.error(response.message);
      } else if (response.response === 'success') {
         toast.dismiss();
        toast.success(response.message);
      }

      handleCloseViewModal();
      fetchLeads();
    } catch (err: any) {
       toast.dismiss();
      toast.error(err.message || 'Failed to save follow-up.');
    } finally {
      setLoadingFollowUp(false); // Hide spinner
    }
  };

  const handleRowSelected = (state: any) => {
    setSelectedRows(state.selectedRows);
    console.log(selectedRows);
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
    { name: 'Executive', selector: (row: Lead) => row.executive_name || '-', sortable: true, width: '150px' },

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
      {/* <h2>Leads List</h2> */}
      <PageBreadcrumb title="Leads List" />
      
      {showLogoutLoader && <LogoutOverlay
  duration={5} // 10 seconds countdown
  onComplete={async () => {
    await logout(); // your logout function
  }}
/>
}

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

      {showTable ? (
        <DataTable
          columns={columns}
          data={data}
          progressPending={loading}
          expandableRows
          expandableRowsComponent={ExpandedComponent}
          pagination
          selectableRows
          onSelectedRowsChange={handleRowSelected}
          highlightOnHover
          pointerOnHover
          responsive
        />
      ) : (
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
      )}

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
                  disabled={true}
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
                <Form.Group controlId="qualityscoreVal" className="mb-3">
                <Form.Label>Quality Score</Form.Label>
                <Select
                  options={qualityscoreOptions}
                  value={formData.qualityscoreVal}
                  onChange={(opt) => handleFormChange('qualityscoreVal', opt)}
                  placeholder="Select Quality Score"
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
             {formData.categoryVal === '3' && (
  <Form.Group controlId="subCategoryVal" className="mb-3">
    <Form.Label>Sub Category</Form.Label>
    <Select
      options={subCategoryOptions}
      value={formData.subCategoryVal}
      onChange={(opt) => handleFormChange('subCategoryVal', opt)}
      placeholder="Select Sub Category"
    />
  </Form.Group>
)}

             
             
              <Form.Group controlId="productVal" className="mb-3">
                <Form.Label>Product</Form.Label>
                <Select
                  options={ProductOptions}
                  value={formData.productVal}
                  onChange={(opt) => handleFormChange('productVal', opt)}
                  placeholder="Select Product"
                  required
                />
              </Form.Group>

              <Form.Group controlId="leadStatusVal" className="mb-3">
                <Form.Label> Lead Status</Form.Label>
                <Select
                  options={leadstatusOptions}
                  value={formData.leadStatusVal}
                  onChange={(opt) => handleFormChange('leadStatusVal', opt)}
                  placeholder="Select Lead Status"
                  isDisabled={true}
                />


              </Form.Group>
              <Form.Group controlId="executiveIdVal" className="mb-3">
                <Form.Label>Executive</Form.Label>
                <Select
                  options={executiveOptions}
                  value={formData.executiveIdVal}
                  onChange={(opt) => handleFormChange('executiveIdVal', opt)}
                  placeholder="Select Executive"
                  required
                />
              </Form.Group>
              <Form.Group controlId="branchVal" className="mb-3">
                <Form.Label>Branch</Form.Label>
                <Select
                  options={branchOptions}
                  value={formData.branchVal}
                  onChange={(opt) => handleFormChange('branchVal', opt)}
                  placeholder="Select Branch"

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
                  <Form.Label>Follow-Up Date1</Form.Label>


                  <Form.Control
                    type="datetime-local" required
                    value={followupDate ? format(followupDate, 'yyyy-MM-dd HH:mm') : ''}
                    onChange={(e: React.ChangeEvent<HTMLInputElement>) => {
                      const value = e.target.value;
                      setFollowupDate(value ? new Date(value) : null);
                    }}
                  />

                </Form.Group>
              )}
               
              <Form.Group className="mb-3">
                  <Form.Label>Quality Score</Form.Label>
                  <Select
                  options={qualityscoreOptions}
                  value={followupQualityScore}
                  // onChange={(opt) => handleFormChange('qualityscoreVal', opt)}
                   onChange={setFollowupQualityScore}
                  placeholder="Select Quality Score"
                />

                </Form.Group>
              {followupStatus?.value === '3' && (
                <Form.Group className="mb-3">
                  <Form.Label>WalkIn Date</Form.Label>
                  <Form.Control
                    type="datetime-local" required
                    value={walkinDate ? format(walkinDate, 'yyyy-MM-dd HH:mm') : ''}
                    onChange={(e: React.ChangeEvent<HTMLInputElement>) => {
                      const value = e.target.value;
                      setWalkinDate(value ? new Date(value) : null);
                    }}
                  />

                </Form.Group>
              )}{followupStatus?.value === '3' && (
                <Form.Group className="mb-3">
                  <Form.Label>Branch</Form.Label>
                  <Select
                    options={branchOptions}
                    value={followupBranch}
                    onChange={setFollowupBranch} // expects OptionType
                    required
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

              {/* <Button type="submit" variant="primary">
                  Save Follow-Up
                </Button> */}

              {/* <Button type="submit" variant="primary" disabled={loadingFollowUp}>
    {loadingFollowUp ? <Spinner animation="border" size="sm" /> : 'Save Follow-Up'}
  </Button> */}
              <Button type="submit" variant="primary" disabled={loadingFollowUp}>
                {loadingFollowUp ? <Spinner animation="border" size="sm" /> : 'Save Follow-Up'}
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
