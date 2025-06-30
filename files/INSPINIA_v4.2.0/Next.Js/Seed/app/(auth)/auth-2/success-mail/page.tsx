import { Button, Card, CardBody, Col, Row } from "react-bootstrap";
import AppLogo from "@/components/AppLogo";
import { author, currentYear } from "@/helpers";
import type { Metadata } from "next";
import Image from "next/image";

import checkmark from '@/assets/images/checkmark.png';

export const metadata: Metadata = { title: "Success Mail" }

const SuccessMail = () => {
    return (
        <div className="auth-box d-flex align-items-center">
            <div className="container-xxl">
                <Row className="align-items-center justify-content-center">
                    <Col xl={10}>
                        <Card className="rounded-4">
                            <Row className="justify-content-between g-0">
                                <Col lg={6}>
                                    <CardBody>
                                        <div className="auth-brand text-center mb-4">
                                            <AppLogo />
                                        </div>

                                        <form>
                                            <div className="mb-4">
                                                <div className="avatar-xxl mx-auto mt-2">
                                                    <div className="avatar-title bg-light-subtle border border-light border-dashed rounded-circle">
                                                        <Image src={checkmark} alt="checkmark" height={64} />
                                                    </div>
                                                </div>
                                            </div>

                                            <h4 className="fw-bold text-center mb-4">Well Done! Email verified Successfully</h4>

                                            <div className="d-grid">
                                                <Button type="submit" className="btn btn-primary fw-semibold py-2">
                                                    Back to Dashboard
                                                </Button>
                                            </div>
                                        </form>

                                        <p className="text-center text-muted mt-4 mb-0">
                                            © 2014 - {currentYear} INSPINIA — by{' '}
                                            <span className="fw-semibold">{author}</span>
                                        </p>
                                    </CardBody>
                                </Col>

                                <Col lg={6} className="d-none d-lg-block">
                                    <div className="h-100 position-relative card-side-img rounded-end-4 rounded-end rounded-0 overflow-hidden">
                                        <div className="p-4 card-img-overlay rounded-4 rounded-start-0 auth-overlay d-flex align-items-end justify-content-center"></div>
                                    </div>
                                </Col>
                            </Row>
                        </Card>
                    </Col>
                </Row>
            </div>
        </div>
    )
}

export default SuccessMail