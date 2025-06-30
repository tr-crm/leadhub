/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Chart EChart Bar
 * Version: 4.0.1
 */

//
// basic bar chart
//
new CustomEChart({
    selector: '#chart-basic-bar',
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
            }
        },
        textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        },
        xAxis: {
            type: "category",
            data: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            axisLine: {
                lineStyle: {
                    color: ins('light'), type: "dashed"
                }
            },
            axisTick: {
                show: false
            },
            axisLabel: {
                color: ins('body-color'), formatter: t => t.substring(0, 3), margin: 15
            },
            splitLine: {
                show: false
            }
        },
        yAxis: {
            type: "value",
            boundaryGap: true,
            axisLabel: {
                show: true, color: ins('body-color'), margin: 15
            },
            splitLine: {
                show: true, lineStyle: {
                    color: ins('light')
                }
            },
            axisTick: {
                show: false
            },
            axisLine: {
                show: false
            },
            min: 600
        },
        series: [{
            type: "bar",
            name: "Total",
            data: [820, 950, 1100, 1250, 1420, 1600, 1800, 1750, 1580, 1400, 1250, 1080],
            lineStyle: {
                color: ins('primary-rgb', 1)
            },
            itemStyle: {
                color: ins('primary-rgb', 1),
                barBorderRadius: [3, 3, 0, 0]
            },
            showSymbol: false,
            symbol: "circle",
            smooth: false, hoverAnimation: true
        }],
        grid: {
            right: "2%", left: "7%", bottom: "10%", top: "5%"
        }
    })
})


//
// two bar charts
//
new CustomEChart({
    selector: '#two-bar',
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
            }
        }, textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        }, xAxis: {
            type: "category",
            axisLabel: {
                color: ins("secondary-color"), // formatter: (val) => window.dayjs(val).format("D MMM, YY"),
                fontWeight: 600, fontSize: 10.24, padding: [0, 0, 0, 20]
            },
            splitLine: {
                show: true, interval: "10", lineStyle: {
                    color: ins("tertiary-bg")
                }
            },
            show: true,
            interval: 10,
            data: ["January", "February", "March", "April", "May", "June", "July", "August", "September"],
            axisLine: {
                lineStyle: {
                    color: ins("tertiary-bg")
                }
            },
            axisTick: false
        }, yAxis: {
            show: false,
        }, series: [{
            name: "Actual revenue",
            type: "bar",
            data: [24, 14, 30, 24, 32, 32, 18, 12, 32],
            barWidth: "15px",
            barGap: "0.25",
            label: {
                show: true, position: "top", color: ins("body-color"), fontWeight: "bold", fontSize: "12px"
            },
            z: 10,
            itemStyle: {
                borderRadius: [4, 4, 0, 0], color: ins('info')
            }
        }, {
            name: "Projected revenue",
            type: "bar",
            data: [36, 28, 36, 39, 54, 38, 22, 34, 52],
            barWidth: "15px",
            label: {
                show: true, position: "top", color: ins("primary"), fontWeight: "bold", fontSize: "12px"
            },
            itemStyle: {
                borderRadius: [4, 4, 0, 0], color: ins("primary")
            }
        }], grid: {
            right: 3, left: 0, bottom: 0, top: "5%", containLabel: true
        }, animation: false, xs: {
            series: [{label: {show: false}}, {label: {show: false}}]
        }
    })
})


//
// progress bar chart
//
new CustomEChart({
    selector: '#progress-bar',
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
            }
        }, textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        }, legend: {
            show: false
        }, grid: {
            right: 0, left: 100, bottom: 0, top: 0, containLabel: false
        }, xAxis: {
            type: "value", inverse: true, axisLabel: {show: false}, show: false, axisTick: false
        }, yAxis: {
            type: 'category',
            data: ["January", "February", "March", "April", "May", "June"],
            axisPointer: {type: "none"},
            axisLine: {
                show: false,
            },

            axisTick: "none",
            axisLabel: {
                show: true, align: "left", margin: 80, color: ins("body-color"), fontWeight: 500, fontSize: '14px',
            }
        }, series: [{
            name: '2025',
            type: 'bar',
            data: [1020, 1160, 1300, 958, 1240, 1020],
            barWidth: "25px",
            showBackground: true,
            backgroundStyle: {
                borderRadius: [20, 20, 20, 20], color: ins("body-bg")
            },
            symbol: "circle",
            smooth: false,
            hoverAnimation: true,
            itemStyle: {
                color: ins('primary-rgb', 0.75), barBorderRadius: [20, 20, 20, 20]
            },
            label: {
                show: true, color: ins("white"), fontWeight: 600, fontSize: '13px',
            },
        }]
    })
})


