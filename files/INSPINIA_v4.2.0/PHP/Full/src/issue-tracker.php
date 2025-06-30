<?php include 'partials/html.php' ?>

<head>
    <?php $title = "Issue List"; include 'partials/title-meta.php' ?>

    <?php include 'partials/head-css.php' ?>
</head>

<body>
<!-- Begin page -->
<div class="wrapper">

    <?php include 'partials/menu.php' ?>

    <!-- ============================================================== -->
    <!-- Start Main Content -->
    <!-- ============================================================== -->

    <div class="content-page">

        <div class="container-fluid">

            <?php $subtitle = "Apps"; $title = "Issue List"; include 'partials/page-title.php' ?>

            <div class="row">
                <div class="col-12">
                    <div data-table data-table-rows-per-page="8" class="card">
                        <div class="card-header border-light justify-content-between">
                            <div class="app-search">
                                <input data-table-search type="search" class="form-control"
                                       placeholder="Search issues...">
                                <i data-lucide="search" class="app-search-icon text-muted"></i>
                            </div>

                            <button type="submit" class="btn btn-success">Add New Issues</button>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="table-responsive">
                                    <table class="table table-custom table-centered table-hover w-100 mb-0">
                                        <tbody>
                                        <tr>
                                            <!-- Status -->
                                            <td>
                                                <span class="badge text-bg-warning fs-xxs badge-label">In Progress</span>
                                            </td>

                                            <!-- Issue ID and Title -->
                                            <td>
                                                <a href="#!" class="link-reset text-uppercase fw-semibold">ISSUE-104</a>
                                                <p class="mb-0 text-muted">User profile update not saving on mobile
                                                    devices</p>
                                            </td>

                                            <!-- Assigned To -->
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-xs">
                                                        <img src="assets/images/users/user-3.jpg" alt="avatar-3"
                                                             class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 class="text-nowrap mb-0 lh-base">Jason Lee</h5>
                                                    </div>
                                                </div>
                                            </td>

                                            <!-- Created / Due Dates -->
                                            <td>
                                                <p class="mb-0"><i class="ti ti-calendar"></i> <span
                                                        class="fw-semibold">Created:</span> 10.02.2025</p>
                                                <p class="mb-0"><i class="ti ti-clock"></i> <span class="fw-semibold">Due:</span>
                                                    15.02.2025</p>
                                            </td>

                                            <!-- Tags -->
                                            <td>
                                                <a href="#!" class="badge badge-label badge-default">Mobile</a>
                                                <a href="#!" class="badge badge-label badge-default">UI</a>
                                                <a href="#!" class="badge badge-label badge-default">Urgent</a>
                                            </td>

                                            <!-- Progress -->
                                            <td>
                                                <div class="progress progress-sm" style="height: 6px;">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                         style="width: 60%;"></div>
                                                </div>
                                                <small class="text-muted">60% Complete</small>
                                            </td>

                                            <!-- Comments -->
                                            <td>
                                                <i class="ti ti-message-circle text-muted me-1"></i> 12 comments
                                            </td>

                                            <!-- Attachments -->
                                            <td>
                                                <i class="ti ti-paperclip text-muted me-1"></i> 3 files
                                            </td>

                                            <!-- Actions -->
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="javascript:void(0);"
                                                       class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-eye fs-lg"></i></a>
                                                    <a href="javascript:void(0);"
                                                       class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row
                                                       class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><span class="badge text-bg-danger fs-xxs badge-label">Open</span></td>
                                            <td>
                                                <a href="#!" class="link-reset text-uppercase fw-semibold">ISSUE-105</a>
                                                <p class="mb-0 text-muted">Payment gateway fails to respond on
                                                    checkout</p>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar avatar-xs">
                                                        <img src="assets/images/users/user-4.jpg" alt="avatar-4"
                                                             class="img-fluid rounded-circle">
                                                    </div>
                                                    <div><h5 class="mb-0 lh-base">Sophia Mendes</h5></div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0"><i class="ti ti-calendar"></i> <span
                                                        class="fw-semibold">Created:</span> 08.02.2025</p>
                                                <p class="mb-0"><i class="ti ti-clock"></i> <span class="fw-semibold">Due:</span>
                                                    14.02.2025</p>
                                            </td>
                                            <td>
                                                <a href="#!" class="badge badge-label badge-default">Payments</a>
                                                <a href="#!" class="badge badge-label badge-default">Critical</a>
                                            </td>
                                            <td>
                                                <div class="progress progress-sm" style="height: 6px;">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                         style="width: 25%;"></div>
                                                </div>
                                                <small class="text-muted">25% Complete</small>
                                            </td>
                                            <td><i class="ti ti-message-circle text-muted me-1"></i> 8 comments</td>
                                            <td><i class="ti ti-paperclip text-muted me-1"></i> 2 files</td>
                                            <td>
                                                <div class="d-flex gap-1 justify-content-center">
                                                    <a href="#!" class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#!" class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#!" data-table-delete-row
                                                       class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><span class="badge text-bg-success fs-xxs badge-label">Resolved</span>
                                            </td>
                                            <td>
                                                <a href="#!" class="link-reset text-uppercase fw-semibold">ISSUE-106</a>
                                                <p class="mb-0 text-muted">Dark mode breaks UI on dashboard view</p>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar avatar-xs">
                                                        <img src="assets/images/users/user-2.jpg" alt="avatar-2"
                                                             class="img-fluid rounded-circle">
                                                    </div>
                                                    <div><h5 class="mb-0 lh-base">Mason Clark</h5></div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0"><i class="ti ti-calendar"></i> <span
                                                        class="fw-semibold">Created:</span> 03.02.2025</p>
                                                <p class="mb-0"><i class="ti ti-clock"></i> <span class="fw-semibold">Resolved:</span>
                                                    07.02.2025</p>
                                            </td>
                                            <td>
                                                <a href="#!" class="badge badge-label badge-default">UI</a>
                                                <a href="#!" class="badge badge-label badge-default">Enhancement</a>
                                            </td>
                                            <td>
                                                <div class="progress progress-sm" style="height: 6px;">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                         style="width: 100%;"></div>
                                                </div>
                                                <small class="text-muted">100% Complete</small>
                                            </td>
                                            <td><i class="ti ti-message-circle text-muted me-1"></i> 15 comments</td>
                                            <td><i class="ti ti-paperclip text-muted me-1"></i> 1 file</td>
                                            <td>
                                                <div class="d-flex gap-1 justify-content-center">
                                                    <a href="#!" class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#!" class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#!" data-table-delete-row
                                                       class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><span class="badge text-bg-info fs-xxs badge-label">Review</span></td>
                                            <td>
                                                <a href="#!" class="link-reset text-uppercase fw-semibold">ISSUE-107</a>
                                                <p class="mb-0 text-muted">Push notifications are delayed by 5-10
                                                    minutes</p>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar avatar-xs">
                                                        <img src="assets/images/users/user-5.jpg" alt="avatar-5"
                                                             class="img-fluid rounded-circle">
                                                    </div>
                                                    <div><h5 class="mb-0 lh-base">Olivia Stone</h5></div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0"><i class="ti ti-calendar"></i> <span
                                                        class="fw-semibold">Created:</span> 11.02.2025</p>
                                                <p class="mb-0"><i class="ti ti-clock"></i> <span class="fw-semibold">Due:</span>
                                                    17.02.2025</p>
                                            </td>
                                            <td>
                                                <a href="#!" class="badge badge-label badge-default">Notification</a>
                                                <a href="#!" class="badge badge-label badge-default">Backend</a>
                                            </td>
                                            <td>
                                                <div class="progress progress-sm" style="height: 6px;">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                         style="width: 40%;"></div>
                                                </div>
                                                <small class="text-muted">40% Complete</small>
                                            </td>
                                            <td><i class="ti ti-message-circle text-muted me-1"></i> 5 comments</td>
                                            <td><i class="ti ti-paperclip text-muted me-1"></i> 0 files</td>
                                            <td>
                                                <div class="d-flex gap-1 justify-content-center">
                                                    <a href="#!" class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#!" class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#!" data-table-delete-row
                                                       class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><span class="badge text-bg-secondary fs-xxs badge-label">Pending</span>
                                            </td>
                                            <td>
                                                <a href="#!" class="link-reset text-uppercase fw-semibold">ISSUE-108</a>
                                                <p class="mb-0 text-muted">Contact page returns 404 after deployment</p>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar avatar-xs">
                                                        <img src="assets/images/users/user-1.jpg" alt="avatar-1"
                                                             class="img-fluid rounded-circle">
                                                    </div>
                                                    <div><h5 class="mb-0 lh-base">Daniel Reed</h5></div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0"><i class="ti ti-calendar"></i> <span
                                                        class="fw-semibold">Created:</span> 09.02.2025</p>
                                                <p class="mb-0"><i class="ti ti-clock"></i> <span class="fw-semibold">Due:</span>
                                                    13.02.2025</p>
                                            </td>
                                            <td>
                                                <a href="#!" class="badge badge-label badge-default">Deployment</a>
                                                <a href="#!" class="badge badge-label badge-default">Routing</a>
                                            </td>
                                            <td>
                                                <div class="progress progress-sm" style="height: 6px;">
                                                    <div class="progress-bar bg-secondary" role="progressbar"
                                                         style="width: 10%;"></div>
                                                </div>
                                                <small class="text-muted">10% Complete</small>
                                            </td>
                                            <td><i class="ti ti-message-circle text-muted me-1"></i> 2 comments</td>
                                            <td><i class="ti ti-paperclip text-muted me-1"></i> 1 file</td>
                                            <td>
                                                <div class="d-flex gap-1 justify-content-center">
                                                    <a href="#!" class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#!" class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#!" data-table-delete-row
                                                       class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><span class="badge text-bg-warning fs-xxs badge-label">In Review</span>
                                            </td>
                                            <td>
                                                <a href="#!" class="link-reset text-uppercase fw-semibold">ISSUE-109</a>
                                                <p class="mb-0 text-muted">Export to PDF does not include chart
                                                    section</p>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar avatar-xs">
                                                        <img src="assets/images/users/user-6.jpg" alt="avatar-6"
                                                             class="img-fluid rounded-circle">
                                                    </div>
                                                    <div><h5 class="mb-0 lh-base">Nathan White</h5></div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0"><i class="ti ti-calendar"></i> <span
                                                        class="fw-semibold">Created:</span> 12.02.2025</p>
                                                <p class="mb-0"><i class="ti ti-clock"></i> <span class="fw-semibold">Due:</span>
                                                    18.02.2025</p>
                                            </td>
                                            <td>
                                                <a href="#!" class="badge badge-label badge-default">Export</a>
                                                <a href="#!" class="badge badge-label badge-default">Charts</a>
                                            </td>
                                            <td>
                                                <div class="progress progress-sm" style="height: 6px;">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                         style="width: 50%;"></div>
                                                </div>
                                                <small class="text-muted">50% Complete</small>
                                            </td>
                                            <td><i class="ti ti-message-circle text-muted me-1"></i> 6 comments</td>
                                            <td><i class="ti ti-paperclip text-muted me-1"></i> 2 files</td>
                                            <td>
                                                <div class="d-flex gap-1 justify-content-center">
                                                    <a href="#!" class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#!" class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#!" data-table-delete-row
                                                       class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><span class="badge text-bg-danger fs-xxs badge-label">Open</span></td>
                                            <td>
                                                <a href="#!" class="link-reset text-uppercase fw-semibold">ISSUE-110</a>
                                                <p class="mb-0 text-muted">Search bar does not return any results for
                                                    valid keywords</p>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar avatar-xs">
                                                        <img src="assets/images/users/user-9.jpg" alt="avatar-9"
                                                             class="img-fluid rounded-circle">
                                                    </div>
                                                    <div><h5 class="mb-0 lh-base">Emma Watson</h5></div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0"><i class="ti ti-calendar"></i> <span
                                                        class="fw-semibold">Created:</span> 13.02.2025</p>
                                                <p class="mb-0"><i class="ti ti-clock"></i> <span class="fw-semibold">Due:</span>
                                                    16.02.2025</p>
                                            </td>
                                            <td>
                                                <a href="#!" class="badge badge-label badge-default">Search</a>
                                                <a href="#!" class="badge badge-label badge-default">Bug</a>
                                            </td>
                                            <td>
                                                <div class="progress progress-sm" style="height: 6px;">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                         style="width: 20%;"></div>
                                                </div>
                                                <small class="text-muted">20% Complete</small>
                                            </td>
                                            <td><i class="ti ti-message-circle text-muted me-1"></i> 4 comments</td>
                                            <td><i class="ti ti-paperclip text-muted me-1"></i> 0 files</td>
                                            <td>
                                                <div class="d-flex gap-1 justify-content-center">
                                                    <a href="#!" class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#!" class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#!" data-table-delete-row
                                                       class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><span class="badge text-bg-warning fs-xxs badge-label">In Progress</span>
                                            </td>
                                            <td>
                                                <a href="#!" class="link-reset text-uppercase fw-semibold">ISSUE-111</a>
                                                <p class="mb-0 text-muted">Email verification link expires instantly
                                                    after signup</p>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar avatar-xs">
                                                        <img src="assets/images/users/user-10.jpg" alt="avatar-10"
                                                             class="img-fluid rounded-circle">
                                                    </div>
                                                    <div><h5 class="mb-0 lh-base">Ava Johnson</h5></div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0"><i class="ti ti-calendar"></i> <span
                                                        class="fw-semibold">Created:</span> 10.02.2025</p>
                                                <p class="mb-0"><i class="ti ti-clock"></i> <span class="fw-semibold">Due:</span>
                                                    20.02.2025</p>
                                            </td>
                                            <td>
                                                <a href="#!" class="badge badge-label badge-default">Authentication</a>
                                                <a href="#!" class="badge badge-label badge-default">High Priority</a>
                                            </td>
                                            <td>
                                                <div class="progress progress-sm" style="height: 6px;">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                         style="width: 45%;"></div>
                                                </div>
                                                <small class="text-muted">45% Complete</small>
                                            </td>
                                            <td><i class="ti ti-message-circle text-muted me-1"></i> 6 comments</td>
                                            <td><i class="ti ti-paperclip text-muted me-1"></i> 1 file</td>
                                            <td>
                                                <div class="d-flex gap-1 justify-content-center">
                                                    <a href="#!" class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#!" class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#!" data-table-delete-row
                                                       class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><span class="badge text-bg-info fs-xxs badge-label">Review</span></td>
                                            <td>
                                                <a href="#!" class="link-reset text-uppercase fw-semibold">ISSUE-112</a>
                                                <p class="mb-0 text-muted">Footer links appear broken on Safari
                                                    browser</p>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar avatar-xs">
                                                        <img src="assets/images/users/user-8.jpg" alt="avatar-8"
                                                             class="img-fluid rounded-circle">
                                                    </div>
                                                    <div><h5 class="mb-0 lh-base">Liam Gray</h5></div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0"><i class="ti ti-calendar"></i> <span
                                                        class="fw-semibold">Created:</span> 12.02.2025</p>
                                                <p class="mb-0"><i class="ti ti-clock"></i> <span class="fw-semibold">Due:</span>
                                                    19.02.2025</p>
                                            </td>
                                            <td>
                                                <a href="#!" class="badge badge-label badge-default">UI</a>
                                                <a href="#!" class="badge badge-label badge-default">Safari</a>
                                                <a href="#!" class="badge badge-label badge-default">Low</a>
                                            </td>
                                            <td>
                                                <div class="progress progress-sm" style="height: 6px;">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                         style="width: 30%;"></div>
                                                </div>
                                                <small class="text-muted">30% Complete</small>
                                            </td>
                                            <td><i class="ti ti-message-circle text-muted me-1"></i> 3 comments</td>
                                            <td><i class="ti ti-paperclip text-muted me-1"></i> 0 files</td>
                                            <td>
                                                <div class="d-flex gap-1 justify-content-center">
                                                    <a href="#!" class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#!" class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#!" data-table-delete-row
                                                       class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><span class="badge text-bg-secondary fs-xxs badge-label">Pending</span>
                                            </td>
                                            <td>
                                                <a href="#!" class="link-reset text-uppercase fw-semibold">ISSUE-113</a>
                                                <p class="mb-0 text-muted">Reports are showing times in UTC instead of
                                                    local timezone</p>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar avatar-xs">
                                                        <img src="assets/images/users/user-1.jpg" alt="avatar-11"
                                                             class="img-fluid rounded-circle">
                                                    </div>
                                                    <div><h5 class="mb-0 lh-base">Noah Mitchell</h5></div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0"><i class="ti ti-calendar"></i> <span
                                                        class="fw-semibold">Created:</span> 14.02.2025</p>
                                                <p class="mb-0"><i class="ti ti-clock"></i> <span class="fw-semibold">Due:</span>
                                                    22.02.2025</p>
                                            </td>
                                            <td>
                                                <a href="#!" class="badge badge-label badge-default">Reports</a>
                                                <a href="#!" class="badge badge-label badge-default">Timezone</a>
                                            </td>
                                            <td>
                                                <div class="progress progress-sm" style="height: 6px;">
                                                    <div class="progress-bar bg-secondary" role="progressbar"
                                                         style="width: 15%;"></div>
                                                </div>
                                                <small class="text-muted">15% Complete</small>
                                            </td>
                                            <td><i class="ti ti-message-circle text-muted me-1"></i> 1 comment</td>
                                            <td><i class="ti ti-paperclip text-muted me-1"></i> 1 file</td>
                                            <td>
                                                <div class="d-flex gap-1 justify-content-center">
                                                    <a href="#!" class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#!" class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#!" data-table-delete-row
                                                       class="btn btn-light btn-icon btn-sm rounded-circle"><i
                                                            class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody><!-- end table-body -->
                                    </table><!-- end table -->
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div data-table-pagination-info="issues"></div>

                                    <div data-table-pagination></div>
                                </div>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row-->

        </div>
        <!-- container -->

        <?php include 'partials/footer.php' ?>

    </div>

    <!-- ============================================================== -->
    <!-- End of Main Content -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->

<?php include 'partials/customizer.php' ?>

<?php include 'partials/footer-scripts.php' ?>

<!-- Custom table -->
<script src="assets/js/pages/custom-table.js"></script>

</body>

</html>