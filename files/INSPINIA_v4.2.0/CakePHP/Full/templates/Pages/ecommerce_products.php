<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Products']) ?>

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

                <?= $this->element('page_title', ['subtitle' => 'Ecommerce', 'title' => 'Products']) ?>

                <div class="row row-cols-xxl-5 row-cols-md-3 row-cols-1 align-items-center g-1">
                    <div class="col">
                        <div class="card mb-1">
                            <div class="card-body">
                                <a href="#!" class="text-muted float-end mt-n1 fs-xl"><i class="ti ti-external-link"></i></a>
                                <h5 title="Total Products">Products</h5>
                                <div class="d-flex align-items-center gap-2 my-3">
                                    <div class="avatar-md flex-shrink-0">
                                        <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                            <i class="ti ti-package"></i>
                                        </span>
                                    </div>
                                    <h3 class="mb-0">1,240</h3>
                                    <span class="badge badge-soft-primary fw-medium ms-2 fs-xs ms-auto">+24 New</span>
                                </div>
                                <p class="mb-0">
                                    <span class="text-primary"><i class="ti ti-point-filled"></i></span>
                                    <span class="text-nowrap text-muted">Active Listings</span>
                                    <span class="float-end"><b>980</b></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card mb-1">
                            <div class="card-body">
                                <a href="#!" class="text-muted float-end mt-n1 fs-xl"><i class="ti ti-external-link"></i></a>
                                <h5 title="Customer Orders">Orders</h5>
                                <div class="d-flex align-items-center gap-2 my-3">
                                    <div class="avatar-md flex-shrink-0">
                                        <span class="avatar-title text-bg-secondary rounded-circle fs-22">
                                            <i class="ti ti-shopping-cart"></i>
                                        </span>
                                    </div>
                                    <h3 class="mb-0">8,540</h3>
                                    <span class="badge badge-soft-secondary fw-medium ms-2 fs-xs ms-auto">+120 New</span>
                                </div>
                                <p class="mb-0">
                                    <span class="text-secondary"><i class="ti ti-point-filled"></i></span>
                                    <span class="text-nowrap text-muted">Total Orders</span>
                                    <span class="float-end"><b>105K</b></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card mb-1">
                            <div class="card-body">
                                <a href="#!" class="text-muted float-end mt-n1 fs-xl"><i class="ti ti-external-link"></i></a>
                                <h5 title="Sales Today">Sales</h5>
                                <div class="d-flex align-items-center gap-2 my-3">
                                    <div class="avatar-md flex-shrink-0">
                                        <span class="avatar-title text-bg-success rounded-circle fs-22">
                                            <i class="ti ti-currency-dollar"></i>
                                        </span>
                                    </div>
                                    <h3 class="mb-0">$9,860</h3>
                                    <span class="badge badge-soft-success fw-medium ms-2 fs-xs ms-auto">+8.2%</span>
                                </div>
                                <p class="mb-0">
                                    <span class="text-success"><i class="ti ti-point-filled"></i></span>
                                    <span class="text-nowrap text-muted">Today's Sales</span>
                                    <span class="float-end"><b>$156K</b></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card mb-1">
                            <div class="card-body">
                                <a href="#!" class="text-muted float-end mt-n1 fs-xl"><i class="ti ti-external-link"></i></a>
                                <h5 title="Customer Count">Customers</h5>
                                <div class="d-flex align-items-center gap-2 my-3">
                                    <div class="avatar-md flex-shrink-0">
                                        <span class="avatar-title text-bg-info rounded-circle fs-22">
                                            <i class="ti ti-users"></i>
                                        </span>
                                    </div>
                                    <h3 class="mb-0">2,945</h3>
                                    <span class="badge badge-soft-info fw-medium ms-2 fs-xs ms-auto">+36 New</span>
                                </div>
                                <p class="mb-0">
                                    <span class="text-info"><i class="ti ti-point-filled"></i></span>
                                    <span class="text-nowrap text-muted">Total Customers</span>
                                    <span class="float-end"><b>58,320</b></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card mb-1">
                            <div class="card-body">
                                <a href="#!" class="text-muted float-end mt-n1 fs-xl"><i class="ti ti-external-link"></i></a>
                                <h5 title="Total Revenue">Revenue</h5>
                                <div class="d-flex align-items-center gap-2 my-3">
                                    <div class="avatar-md flex-shrink-0">
                                        <span class="avatar-title text-bg-warning rounded-circle fs-22">
                                            <i class="ti ti-chart-bar"></i>
                                        </span>
                                    </div>
                                    <h3 class="mb-0">$1.2M</h3>
                                    <span class="badge badge-soft-warning fw-medium ms-2 fs-xs ms-auto">+4.5%</span>
                                </div>
                                <p class="mb-0">
                                    <span class="text-warning"><i class="ti ti-point-filled"></i></span>
                                    <span class="text-nowrap text-muted">Total Revenue</span>
                                    <span class="float-end"><b>$12.8M</b></span>
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
                                        <input data-table-search type="search" class="form-control" placeholder="Search product name...">
                                        <i data-lucide="search" class="app-search-icon text-muted"></i>
                                    </div>
                                    <button data-table-delete-selected class="btn btn-danger d-none">Delete</button>
                                </div>

                                <div class="d-flex align-items-center gap-2">

                                    <span class="me-2 fw-semibold">Filter By:</span>

                                    <!-- Category Filter -->
                                    <div class="app-search">
                                        <select data-table-filter="category" class="form-select form-control my-1 my-md-0">
                                            <option value="All">Category</option>
                                            <option value="Electronics">Electronics</option>
                                            <option value="Fashion">Fashion</option>
                                            <option value="Home">Home</option>
                                            <option value="Sports">Sports</option>
                                            <option value="Beauty">Beauty</option>
                                        </select>
                                        <i data-lucide="tag" class="app-search-icon text-muted"></i>
                                    </div>

                                    <!-- Stock Filter -->
                                    <div class="app-search">
                                        <select data-table-filter="status" class="form-select form-control my-1 my-md-0">
                                            <option value="">Status</option>
                                            <option value="Published">Published</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Out of Stock">Out of Stock</option>
                                        </select>
                                        <i data-lucide="box" class="app-search-icon text-muted"></i>
                                    </div>

                                    <!-- Price Range Filter -->
                                    <div class="app-search">
                                        <select data-table-range-filter="price" class="form-select form-control my-1 my-md-0">
                                            <option value="">Price Range</option>
                                            <option value="0-50">$0 - $50</option>
                                            <option value="51-150">$51 - $150</option>
                                            <option value="151-500">$151 - $500</option>
                                            <option value="500+">$500+</option>
                                        </select>
                                        <i data-lucide="dollar-sign" class="app-search-icon text-muted"></i>
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
                                    <a href="ecommerce-products-grid" class="btn btn-soft-primary btn-icon">
                                        <i data-lucide="layout-grid" class="fs-lg"></i>
                                    </a>
                                    <a href="ecommerce-products" class="btn btn-primary btn-icon">
                                        <i data-lucide="list" class="fs-lg"></i>
                                    </a>
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
                                            <th>SKU</th>
                                            <th data-table-sort data-column="category">Category</th>
                                            <th data-table-sort>Stock</th>
                                            <th data-table-sort data-column="price">Price</th>
                                            <th data-table-sort>Orders</th>
                                            <th data-table-sort="rating">Rating</th>
                                            <th data-table-sort data-column="status">Status</th>
                                            <th data-table-sort>Published</th>
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
                                                <div class="d-flex">
                                                    <div class="avatar-md me-3">
                                                        <img src="/images/products/1.png" alt="Product" class="img-fluid rounded">
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-1">
                                                            <a data-sort="product" href="ecommerce-product-details" class="link-reset">Wireless
                                                                Earbuds</a>
                                                        </h5>
                                                        <p class="text-muted mb-0 fs-xxs">by: My Furniture</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>WB-10245</td>
                                            <td>Electronics</td>
                                            <td>
                                                <h5 class="fs-base mb-0 fw-medium">56</h5>
                                            </td>
                                            <td>$59.99</td>
                                            <td>124</td>
                                            <td>
                                                <span class="text-warning">
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                </span>
                                                <span class="ms-1"><a data-sort="rating" href="ecommerce-reviews" class="link-reset fw-semibold">(87)</a></span>
                                            </td>
                                            <td><span class="badge badge-soft-success fs-xxs">Published</span></td>
                                            <td>18 Apr, 2025 <small class="text-muted">12:24 PM</small></td>
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
                                                <div class="d-flex">
                                                    <div class="avatar-md me-3">
                                                        <img src="/images/products/2.png" alt="Product" class="img-fluid rounded">
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-1">
                                                            <a data-sort="product" href="ecommerce-product-details" class="link-reset">Smart
                                                                LED Desk Lamp</a>
                                                        </h5>
                                                        <p class="text-muted mb-0 fs-xxs">by: BrightLite</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>SL-89012</td>
                                            <td>Home & Office</td>
                                            <td>
                                                <h5 class="fs-base mb-0 fw-medium">32</h5>
                                            </td>
                                            <td>$39.49</td>
                                            <td>78</td>
                                            <td>
                                                <span class="text-warning">
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star"></span>
                                                </span>
                                                <span class="ms-1"><a data-sort="rating" href="ecommerce-reviews" class="link-reset fw-semibold">(54)</a></span>
                                            </td>
                                            <td><span class="badge badge-soft-warning fs-xxs">Pending</span></td>
                                            <td>22 Apr, 2025 <small class="text-muted">09:45 AM</small></td>
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
                                                <div class="d-flex">
                                                    <div class="avatar-md me-3">
                                                        <img src="/images/products/3.png" alt="Product" class="img-fluid rounded">
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-1">
                                                            <a data-sort="product" href="ecommerce-product-details" class="link-reset">Men's
                                                                Running Shoes</a>
                                                        </h5>
                                                        <p class="text-muted mb-0 fs-xxs">by: ActiveWear Co.</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>RS-20450</td>
                                            <td>Fashion</td>
                                            <td>
                                                <h5 class="fs-base mb-0 fw-medium">120</h5>
                                            </td>
                                            <td>$89.00</td>
                                            <td>231</td>
                                            <td>
                                                <span class="text-warning">
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                </span>
                                                <span class="ms-1"><a data-sort="rating" href="ecommerce-reviews" class="link-reset fw-semibold">(142)</a></span>
                                            </td>
                                            <td><span class="badge badge-soft-success fs-xxs">Published</span></td>
                                            <td>24 Apr, 2025 <small class="text-muted">03:10 PM</small></td>
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
                                                <div class="d-flex">
                                                    <div class="avatar-md me-3">
                                                        <img src="/images/products/4.png" alt="Product" class="img-fluid rounded">
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-1">
                                                            <a data-sort="product" href="ecommerce-product-details" class="link-reset">Fitness
                                                                Tracker Watch</a>
                                                        </h5>
                                                        <p class="text-muted mb-0 fs-xxs">by: FitPulse</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>FT-67123</td>
                                            <td>Fitness</td>
                                            <td>
                                                <h5 class="fs-base mb-0 fw-medium">78</h5>
                                            </td>
                                            <td>$49.95</td>
                                            <td>198</td>
                                            <td>
                                                <span class="text-warning">
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star"></span>
                                                </span>
                                                <span class="ms-1"><a data-sort="rating" href="ecommerce-reviews" class="link-reset fw-semibold">(89)</a></span>
                                            </td>
                                            <td><span class="badge badge-soft-success fs-xxs">Published</span></td>
                                            <td>23 Apr, 2025 <small class="text-muted">10:12 AM</small></td>
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
                                                <div class="d-flex">
                                                    <div class="avatar-md me-3">
                                                        <img src="/images/products/5.png" alt="Product" class="img-fluid rounded">
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-1">
                                                            <a data-sort="product" href="ecommerce-product-details" class="link-reset">Gaming
                                                                Mouse RGB</a>
                                                        </h5>
                                                        <p class="text-muted mb-0 fs-xxs">by: HyperClick</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>GM-72109</td>
                                            <td>Gaming</td>
                                            <td>
                                                <h5 class="fs-base mb-0 fw-medium">120</h5>
                                            </td>
                                            <td>$29.99</td>
                                            <td>243</td>
                                            <td>
                                                <span class="text-warning">
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star"></span>
                                                    <span class="ti ti-star"></span>
                                                </span>
                                                <span class="ms-1"><a data-sort="rating" href="ecommerce-reviews" class="link-reset fw-semibold">(102)</a></span>
                                            </td>
                                            <td><span class="badge badge-soft-success fs-xxs">Published</span></td>
                                            <td>19 Apr, 2025 <small class="text-muted">05:56 PM</small></td>
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
                                                <div class="d-flex">
                                                    <div class="avatar-md me-3">
                                                        <img src="/images/products/6.png" alt="Product" class="img-fluid rounded">
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-1">
                                                            <a data-sort="product" href="ecommerce-product-details" class="link-reset">Modern
                                                                Lounge Chair</a>
                                                        </h5>
                                                        <p class="text-muted mb-0 fs-xxs">by: UrbanLiving</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>FC-31220</td>
                                            <td>Furniture</td>
                                            <td>
                                                <h5 class="fs-base mb-0 fw-medium">24</h5>
                                            </td>
                                            <td>$199.00</td>
                                            <td>38</td>
                                            <td>
                                                <span class="text-warning">
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                </span>
                                                <span class="ms-1"><a data-sort="rating" href="ecommerce-reviews" class="link-reset fw-semibold">(27)</a></span>
                                            </td>
                                            <td><span class="badge badge-soft-danger fs-xxs">Out of Stock</span></td>
                                            <td>18 Apr, 2025 <small class="text-muted">11:30 AM</small></td>
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
                                                <div class="d-flex">
                                                    <div class="avatar-md me-3">
                                                        <img src="/images/products/7.png" alt="Product" class="img-fluid rounded">
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-1">
                                                            <a data-sort="product" href="ecommerce-product-details" class="link-reset">Plush
                                                                Toy Bear</a>
                                                        </h5>
                                                        <p class="text-muted mb-0 fs-xxs">by: Softies</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>TY-00788</td>
                                            <td>Toys</td>
                                            <td>
                                                <h5 class="fs-base mb-0 fw-medium">150</h5>
                                            </td>
                                            <td>$15.99</td>
                                            <td>305</td>
                                            <td>
                                                <span class="text-warning">
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star"></span>
                                                </span>
                                                <span class="ms-1"><a data-sort="rating" href="ecommerce-reviews" class="link-reset fw-semibold">(120)</a></span>
                                            </td>
                                            <td><span class="badge badge-soft-success fs-xxs">Published</span></td>
                                            <td>17 Apr, 2025 <small class="text-muted">04:21 PM</small></td>
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
                                                <div class="d-flex">
                                                    <div class="avatar-md me-3">
                                                        <img src="/images/products/8.png" alt="Product" class="img-fluid rounded">
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-1">
                                                            <a data-sort="product" href="ecommerce-product-details" class="link-reset">55"
                                                                Ultra HD Smart TV</a>
                                                        </h5>
                                                        <p class="text-muted mb-0 fs-xxs">by: ViewMaster</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>TV-5588</td>
                                            <td>Electronics</td>
                                            <td>
                                                <h5 class="fs-base mb-0 fw-medium">64</h5>
                                            </td>
                                            <td>$499.00</td>
                                            <td>142</td>
                                            <td>
                                                <span class="text-warning">
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star"></span>
                                                </span>
                                                <span class="ms-1"><a data-sort="rating" href="ecommerce-reviews" class="link-reset fw-semibold">(88)</a></span>
                                            </td>
                                            <td><span class="badge badge-soft-success fs-xxs">Published</span></td>
                                            <td>25 Apr, 2025 <small class="text-muted">10:10 AM</small></td>
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
                                                <div class="d-flex">
                                                    <div class="avatar-md me-3">
                                                        <img src="/images/products/9.png" alt="Product" class="img-fluid rounded">
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-1">
                                                            <a data-sort="product" href="ecommerce-product-details" class="link-reset">Apple
                                                                iMac 24" M3</a>
                                                        </h5>
                                                        <p class="text-muted mb-0 fs-xxs">by: Apple</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>IMAC-M3-24</td>
                                            <td>Computers</td>
                                            <td>
                                                <h5 class="fs-base mb-0 fw-medium">18</h5>
                                            </td>
                                            <td>$1,399.00</td>
                                            <td>29</td>
                                            <td>
                                                <span class="text-warning">
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                </span>
                                                <span class="ms-1"><a data-sort="rating" href="ecommerce-reviews" class="link-reset fw-semibold">(16)</a></span>
                                            </td>
                                            <td><span class="badge badge-soft-warning fs-xxs">Pending</span></td>
                                            <td>24 Apr, 2025 <small class="text-muted">02:14 PM</small></td>
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
                                                <div class="d-flex">
                                                    <div class="avatar-md me-3">
                                                        <img src="/images/products/10.png" alt="Product" class="img-fluid rounded">
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-1">
                                                            <a data-sort="product" href="ecommerce-product-details" class="link-reset">Smart
                                                                Watch Pro X2</a>
                                                        </h5>
                                                        <p class="text-muted mb-0 fs-xxs">by: FitTech</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>SWPX2-GL</td>
                                            <td>Wearables</td>
                                            <td>
                                                <h5 class="fs-base mb-0 fw-medium">85</h5>
                                            </td>
                                            <td>$149.50</td>
                                            <td>197</td>
                                            <td>
                                                <span class="text-warning">
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star"></span>
                                                </span>
                                                <span class="ms-1"><a data-sort="rating" href="ecommerce-reviews" class="link-reset fw-semibold">(65)</a></span>
                                            </td>
                                            <td><span class="badge badge-soft-success fs-xxs">Published</span></td>
                                            <td>23 Apr, 2025 <small class="text-muted">08:00 AM</small></td>
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