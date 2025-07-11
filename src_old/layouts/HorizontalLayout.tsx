import {Fragment} from "react";
import Topbar from "@/layouts/components/topbar";
import Footer from "@/layouts/components/footer";
import Customizer from "@/layouts/components/customizer";
import ResponsiveNavbar from "@/layouts/components/responsive-navbar";
import {type ChildrenType} from "@/types";

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