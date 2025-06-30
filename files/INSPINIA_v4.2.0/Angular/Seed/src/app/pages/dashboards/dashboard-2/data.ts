import {getColor} from "@/app/utils/color-utils";
import {
    OrderStatisticsWidgetType,
    OrderType,
    ProductType,
    StatisticsWidgetType,
    TransactionsType
} from '@/app/pages/dashboards/dashboard-2/types';
import {EChartsOption} from 'echarts';


// statistics

// to generate random data
function generateRandomData() {
    const dataName = ['A', 'B', 'C'];
    const randomData = dataName.map(name => ({
        name: name,
        value: Math.floor(Math.random() * 100) + 1
    }));
    const total = randomData.reduce((sum, item) => sum + item.value, 0);
    randomData.forEach(item => {
        item.value = (item.value / total) * 100;
    });
    return randomData;
}

export const statistics: StatisticsWidgetType[] = [
    {
        title: 'Total Sales',
        badge: {text: 'Monthly', variant: 'success'},
        value: 250,
        prefix: '$',
        suffix: 'K',
        description: 'Monthly Total Sales',
        chartOptions: () => ({
            tooltip: {show: false},
            series: [
                {
                    type: 'pie',
                    radius: ['65%', '100%'],
                    hoverAnimation: false,
                    label: {show: false},
                    labelLine: {show: false},
                    data: generateRandomData().map((item, index) => ({
                        value: item.value,
                        itemStyle: {
                            color: index === 0
                                ? getColor('primary')
                                : index === 1
                                    ? getColor('secondary')
                                    : '#bbcae14d'
                        }
                    }))
                }
            ]
        })
    },
    {
        title: 'Total Orders',
        badge: {text: 'Monthly', variant: 'primary'},
        value: 180,
        description: 'Monthly Total Orders',
        chartOptions: () => ({
            tooltip: {show: false},
            series: [
                {
                    type: 'pie',
                    radius: ['65%', '100%'],
                    hoverAnimation: false,
                    label: {show: false},
                    labelLine: {show: false},
                    data: generateRandomData().map((item, index) => ({
                        value: item.value,
                        itemStyle: {
                            color: index === 0
                                ? getColor('primary')
                                : index === 1
                                    ? getColor('secondary')
                                    : '#bbcae14d'
                        }
                    }))
                }
            ]
        })
    },
    {
        title: 'New Customers',
        badge: {text: 'Monthly', variant: 'info'},
        value: 50895,
        description: 'Monthly New Customers',
        chartOptions: () => ({
            tooltip: {show: false},
            series: [
                {
                    type: 'pie',
                    radius: ['65%', '100%'],
                    hoverAnimation: false,
                    label: {show: false},
                    labelLine: {show: false},
                    data: generateRandomData().map((item, index) => ({
                        value: item.value,
                        itemStyle: {
                            color: index === 0
                                ? getColor('primary')
                                : index === 1
                                    ? getColor('secondary')
                                    : '#bbcae14d'
                        }
                    }))
                }
            ]
        })
    },
    {
        title: 'Revenue',
        badge: {text: 'Monthly', variant: 'warning'},
        value: 50.33,
        prefix: '$',
        suffix: 'K',
        description: 'Monthly Revenue',
        chartOptions: () => ({
            tooltip: {show: false},
            series: [
                {
                    type: 'pie',
                    radius: ['65%', '100%'],
                    hoverAnimation: false,
                    label: {show: false},
                    labelLine: {show: false},
                    data: generateRandomData().map((item, index) => ({
                        value: item.value,
                        itemStyle: {
                            color: index === 0
                                ? getColor('primary')
                                : index === 1
                                    ? getColor('secondary')
                                    : '#bbcae14d'
                        }
                    }))
                }
            ]
        })
    }
];


// order statistics

let category = [];
let today = new Date();
let completedOrders = [];
let processingOrders = [];
let cancelledOrders = [];

for (let i = -14; i <= 0; i++) {
    let currentDate = new Date();
    currentDate.setDate(today.getDate() + i);

    // Format: 03 May 25
    const formattedDate = currentDate.toLocaleDateString('en-GB', {
        day: '2-digit',
        month: 'short',
        year: '2-digit'
    });
    category.push(formattedDate);

    // Random order counts
    let completed = Math.floor(Math.random() * 200);
    let processing = Math.floor(Math.random() * 150);
    let cancelled = Math.floor(Math.random() * 50);

    completedOrders.push(completed);
    processingOrders.push(processing);
    cancelledOrders.push(cancelled);
}

