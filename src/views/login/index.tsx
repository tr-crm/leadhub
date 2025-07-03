import  { useState } from 'react';
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
import {toast } from 'react-toastify';
const SignIn = () => {
  const {
    register,     
    handleSubmit,
    formState: { errors },
  } = useForm();

  const navigate = useNavigate();
  const [loading, setLoading] = useState(false);
  const [apiError, setApiError] = useState<string | null>(null);
  const [multiLogin, setMultiLogin] = useState(0);
  const [formEmail, setFormEmail] = useState('');
  const [formPassword, setFormPassword] = useState('');

  const onSubmit = async (data: any) => {
    setLoading(true);
    setApiError(null);

    setFormEmail(data.email);
    setFormPassword(data.password);

    try {
      const response = await axios.post('/api/User/userLogin', {
        email: data.email,
        password: data.password,
      });
      console.log(response.data);

      if(response.data.response=='success'){
        if (response.data.multiLogin === 1000) {
      
        setMultiLogin(response.data.multiLogin);
      } else if (Array.isArray(response.data.data) && response.data.data.length > 0) {
      
      const token = response.data.data[0].access_token;
      const UserDetails = response.data.data[0];

      Cookies.set('accessToken', token, { expires: 7 });
      Cookies.set('LeadHubLoginAccess', JSON.stringify(UserDetails), { expires: 7 });
         const name=UserDetails.full_name;
         
      toast.success( <>Hi, {name} <br />Welcome to TRCRM Lead Hub  </>, {
                      position: "top-right",
                      autoClose: 4000,
                      hideProgressBar: false,
                      closeOnClick: true,
                      pauseOnHover: true,
                      draggable: false,
                      progress: undefined,
                      theme: "colored",
            
                    });
      navigate('/dashboard');
      }

      }else{
          toast.error(response.data.message , {
                      position: "top-right",
                      autoClose: 4000,
                      hideProgressBar: false,
                      closeOnClick: true,
                      pauseOnHover: true,
                      draggable: false,
                      progress: undefined,
                      theme: "colored",
            
                    });
      }
      
      
    } catch (error: any) {
      console.log('error');
      const message =
        error.response?.data?.message || 'Login failed. Please try again.';
         toast.error(message , {
                      position: "top-right",
                      autoClose: 4000,
                      hideProgressBar: false,
                      closeOnClick: true,
                      pauseOnHover: true,
                      draggable: false,
                      progress: undefined,
                      theme: "colored",
            
                    });
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
}) => {
  try {
    const response = await axios.post('/api/User/userForceLogout', {
      emailVal,
      password,
      forceLogout: '1',
    });

    if (response.data.response === 'success') {
      setMultiLogin(response.data.multiLogin || 0);

      // alert('You have been successfully logged out from all other devices.');
       toast.error('You have been successfully logged out from all other devices.' , {
                      position: "top-right",
                      autoClose: 4000,
                      hideProgressBar: false,
                      closeOnClick: true,
                      pauseOnHover: true,
                      draggable: false,
                      progress: undefined,
                      theme: "colored",
            
                    });

    } else {
      // alert(response.data.message || 'Force logout failed.');
        toast.error(response.data.message || 'Force logout failed.' , {
                      position: "top-right",
                      autoClose: 4000,
                      hideProgressBar: false,
                      closeOnClick: true,
                      pauseOnHover: true,
                      draggable: false,
                      progress: undefined,
                      theme: "colored",
            
                    });

    }
  } catch (error: any) {
    console.error('Force logout failed:', error);
    // alert('An error occurred while trying to force logout.');
       toast.error('An error occurred while trying to force logout.' , {
                      position: "top-right",
                      autoClose: 4000,
                      hideProgressBar: false,
                      closeOnClick: true,
                      pauseOnHover: true,
                      draggable: false,
                      progress: undefined,
                      theme: "colored",
            
                    });
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
                      {/* <p className="text-muted w-lg-75 mx-auto">
                        Let's get you signed in. Enter your email and password to continue.
                      </p> */}
                    </div>

                    <Form onSubmit={handleSubmit(onSubmit)}>
                      {apiError && <Alert variant="danger">{apiError}</Alert>}

                      <div className="mb-3">
                        <FormLabel htmlFor="userEmail">Email address <span className="text-danger">*</span></FormLabel>
                        <div className="input-group">
                          <span className="input-group-text bg-light">
                            <TbMail className="text-muted fs-xl" />
                          </span>
                          <FormControl
                            type="email"
                            id="userEmail"
                            placeholder="you@example.com"
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
                        {errors.email && <small className="text-danger">
                          {/* {errors.email.message} */}
                          </small>}
                      </div>

                      <div className="mb-3">
                        <FormLabel htmlFor="userPassword">Password <span className="text-danger">*</span></FormLabel>
                        <div className="input-group">
                          <span className="input-group-text bg-light">
                            <TbLockPassword className="text-muted fs-xl" />
                          </span>
                          <FormControl
                            type="password"
                            id="userPassword"
                            placeholder="••••••••"
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
                        {errors.password && <small className="text-danger">
                          {/* {errors.password.message} */}
                          </small>}
                      </div>

                      <div className="d-flex justify-content-between align-items-center mb-3">
                        <div className="form-check">
                          <input
                            className="form-check-input form-check-input-light fs-14"
                            type="checkbox"
                            id="rememberMe"
                            {...register('remember')}
                          />
                          <label className="form-check-label" htmlFor="rememberMe">Keep me signed in</label>
                        </div>

                        <Link to="/auth-2/reset-password" className="text-decoration-underline text-muted">
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
                              handleForceLogout({ emailVal: formEmail, password: formPassword })
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
                      © 2025 - {currentYear} Leads Hub — by <span className="fw-semibold">TRCRM</span>
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
