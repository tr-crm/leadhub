import { useState, useEffect, useMemo , useCallback} from 'react';
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
  import { getFollowUpLeadsList, updateLead, addLeadFollowUp,  } from '@/services/leadservice';
  import { SourceList, getCategoryList, getSubCategoryList, ProductList ,StatusList,getQualityList, getUserListByRegion , RegionList, getRegionBasedBranchList} from '@/services/generalservice';
  import type { Lead } from '@/types/lead.types';
  import SourceSelect from '@/components/soucrelist';
  import StatusSelect from '@/components/statusselect';
  import ExecutiveSelect from '@/components/executiveselect';
  import { toast } from 'react-toastify';
import LogoutOverlay from '@/components/LogoutOverlay';
import { isAuthenticated, getUserInfo, logout } from '@/utils/auth';
import { getSavedFilters, addSavedFilters } from '@/services/userservice';

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
    // Memoize user so it doesn't cause continuous re-renders/useEffect triggers
      const user = useMemo(() => (isAuthenticated() ? getUserInfo() : null), []);
   
    
      useEffect(() => {
        if (!user) {
          setShowLogoutLoader(true);
        }
      }, [user]);
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
    

    const [showLogoutLoader, setShowLogoutLoader] = useState<boolean>(false);
    const [data, setData] = useState<Lead[]>([]);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState<string | null>(null);
    const [showModal, setShowModal] = useState(false);
    const [selectedLead, setSelectedLead] = useState<Lead | null>(null);
    const [formData, setFormData] = useState<LeadFormData>({});
   


    const [isLoading, setIsLoading] = useState(false);

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

    const [sourceOptions, setSourceOptions] = useState<OptionType[]>([]);
    const [categoryOptions, setCategoryOptions] = useState<OptionType[]>([]);
    const [subCategoryOptions, setSubCategoryOptions] = useState<OptionType[]>([]);
    const [ProductOptions, setProductOptions] = useState<OptionType[]>([]);
      const [branchOptions, setBranchOptions] = useState<OptionType[]>([]);
  const [loadingFollowUp, setLoadingFollowUp] = useState(false);
    const [executiveOptions, setExecutiveOptions] = useState<OptionType[]>([]);
     const [leadstatusOptions, setleadstatusOptions] = useState<OptionType[]>([]);
     const [qualityscoreOptions, setQualityscoreOptions] = useState<OptionType[]>([]);
    const [revertStatus, setrevertStatus] = useState<string>('All'); // Default to '0' for Fresh leads
    const handleRevertStatusChange = (e: React.ChangeEvent<HTMLSelectElement>) => {
      setrevertStatus(e.target.value);
    };

  
   
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
    const showSourceFilter = false;  // set to false to hide
    const showStatusFilter = false;  // set to false to hide
    const [currentPage, setCurrentPage] = useState(1);
    const [perPage, setPerPage] = useState(10);
    const chagneFollowupBranch = useCallback((opt: OptionType | null) => {
      setFollowupBranch(opt?.value ?? '0');
    }, []);
    const [selectedCounsellor, setSelectedCounsellor] = useState<any>("0");
      const handleNewExecChange = useCallback((opt: OptionType | null) => {
        setSelectedCounsellor(opt?.value ?? '0');
       }, []);
    
      const [regionOptions, setRegionOptions] = useState<OptionType[]>([]);
      const [region, setRegion] = useState(user.region);
    
      useEffect(() => {
        if (!user) return;
        const fetchRegion = async () => {
          try {
            const regions = await RegionList(user.id, user.access_token, user.region, user.type);
            const options = regions.map((reg: any) => ({
              value: String(reg.id),           // change according to API response
              label: reg.display_name || ""   // adjust key as per response
            }));
    
            setRegionOptions([
              { value: "0", label: "Select Region" },
              ...options,
            ]);
          } catch (err) {
            console.error(err);
          }
        };
        fetchRegion();
      }, [user]);

     useEffect(() => {
      if (!user) return;
      if (!fromDate || !toDate) return;

      fetchLeads();
    }, [fromDate, toDate]);

    const fetchLeads = async () => {
         if (!user) return;
      setLoading(true);
      setError(null);
      try {
        const payload: LeadRequestPayload = {
          start: '200',
          sourceVal: sourceFilter,
          fromDateVal: formatDate(fromDate),
          toDateVal: formatDate(toDate),
          userIdVal: user.id,
          tokenVal: user.access_token,
          typeVal: user.type,
          leadstatusVal: statusFilter,
          executiveIdVal: execFilter,
          touchStatusVal:null,
          revertStatusVal: revertStatus,
        };
      
          const response = await getFollowUpLeadsList(payload);
              
              if (response.response === 'login_error') {
                 toast.dismiss();
                toast.error(response.message);
                setShowLogoutLoader(true);
                return;
              } else if (response.response === 'error') {
                 toast.dismiss();
                  setData([]);
                toast.error(response.message);
              } else if (response.response === 'success') {
                 setData([]);
              setData(response.data);
                
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
                  
              }
      } catch {
        setError('Failed to fetch leads. Please try again.');
         setData([]);
         toast.dismiss();
        toast.error('Failed to fetch leads. Please try again.');
      } finally {
        setLoading(false);
      }
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
        const fetchCounsellors = async () => {
          try {
            const res = await getUserListByRegion(
              user.id,
              user.access_token,
              region,
              user.type,
            );

            // ✅ Filter only counsellors with type == 3
            const filtered = res.filter((c: any) => c.type === '3');

            const options = filtered.map((counsellor: any) => ({
              value: String(counsellor.id),
              label: counsellor.display_name || "",
            }));

            setExecutiveOptions([
              { value: "0", label: "Select Counsellor" },
              ...options,
            ]);

          } catch (err) {
            console.error("Error fetching counsellors:", err);
          }
        };

        fetchCounsellors();
    }, [region]);
    
    useEffect(() => {
       const fetchBranches = async () => {
         try {
           const branches = await getRegionBasedBranchList(user.id, user.access_token, '0', region, user.type);
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
     }, [region]);
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
        const getProductList = await ProductList(user.id, user.access_token,'0',categoryId);
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


    // const handleFormChange = (key: keyof LeadFormData, value: any) =>
    //   setFormData((prev) => ({ ...prev, [key]: value }));
  const handleFormChange = (key: keyof LeadFormData, value: any) => {
    let newValue = value;

    if (key === 'firstNameVal' || key === 'lastNameVal') {
      newValue = newValue.replace(/[^a-zA-Z\s]/g, '');

      // Capitalize only the first letter
      if (newValue.length > 0) {
        newValue = newValue.charAt(0).toUpperCase() + newValue.slice(1);
      }
    }

    if (key === 'phoneNumberVal') {
      newValue = newValue.replace(/\D/g, '').slice(0, 10);
    }

    setFormData((prev) => ({ ...prev, [key]: newValue }));
  };
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

   

    const status = followupStatus.value;

    if (status === '2' && (!followupDate || !followupQualityScore || !followupComment.trim())) {
      toast.dismiss();
      toast.error('Please fill in the follow-up date and quality score, comment.');
      setLoadingFollowUp(false);
      return;
    }

    if ((!selectedCounsellor || selectedCounsellor === "0") && viewLead.region !== region ) {
        toast.error("Please select a counsellor");
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
          qualityscoreVal: followupQualityScore?.value,          
      };

      if (viewLead.region !== region) {
        payload.oldBranchIdVal = viewLead.branch_id;
        payload.oldRegionVal = viewLead.region;
        payload.newRegionVal = region;
        payload.oldExcutiveIdVal = viewLead.executive_id;
        payload.newExcutiveIdVal = selectedCounsellor;
        payload.newBranchIdVal = followupBranch;
        payload.regionflagVal = '1';
        payload.transferredByIdVal = user.id;
      }else{
         payload.excutiveIdVal = viewLead.executive_id;
         payload.branchIdVal = followupBranch;
         payload.regionVal = region;
         payload.regionflagVal = '2'

      }
     setLoadingFollowUp(true); // Show spinner

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

    if (status === '3' && walkinDate) {
      // payload.walkinDateVal = walkinDate.toISOString().slice(0, 10);

      if (walkinDate) {
        payload.walkinDateVal = `${walkinDate.toLocaleDateString('en-CA')} ${walkinDate.toLocaleTimeString('en-GB', {
          hour: '2-digit',
          minute: '2-digit',
        })}`;
      } else {
        payload.walkinDateVal = '';
      }
     
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
      setRegion(user.region);
      setFollowupBranch(null);
    }
  };

  


    const columns = [
      {
        name: 'ID',
        cell: (_row: Lead, index: number) =>  (currentPage - 1) * perPage + index + 1,
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
     
        { name: 'Follow Up Date', selector: (row: Lead) => row.followup_date || '-', sortable: true, width: '110px' },
      { name: 'Name', selector: (row: Lead) => row.full_name || '-', sortable: true ,  wrap: true },
      { name: 'Phone', selector: (row: Lead) => row.phone_number || '-', sortable: true,  wrap: true  },
      { name: 'Source', selector: (row: Lead) => row.source_name || '-', sortable: true },
      { name: 'Category', selector: (row: Lead) => row.category_name || '-', sortable: true },
      { name: 'Product', selector: (row: Lead) => row.product_name || '-', sortable: true, width: '90px' },
      // { name: 'Country', selector: (row: Lead) => row.country_name || '-', sortable: true, width: '90px' },
      { name: 'Status', selector: (row: Lead) => row.lead_status_name || '-', sortable: true, width: '110px' },
      { name: 'Executive', selector: (row: Lead) => row.executive_name || '-', sortable: true,  wrap: true  },

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
        <PageBreadcrumb title={`Follow Up List (${data.length})`} />
         {showLogoutLoader && <LogoutOverlay
  onComplete={async () => {
    await logout(); // your logout function
  }}
/>
}
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
               <Form.Label>Revert Status</Form.Label>
                <Form.Select value={revertStatus} onChange={handleRevertStatusChange} required>
                <option value="All">All</option>
                <option value="1">Reverted</option>
                </Form.Select>
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

        <Modal show={showModal} onHide={handleCloseModal} backdrop="static" keyboard={false} size="lg" centered>
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
                  <option value="2">Follow Up</option>
                  <option value="3">Partial Walk-In</option>
                  <option value="5">Not Interested</option>
                  <option value="6">Joined Some Where Else</option>
                </Form.Select>

              </Form.Group>
              {followupStatus?.value === '2' && (
                <Form.Group className="mb-3">
                  <Form.Label>Follow-Up Date</Form.Label>


                  {/* <Form.Control
                    type="date" required
                    value={followupDate ? format(followupDate, 'yyyy-MM-dd') : ''}
                    onChange={(e: React.ChangeEvent<HTMLInputElement>) => {
                      const value = e.target.value;
                      setFollowupDate(value ? new Date(value) : null);
                    }}
                  /> */}
                  
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
              )}
              {followupStatus?.value === '3' && (
                <Form.Group className="mb-3">
                  <Form.Label>Select Region<span style={{ color: 'red' }}>*</span></Form.Label>
                  <Select
                    options={regionOptions}
                    value={regionOptions.find((opt) => opt.value === String(region)) || null}
                    onChange={(opt) => setRegion(opt ? String(opt.value) : "0")}
                  />
                </Form.Group>
              )}
               {followupStatus?.value === '3' && (
                <Form.Group className="mb-3">
                  <Form.Label>Branch</Form.Label>
                  <Select
                    options={branchOptions}
                    value={branchOptions.find((o) => o.value === followupBranch) || null}
                    onChange={chagneFollowupBranch} // expects OptionType
                    required
                  />
                </Form.Group>
              )}
              {(followupStatus?.value === '3'  && viewLead.region !== region) && (
                <Form.Group className="mb-3">
                  <Form.Label>Executive<span style={{ color: 'red' }}>*</span></Form.Label>
                  <Select
                    options={executiveOptions}
                    value={executiveOptions.find((o) => o.value === selectedCounsellor) || null}
                    onChange={handleNewExecChange}
                    placeholder="Select Counselor"
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
