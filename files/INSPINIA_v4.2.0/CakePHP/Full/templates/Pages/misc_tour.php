<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Tour']) ?>

    <!-- Ladda style -->
    <link href="/plugins/tourguidejs/tour.min.css" rel="stylesheet">

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

                <?= $this->element('page_title', ['subtitle' => 'Miscellaneous', 'title' => 'Tour']) ?>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5">
                                            <div class="text-center mt-4 mb-5">
                                                <div class="auth-brand text-center mb-4">
                                                    <a href="/" class="logo-dark">
                                                        <img src="/images/logo-black.png" alt="dark logo" height="32">
                                                    </a>
                                                    <a href="/" class="logo-light">
                                                        <img src="/images/logo.png" alt="logo" height="32">
                                                    </a>
                                                </div>

                                                <h5 class="fs-lg mb-2">Powerful & Flexible Admin Panel Template</h5>
                                                <p class="text-muted fs-sm">
                                                    Our admin panel provides a robust foundation for modern web apps. With support for multiple frameworks and over a dozen demo variations, developers can build exactly what they need, fast and easily. Customize with ease and enjoy consistent UI across projects.
                                                </p>

                                                <!-- Buttons -->
                                                <div class="d-flex justify-content-center mt-4 flex-wrap gap-2">
                                                    <button id="tourTrigger" onclick="startTour()" class="btn btn-primary">
                                                        <i class="ti ti-player-play me-1"></i> Start Tour
                                                    </button>

                                                    <a href="#" class="btn btn-dark" data-tg-order="1" data-tg-tour="Click here to get started and explore our framework-rich admin panel. 🚀" data-tg-title="Getting Started">
                                                        <i class="ti ti-compass me-1"></i> Explore Features
                                                    </a>

                                                    <a href="https://wrapbootstrap.com/theme/inspinia-multipurpose-admin-dashboard-template-WB0R5L90S?ref=inspinia" target="_blank" class="btn btn-danger" data-tg-order="2" data-tg-tour="Ready to supercharge your project? Click here to purchase the template!" data-tg-title="Buy Now">
                                                        <i class="ti ti-shopping-cart me-1"></i> Buy Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->

                                    <div class="container" data-tg-order="3" data-tg-tour="Learn more about the versatile services and modules we provide to enhance development." data-tg-title="Core Features">
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <span class="text-muted rounded-3 d-inline-block">🚀 Empowering your digital journey</span>
                                                <h3 class="mt-3 fw-bold mb-5">Framework <mark>Support & Core</mark> Features</h3>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xl-3">
                                                <div class="card border-0 p-2 card-h-100">
                                                    <div class="card-body pb-0">
                                                        <div class="avatar-xl mb-3">
                                                            <span class="avatar-title text-bg-secondary rounded-circle fs-22">
                                                                <i class="ti ti-device-desktop"></i>
                                                            </span>
                                                        </div>
                                                        <h4 class="fw-semibold mb-2">Multiple Frameworks</h4>
                                                        <p class="text-muted mb-3">Support for Bootstrap, Tailwind, React, Vue, Angular, Laravel, and more — use what suits your stack.</p>
                                                    </div>
                                                    <div class="card-footer border-0 pt-0">
                                                        <a class="link-primary fw-semibold" href="#">Know more<i class="ti ti-arrow-right ms-2 align-middle"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-3">
                                                <div class="card border-0 p-2 card-h-100">
                                                    <div class="card-body pb-0">
                                                        <div class="avatar-xl mb-3">
                                                            <span class="avatar-title text-bg-secondary rounded-circle fs-22">
                                                                <i class="ti ti-layout"></i>
                                                            </span>
                                                        </div>
                                                        <h4 class="fw-semibold mb-2">Multiple Demos</h4>
                                                        <p class="text-muted mb-3">Choose from a variety of pre-built demos to match your use case — from CRM to SaaS dashboards.</p>
                                                    </div>
                                                    <div class="card-footer border-0 pt-0">
                                                        <a class="link-primary fw-semibold" href="#">Know more<i class="ti ti-arrow-right ms-2 align-middle"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-3">
                                                <div class="card border-0 p-2 card-h-100">
                                                    <div class="card-body pb-0">
                                                        <div class="avatar-xl mb-3">
                                                            <span class="avatar-title text-bg-secondary rounded-circle fs-22">
                                                                <i class="ti ti-brush"></i>
                                                            </span>
                                                        </div>
                                                        <h4 class="fw-semibold mb-2">Customizable UI</h4>
                                                        <p class="text-muted mb-3">Easily tailor colors, layouts, and components to match your branding and requirements.</p>
                                                    </div>
                                                    <div class="card-footer border-0 pt-0">
                                                        <a class="link-primary fw-semibold" href="#">Know more<i class="ti ti-arrow-right ms-2 align-middle"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-3">
                                                <div class="card border-0 p-2 card-h-100">
                                                    <div class="card-body pb-0">
                                                        <div class="avatar-xl mb-3">
                                                            <span class="avatar-title text-bg-secondary rounded-circle fs-22">
                                                                <i class="ti ti-rocket"></i>
                                                            </span>
                                                        </div>
                                                        <h4 class="fw-semibold mb-2">High Performance</h4>
                                                        <p class="text-muted mb-3">Optimized for speed and efficiency, our admin panel ensures a seamless experience for developers and users alike.</p>
                                                    </div>
                                                    <div class="card-footer border-0 pt-0">
                                                        <a class="link-primary fw-semibold" href="#">Know more<i class="ti ti-arrow-right ms-2 align-middle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end container -->

                                    <div class="text-center my-4">
                                        <button class="btn btn-success" id="thankyou-tour" data-tg-order="7" data-tg-tour="<p>Thanks for exploring! Read the documentation to get the most out of this template.</p>" data-tg-title="Documentation">
                                            <i class="ti ti-file-dots me-1"></i> Documentation
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card-body -->

                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            <?= $this->element('footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?= $this->element('customizer') ?>

    <?= $this->element('footer_scripts') ?>

    <!-- Tour Plugin Js-->
    <script src="/plugins/tourguidejs/tour.js"></script>

    <!-- Tour Page Js-->
    <script src="/js/pages/misc-tour.js"></script>

</body>

</html>