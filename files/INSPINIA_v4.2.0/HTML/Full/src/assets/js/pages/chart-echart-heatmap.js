/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Chart EChart Heatmap
 * Version: 4.0.1
 */

//
// heatmap chart
//
const hours1 = ["12a", "2a", "4a", "6a", "8a", "10a", "12p", "2p", "4p", "6p", "8p", "10p"];

const days1 = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

const heatmapData1 = [[0, 0, 6], [1, 0, 7], [2, 0, 5], [3, 0, 8], [4, 0, 9], [5, 0, 6], [6, 0, 7], [7, 0, 8], [8, 0, 5], [9, 0, 7], [10, 0, 6], [11, 0, 9], // Monday
    [0, 1, 7], [1, 1, 8], [2, 1, 6], [3, 1, 9], [4, 1, 10], [5, 1, 6], [6, 1, 5], [7, 1, 8], [8, 1, 7], [9, 1, 6], [10, 1, 5], [11, 1, 9], // Tuesday
    [0, 2, 8], [1, 2, 6], [2, 2, 9], [3, 2, 7], [4, 2, 10], [5, 2, 8], [6, 2, 6], [7, 2, 9], [8, 2, 5], [9, 2, 6], [10, 2, 7], [11, 2, 10], // Wednesday
    [0, 3, 5], [1, 3, 6], [2, 3, 8], [3, 3, 9], [4, 3, 6], [5, 3, 7], [6, 3, 8], [7, 3, 9], [8, 3, 10], [9, 3, 6], [10, 3, 7], [11, 3, 5], // Thursday
    [0, 4, 9], [1, 4, 10], [2, 4, 8], [3, 4, 6], [4, 4, 7], [5, 4, 9], [6, 4, 8], [7, 4, 5], [8, 4, 6], [9, 4, 10], [10, 4, 7], [11, 4, 9], // Friday
    [0, 5, 6], [1, 5, 7], [2, 5, 9], [3, 5, 8], [4, 5, 5], [5, 5, 6], [6, 5, 10], [7, 5, 9], [8, 5, 7], [9, 5, 6], [10, 5, 8], [11, 5, 10], // Saturday
    [0, 6, 5], [1, 6, 6], [2, 6, 7], [3, 6, 6], [4, 6, 8], [5, 6, 9], [6, 6, 6], [7, 6, 7], [8, 6, 5], [9, 6, 8], [10, 6, 9], [11, 6, 7]  // Sunday
];

new CustomEChart({
    selector: '#chart-heatmap',
    options: () => ({
        tooltip: {
            position: "top",
            padding: [7, 10],
            backgroundColor: [ins('white')],
            borderColor: [ins('border-color')],
            textStyle: {color: [ins('body-color')]},
            borderWidth: 1
        }, grid: {
            right: 5, left: 5, top: 5, bottom: "18%", containLabel: true
        }, xAxis: {
            type: "category", data: hours1, splitArea: {show: true}, axisLabel: {
                color: ins('body-color')
            }, axisLine: {
                show: true, lineStyle: {
                    color: ins('border-color')
                }
            }
        }, yAxis: {
            type: "category", data: days1, axisLabel: {
                formatter: day => day.substring(0, 3), color: ins('body-color')
            }, splitArea: {show: true}, axisLine: {show: true, lineStyle: {color: ins('border-color')}}
        }, visualMap: {
            min: 0,
            max: 10,
            calculable: true,
            orient: "horizontal",
            left: "center",
            bottom: "0%",
            textStyle: {color: "#ffffff"},
            inRange: {
                color: [ins('primary'), ins('warning'), ins('success')]
            }
        }, textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        }, series: [{
            type: "heatmap", data: heatmapData1, label: {show: true, color: "#ffffff"}, emphasis: {
                itemStyle: {
                    shadowBlur: 10, shadowColor: [ins('dark-rgb', 0.5)]
                }
            }
        }]
    })
})


//
// heatmap single series chart
//
const hours2 = ["12a", "2a", "4a", "6a", "8a", "10a", "12p", "2p", "4p", "6p", "8p", "10p"];

const days2 = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

