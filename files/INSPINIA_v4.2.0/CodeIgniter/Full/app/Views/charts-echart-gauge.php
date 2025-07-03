<?= $this->include('./partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Echart Gauge Chart")) ?>

    <?= $this->include('./partials/head-css') ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?= $this->include('./partials/menu') ?>

        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->

        <div class="content-page">

            <div class="container-fluid">

                <?php echo view("./partials/page-title", array("subtitle" => "Charts", "title" => "Gauge Echart")) ?>

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

            <?= $this->include('./partials/footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?= $this->include('./partials/customizer') ?>

    <?= $this->include('./partials/footer-scripts') ?>

    <!-- E Charts js -->
    <script src="/plugins/echarts/echarts.min.js"></script>

    <!-- E Charts Demo js -->
    <script src="/js/pages/chart-echart-gauge.js"></script>


</body>

</html>