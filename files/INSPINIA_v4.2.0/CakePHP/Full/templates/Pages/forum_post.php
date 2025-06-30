<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Forum Post']) ?>

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

                <?= $this->element('page_title', ['subtitle' => 'Apps', 'title' => 'Forum Post']) ?>

                <div class="row justify-content-center">
                    <div class="col-xxl-10">
                        <div class="row">
                            <div class="col-xl-9">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex gap-4 align-items-center">
                                            <!-- Content Section -->
                                            <div class="flex-grow-1">
                                                <div class="text-center">
                                                    <!-- Category -->
                                                    <p class="text-muted text-uppercase my-2 fw-semibold">
                                                        #Development Talk
                                                    </p>

                                                    <h4 class="fs-xxl mb-3">
                                                        What's the best JavaScript framework in 2025?
                                                    </h4>
                                                </div>

                                                <!-- Description -->
                                                <div class="fs-sm">
                                                    <p>With the ever-evolving front-end landscape, JavaScript frameworks are at the heart of most web development stacks. In 2025, options like React, Vue 3, Angular, Svelte, SolidJS, and even newer players continue to battle for dominance in terms of performance, developer experience, ecosystem, and community support.</p>
                                                    <p>React remains a popular choice due to its strong community, wide adoption, and extensive tooling, while Vue 3 continues to grow thanks to its approachable syntax and composition API. On the other hand, Svelte and SolidJS are gaining attention for their compile-time optimization and ultra-fast runtime performance.</p>
                                                    <p>We'd love to hear your experience: Which framework do you use and why? Are you prioritizing performance, learning curve, community support, or integration capabilities? Share your insights, real-world comparisons, and predictions for the future!</p>
                                                </div>
                                            </div>
                                        </div>


                                        <p class="d-flex flex-wrap gap-3 text-muted mt-3 mb-0 pb-3 align-items-center justify-content-between fs-sm">
                                            <span class="d-flex align-items-center gap-2">
                                                <img src="/images/users/user-5.jpg" alt="avatar-5" class="img-fluid avatar-sm rounded">
                                                <span class="text-body">
                                                    <a href="#!" class="link-reset fw-semibold lh-sm d-block">James Milton</a>
                                                    <span class="text-muted small">1 hour ago</span>
                                                </span>
                                            </span>
                                            <span><i class="ti ti-message-reply"></i> <a href="#!" class="link-reset">Answers: 45</a></span>
                                            <span><i class="ti ti-clock"></i> Ends in: 3 days</span>
                                            <span><i class="ti ti-users"></i> Votes: 732</span>
                                        </p>

                                        <div class="border-bottom border-dashed mb-3"></div>

                                        <form action="#" class="mb-3">
                                            <div class="mb-3">
                                                <textarea class="form-control bg-light-subtle" id="form-control-textarea" rows="4" placeholder="Enter your messages..."></textarea>
                                            </div>
                                            <div class="text-end">
                                                <button type="submit" class="btn btn-secondary">Submit <i class="ti ti-send-2 align-baseline ms-1"></i></button>
                                            </div>
                                        </form>

                                        <h4>Replies(15)</h4>

                                        <div class="border-bottom border-dashed my-3"></div>

                                        <div class="d-flex mb-2 border border-dashed rounded p-3">
                                            <div class="flex-shrink-0">
                                                <img src="/images/users/user-8.jpg" alt="" class="avatar-sm rounded-circle shadow-sm">
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <h5 class="mb-1">Liam Carter <small class="text-muted">15 Apr 2025 · 09:20AM</small></h5>
                                                <p class="mb-2">Customers are reporting that the checkout page freezes after submitting their payment information.</p>
                                                <a href="javascript:void(0);" class="badge bg-light text-muted d-inline-flex align-items-center gap-1">
                                                    <i class="ti ti-arrow-back-up fs-lg"></i> Reply
                                                </a>

                                                <div class="d-flex mt-4">
                                                    <div class="flex-shrink-0">
                                                        <img src="/images/users/user-10.jpg" alt="" class="avatar-sm rounded-circle shadow-sm">
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <h5 class="mb-1">Nina Bryant <small class="text-muted">15 Apr 2025 · 11:47AM</small></h5>
                                                        <p class="mb-2">That might be caused by the third-party payment gateway. I recommend testing in incognito mode and checking for any JS errors in the console.</p>
                                                        <a href="javascript:void(0);" class="badge bg-light text-muted d-inline-flex align-items-center gap-1">
                                                            <i class="ti ti-arrow-back-up fs-lg"></i> Reply
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="d-flex mt-4">
                                                    <div class="flex-shrink-0">
                                                        <img src="/images/users/user-3.jpg" alt="" class="avatar-sm rounded-circle shadow-sm">
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <h5 class="mb-1">Sophie Allen <small class="text-muted">16 Apr 2025 · 10:15AM</small></h5>
                                                        <p class="mb-2">We’ve noticed this issue before when the CDN cache hasn't been cleared properly. Try purging the cache and reloading the page.</p>
                                                        <a href="javascript:void(0);" class="badge bg-light text-muted d-inline-flex align-items-center gap-1">
                                                            <i class="ti ti-arrow-back-up fs-lg"></i> Reply
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="d-flex mb-2 border border-dashed rounded p-3">
                                            <div class="flex-shrink-0">
                                                <img src="/images/users/user-6.jpg" alt="" class="avatar-sm rounded-circle shadow-sm">
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <h5 class="mb-1">Daniel West <small class="text-muted">14 Apr 2025 · 04:15PM</small></h5>
                                                <p class="mb-2">You can also clear the browser cache or try a different browser. We had a similar issue with Chrome extensions interfering before.</p>
                                                <a href="javascript:void(0);" class="badge bg-light text-muted d-inline-flex align-items-center gap-1">
                                                    <i class="ti ti-arrow-back-up fs-lg"></i> Reply
                                                </a>
                                            </div>
                                        </div>

                                        <div class="d-flex mb-3 border border-dashed rounded p-3">
                                            <div class="flex-shrink-0">
                                                <img src="/images/users/user-10.jpg" alt="" class="avatar-sm rounded-circle shadow-sm">
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <h5 class="mb-1">Nina Bryant <small class="text-muted">16 Apr 2025 · 08:04AM</small></h5>
                                                <p>The <a href="javascript:void(0)" class="text-decoration-underline">System Status Page</a> has been updated. We're actively monitoring and will release a patch within 24 hours.</p>

                                                <a href="javascript:void(0);" class="badge bg-light text-muted d-inline-flex align-items-center gap-1">
                                                    <i class="ti ti-arrow-back-up fs-lg"></i> Reply
                                                </a>

                                                <div class="d-flex mt-4">
                                                    <div class="flex-shrink-0">
                                                        <img src="/images/users/user-6.jpg" alt="" class="avatar-sm rounded-circle shadow-sm">
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <h5 class="mb-1">Daniel West <small class="text-muted">16 Apr 2025 · 08:30AM</small></h5>
                                                        <p>Thanks for the update! We'll notify the customers and let them know the issue is being resolved.</p>
                                                        <a href="javascript:void(0);" class="badge bg-light text-muted d-inline-flex align-items-center gap-1">
                                                            <i class="ti ti-arrow-back-up fs-lg"></i> Reply
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="pagination pagination-rounded pagination-boxed justify-content-center mb-0">
                                            <li class="page-item previous disabled"><a href="#" class="page-link"><i class="ti ti-chevron-left"></i></a></li>
                                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                                            <li class="page-item "><a href="#" class="page-link">3</a></li>
                                            <li class="page-item "><a href="#" class="page-link">...</a></li>
                                            <li class="page-item "><a href="#" class="page-link">5</a></li>
                                            <li class="page-item "><a href="#" class="page-link">6</a></li>
                                            <li class="page-item next"><a href="#" class="page-link"><i class="ti ti-chevron-right"></i></a></li>
                                        </ul>

                                    </div> <!-- end card-body-->
                                </div> <!-- end card -->


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