//
// horizontal bar chart
//
new CustomEChart({
    selector: '#chart-hori-bar',
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
            }
        }, legend: {
            show: false
        }, grid: {
            left: '10', right: '25', top: '0%', bottom: '0%', containLabel: true
        }, xAxis: {
            type: 'value', boundaryGap: [0, 0.01], axisLine: {
                lineStyle: {
                    color: '#858d98'
                },
            }, splitLine: {
                lineStyle: {
                    color: "rgba(133, 141, 152, 0.1)"
                }
            }
        }, yAxis: {
            type: 'category',
            data: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            axisLine: {
                lineStyle: {
                    type: 'dashed', color: ins('light') // only line color
                }
            },
            axisLabel: {
                show: true, color: ins('body-color') // force label color (use your normal text color token here)
            },
            splitLine: {
                lineStyle: {
                    color: 'rgba(133, 141, 152, 0.1)'
                }
            }
        }, textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        }, series: [{
            name: '2011',
            type: 'bar',
            data: [1020, 1160, 1300, 958, 1240, 1020, 1409, 1200, 1051, 1120, 1240, 1054],
            symbol: "circle",
            smooth: false,
            hoverAnimation: true,
            itemStyle: {
                color: ins('primary-rgb', 0.75), barBorderRadius: [0, 3, 3, 0]
            },
        }]
    })
})


//
// negative bar chart
//
new CustomEChart({
    selector: '#chart-negative',
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
            shadowOffsetY: 1, // Custom HTML formatter
            formatter: function (params) {
                const title = params[0].name; // xAxis label
                let content = `<div style="font-size: 12px; font-weight: 700; text-transform: uppercase; border-bottom: 1px solid ${ins("border-color")}; margin-bottom: 8px; padding: 3px 10px 8px;">${title}</div>`;
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
        grid: {
            top: 0, bottom: 0
        },
        color: [ins('primary')],
        xAxis: {
            type: 'value',
            position: 'top',
            splitLine: {
                lineStyle: {
                    color: "rgba(133, 141, 152, 0.1)", type: 'dashed'
                }
            }
        },
        yAxis: {
            type: 'category',
            axisLine: {show: false},
            axisLabel: {show: false},
            axisTick: {show: false},
            splitLine: {show: false},
            data: ['Ten', 'Nine', 'Eight', 'Seven', 'Six', 'Five', 'Four', 'Three', 'Two', 'One']
        },
        series: [{
            name: 'Cost',
            type: 'bar',
            stack: 'Total',
            label: {
                show: true, formatter: '{b}'
            },
            data: [
                {
                    value: -0.07,
                    label: {position: 'right'}
                },
                {
                    value: -0.09,
                    label: {position: 'right'}
                },
                {
                    value: 0.2,
                    label: {show: true, color: '#ffffff', formatter: '{b}'}
                },
                {
                    value: 0.44,
                    label: {show: true, color: '#ffffff', formatter: '{b}'}
                },
                {
                    value: -0.23,
                    label: {position: 'right'}
                },
                {
                    value: 0.08,
                    label: {show: true, color: '#ffffff', formatter: '{b}'}
                },
                {
                    value: -0.17,
                    label: {position: 'right'}
                },
                {
                    value: 0.47,
                    label: {show: true, color: '#ffffff', formatter: '{b}'}
                },
                {
                    value: -0.36,
                    label: {position: 'right'}
                },
                {
                    value: 0.18,
                    label: {show: true, color: '#ffffff', formatter: '{b}'}
                },
            ]
        }]
    })
})


