/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Datatables Basic
 * Version: 4.2.0
 */

window.loadDataTableBasic = function () {
    new DataTable('[data-tables="basic"]', {
        language: {
            paginate: {
                first: '<i class="ti ti-chevrons-left"></i>',   // Tabler First
                previous: '<i class="ti ti-chevron-left"></i>', // Tabler Prev
                next: '<i class="ti ti-chevron-right"></i>',    // Tabler Next
                last: '<i class="ti ti-chevrons-right"></i>'    // Tabler Last
            }
        }
    });
}