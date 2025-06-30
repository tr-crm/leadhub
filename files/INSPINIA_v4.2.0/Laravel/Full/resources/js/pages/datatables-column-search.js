/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Datatables Child Rows
 * Version: 4.2.0
 */
import DataTable from 'datatables.net-bs5';
import 'datatables.net-responsive-bs5';

document.addEventListener('DOMContentLoaded', () => {
    const tableElement = document.getElementById('column-search-data');
    if (tableElement) {
        new DataTable(tableElement, {
            language: {
                paginate: {
                    first: '<i class="ti ti-chevrons-left"></i>',
                    previous: '<i class="ti ti-chevron-left"></i>',
                    next: '<i class="ti ti-chevron-right"></i>',
                    last: '<i class="ti ti-chevrons-right"></i>'
                }
            },
            initComplete: function () {
                const api = this.api();

                // Disable sorting clicks on #xx th elements
                document.querySelectorAll('#column-search-inputs th').forEach((th) => {
                    th.addEventListener('click', function (e) {
                        e.stopPropagation(); // Prevent sorting trigger
                    });
                });

                // Handle input filtering for columns
                document.querySelectorAll('#column-search-inputs th input').forEach((input, index) => {
                    input.addEventListener('click', function (e) {
                        e.stopPropagation(); // Prevent input click from bubbling up too
                    });

                    input.addEventListener('keyup', function () {
                        if (api.column(index).search() !== this.value) {
                            api.column(index).search(this.value).draw();
                        }
                    });
                });
            }
        });
    }
})

