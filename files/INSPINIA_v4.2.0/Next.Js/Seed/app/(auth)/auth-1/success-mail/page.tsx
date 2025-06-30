import AppLogo from "@/components/AppLogo"
import { Button, Card, Col, Container, Form, Row } from "react-bootstrap"
import checkmark from '@/assets/images/checkmark.png';
import Image from "next/image";
import { author, currentYear } from "@/helpers";
import type { Metadata } from "next";

export const metadata: Metadata = { title: "Success Mail" }

const SuccessMail = () => {
    return (
        <div className="auth-box overflow-hidden align-items-center d-flex">
            <Container>
                <Row className="justify-content-center">
                    <Col xxl={4} md={6} sm={8}>
                        <div className="auth-brand text-center mb-4">
                            <AppLogo />
                            <h4 className="fw-bold mt-3">Welcome to IN+</h4>
                            <p className="text-muted w-lg-75 mx-auto">
                                Awesome! You&apos;ve read the important message like a pro.
                            </p>
                        </div>

                        <Card className="p-4 rounded-4">
                            <Form>
                                <div className="mb-4">
                                    <div className="avatar-xxl mx-auto mt-2">
                                        <div className="avatar-title bg-light-subtle border border-light border-dashed rounded-circle">
                                            <Image src={checkmark} alt="checkmark" height="64" />
                                        </div>
                                    </div>
                                </div>

                                <h4 className="fw-bold text-center mb-4">Well Done! Email verified Successfully</h4>

                                <div className="d-grid">
                                    <Button type="submit" className="btn btn-primary fw-semibold py-2">
                                        Back to Dashboard
                                    </Button>
                                </div>
                            </Form>
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

export default SuccessMail