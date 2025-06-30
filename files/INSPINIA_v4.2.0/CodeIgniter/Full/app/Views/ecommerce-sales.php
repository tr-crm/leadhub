<?= $this->include('./partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Sales Reports")) ?>

    <?= $this->include('./partials/head-css') ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?= $this->include('./partials/menu') ?>

        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->

        <div class="content-page">

            <div class="container-fluid">

                <?php echo view("./partials/page-title", array("subtitle" => "Ecommerce", "title" => "Sales Reports")) ?>

                <div class="row justify-content-center">
                    <div class="col-xxl-10">
                        <div data-table data-table-rows-per-page="8" class="card">
                            <div class="card-header border-light justify-content-between">
                                <h5 class="card-title mb-0">Products - 2025</h5>
                                <div class="d-flex align-items-center gap-2">
                                    <div class="app-search">
                                        <input data-table-search type="search" class="form-control" placeholder="Search reports...">
                                        <i data-lucide="search" class="app-search-icon text-muted"></i>
                                    </div>

                                    <div class="app-search">
                                        <input type="text" style="min-width: 250px;" class="form-control" id="dateRangePicker">
                                        <i data-lucide="calendar" class="app-search-icon text-muted"></i>
                                    </div>

                                    <button type="submit" class="btn btn-secondary"><i class="ti ti-download me-2"></i>
                                        Export Report
                                    </button>
                                </div>
                            </div>

                            <div class="card-body">
                                <!-- Chart Container -->
                                <div id="salesMixChart"></div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-custom table-centered table-select table-hover w-100 mb-0">
                                    <thead class="bg-light align-middle bg-opacity-25 thead-sm">
                                        <tr class="text-uppercase fs-xxs">
                                            <th class="ps-3" style="width: 1%;">
                                                <input data-table-select-all class="form-check-input form-check-input-light fs-14 mt-0" type="checkbox" id="select-all-products" value="option">
                                            </th>
                                            <th data-table-sort>Date</th>
                                            <th data-table-sort>Orders</th>
                                            <th data-table-sort>Refunds</th>
                                            <th data-table-sort>Avr. Revenue per Order</th>
                                            <th data-table-sort>Tax</th>
                                            <th data-table-sort>Revenue</th>
                                            <th data-table-sort>Balance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ps-3"><input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option"></td>
                                            <td>10 July, 2025</td>
                                            <td>68</td>
                                            <td>4</td>
                                            <td>$18.60</td>
                                            <td>$25.78</td>
                                            <td>$612.70</td>
                                            <td>$6625.46</td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3"><input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option"></td>
                                            <td>09 July, 2025</td>
                                            <td>85</td>
                                            <td>1</td>
                                            <td>$22.10</td>
                                            <td>$31.85</td>
                                            <td>$786.35</td>
                                            <td>$6012.76</td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3"><input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option"></td>
                                            <td>08 July, 2025</td>
                                            <td>61</td>
                                            <td>3</td>
                                            <td>$17.40</td>
                                            <td>$23.67</td>
                                            <td>$531.10</td>
                                            <td>$5226.41</td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3"><input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option"></td>
                                            <td>07 July, 2025</td>
                                            <td>79</td>
                                            <td>2</td>
                                            <td>$20.65</td>
                                            <td>$29.45</td>
                                            <td>$726.80</td>
                                            <td>$4695.31</td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3"><input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option"></td>
                                            <td>06 July, 2025</td>
                                            <td>53</td>
                                            <td>6</td>
                                            <td>$15.10</td>
                                            <td>$20.89</td>
                                            <td>$400.55</td>
                                            <td>$3968.51</td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3"><input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option"></td>
                                            <td>05 July, 2025</td>
                                            <td>91</td>
                                            <td>4</td>
                                            <td>$22.50</td>
                                            <td>$32.90</td>
                                            <td>$851.30</td>
                                            <td>$3567.96</td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3"><input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option"></td>
                                            <td>04 July, 2025</td>
                                            <td>47</td>
                                            <td>5</td>
                                            <td>$16.25</td>
                                            <td>$22.05</td>
                                            <td>$382.47</td>
                                            <td>$2716.66</td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3"><input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option"></td>
                                            <td>03 July, 2025</td>
                                            <td>82</td>
                                            <td>1</td>
                                            <td>$21.03</td>
                                            <td>$31.11</td>
                                            <td>$792.65</td>
                                            <td>$2334.19</td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3"><input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option"></td>
                                            <td>02 July, 2025</td>
                                            <td>65</td>
                                            <td>3</td>
                                            <td>$17.92</td>
                                            <td>$24.15</td>
                                            <td>$583.42</td>
                                            <td>$1541.54</td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3"><input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option"></td>
                                            <td>01 July, 2025</td>
                                            <td>73</td>
                                            <td>2</td>
                                            <td>$19.85</td>
                                            <td>$27.34</td>
                                            <td>$660.12</td>
                                            <td>$958.12</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div class="card-footer border-0">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div data-table-pagination-info></div>
                                    <div data-table-pagination></div>
                                </div>
                            </div>
                        </div>

                    </div><!-- end col -->
                </div><!-- end row -->

            </div>
            <!-- container -->

            <?= $this->include('./partials/footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?= $this->include('./partials/customizer') ?>

    <?= $this->include('./partials/footer-scripts') ?>

    <!-- Apex Charts js -->
    <script src="/plugins/apexcharts/apexcharts.min.js"></script>

    <!-- Custom table -->
	<script src="/js/pages/custom-table.js"></script>

    <!-- Page only -->
    <script src="/js/pages/ecommerce-sales.js"></script>

</body>

</html>