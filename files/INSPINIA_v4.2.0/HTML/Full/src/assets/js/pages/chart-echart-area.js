/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Chart EChart Area
 * Version: 4.0.1
 */

//
//  basic line chart
//
new CustomEChart({
    selector: '#chart-line',
    options: () => ({
        grid: {
            left: '0%', right: '0%', bottom: '0%', top: '4%', containLabel: true
        },
        xAxis: {
            type: 'category',
            data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], axisLine: {
                lineStyle: {
                    color: ins('body-secondary-color'),
                },
            },
        },
        yAxis: {
            type: 'value', axisLine: {
                lineStyle: {
                    color: '#858d98'
                },
            }, splitLine: {
                lineStyle: {
                    color: "rgba(133, 141, 152, 0.1)"
                }
            }
        },
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
            shadowOffsetY: 1, // Custom HTML formatter
            formatter: function (params) {
                const title = params[0].name; // xAxis label
                let content = `<div style="font-size: 14px; font-weight: 600; text-transform: uppercase; border-bottom: 1px solid ${ins("border-color")}; margin-bottom: 8px; padding: 3px 10px 8px;">${title}</div>`;
                params.forEach(item => {
                    content += `<div style="margin-top: 4px; padding: 3px 15px;">
                            <span style="display:inline-block;margin-right:5px;border-radius:50%;width:10px;height:10px;background-color:${item.color};"></span>
                            ${item.seriesName} : <strong>${item.value}</strong>
                        </div>`;
                });
                return content;
            },
        },
        series: [{
            data: [150, 180, 120, 190, 110, 170, 130], type: 'line', areaStyle: {
                opacity: 0.2, // Adjust opacity as needed
                color: ins('primary')
            }, lineStyle: {
                color: ins('primary')
            },
            symbol: 'circle',
            symbolSize: 6
        }],
        textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        },
        color: [ins('primary')]
    })
})


//
// stacked line charts
//
new CustomEChart({
    selector: '#chart-line-stacked',
    options: () => ({
        textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        },
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
            shadowOffsetY: 1, // Custom HTML formatter
            formatter: function (params) {
                const title = params[0].name; // xAxis label
                let content = `<div style="font-size: 14px; font-weight: 600; text-transform: uppercase; border-bottom: 1px solid ${ins("border-color")}; margin-bottom: 8px; padding: 3px 10px 8px;">${title}</div>`;
                params.forEach(item => {
                    content += `<div style="margin-top: 4px; padding: 3px 15px;">
                            <span style="display:inline-block;margin-right:5px;border-radius:50%;width:10px;height:10px;background-color:${item.color};"></span>
                            ${item.seriesName} : <strong>${item.value}</strong>
                        </div>`;
                });
                return content;
            },
        },
        xAxis: {
            type: "category",
            data: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            boundaryGap: false,
            axisLine: {
                lineStyle: {
                    color: ins("tertiary-bg"), type: "dashed"
                }
            },
            axisTick: {
                show: false
            },
            axisLabel: {
                color: ins("body-color"), margin: 15
            },
            splitLine: {
                show: false
            }
        },
        yAxis: {
            type: "value",
            splitLine: {
                lineStyle: {
                    color: ins("border-color"), type: "dashed"
                }
            },
            boundaryGap: false,
            axisLabel: {
                show: true,
                color: ins("body-color"), margin: 15
            },
            axisTick: {
                show: false
            },
            axisLine: {
                show: false
            }
        },
        series: [
            {
                name: "Matcha Latte",
                type: "line",
                symbolSize: 6,
                itemStyle: {
                    color: ins("info"), borderColor: ins("info"), borderWidth: 2
                },
                areaStyle: {
                    opacity: 0.2, // Adjust opacity as needed
                    color: ins('info')
                },
                lineStyle: {
                    color: ins("info")
                },
                symbol: "circle", stack: "product", data: [120, 132, 101, 134, 90, 230, 210]
            },
            {
                name: "Milk Tea",
                type: "line",
                symbolSize: 10,
                itemStyle: {
                    color: ins("success"),
                    borderColor: ins("success"),
                    borderWidth: 2
                },
                areaStyle: {
                    opacity: 0.2, // Adjust opacity as needed
                    color: ins('success')
                },
                lineStyle: {
                    color: ins("success")
                },
                symbol: "circle",
                stack: "product",
                data: [220, 182, 191, 234, 290, 330, 310]
            },
            {
                name: "Cheese Cocoa",
                type: "line",
                symbolSize: 10,
                itemStyle: {
                    color: ins("danger"),
                    borderColor: ins("danger"), borderWidth: 2
                },
                areaStyle: {
                    opacity: 0.2, // Adjust opacity as needed
                    color: ins('danger')
                },
                lineStyle: {
                    color: ins("danger")
                },
                symbol: "circle",
                stack: "product",
                data: [150, 232, 201, 154, 190, 330, 410]
            },
            {
                name: "Cheese Brownie",
                type: "line",
                symbolSize: 10,
                itemStyle: {
                    color: ins("warning"),
                    borderColor: ins("warning"),
                    borderWidth: 2
                },
                areaStyle: {
                    opacity: 0.2, // Adjust opacity as needed
                    color: ins('warning')
                },
                lineStyle: {
                    color: ins("warning")
                },
                symbol: "circle",
                stack: "product",
                data: [320, 332, 301, 334, 390, 330, 320]
            },
            {
                name: "Matcha Cocoa",
                type: "line",
                symbolSize: 10,
                itemStyle: {
                    color: ins("primary"),
                    borderColor: ins("primary"),
                    borderWidth: 2
                },
                lineStyle: {
                    color: ins("primary")
                },
                symbol: "circle",
                stack: "product",
                data: [820, 932, 901, 934, 1290, 1330, 1320]
            }
        ],
        grid: {
            right: 22, left: 5, bottom: 5, top: 8, containLabel: true
        }
    })
})


