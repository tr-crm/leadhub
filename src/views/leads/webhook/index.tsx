import React, { useEffect, useState } from 'react';
import DataTable from 'react-data-table-component';
import { Container, Button, Row, Col, Modal, Form } from 'react-bootstrap';
import PageBreadcrumb from '@/components/PageBreadcrumb';
import { getWebhookLeadsList,FreshLeadTransferToLeadList } from '@/services/leadservice';
import { SourceList, getCategoryList, getSubCategoryList, ProductList, getBranchList } from '@/services/generalservice';
import type { WebhookLeadayload } from '@/services/leadservice';
import type { Lead } from '@/types/lead.types';
import { getUserInfo } from '@/utils/auth';
import RegionSelect from '@/components/regionselect';
import Select from 'react-select';
import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';



interface OptionType {
  value: string;
  label: string;
}

const LeadsDataTable: React.FC = () => {
  const [data, setData] = useState<Lead[]>([]);
  const [loading, setLoading] = useState<boolean>(true);
  const [showModal, setShowModal] = useState(false);
  const [selectedLead, setSelectedLead] = useState<Lead | null>(null);

  const [leadDate, setLeadDate] = useState('');
  const [firstName, setFirstName] = useState('');
  const [lastName, setLastName] = useState('');
  const [phoneNumber, setPhoneNumber] = useState('');
  const [email, setEmail] = useState('');

  const [sourceOptions, setSourceOptions] = useState<OptionType[]>([]);
  const [categoryOptions, setCategoryOptions] = useState<OptionType[]>([]);
  const [subCategoryOptions, setSubCategoryOptions] = useState<OptionType[]>([]);
  const [productOptions, setProductOptions] = useState<OptionType[]>([]);
  // const [countryOptions, setCountryOptions] = useState<OptionType[]>([]);
  const [branchOptions, setBranchOptions] = useState<OptionType[]>([]);
  const [source, setSource] = useState<OptionType | null>(null);
  const [category, setCategory] = useState<OptionType | null>(null);
  const [subcategory, setSubCategory] = useState<OptionType | null>(null);
  const [product, setProduct] = useState<OptionType | null>(null);
  // const [country, setCountry] = useState<OptionType | null>(null);
  const [branch, setBranch] = useState<OptionType | null>(null);
   const [year, setYear] = useState<OptionType | null>(null);
    const [month, setMonth] = useState<OptionType | null>(null);
     const [campaign, setCampaign] = useState<OptionType | null>(null);
       const [campaignname, setCampaignName] = useState<OptionType | null>(null);
     
       const [excecutive, setExcecutive] = useState<OptionType | null>(null);


   


  const [showSubCategory, setShowSubCategory] = useState(true);
  const [showProduct, setShowProduct] = useState(true);
  // const [showCountry, setShowCountry] = useState(false);


  const [submitting, setSubmitting] = useState(false);

  const user = getUserInfo();
  const type = user.type;

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
  // useEffect(() => {
  //   const fetchCountry = async () => {
  //     try {
  //       const countries = await CountryList(user.id, user.access_token);
  //       const options = countries.map(item => ({
  //         value: item.id,
  //         label: item.display_name,
  //       }));
  //       setCountryOptions([{ value: '0', label: 'Select Country' }, ...options]);
  //     } catch (err) {
  //       console.error(err);
  //     }
  //   };
  //   fetchCountry();
  // }, [user.id, user.access_token]);
  useEffect(() => {
    const fetchBranch = async () => {
      try {
        const branches = await getBranchList(user.id, user.access_token);
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

  const [regionVal, setRegionVal] = useState<string>(getInitialRegionValue());

  const handleRegionChange = (option: OptionType | null) => {
    setRegionVal(option?.value ?? '0');
  };

  const handleSourceChange = (option: OptionType | null): void => {
    setSource(option);
  };

  // const handleCategory = (option: OptionType | null): void => {
  //   setCategory(option);
  // };
  const handleCategory = (option: OptionType | null): void => {
    setCategory(option);
    setProduct(null);
    const categoryLabel = option?.label.toLowerCase() || '';

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
  const handleBranchList = (option: OptionType | null): void => {
    setBranch(option);
  };

  const fetchLeads = async () => {
    setLoading(true);
    const payload: WebhookLeadayload = {
      start: '',
      sourceVal: 'All',
      userIdVal: user.id,
      tokenVal: user.access_token,
      regionVal: regionVal,
    };

    try {
      const response = await getWebhookLeadsList(payload);
      setData(response.data);
    } catch (error) {
      console.error('Failed to fetch leads:', error);
      alert('Failed to fetch leads. Please try again.');
    } finally {
      setLoading(false);
    }
  };

  useEffect(() => {
    const timer = setTimeout(() => {
      fetchLeads();
    }, 100);
    return () => clearTimeout(timer);
  }, [regionVal]);

  const handleButtonClick = async (row: Lead) => {
    const sourceId = String(row.source_id);
    const foundSource = sourceOptions.find(option => option.value == sourceId) || null;
    const foundCategory = categoryOptions.find(option => option.value == String(row.category_id)) || null;

    setSource(foundSource);
    setCategory(foundCategory);

    if (row.category_id) {
      await fetchSubCategories(row.category_id);
      await fetchProductList(row.category_id);
    }

    const foundSubCategory = subCategoryOptions.find(option => option.value == String(row.sub_category_id)) || null;
    setSubCategory(foundSubCategory);
    const foundProduct = productOptions.find(option => option.value == String(row.id)) || null;
    setProduct(foundProduct);
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
    setShowModal(true);

    
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
    setSubmitting(false);
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
        // countryVal: country ? parseInt(country.value) : null,
        branchVal: branch ? parseInt(branch.value) : null,
        leadTypeVal: 1,
        createdByVal: user.id,
        yearVal: year,
        monthVal: month,
        campaignIdVal: campaign,
        campaignNameVal: campaignname,
        executiveIdVal: excecutive,
        userIdVal: user.id,
        tokenVal: user.access_token,
        idVal:selectedLead?.id
      };

      // console.log(transferPayload.monthVal);

      // Simulate API call
      // await new Promise((res) => setTimeout(res, 1000));
      await FreshLeadTransferToLeadList(transferPayload);
        //  toast.success('Lead transferred successfully!');
         toast.success('Lead transferred!', {
  position: "top-right",
  autoClose: 5000,
  hideProgressBar: false,
  closeOnClick: true,
  pauseOnHover: true,
  draggable: false,
  progress: undefined,
  theme: "colored",
 
});


      handleCloseModal();
    } catch (error) {
      

     toast.error('Error submitting transfer. Please try again.', {
  position: "top-right",
  autoClose: 4000,
  hideProgressBar: false,
  closeOnClick: true,
  pauseOnHover: true,
  draggable: false,
  progress: undefined,
  theme: "colored",
 
});
      setSubmitting(false);
    }
  };

  const columns = [
    {
      name: 'ID',
      cell: (_row: Lead, index: number) => index + 1,
      width: '70px',
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
      width: '130px',
    },
    {
      name: 'Phone',
      selector: (row: Lead) => String(row.phone_number || ''),
      sortable: true,
      width: '110px',
    },
    {
      name: 'Source',
      selector: (row: Lead) => String(row.source_name || ''),
      sortable: true,
      width: '100px',
    },
    {
      name: 'Region',
      selector: (row: Lead) => String(row.region_name || ''),
      sortable: true,
      width: '100px',
    },
    {
      name: 'Created At',
      selector: (row: Lead) => new Date(row.created_at).getTime() || 0,
      format: (row: Lead) => new Date(row.created_at).toLocaleString(),
      sortable: true,
      width: '170px',
    },
    {
      name: 'Action',
      cell: (row: Lead) => (
        <button onClick={() => handleButtonClick(row)} className="btn btn-primary btn-sm">
          Transfer
        </button>
      ),
      ignoreRowClick: true,
      allowOverflow: true,
      button: true,
      width: '100px',
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
      <PageBreadcrumb title="Fresh Leads List" />
    <ToastContainer position="top-right" autoClose={3000} />

      <Row className="mb-2">
        {(user.type === '1' || user.type === '2' || user.type === '3') && (
          <Col md={3}>
            <RegionSelect value={regionVal} onChange={handleRegionChange} label="Region" placeholder="All Regions" />
          </Col>
        )}
        <Col md={1} className="text-end">
          <Button variant="primary" onClick={fetchLeads}>
            Go
          </Button>
        </Col>
      </Row>

      <DataTable
        title="Fresh Leads List"
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

      {/* Modal */}
      <Modal show={showModal} onHide={handleCloseModal} centered>
        <Modal.Header closeButton>
          <Modal.Title>Transfer Lead</Modal.Title>
        </Modal.Header>
        <Form onSubmit={handleSubmit}>
          <Modal.Body>
            <Form.Group className="mb-3">
              <Form.Label>Lead Date</Form.Label>
              <Form.Control type="date" value={leadDate} onChange={(e) => setLeadDate(e.target.value)} required />
            </Form.Group>

            <Form.Group className="mb-3">
              <Form.Label>First Name</Form.Label>
              <Form.Control type="text" value={firstName} onChange={(e) => setFirstName(e.target.value)} required />
            </Form.Group>

            <Form.Group className="mb-3">
              <Form.Label>Last Name</Form.Label>
              <Form.Control type="text" value={lastName} onChange={(e) => setLastName(e.target.value)} required />
            </Form.Group>

            <Form.Group className="mb-3">
              <Form.Label>Phone Number</Form.Label>
              <Form.Control type="tel" value={phoneNumber} onChange={(e) => setPhoneNumber(e.target.value)} required />
            </Form.Group>

            <Form.Group className="mb-3">
              <Form.Label>Email</Form.Label>
              <Form.Control type="email" value={email} onChange={(e) => setEmail(e.target.value)} required />
            </Form.Group>

            <Form.Group className="mb-3">
              <Form.Label>Source</Form.Label>
              <Select options={sourceOptions} value={source} onChange={handleSourceChange} placeholder="Select Source" required />
            </Form.Group>

            <Form.Group className="mb-3">
              <Form.Label>Category</Form.Label>
              <Select options={categoryOptions} value={category} onChange={handleCategory} placeholder="Select Category" required />
            </Form.Group>
            {showSubCategory && (
              <Form.Group className="mb-3">
                <Form.Label>Sub Category</Form.Label>
                <Select options={subCategoryOptions} value={subcategory} onChange={handleSubCategory} placeholder="Select Sub Category" />
              </Form.Group>
            )}

            {showProduct && (
              <Form.Group className="mb-3">
                <Form.Label>Product</Form.Label>
                <Select options={productOptions} value={product} onChange={handleProductList} placeholder="Select Product" required />
              </Form.Group>
            )}

            {/* {showCountry && (
              <Form.Group className="mb-3">
                <Form.Label>Country</Form.Label>
                <Select options={countryOptions} value={country} onChange={handleCountryList} placeholder="Select Country" />
              </Form.Group>
            )} */}

            {/* <Form.Group className="mb-3">
              <Form.Label>Sub Category</Form.Label>
              <Select options={subCategoryOptions} value={subcategory} onChange={handleSubCategory} required placeholder="Select Sub Category" />
            </Form.Group>
              <Form.Group className="mb-3">
              <Form.Label>Product</Form.Label>
              <Select options={productOptions} value={product} onChange={handleProductList} placeholder="Select Product" required/>
            </Form.Group>
            <Form.Group className="mb-3">
              <Form.Label>Country</Form.Label>
              <Select options={countryOptions} value={country} onChange={handleCountryList} placeholder="Select Country" required/>
            </Form.Group> */}
            <Form.Group className="mb-3">
              <Form.Label>Branch</Form.Label>
              <Select options={branchOptions} value={branch} onChange={handleBranchList} placeholder="Select Branch" />
            </Form.Group>
          </Modal.Body>
          <Modal.Footer>
            <Button variant="secondary" onClick={handleCloseModal} disabled={submitting}>
              Cancel
            </Button>
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
