"use client"
import {Fragment, useEffect} from "react";
import {Alert, Col, Container, Row} from "react-bootstrap";
import PageBreadcrumb from "@/components/PageBreadcrumb";
import {useLayoutContext} from "@/context/useLayoutContext";
import {TbInfoCircle} from "react-icons/tb";

const Page = () => {

    const {changeOrientation, reset} = useLayoutContext()

    useEffect(() => {
        changeOrientation('horizontal')

        return () => reset()
    }, [])

    return (
        <Fragment>

            <Container fluid>
                <PageBreadcrumb title="Horizontal"/>
            </Container>

            <Container fluid="xl">
                <Row>
                    <Col sm={12}>
                        <Alert variant="info"
                               className="alert-bordered border-start border-info d-flex align-items-start gap-2">
                            <TbInfoCircle className="fs-xxl"/>
                            <div>
                                To enable the horizontal layout,
                                use <code> changeOrientation('horizontal')</code> from
                                the <code>LayoutContext</code>. Or you can just wrap your page
                                with <code>HorizontalLayout</code>.
                            </div>
                        </Alert>
                    </Col>
                </Row>
            </Container>
        </Fragment>
    )
}

export default Page