import { useState, useEffect, useMemo, useRef } from 'react';
  import { FaEye } from 'react-icons/fa';

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
    oldCRMAddFollowupRequestPayload,
    SeachOldCrmFollowUpRequestPayload,
    LeadOldCRMToNewCRMTransferRequestPayload,
    UpdateOldCRMApllicantIDLeadHubPayload
  } from '@/services/leadservice';
  import { getOldCrmFollowUpLeadsList,  oldCRMaddLeadFollowUp, LeadTransferLeadHub ,UpdateOldCRMApllicantIDLeadHub} from '@/services/leadservice';
    import {  getBranchList } from '@/services/generalservice';

  import type { Lead } from '@/types/lead.types';
  import { toast } from 'react-toastify';
import LogoutOverlay from '@/components/LogoutOverlay';
import { isAuthenticated, getUserInfo, logout } from '@/utils/auth';
  import CategorySelect from '@/components/categoryselect';
  import SubCategorySelect from '@/components/subcategoryselect';
  import ProductSelect from '@/components/productselect';

import { SourceList,getQualityList } from '@/services/generalservice';


  interface OptionType {
    value: any;
    label: string;
     data?: ProductDetails;
  }

  
  type CategoryName = 'Testprep' | 'ACS' | 'Immigration';

  const CATEGORY_NAMES: Record<number, CategoryName> = {
    1: 'Testprep',
    2: 'ACS',
    3: 'Immigration',
  };

  const InlineField = ({
    label,
    name,
    value,
    onChange,
    type = 'text',
    required = true,
    placeholder = '',
    children,
  }: {
    label: string;
    name: string;
    value: any;
    onChange: (e: any) => void;
    type?: string;
    required?: boolean;
    placeholder?: string;
    children?: React.ReactNode;
  }) => (
    <Row className="mb-3 align-items-center">
      <Col md={3}>
        <Form.Label className="mb-0">{label}</Form.Label>
      </Col>
      <Col md={6}>
        {children ? (
          children
        ) : (
          <Form.Control
            type={type}
            name={name}
            value={value}
            onChange={onChange}
            required={required}
            placeholder={placeholder}
          />
        )}
      </Col>
    </Row>
  );

interface ProductDetails {
  product_category: string;
  product_subcategory: string;
  item: string;
  books_fee: string;
}



interface LeadFormData {
  productdetailsVal: ProductDetails;
  leaddateVal: string;
  teleleadidVal: string;
  levelidVal: string;
  leadtoVal: string;
  applicantidVal: string;
  firstnameVal: string;
  mobilenoVal: string;
  emailidVal: string;
  qualityVal: string;
  leadstatusVal: string,
  sourceVal: string;
  keywordVal: string;
  PartialWalkin:string;
  followupdateVal: string;
  deptidVal: string;
  maincatproductVal: string;
  subcatproductVal: string;
  visitbranchVal: string | null;
  commentsVal: string;
  createdbyVal: string;
  qualityscoreVal?: string;
}



