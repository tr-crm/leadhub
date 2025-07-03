<?php include 'partials/html.php' ?>

<head>
    <?php $title = "Apex Bubble Charts"; include 'partials/title-meta.php' ?>

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
                
                <?php $subtitle = "Charts"; $title = "Bubble Apexchart"; include 'partials/page-title.php';?>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Simple Bubble Charts</h4>
                            </div>
                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="simple-bubble" class="apex-charts"></div>
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
                                <h4 class="card-title">3D Bubble Charts</h4>
                            </div>
                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="threed-bubble" class="apex-charts"></div>
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
                                <h4 class="card-title">Bubble Charts</h4>
                            </div>
                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="three-bubble" class="apex-charts"></div>
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
    <!-- Apex Chart Area Demo js -->
    <script src="assets/js/pages/chart-apex-bubble.js"></script>


</body>

</html>