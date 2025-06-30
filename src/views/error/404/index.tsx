import AppLogo from "@/components/AppLogo"
import { author, currentYear } from "@/helpers"


import { Link } from "react-router";
import { Col, Container, Row } from "react-bootstrap"

import error404 from '@/assets/images/svg/404.svg'

const Error404 = () => {
    return (
        <div className="auth-box overflow-hidden align-items-center d-flex">
            <Container>
                <Row className="justify-content-center">
                    <Col xxl={4} md={6} sm={8}>
                        <div className="auth-brand text-center mb-3">
                            <AppLogo />
                        </div>

                        <div className="p-2 text-center">
                            <img src={error404} alt="404" className="img-fluid" />
                            <h3 className="fw-bold text-uppercase">Page Not Found</h3>
                            <p className="text-muted">
                                The page you’re looking for doesn’t exist or has been moved.
                            </p>

                            <Link to="/"
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

export default Error404