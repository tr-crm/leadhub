import { Badge, Card, CardBody, CardHeader, CardTitle, Col, Row } from 'react-bootstrap'

import CountUpClient from '@/components/CountUpClient'
import {DonutChart} from "@/views/dashboards/dashboard/charts.tsx";
// import { cardData } from '../data'

type CardData = {
  title: string;
  badgeColor: string;
  badgeText: string;
  value: string;
  metric: string;
  targetValue: number;
  prefix?: string
  suffix?: string
}


export const cardData: CardData[] = [
  {
    title: 'Total Leads',
    badgeColor: 'warning',
    badgeText: '',
    value: '0',
    metric: 'Monthly Total Leads',
    targetValue: 9
  },
  {
    title: 'Total Walkins',
    badgeColor: 'primary',
    badgeText: 'Monthly',
    value: '100',
    metric: 'Monthly Total Orders',
    targetValue: 100
  },
  {
    title: 'Total Today Leads',
    badgeColor: 'info',
    badgeText: 'Monthly',
    value: '1000',
    metric: 'Monthly New Customers',
    targetValue: 50895
  },
  {
    title: 'Total Today Walkins',
    badgeColor: 'warning',
    badgeText: 'Monthly',
    value: '$0K',
    metric: 'Monthly Revenue',
    targetValue: 50.33,
    prefix: '$',
    suffix: 'K'
  }
];

const EcomStats = () => {
  return (
    <Row xs={1} md={2} xxl={4}>
      {cardData.map((item, index) => (
        <Col key={index}>
          <Card>
            <CardHeader className="d-flex border-dashed justify-content-between align-items-center">
              <CardTitle as="h5">{item.title}</CardTitle>
              <Badge bg={item.badgeColor} className={`bg-opacity-10 text-${item.badgeColor}`}>{item.badgeText}</Badge>
            </CardHeader>
            <CardBody>
              <div className="d-flex justify-content-between align-items-center text-nowrap">

                <div className="flex-grow-1">
                  <DonutChart/>
                </div>

                <div className="text-end">
                  <h3 className="mb-2 fw-normal">
                    {item?.prefix}<CountUpClient duration={2} end={item.targetValue} />{item?.suffix}
                  </h3>
                  <p className="mb-0 text-muted">
                    <span>{item.metric}</span>
                  </p>
                </div>
              </div>
            </CardBody>
          </Card>
        </Col>
      ))}
    </Row>
  )
}

export default EcomStats