import {Fragment} from "react";
import {Alert, Col, Container, Row} from "react-bootstrap";
import PageBreadcrumb from "@/components/PageBreadcrumb";
import {TbInfoCircle} from "react-icons/tb";

const Page = () => {

    return (
        <Fragment>

            <Container fluid>
                <PageBreadcrumb title="Compact"/>
            </Container>

            <Container fluid="xl">
                <Row>
                    <Col sm={12}>
                        <Alert variant="info"
                               className="alert-bordered border-start border-info d-flex align-items-start gap-2">
                            <TbInfoCircle className="fs-xxl"/>
                            <div>
                                To use the compact layout, follow this structure: wrap your page title in <code>&lt;div
                                class="container-fluid"&gt;</code> and place your main content inside
                                <code>&lt;div class="container-xl"&gt;</code>. This ensures proper spacing and
                                alignment.
                            </div>
                        </Alert>
                    </Col>
                </Row>
            </Container>
        </Fragment>
    )
}

export default Page