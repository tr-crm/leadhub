/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Chart EChart Geo Map
 * Version: 4.0.1
 */

//
// world map
//
const worldMap = new CustomEChart({
    selector: '#world-map',
    options: () => ({
        tooltip: {
            trigger: "item",
            padding: [7, 10],
            backgroundColor: ins("secondary-bg"),
            borderColor: ins("border-color"),
            textStyle: {color: ins("light-text-emphasis")},
            borderWidth: 1,
            transitionDuration: 0,
            formatter: '{b}'
        },
        textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        },
        series: [{
            type: "map",
            map: "world",
            roam: true,
            scaleLimit: {min: 1, max: 5},
            left: 0,
            right: 0,
            label: {show: false},
            itemStyle: {borderColor: ins("border-color"), areaColor: ins("primary")},
            emphasis: {label: {show: false}, itemStyle: {areaColor: ins("warning")}}
        }]
    })
})

worldMap.element.addEventListener("click", () => {
    worldMap.chart.dispatchAction({type: "restore"});
})


//
// usa map
//
const usaMap = document.getElementById('usa-map');
if (usaMap) {
    fetch('assets/data/usa_geo.json').then(res => res.json()).then(usaGeoJson => {
        echarts.registerMap('USA', usaGeoJson, {
            Alaska: {
                left: -131,
                top: 25,
                width: 15
            },
            Hawaii: {
                left: -112,
                top: 25,
                width: 5
            },
            'Puerto Rico': {
                left: -76,
                top: 26,
                width: 2
            }
        });

        const map = new CustomEChart({
            selector: usaMap,
            options: () => ({
                tooltip: {
                    trigger: "item",
                    padding: [7, 10],
                    backgroundColor: ins("secondary-bg"),
                    borderColor: ins("border-color"),
                    textStyle: {color: ins("light-text-emphasis")},
                    borderWidth: 1,
                    transitionDuration: 0,
                    formatter: '{b}'
                },
                textStyle: {
                    fontFamily: getComputedStyle(document.body).fontFamily
                },
                geo: {
                    map: 'USA',
                    roam: true,
                    zoom: 1.2,
                    center: [-98, 37],
                    scaleLimit: {min: 1, max: 5},
                    itemStyle: {borderColor: ins("border-color"), areaColor: ins("info")},
                    label: {color: "#fff"},
                    emphasis: {label: {show: true, color: "#fff"}, itemStyle: {areaColor: ins("warning")}},
                },
                series: [{
                    name: "USA Map",
                    map: "USA",
                    type: "map",
                    geoIndex: 0,
                    zoom: 1.2,
                    roam: true,
                    scaleLimit: {min: 1, max: 5},
                }]
            })
        })

        map.element.addEventListener("click", () => {
            map.chart.dispatchAction({type: "restore"});
        })

    }).catch(err => console.log(err));
}


