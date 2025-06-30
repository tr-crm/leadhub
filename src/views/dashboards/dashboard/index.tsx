import { Container } from 'react-bootstrap'

import PageBreadcrumb from '@/components/PageBreadcrumb'
import EcomStats from './components/EcomStats'
import OrdersStatics from './components/OrdersStatics'
// import ProductInventory from './components/ProductInventory'
// import RecentOrders from './components/RecentOrders'
// import TransactionsWorldwide from './components/TransactionsWorldwide'
// import { getUserInfo } from '@/utils/auth';

const Page = () => {
// const user = getUserInfo();
// if (user) {
//   console.log(user); // Example
// }
  return (
    <Container fluid>

      <PageBreadcrumb title='Dashboard' />

      <EcomStats />

      <OrdersStatics />


    </Container>
  )
}

export default Page