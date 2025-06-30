import AppLogo from "@/components/AppLogo"
import { author, currentYear } from "@/helpers"
import type { Metadata } from "next"
import Link from "next/link"
import { Card, CardBody, Col, Row } from "react-bootstrap"


export const metadata: Metadata = { title: "Error 408" }

const Error408 = () => {
    return (
        <div className="auth-box d-flex align-items-center">
            <div className="container-xxl">
                <Row className="align-items-center justify-content-center">
                    <Col xl={10}>
                        <Card className="rounded-3 p-0 rounded-4">
                            <CardBody className="p-0">
                                <Row className="justify-content-between g-0">
                                    <Col lg={6}>
                                        <Card className="mb-0 border-0 rounded-4">
                                            <CardBody>
                                                <div className="auth-brand text-center mb-3">
                                                    <AppLogo />
                                                </div>

                                                <div className="p-2 text-center">
                                                    <div className="error-wave-container error-text-alt justify-content-center gap-1">
                                                        <span className="error-wave-char">4</span>
                                                        <span className="error-wave-char">0</span>
                                                        <span className="error-wave-char">8</span>
                                                    </div>

                                                    <h3 className="fw-bold text-uppercase">Request Timeout</h3>
                                                    <p className="text-muted">
                                                        Your request took too long, and the server timed out. Please try again later.
                                                    </p>

                                                    <Link href="/" className="btn btn-primary mt-3 rounded-pill">
                                                        Back to Safety
                                                    </Link>
                                                </div>

                                                <p className="text-center text-muted mt-5 mb-0">
                                                    © 2014 - {currentYear} INSPINIA — by{' '}
                                                    <span className="fw-bold">{author}</span>
                                                </p>
                                            </CardBody>
                                        </Card>
                                    </Col>

                                    <Col lg={6} className="d-none d-lg-block">
                                        <div className="h-100 position-relative card-side-img rounded-end-4 rounded-end rounded-0 overflow-hidden">
                                            <div className="p-4 card-img-overlay rounded-4 rounded-start-0 auth-overlay d-flex align-items-end justify-content-center"></div>
                                        </div>
                                    </Col>
                                </Row>
                            </CardBody>
                        </Card>
                    </Col>
                </Row>
            </div>
        </div>
    )
}

export default Error408