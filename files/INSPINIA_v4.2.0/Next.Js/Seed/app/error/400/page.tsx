import AppLogo from "@/components/AppLogo"
import { author, currentYear } from "@/helpers"
import type { Metadata } from "next"
import Link from "next/link"
import { Col, Container, Row } from "react-bootstrap"

export const metadata: Metadata = { title: "Error 400" }

const Error400 = () => {
    return (
        <div className="auth-box overflow-hidden align-items-center d-flex">
            <Container>
                <Row className="justify-content-center">
                    <Col xxl={4} md={6} sm={8}>
                        <div className="auth-brand text-center mb-3">
                            <AppLogo />
                        </div>

                        <div className="p-2 text-center">
                            <div className="error-glitch" data-text="400">400</div>
                            <h3 className="fw-bold text-uppercase">Bad Request</h3>
                            <p className="text-muted">Something&apos;s not right in the request you made.</p>

                            <Link href="/"
                                className="btn btn-primary mt-3 rounded-pill"
                            >
                                Go Home
                            </Link>
                        </div>

                        <p className="text-center text-muted mt-5 mb-0">
                            © 2014 - {currentYear} INSPINIA — by <span className="fw-bold">{author}</span>
                        </p>
                    </Col>
                </Row>
            </Container>
        </div>
    )
}

export default Error400