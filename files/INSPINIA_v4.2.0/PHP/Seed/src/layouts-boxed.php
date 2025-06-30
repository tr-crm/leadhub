<!DOCTYPE html>
<html lang="en" data-layout-width="boxed" data-sidenav-size="on-hover">

<head>
    <?php
    $title = "Boxed Layout";
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
                $title = "Boxed";
                include('partials/page-title.php');
                ?>

                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-info alert-bordered border-start border-info d-flex align-items-start gap-2">
                            <i class="ti ti-info-circle fs-xxl"></i>
                            <div>
                                To enable the boxed layout, add
                                <code>data-layout-width="boxed"</code> to the
                                <code>&lt;html&gt;</code> tag. For optimal spacing and usability, we also recommend adding
                                <code>data-sidenav-size="on-hover"</code> to make the sidebar compact while keeping more room for content.
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