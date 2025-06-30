"use client"
import {useEffect} from "react";
import {Alert, Col, Container, Row} from "react-bootstrap";
import PageBreadcrumb from "@/components/PageBreadcrumb";
import {useLayoutContext} from "@/context/useLayoutContext";
import {TbInfoCircle} from "react-icons/tb";

const Page = () => {

    const {changeSideNavSize, reset} = useLayoutContext()


    useEffect(() => {
        changeSideNavSize('offcanvas')

        return () => reset()
    }, [])

    return (
        <Container fluid>
            <PageBreadcrumb title="Offcanvas Menu"/>

            <Row>
                <Col sm={12}>
                    <Alert variant="info"
                           className="alert-bordered border-start border-info d-flex align-items-start gap-2">
                        <TbInfoCircle className="fs-xxl"/>
                        <div>
                            To enable the offcanvas menu,
                            add <code>data-sidenav-size="offcanvas"</code> to
                            the <code>&lt;html&gt;</code> tag. To apply this dynamically,
                            use <code>changeSideNavSize('offcanvas')</code> from the <code>LayoutContext</code>.
                        </div>
                    </Alert>
                </Col>
            </Row>
        </Container>
    )
}

export default Page