const heatmapData2 = [[0, 0, 6], [1, 0, 7], [2, 0, 5], [3, 0, 8], [4, 0, 9], [5, 0, 6], [6, 0, 7], [7, 0, 8], [8, 0, 5], [9, 0, 7], [10, 0, 6], [11, 0, 9], // Monday
    [0, 1, 7], [1, 1, 8], [2, 1, 6], [3, 1, 9], [4, 1, 10], [5, 1, 6], [6, 1, 5], [7, 1, 8], [8, 1, 7], [9, 1, 6], [10, 1, 5], [11, 1, 9], // Tuesday
    [0, 2, 8], [1, 2, 6], [2, 2, 9], [3, 2, 7], [4, 2, 10], [5, 2, 8], [6, 2, 6], [7, 2, 9], [8, 2, 5], [9, 2, 6], [10, 2, 7], [11, 2, 10], // Wednesday
    [0, 3, 5], [1, 3, 6], [2, 3, 8], [3, 3, 9], [4, 3, 6], [5, 3, 7], [6, 3, 8], [7, 3, 9], [8, 3, 10], [9, 3, 6], [10, 3, 7], [11, 3, 5], // Thursday
    [0, 4, 9], [1, 4, 10], [2, 4, 8], [3, 4, 6], [4, 4, 7], [5, 4, 9], [6, 4, 8], [7, 4, 5], [8, 4, 6], [9, 4, 10], [10, 4, 7], [11, 4, 9], // Friday
    [0, 5, 6], [1, 5, 7], [2, 5, 9], [3, 5, 8], [4, 5, 5], [5, 5, 6], [6, 5, 10], [7, 5, 9], [8, 5, 7], [9, 5, 6], [10, 5, 8], [11, 5, 10], // Saturday
    [0, 6, 5], [1, 6, 6], [2, 6, 7], [3, 6, 6], [4, 6, 8], [5, 6, 9], [6, 6, 6], [7, 6, 7], [8, 6, 5], [9, 6, 8], [10, 6, 9], [11, 6, 7]  // Sunday
];

new CustomEChart({
    selector: '#chart-heatmap3',
    options: () => ({
        gradientColor: [[ins('primary')], [ins('danger')]], tooltip: {
            position: "top",
            padding: [7, 10],
            backgroundColor: [ins('light')],
            borderColor: ins('border-color'),
            textStyle: {color: [ins('light-text-emphasis')]},
            borderWidth: 1
        }, grid: {
            right: 5, left: 5, top: 5, bottom: 5, containLabel: true
        }, textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        }, xAxis: {
            axisTick: {show: false},
            type: "category",
            data: hours2,
            splitArea: {show: true},
            axisLabel: {color: ins('body-color')},
            axisLine: {show: true, lineStyle: {color: ins('border-color')}}
        }, yAxis: {
            axisTick: {show: false}, type: "category", data: days2, axisLabel: {
                formatter: day => day.substring(0, 3), color: ins('body-color')
            }, splitArea: {show: true}, axisLine: {show: true, lineStyle: {color: ins('border-color')}}
        }, visualMap: {
            show: false,
            min: 0,
            max: 10,
            calculable: true,
            orient: "horizontal",
            left: "center",
            bottom: "0%",
            textStyle: {
                // color: ins('dark'),
                fontWeight: 500
            }
        }, series: [{
            type: "heatmap", data: heatmapData2, label: {show: true, color: "#ffffff"}, itemStyle: {
                borderColor: ins('secondary-bg'), borderWidth: 3
            }, emphasis: {
                itemStyle: {
                    shadowBlur: 10, shadowColor: ins('border-color')
                }
            }
        }]
    })
})


//
// heatmap4 chart
//
let noise = getNoiseHelper();
let xData = [];
let yData = [];
noise.seed(Math.random());

function generateData(theta, min, max) {
    let data = [];
    for (let i = 0; i <= 200; i++) {
        for (let j = 0; j <= 100; j++) {
            // let x = (max - min) * i / 200 + min;
            // let y = (max - min) * j / 100 + min;
            data.push([i, j, noise.perlin2(i / 40, j / 20) + 0.5]);
            // data.push([i, j, normalDist(theta, x) * normalDist(theta, y)]);
        }
        xData.push(i);
    }
    for (let j = 0; j < 100; j++) {
        yData.push(j);
    }
    return data;
}

let data = generateData(2, -5, 5);

