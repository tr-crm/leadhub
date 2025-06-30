<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Apex Area Charts']) ?>

    <?= $this->element('head_css') ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?= $this->element('menu') ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <div class="container-fluid">

                <?= $this->element('page_title', ['subtitle' => 'Charts', 'title' => 'Area Apexchart']) ?>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Area Chart</h4>
                            </div>

                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="basic-area" class="apex-charts"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Spline Area</h4>
                            </div>

                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="spline-area" class="apex-charts"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Area Chart - Datetime X-axis</h4>
                            </div>

                            <div class="card-body">
                                <div class="toolbar apex-toolbar">
                                    <button data-range="1M" class="btn btn-sm btn-light">1M</button>
                                    <button data-range="6M" class="btn btn-sm btn-light">6M</button>
                                    <button data-range="1Y" class="btn btn-sm btn-light active">1Y</button>
                                    <button data-range="YTD" class="btn btn-sm btn-light">YTD</button>
                                    <button data-range="ALL" class="btn btn-sm btn-light">ALL</button>
                                </div>
                                <div dir="ltr">
                                    <div id="area-chart-datetime" class="apex-charts"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Area with Negative Values</h4>
                            </div>

                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="area-chart-negative" class="apex-charts"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Selection - Github Style</h4>
                            </div>

                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="area-chart-github" class="apex-charts"></div>
                                    <div class="pt-2 pb-1">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            <img src="/images/logo-sm.png" class="avatar-sm rounded" alt="file-image">
                                            <a href="javascript:void(0);" class="text-muted fw-bold fs-md">INSPINIA</a>
                                        </div>
                                    </div>
                                    <div id="area-chart-github2" class="apex-charts"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Stacked Area</h4>
                            </div>

                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="stacked-area" class="apex-charts"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Irregular TimeSeries</h4>
                            </div>

                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="area-timeSeries" class="apex-charts"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Area Chart with Null values</h4>
                            </div>

                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="area-chart-nullvalues" class="apex-charts"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row-->

            </div>
            <!-- container -->

            <?= $this->element('footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?= $this->element('customizer') ?>

    <?= $this->element('footer_scripts') ?>

    <!-- Apex Charts js -->
    <script src="/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="/plugins/moment/moment.min.js"></script>

    <script src="https://apexcharts.com/samples/assets/github-data.js"></script>
    <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>

    <!-- Apex Chart Area Demo js -->
    <script src="/js/pages/chart-apex-area.js"></script>

</body>

</html>