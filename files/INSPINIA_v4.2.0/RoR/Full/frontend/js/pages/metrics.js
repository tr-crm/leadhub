/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Matrics
 * Version: 4.2.0
 */
import { CustomEChart, ins } from '../app'
import * as echarts from 'echarts';
//
// DONUT CHART
//

// Function to generate random data
function generateRandomData1() {
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

    const productData = generateRandomData1();

    new CustomEChart({
        selector: element,
        options: () => ({
            tooltip: {show: false},
            series: [
                {
                    type: 'pie',
                    radius: ['65%', '100%'],
                    hoverAnimation: false, // 🔒 disables zoom/enlarge on hover
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

const donutCharts = document.querySelectorAll('.donut-chart')
if (donutCharts.length > 0) {
    donutCharts.forEach(initDonutChart);
}

//
// BAR CHART
//

function generateBarData() {
    const labels = ['A', 'B', 'C', 'D', 'E', 'F', 'G'];
    const colors = [ins('primary'), ins('secondary'), ins('success'), "#bbcae14d"];

    return labels.map((label, index) => ({
        name: label,
        value: Math.floor(Math.random() * 100) + 1,
        color: colors[index % colors.length]
    }));
}

function initBarChart(element) {
    const productData = generateBarData();

    new CustomEChart({
        selector: element,
        options: () => ({
            grid: {top: 0, bottom: 0, left: 0, right: 0},
            xAxis: {type: 'category', data: productData.map(d => d.name), show: false},
            yAxis: {type: 'value', show: false},
            tooltip: {show: false},
            series: [{
                type: 'bar',
                data: productData.map(item => ({
                    value: item.value,
                    itemStyle: {color: item.color}
                })),
                barWidth: '50%',
                itemStyle: {borderRadius: 3}
            }]
        })
    })
}

const barCharts = document.querySelectorAll('.bar-chart')
if (barCharts.length > 0) {
    barCharts.forEach(initBarChart);
}


//
// LINE(AREA) CHART
//

function generateAreaData() {
    const labels = ['A', 'B', 'C', 'D', 'E', 'F', 'G'];
    const colors = [ins('primary'), ins('warning'), ins('secondary'), "#bbcae14d"];

    return labels.map(() => {
        // Randomly pick a color from the colors array
        const randomColor = colors[Math.floor(Math.random() * colors.length)];
        return {
            value: Math.floor(Math.random() * 100) + 1,
            color: randomColor
        };
    });
}

function initAreaChart(element) {
    const productData = generateAreaData();

    new CustomEChart({
        selector: element,
        options: () => ({
            grid: {top: 0, bottom: 0, left: 0, right: 0},
            xAxis: {
                type: 'category',
                data: productData.map((_, index) => `Label ${index + 1}`), // Use dynamic labels
                show: false
            },
            yAxis: {
                type: 'value',
                show: false
            },
            tooltip: {show: false},
            series: [
                {
                    type: 'line',
                    data: productData.map(item => item.value),
                    areaStyle: {
                        // Apply a gradient color dynamically based on the randomly selected color
                        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                            {offset: 0, color: productData[0].color}, // First color
                            {offset: 1, color: 'rgba(255, 255, 255, 0)'} // Fade to transparent
                        ])
                    },
                    lineStyle: {
                        color: productData[0].color, // Color of the line
                        width: 2 // Line width
                    },
                    symbol: 'none', // Removes the dots from the line
                    smooth: true // Smoothens the curve
                }
            ]
        })
    })
}

const areaCharts = document.querySelectorAll('.area-chart')
if (areaCharts.length > 0) {
    areaCharts.forEach(initAreaChart);
}


//
// PIE CHART
//

// Function to generate random data
function generateRandomData2() {
    const dataName = ['A', 'B', 'C', 'D'];
    const randomData = dataName.map(name => ({
        name: name,
        value: Math.floor(Math.random() * 100) + 1
    }));
    return randomData;
}

function initPieChart(element) {

    const productData = generateRandomData2();

    const colors = [ins('primary'), ins('warning'), ins('secondary'), "#bbcae14d"];

    new CustomEChart({
        selector: element,
        options: () => ({
            tooltip: {show: false},
            series: [
                {
                    type: 'pie',
                    radius: '90%',
                    hoverAnimation: false,
                    label: {show: false},
                    labelLine: {show: false},
                    data: productData.map((item, index) => ({
                        value: item.value,
                        name: item.name,
                        itemStyle: {
                            color: colors[index % colors.length]
                        }
                    }))
                }
            ]
        })
    })
}

const pieCharts = document.querySelectorAll('.pie-chart')
if (pieCharts.length > 0) {
    pieCharts.forEach(initPieChart);
}


new CustomEChart({
    selector: '#orders-chart',
    options: () => ({
        legend: {show: false},
        tooltip: {
            trigger: "axis",
            padding: [5, 0],
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
                const title = params[0].name;
                let content = `<div style="font-size: 14px; font-weight: 600; text-transform: uppercase; border-bottom: 1px solid ${ins("border-color")}; margin-bottom: 8px; padding: 3px 10px 8px;">${title}</div>`;
                params.forEach(item => {
                    content += `<div style="margin-top: 4px; padding: 3px 15px;">
                    <span style="display:inline-block;margin-right:5px;border-radius:50%;width:10px;height:10px;background-color:${item.color};"></span>
                    ${item.seriesName} : <strong>${item.value}</strong>
                </div>`;
                });
                return content;
            }
        },
        textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        },
        grid: {left: '-6%', right: '2%', bottom: '2%', top: '0%', containLabel: true},
        xAxis: {
            type: 'category',
            data: ['Q1', 'Q2', 'Q3', 'Q4', 'Q5', 'Q6', 'Q7'],
            axisLine: {show: false},
            axisTick: {show: false}
        },
        yAxis: {
            show: false
        },
        series: [
            {
                name: 'Product A',
                type: 'bar',
                stack: 'total',
                barWidth: '40%',
                itemStyle: {color: ins("primary")},
                data: [120, 132, 101, 134, 98, 145, 160]
            },
            {
                name: 'Product B',
                type: 'bar',
                stack: 'total',
                itemStyle: {color: ins("secondary")},
                data: [220, 182, 191, 234, 210, 198, 176]
            },
            {
                name: 'Product C',
                type: 'bar',
                stack: 'total',
                itemStyle: {color: "#bbcae14d"},
                data: [150, 232, 201, 154, 189, 165, 140]
            }
        ]
    })
})


new CustomEChart({
    selector: '#product-chart',
    options: () => ({
        tooltip: {
            trigger: "axis",
            padding: [5, 0],
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
                const title = params[0].name;
                let content = `<div style="font-size: 14px; font-weight: 600; text-transform: uppercase; border-bottom: 1px solid ${ins("border-color")}; margin-bottom: 8px; padding: 3px 10px 8px;">${title}</div>`;
                params.forEach(item => {
                    content += `<div style="margin-top: 4px; padding: 3px 15px;">
                    <span style="display:inline-block;margin-right:5px;border-radius:50%;width:10px;height:10px;background-color:${item.color};"></span>
                    ${item.seriesName} : <strong>${item.value}</strong>
                </div>`;
                });
                return content;
            }
        },
        textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        },
        legend: {show: false},
        grid: {left: 0, right: 0, top: 10, bottom: 0, containLabel: false},
        xAxis: {
            type: 'category',
            boundaryGap: false,
            data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            axisLine: {show: false},
            axisTick: {show: false},
            axisLabel: {show: false}
        },
        yAxis: {
            type: 'value',
            show: false
        },
        series: [
            {
                name: 'Data 1',
                type: 'line',
                data: [120, 132, 101, 134, 90, 230, 210],
                smooth: true,
                areaStyle: {color: ins("white-rgb", 0.5)},
                lineStyle: {width: 0},
                symbol: 'none'
            },
            {
                name: 'Data 2',
                type: 'line',
                data: [220, 182, 191, 234, 290, 330, 310],
                smooth: true,
                areaStyle: {color: ins("white-rgb", 0.5)},
                lineStyle: {width: 0},
                symbol: 'none'
            }
        ]
    })
})


new CustomEChart({
    selector: '#profit-chart',
    options: () => ({
        tooltip: {
            trigger: "axis",
            padding: [5, 0],
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
                const title = params[0].name;
                let content = `<div style="font-size: 14px; font-weight: 600; text-transform: uppercase; border-bottom: 1px solid ${ins("border-color")}; margin-bottom: 8px; padding: 3px 10px 8px;">${title}</div>`;
                params.forEach(item => {
                    content += `<div style="margin-top: 4px; padding: 3px 15px;">
                    <span style="display:inline-block;margin-right:5px;border-radius:50%;width:10px;height:10px;background-color:${item.color};"></span>
                    ${item.seriesName} : <strong>${item.value}</strong>
                </div>`;
                });
                return content;
            }
        },
        textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        },
        legend: {show: false},
        grid: {left: 0, right: 0, top: 10, bottom: 0, containLabel: false},
        xAxis: {
            type: 'category',
            boundaryGap: false,
            data: Array.from({length: 17}, (_, i) => `Day ${i + 1}`),
            axisLine: {show: false},
            axisTick: {show: false},
            axisLabel: {show: false}
        },
        yAxis: {
            type: 'value',
            show: false
        },
        series: [
            {
                name: 'Data',
                type: 'line',
                data: [4, 8, 5, 10, 4, 16, 5, 11, 6, 11, 30, 10, 13, 4, 6, 3, 6],
                smooth: true,
                lineStyle: {
                    color: ins("primary"),
                    width: 2
                },
                symbol: 'none'
            }
        ]
    })
})
