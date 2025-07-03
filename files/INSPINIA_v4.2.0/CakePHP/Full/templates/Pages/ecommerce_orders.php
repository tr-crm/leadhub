<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Orders']) ?>

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

                <?= $this->element('page_title', ['subtitle' => 'Ecommerce', 'title' => 'Orders']) ?>

                <div class="row row-cols-xxl-5 row-cols-md-3 row-cols-1 align-items-center g-1">
                    <div class="col">
                        <div class="card mb-1">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-2 mb-3">
                                    <div class="avatar-md flex-shrink-0">
                                        <span class="avatar-title text-bg-success rounded-circle fs-22">
                                            <i class="ti ti-check"></i>
                                        </span>
                                    </div>
                                    <h3 class="mb-0">1,240</h3>
                                </div>
                                <p class="mb-0">
                                    Completed Orders
                                    <span class="float-end badge badge-soft-success">+3.34%</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card mb-1">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-2 mb-3">
                                    <div class="avatar-md flex-shrink-0">
                                        <span class="avatar-title text-bg-warning rounded-circle fs-22">
                                            <i class="ti ti-hourglass"></i>
                                        </span>
                                    </div>
                                    <h3 class="mb-0">320</h3>
                                </div>
                                <p class="mb-0">
                                    Pending Orders
                                    <span class="float-end badge badge-soft-warning">-1.12%</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card mb-1">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-2 mb-3">
                                    <div class="avatar-md flex-shrink-0">
                                        <span class="avatar-title text-bg-danger rounded-circle fs-22">
                                            <i class="ti ti-x"></i>
                                        </span>
                                    </div>
                                    <h3 class="mb-0">87</h3>
                                </div>
                                <p class="mb-0">
                                    Canceled Orders
                                    <span class="float-end badge badge-soft-danger">-0.75%</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card mb-1">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-2 mb-3">
                                    <div class="avatar-md flex-shrink-0">
                                        <span class="avatar-title text-bg-info rounded-circle fs-22">
                                            <i class="ti ti-shopping-cart"></i>
                                        </span>
                                    </div>
                                    <h3 class="mb-0">540</h3>
                                </div>
                                <p class="mb-0">
                                    New Orders
                                    <span class="float-end badge badge-soft-info">+4.22%</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card mb-1">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-2 mb-3">
                                    <div class="avatar-md flex-shrink-0">
                                        <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                            <i class="ti ti-repeat"></i>
                                        </span>
                                    </div>
                                    <h3 class="mb-0">120</h3>
                                </div>
                                <p class="mb-0">
                                    Returned Orders
                                    <span class="float-end badge badge-soft-primary">+0.56%</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div><!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div data-table data-table-rows-per-page="8" class="card">
                            <div class="card-header border-light justify-content-between">

                                <div class="d-flex gap-2">
                                    <div class="app-search">
                                        <input data-table-search type="search" class="form-control" placeholder="Search order...">
                                        <i data-lucide="search" class="app-search-icon text-muted"></i>
                                    </div>

                                    <button data-table-delete-selected class="btn btn-danger d-none">Delete</button>
                                </div>

                                <div class="d-flex align-items-center gap-2">
                                    <span class="me-2 fw-semibold">Filter By:</span>

                                    <!-- Payment Status Filter -->
                                    <div class="app-search">
                                        <select data-table-filter="payment-status" class="form-select form-control my-1 my-md-0">
                                            <option value="All">Payment Status</option>
                                            <option value="Paid">Paid</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Failed">Failed</option>
                                            <option value="Refunded">Refunded</option>
                                        </select>
                                        <i data-lucide="credit-card" class="app-search-icon text-muted"></i>
                                    </div>

                                    <!-- Delivery Status Filter -->
                                    <div class="app-search">
                                        <select data-table-filter="order-status" class="form-select form-control my-1 my-md-0">
                                            <option value="All">Delivery Status</option>
                                            <option value="Processing">Processing</option>
                                            <option value="Shipped">Shipped</option>
                                            <option value="Delivered">Delivered</option>
                                            <option value="Cancelled">Cancelled</option>
                                        </select>
                                        <i data-lucide="truck" class="app-search-icon text-muted"></i>
                                    </div>

                                    <!-- Date Range Filter -->
                                    <div class="app-search">
                                        <select data-table-range-filter="date" class="form-select form-control my-1 my-md-0">
                                            <option value="All">Date Range</option>
                                            <option value="Today">Today</option>
                                            <option value="Last 7 Days">Last 7 Days</option>
                                            <option value="Last 30 Days">Last 30 Days</option>
                                            <option value="This Year">This Year</option>
                                        </select>
                                        <i data-lucide="calendar" class="app-search-icon text-muted"></i>
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

                                <div class="d-flex gap-1">
                                    <a href="#!" class="btn btn-danger ms-1">
                                        <i data-lucide="plus" class="fs-sm me-2"></i> Add Order
                                    </a>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-custom table-centered table-select table-hover w-100 mb-0">
                                    <thead class="bg-light align-middle bg-opacity-25 thead-sm">
                                        <tr class="text-uppercase fs-xxs">
                                            <th class="ps-3" style="width: 1%;">
                                                <input data-table-select-all class="form-check-input form-check-input-light fs-14 mt-0" type="checkbox" value="option">
                                            </th>
                                            <th data-table-sort>Order ID</th>
                                            <th data-table-sort data-column="date">Date</th>
                                            <th data-table-sort="customer">Customer</th>
                                            <th data-table-sort>Amount</th>
                                            <th data-table-sort data-column="payment-status">Payment Status</th>
                                            <th data-table-sort data-column="order-status">Order Status</th>
                                            <th>Payment Method</th>
                                            <th class="text-center" style="width: 1%;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <h5 class="fs-sm mb-0 fw-medium"><a href="ecommerce-order-details" class="link-reset">#WB20100</a></h5>
                                            </td>
                                            <td>9 May, 2025 <small class="text-muted">10:10 AM</small></td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-sm">
                                                        <img src="/images/users/user-2.jpg" alt="avatar-2" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 data-sort="customer" class="text-nowrap fs-base mb-0 lh-base">Mason Carter</h5>
                                                        <p class="text-muted fs-xs mb-0">mason.carter@shopmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$129.45</td>
                                            <td class="text-success fw-semibold"><i class="ti ti-point-filled fs-sm"></i> Paid
                                            </td>
                                            <td><span class="badge badge-soft-success fs-xxs">Delivered</span></td>
                                            <td>
                                                <img src="/images/cards/visa.svg" alt="" class="me-2" height="28"> xxxx
                                                7832
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <h5 class="fs-sm mb-0 fw-medium"><a href="ecommerce-order-details" class="link-reset">#WB20101</a></h5>
                                            </td>
                                            <td>7 May, 2025 <small class="text-muted">11:45 AM</small></td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-sm">
                                                        <img src="/images/users/user-9.jpg" alt="avatar-9" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 data-sort="customer" class="text-nowrap fs-base mb-0 lh-base">Ava Martin</h5>
                                                        <p class="text-muted fs-xs mb-0">ava.martin@marketplace.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$87.00</td>
                                            <td class="text-warning fw-semibold"><i class="ti ti-point-filled fs-sm"></i>
                                                Pending
                                            </td>
                                            <td><span class="badge badge-soft-warning fs-xxs">Processing</span></td>
                                            <td>
                                                <img src="/images/cards/mastercard.svg" alt="" class="me-2" height="28">
                                                xxxx 5487
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <h5 class="fs-sm mb-0 fw-medium"><a href="ecommerce-order-details" class="link-reset">#WB20102</a></h5>
                                            </td>
                                            <td>26 Apr, 2025 <small class="text-muted">1:20 PM</small></td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-sm">
                                                        <img src="/images/users/user-1.jpg" alt="avatar-1" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 data-sort="customer" class="text-nowrap fs-base mb-0 lh-base">Noah Wilson</h5>
                                                        <p class="text-muted fs-xs mb-0">noah.wilson@ecomsite.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$59.90</td>
                                            <td class="text-danger fw-semibold"><i class="ti ti-point-filled fs-sm"></i> Failed
                                            </td>
                                            <td><span class="badge badge-soft-danger fs-xxs">Cancelled</span></td>
                                            <td>
                                                <img src="/images/cards/paypal.svg" alt="" class="me-2" height="28">
                                                xxx@email.com
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <h5 class="fs-sm mb-0 fw-medium"><a href="ecommerce-order-details" class="link-reset">#WB20103</a></h5>
                                            </td>
                                            <td>27 Apr, 2025 <small class="text-muted">3:30 PM</small></td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-sm">
                                                        <img src="/images/users/user-10.jpg" alt="avatar-10" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 data-sort="customer" class="text-nowrap fs-base mb-0 lh-base">Isabella
                                                            Moore</h5>
                                                        <p class="text-muted fs-xs mb-0">isabella.moore@onlineshop.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$215.20</td>
                                            <td class="text-success fw-semibold"><i class="ti ti-point-filled fs-sm"></i> Paid
                                            </td>
                                            <td><span class="badge badge-soft-info fs-xxs">Shipped</span></td>
                                            <td>
                                                <img src="/images/cards/stripe.svg" alt="" class="me-2" height="28"> xxxx
                                                9901
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <h5 class="fs-sm mb-0 fw-medium"><a href="ecommerce-order-details" class="link-reset">#WB20104</a></h5>
                                            </td>
                                            <td>28 Apr, 2025 <small class="text-muted">9:55 AM</small></td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-sm">
                                                        <img src="/images/users/user-5.jpg" alt="avatar-11" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 data-sort="customer" class="text-nowrap fs-base mb-0 lh-base">Lucas
                                                            Bennett</h5>
                                                        <p class="text-muted fs-xs mb-0">lucas.bennett@shopzone.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$345.75</td>
                                            <td class="text-success fw-semibold"><i class="ti ti-point-filled fs-sm"></i> Paid
                                            </td>
                                            <td><span class="badge badge-soft-success fs-xxs">Delivered</span></td>
                                            <td>
                                                <img src="/images/cards/american-express.svg" alt="" class="me-2" height="28"> xxxx 4678
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <h5 class="fs-sm mb-0 fw-medium"><a href="ecommerce-order-details" class="link-reset">#WB30100</a></h5>
                                            </td>
                                            <td>20 Apr, 2025 <small class="text-muted">2:30 PM</small></td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-sm">
                                                        <img src="/images/users/user-3.jpg" alt="avatar-3" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 data-sort="customer" class="text-nowrap fs-base mb-0 lh-base">Emma Johnson</h5>
                                                        <p class="text-muted fs-xs mb-0">emma.johnson@storemail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$199.99</td>
                                            <td class="text-success fw-semibold"><i class="ti ti-point-filled fs-sm"></i> Paid
                                            </td>
                                            <td><span class="badge badge-soft-success fs-xxs">Delivered</span></td>
                                            <td>
                                                <img src="/images/cards/discover-card.svg" alt="" class="me-2" height="28"> xxxx 1234
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <h5 class="fs-sm mb-0 fw-medium"><a href="ecommerce-order-details" class="link-reset">#WB30101</a></h5>
                                            </td>
                                            <td>21 Apr, 2025 <small class="text-muted">9:15 AM</small></td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-sm">
                                                        <img src="/images/users/user-4.jpg" alt="avatar-4" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 data-sort="customer" class="text-nowrap fs-base mb-0 lh-base">Liam
                                                            Thompson</h5>
                                                        <p class="text-muted fs-xs mb-0">liam.thompson@buynow.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$75.50</td>
                                            <td class="text-warning fw-semibold"><i class="ti ti-point-filled fs-sm"></i>
                                                Pending
                                            </td>
                                            <td><span class="badge badge-soft-warning fs-xxs">Processing</span></td>
                                            <td>
                                                <img src="/images/cards/unionpay.svg" alt="" class="me-2" height="28">
                                                xxxx 9876
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <h5 class="fs-sm mb-0 fw-medium"><a href="ecommerce-order-details" class="link-reset">#WB30102</a></h5>
                                            </td>
                                            <td>22 Apr, 2025 <small class="text-muted">4:45 PM</small></td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-sm">
                                                        <img src="/images/users/user-5.jpg" alt="avatar-5" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 data-sort="customer" class="text-nowrap fs-base mb-0 lh-base">Sophia Davis</h5>
                                                        <p class="text-muted fs-xs mb-0">sophia.davis@shopsite.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$45.25</td>
                                            <td class="text-danger fw-semibold"><i class="ti ti-point-filled fs-sm"></i> Failed
                                            </td>
                                            <td><span class="badge badge-soft-danger fs-xxs">Cancelled</span></td>
                                            <td>
                                                <img src="/images/cards/payoneer.svg" alt="" class="me-2" height="28">
                                                xxx@email.com
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <h5 class="fs-sm mb-0 fw-medium"><a href="ecommerce-order-details" class="link-reset">#WB30103</a></h5>
                                            </td>
                                            <td>10 May, 2025 <small class="text-muted">11:00 AM</small></td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-sm">
                                                        <img src="/images/users/user-6.jpg" alt="avatar-6" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 data-sort="customer" class="text-nowrap fs-base mb-0 lh-base">Oliver Brown</h5>
                                                        <p class="text-muted fs-xs mb-0">oliver.brown@webstore.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$299.00</td>
                                            <td class="text-success fw-semibold"><i class="ti ti-point-filled fs-sm"></i> Paid
                                            </td>
                                            <td><span class="badge badge-soft-info fs-xxs">Shipped</span></td>
                                            <td>
                                                <img src="/images/cards/google-wallet.svg" alt="" class="me-2" height="28"> xxx@google
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="ps-3">
                                                <input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option">
                                            </td>
                                            <td>
                                                <h5 class="fs-sm mb-0 fw-medium"><a href="ecommerce-order-details" class="link-reset">#WB30104</a></h5>
                                            </td>
                                            <td>24 Apr, 2025 <small class="text-muted">8:20 AM</small></td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-sm">
                                                        <img src="/images/users/user-7.jpg" alt="avatar-7" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 data-sort="customer" class="text-nowrap fs-base mb-0 lh-base">Charlotte
                                                            Lee</h5>
                                                        <p class="text-muted fs-xs mb-0">charlotte.lee@marketzone.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$420.80</td>
                                            <td class="text-success fw-semibold"><i class="ti ti-point-filled fs-sm"></i> Paid
                                            </td>
                                            <td><span class="badge badge-soft-success fs-xxs">Delivered</span></td>
                                            <td>
                                                <img src="/images/cards/bhim.svg" alt="" class="me-2" height="28">
                                                xxxx@upi
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>

                            </div>
                            <div class="card-footer border-0">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div data-table-pagination-info="orders"></div>
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