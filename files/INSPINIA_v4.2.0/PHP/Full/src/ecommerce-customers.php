<?php include 'partials/html.php' ?>

<head>
    <?php $title = "Customers"; include 'partials/title-meta.php' ?>

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

                <?php $subtitle = "Ecommerce"; $title = "Customers"; include 'partials/page-title.php' ?>

                <div class="row justify-content-center">
                    <div class="col-xxl-10">
                        <div data-table data-table-rows-per-page="8" class="card">
                            <div class="card-header border-light d-flex align-items-center justify-content-between flex-wrap gap-2">

                                <div class="d-flex gap-2">
                                    <div class="app-search">
                                        <input data-table-search type="search" class="form-control" placeholder="Search customer...">
                                        <i data-lucide="search" class="app-search-icon text-muted"></i>
                                    </div>
                                    <button data-table-delete-selected class="btn btn-danger d-none">Delete</button>
                                </div>


                                <div class="d-flex align-items-center gap-2">
                                    <!-- Records Per Page -->
                                    <div>
                                        <select data-table-set-rows-per-page class="form-select form-control my-1 my-md-0">
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                        </select>
                                    </div>

                                    <!-- Export Dropdown -->
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle drop-arrow-none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-lucide="download" class="me-1"></i> Export <i class="ti ti-chevron-down align-middle ms-1"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Export as PDF</a></li>
                                            <li><a class="dropdown-item" href="#">Export as CSV</a></li>
                                            <li><a class="dropdown-item" href="#">Export as Excel</a></li>
                                        </ul>
                                    </div>

                                    <!-- Add New Button -->
                                    <a href="#!" class="btn btn-primary">
                                        <i data-lucide="plus" class="fs-sm me-1"></i> Add Customer
                                    </a>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-custom table-centered table-select table-hover w-100 mb-0">
                                    <thead class="bg-light bg-opacity-25 thead-sm">
                                        <tr class="text-uppercase fs-xxs">
                                            <th class="ps-3" style="width: 1%;">
                                                <input data-table-select-all class="form-check-input form-check-input-light fs-14 mt-0" type="checkbox" id="select-all-products">
                                            </th>
                                            <th data-table-sort="customer">Clients Name</th>
                                            <th data-table-sort>Email</th>
                                            <th data-table-sort>Phone</th>
                                            <th data-table-sort>Country</th>
                                            <th data-table-sort>Joined</th>
                                            <th data-table-sort>Orders</th>
                                            <th data-table-sort>Total Spends</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead><!-- end table-head -->
                                    <tbody>
                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar avatar-sm">
                                                        <img src="assets/images/users/user-7.jpg" alt="avatar-7" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-0">
                                                            <a data-sort="customer" href="pages-profile.php" class="link-reset">Carlos Méndez</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                carlos@techlaunch.mx
                                            </td>
                                            <td>+1 (415) 992-3412</td>
                                            <td>
                                                <img src="assets/images/flags/us.svg" alt="" class="rounded-circle me-1" height="16"> United States
                                            </td>
                                            <td>2 Feb, 2024 <small class="text-muted">08:34 AM</small></td>
                                            <td>58</td>
                                            <td>$198.25</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="javascript:void(0);" class=" btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="javascript:void(0);" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar avatar-sm">
                                                        <img src="assets/images/users/user-2.jpg" alt="avatar-2" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-0">
                                                            <a data-sort="customer" href="pages-profile.php" class="link-reset">Sophie Laurent</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                sophie.laurent@eurotech.fr
                                            </td>
                                            <td>+33 6 12 34 56 78</td>
                                            <td>
                                                <img src="assets/images/flags/fr.svg" alt="" class="rounded-circle me-1" height="16"> France
                                            </td>
                                            <td>15 Mar, 2024 <small class="text-muted">10:22 AM</small></td>
                                            <td>42</td>
                                            <td>$245.80</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="javascript:void(0);" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar avatar-sm">
                                                        <img src="assets/images/users/user-3.jpg" alt="avatar-3" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-0">
                                                            <a data-sort="customer" href="pages-profile.php" class="link-reset">Akira Tanaka</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                akira.tanaka@techjapan.co.jp
                                            </td>
                                            <td>+81 90-1234-5678</td>
                                            <td>
                                                <img src="assets/images/flags/jp.svg" alt="" class="rounded-circle me-1" height="16"> Japan
                                            </td>
                                            <td>28 Jan, 2024 <small class="text-muted">03:15 PM</small></td>
                                            <td>75</td>
                                            <td>$320.50</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="javascript:void(0);" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar avatar-sm">
                                                        <img src="assets/images/users/user-4.jpg" alt="avatar-4" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-0">
                                                            <a data-sort="customer" href="pages-profile.php" class="link-reset">Emma Watson</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                emma.watson@britinnovate.uk
                                            </td>
                                            <td>+44 7700 900123</td>
                                            <td>
                                                <img src="assets/images/flags/gb.svg" alt="" class="rounded-circle me-1" height="16"> United Kingdom
                                            </td>
                                            <td>10 Apr, 2024 <small class="text-muted">09:47 AM</small></td>
                                            <td>29</td>
                                            <td>$175.30</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="javascript:void(0);" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar avatar-sm">
                                                        <img src="assets/images/users/user-5.jpg" alt="avatar-5" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-0">
                                                            <a data-sort="customer" href="pages-profile.php" class="link-reset">Lucas Schmidt</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                lucas.schmidt@techdeutsch.de
                                            </td>
                                            <td>+49 151 23456789</td>
                                            <td>
                                                <img src="assets/images/flags/de.svg" alt="" class="rounded-circle me-1" height="16"> Germany
                                            </td>
                                            <td>20 Feb, 2024 <small class="text-muted">02:10 PM</small></td>
                                            <td>63</td>
                                            <td>$280.75</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="javascript:void(0);" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar avatar-sm">
                                                        <img src="assets/images/users/user-6.jpg" alt="avatar-6" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-0">
                                                            <a data-sort="customer" href="pages-profile.php" class="link-reset">Isabella Rossi</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                isabella.rossi@italiatech.it
                                            </td>
                                            <td>+39 333 4567890</td>
                                            <td>
                                                <img src="assets/images/flags/it.svg" alt="" class="rounded-circle me-1" height="16"> Italy
                                            </td>
                                            <td>5 Mar, 2024 <small class="text-muted">11:25 AM</small></td>
                                            <td>51</td>
                                            <td>$210.40</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="javascript:void(0);" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar avatar-sm">
                                                        <img src="assets/images/users/user-8.jpg" alt="avatar-8" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-0">
                                                            <a data-sort="customer" href="pages-profile.php" class="link-reset">Mateo Vargas</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                mateo.vargas@latamtech.ar
                                            </td>
                                            <td>+54 9 11 2345 6789</td>
                                            <td>
                                                <img src="assets/images/flags/ar.svg" alt="" class="rounded-circle me-1" height="16"> Argentina
                                            </td>
                                            <td>18 Apr, 2024 <small class="text-muted">04:50 PM</small></td>
                                            <td>37</td>
                                            <td>$190.20</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="javascript:void(0);" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar avatar-sm">
                                                        <img src="assets/images/users/user-9.jpg" alt="avatar-9" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-0">
                                                            <a data-sort="customer" href="pages-profile.php" class="link-reset">Priya Sharma</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                priya.sharma@indotech.in
                                            </td>
                                            <td>+91 98765 43210</td>
                                            <td>
                                                <img src="assets/images/flags/in.svg" alt="" class="rounded-circle me-1" height="16"> India
                                            </td>
                                            <td>10 Jan, 2024 <small class="text-muted">06:30 AM</small></td>
                                            <td>82</td>
                                            <td>$350.90</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="javascript:void(0);" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar avatar-sm">
                                                        <img src="assets/images/users/user-10.jpg" alt="avatar-10" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-0">
                                                            <a data-sort="customer" href="pages-profile.php" class="link-reset">Liam O’Connor</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                liam.oconnor@ausinnovate.au
                                            </td>
                                            <td>+61 400 123 456</td>
                                            <td>
                                                <img src="assets/images/flags/au.svg" alt="" class="rounded-circle me-1" height="16"> Australia
                                            </td>
                                            <td>25 Mar, 2024 <small class="text-muted">01:15 PM</small></td>
                                            <td>45</td>
                                            <td>$230.65</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="javascript:void(0);" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar avatar-sm">
                                                        <img src="assets/images/users/user-1.jpg" alt="avatar-1" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-0">
                                                            <a data-sort="customer" href="pages-profile.php" class="link-reset">Olga Petrova</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                olga.petrova@rus-tech.ru
                                            </td>
                                            <td>+7 912 345 67 89</td>
                                            <td>
                                                <img src="assets/images/flags/ru.svg" alt="" class="rounded-circle me-1" height="16"> Russia
                                            </td>
                                            <td>8 Feb, 2024 <small class="text-muted">07:40 AM</small></td>
                                            <td>68</td>
                                            <td>$295.15</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="javascript:void(0);" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody><!-- end table-body -->
                                </table><!-- end table -->
                            </div>
                            <div class="card-footer border-0">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div data-table-pagination-info="customers"></div>

                                    <div data-table-pagination></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

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

    <!-- Custom table -->
    <script src="assets/js/pages/custom-table.js"></script>

</body>

</html>