//
// series bar chart
//
new CustomEChart({
    selector: '#chart-series-bar',
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
        }, textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        }, legend: {
            show: false,
        }, color: [ins("primary"), ins("secondary")], grid: {
            left: '3%', right: '4%', bottom: '3%', top: 0, containLabel: true
        }, xAxis: {
            type: 'value', boundaryGap: [0, 0.01], axisLabel: {
                show: true, color: ins('body-color')
            }, splitLine: {
                lineStyle: {
                    color: "rgba(133, 141, 152, 0.1)", type: 'dashed'
                }
            }
        }, yAxis: {
            type: 'category', data: ['Brazil', 'Indonesia', 'USA', 'India', 'China', 'World'], axisLine: {
                lineStyle: {
                    type: 'dashed', color: ins('light')
                }
            }, axisLabel: {
                show: true, color: ins('body-color')
            }, splitLine: {
                lineStyle: {
                    color: "rgba(133, 141, 152, 0.1)", type: 'dashed'
                }
            }
        }, series: [{
            name: '2011', type: 'bar', data: [18203, 23489, 29034, 104970, 131744, 630230]
        }, {
            name: '2012', type: 'bar', data: [19325, 23438, 31000, 121594, 134141, 681807]
        }]
    })
})


//
// stacked bar chart
//
const series = [
    {
        data: [120, 200, 150, 80, 70, 110, 130], type: 'bar', stack: 'a', name: 'a'
    }, {
        data: [10, 46, 64, '-', 0, '-', 0], type: 'bar', stack: 'a', name: 'b'
    }, {
        data: [30, '-', 0, 20, 10, '-', 0], type: 'bar', stack: 'a', name: 'c'
    }, {
        data: [30, '-', 0, 20, 10, '-', 0], type: 'bar', stack: 'b', name: 'd'
    }, {
        data: [10, 20, 150, 0, '-', 50, 10], type: 'bar', stack: 'b', name: 'e'
    }
];

const stackInfo = {};

for (let i = 0; i < series[0].data.length; ++i) {
    for (let j = 0; j < series.length; ++j) {
        const stackName = series[j].stack;
        if (!stackName) continue;
        if (!stackInfo[stackName]) {
            stackInfo[stackName] = {
                stackStart: [], stackEnd: []
            };
        }
        const info = stackInfo[stackName];
        const data = series[j].data[i];
        if (data && data !== '-') {
            if (info.stackStart[i] == null) {
                info.stackStart[i] = j;
            }
            info.stackEnd[i] = j;
        }
    }
}

for (let i = 0; i < series.length; ++i) {
    const data = series[i].data;
    const info = stackInfo[series[i].stack];
    for (let j = 0; j < series[i].data.length; ++j) {
        const isEnd = info.stackEnd[j] === i;
        const topBorder = isEnd ? 20 : 0;
        const bottomBorder = 0;
        data[j] = {
            value: data[j], itemStyle: {
                borderRadius: [topBorder, topBorder, bottomBorder, bottomBorder]
            }
        };
    }
}

new CustomEChart({
    selector: '#chart-stacked-bar',
    options: () => ({
        xAxis: {
            type: 'category', data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], axisLine: {
                lineStyle: {
                    type: 'dashed', color: ins('light')
                }
            }, axisLabel: {
                show: true, color: ins('body-color')
            }, splitLine: {
                lineStyle: {
                    color: "rgba(133, 141, 152, 0.1)", type: 'dashed'
                }
            }
        }, yAxis: {
            type: 'value', axisLine: {
                lineStyle: {
                    type: 'dashed', color: ins('light')
                }
            }, axisLabel: {
                show: true, color: ins('body-color')
            }, splitLine: {
                lineStyle: {
                    color: "rgba(133, 141, 152, 0.1)", type: 'dashed'
                }
            }
        }, textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        }, grid: {
            left: '0%', right: '0%', bottom: '0%', top: '5%', containLabel: true
        }, color: [ins("primary"), ins("secondary"), ins("warning"), ins("info"), ins("purple")], tooltip: {
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
        }, series: series
    })
})


