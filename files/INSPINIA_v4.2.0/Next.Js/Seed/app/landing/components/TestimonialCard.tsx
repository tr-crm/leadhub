import Image from "next/image"
import { Card, CardBody } from "react-bootstrap"
import { TbStarFilled } from "react-icons/tb"
import type { TestimonialType } from "./types"

const TestimonialCard = ({ testimonial }: { testimonial: TestimonialType }) => {
    return (
        <Card className="card border-light rounded-4 p-3 card-h-100">
            <CardBody className="pb-0 text-center">
                <div className="avatar avatar-xl mx-auto mb-3">
                    <Image
                        src={testimonial.avatar}
                        alt={testimonial.name}
                        className="img-fluid rounded-circle"
                    />
                </div>
                <span className="text-warning fs-lg mb-3 d-flex align-items-center justify-content-center gap-1">
                    {Array(5).fill(5).map((_star,idx) => (
                        <span key={idx}>
                            <TbStarFilled />
                        </span>
                    ))}
                </span>
                <h4 className="mb-2 fs-md">{testimonial.title}</h4>
                <p className="text-muted mb-3 fst-italic fs-sm">"{testimonial.description}"</p>
            </CardBody>
        </Card>
    )
}

export default TestimonialCard