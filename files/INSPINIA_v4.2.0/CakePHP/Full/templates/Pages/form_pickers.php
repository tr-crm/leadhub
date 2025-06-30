<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Form Picker']) ?>

    <!-- Daterangepicker Plugin CSS -->
    <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css" type="text/css">

    <!-- Colorpickr Plugin CSS -->
    <link rel="stylesheet" href="/plugins/pickr/classic.min.css"> <!-- 'classic' theme -->
    <link rel="stylesheet" href="/plugins/pickr/monolith.min.css"> <!-- 'monolith' theme -->
    <link rel="stylesheet" href="/plugins/pickr/nano.min.css"> <!-- 'nano' theme -->

    <?= $this->element('head_css') ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?= $this->element('menu') ?>

        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->

        <div class="content-page">

            <div class="container-fluid">
                <?= $this->element('page_title', ['subtitle' => 'Forms', 'title' => 'Pickers']) ?>
            </div>

            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Date Range Picker</h4>
                            </div>

                            <div class="card-body">
                                <p class="text-muted mb-2">
                                    A versatile JavaScript component for selecting date ranges, single dates, and times with ease.
                                    Perfect for forms and dashboards, it supports calendar views, time pickers, and predefined ranges.
                                </p>

                                <a class="btn btn-link p-0 fw-semibold" href="https://www.daterangepicker.com/" target="_blank">
                                    Date Range Picker on View Official Website
                                    <i class="ti ti-chevron-right ms-1"></i>
                                </a>
                            </div>

                            <div class="border-top border-dashed"></div>

                            <div class="card-body">
                                <!-- Example 1: Date Range -->
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5>Date Range</h5>
                                        <p class="text-muted mb-0">Select a custom date range from the calendar.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control date" id="singledaterange" data-toggle="date-picker" data-cancel-class="btn-warning">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Example 2: Date Range Picker With Times -->
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5>Date Range Picker With Times</h5>
                                        <p class="text-muted mb-0">Includes both start and end time selection.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control date" id="daterangetime" data-toggle="date-picker" data-time-picker="true" data-locale="{'format': 'DD/MM hh:mm A'}">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Example 3: Single Date Picker -->
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5>Single Date Picker</h5>
                                        <p class="text-muted mb-0">Select a single date (e.g., birthday).</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control date" id="birthdatepicker" data-toggle="date-picker" data-single-date-picker="true">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Example 4: Predefined Date Ranges -->
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5>Predefined Date Ranges</h5>
                                        <p class="text-muted mb-0">Choose from common ranges like "Last 7 Days", etc.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="position-relative">
                                            <div id="reportrange" class="form-control" data-toggle="date-picker-range" data-target-display="#selectedValue" data-cancel-class="btn-light">
                                                <i class="ti ti-calendar me-2"></i>
                                                <span id="selectedValue"></span>
                                                <i class="ti ti-chevron-down position-absolute end-0 top-50 translate-middle me-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Flatpickr</h4>
                            </div>

                            <div class="card-body">
                                <p class="text-muted mb-2">
                                    Lightweight, powerful javascript datetimepicker with no dependencies
                                </p>

                                <a class="btn btn-link p-0 fw-semibold" href="https://flatpickr.js.org/" target="_blank">
                                    Flatpickr on View Official Website
                                    <i class="ti ti-chevron-right ms-1"></i>
                                </a>
                            </div>

                            <div class="border-top border-dashed"></div>

                            <div class="card-body">
                                <h4 class="card-title fs-sm fw-bold mb-4"> Datepicker</h4>
                                <!-- Basic -->
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <h5>Basic</h5>
                                        <p class="text-muted mb-0">Set <code>data-provider="flatpickr" data-date-format="d M, Y"</code>.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- DateTime -->
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <h5>DateTime</h5>
                                        <p class="text-muted mb-0">Set <code>data-provider="flatpickr" data-date-format="d.m.y" data-enable-time</code>.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d.m.y" data-enable-time>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Human-Friendly Dates -->
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <h5>Human-Friendly Dates</h5>
                                        <p class="text-muted mb-0">Set <code>data-provider="flatpickr" data-altFormat="F j, Y"</code>.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control flatpickr-input" data-provider="flatpickr" data-altFormat="F j, Y">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- MinDate and MaxDate -->
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <h5>MinDate and MaxDate</h5>
                                        <p class="text-muted mb-0">Set <code>data-provider="flatpickr" data-date-format="d M, Y" data-minDate="..." data-maxDate="..."</code>.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-minDate="25 12, 2021" data-maxDate="29 12,2021" placeholder="Select Date">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Default Date -->
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <h5>Default Date</h5>
                                        <p class="text-muted mb-0">Set <code>data-provider="flatpickr" data-date-format="d M, Y" data-default-date="..."</code>.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-default-date="25 12,2021">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Disabling Dates -->
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <h5>Disabling Dates</h5>
                                        <p class="text-muted mb-0">Set <code>data-provider="flatpickr" data-disable-date="..."</code>.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-disable-date="15 12,2021">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Selecting Multiple Dates -->
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <h5>Selecting Multiple Dates</h5>
                                        <p class="text-muted mb-0">Set <code>data-provider="flatpickr" data-multiple-date="true"</code>.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-multiple-date="true">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Range -->
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <h5>Range</h5>
                                        <p class="text-muted mb-0">Set <code>data-provider="flatpickr" data-range-date="true"</code>.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Week Numbers -->
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <h5>Week Numbers</h5>
                                        <p class="text-muted mb-0">Set <code>data-provider="flatpickr" data-week-number</code>.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-week-number>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Inline -->
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <h5>Inline</h5>
                                        <p class="text-muted mb-0">Set <code>data-provider="flatpickr" data-inline-date="true"</code>.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-default-date="25 01,2021" data-inline-date="true">
                                    </div>
                                </div>

                            </div><!-- end card-body -->

                            <div class="border-top border-dashed"></div>

                            <div class="card-body">
                                <h4 class="card-title fs-sm fw-bold mb-4">Timepicker</h4>

                                <!-- Timepicker -->
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <h5>Timepicker</h5>
                                        <p class="text-muted mb-0">Set <code>data-provider="timepickr" data-time-basic="true"</code> attribute.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-provider="timepickr" data-time-basic="true" id="timepicker-example" placeholder="Select Time">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- 24-hour Time Picker -->
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <h5>24-hour Time Picker</h5>
                                        <p class="text-muted mb-0">Set <code>data-provider="timepickr" data-time-hrs="true"</code> attribute.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-provider="timepickr" data-time-hrs="true" id="timepicker-24hrs" placeholder="Select Time">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Time Picker w/ Limits -->
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <h5>Time Picker w/ Limits</h5>
                                        <p class="text-muted mb-0">Set <code>data-provider="timepickr" data-min-time="Min.Time" data-max-time="Max.Time"</code> attribute.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-provider="timepickr" data-min-time="13:00" data-max-time="16:00" placeholder="Select Time">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Preloading Time -->
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <h5>Preloading Time</h5>
                                        <p class="text-muted mb-0">Set <code>data-provider="timepickr" data-default-time="Your Default Time"</code> attribute.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-provider="timepickr" data-default-time="16:45">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Inline -->
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <h5>Inline</h5>
                                        <p class="text-muted mb-0">Set <code>data-provider="timepickr" data-time-inline="Your Default Time"</code> attribute.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-provider="timepickr" data-time-inline="11:42">
                                    </div>
                                </div>

                            </div><!-- end card-body -->
                        </div><!-- end card -->

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Colorpicker</h4>
                            </div>

                            <div class="card-body">
                                <p class="text-muted mb-2">
                                    Pickr - A simple, multi-themed, responsive and hackable Color-Picker library.
                                    No dependencies, no jQuery. Compatible with all CSS Frameworks e.g. Bootstrap, Materialize. Supports alpha channel, rgba, hsla, hsva and more!
                                </p>

                                <a class="btn btn-link p-0 fw-semibold" href="https://simonwep.github.io/pickr/" target="_blank">
                                    Simonwep Colorpicker on View Official Website
                                    <i class="ti ti-chevron-right ms-1"></i>
                                </a>
                            </div>

                            <div class="border-top border-dashed"></div>

                            <div class="card-body">
                                <h4 class="card-title mb-3">Example</h4>

                                <!-- Classic Colorpicker -->
                                <div class="row align-items-center g-4">
                                    <div class="col-lg-6">
                                        <h5 class="fw-semibold mb-1">Classic Demo</h5>
                                        <p class="text-muted mb-0">Use <code>classic-colorpicker</code> class to set classic colorpicker.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="classic-colorpicker"></div>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Monolith Colorpicker -->
                                <div class="row align-items-center g-4">
                                    <div class="col-lg-6">
                                        <h5 class="fw-semibold mb-1">Monolith Demo</h5>
                                        <p class="text-muted mb-0">Use <code>monolith-colorpicker</code> class to set monolith colorpicker.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="monolith-colorpicker"></div>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Nano Colorpicker -->
                                <div class="row align-items-center g-4">
                                    <div class="col-lg-6">
                                        <h5 class="fw-semibold mb-1">Nano Demo</h5>
                                        <p class="text-muted mb-0">Use <code>nano-colorpicker</code> class to set nano colorpicker.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="nano-colorpicker"></div>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Colorpicker Demo -->
                                <div class="row align-items-center g-4">
                                    <div class="col-lg-6">
                                        <h5 class="fw-semibold mb-1">Demo</h5>
                                        <p class="text-muted mb-0">Use <code>colorpicker-demo</code> class to set demo option colorpicker.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="colorpicker-demo"></div>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Colorpicker with Opacity & Hue -->
                                <div class="row align-items-center g-4">
                                    <div class="col-lg-6">
                                        <h5 class="fw-semibold mb-1">Picker with Opacity & Hue</h5>
                                        <p class="text-muted mb-0">Use <code>colorpicker-opacity-hue</code> class to set colorpicker with opacity & hue.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="colorpicker-opacity-hue"></div>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Switch Colorpicker -->
                                <div class="row align-items-center g-4">
                                    <div class="col-lg-6">
                                        <h5 class="fw-semibold mb-1">Switches</h5>
                                        <p class="text-muted mb-0">Use <code>colorpicker-switch</code> class to set switch colorpicker.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="colorpicker-switch"></div>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Colorpicker with Input -->
                                <div class="row align-items-center g-4">
                                    <div class="col-lg-6">
                                        <h5 class="fw-semibold mb-1">Picker with Input</h5>
                                        <p class="text-muted mb-0">Use <code>colorpicker-input</code> class to set colorpicker with input.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="colorpicker-input"></div>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Colorpicker Format Option -->
                                <div class="row align-items-center g-4">
                                    <div class="col-lg-6">
                                        <h5 class="fw-semibold mb-1">Color Format</h5>
                                        <p class="text-muted mb-0">Use <code>colorpicker-format</code> class to set colorpicker with format option.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="colorpicker-format"></div>
                                    </div>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- container -->

            <?= $this->element('footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?= $this->element('customizer') ?>

    <?= $this->element('footer_scripts') ?>

    <!-- Daterangepicker Plugin Js -->
    <script src="/plugins/moment/moment.min.js"></script>
    <script src="/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Date Range Picker Demo Js -->
    <script src="/js/pages/form-date-range-picker.js"></script>

    <!-- Colorpicker Plugin Js -->
    <script src="/plugins/pickr/pickr.min.js"></script>

    <!-- Color Picker Demo Js -->
    <script src="/js/pages/form-colorpickr.js"></script>

</body>

</html>