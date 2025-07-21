import { useState, useEffect, useMemo, useRef } from 'react';
import DataTable from 'react-data-table-component';
import { Container,Form, Row,Col, Button,Modal } from 'react-bootstrap';
import Select from 'react-select';
import PageBreadcrumb from '@/components/PageBreadcrumb';
// import { getUserList, User, UserListRequestPayload } from '@/services/userservice';

import type { UserListRequestPayload , LeaveRequestPayload, UserEditPayload, UserResetPayload, AssignPayload, UserCreatePayload } from '@/services/userservice';
import { getUserList, submitLeaveRequest, submitUserEdit , submitUserResetPassword, submitAssignUser, submitUserCreate } from '@/services/userservice';
import type { User } from '@/types/user.types';
import { toast } from 'react-toastify';
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
     if (!user) return;
    setLoading(true);
    try {
      const res = await getUserList(payload);
     
        if (res.response === 'login_error') {
        toast.error(res.message);
        setShowLogoutLoader(true);
        return;
      } else if (res.response === 'error') {
        toast.error(res.message);
      } else if (res.response === 'success') {
       setData(res.data);
     
      }
    } catch (error: any) {
      if (error?.response?.data?.response === 'login_error') {
        toast.error(error?.response?.data?.message || 'Login failed. Redirecting...');
        setShowLogoutLoader(true);
        return;
      } else {
      
        toast.error('Failed to fetch leads. Please try again.');
      }
    } finally {
      setLoading(false);
    }
  };

   useEffect(() => {
    if (!user) return;

    // Only fetch if we haven't already fetched for current params
    if (!didFetchRef.current) {
      refreshData();
      didFetchRef.current = true;
    }
   
   
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
   const res= await submitLeaveRequest(payload);   

    
        if (res.response === 'login_error') {
        toast.error(res.message);
        setShowLogoutLoader(true);
        return;
      } else if (res.response === 'error') {
        toast.error(res.message);
      } else if (res.response === 'success') {
        setShowLeaveModal(false)
     
      }
    
   
  } catch (error) {
     toast.error('Failed to submit leave. Please try again');
  } finally {
    setSubmittingLeave(false);
  }
};


const handleSubmitEdit = async () => {
  if (!selectedUser) {
      toast.error('No user selected for editing.');
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
    supervisionVal : selectedUser.supervision,
    idletimeVal : selectedUser.idle_time || '',
  };

  setSubmittingEdit(true);
  try {
    const res=await submitUserEdit(payload); 
    if (res.response === 'login_error') {
        toast.error(res.message);
        setShowLogoutLoader(true);
        return;
      } else if (res.response === 'error') {
        toast.error(res.message);
      } else if (res.response === 'success') {
        toast.success(res.message);
         setShowModal(false);
    refreshData(); 
     
      }
    
   
  } catch (error) {
     toast.error('Failed to update user. Please try again!');
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
      toast.error('No user selected for editing.');
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
    const res=await submitUserResetPassword(payload); 
   
    if (res.response === 'login_error') {
        toast.error(res.message);
        setShowLogoutLoader(true);
        return;
      } else if (res.response === 'error') {
        toast.error(res.message);
      } else if (res.response === 'success') {
        toast.success(res.message);
         setShowResetModal(false);
         refreshData(); 
     
      }
  } catch (error) {
    console.error('Failed to update user:', error);
    toast.error('Failed to update user. Please try again.');
        setShowLogoutLoader(true);
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
   const res= await submitAssignUser(payload);
 
    if (res.response === 'login_error') {
        toast.error(res.message);
        setShowLogoutLoader(true);
        return;
      } else if (res.response === 'error') {
        toast.error(res.message);
      } else if (res.response === 'success') {
        toast.success(res.message);
              refreshData();
     
      }
  } catch (error) {
    console.error('Failed to assign user:', error);
    toast.error('Failed to assign user:');
  } finally {
    setAssigningUserId(null); 
  }
};


