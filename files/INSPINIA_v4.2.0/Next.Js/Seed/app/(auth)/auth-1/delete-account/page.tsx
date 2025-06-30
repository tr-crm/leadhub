import { Container, Row, Col, Card, Button } from 'react-bootstrap';
import Image from 'next/image';
import deleteIcon from '@/assets/images/delete.png';
import AppLogo from '@/components/AppLogo';
import { author, currentYear } from '@/helpers';
import type { Metadata } from 'next';

export const metadata: Metadata = { title: "Delete Account" }

const DeleteAccount = () => {
    return (
        <div className="auth-box overflow-hidden align-items-center d-flex">
            <Container>
                <Row className="justify-content-center">
                    <Col xxl={4} md={6} sm={8}>
                        <div className="auth-brand text-center mb-4">
                            <AppLogo />
                        </div>

                        <Card className="p-4 rounded-4">
                            <div className="mb-4">
                                <div className="avatar-xxl mx-auto mt-2">
                                    <div className="avatar-title bg-light-subtle border border-light border-dashed rounded-circle d-flex align-items-center justify-content-center">
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
                        </Card>

                        <p className="text-center text-muted mt-4 mb-0">
                            © 2014 - {currentYear} INSPINIA — by{' '}
                            <span className="fw-semibold">{author}</span>
                        </p>
                    </Col>
                </Row>
            </Container>
        </div>
    );
};

export default DeleteAccount;