//
//  horizontal stacked bar chart
//
new CustomEChart({
    selector: '#chart-horizontal-stacked-bar',
    options: () => ({
        xAxis: {
            type: 'value', axisLine: {
                lineStyle: {
                    type: 'dashed', color: ins('light')
                }
            }, axisLabel: {
                show: true, color: ins('body-color')
            }, splitLine: {
                lineStyle: {
                    color: "rgba(133, 141, 152, 0.1)", type: 'dashed'
                }
            }
        }, yAxis: {
            type: 'category', data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], axisLine: {
                lineStyle: {
                    type: 'dashed', color: ins('light')
                }
            }, axisLabel: {
                show: true, color: ins('body-color')
            }, splitLine: {
                lineStyle: {
                    color: "rgba(133, 141, 152, 0.1)", type: 'dashed'
                }
            }
        }, textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        }, grid: {
            left: '10px', top: '10%', right: '4%', bottom: '0', containLabel: true
        }, color: [ins("primary"), ins("secondary"), ins("warning"), ins("info"), ins("purple")], tooltip: {
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
        }, legend: {
            textStyle: {color: ins("body-color")}
        }, series: [{
            name: 'Direct', type: 'bar', stack: 'total', label: {
                show: true, color: 'white'
            }, emphasis: {
                focus: 'series'
            }, data: [320, 302, 301, 334, 390, 330, 320]
        }, {
            name: 'Mail Ad', type: 'bar', stack: 'total', label: {
                show: true, color: 'white'
            }, emphasis: {
                focus: 'series'
            }, data: [120, 132, 101, 134, 90, 230, 210]
        }, {
            name: 'Affiliate Ad', type: 'bar', stack: 'total', label: {
                show: true, color: 'white'
            }, emphasis: {
                focus: 'series'
            }, data: [220, 182, 191, 234, 290, 330, 310]
        }, {
            name: 'Video Ad', type: 'bar', stack: 'total', label: {
                show: true, color: 'white'
            }, emphasis: {
                focus: 'series'
            }, data: [150, 212, 201, 154, 190, 330, 410]
        }, {
            name: 'Search Engine', type: 'bar', stack: 'total', label: {
                show: true, color: 'white'
            }, emphasis: {
                focus: 'series'
            }, data: [820, 832, 901, 934, 1290, 1330, 1320]
        }]
    })
})


//
// bar race chart
//
const data = [];
for (let i = 0; i < 5; ++i) data.push(Math.round(Math.random() * 200));

const barRaceChart = new CustomEChart({
    selector: '#chart-bar-race-chart',
    options: () => ({
        xAxis: {
            max: 'dataMax',
            axisLine: {lineStyle: {type: 'dashed', color: ins('light')}},
            axisLabel: {show: true, color: ins('body-color')},
            splitLine: {lineStyle: {color: "rgba(133, 141, 152, 0.1)", type: 'dashed'}}
        },
        yAxis: {
            type: 'category',
            data: ["A", "B", "C", "D", "E", "F"],
            inverse: true,
            animationDuration: 300,
            animationDurationUpdate: 300,
            max: 3,
            axisLine: {lineStyle: {type: 'dashed', color: ins('light')}},
            axisLabel: {show: true, color: ins('body-color')},
            splitLine: {lineStyle: {color: "rgba(133, 141, 152, 0.1)", type: 'dashed'}}
        },
        textStyle: {fontFamily: getComputedStyle(document.body).fontFamily},
        grid: {right: "10%", left: 5, bottom: 5, top: 5, containLabel: true},
        animationDuration: 0,
        animationDurationUpdate: 3000,
        animationEasing: 'linear',
        animationEasingUpdate: 'linear',
        series: [{
            type: 'bar', name: 'X', realtimeSort: true, data: data, label: {
                show: true, position: 'right', color: ins("body-color"), fontWeight: 500, valueAnimation: true
            }, itemStyle: {
                color: ins("secondary"), barBorderRadius: [0, 3, 3, 0]
            }
        }]
    })
})

function run() {
    for (let i = 0; i < data.length; ++i) {
        data[i] += Math.round(Math.random() * (Math.random() > 0.9 ? 2000 : 200));
    }
    barRaceChart.chart.setOption({series: [{type: 'bar', data}]});
}

setTimeout(run, 0);
setInterval(run, 3000);


//
// gradient bar chart
//
const dataAxis = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20'];

