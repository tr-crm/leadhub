import React, { useEffect, useState } from 'react';
import type { FormEvent } from 'react';
import { useNavigate } from 'react-router-dom';
import { Container, Card, Alert, Form, Button, Row, Col } from 'react-bootstrap';
import Select from 'react-select';
import DatePicker from 'react-datepicker';
import 'react-datepicker/dist/react-datepicker.css';

import { ImportLeadCreate } from '@/services/leadservice';
import type { LeadPayload } from '@/services/leadservice';
import { toast } from 'react-toastify';
import PageBreadcrumb from '@/components/PageBreadcrumb';
import {
  SourceList,
  getCategoryList,
  getSubCategoryList,
  ProductList,
  getBranchList,
} from '@/services/generalservice';
import { getUserInfo } from '@/utils/auth';

interface OptionType {
  label: string;
  value: string;
}

const ExcelImport: React.FC = () => {
  const user = getUserInfo();
  const navigate = useNavigate();

  const [sourceOptions, setSourceOptions] = useState<OptionType[]>([]);
  const [categoryOptions, setCategoryOptions] = useState<OptionType[]>([]);
  const [subCategoryOptions, setSubCategoryOptions] = useState<OptionType[]>([]);
  const [productOptions, setProductOptions] = useState<OptionType[]>([]);
  const [branchOptions, setBranchOptions] = useState<OptionType[]>([]);

  const [selectedDate, setSelectedDate] = useState<Date | null>(null);
  const [source, setSource] = useState<OptionType | null>(null);
  const [category, setCategory] = useState<OptionType | null>(null);
  const [subcategory, setSubcategory] = useState<OptionType | null>(null);
  const [product, setProduct] = useState<OptionType | null>(null);
  const [branch, setBranch] = useState<OptionType | null>(null);

  const [name, setName] = useState('');
  const [phone, setPhone] = useState('');
  const [email, setEmail] = useState('');

  const [error, setError] = useState('');
  const [successMessage, setSuccessMessage] = useState('');
  const [isSubmitting, setIsSubmitting] = useState(false);
  const [errors, setErrors] = useState<Record<string, string>>({});

  useEffect(() => {
    const fetchInitialData = async () => {
      try {
        const [sources, categories, branches] = await Promise.all([
          SourceList(user.id, user.access_token),
          getCategoryList(user.id, user.access_token),
          getBranchList(user.id, user.access_token),
        ]);

        setSourceOptions(sources.map((item: any) => ({ value: item.id.toString(), label: item.display_name })));
        setCategoryOptions(categories.map((cat: any) => ({ value: String(cat.id), label: cat.display_name })));
        setBranchOptions(branches.map((bran: any) => ({ value: String(bran.id), label: bran.display_name })));
      } catch (err) {
        console.error('Error fetching initial data', err);
      }
    };
    fetchInitialData();
  }, [user.id, user.access_token]);

  useEffect(() => {
    const fetchDependentData = async () => {
      if (!category) return;

      try {
        const [subCats, products] = await Promise.all([
          getSubCategoryList(user.id, user.access_token, Number(category.value)),
          ProductList(user.id, user.access_token, '0', Number(category.value)),
        ]);

        setSubCategoryOptions(subCats.map((item: any) => ({ value: String(item.id), label: item.display_name })));
        setProductOptions(products.map((item: any) => ({ value: String(item.id), label: item.display_name })));
      } catch (err) {
        console.error('Error fetching dependent data', err);
      }
    };
    fetchDependentData();
  }, [category]);

  const selectedCategoryLabel = category?.label?.toLowerCase() || '';
  const shouldShowProduct = ['test prep', 'acs', 'immigration'].includes(selectedCategoryLabel);
  const shouldShowSubCategory = selectedCategoryLabel === 'immigration';

  const validateForm = () => {
    const newErrors: Record<string, string> = {};
    if (!source) newErrors.source = 'Source is required';
    if (!category) newErrors.category = 'Category is required';
    if (shouldShowProduct && !product) newErrors.product = 'Product is required';
    if (shouldShowSubCategory && !subcategory) newErrors.subcategory = 'Subcategory is required';
    if (!branch) newErrors.branch = 'Branch is required';
    if (!selectedDate) newErrors.selectedDate = 'Date is required';
    if (!name.trim()) newErrors.name = 'Name is required';
    if (!phone.trim()) {
      newErrors.phone = 'Phone number is required';
    } else if (!/^\d{12}$/.test(phone.trim())) {
      newErrors.phone = 'Phone number must be exactly 12 digits';
    }
    if (!email.trim()) {
      newErrors.email = 'Email is required';
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.trim())) {
      newErrors.email = 'Invalid email format';
    }

    setErrors(newErrors);
    return Object.keys(newErrors).length === 0;
  };

  const capitalizeFirst = (text: string) =>
    text.charAt(0).toUpperCase() + text.slice(1).toLowerCase();

  const handleSubmit = async (e: FormEvent) => {
    e.preventDefault();
    setError('');
    setSuccessMessage('');

    if (!validateForm()) return;

    setIsSubmitting(true);
    try {
      const payload: LeadPayload = {
        lead_date: selectedDate?.toISOString().split('T')[0] || '',
        source_id: source?.value || '',
        category_id: category?.value || '',
        sub_category_id: subcategory?.value || '',
        product_id: product?.value || '',
        branch_id: branch?.value || '',
        lead_type: '4',
        created_by: user.id,
        data: [{
          name: capitalizeFirst(name.trim()),
          phone: phone.trim(),
          email: email.trim()
        }],
        userIdVal: user.id,
        tokenVal: user.access_token,
        region:"",
        dm: 1
      };

      const response = await ImportLeadCreate(payload);

      if (response.data.response === 'login_error') {
        toast.error(response.message || 'Session expired, please login again.');
      } else if (response.data.response === 'error') {
        toast.error(response.message || 'Failed to import data.');
      } else if (response.data.response === 'success') {
        toast.success(response.message || 'Data imported successfully!');
        navigate('/import/list');
      }
    } catch (err: any) {
      toast.error(err.message || 'Something went wrong.');
    } finally {
      setIsSubmitting(false);
    }
  };

  return (
    <Container fluid>
      <PageBreadcrumb title="Lead Entry" />
      <Card className="p-4 shadow-sm mx-auto" style={{ maxWidth: 700 }}>
        <Form onSubmit={handleSubmit}>
          <Row className="mb-3 align-items-center">
            <Col sm={3}><Form.Label>Lead Date <span style={{ color: 'red' }}>*</span></Form.Label></Col>
            <Col sm={5}>
              <DatePicker
                selected={selectedDate}
                onChange={setSelectedDate}
                dateFormat="yyyy-MM-dd"
                className="form-control w-100"
                placeholderText="Select Lead date"
                required
              />
              {errors.selectedDate && <div className="text-danger">{errors.selectedDate}</div>}
            </Col>
          </Row>

          <Row className="mb-3 align-items-center">
            <Col sm={3}><Form.Label>Name <span style={{ color: 'red' }}>*</span></Form.Label></Col>
            <Col sm={5}>
              <Form.Control
                type="text"
                placeholder="Enter Name"
                value={name}
                onChange={(e) => setName(e.target.value)}
                required
              />
              {errors.name && <div className="text-danger">{errors.name}</div>}
            </Col>
          </Row>

          <Row className="mb-3 align-items-center">
            <Col sm={3}><Form.Label>Phone <span style={{ color: 'red' }}>*</span></Form.Label></Col>
            <Col sm={5}>
              <Form.Control
                type="text"
                placeholder="Enter 12-digit Phone"
                value={phone}
                maxLength={12}
                onChange={(e) => {
                  const digits = e.target.value.replace(/\D/g, '');
                  if (digits.length <= 12) setPhone(digits);
                }}
                required
              />
              {errors.phone && <div className="text-danger">{errors.phone}</div>}
            </Col>
          </Row>

          <Row className="mb-3 align-items-center">
            <Col sm={3}><Form.Label>Email <span style={{ color: 'red' }}>*</span></Form.Label></Col>
            <Col sm={5}>
              <Form.Control
                type="email"
                placeholder="Enter Email"
                value={email}
                onChange={(e) => setEmail(e.target.value)}
                required
              />
              {errors.email && <div className="text-danger">{errors.email}</div>}
            </Col>
          </Row>

          <Row className="mb-3 align-items-center">
            <Col sm={3}><Form.Label>Source <span style={{ color: 'red' }}>*</span></Form.Label></Col>
            <Col sm={5}>
              <Select
                options={sourceOptions}
                value={source}
                onChange={setSource}
                placeholder="Select Source"
                required
              />
              {errors.source && <div className="text-danger">{errors.source}</div>}
            </Col>
          </Row>

          <Row className="mb-3 align-items-center">
            <Col sm={3}><Form.Label>Category <span style={{ color: 'red' }}>*</span></Form.Label></Col>
            <Col sm={5}>
              <Select
                options={categoryOptions}
                value={category}
                onChange={(val) => {
                  setCategory(val);
                  setSubcategory(null);
                  setProduct(null);
                }}
                placeholder="Select Category"
                required
              />
              {errors.category && <div className="text-danger">{errors.category}</div>}
            </Col>
          </Row>

          {shouldShowSubCategory && (
            <Row className="mb-3 align-items-center">
              <Col sm={3}><Form.Label>Subcategory <span style={{ color: 'red' }}>*</span></Form.Label></Col>
              <Col sm={5}>
                <Select
                  options={subCategoryOptions}
                  value={subcategory}
                  onChange={setSubcategory}
                  placeholder="Select Subcategory"
                  required
                />
                {errors.subcategory && <div className="text-danger">{errors.subcategory}</div>}
              </Col>
            </Row>
          )}

          {shouldShowProduct && (
            <Row className="mb-3 align-items-center">
              <Col sm={3}><Form.Label>Product <span style={{ color: 'red' }}>*</span></Form.Label></Col>
              <Col sm={5}>
                <Select
                  options={productOptions}
                  value={product}
                  onChange={setProduct}
                  placeholder="Select Product"
                  required
                />
                {errors.product && <div className="text-danger">{errors.product}</div>}
              </Col>
            </Row>
          )}

          <Row className="mb-3 align-items-center">
            <Col sm={3}><Form.Label>Branch <span style={{ color: 'red' }}>*</span></Form.Label></Col>
            <Col sm={5}>
              <Select
                options={branchOptions}
                value={branch}
                onChange={setBranch}
                placeholder="Select Branch"
                required
                
              />
              {errors.branch && <div className="text-danger">{errors.branch}</div>}
            </Col>
          </Row>

          {error && <Alert variant="danger">{error}</Alert>}
          {successMessage && <Alert variant="success">{successMessage}</Alert>}

          <div className="text-center mt-3">
            <Button type="submit" disabled={isSubmitting}>
              {isSubmitting ? 'Submitting...' : 'Submit'}
            </Button>
          </div>
        </Form>
      </Card>
    </Container>
  );
};

export default ExcelImport;
