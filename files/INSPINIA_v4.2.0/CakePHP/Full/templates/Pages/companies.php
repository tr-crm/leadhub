<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Companies']) ?>

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

                <?= $this->element('page_title', ['subtitle' => 'Apps', 'title' => 'Companies']) ?>

                <div class="row mb-3">
                    <div class="col-lg-12">
                        <form class="bg-light-subtle rounded border p-3">
                            <div class="row gap-3">
                                <div class="col">
                                    <div class="row gap-3">
                                        <div class="col-lg-4">
                                            <div class="app-search">
                                                <input type="text" class="form-control" placeholder="Search company name...">
                                                <i data-lucide="search" class="app-search-icon text-muted"></i>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="me-2 fw-semibold">Filter By:</span>

                                                <!-- Location Filter -->
                                                <div class="app-search">
                                                    <select class="form-select form-control my-1 my-md-0">
                                                        <option selected>Location</option>
                                                        <option value="USA">USA</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="India">India</option>
                                                        <option value="UK">United Kingdom</option>
                                                    </select>
                                                    <i data-lucide="map-pin" class="app-search-icon text-muted"></i>
                                                </div>

                                                <!-- Category Filter -->
                                                <div class="app-search">
                                                    <select class="form-select form-control my-1 my-md-0">
                                                        <option selected>Category</option>
                                                        <option value="Tech">Tech</option>
                                                        <option value="Finance">Finance</option>
                                                        <option value="eCommerce">eCommerce</option>
                                                        <option value="Healthcare">Healthcare</option>
                                                        <option value="Automotive">Automotive</option>
                                                    </select>
                                                    <i data-lucide="briefcase" class="app-search-icon text-muted"></i>
                                                </div>

                                                <!-- Rating Filter -->
                                                <div class="app-search">
                                                    <select class="form-select form-control my-1 my-md-0">
                                                        <option selected>Rating</option>
                                                        <option value="5">5 Stars</option>
                                                        <option value="4">4 Stars & Up</option>
                                                        <option value="3">3 Stars & Up</option>
                                                        <option value="2">2 Stars & Up</option>
                                                        <option value="1">1 Star & Up</option>
                                                    </select>
                                                    <i data-lucide="star" class="app-search-icon text-muted"></i>
                                                </div>

                                                <button type="submit" class="btn btn-secondary">Apply</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Layout toggle (grid/list) -->
                                <div class="col-auto">
                                    <div role="group" aria-label="Layout toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked>
                                        <label class="btn btn-soft-primary btn-icon" for="btnradio1">
                                            <i data-lucide="layout-grid" class="fs-lg"></i>
                                        </label>

                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                        <label class="btn btn-soft-primary btn-icon" for="btnradio2">
                                            <i data-lucide="list" class="fs-lg"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="card d-flex flex-row p-3">
                            <img src="/images/logos/amazon.svg" alt="Amazon Logo" class="avatar-xl me-3">

                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h4 class="mb-1 fw-bold">Amazon Inc.</h4>
                                        <a href="https://www.amazon.com" class="text-muted text-decoration-none">www.amazon.com</a>
                                    </div>
                                    <a href="#!" class="btn btn-sm btn-outline-danger rounded-pill">
                                        <i class="ti ti-heart me-1"></i> Follow
                                    </a>
                                </div>

                                <div class="mt-2 mb-3 d-flex flex-wrap gap-2">
                                    <span class="badge bg-light text-primary p-1 fs-xxs"><i class="ti ti-map-pin me-1"></i>Seattle, WA</span>
                                    <span class="badge bg-light text-success p-1 fs-xxs"><i class="ti ti-shopping-cart me-1"></i>eCommerce</span>
                                </div>

                                <p class="text-muted mb-3">
                                    Amazon.com, Inc. is an American multinational technology company focusing on e-commerce, cloud computing, and digital streaming.
                                </p>

                                <div class="d-flex justify-content-between flex-wrap mt-2 gap-3">
                                    <div>
                                        <h6 class="text-muted">Employees</h6>
                                        <span class="fw-semibold fs-lg">1.5M+</span>
                                    </div>
                                    <div>
                                        <h6 class="text-muted">Revenue</h6>
                                        <span class="fw-semibold fs-lg">$514B</span>
                                    </div>
                                    <div class="text-warning align-self-center fs-lg">
                                        <i class="ti ti-star-filled"></i>
                                        <i class="ti ti-star-filled"></i>
                                        <i class="ti ti-star-filled"></i>
                                        <i class="ti ti-star-filled"></i>
                                        <i class="ti ti-star"></i>
                                    </div>
                                </div>
                            </div> <!-- end .d-flex-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <!-- Apple -->
                    <div class="col-xl-4 col-md-6">
                        <div class="card d-flex flex-row p-3">
                            <img src="/images/logos/apple.svg" alt="Apple Logo" class="avatar-xl me-3">
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h4 class="mb-1 fw-bold">Apple Inc.</h4>
                                        <a href="https://www.apple.com" class="text-muted text-decoration-none">www.apple.com</a>
                                    </div>
                                    <a href="#!" class="btn btn-sm btn-outline-danger rounded-pill">
                                        <i class="ti ti-heart me-1"></i> Follow
                                    </a>
                                </div>
                                <div class="mt-2 mb-3 d-flex flex-wrap gap-2">
                                    <span class="badge bg-light text-primary p-1 fs-xxs"><i class="ti ti-map-pin me-1"></i>Cupertino, CA</span>
                                    <span class="badge bg-light text-success p-1 fs-xxs"><i class="ti ti-device-mobile me-1"></i>Tech</span>
                                </div>
                                <p class="text-muted mb-3">Apple Inc. designs, manufactures, and markets smartphones, personal computers, tablets, and accessories.</p>
                                <div class="d-flex justify-content-between flex-wrap mt-2 gap-3">
                                    <div>
                                        <h6 class="text-muted">Employees</h6>
                                        <span class="fw-semibold fs-lg">160K+</span>
                                    </div>
                                    <div>
                                        <h6 class="text-muted">Revenue</h6>
                                        <span class="fw-semibold fs-lg">$383B</span>
                                    </div>
                                    <div class="text-warning align-self-center fs-lg">
                                        <i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Walmart -->
                    <div class="col-xl-4 col-md-6">
                        <div class="card d-flex flex-row p-3">
                            <img src="/images/logos/walmart.svg" alt="Walmart Logo" class="avatar-xl me-3">
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h4 class="mb-1 fw-bold">Walmart Inc.</h4>
                                        <a href="https://www.walmart.com" class="text-muted text-decoration-none">www.walmart.com</a>
                                    </div>
                                    <a href="#!" class="btn btn-sm btn-outline-danger rounded-pill">
                                        <i class="ti ti-heart me-1"></i> Follow
                                    </a>
                                </div>
                                <div class="mt-2 mb-3 d-flex flex-wrap gap-2">
                                    <span class="badge bg-light text-primary p-1 fs-xxs"><i class="ti ti-map-pin me-1"></i>Bentonville, AR</span>
                                    <span class="badge bg-light text-success p-1 fs-xxs"><i class="ti ti-building-store me-1"></i>Retail</span>
                                </div>
                                <p class="text-muted mb-3">Walmart operates a chain of hypermarkets, discount department stores, and grocery stores worldwide.</p>
                                <div class="d-flex justify-content-between flex-wrap mt-2 gap-3">
                                    <div>
                                        <h6 class="text-muted">Employees</h6>
                                        <span class="fw-semibold fs-lg">2.1M+</span>
                                    </div>
                                    <div>
                                        <h6 class="text-muted">Revenue</h6>
                                        <span class="fw-semibold fs-lg">$611B</span>
                                    </div>
                                    <div class="text-warning align-self-center fs-lg">
                                        <i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star"></i><i class="ti ti-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Starbucks -->
                    <div class="col-xl-4 col-md-6">
                        <div class="card d-flex flex-row align-items-center p-3">
                            <img src="/images/logos/starbucks.svg" alt="Starbucks Logo" class="avatar-xl me-3">
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h4 class="mb-1 fw-bold">Starbucks</h4>
                                        <a href="https://www.starbucks.com" class="text-muted text-decoration-none">www.starbucks.com</a>
                                    </div>
                                    <a href="#!" class="btn btn-sm btn-outline-danger rounded-pill">
                                        <i class="ti ti-heart me-1"></i> Follow
                                    </a>
                                </div>
                                <div class="mt-2 mb-3 d-flex flex-wrap gap-2">
                                    <span class="badge bg-light text-primary p-1 fs-xxs"><i class="ti ti-map-pin me-1"></i>Seattle, WA</span>
                                    <span class="badge bg-light text-success p-1 fs-xxs"><i class="ti ti-coffee me-1"></i>Food & Beverage</span>
                                </div>
                                <p class="text-muted mb-3">Starbucks is a multinational chain of coffeehouses and roastery reserves headquartered in Seattle, Washington.</p>
                                <div class="d-flex justify-content-between flex-wrap mt-2 gap-3">
                                    <div>
                                        <h6 class="text-muted">Employees</h6>
                                        <span class="fw-semibold fs-lg">400K+</span>
                                    </div>
                                    <div>
                                        <h6 class="text-muted">Revenue</h6>
                                        <span class="fw-semibold fs-lg">$36B</span>
                                    </div>
                                    <div class="text-warning align-self-center fs-lg">
                                        <i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star"></i><i class="ti ti-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Meta -->
                    <div class="col-xl-4 col-md-6">
                        <div class="card d-flex flex-row align-items-center p-3">
                            <img src="/images/logos/meta.svg" alt="Meta Logo" class="avatar-xl me-3">
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h4 class="mb-1 fw-bold">Meta Platforms</h4>
                                        <a href="https://about.meta.com" class="text-muted text-decoration-none">about.meta.com</a>
                                    </div>
                                    <a href="#!" class="btn btn-sm btn-outline-danger rounded-pill">
                                        <i class="ti ti-heart me-1"></i> Follow
                                    </a>
                                </div>
                                <div class="mt-2 mb-3 d-flex flex-wrap gap-2">
                                    <span class="badge bg-light text-primary p-1 fs-xxs"><i class="ti ti-map-pin me-1"></i>Menlo Park, CA</span>
                                    <span class="badge bg-light text-success p-1 fs-xxs"><i class="ti ti-network me-1"></i>Tech</span>
                                </div>
                                <p class="text-muted mb-3">Meta develops social media platforms and technologies including Facebook, Instagram, and the Metaverse.</p>
                                <div class="d-flex justify-content-between flex-wrap mt-2 gap-3">
                                    <div>
                                        <h6 class="text-muted">Employees</h6>
                                        <span class="fw-semibold fs-lg">86K+</span>
                                    </div>
                                    <div>
                                        <h6 class="text-muted">Revenue</h6>
                                        <span class="fw-semibold fs-lg">$117B</span>
                                    </div>
                                    <div class="text-warning align-self-center fs-lg">
                                        <i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Spotify -->
                    <div class="col-xl-4 col-md-6">
                        <div class="card d-flex flex-row align-items-center p-3">
                            <img src="/images/logos/spotify.svg" alt="Spotify Logo" class="avatar-xl me-3">
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h4 class="mb-1 fw-bold">Spotify</h4>
                                        <a href="https://www.spotify.com" class="text-muted text-decoration-none">www.spotify.com</a>
                                    </div>
                                    <a href="#!" class="btn btn-sm btn-outline-danger rounded-pill">
                                        <i class="ti ti-heart me-1"></i> Follow
                                    </a>
                                </div>
                                <div class="mt-2 mb-3 d-flex flex-wrap gap-2">
                                    <span class="badge bg-light text-primary p-1 fs-xxs"><i class="ti ti-map-pin me-1"></i>Stockholm, Sweden</span>
                                    <span class="badge bg-light text-success p-1 fs-xxs"><i class="ti ti-music me-1"></i>Entertainment</span>
                                </div>
                                <p class="text-muted mb-3">Spotify is a digital music, podcast, and video streaming service with millions of active users worldwide.</p>
                                <div class="d-flex justify-content-between flex-wrap mt-2 gap-3">
                                    <div>
                                        <h6 class="text-muted">Employees</h6>
                                        <span class="fw-semibold fs-lg">8K+</span>
                                    </div>
                                    <div>
                                        <h6 class="text-muted">Revenue</h6>
                                        <span class="fw-semibold fs-lg">$13B</span>
                                    </div>
                                    <div class="text-warning align-self-center fs-lg">
                                        <i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star"></i><i class="ti ti-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Google -->
                    <div class="col-xl-4 col-md-6">
                        <div class="card d-flex flex-row align-items-center p-3">
                            <img src="/images/logos/google.svg" alt="Google Logo" class="avatar-xl me-3">
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h4 class="mb-1 fw-bold">Google LLC</h4>
                                        <a href="https://www.google.com" class="text-muted text-decoration-none">www.google.com</a>
                                    </div>
                                    <a href="#!" class="btn btn-sm btn-outline-danger rounded-pill">
                                        <i class="ti ti-heart me-1"></i> Follow
                                    </a>
                                </div>
                                <div class="mt-2 mb-3 d-flex flex-wrap gap-2">
                                    <span class="badge bg-light text-primary p-1 fs-xxs"><i class="ti ti-map-pin me-1"></i>Mountain View, CA</span>
                                    <span class="badge bg-light text-success p-1 fs-xxs"><i class="ti ti-world me-1"></i>Tech</span>
                                </div>
                                <p class="text-muted mb-3">Google specializes in internet-related services and products, including search, ads, cloud, and more.</p>
                                <div class="d-flex justify-content-between flex-wrap mt-2 gap-3">
                                    <div>
                                        <h6 class="text-muted">Employees</h6>
                                        <span class="fw-semibold fs-lg">180K+</span>
                                    </div>
                                    <div>
                                        <h6 class="text-muted">Revenue</h6>
                                        <span class="fw-semibold fs-lg">$324B</span>
                                    </div>
                                    <div class="text-warning align-self-center fs-lg">
                                        <i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Airbnb -->
                    <div class="col-xl-4 col-md-6">
                        <div class="card d-flex flex-row align-items-center p-3">
                            <img src="/images/logos/airbnb.svg" alt="Airbnb Logo" class="avatar-xl me-3">
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h4 class="mb-1 fw-bold">Airbnb</h4>
                                        <a href="https://www.airbnb.com" class="text-muted text-decoration-none">www.airbnb.com</a>
                                    </div>
                                    <a href="#!" class="btn btn-sm btn-outline-danger rounded-pill">
                                        <i class="ti ti-heart me-1"></i> Follow
                                    </a>
                                </div>
                                <div class="mt-2 mb-3 d-flex flex-wrap gap-2">
                                    <span class="badge bg-light text-primary p-1 fs-xxs"><i class="ti ti-map-pin me-1"></i>San Francisco, CA</span>
                                    <span class="badge bg-light text-success p-1 fs-xxs"><i class="ti ti-home me-1"></i>Hospitality</span>
                                </div>
                                <p class="text-muted mb-3">Airbnb is a global platform for lodging, primarily homestays for vacation rentals and tourism activities.</p>
                                <div class="d-flex justify-content-between flex-wrap mt-2 gap-3">
                                    <div>
                                        <h6 class="text-muted">Employees</h6>
                                        <span class="fw-semibold fs-lg">6K+</span>
                                    </div>
                                    <div>
                                        <h6 class="text-muted">Revenue</h6>
                                        <span class="fw-semibold fs-lg">$9.9B</span>
                                    </div>
                                    <div class="text-warning align-self-center fs-lg">
                                        <i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star"></i><i class="ti ti-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Shell -->
                    <div class="col-xl-4 col-md-6">
                        <div class="card d-flex flex-row align-items-center p-3">
                            <img src="/images/logos/shell.svg" alt="Shell Logo" class="avatar-xl me-3">
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h4 class="mb-1 fw-bold">Shell plc</h4>
                                        <a href="https://www.shell.com" class="text-muted text-decoration-none">www.shell.com</a>
                                    </div>
                                    <a href="#!" class="btn btn-sm btn-outline-danger rounded-pill">
                                        <i class="ti ti-heart me-1"></i> Follow
                                    </a>
                                </div>
                                <div class="mt-2 mb-3 d-flex flex-wrap gap-2">
                                    <span class="badge bg-light text-primary p-1 fs-xxs"><i class="ti ti-map-pin me-1"></i>London, UK</span>
                                    <span class="badge bg-light text-success p-1 fs-xxs"><i class="ti ti-gas-station me-1"></i>Energy</span>
                                </div>
                                <p class="text-muted mb-3">Shell is a global energy and petrochemical company focused on oil, gas, and renewable energy solutions.</p>
                                <div class="d-flex justify-content-between flex-wrap mt-2 gap-3">
                                    <div>
                                        <h6 class="text-muted">Employees</h6>
                                        <span class="fw-semibold fs-lg">90K+</span>
                                    </div>
                                    <div>
                                        <h6 class="text-muted">Revenue</h6>
                                        <span class="fw-semibold fs-lg">$381B</span>
                                    </div>
                                    <div class="text-warning align-self-center fs-lg">
                                        <i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star"></i><i class="ti ti-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row-->

                <ul class="pagination pagination-rounded pagination-boxed justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="javascript: void(0);" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>

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

</body>

</html>