<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Products Grid']) ?>

    <!-- nouislider css -->
    <link rel="stylesheet" href="/plugins/nouislider/nouislider.min.css">

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

                <?= $this->element('page_title', ['subtitle' => 'Ecommerce', 'title' => 'Products Grid']) ?>

                <div class="row mb-2">
                    <div class="col-lg-12">
                        <form class="bg-light-subtle rounded border p-3">
                            <div class="d-flex flex-wrap justify align-items-center gap-3">
                                <div class="d-lg-none d-flex gap-2">
                                    <button class="btn btn-default btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#productFillterOffcanvas" aria-controls="productFillterOffcanvas">
                                        <i class="ti ti-menu-2 fs-lg"></i>
                                    </button>
                                </div>
                                <h3 class="mb-0 fs-xl flex-grow-1">952 Products</h3>

                                <div class="d-flex gap-1">
                                    <a href="ecommerce-products-grid" class="btn btn-primary btn-icon">
                                        <i data-lucide="layout-grid" class="fs-lg"></i>
                                    </a>
                                    <a href="ecommerce-products" class="btn btn-soft-primary btn-icon">
                                        <i data-lucide="list" class="fs-lg"></i>
                                    </a>
                                    <a href="ecommerce-add-product" class="btn btn-danger ms-1">
                                        <i data-lucide="plus" class="fs-sm me-2"></i> Add Product
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row g-2">
                    <div class="col-xl-3">
                        <div class="offcanvas-lg offcanvas-start" tabindex="-1" id="productFillterOffcanvas">
                            <div class="card h-100" data-simplebar>
                                <div class="card-body p-0">
                                    <div class="p-3 border-bottom border-dashed">
                                        <div class="app-search">
                                            <input type="search" class="form-control" placeholder="Search product name...">
                                            <i data-lucide="search" class="app-search-icon text-muted"></i>
                                        </div>
                                    </div>

                                    <div class="p-3 border-bottom border-dashed">
                                        <div class="d-flex mb-2 justify-content-between align-items-center">
                                            <h5 class="mb-0">Category:</h5>
                                            <a href="javascript: void(0);" class="btn btn-link btn-sm px-0 fw-semibold">View All</a>
                                        </div>

                                        <!-- Category List -->
                                        <div class="d-flex align-items-center gap-2 text-muted py-1">
                                            <div class="form-check flex-grow-1">
                                                <input type="checkbox" id="cat-electronics" class="form-check-input">
                                                <label for="cat-electronics" class="form-check-label mb-0">Electronics</label>
                                            </div>
                                            <div class="flex-shrink-0"><span class="badge text-bg-light">8</span></div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 text-muted py-1">
                                            <div class="form-check flex-grow-1">
                                                <input type="checkbox" id="cat-computers" class="form-check-input">
                                                <label for="cat-computers" class="form-check-label mb-0">Computers</label>
                                            </div>
                                            <div class="flex-shrink-0"><span class="badge text-bg-light">5</span></div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 text-muted py-1">
                                            <div class="form-check flex-grow-1">
                                                <input type="checkbox" id="cat-home-office" class="form-check-input">
                                                <label for="cat-home-office" class="form-check-label mb-0">Home & Office</label>
                                            </div>
                                            <div class="flex-shrink-0"><span class="badge text-bg-light">6</span></div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 text-muted py-1">
                                            <div class="form-check flex-grow-1">
                                                <input type="checkbox" id="cat-accessories" class="form-check-input">
                                                <label for="cat-accessories" class="form-check-label mb-0">Accessories</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 text-muted py-1">
                                            <div class="form-check flex-grow-1">
                                                <input type="checkbox" id="cat-gaming" class="form-check-input">
                                                <label for="cat-gaming" class="form-check-label mb-0">Gaming</label>
                                            </div>
                                            <div class="flex-shrink-0"><span class="badge text-bg-light">9</span></div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 text-muted py-1">
                                            <div class="form-check flex-grow-1">
                                                <input type="checkbox" id="cat-mobile" class="form-check-input">
                                                <label for="cat-mobile" class="form-check-label mb-0">Mobile Phones</label>
                                            </div>
                                            <div class="flex-shrink-0"><span class="badge text-bg-light">12</span></div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 text-muted py-1">
                                            <div class="form-check flex-grow-1">
                                                <input type="checkbox" id="cat-appliances" class="form-check-input">
                                                <label for="cat-appliances" class="form-check-label mb-0">Appliances</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="p-3 border-bottom border-dashed">
                                        <div class="d-flex mb-2 justify-content-between align-items-center">
                                            <h5 class="mb-0">Brands:</h5>
                                            <a href="javascript: void(0);" class="btn btn-link btn-sm px-0 fw-semibold">View All</a>
                                        </div>

                                        <!-- Brands List -->
                                        <div class="d-flex align-items-center gap-2 text-muted py-1">
                                            <div class="form-check flex-grow-1">
                                                <input type="checkbox" id="brand-apple" class="form-check-input">
                                                <label for="brand-apple" class="form-check-label mb-0">Apple</label>
                                            </div>
                                            <div class="flex-shrink-0"><span class="badge text-bg-light">14</span></div>
                                        </div>

                                        <div class="d-flex align-items-center gap-2 text-muted py-1">
                                            <div class="form-check flex-grow-1">
                                                <input type="checkbox" id="brand-samsung" class="form-check-input">
                                                <label for="brand-samsung" class="form-check-label mb-0">Samsung</label>
                                            </div>
                                            <div class="flex-shrink-0"><span class="badge text-bg-light">20</span></div>
                                        </div>

                                        <div class="d-flex align-items-center gap-2 text-muted py-1">
                                            <div class="form-check flex-grow-1">
                                                <input type="checkbox" id="brand-sony" class="form-check-input">
                                                <label for="brand-sony" class="form-check-label mb-0">Sony</label>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center gap-2 text-muted py-1">
                                            <div class="form-check flex-grow-1">
                                                <input type="checkbox" id="brand-dell" class="form-check-input">
                                                <label for="brand-dell" class="form-check-label mb-0">Dell</label>
                                            </div>
                                            <div class="flex-shrink-0"><span class="badge text-bg-light">7</span></div>
                                        </div>

                                        <div class="d-flex align-items-center gap-2 text-muted py-1">
                                            <div class="form-check flex-grow-1">
                                                <input type="checkbox" id="brand-hp" class="form-check-input">
                                                <label for="brand-hp" class="form-check-label mb-0">HP</label>
                                            </div>
                                        </div>
                                    </div> <!-- end brands-->

                                    <div class="p-3 border-bottom border-dashed">
                                        <h5 class="mb-3">Price:</h5>

                                        <div id="price-filter" data-slider-size="sm"></div>

                                        <div class="d-flex gap-2 align-items-center mt-3">
                                            <div class="form-control form-control-sm text-center" id="price-filter-low"></div>
                                            <span class="fw-semibold text-muted">to</span>
                                            <div class="form-control form-control-sm text-center" id="price-filter-high"></div>
                                        </div>
                                    </div>

                                    <div class="p-3">
                                        <div class="d-flex mb-3 justify-content-between align-items-center">
                                            <h5 class="mb-0">Ratings:</h5>
                                        </div>

                                        <div class="form-check py-1">
                                            <input class="form-check-input" type="checkbox" id="5-star-rating">
                                            <label for="5-star-rating" class="form-check-label d-block">
                                                <span class="d-flex align-items-center">
                                                    <span class="flex-grow-1 d-inline-flex align-items-center">
                                                        <span class="ti ti-star-filled text-warning"></span>
                                                        <span class="ti ti-star-filled text-warning"></span>
                                                        <span class="ti ti-star-filled text-warning"></span>
                                                        <span class="ti ti-star-filled text-warning"></span>
                                                        <span class="ti ti-star-filled text-warning"></span>
                                                        <span class="text-muted ms-1">5 Stars & Up</span>
                                                    </span>
                                                    <span class="flex-shrink-0"><span class="badge text-bg-light">120</span></span>
                                                </span>
                                            </label>
                                        </div>

                                        <div class="form-check py-1">
                                            <input class="form-check-input" type="checkbox" id="4-star-rating">
                                            <label for="4-star-rating" class="form-check-label d-block">
                                                <span class="d-flex align-items-center">
                                                    <span class="flex-grow-1 d-inline-flex align-items-center">
                                                        <span class="ti ti-star-filled text-warning"></span>
                                                        <span class="ti ti-star-filled text-warning"></span>
                                                        <span class="ti ti-star-filled text-warning"></span>
                                                        <span class="ti ti-star-filled text-warning"></span>
                                                        <span class="ti ti-star-filled text-muted"></span>
                                                        <span class="text-muted ms-1">4 Stars & Up</span>
                                                    </span>
                                                    <span class="flex-shrink-0"><span class="badge text-bg-light">210</span></span>
                                                </span>
                                            </label>
                                        </div>

                                        <div class="form-check py-1">
                                            <input class="form-check-input" type="checkbox" id="3-star-rating">
                                            <label for="3-star-rating" class="form-check-label d-block">
                                                <span class="d-flex align-items-center">
                                                    <span class="flex-grow-1 d-inline-flex align-items-center">
                                                        <span class="ti ti-star-filled text-warning"></span>
                                                        <span class="ti ti-star-filled text-warning"></span>
                                                        <span class="ti ti-star-filled text-warning"></span>
                                                        <span class="ti ti-star-filled text-muted"></span>
                                                        <span class="ti ti-star-filled text-muted"></span>
                                                        <span class="text-muted ms-1">3 Stars & Up</span>
                                                    </span>
                                                    <span class="flex-shrink-0"><span class="badge text-bg-light">325</span></span>
                                                </span>
                                            </label>
                                        </div>

                                        <div class="form-check py-1">
                                            <input class="form-check-input" type="checkbox" id="2-star-rating">
                                            <label for="2-star-rating" class="form-check-label d-block">
                                                <span class="d-flex align-items-center">
                                                    <span class="flex-grow-1 d-inline-flex align-items-center">
                                                        <span class="ti ti-star-filled text-warning"></span>
                                                        <span class="ti ti-star-filled text-warning"></span>
                                                        <span class="ti ti-star-filled text-muted"></span>
                                                        <span class="ti ti-star-filled text-muted"></span>
                                                        <span class="ti ti-star-filled text-muted"></span>
                                                        <span class="text-muted ms-1">2 Stars & Up</span>
                                                    </span>
                                                    <span class="flex-shrink-0"><span class="badge text-bg-light">145</span></span>
                                                </span>
                                            </label>
                                        </div>

                                        <div class="form-check pt-1">
                                            <input class="form-check-input" type="checkbox" id="1-star-rating">
                                            <label for="1-star-rating" class="form-check-label d-block">
                                                <span class="d-flex align-items-center">
                                                    <span class="flex-grow-1 d-inline-flex align-items-center">
                                                        <span class="ti ti-star-filled text-warning"></span>
                                                        <span class="ti ti-star-filled text-muted"></span>
                                                        <span class="ti ti-star-filled text-muted"></span>
                                                        <span class="ti ti-star-filled text-muted"></span>
                                                        <span class="ti ti-star-filled text-muted"></span>
                                                        <span class="text-muted ms-1">1 Star & Up</span>
                                                    </span>
                                                    <span class="flex-shrink-0"><span class="badge text-bg-light">58</span></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div> <!-- end rating-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-9">
                        <div class="row row-cols-xxl-4 row-cols-lg-3 row-cols-sm-2 row-col-1 g-2">
                            <div class="col">
                                <article class="card h-100 mb-2">
                                    <!-- Badge -->
                                    <div class="badge text-bg-success badge-label fs-base rounded position-absolute top-0 start-0 m-3">15% OFF</div>

                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="bg-light-subtle p-3 mb-3 border border-light rounded">
                                            <img src="/images/products/1.png" alt="modern-sofa" class="img-fluid">
                                        </div>
                                        <!-- Title -->
                                        <h6 class="card-title fs-sm lh-base mb-2">
                                            <a href="ecommerce-product-details" class="link-reset">Modern Minimalist Fabric Sofa Single Seater</a>
                                        </h6>

                                        <div>
                                            <span class="text-warning">
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-half-filled"></span>
                                                <span class="ti ti-star"></span>
                                            </span>
                                            <span class="ms-1"><a href="ecommerce-reviews" class="link-reset fw-semibold">(45)</a></span>
                                        </div>
                                    </div>

                                    <!-- Card footer -->
                                    <div class="card-footer bg-transparent d-flex justify-content-between">
                                        <div class="d-flex justify-content-start align-items-center gap-2">
                                            <h4 class="text-success d-flex align-items-center gap-2 mb-0">
                                                <span class="text-muted text-decoration-line-through">$899.00</span> $764.15
                                            </h4>
                                        </div>
                                        <a class="btn btn-sm btn-icon btn-primary" href="#!"><i class="ti ti-basket fs-lg"></i></a>
                                    </div>
                                </article>
                            </div> <!-- end col -->

                            <div class="col">
                                <article class="card h-100 mb-2">
                                    <!-- Badge -->
                                    <div class="badge text-bg-danger badge-label fs-base rounded position-absolute top-0 start-0 m-3">25% OFF</div>

                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="bg-light-subtle p-3 mb-3 border border-light rounded">
                                            <img src="/images/products/2.png" alt="funky-shoes" class="img-fluid">
                                        </div>
                                        <!-- Title -->
                                        <h6 class="card-title fs-sm lh-base mb-2">
                                            <a href="ecommerce-product-details" class="link-reset">Funky Streetwear Sneakers - Neon Splash</a>
                                        </h6>

                                        <div>
                                            <span class="text-warning">
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star"></span>
                                                <span class="ti ti-star"></span>
                                            </span>
                                            <span class="ms-1"><a href="ecommerce-reviews" class="link-reset fw-semibold">(32)</a></span>
                                        </div>
                                    </div>

                                    <!-- Card footer -->
                                    <div class="card-footer bg-transparent d-flex justify-content-between">
                                        <div class="d-flex justify-content-start align-items-center gap-2">
                                            <h4 class="text-danger d-flex align-items-center gap-2 mb-0">
                                                <span class="text-muted text-decoration-line-through">$59.99</span> $44.99
                                            </h4>
                                        </div>
                                        <a class="btn btn-sm btn-icon btn-primary" href="#!"><i class="ti ti-basket fs-lg"></i></a>
                                    </div>
                                </article>
                            </div> <!-- end col -->

                            <div class="col">
                                <article class="card h-100 mb-2">
                                    <!-- Badge -->
                                    <div class="badge text-bg-danger badge-label fs-base rounded position-absolute top-0 start-0 m-3">15% OFF</div>

                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="bg-light-subtle p-3 mb-3 border border-light rounded">
                                            <img src="/images/products/3.png" alt="earbuds" class="img-fluid">
                                        </div>
                                        <!-- Title -->
                                        <h6 class="card-title fs-sm lh-base mb-2">
                                            <a href="ecommerce-product-details" class="link-reset">Noise Canceling Wireless Earbuds - Black Edition</a>
                                        </h6>

                                        <div>
                                            <span class="text-warning">
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star"></span>
                                                <span class="ti ti-star"></span>
                                            </span>
                                            <span class="ms-1"><a href="ecommerce-reviews" class="link-reset fw-semibold">(58)</a></span>
                                        </div>
                                    </div>

                                    <!-- Card footer -->
                                    <div class="card-footer bg-transparent d-flex justify-content-between">
                                        <div class="d-flex justify-content-start align-items-center gap-2">
                                            <h4 class="text-danger d-flex align-items-center gap-2 mb-0">
                                                <span class="text-muted text-decoration-line-through">$49.99</span> $42.49
                                            </h4>
                                        </div>
                                        <a class="btn btn-sm btn-icon btn-primary" href="#!"><i class="ti ti-basket fs-lg"></i></a>
                                    </div>
                                </article>
                            </div> <!-- end col -->

                            <div class="col">
                                <article class="card h-100 mb-2">
                                    <!-- Badge -->
                                    <div class="badge text-bg-danger badge-label fs-base rounded position-absolute top-0 start-0 m-3">20% OFF</div>

                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="bg-light-subtle p-3 mb-3 border border-light rounded">
                                            <img src="/images/products/4.png" alt="wooden-chair" class="img-fluid">
                                        </div>
                                        <!-- Title -->
                                        <h6 class="card-title fs-sm lh-base mb-2">
                                            <a href="ecommerce-product-details" class="link-reset">Minimalist Solid Wood Dining Chair</a>
                                        </h6>

                                        <div>
                                            <span class="text-warning">
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-half-filled"></span>
                                                <span class="ti ti-star"></span>
                                            </span>
                                            <span class="ms-1"><a href="ecommerce-reviews" class="link-reset fw-semibold">(46)</a></span>
                                        </div>
                                    </div>

                                    <!-- Card footer -->
                                    <div class="card-footer bg-transparent d-flex justify-content-between">
                                        <div class="d-flex justify-content-start align-items-center gap-2">
                                            <h4 class="text-danger d-flex align-items-center gap-2 mb-0">
                                                <span class="text-muted text-decoration-line-through">$120.00</span> $96.00
                                            </h4>
                                        </div>
                                        <a class="btn btn-sm btn-icon btn-primary" href="#!"><i class="ti ti-basket fs-lg"></i></a>
                                    </div>
                                </article>
                            </div> <!-- end col -->

                            <div class="col">
                                <article class="card h-100 mb-2">
                                    <!-- Badge -->
                                    <div class="badge text-bg-danger badge-label fs-base rounded position-absolute top-0 start-0 m-3">20% OFF</div>

                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="bg-light-subtle p-3 mb-3 border border-light rounded">
                                            <img src="/images/products/5.png" alt="black-wall-watch" class="img-fluid">
                                        </div>
                                        <!-- Title -->
                                        <h6 class="card-title fs-sm lh-base mb-2">
                                            <a href="ecommerce-product-details" class="link-reset">Modern Black Minimalist Wall Clock</a>
                                        </h6>

                                        <div>
                                            <span class="text-warning">
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star"></span>
                                            </span>
                                            <span class="ms-1"><a href="ecommerce-reviews" class="link-reset fw-semibold">(62)</a></span>
                                        </div>
                                    </div>

                                    <!-- Card footer -->
                                    <div class="card-footer bg-transparent d-flex justify-content-between">
                                        <div class="d-flex justify-content-start align-items-center gap-2">
                                            <h4 class="text-danger d-flex align-items-center gap-2 mb-0">
                                                <span class="text-muted text-decoration-line-through">$49.99</span> $39.99
                                            </h4>
                                        </div>
                                        <a class="btn btn-sm btn-icon btn-primary" href="#!"><i class="ti ti-basket fs-lg"></i></a>
                                    </div>
                                </article>
                            </div> <!-- end col -->

                            <div class="col">
                                <article class="card h-100 mb-2">
                                    <!-- Badge -->
                                    <div class="badge text-bg-danger badge-label fs-base rounded position-absolute top-0 start-0 m-3">20% OFF</div>

                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="bg-light-subtle p-3 mb-3 border border-light rounded">
                                            <img src="/images/products/6.png" alt="brown-chair" class="img-fluid">
                                        </div>
                                        <!-- Title -->
                                        <h6 class="card-title fs-sm lh-base mb-2">
                                            <a href="ecommerce-product-details" class="link-reset">Elegant Brown Wooden Chair</a>
                                        </h6>

                                        <div>
                                            <span class="text-warning">
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star"></span>
                                            </span>
                                            <span class="ms-1"><a href="ecommerce-reviews" class="link-reset fw-semibold">(48)</a></span>
                                        </div>
                                    </div>

                                    <!-- Card footer -->
                                    <div class="card-footer bg-transparent d-flex justify-content-between">
                                        <div class="d-flex justify-content-start align-items-center gap-2">
                                            <h4 class="text-danger d-flex align-items-center gap-2 mb-0">
                                                <span class="text-muted text-decoration-line-through">$120.00</span> $96.00
                                            </h4>
                                        </div>
                                        <a class="btn btn-sm btn-icon btn-primary" href="#!"><i class="ti ti-basket fs-lg"></i></a>
                                    </div>
                                </article>
                            </div> <!-- end col -->

                            <div class="col">
                                <article class="card h-100 mb-2">
                                    <!-- Badge -->
                                    <div class="badge text-bg-danger badge-label fs-base rounded position-absolute top-0 start-0 m-3">20% OFF</div>

                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="bg-light-subtle p-3 mb-3 border border-light rounded">
                                            <img src="/images/products/7.png" alt="imac" class="img-fluid">
                                        </div>
                                        <!-- Title -->
                                        <h6 class="card-title fs-sm lh-base mb-2">
                                            <a href="ecommerce-product-details" class="link-reset">Apple iMac 24" Retina 4.5K Display</a>
                                        </h6>

                                        <div>
                                            <span class="text-warning">
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-half"></span>
                                            </span>
                                            <span class="ms-1"><a href="ecommerce-reviews" class="link-reset fw-semibold">(65)</a></span>
                                        </div>
                                    </div>

                                    <!-- Card footer -->
                                    <div class="card-footer bg-transparent d-flex justify-content-between">
                                        <div class="d-flex justify-content-start align-items-center gap-2">
                                            <h4 class="text-danger d-flex align-items-center gap-2 mb-0">
                                                <span class="text-muted text-decoration-line-through">$1,299.00</span> $1,039.20
                                            </h4>
                                        </div>
                                        <a class="btn btn-sm btn-icon btn-primary" href="#!"><i class="ti ti-basket fs-lg"></i></a>
                                    </div>
                                </article>
                            </div> <!-- end col -->

                            <div class="col">
                                <article class="card h-100 mb-2">
                                    <!-- Badge -->
                                    <div class="badge text-bg-danger badge-label fs-base rounded position-absolute top-0 start-0 m-3">20% OFF</div>

                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="bg-light-subtle p-3 mb-3 border border-light rounded">
                                            <img src="/images/products/8.png" alt="coolest-chair" class="img-fluid">
                                        </div>
                                        <!-- Title -->
                                        <h6 class="card-title fs-sm lh-base mb-2">
                                            <a href="ecommerce-product-details" class="link-reset">Coolest Ergonomic Lounge Chair</a>
                                        </h6>

                                        <div>
                                            <span class="text-warning">
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star"></span>
                                            </span>
                                            <span class="ms-1"><a href="ecommerce-reviews" class="link-reset fw-semibold">(52)</a></span>
                                        </div>
                                    </div>

                                    <!-- Card footer -->
                                    <div class="card-footer bg-transparent d-flex justify-content-between">
                                        <div class="d-flex justify-content-start align-items-center gap-2">
                                            <h4 class="text-danger d-flex align-items-center gap-2 mb-0">
                                                <span class="text-muted text-decoration-line-through">$320.00</span> $256.00
                                            </h4>
                                        </div>
                                        <a class="btn btn-sm btn-icon btn-primary" href="#!"><i class="ti ti-basket fs-lg"></i></a>
                                    </div>
                                </article>
                            </div> <!-- end col -->

                            <div class="col">
                                <article class="card h-100 mb-2 d-none d-lg-block d-xxl-none">
                                    <!-- Badge -->
                                    <div class="badge text-bg-danger badge-label fs-base rounded position-absolute top-0 start-0 m-3">20% OFF</div>

                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="bg-light-subtle p-3 mb-3 border border-light rounded">
                                            <img src="/images/products/9.png" alt="ipad" class="img-fluid">
                                        </div>
                                        <!-- Title -->
                                        <h6 class="card-title fs-sm lh-base mb-2">
                                            <a href="ecommerce-product-details" class="link-reset">Apple iPad 10.9" Wi-Fi 64GB - Silver</a>
                                        </h6>

                                        <div>
                                            <span class="text-warning">
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star"></span>
                                            </span>
                                            <span class="ms-1"><a href="ecommerce-reviews" class="link-reset fw-semibold">(142)</a></span>
                                        </div>
                                    </div>

                                    <!-- Card footer -->
                                    <div class="card-footer bg-transparent d-flex justify-content-between">
                                        <div class="d-flex justify-content-start align-items-center gap-2">
                                            <h4 class="text-danger d-flex align-items-center gap-2 mb-0">
                                                <span class="text-muted text-decoration-line-through">$449.00</span> $359.20
                                            </h4>
                                        </div>
                                        <a class="btn btn-sm btn-icon btn-primary" href="#!"><i class="ti ti-basket fs-lg"></i></a>
                                    </div>
                                </article>
                            </div> <!-- end col -->
                        </div> <!-- end row-->

                        <div class="d-flex justify-content-between align-items-center mb-4 mt-3">
                            <span class="text-muted fst-italic">Last modification: <i class="ti ti-clock"></i> 4:55 pm - 22.04.2025</span>
                            <ul class="pagination pagination-boxed mb-0 justify-content-center">
                                <li class="page-item disabled"><a href="#" class="page-link"><i class="ti ti-chevrons-left"></i></a></li>
                                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a href="#" class="page-link"><i class="ti ti-chevrons-right"></i></a></li>
                            </ul>
                        </div>

                    </div> <!-- end col-9-->
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

    <!-- noUiSlider js -->
    <script src="/plugins/nouislider/nouislider.min.js"></script>

    <!-- Eommerce Products Page Js -->
    <script src="/js/pages/ecommerce-products.js"></script>

</body>

</html>