module.exports = [

    {
        // Comman Vendors Js
        vendorsJS: [
            "./node_modules/jquery/dist/jquery.min.js",
            "./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js",
            "./node_modules/lucide/dist/umd/lucide.min.js",
            "./node_modules/simplebar/dist/simplebar.min.js",
            "./node_modules/flatpickr/dist/flatpickr.min.js",
            "./node_modules/choices.js/public/assets/scripts/choices.min.js",
            "./node_modules/prismjs/prism.js",
            "./node_modules/prismjs/plugins/normalize-whitespace/prism-normalize-whitespace.min.js",
        ],

        vendorCSS: [
            "./node_modules/flatpickr/dist/flatpickr.min.css",
            "./node_modules/choices.js/public/assets/styles/choices.min.css",
            
            // Tabler Icons
            "./node_modules/@tabler/icons-webfont/dist/tabler-icons.min.css"
        ],

        vendorFonts: [
            "./node_modules/@tabler/icons-webfont/dist/fonts/tabler-icons.woff2",
            "./node_modules/@tabler/icons-webfont/dist/fonts/tabler-icons.woff",
            "./node_modules/@tabler/icons-webfont/dist/fonts/tabler-icons.ttf"
        ]
    },

    {
        name: "pickr",
        assets: [
            "./node_modules/@simonwep/pickr/dist/pickr.min.js",
            "./node_modules/@simonwep/pickr/dist/themes/classic.min.css"
        ]
    },

    {
        name: "animate",
        assets: ["./node_modules/animate.css/animate.min.css"]
    },

    {
        name: "bootstrap",
        assets: [
            "./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js",
            "./node_modules/bootstrap/dist/css/bootstrap.min.css"
        ]
    },


    {
        name: "jquery",
        assets: ["./node_modules/jquery/dist/jquery.min.js"]
    },


    {
        name: "lucide",
        assets: ["./node_modules/lucide/dist/umd/lucide.min.js"]
    },


    {
        name: "simplebar",
        assets: [
            "./node_modules/simplebar/dist/simplebar.min.js",
            "./node_modules/simplebar/dist/simplebar.min.css"
        ]
    },

    {
        name: "apexcharts",
        assets: ["./node_modules/apexcharts/dist/apexcharts.min.js"]
    },
    {
        name: "clipboard",
        assets: ["./node_modules/clipboard/dist/clipboard.min.js"]
    },
    {
        name: "fullcalendar",
        assets: ["./node_modules/fullcalendar/index.global.min.js"]
    },
    {
        name: "moment",
        assets: ["./node_modules/moment/min/moment.min.js"]
    },
    {
        name: "daterangepicker",
        assets: [
            "./node_modules/daterangepicker/daterangepicker.js",
            "./node_modules/daterangepicker/daterangepicker.css"
        ]
    },
    {
        name: "svgdotjs",
        assets: ["./node_modules/@svgdotjs/svg.js/dist/svg.min.js"]
    },
    {
        name: "apextree",
        assets: ["./node_modules/apextree/apextree.min.js"]
    },
    {
        name: "echarts",
        assets: ["./node_modules/echarts/dist/echarts.min.js"]
    },
    {
        name: "jsvectormap",
        assets: [
            "./node_modules/jsvectormap/dist/jsvectormap.min.js",
            "./node_modules/jsvectormap/dist/maps/world.js",
            "./node_modules/jsvectormap/dist/maps/world-merc.js",
            "./node_modules/jsvectormap/dist/jsvectormap.min.css"
        ]
    },
    {
        name: "quill",
        assets: [
            "./node_modules/quill/dist/quill.js",
            "./node_modules/quill/dist/quill.core.css",
            "./node_modules/quill/dist/quill.snow.css",
            "./node_modules/quill/dist/quill.bubble.css"
        ]
    },
    {
        name: "dropzone",
        assets: [
            "./node_modules/dropzone/dist/dropzone-min.js",
            "./node_modules/dropzone/dist/dropzone.css"
        ]
    },
    {
        name: "filepond",
        assets: [
            "./node_modules/filepond/dist/filepond.min.js",
            "./node_modules/filepond/dist/filepond.min.css",
            "./node_modules/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js",
            "./node_modules/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css",
            "./node_modules/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.min.js",
            "./node_modules/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.min.js",
            "./node_modules/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.min.js"
        ]
    },
    {
        name: "handlebars",
        assets: ["./node_modules/handlebars/dist/handlebars.min.js"]
    },
    {
        name: "typeahead",
        assets: ["./node_modules/typeahead.js/dist/typeahead.bundle.min.js"]
    },
    {
        name: "pickr",
        assets: [
            "./node_modules/@simonwep/pickr/dist/pickr.min.js",
            "./node_modules/@simonwep/pickr/dist/themes/classic.min.css",
            "./node_modules/@simonwep/pickr/dist/themes/monolith.min.css",
            "./node_modules/@simonwep/pickr/dist/themes/nano.min.css"
        ]
    },
    {
        name: "nouislider",
        assets: [
            "./node_modules/nouislider/dist/nouislider.min.js",
            "./node_modules/nouislider/dist/nouislider.min.css"
        ]
    },
    {
        name: "wnumb",
        assets: ["./node_modules/wnumb/wNumb.min.js"]
    },
    {
        name: "choices",
        assets: [
            "./node_modules/choices.js/public/assets/scripts/choices.min.js",
            "./node_modules/choices.js/public/assets/styles/choices.min.css"
        ]
    },
    {
        name: "select2",
        assets: [
            "./node_modules/select2/dist/js/select2.min.js",
            "./node_modules/select2/dist/css/select2.min.css"
        ]
    },
    {
        name: "summernote",
        assets: [
            "./node_modules/summernote/dist/summernote-bs5.min.js",
            "./node_modules/summernote/dist/summernote-bs5.min.css"
        ],
        font: [
            "./node_modules/summernote/dist/font/summernote.woff2",
            "./node_modules/summernote/dist/font/summernote.woff",
            "./node_modules/summernote/dist/font/summernote.ttf",
        ]
    },
    {
        name: "leaflet",
        assets: [
            "./node_modules/leaflet/dist/leaflet.js",
            "./node_modules/leaflet/dist/leaflet.css"
        ]
    },
    {
        name: "animate",
        assets: ["./node_modules/animate.css/animate.min.css"]
    },
    {
        name: "glightbox",
        assets: [
            "./node_modules/glightbox/dist/js/glightbox.min.js",
            "./node_modules/glightbox/dist/css/glightbox.min.css"
        ]
    },
    {
        name: "web-animations",
        assets: ["./node_modules/web-animations-js/web-animations.min.js"]
    },
    {
        name: "muuri",
        assets: ["./node_modules/muuri/dist/muuri.min.js"]
    },
    {
        name: "tourguidejs",
        assets: [
            "./node_modules/@sjmc11/tourguidejs/dist/tour.js",
            "./node_modules/@sjmc11/tourguidejs/dist/css/tour.min.css"
        ]
    },
    {
        name: "tinycon",
        assets: ["./node_modules/tinycon/tinycon.min.js"]
    },
    {
        name: "ladda",
        assets: [
            "./node_modules/ladda/dist/ladda.min.css",
            "./node_modules/ladda/dist/spin.min.js",
            "./node_modules/ladda/dist/ladda.min.js",
            "./node_modules/ladda/dist/ladda.jquery.min.js"
        ]
    },
    {
        name: "masonry",
        assets: ["./node_modules/masonry-layout/dist/masonry.pkgd.min.js"]
    },
    {
        name: "sortablejs",
        assets: ["./node_modules/sortablejs/Sortable.min.js"]
    },
    {
        name: "pdfjs",
        assets: [
            "./node_modules/pdfjs-dist/build/pdf.min.js",
            "./node_modules/pdfjs-dist/build/pdf.worker.min.js"
        ]
    },
    {
        name: "sweetalert2",
        assets: [
            "./node_modules/sweetalert2/dist/sweetalert2.min.js",
            "./node_modules/sweetalert2/dist/sweetalert2.min.css"
        ]
    },
    {
        name: "inputmask",
        assets: [
            "./node_modules/inputmask/dist/inputmask.min.js"
        ]
    },
    {
        name: "diff",
        assets: ["./node_modules/diff/dist/diff.min.js"]
    },
    {
        name: "jstree",
        assets: [
            "./node_modules/jstree/dist/jstree.min.js",
            "./node_modules/jstree/dist/themes/default/style.min.css",
            "./node_modules/jstree/dist/themes/default/throbber.gif"
        ]
    },
    {
        name: "spinkit",
        assets: ["./node_modules/spinkit/spinkit.min.css"]
    },
    {
        name: "datatables",
        assets: [
            "./node_modules/datatables.net/js/dataTables.min.js",
            "./node_modules/datatables.net-bs5/js/dataTables.bootstrap5.min.js",
            "./node_modules/datatables.net-responsive/js/dataTables.responsive.min.js",
            "./node_modules/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js",
            "./node_modules/datatables.net-buttons/js/dataTables.buttons.min.js",
            "./node_modules/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js",
            "./node_modules/jszip/dist/jszip.min.js",
            "./node_modules/pdfmake/build/pdfmake.min.js",
            "./node_modules/pdfmake/build/vfs_fonts.js",
            "./node_modules/datatables.net-buttons/js/buttons.html5.min.js",
            "./node_modules/datatables.net-buttons/js/buttons.print.min.js",
            "./node_modules/datatables.net-select/js/dataTables.select.min.js",
            "./node_modules/datatables.net-select-bs5/js/select.bootstrap5.min.js",
            "./node_modules/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js",
            "./node_modules/datatables.net-fixedheader-bs5/js/fixedHeader.bootstrap5.min.js",
            "./node_modules/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css",
            "./node_modules/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css",
            "./node_modules/datatables.net-select-bs5/css/select.bootstrap5.min.css",
            "./node_modules/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css"
        ]
    }
];