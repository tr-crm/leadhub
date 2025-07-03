<?php include 'partials/html.php' ?>

<head>
    <?php $title = "Echart Candlestick Chart"; include 'partials/title-meta.php' ?>

    <?php include 'partials/head-css.php' ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?php include 'partials/menu.php' ?>

        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->

        <div class="content-page">

            <div class="container-fluid">

                <?php $subtitle = "Charts"; $title = "Candlestick Echart"; include 'partials/page-title.php' ?>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Basic Candlestick Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-basic-candlestick" style="min-height:400px"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Mixed Candlestick Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-mixed-candlestick" style="min-height:400px"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
            <!-- container -->

            <?php include 'partials/footer.php' ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?php include 'partials/customizer.php' ?>

    <?php include 'partials/footer-scripts.php' ?>

    <!-- E Charts js -->
    <script src="assets/plugins/echarts/echarts.min.js"></script>

    <!-- E Charts Demo js -->
    <script src="assets/js/pages/chart-echart-candlestick.js"></script>


</body>

</html>