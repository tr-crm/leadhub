import {BreadcrumbItem, Button, Container} from "react-bootstrap";
import {TbCircleDashedPlus, TbActivityHeartbeat} from "react-icons/tb";
import Link from "next/link";

const Page = () => {

    return (
        <Container fluid>
            <div className="page-title-head py-2 d-flex align-items-sm-center flex-sm-row flex-column">
                <div className="flex-grow-1">
                    <h4 className="fs-sm text-uppercase fw-bold mb-1">Hey Damian,</h4>
                    <ol className="breadcrumb mb-0 p-0 fs-xxs">
                        <BreadcrumbItem linkAs={Link} href="#">Home</BreadcrumbItem>
                        <BreadcrumbItem linkAs={Link} href="#">Topbar</BreadcrumbItem>
                        <BreadcrumbItem linkAs={Link} href="#" active>Sub Items</BreadcrumbItem>
                    </ol>
                </div>
                <div className="d-flex">
                    <Button variant="primary" className="flex-shrink-0 ms-2">
                        <TbCircleDashedPlus className="fs-lg me-1"/> Add New
                    </Button>
                    <Button variant="secondary" className="btn-icon flex-shrink-0 ms-1">
                        <TbActivityHeartbeat className="fs-lg"/>
                    </Button>
                </div>
            </div>
        </Container>
    )
}

export default Page