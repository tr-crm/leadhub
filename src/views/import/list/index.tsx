import React, { useEffect, useState,useMemo } from 'react';
import DataTable from 'react-data-table-component';
import { Container, Row, Col, Button,Form } from 'react-bootstrap';

import 'react-toastify/dist/ReactToastify.css';
import PageBreadcrumb from '@/components/PageBreadcrumb';
import RegionSelect from '@/components/regionselect'; // Assuming this exists
import { isAuthenticated, getUserInfo, logout } from '@/utils/auth';
import { getDmImportLeadsList } from '@/services/leadservice'; // Adjust path
import LogoutOverlay from '@/components/LogoutOverlay';
import type { ImportLeadPayload } from '@/services/leadservice';
import type { Lead } from '@/types/lead.types';
import {toast } from 'react-toastify';
  import DatePicker from 'react-datepicker';
  import 'react-datepicker/dist/react-datepicker.css';
const ExcelImportList: React.FC = () => {
  const [showLogoutLoader, setShowLogoutLoader] = useState<boolean>(false);
  // const user = getUserInfo();
   const user = useMemo(() => (isAuthenticated() ? getUserInfo() : null), []);

  const [loading, setLoading] = useState(false);
   const [data, setData] = useState<Lead[]>([]);
//   const [data, setData] = useState([]);
 useEffect(() => {
      if (!user) {
        setShowLogoutLoader(true);
      }
    }, [user]);
  // const type = user.type;

  const [regionVal, setRegionVal] = useState<string>('0');
   const [leadtype, setLeadTypeStatus] = useState('1');
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
  
   const [fromDate, setFromDate] = useState<Date | null>(new Date());
       const [toDate, setToDate] = useState<Date | null>(new Date());

  const fetchLeads = async () => {
  setLoading(true);

  const payload:ImportLeadPayload = {
    start: '',
    typeVal: user.type,
    sourceVal: 'All',
    userIdVal: user.id,
    tokenVal: user.access_token,
    regionVal: regionVal,
    executiveIdVal:"",
    leadtypeVal:leadtype,
     fromDateVal: fromDate?.toISOString().slice(0, 10) ?? '',
    toDateVal: toDate?.toISOString().slice(0, 10) ?? '',
  };

  try {
    const response = await getDmImportLeadsList(payload);
    


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
  const handleChange = (e: React.ChangeEvent<HTMLSelectElement>) => {
    setLeadTypeStatus(e.target.value);
  };
  // const handleButtonClick = async (row:Lead) => {
  //   const y=row;
  //   console.log(y);

  // }
   const columns = [
     {
       name: 'ID',
       cell: (_row: Lead, index: number) => index + 1,
       width: '70px',
     },
     
     { name: 'Date', selector: (row: Lead) => row.lead_date || '-', sortable: true, width: '110px' },
     { name: 'Name', selector: (row: Lead) => row.full_name || '-', sortable: true },
     { name: 'Phone', selector: (row: Lead) => row.phone_number || '-', sortable: true, width: '110px' },
     { name: 'Source', selector: (row: Lead) => row.source_name || '-', sortable: true },
     { name: 'Category', selector: (row: Lead) => row.category_name || '-', sortable: true },
     { name: 'Product', selector: (row: Lead) => row.product_name || '-', sortable: true, width: '90px' },
     { name: 'Region', selector: (row: Lead) => row.region_name || '-', sortable: true, width: '90px' },
     { name: 'Status', selector: (row: Lead) => row.lead_status_name || '-', sortable: true, width: '110px' },
     { name: 'Executive', selector: (row: Lead) => row.executive_name || '-', sortable: true },
 
   ];

  return (
    <Container fluid>
     
      <PageBreadcrumb title={`Excel Import List (${data.length})`} />
      {showLogoutLoader && (
  <LogoutOverlay
    duration={5} 
    onComplete={async () => {
      await logout(); // your logout function
    }}
  />
)}
      

      <Row className="mb-2">
        
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
                    { leadtype === '2' && (
       <Col md={2}>
             
              <DatePicker selected={fromDate} onChange={setFromDate} className="form-control" dateFormat="yyyy-MM-dd" />
            </Col>
            )}
             { leadtype === '2' && (
            <Col md={2}>
           
              <DatePicker selected={toDate} onChange={setToDate} className="form-control" dateFormat="yyyy-MM-dd" />
            </Col>
            )}
                    
        <Col md={1} className="text-end">
          <Button variant="primary" onClick={fetchLeads}>
            Go
          </Button>
        </Col>
      </Row>

      <DataTable
        columns={columns}
        data={filteredData}
        progressPending={loading}
        pagination
        subHeader
   subHeaderComponent={SubHeaderComponent}
        highlightOnHover
        pointerOnHover
        responsive
      />
    </Container>
  );
};

export default ExcelImportList;
