import { Button, Card, CardBody, Col, Container, Row } from 'react-bootstrap';
import AppLogo from '@/components/AppLogo';
import type { Metadata } from 'next';
import Image from 'next/image';
import { author, currentYear } from '@/helpers';

import deleteIcon from '@/assets/images/delete.png';

export const metadata: Metadata = { title: "Delete Account" }

const DeleteAccount = () => {
    return (
        <div className="auth-box d-flex align-items-center">
            <Container fluid className="container-xxl">
                <Row className="align-items-center justify-content-center">
                    <Col xl={10}>
                        <Card className="rounded-4">
                            <Row className="justify-content-between g-0">
                                <Col lg={6}>
                                    <CardBody>
                                        <div className="auth-brand text-center mb-4">
                                            <AppLogo />
                                        </div>

                                        <div className="mb-4">
                                            <div className="avatar-xxl mx-auto mt-2">
                                                <div className="avatar-title bg-light-subtle border border-light border-dashed rounded-circle">
                                                    <Image src={deleteIcon} alt="delete icon" height={64} />
                                                </div>
                                            </div>
                                        </div>

                                        <h4 className="fw-bold text-center mb-3">Account Deactivated</h4>
                                        <p className="text-muted text-center mb-4">
                                            Your account is currently inactive. Reactivate now to regain access to all features and opportunities.
                                        </p>

                                        <div className="d-grid">
                                            <Button type="button" variant="primary" className="fw-semibold py-2">
                                                Reactivate Now
                                            </Button>
                                        </div>

                                        <p className="text-center text-muted mt-4 mb-0">
                                            © 2014 - {currentYear} INSPINIA — by <span className="fw-semibold">{author}</span>
                                        </p>
                                    </CardBody>
                                </Col>

                                <Col lg={6} className="d-none d-lg-block">
                                    <div className="h-100 position-relative card-side-img rounded-end-4 overflow-hidden">
                                        <div className="p-4 card-img-overlay rounded-4 rounded-start-0 auth-overlay d-flex align-items-end justify-content-center">

                                        </div>
                                    </div>
                                </Col>
                            </Row>
                        </Card>
                    </Col>
                </Row>
            </Container>
        </div>
    );
};

export default DeleteAccount;
