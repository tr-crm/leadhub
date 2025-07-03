<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Echart Gauge Chart']) ?>

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

                <?= $this->element('page_title', ['subtitle' => 'Charts', 'title' => 'Echart Gauge Chart']) ?>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Basic Gauge Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-basic-gauge" style="min-height:300px"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Speed Stage Gauge Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-speed-stage-gauge" style="min-height:300px"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->


                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Ring Gauge Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-ring-gauge" style="min-height:300px"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Temperature Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-temperature-gauge" style="min-height:300px"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Multi Ring Gauge Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-multiring-gauge" style="min-height:300px"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Multi Gauge Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-multi-gauge" style="min-height:300px"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->

            </div>
            <!-- container -->

            <?= $this->element('footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?= $this->element('customizer') ?>

    <?= $this->element('footer_scripts') ?>

    <!-- E Charts js -->
    <script src="/plugins/echarts/echarts.min.js"></script>

    <!-- E Charts Demo js -->
    <script src="/js/pages/chart-echart-gauge.js"></script>

</body>

</html>