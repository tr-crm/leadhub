<!DOCTYPE html>
<html lang="en" data-layout-width="boxed" data-sidenav-size="on-hover">

<head>
    <?php echo view('partials/title-meta', ['title' => 'Boxed Layout']) ?>

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

                <?= $this->include('partials/page-title', ['title' => 'Boxed']) ?>

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