import AppLogo from "@/components/AppLogo"
import { Button, Card, CardBody, Col, Container, Row } from "react-bootstrap"
import Image from "next/image"
import { author, currentYear } from "@/helpers"

import maintenanceImg from '@/assets/images/svg/maintenance.svg'

const Maintenance = () => {
    return (
        <div className="auth-box d-flex align-items-center">
            <Container fluid="xxl">
                <Row className="align-items-center justify-content-center">
                    <Col xl={6}>
                        <Card className="mb-0 rounded-4">
                            <CardBody>
                                <div className="auth-brand text-center mb-0">
                                    <AppLogo />
                                </div>

                                <div className="p-2 text-center">
                                    <div className="w-md-50 mx-auto">
                                        <Image
                                            src={maintenanceImg}
                                            alt="Maintenance"
                                            className="img-fluid"
                                        />
                                    </div>

                                    <h3 className="fw-bold text-uppercase">Site Under Maintenance</h3>
                                    <p className="text-muted">
                                        We’re currently performing scheduled maintenance.
                                        <br />
                                        Please check back soon.
                                    </p>

                                    <Button variant="primary"  className="mt-3 rounded-pill me-1">Call Now</Button>
                                    <Button variant="info" className="mt-3 rounded-pill">Email Us</Button>
                                </div>

                                <p className="text-center text-muted mt-5 mb-0">
                                    © 2014 - {currentYear} INSPINIA — by{' '}
                                    <span className="fw-bold">{author}</span>
                                </p>
                            </CardBody>
                        </Card>
                    </Col>
                </Row>
            </Container>
        </div>
    )
}

export default Maintenance