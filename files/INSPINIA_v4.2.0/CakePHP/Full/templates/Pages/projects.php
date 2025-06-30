<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Projects']) ?>

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

                <?= $this->element('page_title', ['subtitle' => 'Apps', 'title' => 'Projects']) ?>

                <div class="row mb-3">
                    <div class="col-lg-12">
                        <form class="bg-light-subtle rounded border p-3">
                            <div class="row gap-3">
                                <div class="col">
                                    <div class="row gap-3">
                                        <div class="col-lg-4">
                                            <div class="app-search">
                                                <input type="text" class="form-control" placeholder="Search project name...">
                                                <i data-lucide="search" class="app-search-icon text-muted"></i>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="d-flex flex-wrap align-items-center gap-2">
                                                <span class="me-2 fw-semibold">Filter By:</span>

                                                <!-- Status Filter -->
                                                <div class="app-search">
                                                    <select class="form-select form-control my-1 my-md-0">
                                                        <option selected>Status</option>
                                                        <option value="On Track">On Track</option>
                                                        <option value="Delayed">Delayed</option>
                                                        <option value="At Risk">At Risk</option>
                                                        <option value="Completed">Completed</option>
                                                    </select>
                                                    <i data-lucide="activity" class="app-search-icon text-muted"></i>
                                                </div>

                                                <!-- Team Filter -->
                                                <div class="app-search">
                                                    <select class="form-select form-control my-1 my-md-0">
                                                        <option selected>Team</option>
                                                        <option value="Design">Design</option>
                                                        <option value="Development">Development</option>
                                                        <option value="Marketing">Marketing</option>
                                                        <option value="QA">QA</option>
                                                    </select>
                                                    <i data-lucide="users" class="app-search-icon text-muted"></i>
                                                </div>

                                                <!-- Deadline Filter -->
                                                <div class="app-search">
                                                    <select class="form-select form-control my-1 my-md-0">
                                                        <option selected>Deadline</option>
                                                        <option value="This Week">This Week</option>
                                                        <option value="This Month">This Month</option>
                                                        <option value="Next Month">Next Month</option>
                                                        <option value="No Deadline">No Deadline</option>
                                                    </select>
                                                    <i data-lucide="calendar-clock" class="app-search-icon text-muted"></i>
                                                </div>

                                                <button type="submit" class="btn btn-secondary">Apply</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Layout toggle (grid/list) -->
                                <div class="col-auto">
                                    <div class="d-flex gap-1">
                                        <a href="projects" class="btn btn-primary btn-icon">
                                            <i data-lucide="layout-grid" class="fs-lg"></i>
                                        </a>
                                        <a href="projects-list" class="btn btn-soft-primary btn-icon">
                                            <i data-lucide="list" class="fs-lg"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex mb-4">
                                    <div class="avatar-xl me-3">
                                        <span class="avatar-title text-bg-light rounded">
                                            <i class="ti ti-code-dots fs-24 text-success"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h5 class="mb-1 d-flex align-items-center">
                                            <a href="project-details" class="link-reset">AI Analytics Dashboard</a>
                                        </h5>
                                        <p class="text-muted mb-2 fs-xxs">Updated 5 minutes ago</p>
                                        <span class="badge badge-soft-success fs-xxs badge-label">In Progress</span>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-icon btn-ghost-light text-muted" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical fs-xl"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-share me-2"></i>Share</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-ban me-2"></i>Block</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-list-check text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">18/60 <span class="badge bg-secondary">+4 New</span></h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-paperclip text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">15 Files</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-message-2 text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">5 Comments</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-calendar-time text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">10 Jun, 2025</h5>
                                        </div>
                                    </div>
                                </div>

                                <p class="my-2 text-muted fw-semibold fs-xxs">Team Members:</p>
                                <div class="avatar-group avatar-group-xs mb-3">
                                    <div class="avatar">
                                        <img src="/images/users/user-2.jpg" alt="" class="rounded-circle avatar-xs">
                                    </div>
                                    <div class="avatar">
                                        <img src="/images/users/user-3.jpg" alt="" class="rounded-circle avatar-xs">
                                    </div>
                                    <div class="avatar">
                                        <img src="/images/users/user-5.jpg" alt="" class="rounded-circle avatar-xs">
                                    </div>
                                    <div class="avatar">
                                        <img src="/images/users/user-1.jpg" alt="" class="rounded-circle avatar-xs">
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p class="mb-0 text-muted fw-semibold fs-xxs">Progress</p>
                                        <p class="fw-semibold mb-0">65%</p>
                                    </div>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-success" style="width: 65%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-md-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex mb-4">
                                    <div class="avatar-xl me-3">
                                        <span class="avatar-title text-bg-light rounded">
                                            <i class="ti ti-speakerphone fs-24 text-warning"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h5 class="mb-1 d-flex align-items-center">
                                            <a href="project-details" class="link-reset">Marketing Automation Platform</a>
                                        </h5>
                                        <p class="text-muted mb-2 fs-xxs">Updated 2 hours ago</p>
                                        <span class="badge badge-soft-danger fs-xxs badge-label">Delayed</span>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-icon btn-ghost-light text-muted" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical fs-xl"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-share me-2"></i>Share</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-ban me-2"></i>Block</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-list-check text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">25/80</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-paperclip text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">22 Files</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-message-2 text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">12 Comments</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-calendar-time text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">25 May, 2025</h5>
                                        </div>
                                    </div>
                                </div>

                                <p class="my-2 text-muted fw-semibold fs-xxs">Team Members:</p>
                                <div class="avatar-group avatar-group-xs mb-3">
                                    <div class="avatar">
                                        <img src="/images/users/user-4.jpg" alt="" class="rounded-circle avatar-xs">
                                    </div>
                                    <div class="avatar">
                                        <img src="/images/users/user-6.jpg" alt="" class="rounded-circle avatar-xs">
                                    </div>
                                    <div class="avatar">
                                        <img src="/images/users/user-7.jpg" alt="" class="rounded-circle avatar-xs">
                                    </div>
                                    <div class="avatar">
                                        <img src="/images/users/user-8.jpg" alt="" class="rounded-circle avatar-xs">
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p class="mb-0 text-muted fw-semibold fs-xxs">Progress</p>
                                        <p class="fw-semibold mb-0">45%</p>
                                    </div>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-danger" style="width: 45%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <!-- Project 3 -->
                    <div class="col-md-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex mb-4">
                                    <div class="avatar-xl me-3">
                                        <span class="avatar-title text-bg-light rounded">
                                            <i class="ti ti-world-www fs-24 text-info"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h5 class="mb-1 d-flex align-items-center">
                                            <a href="project-details" class="link-reset">Website Redesign</a>
                                        </h5>
                                        <p class="text-muted mb-2 fs-xxs">Updated 1 day ago</p>
                                        <span class="badge badge-soft-warning fs-xxs badge-label">Pending Review</span>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-icon btn-ghost-light text-muted" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical fs-xl"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-share me-2"></i>Share</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-ban me-2"></i>Block</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-list-check text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">35/90</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-paperclip text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">19 Files</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-message-2 text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">8 Comments</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-calendar-time text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">15 May, 2025</h5>
                                        </div>
                                    </div>
                                </div>

                                <p class="my-2 text-muted fw-semibold fs-xxs">Team Members:</p>
                                <div class="avatar-group avatar-group-xs mb-3">
                                    <div class="avatar">
                                        <img src="/images/users/user-9.jpg" alt="" class="rounded-circle avatar-xs">
                                    </div>
                                    <div class="avatar">
                                        <img src="/images/users/user-3.jpg" alt="" class="rounded-circle avatar-xs">
                                    </div>
                                    <div class="avatar">
                                        <img src="/images/users/user-5.jpg" alt="" class="rounded-circle avatar-xs">
                                    </div>
                                    <div class="avatar">
                                        <img src="/images/users/user-1.jpg" alt="" class="rounded-circle avatar-xs">
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p class="mb-0 text-muted fw-semibold fs-xxs">Progress</p>
                                        <p class="fw-semibold mb-0">40%</p>
                                    </div>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-info" style="width: 40%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 4 -->
                    <div class="col-md-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex mb-4">
                                    <div class="avatar-xl me-3">
                                        <span class="avatar-title text-bg-light rounded">
                                            <i class="ti ti-chart-bar fs-24 text-secondary"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h5 class="mb-1 d-flex align-items-center">
                                            <a href="project-details" class="link-reset">Sales Insight Tool</a>
                                        </h5>
                                        <p class="text-muted mb-2 fs-xxs">Updated 3 days ago</p>
                                        <span class="badge badge-soft-primary fs-xxs badge-label">In Progress</span>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-icon btn-ghost-light text-muted" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical fs-xl"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-share me-2"></i>Share</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-ban me-2"></i>Block</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-list-check text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">12/50 <span class="badge bg-secondary">+2 New</span></h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-paperclip text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">10 Files</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-message-2 text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">3 Comments</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-calendar-time text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">20 May, 2025</h5>
                                        </div>
                                    </div>
                                </div>

                                <p class="my-2 text-muted fw-semibold fs-xxs">Team Members:</p>
                                <div class="avatar-group avatar-group-xs mb-3">
                                    <div class="avatar"><img src="/images/users/user-2.jpg" class="rounded-circle avatar-xs" alt=""></div>
                                    <div class="avatar"><img src="/images/users/user-4.jpg" class="rounded-circle avatar-xs" alt=""></div>
                                    <div class="avatar"><img src="/images/users/user-5.jpg" class="rounded-circle avatar-xs" alt=""></div>
                                    <div class="avatar"><img src="/images/users/user-7.jpg" class="rounded-circle avatar-xs" alt=""></div>
                                </div>

                                <div class="mt-3">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p class="mb-0 text-muted fw-semibold fs-xxs">Progress</p>
                                        <p class="fw-semibold mb-0">30%</p>
                                    </div>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-primary" style="width: 30%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 5 -->
                    <div class="col-md-6 col-xxl-3">
                        <div class="card">
                            <div class="card-header bg-light-subtle border-light p-3">
                                <div class="avatar-xl me-3">
                                    <span class="avatar-title text-bg-light rounded-circle">
                                        <i class="ti ti-bulb fs-24 text-warning"></i>
                                    </span>
                                </div>
                                <div>
                                    <h5 class="mb-1 d-flex align-items-center">
                                        <a href="project-details" class="link-reset">Cyber Security System</a>
                                    </h5>
                                    <p class="text-muted mb-2 fs-xxs">Updated 4 hours ago</p>
                                    <span class="badge badge-soft-success fs-xxs badge-label">On Track</span>
                                </div>
                                <div class="ms-auto">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-icon btn-ghost-light text-muted" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical fs-xl"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i class="ti ti-share me-2"></i>Share</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i>Edit</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ti ti-ban me-2"></i>Block</a></li>
                                            <li><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-list-check text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">45/100</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-paperclip text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">35 Files</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-message-2 text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">14 Comments</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-calendar-time text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">5 Jul, 2025</h5>
                                        </div>
                                    </div>
                                </div>

                                <p class="my-2 text-muted fw-semibold fs-xxs">Team Members:</p>
                                <div class="avatar-group avatar-group-xs mb-3">
                                    <div class="avatar"><img src="/images/users/user-1.jpg" class="rounded-circle avatar-xs" alt=""></div>
                                    <div class="avatar"><img src="/images/users/user-4.jpg" class="rounded-circle avatar-xs" alt=""></div>
                                    <div class="avatar"><img src="/images/users/user-5.jpg" class="rounded-circle avatar-xs" alt=""></div>
                                    <div class="avatar"><img src="/images/users/user-8.jpg" class="rounded-circle avatar-xs" alt=""></div>
                                </div>

                                <div class="mt-3">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p class="mb-0 text-muted fw-semibold fs-xxs">Progress</p>
                                        <p class="fw-semibold mb-0">70%</p>
                                    </div>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-success" style="width: 70%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xxl-3">
                        <div class="card">
                            <div class="card-header bg-light-subtle border-light p-3">
                                <div class="avatar-xl me-3">
                                    <span class="avatar-title text-bg-light rounded-circle">
                                        <i class="ti ti-device-desktop-analytics fs-24 text-primary"></i>
                                    </span>
                                </div>
                                <div>
                                    <h5 class="mb-1 d-flex align-items-center">
                                        <a href="project-details" class="link-reset">AI Performance Dashboard</a>
                                    </h5>
                                    <p class="text-muted mb-2 fs-xxs">Updated 2 days ago</p>
                                    <span class="badge badge-soft-warning fs-xxs badge-label">Pending Review</span>
                                </div>
                                <div class="ms-auto">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-icon btn-ghost-light text-muted" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical fs-xl"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i class="ti ti-share me-2"></i>Share</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i>Edit</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ti ti-ban me-2"></i>Block</a></li>
                                            <li><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-list-check text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">28/40 <span class="badge bg-secondary">+4 New</span></h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-paperclip text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">18 Files</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-message-2 text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">9 Comments</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-calendar-time text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">15 Jun, 2025</h5>
                                        </div>
                                    </div>
                                </div>

                                <p class="my-2 text-muted fw-semibold fs-xxs">Team Members:</p>
                                <div class="avatar-group avatar-group-xs mb-3">
                                    <div class="avatar"><img src="/images/users/user-6.jpg" class="rounded-circle avatar-xs" alt=""></div>
                                    <div class="avatar"><img src="/images/users/user-7.jpg" class="rounded-circle avatar-xs" alt=""></div>
                                    <div class="avatar"><img src="/images/users/user-2.jpg" class="rounded-circle avatar-xs" alt=""></div>
                                    <div class="avatar"><img src="/images/users/user-3.jpg" class="rounded-circle avatar-xs" alt=""></div>
                                </div>

                                <div class="mt-3">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p class="mb-0 text-muted fw-semibold fs-xxs">Progress</p>
                                        <p class="fw-semibold mb-0">65%</p>
                                    </div>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-info" style="width: 65%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- en col-->

                    <div class="col-md-6 col-xxl-3">
                        <div class="card">
                            <div class="card-header bg-light-subtle border-light p-3">
                                <div class="avatar-xl me-3">
                                    <span class="avatar-title text-bg-light rounded-circle">
                                        <i class="ti ti-cloud-code fs-24 text-info"></i>
                                    </span>
                                </div>
                                <div>
                                    <h5 class="mb-1 d-flex align-items-center">
                                        <a href="project-details" class="link-reset">Cloud Sync Platform</a>
                                    </h5>
                                    <p class="text-muted mb-2 fs-xxs">Updated 10 mins ago</p>
                                    <span class="badge badge-soft-info fs-xxs badge-label">In Progress</span>
                                </div>
                                <div class="ms-auto">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-icon btn-ghost-light text-muted" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical fs-xl"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i class="ti ti-share me-2"></i>Share</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i>Edit</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ti ti-ban me-2"></i>Block</a></li>
                                            <li><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-list-check text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">12/30</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-paperclip text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">8 Files</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-message-2 text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">3 Comments</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-calendar-time text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">28 Apr, 2025</h5>
                                        </div>
                                    </div>
                                </div>

                                <p class="my-2 text-muted fw-semibold fs-xxs">Team Members:</p>
                                <div class="avatar-group avatar-group-xs mb-3">
                                    <div class="avatar"><img src="/images/users/user-9.jpg" class="rounded-circle avatar-xs" alt=""></div>
                                    <div class="avatar"><img src="/images/users/user-10.jpg" class="rounded-circle avatar-xs" alt=""></div>
                                    <div class="avatar"><img src="/images/users/user-2.jpg" class="rounded-circle avatar-xs" alt=""></div>
                                </div>

                                <div class="mt-3">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p class="mb-0 text-muted fw-semibold fs-xxs">Progress</p>
                                        <p class="fw-semibold mb-0">40%</p>
                                    </div>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-warning" style="width: 40%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-md-6 col-xxl-3">
                        <div class="card">
                            <div class="card-header bg-light-subtle border-light p-3">
                                <div class="avatar-xl me-3">
                                    <span class="avatar-title text-bg-light rounded-circle">
                                        <i class="ti ti-database-search fs-24 text-danger"></i>
                                    </span>
                                </div>
                                <div>
                                    <h5 class="mb-1 d-flex align-items-center">
                                        <a href="project-details" class="link-reset">Data Mining Toolkit</a>
                                    </h5>
                                    <p class="text-muted mb-2 fs-xxs">Updated 30 mins ago</p>
                                    <span class="badge badge-soft-danger fs-xxs badge-label">At Risk</span>
                                </div>
                                <div class="ms-auto">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-icon btn-ghost-light text-muted" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical fs-xl"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i class="ti ti-share me-2"></i>Share</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i>Edit</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ti ti-ban me-2"></i>Block</a></li>
                                            <li><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-list-check text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">7/25 <span class="badge bg-secondary">+2 New</span></h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-paperclip text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">12 Files</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-message-2 text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">5 Comments</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <i class="ti ti-calendar-time text-muted fs-lg"></i>
                                            <h5 class="fs-base mb-0 fw-medium">10 May, 2025</h5>
                                        </div>
                                    </div>
                                </div>

                                <p class="my-2 text-muted fw-semibold fs-xxs">Team Members:</p>
                                <div class="avatar-group avatar-group-xs mb-3">
                                    <div class="avatar"><img src="/images/users/user-4.jpg" class="rounded-circle avatar-xs" alt=""></div>
                                    <div class="avatar"><img src="/images/users/user-6.jpg" class="rounded-circle avatar-xs" alt=""></div>
                                    <div class="avatar"><img src="/images/users/user-9.jpg" class="rounded-circle avatar-xs" alt=""></div>
                                </div>

                                <div class="mt-3">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p class="mb-0 text-muted fw-semibold fs-xxs">Progress</p>
                                        <p class="fw-semibold mb-0">28%</p>
                                    </div>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-danger" style="width: 28%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                </div> <!-- end row-->

                <ul class="pagination pagination-rounded pagination-boxed justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="javascript: void(0);" aria-label="Next">
                            <span aria-hidden="true">»</span>
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