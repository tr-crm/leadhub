<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'ApexTree Apexcharts']) ?>

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

                <?= $this->element('page_title', ['subtitle' => 'Charts', 'title' => 'ApexTree Apexcharts']) ?>

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
    <script src="/plugins/apextree/apextree.min.js"></script>

    <!-- Apex Chart Heatmap Demo js -->
    <script src="/js/pages/chart-apextree.js"></script>

</body>

</html>