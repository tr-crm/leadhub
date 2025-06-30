"use client"
import { useState } from "react"
import { Button, Card, CardBody, Col, Form, Row } from "react-bootstrap"
import Link from "next/link"
import { author, currentYear } from "@/helpers"
import OTPInput from "@/components/OTPInput"
import AppLogo from "@/components/AppLogo"

const TwoFactor = () => {
        const [code, setCode] = useState<string[]>(Array(6).fill(''));
    return (
        <div className="auth-box p-0 w-100">
            <Row className="w-100 g-0">
                <Col>
                    <div className="h-100 position-relative card-side-img rounded-0 overflow-hidden">
                        <div className="p-4 card-img-overlay auth-overlay d-flex align-items-end justify-content-center" />
                    </div>
                </Col>

                <Col xl="auto">
                    <Card className="auth-box-form border-0 mb-0">
                        <CardBody className="min-vh-100 d-flex flex-column justify-content-center">
                            <div className="auth-brand mb-0 text-center">
                                <AppLogo />
                            </div>

                            <div className="mt-auto text-center">
                                <h4 className="fw-bold">Two-Factor Verification ! | IN+</h4>
                                <p className="text-muted mx-auto mb-5">Let’s get you signed in. Enter your PIN to continue</p>

                                <div className="text-center mb-4">
                                    <h5 className="text-muted fs-base mb-3">We&apos;ve emailed you a 6-digit verification code we sent to</h5>
                                    <div className="fw-bold fs-3">******6789</div>
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
                                © 2014 - <span>{currentYear}</span> INSPINIA — by{' '}
                                <span className="fw-semibold">{author}</span>
                            </p>
                        </CardBody>
                    </Card>
                </Col>
            </Row>
        </div>
    )
}

export default TwoFactor