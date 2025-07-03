<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Javascript Source Datatables']) ?>

    <!-- Datatables css -->
    <link href="/plugins/datatables/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css">

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

                <?= $this->element('page_title', ['subtitle' => 'Datatables', 'title' => 'Javascript Source']) ?>

                <div class="row justify-content-center">
                    <div class="col-xxl-10">
                        <div class="card">
                            <div class="card-header justify-content-between">
                                <h4 class="card-title"> Example </h4>
                                <a href="https://datatables.net/examples/data_sources/js_array.html" target="_blank" class="icon-link icon-link-hover link-primary fw-semibold">View Docs <i class="ti ti-arrow-right bi align-middle fs-lg"></i></a>
                            </div>

                            <div class="card-body">
                                <table id="datatables-javascript-source" class="table table-striped dt-responsive align-middle mb-0">
                                    <thead class="thead-sm text-uppercase fs-xxs">
                                        <tr>
                                            <th>Company</th>
                                            <th>Symbol</th>
                                            <th>Price</th>
                                            <th>Change</th>
                                            <th>Volume</th>
                                            <th>Market Cap</th>
                                            <th>Rating</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row-->

            </div>
            <!-- container -->

            <?= $this->element('footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?= $this->element('customizer') ?>

    <?= $this->element('footer_scripts') ?>

    <!-- Datatables js -->
    <script src="/plugins/datatables/dataTables.min.js"></script>
    <script src="/plugins/datatables/dataTables.bootstrap5.min.js"></script>
    <script src="/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="/plugins/datatables/responsive.bootstrap5.min.js"></script>

    <!-- Page js -->
    <script src="/js/pages/datatables-javascript-source.js"></script>

</body>

</html>