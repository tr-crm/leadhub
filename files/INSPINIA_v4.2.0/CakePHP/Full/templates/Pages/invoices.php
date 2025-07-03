<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Invoice Management']) ?>

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

                <?= $this->element('page_title', ['subtitle' => 'Invoices', 'title' => 'Invoice List']) ?>

                <div class="row">
                    <div class="col-12">
                        <div data-table data-table-rows-per-page="8" class="card">
                            <div class="card-header border-light justify-content-between">
                                <div class="d-flex gap-2">
                                    <div class="app-search">
                                        <input data-table-search type="text" class="form-control" placeholder="Search invoices...">
                                        <i data-lucide="search" class="app-search-icon text-muted"></i>
                                    </div>
                                    <button data-table-delete-selected class="btn btn-danger d-none">Delete</button>
                                    <a href="invoice-create" class="btn btn-purple rounded-circle btn-icon"><i class="ti ti-plus fs-lg"></i></a>
                                </div>

                                <div class="d-flex align-items-center gap-2">
                                    <span class="me-2 fw-semibold">Filter By:</span>

                                    <!-- Invoice Status Filter -->
                                    <div class="app-search">
                                        <select data-table-filter="status" class="form-select form-control my-1 my-md-0">
                                            <option value="All">Status</option>
                                            <option value="Paid">Paid</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Overdue">Overdue</option>
                                            <option value="Draft">Draft</option>
                                        </select>
                                        <i data-lucide="check-circle" class="app-search-icon text-muted"></i>
                                    </div>

                                    <!-- Records Per Page -->
                                    <div>
                                        <select data-table-set-rows-per-page class="form-select form-control my-1 my-md-0">
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-custom table-centered table-select table-hover w-100 mb-0">
                                    <thead class="bg-light align-middle bg-opacity-25 thead-sm">
                                        <tr class="text-uppercase fs-xxs">
                                            <th class="ps-3" style="width: 1%;">
                                                <input data-table-select-all class="form-check-input form-check-input-light fs-14 mt-0" type="checkbox" id="select-all-files" value="option">
                                            </th>
                                            <th>ID</th>
                                            <th>Create & End Date</th>
                                            <th data-table-sort="name">Clients Name</th>
                                            <th data-table-sort>Purchase</th>
                                            <th data-table-sort>Amount</th>
                                            <th data-table-sort data-column="status">Status</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead><!-- end table-head -->
                                    <tbody>
                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14 file-item-check mt-0" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <h5 class="m-0">
                                                    <span class="ti ti-file-invoice text-success fs-lg"></span>
                                                    <a href="invoice-details" class="link-reset fw-semibold">#INS-0120010</a>
                                                </h5>
                                            </td>
                                            <td>Feb 2 - Feb 10, 2025</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-sm">
                                                        <img src="/images/users/user-7.jpg" alt="avatar-7" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 class="text-nowrap fs-base mb-0 lh-base"><a data-sort="name" href="pages-profile" class="link-reset">Emily
                                                                Parker</a>
                                                        </h5>
                                                        <p class="text-muted fs-xs mb-0">emily@startupwave.io</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Inspinia - Extended License</td>
                                            <td>$999.00 USD</td>
                                            <td>
                                                <span class="badge bg-success-subtle text-success badge-label">Paid</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="invoice-details" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="javascript:void(0);" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14 file-item-check mt-0" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <h5 class="m-0">
                                                    <span class="ti ti-file-invoice text-warning fs-lg"></span>
                                                    <a href="invoice-details" class="link-reset fw-semibold">#INS-0120009</a>
                                                </h5>
                                            </td>
                                            <td>Feb 5 - Feb 12, 2025</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title text-bg-info fw-bold rounded-circle">
                                                            MS
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h5 class="text-nowrap fs-base mb-0 lh-base"><a data-sort="name" href="pages-profile" class="link-reset">Michael
                                                                Scott</a>
                                                        </h5>
                                                        <p class="text-muted fs-xs mb-0">michael@dundermifflin.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>CRM Dashboard - Regular License</td>
                                            <td>$249.00 USD</td>
                                            <td>
                                                <span class="badge bg-warning-subtle text-warning badge-label">Pending</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="invoice-details" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="javascript:void(0);" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14 file-item-check mt-0" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <h5 class="m-0">
                                                    <span class="ti ti-file-invoice text-danger fs-lg"></span>
                                                    <a href="invoice-details" class="link-reset fw-semibold">#INS-0120008</a>
                                                </h5>
                                            </td>
                                            <td>Jan 10 - Jan 15, 2025</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-sm">
                                                        <img src="/images/users/user-3.jpg" alt="avatar-3" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 class="text-nowrap fs-base mb-0 lh-base"><a data-sort="name" href="pages-profile" class="link-reset">Samantha
                                                                Reed</a>
                                                        </h5>
                                                        <p class="text-muted fs-xs mb-0">samantha@alphatech.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Landing Page - Agency Pack</td>
                                            <td>$349.00 USD</td>
                                            <td>
                                                <span class="badge bg-danger-subtle text-danger badge-label">Overdue</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="invoice-details" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="javascript:void(0);" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14 file-item-check mt-0" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <h5 class="m-0">
                                                    <span class="ti ti-file-invoice text-primary fs-lg"></span>
                                                    <a href="invoice-details" class="link-reset fw-semibold">#INS-0120007</a>
                                                </h5>
                                            </td>
                                            <td>Mar 1 - Mar 5, 2025</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-sm">
                                                        <img src="/images/users/user-2.jpg" alt="avatar-2" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 class="text-nowrap fs-base mb-0 lh-base"><a data-sort="name" href="pages-profile" class="link-reset">Jonathan
                                                                Lee</a>
                                                        </h5>
                                                        <p class="text-muted fs-xs mb-0">jonathan@zenflow.io</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Task Manager - SaaS Version</td>
                                            <td>$799.00 USD</td>
                                            <td>
                                                <span class="badge bg-info-subtle text-info badge-label">Draft</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="invoice-details" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="javascript:void(0);" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14 file-item-check mt-0" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <h5 class="m-0">
                                                    <span class="ti ti-file-invoice text-success fs-lg"></span>
                                                    <a href="invoice-details" class="link-reset fw-semibold">#INS-0120006</a>
                                                </h5>
                                            </td>
                                            <td>Mar 10 - Mar 15, 2025</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title text-bg-primary fw-bold rounded-circle">
                                                            CD
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h5 class="text-nowrap fs-base mb-0 lh-base"><a data-sort="name" href="pages-profile" class="link-reset">Carlos
                                                                Diaz</a>
                                                        </h5>
                                                        <p class="text-muted fs-xs mb-0">carlos@themeverse.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Admin Panel - Developer License</td>
                                            <td>$1,199.00 USD</td>
                                            <td>
                                                <span class="badge bg-success-subtle text-success badge-label">Paid</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="invoice-details" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="javascript:void(0);" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14 file-item-check mt-0" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <h5 class="m-0">
                                                    <span class="ti ti-file-invoice text-warning fs-lg"></span>
                                                    <a href="invoice-details" class="link-reset fw-semibold">#INS-0120005</a>
                                                </h5>
                                            </td>
                                            <td>Mar 20 - Mar 25, 2025</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-sm">
                                                        <img src="/images/users/user-4.jpg" alt="avatar-4" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 class="text-nowrap fs-base mb-0 lh-base"><a data-sort="name" href="pages-profile" class="link-reset">Lisa
                                                                Brown</a></h5>
                                                        <p class="text-muted fs-xs mb-0">lisa@digitize.io</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Analytics Suite - Enterprise</td>
                                            <td>$1,499.00 USD</td>
                                            <td>
                                                <span class="badge bg-warning-subtle text-warning badge-label">Pending</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="invoice-details" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="javascript:void(0);" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"> <i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14 file-item-check mt-0" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <h5 class="m-0">
                                                    <span class="ti ti-file-invoice text-primary fs-lg"></span>
                                                    <a href="invoice-details" class="link-reset fw-semibold">#INS-0120004</a>
                                                </h5>
                                            </td>
                                            <td>Apr 1 - Apr 7, 2025</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title text-bg-success fw-bold rounded-circle">
                                                            RM
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h5 class="text-nowrap fs-base mb-0 lh-base"><a data-sort="name" href="pages-profile" class="link-reset">Ryan
                                                                Mitchell</a>
                                                        </h5>
                                                        <p class="text-muted fs-xs mb-0">ryan@bizsol.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Sales App - Regular License</td>
                                            <td>$499.00 USD</td>
                                            <td>
                                                <span class="badge bg-info-subtle text-info badge-label">Draft</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="invoice-details" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14 file-item-check mt-0" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <h5 class="m-0">
                                                    <span class="ti ti-file-invoice text-success fs-lg"></span>
                                                    <a href="invoice-details" class="link-reset fw-semibold">#INS-0120003</a>
                                                </h5>
                                            </td>
                                            <td>Apr 8 - Apr 12, 2025</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-sm">
                                                        <img src="/images/users/user-8.jpg" alt="avatar-8" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 class="text-nowrap fs-base mb-0 lh-base"><a data-sort="name" href="pages-profile" class="link-reset">Nina
                                                                Hughes</a>
                                                        </h5>
                                                        <p class="text-muted fs-xs mb-0">nina@creativelabs.io</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Marketing Kit - Extended License</td>
                                            <td>$899.00 USD</td>
                                            <td>
                                                <span class="badge bg-success-subtle text-success badge-label">Paid</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="invoice-details" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14 file-item-check mt-0" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <h5 class="m-0">
                                                    <span class="ti ti-file-invoice text-warning fs-lg"></span>
                                                    <a href="invoice-details" class="link-reset fw-semibold">#INS-0120002</a>
                                                </h5>
                                            </td>
                                            <td>Apr 10 - Apr 14, 2025</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-sm">
                                                        <img src="/images/users/user-9.jpg" alt="avatar-9" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 class="text-nowrap fs-base mb-0 lh-base"><a data-sort="name" href="pages-profile" class="link-reset">Oliver
                                                                Grant</a>
                                                        </h5>
                                                        <p class="text-muted fs-xs mb-0">oliver@nextgenapps.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Mobile Kit - Standard Plan</td>
                                            <td>$599.00 USD</td>
                                            <td>
                                                <span class="badge bg-warning-subtle text-warning badge-label">Pending</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="invoice-details" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14 file-item-check mt-0" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <h5 class="m-0">
                                                    <span class="ti ti-file-invoice text-danger fs-lg"></span>
                                                    <a href="invoice-details" class="link-reset fw-semibold">#INS-0120001</a>
                                                </h5>
                                            </td>
                                            <td>Apr 15 - Apr 20, 2025</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-sm">
                                                        <img src="/images/users/user-10.jpg" alt="avatar-10" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 class="text-nowrap fs-base mb-0 lh-base"><a data-sort="name" href="pages-profile" class="link-reset">Sophia
                                                                Kim</a></h5>
                                                        <p class="text-muted fs-xs mb-0">sophia@pixelhub.io</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>UI Kit - Commercial License</td>
                                            <td>$749.00 USD</td>
                                            <td>
                                                <span class="badge bg-danger-subtle text-danger badge-label">Overdue</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="invoice-details" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody><!-- end table-body -->
                                </table><!-- end table -->
                            </div>
                            <div class="card-footer border-0">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div data-table-pagination-info="invoices"></div>

                                    <div data-table-pagination></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

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

    <!-- Custom table -->
    <script src="/js/pages/custom-table.js"></script>

</body>

</html>