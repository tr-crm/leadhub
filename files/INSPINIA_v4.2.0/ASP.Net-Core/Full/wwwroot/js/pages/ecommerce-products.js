/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): ECommerce Products
 * Version: 4.2.0
 */

const nonLinearSlider = document.getElementById('price-filter');

if (nonLinearSlider) {
    noUiSlider.create(nonLinearSlider, {
        connect: true,
        behaviour: 'tap',
        start: [1000, 2500],
        range: {
            'min': [1],
            'max': [9999]
        },
        format: {
            to: function (value) {
                return '$' + Math.round(value);
            },
            from: function (value) {
                return Number(value.replace('$', ''));
            }
        }
    });

    const nodes = [
        document.getElementById('price-filter-low'),  // lower value display
        document.getElementById('price-filter-high')  // upper value display
    ];

    nonLinearSlider.noUiSlider.on('update', function (values, handle) {
        nodes[handle].innerHTML = values[handle];
    });
}
