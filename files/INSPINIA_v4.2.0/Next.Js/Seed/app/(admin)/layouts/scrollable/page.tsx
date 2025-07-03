"use client"
import {useEffect} from "react";
import {Alert, Col, Container, Row} from "react-bootstrap";
import PageBreadcrumb from "@/components/PageBreadcrumb";
import {useLayoutContext} from "@/context/useLayoutContext";
import {TbInfoCircle} from "react-icons/tb";

const Page = () => {

    const {changeLayoutPosition, reset} = useLayoutContext()

    useEffect(() => {
        changeLayoutPosition('scrollable')

        return () => reset()
    }, [])

    return (
        <Container fluid>
            <PageBreadcrumb title="Scrollable"/>

            <Row>
                <Col sm={12}>
                    <Alert variant="info"
                           className="alert-bordered border-start border-info d-flex align-items-start gap-2">
                        <TbInfoCircle className="fs-xxl"/>
                        <div>
                            To enable full scrolling and view all content, please
                            add <code>data-layout-position="scrollable"</code> to the
                            <code>&lt;html&gt;</code> tag. To apply this dynamically,
                            use <code>changeLayoutPosition('scrollable')</code> from the <code>LayoutContext</code>.
                        </div>
                    </Alert>
                </Col>
            </Row>

            {/*demo only*/}
            <div style={{height: '1000px'}}></div>
        </Container>
    )
}

export default Page