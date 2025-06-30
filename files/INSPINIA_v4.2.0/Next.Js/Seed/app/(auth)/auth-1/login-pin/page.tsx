"use client"
import { useState } from 'react';
import AppLogo from '@/components/AppLogo';
import { author, currentYear } from '@/helpers';
import Image from 'next/image';
import Link from 'next/link';
import { Button, Card, Col, Container, Form, Row } from 'react-bootstrap';
import OTPInput from '@/components/OTPInput';

import user1 from '@/assets/images/users/user-1.jpg';

const LoginWithPin = () => {
    const [code, setCode] = useState<string[]>(Array(6).fill(''));
    return (
        <div className="auth-box overflow-hidden align-items-center d-flex">
            <Container>
                <Row className="justify-content-center">
                    <Col xxl={4} md={6} sm={8}>
                        <div className="auth-brand text-center mb-4">
                            <AppLogo />
                            <h4 className="fw-bold mt-3">Login with PIN! | IN+</h4>
                            <p className="text-muted w-lg-75 mx-auto">
                                This screen is locked. Enter your PIN to continue.
                            </p>
                        </div>

                        <Card className="p-4 rounded-4">
                            <div className="text-center mb-4">
                                <Image src={user1} alt="User thumbnail" className="rounded-circle img-thumbnail avatar-xxl mb-2" height={96}
                                />
                                <h5 className="fs-md">Damian D.</h5>
                            </div>

                            <Form>
                                <div className='form-group mb-3'>
                                    <OTPInput code={code} setCode={setCode} label="Enter your 6-digit code" />
                                </div>

                                <div className="d-grid">
                                    <Button type="submit" variant="primary" className="fw-semibold py-2">
                                        Confirm
                                    </Button>
                                </div>
                            </Form>

                            <p className="text-muted text-center mt-4 mb-0">
                                Not you? Return to{' '}
                                <Link
                                    href="/auth-1/sign-in"
                                    className="text-decoration-underline link-offset-3 fw-semibold"
                                >
                                    Sign in
                                </Link>
                            </p>
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

export default LoginWithPin;
