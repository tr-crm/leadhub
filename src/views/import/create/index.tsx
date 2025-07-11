import React, { useEffect, useState } from 'react';
import type { FormEvent } from 'react';
import { useNavigate } from 'react-router-dom';
import { Container, Card, Alert, Table, Form, Button, Row, Col } from 'react-bootstrap';
import Select from 'react-select';
import * as XLSX from 'xlsx';

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
  getBranchList
} from '@/services/generalservice';

import { getUserInfo } from '@/utils/auth';

interface OptionType {
  label: string;
  value: string;
}

interface JsonData {
  [key: string]: any;
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
  const [file, setFile] = useState<File | null>(null);
  const [excelData, setExcelData] = useState<JsonData[]>([]);

  const [error, setError] = useState('');
  const [successMessage, setSuccessMessage] = useState('');
  const [isSubmitting, setIsSubmitting] = useState(false);
  const [errors, setErrors] = useState<Record<string, string>>({});

  // Fetch Branch List
  useEffect(() => {
    const fetchBranch = async () => {
      try {
        const branches = await getBranchList(user.id, user.access_token);
        const options = branches.map((bran: any) => ({
          value: String(bran.id),
          label: bran.display_name,
        }));
        setBranchOptions(options);
      } catch (err) {
        console.error('Failed to fetch categories', err);
      }
    };
    fetchBranch();
  }, [user.id, user.access_token]);

  // Fetch source list
  useEffect(() => {
    const fetchSources = async () => {
      try {
        const sources = await SourceList(user.id, user.access_token);
        const options = sources.map((item: any) => ({
          value: item.id.toString(),
          label: item.display_name,
        }));
        setSourceOptions(options);
      } catch (err) {
        console.error(err);
      }
    };
    fetchSources();
  }, [user.id, user.access_token]);

  // Fetch categories
  useEffect(() => {
    const fetchCategories = async () => {
      try {
        const categories = await getCategoryList(user.id, user.access_token);
        const options = categories.map((cat: any) => ({
          value: String(cat.id),
          label: cat.display_name,
        }));
        setCategoryOptions(options);
      } catch (err) {
        console.error('Failed to fetch categories', err);
      }
    };
    fetchCategories();
  }, [user.id, user.access_token]);

  // Fetch subcategories on category change
  useEffect(() => {
    const fetch = async () => {
      if (!category) return;
      try {
        const data = await getSubCategoryList(user.id, user.access_token, Number(category.value));
        const options = data.map((item: any) => ({
          value: String(item.id),
          label: item.display_name,
        }));
        setSubCategoryOptions(options);
      } catch (err) {
        console.error('Failed to fetch subcategories', err);
      }
    };
    fetch();
  }, [category]);

  // Fetch products on category change
  useEffect(() => {
    const fetch = async () => {
      if (!category) return;
      try {
        const data = await ProductList(user.id, user.access_token, '0', Number(category.value));
        const options = data.map((item: any) => ({
          value: String(item.id),
          label: item.display_name,
        }));
        setProductOptions(options);
      } catch (err) {
        console.error('Failed to fetch products', err);
      }
    };
    fetch();
  }, [category]);

