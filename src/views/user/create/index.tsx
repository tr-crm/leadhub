import { useState,useEffect,useMemo } from 'react';
import { useNavigate} from 'react-router-dom';
import { Container, Form, Button, Alert, Row, Col } from 'react-bootstrap';
import PageBreadcrumb from '@/components/PageBreadcrumb';
import RegionSelect from '@/components/regionselect';
import {toast } from 'react-toastify';
import { getUserCreate } from '@/services/userservice';
import LogoutOverlay from '@/components/LogoutOverlay';
import { isAuthenticated, getUserInfo, logout } from '@/utils/auth';

const User = () => {
  // const user = getUserInfo();
   const user = useMemo(() => (isAuthenticated() ? getUserInfo() : null), []);
  const type=user.type;
const navigate = useNavigate();
const getInitialRegionValue = (): string => {
    if (type == '1' || type == '2') {
      return '0';
    } else if (user.region) {
      return String(user.region);
    }
    return '0';
  };
  const [region, setRegion] = useState<string>(getInitialRegionValue());
    const [showLogoutLoader, setShowLogoutLoader] = useState<boolean>(false);
  // console.log(user);
 
  

  const [formData, setFormData] = useState({
    firstName: '',
    lastName: '',
    role: '',
    email: '',
    phone: '',
    userIdVal: user.id,
    tokenVal: user.access_token,
    regionVal: region,
    supervisionVal : user.id,
  });

  const [status, setStatus] = useState<'idle' | 'success' | 'error'>('idle');

 



  const handleChange = (
    e: React.ChangeEvent<HTMLInputElement | HTMLSelectElement | HTMLTextAreaElement>
  ) => {
    const { name, value } = e.target;
    setFormData(prev => ({ ...prev, [name]: value }));
  };

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    
      if(formData.regionVal=='0' || formData.regionVal==' '){
      toast.error('Region Required');

      return;

    }

    const payload = {
      roleVal: Number(formData.role),
      firstNameVal: formData.firstName,
      lastNameVal: formData.lastName,
      emailAddressVal: formData.email,
      phoneNumberVal: formData.phone,
      createdByVal: formData.userIdVal,
      userIdVal: user.id,
      tokenVal: user.access_token,
      regionVal: formData.regionVal,
      supervisionVal : user.id,
    };

  

    try {
     
       const res = await getUserCreate(payload);
         if (res.response === 'login_error') {
        toast.error(res.message);
        setShowLogoutLoader(true);
        return;
      } else if (res.response === 'error') {
        toast.error(res.message);
      } else if (res.response === 'success') {
      toast.success(res.message);
       navigate('/user/list');
            setFormData({
        firstName: '',
        lastName: '',
        role: '',
        email: '',
        phone: '',
        userIdVal: user.id,
        tokenVal: user.access_token,
        regionVal: user.region,
        supervisionVal : '',
      });
     
      }

  
    } catch (error:any) {
       if (error?.response?.data?.response === 'login_error') {
        toast.error(error?.response?.data?.message || 'Login failed. Redirecting...');
        setShowLogoutLoader(true);
        return;
      } else {
      
        toast.error('Failed to fetch leads. Please try again.');
      }
      console.error(error);
      setStatus('error');
    }
  };

  const allRoles = [
    { value: 2, label: 'Head' },
    { value: 3, label: 'Manager' },
    { value: 4, label: 'Team Lead' },
    { value: 5, label: 'Executive' }
  ];
  const userType = Number(user.type);

  let filteredRoles;

  if (userType === 1) {
    filteredRoles = allRoles.filter(role => role.value === 2);
  } else if (userType === 2) {
    filteredRoles = allRoles.filter(role => role.value === 3);
  }else if (userType === 3) {
    filteredRoles = allRoles.filter(role => role.value === 5);
  }else {
    filteredRoles = allRoles; // all roles
  }

  useEffect(() => {
    if (user?.type === '3' && user.region) {
      setRegion(user.region);
    }
  }, [user]);

  return (
    <Container fluid>
      <PageBreadcrumb title="User Create" />
      {showLogoutLoader && <LogoutOverlay
          onComplete={async () => {
            await logout(); // your logout function
          }}
        />
        }

      {status === 'success' && (
        <Alert variant="success" className="mt-3">
          User created successfully!
        </Alert>
      )}
      {status === 'error' && (
        <Alert variant="danger" className="mt-3">
          Failed to create user. Please try again.
        </Alert>
      )}

      <Form onSubmit={handleSubmit} className="mt-4">

        {/* Row 1: First Name & Last Name */}
        <Row className="mb-3">
          <Col xs={12} md={6}>
            <Form.Group controlId="firstName">
              <Form.Label>
                First Name <span style={{ color: 'red' }}>*</span>
              </Form.Label>
              <Form.Control
                type="text"
                name="firstName"
                value={formData.firstName}
                onChange={(e: React.ChangeEvent<HTMLInputElement>) => {
                let input = e.target.value;

                input = input.replace(/[^a-zA-Z]/g, '');

                if (input.length > 0) {
                  input = input.charAt(0).toUpperCase() + input.slice(1).toLowerCase();
                }

                setFormData((prevData) => ({
                  ...prevData,
                  firstName: input,
                }));
              }}
                placeholder="Enter first name"
                required
              />
            </Form.Group>
          </Col>
          <Col xs={12} md={6}>
            <Form.Group controlId="lastName">
              <Form.Label>
                Last Name <span style={{ color: 'red' }}>*</span>
              </Form.Label>
              <Form.Control
                type="text"
                name="lastName"
                value={formData.lastName}
                onChange={(e: React.ChangeEvent<HTMLInputElement>) => {
                let input = e.target.value;

                input = input.replace(/[^a-zA-Z]/g, '');

                if (input.length > 0) {
                  input = input.charAt(0).toUpperCase() + input.slice(1).toLowerCase();
                }

                setFormData((prevData) => ({
                  ...prevData,
                  lastName: input,
                }));
              }}
                placeholder="Enter last name"
                required
              />
            </Form.Group>
          </Col>
        </Row>

        {/* Row 2: Role & Email */}
        <Row className="mb-3">
           <Col xs={12} md={6}>
            <Form.Group controlId="role">
               <Form.Label>
                Role <span style={{ color: 'red' }}>*</span>
              </Form.Label>
              <Form.Select
                name="role"
                value={formData.role}
                onChange={handleChange}
                required
              >
                <option value="" disabled>
                  Select role
                </option>
                {filteredRoles.map(role => (
                  <option key={role.value} value={role.value}>
                    {role.label}
                  </option>
                ))}
              </Form.Select>
            </Form.Group>
          </Col>
          <Col xs={12} md={6}>
            <Form.Group controlId="email">
               <Form.Label>
                Email <span style={{ color: 'red' }}>*</span>
              </Form.Label>
              <Form.Control
                type="email"
                name="email"
                value={formData.email}
                onChange={handleChange}
                placeholder="Enter email address"
                required
              />
            </Form.Group>
          </Col>
        </Row>

        {/* Row 3: Phone */}
        <Row className="mb-3">
          <Col xs={12} md={6}>
            <Form.Group controlId="phone">
               <Form.Label>
                Phone Number <span style={{ color: 'red' }}>*</span>
              </Form.Label>
               <Form.Control
                type="tel"
                name="phone"
                value={formData.phone}
                onInput={(e: React.FormEvent<HTMLInputElement>) => {
                  const input = e.currentTarget;
                  input.value = input.value.replace(/\D/g, '').slice(0, 10);
                  setFormData({ ...formData, phone: input.value });
                }}
                placeholder="Enter phone number"
                required
              />
            </Form.Group>
          </Col>
          
        {(formData.role == '3') && (
          <Col xs={12} md={6}>
            <Form.Group controlId="region">
              <Form.Label>
                Region <span style={{ color: 'red' }}>*</span>
              </Form.Label>
              <RegionSelect
                  value={formData.regionVal}
                  onChange={(selected) => {
                    console.log('Selected Region:', selected);
                    setFormData({
                      ...formData,
                      regionVal: selected?.value || '0'
                    });
                  }}
                  placeholder="Select region"
                />
            </Form.Group>
          </Col>
        )}
        {user?.type == '3' && user.region && (
          <Col xs={12} md={6}>
            <Form.Group controlId="region">
               <Form.Label>
                Region <span style={{ color: 'red' }}>*</span>
              </Form.Label>
              <RegionSelect
                value={formData.regionVal}
                onChange={(selected) => setRegion(selected?.value || '0')}
                placeholder="Select region"
                disabled
              />
            </Form.Group>
          </Col>
        )}
       
        
        </Row>

        {/* Button Row: Right Aligned */}
        <Row>
          <Col className="text-end">
            <Button type="submit" variant="primary">
              Create User
            </Button>
          </Col>
        </Row>

      </Form>
    </Container>
  );
};

export default User