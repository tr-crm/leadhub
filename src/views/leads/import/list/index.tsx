import { useState, useEffect, useMemo, useRef } from 'react';
import DataTable from 'react-data-table-component';
import { Container, Button, Row, Col, Modal, Form } from 'react-bootstrap';
import PageBreadcrumb from '@/components/PageBreadcrumb';

import { getImportLeadsList, ImportFreshLeadTransferToLeadList, BulkFreshLeadTransferToLeadList } from '@/services/leadservice';
import { SourceList, getCategoryList, getSubCategoryList, ProductList, getBranchList, RegionList, getQualityList } from '@/services/generalservice';
import type { ImportLeadPayload } from '@/services/leadservice';
import type { Lead } from '@/types/lead.types';
import RegionSelect from '@/components/regionselect';
import ExecutiveSelect from '@/components/executiveselect';
import Select from 'react-select';
import 'react-toastify/dist/ReactToastify.css';
import { toast } from 'react-toastify';
// import { s } from 'node_modules/react-router/dist/development/lib-C1JSsICm.d.mts';
import LogoutOverlay from '@/components/LogoutOverlay';
import { isAuthenticated, getUserInfo, logout } from '@/utils/auth';
import DatePicker from 'react-datepicker';
import 'react-datepicker/dist/react-datepicker.css';
import { format } from 'date-fns';

interface OptionType {
  value: any;
  label: string;
}