//
// line chart with marker
//
new CustomEChart({
    selector: '#chart-line-marker',
    options: () => ({
        textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        }, color: [ins("primary"), ins("warning")], tooltip: {
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
            shadowOffsetY: 1, // Custom HTML formatter
            formatter: function (params) {
                const title = params[0].name; // xAxis label
                let content = `<div style="font-size: 14px; font-weight: 600; text-transform: uppercase; border-bottom: 1px solid ${ins("border-color")}; margin-bottom: 8px; padding: 3px 10px 8px;">${title}</div>`;
                params.forEach(item => {
                    content += `<div style="margin-top: 4px; padding: 3px 15px;">
                            <span style="display:inline-block;margin-right:5px;border-radius:50%;width:10px;height:10px;background-color:${item.color};"></span>
                            ${item.seriesName} : <strong>${item.value}</strong>
                        </div>`;
                });
                return content;
            },
        }, xAxis: {
            type: "category",
            data: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            boundaryGap: false,
            axisLine: {
                lineStyle: {color: ins("tertiary-bg"), type: "solid"}
            },
            axisTick: {show: false},
            axisLabel: {
                color: ins("body-color"), margin: 15
            },
            splitLine: {show: false}
        }, yAxis: {
            type: "value", splitLine: {lineStyle: {color: ins("border-color")}}, boundaryGap: false, axisLabel: {
                show: true, color: ins("body-color"), margin: 15
            }, axisTick: {show: false}, axisLine: {show: false}
        }, series: [{
            name: "Max", type: "line", data: [10, 11, 13, 11, 12, 9, 12], symbolSize: 10, areaStyle: {
                opacity: 0.2, // Adjust opacity as needed
                color: ins('primary')
            }, lineStyle: {color: ins("primary")}, symbol: "circle", markPoint: {
                itemStyle: {color: ins("primary")},
                label: {color: "#fff"},
                data: [{type: "max", name: "Max"}, {type: "min", name: "Min"}]
            }, markLine: {
                lineStyle: {color: ins("primary")},
                label: {color: ins("body-color")},
                data: [{type: "average", name: "average"}]
            }
        }, {
            name: "Min", type: "line", data: [1, -2, 2, 5, 3, 2, 0], symbolSize: 10, itemStyle: {
                color: ins("danger"), borderColor: ins("danger"), borderWidth: 2
            }, areaStyle: {
                opacity: 0.2, // Adjust opacity as needed
                color: ins('danger')
            }, lineStyle: {color: ins("danger")}, symbol: "circle", markPoint: {
                itemStyle: {color: ins("danger")},
                label: {color: "#fff"},
                data: [{name: "Weekly lowest", value: -2, xAxis: 1, yAxis: -1.5}]
            }, markLine: {
                lineStyle: {color: ins("danger")},
                label: {color: ins("body-color")},
                data: [{type: "average", name: "average"}, [{symbol: "none", x: "90%", yAxis: "max"}, {
                    symbol: "circle", label: {position: "start", formatter: "Max"}, type: "max", name: "Highest point"
                }]]
            }
        }], grid: {
            right: "5%", left: "5%", bottom: "10%", top: "15%"
        }
    })
})


