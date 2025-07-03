/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Datatables Fixed Header
 * Version: 4.2.0
 */
import DataTable from 'datatables.net-bs5';
import 'datatables.net-responsive-bs5';
import 'datatables.net-fixedheader'

document.addEventListener('DOMContentLoaded', () => {
    const tableElement = document.getElementById('fixed-header-data');
    if (tableElement) {
        new DataTable(tableElement, {
            fixedHeader: {
                header: true,
                headerOffset: 65
            },
            pageLength: 25,
            language: {
                paginate: {
                    first: '<i class="ti ti-chevrons-left"></i>',
                    previous: '<i class="ti ti-chevron-left"></i>',
                    next: '<i class="ti ti-chevron-right"></i>',
                    last: '<i class="ti ti-chevrons-right"></i>'
                }
            }
        });
    }
})