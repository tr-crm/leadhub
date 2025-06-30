import dynamic from 'next/dynamic'
import { Col, Image, Row, Table } from 'react-bootstrap'
import { TbCircleFilled, TbSend2 } from 'react-icons/tb'

import CardWithActions from '@/components/cards/CardWithActions'
import { transactions } from '../data'

const WorldMap = dynamic(() => import('../charts').then((mod) => mod.WorldMap))

const TransactionsWorldwide = () => {
  return (
    <Row>
      <Col xs={12}>
        <CardWithActions title='Transactions Worldwide' isCloseable isCollapsible isRefreshable>
          <Row className="align-items-center">
            <Col xl={6}>
              <div className="table-responsive">
                <Table className="table-custom table-nowrap table-hover table-centered mb-0">
                  <thead className="bg-light align-middle bg-opacity-25 thead-sm">
                    <tr className="text-uppercase fs-xxs">
                      <th className="text-muted">Tran. No.</th>
                      <th className="text-muted">Order</th>
                      <th className="text-muted">Date</th>
                      <th className="text-muted">Amount</th>
                      <th className="text-muted">Status</th>
                      <th className="text-muted">Payment Method</th>
                    </tr>
                  </thead>
                  <tbody>

                    {transactions.map((transaction) => (
                      <tr key={transaction.id}>
                        <td><a href="#!" className="link-reset fw-semibold">{transaction.id}</a></td>
                        <td>{transaction.order}</td>
                        <td>{transaction.date} <small className="text-muted">{transaction.time}</small></td>
                        <td className="fw-semibold">{transaction.amount}</td>
                        <td>
                          <span className={`badge fs-xxs flex align-items-center gap-1 badge-soft-${transaction.statusVariant}`}>
                            <TbCircleFilled size={7} /> {transaction.status}
                          </span>
                        </td>
                        <td>
                          <Image src={transaction.paymentMethod.src} className="me-2" height={28} alt={transaction.paymentMethod} /> xxxx {transaction.lastFour}
                        </td>
                      </tr>
                    ))}

                  </tbody>
                </Table>
              </div>
              <div className="text-center mt-3">
                <a href="#!" className="link-reset text-decoration-underline fw-semibold link-offset-3">
                  View All Transactions <TbSend2 size={13} />
                </a>
              </div>
            </Col>
            <Col xl={6}>

              <WorldMap />

            </Col>
          </Row>
        </CardWithActions>
      </Col>
    </Row>
  )
}

export default TransactionsWorldwide