import Link from "next/link"
import ctaImg from '@/assets/images/landing-cta.jpg'

const CTA = () => {
    return (
        <section>
            <div className="section-cta position-relative card-side-img overflow-hidden" style={{ backgroundImage: `url(${ctaImg.src})` }}>
                <div className="card-img-overlay d-flex align-items-center flex-column gap-3 justify-content-center auth-overlay text-center">
                    <h3 className="text-white fs-24 mb-0 fw-bold">
                        Build Faster with Our Premium Admin Template
                    </h3>
                    <p className="text-white text-opacity-75 fs-md">
                        Kickstart your project with a modern, responsive, and developer-friendly admin dashboard. <br /> Try it free for 14 days — no credit card needed.
                    </p>
                    <Link href="" className="btn btn-light rounded-pill">Buy Our Template</Link>
                </div>
            </div>
        </section>

    )
}

export default CTA