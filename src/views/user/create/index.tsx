import { useState } from 'react';
import { useNavigate} from 'react-router-dom';
import { Container, Form, Button, Alert, Row, Col } from 'react-bootstrap';
import PageBreadcrumb from '@/components/PageBreadcrumb';
import { getUserInfo } from '@/utils/auth';

const Page = () => {
  const user = getUserInfo();
const navigate = useNavigate();
  // console.log(user);

  const [formData, setFormData] = useState({
    firstName: '',
    lastName: '',
    role: '',
    email: '',
    phone: '',
    userIdVal: user.id,
    tokenVal: user.access_token,
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

    const payload = {
      roleVal: Number(formData.role),
      firstNameVal: formData.firstName,
      lastNameVal: formData.lastName,
      emailAddressVal: formData.email,
      phoneNumberVal: formData.phone,
      createdByVal: formData.userIdVal,
      userIdVal:formData.userIdVal,
      tokenVal: formData.tokenVal,
    };

    try {
      const res = await fetch('https://dev.thetrcrm.com/leadhub/services/api/User/createUser', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(payload),
      });

      if (!res.ok) throw new Error('Failed to create user');

      setStatus('success');
       navigate('/user/list');
      setFormData({
        firstName: '',
        lastName: '',
        role: '',
        email: '',
        phone: '',
        userIdVal: user.id,
        tokenVal: user.access_token,
      });
    } catch (err) {
      console.error(err);
      setStatus('error');
    }
  };

  return (
    <Container fluid>
      <PageBreadcrumb title="User Create" />

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
              <Form.Label>First Name</Form.Label>
              <Form.Control
                type="text"
                name="firstName"
                value={formData.firstName}
                onChange={handleChange}
                placeholder="Enter first name"
                required
              />
            </Form.Group>
          </Col>
          <Col xs={12} md={6}>
            <Form.Group controlId="lastName">
              <Form.Label>Last Name</Form.Label>
              <Form.Control
                type="text"
                name="lastName"
                value={formData.lastName}
                onChange={handleChange}
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
              <Form.Label>Role</Form.Label>
              <Form.Select
                name="role"
                value={formData.role}
                onChange={handleChange}
                required
              > 
                {/* <option value="1">CEO</option> */}
                <option value="2">Head</option>
                <option value="3">Manager</option>
                 <option value="4">Team Lead</option>
                 <option value="5">Executive</option>
              </Form.Select>
            </Form.Group>
          </Col>
          <Col xs={12} md={6}>
            <Form.Group controlId="email">
              <Form.Label>Email</Form.Label>
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
              <Form.Label>Phone Number</Form.Label>
              <Form.Control
                type="tel"
                name="phone"
                value={formData.phone}
                onChange={handleChange}
                placeholder="Enter phone number"
                required
              />
            </Form.Group>
          </Col>
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

export default Page;
