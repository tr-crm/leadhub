<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Seller Details']) ?>

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

                <?= $this->element('page_title', ['subtitle' => 'Ecommerce', 'title' => 'Seller Details']) ?>

                <div class="row">
                    <div class="col-xl-4">
                        <div class="card card-top-sticky">
                            <div class="card-body pt-0">
                                <article class="card card-out-of-container border-top-0">
                                    <div class="position-relative card-side-img overflow-hidden rounded-top" style="height: 180px; background-image: url(/images/seller-profile.jpg);">
                                        <div class="p-4 card-img-overlay rounded-start-0 auth-overlay d-flex rounded-top align-items-center justify-content-center">

                                        </div>
                                    </div>

                                    <!-- Card Body -->
                                    <div class="card-body pt-0 position-relative" style="margin-top: -40px;">
                                        <div class="d-flex justify-content-between align-items-center rounded border-light p-3 bg-light-subtle border">
                                            <div class="d-flex justify-content-start align-items-center gap-3">
                                                <div class="avatar avatar-xxl">
                                                    <img src="/images/sellers/4.png" alt="avatar-2" class="img-fluid img-thumbnail rounded-circle">
                                                </div>
                                                <div>
                                                    <h4 class="text-nowrap fw-bold mb-1"> TechTonic Store</h4>
                                                    <p class="text-muted mb-0">Since 2014</p>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2">
                                                <button class="btn btn-icon btn-dark" data-bs-toggle="dropdown">
                                                    <i class="ti ti-dots fs-24"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                                                    <li><a class="dropdown-item text-danger" href="#">Report</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <div class="">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="avatar-sm bg-light d-flex align-items-center justify-content-center rounded">
                                            <i class="ti ti-user fs-xl text-secondary"></i>
                                        </div>
                                        <p class="mb-0 fs-sm">Owner: <span class="fw-semibold">Alex Johnson</span>
                                        </p>
                                    </div>

                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="avatar-sm bg-light d-flex align-items-center justify-content-center rounded">
                                            <i class="ti ti-briefcase fs-xl text-secondary"></i>
                                        </div>
                                        <p class="mb-0 fs-sm">Business Type: <span class="fw-semibold">E-commerce Electronics</span>
                                        </p>
                                    </div>

                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="avatar-sm bg-light d-flex align-items-center justify-content-center rounded">
                                            <i class="ti ti-calendar-event fs-xl text-secondary"></i>
                                        </div>
                                        <p class="mb-0 fs-sm">Founded: <span class="fw-semibold">2010</span></p>
                                    </div>

                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="avatar-sm bg-light d-flex align-items-center justify-content-center rounded">
                                            <i class="ti ti-map-pin fs-xl text-secondary"></i>
                                        </div>
                                        <p class="mb-0 fs-sm">Location: <span class="fw-semibold">New York, USA</span></p>
                                    </div>

                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="avatar-sm bg-light d-flex align-items-center justify-content-center rounded">
                                            <i class="ti ti-mail fs-xl text-secondary"></i>
                                        </div>
                                        <p class="mb-0 fs-sm">Support: <a href="mailto:support@example.com" class="text-primary fw-semibold">support@example.com</a>
                                        </p>
                                    </div>

                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="avatar-sm bg-light d-flex align-items-center justify-content-center rounded">
                                            <i class="ti ti-link fs-xl text-secondary"></i>
                                        </div>
                                        <p class="mb-0 fs-sm">Website: <a href="https://www.example.com" class="text-primary fw-semibold">www.example.com</a>
                                        </p>
                                    </div>

                                </div>

                            </div>

                            <div class="card-body border-top border-dashed">
                                <h5 class="mb-3">Contact Seller</h5>
                                <form action="#">
                                    <div class="mb-3">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Enter your messages..."></textarea>
                                    </div>
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Send Messages</button>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Seller Overview</h4>
                            </div>

                            <div class="card-body">
                                <div class="row row-cols-xxl-4 row-cols-md-2 row-cols-1 align-items-center">
                                    <div class="col">
                                        <div class="card border-0 bg-success bg-opacity-10">
                                            <div class="card-body">
                                                <h5 title="Number of Orders">Orders</h5>
                                                <div class="d-flex align-items-center gap-2 my-3">
                                                    <div class="avatar-md flex-shrink-0">
                                                        <span class="avatar-title text-bg-success bg-opacity-90 rounded-circle fs-22">
                                                            <i class="ti ti-shopping-cart"></i>
                                                        </span>
                                                    </div>
                                                    <h3 class="mb-0">1,250</h3>
                                                </div>
                                                <p class="mb-0">
                                                    <span class="text-success"><i class="ti ti-point-filled"></i></span>
                                                    <span class="text-nowrap text-muted">Total Orders</span>
                                                    <span class="float-end"><b>15,320</b></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="card border-0 bg-warning bg-opacity-10">
                                            <div class="card-body">
                                                <h5 title="Revenue Earned">Revenue</h5>
                                                <div class="d-flex align-items-center gap-2 my-3">
                                                    <div class="avatar-md flex-shrink-0">
                                                        <span class="avatar-title text-bg-warning bg-opacity-90 rounded-circle fs-22">
                                                            <i class="ti ti-currency-dollar"></i>
                                                        </span>
                                                    </div>
                                                    <h3 class="mb-0">$98.7k</h3>
                                                </div>
                                                <p class="mb-0">
                                                    <span class="text-primary"><i class="ti ti-point-filled"></i></span>
                                                    <span class="text-nowrap text-muted">Total Revenue</span>
                                                    <span class="float-end"><b>$1.2M</b></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="card border-0 bg-info bg-opacity-10">
                                            <div class="card-body">
                                                <h5 title="Seller Ratings">Ratings</h5>
                                                <div class="d-flex align-items-center gap-2 my-3">
                                                    <div class="avatar-md flex-shrink-0">
                                                        <span class="avatar-title text-bg-info bg-opacity-90 rounded-circle fs-22">
                                                            <i class="ti ti-star"></i>
                                                        </span>
                                                    </div>
                                                    <h3 class="mb-0">4.8</h3>
                                                </div>
                                                <p class="mb-0">
                                                    <span class="text-info"><i class="ti ti-point-filled"></i></span>
                                                    <span class="text-nowrap text-muted">Average Rating</span>
                                                    <span class="float-end"><b>5k Reviews</b></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="card border-0 bg-secondary bg-opacity-10">
                                            <div class="card-body">
                                                <h5 title="Total Products">Products</h5>
                                                <div class="d-flex align-items-center gap-2 my-3">
                                                    <div class="avatar-md flex-shrink-0">
                                                        <span class="avatar-title text-bg-secondary bg-opacity-90 rounded-circle fs-22">
                                                            <i class="ti ti-box"></i>
                                                        </span>
                                                    </div>
                                                    <h3 class="mb-0">350</h3>
                                                </div>
                                                <p class="mb-0">
                                                    <span class="text-secondary"><i class="ti ti-point-filled"></i></span>
                                                    <span class="text-nowrap text-muted">Total Products</span>
                                                    <span class="float-end"><b>750 Variants</b></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end row -->

                                <div id="seller-revenue"></div>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->

                        <h4 class="my-4">My Products</h4>

                        <div class="row">
                            <div class="col-12">
                                <div data-table data-table-rows-per-page="8" class="card">
                                    <div class="card-header border-light justify-content-between">

                                        <div class="d-flex gap-2">
                                            <div class="app-search">
                                                <input data-table-search type="search" class="form-control" placeholder="Search product name...">
                                                <i data-lucide="search" class="app-search-icon text-muted"></i>
                                            </div>
                                            <button data-table-delete-selected class="btn btn-danger d-none">Delete</button>
                                        </div>

                                        <div class="d-flex gap-1">
                                            <!-- Records Per Page -->
                                            <div>
                                                <select data-table-set-rows-per-page class="form-select form-control my-1 my-md-0">
                                                    <option value="5">5</option>
                                                    <option value="10">10</option>
                                                    <option value="15">15</option>
                                                    <option value="20">20</option>
                                                </select>
                                            </div>

                                            <a href="ecommerce-add-product" class="btn btn-danger ms-1">
                                                <i data-lucide="plus" class="fs-sm me-2"></i> Add Product
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-custom table-centered table-select table-hover w-100 mb-0">
                                            <thead class="bg-light align-middle bg-opacity-25 thead-sm">
                                                <tr class="text-uppercase fs-xxs">
                                                    <th class="ps-3" style="width: 1%;">
                                                        <input data-table-select-all class="form-check-input form-check-input-light fs-14 mt-0" type="checkbox" id="select-all-products" value="option">
                                                    </th>
                                                    <th data-table-sort="product">Product</th>
                                                    <th data-table-sort>Category</th>
                                                    <th data-table-sort>Stock</th>
                                                    <th data-table-sort>Price</th>
                                                    <th data-table-sort>Orders</th>
                                                    <th data-table-sort>Status</th>
                                                    <th class="text-center" style="width: 1%;">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Product Row -->
                                                <tr>
                                                    <td class="ps-3">
                                                        <input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-md me-3">
                                                                <img src="/images/products/1.png" alt="Product" class="img-fluid rounded">
                                                            </div>
                                                            <div>
                                                                <h5 class="mb-0">
                                                                    <a data-sort="product" href="ecommerce-product-details" class="link-reset">Gaming
                                                                        Laptop Pro</a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Computers</td>
                                                    <td>
                                                        <h5 class="fs-base mb-0 fw-medium">15</h5>
                                                    </td>
                                                    <td>$1,299.00</td>
                                                    <td>45</td>
                                                    <td><span class="badge badge-soft-success fs-xxs">Published</span></td>
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
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-md me-3">
                                                                <img src="/images/products/2.png" alt="Product" class="img-fluid rounded">
                                                            </div>
                                                            <div>
                                                                <h5 class="mb-0">
                                                                    <a data-sort="product" href="ecommerce-product-details" class="link-reset">Vintage
                                                                        Leather Wallet</a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Accessories</td>
                                                    <td>
                                                        <h5 class="fs-base mb-0 fw-medium">78</h5>
                                                    </td>
                                                    <td>$49.95</td>
                                                    <td>210</td>
                                                    <td><span class="badge badge-soft-warning fs-xxs">Pending</span></td>
                                                    <td>
                                                        <div class="d-flex justify-content-center gap-1">
                                                            <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                            <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                            <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>


                                                <!-- Product Row -->
                                                <tr>
                                                    <td class="ps-3">
                                                        <input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-md me-3">
                                                                <img src="/images/products/3.png" alt="Product" class="img-fluid rounded">
                                                            </div>
                                                            <div>
                                                                <h5 class="mb-0">
                                                                    <a data-sort="product" href="ecommerce-product-details" class="link-reset">Men's
                                                                        Running Shoes</a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Fashion</td>
                                                    <td>
                                                        <h5 class="fs-base mb-0 fw-medium">120</h5>
                                                    </td>
                                                    <td>$89.00</td>
                                                    <td>231</td>
                                                    <td><span class="badge badge-soft-success fs-xxs">Published</span></td>
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
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-md me-3">
                                                                <img src="/images/products/4.png" alt="Product" class="img-fluid rounded">
                                                            </div>
                                                            <div>
                                                                <h5 class="mb-0">
                                                                    <a data-sort="product" href="ecommerce-product-details" class="link-reset">Fitness
                                                                        Tracker Watch</a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Fitness</td>
                                                    <td>
                                                        <h5 class="fs-base mb-0 fw-medium">78</h5>
                                                    </td>
                                                    <td>$49.95</td>
                                                    <td>198</td>
                                                    <td><span class="badge badge-soft-success fs-xxs">Published</span></td>
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
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-md me-3">
                                                                <img src="/images/products/5.png" alt="Product" class="img-fluid rounded">
                                                            </div>
                                                            <div>
                                                                <h5 class="mb-0">
                                                                    <a data-sort="product" href="ecommerce-product-details" class="link-reset">Gaming
                                                                        Mouse RGB</a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Gaming</td>
                                                    <td>
                                                        <h5 class="fs-base mb-0 fw-medium">120</h5>
                                                    </td>
                                                    <td>$29.99</td>
                                                    <td>243</td>
                                                    <td><span class="badge badge-soft-success fs-xxs">Published</span></td>
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
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-md me-3">
                                                                <img src="/images/products/6.png" alt="Product" class="img-fluid rounded">
                                                            </div>
                                                            <div>
                                                                <h5 class="mb-0">
                                                                    <a data-sort="product" href="ecommerce-product-details" class="link-reset">Modern
                                                                        Lounge Chair</a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Furniture</td>
                                                    <td>
                                                        <h5 class="fs-base mb-0 fw-medium">24</h5>
                                                    </td>
                                                    <td>$199.00</td>
                                                    <td>38</td>
                                                    <td><span class="badge badge-soft-danger fs-xxs">Out of Stock</span></td>
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
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-md me-3">
                                                                <img src="/images/products/7.png" alt="Product" class="img-fluid rounded">
                                                            </div>
                                                            <div>
                                                                <h5 class="mb-0">
                                                                    <a data-sort="product" href="ecommerce-product-details" class="link-reset">Plush
                                                                        Toy Bear</a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Toys</td>
                                                    <td>
                                                        <h5 class="fs-base mb-0 fw-medium">150</h5>
                                                    </td>
                                                    <td>$15.99</td>
                                                    <td>305</td>
                                                    <td><span class="badge badge-soft-success fs-xxs">Published</span></td>
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
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-md me-3">
                                                                <img src="/images/products/8.png" alt="Product" class="img-fluid rounded">
                                                            </div>
                                                            <div>
                                                                <h5 class="mb-0">
                                                                    <a data-sort="product" href="ecommerce-product-details" class="link-reset">55"
                                                                        Ultra HD Smart TV</a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Electronics</td>
                                                    <td>
                                                        <h5 class="fs-base mb-0 fw-medium">64</h5>
                                                    </td>
                                                    <td>$499.00</td>
                                                    <td>142</td>
                                                    <td><span class="badge badge-soft-success fs-xxs">Published</span></td>
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
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-md me-3">
                                                                <img src="/images/products/9.png" alt="Product" class="img-fluid rounded">
                                                            </div>
                                                            <div>
                                                                <h5 class="mb-0">
                                                                    <a data-sort="product" href="ecommerce-product-details" class="link-reset">Apple
                                                                        iMac 24" M3</a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Computers</td>
                                                    <td>
                                                        <h5 class="fs-base mb-0 fw-medium">18</h5>
                                                    </td>
                                                    <td>$1,399.00</td>
                                                    <td>29</td>
                                                    <td><span class="badge badge-soft-warning fs-xxs">Pending</span></td>
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
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-md me-3">
                                                                <img src="/images/products/10.png" alt="Product" class="img-fluid rounded">
                                                            </div>
                                                            <div>
                                                                <h5 class="mb-0">
                                                                    <a data-sort="product" href="ecommerce-product-details" class="link-reset">Smart
                                                                        Watch Pro X2</a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Wearables</td>
                                                    <td>
                                                        <h5 class="fs-base mb-0 fw-medium">85</h5>
                                                    </td>
                                                    <td>$149.50</td>
                                                    <td>197</td>
                                                    <td><span class="badge badge-soft-success fs-xxs">Published</span></td>
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
                                            <div data-table-pagination-info="products"></div>
                                            <div data-table-pagination></div>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end col -->
                        </div><!-- end row -->

                    </div>
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

    <!-- Apex Charts js -->
    <script src="/plugins/apexcharts/apexcharts.min.js"></script>

    <!-- Custom table -->
    <script src="/js/pages/custom-table.js"></script>

    <!-- Seller Details Page Js -->
    <script src="/js/pages/ecommerce-seller-details.js"></script>

</body>

</html>