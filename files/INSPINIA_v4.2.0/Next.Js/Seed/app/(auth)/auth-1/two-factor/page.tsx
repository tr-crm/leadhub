"use client"
import AppLogo from "@/components/AppLogo"
import OTPInput from "@/components/OTPInput"
import { author, currentYear } from "@/helpers"
import Link from "next/link"
import { useState } from "react"
import { Button, Card, Col, Container, Form, Row } from "react-bootstrap"


const TwoFactor = () => {
    const [code, setCode] = useState<string[]>(Array(6).fill(''));

    return (
        <div className="auth-box overflow-hidden align-items-center d-flex">
            <Container>
                <Row className="justify-content-center">
                    <Col xxl={4} md={6} sm={8}>
                        <div className="auth-brand text-center mb-4">
                            <AppLogo />
                            <h4 className="fw-bold mt-3">Two-Factor Verification ! | IN+</h4>
                            <p className="text-muted w-lg-75 mx-auto">
                                Let&apos;s get you signed in. Enter your PIN to continue
                            </p>
                        </div>

                        <Card className="p-4 rounded-4">
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
                                Don’t have a code?&nbsp;
                                <Link href="" className="text-decoration-underline link-offset-2 fw-semibold">
                                    Resend&nbsp;
                                </Link>
                                or
                                <Link href="" className="text-decoration-underline link-offset-2 fw-semibold">
                                    &nbsp;Call Us
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

export default TwoFactor