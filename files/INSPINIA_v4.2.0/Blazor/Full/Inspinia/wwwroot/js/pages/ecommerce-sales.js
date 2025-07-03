/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): ECommerce Sales
 * Version: 4.2.0
 */

window.loadEcommerceSales = function () {

new CustomApexChart({
    selector: '#salesMixChart',
    options: () => ({
        chart: {
            height: 400,
            type: 'line',
            stacked: false,
            toolbar: {show: false}
        },
        stroke: {
            width: [0, 0, 2, 2, 2],
            curve: 'smooth'
        },
        plotOptions: {
            bar: {
                columnWidth: '40%'
            }
        },
        colors: [ins('primary'), ins('danger'), ins('secondary'), "#bbcae14d"],
        series: [
            {
                name: 'Orders',
                type: 'bar',
                data: [320, 402, 391, 334, 390, 330]
            },
            {
                name: 'Refunds',
                type: 'bar',
                data: [20, 30, 28, 22, 35, 25]
            },
            {
                name: 'Avg. Revenue/Order',
                type: 'line',
                data: [15.5, 16.2, 15.8, 16.0, 15.9, 16.3]
            },
            {
                name: 'Revenue',
                type: 'area',
                data: [4960, 6512, 6182, 5344, 6201, 5379]
            },
            {
                name: 'Tax',
                type: 'bar',
                data: [496, 651, 618, 534, 620, 537]
            }
        ],
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
        },
        yaxis: [
            {
                title: {
                    text: 'Orders / Refunds / Avg Revenue',
                    style: {
                        fontSize: '11px',    // Font size
                        fontWeight: 600,     // Font weight (600 is semi-bold)
                    }
                }
            },
            {
                opposite: true,
                title: {
                    text: 'Revenue / Tax',
                    style: {
                        fontSize: '11px',    // Font size
                        fontWeight: 600,     // Font weight (600 is semi-bold)
                    }
                }
            }
        ],
        legend: {
            show: false
        }
    })
})


// Function to get the current month range (start and end dates)
function getCurrentMonthRange() {
    const start = new Date();
    start.setDate(1);  // Set to the 1st day of the current month
    start.setHours(0, 0, 0, 0);

    const end = new Date();
    end.setMonth(end.getMonth() + 1); // Go to the next month
    end.setDate(0);  // Set to the last day of the current month
    end.setHours(23, 59, 59, 999);

    return [start, end];  // Return the start and end date as an array
}

// Initialize flatpickr with range mode
const dateRangePicker = document.getElementById("dateRangePicker");
if (dateRangePicker) {
    flatpickr(dateRangePicker, {
        mode: "range",
        dateFormat: "d M, Y",
        defaultDate: getCurrentMonthRange()  // Pass the current month range as defaultDate
    });
}

}