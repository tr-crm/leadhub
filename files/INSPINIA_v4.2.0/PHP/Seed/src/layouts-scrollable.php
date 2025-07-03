<!DOCTYPE html>
<html lang="en" data-layout-position="scrollable">

<head>
    <?php
    $title = "Scrollable Layout";
    include('partials/title-meta.php');
    ?>

    <?php include('partials/head-css.php'); ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?php include('partials/menu.php'); ?>

        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="container-fluid">

                <?php
                $title = "Scrollable";
                include('partials/page-title.php');
                ?>

                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-info alert-bordered border-start border-info d-flex align-items-start gap-2">
                            <i class="ti ti-info-circle fs-xxl"></i>
                            <div>
                                To enable full scrolling and view all content, please add
                                <code>data-layout-position="scrollable"</code> to the
                                <code>&lt;html&gt;</code> tag.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- For Demo Only -->
                <div class="card" style="height: 1000px;"></div>

            </div>
            <!-- container -->

            <?php include('partials/footer.php'); ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?php include('partials/footer-scripts.php'); ?>

</body>

</html>