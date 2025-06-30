import AppLogo from "@/components/AppLogo"
import { author, currentYear } from "@/helpers"
import type { Metadata } from "next"
import Link from "next/link"
import { Button, Card, Col, Container, Form, FormControl, FormLabel, Row } from "react-bootstrap"

export const metadata: Metadata = { title: "Sign In" }

const SignIn = () => {
    return (
        <div className="auth-box overflow-hidden align-items-center d-flex" style={{ minHeight: '100vh' }}>
            <Container>
                <Row className="justify-content-center">
                    <Col xxl={4} md={6} sm={8}>
                        <div className="auth-brand text-center mb-4">
                            <AppLogo />
                            <h4 className="fw-bold mt-3">Welcome to IN+</h4>
                            <p className="text-muted w-lg-75 mx-auto">
                                Let’s get you signed in. Enter your email and password to continue.
                            </p>
                        </div>

                        <Card className="p-4 rounded-4">
                            <Form >
                                <div className="mb-3 form-group" >
                                    <FormLabel>
                                        Email address <span className="text-danger">*</span>
                                    </FormLabel>
                                    <FormControl type="email" placeholder="you@example.com" required />
                                </div>

                                <div className="mb-3 form-group" >
                                    <FormLabel>
                                        Password <span className="text-danger">*</span>
                                    </FormLabel>
                                    <FormControl type="password" placeholder="••••••••" required />
                                </div>

                                <div className="d-flex justify-content-between align-items-center mb-3">
                                    <div className="form-check">
                                        <input className="form-check-input form-check-input-light fs-14" type="checkbox" id="rememberMe" />
                                        <label className="form-check-label" htmlFor="rememberMe">Keep me signed in</label>
                                    </div>
                                    <Link href="/auth-1/reset-password" className="text-decoration-underline link-offset-3 text-muted">Forgot Password?</Link>
                                </div>


                                <div className="d-grid">
                                    <Button type="submit" className="btn-primary fw-semibold py-2">
                                        Sign In
                                    </Button>
                                </div>
                            </Form>

                            <p className="text-muted text-center mt-4 mb-0">
                                New here?{' '}
                                <Link href="/auth-1/sign-up" className="text-decoration-underline link-offset-3 fw-semibold">
                                    Create an account
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

export default SignIn