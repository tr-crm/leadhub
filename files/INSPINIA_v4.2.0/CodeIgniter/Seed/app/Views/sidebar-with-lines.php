<!DOCTYPE html>
<html lang="en" class="sidebar-with-line">

<head>
    <?php echo view('partials/title-meta', ['title' => 'Sidebar with Lines']) ?>

    <?= $this->include('partials/head-css') ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?= $this->include('partials/menu') ?>

        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="container-fluid">

                <?= $this->include('partials/page-title', ['title' => 'Sidebar with Lines']) ?>

                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-info alert-bordered border-start border-info d-flex align-items-start gap-2">
                            <i class="ti ti-info-circle fs-xxl"></i>
                            <div>
                                If you want to display a line with each menu item, add the class
                                <code>"sidebar-with-line"</code> to the
                                <code>&lt;html&gt;</code> tag.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- container -->

            <?= $this->include('partials/footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?= $this->include('partials/footer-scripts') ?>

</body>

</html>