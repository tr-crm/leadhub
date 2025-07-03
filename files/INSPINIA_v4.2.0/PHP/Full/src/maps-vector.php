<?php include 'partials/html.php' ?>

<head>
    <?php $title = "Vector Maps"; include 'partials/title-meta.php' ?>

    <!-- Vector Maps css -->
    <link href="assets/plugins/jsvectormap/jsvectormap.min.css" rel="stylesheet" type="text/css">

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

                <?php $subtitle = "Maps"; $title = "Vector Maps"; include 'partials/page-title.php' ?>

            </div> <!-- container -->

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-0 border-bottom border-dashed">
                                <h4 class="card-title">Examples</h4>
                            </div>

                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-lg-4">
                                        <h5 class="mb-1">World Vector Map</h5>
                                        <p class="text-muted mb-0">A global map showing countries with interactive markers.</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <div id="world-map-markers" style="height: 360px"></div>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <div class="row g-3">
                                    <div class="col-lg-4">
                                        <h5 class="mb-1">World Vector Live Map</h5>
                                        <p class="text-muted mb-0">Live dynamic vector representation of the world with real-time features.</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <div id="world-map-markers-line" style="height: 360px"></div>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <div class="row g-3">
                                    <div class="col-lg-4">
                                        <h5 class="mb-1">US Vector Map</h5>
                                        <p class="text-muted mb-0">Interactive vector map of the United States with state-level details.</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <div id="usa-vector-map" style="height: 360px"></div>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <div class="row g-3">
                                    <div class="col-lg-4">
                                        <h5 class="mb-1">India Vector Map</h5>
                                        <p class="text-muted mb-0">Detailed vector map of India with region highlights.</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <div id="india-vector-map" style="height: 360px"></div>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <div class="row g-3">
                                    <div class="col-lg-4">
                                        <h5 class="mb-1">Canada Vector Map</h5>
                                        <p class="text-muted mb-0">Displays Canadian provinces and territories with interactive regions.</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <div id="canada-vector-map" style="height: 360px"></div>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <div class="row g-3">
                                    <div class="col-lg-4">
                                        <h5 class="mb-1">Russia Vector Map</h5>
                                        <p class="text-muted mb-0">Interactive map highlighting major regions across Russia.</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <div id="russia-vector-map" style="height: 360px"></div>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <div class="row g-3">
                                    <div class="col-lg-4">
                                        <h5 class="mb-1">Iraq Vector Map</h5>
                                        <p class="text-muted mb-0">Vector visualization of Iraq highlighting provinces and regions.</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <div id="iraq-vector-map" style="height: 360px"></div>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <div class="row g-3">
                                    <div class="col-lg-4">
                                        <h5 class="mb-1">Spain Vector Map</h5>
                                        <p class="text-muted mb-0">Geographical map of Spain with region-based interaction.</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <div id="spain-vector-map" style="height: 360px"></div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- card end -->
                    </div>
                </div>
            </div>


            <?php include 'partials/footer.php' ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?php include 'partials/customizer.php' ?>

    <?php include 'partials/footer-scripts.php' ?>

    <!-- Vector Map Js -->
    <script src="assets/plugins/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/maps/world-merc.js"></script>
    <script src="assets/js/maps/world.js"></script>

    <script src="assets/js/maps/in-mill-en.js"></script>
    <script src="assets/js/maps/canada.js"></script>
    <script src="assets/js/maps/iraq.js"></script>
    <script src="assets/js/maps/russia.js"></script>
    <script src="assets/js/maps/spain.js"></script>
    <script src="assets/js/maps/us-aea-en.js"></script>
    <script src="assets/js/maps/us-lcc-en.js"></script>
    <script src="assets/js/maps/us-mill-en.js"></script>

    <!-- Vector Map Demo js-->
    <script src="assets/js/pages/maps-vector.js"></script>

</body>

</html>