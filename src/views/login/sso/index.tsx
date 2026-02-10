// src/views/login/sso/index.tsx
import React, { useEffect } from 'react';
import { useNavigate } from 'react-router-dom';
import { SsoLogin } from '@/services/ApiServices';
import { toast } from 'react-toastify';
import Cookies from 'js-cookie';
import { Spinner } from 'react-bootstrap';
interface UserDetails {
  access_token: string;
  full_name: string;
  [key: string]: any;
}
const SsoLoginPage: React.FC = () => {
  const navigate = useNavigate();
  useEffect(() => {
    const params = new URLSearchParams(window.location.search);
    const username = params.get('username');
    if (!username) {
      navigate('/login');
      return;
    }
    (async () => {
      try {
        const payload = { username };
        const response = await SsoLogin(payload);
        const user: UserDetails | undefined = response.data?.[0];
        if (!user) throw new Error("Invalid SSO response");
        Cookies.set('accessToken', user.access_token, {
          expires: 7,
          secure: true,
          sameSite: 'Strict',
        });
        Cookies.set('LeadHubLoginAccess', JSON.stringify(user), {
          expires: 7,
          secure: true,
          sameSite: 'Strict',
        });
        toast.dismiss();
        toast.success(
          <div>
            Hi, {user.full_name} <br />
            Welcome to TRCRM Lead Hub
          </div>
        );
        navigate('/dashboard');
      } catch (error: any) {
        console.error('SSO Login Error:', error);
        toast.dismiss();
        toast.error(
          <div>
            SSO Login Error <br />
            {'Something went wrong'}
          </div>
        );
        navigate('/login');
      }
    })();
  }, [navigate]);
  return (
    <div
      className="d-flex flex-column align-items-center justify-content-center"
      style={{ height: '100vh' }}
    >
      <Spinner animation="border" role="status" />
      <p className="mt-3">Logging you in securely...</p>
    </div>
  );
};
export default SsoLoginPage;