import { useState, useEffect, useMemo, useRef } from 'react';

import DataTable from 'react-data-table-component';
import { Container,Form,Row,Col,Button } from 'react-bootstrap';
import type { LoginHistoryPayload } from '@/services/userservice';
import { getLoginHistoryList } from '@/services/userservice';
import type { User } from '@/types/user.types';
import PageBreadcrumb from '@/components/PageBreadcrumb';
import {toast } from 'react-toastify';
import LogoutOverlay from '@/components/LogoutOverlay';
import { isAuthenticated, getUserInfo, logout } from '@/utils/auth';
    const UsersDataTable: React.FC = () => {
    const [data, setData] = useState<User[]>([]);
    const [loading, setLoading] = useState(true);
     const [showLogoutLoader, setShowLogoutLoader] = useState<boolean>(false);
    // Memoize user so it doesn't cause continuous re-renders/useEffect triggers
        const user = useMemo(() => (isAuthenticated() ? getUserInfo() : null), []);
      
        // Ref to prevent double fetch in Strict Mode or repeated effect calls
        const didFetchRef = useRef(false);
      
        useEffect(() => {
          if (!user) {
            setShowLogoutLoader(true);
          }
        }, [user]);
 
   const handleGoClick = async () => {
   

        const payload: LoginHistoryPayload = {
            idVal: user.id,
            userIdVal: user.id,
            tokenVal: user.access_token,
        };

        setLoading(true);
        try {
            const res = await getLoginHistoryList(payload);
          
            if (res.response === 'login_error') {
                    toast.error(res.message);
                    setShowLogoutLoader(true);
                    return;
                  } else if (res.response === 'error') {
                    toast.error(res.message);
                  } else if (res.response === 'success') {
                    toast.success(res.message);
                    setData(res.data);
                 
                  }
        } catch (err) {
            console.error('Failed to fetch jobs:', err);
        } finally {
            setLoading(false);
        }
    };
  
    

         useEffect(() => {
    if (!user) return;

    // Only fetch if we haven't already fetched for current params
    if (!didFetchRef.current) {
    handleGoClick();
      didFetchRef.current = true;
    }
   
   
  }, []);


// console.log(user.type)

 const columns = [
    { name: 'S.No', cell: (_: any, i: any) => i + 1, width: '70px' },
    { name: 'Full Name', selector: (row: User) => row.full_name, sortable: true },
    { name: 'Ip Address', selector: (row: any) => row.ip_address, sortable: true },
    { name: 'Login Time', selector: (row: any) => row.login_time || '-', sortable: true },
    { name: 'Logout Time', selector: (row: any) => row.logout_time ?? '-', sortable: true },
    { name: 'Status', selector: (row: any) =>  row.is_active == 1 ? 'Active' : 'Inactive'},


];


  return (
    <Container fluid>
        <PageBreadcrumb title="Login History List" />
        {showLogoutLoader && <LogoutOverlay
  duration={5} // 10 seconds countdown
  onComplete={async () => {
    await logout(); // your logout function
  }}
/>
}
        <Form className="mb-4 d-flex justify-content-end">
            <Row className="align-items-end">
                <Col md={2} className="">
                    <Button variant="primary" onClick={handleGoClick}>
                    Refresh
                    </Button>
                </Col>
            </Row>
      </Form>
      <DataTable
        columns={columns}
        data={data}
        progressPending={loading}
        pagination
        highlightOnHover
        pointerOnHover
        responsive
      />

    </Container>
  );
};

export default UsersDataTable;
