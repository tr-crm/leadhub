<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'User Roles']) ?>

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

                <?= $this->element('page_title', ['subtitle' => 'Users', 'title' => 'Roles']) ?>

                <div class="row justify-content-center">
                    <div class="col-xxl-10">

                        <div class="d-flex align-items-sm-center flex-sm-row flex-column mb-3">
                            <div class="flex-grow-1">
                                <h4 class="fs-xl mb-1">Manage Roles</h4>
                                <p class="text-muted mb-0">Manage roles for smoother operations and secure access.</p>
                            </div>

                            <div class="text-end">
                                <a href="javascript: void(0);" class="btn btn-success">
                                    <i class="ti ti-plus me-1"></i> Add New Role
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xl rounded-circle bg-primary-subtle d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-shield-lock fs-24 text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="ms-3">
                                                <h5 class="mb-2">Security Officer</h5>
                                                <p class="text-muted mb-0 fs-base">Handles platform safety and protocol
                                                    reviews.</p>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="dropdown">
                                                    <a href="#" class="text-muted fs-xl" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#"><i class="ti ti-eye me-2"></i>View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i>Edit</a></li>
                                                        <li><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash me-2"></i>Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="list-unstyled mb-3">
                                            <li class="d-flex align-items-center mb-2">
                                                <span class="ti ti-check fs-lg text-success me-2"></span> Daily Risk
                                                Assessment
                                            </li>
                                            <li class="d-flex align-items-center mb-2">
                                                <span class="ti ti-check fs-lg text-success me-2"></span> Manage Security
                                                Logs
                                            </li>
                                            <li class="d-flex align-items-center mb-2">
                                                <span class="ti ti-check fs-lg text-success me-2"></span> Control Access
                                                Rights
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <span class="ti ti-check fs-lg text-success me-2"></span> Emergency
                                                Protocols
                                            </li>
                                        </ul>

                                        <p class="mb-2 text-muted">Total 4 users</p>
                                        <div class="avatar-group avatar-group-sm mb-3">
                                            <div class="avatar">
                                                <img src="/images/users/user-7.jpg" alt="" class="rounded-circle avatar-sm">
                                            </div>
                                            <div class="avatar">
                                                <img src="/images/users/user-8.jpg" alt="" class="rounded-circle avatar-sm">
                                            </div>
                                            <div class="avatar">
                                                <img src="/images/users/user-9.jpg" alt="" class="rounded-circle avatar-sm">
                                            </div>
                                            <div class="avatar">
                                                <img src="/images/users/user-10.jpg" alt="" class="rounded-circle avatar-sm">
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="text-muted fs-xs"><i class="ti ti-clock me-1"></i>Updated 1 hour ago</span>
                                            <a href="#" class="btn btn-sm btn-outline-primary rounded-pill">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xl rounded-circle bg-success-subtle d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-briefcase fs-24 text-success"></i>
                                                </div>
                                            </div>
                                            <div class="ms-3">
                                                <h5 class="mb-2">Project Manager</h5>
                                                <p class="text-muted mb-0 fs-base">Coordinates planning and team delivery
                                                    timelines.</p>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="dropdown">
                                                    <a href="#" class="text-muted fs-xl" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#"><i class="ti ti-eye me-2"></i>View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i>Edit</a></li>
                                                        <li><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash me-2"></i>Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="list-unstyled mb-3">
                                            <li class="d-flex align-items-center mb-2"><span class="ti ti-check fs-lg text-success me-2"></span> Timeline Tracking
                                            </li>
                                            <li class="d-flex align-items-center mb-2"><span class="ti ti-check fs-lg text-success me-2"></span> Task Assignments
                                            </li>
                                            <li class="d-flex align-items-center mb-2"><span class="ti ti-check fs-lg text-success me-2"></span> Budget Control
                                            </li>
                                            <li class="d-flex align-items-center"><span class="ti ti-check fs-lg text-success me-2"></span> Stakeholder
                                                Reporting
                                            </li>
                                        </ul>

                                        <p class="mb-2 text-muted">Total 5 users</p>
                                        <div class="avatar-group avatar-group-sm mb-3">
                                            <div class="avatar"><img src="/images/users/user-2.jpg" class="rounded-circle avatar-sm" alt=""></div>
                                            <div class="avatar"><img src="/images/users/user-5.jpg" class="rounded-circle avatar-sm" alt=""></div>
                                            <div class="avatar"><img src="/images/users/user-6.jpg" class="rounded-circle avatar-sm" alt=""></div>
                                            <div class="avatar"><img src="/images/users/user-1.jpg" class="rounded-circle avatar-sm" alt=""></div>
                                            <div class="avatar"><img src="/images/users/user-8.jpg" class="rounded-circle avatar-sm" alt=""></div>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="text-muted fs-xs"><i class="ti ti-clock me-1"></i>Updated 2 hours ago</span>
                                            <a href="#" class="btn btn-sm btn-outline-success rounded-pill">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xl rounded-circle bg-primary-subtle d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-code fs-24 text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="ms-3">
                                                <h5 class="mb-2">Developer</h5>
                                                <p class="text-muted mb-0 fs-base">Builds and maintains the platform core
                                                    features.</p>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="dropdown">
                                                    <a href="#" class="text-muted fs-xl" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#"><i class="ti ti-eye me-2"></i>View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i>Edit</a></li>
                                                        <li><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash me-2"></i>Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="list-unstyled mb-3">
                                            <li class="d-flex align-items-center mb-2"><span class="ti ti-check fs-lg text-success me-2"></span> Codebase Maintenance
                                            </li>
                                            <li class="d-flex align-items-center mb-2"><span class="ti ti-check fs-lg text-success me-2"></span> API Integration
                                            </li>
                                            <li class="d-flex align-items-center mb-2"><span class="ti ti-check fs-lg text-success me-2"></span> Unit Testing
                                            </li>
                                            <li class="d-flex align-items-center"><span class="ti ti-check fs-lg text-success me-2"></span> Feature Deployment
                                            </li>
                                        </ul>

                                        <p class="mb-2 text-muted">Total 6 users</p>
                                        <div class="avatar-group avatar-group-sm mb-3">
                                            <div class="avatar"><img src="/images/users/user-3.jpg" class="rounded-circle avatar-sm" alt=""></div>
                                            <div class="avatar"><img src="/images/users/user-4.jpg" class="rounded-circle avatar-sm" alt=""></div>
                                            <div class="avatar"><img src="/images/users/user-9.jpg" class="rounded-circle avatar-sm" alt=""></div>
                                            <div class="avatar"><img src="/images/users/user-10.jpg" class="rounded-circle avatar-sm" alt=""></div>
                                            <div class="avatar avatar-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="2 More">
                                                <span class="avatar-title text-bg-primary rounded-circle fw-bold">
                                                    +2
                                                </span>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="text-muted fs-xs"><i class="ti ti-clock me-1"></i>Updated 3 hours ago</span>
                                            <a href="#" class="btn btn-sm btn-outline-primary rounded-pill">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="card">
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xl rounded-circle bg-primary-subtle d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-headset fs-24 text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="ms-3">
                                                <h5 class="mb-2">Support Lead</h5>
                                                <p class="text-muted mb-0 fs-base">Oversees customer support and service
                                                    quality.</p>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="dropdown">
                                                    <a href="#" class="text-muted fs-xl" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#"><i class="ti ti-eye me-2"></i>View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i>Edit</a></li>
                                                        <li><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash me-2"></i>Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="list-unstyled mb-3">
                                            <li class="d-flex align-items-center mb-2"><span class="ti ti-check fs-lg text-success me-2"></span> Respond to Tickets
                                            </li>
                                            <li class="d-flex align-items-center mb-2"><span class="ti ti-check fs-lg text-success me-2"></span> Live Chat
                                                Supervision
                                            </li>
                                            <li class="d-flex align-items-center mb-2"><span class="ti ti-check fs-lg text-success me-2"></span> FAQ Updates
                                            </li>
                                            <li class="d-flex align-items-center"><span class="ti ti-check fs-lg text-success me-2"></span> Support Metrics
                                                Review
                                            </li>
                                        </ul>

                                        <p class="mb-2 text-muted">Total 3 users</p>
                                        <div class="avatar-group avatar-group-sm mb-3">
                                            <div class="avatar"><img src="/images/users/user-1.jpg" class="rounded-circle avatar-sm" alt=""></div>
                                            <div class="avatar"><img src="/images/users/user-5.jpg" class="rounded-circle avatar-sm" alt=""></div>
                                            <div class="avatar"><img src="/images/users/user-7.jpg" class="rounded-circle avatar-sm" alt=""></div>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="text-muted fs-xs"><i class="ti ti-clock me-1"></i>Updated 30 min ago</span>
                                            <a href="#" class="btn btn-sm btn-outline-primary rounded-pill">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end row-->

                        <div class="row">
                            <div class="col-12">
                                <div data-table data-table-rows-per-page="8" class="card">
                                    <div class="card-header border-light justify-content-between">

                                        <div class="d-flex gap-2">
                                            <div class="app-search">
                                                <input data-table-search type="search" class="form-control" placeholder="Search users...">
                                                <i data-lucide="search" class="app-search-icon text-muted"></i>
                                            </div>
                                            <button data-table-delete-selected class="btn btn-danger d-none">Delete</button>
                                        </div>


                                        <div class="d-flex align-items-center gap-2">
                                            <span class="me-2 fw-semibold">Filter By:</span>

                                            <!-- Role Type Filter -->
                                            <div class="app-search">
                                                <select data-table-filter="roles" class="form-select form-control my-1 my-md-0">
                                                    <option value="All">Role</option>
                                                    <option value="Security Officer">Security Officer</option>
                                                    <option value="Project Manager">Project Manager</option>
                                                    <option value="Developer">Developer</option>
                                                    <option value="Support Lead">Support Lead</option>
                                                </select>
                                                <i data-lucide="shield" class="app-search-icon text-muted"></i>
                                            </div>

                                            <!-- Status Filter -->
                                            <div class="app-search">
                                                <select data-table-filter="status" class="form-select form-control my-1 my-md-0">
                                                    <option value="All">Status</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Inactive">Inactive</option>
                                                    <option value="Suspended">Suspended</option>
                                                </select>
                                                <i data-lucide="user-check" class="app-search-icon text-muted"></i>
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

                                            <button type="submit" class="btn btn-secondary">Add User</button>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-custom table-centered table-select table-hover w-100 mb-0">
                                            <thead class="bg-light align-middle bg-opacity-25 thead-sm">
                                                <tr class="text-uppercase fs-xxs">
                                                    <th class="ps-3" style="width: 1%;">
                                                        <input data-table-select-all class="form-check-input form-check-input-light fs-14 mt-0" type="checkbox" id="select-all-files" value="option">
                                                    </th>
                                                    <th data-table-sort>ID</th>
                                                    <th data-table-sort="user">User</th>
                                                    <th data-table-sort data-column="roles">Role</th>
                                                    <th data-table-sort>Last Updated</th>
                                                    <th data-table-sort data-column="status">Status</th>
                                                    <th class="text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Row 1 -->
                                                <tr>
                                                    <td class="ps-3"><input class="form-check-input form-check-input-light fs-14 file-item-check mt-0" type="checkbox" value="option"></td>
                                                    <td>
                                                        <h5 class="m-0"><a href="#" class="link-reset">#USR00123</a>
                                                        </h5>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="avatar avatar-sm"><img src="/images/users/user-5.jpg" class="img-fluid rounded-circle" alt=""></div>
                                                            <div>
                                                                <h5 class="fs-base mb-0"><a data-sort="user" href="#" class="link-reset">Nathan
                                                                        Young</a></h5>
                                                                <p class="text-muted fs-xs mb-0">nathan@companymail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Project Manager</td>
                                                    <td>18 Apr, 2025 <small class="text-muted">9:45 AM</small></td>
                                                    <td><span class="badge bg-warning-subtle text-warning badge-label">Inactive</span>
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
                                                    <td class="ps-3"><input class="form-check-input form-check-input-light fs-14 file-item-check mt-0" type="checkbox"></td>
                                                    <td>
                                                        <h5 class="m-0"><a href="#" class="link-reset">#USR00145</a>
                                                        </h5>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="avatar avatar-sm"><img src="/images/users/user-3.jpg" class="img-fluid rounded-circle" alt=""></div>
                                                            <div>
                                                                <h5 class="fs-base mb-0"><a data-sort="user" href="#" class="link-reset">Leah
                                                                        Kim</a></h5>
                                                                <p class="text-muted fs-xs mb-0">leah@wavehub.io</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Developer</td>
                                                    <td>21 Apr, 2025 <small class="text-muted">3:15 PM</small></td>
                                                    <td><span class="badge bg-success-subtle text-success badge-label">Active</span>
                                                    </td>
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
                                                    <td class="ps-3"><input class="form-check-input form-check-input-light fs-14 file-item-check mt-0" type="checkbox"></td>
                                                    <td>
                                                        <h5 class="m-0"><a href="#" class="link-reset">#USR00162</a>
                                                        </h5>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="avatar avatar-sm"><img src="/images/users/user-1.jpg" class="img-fluid rounded-circle" alt=""></div>
                                                            <div>
                                                                <h5 class="fs-base mb-0"><a data-sort="user" href="#" class="link-reset">Sophie
                                                                        Lee</a></h5>
                                                                <p class="text-muted fs-xs mb-0">sophie@infrakit.io</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Support Lead</td>
                                                    <td>19 Apr, 2025 <small class="text-muted">10:00 AM</small></td>
                                                    <td><span class="badge bg-danger-subtle text-danger badge-label">Suspended</span>
                                                    </td>
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
                                                    <td class="ps-3"><input class="form-check-input form-check-input-light fs-14 file-item-check mt-0" type="checkbox"></td>
                                                    <td>
                                                        <h5 class="m-0"><a href="#" class="link-reset">#USR00178</a>
                                                        </h5>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="avatar avatar-sm"><img src="/images/users/user-2.jpg" class="img-fluid rounded-circle" alt=""></div>
                                                            <div>
                                                                <h5 class="fs-base mb-0"><a data-sort="user" href="#" class="link-reset">David
                                                                        Tran</a></h5>
                                                                <p class="text-muted fs-xs mb-0">david@devsync.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Developer</td>
                                                    <td>22 Apr, 2025 <small class="text-muted">8:15 AM</small></td>
                                                    <td><span class="badge bg-success-subtle text-success badge-label">Active</span>
                                                    </td>
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
                                                        <h5 class="m-0"><a href="#" class="link-reset">#USR00189</a>
                                                        </h5>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="avatar avatar-sm"><img src="/images/users/user-4.jpg" class="img-fluid rounded-circle" alt=""></div>
                                                            <div>
                                                                <h5 class="fs-base mb-0"><a data-sort="user" href="#" class="link-reset">Isabella
                                                                        Moore</a></h5>
                                                                <p class="text-muted fs-xs mb-0">isabella@tracklog.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Security Officer</td>
                                                    <td>20 Apr, 2025 <small class="text-muted">2:45 PM</small></td>
                                                    <td><span class="badge bg-success-subtle text-success badge-label">Active</span>
                                                    </td>
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
                                                        <h5 class="m-0"><a href="#" class="link-reset">#USR00203</a>
                                                        </h5>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="avatar avatar-sm"><img src="/images/users/user-6.jpg" class="img-fluid rounded-circle" alt=""></div>
                                                            <div>
                                                                <h5 class="fs-base mb-0"><a data-sort="user" href="#" class="link-reset">Daniel
                                                                        Cooper</a></h5>
                                                                <p class="text-muted fs-xs mb-0">daniel@cloudops.dev</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Support Lead</td>
                                                    <td>15 Apr, 2025 <small class="text-muted">11:20 AM</small></td>
                                                    <td><span class="badge bg-warning-subtle text-warning badge-label">Inactive</span>
                                                    </td>
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
                                                        <h5 class="m-0"><a href="#" class="link-reset">#USR00215</a>
                                                        </h5>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="avatar avatar-sm"><img src="/images/users/user-8.jpg" class="img-fluid rounded-circle" alt=""></div>
                                                            <div>
                                                                <h5 class="fs-base mb-0"><a data-sort="user" href="#" class="link-reset">Ava
                                                                        Thompson</a></h5>
                                                                <p class="text-muted fs-xs mb-0">ava@digitalsphere.io</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Developer</td>
                                                    <td>23 Apr, 2025 <small class="text-muted">4:25 PM</small></td>
                                                    <td><span class="badge bg-success-subtle text-success badge-label">Active</span>
                                                    </td>
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
                                                        <h5 class="m-0"><a href="#" class="link-reset">#USR00228</a>
                                                        </h5>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="avatar avatar-sm"><img src="/images/users/user-9.jpg" class="img-fluid rounded-circle" alt=""></div>
                                                            <div>
                                                                <h5 class="fs-base mb-0"><a data-sort="user" href="#" class="link-reset">Mason
                                                                        Carter</a></h5>
                                                                <p class="text-muted fs-xs mb-0">mason@buildzone.io</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Security Officer</td>
                                                    <td>17 Apr, 2025 <small class="text-muted">6:10 PM</small></td>
                                                    <td><span class="badge bg-danger-subtle text-danger badge-label">Suspended</span>
                                                    </td>
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
                                                        <h5 class="m-0"><a href="#" class="link-reset">#USR00239</a>
                                                        </h5>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="avatar avatar-sm"><img src="/images/users/user-10.jpg" class="img-fluid rounded-circle" alt=""></div>
                                                            <div>
                                                                <h5 class="fs-base mb-0"><a data-sort="user" href="#" class="link-reset">Chloe
                                                                        Adams</a></h5>
                                                                <p class="text-muted fs-xs mb-0">chloe@infraops.io</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Project Manager</td>
                                                    <td>11 Apr, 2025 <small class="text-muted">1:30 PM</small></td>
                                                    <td><span class="badge bg-warning-subtle text-warning badge-label">Inactive</span>
                                                    </td>
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
                                            <div data-table-pagination-info="roles"></div>
                                            <div data-table-pagination></div>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end col -->
                        </div><!-- end row -->

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

    <!-- Custom table -->
    <script src="/js/pages/custom-table.js"></script>

</body>

</html>