// Create User
const [showCreateModal, setShowCreateModal] = useState(false);
const [newUser, setNewUser] = useState<Partial<User>>({
  first_name: '',
  last_name: '',
  email_address: '',
  phone_number: '',
  type: 5,
  region: user.region,
});
const [submittingCreate, setSubmittingCreate] = useState(false);
const handleOpenUserCreateModal = () => {
  setNewUser({
    first_name: '',
    last_name: '',
    email_address: '',
    phone_number: '',
    type: 5,
    region: user.region,
  });
  setShowCreateModal(true);
};

const handleSubmitCreate = async () => {
  if (!newUser.first_name || !newUser.email_address || !newUser.region) {
    return;
  }

  const payload: UserCreatePayload = {
    userIdVal: user.id,
    tokenVal: user.access_token,
    firstNameVal: newUser.first_name || '',
    lastNameVal: newUser.last_name || '',
    emailAddressVal: newUser.email_address || '',
    phoneNumberVal: newUser.phone_number || '',
    roleVal: Number(newUser.type),
    regionVal: newUser.region,
    createdByVal: user.id,
    supervisionVal: user.id,
    idletimeVal : user.idle_time,
  };

  setSubmittingCreate(true);
  try {
    const res = await submitUserCreate(payload); 

     if (res.response === 'login_error') {
        toast.error(res.message);
        setShowLogoutLoader(true);
        return;
      } else if (res.response === 'error') {
        toast.error(res.message);
      } else if (res.response === 'success') {
        toast.success(res.message);
    setShowCreateModal(false);
    refreshData();
     
      }
   
  } catch (error) {
    toast.error('Failed to create user');
  } finally {
    setSubmittingCreate(false);
  }
};


