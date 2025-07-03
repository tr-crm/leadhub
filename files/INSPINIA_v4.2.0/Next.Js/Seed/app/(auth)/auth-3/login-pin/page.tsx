"use client"
import AppLogo from '@/components/AppLogo';
import OTPInput from '@/components/OTPInput';
import { author, currentYear } from '@/helpers';
import Image from 'next/image';
import Link from 'next/link';
import { useState } from 'react';
import { Button, Card, CardBody, Col, Form, Row } from 'react-bootstrap';

import user1 from '@/assets/images/users/user-1.jpg';


const LoginWithPin = () => {
        const [code, setCode] = useState<string[]>(Array(6).fill(''));
    return (
        <div className="auth-box p-0 w-100">
            <Row className="w-100 g-0">
                <Col>
                    <div className="h-100 position-relative card-side-img rounded-0 overflow-hidden">
                        <div className="p-4 card-img-overlay auth-overlay d-flex align-items-end justify-content-center"></div>
                    </div>
                </Col>

                <Col xl="auto">
                    <Card className="auth-box-form border-0 mb-0">
                        <CardBody className="min-vh-100 d-flex flex-column justify-content-center">
                            <div className="auth-brand mb-0 text-center">
                                <AppLogo />
                            </div>

                            <div className="mt-auto text-center">
                                <h4 className="fw-bold">Welcome to IN+</h4>
                                <p className="text-muted mx-auto mb-5">This screen is locked. Enter your PIN to continue.</p>

                                <div className="text-center mb-4">
                                    <Image
                                        src={user1}
                                        className="rounded-circle img-thumbnail avatar-xxl mb-2"
                                        alt="thumbnail"
                                        width={120}
                                        height={120}
                                    />
                                    <h5 className="fs-md">Damian D.</h5>
                                </div>

                                <Form>
                                  <div className='mb-3'>
                                        <OTPInput code={code} setCode={setCode} label="Enter your 6-digit code" labelClassName="d-flex" inputClassName="py-2 bg-light bg-opacity-40 border-light" />
                                    </div>

                                    <div className="d-grid">
                                        <Button type="submit" className="btn btn-primary fw-semibold py-2">
                                            Confirm
                                        </Button>
                                    </div>
                                </Form>
                            </div>

                            <p className="text-muted text-center mt-4 mb-0">
                                Not you? Return to{' '}
                                <Link href="/auth-3/sign-in" className="text-decoration-underline link-offset-3 fw-semibold">
                                    Sign in
                                </Link>
                            </p>

                            <p className="text-center text-muted mt-auto mb-0">
                                © 2014 - <span>{currentYear}</span> INSPINIA — by{' '}
                                <span className="fw-semibold">{author}</span>
                            </p>
                        </CardBody>
                    </Card>
                </Col>
            </Row>
        </div>
    );
};

export default LoginWithPin;
