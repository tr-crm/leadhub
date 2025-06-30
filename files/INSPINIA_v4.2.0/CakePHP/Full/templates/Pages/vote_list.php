<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Vote List']) ?>

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

                <?= $this->element('page_title', ['subtitle' => 'Apps', 'title' => 'Vote List']) ?>

                <div class="row justify-content-center">
                    <div class="col-xxl-10">
                        <div class="card">
                            <div class="card-header border-light justify-content-between">
                                <div class="app-search">
                                    <input type="text" class="form-control" placeholder="Search topics...">
                                    <i data-lucide="search" class="app-search-icon text-muted"></i>
                                </div>

                                <div class="d-flex align-items-center gap-2">
                                    <span class="me-2 fw-semibold">Filter By:</span>

                                    <!-- Region Filter -->
                                    <div class="app-search">
                                        <select class="form-select form-control my-1 my-md-0">
                                            <option selected>Sort By</option>
                                            <option value="North America">Latest</option>
                                            <option value="Europe">Popular</option>
                                            <option value="Asia">Low Votes</option>
                                            <option value="Africa">High Votes</option>
                                        </select>
                                        <i data-lucide="list-filter" class="app-search-icon text-muted"></i>
                                    </div>

                                    <!-- Vote Status Filter -->
                                    <div class="app-search">
                                        <select class="form-select form-control my-1 my-md-0">
                                            <option selected>Vote Status</option>
                                            <option value="Voted">Voted</option>
                                            <option value="Not Voted">Not Voted</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Disqualified">Disqualified</option>
                                        </select>
                                        <i data-lucide="check-circle" class="app-search-icon text-muted"></i>
                                    </div>

                                    <button type="submit" class="btn btn-success">Add New Topics</button>
                                </div>
                            </div>

                            <div class="card-body p-0">
                                <div class="border-bottom border-dashed px-4 py-3">
                                    <div class="d-flex gap-4 align-items-center">
                                        <!-- Voting Section -->
                                        <div>
                                            <div class="vstack gap-1 text-center">
                                                <div><button type="button" class="btn p-0 btn-link"><i class="ti ti-chevron-up fs-xxl"></i></button></div>
                                                <h5 class="fw-bold m-0 fs-lg">35</h5>
                                                <div><button type="button" class="btn p-0 btn-link"><i class="ti ti-chevron-down fs-xxl"></i></button></div>
                                            </div>
                                        </div>

                                        <!-- Content Section -->
                                        <div class="flex-grow-1">
                                            <h4 class="fs-md mb-1">
                                                <a href="#!" class="link-reset">Should remote work be a permanent option for all employees?</a>
                                            </h4>

                                            <!-- Short Description -->
                                            <p class="text-muted mb-2">
                                                Remote work has seen a massive rise in popularity since 2020. This vote explores whether it should remain a flexible option moving forward.
                                            </p>

                                            <!-- Meta Info -->
                                            <p class="d-flex flex-wrap gap-3 text-muted mb-1 align-items-center fs-base">
                                                <span class="d-flex align-items-center gap-1">
                                                    <img src="/images/users/user-7.jpg" alt="avatar-7" class="img-fluid avatar-xs rounded-circle">
                                                    <a href="#!" class="link-reset fw-semibold">Emily Parker</a>
                                                </span>
                                                <span><i class="ti ti-calendar"></i> Posted on: Jan 12, 2025</span>
                                                <span class="d-flex align-items-center gap-1"><i class="ti ti-tag"></i> <span class="badge bg-light text-primary">Workplace</span></span>
                                                <span><i class="ti ti-message-circle"></i> <a href="#!" class="link-reset">Comments: 89</a></span>
                                                <span><i class="ti ti-clock"></i> Ends in: 5 days</span>
                                                <span><i class="ti ti-users"></i> Votes: 1,284</span>
                                                <span class="d-flex align-items-center gap-1"><i class="ti ti-lock"></i> <span class="badge text-bg-warning">Closed</span></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-bottom border-dashed px-4 py-3">
                                    <div class="d-flex gap-4 align-items-center">
                                        <div>
                                            <div class="vstack gap-1 text-center">
                                                <div><button type="button" class="btn p-0 btn-link text-danger"><i class="ti ti-chevron-up fs-xxl"></i></button></div>
                                                <h5 class="fw-bold m-0 fs-lg">52</h5>
                                                <div><button type="button" class="btn p-0 btn-link"><i class="ti ti-chevron-down fs-xxl"></i></button></div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h4 class="fs-md mb-1">
                                                <a href="#!" class="link-reset">Should companies implement a 4-day workweek?</a>
                                            </h4>
                                            <p class="text-muted mb-2">
                                                As work-life balance becomes a higher priority, many advocate for a shorter workweek to improve productivity and employee well-being.
                                            </p>
                                            <p class="d-flex flex-wrap gap-3 text-muted mb-1 align-items-center fs-base">
                                                <span class="d-flex align-items-center gap-1">
                                                    <img src="/images/users/user-4.jpg" alt="avatar-4" class="img-fluid avatar-xs rounded-circle">
                                                    <a href="#!" class="link-reset fw-semibold">Daniel Stone</a>
                                                </span>
                                                <span><i class="ti ti-calendar"></i> Posted on: Feb 1, 2025</span>
                                                <span class="d-flex align-items-center gap-1"><i class="ti ti-tag"></i> <span class="badge bg-light text-primary">Productivity</span></span>
                                                <span><i class="ti ti-message-circle"></i> <a href="#!" class="link-reset">Comments: 54</a></span>
                                                <span><i class="ti ti-clock"></i> Ends in: 4 days</span>
                                                <span><i class="ti ti-users"></i> Votes: 985</span>
                                                <span class="d-flex align-items-center gap-1"><i class="ti ti-lock"></i> <span class="badge text-bg-success">Open</span></span>
                                            </p>
                                        </div>
                                        <i class="ms-auto ti ti-checks fs-36 text-success text-opacity-25" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Thank you for voting"></i>
                                    </div>
                                </div>

                                <div class="border-bottom border-dashed px-4 py-3">
                                    <div class="d-flex gap-4 align-items-center">
                                        <div>
                                            <div class="vstack gap-1 text-center">
                                                <div><button type="button" class="btn p-0 btn-link"><i class="ti ti-chevron-up fs-xxl"></i></button></div>
                                                <h5 class="fw-bold m-0 fs-lg">78</h5>
                                                <div><button type="button" class="btn p-0 btn-link"><i class="ti ti-chevron-down fs-xxl"></i></button></div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h4 class="fs-md mb-1">
                                                <a href="#!" class="link-reset">Should AI be part of everyday business operations?</a>
                                            </h4>
                                            <p class="text-muted mb-2">
                                                As AI becomes more accessible, businesses are debating its integration into daily operations for tasks like customer support and analysis.
                                            </p>
                                            <p class="d-flex flex-wrap gap-3 text-muted mb-1 align-items-center fs-base">
                                                <span class="d-flex align-items-center gap-1">
                                                    <img src="/images/users/user-8.jpg" alt="avatar-8" class="img-fluid avatar-xs rounded-circle">
                                                    <a href="#!" class="link-reset fw-semibold">Liam Torres</a>
                                                </span>
                                                <span><i class="ti ti-calendar"></i> Posted on: Mar 3, 2025</span>
                                                <span class="d-flex align-items-center gap-1"><i class="ti ti-tag"></i> <span class="badge bg-light text-primary">Technology</span></span>
                                                <span><i class="ti ti-message-circle"></i> <a href="#!" class="link-reset">Comments: 112</a></span>
                                                <span><i class="ti ti-clock"></i> Ends in: 2 days</span>
                                                <span><i class="ti ti-users"></i> Votes: 1,140</span>
                                                <span class="d-flex align-items-center gap-1"><i class="ti ti-lock"></i> <span class="badge text-bg-success">Open</span></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-bottom border-dashed px-4 py-3">
                                    <div class="d-flex gap-4 align-items-center">
                                        <div>
                                            <div class="vstack gap-1 text-center">
                                                <div><button type="button" class="btn p-0 btn-link"><i class="ti ti-chevron-up fs-xxl"></i></button></div>
                                                <h5 class="fw-bold m-0 fs-lg">21</h5>
                                                <div><button type="button" class="btn p-0 btn-link"><i class="ti ti-chevron-down fs-xxl"></i></button></div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h4 class="fs-md mb-1">
                                                <a href="#!" class="link-reset">Should companies go fully remote?</a>
                                            </h4>
                                            <p class="text-muted mb-2">
                                                With the success of remote setups, some argue that physical offices are no longer necessary. Others miss in-person collaboration.
                                            </p>
                                            <p class="d-flex flex-wrap gap-3 text-muted mb-1 align-items-center fs-base">
                                                <span class="d-flex align-items-center gap-1">
                                                    <img src="/images/users/user-6.jpg" alt="avatar-6" class="img-fluid avatar-xs rounded-circle">
                                                    <a href="#!" class="link-reset fw-semibold">Sophia Ray</a>
                                                </span>
                                                <span><i class="ti ti-calendar"></i> Posted on: Jan 28, 2025</span>
                                                <span class="d-flex align-items-center gap-1"><i class="ti ti-tag"></i> <span class="badge bg-light text-primary">Remote</span></span>
                                                <span><i class="ti ti-message-circle"></i> <a href="#!" class="link-reset">Comments: 40</a></span>
                                                <span><i class="ti ti-clock"></i> Ends in: 3 days</span>
                                                <span><i class="ti ti-users"></i> Votes: 800</span>
                                                <span class="d-flex align-items-center gap-1"><i class="ti ti-lock"></i> <span class="badge text-bg-warning">Closed</span></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-bottom border-dashed px-4 py-3">
                                    <div class="d-flex gap-4 align-items-center">
                                        <div>
                                            <div class="vstack gap-1 text-center">
                                                <div><button type="button" class="btn p-0 btn-link"><i class="ti ti-chevron-up fs-xxl"></i></button></div>
                                                <h5 class="fw-bold m-0 fs-lg">96</h5>
                                                <div><button type="button" class="btn p-0 btn-link"><i class="ti ti-chevron-down fs-xxl"></i></button></div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h4 class="fs-md mb-1">
                                                <a href="#!" class="link-reset">Is a degree still essential in tech hiring?</a>
                                            </h4>
                                            <p class="text-muted mb-2">
                                                Many argue that skills matter more than formal education in today’s tech industry. Should degrees still be a hiring requirement?
                                            </p>
                                            <p class="d-flex flex-wrap gap-3 text-muted mb-1 align-items-center fs-base">
                                                <span class="d-flex align-items-center gap-1">
                                                    <img src="/images/users/user-9.jpg" alt="avatar-9" class="img-fluid avatar-xs rounded-circle">
                                                    <a href="#!" class="link-reset fw-semibold">Jordan Smith</a>
                                                </span>
                                                <span><i class="ti ti-calendar"></i> Posted on: Jan 10, 2025</span>
                                                <span class="d-flex align-items-center gap-1"><i class="ti ti-tag"></i> <span class="badge bg-light text-primary">Career</span></span>
                                                <span><i class="ti ti-message-circle"></i> <a href="#!" class="link-reset">Comments: 87</a></span>
                                                <span><i class="ti ti-clock"></i> Ends in: 1 day</span>
                                                <span><i class="ti ti-users"></i> Votes: 1,004</span>
                                                <span class="d-flex align-items-center gap-1d-flex align-items-center gap-1"><i class="ti ti-lock"></i> <span class="badge text-bg-success">Open</span></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-bottom border-dashed px-4 py-3">
                                    <div class="d-flex gap-4 align-items-center">
                                        <div>
                                            <div class="vstack gap-1 text-center">
                                                <div><button type="button" class="btn p-0 btn-link"><i class="ti ti-chevron-up fs-xxl"></i></button></div>
                                                <h5 class="fw-bold m-0 fs-lg">40</h5>
                                                <div><button type="button" class="btn p-0 btn-link text-danger"><i class="ti ti-chevron-down fs-xxl"></i></button></div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h4 class="fs-md mb-1">
                                                <a href="#!" class="link-reset">Should meetings be reduced to increase efficiency?</a>
                                            </h4>
                                            <p class="text-muted mb-2">
                                                Teams spend hours in meetings weekly. Is cutting down on them the secret to improved focus and output?
                                            </p>
                                            <p class="d-flex flex-wrap gap-3 text-muted mb-1 align-items-center fs-base">
                                                <span class="d-flex align-items-center gap-1">
                                                    <img src="/images/users/user-10.jpg" alt="avatar-10" class="img-fluid avatar-xs rounded-circle">
                                                    <a href="#!" class="link-reset fw-semibold">Rachel Lee</a>
                                                </span>
                                                <span><i class="ti ti-calendar"></i> Posted on: Feb 5, 2025</span>
                                                <span class="d-flex align-items-center gap-1"><i class="ti ti-tag"></i> <span class="badge bg-light text-primary">Efficiency</span></span>
                                                <span><i class="ti ti-message-circle"></i> <a href="#!" class="link-reset">Comments: 33</a></span>
                                                <span><i class="ti ti-clock"></i> Ends in: 6 days</span>
                                                <span><i class="ti ti-users"></i> Votes: 728</span>
                                                <span class="d-flex align-items-center gap-1"><i class="ti ti-lock"></i> <span class="badge text-bg-info">Ending Soon</span></span>
                                            </p>
                                        </div>
                                        <i class="ms-auto ti ti-checks fs-36 text-success text-opacity-25" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Thank you for voting"></i>
                                    </div>
                                </div>

                                <div class="px-4 py-3">
                                    <div class="d-flex gap-4 align-items-center">
                                        <div>
                                            <div class="vstack gap-1 text-center">
                                                <div><button type="button" class="btn p-0 btn-link"><i class="ti ti-chevron-up fs-xxl"></i></button></div>
                                                <h5 class="fw-bold m-0 fs-lg">65</h5>
                                                <div><button type="button" class="btn p-0 btn-link"><i class="ti ti-chevron-down fs-xxl"></i></button></div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h4 class="fs-md mb-1">
                                                <a href="#!" class="link-reset">Is hybrid work the best model moving forward?</a>
                                            </h4>
                                            <p class="text-muted mb-2">
                                                Hybrid setups offer flexibility and collaboration—but do they satisfy everyone? Let’s vote on the future of work.
                                            </p>
                                            <p class="d-flex flex-wrap gap-3 text-muted mb-1 align-items-center fs-base">
                                                <span class="d-flex align-items-center gap-1">
                                                    <img src="/images/users/user-3.jpg" alt="avatar-3" class="img-fluid avatar-xs rounded-circle">
                                                    <a href="#!" class="link-reset fw-semibold">Harvey Nash</a>
                                                </span>
                                                <span><i class="ti ti-calendar"></i> Posted on: Jan 18, 2025</span>
                                                <span class="d-flex align-items-center gap-1"><i class="ti ti-tag"></i> <span class="badge bg-light text-primary">Hybrid</span></span>
                                                <span><i class="ti ti-message-circle"></i> <a href="#!" class="link-reset">Comments: 61</a></span>
                                                <span><i class="ti ti-clock"></i> Ends in: 2 days</span>
                                                <span><i class="ti ti-users"></i> Votes: 887</span>
                                                <span class="d-flex align-items-center gap-1"><i class="ti ti-lock"></i> <span class="badge text-bg-warning">Closed</span></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
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

</body>

</html>