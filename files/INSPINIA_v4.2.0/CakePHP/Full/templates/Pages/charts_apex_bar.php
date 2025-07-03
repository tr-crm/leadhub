<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Apex Bar Charts']) ?>

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

                <?= $this->element('page_title', ['subtitle' => 'Charts', 'title' => 'Bar Apexchart']) ?>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Bar Charts</h4>
                            </div>
                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="basic-bar" class="apex-charts"></div>
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
                                <h4 class="card-title">Grouped Bar Chart</h4>
                            </div>
                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="grouped-bar" class="apex-charts"></div>
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
                                <h4 class="card-title">Stacked Bar Chart</h4>
                            </div>
                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="stacked-bar" class="apex-charts"></div>
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
                                <h4 class="card-title">100% Stacked Bar Chart</h4>
                            </div>
                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="full-stacked-bar" class="apex-charts"></div>
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
                                <h4 class="card-title">Grouped Stacked Bars</h4>
                            </div>
                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="grouped-stacked-bar" class="apex-charts"></div>
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
                                <h4 class="card-title">Bar with Negative Values</h4>
                            </div>
                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="negative-bar" class="apex-charts"></div>
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
                                <h4 class="card-title">Reversed Bar Chart</h4>
                            </div>
                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="reversed-bar" class="apex-charts"></div>
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
                                <h4 class="card-title">Bar with Image Fill</h4>
                            </div>
                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="image-fill-bar" class="apex-charts"></div>
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
                                <h4 class="card-title">Custom DataLabels Bar</h4>
                            </div>
                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="datalables-bar" class="apex-charts"></div>
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
                                <h4 class="card-title">Patterned Bar Chart</h4>
                            </div>
                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="pattern-bar" class="apex-charts"></div>
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
                                <h4 class="card-title">Bar with Markers</h4>
                            </div>
                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="bar-markers" class="apex-charts"></div>
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
    <!-- Apex Chart Area Demo js -->
    <script src="/js/pages/chart-apex-bar.js"></script>

</body>

</html>