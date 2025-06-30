<?php include 'partials/html.php' ?>

<head>
    <?php $title = "Sparkline Apexcharts"; include 'partials/title-meta.php' ?>

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

                <?php $subtitle = "Charts"; $title = "Sparkline Apexcharts"; include 'partials/page-title.php' ?>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row g-3" dir="ltr">
                                    <div class="col-md-4">
                                        <div id="spark1" class="apex-charts"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div id="spark2" class="apex-charts"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div id="spark3" class="apex-charts"></div>
                                    </div>
                                </div> <!-- end row -->
                            </div><!-- end card body-->

                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table table-centered table-custom mb-0">
                                            <thead class="bg-light bg-opacity-50 fs-xxs thead-sm text-uppercase">
                                                <tr>
                                                    <th>Total Value</th>
                                                    <th>Percentage of Portfolio</th>
                                                    <th>Last 10 days</th>
                                                    <th>Volume</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>$32,554</td>
                                                    <td>15%</td>
                                                    <td>
                                                        <div id="chart1"></div>
                                                    </td>
                                                    <td>
                                                        <div id="chart5"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>$23,533</td>
                                                    <td>7%</td>
                                                    <td>
                                                        <div id="chart2"></div>
                                                    </td>
                                                    <td>
                                                        <div id="chart6"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>$54,276</td>
                                                    <td>9%</td>
                                                    <td>
                                                        <div id="chart3"></div>
                                                    </td>
                                                    <td>
                                                        <div id="chart7"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>$11,533</td>
                                                    <td>2%</td>
                                                    <td>
                                                        <div id="chart4"></div>
                                                    </td>
                                                    <td>
                                                        <div id="chart8"></div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive -->
                                </div> <!-- end col -->
                            </div> <!-- end row-->
                        </div><!-- end card -->
                    </div> <!-- end col-->
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

    <!-- Apex Chart Sparkline Demo js -->
    <script src="assets/js/pages/chart-apex-sparklines.js"></script>

</body>

</html>