const baseColumns = [
  // { name: 'ID', selector: (row: User) => row.id, sortable: true, width: '70px' },
   { name: 'S.No', cell: (_: any, i: any) => i + 1, width: '70px' },
  { name: 'Name', selector: (row: User) => row.full_name, sortable: true },
  { name: 'Email', selector: (row: User) => row.email_address, sortable: true },
  { name: 'Phone', selector: (row: User) => row.phone_number || '-', sortable: true },
  { name: 'Role', selector: (row: User) => row.role || '-', sortable: true },
  { name: 'Region', selector: (row: User) => row.region_name, sortable: true },
    { name: 'Idle Time', selector: (row: User) => row.idle_time, sortable: true },
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

  const userCreateColumn = {
  name: 'User Create',
  cell: (row: User) => 
    row.type == 3 ? (
      <Button variant="success" className="me-2" onClick={handleOpenUserCreateModal}>
        Create User
      </Button>
    ) : (
     '-'
    ),
  button: true,
  ignoreRowClick: true,
  allowOverflow: true,
  width: '120px',
};

let columns;

if (user.type == 1 || user.type == 2) {
  columns = [...baseColumns, assignColumn, leaveColumn];
} else if (user.type == 3) {
  columns = [...baseColumns, assignColumn, leaveColumn, userCreateColumn];
} else {
  columns = [...baseColumns,assignColumn,leaveColumn];
}


  return (
    <Container fluid>
      
        <PageBreadcrumb title={`User List (${data.length})`} />
       {showLogoutLoader && <LogoutOverlay
          onComplete={async () => {
            await logout(); // your logout function
          }}
        />
        }
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
        columns={columns}
        data={data}
        progressPending={loading}
        pagination
        selectableRows
        highlightOnHover
        pointerOnHover
        responsive
      />

    <Modal show={showModal} onHide={handleCloseModal} backdrop="static" keyboard={false} size="lg" centered>
      <Modal.Header closeButton>
        <Modal.Title>Edit User</Modal.Title>
      </Modal.Header>
      <Modal.Body>
        {selectedUser ? (
          <Form>
            <Form.Group className="mb-3">
              <Form.Label>
                First Name <span style={{ color: 'red' }}>*</span>
              </Form.Label>
              <Form.Control
                type="text"
                value={selectedUser.first_name}
                onInput={(e: React.FormEvent<HTMLInputElement>) => {
                let input = e.currentTarget.value;

                // Remove non-alphabet characters
                input = input.replace(/[^a-zA-Z]/g, '');

                // Capitalize first letter and lowercase the rest
                if (input.length > 0) {
                  input = input.charAt(0).toUpperCase() + input.slice(1).toLowerCase();
                }

                setSelectedUser({ ...selectedUser, first_name: input });
              }}
              placeholder="Enter first name"
              required
            />
              {!selectedUser.first_name && (
                <small className="text-danger">First Name is required.</small>
              )}
            </Form.Group>

            <Form.Group className="mb-3">
              <Form.Label>
                Last Name <span style={{ color: 'red' }}>*</span>
              </Form.Label>
              <Form.Control
                type="text"
                value={selectedUser.last_name}
                 onInput={(e: React.FormEvent<HTMLInputElement>) => {
                let input = e.currentTarget.value;

                // Remove non-alphabet characters
                input = input.replace(/[^a-zA-Z]/g, '');

                // Capitalize first letter and lowercase the rest
                if (input.length > 0) {
                  input = input.charAt(0).toUpperCase() + input.slice(1).toLowerCase();
                }

                setSelectedUser({ ...selectedUser, last_name: input });
              }}
              placeholder="Enter last name"
              required
            
              />
               {!selectedUser.last_name && (
                <small className="text-danger">Last Name is required.</small>
              )}
            </Form.Group>

            <Form.Group className="mb-3">
              <Form.Label>
                Email<span style={{ color: 'red' }}>*</span>
              </Form.Label>
              <Form.Control
                type="email"
                value={selectedUser.email_address}
                onChange={(e) =>
                  setSelectedUser({ ...selectedUser, email_address: e.target.value })
                }
              />
                {!selectedUser.email_address && (
                <small className="text-danger">Email is required.</small>
              )}
            </Form.Group>

            <Form.Group className="mb-3">
               <Form.Label>
                Phone Number <span className="text-danger">*</span>
              </Form.Label>
              <Form.Control
                type="tel"
                value={selectedUser.phone_number || ''}
                onInput={(e: React.FormEvent<HTMLInputElement>) => {
                  let input = e.currentTarget.value;

                  // Remove all non-digits and limit to 10 digits
                  input = input.replace(/\D/g, '').slice(0, 10);

                  setSelectedUser({ ...selectedUser, phone_number: input });
                }}
                placeholder="Enter 10-digit phone number"
                required
              />
              {(selectedUser.phone_number?.length ?? 0) !== 10 && (
                <small className="text-danger">Phone number must be exactly 10 digits.</small>
              )}
            </Form.Group>

            <Form.Group className="mb-3">
              <Form.Label>Role<span style={{ color: 'red' }}>*</span></Form.Label>
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
          <Form.Group className="mb-3">
              <Form.Label>
              Idle Time<span className="text-danger">*</span>
            </Form.Label>
           <Form.Control
                type="text"
                value={selectedUser.idle_time}
                onChange={(e) =>
                  setSelectedUser({ ...selectedUser, idle_time: e.target.value })
                }
              />
                {!selectedUser.idle_time && (
                <small className="text-danger">Idle Time is required.</small>
              )}
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

   <Modal show={ShowResetModal} onHide={() => setShowResetModal(false)} backdrop="static" keyboard={false} centered>
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

    <Modal show={showCreateModal} onHide={() => setShowCreateModal(false)} backdrop="static" keyboard={false} size="lg" centered>
      <Modal.Header closeButton>
        <Modal.Title>Create User</Modal.Title>
      </Modal.Header>
      <Modal.Body>
        <Form>
          <Form.Group className="mb-3">
            <Form.Label>
                First Name <span style={{ color: 'red' }}>*</span>
              </Form.Label>
            <Form.Control
              type="text"
              value={newUser.first_name || ''}
              onChange={(e: React.ChangeEvent<HTMLInputElement>) => {
                let input = e.target.value;

                input = input.replace(/[^a-zA-Z]/g, '');

                if (input.length > 0) {
                  input = input.charAt(0).toUpperCase() + input.slice(1).toLowerCase();
                }

                setNewUser((prevData) => ({
                  ...prevData,
                  first_name: input,
                }));
              }}
            required
            />
             {!newUser.first_name && (
                <small className="text-danger">First Name is required.</small>
              )}
          </Form.Group>

          <Form.Group className="mb-3">
            <Form.Label>
              Last Name <span style={{ color: 'red' }}>*</span>
            </Form.Label>
            <Form.Control
              type="text"
              value={newUser.last_name || ''}
              onChange={(e: React.ChangeEvent<HTMLInputElement>) => {
                let input = e.target.value;

                input = input.replace(/[^a-zA-Z]/g, '');

                if (input.length > 0) {
                  input = input.charAt(0).toUpperCase() + input.slice(1).toLowerCase();
                }

                setNewUser((prevData) => ({
                  ...prevData,
                  last_name: input,
                }));
              }}
              required
            />
             {!newUser.last_name && (
                <small className="text-danger">Last Name is required.</small>
              )}
          </Form.Group>

          <Form.Group className="mb-3">
             <Form.Label>
                Email <span style={{ color: 'red' }}>*</span>
              </Form.Label>
            <Form.Control
              type="email"
              value={newUser.email_address || ''}
              onChange={(e) => setNewUser({ ...newUser, email_address: e.target.value })}
              required
            />
             {!newUser.email_address && (
                <small className="text-danger">Email Address is required.</small>
              )}
          </Form.Group>

          <Form.Group className="mb-3">
             <Form.Label>
                Phone Number <span style={{ color: 'red' }}>*</span>
              </Form.Label>
            <Form.Control
              type="tel"
              value={newUser.phone_number || ''}
              onInput={(e: React.FormEvent<HTMLInputElement>) => {
                  const input = e.currentTarget;
                  input.value = input.value.replace(/\D/g, '').slice(0, 10);
                  setNewUser({ ...newUser, phone_number: input.value });
                }}
                required
            />
            {(newUser.phone_number?.length ?? 0) !== 10 && (
                <small className="text-danger">Phone number must be exactly 10 digits.</small>
            )}
            
          </Form.Group>

          <Form.Group className="mb-3">
            <Form.Label>
                Region <span style={{ color: 'red' }}>*</span>
            </Form.Label>
            <Select
              options={roleOptions}
              value={roleOptions.find(opt => opt.value === Number(newUser.type))}
              onChange={(selected) =>
                setNewUser({
                  ...newUser,
                  type: selected?.value ?? 0
                })
              }
              placeholder="Select Role"
              isDisabled={true}
            />
          </Form.Group>

          <Form.Group className="mb-3">
           <Form.Label>
                Region <span style={{ color: 'red' }}>*</span>
              </Form.Label>
            <Select
              options={regionOptions}
              value={regionOptions.find(opt => opt.value === Number(newUser.region))}
              onChange={(selected) =>
                setNewUser({
                  ...newUser,
                  region: selected?.value ?? 0,
                })
              }
              placeholder="Select Region"
              isDisabled={true}
            />
          </Form.Group>
              <Form.Group className="mb-3">
              <Form.Label>
              Idle Time<span className="text-danger">*</span>
            </Form.Label>
           <Form.Control
                type="text"
                value={newUser.idle_time}
                onChange={(e) =>
                  setNewUser({ ...newUser, idle_time: e.target.value })
                }
              />
                {!newUser.idle_time && (
                <small className="text-danger">Idle Time is required.</small>
              )}
          </Form.Group>
          <Button
            variant="success"
            disabled={submittingCreate}
            onClick={handleSubmitCreate}
          >
            {submittingCreate ? 'Creating...' : 'Create User'}
          </Button>
        </Form>
      </Modal.Body>
    </Modal>

    </Container>
  );
};

export default UsersDataTable;
