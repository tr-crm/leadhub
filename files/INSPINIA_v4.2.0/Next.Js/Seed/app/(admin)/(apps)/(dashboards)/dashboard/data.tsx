import { TbArrowDown, TbArrowUp, TbBolt } from 'react-icons/tb'
import { EChartsOption } from 'echarts'

import { getColor } from '@/utils/color-utils'

import product1 from '@/assets/images/products/1.png'
import product2 from '@/assets/images/products/2.png'
import product4 from '@/assets/images/products/4.png'
import product5 from '@/assets/images/products/5.png'
import product6 from '@/assets/images/products/6.png'

import user1 from '@/assets/images/users/user-1.jpg'
import user2 from '@/assets/images/users/user-2.jpg'
import user4 from '@/assets/images/users/user-4.jpg'
import user5 from '@/assets/images/users/user-5.jpg'
import user6 from '@/assets/images/users/user-6.jpg'

import americanExpressImg from '@/assets/images/cards/american-express.svg'
import mastercardImg from '@/assets/images/cards/mastercard.svg'
import visaImg from '@/assets/images/cards/visa.svg'
import locationPinImg from '@/assets/images/location-pin.png'

type CardData = {
  title: string;
  badgeColor: string;
  badgeText: string;
  value: string;
  metric: string;
  targetValue: number;
  prefix?: string
  suffix?: string
}

type StatCardProps = {
  value: number;
  valuePrefix?: string;
  valueSuffix?: string;
  percentage: number;
  percentageIcon: React.ReactNode;
  title: string;
  progress: number;
}

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

export const cardData: CardData[] = [
  {
    title: 'Total Sales',
    badgeColor: 'success',
    badgeText: 'Monthly',
    value: '$0K',
    metric: 'Monthly Total Sales',
    targetValue: 250,
    prefix: '$',
    suffix: 'K'
  },
  {
    title: 'Total Orders',
    badgeColor: 'primary',
    badgeText: 'Monthly',
    value: '0',
    metric: 'Monthly Total Orders',
    targetValue: 180
  },
  {
    title: 'New Customers',
    badgeColor: 'info',
    badgeText: 'Monthly',
    value: '0',
    metric: 'Monthly New Customers',
    targetValue: 50895
  },
  {
    title: 'Revenue',
    badgeColor: 'warning',
    badgeText: 'Monthly',
    value: '$0K',
    metric: 'Monthly Revenue',
    targetValue: 50.33,
    prefix: '$',
    suffix: 'K'
  }
];

export const products = [
  {
    id: 1,
    image: product1,
    name: 'Smart Watch',
    category: 'Wearables',
    stock: '120 units',
    price: '$89.99',
    ratings: 4,
    reviews: 45,
    status: 'Active',
    statusVariant: 'success',
  },
  {
    id: 2,
    image: product2,
    name: 'Bluetooth Speaker',
    category: 'Audio',
    stock: '75 units',
    price: '$39.50',
    ratings: 3,
    reviews: 20,
    status: 'Low Stock',
    statusVariant: 'warning',
  },
  {
    id: 3,
    image: product4,
    name: 'Gaming Mouse',
    category: 'Accessories',
    stock: '0 units',
    price: '$24.99',
    ratings: 5,
    reviews: 14,
    status: 'Out of Stock',
    statusVariant: 'danger',
  },
  {
    id: 4,
    image: product5,
    name: '4K Action Camera',
    category: 'Cameras',
    stock: '60 units',
    price: '$149.00',
    ratings: 4,
    reviews: 31,
    status: 'Active',
    statusVariant: 'success',
  },
  {
    id: 5,
    image: product6,
    name: 'Fitness Tracker Band',
    category: 'Wearables',
    stock: '220 units',
    price: '$34.95',
    ratings: 4.5,
    reviews: 18,
    status: 'Active',
    statusVariant: 'success',
  },
]

export const orders = [
  {
    id: 'ORD-1001',
    userImage: user1,
    userName: 'John Doe',
    product: 'Smart Watch',
    date: '2025-04-29',
    amount: '$89.99',
    status: 'Delivered',
    statusVariant: 'success',
  },
  {
    id: 'ORD-1002',
    userImage: user2,
    userName: 'Emma Watson',
    product: 'Bluetooth Speaker',
    date: '2025-04-28',
    amount: '$39.50',
    status: 'Pending',
    statusVariant: 'warning',
  },
  {
    id: 'ORD-1003',
    userImage: user4,
    userName: 'Liam Johnson',
    product: 'Smart Watch',
    date: '2025-04-27',
    amount: '$89.99',
    status: 'Completed',
    statusVariant: 'success',
  },
  {
    id: 'ORD-1004',
    userImage: user6,
    userName: 'Olivia Brown',
    product: 'Gaming Mouse',
    date: '2025-04-26',
    amount: '$24.99',
    status: 'Cancelled',
    statusVariant: 'danger',
  },
  {
    id: 'ORD-1005',
    userImage: user5,
    userName: 'Noah Smith',
    product: 'Fitness Tracker Band',
    date: '2025-04-25',
    amount: '$34.95',
    status: 'Completed',
    statusVariant: 'success',
  },
]

