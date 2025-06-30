<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('partials/title-meta', ['title' => 'Classic Skin']) ?>

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

                <?= $this->include('partials/page-title', ['title' => 'Classic Skin']) ?>

                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-primary alert-bordered border-start border-primary d-flex align-items-center gap-2 mb-3">
                            <i class="ti ti-info-circle fs-20"></i>
                            <div class="fw-bold text-decoration-underline">
                                INSPINIA comes with the Classic Theme set as the Default.
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