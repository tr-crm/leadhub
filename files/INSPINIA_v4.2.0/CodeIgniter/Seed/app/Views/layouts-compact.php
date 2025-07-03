<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('partials/title-meta', ['title' => 'Compact']) ?>

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

                <?= $this->include('partials/page-title', ['title' => 'Compact']) ?>

            </div>
            <!-- container -->

            <div class="container-xl">
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-info alert-bordered border-start border-info d-flex align-items-start gap-2">
                            <i class="ti ti-info-circle fs-xxl"></i>
                            <div>
                                To use the compact layout, follow this structure: wrap your page title in
                                <code>&lt;div class="container-fluid"&gt;</code> and place your main content inside
                                <code>&lt;div class="container-xl"&gt;</code>. This ensures proper spacing and alignment.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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