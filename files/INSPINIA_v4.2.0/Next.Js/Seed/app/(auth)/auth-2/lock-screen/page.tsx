import avatar from '@/assets/images/users/user-1.jpg'
import AppLogo from "@/components/AppLogo"
import { author, currentYear } from "@/helpers"
import type { Metadata } from "next"
import Image from "next/image"
import Link from "next/link"
import { Button, Card, Col, Form, FormControl, FormLabel, InputGroup, Row } from "react-bootstrap"
import { TbLockPassword } from 'react-icons/tb'

export const metadata: Metadata = { title: "Lock Screen" }

const LockScreen = () => {
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
                                            <h4 className="fw-bold mt-4">Lock Screen ! | IN+</h4>
                                            <p className="text-muted w-lg-75 mx-auto">
                                                This screen is locked. Enter your password to continue.
                                            </p>
                                        </div>

                                        <div className="text-center mb-4">
                                            <Image
                                                src={avatar}
                                                alt="thumbnail"
                                                className="rounded-circle img-thumbnail avatar-xxl mb-2"
                                            />
                                            <h5 className="fs-md">Damian D.</h5>
                                        </div>

                                        <Form>
                                            <div className="mb-3">
                                                <FormLabel htmlFor="userPassword" className="form-label">
                                                    Password <span className="text-danger">*</span>
                                                </FormLabel>
                                                <InputGroup>
                                                    <span className="input-group-text bg-light">
                                                        <TbLockPassword className="text-muted fs-xl" />
                                                    </span>
                                                    <FormControl
                                                        type="password"
                                                        id="userPassword"
                                                        placeholder="••••••••"
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

                                        <p className="text-muted text-center mt-4 mb-0">
                                            Not you? Return to{' '}
                                            <Link
                                                href="/auth-2/sign-in"
                                                className="text-decoration-underline link-offset-3 fw-semibold"
                                            >
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

export default LockScreen