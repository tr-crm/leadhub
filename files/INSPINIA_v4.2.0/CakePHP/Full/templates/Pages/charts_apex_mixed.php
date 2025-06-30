<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Mixed Apexcharts']) ?>

    <?= $this->element('head_css') ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?= $this->element('menu') ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <div class="container-fluid">

                <?= $this->element('page_title', ['subtitle' => 'Charts', 'title' => 'Mixed Apexcharts']) ?>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Line & Column Chart</h4>
                            </div>

                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="line-column-mixed" class="apex-charts"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Multiple Y-Axis Chart</h4>
                            </div>

                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="multiple-yaxis-mixed" class="apex-charts"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Line & Area Chart</h4>
                            </div>
                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="line-area-mixed" class="apex-charts"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Line, Column & Area Chart</h4>
                            </div>

                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="all-mixed" class="apex-charts"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row-->

            </div>
            <!-- container -->

            <?= $this->element('footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?= $this->element('customizer') ?>

    <?= $this->element('footer_scripts') ?>

    <!-- Apex Chart js -->
    <script src="/plugins/apexcharts/apexcharts.min.js"></script>

    <!-- Apex Chart Polar Area Demo js -->
    <script src="/js/pages/chart-apex-mixed.js"></script>

</body>

</html>