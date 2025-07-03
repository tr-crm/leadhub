import avatar from '@/assets/images/users/user-1.jpg'
import AppLogo from "@/components/AppLogo"
import { author, currentYear } from "@/helpers"
import type { Metadata } from "next"
import Image from "next/image"
import Link from "next/link"
import { Button, Card, CardBody, Col, Form, FormControl, InputGroup, Row } from "react-bootstrap"

export const metadata: Metadata = { title: "Lock Screen" }

const LockScreen = () => {
    return (
        <div className="auth-box p-0 w-100">
            <Row className="w-100 g-0">
                <Col>
                    <div className="h-100 position-relative card-side-img rounded-0 overflow-hidden">
                        <div className="p-4 card-img-overlay auth-overlay d-flex align-items-end justify-content-center">
                        </div>
                    </div>
                </Col>

                <Col xl="auto">
                    <Card className="auth-box-form border-0 mb-0">
                        <CardBody className="min-vh-100 d-flex flex-column justify-content-center">
                            <div className="auth-brand mb-0 text-center">
                                <AppLogo />
                            </div>

                            <div className="mt-auto text-center">
                                <h4 className="fw-bold">Lock Screen ! | IN+</h4>
                                <p className="text-muted mx-auto mb-5">Let&apos;s get you signed in. Enter your PIN to continue</p>

                                <div className="text-center mb-4">
                                    <Image
                                        src={avatar}
                                        className="rounded-circle img-thumbnail avatar-xxl mb-2"
                                        alt="thumbnail"
                                        width={120}
                                        height={120}
                                    />
                                    <h5 className="fs-md">Damian D.</h5>
                                </div>

                                <Form>
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

                                    <div className="d-grid">
                                        <Button type="submit" className="btn btn-primary fw-semibold py-2">
                                            Unlock
                                        </Button>
                                    </div>
                                </Form>

                                <p className="mt-4 text-muted text-center mb-4">
                                    Not you? Return to{' '}
                                    <Link href="/auth-3/sign-in" className="text-decoration-underline link-offset-3 fw-semibold">
                                        Sign in
                                    </Link>
                                </p>
                            </div>

                            <p className="text-center text-muted mt-auto mb-0">
                                © 2014 -{' '}
                                <span >{currentYear}</span> INSPINIA — by{' '}
                                <span className="fw-semibold">{author}</span>
                            </p>
                        </CardBody>
                    </Card>
                </Col>
            </Row>
        </div>
    )
}

export default LockScreen