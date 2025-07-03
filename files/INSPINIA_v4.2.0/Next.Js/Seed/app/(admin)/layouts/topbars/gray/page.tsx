"use client"
import {useEffect} from "react";
import {Alert, Col, Container, Row} from "react-bootstrap";
import PageBreadcrumb from "@/components/PageBreadcrumb";
import {useLayoutContext} from "@/context/useLayoutContext";
import {TbInfoCircle} from "react-icons/tb";

const Page = () => {

    const {changeTopBarColor, reset} = useLayoutContext()

    useEffect(() => {
        changeTopBarColor('gray')

        return () => reset()
    }, [])

    return (
        <Container fluid>
            <PageBreadcrumb title="Gray Topbar"/>

            <Row>
                <Col sm={12}>
                    <Alert variant="info"
                           className="alert-bordered border-start border-info d-flex align-items-start gap-2">
                        <TbInfoCircle className="fs-xxl"/>
                        <div>
                            To enable the gray topbar, add <code>data-topbar-color="gray"</code> to
                            the <code>&lt;html&gt;</code> tag. To apply this dynamically,
                            use <code>changeTopBarColor('gray')</code> from the <code>LayoutContext</code>.
                        </div>
                    </Alert>
                </Col>
            </Row>
        </Container>
    )
}

export default Page