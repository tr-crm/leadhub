import { Col, Row } from "react-bootstrap"
import { TbChevronLeft, TbChevronRight } from "react-icons/tb"

type CardPaginationProps = {
  totalItems: number;
  itemsPerPage: number;
  currentPage: number;
  itemsName: string;
}

const CardPagination = ({ totalItems, itemsPerPage, currentPage, itemsName }: CardPaginationProps) => {

  return (
    <Row className="align-items-center justify-content-between text-center text-sm-start">
      <Col sm>
        <div className="text-muted">
          Showing <span className="fw-semibold">{currentPage}</span> to <span className="fw-semibold">{itemsPerPage}</span> of <span className="fw-semibold">{totalItems}</span> {itemsName}
        </div>
      </Col>
      <Col sm="auto" className="mt-3 mt-sm-0">
        <div>
          <ul className="pagination pagination-boxed mb-0 justify-content-center">
            <li className="page-item disabled">
              <span className="page-link">
                <TbChevronLeft />
              </span>
            </li>
            <li className="page-item active" role="button">
              <span className="page-link" role="button">{currentPage}</span>
            </li>
            <li className="page-item disabled">
              <span className="page-link">
                <TbChevronRight />
              </span>
            </li>
          </ul>
        </div>
      </Col>
    </Row>
  )
}

export default CardPagination