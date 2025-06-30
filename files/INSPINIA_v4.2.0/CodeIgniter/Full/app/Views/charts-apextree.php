<?= $this->include('./partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "ApexTree Apexcharts")) ?>

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

                <?php echo view("./partials/page-title", array("subtitle" => "Charts", "title" => "ApexTree")) ?>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Right to left</h4>
                    </div>

                    <div class="card-body">
                        <div dir="ltr">
                            <div id="right-to-left" style="margin: 0 auto;"></div>
                        </div>
                    </div>
                    <!-- end card body-->
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bottom</h4>
                    </div>

                    <div class="card-body">
                        <div dir="ltr">
                            <div id="bottom-tree" style="margin: 0 auto;"></div>
                        </div>
                    </div>
                    <!-- end card body-->
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Top to bottom</h4>
                    </div>

                    <div class="card-body">
                        <div dir="ltr">
                            <div id="top-tree" style="margin: 0 auto;"></div>
                        </div>
                    </div>
                    <!-- end card body-->
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Collapse Expand</h4>
                    </div>

                    <div class="card-body">
                        <div dir="ltr">
                            <div id="collapse-expand" style="margin: 0 auto;"></div>
                        </div>
                    </div>
                    <!-- end card body-->
                </div>
                <!-- end card -->

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

    <!-- Apex Chart js -->
    <script src="/plugins/apextree/apextree.min.js"></script>

    <!-- Apex Chart Heatmap Demo js -->
    <script src="/js/pages/chart-apextree.js"></script>

</body>

</html>