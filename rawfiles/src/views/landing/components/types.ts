import type { IconType } from "react-icons";

export type TestimonialType = {
    avatar: string,
    name: string,
    title: string,
    description: string
}

export type footerLinksType = {
    title: string;
    links: {
        name: string
        url: string;
        badge?: {
            title: string;
            variant: string
        }
    }[],
}

export type socialLinksType = {
    title: string;
    icon: IconType;
    url: string
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

export type ServiceType = {
    name: string,
    description: string,
    icon: IconType
}