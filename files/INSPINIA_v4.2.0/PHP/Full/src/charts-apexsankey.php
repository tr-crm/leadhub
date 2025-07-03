<?php include 'partials/html.php' ?>

<head>
    <?php $title = "ApexSankey"; include 'partials/title-meta.php' ?>

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

                <?php $subtitle = "Charts"; $title = "ApexSankey"; include 'partials/page-title.php' ?>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Sankey</h4>
                            </div>

                            <div class="card-body">
                                <div id="basic-sankey" style="margin: 0 auto;"></div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Node Customization</h4>
                            </div>

                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="node-sankey" style="margin: 0 auto;"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edge Customization</h4>
                            </div>

                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="edge-sankey" style="margin: 0 auto;"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Font Options</h4>
                            </div>

                            <div class="card-body">
                                <div id="font-sankey" style="margin: 0 auto;"></div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                </div>

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

    <script src="assets/plugins/svgdotjs/svg.min.js"></script>
    <script src="assets/js/plugins/apexsankey/apexsankey.min.js"></script>

    <script src="assets/js/pages/chart-apexsankey.js"></script>

</body>

</html>