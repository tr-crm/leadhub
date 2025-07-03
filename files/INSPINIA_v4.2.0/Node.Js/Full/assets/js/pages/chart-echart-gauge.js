/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Chart EChart Gauge
 * Version: 4.0.1
 */

//
// basic gauge chart
//
new CustomEChart({
    selector: '#chart-basic-gauge',
    options: () => ({
        tooltip: {
            formatter: '{a} <br/>{b} : {c}%',
            padding: [7, 15],
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
        }, textStyle: {fontFamily: getComputedStyle(document.body).fontFamily}, series: [{
            name: 'Pressure',
            type: 'gauge',
            radius: '95%',
            progress: {
                show: true, itemStyle: {color: ins("primary")}
            },
            pointer: {itemStyle: {color: ins('primary')}},
            axisLine: {lineStyle: {color: [[1, ins("light")]]}},
            axisLabel: {color: ins("tertiary-color"), fontSize: 12},
            detail: {
                valueAnimation: true, formatter: value => `{value|${value}}\n{name|SCORE}`, rich: {
                    value: {fontSize: 24, fontWeight: 'bold', lineHeight: 30, color: ins("body-color")},
                    name: {fontSize: 14, color: ins("tertiary-color"), padding: [8, 0, 0, 0]}
                }
            },
            data: [{value: 50}]
        }],
    })
})


//
// speed stage gauge chat
//
const speedStageGaugeChart = new CustomEChart({
    selector: '#chart-speed-stage-gauge',
    options: () => ({
        series: [{
            type: 'gauge',
            radius: '95%',
            axisLine: {
                lineStyle: {
                    width: 30, color: [[0.3, ins('success')], [0.7, ins('warning')], [1, ins('danger')]]
                }
            },
            pointer: {itemStyle: {color: 'auto'}},
            axisTick: {distance: -30, length: 8, lineStyle: {color: '#fff', width: 2}},
            splitLine: {distance: -30, length: 30, lineStyle: {color: '#fff', width: 4}},
            axisLabel: {color: 'inherit', distance: 40, fontSize: 12},
            detail: {
                valueAnimation: true,
                formatter: '{value} km/h',
                color: 'inherit',
                textStyle: {fontSize: 18, fontWeight: 'bold'}
            },
            data: [{value: 70}]
        }], textStyle: {fontFamily: getComputedStyle(document.body).fontFamily}
    })
})

setInterval(() => {
    speedStageGaugeChart.chart.setOption({series: [{data: [{value: +(Math.random() * 100).toFixed(2)}]}]});
}, 2000);


//
// ring gauge chart
//
new CustomEChart({
    selector: '#chart-ring-gauge',
    options: () => ({
        tooltip: {
            trigger: "axis",
            padding: [7, 10],
            backgroundColor: ins('body-bg'),
            borderColor: ins("border-color"),
            textStyle: {color: ins("light-text-emphasis")},
            borderWidth: 1,
            formatter: (params) => {
                const data = params[0];
                return `
                      <div>
                        <h6 class="fs-9 text-body-tertiary mb-0">
                          <span class="fas fa-circle me-1" style='color:${data.color}'></span>
                          ${data.name} : ${data.value}
                        </h6>
                      </div>
                    `;
            },
            transitionDuration: 0,
            axisPointer: {type: "none"}
        }, textStyle: {fontFamily: getComputedStyle(document.body).fontFamily}, series: [{
            type: "gauge",
            radius: "100%",
            startAngle: 90,
            endAngle: -270,
            pointer: {show: false},
            progress: {
                show: true,
                overlap: false,
                roundCap: true,
                clip: false,
                itemStyle: {borderWidth: 1, borderColor: ins("border-color")}
            },
            axisLine: {lineStyle: {width: 30, color: [[1, ins("light")]]}},
            splitLine: {show: false, distance: 0, length: 10},
            axisTick: {show: false},
            axisLabel: {show: false, distance: 50},
            data: [{
                value: 80,
                title: {offsetCenter: ["0%", "0%"]},
                detail: {offsetCenter: ["0%", "0%"]},
                itemStyle: {color: ins("primary")}
            }],
            title: {fontSize: 14},
            detail: {width: 50, height: 14, fontSize: 28, color: "auto", formatter: "{value}%"}
        }]
    })
})


//
// temperature gauge chart
//
const temperatureGaugeChart = new CustomEChart({
    selector: '#chart-temperature-gauge',
    options: () => ({
        series: [{
            type: 'gauge',
            radius: '100%',
            center: ['50%', '60%'],
            startAngle: 200,
            endAngle: -20,
            min: 0,
            max: 60,
            splitNumber: 12,
            itemStyle: {
                color: ins("danger")
            },
            progress: {show: true, width: 30},
            pointer: {show: false},
            axisLine: {lineStyle: {width: 30, color: [[1, ins("light")]]}},
            axisTick: {distance: -45, splitNumber: 5, lineStyle: {width: 2, color: '#999'}},
            splitLine: {distance: -52, length: 14, lineStyle: {width: 3, color: '#999'}},
            axisLabel: {distance: -20, color: ins("tertiary-color"), fontSize: 16},
            anchor: {show: false},
            title: {show: false},
            detail: {
                valueAnimation: true,
                width: '60%',
                lineHeight: 40,
                borderRadius: 8,
                offsetCenter: [0, '-15%'],
                fontSize: 28,
                fontWeight: 'bolder',
                formatter: '{value} °C',
                color: 'inherit'
            },
            data: [{value: 20}]
        }, {
            type: 'gauge',
            center: ['50%', '60%'],
            startAngle: 200,
            endAngle: -20,
            min: 0,
            max: 60,
            itemStyle: {color: '#FD7347'},
            progress: {show: true, width: 8},
            pointer: {show: false},
            axisLine: {show: false},
            axisTick: {show: false},
            splitLine: {show: false},
            axisLabel: {show: false},
            detail: {show: false},
            data: [{value: 20}]
        }], textStyle: {fontFamily: getComputedStyle(document.body).fontFamily}
    })
})