const LeadsDataTable: React.FC = () => {
  const [showLogoutLoader, setShowLogoutLoader] = useState(false);
  const [data, setData] = useState<Lead[]>([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);
  const [formData, setFormData] = useState<Partial<LeadFormData>>({});

  const [branchOptions, setBranchOptions] = useState<OptionType[]>([]);
  const [selectedRows, setSelectedRows] = useState([]);
  const [fromDate, setFromDate] = useState<Date | null>(() => {
    const d = new Date();
    d.setDate(1);
    return d;
  });
  const [toDate, setToDate] = useState<Date | null>(new Date());

  const [loadingFollowUp, setLoadingFollowUp] = useState(false);
  const user = useMemo(() => (isAuthenticated() ? getUserInfo() : null), []);
  const didFetchRef = useRef(false);

  const [showViewModal, setShowViewModal] = useState(false);
  const [viewLead, setViewLead] = useState<Lead | null>(null);
  const [followupDate, setFollowupDate] = useState<Date | null>(null);
  const [walkinDate, setWalkinDate] = useState<Date | null>(null);
  const [followupStatus, setFollowupStatus] = useState<OptionType | null>(null);
  const [followupComment, setFollowupComment] = useState('');
  const [followupBranch, setFollowupBranch] = useState<OptionType | null>(null);
  const [followupQualityScore, setFollowupQualityScore] =  useState<string>('');
    const [searchText, setSearchText] = useState('');
    const filteredData = data.filter((row: Lead) =>
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
  const [currentPage, setCurrentPage] = useState(1);
  const [perPage, setPerPage] = useState(10);

  useEffect(() => {
    if (!user) {
      setShowLogoutLoader(true);
    }
  }, [user]);

  const showTable = user && [1, 2, 3].includes(Number(user.type));

  useEffect(() => {
    const fetchBranches = async () => {
      try {
        const branches = await getBranchList(user.id, user.access_token, '0', user.region, user.typ);
        const options = branches.map((bran: any) => ({ value: bran.id, label: bran.display_name }));
        setBranchOptions([{ value: null, label: 'Select Branch' }, ...options]);
      } catch (err) {
        console.error(err);
      }
    };
    fetchBranches();
  }, [user.id, user.access_token]);

  const fetchLeads = async () => {
    if (!user) return;
    setLoading(true);
    setError(null);
    try {
      const payload: SeachOldCrmFollowUpRequestPayload = {
        fromdateVal: fromDate?.toISOString().slice(0, 10) ?? '',
        todateVal: toDate?.toISOString().slice(0, 10) ?? '',
        leadtoVal: user.old_crm_id,
      };
      const response = await getOldCrmFollowUpLeadsList(payload);
      if (response.response === 'login_error') {
        toast.error(response.message);
        setShowLogoutLoader(true);
        return;
      } else if (response.response === 'error') {
        setData([]);
        toast.error(response.message);
      } else {
        setData(response.data || []);
      }
    } catch {
      setError('Failed to fetch leads. Please try again.');
      setData([]);
      toast.error('Failed to fetch leads. Please try again.');
    } finally {
      setLoading(false);
    }
  };

  useEffect(() => {
    if (!user) return;
    if (!didFetchRef.current) {
      fetchLeads();
      didFetchRef.current = true;
    }
  }, [fromDate, toDate]);

  const handleViewClick = (lead: any) => {
    setViewLead(lead);
    setFormData({
        productdetailsVal: lead.productdetails || '',
        leaddateVal: lead.lead_date || '',
        teleleadidVal: lead.leadto || '',
        levelidVal: '6',
        leadtoVal: lead.leadto || '',
        applicantidVal: lead.applicantid || '',
        firstnameVal: lead.firstname || '',
        mobilenoVal: lead.primary_contactno || '',
        emailidVal: lead.personal_emailid || '',
        qualityVal: '', // Initially empty, or use lead.quality
        sourceVal: lead.source || '',
        keywordVal: lead.keyword || '',
        leadstatusVal: followupStatus?.value || '',
        PartialWalkin: '',
        followupdateVal: '', // Initially empty, or use lead.followupdate
        deptidVal: lead.deptid || '',
        maincatproductVal: lead.product_category || '',
        subcatproductVal: lead.product_subcategory || '',
        visitbranchVal: lead.visit_branch || '',
        commentsVal: lead.comments || '',
        createdbyVal: user?.id || '',
        qualityscoreVal: lead.quality || '',
    });

    setFollowupDate(null);
    setWalkinDate(null);
    setFollowupStatus(null);
    setFollowupComment('');
    setFollowupQualityScore('');
    setFollowupBranch(null);
    setShowViewModal(true);
  };

  const handleCloseViewModal = () => {
    setShowViewModal(false);
    setViewLead(null);
  };

   const [formTransData, setFormTransData] = useState<any>({
    leadDateVal: '',
    firstNameVal: '',
    lastNameVal: '',
    emailAddressVal: '',
    phoneNumberVal: '',
    sourceVal: '',
    qualityscoreVal: '',
    categoryVal: '',
    subCategoryVal: '',
    userIdVal: '',
    tokenVal: '',
    branchVal: '',
    productVal: '',
    countryVal: '',
    leadStatusVal: '',
    executiveIdVal: '',
    updatedByVal: '',
    regionVal: '',
    typeVal: '',
    createdByVal: '',
      applicantidVal: '',
  });

  const handleTransClick = (lead: any) => {
    setViewLead(lead);
        setFormTransData({
          leadDateVal: lead.lead_date ?? '',
          firstNameVal: lead.firstname ?? '',
          lastNameVal: lead.lastname ?? '',
          emailAddressVal: lead.personal_emailid ?? '',
          phoneNumberVal: lead.primary_contactno ?? '',
          sourceVal: lead.source?.value ?? '',
          qualityscoreVal: lead.qualityscoreVal?.value ?? '',
          categoryVal: lead.product_category?.value ?? '',
          subCategoryVal: lead.product_subcategory?.value ?? '',
          userIdVal: user.id,
          tokenVal: user.access_token,
          branchVal: lead.visit_branch?.value ?? '',
          productVal: lead.product?.value ?? '',
          countryVal: lead.productVal?.value ?? '',
          leadStatusVal: lead.leadStatusVal?.value ?? '',
          executiveIdVal: user.id,
          updatedByVal: user.id,
          regionVal: user.region,
          typeVal: user.type,
          createdByVal : user.id,
          applicantidVal: lead.applicantid || '',
        });
   setShowModal(true);

  };

  
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
      const fetchBranches = async () => {
        try {
          const branches = await getBranchList(user.id, user.access_token,'0',user.region,user.type);
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
  

  const [sourceOptions, setSourceOptions] = useState<OptionType[]>([]);
  // const [branchOptions, setBranchOptions] = useState<OptionType[]>([]);
   const [qualityscoreOptions, setQualityscoreOptions] = useState<OptionType[]>([]);
  const [showModal, setShowModal] = useState(false);
  const [isLoading, setIsLoading] = useState(false);
      const handleCloseModal = () => {
    setShowModal(false);
    // setFormData({});
  };
    const selectedCategoryName = CATEGORY_NAMES[Number(formTransData.categoryVal)] || '';
    const isTestprep = selectedCategoryName === 'Testprep';
    const isACS = selectedCategoryName === 'ACS';
    const isImmigration = selectedCategoryName === 'Immigration';
   const handleProductChange = (option: OptionType | null) =>
      setFormTransData((prev: any) => ({ ...prev, productVal: option?.value ?? '' }));

   

    const handleCategoryChange = (option: OptionType | null) => {
      setFormTransData((prev : any) => ({
        ...prev,
        categoryVal: option?.value ? Number(option.value) : '',
        subCategoryVal: '',
        productVal: '',
        countryVal: '',
      }));
    };


    const handleSubCategoryChange = (option: OptionType | null) =>
      setFormTransData((prev: any) => ({ ...prev, subCategoryVal: option?.value ?? '' }));


  const handleFormChange = (key: keyof any, value: any) => {
      let newValue = value;
  
      setFormTransData((prev: any) => ({ ...prev, [key]: newValue }));
    };
  
    const onSubmit = (e: React.FormEvent) => {
      e.preventDefault();
      handleUpdateLead();
    };
  
    const handleUpdateLead = async () => {
      if (!viewLead) {
        setIsLoading(false);
        return;
      }
  
      setIsLoading(true);
      try {
        const payload: LeadOldCRMToNewCRMTransferRequestPayload = {
          leadDateVal: formTransData.leadDateVal ?? '',
          firstNameVal: formTransData.firstNameVal ?? '',
          lastNameVal: formTransData.lastNameVal ?? '',
          emailAddressVal: formTransData.emailAddressVal ?? '',
          phoneNumberVal: formTransData.phoneNumberVal ?? '',
          sourceVal:  formTransData.sourceVal ?? '',
           qualityscoreVal: formTransData.qualityscoreVal ?? '',
          categoryVal:  formTransData.categoryVal ?? '',
          subCategoryVal: formTransData.subCategoryVal ?? '',
          userIdVal: user.id,
          tokenVal: user.access_token,
          branchVal: formTransData.branchVal ?? '',
          productVal: formTransData.productVal ?? '',
          countryVal: formTransData.productVal?.value ?? '', // fixed line
          leadStatusVal:  formTransData.leadStatusVal ?? '',
          executiveIdVal:  user.id,
          updatedByVal: user.id,
          regionVal: user.region,
          typeVal: user.type,
          createdByVal: user.id,
           applicantidVal: formTransData.applicantidVal,
         
        };
  
        const response = await LeadTransferLeadHub(payload);
        
        if (response.response === 'login_error') {
           toast.dismiss();
           toast.error(response.message);
          setShowLogoutLoader(true);
          return;
        } else if (response.response === 'error') {
           toast.dismiss();
          toast.error(response.message);
        } else if (response.response === 'success') {
          const secondPayload : UpdateOldCRMApllicantIDLeadHubPayload = {
               applicantidVal: formTransData.applicantidVal,
          }

          const res = await UpdateOldCRMApllicantIDLeadHub(secondPayload);
          console.log(res);
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
        setIsLoading(false);
      }
    };

  const submitFollowUp = async () => {
    if (!viewLead || !followupStatus || !formData) {
      toast.error('Please select a status and lead.');
      return;
    }

   const status = followupStatus?.value;
setLoadingFollowUp(true);

if (
  status === 'FollowUp' &&
  (!followupDate || !followupQualityScore || !followupComment.trim())
) {
  toast.error('Please fill in the follow-up date, quality score, and comment.');
  setLoadingFollowUp(false);
  return;
}

    if (status === 'PartialWalkin' && (!walkinDate || !followupBranch || !followupQualityScore || !followupComment.trim())) {
      toast.error('Please fill in walk-in date, branch, quality score and comment.');
      setLoadingFollowUp(false);
      return;
    }

    const payload: oldCRMAddFollowupRequestPayload = {
      ...formData,
        leadstatusVal : followupStatus?.value || '',
        qualityVal: followupQualityScore || '',
        PartialWalkin: walkinDate?.toISOString().slice(0, 10) || '',
       followupdateVal: followupDate?.toISOString().slice(0, 10) || '',
      visitbranchVal: followupBranch?.value || '',
      commentsVal: followupComment.trim(),
    };

    try {
      const response = await oldCRMaddLeadFollowUp(payload);
      if (response.response === 'login_error') {
        toast.error(response.message);
        setShowLogoutLoader(true);
      } else if (response.response === 'error') {
        toast.error(response.message);
      } else {
        toast.success(response.message);
        handleCloseViewModal();
        fetchLeads();
      }
    } catch (err: any) {
      toast.error(err.message || 'Failed to save follow-up.');
    } finally {
      setLoadingFollowUp(false);
    }
  };

    const columns = [
    {
        name: 'ID',
        cell: (_row: Lead, index: number) => (currentPage - 1) * perPage + index + 1,
        width: '70px',
    },
    {
        name: 'Action',
        cell: (row: Lead) => (
        <div style={{ display: 'flex', gap: '8px' }}>
            <Button size="sm" variant="info" onClick={() => handleViewClick(row)}>
            <FaEye />
            </Button>

            <Button size="sm" variant="primary"
            onClick={() => handleTransClick(row)}>Transfer
            </Button>
        </div>
        ),
        button: true,
        width: '120px',
    },
    { name: 'Follow Up Date', selector: (row: Lead) => row.followup_date || '-', sortable: true, width: '110px' },
    { name: 'Name', selector: (row: any) => row.firstname || '-', sortable: true, wrap: true },
    { name: 'Phone', selector: (row: any) => row.primary_contactno || '-', sortable: true, wrap: true },
    { name: 'Email', selector: (row: any) => row.personal_emailid || '-', sortable: true, wrap: true },
    { name: 'Source', selector: (row: any) => row.source || '-', sortable: true },
    { name: 'Category', selector: (row: any) => row.product_category || '-', sortable: true },
    { name: 'Product', selector: (row: any) => row.product_subcategory || '-', sortable: true, width: '100px' },
    { name: 'Status', selector: (row: any) => row.lead_current_status || '-', sortable: true, width: '110px' },
    { name: 'Executive', selector: (row: any) => row.counselorname || '-', sortable: true, wrap: true },
    { name: 'Created On', selector: (row: any) => row.createdon?.split(' ')[0] || '-', sortable: true },
    ];



        const handleRowSelected = (state:any) => {
            setSelectedRows(state.selectedRows);
            console.log(selectedRows);
        };


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



// Sample options — replace with your actual data sources
  const mainProductOptions: OptionType[] = [
    { value: 'Test Prep', label: 'Test Prep' },
    { value: 'Immigration', label: 'Immigration' },
    { value: 'StudyAbroad', label: 'StudyAbroad' }
  ];

const keywordData: ProductDetails[] = [
  { product_category: "StudyAbroad", product_subcategory: "Test Prep", item: "GRE", books_fee: "6000" },
  { product_category: "StudyAbroad", product_subcategory: "Test Prep", item: "IELTS", books_fee: "3500" },
  { product_category: "StudyAbroad", product_subcategory: "Test Prep", item: "TOEFL", books_fee: "3500" },
  { product_category: "StudyAbroad", product_subcategory: "Test Prep", item: "PTE", books_fee: "3500" },
  { product_category: "StudyAbroad", product_subcategory: "Test Prep", item: "GMAT", books_fee: "12000" },
  { product_category: "StudyAbroad", product_subcategory: "Test Prep", item: "SAT", books_fee: "12000" },
  { product_category: "StudyAbroad", product_subcategory: "Test Prep", item: "CAT", books_fee: "12000" },
  { product_category: "StudyAbroad", product_subcategory: "Test Prep", item: "OET", books_fee: "3500" },
  { product_category: "Immigration", product_subcategory: "Test Prep", item: "IELSTSGENERAL", books_fee: "3500" },
  { product_category: "StudyAbroad", product_subcategory: "Test Prep", item: "Duolingo", books_fee: "3500" },
  { product_category: "StudyAbroad", product_subcategory: "Test Prep", item: "G-A1", books_fee: "3500" },
  { product_category: "StudyAbroad", product_subcategory: "Test Prep", item: "G-A2", books_fee: "3500" },
  { product_category: "StudyAbroad", product_subcategory: "Test Prep", item: "G-B1", books_fee: "3500" },
  { product_category: "StudyAbroad", product_subcategory: "Test Prep", item: "G-B2", books_fee: "3500" },
  { product_category: "StudyAbroad", product_subcategory: "Test Prep", item: "F-A1", books_fee: "3500" },
  { product_category: "StudyAbroad", product_subcategory: "Test Prep", item: "F-A2", books_fee: "3500" },
  { product_category: "StudyAbroad", product_subcategory: "Test Prep", item: "F-B1", books_fee: "3500" },
  { product_category: "StudyAbroad", product_subcategory: "Test Prep", item: "F-B2", books_fee: "3500" },
  { product_category: "StudyAbroad", product_subcategory: "Test Prep", item: "EP-Foundation", books_fee: "3500" },
  { product_category: "StudyAbroad", product_subcategory: "Test Prep", item: "EP-Advance", books_fee: "3500" },
];

const prCounsellingOptions: OptionType[] = [
  { value: 'PR', label: 'PR' },
  { value: 'Visit Visa', label: 'Visit Visa' },
  { value: 'Tourist Visa', label: 'Tourist Visa' },
  { value: 'RMS', label: 'RMS' },
  { value: 'Investment', label: 'Investment' },
  { value: 'Spouse Dependent', label: 'Spouse Dependent' }
];


const countryOptions: OptionType[] = [
  { value: 'US', label: 'USA' },
  { value: 'Canada', label: 'Canada' },
  { value: 'Australia', label: 'Australia' },
  { value: 'UK', label: 'United Kingdom' },
  { value: 'Ireland', label: 'Ireland' },
  { value: 'NewZeland', label: 'NewZeland' },
  { value: 'Germany', label: 'Germany' },
  { value: 'Singapore', label: 'Singapore' },
  { value: 'France', label: 'France' },
  { value: 'Poland', label: 'Poland' }
];

const keywordOptions: OptionType[] = keywordData.map((k) => ({
  value: k.item,
  label: k.item,
  data: k,
}));
  // State

  const [mainCategory, setMainCategory] = useState<OptionType | null>(null);
   const [keyword, setKeyword] = useState<OptionType | null>(null);
  const [subCategory, setSubCategory] = useState<OptionType | null>(null);
  const [country, setCountry] = useState<OptionType | null>(null);

    return (
      <Container fluid>
        <PageBreadcrumb title={`Follow Up List (${data.length})`} />
        {showLogoutLoader && <LogoutOverlay
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
              <Button variant="primary" onClick={fetchLeads}>Search</Button>
            </Col>
          </Row>
        </Form>

        {error && <Alert variant="danger">{error}</Alert>}

        {showTable ? (
          <DataTable
            columns={columns}
            data={filteredData}
            progressPending={loading}
            expandableRows
            expandableRowsComponent={ExpandedComponent}
            pagination
            selectableRows
      onSelectedRowsChange={handleRowSelected}
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
        ) : (
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
        )}

      <Modal show={showViewModal} onHide={handleCloseViewModal} backdrop="static" keyboard={false} centered>
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
                  <option value="FollowUp">Follow Up</option>
                  {/* <option value="PartialWalkin">Partial Walk-In</option>
                  <option value="NotInstrested">Not Interested</option> */}
                </Form.Select>
   
              </Form.Group>
              {followupStatus?.value === 'FollowUp' && (
                <Form.Group className="mb-3">
                    <Form.Label>Follow-Up Date</Form.Label>
                    <Form.Control
                        type="date"
                        required
                        value={followupDate ? format(followupDate, 'yyyy-MM-dd') : ''}
                        onChange={(e: React.ChangeEvent<HTMLInputElement>) => {
                        const value = e.target.value;
                        setFollowupDate(value ? new Date(value) : null);
                        }}
                    />
                    </Form.Group>
              )}
               
              <Form.Group controlId="qualityScore" className="mb-3">
                <Form.Label>Quality</Form.Label>
               <Form.Select
                    value={followupQualityScore || ''}
                    onChange={(e) => {
                        const value = e.target.value;
                        console.log("Selected Quality Score:", value);

                        setFormData({ ...formData, qualityscoreVal: value });
                        setFollowupQualityScore(value); // ✅ Now you're passing just the string
                    }}
                    required
                    >
                    <option value="" disabled>Select Quality Score</option>
                    <option value="Fresh">Fresh</option>
                    <option value="Hot">Hot</option>
                    <option value="Warm">Warm</option>
                    <option value="Cold">Cold</option>
                    </Form.Select>


                </Form.Group>


              {followupStatus?.value === 'PartialWalkin' && (
                <Form.Group className="mb-3">
                  <Form.Label>WalkIn Date</Form.Label>
                   <Form.Control
                    type="date" required
                    value={walkinDate ? format(walkinDate, 'yyyy-MM-dd') : ''}
                    onChange={(e: React.ChangeEvent<HTMLInputElement>) => {
                      const value = e.target.value;
                      setWalkinDate(value ? new Date(value) : null);
                      setFollowupDate(value ? new Date(value) : null);
                    }}
                  />

                </Form.Group>
              )}{followupStatus?.value === 'PartialWalkin' && (
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

              {followupStatus?.value === 'PartialWalkin' && (
                    <>
                        {/* Product Category */}
                        <Form.Group className="mb-3">
                        <Form.Label>Product Category <span style={{ color: 'red' }}>*</span></Form.Label>
                        <Select
                          options={mainProductOptions}
                          value={mainCategory}
                          onChange={(val) => {
                            setMainCategory(val);
                            setKeyword(null);
                            setSubCategory(null);
                            setCountry(null);

                            setFormData({
                              ...formData,
                              maincatproductVal: val?.label || '', // store main category label
                              subcatproductVal: '', // reset on main category change
                              productdetailsVal: {
                                product_category: val?.value || '',
                                product_subcategory: '',
                                item: '',
                                books_fee: ''
                              }
                            });
                          }}
                          placeholder="Select Product"
                          required
                        />



                        </Form.Group>

                        {/* Keyword (only for Test Prep) */}
                        {mainCategory?.value === 'Test Prep' && (
                        <>
                         <Form.Group className="mb-3">
                                  <Form.Label>
                                    Keyword <span style={{ color: 'red' }}>*</span>
                                  </Form.Label>
                                  <Select
                                    options={keywordOptions}
                                    value={keyword}
                                    onChange={(selected) => {
                                      setKeyword(selected);

                                      if (selected && selected.data) {
                                        setFormData({
                                          ...formData,
                                          subcatproductVal: selected.data.product_subcategory || '',
                                          productdetailsVal: {
                                            product_category: selected.data.product_category || '',
                                            product_subcategory: selected.data.product_subcategory || '',
                                            item: selected.data.item || '',
                                            books_fee: selected.data.books_fee || ''
                                          }
                                        });
                                      } else {
                                        setFormData({
                                          ...formData,
                                          subcatproductVal: '',
                                          productdetailsVal: {
                                            product_category: mainCategory?.value || '',
                                            product_subcategory: '',
                                            item: '',
                                            books_fee: ''
                                          }
                                        });
                                      }
                                    }}
                                    placeholder="Select Keyword"
                                    isClearable
                                    required
                                  />
                                </Form.Group>

                                {keyword?.data?.books_fee && (
                                  <Form.Group className="mb-3">
                                    <Form.Label>Books Fee</Form.Label>
                                    <Form.Control
                                      type="text"
                                      readOnly
                                      value={keyword.data.books_fee}
                                    />
                                  </Form.Group>
                                )}

                            </>
                        )}

                        {/* PR Counselling Service (only for Immigration) */}
                        {mainCategory?.value === 'Immigration' && (
                        <Form.Group className="mb-3">
                            <Form.Label>PR Counselling Service <span style={{ color: 'red' }}>*</span></Form.Label>
                            <Select
                            options={prCounsellingOptions}
                            value={subCategory}
                            onChange={setSubCategory}
                            placeholder="Select Counselling Service"
                            required
                            />
                        </Form.Group>
                        )}

                        {/* Country (for Immigration or StudyAbroad) */}
                        {(mainCategory?.value === 'Immigration' || mainCategory?.value === 'StudyAbroad') && (
                        <Form.Group className="mb-3">
                            <Form.Label>Country <span style={{ color: 'red' }}>*</span></Form.Label>
                            <Select
                            options={countryOptions}
                            value={country}
                            onChange={setCountry}
                            placeholder="Select Country"
                            required
                            />
                        </Form.Group>
                        )}
                    </>
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

<Modal show={showModal} onHide={handleCloseModal} backdrop="static" keyboard={false} size="lg" centered>
  <Modal.Header closeButton>
    <Modal.Title>Update Lead</Modal.Title>
  </Modal.Header>
  <Modal.Body>
    {viewLead ? (
      <Form onSubmit={onSubmit} className="mt-3">
        <Row>
         <Col md={12}>
            <Form.Group controlId="leadDateVal" className="mb-3 d-flex align-items-center">
              <Form.Label className="me-3 mb-0" style={{ minWidth: '120px' }}>
                Lead Date
              </Form.Label>
              <Form.Control
                type="date"
                value={formTransData.leadDateVal || ''}
                onChange={(e) => handleFormChange('leadDateVal', e.target.value)}
                disabled={true}
                required
                style={{ flex: 1 }}
              />
            </Form.Group>
          </Col>

          

        </Row>

        <Row>
          <Col md={12}>
            <Form.Group controlId="firstNameVal" className="mb-3 d-flex align-items-center">
              <Form.Label className="me-3 mb-0" style={{ minWidth: '120px' }}>
                First Name
              </Form.Label>
              <div style={{ flex: 1 }}>
                <Form.Control
                  type="text"
                  value={formTransData.firstNameVal || ''}
                  onChange={(e) => handleFormChange('firstNameVal', e.target.value)}
                  required
                />
              </div>
            </Form.Group>
          </Col>

          <Col md={12}>
            <Form.Group controlId="lastNameVal" className="mb-3 d-flex align-items-center">
              <Form.Label className="me-3 mb-0" style={{ minWidth: '120px' }}>
                Last Name
              </Form.Label>
              <div style={{ flex: 1 }}>
                <Form.Control
                  type="text"
                  value={formTransData.lastNameVal || ''}
                  onChange={(e) => handleFormChange('lastNameVal', e.target.value)}
                />
              </div>
            </Form.Group>
          </Col>

        </Row>

        <Row>
          <Col md={12}>
            <Form.Group controlId="emailAddressVal" className="mb-3 d-flex align-items-center">
              <Form.Label className="me-3 mb-0" style={{ minWidth: '120px' }}>
                Email
              </Form.Label>
              <div style={{ flex: 1 }}>
                <Form.Control
                  type="email"
                  value={formTransData.emailAddressVal || ''}
                  onChange={(e) => handleFormChange('emailAddressVal', e.target.value)}
                  required
                />
              </div>
            </Form.Group>
          </Col>


            <Col md={12}>
              <Form.Group controlId="phoneNumberVal" className="mb-3 d-flex align-items-center">
                <Form.Label className="me-3 mb-0" style={{ minWidth: '120px' }}>
                  Phone
                </Form.Label>
                <div style={{ flex: 1 }}>
                  <Form.Control
                    type="tel"
                    value={formTransData.phoneNumberVal || ''}
                    onChange={(e) => handleFormChange('phoneNumberVal', e.target.value)}
                    required
                  />
                </div>
              </Form.Group>
            </Col>

        </Row>

        <Row>
         <Col md={12}>
            <Form.Group controlId="sourceVal" className="mb-3 d-flex align-items-center">
              <Form.Label className="me-3 mb-0" style={{ minWidth: '120px' }}>
                Source
              </Form.Label>
              <div style={{ flex: 1 }}>
                <Select
                  options={sourceOptions}
                  value={sourceOptions.find(opt => opt.value === formTransData.sourceVal) || null}
                  onChange={(opt) => handleFormChange('sourceVal', opt?.value ?? '')}
                  placeholder="Select Source"
                />
              </div>
            </Form.Group>
          </Col>

          <Col md={12}>
           <Form.Group controlId="qualityscoreVal" className="mb-3 d-flex align-items-center">
            <Form.Label className="me-3 mb-0" style={{ minWidth: '120px' }}>
              Quality Score
            </Form.Label>
            <div style={{ flex: 1 }}>
              <Select
                options={qualityscoreOptions}
                value={qualityscoreOptions.find(opt => opt.value === formTransData.qualityscoreVal) || null}
                onChange={(opt) => handleFormChange('qualityscoreVal', opt?.value ?? '')}
                placeholder="Select Quality Score"
              />
            </div>
          </Form.Group>
          </Col>
        </Row>
        <Row>
          <Col md={12}>
            <Form.Group controlId="branchVal" className="mb-3 d-flex align-items-center">
              <Form.Label className="me-3 mb-0" style={{ minWidth: '120px' }}>
                Branch
              </Form.Label>
              <div style={{ flex: 1 }}>
                <Select
                  options={branchOptions}
                  value={branchOptions.find(opt => opt.value === formTransData.branchVal) || null}
                  onChange={(opt) => handleFormChange('branchVal', opt?.value ?? '')}
                  placeholder="Select Branch"
                />
              </div>
            </Form.Group>
          </Col>
        </Row>
        <Row>
          <Col md={12}>
            <InlineField label="Category" name="categoryVal" value={formTransData.categoryVal} onChange={handleCategoryChange} required>
              <CategorySelect value={formTransData.categoryVal} onChange={handleCategoryChange} required name="categoryVal" label="Category" />
            </InlineField>
          </Col>

          {isImmigration && (
            <Col md={12}>
              <InlineField label="SubCategory" name="subCategoryVal" value={formTransData.subCategoryVal} onChange={handleSubCategoryChange} required>
                <SubCategorySelect categoryId={formTransData.categoryVal} value={formTransData.subCategoryVal} onChange={handleSubCategoryChange} required />
              </InlineField>
            </Col>
          )}
        </Row>

        {(isTestprep || isACS || isImmigration) && (
          <Row>
            <Col md={12}>
              <InlineField label="Product" name="productVal" value={formTransData.productVal} onChange={handleProductChange} required>
                <ProductSelect categoryId={formTransData.categoryVal} value={formTransData.productVal} onChange={handleProductChange} required />
              </InlineField>
            </Col>
          </Row>
        )}

        <Row>
          <Col md={12} className="text-end">
            <Button variant="primary" type="submit" disabled={isLoading}>
              {isLoading ? <Spinner animation="border" size="sm" /> : 'Update Lead'}
            </Button>
          </Col>
        </Row>
      </Form>
    ) : (
      <div className="text-center">
        <Spinner animation="border" />
      </div>
    )}
  </Modal.Body>
</Modal>

      </Container>
    );
  };

  export default LeadsDataTable;
