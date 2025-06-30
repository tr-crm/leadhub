/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Datatables Scroll
 * Version: 4.2.0
 */

function initSelectableDataTable(selector, selectOptions = {}) {
    const tableElement = document.querySelector(selector);
    if (tableElement) {
        new DataTable(tableElement, {
            pageLength: 7,
            lengthMenu: [7, 10, 25, 50, -1],
            select: selectOptions,
            language: {
                paginate: {
                    first: '<i class="ti ti-chevrons-left"></i>',
                    previous: '<i class="ti ti-chevron-left"></i>',
                    next: '<i class="ti ti-chevron-right"></i>',
                    last: '<i class="ti ti-chevrons-right"></i>'
                },
                lengthMenu: '_MENU_ Companies per page',
                info: 'Showing <span class="fw-semibold">_START_</span> to <span class="fw-semibold">_END_</span> of <span class="fw-semibold">_TOTAL_</span> Companies'
            }
        });
    }
}

document.addEventListener('DOMContentLoaded', function () {
    initSelectableDataTable('#single-select', {style: 'single'});
    initSelectableDataTable('#multi-select', {style: 'multi'});
    initSelectableDataTable('#cell-select', {style: 'os', items: 'cell'});
})