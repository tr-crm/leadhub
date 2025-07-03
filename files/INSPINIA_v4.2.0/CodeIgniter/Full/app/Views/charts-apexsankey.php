<?= $this->include('./partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "ApexSankey Apexcharts")) ?>

    <?= $this->include('./partials/head-css') ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?= $this->include('./partials/menu') ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <div class="container-fluid">

                <?php echo view("./partials/page-title", array("subtitle" => "Charts", "title" => "ApexSankey")) ?>

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

            <?= $this->include('./partials/footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    </div>

    <!-- END wrapper -->

    <?= $this->include('./partials/customizer') ?>

    <?= $this->include('./partials/footer-scripts') ?>

    <script src="/plugins/svgdotjs/svg.min.js"></script>
    <script src="/js/plugins/apexsankey/apexsankey.min.js"></script>

    <script src="/js/pages/chart-apexsankey.js"></script>

</body>

</html>