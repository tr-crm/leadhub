"use client"
import {Fragment, useEffect} from "react";
import {Alert, Col, Container, Row} from "react-bootstrap";
import PageBreadcrumb from "@/components/PageBreadcrumb";
import {useLayoutContext} from "@/context/useLayoutContext";
import {TbInfoCircle} from "react-icons/tb";

const Page = () => {

    const {changeLayoutWidth, changeSideNavSize, reset} = useLayoutContext()

    useEffect(() => {
        changeLayoutWidth('boxed')
        changeSideNavSize('on-hover')

        return () => reset()
    }, [])

    return (
        <Fragment>

            <Container fluid>
                <PageBreadcrumb title="Boxed"/>
            </Container>

            <Container fluid="xl">
                <Row>
                    <Col sm={12}>
                        <Alert variant="info"
                               className="alert-bordered border-start border-info d-flex align-items-start gap-2">
                            <TbInfoCircle className="fs-xxl"/>
                            <div>
                                To enable the boxed layout, add <code>data-layout-width="boxed"</code> to
                                the <code>&lt;html&gt;</code> tag. For optimal spacing and usability, we also recommend
                                adding <code>data-sidenav-size="on-hover"</code> to make the sidebar compact while
                                keeping more
                                room for content. To apply this dynamically,
                                use <code> changeLayoutWidth('boxed')</code> and <code>changeSideNavSize('on-hover')</code> from
                                the <code>LayoutContext</code>.
                            </div>
                        </Alert>
                    </Col>
                </Row>
            </Container>
        </Fragment>
    )
}

export default Page