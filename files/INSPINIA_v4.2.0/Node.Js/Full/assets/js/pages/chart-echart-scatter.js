/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Chart EChart Scatter
 * Version: 4.0.1
 */

//
// basic scatter chart
//
new CustomEChart({
    selector: '#echart-scatter-basic',
    options: () => ({
        tooltip: {
            trigger: "item",
            padding: [5, 10],
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
        }, xAxis: {
            axisLine: {
                lineStyle: {
                    type: 'dashed', color: ins('light') // only line color
                }
            }, axisLabel: {
                show: true, color: ins('body-color') // force label color (use your normal text color token here)
            }, splitLine: {
                lineStyle: {
                    color: "rgba(133, 141, 152, 0.1)", type: 'dashed'
                }
            }
        }, yAxis: {
            axisLine: {
                lineStyle: {
                    type: 'dashed', color: ins('light') // only line color
                }
            }, axisLabel: {
                show: true, color: ins('body-color') // force label color (use your normal text color token here)
            }, splitLine: {
                lineStyle: {
                    color: "rgba(133, 141, 152, 0.1)", type: 'dashed'
                }
            }
        }, textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        }, series: [{
            data: [[10, 8.04], [8.07, 6.95], [13, 7.58], [9.05, 8.81], [11, 8.33], [14, 7.66], [13.4, 6.81], [10, 6.33], [14, 8.96], [12.5, 6.82], [9.15, 7.2], [11.5, 7.2], [3.03, 4.23], [12.2, 7.83], [2.02, 4.47], [1.05, 3.33], [4.05, 4.96], [6.03, 7.24], [12, 6.26], [12, 8.84], [7.08, 5.82], [5.02, 5.68]],
            type: "scatter",
            itemStyle: {
                color: ins("danger")
            }
        }], grid: {
            right: 8, left: 5, bottom: 5, top: 8, containLabel: true
        }
    })
})


//
// bubble chart
//
const countries = ["Australia", "Canada", "China", "Finland", "France", "Germany", "India", "Japan", "South Korea", "New Zealand", "Norway", "Poland", "Russia", "United Kingdom", "United States"];

const generateRandomData = (year) => countries.map(country => [Math.floor(Math.random() * 50000 + 5000),     // GDP
    Math.floor(Math.random() * 30 + 60),          // Life Expectancy
    Math.floor(Math.random() * 1000000000 + 5000000), // Population
    country, year]);

const data1 = [generateRandomData(1990), generateRandomData(2015)];

new CustomEChart({
    selector: '#echart-bubble-chart',
    options: () => ({
        title: {
            text: "1990 and 2015 have per capita and GDP", left: 0, top: 0, textStyle: {
                color: ins("body-color"), fontWeight: 500, fontSize: 12
            }
        }, legend: {
            right: "10px", top: "0", data: ["1990", "2015"], textStyle: {
                color: ins("body-color")
            }
        }, xAxis: {
            axisLine: {
                lineStyle: {
                    type: 'dashed', color: ins('light') // only line color
                }
            }, axisLabel: {
                show: true, formatter: value => value / 1000 + "k", color: ins('body-color') // force label color (use your normal text color token here)
            }, splitLine: {
                lineStyle: {
                    color: "rgba(133, 141, 152, 0.1)", type: 'dashed'
                }
            }
        }, yAxis: {
            scale: true, axisLine: {
                lineStyle: {
                    type: 'dashed', color: ins('light') // only line color
                }
            }, axisLabel: {
                show: true, color: ins('body-color') // force label color (use your normal text color token here)
            }, splitLine: {
                lineStyle: {
                    color: "rgba(133, 141, 152, 0.1)", type: 'dashed'
                }
            }
        }, textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        }, series: [{
            name: "1990", data: data1[0], type: "scatter", symbolSize: val => Math.sqrt(val[2]) / 500, emphasis: {
                focus: "series", label: {
                    color: ins("tertiary-color"), show: true, formatter: param => param.data[3], position: "top"
                }
            }, itemStyle: {
                color: ins("primary", 0.7)
            }
        }, {
            name: "2015", data: data1[1], type: "scatter", symbolSize: val => Math.sqrt(val[2]) / 700, emphasis: {
                focus: "series", label: {
                    color: ins("body-color"), show: true, formatter: param => param.data[3], position: "top"
                }
            }, itemStyle: {
                color: ins("warning", 0.7)
            }
        }], grid: {
            left: 5, right: 10, bottom: 5, top: "15%", containLabel: true
        }
    })
})


//
// quartet scatter chart
//
const datasets = [[[10, 8.04], [8, 6.95], [13, 7.58], [9, 8.81], [11, 8.33], [14, 9.96], [6, 7.24], [4, 4.26], [12, 10.84], [7, 4.82], [5, 5.68]], [[10, 9.14], [8, 8.14], [13, 8.74], [9, 8.77], [11, 9.26], [14, 8.1], [6, 6.13], [4, 3.1], [12, 9.13], [7, 7.26], [5, 4.74]], [[10, 7.46], [8, 6.77], [13, 12.74], [9, 7.11], [11, 7.81], [14, 8.84], [6, 6.08], [4, 5.39], [12, 8.15], [7, 6.42], [5, 5.73]], [[8, 6.58], [8, 5.76], [8, 7.71], [8, 8.84], [8, 8.47], [8, 7.04], [8, 5.25], [19, 12.5], [8, 5.56], [8, 7.91], [8, 6.89]]];

