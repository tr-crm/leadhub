import dynamic from 'next/dynamic'
import Link from 'next/link'
import { Button, Card, CardBody, CardHeader, CardTitle, Col, Nav, NavItem, NavLink, ProgressBar, Row } from 'react-bootstrap'
import { TbDownload, TbHome, TbSend2, TbSettings, TbUserCircle } from 'react-icons/tb'

import { ordersStatsData } from '../data'

const OrdersChart = dynamic(() => import('../charts').then((mod) => mod.OrdersChart))

const OrdersStatics = () => {
  return (
    <Row>
      <Col xs={12}>
        <Card>
          <CardHeader className="border-dashed card-tabs d-flex align-items-center">
            <div className="flex-grow-1">
              <CardTitle as="h4">Orders Statics</CardTitle>
            </div>
            <Nav variant="tabs" defaultActiveKey="monthly-ct" className="card-header-tabs nav-bordered">
              <NavItem>
                <NavLink eventKey="today-ct">
                  <TbHome className="d-md-none d-block" />
                  <span className="d-none d-md-block">Today</span>
                </NavLink>
              </NavItem>
              <NavItem>
                <NavLink eventKey="monthly-ct">
                  <TbUserCircle className="d-md-none d-block" />
                  <span className="d-none d-md-block">Monthly</span>
                </NavLink>
              </NavItem>
              <NavItem>
                <NavLink eventKey="annual-ct">
                  <TbSettings className="d-md-none d-block" />
                  <span className="d-none d-md-block">Annual</span>
                </NavLink>
              </NavItem>
            </Nav>
          </CardHeader>
          <CardBody className="p-0">
            <Row className="g-0">
              <Col xxl={8} className="border-end border-dashed">

                <OrdersChart />

              </Col>
              <Col xxl={4}>
                <div className="p-3 bg-light-subtle border-bottom border-dashed">
                  <Row>
                    <Col>
                      <h4 className="fs-sm mb-1">Would you like the full report?</h4>
                      <small className="text-muted fs-xs mb-0">
                        All 120 orders have been successfully delivered
                      </small>
                    </Col>
                    <Col xs="auto" className="align-self-center">
                      <Button
                        variant="default"
                        size="sm"
                        className="rounded-circle btn-icon"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="Download"
                      >
                        <TbDownload className="fs-xl" />
                      </Button>
                    </Col>
                  </Row>
                </div>
                <Row xs={1} md={2} xxl={2} className="g-1 p-1">

                  {ordersStatsData.map(({ value, valuePrefix, valueSuffix, percentage, percentageIcon, progress, title }, index) => (
                    <Col key={index}>
                      <Card className="rounded-0 border shadow-none border-dashed mb-0">
                        <CardBody>
                          <div className="mb-3 d-flex justify-content-between align-items-center">
                            <h5 className="fs-xl mb-0">
                              {valuePrefix && valuePrefix}
                              {value.toLocaleString()}
                              {valueSuffix && <small> {valueSuffix}</small>}
                            </h5>
                            <span>
                              {percentage}% {percentageIcon}
                            </span>
                          </div>
                          <p className="text-muted mb-2">
                            <span>{title}</span>
                          </p>
                          <ProgressBar now={progress} variant="secondary" style={{ height: '0.25rem' }}  aria-label={title} />
                        </CardBody>
                      </Card>
                    </Col>
                  ))}

                </Row>
                <div className="text-center my-3">
                  <Link href="/chat" className="link-reset text-decoration-underline fw-semibold link-offset-3">
                    View all Reports <TbSend2 size={13} />
                  </Link>
                </div>
              </Col>
            </Row>
          </CardBody>
        </Card>
      </Col>
    </Row>
  )
}

export default OrdersStatics