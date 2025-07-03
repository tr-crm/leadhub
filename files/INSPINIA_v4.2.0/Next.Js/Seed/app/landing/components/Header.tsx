'use client';
import AppLogo from '@/components/AppLogo';
import { useLayoutContext } from '@/context/useLayoutContext';
import useScrollEvent from '@/hooks/useScrollEvent';
import Link from 'next/link';
import { useState } from 'react';
import { Alert, Button, Container, Nav, Navbar, NavbarBrand, NavbarCollapse, NavbarToggle, NavLink } from 'react-bootstrap';
import { TbContrast } from 'react-icons/tb';

const navItems = ['Home', 'Services', 'Features', 'Plans', 'Reviews', 'Blog', 'Contact'];

export default function Header() {
    const { theme, changeTheme } = useLayoutContext()

    const toggleTheme = () => {
        if (theme === "dark") {
            changeTheme('light')
            return;
        }
        changeTheme('dark');
        return;
    }
    const [isCollapsed, setIsCollapsed] = useState(true);
    const { scrollY } = useScrollEvent()

    return (
        <>
            <Alert variant="primary" className="top-alert text-center mb-0 rounded-0" dismissible closeVariant="white">
                <div className="fst-italic fw-medium">
                    🚀 INSPINIA 4.x is here! Now with Bootstrap 5, dark mode, and a refreshed UI.
                    Upgrade today for the best experience!
                    <a
                        href="https://wrapbootstrap.com/theme/inspinia-multipurpose-admin-dashboard-template-WB0R5L90S?ref=inspinia"
                        target="_blank"
                        rel="noopener noreferrer"
                        className="fw-semibold fst-normal text-white text-decoration-underline link-offset-3 ms-2"
                    >
                        Buy Now!
                    </a>
                </div>
            </Alert>

            <header>
                <Navbar
                    expand="lg"
                    className={`py-3 sticky-top ${scrollY > 100 && 'top-scroll-up top-fixed'}`}
                    id="landing-navbar"
                >
                    <Container>
                        <NavbarBrand className="auth-brand mb-0">
                            <AppLogo />
                        </NavbarBrand>

                        <NavbarToggle
                            aria-controls="navbarSupportedContent"
                            onClick={() => setIsCollapsed(!isCollapsed)}
                        />
                        <NavbarCollapse in={!isCollapsed} id="navbarSupportedContent">
                            <Nav className="fw-medium gap-2 fs-sm mx-auto mt-2 mt-lg-0">
                                {navItems.map((item, idx) => (
                                    <li className="nav-item" key={idx}>
                                        <NavLink
                                            className="nav-link"
                                            href={`#${item.toLowerCase()}`}
                                        >
                                            {item}
                                        </NavLink>
                                    </li>
                                ))}
                            </Nav>
                            <div className="d-flex align-items-center">
                                <Button variant="link" className="btn-icon fw-semibold text-body me-2" onClick={toggleTheme}>
                                    <TbContrast className="fs-22" />
                                </Button>
                                <Link href="/auth-sign-in" className="btn btn-link fw-semibold text-body ps-2">SIGN IN</Link>
                                <Link href="/auth-sign-up" className="btn btn-sm btn-primary ms-2">Sign Up</Link>
                            </div>
                        </NavbarCollapse>
                    </Container>
                </Navbar>
            </header>
        </>
    );
}
