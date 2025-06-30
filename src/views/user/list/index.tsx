import React, { useEffect, useState } from 'react';
import DataTable from 'react-data-table-component';
import { Container } from 'react-bootstrap';
import PageBreadcrumb from '@/components/PageBreadcrumb';
// import { getUserList, User, UserListRequestPayload } from '@/services/userservice';

import type { UserListRequestPayload } from '@/services/userservice';
import { getUserList } from '@/services/userservice';
import type { User } from '@/types/user.types';
import { getUserInfo } from '@/utils/auth';

const UsersDataTable: React.FC = () => {
  const [data, setData] = useState<User[]>([]);
  const [loading, setLoading] = useState(true);
  const user = getUserInfo();

  const payload: UserListRequestPayload = {
    start: "10",
    userIdVal: user.id,
    tokenVal: user.access_token,
    typeVal:user.type,
    regionVal:user.region,
  };

  useEffect(() => {
    (async () => {
      try {
        const res = await getUserList(payload);
        setData(res.data);
      } catch (err) {
        console.error('Failed to fetch users:', err);
      } finally {
        setLoading(false);
      }
    })();
  }, []);

  const columns = [
    { name: 'ID', selector: (row: User) => row.id, sortable: true, width: '70px' },
    { name: 'Name', selector: (row: User) => row.full_name, sortable: true },
    { name: 'Email', selector: (row: User) => row.email_address, sortable: true },
    { name: 'Phone', selector: (row: User) => row.phone_number || '-', sortable: true },
      { name: 'Role', selector: (row: User) => row.role || '-', sortable: true },
      {
      name: 'Edit',
      cell: (row: User) => (
        <button
          className="btn btn-warning btn-sm"
          onClick={() => alert(`Do Edit for user ID: ${row.id}`)}
        >
          Edit
        </button>
      ),
      button: true,
      ignoreRowClick: true,
      allowOverflow: true,
      width: '120px',
    },
    {
      name: 'Acion',
      cell: (row: User) => (
        <button
          className="btn btn-danger btn-sm"
          onClick={() => alert(`Do action for user ID: ${row.id}`)}
        >
          Action
        </button>
      ),
      button: true,
      ignoreRowClick: true,
      allowOverflow: true,
      width: '120px',
    },
  ];

  return (
    <Container fluid>
      <PageBreadcrumb title="User List" />
      <DataTable
        title="Users List"
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

export default UsersDataTable;