export const transactions = [
  {
    id: '#TR-3468',
    order: '#ORD-1003 - Smart Watch',
    date: '27 Apr 2025',
    time: '02:15 PM',
    amount: '$89.99',
    status: 'Paid',
    statusVariant: 'success',
    paymentMethod: mastercardImg,
    lastFour: '1123',
  },
  {
    id: '#TR-3469',
    order: '#ORD-1004 - Gaming Mouse',
    date: '26 Apr 2025',
    time: '09:42 AM',
    amount: '$24.99',
    status: 'Failed',
    statusVariant: 'danger',
    paymentMethod: visaImg,
    lastFour: '3490',
  },
  {
    id: '#TR-3470',
    order: '#ORD-1005 - Fitness Tracker Band',
    date: '25 Apr 2025',
    time: '11:10 AM',
    amount: '$34.95',
    status: 'Paid',
    statusVariant: 'success',
    paymentMethod: americanExpressImg,
    lastFour: '8765',
  },
  {
    id: '#TR-3471',
    order: '#ORD-1006 - Wireless Keyboard',
    date: '24 Apr 2025',
    time: '08:58 PM',
    amount: '$59.00',
    status: 'Pending',
    statusVariant: 'warning',
    paymentMethod: mastercardImg,
    lastFour: '5566',
  },
  {
    id: '#TR-3472',
    order: '#ORD-1007 - Portable Charger',
    date: '23 Apr 2025',
    time: '05:37 PM',
    amount: '$45.80',
    status: 'Paid',
    statusVariant: 'success',
    paymentMethod: visaImg,
    lastFour: '9012',
  },
]

export const ordersStatsData: StatCardProps[] = [
  {
    value: 24500,
    valuePrefix: '$',
    percentage: 18.45,
    percentageIcon: <TbArrowUp className="text-success" />,
    title: 'Total sales in period',
    progress: 18.45
  },
  {
    value: 1240,
    percentage: 10.35,
    percentageIcon: <TbArrowDown className="text-danger" />,
    title: 'Number of customers',
    progress: 10.35
  },
  {
    value: 3750,
    percentage: 22.61,
    percentageIcon: <TbBolt className="text-primary" />,
    title: 'Products sold in the period',
    progress: 22.61
  },
  {
    value: 65.49,
    valuePrefix: '$',
    valueSuffix: 'USD',
    percentage: 5.92,
    percentageIcon: <TbArrowUp className="text-success" />,
    title: 'Average order value',
    progress: 5.92
  }
];

export const getEchartOptions = (): EChartsOption => {

  const productData = generateRandomData();

  return ({
    tooltip: { show: false },
    series: [
      {
        type: 'pie',
        radius: ['65%', '100%'],
        label: { show: false },
        labelLine: { show: false },
        data: productData.map((item, index) => ({
          value: item.value,
          itemStyle: {
            color: index === 0 ? getColor('primary') : index === 1 ? getColor('secondary') : "#bbcae14d"
          }
        }))
      }
    ]
  })
}

export const getOrdersStatsOptions = (): EChartsOption => {
  const category = [];
  const today = new Date();
  const completedOrders = [];
  const processingOrders = [];
  const cancelledOrders = [];

  for (let i = -14; i <= 0; i++) {
    const currentDate = new Date();
    currentDate.setDate(today.getDate() + i);

    // Format: 03 May 25
    const formattedDate = currentDate.toLocaleDateString('en-GB', {
      day: '2-digit',
      month: 'short',
      year: '2-digit'
    });
    category.push(formattedDate);

    const completed = Math.floor(Math.random() * 200);
    const processing = Math.floor(Math.random() * 150);
    const cancelled = Math.floor(Math.random() * 50);

    completedOrders.push(completed);
    processingOrders.push(processing);
    cancelledOrders.push(cancelled);
  }

  return ({
    tooltip: {
      trigger: 'axis',
      padding: [8, 15],
      backgroundColor: getColor("secondary-bg"),
      borderColor: getColor("border-color"),
      textStyle: { color: getColor("light-text-emphasis") },
      borderWidth: 1,
      transitionDuration: 0.125,
      axisPointer: { type: "none" },
      shadowBlur: 2,
      shadowColor: "rgba(76, 76, 92, 0.15)",
      shadowOffsetX: 0,
      shadowOffsetY: 1,
      formatter: function (params:any) {
        const rawDate = new Date();
        rawDate.setDate(today.getDate() - 14 + params[0].dataIndex);

        const formattedDate = rawDate.toLocaleDateString('en-GB', {
          day: '2-digit',
          month: 'short',
          year: 'numeric'
        });

        const seriesInfo = params.map((item:any) => {
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
}

export const getWorldMapOptions = () => {
  return ({
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
      selected: { fill: getColor('primary') },
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
            image: locationPinImg.src
          }
        }
      },
      { name: "Australia", coords: [-25.2744, 133.7751] },
      { name: "Greenland", coords: [71.7069, -42.6043] },
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
  })
}
