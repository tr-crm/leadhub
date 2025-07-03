"use client"
import AppLogo from "@/components/AppLogo"
import OTPInput from "@/components/OTPInput"
import { author, currentYear } from "@/helpers"
import Link from "next/link"
import { useState } from "react"
import { Button, Card, Col, Form, Row } from "react-bootstrap"


const TwoFactor = () => {
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
                                            <h4 className="fw-bold mt-4">Request sent Successfully ! | IN+</h4>
                                        </div>

                                        <div className="text-center mb-4">
                                            <h5 className="text-muted fs-base mb-3">
                                                We&apos;ve emailed you a 6-digit verification code we sent to
                                            </h5>
                                            <div className="fw-bold fs-3">******6789</div>
                                        </div>

                                        <Form>
                                            <div className="mb-3">
                                                <OTPInput code={code} setCode={setCode} label="Enter your 6-digit code" />
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

                                        <p className="text-muted text-center mb-0">
                                            Return to{' '}
                                            <Link href="/auth-2/sign-in" className="text-decoration-underline link-offset-3 fw-semibold">
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
                                    <div className="h-100 position-relative card-side-img rounded-end-4 rounded-0 overflow-hidden">
                                        <div className="p-4 card-img-overlay rounded-4 rounded-start-0 auth-overlay d-flex align-items-end justify-content-center" />
                                    </div>
                                </Col>
                            </Row>
                        </Card>
                    </Col>
                </Row>
            </div>
        </div>
    )
}

export default TwoFactor