export const orderStatisticsChartOptions = (): EChartsOption => ({
    tooltip: {
        trigger: 'axis',
        padding: [8, 15],
        backgroundColor: getColor("secondary-bg"),
        borderColor: getColor("border-color"),
        textStyle: {color: getColor("light-text-emphasis")},
        borderWidth: 1,
        transitionDuration: 0.125,
        axisPointer: {type: "none"},
        shadowBlur: 2,
        shadowColor: "rgba(76, 76, 92, 0.15)",
        shadowOffsetX: 0,
        shadowOffsetY: 1,
        formatter: function (params: any) {
            const rawDate = new Date();
            rawDate.setDate(today.getDate() - 14 + params[0].dataIndex);

            const formattedDate = rawDate.toLocaleDateString('en-GB', {
                day: '2-digit',
                month: 'short',
                year: 'numeric'
            });

            const seriesInfo = params.map((item: any) => {
                return `${item.marker} ${item.seriesName}: <span class="fw-bold">${item.value}</span> Orders`;
            }).join('<br/>');

            return `<div class="mb-1 text-body">${formattedDate}</div>${seriesInfo}`;
        }
    },
    legend: {
        data: ['Completed', 'Processing', 'Cancelled'],
        top: 15,
        textStyle: {
            color: getColor("body-color")
        }
    },
    textStyle: {
        fontFamily: getComputedStyle(document.body).fontFamily
    },
    xAxis: {
        data: category,
        axisLine: {
            lineStyle: {
                type: 'dashed',
                color: getColor("border-color")
            }
        },
        axisLabel: {
            show: true,
            color: getColor("secondary-color")
        },
        splitLine: {
            lineStyle: {
                color: getColor("border-color"),
                type: 'dashed'
            }
        }
    },
    yAxis: {
        axisLine: {
            lineStyle: {
                type: 'dashed',
                color: getColor("border-color")
            }
        },
        axisLabel: {
            show: true,
            color: getColor("secondary-color")
        },
        splitLine: {
            show: false,
            lineStyle: {
                color: getColor("border-color"),
                type: 'dashed'
            }
        }
    },
    grid: {
        left: 25,
        right: 25,
        bottom: 25,
        top: 60,
        containLabel: true
    },
    series: [
        {
            name: 'Completed',
            type: 'line',
            smooth: true,
            itemStyle: {
                color: getColor("success")
            },
            showAllSymbol: true,
            symbol: 'emptyCircle',
            symbolSize: 5,
            data: completedOrders
        },
        {
            name: 'Processing',
            type: 'bar',
            barWidth: 14,
            itemStyle: {
                borderRadius: [5, 5, 0, 0],
                color: getColor("secondary")
            },
            data: processingOrders
        },
        {
            name: 'Cancelled',
            type: 'bar',
            barWidth: 14,
            itemStyle: {
                borderRadius: [5, 5, 0, 0],
                color: "#bbcae14d"
            },
            data: cancelledOrders
        }
    ]
})

export const orderStatistics: OrderStatisticsWidgetType[] = [
    {
        title: 'Total Sales',
        value: 24500,
        prefix: '$',
        growth: 18.45,
        variant: 'success',
        icon: 'tablerArrowUp',
        description: 'Total sales in period'
    },
    {
        title: 'Number of Customers',
        value: 1240,
        growth: -10.35,
        variant: 'danger',
        icon: 'tablerArrowDown',
        description: 'Number of customers'
    },
    {
        title: 'Products Sold',
        value: 3750,
        growth: 22.61,
        variant: 'primary',
        icon: 'tablerBolt',
        description: 'Products sold in the period'
    },
    {
        title: 'Avg. Order Value',
        value: 65.49,
        prefix: '$',
        suffix: 'USD',
        growth: 5.92,
        variant: 'success',
        icon: 'tablerArrowUp',
        description: 'Average order value'
    }
];


// product inventory
export const products: ProductType[] = [
    {
        id: 1,
        image: 'assets/images/products/1.png',
        name: 'Smart Watch',
        category: 'Wearables',
        stock: 120,
        price: 89.99,
        ratings: 4,
        reviews: 45,
        status: 'active',
        variant: 'success',
        url: ''
    },
    {
        id: 2,
        image: 'assets/images/products/2.png',
        name: 'Bluetooth Speaker',
        category: 'Audio',
        stock: 75,
        price: 39.50,
        ratings: 3,
        reviews: 20,
        status: 'low-stock',
        variant: 'warning',
        url: ''
    },
    {
        id: 3,
        image: 'assets/images/products/4.png',
        name: 'Gaming Mouse',
        category: 'Accessories',
        stock: 0,
        price: 24.99,
        ratings: 5,
        reviews: 14,
        status: 'out-of-stock',
        variant: 'danger',
        url: ''
    },
    {
        id: 4,
        image: 'assets/images/products/5.png',
        name: '4K Action Camera',
        category: 'Cameras',
        stock: 60,
        price: 149,
        ratings: 4,
        reviews: 31,
        status: 'active',
        variant: 'success',
        url: ''
    },
    {
        id: 5,
        image: 'assets/images/products/6.png',
        name: 'Fitness Tracker Band',
        category: 'Wearables',
        stock: 220,
        price: 34.95,
        ratings: 4.5,
        reviews: 18,
        status: 'active',
        variant: 'success',
        url: ''
    },
]


