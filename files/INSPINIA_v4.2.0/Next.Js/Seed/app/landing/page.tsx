import type { Metadata } from "next"
import Blogs from "./components/Blogs"
import CTA from "./components/CTA"
import Features from "./components/Features"
import Header from "./components/Header"
import Hero from "./components/Hero"
import PricingPlans from "./components/PricingPlans"
import Services from "./components/Services"
import Testimonials from "./components/Testimonials"
import Contact from "./components/Contact"
import Footer from "./components/Footer"

export const metadata: Metadata = { title: 'One Page' }

const Landing = () => {
    return (
        <div className="bg-body-secondary">
            <Header />
            <Hero />
            <Services />
            <Features />
            <PricingPlans />
            <CTA />
            <Testimonials />
            <Blogs />
            <Contact />
            <Footer />
        </div>
    )
}

export default Landing