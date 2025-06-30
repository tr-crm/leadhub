import { Button, Card, Col, Container, Form, FormControl, FormLabel, Row } from "react-bootstrap"
import Image from "next/image"
import { author, currentYear } from "@/helpers"
import avatar from '@/assets/images/users/user-1.jpg'
import type { Metadata } from "next"
import Link from "next/link"

export const metadata: Metadata = { title: "Lock Screen" }

const LockScreen = () => {
    return (
        <div className="auth-box overflow-hidden align-items-center d-flex">
            <Container>
                <Row className="justify-content-center">
                    <Col xxl={4} md={6} sm={8}>
                        <div className="auth-brand text-center mb-4">

                            <h4 className="fw-bold mt-3">Lock Screen! | IN+</h4>
                            <p className="text-muted w-lg-75 mx-auto">
                                This screen is locked. Enter your password to continue
                            </p>
                        </div>

                        <Card className="p-4 rounded-4">
                            <div className="text-center mb-4">
                                <Image
                                    src={avatar}
                                    className="rounded-circle img-thumbnail avatar-xxl mb-2"
                                    alt="thumbnail"
                                />
                                <h5 className="fs-md">Damian D.</h5>
                            </div>

                            <Form>
                                <div className="mb-3">
                                    <FormLabel htmlFor="userPassword">
                                        Password <span className="text-danger">*</span>
                                    </FormLabel>
                                    <div className="input-group">
                                        <FormControl
                                            type="password"
                                            id="userPassword"
                                            placeholder="••••••••"
                                            required
                                        />
                                    </div>
                                </div>

                                <div className="d-grid">
                                    <Button type="submit" className="btn btn-primary fw-semibold py-2">
                                        Unlock
                                    </Button>
                                </div>
                            </Form>

                            <p className="text-muted text-center mt-4 mb-0">
                                Not you? Return to{' '}
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

export default LockScreen