  const handleFileChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    const selected = e.target.files?.[0] || null;
    setFile(selected);
  };

  const parseExcel = (file: File): Promise<JsonData[]> => {
    return new Promise((resolve, reject) => {
      const reader = new FileReader();
      reader.onload = (e) => {
        const data = new Uint8Array(e.target?.result as ArrayBuffer);
        const workbook = XLSX.read(data, { type: 'array' });
        const sheet = workbook.Sheets[workbook.SheetNames[0]];
        const json = XLSX.utils.sheet_to_json(sheet) as JsonData[];
        resolve(json);
      };
      reader.onerror = reject;
      reader.readAsArrayBuffer(file);
    });
  };

  const selectedCategoryLabel = category?.label?.toLowerCase() || '';
  const shouldShowProduct = ['test prep', 'acs', 'immigration'].includes(selectedCategoryLabel);
  const shouldShowSubCategory = selectedCategoryLabel === 'immigration';

  const validateForm = () => {
    const newErrors: Record<string, string> = {};
    if (!source) newErrors.source = 'Source is required';
    if (!category) newErrors.category = 'Category is required';
    if (shouldShowProduct && !product) newErrors.product = 'Product is required';
    if (shouldShowSubCategory && !subcategory) newErrors.subcategory = 'Subcategory is required';
    if (!file) newErrors.file = 'Excel file is required';
    if (!selectedDate) newErrors.selectedDate = 'Date is required';
    setErrors(newErrors);
    return Object.keys(newErrors).length === 0;
  };

  const handleSubmit = async (e: FormEvent) => {
    e.preventDefault();
    setError('');
    setSuccessMessage('');
    if (!validateForm()) return;

    setIsSubmitting(true);
    try {
      const parsed = await parseExcel(file as File);
      setExcelData(parsed);

      const payload: LeadPayload = {
        lead_date: selectedDate ? selectedDate.toISOString().split('T')[0] : null,
        source_id: source?.value || '',
        category_id: category?.value || '',
        sub_category_id: subcategory?.value || '',
        product_id: product?.value || '',
        branch_id: branch?.value || '',
        region:'',
        lead_type: '4',
        created_by: user.id,
        data: parsed,
        userIdVal: user.id,
        tokenVal: user.access_token,
        dm:1
      };

      const response = await ImportLeadCreate(payload);

      if (response.response === 'login_error') {
          toast.dismiss();
           toast.error(response.message);

      } else if (response.response === 'error') {
           toast.dismiss();
           toast.error(response.message);

      } else if (response.response === 'success') {
        toast.dismiss();
           toast.error(response.message);

        navigate('/import/list');
      }
    } catch (err: any) {
       toast.dismiss();
          

      toast.error(err.message || 'Something went wrong.', { position: 'top-right', autoClose: 4000, theme: 'colored' });
    } finally {
      setIsSubmitting(false);
    }
  };

  return (
    <Container fluid>
      <PageBreadcrumb title="Excel Import" />

      <Card className="p-4 shadow-sm mx-auto" style={{ maxWidth: 700 }}>
        <Form onSubmit={handleSubmit}>
          <Row className="mb-3 align-items-center">
            <Col sm={3}>
              <Form.Label>Lead Date <span style={{ color: 'red' }}>*</span></Form.Label>
            </Col>
            <Col sm={5}>
              <DatePicker
                selected={selectedDate}
                onChange={(date) => setSelectedDate(date)}
                dateFormat="yyyy-MM-dd"
                className="form-control w-100"
                placeholderText="Select Lead date"
                required
              />
              {errors.selectedDate && <div className="text-danger">{errors.selectedDate}</div>}
            </Col>
          </Row>

          <Row className="mb-3 align-items-center">
            <Col sm={3}>
              <Form.Label>Source <span style={{ color: 'red' }}>*</span></Form.Label>
            </Col>
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
            <Col sm={3}>
              <Form.Label>Category <span style={{ color: 'red' }}>*</span></Form.Label>
            </Col>
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

          {/* Subcategory - only for Immigration */}
          {shouldShowSubCategory && subCategoryOptions.length > 0 && (
            <Row className="mb-3 align-items-center">
              <Col sm={3}>
                <Form.Label>Subcategory <span style={{ color: 'red' }}>*</span></Form.Label>
              </Col>
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

          {/* Product */}
          {shouldShowProduct && (
            <Row className="mb-3 align-items-center">
              <Col sm={3}>
                <Form.Label>Product <span style={{ color: 'red' }}>*</span></Form.Label>
              </Col>
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
            <Col sm={3}>
              <Form.Label>Branch <span style={{ color: 'red' }}>*</span></Form.Label>
            </Col>
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

          <Row className="mb-3 align-items-center">
            <Col sm={3}>
              <Form.Label>Upload Excel File <span style={{ color: 'red' }}>*</span></Form.Label>
            </Col>
            <Col sm={5}>
              <Form.Control required type="file" accept=".xlsx,.xls" onChange={handleFileChange} />
              {errors.file && <div className="text-danger">{errors.file}</div>}
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

      {excelData.length > 0 && (
        <Card className="mt-4 p-3">
          <h5>Parsed Excel Data</h5>
          <Table striped bordered hover size="sm">
            <thead>
              <tr>
                {Object.keys(excelData[0]).map((key) => (
                  <th key={key}>{key}</th>
                ))}
              </tr>
            </thead>
            <tbody>
              {excelData.map((row, idx) => (
                <tr key={idx}>
                  {Object.values(row).map((val, i) => (
                    <td key={i}>{val}</td>
                  ))}
                </tr>
              ))}
            </tbody>
          </Table>
        </Card>
      )}
    </Container>
  );
};

export default ExcelImport;
