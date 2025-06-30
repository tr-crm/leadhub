<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Projects List']) ?>

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

                <?= $this->element('page_title', ['subtitle' => 'Apps', 'title' => 'Projects List']) ?>

                <div class="row">
                    <div class="col-12">
                        <div data-table data-table-rows-per-page="8" class="card">
                            <div class="card-header border-light justify-content-between">

                                <div class="d-flex gap-2">
                                    <div class="app-search">
                                        <input data-table-search type="search" class="form-control" placeholder="Search project name...">
                                        <i data-lucide="search" class="app-search-icon text-muted"></i>
                                    </div>
                                    <button data-table-delete-selected class="btn btn-danger d-none">Delete</button>
                                </div>

                                <div class="d-flex align-items-center gap-2">
                                    <span class="me-2 fw-semibold">Filter By:</span>

                                    <!-- Status Filter -->
                                    <div class="app-search">
                                        <select data-table-filter="status" class="form-select form-control my-1 my-md-0">
                                            <option value="All">Status</option>
                                            <option value="In Progress">In Progress</option>
                                            <option value="Pending Review">Pending Review</option>
                                            <option value="Overdue">Overdue</option>
                                            <option value="In Review">In Review</option>
                                            <option value="Completed">Completed</option>
                                            <option value="Scheduled">Scheduled</option>
                                            <option value="On Hold">On Hold</option>
                                            <option value="Pending">Pending</option>
                                        </select>
                                        <i data-lucide="activity" class="app-search-icon text-muted"></i>
                                    </div>

                                    <!-- Deadline Filter -->
                                    <div class="app-search">
                                        <select data-table-range-filter="date" class="form-select form-control my-1 my-md-0">
                                            <option value="All">Deadline</option>
                                            <option value="Today">Today</option>
                                            <option value="Last 7 Days">Last 7 Days</option>
                                            <option value="Last 30 Days">Last 30 Days</option>
                                            <option value="This Year">This Year</option>
                                        </select>
                                        <i data-lucide="calendar-clock" class="app-search-icon text-muted"></i>
                                    </div>

                                    <!-- Records Per Page -->
                                    <div>
                                        <select data-table-set-rows-per-page class="form-select form-control my-1 my-md-0">
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="d-flex gap-1">
                                    <a href="projects" class="btn btn-soft-primary btn-icon">
                                        <i data-lucide="layout-grid" class="fs-lg"></i>
                                    </a>
                                    <a href="projects-list" class="btn btn-primary btn-icon">
                                        <i data-lucide="list" class="fs-lg"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-custom table-centered table-select table-hover w-100 mb-0">
                                    <thead class="bg-light align-middle bg-opacity-25 thead-sm">
                                        <tr class="text-uppercase fs-xxs">
                                            <th class="ps-3" style="width: 1%;">
                                                <input data-table-select-all class="form-check-input form-check-input-light fs-14 mt-0" type="checkbox" id="select-all-files" value="option">
                                            </th>
                                            <th data-table-sort="project">Project</th>
                                            <th>Members</th>
                                            <th data-table-sort data-column="status">Status</th>
                                            <th>Tasks</th>
                                            <th>Progress</th>
                                            <th>Attachments</th>
                                            <th>Comments</th>
                                            <th data-table-sort data-column="date">Due Date</th>
                                            <th class="text-center" style="width: 1%;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Row 1 -->
                                        <tr>
                                            <td class="ps-3"><input class="form-check-input form-check-input-light fs-14 file-item-check mt-0" type="checkbox" value="option"></td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="avatar-md me-3">
                                                        <span class="avatar-title text-bg-light rounded">
                                                            <i class="ti ti-code-dots fs-24 text-success"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-1 d-flex align-items-center">
                                                            <a data-sort="project" href="project-details" class="link-reset">AI Analytics
                                                                Dashboard</a>
                                                        </h5>
                                                        <p class="text-muted mb-0 fs-xxs">Updated 5 minutes ago</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group avatar-group-xs">
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
                                            </td>
                                            <td>
                                                <span class="badge badge-soft-success fs-xxs badge-label">In Progress</span>
                                            </td>
                                            <td>
                                                <h5 class="fs-base mb-0 fw-medium">18/60 <span class="badge bg-secondary">+4 New</span></h5>
                                            </td>
                                            <td>
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar bg-success" style="width: 65%;"></div>
                                                </div>
                                            </td>
                                            <td>
                                                15 Files
                                            </td>
                                            <td>
                                                5 Comments
                                            </td>
                                            <td>
                                                10 May, 2025
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Row 2 -->
                                        <tr>
                                            <td class="ps-3"><input class="form-check-input form-check-input-light fs-14 file-item-check mt-0" type="checkbox" value="option"></td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="avatar-md me-3">
                                                        <span class="avatar-title text-bg-light rounded">
                                                            <i class="ti ti-device-laptop fs-24 text-primary"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-1 d-flex align-items-center">
                                                            <a data-sort="project" href="project-details" class="link-reset">E-commerce
                                                                Platform</a>
                                                        </h5>
                                                        <p class="text-muted mb-0 fs-xxs">Updated 12 minutes ago</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group avatar-group-xs">
                                                    <div class="avatar"><img src="/images/users/user-6.jpg" class="rounded-circle avatar-xs" alt="user-img"></div>
                                                    <div class="avatar"><img src="/images/users/user-8.jpg" class="rounded-circle avatar-xs" alt="user-img"></div>
                                                    <div class="avatar"><img src="/images/users/user-7.jpg" class="rounded-circle avatar-xs" alt="user-img"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-soft-warning fs-xxs badge-label">Pending Review</span>
                                            </td>
                                            <td>
                                                <h5 class="fs-base mb-0 fw-medium">10/40</h5>
                                            </td>
                                            <td>
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar bg-warning" style="width: 25%;"></div>
                                                </div>
                                            </td>
                                            <td>8 Files</td>
                                            <td>3 Comments</td>
                                            <td>12 May, 2025</td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Row 3 -->
                                        <tr>
                                            <td class="ps-3"><input class="form-check-input form-check-input-light fs-14 file-item-check mt-0" type="checkbox" value="option"></td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="avatar-md me-3">
                                                        <span class="avatar-title text-bg-light rounded">
                                                            <i class="ti ti-brush fs-24 text-info"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-1 d-flex align-items-center">
                                                            <a data-sort="project" href="project-details" class="link-reset">UI Kit Design</a>
                                                        </h5>
                                                        <p class="text-muted mb-0 fs-xxs">Updated 30 minutes ago</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group avatar-group-xs">
                                                    <div class="avatar"><img src="/images/users/user-4.jpg" class="rounded-circle avatar-xs" alt="user-img"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-soft-danger fs-xxs badge-label">Overdue</span></td>
                                            <td>
                                                <h5 class="fs-base mb-0 fw-medium">20/40</h5>
                                            </td>
                                            <td>
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar bg-danger" style="width: 50%;"></div>
                                                </div>
                                            </td>
                                            <td>12 Files</td>
                                            <td>7 Comments</td>
                                            <td>5 May, 2025</td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Row 4 -->
                                        <tr>
                                            <td class="ps-3"><input class="form-check-input form-check-input-light fs-14 file-item-check mt-0" type="checkbox" value="option"></td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="avatar-md me-3">
                                                        <span class="avatar-title text-bg-light rounded">
                                                            <i class="ti ti-world fs-24 text-warning"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-1 d-flex align-items-center">
                                                            <a data-sort="project" href="project-details" class="link-reset">Website
                                                                Redesign</a>
                                                        </h5>
                                                        <p class="text-muted mb-0 fs-xxs">Updated 1 hour ago</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group avatar-group-xs">
                                                    <div class="avatar"><img src="/images/users/user-2.jpg" class="rounded-circle avatar-xs" alt="user-img"></div>
                                                    <div class="avatar"><img src="/images/users/user-7.jpg" class="rounded-circle avatar-xs" alt="user-img"></div>
                                                    <div class="avatar"><img src="/images/users/user-9.jpg" class="rounded-circle avatar-xs" alt="user-img"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-soft-info fs-xxs badge-label">In Review</span></td>
                                            <td>
                                                <h5 class="fs-base mb-0 fw-medium">15/30 <span class="badge bg-secondary">+1 New</span></h5>
                                            </td>
                                            <td>
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar bg-info" style="width: 50%;"></div>
                                                </div>
                                            </td>
                                            <td>6 Files</td>
                                            <td>2 Comments</td>
                                            <td>18 May, 2025</td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Row 5 -->
                                        <tr>
                                            <td class="ps-3"><input class="form-check-input form-check-input-light fs-14 file-item-check mt-0" type="checkbox"></td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="avatar-md me-3">
                                                        <span class="avatar-title text-bg-light rounded">
                                                            <i class="ti ti-chart-bar fs-24 text-danger"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-1 d-flex align-items-center">
                                                            <a data-sort="project" href="project-details" class="link-reset">Marketing
                                                                Report</a>
                                                        </h5>
                                                        <p class="text-muted mb-0 fs-xxs">Updated 2 hours ago</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group avatar-group-xs">
                                                    <div class="avatar"><img src="/images/users/user-5.jpg" class="rounded-circle avatar-xs" alt="user-img"></div>
                                                    <div class="avatar"><img src="/images/users/user-10.jpg" class="rounded-circle avatar-xs" alt="user-img"></div>
                                                    <div class="avatar"><img src="/images/users/user-8.jpg" class="rounded-circle avatar-xs" alt="user-img"></div>
                                                    <div class="avatar"><img src="/images/users/user-2.jpg" class="rounded-circle avatar-xs" alt="user-img"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-soft-primary fs-xxs badge-label">Completed</span></td>
                                            <td>
                                                <h5 class="fs-base mb-0 fw-medium">40/40 <span class="badge bg-success">✓</span>
                                                </h5>
                                            </td>
                                            <td>
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar bg-primary" style="width: 100%;"></div>
                                                </div>
                                            </td>
                                            <td>20 Files</td>
                                            <td>10 Comments</td>
                                            <td>1 May, 2025</td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Row 6 -->
                                        <tr>
                                            <td class="ps-3"><input class="form-check-input form-check-input-light fs-14 file-item-check mt-0" type="checkbox"></td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="avatar-md me-3">
                                                        <span class="avatar-title text-bg-light rounded">
                                                            <i class="ti ti-presentation fs-24 text-secondary"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-1 d-flex align-items-center">
                                                            <a data-sort="project" href="project-details" class="link-reset">Sales Pitch
                                                                Deck</a>
                                                        </h5>
                                                        <p class="text-muted mb-0 fs-xxs">Updated 45 minutes ago</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group avatar-group-xs">
                                                    <div class="avatar"><img src="/images/users/user-9.jpg" class="rounded-circle avatar-xs" alt="user-img"></div>
                                                    <div class="avatar"><img src="/images/users/user-10.jpg" class="rounded-circle avatar-xs" alt="user-img"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-soft-info fs-xxs badge-label">In Review</span></td>
                                            <td>
                                                <h5 class="fs-base mb-0 fw-medium">9/12 <span class="badge bg-secondary">+1 New</span></h5>
                                            </td>
                                            <td>
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar bg-info" style="width: 75%;"></div>
                                                </div>
                                            </td>
                                            <td>5 Files</td>
                                            <td>1 Comment</td>
                                            <td>9 May, 2025</td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Row 7 -->
                                        <tr>
                                            <td class="ps-3"><input class="form-check-input form-check-input-light fs-14 file-item-check mt-0" type="checkbox"></td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="avatar-md me-3">
                                                        <span class="avatar-title text-bg-light rounded">
                                                            <i class="ti ti-brand-figma fs-24 text-pink"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-1 d-flex align-items-center">
                                                            <a data-sort="project" href="project-details" class="link-reset">Mobile UI
                                                                Mockups</a>
                                                        </h5>
                                                        <p class="text-muted mb-0 fs-xxs">Updated yesterday</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group avatar-group-xs">
                                                    <div class="avatar"><img src="/images/users/user-7.jpg" class="rounded-circle avatar-xs" alt="user-img"></div>
                                                    <div class="avatar"><img src="/images/users/user-4.jpg" class="rounded-circle avatar-xs" alt="user-img"></div>
                                                    <div class="avatar"><img src="/images/users/user-5.jpg" class="rounded-circle avatar-xs" alt="user-img"></div>
                                                    <div class="avatar"><img src="/images/users/user-1.jpg" class="rounded-circle avatar-xs" alt="user-img"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-soft-success fs-xxs badge-label">In Progress</span></td>
                                            <td>
                                                <h5 class="fs-base mb-0 fw-medium">6/10 <span class="badge bg-secondary">+3 New</span></h5>
                                            </td>
                                            <td>
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar bg-success" style="width: 60%;"></div>
                                                </div>
                                            </td>
                                            <td>7 Files</td>
                                            <td>0 Comments</td>
                                            <td>6 May, 2025</td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Row 8 -->
                                        <tr>
                                            <td class="ps-3"><input class="form-check-input form-check-input-light fs-14 file-item-check mt-0" type="checkbox"></td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="avatar-md me-3">
                                                        <span class="avatar-title text-bg-light rounded">
                                                            <i class="ti ti-server fs-24 text-teal"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-1 d-flex align-items-center">
                                                            <a data-sort="project" href="project-details" class="link-reset">Server
                                                                Maintenance</a>
                                                        </h5>
                                                        <p class="text-muted mb-0 fs-xxs">Updated 3 days ago</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group avatar-group-xs">
                                                    <div class="avatar"><img src="/images/users/user-6.jpg" class="rounded-circle avatar-xs" alt="user-img"></div>
                                                    <div class="avatar"><img src="/images/users/user-5.jpg" class="rounded-circle avatar-xs" alt="user-img"></div>
                                                    <div class="avatar"><img src="/images/users/user-9.jpg" class="rounded-circle avatar-xs" alt="user-img"></div>
                                                    <div class="avatar"><img src="/images/users/user-10.jpg" class="rounded-circle avatar-xs" alt="user-img"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-soft-secondary fs-xxs badge-label">Scheduled</span></td>
                                            <td>
                                                <h5 class="fs-base mb-0 fw-medium">3/3 <span class="badge bg-success">✓</span>
                                                </h5>
                                            </td>
                                            <td>
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar bg-secondary" style="width: 100%;"></div>
                                                </div>
                                            </td>
                                            <td>2 Files</td>
                                            <td>1 Comment</td>
                                            <td>3 May, 2025</td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Row 9 -->
                                        <tr>
                                            <td class="ps-3"><input class="form-check-input form-check-input-light fs-14 file-item-check mt-0" type="checkbox"></td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="avatar-md me-3">
                                                        <span class="avatar-title text-bg-light rounded">
                                                            <i class="ti ti-shield-check fs-24 text-purple"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-1 d-flex align-items-center">
                                                            <a data-sort="project" href="project-details" class="link-reset">Security Audit</a>
                                                        </h5>
                                                        <p class="text-muted mb-0 fs-xxs">Updated last week</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group avatar-group-xs">
                                                    <div class="avatar"><img src="/images/users/user-7.jpg" class="rounded-circle avatar-xs" alt="user-img"></div>
                                                    <div class="avatar"><img src="/images/users/user-9.jpg" class="rounded-circle avatar-xs" alt="user-img"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-soft-dark fs-xxs badge-label">On Hold</span></td>
                                            <td>
                                                <h5 class="fs-base mb-0 fw-medium">5/10 <span class="badge bg-secondary">+1 New</span></h5>
                                            </td>
                                            <td>
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar bg-dark" style="width: 50%;"></div>
                                                </div>
                                            </td>
                                            <td>6 Files</td>
                                            <td>4 Comments</td>
                                            <td>2 May, 2025</td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Row 10 -->
                                        <tr>
                                            <td class="ps-3"><input class="form-check-input form-check-input-light fs-14 file-item-check mt-0" type="checkbox"></td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="avatar-md me-3">
                                                        <span class="avatar-title text-bg-light rounded">
                                                            <i class="ti ti-puzzle fs-24 text-cyan"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-1 d-flex align-items-center">
                                                            <a data-sort="project" href="project-details" class="link-reset">Plugin
                                                                Development</a>
                                                        </h5>
                                                        <p class="text-muted mb-0 fs-xxs">Updated 4 days ago</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group avatar-group-xs">
                                                    <div class="avatar"><img src="/images/users/user-3.jpg" class="rounded-circle avatar-xs" alt="user-img"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-soft-warning fs-xxs badge-label">Pending</span></td>
                                            <td>
                                                <h5 class="fs-base mb-0 fw-medium">2/6 <span class="badge bg-secondary">+1 New</span></h5>
                                            </td>
                                            <td>
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar bg-warning" style="width: 33%;"></div>
                                                </div>
                                            </td>
                                            <td>4 Files</td>
                                            <td>2 Comments</td>
                                            <td>7 May, 2025</td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer border-0">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div data-table-pagination-info="projects"></div>
                                    <div data-table-pagination></div>
                                </div>
                            </div>
                        </div>

                    </div><!-- end col -->
                </div><!-- end row -->

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

    <!-- Custom table -->
    <script src="/js/pages/custom-table.js"></script>

</body>

</html>