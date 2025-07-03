<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Echart Heatmap Chart']) ?>

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

                <?= $this->element('page_title', ['subtitle' => 'Charts', 'title' => 'Echart Heatmap Chart']) ?>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Basic Heatmap Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-heatmap" style="min-height:300px"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Heatmap Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-heatmap3" style="min-height:300px"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Heatmap - 20K Data Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-heatmap4" style="min-height:300px"></div>
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
    <script src="/js/pages/chart-echart-heatmap.js"></script>

</body>

</html>