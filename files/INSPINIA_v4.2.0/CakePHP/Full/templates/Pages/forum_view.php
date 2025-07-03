<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Forum']) ?>

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

                <?= $this->element('page_title', ['subtitle' => 'Apps', 'title' => 'Forum']) ?>

                <div class="row justify-content-center">
                    <div class="col-xxl-10">
                        <div class="row">
                            <div class="col-xl-9">
                                <h4 class="mb-3">All Questions</h4>
                                <div class="card mb-1">
                                    <div class="card-body">
                                        <div class="d-flex gap-4 align-items-center">
                                            <!-- Content Section -->
                                            <div class="flex-grow-1">
                                                <!-- Category -->
                                                <p class="text-muted text-uppercase mb-2 fw-semibold">
                                                    Development Talk
                                                </p>

                                                <h4 class="fs-lg mb-2">
                                                    <a href="forum-post" class="link-reset">What's the best JavaScript framework in 2025?</a>
                                                </h4>

                                                <!-- Short Description -->
                                                <p class="text-muted mb-0">
                                                    With so many frameworks available, developers often debate which one offers the best balance of performance, scalability, and ease of use. Share your thoughts!
                                                </p>
                                            </div>
                                        </div>
                                    </div> <!-- end card-body-->
                                    <div class="card-footer">
                                        <p class="d-flex flex-wrap gap-3 text-muted mb-0 align-items-center justify-content-between fs-sm">
                                            <span class="d-flex align-items-center gap-2">
                                                <img src="/images/users/user-5.jpg" alt="avatar-5" class="img-fluid avatar-sm rounded">
                                                <span>
                                                    <a href="#!" class="link-dark fw-semibold lh-sm d-block">James Milton</a>
                                                    <span class="text-muted small">1 hour ago</span>
                                                </span>
                                            </span>
                                            <span><i class="ti ti-message-reply"></i> <a href="#!" class="link-reset">Answers: 45</a></span>
                                            <span><i class="ti ti-clock"></i> Ends in: 3 days</span>
                                            <span><i class="ti ti-users"></i> Votes: 732</span>
                                            <span class="d-flex align-items-center gap-1"><span class="badge text-bg-success">New</span></span>
                                        </p>
                                    </div>
                                </div> <!-- end card -->

                                <div class="card mb-1">
                                    <div class="card-body">
                                        <div class="d-flex gap-4 align-items-center">
                                            <div class="flex-grow-1">
                                                <p class="text-muted text-uppercase mb-2 fw-semibold">AI & Ethics</p>
                                                <h4 class="fs-lg mb-2">
                                                    <a href="forum-post" class="link-reset">Should AI tools be regulated by governments?</a>
                                                </h4>
                                                <p class="text-muted mb-0">
                                                    As AI becomes more powerful, discussions around ethics and control are growing. What’s your take on government involvement?
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <p class="d-flex flex-wrap gap-3 text-muted mb-0 align-items-center justify-content-between fs-sm">
                                            <span class="d-flex align-items-center gap-2">
                                                <img src="/images/users/user-8.jpg" alt="avatar-8" class="img-fluid avatar-sm rounded">
                                                <span>
                                                    <a href="#!" class="link-dark fw-semibold lh-sm d-block">Amira Lee</a>
                                                    <span class="text-muted small">2 hours ago</span>
                                                </span>
                                            </span>
                                            <span><i class="ti ti-message-reply"></i> <a href="#!" class="link-reset">Answers: 62</a></span>
                                            <span><i class="ti ti-clock"></i> Ends in: 4 days</span>
                                            <span><i class="ti ti-users"></i> Votes: 894</span>
                                            <span class="d-flex align-items-center gap-1"><span class="badge text-bg-warning">23</span></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="card mb-1">
                                    <div class="card-body">
                                        <div class="d-flex gap-4 align-items-center">
                                            <div class="flex-grow-1">
                                                <p class="text-muted text-uppercase mb-2 fw-semibold">Product Design</p>
                                                <h4 class="fs-lg mb-2">
                                                    <a href="forum-post" class="link-reset">Is minimalism still relevant in modern UI design?</a>
                                                </h4>
                                                <p class="text-muted mb-0">
                                                    Clean interfaces have been a trend for years, but some argue they now lack innovation. What’s your opinion?
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <p class="d-flex flex-wrap gap-3 text-muted mb-0 align-items-center justify-content-between fs-sm">
                                            <span class="d-flex align-items-center gap-2">
                                                <img src="/images/users/user-2.jpg" alt="avatar-2" class="img-fluid avatar-sm rounded">
                                                <span>
                                                    <a href="#!" class="link-dark fw-semibold lh-sm d-block">Liam Carter</a>
                                                    <span class="text-muted small">3 hours ago</span>
                                                </span>
                                            </span>
                                            <span><i class="ti ti-message-reply"></i> <a href="#!" class="link-reset">Answers: 31</a></span>
                                            <span><i class="ti ti-clock"></i> Ends in: 2 days</span>
                                            <span><i class="ti ti-users"></i> Votes: 410</span>
                                            <span class="d-flex align-items-center gap-1"><span class="badge text-bg-info">8</span></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="card mb-1">
                                    <div class="card-body">
                                        <div class="d-flex gap-4 align-items-center">
                                            <div class="flex-grow-1">
                                                <p class="text-muted text-uppercase mb-2 fw-semibold">Career Growth</p>
                                                <h4 class="fs-lg mb-2">
                                                    <a href="forum-post" class="link-reset">What’s better for growth: startups or large companies?</a>
                                                </h4>
                                                <p class="text-muted mb-0">
                                                    Both have pros and cons—startups offer agility, while big companies provide stability. Which helped your career most?
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <p class="d-flex flex-wrap gap-3 text-muted mb-0 align-items-center justify-content-between fs-sm">
                                            <span class="d-flex align-items-center gap-2">
                                                <img src="/images/users/user-6.jpg" alt="avatar-6" class="img-fluid avatar-sm rounded">
                                                <span>
                                                    <a href="#!" class="link-dark fw-semibold lh-sm d-block">Noah Bennett</a>
                                                    <span class="text-muted small">5 hours ago</span>
                                                </span>
                                            </span>
                                            <span><i class="ti ti-message-reply"></i> <a href="#!" class="link-reset">Answers: 50</a></span>
                                            <span><i class="ti ti-clock"></i> Ends in: 1 day</span>
                                            <span><i class="ti ti-users"></i> Votes: 612</span>
                                            <span class="d-flex align-items-center gap-1"><span class="badge text-bg-primary">12</span></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="card mb-1">
                                    <div class="card-body">
                                        <div class="d-flex gap-4 align-items-center">
                                            <div class="flex-grow-1">
                                                <p class="text-muted text-uppercase mb-2 fw-semibold">DevOps</p>
                                                <h4 class="fs-lg mb-2">
                                                    <a href="forum-post" class="link-reset">CI/CD or traditional release cycles: what works better?</a>
                                                </h4>
                                                <p class="text-muted mb-0">
                                                    Continuous deployment speeds up delivery, but some teams prefer slower, stable releases. What’s your team's approach?
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <p class="d-flex flex-wrap gap-3 text-muted mb-0 align-items-center justify-content-between fs-sm">
                                            <span class="d-flex align-items-center gap-2">
                                                <img src="/images/users/user-4.jpg" alt="avatar-4" class="img-fluid avatar-sm rounded">
                                                <span>
                                                    <a href="#!" class="link-dark fw-semibold lh-sm d-block">Sofia Kim</a>
                                                    <span class="text-muted small">8 hours ago</span>
                                                </span>
                                            </span>
                                            <span><i class="ti ti-message-reply"></i> <a href="#!" class="link-reset">Answers: 76</a></span>
                                            <span><i class="ti ti-clock"></i> Ends in: 6 days</span>
                                            <span><i class="ti ti-users"></i> Votes: 1,005</span>
                                            <span class="d-flex align-items-center gap-1"><span class="badge text-bg-secondary">18</span></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex gap-4 align-items-center">
                                            <div class="flex-grow-1">
                                                <p class="text-muted text-uppercase mb-2 fw-semibold">Open Source</p>
                                                <h4 class="fs-lg mb-2">
                                                    <a href="forum-post" class="link-reset">What’s the best way to start contributing to open source?</a>
                                                </h4>
                                                <p class="text-muted mb-0">
                                                    Many developers want to join the open-source movement but don’t know where to begin. What advice would you give?
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <p class="d-flex flex-wrap gap-3 text-muted mb-0 align-items-center justify-content-between fs-sm">
                                            <span class="d-flex align-items-center gap-2">
                                                <img src="/images/users/user-1.jpg" alt="avatar-1" class="img-fluid avatar-sm rounded">
                                                <span>
                                                    <a href="#!" class="link-dark fw-semibold lh-sm d-block">Daniel Reed</a>
                                                    <span class="text-muted small">12 minutes ago</span>
                                                </span>
                                            </span>
                                            <span><i class="ti ti-message-reply"></i> <a href="#!" class="link-reset">Answers: 39</a></span>
                                            <span><i class="ti ti-clock"></i> Ends in: 7 days</span>
                                            <span><i class="ti ti-users"></i> Votes: 558</span>
                                            <span class="d-flex align-items-center gap-1"><span class="badge text-bg-dark">7</span></span>
                                        </p>
                                    </div>
                                </div>

                                <ul class="pagination pagination-rounded pagination-boxed justify-content-center">
                                    <li class="page-item previous disabled"><a href="#" class="page-link"><i class="ti ti-chevron-left"></i></a></li>
                                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item "><a href="#" class="page-link">3</a></li>
                                    <li class="page-item "><a href="#" class="page-link">...</a></li>
                                    <li class="page-item "><a href="#" class="page-link">5</a></li>
                                    <li class="page-item "><a href="#" class="page-link">6</a></li>
                                    <li class="page-item next"><a href="#" class="page-link"><i class="ti ti-chevron-right"></i></a></li>
                                </ul>

                            </div> <!-- end col-->

                            <div class="col-lg-3">
                                <button type="button" class="btn mb-3 btn-lg btn-primary w-100">Ask Question</button>

                                <div class="card">
                                    <div class="card-body border-bottom border-dashed">

                                        <h5 class="mb-3 text-uppercase fw-bold">Search</h5>

                                        <div class="app-search">
                                            <input type="text" class="form-control bg-light-subtle" placeholder="Search issues...">
                                            <i data-lucide="search" class="app-search-icon text-muted"></i>
                                        </div>
                                    </div>
                                    <div class="card-body border-bottom border-dashed">
                                        <h5 class="mb-3 text-uppercase fw-bold">Category:</h5>

                                        <ul class="list-group list-group-flush fs-sm">
                                            <li class="list-group-item ps-0"><a href="#" class="link-reset fw-medium">Development Talk</a></li>
                                            <li class="list-group-item ps-0"><a href="#" class="link-reset fw-medium">AI & Ethics</a></li>
                                            <li class="list-group-item ps-0"><a href="#" class="link-reset fw-medium">Product Design</a></li>
                                            <li class="list-group-item ps-0"><a href="#" class="link-reset fw-medium">Career Growth</a></li>
                                            <li class="list-group-item ps-0"><a href="#" class="link-reset fw-medium">Open Source</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body border-bottom border-dashed">
                                        <h5 class="mb-3 text-uppercase fw-bold">Popular Questions:</h5>

                                        <ul class="list-group list-group-flush fs-sm">
                                            <li class="list-group-item ps-0"><a href="#" class="link-reset fw-medium">Unlocking the Secrets of Modern UI Design</a></li>
                                            <li class="list-group-item ps-0"><a href="#" class="link-reset fw-medium">How to Build a Portfolio with Tailwind CSS</a></li>
                                            <li class="list-group-item ps-0"><a href="#" class="link-reset fw-medium">Boost Productivity with These Web Dev Tools</a></li>
                                            <li class="list-group-item ps-0"><a href="#" class="link-reset fw-medium">The Future of Frontend: Trends to Watch in 2025</a></li>
                                            <li class="list-group-item ps-0"><a href="#" class="link-reset fw-medium">Essential Tips for Clean and Maintainable Code</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="mb-3 text-uppercase fw-bold">Popular Tags:</h5>
                                        <div class="d-flex flex-wrap gap-1">
                                            <a class="btn btn-light btn-sm" href="#">Web Design</a>
                                            <a class="btn btn-light btn-sm" href="#">Frontend</a>
                                            <a class="btn btn-light btn-sm" href="#">Tailwind CSS</a>
                                            <a class="btn btn-light btn-sm" href="#">JavaScript</a>
                                            <a class="btn btn-light btn-sm" href="#">React</a>
                                            <a class="btn btn-light btn-sm" href="#">Startup</a>
                                            <a class="btn btn-light btn-sm" href="#">DevTools</a>
                                            <a class="btn btn-light btn-sm" href="#">Open Source</a>
                                            <a class="btn btn-light btn-sm" href="#">Performance</a>
                                            <a class="btn btn-light btn-sm" href="#">UX/UI</a>
                                            <a class="btn btn-light btn-sm" href="#">SEO</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end row-->
                    </div>
                </div>

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