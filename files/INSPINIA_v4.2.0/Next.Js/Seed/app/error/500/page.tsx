import {author, currentYear} from "@/helpers"
import type {Metadata} from "next"
import Image from "next/image"
import Link from "next/link"
import {Card, CardBody, Col, Row} from "react-bootstrap"

import error500 from '@/assets/images/svg/500.svg'

export const metadata: Metadata = {title: "Error 500"}

const Error500 = () => {
    return (
        <div className="auth-box p-0 w-100">
            <Row className="w-100 g-0">
                <Col>
                    <div className="h-100 position-relative card-side-img rounded-0 overflow-hidden">
                        <div
                            className="p-4 card-img-overlay auth-overlay d-flex align-items-end justify-content-center">
                        </div>
                    </div>
                </Col>

                <Col xl="auto">
                    <Card className="auth-box-form border-0 mb-0">
                        <CardBody className="min-vh-100 d-flex flex-column justify-content-center">
                            <div className="p-2 text-center mt-auto">
                                <Image src={error500} alt="500" className="img-fluid"/>
                                <h3 className="fw-bold text-uppercase">Internal Server Error</h3>
                                <p className="text-muted">Something went wrong on our end. Please try again later.</p>

                                <Link href="/"
                                      className="btn btn-primary mt-3 rounded-pill"

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

export default Error500