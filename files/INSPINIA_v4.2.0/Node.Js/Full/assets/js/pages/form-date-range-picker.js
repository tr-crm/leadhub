/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Form Daterangepicker
 * Version: 4.0.1
 */

if (jQuery().daterangepicker) {
    const start = moment().subtract(29, 'days');
    const end = moment();

    // Default config for range pickers
    const defaultRangeOptions = {
        startDate: start,
        endDate: end,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [
                moment().subtract(1, 'month').startOf('month'),
                moment().subtract(1, 'month').endOf('month')
            ]
        },
        locale: {
            format: 'MM/DD/YYYY'
        },
        cancelClass: 'btn-light',
        applyButtonClasses: 'btn-success'
    };

    // Initialize range picker
    $('[data-toggle="date-picker-range"]').each(function () {
        const $this = $(this);
        const dataOptions = $this.data();

        const options = $.extend(true, {}, defaultRangeOptions, dataOptions);
        const targetSelector = $this.attr('data-target-display');

        $this.daterangepicker(options, function (start, end) {
            if (targetSelector) {
                $(targetSelector).html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }
        });

        // Set initial display value
        if (targetSelector) {
            $(targetSelector).html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    });

    // Default config for single date pickers
    const defaultSingleOptions = {
        singleDatePicker: true,
        showDropdowns: true,
        locale: {
            format: 'MM/DD/YYYY'
        },
        cancelClass: 'btn-light',
        applyButtonClasses: 'btn-success'
    };

    // Initialize single date pickers
    $('[data-toggle="date-picker"]').each(function () {
        const $this = $(this);
        const dataOptions = $this.data();
        const options = $.extend(true, {}, defaultSingleOptions, dataOptions);

        // Handle stringified locale object safely
        if (typeof options.locale === 'string') {
            try {
                options.locale = JSON.parse(options.locale.replace(/'/g, '"'));
            } catch (e) {
                console.warn('Invalid JSON format in data-locale:', e);
            }
        }

        $this.daterangepicker(options);
    });
}
