import { useState } from 'react';
import { useForm } from 'react-hook-form';
import { useNavigate, Link } from 'react-router-dom';
import axios from '../../api/axiosInstance';
import Cookies from 'js-cookie';
import {
  Button,
  Card,
  Col,
  Form,
  FormControl,
  FormLabel,
  Row,
  Spinner,
  Alert,
} from 'react-bootstrap';
import { currentYear } from '@/helpers';
import AppLogo from '@/components/AppLogo';
import { TbLockPassword, TbMail } from 'react-icons/tb';
import { toast } from 'react-toastify';

interface LoginFormInputs {
  email: string;
  password: string;
  remember?: boolean;
}

interface UserDetails {
  access_token: string;
  full_name: string;
  [key: string]: any;
}

interface LoginResponse {
  response: 'success' | 'error';
  message?: string;
  multiLogin?: number;
  data: UserDetails[];
}

const SignIn = () => {
  const {
    register,
    handleSubmit,
    formState: { errors },
  } = useForm<LoginFormInputs>();

  const navigate = useNavigate();
  const [loading, setLoading] = useState(false);
  const [apiError, setApiError] = useState<string | null>(null);
  const [multiLogin, setMultiLogin] = useState(0);
  const [formEmail, setFormEmail] = useState('');
  const [formPassword, setFormPassword] = useState('');

  const onSubmit = async (data: LoginFormInputs): Promise<void> => {
    setLoading(true);
    setApiError(null);

    setFormEmail(data.email);
    setFormPassword(data.password);

    try {
      const response = await axios.post<LoginResponse>('/api/User/userLogin', {
        email: data.email,
        password: data.password,
      });

      if (response.data.response === 'success') {
        if (response.data.multiLogin === 1000) {
          setMultiLogin(1000);
        } else if (Array.isArray(response.data.data) && response.data.data.length > 0) {
          const user: UserDetails = response.data.data[0];

          Cookies.set('accessToken', user.access_token, { expires: 7 });
          Cookies.set('LeadHubLoginAccess', JSON.stringify(user), { expires: 7 });
 toast.dismiss();
          toast.success(
            <div>
              Hi, {user.full_name} <br />
              Welcome to TRCRM Lead Hub
            </div>
          );

          navigate('/dashboard');
        }
      } else {
         toast.dismiss();
        toast.error(response.data.message || 'Login failed.');
      }
    } catch (error: unknown) {
      const err = error as { response?: { data?: { message?: string } } };
      const message = err.response?.data?.message || 'Login failed. Please try again.';
       toast.dismiss();
      toast.error(message);
      setApiError(message);
    } finally {
      setLoading(false);
    }
  };

  const handleForceLogout = async ({
    emailVal,
    password,
  }: {
    emailVal: string;
    password: string;
  }): Promise<void> => {
    try {
      const response = await axios.post<LoginResponse>('/api/User/userForceLogout', {
        emailVal,
        password,
        forceLogout: '1',
      });

      if (response.data.response === 'success') {
        setMultiLogin(response.data.multiLogin || 0);
         toast.dismiss();
        toast.success('You have been successfully logged out from all other devices.');
      } else {
         toast.dismiss();
        toast.error(response.data.message || 'Force logout failed.');
      }
    } catch (error: unknown) {
      console.error('Force logout failed:', error);
       toast.dismiss();
      toast.error('An error occurred while trying to force logout.');
    }
  };

  return (
    <div className="auth-box d-flex align-items-center">
      <div className="container-xxl">
        <Row className="align-items-center justify-content-center">
          <Col xl={10} sm={12}>
            <Card className="rounded-4">
              <Row className="justify-content-between g-0">
                <Col lg={6} className="d-none d-lg-block">
                  <div className="h-100 position-relative card-side-img rounded-end-4 overflow-hidden">
                    <div className="p-4 card-img-overlay rounded-start-0 auth-overlay d-flex align-items-end justify-content-center"></div>
                  </div>
                </Col>
                <Col lg={6} md={6} sm={12}>
                  <div className="card-body">
                    <div className="auth-brand text-center mb-4">
                      <AppLogo />
                      <h4 className="fw-bold mt-4">Welcome to Lead Hub</h4>
                    </div>

                    <Form onSubmit={handleSubmit(onSubmit)}>
                      {apiError && <Alert variant="danger">{apiError}</Alert>}

                      <div className="mb-3">
                        <FormLabel htmlFor="userEmail">
                          Email address <span className="text-danger">*</span>
                        </FormLabel>
                        <div className="input-group">
                          <span className="input-group-text bg-light">
                            <TbMail className="text-muted fs-xl" />
                          </span>
                          <FormControl
                            type="email"
                            id="userEmail"
                            placeholder="you@example.com"
                            autoComplete="email"
                            {...register('email', {
                              required: 'Email is required',
                              pattern: {
                                value: /^\S+@\S+$/i,
                                message: 'Invalid email format',
                              },
                            })}
                            isInvalid={!!errors.email}
                          />
                        </div>
                        {errors.email && (
                          <small className="text-danger">{errors.email.message}</small>
                        )}
                      </div>

                      <div className="mb-3">
                        <FormLabel htmlFor="userPassword">
                          Password <span className="text-danger">*</span>
                        </FormLabel>
                        <div className="input-group">
                          <span className="input-group-text bg-light">
                            <TbLockPassword className="text-muted fs-xl" />
                          </span>
                          <FormControl
                            type="password"
                            id="userPassword"
                            placeholder="••••••••"
                            autoComplete="current-password"
                            {...register('password', {
                              required: 'Password is required',
                              minLength: {
                                value: 6,
                                message: 'Password must be at least 6 characters',
                              },
                            })}
                            isInvalid={!!errors.password}
                          />
                        </div>
                        {errors.password && (
                          <small className="text-danger">{errors.password.message}</small>
                        )}
                      </div>

                      <div className="d-flex justify-content-between align-items-center mb-3">
                        <div className="form-check">
                          <input
                            className="form-check-input form-check-input-light fs-14"
                            type="checkbox"
                            id="rememberMe"
                            {...register('remember')}
                          />
                          <label className="form-check-label" htmlFor="rememberMe">
                            Keep me signed in
                          </label>
                        </div>

                        <Link
                          to="/auth-2/reset-password"
                          className="text-decoration-underline text-muted"
                        >
                          Forgot Password?
                        </Link>
                      </div>

                      <div className="d-grid">
                        {multiLogin === 1000 ? (
                          <>
                            <div className="text-danger text-center mt-2 mb-2 fw-semibold">
                              You're signed in on another device. Log out?
                            </div>

                            <Button
                              variant="warning"
                              size="sm"
                              className="mt-2 fw-semibold"
                              onClick={() =>
                                handleForceLogout({
                                  emailVal: formEmail,
                                  password: formPassword,
                                })
                              }
                            >
                              Force Logout
                            </Button>
                          </>
                        ) : (
                          <Button
                            type="submit"
                            className="btn btn-primary fw-semibold py-2"
                            disabled={loading}
                          >
                            {loading ? (
                              <>
                                <Spinner animation="border" size="sm" /> Logging in...
                              </>
                            ) : (
                              'Login'
                            )}
                          </Button>
                        )}
                      </div>
                    </Form>

                    <p className="text-center text-muted mt-4 mb-0">
                      © 2025 - {currentYear} Leads Hub — by{' '}
                      <span className="fw-semibold">TRCRM</span>
                    </p>
                  </div>
                </Col>
              </Row>
            </Card>
          </Col>
        </Row>
      </div>
    </div>
  );
};

export default SignIn;
