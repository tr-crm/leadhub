"use client"
import AppLogo from "@/components/AppLogo"
import OTPInput from "@/components/OTPInput"
import PasswordInputWithStrength from "@/components/PasswordInputWithStrength"
import { author, currentYear } from "@/helpers"
import Link from "next/link"
import { useState } from "react"
import { Button, Card, Col, Container, Form, FormControl, FormLabel, Row } from "react-bootstrap"

const NewPassword = () => {
    const [password, setPassword] = useState('');
    const [code, setCode] = useState<string[]>(Array(6).fill(''));

    return (
        <div className="auth-box overflow-hidden align-items-center d-flex">
            <Container>
                <Row className="justify-content-center">
                    <Col xxl={4} md={6} sm={8}>
                        <div className="auth-brand text-center mb-4">
                            <AppLogo />
                            <h4 className="fw-bold mt-3">Setup New Password ! | IN+</h4>
                            <p className="text-muted w-lg-75 mx-auto">
                                We&apos;ve emailed you a 6-digit verification code. Please enter it below to confirm your email address
                            </p>
                        </div>

                        <Card className="p-4 rounded-4">
                            <Form>
                                <div className="mb-3 form-group">
                                    <FormLabel htmlFor="userEmail">
                                        Email address <span className="text-danger">*</span>
                                    </FormLabel>
                                    <div className="input-group">
                                        <FormControl
                                            type="email"
                                            id="userEmail"
                                            placeholder="you@example.com"
                                            disabled
                                        />
                                    </div>
                                </div>

                                <div className="mb-3 form-group">
                                    <OTPInput
                                        code={code}
                                        setCode={setCode}
                                        label="Enter your 6-digit code"
                                    />
                                </div>

                                <div className="mb-3">
                                    <PasswordInputWithStrength
                                        id='userPassword'
                                        label='Password'
                                        name='user-password'
                                        password={password}
                                        setPassword={setPassword}
                                        placeholder='••••••••'
                                    />

                                </div>

                                <div className="mb-3 form-group">
                                    <FormLabel htmlFor="userNewPassword">
                                        Confirm New Password <span className="text-danger">*</span>
                                    </FormLabel>
                                    <div className="input-group">
                                        <FormControl
                                            type="password"
                                            id="userNewPassword"
                                            placeholder="••••••••"
                                            required
                                        />
                                    </div>
                                </div>

                                <div className="mb-3">
                                    <div className="form-check">
                                        <input className="form-check-input form-check-input-light fs-14" type="checkbox" id="termAndPolicy" />
                                        <label className="form-check-label" htmlFor="termAndPolicy">Agree the Terms &amp; Policy</label>
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

                            <p className="text-muted text-center mb-0">
                                Return to{' '}
                                <Link href="/auth-1/sign-in" className="text-decoration-underline link-offset-3 fw-semibold">
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
    )
}

export default NewPassword