setInterval(function () {
    const random = +(Math.random() * 60).toFixed(2);
    temperatureGaugeChart.chart.setOption({
        series: [{
            data: [{value: random}]
        }, {
            data: [{value: random}]
        }]
    });
}, 2000);


//
// multiring gauge chart
//
new CustomEChart({
    selector: '#chart-multiring-gauge',
    options: () => ({
        series: [{
            type: "gauge",
            startAngle: 90,
            endAngle: -270,
            radius: "85%",
            pointer: {show: false},
            center: ["50%", "50%"],
            progress: {show: true, overlap: false, roundCap: true, clip: false, itemStyle: {color: ins("info")}},
            axisLine: {lineStyle: {width: 8, color: [[1, ins("light")]]}},
            splitLine: {show: false},
            axisTick: {show: false},
            axisLabel: {show: false},
            data: [79],
            detail: {show: false},
            animationDuration: 2000
        }, {
            type: "gauge",
            startAngle: 90,
            endAngle: -270,
            radius: "70%",
            pointer: {show: false},
            center: ["50%", "50%"],
            progress: {show: true, overlap: false, roundCap: true, clip: false, itemStyle: {color: ins("primary")}},
            axisLine: {lineStyle: {width: 8, color: [[1, ins("light")]]}},
            splitLine: {show: false},
            axisTick: {show: false},
            axisLabel: {show: false},
            data: [85],
            detail: {show: false},
            animationDuration: 2000
        }, {
            type: "gauge",
            startAngle: 90,
            endAngle: -270,
            radius: "55%",
            pointer: {show: false},
            center: ["50%", "50%"],
            progress: {show: true, overlap: false, roundCap: true, clip: false, itemStyle: {color: ins("success")}},
            axisLine: {lineStyle: {width: 8, color: [[1, ins("light")]]}},
            splitLine: {show: false},
            axisTick: {show: false},
            axisLabel: {show: false},
            data: [70],
            detail: {show: false},
            animationDuration: 2000
        }], textStyle: {fontFamily: getComputedStyle(document.body).fontFamily}
    })
})


//
// multi gauge chart
//
const gaugeData = [{
    value: 20, name: 'Good', title: {
        offsetCenter: ['-40%', '80%']
    }, detail: {
        offsetCenter: ['-40%', '95%']
    }
}, {
    value: 40, name: 'Better', title: {
        offsetCenter: ['0%', '80%']
    }, detail: {
        offsetCenter: ['0%', '95%']
    }
}, {
    value: 60, name: 'Perfect', title: {
        offsetCenter: ['40%', '80%']
    }, detail: {
        offsetCenter: ['40%', '95%']
    }
}];

const multiGaugeChart = new CustomEChart({
    selector: '#chart-multi-gauge',
    options: () => ({
        series: [{
            type: 'gauge', radius: '95%', anchor: {
                show: true, showAbove: true, size: 18, itemStyle: {
                    color: '#FAC858'
                }
            }, pointer: {
                icon: 'path://M2.9,0.7L2.9,0.7c1.4,0,2.6,1.2,2.6,2.6v115c0,1.4-1.2,2.6-2.6,2.6l0,0c-1.4,0-2.6-1.2-2.6-2.6V3.3C0.3,1.9,1.4,0.7,2.9,0.7z',
                width: 8,
                length: '70%',
                offsetCenter: [0, '8%']
            }, progress: {
                show: true, overlap: true, roundCap: true
            }, axisLine: {
                roundCap: true, lineStyle: {
                    color: [[1, ins("light")]]
                }
            }, axisLabel: {
                color: ins("tertiary-color"), fontSize: 12
            }, data: gaugeData, title: {
                fontSize: 14, color: ins("body-color")
            }, detail: {
                width: 30,
                height: 14,
                fontSize: 12,
                color: '#fff',
                backgroundColor: 'inherit',
                borderRadius: 3,
                formatter: '{value}%'
            }
        }], textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        }
    })
})

setInterval(function () {
    gaugeData[0].value = +(Math.random() * 100).toFixed(2);
    gaugeData[1].value = +(Math.random() * 100).toFixed(2);
    gaugeData[2].value = +(Math.random() * 100).toFixed(2);
    multiGaugeChart.chart.setOption({
        series: [{
            data: gaugeData
        }]
    });
}, 2000);