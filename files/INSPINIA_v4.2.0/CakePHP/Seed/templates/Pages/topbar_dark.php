<!DOCTYPE html>
<html lang="en" data-topbar-color="dark" data-menu-color="light">

<head>
    <?= $this->element('title_meta', ['title' => 'Dark Topbar']) ?>

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

                <?= $this->element('page_title', ['title' => 'Dark Topbar']) ?>

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