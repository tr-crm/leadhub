export type TestimonialType = {
    avatar: string,
    name: string,
    title: string,
    description: string,
    rating: number
}

export type BlogType = {
    category: string;
    image: string;
    title: string;
    description: string;
    date: string;
    comments: number;
    views: number;
    author: {
        name: string;
        image: string;
    }
    url: string
}

export type PricingPlanType = {
    name: string;
    price: number;
    description: string;
    highlight: string;
    features: {
        text: string;
        included: boolean;
    }[];
    btnClass: string;
    isPopular?: boolean;
}