//
// dynamic line chart
//
function randomData() {
    now = new Date(+now + oneDay);
    value = value + Math.random() * 21 - 10;
    return {
        name: now.toString(),
        value: [[now.getFullYear(), now.getMonth() + 1, now.getDate()].join('/'), Math.round(value)]
    };
}

let data = [];
let now = new Date(2023, 9, 3);
let oneDay = 24 * 3600 * 1000;
let value = Math.random() * 100;

for (let i = 0; i < 1000; i++) {
    data.push(randomData());
}

const dynamicChart = new CustomEChart({
    selector: '#chart-dynamic-line',
    options: () => ({
        textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        }, color: [ins('purple')], tooltip: {
            trigger: 'axis',
            formatter: function (params) {
                params = params[0];
                const date = new Date(params.name);
                const day = date.getDate();
                const month = date.toLocaleString('default', {month: 'long'});
                const year = date.getFullYear();
                return `${day} ${month}, ${year} : ${params.value[1]}`;
            },
            axisPointer: {
                animation: false, type: "none"
            },
            padding: [12, 16],
            backgroundColor: ins("secondary-bg"),
            borderColor: ins("border-color"),
            textStyle: {color: ins("light-text-emphasis")},
            borderWidth: 1,
            transitionDuration: 0.125,
            shadowBlur: 2,
            shadowColor: "rgba(76, 76, 92, 0.15)",
            shadowOffsetX: 0,
            shadowOffsetY: 1
        }, xAxis: {
            type: 'time', splitLine: {
                show: false
            }, axisLine: {
                lineStyle: {color: ins("tertiary-bg"), type: "solid"}
            }, axisLabel: {
                color: ins("body-color"), margin: 15
            },
        }, yAxis: {
            type: 'value', boundaryGap: [0, '100%'], axisLabel: {
                show: true, color: ins("body-color"), margin: 15
            }, splitLine: {
                lineStyle: {
                    color: "rgba(133, 141, 152, 0.1)"
                }
            }
        }, grid: {
            right: "5%", left: "7%", bottom: "10%", top: "5%"
        }, series: [{
            name: 'Fake Data', type: 'line', showSymbol: false, data: data, areaStyle: {
                opacity: 0.2, // Adjust opacity as needed
            }, lineStyle: {
                width: 3 // <-- Set line thickness here
            }
        }]
    })
})

setInterval(function () {
    for (let i = 0; i < 5; i++) {
        data.shift();
        data.push(randomData());
    }
    dynamicChart.chart.setOption({
        series: [{
            data: data
        }]
    });
}, 1000);


//
// step line chart
//
new CustomEChart({
    selector: '#chart-step-line',
    options: () => ({
        tooltip: {
            trigger: 'axis',
            padding: [12, 16],
            backgroundColor: ins("secondary-bg"),
            borderColor: ins("border-color"),
            textStyle: {color: ins("light-text-emphasis")},
            borderWidth: 1,
            transitionDuration: 0.125,
            axisPointer: {type: "none"},
            shadowBlur: 2,
            shadowColor: "rgba(76, 76, 92, 0.15)",
            shadowOffsetX: 0,
            shadowOffsetY: 1
        }, legend: {
            data: ['Step Start', 'Step Middle', 'Step End'], textStyle: { //The style of the legend text
                color: '#858d98',
            },
        }, grid: {
            left: '0%', right: '0%', bottom: '0%', containLabel: true
        }, xAxis: {
            type: 'category', data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], axisLine: {
                lineStyle: {color: ins("tertiary-bg"), type: "dashed"}
            }, axisLabel: {
                color: ins("body-color"), margin: 15
            },
        }, yAxis: {
            type: 'value', axisLine: {
                lineStyle: {
                    color: '#858d98'
                },
            }, splitLine: {
                lineStyle: {
                    color: "rgba(133, 141, 152, 0.1)"
                }
            }
        }, textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        }, color: [ins('purple'), ins('warning'), ins('success')], series: [{
            name: 'Step Start', type: 'line', areaStyle: {
                opacity: 0.2, // Adjust opacity as needed
            }, step: 'start', data: [120, 132, 101, 134, 90, 230, 210]
        }, {
            name: 'Step Middle', type: 'line', areaStyle: {
                opacity: 0.2, // Adjust opacity as needed
            }, step: 'middle', data: [220, 282, 201, 234, 290, 430, 410]
        }, {
            name: 'Step End', type: 'line', step: 'end', data: [450, 432, 401, 454, 590, 530, 510]
        }]
    })
})