<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'API Keys']) ?>

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

                <?= $this->element('page_title', ['subtitle' => 'Apps', 'title' => 'Companies']) ?>

                <div class="row g-3">
                    <!-- Total API Calls -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar-xl bg-light text-primary rounded-circle">
                                        <i class="ti ti-server-2 avatar-title fs-xxl"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-2 text-muted text-uppercase fs-xs">Total API Calls</h6>
                                        <h4 class="mb-0 fw-bold">1,254,300</h4>
                                    </div>
                                </div>
                                <div id="chart-api-calls" class="mt-3"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Successful Conversions -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar-xl bg-light text-success rounded-circle p-3 fs-4">
                                        <i class="ti ti-checks avatar-title fs-xxl"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-2 text-muted text-uppercase fs-xs">Successful Conversions</h6>
                                        <h4 class="mb-0 fw-bold">1,192,450</h4>
                                    </div>
                                </div>
                                <div id="chart-successful-conversions" class="mt-3"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Failed Requests -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar-xl bg-light text-danger rounded-circle p-3 fs-4">
                                        <i class="ti ti-alert-triangle avatar-title fs-xxl"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-2 text-muted text-uppercase fs-xs">Failed Requests</h6>
                                        <h4 class="mb-0 fw-bold">61,850</h4>
                                    </div>
                                </div>
                                <div id="chart-failed-requests" class="mt-3"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Active Endpoints -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar-xl bg-light text-info rounded-circle p-3 fs-4">
                                        <i class="ti ti-code-dots avatar-title fs-xxl"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-2 text-muted text-uppercase fs-xs">Active Endpoints</h6>
                                        <h4 class="mb-0 fw-bold">143</h4>
                                    </div>
                                </div>
                                <div id="chart-active-endpoints" class="mt-3"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div data-table data-table-rows-per-page="8" class="card">
                            <div class="card-header border-light justify-content-between">
                                <div class="d-flex gap-2">
                                    <div class="app-search">
                                        <input data-table-search type="text" class="form-control" placeholder="Search API clients...">
                                        <i data-lucide="search" class="app-search-icon text-muted"></i>
                                    </div>
                                    <button data-table-delete-selected class="btn btn-danger d-none">Delete</button>
                                    <button type="submit" class="btn btn-purple rounded-circle btn-icon"><i class="ti ti-plus fs-lg"></i></button>
                                </div>

                                <div class="d-flex align-items-center gap-2">
                                    <span class="me-2 fw-semibold">Filter By:</span>

                                    <!-- Status Filter -->
                                    <div class="app-search">
                                        <select data-table-filter="status" class="form-select form-control my-1 my-md-0">
                                            <option value="All">Status</option>
                                            <option value="Active">Active</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Revoked">Revoked</option>
                                            <option value="Suspended">Suspended</option>
                                            <option value="Expired">Expired</option>
                                        </select>
                                        <i data-lucide="circle-check" class="app-search-icon text-muted"></i>
                                    </div>

                                    <!-- Region Filter -->
                                    <div class="app-search">
                                        <select data-table-filter="region" class="form-select form-control my-1 my-md-0">
                                            <option value="All">Region</option>
                                            <option value="US">USA</option>
                                            <option value="UK">UK</option>
                                            <option value="IN">India</option>
                                            <option value="DE">Germany</option>
                                            <option value="AU">Australia</option>
                                        </select>
                                        <i data-lucide="globe" class="app-search-icon text-muted"></i>
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
                            </div>

                            <div class="table-responsive">
                                <table class="table table-custom table-centered table-hover w-100 mb-0">
                                    <thead class="bg-light bg-opacity-25 thead-sm">
                                        <tr class="text-uppercase fs-xxs">
                                            <th scope="col" style="width: 1%;">
                                                <input class="form-check-input form-check-input-light fs-14 mt-0" data-table-select-all type="checkbox" value="option">
                                            </th>
                                            <th data-table-sort>Name</th>
                                            <th data-table-sort="name">Created By</th>
                                            <th>API Key</th>
                                            <th data-table-sort data-column="status">Status</th>
                                            <th data-table-sort>Created</th>
                                            <th data-table-sort>Expired</th>
                                            <th data-table-sort data-column="region">Region</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead><!-- end table-head -->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input class="form-check-input form-check-input-light fs-14 mt-0" type="checkbox" value="option">
                                            </td>
                                            <td class="fw-medium">APINexus</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-xs">
                                                        <img src="/images/users/user-2.jpg" alt="avatar-2" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 data-sort="name" class="text-nowrap fs-sm mb-0 lh-base">Mark Reynolds</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm" id="keyOne" readonly value="e4A7Fc98z120XYz776abc90MNZ">
                                                    <button class="btn btn-sm btn-icon btn-light" type="button" data-clipboard-target="#keyOne">
                                                        <i class="ti ti-copy fs-lg"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-warning-subtle text-warning badge-label">Pending</span>
                                            </td>
                                            <td>Jan 10, 2025</td>
                                            <td>Nov 15, 2025</td>
                                            <td>
                                                <span class="badge p-1 text-bg-light fs-sm">
                                                    <img src="/images/flags/de.svg" alt="" class="rounded-circle me-1" height="12"> DE
                                                </span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <input class="form-check-input form-check-input-light fs-14 mt-0" type="checkbox" value="option">
                                            </td>
                                            <td class="fw-medium">DataPulse</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-xs">
                                                        <img src="/images/users/user-4.jpg" alt="avatar-4" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 data-sort="name" class="text-nowrap fs-sm mb-0 lh-base">Sophia Turner</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm" id="keyTwo" readonly value="9BcD456Xy78LmN0zPQR12sA3Z">
                                                    <button class="btn btn-sm btn-icon btn-light" type="button" data-clipboard-target="#keyTwo">
                                                        <i class="ti ti-copy fs-lg"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-danger-subtle text-danger badge-label">Revoked</span>
                                            </td>
                                            <td>Mar 5, 2025</td>
                                            <td>Aug 20, 2025</td>
                                            <td>
                                                <span class="badge p-1 text-bg-light fs-sm">
                                                    <img src="/images/flags/gb.svg" alt="" class="rounded-circle me-1" height="12"> UK
                                                </span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <input class="form-check-input form-check-input-light fs-14 mt-0" type="checkbox" value="option">
                                            </td>
                                            <td class="fw-medium">AuthKit</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-xs">
                                                        <img src="/images/users/user-5.jpg" alt="avatar-5" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 data-sort="name" class="text-nowrap fs-sm mb-0 lh-base">Liam Watson</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm" id="keyThree" readonly value="ZZ99xC8K23Fm10TyPLqZa17d">
                                                    <button class="btn btn-sm btn-icon btn-light" type="button" data-clipboard-target="#keyThree">
                                                        <i class="ti ti-copy fs-lg"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-success-subtle text-success badge-label">Active</span>
                                            </td>
                                            <td>Apr 22, 2025</td>
                                            <td>Dec 31, 2025</td>
                                            <td>
                                                <span class="badge p-1 text-bg-light fs-sm">
                                                    <img src="/images/flags/in.svg" alt="" class="rounded-circle me-1" height="12"> IN
                                                </span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <input class="form-check-input form-check-input-light fs-14 mt-0" type="checkbox" value="option">
                                            </td>
                                            <td class="fw-medium">APIxEdge</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-xs">
                                                        <img src="/images/users/user-2.jpg" alt="avatar-2" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 data-sort="name" class="text-nowrap fs-sm mb-0 lh-base">Ava Turner</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm" id="keyFour" readonly value="XY91kLpB42Ga98WxRTzEe55n">
                                                    <button class="btn btn-sm btn-icon btn-light" type="button" data-clipboard-target="#keyFour">
                                                        <i class="ti ti-copy fs-lg"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-warning-subtle text-warning badge-label">Pending</span>
                                            </td>
                                            <td>Apr 10, 2025</td>
                                            <td>Oct 10, 2025</td>
                                            <td><span class="badge p-1 text-bg-light fs-sm"><img src="/images/flags/us.svg" alt="" class="rounded-circle me-1" height="12"> US</span></td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <input class="form-check-input form-check-input-light fs-14 mt-0" type="checkbox" value="option">
                                            </td>
                                            <td class="fw-medium">DataLinker</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-xs">
                                                        <img src="/images/users/user-7.jpg" alt="avatar-7" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 data-sort="name" class="text-nowrap fs-sm mb-0 lh-base">Noah Reed</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm" id="keyFive" readonly value="BB22zWqT65Op90VxMLaRt18c">
                                                    <button class="btn btn-sm btn-icon btn-light" type="button" data-clipboard-target="#keyFive">
                                                        <i class="ti ti-copy fs-lg"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-danger-subtle text-danger badge-label">Suspended</span>
                                            </td>
                                            <td>Mar 15, 2025</td>
                                            <td>Sep 15, 2025</td>
                                            <td><span class="badge p-1 text-bg-light fs-sm"><img src="/images/flags/de.svg" alt="" class="rounded-circle me-1" height="12"> DE</span></td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <input class="form-check-input form-check-input-light fs-14 mt-0" type="checkbox" value="option">
                                            </td>
                                            <td class="fw-medium">WebhookMate</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-xs">
                                                        <img src="/images/users/user-3.jpg" alt="avatar-3" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 data-sort="name" class="text-nowrap fs-sm mb-0 lh-base">Sophia Lee</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm" id="keySix" readonly value="RM19yUlP75Kl44YvNJdHg09s">
                                                    <button class="btn btn-sm btn-icon btn-light" type="button" data-clipboard-target="#keySix">
                                                        <i class="ti ti-copy fs-lg"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-success-subtle text-success badge-label">Active</span>
                                            </td>
                                            <td>Jan 01, 2025</td>
                                            <td>Dec 31, 2025</td>
                                            <td><span class="badge p-1 text-bg-light fs-sm"><img src="/images/flags/gb.svg" alt="" class="rounded-circle me-1" height="12"> UK</span></td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <input class="form-check-input form-check-input-light fs-14 mt-0" type="checkbox" value="option">
                                            </td>
                                            <td class="fw-medium">DevPortal</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-xs">
                                                        <img src="/images/users/user-4.jpg" alt="avatar-4" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 data-sort="name" class="text-nowrap fs-sm mb-0 lh-base">Mason Clark</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm" id="keySeven" readonly value="AA47qBcJ61Tr77WpKKzTy39k">
                                                    <button class="btn btn-sm btn-icon btn-light" type="button" data-clipboard-target="#keySeven">
                                                        <i class="ti ti-copy fs-lg"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-info-subtle text-info badge-label">Trial</span></td>
                                            <td>Feb 01, 2025</td>
                                            <td>May 01, 2025</td>
                                            <td><span class="badge p-1 text-bg-light fs-sm"><img src="/images/flags/au.svg" alt="" class="rounded-circle me-1" height="12"> AU</span></td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <input class="form-check-input form-check-input-light fs-14 mt-0" type="checkbox" value="option">
                                            </td>
                                            <td class="fw-medium">NotifyX</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-xs">
                                                        <img src="/images/users/user-6.jpg" alt="avatar-6" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 data-sort="name" class="text-nowrap fs-sm mb-0 lh-base">Ella James</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm" id="keyEight" readonly value="ZP83mXcD28Uv11MtYYoXx03b">
                                                    <button class="btn btn-sm btn-icon btn-light" type="button" data-clipboard-target="#keyEight">
                                                        <i class="ti ti-copy fs-lg"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-success-subtle text-success badge-label">Active</span>
                                            </td>
                                            <td>Apr 01, 2025</td>
                                            <td>Jan 01, 2026</td>
                                            <td><span class="badge p-1 text-bg-light fs-sm"><img src="/images/flags/ca.svg" alt="" class="rounded-circle me-1" height="12"> CA</span></td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <input class="form-check-input form-check-input-light fs-14 mt-0" type="checkbox" value="option">
                                            </td>
                                            <td class="fw-medium">TokenVault</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-xs">
                                                        <img src="/images/users/user-8.jpg" alt="avatar-8" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 data-sort="name" class="text-nowrap fs-sm mb-0 lh-base">Lucas Hill</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm" id="keyNine" readonly value="LK35yTrF82Lo99UiSSpPr47x">
                                                    <button class="btn btn-sm btn-icon btn-light" type="button" data-clipboard-target="#keyNine">
                                                        <i class="ti ti-copy fs-lg"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-secondary-subtle text-secondary badge-label">Expired</span>
                                            </td>
                                            <td>Jul 15, 2024</td>
                                            <td>Jan 15, 2025</td>
                                            <td><span class="badge p-1 text-bg-light fs-sm"><img src="/images/flags/fr.svg" alt="" class="rounded-circle me-1" height="12"> FR</span></td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <input class="form-check-input form-check-input-light fs-14 mt-0" type="checkbox" value="option">
                                            </td>
                                            <td class="fw-medium">StreamAPI</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <div class="avatar avatar-xs">
                                                        <img src="/images/users/user-9.jpg" alt="avatar-9" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h5 data-sort="name" class="text-nowrap fs-sm mb-0 lh-base">Mia Bennett</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm" id="keyTen" readonly value="DW64aUvQ11Gh32PpDDjWw72t">
                                                    <button class="btn btn-sm btn-icon btn-light" type="button" data-clipboard-target="#keyTen">
                                                        <i class="ti ti-copy fs-lg"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-success-subtle text-success badge-label">Active</span>
                                            </td>
                                            <td>Mar 05, 2025</td>
                                            <td>Dec 05, 2025</td>
                                            <td><span class="badge p-1 text-bg-light fs-sm"><img src="/images/flags/in.svg" alt="" class="rounded-circle me-1" height="12"> IN</span></td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody><!-- end table-body -->
                                </table><!-- end table -->
                            </div>
                            <div class="card-footer border-0">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div data-table-pagination-info="apis"></div>

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

    <!-- Apex Charts js -->
    <script src="/plugins/apexcharts/apexcharts.min.js"></script>

    <!-- Clipboard js -->
    <script src="/plugins/clipboard/clipboard.min.js"></script>

    <!-- Custom table -->
    <script src="/js/pages/custom-table.js"></script>

    <!-- API Key Page js -->
    <script src="/js/pages/api-keys.js"></script>

</body>

</html>