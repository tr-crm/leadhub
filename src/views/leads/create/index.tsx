import React, { useState } from 'react';
import { useNavigate } from 'react-router-dom';
import { Container, Form, Button, Alert, Row, Col, Card } from 'react-bootstrap';
import PageBreadcrumb from '@/components/PageBreadcrumb';
import { getUserInfo } from '@/utils/auth';
import { CreateLead } from '@/services/leadservice';
import type { LeadCreateRequestPayload } from '@/services/leadservice';
import SourceSelect from '@/components/soucrelist';
import CategorySelect from '@/components/categoryselect';
import SubCategorySelect from '@/components/subcategoryselect';
import ProductSelect from '@/components/productselect';
import CountrySelect from '@/components/countryselect';
import BranchSelect from '@/components/branchselect';
// import StatusSelect from '@/components/statusselect';
// import ExecutiveSelect from '@/components/executiveselect';

interface OptionType {
  value: number | '';
  label: string;
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
  required = false,
  children,
}: {
  label: string;
  name: string;
  value: any;
  onChange: (e: any) => void;
  type?: string;
  required?: boolean;
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
        />
      )}
    </Col>
  </Row>
);

const LeadCreatePage: React.FC = () => {
  const user = getUserInfo();
  const navigate = useNavigate();

  if (!user?.id || !user?.access_token) {
    return (
      <Container className="py-5">
        <Alert variant="danger">User not authenticated. Please log in.</Alert>
      </Container>
    );
  }

  const initialState: LeadCreateRequestPayload = {
    leadDateVal: new Date().toISOString().split('T')[0],
    firstNameVal: '',
    lastNameVal: '',
    emailAddressVal: '',
    phoneNumberVal: '',
    sourceVal: '',
    categoryVal: '',
    subCategoryVal: '',
    productVal: '',
    countryVal: '',
    branchVal: '',
    leadTypeVal: '',
    leadStatusVal: '',
    createdByVal: user.id,
    userIdVal: user.id,
    tokenVal: user.access_token,
  };

  const numberFields = [
    'sourceVal',
    'categoryVal',
    'subCategoryVal',
    'leadTypeVal',
    'leadStatusVal',
    'productVal',
    'countryVal',
    'branchVal',
  ];

  const [formData, setFormData] = useState(initialState);
  const [status, setStatus] = useState<'idle' | 'success' | 'error'>('idle');
  const [isLoading, setIsLoading] = useState(false);
  const [errorMessage, setErrorMessage] = useState('');

  // Type-safe category name
  const selectedCategoryName =
    typeof formData.categoryVal === 'number' ? CATEGORY_NAMES[formData.categoryVal] : '';

  const isTestprep = selectedCategoryName === 'Testprep';
  const isACS = selectedCategoryName === 'ACS';
  const isImmigration = selectedCategoryName === 'Immigration';

  const handleChange = (
    e: React.ChangeEvent<HTMLInputElement | HTMLSelectElement | HTMLTextAreaElement> | { name: string; value: string | number }
  ) => {
    if ('target' in e) {
      const { name, value } = e.target;
      setFormData(prev => ({
        ...prev,
        [name]: numberFields.includes(name) ? (value === '' ? '' : Number(value)) : value,
      }));
    } else {
      const { name, value } = e;
      setFormData(prev => ({
        ...prev,
        [name]: numberFields.includes(name) ? (value === '' ? '' : Number(value)) : value,
      }));
    }
  };

  const handleCategoryChange = (option: OptionType | null) => {
    setFormData(prev => ({
      ...prev,
      categoryVal: option?.value ?? '',
      subCategoryVal: '',
      productVal: '',
      countryVal: '',
    }));
  };

  const handleSourceChange = (option: OptionType | null) =>
    setFormData(prev => ({ ...prev, sourceVal: option?.value ?? '' }));

  const handleProductChange = (option: OptionType | null) =>
    setFormData(prev => ({ ...prev, productVal: option?.value ?? '' }));

  const handleSubCategoryChange = (option: OptionType | null) =>
    setFormData(prev => ({ ...prev, subCategoryVal: option?.value ?? '' }));

  const handleCountryChange = (option: OptionType | null) =>
    setFormData(prev => ({ ...prev, countryVal: option?.value ?? '' }));

  const handleBranchChange = (option: OptionType | null) =>
    setFormData(prev => ({ ...prev, branchVal: option?.value ?? '' }));
  

  const normalizeNumber = (val: string | number): number => (val === '' ? 0 : Number(val));

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    setStatus('idle');
    setErrorMessage('');
    setIsLoading(true);

    // Validation
    if (isTestprep && formData.productVal === '') {
      setStatus('error');
      setErrorMessage('Product is required for Testprep.');
      setIsLoading(false);
      return;
    }
    if (isACS && formData.countryVal === '') {
      setStatus('error');
      setErrorMessage('Country is required for ACS.');
      setIsLoading(false);
      return;
    }
    if (isImmigration && (formData.subCategoryVal === '' || formData.countryVal === '')) {
      setStatus('error');
      setErrorMessage('SubCategory and Country are required for Immigration.');
      setIsLoading(false);
      return;
    }

    const payload: LeadCreateRequestPayload = {
      ...formData,
        sourceVal: formData.sourceVal,
      // sourceVal: normalizeNumber(formData.sourceVal),
      categoryVal: normalizeNumber(formData.categoryVal),
      subCategoryVal: normalizeNumber(formData.subCategoryVal),
      productVal: normalizeNumber(formData.productVal),
      countryVal: normalizeNumber(formData.countryVal),
      branchVal: normalizeNumber(formData.branchVal),
      leadTypeVal: normalizeNumber(formData.leadTypeVal),
      leadStatusVal: normalizeNumber(formData.leadStatusVal),
      createdByVal: user.id,
      userIdVal: user.id,
      tokenVal: user.access_token,
    };

    try {
      await CreateLead(payload);
      setStatus('success');
      setFormData(initialState);
      navigate('/leads/list');
    } catch (err) {
      console.error(err);
      setStatus('error');
      setErrorMessage('Failed to create lead. Please try again.');
    } finally {
      setIsLoading(false);
    }
  };

  return (
    <Container fluid>
        <PageBreadcrumb title="Leads Create" />
    <div className="d-flex justify-content-center align-items-start"
    >
      
      <Card style={{ maxWidth: 600, width: '100%', padding: '2rem' }} className="shadow-sm">
      
        
        {status === 'success' && <Alert variant="success">Lead created successfully!</Alert>}
        {status === 'error' && <Alert variant="danger">{errorMessage}</Alert>}

        <Form onSubmit={handleSubmit} className="mt-3">
          <InlineField label="Lead Date" name="leadDateVal" value={formData.leadDateVal} onChange={handleChange} type="date" required />
          <InlineField label="First Name" name="firstNameVal" value={formData.firstNameVal} onChange={handleChange} required />
          <InlineField label="Last Name" name="lastNameVal" value={formData.lastNameVal} onChange={handleChange} required />
          <InlineField label="Email Address" name="emailAddressVal" value={formData.emailAddressVal} onChange={handleChange} type="email" required />
          <InlineField label="Phone Number" name="phoneNumberVal" value={formData.phoneNumberVal} onChange={handleChange} type="tel" required />

            <InlineField  label="Source" name="sourceVal" value={formData.sourceVal} onChange={handleSourceChange} required>
    <SourceSelect
      value={formData.sourceVal}
      onChange={handleSourceChange}
      required
    />
  </InlineField>
       

          <InlineField label="Category" name="categoryVal" value={formData.categoryVal} onChange={handleCategoryChange} required>
            <CategorySelect value={formData.categoryVal} onChange={handleCategoryChange} required name="categoryVal" label="Category" />
          </InlineField>

          {isImmigration && (
            <InlineField label="SubCategory" name="subCategoryVal" value={formData.subCategoryVal} onChange={handleSubCategoryChange} required>
              <SubCategorySelect
                categoryId={formData.categoryVal}
                value={formData.subCategoryVal}
                onChange={handleSubCategoryChange}
                required
                name="subCategoryVal"
                label="SubCategory"
              />
            </InlineField>
          )}

          {isTestprep && (
            <InlineField label="Product" name="productVal" value={formData.productVal} onChange={handleProductChange} required>
              <ProductSelect value={formData.productVal} onChange={handleProductChange} required label="Product" />
            </InlineField>
          )}

          {(isACS || isImmigration) && (
            <InlineField label="Country" name="countryVal" value={formData.countryVal} onChange={handleCountryChange} required>
              <CountrySelect value={formData.countryVal} onChange={handleCountryChange} required label="Country" />
            </InlineField>
          )}

          <InlineField label="Branch" name="branchVal" value={formData.branchVal} onChange={handleBranchChange}>
            <BranchSelect
              value={formData.branchVal === '' ? '' : String(formData.branchVal)}
              onChange={handleBranchChange}
              name="branchVal"
              label="Branch"
            />

            
          </InlineField>
             {/* <InlineField label="Branch" name="stVal" value={formData.branchVal} onChange={handleBranchChange}>
            <StatusSelect
              value={formData.branchVal === '' ? '' : String(formData.branchVal)}
              onChange={handleBranchChange}
              name="branchVal"
              label="Branch"
               placeholder="Select Status"
            />
       
          </InlineField> */}

          <Row>
            <Col md={{ span: 6, offset: 3 }} className="text-end">
              <Button type="submit" variant="primary" disabled={isLoading}>
                {isLoading ? 'Saving...' : 'Save'}
              </Button>
            </Col>
          </Row>
        </Form>
      </Card>
    </div>
    </Container>
  );
};

export default LeadCreatePage;
