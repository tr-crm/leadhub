import { Button, Card, Col, Form, FormControl, FormLabel, Row } from "react-bootstrap"
import { author, currentYear } from "@/helpers"
import type { Metadata } from "next"
import Link from "next/link"
import AppLogo from "@/components/AppLogo"
import { TbLockPassword, TbMail } from "react-icons/tb"

export const metadata: Metadata = { title: "Sign In" }

const SignIn = () => {
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
                                                Let’s get you signed in. Enter your email and password to continue.
                                            </p>
                                        </div>

                                        <Form>
                                            <div className="mb-3">
                                                <FormLabel htmlFor="userEmail" className="form-label">
                                                    Email address <span className="text-danger">*</span>
                                                </FormLabel>
                                                <div className="input-group">
                                                    <span className="input-group-text bg-light">
                                                        <TbMail  className="text-muted fs-xl" />
                                                    </span>
                                                    <FormControl
                                                        type="email"
                                                        id="userEmail"
                                                        placeholder="you@example.com"
                                                        required
                                                    />
                                                </div>
                                            </div>

                                            <div className="mb-3">
                                                <FormLabel htmlFor="userPassword" className="form-label">
                                                    Password <span className="text-danger">*</span>
                                                </FormLabel>
                                                <div className="input-group">
                                                    <span className="input-group-text bg-light">
                                                        <TbLockPassword  className="text-muted fs-xl" />
                                                    </span>
                                                    <FormControl
                                                        type="password"
                                                        id="userPassword"
                                                        placeholder="••••••••"
                                                        required
                                                    />
                                                </div>
                                            </div>

                                            <div className="d-flex justify-content-between align-items-center mb-3">
                                                <div className="form-check">
                                                    <input className="form-check-input form-check-input-light fs-14" type="checkbox" id="rememberMe" />
                                                    <label className="form-check-label" htmlFor="rememberMe">Keep me signed in</label>
                                                </div>

                                                <Link
                                                    href="/auth-2/reset-password"
                                                    className="text-decoration-underline link-offset-3 text-muted"
                                                >
                                                    Forgot Password?
                                                </Link>
                                            </div>

                                            <div className="d-grid">
                                                <Button type="submit" className="btn btn-primary fw-semibold py-2">
                                                    Sign In
                                                </Button>
                                            </div>
                                        </Form>

                                        <p className="text-muted text-center mt-4 mb-0">
                                            New here?{' '}
                                            <Link
                                                href="/auth-2/sign-up"
                                                className="text-decoration-underline link-offset-3 fw-semibold"
                                            >
                                                Create an account
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
    )
}

export default SignIn