import {EChartsOption} from 'echarts';

export type StatisticsWidgetType = {
    title: string;
    badge?: {
        text: string;
        variant: 'success' | 'primary' | 'info' | 'warning';
    };
    value: number;
    prefix?: string;
    suffix?: string;
    description: string;
    chartOptions?: () => EChartsOption;
};

export type OrderStatisticsWidgetType = {
    title: string;
    value: string | number;
    prefix?: string;
    suffix?: string;
    growth: number;
    variant: 'success' | 'danger' | 'primary';
    icon: string;
    description: string;
};

export type ProductType = {
    id: number
    image: string,
    name: string,
    category: string,
    stock: number,
    price: number,
    ratings: number,
    reviews: number,
    status: 'active' | 'low-stock' | 'out-of-stock',
    variant: string,
    url: string
}

export type OrderType = {
    id: string
    user: {
        image: string,
        name: string,
    }
    product: string
    date: string
    amount: number
    status: 'delivered' | 'pending' | 'completed' | 'cancelled'
    variant: string
    url: string
}

export type TransactionsType = {
    id: string
    order: string
    date: string
    time: string
    amount: number
    status: 'paid' | 'pending' | 'failed',
    variant: string
    paymentMethod: string
    lastFour: string
}
