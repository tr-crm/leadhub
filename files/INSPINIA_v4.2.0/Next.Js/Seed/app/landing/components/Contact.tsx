import React from 'react';
import { Container, Row, Col, Form, Button, FormLabel, FormControl } from 'react-bootstrap';
import { LuMail, LuMapPin, LuPhoneCall } from 'react-icons/lu';

const Contact = () => {
  return (
    <section className="section-custom" id="contact">
      <Container>
        <Row>
          <Col xs={12} className="text-center">
            <span className="text-muted rounded-3 d-inline-block">📞 We're Here to Help</span>
            <h2 className="mt-3 fw-bold mb-5">Get in Touch with <mark className="fst-italic">Our Team</mark></h2>
          </Col>
        </Row>

        <Row>
          <Col xxl={4}>
            <div className="p-4">
              <div className="d-flex gap-3 mb-5">
                <div className="avatar-xl flex-shrink-0">
                  <span className="avatar-title bg-secondary-subtle text-secondary rounded-circle fs-22">
                    <LuPhoneCall />
                  </span>
                </div>
                <div>
                  <span className="text-muted">Contact Numbers</span>
                  <h5 className="my-2">+1 (800) 123-4567</h5>
                  <h5 className="mb-0">+1 (415) 987-6543</h5>
                </div>
              </div>

              <div className="d-flex gap-3 mb-5">
                <div className="avatar-xl flex-shrink-0">
                  <span className="avatar-title bg-secondary-subtle text-secondary rounded-circle fs-22">
                    <LuMail />
                  </span>
                </div>
                <div>
                  <span className="text-muted">Email</span>
                  <h5 className="my-2">support@yourcompany.com</h5>
                  <h5 className="mb-0">info@yourcompany.com</h5>
                </div>
              </div>

              <div className="d-flex gap-3">
                <div className="avatar-xl flex-shrink-0">
                  <span className="avatar-title bg-secondary-subtle text-secondary rounded-circle fs-22">
                    <LuMapPin />
                  </span>
                </div>
                <div>
                  <span className="text-muted">Address</span>
                  <h5 className="my-1 lh-lg">
                    INSPINIA HQ, 123 Market Street, 5th Floor, Financial District, San Francisco, CA 94103, United States
                  </h5>
                </div>
              </div>
            </div>
          </Col>

          <Col xxl={8}>
            <Form className="p-4 border rounded-4 border-dashed">
              <Row className="g-3">
                <Col md={6}>
                  <FormLabel htmlFor="name">Full Name</FormLabel>
                  <FormControl type="text" className="py-2" id="name" autoComplete="name" placeholder="Enter your full name" />
                </Col>

                <Col md={6}>
                  <FormLabel htmlFor="email">Email Address</FormLabel>
                  <FormControl type="email" className="py-2" id="email" autoComplete="email" placeholder="Enter your email" />
                </Col>

                <Col md={12}>
                  <FormLabel htmlFor="subject">Subject</FormLabel>
                  <FormControl type="text" className="py-2" id="subject" placeholder="What’s the reason for contact?" />
                </Col>

                <Col md={12}>
                  <FormLabel htmlFor="message">Message</FormLabel>
                  <FormControl as="textarea" className="py-2" id="message" rows={5} placeholder="Write your message here..." />
                </Col>

                <Col md={12} className="text-end">
                  <Button type="submit" variant='primary' className="rounded-pill">Send Message</Button>
                </Col>
              </Row>
            </Form>
          </Col>
        </Row>
      </Container>
    </section>
  );
};

export default Contact;
