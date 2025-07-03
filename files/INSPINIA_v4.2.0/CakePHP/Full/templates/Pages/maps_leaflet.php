<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Leaflet Maps']) ?>

    <!-- leaflet CSS -->
    <link href="/plugins/leaflet/leaflet.css" rel="stylesheet" type="text/css">

    <?= $this->element('head_css') ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?= $this->element('menu') ?>

        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->

        <div class="content-page">

            <div class="container-fluid">
                <?= $this->element('page_title', ['subtitle' => 'Maps', 'title' => 'Leaflet']) ?>
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
                                        <h5 class="mb-1">Basic Map</h5>
                                        <p class="text-muted mb-0">A simple Leaflet map centered with default tile layer and controls.</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <div id="basicMap" style="height: 300px"></div>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <div class="row g-3">
                                    <div class="col-lg-4">
                                        <h5 class="mb-1">Marker, Circle & Polygon</h5>
                                        <p class="text-muted mb-0">Shows how to add interactive markers, circles, and polygons on the map.</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <div id="shapeMap" style="height: 300px"></div>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <div class="row g-3">
                                    <div class="col-lg-4">
                                        <h5 class="mb-1">Draggable Marker with Popup</h5>
                                        <p class="text-muted mb-0">Allows dragging a marker with a popup that displays dynamic content.</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <div id="dragMap" style="height: 300px"></div>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <div class="row g-3">
                                    <div class="col-lg-4">
                                        <h5 class="mb-1">User Location</h5>
                                        <p class="text-muted mb-0">Uses the browser's geolocation API to show the user's current location.</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <div id="userLocation" style="height: 300px"></div>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <div class="row g-3">
                                    <div class="col-lg-4">
                                        <h5 class="mb-1">Custom Icons</h5>
                                        <p class="text-muted mb-0">Demonstrates using custom image icons for Leaflet map markers.</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <div id="customIcons" style="height: 300px"></div>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <div class="row g-3">
                                    <div class="col-lg-4">
                                        <h5 class="mb-1">Layer Control</h5>
                                        <p class="text-muted mb-0">Toggles between multiple map layers or overlays using Leaflet’s layer control.</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <div id="layerControl" style="height: 300px"></div>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <div class="row g-3">
                                    <div class="col-lg-4">
                                        <h5 class="mb-1">Interactive Choropleth Map</h5>
                                        <p class="text-muted mb-0">Displays region-based data using GeoJSON and interactive color scales.</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <div id="geoJson" style="height: 300px"></div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- card end -->

                    </div>
                </div>
                <!-- end row -->
            </div>

            <?= $this->element('footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?= $this->element('customizer') ?>

    <?= $this->element('footer_scripts') ?>

    <!-- leaflet plugin -->
    <script src="/plugins/leaflet/leaflet.js"></script>

    <!-- leaflet map -->
    <script src="/js/maps/leaflet-data.js"></script>
    <script src="/js/pages/maps-leaflet.js"></script>

</body>

</html>