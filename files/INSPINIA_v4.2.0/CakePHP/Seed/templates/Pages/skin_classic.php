<!DOCTYPE html>
<html lang="en">


<head>
    <?= $this->element('title_meta', ['title' => 'Classic Skin']) ?>

    <?= $this->element('head_css') ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?= $this->element('menu') ?>

        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->

        <div class="content-page">

            <div class="container-fluid">

                <?= $this->element('page_title', ['title' => 'Classic Skin']) ?>

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

            <?= $this->element('footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?= $this->element('footer_scripts') ?>

</body>

</html>