<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Gallery']) ?>

    <!-- glightbox css -->
    <link href="/plugins/glightbox/glightbox.min.css" rel="stylesheet">

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

                <?= $this->element('page_title', ['subtitle' => 'Miscellaneous', 'title' => 'Gallery']) ?>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header flex-wrap justify-content-between w-100 gap-3">
                                <!-- Search -->
                                <div class="flex-grow-1">
                                    <div class="app-search">
                                        <input type="search" class="form-control topbar-search" name="search" placeholder="Search ...">
                                        <i data-lucide="search" class="app-search-icon text-muted"></i>
                                    </div>
                                </div>

                                <!-- Filter -->
                                <div class="d-flex flex-wrap gap-1 filter-buttons">
                                    <button class="btn btn-sm btn-ghost-primary active" data-filter="">All</button>
                                    <button class="btn btn-sm btn-ghost-primary" data-filter="beautiful">Beautiful</button>
                                    <button class="btn btn-sm btn-ghost-primary" data-filter="nature">Nature</button>
                                    <button class="btn btn-sm btn-ghost-primary" data-filter="travel">Travel</button>
                                    <button class="btn btn-sm btn-ghost-primary" data-filter="city">City</button>
                                </div>
                            </div>

                            <div class="card-body">
                                <!-- Grid -->
                                <div class="row row-cols-xxl-5 row-cols-lg-4 row-cols-md-3 g-2 row-cols-1 position-relative" id="grid">
                                    <div class="col position-absolute" data-category="beautiful">
                                        <div class="card border-0 mb-0">
                                            <div class="badge text-bg-dark badge-label position-absolute top-0 start-0 m-3 z-1">beautiful</div>
                                            <a class="image-popup" href="/images/gallery/1.jpg">
                                                <img class="card-img rounded-2" src="/images/gallery/1.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col position-absolute" data-category="nature">
                                        <div class="card border-0 mb-0">
                                            <div class="badge text-bg-danger badge-label position-absolute top-0 start-0 m-3 z-1">Health</div>
                                            <a class="image-popup" href="/images/gallery/2.jpg">
                                                <img class="card-img rounded-2" src="/images/gallery/2.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col position-absolute" data-category="beautiful">
                                        <div class="card border-0 mb-0">
                                            <div class="badge text-bg-primary badge-label position-absolute top-0 start-0 m-3 z-1">Travel</div>
                                            <a class="image-popup" href="/images/gallery/3.jpg">
                                                <img class="card-img rounded-2" src="/images/gallery/3.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col position-absolute" data-category="nature">
                                        <div class="card border-0 mb-0">
                                            <div class="badge text-bg-warning badge-label position-absolute top-0 start-0 m-3 z-1">Sports</div>
                                            <a class="image-popup" href="/images/gallery/6.jpg">
                                                <img class="card-img rounded-2" src="/images/gallery/6.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col position-absolute" data-category="nature">
                                        <div class="card border-0 mb-0">
                                            <div class="badge text-bg-info badge-label position-absolute top-0 start-0 m-3 z-1">Business</div>
                                            <a class="image-popup" href="/images/gallery/4.jpg">
                                                <img class="card-img rounded-2" src="/images/gallery/4.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col position-absolute" data-category="travel">
                                        <div class="card border-0 mb-0">
                                            <div class="badge text-bg-success badge-label position-absolute top-0 start-0 m-3 z-1">Education</div>
                                            <a class="image-popup" href="/images/gallery/5.jpg">
                                                <img class="card-img rounded-2" src="/images/gallery/5.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>



                                    <div class="col position-absolute" data-category="city">
                                        <div class="card border-0 mb-0">
                                            <div class="badge text-bg-secondary badge-label position-absolute top-0 start-0 m-3 z-1">Fashion</div>
                                            <a class="image-popup" href="/images/gallery/7.jpg">
                                                <img class="card-img rounded-2" src="/images/gallery/7.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>



                                    <div class="col position-absolute" data-category="travel">
                                        <div class="card border-0 mb-0">
                                            <div class="badge text-bg-success badge-label position-absolute top-0 start-0 m-3 z-1">Food</div>
                                            <a class="image-popup" href="/images/gallery/9.jpg">
                                                <img class="card-img rounded-2" src="/images/gallery/9.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col position-absolute" data-category="beautiful">
                                        <div class="card border-0 mb-0">
                                            <div class="badge text-bg-danger badge-label position-absolute top-0 start-0 m-3 z-1">Entertainment</div>
                                            <a class="image-popup" href="/images/gallery/10.jpg">
                                                <img class="card-img rounded-2" src="/images/gallery/10.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>



                                    <div class="col position-absolute" data-category="nature">
                                        <div class="card border-0 mb-0">
                                            <div class="badge text-bg-warning badge-label position-absolute top-0 start-0 m-3 z-1">Sports</div>
                                            <a class="image-popup" href="/images/gallery/11.jpg">
                                                <img class="card-img rounded-2" src="/images/gallery/11.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col position-absolute" data-category="city">
                                        <div class="card border-0 mb-0">
                                            <div class="badge text-bg-secondary badge-label position-absolute top-0 start-0 m-3 z-1">Fashion</div>
                                            <a class="image-popup" href="/images/gallery/12.jpg">
                                                <img class="card-img rounded-2" src="/images/gallery/12.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col position-absolute" data-category="city">
                                        <div class="card border-0 mb-0">
                                            <div class="badge text-bg-light badge-label position-absolute top-0 start-0 m-3 z-1">Lifestyle</div>
                                            <a class="image-popup" href="/images/gallery/13.jpg">
                                                <img class="card-img rounded-2" src="/images/gallery/13.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col position-absolute" data-category="city">
                                        <div class="card border-0 mb-0">
                                            <div class="badge text-bg-light badge-label position-absolute top-0 start-0 m-3 z-1">Lifestyle</div>
                                            <a class="image-popup" href="/images/gallery/8.jpg">
                                                <img class="card-img rounded-2" src="/images/gallery/8.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col position-absolute" data-category="travel">
                                        <div class="card border-0 mb-0">
                                            <div class="badge text-bg-success badge-label position-absolute top-0 start-0 m-3 z-1">Food</div>
                                            <a class="image-popup" href="/images/gallery/14.jpg">
                                                <img class="card-img rounded-2" src="/images/gallery/14.jpg" alt="">
                                            </a>
                                        </div>
                                    </div> <!-- end col-->
                                </div> <!-- end row-->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
                <!-- end row -->

            </div> <!-- end container-->

            <?= $this->element('footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?= $this->element('customizer') ?>

    <?= $this->element('footer_scripts') ?>

    <!-- Glightbox Plugin Js -->
    <script src="/plugins/glightbox/glightbox.min.js"></script>

    <!-- Web travels Plugin Js -->
    <script src="/plugins/web-animations/web-animations.min.js"></script>

    <!-- Muuri Plugin Js -->
    <script src="/plugins/muuri/muuri.min.js"></script>

    <!-- Gallery Demo Js -->
    <script src="/js/pages/misc-gallery.js"></script>

</body>


</html>