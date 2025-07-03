<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Google Maps']) ?>

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
                <?= $this->element('page_title', ['subtitle' => 'Maps', 'title' => 'Google']) ?>
            </div> <!-- container -->

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Examples</h4>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-lg-4">
                                        <h5 class="mb-1">Basic Google Map</h5>
                                        <p class="text-muted mb-0">Displays a basic embedded Google Map.</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <iframe src="https://www.google.com/maps/embed/v1/place?q=Eiffel+Tower&key=AIzaSyBSFRN6WWGYwmFi498qXXsD2UwkbmD74v4" style="width: 100%; height: 360px; overflow:hidden; border:0;"></iframe>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <div class="row g-3">
                                    <div class="col-lg-4">
                                        <h5 class="mb-1">Street View Google Map</h5>
                                        <p class="text-muted mb-0">Displays a satellite-styled view of the map.</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <iframe src="https://www.google.com/maps/embed/v1/place?q=Statue+of+Liberty&key=AIzaSyBSFRN6WWGYwmFi498qXXsD2UwkbmD74v4&zoom=18&maptype=satellite" style="width: 100%; height: 360px; overflow:hidden; border:0;"></iframe>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <div class="row g-3">
                                    <div class="col-lg-4">
                                        <h5 class="mb-1">Dark Google Map</h5>
                                        <p class="text-muted mb-0">A dark-mode styled map using CSS filters.</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <iframe src="https://www.google.com/maps/embed/v1/place?q=Sydney+Opera+House&key=AIzaSyBSFRN6WWGYwmFi498qXXsD2UwkbmD74v4" style="width: 100%; height: 360px; overflow:hidden; border:0;filter: invert(100%) hue-rotate(180deg);"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row-->
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

</body>

</html>