import AppLogo from '@/components/AppLogo';
import { author, currentYear } from '@/helpers';
import type { Metadata } from 'next';
import Image from 'next/image';
import { Button, Card, CardBody, Col, Row } from 'react-bootstrap';

import deleteIcon from '@/assets/images/delete.png';

export const metadata: Metadata = { title: "Delete Account" }

const DeleteAccount = () => {
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
                            <div className="auth-brand text-center">
                                <AppLogo />
                            </div>

                            <div className="mt-auto text-center">
                                <div className="mb-4">
                                    <div className="avatar-xxl mx-auto mt-2">
                                        <div className="avatar-title bg-light-subtle border border-light border-dashed rounded-circle">
                                            <Image src={deleteIcon} alt="dark logo" height={64} width={64} />
                                        </div>
                                    </div>
                                </div>

                                <h4 className="fw-bold text-center mb-3">Account Deactivated</h4>
                                <p className="text-muted text-center mb-4">
                                    Your account is currently inactive. Reactivate now to regain access to all features and opportunities.
                                </p>

                                <div className="d-grid">
                                    <Button type="submit" className="btn btn-primary fw-semibold py-2">
                                        Reactivate Now
                                    </Button>
                                </div>
                            </div>

                            <p className="text-center text-muted mt-auto mb-0">
                                © 2014 - {currentYear} INSPINIA — by{' '}
                                <span className="fw-semibold">{author}</span>
                            </p>
                        </CardBody>
                    </Card>
                </Col>
            </Row>
        </div>
    );
};

export default DeleteAccount;
