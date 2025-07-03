<?= $this->include('./partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Echart GEO Map")) ?>

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

            <?php echo view("./partials/page-title", array("subtitle" => "Charts", "title" => "GEO Maps")) ?>

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

<script src="https://cdn.jsdelivr.net/npm/echarts/map/js/world.js"></script>


<!-- E Charts Demo js -->
<script src="/js/pages/chart-echart-geo-map.js"></script>


</body>

</html>