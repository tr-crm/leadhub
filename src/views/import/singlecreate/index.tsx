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

  const [contacts, setContacts] = useState([{ name: '', phone: '', email: '' }]);

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
          getBranchList(user.id, user.access_token,'0',user.region,user.type),
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
    if (!selectedDate) newErrors.selectedDate = 'Date is required';

    contacts.forEach((contact, index) => {
      if (!contact.name.trim()) {
        newErrors[`name_${index}`] = 'Name is required';
      }
      if (!contact.phone.trim()) {
        newErrors[`phone_${index}`] = 'Phone number is required';
      } else if (!/^\d{10}$/.test(contact.phone)) {
        newErrors[`phone_${index}`] = 'Phone number must be exactly 10 digits';
      }
      if (!contact.email.trim()) {
        newErrors[`email_${index}`] = 'Email is required';
      } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(contact.email.trim())) {
        newErrors[`email_${index}`] = 'Invalid email format';
      }
    });

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
        // lead_date: selectedDate?.toISOString().split('T')[0] || '',
        lead_date: selectedDate
  ? selectedDate.toLocaleDateString('en-CA') // e.g., "2025-07-18"
  : null,
        source_id: source?.value || '',
        category_id: category?.value || '',
        sub_category_id: subcategory?.value || '',
        product_id: product?.value || '',
        branch_id: branch?.value || '',
        lead_type: '4',
        created_by: user.id,
        data: contacts.map(c => ({
          name: capitalizeFirst(c.name.trim()),
          phone: c.phone.trim(),
          email: c.email.trim()
        })),
        userIdVal: user.id,
        tokenVal: user.access_token,
        region: '',
        dm: 1,
      };

      const response = await ImportLeadCreate(payload);
      if (response.response === 'login_error') {
        toast.error(response.message || 'Session expired, please login again.');
      } else if (response.response === 'error') {
        toast.error(response.message || 'Failed to import data.');
      } else if (response.response === 'success') {
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

          

          <Row className="mb-3">
            <Col sm={3}><Form.Label>Source <span style={{ color: 'red' }}>*</span></Form.Label></Col>
            <Col sm={5}>
              <Select options={sourceOptions} value={source} onChange={setSource} placeholder="Select Source" required />
              {errors.source && <div className="text-danger">{errors.source}</div>}
            </Col>
          </Row>

          <Row className="mb-3">
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
            <Row className="mb-3">
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
            <Row className="mb-3">
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

          <Row className="mb-3">
            <Col sm={3}><Form.Label>Branch</Form.Label></Col>
            <Col sm={5}>
              <Select options={branchOptions} value={branch} onChange={setBranch} placeholder="Select Branch" />
            </Col>
          </Row>
          {contacts.map((contact, index) => (
            <div key={index} className="mb-4 border rounded p-3 position-relative">
              <Row className="mb-2">
                <Col sm={3}><Form.Label>Name <span style={{ color: 'red' }}>*</span></Form.Label></Col>
                <Col sm={5}>
                  <Form.Control
                    type="text"
                    value={contact.name}
                    onChange={(e) => {
                      const updated = [...contacts];
                      let input = e.target.value.replace(/[^a-zA-Z ]/g, '');
                      if (input.length > 0) {
                        input = input.charAt(0).toUpperCase() + input.slice(1);
                      }
                      updated[index].name = input;
                      setContacts(updated);
                    }}
                    placeholder="Enter Name"
                    required
                  />
                  {errors[`name_${index}`] && <div className="text-danger">{errors[`name_${index}`]}</div>}
                </Col>
              </Row>

              <Row className="mb-2">
                <Col sm={3}><Form.Label>Phone <span style={{ color: 'red' }}>*</span></Form.Label></Col>
                <Col sm={5}>
                  <Form.Control
                    type="text"
                    value={contact.phone}
                    onChange={(e) => {
                      const updated = [...contacts];
                      updated[index].phone = e.target.value.replace(/\D/g, '').slice(0, 10);
                      setContacts(updated);
                    }}
                    placeholder="Enter 10-digit Phone"
                    required
                  />
                  {errors[`phone_${index}`] && <div className="text-danger">{errors[`phone_${index}`]}</div>}
                </Col>
              </Row>

              <Row className="mb-2">
                <Col sm={3}><Form.Label>Email <span style={{ color: 'red' }}>*</span></Form.Label></Col>
                <Col sm={5}>
                  <Form.Control
                    type="email"
                    value={contact.email}
                    onChange={(e) => {
                      const updated = [...contacts];
                      updated[index].email = e.target.value;
                      setContacts(updated);
                    }}
                    placeholder="Enter Email"
                    required
                  />
                  {errors[`email_${index}`] && <div className="text-danger">{errors[`email_${index}`]}</div>}
                </Col>
              </Row>

              {contacts.length > 1 && (
                <Button
                  variant="danger"
                  size="sm"
                  className="position-absolute"
                  style={{ top: 0, right: 0 }}
                  onClick={() => setContacts(contacts.filter((_, i) => i !== index))}
                >
                  −
                </Button>
              )}
            </div>
          ))}

          <div className="text-end mb-3">
            <Button variant="secondary" onClick={() => setContacts([...contacts, { name: '', phone: '', email: '' }])}>
              + Add Another
            </Button>
          </div>

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
