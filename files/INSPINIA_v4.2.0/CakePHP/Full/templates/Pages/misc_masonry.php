<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Masonry']) ?>

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

                <?= $this->element('page_title', ['subtitle' => 'Miscellaneous', 'title' => 'Masonry']) ?>

                <div class="row" data-masonry='{"percentPosition": true }'>

                    <div class="col-xl-3 col-md-6">
                        <article class="card">
                            <!-- Card Body -->
                            <div class="card-body">

                                <!-- Title -->
                                <h6 class="card-title fs-lg lh-base mb-2">
                                    <a href="article" class="link-reset">Mastering Figma: 7 Pro Tips for Better UI Design</a>
                                </h6>
                                <p class="mb-3 text-muted">
                                    Unlock advanced techniques in Figma that can speed up your workflow and help you create pixel-perfect designs every time.
                                </p>

                                <div>
                                    <a href="#!" class="badge badge-label badge-default">Figma</a>
                                    <a href="#!" class="badge badge-label badge-default">UX</a>
                                    <a href="#!" class="badge badge-label badge-default">Tips</a>
                                </div>

                                <p class="d-flex flex-wrap gap-3 text-muted mb-0 mt-3 align-items-center fs-base">
                                    <span><i class="ti ti-calendar fs-md"></i> Jan 12, 2025</span>
                                    <span><i class="ti ti-message-circle fs-md"></i> <a href="#!" class="link-reset">89</a></span>
                                    <span><i class="ti ti-eye fs-md"></i> 1,284</span>
                                </p>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer bg-transparent d-flex justify-content-between">
                                <div class="d-flex justify-content-start align-items-center gap-2">
                                    <div class="avatar avatar-xs">
                                        <img src="/images/users/user-6.jpg" alt="avatar-6" class="img-fluid rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-nowrap fs-sm mb-0 lh-base">
                                            <a href="#!" class="link-reset">Emma Blake</a>
                                        </h5>
                                    </div>
                                </div>
                                <a class="link-primary fw-semibold" href="article">Read more <i class="ti ti-arrow-right"></i></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <article class="card">
                            <!-- Badge -->
                            <div class="badge text-bg-dark badge-label position-absolute top-0 start-0 m-3">Development</div>

                            <!-- Card image -->
                            <img class="card-img-top" src="/images/blog/blog-1.jpg" alt="Building APIs">

                            <!-- Card footer -->
                            <div class="card-footer bg-transparent d-flex justify-content-between">
                                <div class="d-flex justify-content-start align-items-center gap-2">
                                    <div class="avatar avatar-xs">
                                        <img src="/images/users/user-3.jpg" alt="avatar-3" class="img-fluid rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-nowrap fs-sm mb-0 lh-base">
                                            <a href="#!" class="link-reset">John Doe</a>
                                        </h5>
                                    </div>
                                </div>
                                <a class="link-primary fw-semibold" href="article">Read more <i class="ti ti-arrow-right"></i></a>
                            </div>
                        </article>
                    </div> <!-- end col-->
                    <div class="col-xl-3 col-md-6">
                        <article class="card bg-danger bg-gradient">
                            <!-- Card Body -->
                            <div class="card-body">
                                <!-- Badge -->
                                <div class="badge bg-white text-white bg-opacity-25 badge-label mb-3">Artificial Intelligence</div>

                                <!-- Title -->
                                <h6 class="card-title fs-lg lh-base mb-2">
                                    <a href="article" class="text-white">AI Breakthroughs to Watch in 2025</a>
                                </h6>
                                <p class="mb-3 text-white-50">
                                    Explore the game-changing AI innovations set to redefine industries and everyday life in the coming year.
                                </p>

                                <p class="d-flex flex-wrap gap-3 text-white-50 mb-0 mt-3 align-items-center fs-base">
                                    <span><i class="ti ti-calendar fs-md"></i> Feb 8, 2025</span>
                                    <span><i class="ti ti-message-circle fs-md"></i> <a href="#!" class="link-reset">102</a></span>
                                    <span><i class="ti ti-eye fs-md"></i> 1,542</span>
                                </p>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer bg-transparent d-flex justify-content-between border-light border-opacity-25">
                                <div class="d-flex justify-content-start align-items-center gap-2">
                                    <div class="avatar avatar-xs">
                                        <img src="/images/users/user-2.jpg" alt="avatar-2" class="img-fluid rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-nowrap fs-sm mb-0 lh-base">
                                            <a href="#!" class="text-white">Liam Carter</a>
                                        </h5>
                                    </div>
                                </div>
                                <a class="text-white fw-semibold" href="article">Read more <i class="ti ti-arrow-right"></i></a>
                            </div>
                        </article>

                    </div> <!-- end col-->
                    <div class="col-xl-3 col-md-6">
                        <article class="card">
                            <!-- Badge -->
                            <div class="badge text-bg-dark badge-label position-absolute top-0 start-0 m-3">Marketing</div>

                            <!-- Card image -->
                            <img class="card-img-top" src="/images/blog/blog-2.jpg" alt="SEO Strategies">

                            <!-- Card Body -->
                            <div class="card-body">
                                <!-- Title -->
                                <h6 class="card-title fs-lg lh-base mb-2">
                                    <a href="article" class="link-reset">SEO Strategies for 2025: How to Rank Higher</a>
                                </h6>
                                <p class="mb-3 text-muted">
                                    Boost your website's search engine ranking with these proven SEO techniques for 2025.
                                </p>

                                <div>
                                    <a href="#!" class="badge badge-label badge-default">SEO</a>
                                    <a href="#!" class="badge badge-label badge-default">Marketing</a>
                                    <a href="#!" class="badge badge-label badge-default">Growth</a>
                                </div>

                                <p class="d-flex flex-wrap gap-3 text-muted mb-0 mt-3 align-items-center fs-base">
                                    <span><i class="ti ti-calendar fs-md"></i> Jan 12, 2025</span>
                                    <span><i class="ti ti-message-circle fs-md"></i> <a href="#!" class="link-reset">89</a></span>
                                    <span><i class="ti ti-eye fs-md"></i> 1,284</span>
                                </p>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer bg-transparent d-flex justify-content-between">
                                <div class="d-flex justify-content-start align-items-center gap-2">
                                    <div class="avatar avatar-xs">
                                        <img src="/images/users/user-2.jpg" alt="avatar-2" class="img-fluid rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-nowrap fs-sm mb-0 lh-base">
                                            <a href="#!" class="link-reset">Sophie Green</a>
                                        </h5>
                                    </div>
                                </div>
                                <a class="link-primary fw-semibold" href="article">Read more <i class="ti ti-arrow-right"></i></a>
                            </div>
                        </article>
                    </div> <!-- end col-->
                    <div class="col-xl-3 col-md-6">
                        <article class="card">
                            <!-- Badge -->
                            <div class="badge text-bg-dark badge-label position-absolute top-0 start-0 m-3">Development</div>

                            <!-- Card image -->
                            <img class="card-img-top" src="/images/gallery/8.jpg" alt="Building APIs">

                            <!-- Card footer -->
                            <div class="card-footer bg-transparent d-flex justify-content-between">
                                <div class="d-flex justify-content-start align-items-center gap-2">
                                    <div class="avatar avatar-xs">
                                        <img src="/images/users/user-3.jpg" alt="avatar-3" class="img-fluid rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-nowrap fs-sm mb-0 lh-base">
                                            <a href="#!" class="link-reset">John Doe</a>
                                        </h5>
                                    </div>
                                </div>
                                <a class="link-primary fw-semibold" href="article">Read more <i class="ti ti-arrow-right"></i></a>
                            </div>
                        </article>
                    </div> <!-- end col-->
                    <div class="col-xl-3 col-md-6">
                        <article class="card">
                            <!-- Badge -->
                            <div class="badge text-bg-dark badge-label position-absolute top-0 start-0 m-3">Business</div>

                            <!-- Card image -->
                            <img class="card-img-top" src="/images/blog/blog-3.jpg" alt="Entrepreneur Tips">

                            <!-- Card Body -->
                            <div class="card-body">
                                <!-- Title -->
                                <h6 class="card-title fs-lg lh-base mb-2">
                                    <a href="article" class="link-reset">5 Key Tips for New Entrepreneurs</a>
                                </h6>
                                <p class="mb-3 text-muted">
                                    Start your entrepreneurial journey with these 5 essential tips that will guide you through the first year of business.
                                </p>

                                <div>
                                    <a href="#!" class="badge badge-label badge-default">Business</a>
                                    <a href="#!" class="badge badge-label badge-default">Entrepreneur</a>
                                    <a href="#!" class="badge badge-label badge-default">Startup</a>
                                </div>

                                <p class="d-flex flex-wrap gap-3 text-muted mb-0 mt-3 align-items-center fs-base">
                                    <span><i class="ti ti-calendar fs-md"></i> Jan 12, 2025</span>
                                    <span><i class="ti ti-message-circle fs-md"></i> <a href="#!" class="link-reset">89</a></span>
                                    <span><i class="ti ti-eye fs-md"></i> 1,284</span>
                                </p>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer bg-transparent d-flex justify-content-between">
                                <div class="d-flex justify-content-start align-items-center gap-2">
                                    <div class="avatar avatar-xs">
                                        <img src="/images/users/user-7.jpg" alt="avatar-7" class="img-fluid rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-nowrap fs-sm mb-0 lh-base">
                                            <a href="#!" class="link-reset">David Clark</a>
                                        </h5>
                                    </div>
                                </div>
                                <a class="link-primary fw-semibold" href="article">Read more <i class="ti ti-arrow-right"></i></a>
                            </div>
                        </article>
                    </div> <!-- end col-->
                    <div class="col-xl-3 col-md-6">
                        <article class="card">
                            <!-- Badge -->
                            <div class="badge text-bg-dark badge-label position-absolute top-0 start-0 m-3">Technology</div>

                            <!-- Card image -->
                            <img class="card-img-top" src="/images/stock/small-4.jpg" alt="Tech Innovations">

                            <!-- Card Body -->
                            <div class="card-body">
                                <!-- Title -->
                                <h6 class="card-title fs-lg lh-base mb-2">
                                    <a href="article" class="link-reset">The Future of Artificial Intelligence</a>
                                </h6>
                                <p class="mb-3 text-muted">
                                    Discover how AI is transforming industries and what the future holds for this cutting-edge technology.
                                </p>

                                <p class="d-flex flex-wrap gap-3 text-muted mb-0 mt-3 align-items-center fs-base">
                                    <span><i class="ti ti-calendar fs-md"></i> Jan 12, 2025</span>
                                    <span><i class="ti ti-message-circle fs-md"></i> <a href="#!" class="link-reset">89</a></span>
                                    <span><i class="ti ti-eye fs-md"></i> 1,284</span>
                                </p>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer bg-transparent d-flex justify-content-between">
                                <div class="d-flex justify-content-start align-items-center gap-2">
                                    <div class="avatar avatar-xs">
                                        <img src="/images/users/user-4.jpg" alt="avatar-4" class="img-fluid rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-nowrap fs-sm mb-0 lh-base">
                                            <a href="#!" class="link-reset">Michael Turner</a>
                                        </h5>
                                    </div>
                                </div>
                                <a class="link-primary fw-semibold" href="article">Read more <i class="ti ti-arrow-right"></i></a>
                            </div>
                        </article>
                    </div> <!-- end col-->

                    <div class="col-xl-3 col-md-6">
                        <article class="card bg-secondary bg-gradient">
                            <!-- Card Body -->
                            <div class="card-body">
                                <!-- Badge -->
                                <div class="badge bg-white text-white bg-opacity-25 badge-label mb-3">Cybersecurity</div>

                                <!-- Title -->
                                <h6 class="card-title fs-lg lh-base mb-2">
                                    <a href="article" class="text-white">Cyber Threats to Watch Out for in 2025</a>
                                </h6>
                                <p class="mb-3 text-white-50">
                                    Stay protected by understanding the most pressing cybersecurity threats and how to safeguard your digital world.
                                </p>

                                <p class="d-flex flex-wrap gap-3 text-white-50 mb-0 mt-3 align-items-center fs-base">
                                    <span><i class="ti ti-calendar fs-md"></i> Mar 5, 2025</span>
                                    <span><i class="ti ti-message-circle fs-md"></i> <a href="#!" class="link-reset">67</a></span>
                                    <span><i class="ti ti-eye fs-md"></i> 1,039</span>
                                </p>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer bg-transparent d-flex justify-content-between border-light border-opacity-25">
                                <div class="d-flex justify-content-start align-items-center gap-2">
                                    <div class="avatar avatar-xs">
                                        <img src="/images/users/user-4.jpg" alt="avatar-4" class="img-fluid rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-nowrap fs-sm mb-0 lh-base">
                                            <a href="#!" class="text-white">Ethan Wilson</a>
                                        </h5>
                                    </div>
                                </div>
                                <a class="text-white fw-semibold" href="article">Read more <i class="ti ti-arrow-right"></i></a>
                            </div>
                        </article>

                    </div> <!-- end col-->

                    <div class="col-xl-3 col-md-6">
                        <article class="card">
                            <!-- Badge -->
                            <div class="badge text-bg-dark badge-label position-absolute top-0 start-0 m-3">Data Science</div>

                            <!-- Card image -->
                            <img class="card-img-top" src="/images/blog/blog-5.jpg" alt="Data Science Trends">

                            <!-- Card Body -->
                            <div class="card-body">
                                <!-- Title -->
                                <h6 class="card-title fs-lg lh-base mb-2">
                                    <a href="article" class="link-reset">Top Data Science Trends in 2025</a>
                                </h6>
                                <p class="mb-3 text-muted">
                                    Get ahead in the data science field with the latest trends, technologies, and tools that are reshaping the industry.
                                </p>

                                <p class="d-flex flex-wrap gap-3 text-muted mb-0 mt-3 align-items-center fs-base">
                                    <span><i class="ti ti-calendar fs-md"></i> Jan 12, 2025</span>
                                    <span><i class="ti ti-message-circle fs-md"></i> <a href="#!" class="link-reset">89</a></span>
                                    <span><i class="ti ti-eye fs-md"></i> 1,284</span>
                                </p>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer bg-transparent d-flex justify-content-between">
                                <div class="d-flex justify-content-start align-items-center gap-2">
                                    <div class="avatar avatar-xs">
                                        <img src="/images/users/user-1.jpg" alt="avatar-1" class="img-fluid rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-nowrap fs-sm mb-0 lh-base">
                                            <a href="#!" class="link-reset">Olivia Brown</a>
                                        </h5>
                                    </div>
                                </div>
                                <a class="link-primary fw-semibold" href="article">Read more <i class="ti ti-arrow-right"></i></a>
                            </div>
                        </article>
                    </div> <!-- end col-->

                    <div class="col-xl-3 col-md-6">
                        <article class="card">
                            <!-- Card Body -->
                            <div class="card-body">

                                <!-- Title -->
                                <h6 class="card-title fs-lg lh-base mb-2">
                                    <a href="article" class="link-reset">Web Design Trends to Watch in 2025</a>
                                </h6>
                                <p class="mb-3 text-muted">
                                    Explore the top web design trends that will shape the user experience in 2025.
                                </p>

                                <div>
                                    <a href="#!" class="badge badge-label badge-default">Web Design</a>
                                    <a href="#!" class="badge badge-label badge-default">UX/UI</a>
                                    <a href="#!" class="badge badge-label badge-default">Trends</a>
                                </div>

                                <p class="d-flex flex-wrap gap-3 text-muted mb-0 mt-3 align-items-center fs-base">
                                    <span><i class="ti ti-calendar fs-md"></i> Jan 12, 2025</span>
                                    <span><i class="ti ti-message-circle fs-md"></i> <a href="#!" class="link-reset">89</a></span>
                                    <span><i class="ti ti-eye fs-md"></i> 1,284</span>
                                </p>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer bg-transparent d-flex justify-content-between">
                                <div class="d-flex justify-content-start align-items-center gap-2">
                                    <div class="avatar avatar-xs">
                                        <img src="/images/users/user-5.jpg" alt="avatar-5" class="img-fluid rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-nowrap fs-sm mb-0 lh-base">
                                            <a href="#!" class="link-reset">Anna White</a>
                                        </h5>
                                    </div>
                                </div>
                                <a class="link-primary fw-semibold" href="article">Read more <i class="ti ti-arrow-right"></i></a>
                            </div>
                        </article>
                    </div> <!-- end col-->

                    <div class="col-xl-3 col-md-6">
                        <article class="card bg-success bg-gradient">
                            <!-- Card Body -->
                            <div class="card-body">
                                <!-- Badge -->
                                <div class="badge bg-white text-white bg-opacity-25 badge-label mb-3">Green Tech</div>

                                <!-- Title -->
                                <h6 class="card-title fs-lg lh-base mb-2">
                                    <a href="article" class="text-white">Sustainable Technologies Shaping the Future</a>
                                </h6>
                                <p class="mb-3 text-white-50">
                                    Discover how clean energy, eco-innovation, and green infrastructure are driving the global sustainability movement.
                                </p>

                                <p class="d-flex flex-wrap gap-3 text-white-50 mb-0 mt-3 align-items-center fs-base">
                                    <span><i class="ti ti-calendar fs-md"></i> Mar 22, 2025</span>
                                    <span><i class="ti ti-message-circle fs-md"></i> <a href="#!" class="link-reset">76</a></span>
                                    <span><i class="ti ti-eye fs-md"></i> 1,196</span>
                                </p>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer bg-transparent d-flex justify-content-between border-light border-opacity-25">
                                <div class="d-flex justify-content-start align-items-center gap-2">
                                    <div class="avatar avatar-xs">
                                        <img src="/images/users/user-3.jpg" alt="avatar-3" class="img-fluid rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-nowrap fs-sm mb-0 lh-base">
                                            <a href="#!" class="text-white">Sophia Turner</a>
                                        </h5>
                                    </div>
                                </div>
                                <a class="text-white fw-semibold" href="article">Read more <i class="ti ti-arrow-right"></i></a>
                            </div>
                        </article>
                    </div> <!-- end col -->

                </div> <!-- end row-->

            </div>

            <?= $this->element('footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?= $this->element('customizer') ?>

    <?= $this->element('footer_scripts') ?>

    <script src="/plugins/masonry/masonry.pkgd.min.js"></script>

</body>


</html>