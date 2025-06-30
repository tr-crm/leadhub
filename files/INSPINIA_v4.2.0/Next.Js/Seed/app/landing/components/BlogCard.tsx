import Image from "next/image"
import type { BlogType } from "./types"
import { CardBody } from "react-bootstrap"
import Link from "next/link"
import { TbArrowRight, TbCalendar, TbEye, TbMessageCircle } from "react-icons/tb"

const BlogCard = ({ blog }: { blog: BlogType }) => {
    return (
        <article className="card rounded-3 border-0 shadow-sm">
            <div className="badge text-bg-dark badge-label position-absolute top-0 start-0 m-3">
                {blog.category}
            </div>

            <Image className="card-img-top rounded-top-3 img-fluid" src={blog.image} alt={blog.title} />

            <CardBody>
                <h6 className="card-title fs-lg lh-base mb-2">
                    <Link href={blog.url} className="link-reset">
                        {blog.title}
                    </Link>
                </h6>
                <p className="mb-3 text-muted">{blog.description}</p>

                <p className="d-flex flex-wrap gap-3 text-muted mb-0 mt-3 align-items-center fs-base">
                    <span><TbCalendar className="fs-md" /> {blog.date}</span>
                    <span>
                        <TbMessageCircle className="fs-md" />{' '}
                        <Link href="" className="link-reset">{blog.comments}</Link>
                    </span>
                    <span><TbEye className="fs-md" /> {blog.views}</span>
                </p>
            </CardBody>

            <div className="card-footer bg-transparent d-flex justify-content-between border-0">
                <div className="d-flex justify-content-start align-items-center gap-2">
                    <div className="avatar avatar-xs">
                        <Image src={blog.author.image} alt={blog.author.name} className="img-fluid rounded-circle" />
                    </div>
                    <div>
                        <h5 className="text-nowrap fs-sm mb-0 lh-base">
                            <a href="javascript:void(0)" className="link-reset">{blog.author.name}</a>
                        </h5>
                    </div>
                </div>
                <Link href={blog.url} className="link-primary fw-semibold">
                    Read more <TbArrowRight />
                </Link>
            </div>
        </article>
    )
}

export default BlogCard