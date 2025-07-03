<?php include 'partials/html.php' ?>

<head>
    <?php $title = "Echart GEO Map"; include 'partials/title-meta.php' ?>

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

            <?php $subtitle = "Charts"; $title = "GEO Map"; include 'partials/page-title.php' ?>

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">World Map</h4>
                        </div>
                        <div class="card-body">
                            <div id="world-map" style="min-height:400px"></div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">USA Map</h4>
                        </div>
                        <div class="card-body">
                            <div id="usa-map" style="min-height:400px"></div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>


            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Morphing between Map and Bar Chart</h4>
                        </div>
                        <div class="card-body">
                            <div id="map-bar-morphing" style="min-height:400px"></div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Pie Chart on Geo Map </h4>
                        </div>
                        <div class="card-body">
                            <div id="pie-chart-on-map" style="min-height:400px"></div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">GEO SVG Scatter</h4>
                        </div>
                        <div class="card-body">
                            <div id="geo-svg-scatter-map" style="min-height:400px"></div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->

            </div>


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

<script src="https://cdn.jsdelivr.net/npm/echarts/map/js/world.js"></script>


<!-- E Charts Demo js -->
<script src="assets/js/pages/chart-echart-geo-map.js"></script>


</body>

</html>