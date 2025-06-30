<?php include 'partials/html.php' ?>

<head>
    <?php $title = "Flags"; include 'partials/title-meta.php' ?>

    <?php include 'partials/head-css.php' ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?php include 'partials/menu.php' ?>

        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->

        <div class="content-page">

            <div class="container-fluid">

                <?php $subtitle = "Icons"; $title = "Flags"; include 'partials/page-title.php' ?>

                <div class="row justify-content-center">
                    <div class="col-xxl-10">
                        <div class="card">
                            <div class="card-header justify-content-between">
                                <div>
                                    <h4 class="card-title mb-1 d-flex align-items-center gap-2">
                                        Flags Listing (SVG)
                                    </h4>
                                    <p class="mb-0 text-muted">We offer a set of scalable SVG flags, perfect for language selectors and international content.</p>
                                </div>
                                <div class="app-search">
                                    <input type="search" class="form-control" placeholder="Search country..." id="countrySearch">
                                    <i data-lucide="search" class="app-search-icon text-muted"></i>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="flagTable" class="table table-bordered align-middle text-center w-100">
                                        <thead>
                                            <tr class="fs-xxs">
                                                <th>Flag</th>
                                                <th>Country Name</th>
                                                <th>Path</th>
                                                <th>Flag</th>
                                                <th>Country Name</th>
                                                <th>Path</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row-->
            </div>
            <!-- container -->

            <?php include 'partials/footer.php' ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?php include 'partials/customizer.php' ?>

    <?php include 'partials/footer-scripts.php' ?>

    <!-- Page only -->
    <script src="assets/js/pages/flags-listing.js"></script>

</body>

</html>