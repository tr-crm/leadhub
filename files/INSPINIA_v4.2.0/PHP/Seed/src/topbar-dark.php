<!DOCTYPE html>
<html lang="en" data-topbar-color="dark" data-menu-color="light">

<head>
    <?php
    $title = "Dark Topbar";
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
                $title = "Dark Topbar";
                include('partials/page-title.php');
                ?>

                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-warning alert-bordered border-start border-warning d-flex align-items-start gap-2">
                            <i class="ti ti-info-circle fs-xxl"></i>
                            <div>
                                To enable the dark topbar, add
                                <code>data-topbar-color="dark"</code> to the
                                <code>&lt;html&gt;</code> tag in your layout.
                            </div>
                        </div>
                    </div>
                </div>

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