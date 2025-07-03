<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Pie Apexhcharts']) ?>

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

                <?= $this->element('page_title', ['subtitle' => 'Charts', 'title' => 'Pie Apexhcharts']) ?>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Simple Pie Chart
                                </h4>
                            </div>

                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="simple-pie" class="apex-charts"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Simple Donut Chart</h4>
                            </div>

                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="simple-donut" class="apex-charts"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Monochrome Pie Chart</h4>
                            </div>

                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="monochrome-pie" class="apex-charts"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Gradient Donut Chart</h4>
                            </div>
                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="gradient-donut" class="apex-charts"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Patterned Donut Chart</h4>
                            </div>
                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="patterned-donut" class="apex-charts"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pie Chart with Image fill</h4>
                            </div>
                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="image-pie" class="apex-charts"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Donut Update</h4>
                            </div>

                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="update-donut" class="apex-charts"></div>
                                </div>

                                <div class="text-center mt-2">
                                    <button class="btn btn-sm btn-primary" id="randomize">RANDOMIZE</button>
                                    <button class="btn btn-sm btn-primary" id="add">ADD</button>
                                    <button class="btn btn-sm btn-primary" id="remove">REMOVE</button>
                                    <button class="btn btn-sm btn-primary" id="reset">RESET</button>
                                </div>

                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
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

    <!-- Apex Charts js -->
    <script src="/plugins/apexcharts/apexcharts.min.js"></script>

    <!-- Apex Chart Pie Demo js -->
    <script src="/js/pages/chart-apex-pie.js"></script>

</body>

</html>