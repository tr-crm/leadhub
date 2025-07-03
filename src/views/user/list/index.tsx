import React, { useEffect, useState } from 'react';
import DataTable from 'react-data-table-component';
import { Container,Form, Row,Col, Button,Modal } from 'react-bootstrap';
import Select from 'react-select';
import PageBreadcrumb from '@/components/PageBreadcrumb';
// import { getUserList, User, UserListRequestPayload } from '@/services/userservice';

import type { UserListRequestPayload , LeaveRequestPayload, UserEditPayload, UserResetPayload, AssignPayload} from '@/services/userservice';
import { getUserList, submitLeaveRequest, submitUserEdit , submitUserResetPassword, submitAssignUser } from '@/services/userservice';
import type { User } from '@/types/user.types';
import { getUserInfo } from '@/utils/auth';

  const UsersDataTable: React.FC = () => {
  const [data, setData] = useState<User[]>([]);
  const [loading, setLoading] = useState(true);
  const user = getUserInfo();

  const [showLeaveModal, setShowLeaveModal] = useState(false);
  const [leaveUser, setLeaveUser] = useState<User | null>(null);
  const [leaveFromDate, setLeaveFromDate] = useState('');
  const [leaveToDate, setLeaveToDate] = useState('');
  const [submittingLeave, setSubmittingLeave] = useState(false);
  const [submittingEdit, setSubmittingEdit] = useState(false);

  const [resetUser, setResetUser] = useState<User | null>(null);
  const [ShowResetModal, setShowResetModal] = useState(false);
  const [newPassWord, setNewPassWord] = useState('');
  const [confirmPassword, setConfirmPassword] = useState('');
  const [submittingReset, setSubmittingReset] = useState(false);
  const [assigningUserId, setAssigningUserId] = useState<number | null>(null);

  const payload: UserListRequestPayload = {
    start: "10",
    userIdVal: user.id,
    tokenVal: user.access_token,
    typeVal:user.type,
    regionVal:user.region,
  };

  const refreshData = async () => {
    setLoading(true);
    try {
      const res = await getUserList(payload);
      setData(res.data);
    } catch (err) {
      console.error('Failed to fetch users:', err);
    } finally {
      setLoading(false);
    }
  };

   useEffect(() => {
    refreshData();
  }, []);


  const [showModal, setShowModal] = useState(false);
  const [selectedUser, setSelectedUser] = useState<User | null>(null);

  const handleOpenModal = (user: User) => {
    setSelectedUser(user);
    setShowModal(true);
  };

  const handleCloseModal = () => {
    setShowModal(false);
    setSelectedUser(null);
  };
  const roleOptions = [
    { label: 'Admin', value: 1 },
    { label: 'Head', value: 2 },
    { label: 'Manager', value: 3 },
    { label: 'Exicute', value: 5 },
    { label: 'DM', value: 8},
  ];

  const regionOptions = [
    { label: 'TR', value: 1 },
    { label : 'Warangal', value: 2 },
    { label: 'Bangalore 1', value: 3 },
    { label: 'Bangalore 2', value: 4 },
  ];

  

  const handleOpenLeaveModal = (user: User) => {
    setLeaveUser(user);
    setShowLeaveModal(true);
    setLeaveFromDate('');
    setLeaveToDate('');
  };

// In services/leaveservice.ts or similar
const handleSubmitLeave = async () => {
  if (!leaveUser || !leaveFromDate || !leaveToDate) {
    alert('Please fill in both From and To dates.');
    return;
  }

  const payload: LeaveRequestPayload = {
    userIdVal: leaveUser.id,
    tokenVal: user.access_token,
    leaveFromDateVal: leaveFromDate,
    leaveToDateVal: leaveToDate,
  };

  setSubmittingLeave(true);
  try {
    await submitLeaveRequest(payload);
    alert('Leave submitted successfully!');
    setShowLeaveModal(false);
  } catch (error) {
    console.error('Failed to submit leave:', error);
    alert('Failed to submit leave. Please try again.');
  } finally {
    setSubmittingLeave(false);
  }
};


const handleSubmitEdit = async () => {
  if (!selectedUser) {
    alert('No user selected for editing.');
    return;
  }

  const payload: UserEditPayload = {
    idVal: selectedUser.id,
    userIdVal: user.id,
    tokenVal: user.access_token,
    firstNameVal: selectedUser.first_name,
    lastNameVal: selectedUser.last_name,
    emailAddressVal: selectedUser.email_address,
    phoneNumberVal: selectedUser.phone_number || '',
    roleVal: selectedUser.type,
    updatedByVal: user.id,
    regionVal: selectedUser.region || '',
    supervisionVal : '',
  };

  setSubmittingEdit(true);
  try {
    await submitUserEdit(payload); 
    alert('User updated successfully!');
    setShowModal(false);
    refreshData(); 
  } catch (error) {
    console.error('Failed to update user:', error);
    alert('Failed to update user. Please try again.');
  } finally {
    setSubmittingEdit(false);
  }
};


  const handleOpenResetModal = (user: User) => {
    setResetUser(user);
    setNewPassWord('');
    setShowResetModal(true);
  };

  const handleSubmitReset = async () => {
  if (!resetUser) {
    alert('No user selected for editing.');
    return;
  }

  const payload: UserResetPayload = {
    idVal: resetUser.id,
    userIdVal: user.id,
    tokenVal: user.access_token,
    newPwdVal: newPassWord,
    rePwdVal: confirmPassword
  };

  setSubmittingReset(true);
  try {
    await submitUserResetPassword(payload); 
    alert('User Password updated successfully!');
    setShowResetModal(false);
    refreshData(); 
  } catch (error) {
    console.error('Failed to update user:', error);
    alert('Failed to update user. Please try again.');
  } finally {
    setSubmittingEdit(false);
  }
};


const handlesubmitAssign = async (row: User) => {
  const payload: AssignPayload = {
    idVal: row.id,
    userIdVal: user.id,
    tokenVal: user.access_token,
    autoAssignTelecallersVal: 1,
    assignmentOrderVal: 0,
  };

  setAssigningUserId(row.id);

  try {
    await submitAssignUser(payload);
    alert('User assigned successfully!');
    refreshData(); 
  } catch (error) {
    console.error('Failed to assign user:', error);
    alert('Failed to assign user. Please try again.');
  } finally {
    setAssigningUserId(null); 
  }
};


const baseColumns = [
  { name: 'ID', selector: (row: User) => row.id, sortable: true, width: '70px' },
  { name: 'Name', selector: (row: User) => row.full_name, sortable: true },
  { name: 'Email', selector: (row: User) => row.email_address, sortable: true },
  { name: 'Phone', selector: (row: User) => row.phone_number || '-', sortable: true },
  { name: 'Role', selector: (row: User) => row.role || '-', sortable: true },
  { name: 'Region', selector: (row: User) => row.region_name, sortable: true },
  {
    name: 'Edit',
    cell: (row: User) => (
      <button className="btn btn-warning btn-sm" onClick={() => handleOpenModal(row)}>
        Edit
      </button>
    ),
    button: true,
    ignoreRowClick: true,
    allowOverflow: true,
    width: '120px',
  },
  {
    name: 'Action',
    cell: (row: User) => (
      <button className="btn btn-danger btn-sm" onClick={() => handleOpenResetModal(row)}>
        Reset
      </button>
    ),
    button: true,
    ignoreRowClick: true,
    allowOverflow: true,
    width: '120px',
  },
];


const assignColumn = {
  name: 'Assign',
  cell: (row: User) => (
    row.is_available_for_assignment == 1 ? (
      <button className="btn btn-danger btn-sm" disabled>
        Auto Assign
      </button>
    ) : (
      <button
        className="btn btn-primary btn-sm"
        disabled={assigningUserId === row.id}
        onClick={() => handlesubmitAssign(row)}
      >
        {assigningUserId === row.id ? 'Saving...' : 'Assign'}
      </button>
    )
  ),
  button: true,
  ignoreRowClick: true,
  allowOverflow: true,
  width: '120px',
};

const leaveColumn = {
  name: 'Leave',
  cell: (row: User) =>
    row.leave_status == 1 ? (
      <button className="btn btn-danger btn-sm" disabled>
        On Leave
      </button>
    ) : (
      <button
        className="btn btn-primary btn-sm"
        onClick={() => handleOpenLeaveModal(row)}
      >
        Apply
      </button>
    ),
  button: true,
  ignoreRowClick: true,
  allowOverflow: true,
  width: '120px',
};

const columns = (user.type == 1 || user.type == 2) ? [...baseColumns, assignColumn, leaveColumn] : [...baseColumns];


  return (
    <Container fluid>
      <PageBreadcrumb title="User List" />
        <Form className="mb-4 d-flex justify-content-end">
          <Row className="align-items-end">
            <Col md={2} className="">
              <Button variant="primary" onClick={refreshData}>
                Refresh
              </Button>
            </Col>
          </Row>
      </Form>
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

    <Modal show={showModal} onHide={handleCloseModal} size="lg" centered>
      <Modal.Header closeButton>
        <Modal.Title>Edit User</Modal.Title>
      </Modal.Header>
      <Modal.Body>
        {selectedUser ? (
          <Form>
            <Form.Group className="mb-3">
              <Form.Label>First Name</Form.Label>
              <Form.Control
                type="text"
                value={selectedUser.first_name}
                onChange={(e) =>
                  setSelectedUser({ ...selectedUser, first_name: e.target.value })
                }
              />
            </Form.Group>

            <Form.Group className="mb-3">
              <Form.Label>Last Name</Form.Label>
              <Form.Control
                type="text"
                value={selectedUser.last_name}
                onChange={(e) =>
                  setSelectedUser({ ...selectedUser, last_name: e.target.value })
                }
              />
            </Form.Group>

            <Form.Group className="mb-3">
              <Form.Label>Email</Form.Label>
              <Form.Control
                type="email"
                value={selectedUser.email_address}
                onChange={(e) =>
                  setSelectedUser({ ...selectedUser, email_address: e.target.value })
                }
              />
            </Form.Group>

            <Form.Group className="mb-3">
              <Form.Label>Phone Number</Form.Label>
              <Form.Control
                type="tel"
                value={selectedUser.phone_number || ''}
                onChange={(e) =>
                  setSelectedUser({ ...selectedUser, phone_number: e.target.value })
                }
              />
            </Form.Group>

            <Form.Group className="mb-3">
              <Form.Label>Role</Form.Label>
              <Select
                options={roleOptions}
                value={roleOptions.find(opt => opt.value === Number(selectedUser.type))}
                onChange={(selected) =>
                  setSelectedUser({
                    ...selectedUser,
                    type: selected?.value ?? 0,
                    role: selected?.label || '',
                  })
                }
                placeholder="Select Role"
              />
            </Form.Group>

           <Form.Group className="mb-3">
            <Form.Label>Region</Form.Label>
            <Select
              options={regionOptions}
              value={regionOptions.find(opt => opt.value === Number(selectedUser.region))}
              isDisabled={true}
              placeholder="Select Region"
            />
          </Form.Group>

           <Button
            variant="success"
            disabled={submittingEdit}
            onClick={handleSubmitEdit}
          >
            {submittingEdit ? 'Saving...' : 'Save Changes'}
          </Button>
          </Form>
        ) : (
          <p>Loading...</p>
        )}
      </Modal.Body>
    </Modal>

    <Modal show={showLeaveModal} onHide={() => setShowLeaveModal(false)} centered>
      <Modal.Header closeButton>
        <Modal.Title>Apply Leave</Modal.Title>
      </Modal.Header>
      <Modal.Body>
        {leaveUser ? (
          <Form>
            <Form.Group className="mb-3">
              <Form.Label>From Date</Form.Label>
              <Form.Control
                type="date"
                value={leaveFromDate}
                onChange={(e) => setLeaveFromDate(e.target.value)}
              />
            </Form.Group>

            <Form.Group className="mb-3">
              <Form.Label>To Date</Form.Label>
              <Form.Control
                type="date"
                value={leaveToDate}
                onChange={(e) => setLeaveToDate(e.target.value)}
              />
            </Form.Group>
           <Button
            variant="success"
            disabled={submittingLeave}
            onClick={handleSubmitLeave}
          >
            {submittingLeave ? 'Submitting...' : 'Submit Leave'}
          </Button>
          </Form>
        ) : (
          <p>Loading...</p>
        )}
      </Modal.Body>
    </Modal>

   <Modal show={ShowResetModal} onHide={() => setShowResetModal(false)} centered>
      <Modal.Header closeButton>
        <Modal.Title>Reset Password</Modal.Title>
      </Modal.Header>
      <Modal.Body>
        {resetUser ? (
          <Form>
            

            <Form.Group className="mb-3">
              <Form.Label>New Password</Form.Label>
              <Form.Control
                type="password"
                value={newPassWord}
                onChange={(e) => setNewPassWord(e.target.value)}
              />
            </Form.Group>

            <Form.Group className="mb-3">
              <Form.Label>Confirm Password</Form.Label>
              <Form.Control
                type="password"
                value={confirmPassword}
                onChange={(e) => setConfirmPassword(e.target.value)}
              />
            </Form.Group>

            {newPassWord && confirmPassword && newPassWord !== confirmPassword && (
              <p className="text-danger">New password and confirm password do not match.</p>
            )}

            <Button
              variant="success"
              disabled={
                submittingReset || !newPassWord || newPassWord !== confirmPassword
              }
              onClick={handleSubmitReset}
            >
              {submittingReset ? 'Resetting...' : 'Reset Password'}
            </Button>
          </Form>
        ) : (
          <p>Loading...</p>
        )}
      </Modal.Body>
    </Modal>





    </Container>
  );
};

export default UsersDataTable;
