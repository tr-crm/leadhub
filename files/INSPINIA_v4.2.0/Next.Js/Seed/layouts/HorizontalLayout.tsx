'use client'
import {Fragment} from "react";
import Topbar from "@/layouts/components/topbar";
import Footer from "@/layouts/components/footer";
import Customizer from "@/layouts/components/customizer";
import dynamic from 'next/dynamic'
import {ChildrenType} from "@/types";

const ResponsiveNavbar = dynamic(() => import("@/layouts/components/responsive-navbar"), {ssr: false})

const HorizontalLayout = ({children}: ChildrenType) => {

    return (
        <Fragment>
            <div className="wrapper">

                <Topbar/>

                <ResponsiveNavbar/>

                <div className="content-page">

                    {children}

                    <Footer/>

                </div>

            </div>

            <Customizer/>

        </Fragment>
    )
}

export default HorizontalLayout