<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Echart Scatter Chart']) ?>

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

                <?= $this->element('page_title', ['subtitle' => 'Charts', 'title' => 'Scatter Chart']) ?>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Scatter Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="echart-scatter-basic" style="min-height:300px"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Bubble Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="echart-bubble-chart" style="min-height:300px"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Quartet Scatter Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="echart-quartet-scatter" style="min-height:600px"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Single Axis Scatter chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="echart-single-axis-scatter" style="min-height:450px"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
            <!-- container -->

            <?= $this->element('footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?= $this->element('customizer') ?>

    <?= $this->element('footer_scripts') ?>

    <!-- E Charts js -->
    <script src="/plugins/echarts/echarts.min.js"></script>

    <!-- E Charts Demo js -->
    <script src="/js/pages/chart-echart-scatter.js"></script>

</body>

</html>