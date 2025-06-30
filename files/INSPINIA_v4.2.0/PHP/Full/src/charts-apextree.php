<?php include 'partials/html.php' ?>

<head>
    <?php $title = "ApexTree Apexcharts"; include 'partials/title-meta.php' ?>

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

                <?php $subtitle = "Charts"; $title = "ApexTree Apexcharts"; include 'partials/page-title.php' ?>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Right to left</h4>
                    </div>

                    <div class="card-body">
                        <div dir="ltr">
                            <div id="right-to-left" style="margin: 0 auto;"></div>
                        </div>
                    </div>
                    <!-- end card body-->
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bottom</h4>
                    </div>

                    <div class="card-body">
                        <div dir="ltr">
                            <div id="bottom-tree" style="margin: 0 auto;"></div>
                        </div>
                    </div>
                    <!-- end card body-->
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Top to bottom</h4>
                    </div>

                    <div class="card-body">
                        <div dir="ltr">
                            <div id="top-tree" style="margin: 0 auto;"></div>
                        </div>
                    </div>
                    <!-- end card body-->
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Collapse Expand</h4>
                    </div>

                    <div class="card-body">
                        <div dir="ltr">
                            <div id="collapse-expand" style="margin: 0 auto;"></div>
                        </div>
                    </div>
                    <!-- end card body-->
                </div>
                <!-- end card -->

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

    <!-- Apex Chart js -->
    <script src="assets/plugins/apextree/apextree.min.js"></script>

    <!-- Apex Chart Heatmap Demo js -->
    <script src="assets/js/pages/chart-apextree.js"></script>

</body>

</html>