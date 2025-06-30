import Image from 'next/image'
import Link from 'next/link'
import React from 'react'
import { Col, Container, Row } from 'react-bootstrap'
import { TbBasket, TbConfetti } from 'react-icons/tb'

import user1 from '@/assets/images/users/user-1.jpg'
import user2 from '@/assets/images/users/user-2.jpg'
import user7 from '@/assets/images/users/user-7.jpg'
import user8 from '@/assets/images/users/user-8.jpg'
import user9 from '@/assets/images/users/user-9.jpg'
import bgPattern from '@/assets/images/bg-pattern.png'
import dashboardImg from '@/assets/images/dashboard-1.png'

const Hero = () => {
    const users = [user1, user2, user7, user8, user9]
    return (
        <section className="bg-light bg-opacity-50 border-top border-light position-relative" id="home">
            <div className="position-absolute top-0 start-50 translate-middle-x mt-5">
                <Image src={bgPattern} alt="pattern" />
            </div>

            <Container className="pt-5 position-relative">
                <Row>
                    <Col lg={8} className="mx-auto text-center">
                        <span className="fw-semibold text-muted fst-italic">
                            Trusted by 50k+ happy customers
                        </span>

                        <div className="avatar-group avatar-group-sm justify-content-center mt-2 d-flex gap-1">
                            {users.map((user, idx) => (
                                <div className="avatar" key={idx}>
                                    <Image
                                        src={user}
                                        alt={`User-${idx}`}
                                        className="avatar-sm rounded-circle"
                                    />
                                </div>
                            ))}
                        </div>

                        <h1 className="my-4 fs-36 fw-bold lh-base">
                            The #1 <span className="text-primary">Admin Dashboard</span> Template on WrapBootstrap –{' '}
                            <span className="fst-italic text-muted">Trusted by Thousands</span>
                        </h1>

                        <p className="mb-4 fs-sm text-muted lh-lg">
                            Build powerful, modern web applications with our top-rated Admin Dashboard Template.
                            Designed for performance, flexibility, and ease of customization, it’s the perfect solution
                            for startups, agencies, and enterprise teams.
                        </p>

                        <div className="d-flex gap-2 flex-wrap justify-content-center">
                            <Link href="/" className="btn btn-secondary py-2 fw-semibold d-flex align-items-center">
                                <TbBasket className="fs-xl me-2" /> Buy Now!
                            </Link>
                            <a
                                className="btn btn-light py-2 fw-semibold d-flex align-items-center"
                                href="https://wrapbootstrap.com/user/WebAppLayers/message"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                <TbConfetti className="fs-xl me-2" /> Contact Us
                            </a>
                        </div>
                    </Col>
                </Row>

                <Container className="position-relative">
                    <Row>
                        <Col md={10} className="mx-auto position-relative">
                            <figure className="position-absolute top-0 start-0 translate-middle mt-5 opacity-50">
                                <svg width="111" height="170" viewBox="0 0 111 170" fill="#1ab394" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M99.2319 7.37436C100.054 7.30936 101.638 15.7474 102.856 26.059C104.147 36.3089 105.01 48.3589 105.287 55.3911C105.778 69.3822 104.459 80.6992 102.753 80.7559C100.986 80.7391 99.5737 69.5262 99.0765 55.6027C98.7941 48.638 98.612 36.5788 98.4807 26.2931C98.3494 16.0074 98.3422 7.43353 99.2319 7.37436Z" />
                                <path d="M80.3888 75.0118C79.555 75.2119 77.8208 71.6599 75.6665 67.4591C73.5063 63.3259 70.8525 58.6057 69.3802 55.9609C66.4471 50.5361 64.4804 45.7392 65.8687 44.6345C67.1836 43.5915 71.6484 47.0394 74.8842 52.8986C76.5416 55.7636 78.7318 61.1241 79.8822 65.9185C81.0327 70.7128 81.2226 74.8118 80.3888 75.0118Z" />
                                <path d="M61.7883 89.4615C61.3805 90.2428 54.8078 87.5652 47.1688 83.8428C39.5297 80.1205 30.9035 75.2241 26.0659 72.1522C16.3908 66.0084 9.53733 59.4962 10.5438 58.0863C11.5502 56.6764 19.903 60.8007 29.4489 66.8652C34.2189 69.9313 42.3932 75.3329 49.4043 80.0217C56.4097 84.7779 62.1902 88.7478 61.7883 89.4615Z" />
                                <path d="M46.1586 113.626C46.0151 114.498 42.6533 114.82 38.7186 114.684C34.7105 114.609 30.1297 114.077 27.4574 113.506C22.1804 112.369 18.3033 109.993 18.7195 108.328C19.1356 106.663 23.5897 106.299 28.7317 107.424C31.2689 107.984 35.6563 109.18 39.43 110.39C43.2037 111.601 46.2962 112.821 46.1586 113.626Z" />
                                <path d="M52.2364 144.838C52.4365 145.672 46.3447 147.663 39.1256 150.101C31.9065 152.538 23.5601 155.423 18.719 157.114C9.04856 160.36 0.851466 162.305 0.169487 160.749C-0.512493 159.193 6.75837 154.583 16.7107 151.225C21.6868 149.545 30.3976 147.169 38.0635 145.858C45.6002 144.469 52.0363 144.005 52.2364 144.838Z" />
                                </svg>
                            </figure>

                            <Image
                                src={dashboardImg}
                                className="rounded-top-4 shadow-lg img-fluid mt-5"
                                alt="SaaS Dashboard"
                            />
                        </Col>
                    </Row>
                </Container>
            </Container>
        </section>
    )
}

export default Hero