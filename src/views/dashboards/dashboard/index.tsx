import { useState ,useEffect } from 'react';
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
} from 'react-bootstrap';

import PageBreadcrumb from '@/components/PageBreadcrumb';
import OrdersStatics from './components/OrdersStatics';
import type { leadDashBord } from '@/services/dashboardservice.ts';
import { dashboardLeadReport } from '@/services/dashboardservice.ts';
import CountUpClient from '@/components/CountUpClient';
import { DonutChart } from '@/views/dashboards/dashboard/charts.tsx';
import { getUserInfo } from '@/utils/auth';

const Page = () => {
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

  const [dashboard, setDashboard] = useState<DataCard[]>([]);
  const [selectedYear, setSelectedYear] = useState(currentYear);
  const [selectedMonth, setSelectedMonth] = useState(new Date().getMonth() + 1);
  const [error, setError] = useState('');
  const user = getUserInfo();
  

  const fetchDashboard = async () => {
    const payload: leadDashBord = {
      yearVal: selectedYear,
      monthVal: selectedMonth,
      userIdVal: user.id,
      tokenVal: user.access_token,
      typeVal: user.type,
    };

  try {
      const response = await dashboardLeadReport(payload);

      const res = response.data[0];

      const stats: DataCard[] = [
        {
          title: 'Total Leads',
          badgeColor: 'warning',
          badgeText: '',
          value: res.lead_count,
          metric: 'Monthly Total Leads',
          targetValue: Number(res.lead_count) || 0,
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
          metric: 'Walk-in / Direct',
          targetValue: Number(res.direct_lead_count) || 0,
        },
        {
          title: 'Total Followups',
          badgeColor: 'primary',
          badgeText: '',
          value: res.total_followups,
          metric: 'This Month',
          targetValue: Number(res.total_followups) || 0,
        },
        {
          title: 'Today\'s Followups',
          badgeColor: 'info',
          badgeText: '',
          value: res.today_followups,
          metric: 'Scheduled Today',
          targetValue: Number(res.today_followups) || 0,
        },
      ];

      setDashboard(stats);
      setError('');
    } catch (error) {
      console.error('Failed to fetch leads:', error);
      setError('Failed to fetch leads. Please try again.');
    }
  };
  useEffect(() => {
    fetchDashboard();
  }, []);

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

 

  return (
    <Container fluid>
      <PageBreadcrumb title="Dashboard" />

      <Form className="mb-4">
        <Row className="align-items-end">
          <Col md={2}>
            <Form.Label>Year</Form.Label>
            <Form.Select
              value={selectedYear}
              onChange={(e) => setSelectedYear(Number(e.target.value))}
            >
              {years.map((year) => (
                <option key={year} value={year}>
                  {year}
                </option>
              ))}
            </Form.Select>
          </Col>

          <Col md={2}>
            <Form.Label>Month</Form.Label>
            <Form.Select
              value={selectedMonth}
              onChange={(e) => setSelectedMonth(Number(e.target.value))}
            >
              {months.map((month) => (
                <option key={month.value} value={month.value}>
                  {month.name}
                </option>
              ))}
            </Form.Select>
          </Col>

          <Col md={2}>
            <Button variant="primary" onClick={fetchDashboard}>
              Search
            </Button>
          </Col>
        </Row>
      </Form>

      {error && <Alert variant="danger">{error}</Alert>}

          {dashboard.length === 0 ? (
        <p>No data loaded. Please select year and month.</p>
      ) : (
        <Row xs={1} md={2} xxl={4}>
          {dashboard.map((item, index) => (
            <Col key={index}>
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
    </Container>
  );
};

export default Page;