const gradientBarChart = new CustomEChart({
    selector: '#chart-bar-gradient',
    options: () => ({
        xAxis: {
            data: dataAxis,
            axisLine: {lineStyle: {type: 'dashed', color: ins('light')}},
            axisLabel: {show: true, inside: true, color: "#ffffff"},
            splitLine: {lineStyle: {color: "rgba(133, 141, 152, 0.1)", type: 'dashed'}},
            axisTick: {show: false},
            z: 10
        },
        yAxis: {
            axisTick: {show: false},
            axisLine: {show: false},
            axisLabel: {show: true, color: ins('body-color')},
            splitLine: {lineStyle: {color: "rgba(133, 141, 152, 0.1)", type: 'dashed'}}
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
        dataZoom: [{type: 'inside'}],
        textStyle: {fontFamily: getComputedStyle(document.body).fontFamily},
        grid: {right: 5, left: 5, bottom: 5, top: 10, containLabel: true},
        series: [{
            type: 'bar', showBackground: false, itemStyle: {
                color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{offset: 0, color: ins("danger")}, {
                    offset: 0.5, color: ins("purple")
                }, {offset: 1, color: ins("secondary")}]), barBorderRadius: [3, 3, 0, 0]
            }, emphasis: {
                itemStyle: {
                    color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                        offset: 0, color: ins("primary")
                    }, {offset: 0.7, color: ins("primary")}, {offset: 1, color: ins("info")}])
                }
            }, data: [220, 182, 191, 234, 290, 330, 310, 123, 442, 321, 90, 149, 210, 122, 133, 334, 198, 123, 125, 220]
        }]
    })
})

const zoomSize = 6;
gradientBarChart.chart.on('click', function (params) {
    gradientBarChart.chart.dispatchAction({
        type: 'dataZoom',
        startValue: dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)],
        endValue: dataAxis[Math.min(params.dataIndex + zoomSize / 2, data.length - 1)]
    });
});


//
// mixed bar chart
//
new CustomEChart({
    selector: '#chart-mixed-bar',
    options: () => ({
        textStyle: {fontFamily: getComputedStyle(document.body).fontFamily}, legend: {
            data: ['Evaporation', 'Precipitation', 'Temperature'], textStyle: {color: ins("body-color")}
        }, xAxis: [{
            type: 'category',
            data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            axisPointer: {type: 'shadow'},
            axisTick: {show: false},
            axisLine: {show: false},
            axisLabel: {show: true, color: ins('body-color')},
            splitLine: {lineStyle: {color: "rgba(133, 141, 152, 0.1)", type: 'dashed'}}
        }], yAxis: [{
            type: 'value',
            min: 0,
            max: 250,
            interval: 50,
            axisLabel: {formatter: '{value} ml', show: true, color: ins('body-color')},
            axisTick: {show: false},
            axisLine: {show: false},
            splitLine: {lineStyle: {color: "rgba(133, 141, 152, 0.1)", type: 'dashed'}}
        }, {
            type: 'value',
            min: 0,
            max: 25,
            interval: 5,
            axisLabel: {formatter: '{value} °C', show: true, color: ins('body-color')},
            axisTick: {show: false},
            axisLine: {show: false},
            splitLine: {lineStyle: {color: "rgba(133, 141, 152, 0.1)", type: 'dashed'}}
        }], grid: {left: '0%', right: '0%', bottom: '0%', top: '12%', containLabel: true}, tooltip: {
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
        }, series: [{
            name: 'Evaporation',
            type: 'bar',
            tooltip: {valueFormatter: value => value + ' ml'},
            itemStyle: {color: ins('primary-rgb', 0.75), barBorderRadius: [3, 3, 0, 0]},
            data: [2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6]
        }, {
            name: 'Precipitation',
            type: 'bar',
            tooltip: {valueFormatter: value => value + ' ml'},
            itemStyle: {color: ins('danger-rgb', 0.75), barBorderRadius: [3, 3, 0, 0]},
            data: [2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6]
        }, {
            name: 'Temperature',
            type: 'line',
            yAxisIndex: 1,
            tooltip: {valueFormatter: value => value + ' °C'},
            itemStyle: {color: ins('purple-rgb', 0.75), barBorderRadius: [3, 3, 0, 0]},
            data: [2.0, 2.2, 3.3, 4.5, 6.3, 10.2, 20.3]
        }]
    })
})


