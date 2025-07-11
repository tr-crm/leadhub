import  { useEffect, useState, useMemo } from "react";
import bgImage from '@/assets/images/profile-bg.jpg';
import userImage from '@/assets/images/users/user-2.jpg';
import type { User } from '@/types/user.types';
import { Form, Button,Modal } from 'react-bootstrap';
import type { UserChangePayload } from '@/services/userservice';
import { submitUserChangePassword } from '@/services/userservice';
import { toast } from 'react-toastify';
import LogoutOverlay from '@/components/LogoutOverlay';
import {isAuthenticated, getUserInfo, logout } from '@/utils/auth';
const UserProfileCard = () => {
    const [showLogoutLoader, setShowLogoutLoader] = useState<boolean>(false);

 // Memoize user so it doesn't cause continuous re-renders/useEffect triggers
                 const user = useMemo(() => (isAuthenticated() ? getUserInfo() : null), []);
               
                 // Ref to prevent double fetch in Strict Mode or repeated effect calls
                  // const didFetchRef = useRef(false);
               
                 useEffect(() => {
                   if (!user) {
                     setShowLogoutLoader(true);
                   }
                 }, [user]);

  const [resetUser, setResetUser] = useState<User | null>(null);
  const [ShowResetModal, setShowModal] = useState(false);
  const [newPassWord, setNewPassWord] = useState('');
  const [oldPassword, setoldPassword] = useState('');
  const [confirmPassword, setConfirmPassword] = useState('');


  const handleOpenChangeModal = (user: User) => {
    setResetUser(user);
    setNewPassWord('');
    setoldPassword('');
    setShowModal(true);
  };
  
    const handleCloseModal = () => {
        setShowModal(false);
        setNewPassWord('');
        setoldPassword('');
    };

  const handleSubmitReset = async () => {
  if (!resetUser) {
     toast.dismiss();
     toast.error('No user selected for editing.');
    return;
  }

  const payload: UserChangePayload = {
    idVal: resetUser.id,
    userIdVal: user.id,
    tokenVal: user.access_token,
    oldPwdVal: oldPassword,
    newPwdVal: newPassWord,
    rePwdVal: confirmPassword
  };

  setShowModal(true);
  try {
    const response= await submitUserChangePassword(payload); 
   
   

     if (response.response === 'login_error') {
                            
                                setShowLogoutLoader(true);
                             toast.dismiss();
                           toast.error(response.message);
                   
                           // Optionally redirect to login page here
                         } else if (response.response === 'error') {
                             
                            toast.dismiss();
                           toast.error(response.message);
                         } else if (response.response === 'success') {
                           toast.dismiss();
                           toast.success(response.message);
                            setShowModal(false);
                           
                         }
  } catch (error) {
    console.error('Failed to update user:', error);
  
      toast.dismiss();
      toast.error('Failed to update user. Please try again.');
  } finally {
    setShowModal(false);
  }
};
  return (
    <div className="container-fluid">
       {showLogoutLoader && (
  <LogoutOverlay
    duration={5} 
    onComplete={async () => {
      await logout(); // your logout function
    }}
  />
)}
      <div className="row">
        <div className="col-12">
          <article className="card card-out-of-container border-top-0">
            {/* Header Image */}
                <div
                className="position-relative card-side-img overflow-hidden"
                            style={{
                        height: '250px',
                        backgroundImage: `url(${bgImage})`,
                        backgroundSize: 'cover',
                        backgroundPosition: 'center',
                    }}
                >
              <div className="p-4 card-img-overlay rounded-start-0 auth-overlay d-flex align-items-center justify-content-center">
                <h3 className="text-white mb-0 fst-italic">
                  {/* "Designing the future, one template at a time" */}
                </h3>
              </div>
            </div>

            {/* Card Body */}
            <div className="card-body">
              <div className="d-flex justify-content-between align-items-center">
                {/* Avatar + Info */}
                <div className="d-flex justify-content-start align-items-center gap-3">
                  <div className="avatar avatar-xxl">
                   <img
                    src={userImage}
                    alt="avatar-2"
                    className="img-fluid img-thumbnail rounded-circle"
                    />
                  </div>
                  <div>
                    <h4 className="text-nowrap fw-bold mb-1">{user.full_name}</h4>
                    <span className="badge bg-primary fw-medium ms-2 fs-xs">
                      {user.role}
                    </span>
                  </div>
                </div>

                {/* Action Buttons */}
                <div className="d-flex gap-2 align-items-center">
                   <button
                        className="btn btn-primary btn-sm"
                        onClick={() => handleOpenChangeModal(user)}
                    >
                        Change Password
                    </button>
                </div>
              </div>
            </div>
          </article>
        </div>
      </div>
    <Modal show={ShowResetModal} onHide={handleCloseModal} centered>
        <Modal.Header closeButton>
            <Modal.Title>Reset Password</Modal.Title>
        </Modal.Header>
        <Modal.Body>
            {resetUser ? (
            <Form>
                {/* Old Password */}
                <Form.Group className="mb-3">
                <Form.Label>Old Password</Form.Label>
                <Form.Control
                    type="password"
                    value={oldPassword}
                    onChange={(e) => setoldPassword(e.target.value)}
                />
                </Form.Group>

                {/* New Password */}
                <Form.Group className="mb-3">
                <Form.Label>New Password</Form.Label>
                <Form.Control
                    type="password"
                    value={newPassWord}
                    onChange={(e) => setNewPassWord(e.target.value)}
                />
                </Form.Group>

                {/* Confirm Password */}
                <Form.Group className="mb-3">
                <Form.Label>Confirm Password</Form.Label>
                <Form.Control
                    type="password"
                    value={confirmPassword}
                    onChange={(e) => setConfirmPassword(e.target.value)}
                />
                </Form.Group>

                {/* Error Message */}
                {newPassWord && confirmPassword && newPassWord !== confirmPassword && (
                <p className="text-danger">New password and confirm password do not match.</p>
                )}

                {/* Submit Button */}
                <Button
                variant="success"
                disabled={
                    !oldPassword || !newPassWord || newPassWord !== confirmPassword
                }
                onClick={handleSubmitReset}
                >
                Change Password
                </Button>
            </Form>
            ) : (
            <p>Loading...</p>
            )}
        </Modal.Body>
    </Modal>

    </div>
  );
};

export default UserProfileCard;
