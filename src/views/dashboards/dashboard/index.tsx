import { useState, useEffect, useMemo, useRef } from 'react';
import { useNavigate } from 'react-router-dom';
import DOMPurify from 'dompurify';
import Cookies from 'js-cookie';
import {
  Container,
  Button,
  Form,
  Row,
  Col,
  Alert,
  Badge,
  Card,
  CardBody,
  CardHeader,
  CardTitle,
  Modal
} from 'react-bootstrap';
import PageBreadcrumb from '@/components/PageBreadcrumb';
import OrdersStatics from './components/OrdersStatics';
import type { leadDashBord } from '@/services/dashboardservice.ts';
import { dashboardLeadReport } from '@/services/dashboardservice.ts';
import {UpdateFirstloginSeenComment } from '@/services/userservice.ts';
import CountUpClient from '@/components/CountUpClient';
import LogoutOverlay from '@/components/LogoutOverlay';
import { isAuthenticated, getUserInfo, logout } from '@/utils/auth';
import { DonutChart } from '@/views/dashboards/dashboard/charts.tsx';

import { toast } from 'react-toastify';

type DataCard = {
  title: string;
  badgeColor: string;
  badgeText: string;
  value: string;
  metric: string;
  targetValue: number;
  prefix?: string;
  suffix?: string;
};

