/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Chart EChart Radar
 * Version: 4.2.0
 */
import { CustomEChart, ins } from '../app'
import * as echarts from 'echarts';
//
// basic radar chart
//
new CustomEChart({
    selector: '#chart-basic-radar',
    options: () => ({
        radar: {
            indicator: [{name: 'Sales', max: 6500}, {
                name: 'Administration',
                max: 16000
            }, {name: 'Information Technology', max: 30000}, {
                name: 'Customer Support',
                max: 38000
            }, {name: 'Development', max: 52000}, {name: 'Marketing', max: 25000}], name: {
                textStyle: {
                    color: ins('body-color') // Change this to your desired label color
                }
            }, splitArea: {
                show: true, areaStyle: {
                    color: [ins('light-rgb', 0.5), ins('light-rgb', 0), ins('light-rgb', 0.5), ins('light-rgb', 0), ins('light-rgb', 0.5)]
                }
            }, splitLine: {
                lineStyle: {
                    color: [ins("border-color"), ins("border-color"), ins("border-color"), ins("border-color"), ins("border-color")],
                    width: 1
                }
            }, axisLine: {
                lineStyle: {
                    color: ins("border-color") // Axis lines (from center to edges)
                }
            }
        }, legend: {
            data: ['Allocated Budget', 'Actual Spending'], orient: "vertical", left: "left", textStyle: {
                color: ins("tertiary-color")
            }
        }, textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        },

        series: [{
            type: 'radar', data: [{
                value: [4200, 3000, 20000, 35000, 50000, 18000], name: 'Allocated Budget', areaStyle: {
                    color: ins('primary-rgb', 0.5) // Blueish transparent
                }, lineStyle: {
                    color: ins('primary-rgb', 0.5)
                }, itemStyle: {
                    color: ins('primary')
                }
            }, {
                value: [5000, 14000, 28000, 26000, 42000, 21000], name: 'Actual Spending', areaStyle: {
                    color: ins('secondary-rgb', 0.5) // Blueish transparent
                }, lineStyle: {
                    color: ins('secondary-rgb', 0.5) // Blueish transparent
                }, itemStyle: {
                    color: ins('secondary')
                }
            }]
        }]
    })
})


//
// radar chart 1
//
new CustomEChart({
    selector: '#chart-radar1',
    options: () => ({
        tooltip: {
            trigger: 'item'
        }, legend: {
            type: 'scroll', bottom: 0, textStyle: {
                color: ins("tertiary-color")
            }, pageIconColor: ins("tertiary-color"),      // Arrow button color
            pageTextStyle: {
                color: ins("tertiary-color")            // Page number color
            }, data: (function () {
                const list = [];
                for (let i = 1; i <= 28; i++) {
                    list.push(i + 2000 + '');
                }
                return list;
            })()
        }, textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        }, visualMap: {
            top: 'middle', right: 10, color: [ins('danger'), ins('warning')], calculable: true, textStyle: {
                color: ins("tertiary-color")
            }
        }, radar: {
            indicator: [{text: 'IE8-', max: 400}, {text: 'IE9+', max: 400}, {
                text: 'Safari',
                max: 400
            }, {text: 'Firefox', max: 400}, {text: 'Chrome', max: 400}], name: {
                textStyle: {
                    color: ins('body-color') // Change this to your desired label color
                }
            }, splitArea: {
                show: true, areaStyle: {
                    color: [ins('light-rgb', 0.5), ins('light-rgb', 0), ins('light-rgb', 0.5), ins('light-rgb', 0), ins('light-rgb', 0.5)]
                }
            }, splitLine: {
                lineStyle: {
                    color: [ins("border-color"), ins("border-color"), ins("border-color"), ins("border-color"), ins("border-color")],
                    width: 1
                }
            }, axisLine: {
                lineStyle: {
                    color: ins("border-color") // Axis lines (from center to edges)
                }
            }
        }, series: (function () {
            const series = [];
            for (let i = 1; i <= 28; i++) {
                series.push({
                    type: 'radar', symbol: 'none', lineStyle: {
                        width: 1
                    }, emphasis: {
                        areaStyle: {
                            color: 'rgba(0,250,0,0.3)'
                        }
                    }, data: [{
                        value: [(40 - i) * 10, (38 - i) * 4 + 60, i * 5 + 10, i * 9, (i * i) / 2], name: i + 2000 + ''
                    }]
                });
            }
            return series;
        })()
    })
})


