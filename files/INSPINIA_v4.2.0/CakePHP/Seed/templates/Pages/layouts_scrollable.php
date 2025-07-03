<!DOCTYPE html>
<html lang="en" data-layout-position="scrollable">

<head>
    <?= $this->element('title_meta', ['title' => 'Scrollable Layout']) ?>

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

                <?= $this->element('page_title', ['title' => 'Scrollable']) ?>

                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-info alert-bordered border-start border-info d-flex align-items-start gap-2">
                            <i class="ti ti-info-circle fs-xxl"></i>
                            <div>
                                To enable full scrolling and view all content, please add
                                <code>data-layout-position="scrollable"</code> to the
                                <code>&lt;html&gt;</code> tag.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- For Demo Only -->
                <div class="card" style="height: 1000px;"></div>

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