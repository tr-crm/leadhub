@extends('layouts.vertical', ['title' => 'Team Board'])

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'Projects', 'title' => 'Team Board'])

<div class="row justify-content-center">
    <div class="col-xxl-10">

        <div class="d-flex align-items-sm-center flex-sm-row flex-column mb-3">
            <div class="flex-grow-1">
                <h4 class="fs-xl mb-1">Manage Teams</h4>
                <p class="text-muted mb-0">Assign roles to streamline teamwork and secure access.</p>
            </div>

            <div class="text-end">
                <a href="javascript: void(0);" class="btn btn-success">
                    <i class="ti ti-plus me-1"></i> Add New Team
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h4 class="card-title">IT-01 - Design Team <span class="ms-2 badge badge-label text-bg-primary">New</span></h4>
                        <div class="dropdown ms-auto">
                            <a href="#" class="text-muted fs-xl" data-bs-toggle="dropdown">
                                <i class="ti ti-dots-vertical"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i class="ti ti-eye me-2"></i>View</a></li>
                                <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i>Edit</a></li>
                                <li><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash me-2"></i>Remove</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between">

                        <p class="mb-2 text-muted">Total 4 members</p>
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

                        <div class="mb-3">
                            <h5 class="fs-base mb-2">About Team:</h5>
                            <p class="text-muted">The Design Team focuses on creating intuitive user experiences and visually appealing interfaces. We handle UI/UX design, prototyping, and brand consistency across all digital products.</p>
                        </div>

                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="d-flex gap-2 mb-3 mb-xl-0">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title text-bg-light rounded-circle">
                                            <i class="ti ti-layout-kanban fs-lg text-primary"></i> <!-- Projects -->
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 text-muted text-uppercase">Projects</h6>
                                        <p class="fw-medium mb-0">25</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6">
                                <div class="d-flex gap-2">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title text-bg-light rounded-circle">
                                            <i class="ti ti-award fs-lg text-primary"></i> <!-- Ranking -->
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 text-muted text-uppercase">Ranking</h6>
                                        <p class="fw-medium mb-0">#5</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6">
                                <div class="d-flex gap-2">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title text-bg-light rounded-circle">
                                            <i class="ti ti-wallet fs-lg text-primary"></i> <!-- Budgets -->
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 text-muted text-uppercase">Budgets</h6>
                                        <p class="fw-medium mb-0">$20.3M</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="my-3">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="mb-0 text-muted fw-semibold fs-xxs">Status of current project</p>
                                <p class="fw-semibold mb-0">65%</p>
                            </div>
                            <div class="progress progress-md">
                                <div class="progress-bar" style="width: 65%;"></div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted fs-xs"><i class="ti ti-clock me-1"></i>Updated 1 hour ago</span>
                            <a href="#" class="btn btn-sm btn-primary rounded-pill">Details</a>
                        </div>
                    </div>
                </div>
            </div> <!-- en col-->

            <div class="col-md-6 col-lg-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h4 class="card-title">IT-02 - Development Team</h4>
                        <div class="dropdown ms-auto">
                            <a href="#" class="text-muted fs-xl" data-bs-toggle="dropdown">
                                <i class="ti ti-dots-vertical"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i class="ti ti-eye me-2"></i>View</a></li>
                                <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i>Edit</a></li>
                                <li><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash me-2"></i>Remove</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between">

                        <p class="mb-2 text-muted">Total 6 members</p>
                        <div class="avatar-group avatar-group-sm mb-3">
                            <div class="avatar"><img src="/images/users/user-1.jpg" alt="" class="rounded-circle avatar-sm"></div>
                            <div class="avatar"><img src="/images/users/user-2.jpg" alt="" class="rounded-circle avatar-sm"></div>
                            <div class="avatar"><img src="/images/users/user-3.jpg" alt="" class="rounded-circle avatar-sm"></div>
                            <div class="avatar"><img src="/images/users/user-4.jpg" alt="" class="rounded-circle avatar-sm"></div>
                            <div class="avatar"><img src="/images/users/user-5.jpg" alt="" class="rounded-circle avatar-sm"></div>
                            <div class="avatar"><img src="/images/users/user-6.jpg" alt="" class="rounded-circle avatar-sm"></div>
                        </div>

                        <div class="mb-3">
                            <h5 class="fs-base mb-2">About Team:</h5>
                            <p class="text-muted">The Development Team builds and maintains core product features, ensuring robust performance, scalability, and code quality across all platforms. We specialize in full-stack development and agile delivery.</p>
                        </div>

                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="d-flex gap-2 mb-3 mb-xl-0">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title text-bg-light rounded-circle">
                                            <i class="ti ti-code fs-lg text-primary"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 text-muted text-uppercase">Projects</h6>
                                        <p class="fw-medium mb-0">42</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6">
                                <div class="d-flex gap-2">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title text-bg-light rounded-circle">
                                            <i class="ti ti-chart-bar fs-lg text-primary"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 text-muted text-uppercase">Ranking</h6>
                                        <p class="fw-medium mb-0">#2</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6">
                                <div class="d-flex gap-2">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title text-bg-light rounded-circle">
                                            <i class="ti ti-wallet fs-lg text-primary"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 text-muted text-uppercase">Budgets</h6>
                                        <p class="fw-medium mb-0">$32.7M</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="my-3">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="mb-0 text-muted fw-semibold fs-xxs">Status of current project</p>
                                <p class="fw-semibold mb-0">78%</p>
                            </div>
                            <div class="progress progress-md">
                                <div class="progress-bar" style="width: 78%;"></div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted fs-xs"><i class="ti ti-clock me-1"></i>Updated 30 mins ago</span>
                            <a href="#" class="btn btn-sm btn-primary rounded-pill">Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h4 class="card-title">IT-03 - Administrator Team</h4>
                        <div class="dropdown ms-auto">
                            <a href="#" class="text-muted fs-xl" data-bs-toggle="dropdown">
                                <i class="ti ti-dots-vertical"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i class="ti ti-eye me-2"></i>View</a></li>
                                <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i>Edit</a></li>
                                <li><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash me-2"></i>Remove</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p class="mb-2 text-muted">Total 3 members</p>
                        <div class="avatar-group avatar-group-sm mb-3">
                            <div class="avatar"><img src="/images/users/user-10.jpg" alt="" class="rounded-circle avatar-sm"></div>
                            <div class="avatar"><img src="/images/users/user-9.jpg" alt="" class="rounded-circle avatar-sm"></div>
                            <div class="avatar"><img src="/images/users/user-8.jpg" alt="" class="rounded-circle avatar-sm"></div>
                        </div>
                        <div class="mb-3">
                            <h5 class="fs-base mb-2">About Team:</h5>
                            <p class="text-muted">The Administrator Team manages system settings, user roles, permissions, and ensures data security and compliance across platforms.</p>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="d-flex gap-2 mb-3 mb-xl-0">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title text-bg-light rounded-circle">
                                            <i class="ti ti-settings fs-lg text-primary"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 text-muted text-uppercase">Tasks</h6>
                                        <p class="fw-medium mb-0">18</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="d-flex gap-2">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title text-bg-light rounded-circle">
                                            <i class="ti ti-activity fs-lg text-primary"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 text-muted text-uppercase">Ranking</h6>
                                        <p class="fw-medium mb-0">#6</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="d-flex gap-2">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title text-bg-light rounded-circle">
                                            <i class="ti ti-shield-check fs-lg text-primary"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 text-muted text-uppercase">Access</h6>
                                        <p class="fw-medium mb-0">Full</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-3">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="mb-0 text-muted fw-semibold fs-xxs">Status of current ops</p>
                                <p class="fw-semibold mb-0">53%</p>
                            </div>
                            <div class="progress progress-md">
                                <div class="progress-bar" style="width: 53%;"></div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted fs-xs"><i class="ti ti-clock me-1"></i>Updated 45 mins ago</span>
                            <a href="#" class="btn btn-sm btn-primary rounded-pill">Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h4 class="card-title">IT-04 - Finance Team</h4>
                        <div class="dropdown ms-auto">
                            <a href="#" class="text-muted fs-xl" data-bs-toggle="dropdown">
                                <i class="ti ti-dots-vertical"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i class="ti ti-eye me-2"></i>View</a></li>
                                <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i>Edit</a></li>
                                <li><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash me-2"></i>Remove</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p class="mb-2 text-muted">Total 5 members</p>
                        <div class="avatar-group avatar-group-sm mb-3">
                            <div class="avatar"><img src="/images/users/user-2.jpg" alt="" class="rounded-circle avatar-sm"></div>
                            <div class="avatar"><img src="/images/users/user-10.jpg" alt="" class="rounded-circle avatar-sm"></div>
                            <div class="avatar"><img src="/images/users/user-8.jpg" alt="" class="rounded-circle avatar-sm"></div>
                            <div class="avatar"><img src="/images/users/user-3.jpg" alt="" class="rounded-circle avatar-sm"></div>
                            <div class="avatar"><img src="/images/users/user-1.jpg" alt="" class="rounded-circle avatar-sm"></div>
                        </div>
                        <div class="mb-3">
                            <h5 class="fs-base mb-2">About Team:</h5>
                            <p class="text-muted">The Finance Team handles budgeting, forecasts, and financial analysis. We ensure transparency and strategic alignment with business goals.</p>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="d-flex gap-2 mb-3 mb-xl-0">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title text-bg-light rounded-circle">
                                            <i class="ti ti-calculator fs-lg text-primary"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 text-muted text-uppercase">Reports</h6>
                                        <p class="fw-medium mb-0">30</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="d-flex gap-2">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title text-bg-light rounded-circle">
                                            <i class="ti ti-trending-up fs-lg text-primary"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 text-muted text-uppercase">Ranking</h6>
                                        <p class="fw-medium mb-0">#3</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="d-flex gap-2">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title text-bg-light rounded-circle">
                                            <i class="ti ti-currency-euro fs-lg text-primary"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 text-muted text-uppercase">Budgets</h6>
                                        <p class="fw-medium mb-0">$28.9M</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-3">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="mb-0 text-muted fw-semibold fs-xxs">Q2 Audit Progress</p>
                                <p class="fw-semibold mb-0">72%</p>
                            </div>
                            <div class="progress progress-md">
                                <div class="progress-bar" style="width: 72%;"></div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted fs-xs"><i class="ti ti-clock me-1"></i>Updated 20 mins ago</span>
                            <a href="#" class="btn btn-sm btn-primary rounded-pill">Details</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-lg-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h4 class="card-title">IT-05 - Marketing Team</h4>
                        <div class="dropdown ms-auto">
                            <a href="#" class="text-muted fs-xl" data-bs-toggle="dropdown">
                                <i class="ti ti-dots-vertical"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i class="ti ti-eye me-2"></i>View</a></li>
                                <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i>Edit</a></li>
                                <li><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash me-2"></i>Remove</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p class="mb-2 text-muted">Total 7 members</p>
                        <div class="avatar-group avatar-group-sm mb-3">
                            <div class="avatar"><img src="/images/users/user-9.jpg" alt="" class="rounded-circle avatar-sm"></div>
                            <div class="avatar"><img src="/images/users/user-3.jpg" alt="" class="rounded-circle avatar-sm"></div>
                            <div class="avatar"><img src="/images/users/user-5.jpg" alt="" class="rounded-circle avatar-sm"></div>
                            <div class="avatar"><img src="/images/users/user-7.jpg" alt="" class="rounded-circle avatar-sm"></div>
                            <div class="avatar"><img src="/images/users/user-10.jpg" alt="" class="rounded-circle avatar-sm"></div>
                            <div class="avatar"><img src="/images/users/user-1.jpg" alt="" class="rounded-circle avatar-sm"></div>
                            <div class="avatar"><img src="/images/users/user-2.jpg" alt="" class="rounded-circle avatar-sm"></div>
                        </div>
                        <div class="mb-3">
                            <h5 class="fs-base mb-2">About Team:</h5>
                            <p class="text-muted">The Marketing Team manages branding, campaigns, and audience engagement. We drive growth through creative storytelling and data-driven strategies.</p>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="d-flex gap-2 mb-3 mb-xl-0">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title text-bg-light rounded-circle">
                                            <i class="ti ti-speakerphone fs-lg text-primary"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 text-muted text-uppercase">Campaigns</h6>
                                        <p class="fw-medium mb-0">18</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="d-flex gap-2">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title text-bg-light rounded-circle">
                                            <i class="ti ti-chart-arcs fs-lg text-primary"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 text-muted text-uppercase">Reach</h6>
                                        <p class="fw-medium mb-0">1.2M</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="d-flex gap-2">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title text-bg-light rounded-circle">
                                            <i class="ti ti-currency-bitcoin fs-lg text-primary"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 text-muted text-uppercase">Budgets</h6>
                                        <p class="fw-medium mb-0">$12.4M</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-3">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="mb-0 text-muted fw-semibold fs-xxs">Campaign Completion</p>
                                <p class="fw-semibold mb-0">60%</p>
                            </div>
                            <div class="progress progress-md">
                                <div class="progress-bar" style="width: 60%;"></div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted fs-xs"><i class="ti ti-clock me-1"></i>Updated 45 mins ago</span>
                            <a href="#" class="btn btn-sm btn-primary rounded-pill">Details</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-lg-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h4 class="card-title">IT-06 - Graphic Team</h4>
                        <div class="dropdown ms-auto">
                            <a href="#" class="text-muted fs-xl" data-bs-toggle="dropdown">
                                <i class="ti ti-dots-vertical"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i class="ti ti-eye me-2"></i>View</a></li>
                                <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i>Edit</a></li>
                                <li><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash me-2"></i>Remove</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between">

                        <p class="mb-2 text-muted">Total 5 members</p>
                        <div class="avatar-group avatar-group-sm mb-3">
                            <div class="avatar"><img src="/images/users/user-9.jpg" alt="" class="rounded-circle avatar-sm"></div>
                            <div class="avatar"><img src="/images/users/user-1.jpg" alt="" class="rounded-circle avatar-sm"></div>
                            <div class="avatar"><img src="/images/users/user-10.jpg" alt="" class="rounded-circle avatar-sm"></div>
                            <div class="avatar"><img src="/images/users/user-7.jpg" alt="" class="rounded-circle avatar-sm"></div>
                            <div class="avatar"><img src="/images/users/user-6.jpg" alt="" class="rounded-circle avatar-sm"></div>
                        </div>

                        <div class="mb-3">
                            <h5 class="fs-base mb-2">About Team:</h5>
                            <p class="text-muted">The Graphic Team brings visual concepts to life. We handle illustrations, digital , brand collateral, and motion graphics to support product and marketing teams.</p>
                        </div>

                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="d-flex gap-2 mb-3 mb-xl-0">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title text-bg-light rounded-circle">
                                            <i class="ti ti-brush fs-lg text-primary"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 text-muted text-uppercase">Designs</h6>
                                        <p class="fw-medium mb-0">36</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="d-flex gap-2">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title text-bg-light rounded-circle">
                                            <i class="ti ti-photo fs-lg text-primary"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 text-muted text-uppercase"></h6>
                                        <p class="fw-medium mb-0">89</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="d-flex gap-2">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title text-bg-light rounded-circle">
                                            <i class="ti ti-currency-euro fs-lg text-primary"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 text-muted text-uppercase">Budgets</h6>
                                        <p class="fw-medium mb-0">$8.1M</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="my-3">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="mb-0 text-muted fw-semibold fs-xxs">Current Load</p>
                                <p class="fw-semibold mb-0">82%</p>
                            </div>
                            <div class="progress progress-md">
                                <div class="progress-bar" style="width: 82%;"></div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted fs-xs"><i class="ti ti-clock me-1"></i>Updated 10 mins ago</span>
                            <a href="#" class="btn btn-sm btn-primary rounded-pill">Details</a>
                        </div>
                    </div>
                </div>
            </div>


        </div> <!-- end row-->

    </div> <!-- end col-->
</div> <!-- end row-->

@endsection

@section('scripts')
@endsection