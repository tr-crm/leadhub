import { Card, CardBody, CardFooter } from "react-bootstrap"
import type { ServiceType } from "./types"
import Link from "next/link"
import { TbArrowRight } from "react-icons/tb"

const ServiceCard = ({ service }: { service: ServiceType }) => {
    const { description, icon: Icon, name } = service
    return (
        <Card className="border-0 p-2 card-h-100">
            <CardBody className="pb-0">
                <div className="avatar-xl mb-3">
                    <span className="avatar-title text-bg-secondary rounded-circle fs-22">
                        <Icon />
                    </span>
                </div>
                <h4 className="mb-2">{name}</h4>
                <p className="text-muted mb-3">{description}</p>
            </CardBody>
            <CardFooter className="border-0 pt-0">
                <Link className="link-primary fw-semibold" href="">Know more<TbArrowRight className="ms-2 align-middle" /></Link>
            </CardFooter>
        </Card>

    )
}

export default ServiceCard