//
// timeline bar chart
//
const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
const chartData = {};

const transformData = (dataSet) => {
    return Object.keys(dataSet).reduce((acc, year) => {
        acc[year] = dataSet[year].map((value, index) => ({
            name: months[index], value: value
        }));
        return acc;
    }, {});
};

const generateRandomData = () => {
    const data = {};
    const years = [2019, 2020, 2021, 2022, 2023, 2024, 2025];
    years.forEach(year => {
        data[year] = Array.from({length: 12}, () => +(Math.random() * 3000 + 100).toFixed(2));
    });
    return data;
};

chartData.dataPI = transformData(generateRandomData());
chartData.dataSI = transformData(generateRandomData());
chartData.dataTI = transformData(generateRandomData());

new CustomEChart({
    selector: '#chart-timeline-bar',
    options: () => ({
        baseOption: {
            timeline: {
                axisType: "category",
                autoPlay: false,
                playInterval: 1000,
                data: ["2019-01-01", "2020-01-01", "2021-01-01", "2022-01-01", "2023-01-01", "2024-01-01", "2025-01-01"],
                label: {
                    formatter: (s) => new Date(s).getFullYear()
                },
                lineStyle: {color: ins("border-color")},
                itemStyle: {color: ins("border-color")},
                checkpointStyle: {
                    color: ins("primary"),
                    shadowBlur: 0,
                    shadowOffsetX: 0,
                    shadowOffsetY: 0,
                    lineStyle: {color: ins("border-color")},
                },
                controlStyle: {color: ins("info")}
            }, title: {
                textStyle: {color: ins("tertiary-color")}
            }, tooltip: {
                trigger: "axis",
                padding: [5, 0],
                backgroundColor: ins("secondary-bg"),
                borderColor: ins("border-color"),
                textStyle: {color: ins("light-text-emphasis")},
                borderWidth: 1,
                transitionDuration: 0.125,
                axisPointer: {type: "shadow"},
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
                }
            }, textStyle: {
                fontFamily: getComputedStyle(document.body).fontFamily
            }, legend: {
                left: "right",
                data: ["Primary industry", "Secondary industry", "Tertiary Industry"],
                textStyle: {color: ins("tertiary-color")}
            }, calculable: true, xAxis: [{
                type: "category",
                data: months,
                splitLine: {show: false},
                axisLine: {
                    lineStyle: {
                        type: 'dashed', color: ins('light') // only line color
                    }
                },
                axisLabel: {
                    show: true, color: ins('body-color') // force label color (use your normal text color token here)
                }
            }], yAxis: [{
                type: "value", axisLabel: {
                    formatter: val => val / 1000 + "k", color: ins("body-color")
                }, axisLine: {
                    lineStyle: {
                        type: 'dashed', color: ins('light') // only line color
                    }
                }, splitLine: {
                    lineStyle: {
                        color: "rgba(133, 141, 152, 0.1)", type: 'dashed'
                    }
                }
            }], series: [{
                name: "Primary industry", type: "bar", barWidth: "15px", barGap: "0.25", itemStyle: {
                    color: ins("primary"), barBorderRadius: [3, 3, 0, 0]
                }
            }, {
                name: "Secondary industry", type: "bar", barWidth: "15px", barGap: "0.25", itemStyle: {
                    color: ins("info"), barBorderRadius: [3, 3, 0, 0]
                }
            }, {
                name: "Tertiary Industry", type: "bar", barWidth: "15px", barGap: "0.25", itemStyle: {
                    color: ins("warning"), barBorderRadius: [3, 3, 0, 0]
                }
            }], grid: {
                top: "10%", bottom: "15%", left: 5, right: 10, containLabel: true
            }
        },

        options: [2019, 2020, 2021, 2022, 2023, 2024, 2025].map(year => ({
            title: {text: String(year)},
            series: [{data: chartData.dataPI[year]}, {data: chartData.dataSI[year]}, {data: chartData.dataTI[year]}]
        }))
    })
})