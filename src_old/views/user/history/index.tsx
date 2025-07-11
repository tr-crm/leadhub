import React, { useState, useEffect } from 'react';
import DataTable from 'react-data-table-component';
import { Container,Form,Row,Col,Button } from 'react-bootstrap';
import type { LoginHistoryPayload } from '@/services/userservice';
import { getLoginHistoryList } from '@/services/userservice';
import type { User } from '@/types/user.types';
import { getUserInfo } from '@/utils/auth';
import PageBreadcrumb from '@/components/PageBreadcrumb';

    const UsersDataTable: React.FC = () => {
    const [data, setData] = useState<User[]>([]);
    const [loading, setLoading] = useState(true);
    const user = getUserInfo();

   const handleGoClick = async () => {
   

        const payload: LoginHistoryPayload = {
            idVal: user.id,
            userIdVal: user.id,
            tokenVal: user.access_token,
        };

        setLoading(true);
        try {
            const res = await getLoginHistoryList(payload);
            setData(res.data);
        } catch (err) {
            console.error('Failed to fetch jobs:', err);
        } finally {
            setLoading(false);
        }
    };
  
     useEffect(() => {
        handleGoClick();
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
        <PageBreadcrumb title="" />
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