const LeadsDataTable: React.FC = () => {
  const [showLogoutLoader, setShowLogoutLoader] = useState<boolean>(false);
  const [data, setData] = useState<Lead[]>([]);
  const [loading, setLoading] = useState<boolean>(true);
  const [showModal, setShowModal] = useState(false);
  const [selectedLead, setSelectedLead] = useState<Lead | null>(null);
  const [selectedRows, setSelectedRows] = useState<Lead[]>([]);
  const [toggleCleared, setToggleCleared] = useState(false);
  const [leadDate, setLeadDate] = useState('');
  const [firstName, setFirstName] = useState('');
  const [lastName, setLastName] = useState('');
  const [phoneNumber, setPhoneNumber] = useState('');
  const [email, setEmail] = useState('');
  const [execFilter, setExecFilter] = useState('0');
  const [sourceOptions, setSourceOptions] = useState<OptionType[]>([]);
  const [categoryOptions, setCategoryOptions] = useState<OptionType[]>([]);
  const [subCategoryOptions, setSubCategoryOptions] = useState<OptionType[]>([]);
  const [productOptions, setProductOptions] = useState<OptionType[]>([]);
  // const [countryOptions, setCountryOptions] = useState<OptionType[]>([]);
  const [branchOptions, setBranchOptions] = useState<OptionType[]>([]);
  const [regionOptions, setRegionOptions] = useState<OptionType[]>([]);
  const [qualityscoreOptions, setQualityscoreOptions] = useState<OptionType[]>([]);
  const [source, setSource] = useState<OptionType | null>(null);
  const [category, setCategory] = useState<OptionType | null>(null);
  const [subcategory, setSubCategory] = useState<OptionType | null>(null);
  const [product, setProduct] = useState<OptionType | null>(null);
  // const [country, setCountry] = useState<OptionType | null>(null);
  // const [branch, setBranch] = useState<OptionType | null>(null);
  const [year, setYear] = useState<OptionType | null>(null);
  const [month, setMonth] = useState<OptionType | null>(null);
  const [campaign, setCampaign] = useState<OptionType | null>(null);
  const [campaignname, setCampaignName] = useState<OptionType | null>(null);

  const [excecutive, setExcecutive] = useState<OptionType | null>(null);

  const [region, setRegion] = useState<OptionType | null>(null);
  const [currentPage, setCurrentPage] = useState(1);
  const [perPage, setPerPage] = useState(10);
  

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

  const [followupDate, setFollowupDate] = useState<Date | null>();
  const [walkinDate, setWalkinDate] = useState<Date | null>();
  const [followupStatus, setFollowupStatus] = useState<OptionType | null>(null);
  const [followupComment, setFollowupComment] = useState('');
  const [followupBranch, setFollowupBranch] = useState<OptionType | null>(null);
  const [followupQualityScore, setFollowupQualityScore] = useState<OptionType | null>(null);

  const [showSubCategory, setShowSubCategory] = useState(true);
  const [showProduct, setShowProduct] = useState(true);
  // const [showCountry, setShowCountry] = useState(false);


  const [submitting, setSubmitting] = useState(false);
  // Memoize user so it doesn't cause continuous re-renders/useEffect triggers
  const user = useMemo(() => (isAuthenticated() ? getUserInfo() : null), []);

  // Ref to prevent double fetch in Strict Mode or repeated effect calls
  const didFetchRef = useRef(false);

  useEffect(() => {
    if (!user) {
      setShowLogoutLoader(true);
    }
  }, [user]);
  const type = user.type;
  const [fromDate, setFromDate] = useState<Date | null>(new Date());
  const [toDate, setToDate] = useState<Date | null>(new Date());
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
    const fetchSources = async () => {
      try {
        const sources = await SourceList(user.id, user.access_token);
        const options = sources.map(item => ({
          value: item.id,
          label: item.display_name,
        }));
        setSourceOptions([{ value: '0', label: 'Select Source' }, ...options]);
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
          value: String(cat.id),
          label: cat.display_name,
        }));
        setCategoryOptions([{ value: '0', label: 'Select Category' }, ...options]);
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
        value: String(sub.id),
        label: sub.display_name,
      }));
      setSubCategoryOptions([{ value: '0', label: 'Select Sub Category' }, ...options]);
    } catch (err) {
      console.error('Failed to fetch subcategories', err);
    }
  };

  useEffect(() => {
    const categoryId = category ? Number(category.value) : 0;
    if (categoryId) {
      fetchSubCategories(categoryId);
    }
  }, [category]);
  const fetchProductList = async (categoryId: number) => {
    if (!categoryId) return;
    try {
      const productList = await ProductList(user.id, user.access_token, '0', categoryId);
      const options = productList.map((prod: any) => ({
        value: String(prod.id),
        label: prod.display_name,
      }));
      setProductOptions([{ value: '0', label: 'Select Product' }, ...options]);
    } catch (err) {
      console.error('Failed to fetch Product', err);
    }
  };

  useEffect(() => {
    const categoryId = category ? Number(category.value) : 0;
    if (categoryId) {
      fetchProductList(categoryId);
    }
  }, [category]);

  // }, [user.id, user.access_token]);
  // Fetch Region List
  //  useEffect(() => {
  //   const fetchRegion = async () => {
  //     try {
  //       const regions = await RegionList(user.id, user.access_token, user.region, user.type);
  //       const options = regions.map((reg: any) => ({
  //         value: String(reg.id),
  //         label: reg.display_name,
  //       }));
  //       setRegionOptions(options);
  //     } catch (err) {
  //       console.error('Failed to fetch regions', err);
  //     }
  //   };
  //   fetchRegion();
  // }, [user.id, user.access_token, user.region, user.type]);
  useEffect(() => {
    const fetchRegion = async () => {
      try {
        const regions = await RegionList(user.id, user.access_token, user.region, user.type);
        const options = regions.map(item => ({
          value: item.id,
          label: item.display_name,
        }));
        setRegionOptions([{ value: '0', label: 'Select Region' }, ...options]);
      } catch (err) {
        console.error(err);
      }
    };
    fetchRegion();
  }, [user.id, user.access_token, user.region, user.type]);
  useEffect(() => {
    const fetchBranch = async () => {
      try {
        const branches = await getBranchList(user.id, user.access_token,'0',user.region,user.typ);
        const options = branches.map(item => ({
          value: item.id,
          label: item.display_name,
        }));
        setBranchOptions([{ value: '0', label: 'Select Branch' }, ...options]);
      } catch (err) {
        console.error(err);
      }
    };
    fetchBranch();
  }, [user.id, user.access_token]);

  const getInitialRegionValue = (): string => {
    if (type === '1' || type === '2') {
      return '1';
    } else if (user.region) {
      return String(user.region);
    }
    return '0';
  };
  const getInitialLeadTypeStatusValue = (): string => {
    if (type === '1' || type === '2' || type === '3') {
      return '1';
    } else {
      return '2';
    }

  };

  const [regionVal, setRegionVal] = useState<string>(getInitialRegionValue());

  const [leadtype, setLeadTypeStatus] = useState(getInitialLeadTypeStatusValue());
  const [actexecutive, setActExecutive] = useState(0);
  const handleRegionChange = (option: OptionType | null) => {
    setRegionVal(option?.value ?? '0');
  };
  const handleChange = (e: React.ChangeEvent<HTMLSelectElement>) => {
    setLeadTypeStatus(e.target.value);
  };


  const handleSourceChange = (option: OptionType | null): void => {
    setSource(option);
  };

  const handleExecChange = (opt: OptionType | null) => setActExecutive(opt?.value ?? '0');
  const handleCategory = (option: OptionType | null): void => {
    setCategory(option);
    setProduct(null);
    const categoryLabel = option?.label.toLowerCase() || '';
    // console.log(categoryLabel);
    // Visibility logic based on category label
    if (categoryLabel === 'test prep') {
      setShowSubCategory(false);
      setShowProduct(true);
      // setShowCountry(false);
    } else if (categoryLabel === 'acs') {
      setShowSubCategory(false);
      setShowProduct(true);
      // setShowCountry(true);
    } else if (categoryLabel === 'immigration') {
      setShowSubCategory(true);
      setShowProduct(true);
      // setShowCountry(true);
    } else {
      // Default case
      setShowSubCategory(true);
      setShowProduct(true);
      // setShowCountry(false);
    }
  };


  const handleSubCategory = (option: OptionType | null): void => {
    setSubCategory(option);
  };

  const handleProductList = (option: OptionType | null): void => {
    setProduct(option);

    //  const categoryLabel = option?.value || '';
    //  console.log(categoryLabel);

    //  console.log(productOptions);


    // const foundCountry ="1";
    //  setCountry(foundCountry);

  };
  // const handleCountryList = (option: OptionType | null): void => {
  //   setCountry(option);
  // };
  // const handleBranchList = (option: OptionType | null): void => {
  //   setBranch(option);
  // };

  const handleRegionList = (option: OptionType | null): void => {
    setRegion(option);
  };
  const fetchLeads = async () => {
    if (!user) return;
    setLoading(true);
    let actexecutive1: number;

    if (type == '5') {
      actexecutive1 = user.id;
    } else {
      actexecutive1 = actexecutive;
    }

    const payload: ImportLeadPayload = {
      start: '',
      sourceVal: 'All',
      userIdVal: user.id,
      tokenVal: user.access_token,
      regionVal: regionVal,
      typeVal: user.type,
      executiveIdVal: actexecutive1,
      leadtypeVal: leadtype,
      fromDateVal: fromDate?.toISOString().slice(0, 10) ?? '',
      toDateVal: toDate?.toISOString().slice(0, 10) ?? '',
    };
    try {
      const response = await getImportLeadsList(payload);

      if (response.response === 'login_error') {
        setData([]);
        toast.dismiss();
        toast.error(response.message);
        setShowLogoutLoader(true);
        return;

        // Optionally redirect to login page here
      } else if (response.response === 'error') {
        setData([]);
        toast.dismiss();
        toast.error(response.message);

        // setError(response.message || 'Failed to import data.');
      } else if (response.response === 'success') {
        setData([]);
        setData(response.data);

      }
    } catch (error) {
      setData([]);
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
  }, [regionVal]);

  const handleButtonClick = async (row: Lead) => {
    const sourceId = String(row.source_id);
    const foundSource = sourceOptions.find(option => option.value == sourceId) || null;
    const foundCategory = categoryOptions.find(option => option.value == String(row.category_id)) || null;
    const foundRegion = regionOptions.find(option => option.value == String(row.region)) || null;
    const foundBranch = branchOptions.find(option => option.value == String(row.branch_id)) || null;

    const categoryLabel = foundCategory?.label.toLowerCase() || '';

    // Determine UI visibility
    if (categoryLabel === 'test prep') {
      setShowSubCategory(false);
      setShowProduct(true);
    } else if (categoryLabel === 'acs') {
      setShowSubCategory(false);
      setShowProduct(true);
    } else if (categoryLabel === 'immigration') {
      setShowSubCategory(true);
      setShowProduct(true);
    } else {
      setShowSubCategory(true);
      setShowProduct(true);
    }

    // Preload modal data
    setSource(foundSource);
    setCategory(foundCategory);
    setSelectedLead(row);
    setLeadDate(row.lead_date || '');
    setFirstName(row.full_name || '');
    setLastName('');
    setPhoneNumber(row.phone_number || '');
    setEmail(row.email || '');
    setYear(row.year || '');
    setMonth(row.month || '');
    setCampaign(row.campaign_id || '');
    setCampaignName(row.campaign_name || '');
    setExcecutive(row.executive_id || '0');
    setRegion(foundRegion);
    setFollowupBranch(foundBranch);

    // ✅ Show modal immediately
    setShowModal(true);

    // 🔄 Async fetch subcategories and product list
    if (row.category_id) {
      try {
        const [subCategories, products] = await Promise.all([
          getSubCategoryList(user.id, user.access_token, row.category_id),
          ProductList(user.id, user.access_token, '0', row.category_id),
        ]);

        const subCategoryOpts = subCategories.map((sub: any) => ({
          value: String(sub.id),
          label: sub.display_name,
        }));
        setSubCategoryOptions([{ value: '0', label: 'Select Sub Category' }, ...subCategoryOpts]);

        const foundSubCategory = subCategoryOpts.find(option => option.value == String(row.sub_category_id)) || null;
        setSubCategory(foundSubCategory);

        const productOpts = products.map((prod: any) => ({
          value: String(prod.id),
          label: prod.display_name,
        }));
        setProductOptions([{ value: '0', label: 'Select Product' }, ...productOpts]);

        const foundProduct = productOpts.find(option => option.value == String(row.product_id)) || null;
        setProduct(foundProduct);
      } catch (error) {
        console.error('Failed to load subcategories or products:', error);
      }
    }
  };



  const handleCloseModal = () => {
    setShowModal(false);
    setSelectedLead(null);
    setLeadDate('');
    setFirstName('');
    setLastName('');
    setPhoneNumber('');
    setEmail('');
    setSource(null);
    setCategory(null);
    setSubCategory(null);
    setProduct(null);
    setYear(null);
    setMonth(null);
    setCampaign(null);
    setCampaignName(null);
    setExcecutive(null);
    setRegion(null);
    setFollowupBranch(null);
    setSubmitting(false);
       setFollowupDate(null);
        setFollowupStatus(null);
          setFollowupComment('');
            setFollowupQualityScore(null);
  };

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    setSubmitting(true);

    try {
      // console.log(selectedLead?.id);
      const transferPayload = {

        leadDateVal: leadDate,
        firstNameVal: firstName,
        lastNameVal: lastName,
        fullNameVal: `${firstName} ${lastName}`,
        emailAddressVal: email,
        phoneNumberVal: phoneNumber,
        sourceVal: source ? parseInt(source.value) : 1,
        categoryVal: category ? parseInt(category.value) : null,
        subCategoryVal: subcategory ? parseInt(subcategory.value) : null,
        productVal: product ? parseInt(product.value) : null,
        regionVal: region ? parseInt(region.value) : null,

        leadTypeVal: 4,
        createdByVal: user.id,
        yearVal: year,
        monthVal: month,
        campaignIdVal: campaign,
        campaignNameVal: campaignname,
        executiveIdVal: excecutive,
        userIdVal: user.id,
        tokenVal: user.access_token,
        idVal: selectedLead?.id,
        importTypeVal: selectedLead?.import_type,
        dmVal: selectedLead?.dm,
        branchVal: followupBranch?.value ? parseInt(followupBranch?.value) : null,
        qualityscoreVal: followupQualityScore?.value,
        leadStatusVal: followupStatus?.value,
        commentVal: followupComment.trim(),
        followupDateVal: '',
        walkinDateVal: '',
          createdAtVal:selectedLead?.created_at,
      };
      if (followupStatus?.value === '2' && followupDate) {
        if (followupDate) {
          transferPayload.followupDateVal = `${followupDate.toLocaleDateString('en-CA')} ${followupDate.toLocaleTimeString('en-GB', {
            hour: '2-digit',
            minute: '2-digit',
          })}`;
        } else {
          transferPayload.followupDateVal = '';
        }
      }


      if (followupStatus?.value === '3' && walkinDate && followupBranch) {

        if (walkinDate) {
          transferPayload.walkinDateVal = `${walkinDate.toLocaleDateString('en-CA')} ${walkinDate.toLocaleTimeString('en-GB', {
            hour: '2-digit',
            minute: '2-digit',
          })}`;
        } else {
          transferPayload.walkinDateVal = '';
        }

      }

      // console.log(transferPayload.monthVal);

      // Simulate API call
      // await new Promise((res) => setTimeout(res, 1000));
      const response = await ImportFreshLeadTransferToLeadList(transferPayload);
      //  toast.success('Lead transferred successfully!');

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
        fetchLeads();

      }


      handleCloseModal();
    } catch (error) {

      toast.dismiss();
      toast.error('Error submitting transfer. Please try again.');
      setSubmitting(false);
    }
  };
  const handleSelectedRowsChange = (state: {
    allSelected: boolean;
    selectedCount: number;
    selectedRows: Lead[];
  }) => {
    setSelectedRows(state.selectedRows);
  };
  //  const handleExecChange1 = (option: { value: string }) => {
  //   setExecFilter(option?.value ?? '0');
  // };
  //  const handleExecChange1 = (selected: OptionType | null) => {
  //   setExecFilter(selected);
  //   console.log('Selected Executive:', selected);
  // };


  const handleExecChange1 = (selected: OptionType | null) => {
    setExecFilter(selected?.value ?? ''); // ✅ fallback to empty if null
  };


  const handleTransfer = async () => {
    if (execFilter === '0') {
      toast.dismiss();
      toast.warn('Please select an executive to transfer the leads.');
      return;
    }

    // const leads = selectedRows.map(row => row.id);
    const leads = selectedRows.map(row => ({ idVal: row.id }));

    try {
      const payload = {
        leads,
        executiveIdVal: execFilter,
        userIdVal: user.id,
        tokenVal: user.access_token,
        createdByVal: user.id,
        transferTypeVal: '2'
      };

      const response = await BulkFreshLeadTransferToLeadList(payload);
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
        setToggleCleared(!toggleCleared);
        setSelectedRows([]);
        setExecFilter('0');
        fetchLeads();
      }


    } catch (error) {
      toast.dismiss();
      toast.error('Failed to transfer leads.');
    }
  };
  const isTransferDisabled = (row: any) =>
    (Number(row.transfer_status) === 2 && leadtype === '2') || row.executive_id == 0;
  const handleInputChange = (e: React.ChangeEvent<any>) => {
    const { name, value } = e.target;
    let updatedValue = value;
    console.log(name);
    if (name === 'firstName' || name === 'lastName') {
      updatedValue = updatedValue.replace(/[^a-zA-Z\s]/g, '');
      updatedValue = updatedValue.replace(/\b\w/g, (char: string) => char.toUpperCase());
    }

    if (name === 'phoneNumber') {
      updatedValue = updatedValue.replace(/\D/g, '').slice(0, 10);
    }

    // Update state based on field name
    if (name === 'firstName') setFirstName(updatedValue);
    if (name === 'lastName') setLastName(updatedValue);
    if (name === 'phoneNumber') setPhoneNumber(updatedValue);
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
        <button
          title={
            isTransferDisabled(row)
              ? 'Cannot transfer due to lead status or missing executive'
              : ''
          }
          onClick={() => handleButtonClick(row)}
          className={
            Number(row.transfer_status) === 2 ? 'btn btn-primary btn-sm' : 'btn btn-danger btn-sm'
          }
          disabled={isTransferDisabled(row)}
        >
          {Number(row.transfer_status) === 2 ? 'Transferred' : 'Transfer'}
        </button>
      ),
      ignoreRowClick: true,
      allowOverflow: true,
      button: true,
      width: '100px',
    },
    {
      name: 'Date',
      selector: (row: Lead) => String(row.lead_date || ''),
      sortable: true,
      width: '100px',
    },
    {
      name: 'Name',
      selector: (row: Lead) => String(row.full_name || ''),
      sortable: true,
      width: '150px',
      wrap: true
    },
    {
      name: 'Phone',
      selector: (row: Lead) => String(row.phone_number || ''),
      sortable: true,
      width: '130px',
    },
     {
      name: 'Region',
      selector: (row: Lead) => String(row.region_name || ''),
      sortable: true,
      width: '130px',
      wrap: true
    },
   
    {
      name: 'Source',
      selector: (row: Lead) => String(row.source_name || ''),
      sortable: true,
      width: '130px',
    },
    {
      name: 'Category',
      selector: (row: Lead) => String(row.category_name || ''),
      sortable: true,
      width: '120px',
    },
    {
      name: 'Product',
      selector: (row: Lead) => String(row.product_name || ''),
      sortable: true,
      width: '120px',
    },
   
    {
      name: 'Created At',
      selector: (row: Lead) => new Date(row.created_at).getTime() || 0,
      format: (row: Lead) => new Date(row.created_at).toLocaleString(),
      sortable: true,
      width: '170px',
    },

  ];

  const ExpandedComponent: React.FC<{ data: Lead }> = ({ data }) => {
    const details = data.json_response_data;
    return (
      <div
        style={{
          backgroundColor: '#F9F9F9',
          padding: '15px',
          borderRadius: '5px',
          border: '1px solid #ddd',
          marginTop: '10px',
        }}
      >
        <strong>Full Details:</strong>
        {details && typeof details === 'object' ? (
          <table className="table table-sm mt-2">
            <tbody>
              {Object.entries(details).map(([key, value], index) => (
                <tr key={`${key}-${index}`}>
                  <th style={{ width: '150px', textTransform: 'capitalize' }}>{key.replace(/_/g, ' ')}</th>
                  <td>{String(value)}</td>
                </tr>
              ))}
            </tbody>
          </table>
        ) : (
          <div className="text-muted mt-2">No additional data available.</div>
        )}
      </div>
    );
  };

  return (
    <Container fluid>



      <PageBreadcrumb title={`Import Fresh Leads List (${data.length})`} />
      {showLogoutLoader && (
        <LogoutOverlay
          duration={5}
          onComplete={async () => {
            await logout(); // your logout function
          }}
        />
      )}


      <Row className="mb-2">
        {(user.type === '1' || user.type === '2') && (
          <Col md={3}>
            <RegionSelect value={regionVal} onChange={handleRegionChange} label="Region" placeholder="All Regions" />
          </Col>
        )}
        {(user.type === '3') && (
          <Col md={3}>
            <RegionSelect value={regionVal} disabled onChange={handleRegionChange} label="Region" placeholder="All Regions" />
          </Col>
        )}
        {(user.type === '1' || user.type === '2' || user.type === '3') && (
          <Col md={3}>
            {/* <pre>{leadtype}</pre> */}
            <select
              id="status"
              className="form-control"
              value={leadtype}
              onChange={handleChange}
            >
              {/* <option value="0">All Status</option> */}
              <option value="1">Fresh</option>
              <option value="2">Assigned</option>
            </select>
          </Col>
        )}
        {['1', '2', '3'].includes(user.type) && leadtype === '2' && (
          <Col md={3}>
            <ExecutiveSelect
              value={actexecutive}
              onChange={handleExecChange}
              showAllOption
              placeholder="All Executive"
            />
          </Col>



        )}

        {leadtype === '2' && (
          <Col md={2}>

            <DatePicker selected={fromDate} onChange={setFromDate} className="form-control" dateFormat="yyyy-MM-dd" />
          </Col>
        )}
        {leadtype === '2' && (
          <Col md={2}>

            <DatePicker selected={toDate} onChange={setToDate} className="form-control" dateFormat="yyyy-MM-dd" />
          </Col>
        )}



        <Col md={1} className="text-end">
          <Button variant="primary" className="btn btn-primary btn-sm" onClick={fetchLeads}>
            Go
          </Button>
        </Col>
        <Col md={2} className="text-end">
          {selectedRows.length > 0 && (
            <ExecutiveSelect value={execFilter} onChange={handleExecChange1} showAllOption />

          )}
        </Col>
        <Col md={2} className="text-end">
          {selectedRows.length > 0 && (
            <button onClick={handleTransfer} className="btn btn-danger btn-sm">
              Transfer ({selectedRows.length})
            </button>

          )}
        </Col>

      </Row>

      <DataTable
        columns={columns}
        data={filteredData}
        progressPending={loading}
        expandableRows
        expandableRowsComponent={ExpandedComponent}
        pagination
        selectableRows
        onSelectedRowsChange={handleSelectedRowsChange}
        clearSelectedRows={toggleCleared}
subHeader
   subHeaderComponent={SubHeaderComponent}
        highlightOnHover
        pointerOnHover
        responsive
        selectableRowDisabled={() => type == 5}
        paginationPerPage={perPage}
        onChangePage={(page) => setCurrentPage(page)}
        onChangeRowsPerPage={(newPerPage, page) => {
          setPerPage(newPerPage);
          setCurrentPage(page);
        }}
      />

      {/* Modal */}
      <Modal show={showModal} onHide={handleCloseModal} backdrop="static" keyboard={false} centered>
        <Modal.Header closeButton>
          <Modal.Title>Transfer Lead</Modal.Title>
        </Modal.Header>
        <Form onSubmit={handleSubmit}>
          <Modal.Body>
            <Row className="mb-3">
              <Col md={3}><Form.Label>Region  <span style={{ color: 'red' }}>*</span></Form.Label></Col>
              <Col md={9}>
                <Select options={regionOptions} value={region} onChange={handleRegionList} placeholder="Select Region" isDisabled />
              </Col>
            </Row>

            <Row className="mb-3">
              <Col md={3}><Form.Label>Lead Date  <span style={{ color: 'red' }}>*</span></Form.Label></Col>
              <Col md={9}>
                <Form.Control type="date" value={leadDate} disabled required />
              </Col>
            </Row>

            <Row className="mb-3">
              <Col md={3}><Form.Label>First Name  <span style={{ color: 'red' }}>*</span></Form.Label></Col>
              <Col md={9}>
                <Form.Control type="text" value={firstName} name="firstName" onChange={handleInputChange} required />
              </Col>
            </Row>

            <Row className="mb-3">
              <Col md={3}><Form.Label>Last Name  <span style={{ color: 'red' }}>*</span></Form.Label></Col>
              <Col md={9}>
                <Form.Control type="text" value={lastName} name="lastName" onChange={handleInputChange} required />
              </Col>
            </Row>

            <Row className="mb-3">
              <Col md={3}><Form.Label>Phone Number  <span style={{ color: 'red' }}>*</span></Form.Label></Col>
              <Col md={9}>
                <Form.Control type="tel" value={phoneNumber} name="phoneNumber" onChange={handleInputChange} required />
              </Col>
            </Row>

            <Row className="mb-3">
              <Col md={3}><Form.Label>Email  <span style={{ color: 'red' }}>*</span></Form.Label></Col>
              <Col md={9}>
                <Form.Control type="email" value={email} onChange={(e) => setEmail(e.target.value)} required />
              </Col>
            </Row>

            <Row className="mb-3">
              <Col md={3}><Form.Label>Source  <span style={{ color: 'red' }}>*</span></Form.Label></Col>
              <Col md={9}>
                <Select options={sourceOptions} value={source} onChange={handleSourceChange} isDisabled placeholder="Select Source" required />
              </Col>
            </Row>

            <Row className="mb-3">
              <Col md={3}><Form.Label>Category  <span style={{ color: 'red' }}>*</span></Form.Label></Col>
              <Col md={9}>
                <Select options={categoryOptions} value={category} onChange={handleCategory} placeholder="Select Category" required />
              </Col>
            </Row>

            {showSubCategory && (
              <Row className="mb-3">
                <Col md={3}><Form.Label>Sub Category  <span style={{ color: 'red' }}>*</span></Form.Label></Col>
                <Col md={9}>
                  <Select options={subCategoryOptions} value={subcategory} onChange={handleSubCategory} placeholder="Select Sub Category" />
                </Col>
              </Row>
            )}

            {showProduct && (
              <Row className="mb-3">
                <Col md={3}><Form.Label>Product  <span style={{ color: 'red' }}>*</span></Form.Label></Col>
                <Col md={9}>
                  <Select options={productOptions} value={product} onChange={handleProductList} placeholder="Select Product" required />
                </Col>
              </Row>
            )}

            <Row className="mb-3">
              <Col md={3}><Form.Label>Quality Score  <span style={{ color: 'red' }}>*</span></Form.Label></Col>
              <Col md={9}>
                <Select options={qualityscoreOptions} value={followupQualityScore} onChange={setFollowupQualityScore} placeholder="Select Quality Score" required />
              </Col>
            </Row>

            <Row className="mb-3">
              <Col md={3}><Form.Label>Lead Status  <span style={{ color: 'red' }}>*</span></Form.Label></Col>
              <Col md={9}>
                <Form.Select value={followupStatus?.value || ''} onChange={(e) => {
                  const val = e.target.value;
                  setFollowupStatus(val ? { value: val, label: val } : null);
                }} required>
                  <option value="" disabled>Select Status</option>
                  <option value="2">Follow Up</option>
                  <option value="3">Partial Walk-In</option>
                  <option value="5">Not Interested</option>
                  <option value="6">Joined Some Where Else</option>
                </Form.Select>
              </Col>
            </Row>

            {followupStatus?.value === '2' && (
              <>
                <Row className="mb-3">
                  <Col md={3}><Form.Label>Follow-Up Date  <span style={{ color: 'red' }}>*</span></Form.Label></Col>
                  <Col md={9}>
                    <Form.Control type="datetime-local" required value={followupDate ? format(followupDate, 'yyyy-MM-dd\'T\'HH:mm') : ''} onChange={(e) => {
                      const value = e.target.value;
                      setFollowupDate(value ? new Date(value) : null);
                    }} />
                  </Col>
                </Row>

                <Row className="mb-3">
                 
                  <Col md={3}><Form.Label>Branch</Form.Label></Col>
                  <Col md={9}>
                    {/* <Select options={branchOptions} value={branch} onChange={handleBranchList} placeholder="Select Branch" /> */}

                 <Select options={branchOptions} value={followupBranch} onChange={setFollowupBranch} />

                  </Col>
                </Row>
              </>
            )}

            {followupStatus?.value === '3' && (
              <>
                <Row className="mb-3">
                  <Col md={3}><Form.Label>Partial Walk-In Date <span style={{ color: 'red' }}>*</span></Form.Label></Col>
                  <Col md={9}>
                    <Form.Control type="datetime-local" required value={walkinDate ? format(walkinDate, 'yyyy-MM-dd\'T\'HH:mm') : ''} onChange={(e) => {
                      const value = e.target.value;
                      setWalkinDate(value ? new Date(value) : null);
                    }} />
                  </Col>
                </Row>

                <Row className="mb-3">
                  <Col md={3}><Form.Label>Branch <span style={{ color: 'red' }}>*</span></Form.Label></Col>
                  <Col md={9}>
                    <Select options={branchOptions} value={followupBranch} onChange={setFollowupBranch} required />
                  </Col>
                </Row>
              </>
            )}

            <Row className="mb-3">
              <Col md={3}><Form.Label>Comment <span style={{ color: 'red' }}>*</span></Form.Label></Col>
              <Col md={9}>
                <Form.Control as="textarea" rows={4} value={followupComment} onChange={(e) => setFollowupComment(e.target.value)} required />
              </Col>
            </Row>
          </Modal.Body>

          <Modal.Footer>
            <Button variant="secondary" onClick={handleCloseModal} disabled={submitting}>Cancel</Button>
            <Button variant="primary" type="submit" disabled={submitting}>
              {submitting ? 'Submitting...' : 'Submit'}
            </Button>
          </Modal.Footer>
        </Form>
      </Modal>

    </Container>
  );
};

export default LeadsDataTable;
