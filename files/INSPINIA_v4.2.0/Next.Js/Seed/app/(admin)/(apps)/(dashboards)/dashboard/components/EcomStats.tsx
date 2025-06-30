import dynamic from 'next/dynamic'
import { Badge, Card, CardBody, CardHeader, CardTitle, Col, Row } from 'react-bootstrap'

import CountUpClient from '@/components/CountUpClient'
import { cardData } from '../data'

const DonutChart = dynamic(() => import('../charts').then((mod) => mod.DonutChart));

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
                  <DonutChart />
                </div>

                <div className="text-end">
                  <h3 className="mb-2 fw-normal">
                    {item?.prefix}<CountUpClient duration={1} end={item.targetValue} />{item?.suffix}
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