const Page = () => {
  const [showLogoutLoader, setShowLogoutLoader] = useState<boolean>(false);
  const [showFirstLoginModal, setShowFirstLoginModal] = useState(false);
  const [dashboard, setDashboard] = useState<DataCard[]>([]);
  const [selectedYear, setSelectedYear] = useState(new Date().getFullYear());
  const [selectedMonth, setSelectedMonth] = useState(new Date().getMonth() + 1);
  const [error, setError] = useState('');
   
  const [loading, setLoading] = useState(false);
  
  const navigate = useNavigate();

  // Memoize user so it doesn't cause continuous re-renders/useEffect triggers
  const user = useMemo(() => (isAuthenticated() ? getUserInfo() : null), []);
const user_first_comment = user?.first_comment ?? '';

  const sanitizedHTML = DOMPurify.sanitize(user_first_comment);

  // Ref to prevent double fetch in Strict Mode or repeated effect calls
  const didFetchRef = useRef(false);

  useEffect(() => {
    if (!user) {
      setShowLogoutLoader(true);
    }
  }, [user]);
  

  const currentYear = new Date().getFullYear();
  const years = Array.from({ length: 10 }, (_, i) => currentYear - i);
  const months = [
    { name: 'January', value: 1 },
    { name: 'February', value: 2 },
    { name: 'March', value: 3 },
    { name: 'April', value: 4 },
    { name: 'May', value: 5 },
    { name: 'June', value: 6 },
    { name: 'July', value: 7 },
    { name: 'August', value: 8 },
    { name: 'September', value: 9 },
    { name: 'October', value: 10 },
    { name: 'November', value: 11 },
    { name: 'December', value: 12 },
  ];

  const fetchDashboard = async () => {
    if (!user || loading) return;

    setLoading(true);
    const payload: leadDashBord = {
      yearVal: selectedYear,
      monthVal: selectedMonth,
      userIdVal: user.id,
      tokenVal: user.access_token,
      typeVal: user.type,
    };

    try {
      const response = await dashboardLeadReport(payload);
      // Depending on your actual response shape, adjust accordingly
      if (response.response === 'login_error') {
          toast.dismiss();
        toast.error(response.message);
        setShowLogoutLoader(true);
        return;
      } else if (response.response === 'error') {
          toast.dismiss();
        toast.error(response.message);
      } else if (response.response === 'success') {
        // toast.success(response.message);
        const res = response.data[0];

        const stats: DataCard[] = [
          {
            title: 'Total Leads',
            badgeColor: 'warning',
            badgeText: '',
            value: res.total_lead_count,
            metric: 'Monthly Total Leads',
            targetValue: Number(res.total_lead_count) || 0,
          },
          {
            title: 'Total Walkins',
            badgeColor: 'primary',
            badgeText: '',
            value: res.walkin_count,
            metric: 'Monthly Total Walk-ins',
            targetValue: Number(res.walkin_count) || 0,
          },
          {
            title: 'Touched Leads',
            badgeColor: 'success',
            badgeText: '',
            value: res.touched_count,
            metric: 'Touched Leads',
            targetValue: Number(res.touched_count) || 0,
          },
          {
            title: 'Not Touched Leads',
            badgeColor: 'danger',
            badgeText: '',
            value: res.not_touched_count,
            metric: 'Untouched Leads',
            targetValue: Number(res.not_touched_count) || 0,
          },
          {
            title: 'Direct Leads',
            badgeColor: 'dark',
            badgeText: '',
            value: res.direct_lead_count,
            metric: 'Direct',
            targetValue: Number(res.direct_lead_count) || 0,
          },
          // {
          //   title: 'Webhook Lead Count',
          //   badgeColor: 'primary',
          //   badgeText: '',
          //   value: res.webhook_lead_count,
          //   metric: 'Webhook Leads',
          //   targetValue: Number(res.webhook_lead_count) || 0,
          // },
          {
            title: 'Website Lead Count',
            badgeColor: 'info',
            badgeText: '',
            value: res.website_lead_count,
            metric: 'Website Leads',
            targetValue: Number(res.website_lead_count) || 0,
          },
          {
            title: 'FaceBook Lead Count',
            badgeColor: 'primary',
            badgeText: '',
            value: res.facebook_lead_count,
            metric: 'FaceBook Leads',
            targetValue: Number(res.facebook_lead_count) || 0,
          },
          {
            title: 'Google Ads Lead Count',
            badgeColor: 'primary',
            badgeText: '',
            value: res.google_ads_lead_count,
            metric: 'Google Ads Leads',
            targetValue: Number(res.google_ads_lead_count) || 0,
          },
        ];

        setDashboard(stats);
        setError('');
      }
    } catch (error: any) {
      if (error?.response?.data?.response === 'login_error') {
          toast.dismiss();
        toast.error(error?.response?.data?.message || 'Login failed. Redirecting...');
        setShowLogoutLoader(true);
        return;
      } else {
        setError('Failed to fetch leads. Please try again.');
          toast.dismiss();
        toast.error('Failed to fetch leads. Please try again.');
      }
    } finally {
      setLoading(false);
    }
  };

  useEffect(() => {
    if (!user) return;
 if (user.first_login === '0') {
    setShowFirstLoginModal(true);
  }
    // Only fetch if we haven't already fetched for current params
    if (!didFetchRef.current) {
      fetchDashboard();
      didFetchRef.current = true;
    }
  }, [user, selectedYear, selectedMonth]);
    const handleClick = async () => {
      setLoading(true);
      setError('');
  
      try {
        
         const payload = {
                
                createdByVal: user.id,
                userIdVal: user.id,
                tokenVal: user.access_token,
                regionVal: user.region,
                idVal:user.id,
              };
       
            const response = await UpdateFirstloginSeenComment(payload);
       
  
      
        if (response.response === 'login_error') {
          toast.dismiss();
          toast.error(response.message);
          // navigate('/login');
          setShowLogoutLoader(true);
        } else if (response.response === 'error') {
          toast.dismiss();
          toast.error(response.message);
        } else if (response.response === 'success') {
          toast.dismiss();
          toast.success(response.message);
         
           setShowFirstLoginModal(false)
           user.first_login = 1;

       const cookieUser = Cookies.get('LeadHubLoginAccess');
      if (cookieUser) {
        try {
          const parsedUser = JSON.parse(cookieUser);
          parsedUser.first_login = 1;
          Cookies.set('LeadHubLoginAccess', JSON.stringify(parsedUser));
        } catch (err) {
          console.error('Failed to parse cookie:', err);
        }
      }
          // Navigate on success
        navigate("/dashboard");
      
        }
      } catch (err) {
        console.error(err);
        setError("Something went wrong.");
         toast.error("Something went wrong.");
      } finally {
        setLoading(false);
      }
    };

  return (
    <Container fluid>
      <PageBreadcrumb title="Dashboard" />

      {showLogoutLoader && <LogoutOverlay
  duration={5} // 10 seconds countdown
  onComplete={async () => {
    await logout(); // your logout function
  }}
/>
}

      {!user && !showLogoutLoader && (
        <Alert variant="warning" className="text-center">
          Please log in to view the dashboard.
        </Alert>
      )}

      {user && (
        <>
          <Form className="mb-4">
            <Row className="align-items-end justify-content-end">
              <Col md={2}>
                <Form.Select
                  value={selectedYear}
                  onChange={(e) => {
                    setSelectedYear(Number(e.target.value));
                    didFetchRef.current = false; // Reset fetch flag on filter change
                  }}
                  disabled={loading}
                >
                  {years.map((year) => (
                    <option key={year} value={year}>
                      {year}
                    </option>
                  ))}
                </Form.Select>
              </Col>

              <Col md={2}>
                <Form.Select
                  value={selectedMonth}
                  onChange={(e) => {
                    setSelectedMonth(Number(e.target.value));
                    didFetchRef.current = false; // Reset fetch flag on filter change
                  }}
                  disabled={loading}
                >
                  {months.map((month) => (
                    <option key={month.value} value={month.value}>
                      {month.name}
                    </option>
                  ))}
                </Form.Select>
              </Col>

              <Col md={2}>
                <Button
                  variant="primary"
                  onClick={() => {
                    didFetchRef.current = false;
                    fetchDashboard();
                  }}
                  disabled={loading}
                >
                  {loading ? 'Loading...' : 'Search'}
                </Button>
              </Col>
            </Row>
          </Form>

          {error && <Alert variant="danger">{error}</Alert>}

          {dashboard.length === 0 ? (
            <p>No data found for selected period.</p>
          ) : (
            <Row xs={1} md={2} xxl={4}>
              {dashboard.map((item) => (
                <Col key={item.title}>
                  <Card>
                    <CardHeader className="d-flex border-dashed justify-content-between align-items-center">
                      <CardTitle as="h5">{item.title}</CardTitle>
                      <Badge
                        bg={item.badgeColor}
                        className={`bg-opacity-10 text-${item.badgeColor}`}
                      >
                        {item.badgeText}
                      </Badge>
                    </CardHeader>
                    <CardBody>
                      <div className="d-flex justify-content-between align-items-center text-nowrap">
                        <div className="flex-grow-1">
                          <DonutChart />
                        </div>
                        <div className="text-end">
                          <h3 className="mb-2 fw-normal">
                            {item.prefix}
                            <CountUpClient duration={2} end={item.targetValue} />
                            {item.suffix}
                          </h3>
                          <p className="mb-0 text-muted">{item.metric}</p>
                        </div>
                      </div>
                    </CardBody>
                  </Card>
                </Col>
              ))}
            </Row>
          )}

          <OrdersStatics />
        </>
      )}
                     <Modal show={showFirstLoginModal} onHide={() => setShowFirstLoginModal(false)}  backdrop="static"  // Prevent close on backdrop click
  keyboard={false}  centered>
                 

        <Modal.Header >
          <Modal.Title>Welcome to Lead Hub</Modal.Title>
        </Modal.Header>
        <Modal.Body>
          {/* <p>{user_first_comment}</p> */}
           <div dangerouslySetInnerHTML={{ __html: sanitizedHTML }} />
        </Modal.Body>
        <Modal.Footer>
          {/* <Button variant="primary" onClick={() => navigate('/dashboard')}>
            Continue to Dashboard
          </Button> */}
          <Button  variant="primary" onClick={handleClick} disabled={loading}> 
        {loading ? "Submitting..." : "Continue to Dashboard"}
      </Button>
        </Modal.Footer>
      </Modal>
      
    </Container>
  );
};

export default Page;