//
// morphing between map and bar chart
//
const mapBarMorphing = document.getElementById('map-bar-morphing');
if (mapBarMorphing) {
    fetch('assets/data/usa_geo.json').then(res => res.json()).then(usaGeoJson => {
        echarts.registerMap('USA', usaGeoJson, {
            Alaska: {
                left: -131,
                top: 25,
                width: 15
            },
            Hawaii: {
                left: -112,
                top: 25,
                width: 5
            },
            'Puerto Rico': {
                left: -76,
                top: 26,
                width: 2
            }
        });

        const data = [
            {name: 'Alabama', value: 4822023},
            {name: 'Alaska', value: 731449},
            {name: 'Arizona', value: 6553255},
            {name: 'Arkansas', value: 2949131},
            {name: 'California', value: 38041430},
            {name: 'Colorado', value: 5187582},
            {name: 'Connecticut', value: 3590347},
            {name: 'Delaware', value: 917092},
            {name: 'District of Columbia', value: 632323},
            {name: 'Florida', value: 19317568},
            {name: 'Georgia', value: 9919945},
            {name: 'Hawaii', value: 1392313},
            {name: 'Idaho', value: 1595728},
            {name: 'Illinois', value: 12875255},
            {name: 'Indiana', value: 6537334},
            {name: 'Iowa', value: 3074186},
            {name: 'Kansas', value: 2885905},
            {name: 'Kentucky', value: 4380415},
            {name: 'Louisiana', value: 4601893},
            {name: 'Maine', value: 1329192},
            {name: 'Maryland', value: 5884563},
            {name: 'Massachusetts', value: 6646144},
            {name: 'Michigan', value: 9883360},
            {name: 'Minnesota', value: 5379139},
            {name: 'Mississippi', value: 2984926},
            {name: 'Missouri', value: 6021988},
            {name: 'Montana', value: 1005141},
            {name: 'Nebraska', value: 1855525},
            {name: 'Nevada', value: 2758931},
            {name: 'New Hampshire', value: 1320718},
            {name: 'New Jersey', value: 8864590},
            {name: 'New Mexico', value: 2085538},
            {name: 'New York', value: 19570261},
            {name: 'North Carolina', value: 9752073},
            {name: 'North Dakota', value: 699628},
            {name: 'Ohio', value: 11544225},
            {name: 'Oklahoma', value: 3814820},
            {name: 'Oregon', value: 3899353},
            {name: 'Pennsylvania', value: 12763536},
            {name: 'Rhode Island', value: 1050292},
            {name: 'South Carolina', value: 4723723},
            {name: 'South Dakota', value: 833354},
            {name: 'Tennessee', value: 6456243},
            {name: 'Texas', value: 26059203},
            {name: 'Utah', value: 2855287},
            {name: 'Vermont', value: 626011},
            {name: 'Virginia', value: 8185867},
            {name: 'Washington', value: 6897012},
            {name: 'West Virginia', value: 1855413},
            {name: 'Wisconsin', value: 5726398},
            {name: 'Wyoming', value: 576412},
            {name: 'Puerto Rico', value: 3667084}
        ];

        data.sort(function (a, b) {
            return a.value - b.value;
        });

        function getMapOption() {
            return {
                visualMap: {
                    left: 'right',
                    min: 500000,
                    max: 38000000,
                    inRange: {
                        color: ['#313695', '#4575b4', '#74add1', '#abd9e9', '#e0f3f8', '#ffffbf', '#fee090', '#fdae61', '#f46d43', '#d73027', '#a50026'],
                    },
                    text: ['High', 'Low'],
                    calculable: true,
                    textStyle: {
                        color: ins('light-text-emphasis')
                    }
                },
                series: [
                    {
                        id: 'population',
                        type: 'map',
                        roam: true,
                        map: 'USA',
                        animationDurationUpdate: 1000,
                        universalTransition: true,
                        data: data,
                        label: {
                            show: false
                        },
                        emphasis: {
                            label: {
                                show: false
                            }
                        }
                    }
                ],
                textStyle: {
                    fontFamily: getComputedStyle(document.body).fontFamily
                },
                tooltip: {
                    trigger: "item",
                    padding: [7, 10],
                    backgroundColor: ins("secondary-bg"),
                    borderColor: ins("border-color"),
                    textStyle: {color: ins("light-text-emphasis")},
                    borderWidth: 1,
                    transitionDuration: 0,
                    formatter: function (params) {
                        if (params.value != null && params.value !== '-') {
                            return `<strong>${params.name}</strong><br/>Population: ${params.value.toLocaleString()}`;
                        } else {
                            return `<strong>${params.name}</strong><br/>No data`;
                        }
                    }
                }
            };
        }

        function getBarOption() {
            return {
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
                        <strong>${item.value}</strong>
                    </div>`;
                        });
                        return content;
                    }
                },
                xAxis: {
                    type: 'value',
                    axisLabel: {
                        color: ins('body-color'),
                        margin: 15
                    },
                    splitLine: {
                        show: true,
                        lineStyle: {
                            color: ins('light')
                        }
                    }
                },
                yAxis: {
                    type: 'category',
                    axisLabel: {
                        rotate: 30,
                        color: ins('body-color'),
                        margin: 15
                    },
                    data: data.map(item => item.name)
                },
                textStyle: {
                    fontFamily: getComputedStyle(document.body).fontFamily
                },
                animationDurationUpdate: 1000,
                series: {
                    type: 'bar',
                    id: 'population',
                    data: data.map(item => item.value),
                    universalTransition: true
                },
                grid: {
                    right: "5%",
                    left: "13%",
                    bottom: "10%",
                    top: "5%"
                }
            };
        }

        let current = 'map';

        const mapBar = new CustomEChart({
            selector: mapBarMorphing,
            options: () => current === 'map' ? getMapOption() : getBarOption()
        })

        setInterval(function () {
            current = current === 'map' ? 'bar' : 'map';
            mapBar.chart.setOption(current === 'map' ? getMapOption() : getBarOption(), true);
        }, 3000);

    }).catch(err => console.log(err));
}


//
// pie chart on map
//
const pieChartOnMap = document.getElementById('pie-chart-on-map');
if (pieChartOnMap) {
    fetch('assets/data/usa_geo.json').then(res => res.json()).then(usaGeoJson => {
        echarts.registerMap('USA', usaGeoJson, {
            Alaska: {
                left: -131,
                top: 25,
                width: 15
            },
            Hawaii: {
                left: -112,
                top: 25,
                width: 5
            },
            'Puerto Rico': {
                left: -76,
                top: 26,
                width: 2
            }
        });

        function randomPieSeries(center, radius) {
            const data = ['A', 'B', 'C', 'D'].map((t) => {
                return {
                    value: Math.round(Math.random() * 100),
                    name: 'Category ' + t
                };
            });
            return {
                type: 'pie',
                coordinateSystem: 'geo',
                tooltip: {
                    formatter: '{b}: {c} ({d}%)',
                    backgroundColor: ins("secondary-bg"),
                    borderColor: ins("border-color"),
                    textStyle: {color: ins("light-text-emphasis")},
                },
                textStyle: {
                    fontFamily: getComputedStyle(document.body).fontFamily
                },
                label: {
                    show: false
                },
                labelLine: {
                    show: false
                },
                animationDuration: 0,
                radius,
                center,
                data
            };
        }

        new CustomEChart({
            selector: pieChartOnMap,
            options: () => ({
                geo: {
                    map: 'USA',
                    roam: true,
                    itemStyle: {borderColor: ins("border-color"), areaColor: ins("secondary")},
                    label: {color: "#fff"},
                    emphasis: {label: {show: true, color: "#fff"}, itemStyle: {areaColor: ins("warning")}},
                },
                textStyle: {
                    fontFamily: getComputedStyle(document.body).fontFamily
                },
                tooltip: {
                    backgroundColor: ins("secondary-bg"),
                    borderColor: ins("border-color"),
                    textStyle: {color: ins("light-text-emphasis")},
                },
                legend: {
                    textStyle: {
                        color: '#858d98',
                    },
                },
                series: [
                    randomPieSeries([-86.753504, 33.01077], 15),
                    randomPieSeries([-116.853504, 39.8], 25),
                    randomPieSeries([-99, 31.5], 30),
                    randomPieSeries(
                        // it's also supported to use geo region name as center since v5.4.1
                        +echarts.version.split('.').slice(0, 3).join('') > 540
                            ? 'Maine'
                            : // or you can only use the LngLat array
                            [-69, 45.5],
                        12
                    )
                ]
            })
        })

    }).catch(err => console.log(err));
}


//
// geo svg scatter map
//
const geoSVGScatterMap = document.getElementById('geo-svg-scatter-map')
if (geoSVGScatterMap) {
    fetch('assets/images/svg/iceland.svg').then(res => res.text()).then(svg => {
        echarts.registerMap('iceland', {svg});

        const map = new CustomEChart({
            selector: geoSVGScatterMap,
            options: () => ({
                tooltip: {},
                geo: {
                    tooltip: {
                        show: true,
                        backgroundColor: ins("secondary-bg"),
                        borderColor: ins("border-color"),
                        textStyle: {color: ins("light-text-emphasis")},
                    },
                    map: 'iceland',
                    layoutCenter: ['50%', '50%'],
                    layoutSize: '125%',
                    roam: true
                },
                textStyle: {
                    fontFamily: getComputedStyle(document.body).fontFamily
                },
                series: {
                    type: 'effectScatter',
                    coordinateSystem: 'geo',
                    geoIndex: 0,
                    symbolSize: function (params) {
                        return (params[2] / 100) * 15 + 5;
                    },
                    itemStyle: {
                        color: '#b02a02'
                    },
                    encode: {
                        tooltip: 2
                    },
                    data: [
                        [488.2358421078053, 459.70913833075736, 100],
                        [770.3415644319939, 757.9672194986475, 30],
                        [1180.0329284196291, 743.6141808346214, 80],
                        [894.03790632245, 1188.1985153835008, 61],
                        [1372.98925630313, 477.3839988649537, 70],
                        [1378.62251255796, 935.6708486282843, 81]
                    ]
                }
            })
        })

        map.chart.on('selectchanged', function (params) {
            if (!params.selected.length) {
                map.chart.dispatchAction({
                    type: 'hideTip'
                });
                map.chart.dispatchAction({
                    type: 'geoSelect',
                    geoIndex: 0
                    // Use no name to unselect.
                });
            } else {
                const btnDataIdx = params.selected[0].dataIndex[0];
                const name = option.series.data[btnDataIdx][2];
                map.chart.dispatchAction({
                    type: 'geoSelect',
                    geoIndex: 0,
                    name: name
                });
                map.chart.dispatchAction({
                    type: 'showTip',
                    geoIndex: 0,
                    name: name
                });
            }
        });

    }).catch(err => console.log(err));
}


