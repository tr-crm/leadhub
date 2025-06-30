import Link from 'next/link'
import { Button, Card, CardBody, CardFooter, CardHeader, CardTitle, Col, Dropdown, DropdownItem, DropdownMenu, DropdownToggle, Image, Table } from 'react-bootstrap'
import { TbCircleFilled, TbDotsVertical, TbFileExport, TbPlus } from 'react-icons/tb'

import CardPagination from '@/components/cards/CardPagination'
import { orders } from '../data'

const RecentOrders = () => {
  return (
    <Col xxl={6}>
    <Card>
      <CardHeader className="justify-content-between align-items-center border-dashed">
        <CardTitle as="h4" className="mb-0">Recent Orders</CardTitle>
        <div className="d-flex gap-2">
          <Button href="javascript:void(0);" variant="soft-secondary" size="sm">
            <TbPlus className="me-1" /> Add Order
          </Button>
          <Button href="javascript:void(0);" variant="primary" size="sm">
            <TbFileExport className="me-1" /> Export CSV
          </Button>
        </div>
      </CardHeader>
      <CardBody className="p-0">
        <div className="table-responsive">
          <Table className="table-centered table-custom table-sm table-nowrap table-hover mb-0">
            <tbody>
              {orders.map((order) => (
                <tr key={order.id}>
                  <td>
                    <div className="d-flex align-items-center">
                      <Image src={order.userImage.src} className="avatar-sm rounded-circle me-2" alt={order.userName} />
                      <div>
                        <h5 className="fs-base my-1">
                          <a href="ecommerce-order-details.html" className="text-body">
                            #{order.id}
                          </a>
                        </h5>
                        <span className="text-muted fs-xs">{order.userName}</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span className="text-muted fs-xs">Product</span>
                    <h5 className="fs-base mt-1 fw-normal">{order.product}</h5>
                  </td>
                  <td>
                    <span className="text-muted fs-xs">Date</span>
                    <h5 className="fs-base mt-1 fw-normal">{order.date}</h5>
                  </td>
                  <td>
                    <span className="text-muted fs-xs">Amount</span>
                    <h5 className="fs-base mt-1 fw-normal">{order.amount}</h5>
                  </td>
                  <td>
                    <span className="text-muted fs-xs d-flex align-items-center">Status</span>
                    <h5 className="fs-base mt-1 fw-normal">
                      <TbCircleFilled className={`fs-xs text-${order.statusVariant}`} /> {order.status}
                    </h5>
                  </td>
                  <td style={{ width: 30 }}>
                    <Dropdown>
                      <DropdownToggle as={Link} href="" className="dropdown-toggle text-muted drop-arrow-none card-drop p-0">
                        <TbDotsVertical className="fs-lg" />
                      </DropdownToggle>
                      <DropdownMenu className="dropdown-menu-end">
                        <DropdownItem href="#">View Details</DropdownItem>
                        <DropdownItem href="#">Cancel Order</DropdownItem>
                      </DropdownMenu>
                    </Dropdown>
                  </td>
                </tr>
              ))}
            </tbody>
          </Table>
        </div>
      </CardBody>
      <CardFooter className="border-0">

        <CardPagination totalItems={5} itemsPerPage={5} currentPage={1} itemsName="orders" />

      </CardFooter>
    </Card>
  </Col>
  )
}

export default RecentOrders