const xAxisStyle = () => ({
    axisLabel: {color: ins("body-color")},
    axisLine: {show: true, lineStyle: {color: ins("border-color"), type: 'dashed'}},
    splitLine: {show: true, lineStyle: {color: ins("border-color"), type: 'dashed'}}
});

const yAxisStyle = () => ({
    axisLabel: {color: ins("body-color")},
    splitLine: {show: true, lineStyle: {color: ins("border-color"), type: 'dashed'}},
    axisLine: {show: true, lineStyle: {color: ins("border-bg"), type: 'dashed'}}
});

const markLine = {
    animation: false, label: {
        formatter: "y = 0.5 * x + 3", align: "right", color: ins("body-color"), fontWeight: 600
    }, lineStyle: {type: "solid"}, tooltip: {
        formatter: "y = 0.5 * x + 3"
    }, data: [[{coord: [0, 3], symbol: "none"}, {coord: [20, 13], symbol: "none"}]]
};

const gridLarge = [{left: "7%", top: "10%", width: "38%", height: "38%"}, {
    right: "7%", top: "10%", width: "38%", height: "38%"
}, {left: "7%", bottom: "7%", width: "38%", height: "38%"}, {
    right: "7%", bottom: "7%", width: "38%", height: "38%"
}];

const gridSmall = [{left: 6, right: 7, top: "4%", height: "20%"}, {
    left: 6, right: 7, top: "29%", height: "20%"
}, {left: 6, right: 7, bottom: "26%", height: "20%"}, {left: 6, right: 7, bottom: 25, height: "20%"}];


new CustomEChart({
    selector: '#echart-quartet-scatter',
    options: () => ({
        color: [ins("primary"), ins("success"), ins("warning"), ins("danger")],
        tooltip: {
            trigger: "item",
            padding: [5, 10],
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
            formatter: "Group {a}: ({c})"
        },
        title: {
            text: "Anscombe's quartet", left: "center", top: 0, textStyle: {color: ins("body-color"), fontSize: 14}
        },
        textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        },
        grid: window.innerWidth < 768 ? gridSmall : gridLarge,
        xAxis: [{gridIndex: 0, min: 0, max: 20, ...xAxisStyle()}, {
            gridIndex: 1, min: 0, max: 20, ...xAxisStyle()
        }, {gridIndex: 2, min: 0, max: 20, ...xAxisStyle()}, {gridIndex: 3, min: 0, max: 20, ...xAxisStyle()}],
        yAxis: [{gridIndex: 0, min: 0, max: 15, ...yAxisStyle()}, {
            gridIndex: 1, min: 0, max: 15, ...yAxisStyle()
        }, {gridIndex: 2, min: 0, max: 15, ...yAxisStyle()}, {gridIndex: 3, min: 0, max: 15, ...yAxisStyle()}],
        series: [{name: "I", type: "scatter", xAxisIndex: 0, yAxisIndex: 0, data: datasets[0], markLine}, {
            name: "II", type: "scatter", xAxisIndex: 1, yAxisIndex: 1, data: datasets[1], markLine
        }, {name: "III", type: "scatter", xAxisIndex: 2, yAxisIndex: 2, data: datasets[2], markLine}, {
            name: "IV", type: "scatter", xAxisIndex: 3, yAxisIndex: 3, data: datasets[3], markLine
        }],
        xs: {grid: gridSmall},
        md: {grid: gridLarge}
    })
})


//
// single axis scatter chart
//
const hours = ["12am", "1am", "2am", "3am", "4am", "5am", "6am", "7am", "8am", "9am", "10am", "11am", "12pm", "1pm", "2pm", "3pm", "4pm", "5pm", "6pm", "7pm", "8pm", "9pm", "10pm", "11pm"];
const days = ["Saturday", "Friday", "Thursday", "Wednesday", "Tuesday", "Monday", "Sunday"];
const data = [];

for (let day = 0; day < 7; day++) {
    for (let hour = 0; hour < 24; hour++) {
        const value = Math.floor(Math.random() * 10); // Random value between 0 and 9
        data.push([hour, day, value]);
    }
}

new CustomEChart({
    selector: '#echart-single-axis-scatter',
    options: () => ({
        tooltip: {
            trigger: "item",
            padding: [5, 10],
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
            position: "top",
            formatter: (params) => `
                  ${days[params.value[1]]} <br/>
                  ${hours[params.value[0]]} : ${params.value[2]}
                `
        }, xAxis: {
            type: "category",
            data: hours,
            boundaryGap: false,
            splitLine: {show: true, lineStyle: {color: ins("border-color"), type: 'dashed'}},
            axisLine: {show: false},
            axisTick: {lineStyle: {color: ins("border-color"), type: 'dashed'}}
        }, yAxis: {
            type: "category",
            data: days,
            axisLine: {show: false},
            axisTick: {lineStyle: {color: ins("border-color"), type: 'dashed'}},
            axisLabel: {margin: 15, color: ins('body-color')}
        }, textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        }, series: [{
            name: "Punch Card",
            type: "scatter",
            symbolSize: (val) => 2 * val[2],
            data: data,
            animationDelay: (idx) => 5 * idx,
            itemStyle: {color: ins("primary")}
        }], grid: {
            right: 12, left: 5, bottom: 5, top: 5, containLabel: true
        }
    })
})