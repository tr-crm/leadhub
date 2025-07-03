<!DOCTYPE html>
<html lang="en" data-layout-width="boxed" data-sidenav-size="on-hover">

<head>
    <?= $this->element('title_meta', ['title' => 'Boxed Layout']) ?>

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

                <?= $this->element('page_title', ['title' => 'Boxed']) ?>

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