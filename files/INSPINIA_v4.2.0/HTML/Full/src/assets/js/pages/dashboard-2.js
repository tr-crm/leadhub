/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Dashboard v.2
 * Version: 4.0.1
 */

// Function to generate random data
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

function initDonutChart(element) {

    const productData = generateRandomData();

    new CustomEChart({
        selector: element,
        options: () => ({
            tooltip: {show: false},
            series: [
                {
                    type: 'pie',
                    radius: ['65%', '100%'],
                    hoverAnimation: false,
                    label: {show: false},
                    labelLine: {show: false},
                    data: productData.map((item, index) => ({
                        value: item.value,
                        itemStyle: {
                            color: index === 0 ? ins('primary') : index === 1 ? ins('secondary') : "#bbcae14d"
                        }
                    }))
                }
            ]
        })
    })
}

const donutCharts = document.querySelectorAll('.donut-chart');
if (donutCharts) {
    donutCharts.forEach(initDonutChart)
}


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

new CustomEChart({
    selector: '#orders-chart',
    options: () => ({
        tooltip: {
            trigger: 'axis',
            padding: [8, 15],
            backgroundColor: ins("secondary-bg"),
            borderColor: ins("border-color"),
            textStyle: {color: ins("light-text-emphasis")},
            borderWidth: 1,
            transitionDuration: 0.125,
            axisPointer: {type: "none"},
            shadowBlur: 2,
            shadowColor: "rgba(76, 76, 92, 0.15)",
            shadowOffsetX: 0,
            shadowOffsetY: 1,
            formatter: function (params) {
                const rawDate = new Date();
                rawDate.setDate(today.getDate() - 14 + params[0].dataIndex);

                const formattedDate = rawDate.toLocaleDateString('en-GB', {
                    day: '2-digit',
                    month: 'short',
                    year: 'numeric'
                });

                const seriesInfo = params.map(item => {
                    return `${item.marker} ${item.seriesName}: <span class="fw-bold">${item.value}</span> Orders`;
                }).join('<br/>');

                return `<div class="mb-1 text-body">${formattedDate}</div>${seriesInfo}`;
            }
        },
        legend: {
            data: ['Completed', 'Processing', 'Cancelled'],
            top: 15,
            textStyle: {
                color: ins("body-color")
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
                    color: ins("border-color")
                }
            },
            axisLabel: {
                show: true,
                color: ins("secondary-color")
            },
            splitLine: {
                lineStyle: {
                    color: ins("border-color"),
                    type: 'dashed'
                }
            }
        },
        yAxis: {
            axisLine: {
                lineStyle: {
                    type: 'dashed',
                    color: ins("border-color")
                }
            },
            axisLabel: {
                show: true,
                color: ins("secondary-color")
            },
            splitLine: {
                show: false,
                lineStyle: {
                    color: ins("border-color"),
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
                    color: ins("success")
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
                    color: ins("secondary")
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
})


const map = new jsVectorMap({
    map: "world",
    selector: "#map_1",
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
        selected: {fill: ins('primary')},
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
                    image: 'assets/images/location-pin.png' // Add a marker image for particular marker.
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
            fill: ins('primary'),
            stroke: ins('primary'),
            fillOpacity: 0.3,
            strokeWidth: 2,
            r: 2
        },
        selected: {
            fill: ins('primary'),
            stroke: ins('primary'),
            strokeWidth: 1
        },
    },
    labels: {
        markers: {
            render: (marker) => marker.name,
        },
    },
    lineStyle: {
        animation: true,
        strokeDasharray: "6 3 6",
    },
});

window.addEventListener('resize', debounce(() => {
    map.updateSize();
}, 200));


function showToast() {

    let container = document.getElementById('toast-container');
    if (!container) {
        container = document.createElement('div');
        container.id = 'toast-container';
        container.className = 'toast-container position-fixed top-0 end-0 p-3';
        container.style.zIndex = 1100;
        document.body.appendChild(container);
    }

    const toast = document.createElement('div');
    toast.className = 'toast text-bg-primary border-0 fade';
    toast.setAttribute('role', 'alert');
    toast.setAttribute('aria-live', 'assertive');
    toast.setAttribute('aria-atomic', 'true');

    toast.innerHTML = `
        <div class="toast-header bg-white bg-opacity-10 text-white border-0">
            <img src="assets/images/logo-sm.png" alt="brand-logo" height="16" class="me-1" />
            <strong class="me-auto text-white">INSPINIA</strong>
            <small>Now</small>
            <button type="button" class="ms-2 btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Welcome to WrapBootstrap’s <strong>No. 1</strong> Bootstrap 5 Admin Dashboard Template.
        </div>
    `;

    container.appendChild(toast);

    const bsToast = new bootstrap.Toast(toast, {delay: 5000});
    bsToast.show();

    toast.addEventListener('hidden.bs.toast', () => {
        toast.remove();
    });
}

setTimeout(() => {
    showToast()
}, 2000)