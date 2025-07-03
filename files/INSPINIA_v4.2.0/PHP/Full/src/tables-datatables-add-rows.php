<?php include 'partials/html.php' ?>

<head>
    <?php $title = "Add New Row Datatables"; include 'partials/title-meta.php' ?>

    <!-- Datatables css -->
    <link href="assets/plugins/datatables/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css">

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
                
                <?php $subtitle = "DataTables"; $title = "Add Rows"; include 'partials/page-title.php';?>

                <div class="row justify-content-center">
                    <div class="col-xxl-10">
                        <div class="card">
                            <div class="card-header justify-content-between">
                                <h4 class="card-title"> Example </h4>
                                <a href="https://datatables.net/examples/api/add_row.html" target="_blank" class="icon-link icon-link-hover link-primary fw-semibold">View Docs <i class="ti ti-arrow-right bi align-middle fs-lg"></i></a>
                            </div>

                            <div class="card-body">
                                <table id="add-rows-data" class="table table-striped dt-responsive align-middle mb-0">
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
                                    <tbody>
                                        <tr>
                                            <td>Apple Inc.</td>
                                            <td>AAPL</td>
                                            <td>$2109.53</td>
                                            <td>-0.42%</td>
                                            <td>48,374,838</td>
                                            <td>$53.59B</td>
                                            <td>4.7 ★</td>
                                            <td><span class="badge badge-label badge-soft-danger">Bearish</span></td>
                                        </tr>
                                        <tr>
                                            <td>Microsoft Corp.</td>
                                            <td>MSFT</td>
                                            <td>$450.98</td>
                                            <td>-2.04%</td>
                                            <td>26,604,335</td>
                                            <td>$927.77B</td>
                                            <td>3.8 ★</td>
                                            <td><span class="badge badge-label badge-soft-danger">Bearish</span></td>
                                        </tr>
                                        <tr>
                                            <td>Alphabet Inc.</td>
                                            <td>GOOGL</td>
                                            <td>$2803.77</td>
                                            <td>+0.68%</td>
                                            <td>22,545,332</td>
                                            <td>$1.88T</td>
                                            <td>4.6 ★</td>
                                            <td><span class="badge badge-label badge-soft-success">Bullish</span></td>
                                        </tr>
                                        <tr>
                                            <td>Amazon.com Inc.</td>
                                            <td>AMZN</td>
                                            <td>$3470.79</td>
                                            <td>+1.34%</td>
                                            <td>32,548,923</td>
                                            <td>$1.75T</td>
                                            <td>4.3 ★</td>
                                            <td><span class="badge badge-label badge-soft-success">Bullish</span></td>
                                        </tr>
                                        <tr>
                                            <td>Meta Platforms</td>
                                            <td>META</td>
                                            <td>$395.68</td>
                                            <td>-0.76%</td>
                                            <td>21,134,438</td>
                                            <td>$1.06T</td>
                                            <td>4.2 ★</td>
                                            <td><span class="badge badge-label badge-soft-danger">Bearish</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                </div>

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

    <!-- Datatables js -->
    <script src="assets/plugins/datatables/dataTables.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap5.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatables/responsive.bootstrap5.min.js"></script>

    <!-- Page js -->
    <script src="assets/js/pages/datatables-add-rows.js"></script>

</body>

</html>