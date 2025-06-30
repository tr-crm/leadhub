"use client"

import {Button, Container, FormControl} from "react-bootstrap";
import MegaMenu from "@/layouts/components/topbar/components/MegaMenu";
import LanguageDropdown from "@/layouts/components/topbar/components/LanguageDropdown";
import MessageDropdown from "@/layouts/components/topbar/components/MessageDropdown";
import NotificationDropdown from "@/layouts/components/topbar/components/NotificationDropdown";
import CustomizerToggler from "@/layouts/components/topbar/components/CustomizerToggler";
import ThemeToggler from "@/layouts/components/topbar/components/ThemeToggler";
import UserProfile from "@/layouts/components/topbar/components/UserProfile";
import {LuSearch} from "react-icons/lu";
import {TbMenu4} from "react-icons/tb";
import {useLayoutContext} from "@/context/useLayoutContext";
import Link from "next/link";
import Image from "next/image";

import logo from "@/assets/images/logo.png"
import logoSm from "@/assets/images/logo-sm.png"
import logoDark from "@/assets/images/logo-black.png"

const Topbar = () => {

    const {sidenav, changeSideNavSize, showBackdrop} = useLayoutContext()

    const toggleSideNav = () => {
        const html = document.documentElement;
        const currentSize = html.getAttribute('data-sidenav-size');

        if (currentSize === 'offcanvas') {
            html.classList.toggle('sidebar-enable')
            showBackdrop()
        } else if (sidenav.size === 'compact') {
            changeSideNavSize(currentSize === 'compact' ? 'condensed' : 'compact', false);
        } else {
            changeSideNavSize(currentSize === 'condensed' ? 'default' : 'condensed');
        }
    }

    return (
        <header className="app-topbar">
            <Container fluid className="topbar-menu">
                <div className="d-flex align-items-center gap-2">

                    <div className="logo-topbar">
                        <Link href="/" className="logo-light">
                            <span className="logo-lg">
                                <Image src={logo.src} alt="logo" width={92.3} height={26}/>
                            </span>
                            <span className="logo-sm">
                                <Image src={logoSm.src} alt="small logo" width={30.55} height={26}/>
                            </span>
                        </Link>

                        <Link href="/" className="logo-dark">
                            <span className="logo-lg">
                                <Image src={logoDark.src} alt="dark logo" width={92.3} height={26}/>
                            </span>
                            <span className="logo-sm">
                                <Image src={logoSm.src} alt="small logo" width={30.55} height={26}/>
                            </span>
                        </Link>
                    </div>

                    <Button variant="primary" onClick={toggleSideNav} className="sidenav-toggle-button btn-icon">
                        <TbMenu4 className="fs-22"/>
                    </Button>

                    <div className="app-search d-none d-xl-flex">
                        <FormControl type="search" className="topbar-search" name="search"
                                     placeholder="Search for something..."/>
                        <LuSearch className="app-search-icon text-muted"/>
                    </div>

                    <MegaMenu/>
                </div>

                <div className="d-flex align-items-center gap-2">
                    <LanguageDropdown/>

                    <MessageDropdown/>

                    <NotificationDropdown/>

                    <CustomizerToggler/>

                    <ThemeToggler/>

                    <UserProfile/>
                </div>
            </Container>
        </header>
    )
}

export default Topbar