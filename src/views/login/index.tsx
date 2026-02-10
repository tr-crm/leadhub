import { useState } from 'react';
import { useForm } from 'react-hook-form';
import { useNavigate } from 'react-router-dom';
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
import {  TbMail, TbPhone } from 'react-icons/tb';
import { toast } from 'react-toastify';


interface LoginFormInputs {
  email: string;
  phone?: string;
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
  const [loginMode, setLoginMode] = useState<'email' | 'phone'>('email');
  const [otpSent, setOtpSent] = useState(false);
  const [otp, setOtp] = useState('');
  const [formPhone, setFormPhone] = useState('');

  const toggleLoginMode = () => {
    setLoginMode(prev => (prev === 'email' ? 'phone' : 'email'));
    setOtpSent(false);
    setOtp('');
  };

  const [loginFlag, setLoginFlag] = useState<'email' | 'phone'>('email');

  /** ✅ Step 1: Handle Email Login **/
  const onSubmit = async (data: LoginFormInputs): Promise<void> => {
    if (loginMode === 'phone') {
      // For phone login, don't proceed here; use OTP flow instead
      return;
    }
    setFormEmail(data.email);
    setFormPassword(data.password);
    setFormPhone('');
    setLoginFlag('email');


    setLoading(true);
    setApiError(null);
    setFormEmail(data.email);
    setFormPassword(data.password);

    try {
      const response = await axios.post<LoginResponse>('/api/User/userLogin', {
        email: data.email,
        password: data.password,
        loginFlagVal: loginFlag,
      });
     
         
        if (response.data.multiLogin === 1000) {
        setMultiLogin(1000);
        console.log('Login Response:', response.data.multiLogin);
        toast.error('You are logged in on another device. Please force logout.');
      } else if (response.data.response === 'success') {
        handleLoginSuccess(response.data.data[0]);
      } else {
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

  /** ✅ Step 2: Request OTP **/
  const handleSendOtp = async (phone: string) => {
    setLoading(true);
    setApiError(null);
    setFormPhone(phone);
    setFormEmail('');
    setLoginFlag('phone');
    
    try {
      const response = await axios.post('/api/User/verifyPhone', { phoneNumberVal: phone,  loginFlagVal: loginFlag });

        if (response.data.multiLogin === 1000) {
         
           setMultiLogin(1000); // show Force Logout button
        } else if (response.data.response === 'success') {
           setOtpSent(true);
          toast.success(response.data.message);
        } else {
          toast.error(response.data.message || 'Login failed.');
        }
    } catch (error) {
      toast.error('Error sending OTP. Please try again.');
    } finally {
      setLoading(false);
    }
  };

  /** ✅ Step 3: Verify OTP **/
  const handleVerifyOtp = async (phone: string, otpCode: string) => {
    setLoading(true);
    setLoginFlag('phone');
    try {
      const response = await axios.post<LoginResponse>('/api/User/userLoginWithPhoneOtp', {
        phoneNumberVal: phone,
        otpVal: otpCode,
        loginFlagVal: loginFlag,
      });

      if (response.data.response === 'success') {
        handleLoginSuccess(response.data.data[0]);
      } else {
        toast.error(response.data.message || 'OTP verification failed.');
      }
    } catch (error) {
      // toast.error('An error occurred while verifying OTP.');
    } finally {
      setLoading(false);
    }
  };

  /** ✅ Common: Handle Login Success **/
  const handleLoginSuccess = (user: UserDetails) => {
    Cookies.set('accessToken', user.access_token, { expires: 7 });
    Cookies.set('LeadHubLoginAccess', JSON.stringify(user), { expires: 7 });

    toast.dismiss();
    toast.success(
      <div>
        Hi, {user.full_name} <br /> Welcome to TRCRM Lead Hub
      </div>
    );

    navigate('/dashboard');
  };

  const handleForceLogout = async (): Promise<void> => {
  try {
    const payload: any = { password: formPassword, forceLogout: '1' ,loginFlagVal: loginFlag};
    if (formEmail) payload.emailVal = formEmail;
    if (formPhone) payload.emailVal = formPhone;

    const response = await axios.post<LoginResponse>('/api/User/userForceLogout', payload);

    if (response.data.response === 'success') {
      setMultiLogin(0);
      toast.success(response.data.message);
      handleLoginSuccess(response.data.data[0]); // auto-login after force logout
    } else {
      toast.error(response.data.message || 'Force logout failed.');
    }
  } catch (error) {
    toast.error('An error occurred while trying to force logout.');
  }  finally {
      setLoading(false);
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

                    <div className="text-center mb-3">
                    <Button
                        variant="outline-primary"
                        size="sm"
                        onClick={toggleLoginMode}
                      >
                        Switch to {loginMode === 'email' ? 'Phone' : 'Email'} Login
                      </Button>
                    </div>

                   <Form onSubmit={handleSubmit(onSubmit)}>
                      {apiError && <Alert variant="danger">{apiError}</Alert>}

                      {loginMode === 'email' ? (
                        <>
                          {/* Email Field */}
                          <div className="mb-3">
                            <FormLabel>Email address</FormLabel>
                            <div className="input-group">
                              <span className="input-group-text bg-light">
                                <TbMail className="text-muted fs-xl" />
                              </span>
                              <FormControl
                                type="email"
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
                            {errors.email && (
                              <small className="text-danger">{errors.email.message}</small>
                            )}
                          </div>

                          {/* Password Field */}
                          <div className="mb-3">
                            <FormLabel>Password</FormLabel>
                            <FormControl
                              type="password"
                              placeholder="••••••••"
                              {...register('password', {
                                required: 'Password is required',
                              })}
                              isInvalid={!!errors.password}
                            />
                          </div>
                        </>
                      ) : (
                        <>
                          {/* Phone Field */}
                          <div className="mb-3">
                            <FormLabel>Phone Number</FormLabel>
                            <div className="input-group">
                              <span className="input-group-text bg-light">
                                <TbPhone className="text-muted fs-xl" />
                              </span>
                              <FormControl
                                type="tel"
                                placeholder="Enter phone number"
                                {...register('phone', {
                                  required: 'Phone number is required',
                                  pattern: {
                                    value: /^[0-9]{10}$/,
                                    message: 'Phone number must be 10 digits',
                                  },
                                })}
                                isInvalid={!!errors.phone}
                              />
                            </div>
                            {errors.phone && (
                              <small className="text-danger">{errors.phone.message}</small>
                            )}
                          </div>

                          {/* OTP Section */}
                          {otpSent && (
                            <div className="mb-3">
                              <FormLabel>Enter OTP</FormLabel>
                              <FormControl
                                type="text"
                                placeholder="6-digit OTP"
                                value={otp}
                                onChange={(e) => setOtp(e.target.value)}
                              />
                            </div>
                          )}

                          {/* Action Buttons */}
                          {!otpSent ? (
                            <Button
                              variant="primary"
                              onClick={() => {
                                const phone = (document.querySelector(
                                  'input[name="phone"]'
                                ) as HTMLInputElement)?.value;
                                if (phone) handleSendOtp(phone);
                              }}
                              disabled={loading}
                            >
                              {loading ? 'Sending OTP...' : 'Send OTP'}
                            </Button>
                          ) : (
                            <Button
                              variant="success"
                              onClick={() => {
                                const phone = (document.querySelector(
                                  'input[name="phone"]'
                                ) as HTMLInputElement)?.value;
                                if (phone && otp) handleVerifyOtp(phone, otp);
                              }}
                              disabled={loading}
                            >
                              {loading ? 'Verifying...' : 'Verify & Login'}
                            </Button>
                          )}
                        </>
                      )}

                      {/* Email Mode Submit */}
                      {loginMode === 'email' && (
                        <Button
                          type="submit"
                          className="btn btn-primary fw-semibold py-2 mt-3"
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
{/* {multiLogin} */}
                      {multiLogin === 1000 && (
                        <div className="mt-3 text-center">
                          <Alert variant="warning" className="fw-semibold">
                            You are logged in on another device.
                          </Alert>
                          <Button
                            variant="danger"
                            className="mt-2 fw-semibold"
                            onClick={handleForceLogout}
                            disabled={loading}
                          >
                            {loading ? 'Processing...' : 'Force Logout & Login'}
                          </Button>
                        </div>
                      )}
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