// perlin noise helper from https://github.com/josephg/noisejs
function getNoiseHelper() {
    class Grad {
        constructor(x, y, z) {
            this.x = x;
            this.y = y;
            this.z = z;
        }

        dot2(x, y) {
            return this.x * x + this.y * y;
        }

        dot3(x, y, z) {
            return this.x * x + this.y * y + this.z * z;
        }
    }

    const grad3 = [new Grad(1, 1, 0), new Grad(-1, 1, 0), new Grad(1, -1, 0), new Grad(-1, -1, 0), new Grad(1, 0, 1), new Grad(-1, 0, 1), new Grad(1, 0, -1), new Grad(-1, 0, -1), new Grad(0, 1, 1), new Grad(0, -1, 1), new Grad(0, 1, -1), new Grad(0, -1, -1)];
    const p = [151, 160, 137, 91, 90, 15, 131, 13, 201, 95, 96, 53, 194, 233, 7, 225, 140, 36, 103, 30, 69, 142, 8, 99, 37, 240, 21, 10, 23, 190, 6, 148, 247, 120, 234, 75, 0, 26, 197, 62, 94, 252, 219, 203, 117, 35, 11, 32, 57, 177, 33, 88, 237, 149, 56, 87, 174, 20, 125, 136, 171, 168, 68, 175, 74, 165, 71, 134, 139, 48, 27, 166, 77, 146, 158, 231, 83, 111, 229, 122, 60, 211, 133, 230, 220, 105, 92, 41, 55, 46, 245, 40, 244, 102, 143, 54, 65, 25, 63, 161, 1, 216, 80, 73, 209, 76, 132, 187, 208, 89, 18, 169, 200, 196, 135, 130, 116, 188, 159, 86, 164, 100, 109, 198, 173, 186, 3, 64, 52, 217, 226, 250, 124, 123, 5, 202, 38, 147, 118, 126, 255, 82, 85, 212, 207, 206, 59, 227, 47, 16, 58, 17, 182, 189, 28, 42, 223, 183, 170, 213, 119, 248, 152, 2, 44, 154, 163, 70, 221, 153, 101, 155, 167, 43, 172, 9, 129, 22, 39, 253, 19, 98, 108, 110, 79, 113, 224, 232, 178, 185, 112, 104, 218, 246, 97, 228, 251, 34, 242, 193, 238, 210, 144, 12, 191, 179, 162, 241, 81, 51, 145, 235, 249, 14, 239, 107, 49, 192, 214, 31, 181, 199, 106, 157, 184, 84, 204, 176, 115, 121, 50, 45, 127, 4, 150, 254, 138, 236, 205, 93, 222, 114, 67, 29, 24, 72, 243, 141, 128, 195, 78, 66, 215, 61, 156, 180];
    // To remove the need for index wrapping, double the permutation table length
    let perm = new Array(512);
    let gradP = new Array(512);
    // This isn't a very good seeding function, but it works ok. It supports 2^16
    // different seed values. Write something better if you need more seeds.
    function seed(seed) {
        if (seed > 0 && seed < 1) {
            // Scale the seed out
            seed *= 65536;
        }
        seed = Math.floor(seed);
        if (seed < 256) {
            seed |= seed << 8;
        }
        for (let i = 0; i < 256; i++) {
            let v;
            if (i & 1) {
                v = p[i] ^ (seed & 255);
            } else {
                v = p[i] ^ ((seed >> 8) & 255);
            }
            perm[i] = perm[i + 256] = v;
            gradP[i] = gradP[i + 256] = grad3[v % 12];
        }
    }

    seed(0);

    // ##### Perlin noise stuff
    function fade(t) {
        return t * t * t * (t * (t * 6 - 15) + 10);
    }

    function lerp(a, b, t) {
        return (1 - t) * a + t * b;
    }

    // 2D Perlin Noise
    function perlin2(x, y) {
        // Find unit grid cell containing point
        let X = Math.floor(x), Y = Math.floor(y);
        // Get relative xy coordinates of point within that cell
        x = x - X;
        y = y - Y;
        // Wrap the integer cells at 255 (smaller integer period can be introduced here)
        X = X & 255;
        Y = Y & 255;
        // Calculate noise contributions from each of the four corners
        let n00 = gradP[X + perm[Y]].dot2(x, y);
        let n01 = gradP[X + perm[Y + 1]].dot2(x, y - 1);
        let n10 = gradP[X + 1 + perm[Y]].dot2(x - 1, y);
        let n11 = gradP[X + 1 + perm[Y + 1]].dot2(x - 1, y - 1);
        // Compute the fade curve value for x
        let u = fade(x);
        // Interpolate the four results
        return lerp(lerp(n00, n10, u), lerp(n01, n11, u), fade(y));
    }

    return {
        seed, perlin2
    };
}

new CustomEChart({
    selector: '#chart-heatmap4',
    options: () => ({
        tooltip: {show:false}, xAxis: {
            type: 'category', data: xData
        }, yAxis: {
            type: 'category', data: yData
        }, grid: {
            left: '8%', right: '1%', bottom: '0%', top: '0%', containLabel: true
        }, textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        }, visualMap: {
            min: 0, max: 1, calculable: false, realtime: false, inRange: {
                color: [ins('primary'), ins('secondary'), ins('info'), ins('warning'), ins('danger'), ins('dark'), ins('purple'), ins('pink'),]
            }
        }, series: [{
            name: 'Gaussian', type: 'heatmap', data: data,
            emphasis: {
                itemStyle: {
                    borderColor: '#333', borderWidth: 1
                }
            },
            progressive: 0, animation: false
        }]
    })
})