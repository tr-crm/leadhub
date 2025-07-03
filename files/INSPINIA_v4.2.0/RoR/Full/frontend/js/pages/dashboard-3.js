/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Dashboard v.3
 * Version: 4.2.0
 */
import { CustomApexChart, ins } from "../app";

function generateRandomData(count, min, max) {
    return Array.from({length: count}, () =>
        Math.floor(Math.random() * (max - min + 1)) + min
    );
}

function generateSessionAndPageViewData(count) {
    const sessions = generateRandomData(count, 250, 450);
    const pageViews = sessions.map(session =>
        Math.floor(session * (2 + Math.random() * 0.1)) // Page Views are 2x to 2.5x of Sessions
    );
    return {sessions, pageViews};
}

const {sessions, pageViews} = generateSessionAndPageViewData(19);

new CustomApexChart({
    selector: '#analytics-overview-chart',
    options: () => ({
        chart: {
            height: 326,
            type: 'area',
            toolbar: {show: false}
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            width: 2,
            curve: 'smooth'
        },
        colors: [ins('primary'), ins('secondary')],
        series: [
            {
                name: 'Sessions',
                data: sessions
            },
            {
                name: 'Page Views',
                data: pageViews
            }
        ],
        legend: {
            offsetY: 5,
        },
        xaxis: {
            categories: ["", "8 AM", "9 AM", "10 AM", "11 AM", "12 PM", "1 PM",
                "2 PM", "3 PM", "4 PM", "5 PM", "6 PM", "7 PM", "8 PM",
                "9 PM", "10 PM", "11 PM", "12 AM", ""],
            axisBorder: {show: false},
            axisTicks: {show: false},
            tickAmount: 6,
            labels: {
                style: {
                    fontSize: "12px"
                }
            }
        },
        tooltip: {
            shared: true,
            y: {
                formatter: function (val, {seriesIndex}) {
                    if (seriesIndex === 0) {
                        return val + " Sessions";
                    } else if (seriesIndex === 1) {
                        return val + " Page Views";
                    }
                    return val;
                }
            }
        },
        fill: {
            type: "gradient",
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.4,
                opacityTo: 0.2,
                stops: [15, 120, 100]
            }
        },
        grid: {
            borderColor: [ins('border-color')],
            padding: {
                bottom: 5
            }
        }
    })
})

function generateRandomDeviceData(name, minY, maxY, count = 10) {
    const data = [];
    for (let i = 1; i <= count; i++) {
        const y = Math.floor(Math.random() * (maxY - minY + 1)) + minY;
        const z = Math.floor(Math.random() * (35 - 15 + 1)) + 15;
        data.push({x: i, y: y, z: z});
    }
    return {name, data};
}

new CustomApexChart({
    selector: '#devices-chart',
    options: () => ({
        chart: {
            height: 208, // Increased height for spacing
            type: 'bubble',
            toolbar: {
                show: false
            }
        },
        dataLabels: {
            enabled: false
        },
        series: [
            generateRandomDeviceData('Desktop', 20, 150),
            generateRandomDeviceData('Mobile', 20, 120),
            generateRandomDeviceData('Tablet', 20, 60)
        ],
        fill: {
            opacity: 0.8,
            gradient: {
                enabled: false
            }
        },
        xaxis: {
            min: 0,
            max: 11,
            show: false,
            labels: {show: false},
            axisBorder: {show: false},
            axisTicks: {show: false}
        },
        yaxis: {
            min: 0,
            max: 170,
            show: false,
            labels: {show: false},
            axisBorder: {show: false},
            axisTicks: {show: false}
        },

        grid: {
            padding: {
                top: -20,
                right: 20,
                bottom: 0,
                left: 20
            },
            borderColor: ins('border-color')
        },

        legend: {
            show: true,
            position: 'top',
            horizontalAlign: 'center'
        }
    })
})

new CustomApexChart({
    selector: '#orders-chart',
    options: () => ({
        series: [{
            type: 'column',
            data: [[0, 2], [1, 3], [2, 4], [3, 8], [4, 5], [5, 12], [6, 17], [7, 19], [8, 6], [9, 9], [10, 14], [11, 17], [12, 12], [13, 6], [14, 4]]
        }, {
            type: 'column',
            data: [[0, 9], [1, 7], [2, 4], [3, 8], [4, 4], [5, 12], [6, 4], [7, 6], [8, 5], [9, 10], [10, 4], [11, 5], [12, 10], [13, 2], [14, 6]]
        }],
        chart: {
            height: 60,
            width: 205,
            parentHeightOffset: 0,
            stacked: true,
            sparkline: {
                enabled: true
            }
        },
        states: {
            hover: {
                filter: {
                    type: 'none'
                }
            },
            active: {
                filter: {
                    type: 'none'
                }
            }
        },
        colors: ['#1ab394', '#e5e9f2'],
        plotOptions: {
            bar: {
                columnWidth: '60%'
            },
        },
        stroke: {
            curve: 'straight',
            lineCap: 'square'
        },
        tooltip: {
            enabled: false,
            onDatasetHover: {
                highlightDataSeries: false,
            },
            x: {
                show: false,
            },
        }
    })
})

new CustomApexChart({
    selector: '#posts-chart',
    options: () => ({
        chart: {
            type: 'area',
            height: 60,
            sparkline: {
                enabled: true
            },
        },
        stroke: {
            curve: 'smooth',
            width: 1.5
        },
        fill: {
            opacity: 1,
            gradient: {
                shade: '#1ab394',
                type: "horizontal",
                shadeIntensity: 0.5,
                inverseColors: true,
                opacityFrom: 0.1,
                opacityTo: 0.2,
                stops: [0, 80, 100],
                colorStops: []
            },
        },
        series: [{
            data: [4, 8, 5, 10, 4, 16, 5, 11, 6, 11, 30, 10, 13, 4, 6, 3, 6]
        }],
        yaxis: {
            min: 0
        },
        colors: ['#1ab394'],
        tooltip: {
            enabled: false,
        }
    })
})

// Function to generate a random number between min and max
let currentVisitors = getRandomNumber(500, 800); // Start with a reasonable base value

function getRandomNumber(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function updateLiveVisitors() {
    // Generate a new number close to the current one
    const change = getRandomNumber(-20, 20); // Small fluctuation
    currentVisitors = Math.max(100, currentVisitors + change); // Prevent going below 100
    document.getElementById("live-visitors").textContent = currentVisitors;
}

// Initial display
document.getElementById("live-visitors").textContent = currentVisitors;

// Update every 2 seconds
setInterval(updateLiveVisitors, 1000);