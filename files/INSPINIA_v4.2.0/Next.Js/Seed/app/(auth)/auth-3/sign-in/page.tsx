import AppLogo from "@/components/AppLogo"
import { author, currentYear } from "@/helpers"
import type { Metadata } from "next"
import Link from "next/link"
import { Button, Card, CardBody, Col, Form, FormControl, InputGroup, Row } from "react-bootstrap"

export const metadata: Metadata = { title: "Sign In" }

const SignIn = () => {
    return (
        <div className="auth-box p-0 w-100">
            <Row className="w-100 g-0">
                <Col>
                    <div className="h-100 position-relative card-side-img rounded-0 overflow-hidden">
                        <div className="p-4 card-img-overlay auth-overlay d-flex align-items-end justify-content-center"></div>
                    </div>
                </Col>

                <Col md="auto">
                    <Card className="auth-box-form border-0 mb-0">
                        <CardBody className="min-vh-100 d-flex flex-column justify-content-center">
                            <div className="auth-brand mb-0 text-center">
                                <AppLogo />
                            </div>

                            <div className="mt-auto text-center">
                                <h4 className="fw-bold">Welcome to IN+</h4>
                                <p className="text-muted auth-sub-text mx-auto">
                                    Let’s get you signed in. Enter your email and password to continue.
                                </p>

                                <Form className="mt-4">
                                    <div className="mb-3">
                                        <InputGroup>
                                            <FormControl
                                                type="email"
                                                className="py-2 px-3 bg-light bg-opacity-40 border-light"
                                                id="userEmail"
                                                placeholder="Enter username or email"
                                                required
                                            />
                                        </InputGroup>
                                    </div>

                                    <div className="mb-3">
                                        <InputGroup>
                                            <FormControl
                                                type="password"
                                                className="py-2 px-3 bg-light bg-opacity-40 border-light"
                                                id="userPassword"
                                                placeholder="Enter password"
                                                required
                                            />
                                        </InputGroup>
                                    </div>

                                    <div className="d-flex justify-content-between align-items-center mb-3">
                                        <div className="form-check">
                                            <input
                                                className="form-check-input form-check-input-light fs-14"
                                                type="checkbox"
                                                id="rememberMe"
                                            />
                                            <label className="form-check-label" htmlFor="rememberMe">
                                                Keep me signed in
                                            </label>
                                        </div>

                                        <Link
                                            href="/auth-3/reset-password"
                                            className="text-decoration-underline link-offset-3 text-muted"
                                        >
                                            Forgot Password?
                                        </Link>
                                    </div>

                                    <div className="d-grid">
                                        <Button type="submit" className="btn btn-primary fw-bold py-2">
                                            Sign In
                                        </Button>
                                    </div>
                                </Form>
                            </div>

                            <p className="text-muted text-center mt-4 mb-0">
                                New here?{' '}
                                <Link
                                    href="/auth-3/sign-up"
                                    className="text-decoration-underline link-offset-3 fw-semibold"
                                >
                                    Create an account
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

export default SignIn