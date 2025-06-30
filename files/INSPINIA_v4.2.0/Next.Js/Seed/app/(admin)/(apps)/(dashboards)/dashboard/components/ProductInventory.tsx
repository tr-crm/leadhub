import { Button, Card, CardBody, CardFooter, CardHeader, CardTitle, Col, Dropdown, DropdownItem, DropdownMenu, DropdownToggle, Image, Table } from 'react-bootstrap'
import { TbCircleFilled, TbDotsVertical, TbFileExport, TbPlus, TbStar, TbStarFilled, TbStarHalfFilled } from 'react-icons/tb'

import CardPagination from '@/components/cards/CardPagination'
import { products } from '../data'

const renderStars = (rating: number) => {
  const fullStars = Math.floor(rating)
  const halfStar = rating % 1 !== 0
  const emptyStars = 5 - fullStars - (halfStar ? 1 : 0)

  return (
    <span className="text-warning">
      {[...Array(fullStars)].map((_, i) => (
        <TbStarFilled key={`full-${i}`} />
      ))}
      {halfStar && <TbStarHalfFilled />}
      {[...Array(emptyStars)].map((_, i) => (
        <TbStar key={`empty-${i}`} />
      ))}
    </span>
  )
}

const ProductInventory = () => {
  return (
    <Col xxl={6}>
      <Card>
        <CardHeader className="justify-content-between align-items-center border-dashed">
          <CardTitle as="h4" className="mb-0">Product Inventory</CardTitle>
          <div className="d-flex gap-2">
            <Button href="ecommerce-add-product.html" variant="soft-secondary" size="sm">
              <TbPlus className="me-1" /> Add Product
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
                {products.map((product) => (
                  <tr key={product.id}>
                    <td>
                      <div className="d-flex align-items-center">
                        <Image src={product.image.src} className="avatar-sm rounded-circle me-2" alt={product.name} />
                        <div>
                          <h5 className="fs-base my-1">
                            <a href="ecommerce-product-details.html" className="text-body">
                              {product.name}
                            </a>
                          </h5>
                          <span className="text-muted fs-xs">{product.category}</span>
                        </div>
                      </div>
                    </td>
                    <td>
                      <span className="text-muted fs-xs">Stock</span>
                      <h5 className="fs-base mt-1 fw-normal">{product.stock}</h5>
                    </td>
                    <td>
                      <span className="text-muted fs-xs">Price</span>
                      <h5 className="fs-base mt-1 fw-normal">{product.price}</h5>
                    </td>
                    <td>
                      <span className="text-muted fs-xs">Ratings</span>
                      <h5 className="fs-base mt-1 fw-normal">
                        {renderStars(product.ratings)}
                        <span className="ms-1">
                          <a href="ecommerce-reviews.html" className="link-reset fw-semibold">
                            ({product.reviews})
                          </a>
                        </span>
                      </h5>
                    </td>
                    <td>
                      <span className="text-muted fs-xs">Status</span>
                      <h5 className="fs-base mt-1 fw-normal">
                        <TbCircleFilled className={`fs-xs text-${product.statusVariant}`} /> {product.status}
                      </h5>
                    </td>
                    <td style={{ width: 30 }}>
                      <Dropdown>
                        <DropdownToggle as="a" href="#" className="dropdown-toggle text-muted drop-arrow-none card-drop p-0">
                          <TbDotsVertical className="fs-lg" />
                        </DropdownToggle>
                        <DropdownMenu className="dropdown-menu-end">
                          <DropdownItem href="#">Edit Product</DropdownItem>
                          <DropdownItem href="#">Remove</DropdownItem>
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

          <CardPagination totalItems={5} itemsPerPage={5} currentPage={1} itemsName="products" />

        </CardFooter>
      </Card>
    </Col>
  )
}

export default ProductInventory