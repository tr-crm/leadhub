import Image from "next/image"
import bgPattern from '@/assets/images/bg-pattern.png'
import { Col, Row } from "react-bootstrap"
import TestimonialCard from "./TestimonialCard"
import type { TestimonialType } from "./types"

import user1 from '@/assets/images/users/user-1.jpg'
import user2 from '@/assets/images/users/user-2.jpg'
import user3 from '@/assets/images/users/user-3.jpg'
import user4 from '@/assets/images/users/user-4.jpg'
import user5 from '@/assets/images/users/user-5.jpg'

import client1 from '@/assets/images/clients/01.svg'
import client2 from '@/assets/images/clients/02.svg'
import client3 from '@/assets/images/clients/03.svg'
import client4 from '@/assets/images/clients/04.svg'
import client5 from '@/assets/images/clients/05.svg'
import client6 from '@/assets/images/clients/06.svg'
import client7 from '@/assets/images/clients/07.svg'
import Link from "next/link"

const Testimonials = () => {
    const testimonials: TestimonialType[] = [
        {
            avatar: user1,
            name: 'Emily Carter',
            title: 'Absolutely love it!',
            description: 'This gadget exceeded all my expectations. Sleek design and incredible performance!'
        },
        {
            avatar: user2,
            name: 'Michael Zhang',
            title: 'Great value for money',
            description: 'Sturdy build and long battery life. Would definitely recommend it to friends!'
        },
        {
            avatar: user3,
            name: 'Sara Lopez',
            title: 'Top-notch customer service',
            description: 'The team helped me with my issue right away. Smooth experience overall!'
        },
        {
            avatar: user4,
            name: 'James Whitman',
            title: 'Highly impressed',
            description: 'The performance and features are unmatched in this price range. Highly impressed!'
        },
        {
            avatar: user5,
            name: 'Aisha Khan',
            title: 'Smooth experience from start to finish',
            description: 'The website, shipping, and support all worked flawlessly. Very satisfied!'
        }
    ];

    const clients = [client1, client2, client3, client4, client5, client6, client7];
    return (
        <section className="section-custom position-relative overflow-hidden" id="reviews">
            <div className="position-absolute top-0 start-50 translate-middle-x mt-5 opacity-50">
                <Image src={bgPattern} alt="" />
            </div>

            <div className="container position-relative">
                <Row>
                    <Col xs={12} className="text-center">
                        <span className="text-muted rounded-3 d-inline-block">
                            💬 What Our Customers Are Saying
                        </span>
                        <h2 className="mt-3 fw-bold mb-5">
                            Real Feedback from <mark className="fst-italic">Satisfied</mark> Clients
                        </h2>
                    </Col>
                </Row>

                <Row className="justify-content-center">
                    {testimonials.map((testimonial, idx) => (
                        <Col lg={4} key={idx} className="mb-4">
                            <TestimonialCard testimonial={testimonial} />
                        </Col>
                    ))}
                </Row>

                <Row className="justify-content-center mt-5">
                    <Col xxl={9}>
                        <div className="d-flex justify-content-center align-items-center flex-wrap gap-5 mt-4">
                            {clients.map((logo, i) => (
                                <div key={i}>
                                    <Link href="" className="d-block">
                                        <Image src={logo} alt="logo" height="42" />
                                    </Link>
                                </div>
                            ))}
                        </div>
                    </Col>
                </Row>
            </div>
        </section>
    )
}

export default Testimonials