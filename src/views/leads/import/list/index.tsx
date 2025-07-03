import React, { useEffect, useState } from 'react';
import DataTable from 'react-data-table-component';
import { Container, Row, Col, Button } from 'react-bootstrap';
import { ToastContainer } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';
import PageBreadcrumb from '@/components/PageBreadcrumb';
import RegionSelect from '@/components/regionselect'; // Assuming this exists
import { getUserInfo } from '@/utils/auth';
import { getImportLeadsList } from '@/services/leadservice'; // Adjust path

import type { ImportLeadPayload } from '@/services/leadservice';
import type { Lead } from '@/types/lead.types';
import {toast } from 'react-toastify';
const ExcelImportList: React.FC = () => {
  const user = getUserInfo();

  const [loading, setLoading] = useState(false);
   const [data, setData] = useState<Lead[]>([]);
//   const [data, setData] = useState([]);
  const [regionVal, setRegionVal] = useState<string>('1');

  const fetchLeads = async () => {
  setLoading(true);

  const payload:ImportLeadPayload = {
    start: '',
    typeVal: user.type,
    sourceVal: 'All',
    userIdVal: user.id,
    tokenVal: user.access_token,
    regionVal: regionVal,
  };

  try {
    const response = await getImportLeadsList(payload);
    
//    console.log(response.data.response);

   if (response.data.response === 'login_error') {
     setData([]);
           toast.error(response.data.message , {
             position: "top-right",
             autoClose: 4000,
             hideProgressBar: false,
             closeOnClick: true,
             pauseOnHover: true,
             draggable: false,
             progress: undefined,
             theme: "colored",
   
           });
   
           // Optionally redirect to login page here
         } else if (response.data.response === 'error') {
             setData([]);
           toast.error(response.data.message, {
             position: "top-right",
             autoClose: 5000,
             hideProgressBar: false,
             closeOnClick: true,
             pauseOnHover: true,
             draggable: false,
             progress: undefined,
             theme: "colored",
   
           });
           // setError(response.message || 'Failed to import data.');
         } else if (response.data.response === 'success') {
            setData(response.data.data);
           toast.success(response.message, {
             position: "top-right",
             autoClose: 5000,
             hideProgressBar: false,
             closeOnClick: true,
             pauseOnHover: true,
             draggable: false,
             progress: undefined,
             theme: "colored",
   
           });
         }
    
  } catch (err:any) {
   toast.error(err.message || 'Something went wrong.', {
           position: "top-right",
           autoClose: 4000,
           hideProgressBar: false,
           closeOnClick: true,
           pauseOnHover: true,
           draggable: false,
           progress: undefined,
           theme: "colored",
   
         });
    setData([]); // safe fallback
  } finally {
    setLoading(false);
  }
};


  useEffect(() => {
    const timer = setTimeout(() => {
      fetchLeads();
    }, 100);

    return () => clearTimeout(timer); // Cleanup
  }, [regionVal]);

  const handleRegionChange = (selectedRegion:any) => {
   
    setRegionVal(selectedRegion);
  };
  const handleButtonClick = async (row:Lead) => {
    const y=row;
    console.log(y);

  }
   const columns = [
     {
       name: 'ID',
       cell: (_row: Lead, index: number) => index + 1,
       width: '70px',
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
     { name: 'Date', selector: (row: Lead) => row.lead_date || '-', sortable: true, width: '110px' },
     { name: 'Name', selector: (row: Lead) => row.full_name || '-', sortable: true },
     { name: 'Phone', selector: (row: Lead) => row.phone_number || '-', sortable: true, width: '110px' },
     { name: 'Source', selector: (row: Lead) => row.source_name || '-', sortable: true },
     { name: 'Category', selector: (row: Lead) => row.category_name || '-', sortable: true },
     { name: 'Product', selector: (row: Lead) => row.product_name || '-', sortable: true, width: '90px' },
     { name: 'Country', selector: (row: Lead) => row.country_name || '-', sortable: true, width: '90px' },
     { name: 'Status', selector: (row: Lead) => row.lead_status_name || '-', sortable: true, width: '110px' },
     { name: 'Executive', selector: (row: Lead) => row.executive_name || '-', sortable: true },
 
   ];

  return (
    <Container fluid>
      <PageBreadcrumb title="Excel Import List" />
      <ToastContainer position="top-right" autoClose={3000} />

      <Row className="mb-2">
        {(user.type === '1' || user.type === '2' || user.type === '3') && (
          <Col md={3}>
            <RegionSelect
              value={regionVal}
            //   onChange={handleRegionChange}
              onChange={(val) => {
                  handleRegionChange(val?.value);
                 
                }}
              label="Region"
              placeholder="All Regions"
            />

            
          </Col>
        )}
        <Col md={1} className="text-end">
          <Button variant="primary" onClick={fetchLeads}>
            Go
          </Button>
        </Col>
      </Row>

      <DataTable
        title="Excel Import List"
        columns={columns}
        data={data}
        progressPending={loading}
        pagination
        selectableRows
        highlightOnHover
        pointerOnHover
        responsive
      />
    </Container>
  );
};

export default ExcelImportList;
