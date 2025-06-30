"use client"
import AppLogo from "@/components/AppLogo";
import OTPInput from "@/components/OTPInput";
import PasswordInputWithStrength from "@/components/PasswordInputWithStrength";
import { author, currentYear } from "@/helpers";
import Link from "next/link";
import { useState } from "react";
import { Button, Card, CardBody, Col, Form, FormControl, InputGroup, Row } from "react-bootstrap";


const NewPassword = () => {
    const [password, setPassword] = useState('');
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
                                <h4 className="fw-bold">Setup New Password ! | IN++</h4>
                                <p className="text-muted auth-sub-text mx-auto mb-4">
                                    We&apos;ve emailed you a 6-digit verification code. Please enter it below to confirm your Email Address.
                                </p>

                                <Form>
                                    <div className="mb-3">
                                        <div className="input-group">
                                            <input
                                                type="email"
                                                className="form-control py-2 px-3 bg-light bg-opacity-40 border-light"
                                                id="userEmail"
                                                placeholder="you@example.com"
                                                disabled
                                            />
                                        </div>
                                    </div>

                                    <div className='mb-3'>
                                        <OTPInput code={code} setCode={setCode} label="Enter your 6-digit code" labelClassName="d-flex" inputClassName="py-2 bg-light bg-opacity-40 border-light" />
                                    </div>

                                    <div className="mb-3" data-password="bar">
                                        <PasswordInputWithStrength
                                            id='userPassword'
                                            name='user-password'
                                            password={password}
                                            setPassword={setPassword}
                                            placeholder='Enter Password'
                                            inputClassName='py-2 px-3 bg-light bg-opacity-40 border-light'
                                        />
                                    </div>

                                    <div className="mb-3">
                                        <InputGroup>
                                            <FormControl
                                                type="password"
                                                className="py-2 px-3 bg-light bg-opacity-40 border-light"
                                                id="confirmPassword"
                                                placeholder="Confirm New password"
                                                required
                                            />
                                        </InputGroup>
                                    </div>

                                    <div className="mb-3 d-flex">
                                        <div className="form-check">
                                            <input
                                                className="form-check-input form-check-input-light fs-14"
                                                type="checkbox"
                                                id="termAndPolicy"
                                                defaultChecked
                                            />
                                            <label className="form-check-label" htmlFor="termAndPolicy">
                                                Agree the Terms &amp; Policy
                                            </label>
                                        </div>
                                    </div>

                                    <div className="d-grid">
                                        <Button type="submit" className="btn btn-primary fw-semibold py-2">
                                            Update Password
                                        </Button>
                                    </div>
                                </Form>

                                <p className="mt-4 text-muted text-center mb-4">
                                    Don’t have a code?{' '}
                                    <Link href="" className="text-decoration-underline link-offset-2 fw-semibold">
                                        Resend
                                    </Link>{' '}
                                    or{' '}
                                    <Link href="" className="text-decoration-underline link-offset-2 fw-semibold">
                                        Call Us
                                    </Link>
                                </p>
                            </div>

                            <p className="text-muted text-center mt-4 mb-0">
                                Return to{' '}
                                <Link href="/auth-3/sign-in" className="text-decoration-underline link-offset-3 fw-semibold">
                                    Sign in
                                </Link>
                            </p>

                            <p className="text-center text-muted mt-auto mb-0">
                                © 2014 - <span >{currentYear}</span> INSPINIA — by{' '}
                                <span className="fw-semibold">{author}</span>
                            </p>
                        </CardBody>
                    </Card>
                </Col>
            </Row>
        </div>
    )
}

export default NewPassword