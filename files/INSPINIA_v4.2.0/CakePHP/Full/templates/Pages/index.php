<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Dashboard']) ?>

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
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="row g-0">
                                    <div class="col-xxl-3 col-xl-6 order-xl-1 order-xxl-0">
                                        <div class="p-4 border-end border-dashed">
                                            <h4 class="fs-lg mb-1">Welcome to INSPINIA+ Admin Theme.</h4>
                                            <span class="text-muted">You have <span class="text-primary fw-semibold">42</span> messages and 6 notifications.</span>
                                            <ul class="list-group list-group-flush mt-3">
                                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0">
                                                    <div>
                                                        <span class="badge text-bg-primary avatar-xs me-2"><span class="avatar-title fw-medium fs-sm">1</span></span>
                                                        Reviewed project proposal
                                                    </div>
                                                    <span class="text-muted">09:30 AM</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0">
                                                    <div>
                                                        <span class="badge text-bg-info avatar-xs me-2"><span class="avatar-title fw-medium fs-sm">2</span></span>
                                                        Team stand-up meeting
                                                    </div>
                                                    <span class="text-muted">11:00 AM</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0">
                                                    <div>
                                                        <span class="badge text-bg-secondary avatar-xs me-2"><span class="avatar-title fw-medium fs-sm">3</span></span>
                                                        Sent client invoice
                                                    </div>
                                                    <span class="text-muted">01:15 PM</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0">
                                                    <div>
                                                        <span class="badge text-bg-light avatar-xs me-2"><span class="avatar-title fw-medium fs-sm">4</span></span>
                                                        Responded to support tickets
                                                    </div>
                                                    <span class="text-muted">03:40 PM</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0">
                                                    <div>
                                                        <span class="badge text-bg-warning avatar-xs me-2"><span class="avatar-title fw-medium fs-sm">5</span></span>
                                                        Finalized design mockups
                                                    </div>
                                                    <span class="text-muted">05:10 PM</span>
                                                </li>
                                            </ul>

                                            <div class="text-center mt-2">
                                                <a href="#!" class="btn btn-secondary rounded-pill">View Messages</a>
                                            </div>
                                        </div> <!-- end .p-4-->
                                        <hr class="d-xxl-none border-light m-0">
                                    </div> <!-- end col-->
                                    <div class="col-xxl-6 order-xl-3 order-xxl-1">
                                        <div class="px-4 py-3 border-end border-dashed">
                                            <div class="d-flex justify-content-between mb-3">
                                                <h4 class="card-title">Revenue</h4>
                                                <a href="#!" class="link-reset text-decoration-underline fw-semibold link-offset-3">View Reports <i class="ti ti-arrow-right"></i></a>
                                            </div>

                                            <div class="row text-center mb-3">
                                                <div class="col">
                                                    <div class="bg-light bg-opacity-50 p-2">
                                                        <h5 class="m-0"><span class="text-muted">Total Revenue:</span>$ <span data-target="40">0</span>M</h5>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="bg-light bg-opacity-50 p-2">
                                                        <h5 class="m-0"><span class="text-muted">Total Orders:</span> <span data-target="50.9">0</span>k</h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div dir="ltr" class="position-relative">
                                                <div class="py-2 px-3 rounded-3 bg-light-subtle border text-primary z-1 position-absolute" style="top: 4.5%; left: 12%;">
                                                    <p class="mb-2 text-uppercase fs-xxs fw-semibold">Growth Rate</p>
                                                    <h4 class="mb-0 fw-bold text-primary">89.24% <i class="ti ti-trending-up"></i></h4>
                                                </div>
                                                <div id="revenue-chart" style="min-height: 252px;"></div>
                                            </div>
                                        </div> <!-- end .px-4-->
                                    </div> <!-- end col-->
                                    <div class="col-xxl-3 col-xl-6 order-xl-2 order-xxl-2">
                                        <div class="p-3">
                                            <h4 class="card-title mb-1"> Project Progress</h4>
                                            <p class="text-muted fs-xs">
                                                You have 21 projects with not completed task.
                                            </p>
                                            <div class="row mt-4">
                                                <div class="col-lg-12">
                                                    <div dir="ltr">
                                                        <div id="project-progress-chart" style="min-height: 278px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="d-xxl-none border-light m-0">
                                    </div> <!-- end col-->
                                </div> <!-- end row-->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row-->

                <div class="row row-cols-xxl-5 row-cols-md-3 row-cols-1 align-items-center">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <a href="#!" class="text-muted float-end mt-n1 fs-xl"><i class="ti ti-external-link"></i></a>
                                <h5 title="Number of Tasks">My Tasks</h5>
                                <div class="d-flex align-items-center gap-2 my-3">
                                    <div class="avatar-md flex-shrink-0">
                                        <span class="avatar-title text-bg-light rounded-circle fs-22">
                                            <i class="ti ti-checklist"></i>
                                        </span>
                                    </div>
                                    <h3 class="mb-0"><span data-target="124">0</span></h3>
                                    <span class="badge badge-soft-primary fw-medium ms-2 fs-xs ms-auto">+3 New</span>
                                </div>
                                <p class="mb-0">
                                    <span class="text-primary"><i class="ti ti-point-filled"></i></span>
                                    <span class="text-nowrap text-muted">Total Tasks</span>
                                    <span class="float-end"><b>12,450</b></span>
                                </p>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <a href="#!" class="text-muted float-end mt-n1 fs-xl"><i class="ti ti-external-link"></i></a>
                                <h5 title="Number of Messages">Messages</h5>
                                <div class="d-flex align-items-center gap-2 my-3">
                                    <div class="avatar-md flex-shrink-0">
                                        <span class="avatar-title text-bg-light rounded-circle fs-22">
                                            <i class="ti ti-message-circle"></i>
                                        </span>
                                    </div>
                                    <h3 class="mb-0"><span data-target="69.5">0</span>k</h3>
                                    <span class="badge badge-soft-secondary fw-medium ms-2 fs-xs ms-auto">+5 New</span>
                                </div>
                                <p class="mb-0">
                                    <span class="text-secondary"><i class="ti ti-point-filled"></i></span>
                                    <span class="text-nowrap text-muted">Total Messages</span>
                                    <span class="float-end"><b>32.1M</b></span>
                                </p>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <a href="#!" class="text-muted float-end mt-n1 fs-xl"><i class="ti ti-external-link"></i></a>
                                <h5 title="Pending Approvals">Approvals</h5>
                                <div class="d-flex align-items-center gap-2 my-3">
                                    <div class="avatar-md flex-shrink-0">
                                        <span class="avatar-title text-bg-light rounded-circle fs-22">
                                            <i class="ti ti-file-check"></i>
                                        </span>
                                    </div>
                                    <h3 class="mb-0"><span data-target="32">0</span></h3>
                                    <span class="badge text-bg-light fw-medium ms-2 fs-xs ms-auto">+2 New</span>
                                </div>
                                <p class="mb-0">
                                    <span class="text-primary"><i class="ti ti-point-filled"></i></span>
                                    <span class="text-nowrap text-muted">Total Approvals</span>
                                    <span class="float-end"><b>1,024</b></span>
                                </p>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <a href="#!" class="text-muted float-end mt-n1 fs-xl"><i class="ti ti-external-link"></i></a>
                                <h5 title="Total Clients">Clients</h5>
                                <div class="d-flex align-items-center gap-2 my-3">
                                    <div class="avatar-md flex-shrink-0">
                                        <span class="avatar-title text-bg-light rounded-circle fs-22">
                                            <i class="ti ti-users"></i>
                                        </span>
                                    </div>
                                    <h3 class="mb-0"><span data-target="184">0</span></h3>
                                    <span class="badge badge-soft-secondary fw-medium ms-2 fs-xs ms-auto">+4 New</span>
                                </div>
                                <p class="mb-0">
                                    <span class="text-secondary"><i class="ti ti-point-filled"></i></span>
                                    <span class="text-nowrap text-muted">Total Clients</span>
                                    <span class="float-end"><b>9,835</b></span>
                                </p>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-lg col-md-auto">
                        <div class="card">
                            <div class="card-body">
                                <a href="#!" class="text-muted float-end mt-n1 fs-xl"><i class="ti ti-external-link"></i></a>
                                <h5 title="Revenue Generated">Revenue</h5>
                                <div class="d-flex align-items-center gap-2 my-3">
                                    <div class="avatar-md flex-shrink-0">
                                        <span class="avatar-title text-bg-light rounded-circle fs-22">
                                            <i class="ti ti-credit-card"></i>
                                        </span>
                                    </div>
                                    <h3 class="mb-0">$<span data-target="125.5">0</span>k</h3>
                                    <span class="badge badge-soft-primary fw-medium ms-2 fs-xs ms-auto">+1.5%</span>
                                </div>
                                <p class="mb-0">
                                    <span class="text-primary"><i class="ti ti-point-filled"></i></span>
                                    <span class="text-nowrap text-muted">Total Revenue</span>
                                    <span class="float-end"><b>$12.5M</b></span>
                                </p>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-xxl-4">
                        <div class="card">
                            <div class="card-header justify-content-between align-items-center">
                                <h5 class="card-title">Quarterly Reports <span class="badge text-bg-primary">IN+</span></h5>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="card-refresh"><i class="ti ti-refresh"></i></a>
                                    <a href="#!" class="card-action-item" data-action="card-close"><i class="ti ti-x"></i></a>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-custom table-nowrap table-hover table-centered mb-0">
                                        <thead class="bg-light bg-opacity-25 thead-sm">
                                            <tr class="text-uppercase fs-xxs">
                                                <th class="text-muted">Quarter</th>
                                                <th class="text-muted">Revenue</th>
                                                <th class="text-muted">Expense</th>
                                                <th class="text-muted">Margin</th>
                                                <th class="text-muted">•••</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h5 class="fs-sm mb-1 fw-normal">Quarter 1</h5>
                                                    <span class="text-muted fs-xs">January - March 2024</span>
                                                </td>
                                                <td>$210k</td>
                                                <td>$165k</td>
                                                <td>$45k</td>
                                                <td style="width: 60px;">
                                                    <div dir="ltr">
                                                        <div class="donut-chart" data-chart="donut" style="min-height: 30px;"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="fs-sm mb-1 fw-normal">Quarter 2</h5>
                                                    <span class="text-muted fs-xs">April - June 2024</span>
                                                </td>
                                                <td>$225k</td>
                                                <td>$175k</td>
                                                <td>$50k</td>
                                                <td style="width: 60px;">
                                                    <div dir="ltr">
                                                        <div class="donut-chart" data-chart="donut" style="min-height: 30px;"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="fs-sm mb-1 fw-normal">Quarter 3</h5>
                                                    <span class="text-muted fs-xs">July - September 2024</span>
                                                </td>
                                                <td>$240k</td>
                                                <td>$190k</td>
                                                <td>$50k</td>
                                                <td style="width: 60px;">
                                                    <div dir="ltr">
                                                        <div class="donut-chart" data-chart="donut" style="min-height: 30px;"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="fs-sm mb-1 fw-normal">Quarter 4</h5>
                                                    <span class="text-muted fs-xs">October - December 2024</span>
                                                </td>
                                                <td>$260k</td>
                                                <td>$200k</td>
                                                <td>$60k</td>
                                                <td style="width: 60px;">
                                                    <div dir="ltr">
                                                        <div class="donut-chart" data-chart="donut" style="min-height: 30px;"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-header justify-content-between align-items-center">
                                <h5 class="card-title">Project Performance</h5>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="card-refresh"><i class="ti ti-refresh"></i></a>
                                    <a href="#!" class="card-action-item" data-action="card-close"><i class="ti ti-x"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="fs-base mb-2">Completed Projects</h5>
                                        <div>
                                            <span>+ 180</span>
                                            <span><i class="ti ti-circle-filled text-light mx-3 fs-10"></i> 54.20%</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mb-1">
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 54.20%" aria-valuenow="54.20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="fs-base mb-2">Ongoing Projects</h5>
                                        <div>
                                            <span>+ 120</span>
                                            <span><i class="ti ti-circle-filled text-light mx-3 fs-10"></i> 36.15%</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mb-1">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 36.15%" aria-valuenow="36.15" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="fs-base mb-2">Pending Approvals</h5>
                                        <div>
                                            <span>+ 32</span>
                                            <span><i class="ti ti-circle-filled text-light mx-3 fs-10"></i> 9.65%</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mb-1">
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 9.65%" aria-valuenow="9.65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xxl-4 col-xl-6">
                        <div class="card">
                            <div class="card-header justify-content-between align-items-center">
                                <h5 class="card-title">Latest Project Updates</h5>
                                <span class="badge text-bg-warning fs-xxs p-1"> 8 Notifications</span>
                            </div>
                            <div class="card-body">
                                <div class="timeline timeline-icon-bordered">
                                    <!-- Event 1 -->
                                    <div class="timeline-item d-flex align-items-stretch">
                                        <div class="timeline-dot">
                                            <i class="ti ti-rocket fs-xl text-primary"></i>
                                        </div>
                                        <div class="timeline-content ps-3">
                                            <div class="d-flex justify-content-between">
                                                <h5 class="mb-1 fs-base">New Feature Released <span class="badge badge-label badge-soft-info ms-2">Deploy</span></h5>
                                                <span class="text-muted fs-xxs">Today at 3:45 PM</span>
                                            </div>
                                            <p class="mb-1 text-muted">Launched the real-time chat feature across all user accounts.</p>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="/images/users/user-6.jpg" alt="Natalie Brooks" class="rounded-circle avatar-xxs">
                                                <a href="pages-profile" class="fw-medium link-reset text-muted">Natalie Brooks</a>
                                            </div>

                                            <hr class="border-dashed">
                                        </div>
                                    </div>

                                    <!-- Event 2 -->
                                    <div class="timeline-item d-flex align-items-stretch">
                                        <div class="timeline-dot">
                                            <i class="ti ti-calendar-event fs-xl text-warning"></i>
                                        </div>
                                        <div class="timeline-content ps-3">
                                            <div class="d-flex justify-content-between">
                                                <h5 class="mb-1 fs-base">Team Sync-Up <span class="badge badge-label badge-soft-secondary ms-2">Meeting</span></h5>
                                                <span class="text-muted fs-xxs">Today at 2:00 PM</span>
                                            </div>
                                            <p class="mb-1 text-muted">Reviewed sprint progress and discussed remaining tasks with the dev team.</p>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="/images/users/user-4.jpg" alt="Oliver Grant" class="rounded-circle avatar-xxs">
                                                <a href="pages-profile" class="fw-medium link-reset text-muted">Oliver Grant</a>
                                            </div>

                                            <hr class="border-dashed">
                                        </div>
                                    </div>

                                    <!-- Event 3 -->
                                    <div class="timeline-item d-flex align-items-stretch">
                                        <div class="timeline-dot">
                                            <i class="ti ti-palette fs-xl text-success"></i>
                                        </div>
                                        <div class="timeline-content ps-3">
                                            <div class="d-flex justify-content-between">
                                                <h5 class="mb-1 fs-base">UI Design Review <span class="badge badge-label badge-soft-success ms-2">Design</span></h5>
                                                <span class="text-muted fs-xxs">Today at 1:15 PM</span>
                                            </div>
                                            <p class="mb-1 text-muted">Updated component spacing and colors for improved accessibility.</p>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="/images/users/user-9.jpg" alt="Clara Jensen" class="rounded-circle avatar-xxs">
                                                <a href="pages-profile" class="fw-medium link-reset text-muted">Clara Jensen</a>
                                            </div>

                                            <hr class="border-dashed">
                                        </div>
                                    </div>

                                    <!-- Event 4 -->
                                    <div class="timeline-item d-flex align-items-stretch">
                                        <div class="timeline-dot">
                                            <i class="ti ti-database fs-xl text-danger"></i>
                                        </div>
                                        <div class="timeline-content ps-3">
                                            <div class="d-flex justify-content-between">
                                                <h5 class="mb-1 fs-base">Database Optimization <span class="badge badge-label badge-soft-danger ms-2">Backend</span></h5>
                                                <span class="text-muted fs-xxs">Today at 12:30 PM</span>
                                            </div>
                                            <p class="mb-1 text-muted">Improved DB query performance, reducing load time by 35%.</p>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="/images/users/user-10.jpg" alt="Leo Armstrong" class="rounded-circle avatar-xxs">
                                                <a href="pages-profile" class="fw-medium link-reset text-muted">Leo Armstrong</a>
                                            </div>

                                            <hr class="border-dashed">
                                        </div>
                                    </div>

                                    <!-- Event 5 -->
                                    <div class="timeline-item d-flex align-items-stretch">
                                        <div class="timeline-dot">
                                            <i class="ti ti-shield-check fs-xl text-info"></i>
                                        </div>
                                        <div class="timeline-content ps-3">
                                            <div class="d-flex justify-content-between">
                                                <h5 class="mb-1 fs-base">Security Audit Completed <span class="badge badge-label badge-soft-warning ms-2">Audit</span></h5>
                                                <span class="text-muted fs-xxs">Today at 11:00 AM</span>
                                            </div>
                                            <p class="mb-1 text-muted">Completed internal security audit with no critical issues found.</p>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="/images/users/user-8.jpg" alt="Liam Carter" class="rounded-circle avatar-xxs">
                                                <a href="pages-profile" class="fw-medium link-reset text-muted">Liam Carter</a>
                                            </div>

                                            <hr class="border-dashed">
                                        </div>
                                    </div>

                                    <!-- Event 6 -->
                                    <div class="timeline-item d-flex align-items-stretch">
                                        <div class="timeline-dot">
                                            <i class="ti ti-user-plus fs-xl text-success"></i>
                                        </div>
                                        <div class="timeline-content ps-3">
                                            <div class="d-flex justify-content-between">
                                                <h5 class="mb-1 fs-base">New Team Member Joined <span class="badge badge-label badge-soft-primary ms-2">Onboarding</span></h5>
                                                <span class="text-muted fs-xxs">Today at 10:15 AM</span>
                                            </div>
                                            <p class="mb-1 text-muted">Michael Lee has joined the development team as a Frontend Engineer.</p>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="/images/users/user-7.jpg" alt="Emma Davis" class="rounded-circle avatar-xxs">
                                                <a href="pages-profile" class="fw-medium link-reset text-muted">Emma Davis</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end timeline-->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xxl-4 col-xl-6">
                        <div class="card">
                            <div class="card-header justify-content-between align-items-center">
                                <h5 class="card-title">Discussions
                                    <span class="badge bg-primary-subtle text-primary">Pro+</span>
                                </h5>
                                <a href="#!" class="badge text-bg-light fs-xs fw-semibold p-1">Mark all as read</a>
                            </div>

                            <div class="card-body bg-light-subtle border-bottom border-dashed">
                                <div class="d-flex gap-2">
                                    <div class="me-2 flex-shrink-0">
                                        <img src="/images/message-mail.png" height="36" alt="message img">
                                    </div>
                                    <div class="flex-grow-1">
                                        <h4 class="fs-sm mb-1">New messages</h4>
                                        <p class="fs-xs mb-0 text-body-secondary">
                                            You have <span class="text-body fw-semibold">22</span> new messages and
                                            <span class="text-body fw-semibold">16</span> waiting in draft folder.
                                        </p>
                                    </div>
                                </div>
                            </div> <!-- end card-body-->

                            <div class="card-body pt-1">
                                <ul class="list-group list-group-flush mb-3">

                                    <!-- User 1 -->
                                    <li class="list-group-item px-0 border-light">
                                        <div class="d-flex gap-2">
                                            <div class="me-2 flex-shrink-0">
                                                <img src="/images/users/user-8.jpg" class="avatar-md rounded-circle" alt="user-8">
                                            </div>
                                            <div class="flex-grow-1 text-muted">
                                                <h6 class="text-body mb-1 fs-base d-flex justify-content-between">
                                                    Alex Johnson
                                                    <small class="fs-xs text-body-secondary">10m ago</small>
                                                </h6>
                                                <p class="mb-1">Excited to share our latest project update with everyone!</p>
                                                <a href="chat" class="badge badge-soft-primary p-1">Reply</a>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- User 2 -->
                                    <li class="list-group-item px-0 border-light">
                                        <div class="d-flex gap-2">
                                            <div class="me-2 flex-shrink-0">
                                                <div class="avatar avatar-md">
                                                    <span class="avatar-title bg-purple-subtle text-purple rounded-circle fw-bold">DN</span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-muted">
                                                <h6 class="text-body mb-1 fs-base d-flex justify-content-between">
                                                    Den Nowdya
                                                    <small class="fs-xs text-body-secondary">1h ago</small>
                                                </h6>
                                                <p class="mb-1">Looking forward to the upcoming team meeting.</p>
                                                <a href="chat" class="badge badge-soft-primary p-1">Reply</a>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- User 3 -->
                                    <li class="list-group-item px-0 border-light">
                                        <div class="d-flex gap-2">
                                            <div class="me-2 flex-shrink-0">
                                                <img src="/images/users/user-10.jpg" class="avatar-md rounded-circle" alt="user-10">
                                            </div>
                                            <div class="flex-grow-1 text-muted">
                                                <h6 class="text-body mb-1 fs-base d-flex justify-content-between">
                                                    Michael Brown
                                                    <small class="fs-xs text-body-secondary">16h ago</small>
                                                </h6>
                                                <p class="mb-1">Great insights shared in today's brainstorming session!</p>
                                                <a href="chat" class="badge badge-soft-primary p-1">Reply</a>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- User 4 -->
                                    <li class="list-group-item px-0 border-light">
                                        <div class="d-flex gap-2">
                                            <div class="me-2 flex-shrink-0">
                                                <img src="/images/users/user-1.jpg" class="avatar-md rounded-circle" alt="user-1">
                                            </div>
                                            <div class="flex-grow-1 text-muted">
                                                <h6 class="text-body mb-1 fs-base d-flex justify-content-between">
                                                    Emily Watson
                                                    <small class="fs-xs text-body-secondary">20h ago</small>
                                                </h6>
                                                <p class="mb-1">Wrapping up an amazing design concept for the client.</p>
                                                <a href="chat" class="badge badge-soft-primary p-1">Reply</a>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- User 5 -->
                                    <li class="list-group-item px-0 border-light">
                                        <div class="d-flex gap-2">
                                            <div class="me-2 flex-shrink-0">
                                                <img src="/images/users/user-6.jpg" class="avatar-md rounded-circle" alt="user-6">
                                            </div>
                                            <div class="flex-grow-1 text-muted">
                                                <h6 class="text-body mb-1 fs-base d-flex justify-content-between">
                                                    Monica Smith
                                                    <small class="fs-xs text-body-secondary">2 days ago</small>
                                                </h6>
                                                <p class="mb-1">Testing some new UI enhancements—excited for feedback!</p>
                                                <a href="chat" class="badge badge-soft-primary p-1">Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <div class="text-center mt-3">
                                    <a href="chat" class="link-reset text-decoration-underline fw-semibold link-offset-3">
                                        Go to Chat Room <i class="ti ti-send-2"></i>
                                    </a>
                                </div>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->

                    </div> <!-- end col-->
                </div><!-- end row-->

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

    <!-- E Charts js -->
    <script src="/plugins/echarts/echarts.min.js"></script>

    <!-- Dashboard Page js -->
    <script src="/js/pages/dashboard.js"></script>

</body>

</html>