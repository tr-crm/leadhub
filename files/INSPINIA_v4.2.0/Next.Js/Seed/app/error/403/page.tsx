import AppLogo from "@/components/AppLogo"
import { author, currentYear } from "@/helpers"
import type { Metadata } from "next"
import Link from "next/link"
import { Card, CardBody, Col, Row } from "react-bootstrap"

export const metadata: Metadata = { title: "Error 403" }

const Error403 = () => {
    return (
        <div className="auth-box p-0 w-100">
            <Row className="w-100 g-0">
                <Col>
                    <div className="h-100 position-relative card-side-img rounded-0 overflow-hidden">
                        <div className="p-4 card-img-overlay auth-overlay d-flex align-items-end justify-content-center">
                        </div>
                    </div>
                </Col>

                <Col xl="auto">
                    <Card className="auth-box-form border-0 mb-0">
                        <CardBody className="min-vh-100 d-flex flex-column justify-content-center">
                            <div className="auth-brand text-center mb-4">
                                <AppLogo />
                            </div>

                            <div className="p-2 text-center mt-auto">
                                <div className="error-glitch" data-text="403">403</div>
                                <h3 className="fw-bold text-uppercase">Forbidden</h3>
                                <p className="text-muted">You don&apos;t have permission to access this resource.</p>

                                <Link
                                    href="/"
                                    className="mt-3 rounded-pill btn btn-primary"
                                >
                                    Go Home
                                </Link>
                            </div>

                            <p className="text-center text-muted mt-auto mb-0">
                                © 2014 - {currentYear} INSPINIA — by{' '}
                                <span className="fw-bold">{author}</span>
                            </p>
                        </CardBody>
                    </Card>
                </Col>
            </Row>
        </div>
    )
}

export default Error403