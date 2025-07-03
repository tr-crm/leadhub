<!DOCTYPE html>
<html lang="en" data-sidenav-size="offcanvas">

<head>
    <?php echo view('partials/title-meta', ['title' => 'Offcanvas Menu']) ?>

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

                <?= $this->include('partials/page-title', ['title' => 'Offcanvas Menu']) ?>

                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-info alert-bordered border-start border-info d-flex align-items-start gap-2">
                            <i class="ti ti-info-circle fs-xxl"></i>
                            <div>
                                To enable the offcanvas menu, add
                                <code>data-sidenav-size="offcanvas"</code> to the
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