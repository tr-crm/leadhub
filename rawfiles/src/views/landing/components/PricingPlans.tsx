import { Col, Container, Row } from "react-bootstrap";
import type { PricingPlanType } from "./types";
import PricingCard from "./PricingCard";

const PricingPlans = () => {
    const pricingPlans: PricingPlanType[] = [
        {
            name: 'Single License',
            price: 49,
            description: 'Perfect for personal or one-client projects',
            highlight: 'Single project use',
            features: [
                { text: '1 project usage', included: true },
                { text: 'Full component access', included: true },
                { text: 'Basic documentation', included: true },
                { text: 'No multi-client use', included: false },
                { text: 'No SaaS/resale rights', included: false },
            ],
            btnClass: 'btn-outline-primary',
        },
        {
            name: 'Multiple License',
            price: 249,
            description: 'For developers or agencies working with multiple clients',
            highlight: 'Up to 5 projects',
            features: [
                { text: 'Use in up to 5 projects', included: true },
                { text: 'Commercial client use', included: true },
                { text: 'Lifetime updates', included: true },
                { text: 'Premium support', included: true },
                { text: 'No resale/SaaS rights', included: false },
            ],
            btnClass: 'btn-primary',
            isPopular: true,
        },
        {
            name: 'Extended License',
            price: 999,
            description: 'For SaaS products or items offered in paid applications',
            highlight: 'Commercial redistribution rights',
            features: [
                { text: 'Unlimited project usage', included: true },
                { text: 'SaaS & resale rights', included: true },
                { text: 'Full Figma source files', included: true },
                { text: 'Priority support', included: true },
                { text: 'Custom licensing agreement', included: true },
            ],
            btnClass: 'btn-dark',
        },
    ];
    return (
        <section className="section-custom" id="plans">
            <Container>
                <Row>
                    <Col xs={12} className="text-center">
                        <span className="text-muted rounded-3 d-inline-block">
                            💰 Transparent and flexible pricing
                        </span>
                        <h2 className="mt-3 fw-bold mb-5">
                            Choose the <mark className="fst-italic">License</mark> That Fits Your Needs
                        </h2>
                    </Col>
                </Row>

                <Row className="justify-content-center">
                    <Col xxl={10}>
                        <Row>
                            {pricingPlans.map((plan, idx) => (
                                <Col lg={4} key={idx} className={`${plan.isPopular && 'my-4 my-lg-0'}`}>
                                    <PricingCard plan={plan} />
                                </Col>
                            ))}
                        </Row>
                    </Col>
                </Row>
            </Container>
        </section>
    )
}

export default PricingPlans