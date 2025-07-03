<!DOCTYPE html>
<html lang="en" data-skin="saas">


<head>
    <?= $this->element('title_meta', ['title' => 'SaaS Skin']) ?>

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

                <?= $this->element('page_title', ['title' => 'SaaS Skin']) ?>

                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-info alert-bordered border-start border-info d-flex align-items-center gap-2 mb-3">
                            <i class="ti ti-info-circle fs-20"></i>
                            <div>
                                Set <code>data-skin="saas"</code> in the <code>&lt;html&gt;</code> tag to use the SaaS theme.
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