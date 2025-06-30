"use client"
import { Button, Card, Col, Form, Row } from 'react-bootstrap';
import { useState } from 'react';
import AppLogo from '@/components/AppLogo';
import { author, currentYear } from '@/helpers';
import Image from 'next/image';
import Link from 'next/link';
import OTPInput from '@/components/OTPInput';

import user1 from '@/assets/images/users/user-1.jpg';


const LoginWithPin = () => {
    const [code, setCode] = useState<string[]>(Array(6).fill(''));
    return (
        <div className="auth-box d-flex align-items-center">
            <div className="container-xxl">
                <Row className="align-items-center justify-content-center">
                    <Col xl={10}>
                        <Card className="rounded-4">
                            <Row className="justify-content-between g-0">
                                <Col lg={6}>
                                    <div className="card-body">
                                        <div className="auth-brand text-center mb-4">
                                            <AppLogo />
                                            <h4 className="fw-bold mt-4">Welcome to IN+</h4>
                                            <p className="text-muted w-lg-75 mx-auto">
                                                This screen is locked. Enter your PIN to continue.
                                            </p>
                                        </div>

                                        <div className="text-center mb-4">
                                            <Image
                                                src={user1}
                                                alt="thumbnail"
                                                className="rounded-circle img-thumbnail avatar-xxl mb-2"
                                            />
                                            <h5 className="fs-md">Damian D.</h5>
                                        </div>

                                        <Form>
                                            <div className='mb-3'>
                                                <OTPInput code={code} setCode={setCode} label="Enter your 6-digit code" />
                                            </div>

                                            <div className="d-grid">
                                                <Button type="submit" className="btn btn-primary fw-semibold py-2">
                                                    Confirm
                                                </Button>
                                            </div>
                                        </Form>

                                        <p className="text-muted text-center mt-4 mb-0">
                                            Not you? Return to{' '}
                                            <Link
                                                href="/auth-2/sign-in"
                                                className="text-decoration-underline link-offset-3 fw-semibold"
                                            >
                                                Sign in
                                            </Link>
                                        </p>

                                        <p className="text-center text-muted mt-4 mb-0">
                                            © 2014 - {currentYear} INSPINIA — by{' '}
                                            <span className="fw-semibold">{author}</span>
                                        </p>
                                    </div>
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
    );
};

export default LoginWithPin;