//
// radar chart 2
//
new CustomEChart({
    selector: '#chart-radar2',
    options: () => ({
        color: [ins("warning"), ins("danger"), ins("secondary"), ins("primary")],

        legend: {
            orient: "vertical", left: "left", textStyle: {
                color: ins("tertiary-color")
            }
        }, textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        }, radar: [{
            indicator: [{text: 'Indicator1'}, {text: 'Indicator2'}, {text: 'Indicator3'}, {text: 'Indicator4'}, {text: 'Indicator5'}],
            center: ['25%', '50%'],
            radius: 120,
            startAngle: 90,
            splitNumber: 4,
            shape: 'circle',
            axisName: {
                formatter: '【{value}】', color: ins("body-color")
            },
            splitArea: {
                areaStyle: {
                    color: [ins("warning"), ins("danger"), ins("secondary"), ins("primary")],
                    shadowColor: 'rgba(0, 0, 0, 0.2)',
                    shadowBlur: 5
                }
            },
            axisLine: {
                lineStyle: {
                    color: 'transparent', width: 5
                }
            },
            splitLine: {
                lineStyle: {
                    color: 'transparent', width: 5
                }
            }
        }, {
            indicator: [{text: 'Indicator1', max: 150}, {text: 'Indicator2', max: 150}, {
                text: 'Indicator3',
                max: 150
            }, {text: 'Indicator4', max: 120}, {text: 'Indicator5', max: 108}, {text: 'Indicator6', max: 72}],
            center: ['75%', '50%'],
            radius: 120,
            axisName: {
                color: ins("body-color")
            },
            splitArea: {
                areaStyle: {
                    color: [ins("light"), ins("info"), ins("purple"), ins("warning")],
                    shadowColor: 'rgba(0, 0, 0, 0.2)',
                    shadowBlur: 5
                }
            },
            axisLine: {
                lineStyle: {
                    color: 'transparent', width: 5
                }
            },
            splitLine: {
                lineStyle: {
                    color: 'transparent', width: 5
                }
            }
        }], series: [{
            type: 'radar', emphasis: {
                lineStyle: {
                    width: 4
                }
            }, data: [{
                value: [100, 8, 0.4, -80, 2000], name: 'Data A'
            }, {
                value: [60, 5, 0.3, -100, 1500], name: 'Data B'
            }]
        }, {
            type: 'radar', radarIndex: 1, data: [{
                value: [120, 118, 130, 100, 99, 70], name: 'Data C', symbol: 'rect', symbolSize: 12, lineStyle: {
                    type: 'dashed'
                }, label: {
                    show: true, formatter: function (params) {
                        return params.value;
                    }
                }
            }, {
                value: [100, 93, 50, 90, 70, 60], name: 'Data D', areaStyle: {
                    color: new echarts.graphic.RadialGradient(0.1, 0.6, 1, [{
                        color: ins("primary-rgb", 0.1), offset: 0
                    }, {
                        color: ins("primary-rgb", 0.7), offset: 1
                    }])
                }
            }]
        }]
    })
})


//
// radar chart 3
//
new CustomEChart({
    selector: '#chart-radar3',
    options: () => ({
        tooltip: {
            trigger: 'axis'
        }, textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        }, legend: {
            // orient: "vertical",
            left: "center", textStyle: {
                color: ins("body-color")
            },

            data: ['A Software', 'A Phone', 'Another Phone', 'Precipitation', 'Evaporation']
        }, grid: {
            right: 5, left: 5, top: 5, bottom: 5, containLabel: true
        }, radar: [{
            indicator: [{text: 'Brand', max: 100}, {text: 'Content', max: 100}, {
                text: 'Usability',
                max: 100
            }, {text: 'Function', max: 100}], center: ['25%', '60%'], radius: 80, name: {
                textStyle: {
                    color: ins('body-color') // Change this to your desired label color
                }
            }, splitArea: {
                show: true, areaStyle: {
                    color: [ins('light-rgb', 0.5), ins('light-rgb', 0), ins('light-rgb', 0.5), ins('light-rgb', 0), ins('light-rgb', 0.5)]
                }
            }, splitLine: {
                lineStyle: {
                    color: [ins("border-color"), ins("border-color"), ins("border-color"), ins("border-color"), ins("border-color")],
                    width: 1
                }
            }, axisLine: {
                lineStyle: {
                    color: ins("border-color") // Axis lines (from center to edges)
                }
            }
        }, {
            indicator: [{text: 'Look', max: 100}, {text: 'Photo', max: 100}, {
                text: 'System',
                max: 100
            }, {text: 'Performance', max: 100}, {text: 'Screen', max: 100}], radius: 80, center: ['50%', '60%'], name: {
                textStyle: {
                    color: ins('body-color') // Change this to your desired label color
                }
            }, splitArea: {
                show: true, areaStyle: {
                    color: [ins('light-rgb', 0.5), ins('light-rgb', 0), ins('light-rgb', 0.5), ins('light-rgb', 0), ins('light-rgb', 0.5)]
                }
            }, splitLine: {
                lineStyle: {
                    color: [ins("border-color"), ins("border-color"), ins("border-color"), ins("border-color"), ins("border-color")],
                    width: 1
                }
            }, axisLine: {
                lineStyle: {
                    color: ins("border-color") // Axis lines (from center to edges)
                }
            }
        }, {
            indicator: (function () {
                const res = [];
                for (let i = 1; i <= 12; i++) {
                    res.push({text: i + '月', max: 100});
                }
                return res;
            })(), center: ['75%', '60%'], radius: 80, name: {
                textStyle: {
                    color: ins('body-color') // Change this to your desired label color
                }
            }, splitArea: {
                show: true, areaStyle: {
                    color: [ins('light-rgb', 0.5), ins('light-rgb', 0), ins('light-rgb', 0.5), ins('light-rgb', 0), ins('light-rgb', 0.5)]
                }
            }, splitLine: {
                lineStyle: {
                    color: [ins("border-color"), ins("border-color"), ins("border-color"), ins("border-color"), ins("border-color")],
                    width: 1
                }
            }, axisLine: {
                lineStyle: {
                    color: ins("border-color") // Axis lines (from center to edges)
                }
            }
        }], series: [{
            type: 'radar', tooltip: {
                trigger: 'item'
            }, areaStyle: {}, data: [{
                value: [60, 73, 85, 40], name: 'A Software'
            }]
        }, {
            type: 'radar', radarIndex: 1, areaStyle: {}, data: [{
                value: [85, 90, 90, 95, 95], name: 'A Phone'
            }, {
                value: [95, 80, 95, 90, 93], name: 'Another Phone'
            }]
        }, {
            type: 'radar', radarIndex: 2, areaStyle: {}, data: [{
                name: 'Precipitation', value: [2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 75.6, 82.2, 48.7, 18.8, 6.0, 2.3]
            }, {
                name: 'Evaporation', value: [2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 35.6, 62.2, 32.6, 20.0, 6.4, 3.3]
            }]
        }]
    })
})