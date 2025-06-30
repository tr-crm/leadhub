import { Col, Container, Row } from "react-bootstrap";
import { TbBulb, TbCamera, TbChartBar, TbMail, TbShieldCheck, TbShoppingCart, TbSpeakerphone, TbWorld } from "react-icons/tb";
import ServiceCard from "./ServiceCard";

import type { ServiceType } from "./types";

const Services = () => {
    const services: ServiceType[] = [
        {
            name: 'Digital Strategy',
            description: 'Crafting data-driven strategies to maximize online growth and brand engagement.',
            icon: TbBulb
        },
        {
            name: 'SEO Optimization',
            description: 'Improve search engine rankings and increase website visibility through tailored SEO practices.',
            icon: TbChartBar
        },
        {
            name: 'Social Media Marketing',
            description: 'Engage your audience across platforms with strategic content and campaign management.',
            icon: TbSpeakerphone
        },
        {
            name: 'Web Development',
            description: 'Building fast, responsive, and scalable websites that meet your business needs.',
            icon: TbWorld
        },
        {
            name: 'Email Marketing',
            description: 'Connect with your audience and boost conversions through targeted email campaigns.',
            icon: TbMail
        },
        {
            name: 'E-Commerce Solutions',
            description: 'Launch and manage high-performing online stores with secure, scalable features.',
            icon: TbShoppingCart
        },
        {
            name: 'Content Creation',
            description: 'Produce compelling visuals and copy to drive traffic and build brand identity.',
            icon: TbCamera
        },
        {
            name: 'Security Audits',
            description: 'Ensure your website and data are secure with comprehensive vulnerability assessments.',
            icon: TbShieldCheck
        }
    ];
    return (
        <section className="section-custom pb-5" id="services">
            <Container>
                <Row>
                    <Col xs={12} className="text-center">
                        <span className="text-muted rounded-3 d-inline-block">
                            🚀 Empowering your digital journey
                        </span>
                        <h2 className="mt-3 fw-bold mb-5">
                            Discover Our <mark className="fst-italic">Core Services</mark> and Capabilities
                        </h2>
                    </Col>
                </Row>

                <Row>
                    {services.map((service, idx) => (
                        <Col key={idx} xl={3} md={6}>
                            <ServiceCard service={service}/>
                        </Col>
                    ))}
                </Row>
            </Container>
        </section>
    )
}

export default Services