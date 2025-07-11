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
import BranchSelect from '@/components/branchselect';
import ExecutiveSelect from '@/components/executiveselect';
import { toast } from 'react-toastify';

interface OptionType {
  value: any;
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
    regionVal: user.region,
    executiveIdVal: 0,
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
    'executiveIdVal',
  ];

  const [formData, setFormData] = useState(initialState);
  const [status, setStatus] = useState<'idle' | 'success' | 'error'>('idle');
  const [isLoading, setIsLoading] = useState(false);
  const [errorMessage, setErrorMessage] = useState('');
  console.log(status,errorMessage)

  const selectedCategoryName =
    typeof formData.categoryVal === 'number' ? CATEGORY_NAMES[formData.categoryVal] : '';

  const isTestprep = selectedCategoryName === 'Testprep';
  const isACS = selectedCategoryName === 'ACS';
  const isImmigration = selectedCategoryName === 'Immigration';

  const handleChange = (
    e:
      | React.ChangeEvent<HTMLInputElement | HTMLSelectElement | HTMLTextAreaElement>
      | { name: string; value: string | number }
  ) => {
    const name = 'target' in e ? e.target.name : e.name;
    const value = 'target' in e ? e.target.value : e.value;

    setFormData((prev) => ({
      ...prev,
      [name]: numberFields.includes(name) ? (value === '' ? '' : Number(value)) : value,
    }));
  };

  const handleCategoryChange = (option: OptionType | null) => {
    setFormData((prev) => ({
      ...prev,
      categoryVal: option?.value ?? '',
      subCategoryVal: '',
      productVal: '',
      countryVal: '',
    }));
  };

  const handleSourceChange = (option: OptionType | null) =>
    setFormData((prev) => ({ ...prev, sourceVal: option?.value ?? '' }));

  const handleProductChange = (option: OptionType | null) =>
    setFormData((prev) => ({ ...prev, productVal: option?.value ?? '' }));

  const handleSubCategoryChange = (option: OptionType | null) =>
    setFormData((prev) => ({ ...prev, subCategoryVal: option?.value ?? '' }));

  const handleBranchChange = (selected: OptionType | null): void => {
    setFormData((prev) => ({
      ...prev,
      branchVal: selected?.value ?? '',
    }));
  };

  const handleExecutiveChange = (selected: OptionType | null): void => {
    setFormData((prev) => ({
      ...prev,
      executiveIdVal: selected?.value ?? 0,
    }));
  };

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    setStatus('idle');
    setErrorMessage('');
    setIsLoading(true);

    // Validations
    if (isTestprep && !formData.productVal) {
      toast.error('Product Required.');
      setStatus('error');
      setErrorMessage('Product Required.');
      setIsLoading(false);
      return;
    }

    if (isImmigration && !formData.subCategoryVal) {
      toast.error('SubCategory Required.');
      setStatus('error');
      setErrorMessage('SubCategory Required.');
      setIsLoading(false);
      return;
    }

    if (isImmigration && !formData.productVal) {
      toast.error('Product Required.');
      setStatus('error');
      setErrorMessage('Product Required.');
      setIsLoading(false);
      return;
    }

    if (!formData.sourceVal) {
      toast.error('Source Required.');
      setStatus('error');
      setErrorMessage('Source Required.');
      setIsLoading(false);
      return;
    }

    if (!formData.categoryVal) {
      toast.error('Category Required.');
      setStatus('error');
      setErrorMessage('Category Required.');
      setIsLoading(false);
      return;
    }

    if (!formData.executiveIdVal) {
      toast.error('Executive Required.');
      setStatus('error');
      setErrorMessage('Executive Required.');
      setIsLoading(false);
      return;
    }

    const payload: LeadCreateRequestPayload = {
      ...formData,
      sourceVal: Number(formData.sourceVal),
      categoryVal: Number(formData.categoryVal),
      subCategoryVal: Number(formData.subCategoryVal),
      productVal: Number(formData.productVal),
      branchVal: Number(formData.branchVal),
      executiveIdVal: Number(formData.executiveIdVal),
      createdByVal: user.id,
      userIdVal: user.id,
      tokenVal: user.access_token,
      regionVal: user.region,
    };

    try {
      const response = await CreateLead(payload);

      if (response.response === 'login_error') {
        toast.error(response.message);
        navigate('/login');
      } else if (response.response === 'error') {
        toast.error(response.message);
      } else if (response.response === 'success') {
        toast.success(response.message);
        setStatus('success');
        setFormData(initialState);
        navigate('/leads/list');
      }
    } catch (err) {
      setStatus('error');
      setErrorMessage('Failed to create lead. Please try again.');
    } finally {
      setIsLoading(false);
    }
  };

  return (
    <Container fluid>
      <PageBreadcrumb title="Leads Create" />
      <div className="d-flex justify-content-center align-items-start">
        <Card style={{ maxWidth: 600, width: '100%', padding: '2rem' }} className="shadow-sm">
          <Form onSubmit={handleSubmit} className="mt-3">
            <InlineField label="Lead Date" name="leadDateVal" value={formData.leadDateVal} onChange={handleChange} type="date" required />
            <InlineField label="First Name" name="firstNameVal" value={formData.firstNameVal} onChange={handleChange} required placeholder="Enter first name" />
            <InlineField label="Last Name" name="lastNameVal" value={formData.lastNameVal} onChange={handleChange} required placeholder="Enter last name" />
            <InlineField label="Email Address" name="emailAddressVal" value={formData.emailAddressVal} onChange={handleChange} type="email" required placeholder="example@email.com" />
            <InlineField label="Phone Number" name="phoneNumberVal" value={formData.phoneNumberVal} onChange={handleChange} type="tel" required placeholder="e.g., +91-9876543210" />
            <InlineField label="Source" name="sourceVal" value={formData.sourceVal} onChange={handleSourceChange} required>
              <SourceSelect value={formData.sourceVal} onChange={handleSourceChange} required />
            </InlineField>
            <InlineField label="Category" name="categoryVal" value={formData.categoryVal} onChange={handleCategoryChange} required>
              <CategorySelect value={formData.categoryVal} onChange={handleCategoryChange} required name="categoryVal" label="Category" />
            </InlineField>
            {isImmigration && (
              <InlineField label="SubCategory" name="subCategoryVal" value={formData.subCategoryVal} onChange={handleSubCategoryChange} required>
                <SubCategorySelect categoryId={formData.categoryVal} value={formData.subCategoryVal} onChange={handleSubCategoryChange} required />
              </InlineField>
            )}
            {(isTestprep || isACS || isImmigration) && (
              <InlineField label="Product" name="productVal" value={formData.productVal} onChange={handleProductChange} required>
                <ProductSelect categoryId={formData.categoryVal} value={formData.productVal} onChange={handleProductChange} required />
              </InlineField>
            )}
            <InlineField label="Tele Executive" name="executiveIdVal" value={formData.executiveIdVal} onChange={handleExecutiveChange}>
              <ExecutiveSelect
                value={formData.executiveIdVal}
                onChange={handleExecutiveChange}
                name="executiveIdVal"
                label="Tele Executive"
                required
              />
            </InlineField>
            <InlineField label="Branch" name="branchVal" value={formData.branchVal} onChange={handleBranchChange}>
              <BranchSelect value={formData.branchVal} onChange={handleBranchChange} name="branchVal" label="Branch" required />
            </InlineField>
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
