
import {  Card, CardBody, CardHeader, CardTitle, Col, Nav, NavItem, NavLink, Row } from 'react-bootstrap'
import {TbHome, TbSettings, TbUserCircle } from 'react-icons/tb'

import {OrdersChart} from "@/views/dashboards/dashboard/charts.tsx";


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
             
            </Row>
          </CardBody>
        </Card>
      </Col>
    </Row>
  )
}

export default OrdersStatics