// recent orders
export const orders: OrderType[] = [
    {
        id: 'ORD-1001',
        user: {
            image: 'assets/images/users/user-1.jpg',
            name: 'John Doe',
        },
        product: 'Smart Watch',
        date: '2025-04-29',
        amount: 89.99,
        status: 'delivered',
        variant: 'success',
        url: ''
    },
    {
        id: 'ORD-1002',
        user: {
            image: 'assets/images/users/user-2.jpg',
            name: 'Emma Watson',
        },
        product: 'Bluetooth Speaker',
        date: '2025-04-28',
        amount: 39.50,
        status: 'pending',
        variant: 'warning',
        url: ''
    },
    {
        id: 'ORD-1003',
        user: {
            image: 'assets/images/users/user-4.jpg',
            name: 'Liam Johnson',
        },
        product: 'Smart Watch',
        date: '2025-04-27',
        amount: 89.99,
        status: 'completed',
        variant: 'success',
        url: ''
    },
    {
        id: 'ORD-1004',
        user: {
            image: 'assets/images/users/user-6.jpg',
            name: 'Olivia Brown',
        },
        product: 'Gaming Mouse',
        date: '2025-04-26',
        amount: 24.99,
        status: 'cancelled',
        variant: 'danger',
        url: ''
    },
    {
        id: 'ORD-1005',
        user: {
            image: 'assets/images/users/user-5.jpg',
            name: 'Noah Smith',
        },
        product: 'Fitness Tracker Band',
        date: '2025-04-25',
        amount: 34.95,
        status: 'completed',
        variant: 'success',
        url: ''
    },
]


// transactions
export const transactions: TransactionsType[] = [
    {
        id: '#TR-3468',
        order: '#ORD-1003 - Smart Watch',
        date: '27 Apr 2025',
        time: '02:15 PM',
        amount: 89.99,
        status: 'paid',
        variant: 'success',
        paymentMethod: 'mastercard',
        lastFour: '1123',
    },
    {
        id: '#TR-3469',
        order: '#ORD-1004 - Gaming Mouse',
        date: '26 Apr 2025',
        time: '09:42 AM',
        amount: 24.99,
        status: 'failed',
        variant: 'danger',
        paymentMethod: 'visa',
        lastFour: '3490',
    },
    {
        id: '#TR-3470',
        order: '#ORD-1005 - Fitness Tracker Band',
        date: '25 Apr 2025',
        time: '11:10 AM',
        amount: 34.95,
        status: 'paid',
        variant: 'success',
        paymentMethod: 'american-express',
        lastFour: '8765',
    },
    {
        id: '#TR-3471',
        order: '#ORD-1006 - Wireless Keyboard',
        date: '24 Apr 2025',
        time: '08:58 PM',
        amount: 59.00,
        status: 'pending',
        variant: 'warning',
        paymentMethod: 'mastercard',
        lastFour: '5566',
    },
    {
        id: '#TR-3472',
        order: '#ORD-1007 - Portable Charger',
        date: '23 Apr 2025',
        time: '05:37 PM',
        amount: 45.80,
        status: 'paid',
        variant: 'success',
        paymentMethod: 'visa',
        lastFour: '9012',
    },
]


export const worldTransactionMapOptions = {
    map: "world",
    zoomOnScroll: true,
    zoomButtons: false,
    selectedMarkers: [1, 1],
    markersSelectable: true,
    selectedRegions: ['CA', 'US', 'AU'],
    regionStyle: {
        initial: {
            stroke: "#a2abbd",
            strokeWidth: 0.5,
            fillOpacity: 0.1
        },
        selected: {fill: getColor('primary')},
    },
    markers: [
        {
            name: "Russia",
            coords: [61.524, 105.3188],
        },
        {
            name: "Canada", coords: [56.1304, -106.3468],
            style: {
                initial: {
                    image: 'assets/images/location-pin.png'
                }
            }
        },
        {name: "Australia", coords: [-25.2744, 133.7751]},
        {name: "Greenland", coords: [71.7069, -42.6043]},
    ],
    lines: [{
        from: "Russia",
        to: "Canada"
    },
        {
            from: "Australia",
            to: "Canada"
        },
        {
            from: "Greenland",
            to: "Canada"
        },
        {
            from: "Brazil",
            to: "Canada"
        },
    ],
    markerStyle: {
        initial: {
            fill: getColor('primary'),
            stroke: getColor('primary'),
            fillOpacity: 0.3,
            strokeWidth: 2,
            r: 2
        },
        selected: {
            fill: getColor('primary'),
            stroke: getColor('primary'),
            strokeWidth: 1
        },
    },
    labels: {
        markers: {
            render: (marker: any) => marker.name,
        },
    },
    lineStyle: {
        animation: true,
        strokeDasharray: "6 3 6",
    },
}
