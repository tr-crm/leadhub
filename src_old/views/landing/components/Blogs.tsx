import type { BlogType } from "./types";
import { Col, Container, Row } from "react-bootstrap";
import BlogCard from "./BlogCard";

import blog4 from '@/assets/images/blog/blog-4.jpg'
import blog5 from '@/assets/images/blog/blog-5.jpg'
import blog3 from '@/assets/images/blog/blog-3.jpg'

import user4 from '@/assets/images/users/user-4.jpg'
import user1 from '@/assets/images/users/user-1.jpg'
import user7 from '@/assets/images/users/user-7.jpg'

const Blogs = () => {
    const blogs: BlogType[] = [
        {
            category: 'Technology',
            image: blog4,
            title: 'The Future of Artificial Intelligence',
            description: 'Discover how AI is transforming industries and what the future holds for this cutting-edge technology.',
            date: 'Jan 12, 2025',
            comments: 89,
            views: 1284,
            author: {
                name: 'Michael Turner',
                image: user4,
            },
            url: '/article',
        },
        {
            category: 'Data Science',
            image: blog5,
            title: 'Top Data Science Trends in 2025',
            description: 'Get ahead in the data science field with the latest trends, technologies, and tools that are reshaping the industry.',
            date: 'Jan 12, 2025',
            comments: 89,
            views: 1284,
            author: {
                name: 'Olivia Brown',
                image: user1,
            },
            url: '/article',

        },
        {
            category: 'Business',
            image: blog3,
            title: '5 Key Tips for New Entrepreneurs',
            description: 'Start your entrepreneurial journey with these 5 essential tips that will guide you through the first year of business.',
            date: 'Jan 12, 2025',
            comments: 89,
            views: 1284,
            author: {
                name: 'David Clark',
                image: user7,
            },
            url: '/article',
        },
    ];
    return (
        <section className="section-custom bg-light bg-opacity-30 border-top border-bottom border-light" id="blog">
            <Container>
                <Row>
                    <Col xs={12} className="text-center">
                        <span className="text-muted rounded-3 d-inline-block">📝 Insights & Resources</span>
                        <h2 className="mt-3 fw-bold mb-5">
                            Explore Our <mark className="fst-italic">Latest</mark> Articles and Updates
                        </h2>
                    </Col>
                </Row>

                <Row className="g-4">
                    {blogs.map((blog, index) => (
                        <Col lg={4} key={index}>
                            <BlogCard blog={blog} />
                        </Col>
                    ))}
                </Row>
            </Container>
        </section>
    )
}

export default Blogs