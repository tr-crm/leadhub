<?php include 'partials/html.php' ?>

<head>
    <?php $title = "Apex Candlestick Charts"; include 'partials/title-meta.php' ?>

    <?php include 'partials/head-css.php' ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?php include 'partials/menu.php' ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <div class="container-fluid">

                <?php $subtitle = "Charts"; $title = "Candlestick Apexchart"; include 'partials/page-title.php';?>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Simple Candlestick Charts</h4>
                            </div>
                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="simple-candlestick" class="apex-charts"></div>
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
                                <h4 class="card-title">Combo Candlestick Charts</h4>
                            </div>
                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="combo-candlestick" class="apex-charts"></div>
                                    <div id="combo-bar-candlestick" class="apex-charts"></div>
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
                                <h4 class="card-title">Category X-Axis</h4>
                            </div>
                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="x-axis-candlestick" class="apex-charts"></div>
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
                                <h4 class="card-title">Candlestick with Line</h4>
                            </div>
                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="candlestick-with-line" class="apex-charts"></div>
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

            <?php include 'partials/footer.php' ?>

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?php include 'partials/customizer.php' ?>

    <?php include 'partials/footer-scripts.php' ?>

    <!-- Apex Charts js -->
    <script src="assets/plugins/apexcharts/apexcharts.min.js"></script>

    <!-- Apex Chart Candlestick Demo js -->
    <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.8.17/dayjs.min.js"></script>

    <!-- Apex Chart Area Demo js -->
    <script src="assets/js/pages/chart-apex-candlestick.js"></script>


</body>

</html>