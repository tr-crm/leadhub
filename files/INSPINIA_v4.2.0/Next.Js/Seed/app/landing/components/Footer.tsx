import { Col, Container, Row } from "react-bootstrap"

import logoWhite from '@/assets/images/logo-white.png'
import Image from "next/image"
import Link from "next/link"
import { author } from "@/helpers"
import type { footerLinksType, socialLinksType } from "./types"
import { LuDribbble, LuFacebook, LuInstagram } from "react-icons/lu"
import { TbBrandX } from "react-icons/tb"

const Footer = () => {
    const socialLinks: socialLinksType[] = [
        { title: 'Facebook', icon: LuFacebook, url: '', },
        { title: 'Twitter-x', icon: TbBrandX, url: '', },
        { title: 'Instagram', icon: LuInstagram, url: '', },
        { title: 'WhatsApp', icon: LuDribbble, url: '', },
    ];

    const footerLinks: footerLinksType[] = [
        {
            title: 'Company',
            links: [
                { name: 'Our Story', url: '' },
                { name: 'Leadership Team', url: '' },
                {
                    name: 'Careers',
                    url: '',
                    badge: { title: "We're Hiring", variant: 'warning' }
                },
                { name: 'Press & Media', url: '' },
                { name: 'Investor Relations', url: '' },
                { name: 'Sustainability', url: '' },
            ],
        },
        {
            title: 'Community',
            links: [
                { name: 'Community Forum', url: '' },
                { name: 'Events & Meetups', url: '' },
                { name: 'Ambassadors', url: '' },
                { name: 'Customer Stories', url: '' },
                { name: 'Open Source', url: '' },
                { name: 'Code of Conduct', url: '' },
            ],
        },
        {
            title: 'Admin',
            links: [
                { name: 'Dashboard', url: '' },
                { name: 'User Management', url: '' },
                { name: 'Roles & Permissions', url: '' },
                { name: 'System Logs', url: '' },
                { name: 'Settings', url: '' },
                { name: 'API Access', url: '' },
            ],
        }
    ];
    return (
        <footer className="section-custom section-footer pb-2">
            <Container>
                <Row className="g-4 justify-content-between">
                    <div className="col-lg-3">
                        <Image src={logoWhite} alt="logo" height={30} />
                        <p className="mt-3 fs-sm">INSPINIA is the top-selling admin dashboard template on WrapBootstrap, known for its sleek design, flexibility, and powerful features. Build modern web applications with ease using the best in class!</p>
                        <div className="d-flex gap-2 mt-4 mb-2">
                            {socialLinks.map(({ icon: Icon, title, url }, idx) => (
                                <Link href={url} className="btn btn-sm btn-icon rounded-circle btn-dark" title={title} key={idx}>
                                    <Icon className="fs-sm" />
                                </Link>
                            ))}
                        </div>
                    </div>
                    <Col lg={8} xxl={7}>
                        <Row className="g-4">
                            {footerLinks.map((section, index) => (
                                <Col key={index} xs={6} md={4}>
                                    <h5 className="text-white mb-4 ps-2">{section.title}</h5>
                                    <ul className="nav flex-column">
                                        {section.links.map((link, i) => (
                                            <li className="nav-item" key={i}>
                                                    <Link href={link.url} className={`nav-link ${i === 0 && 'pt-0'}`}>
                                                        {link.name}
                                                        {link.badge && (
                                                            <span className={`ms-2 badge text-bg-${link.badge.variant}`}>
                                                                {link.badge.title}
                                                            </span>
                                                        )}
                                                    </Link>
                                            </li>
                                        ))}
                                    </ul>
                                </Col>
                            ))}
                        </Row>
                    </Col>
                </Row>
                <Row className="mt-5">
                    <Col xs={12} className="text-center">
                        <p className="mb-4">© 2014 -  Inspinia By <span className="fw-semibold">{author}</span> </p>
                    </Col>
                </Row>
            </Container>
        </footer>

    )
}

export default Footer