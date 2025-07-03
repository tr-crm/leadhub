<!DOCTYPE html>
<html lang="en" data-sidenav-size="on-hover-active">

<head>
    <?= $this->element('title_meta', ['title' => 'On Hover Menu']) ?>

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

                <?= $this->element('page_title', ['title' => 'On Hover Active']) ?>

                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-warning alert-bordered border-start border-warning d-flex align-items-start gap-2">
                            <i class="ti ti-info-circle fs-xxl"></i>
                            <div>
                                To enable the full menu on hover after minimizing the sidebar, add
                                <code>data-sidenav-size="on-hover-active"</code> to the
                                <code>&lt;html&gt;</code> tag in your layout.
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