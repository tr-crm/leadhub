@extends('layouts.vertical', ['title' => 'Project Overview'])

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'Projects', 'title' => 'Project Overview'])

<div class="row justify-content-center">
    <div class="col-xxl-10">
        <div class="row g-0">
            <!-- Project Main Details -->
            <div class="col-xl-9">
                <div class="card card-h-100 rounded-0 rounded-start">
                    <div class="card-header align-items-start p-4">
                        <div class="avatar-xxl me-3">
                            <span class="avatar-title text-bg-light rounded">
                                <img src="/images/logos/starbucks.svg" height="48" alt="Brand-img">
                            </span>
                        </div>
                        <div>
                            <h3 class="mb-1 d-flex fs-xl align-items-center">Starbucks - AI Analytics Dashboard</h3>
                            <p class="text-muted mb-2 fs-xxs">Updated 5 minutes ago</p>
                            <span class="badge badge-soft-success fs-xxs badge-label">In Progress</span>
                        </div>
                        <div class="ms-auto">
                            <a href="javascript: void(0);" class="btn btn-light"><i class="ti ti-pencil me-1"></i> Edit</a>
                        </div>
                    </div>
                    <div class="card-body px-4">
                        <div class="mb-4">
                            <h5 class="fs-base mb-2">Project Description:</h5>
                            <p class="text-muted">This dashboard provides AI-powered insights and analytics for Starbucks business data. It includes sales performance, customer behavior, and predictive trends to assist in data-driven decision-making.</p>
                            <p class="text-muted">
                                Customizable reports and role-based dashboards ensure relevant insights for marketing teams, financial analysts, and executive decision-makers. The system is built with scalability and responsiveness in mind, supporting both desktop and mobile views for seamless access.
                            </p>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-4 col-xl-3">
                                <h6 class="mb-1 text-muted text-uppercase">Created Date:</h6>
                                <p class="fw-medium mb-0">March 15, 2025</p>
                            </div>
                            <div class="col-md-4 col-xl-3">
                                <h6 class="mb-1 text-muted text-uppercase">Deadline:</h6>
                                <p class="fw-medium mb-0">June 30, 2025</p>
                            </div>
                            <div class="col-md-4 col-xl-3">
                                <h6 class="mb-1 text-muted text-uppercase">Created By:</h6>
                                <p class="fw-medium mb-0">John Smith</p>
                            </div>
                            <div class="col-md-4 col-xl-3">
                                <h6 class="mb-1 text-muted text-uppercase">Client Name:</h6>
                                <p class="fw-medium mb-0">Starbucks Corporation</p>
                            </div>
                        </div>

                        <!-- Tabs -->
                        <ul class="nav nav-tabs nav-bordered mb-3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#comments" role="tab">
                                    <i class="ti ti-message-circle fs-lg me-md-1 align-middle"></i>
                                    <span class="d-none d-md-inline-block align-middle">Comments</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tasks" role="tab">
                                    <i class="ti ti-list-check fs-lg me-md-1 align-middle"></i>
                                    <span class="d-none d-md-inline-block align-middle">Task List</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#activity" role="tab">
                                    <i class="ti ti-activity fs-lg me-md-1 align-middle"></i>
                                    <span class="d-none d-md-inline-block align-middle">Activity</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="comments" role="tabpanel">
                                <form action="#" class="mb-3">
                                    <div class="mb-3">
                                        <textarea class="form-control" id="form-control-textarea" rows="4" placeholder="Enter your messages..."></textarea>
                                    </div>
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-secondary btn-sm">Comment <i class="ti ti-send-2 align-baseline ms-1"></i></button>
                                    </div>
                                </form>

                                <h4 class="mb-3 fs-md">Comments (15)</h4>

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
                            </div>

                            <div class="tab-pane fade" id="tasks" role="tabpanel">
                                <div class="card mb-1">
                                    <div class="card-body p-2">
                                        <div class="row g-3 align-items-center justify-content-between">
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center gap-2">
                                                    <input type="checkbox" class="form-check-input rounded-circle mt-0 fs-xl" id="task2">
                                                    <a href="#!" data-bs-toggle="offcanvas" role="button" class="link-reset fw-medium">Finalize monthly performance report</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center gap-3 justify-content-md-end">
                                                    <div class="d-flex align-items-center gap-1">
                                                        <div class="avatar avatar-xs">
                                                            <img src="/images/users/user-2.jpg" alt="avatar-2" class="img-fluid rounded-circle">
                                                        </div>
                                                        <div>
                                                            <h5 class="text-nowrap mb-0 lh-base"><a href="{{ route('second', ['pages', 'profile'])}}" class="link-reset">Liam James</a></h5>
                                                        </div>
                                                    </div>

                                                    <div class="flex-shrink-0">
                                                        <span class="badge text-bg-success badge-label">Completed</span>
                                                    </div>

                                                    <ul class="list-inline fs-base text-end flex-shrink-0 mb-0">
                                                        <li class="list-inline-item">
                                                            <i class="ti ti-calendar text-muted fs-lg me-1 align-middle"></i>
                                                            <span class="fw-semibold">Yesterday</span>
                                                        </li>
                                                        <li class="list-inline-item ms-1">
                                                            <i class="ti ti-list-details text-muted fs-lg me-1 align-middle"></i>
                                                            <span class="fw-medium">7/7</span>
                                                        </li>
                                                        <li class="list-inline-item ms-1">
                                                            <i class="ti ti-message text-muted fs-lg me-1 align-middle"></i>
                                                            <span class="fw-medium">12</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-1">
                                    <div class="card-body p-2">
                                        <div class="row g-3 align-items-center justify-content-between">
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center gap-2">
                                                    <input type="checkbox" class="form-check-input rounded-circle mt-0 fs-xl" id="task3">
                                                    <a href="#!" data-bs-toggle="offcanvas" role="button" class="link-reset fw-medium">Design wireframes for new onboarding flow</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center gap-3 justify-content-md-end">
                                                    <div class="d-flex align-items-center gap-1">
                                                        <div class="avatar avatar-xs">
                                                            <img src="/images/users/user-4.jpg" alt="avatar-4" class="img-fluid rounded-circle">
                                                        </div>
                                                        <div>
                                                            <h5 class="text-nowrap mb-0 lh-base"><a href="{{ route('second', ['pages', 'profile'])}}" class="link-reset">Sophia Lee</a></h5>
                                                        </div>
                                                    </div>

                                                    <div class="flex-shrink-0">
                                                        <span class="badge text-bg-danger badge-label">Delayed</span>
                                                    </div>

                                                    <ul class="list-inline fs-base text-end flex-shrink-0 mb-0">
                                                        <li class="list-inline-item">
                                                            <i class="ti ti-calendar text-muted fs-lg me-1 align-middle"></i>
                                                            <span class="fw-semibold">Tomorrow</span>
                                                        </li>
                                                        <li class="list-inline-item ms-1">
                                                            <i class="ti ti-list-details text-muted fs-lg me-1 align-middle"></i>
                                                            <span class="fw-medium">2/5</span>
                                                        </li>
                                                        <li class="list-inline-item ms-1">
                                                            <i class="ti ti-message text-muted fs-lg me-1 align-middle"></i>
                                                            <span class="fw-medium">7</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-1">
                                    <div class="card-body p-2">
                                        <div class="row g-3 align-items-center justify-content-between">
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center gap-2">
                                                    <input type="checkbox" class="form-check-input rounded-circle mt-0 fs-xl" id="task4">
                                                    <a href="#!" data-bs-toggle="offcanvas" role="button" class="link-reset fw-medium">Update customer segmentation dashboard</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center gap-3 justify-content-md-end">
                                                    <div class="d-flex align-items-center gap-1">
                                                        <div class="avatar avatar-xs">
                                                            <img src="/images/users/user-5.jpg" alt="avatar-5" class="img-fluid rounded-circle">
                                                        </div>
                                                        <div>
                                                            <h5 class="text-nowrap mb-0 lh-base"><a href="{{ route('second', ['pages', 'profile'])}}" class="link-reset">Noah Carter</a></h5>
                                                        </div>
                                                    </div>

                                                    <div class="flex-shrink-0">
                                                        <span class="badge text-bg-primary badge-label">Pending</span>
                                                    </div>

                                                    <ul class="list-inline fs-base text-end flex-shrink-0 mb-0">
                                                        <li class="list-inline-item">
                                                            <i class="ti ti-calendar text-muted fs-lg me-1 align-middle"></i>
                                                            <span class="fw-semibold">Friday</span>
                                                        </li>
                                                        <li class="list-inline-item ms-1">
                                                            <i class="ti ti-list-details text-muted fs-lg me-1 align-middle"></i>
                                                            <span class="fw-medium">0/4</span>
                                                        </li>
                                                        <li class="list-inline-item ms-1">
                                                            <i class="ti ti-message text-muted fs-lg me-1 align-middle"></i>
                                                            <span class="fw-medium">3</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-1">
                                    <div class="card-body p-2">
                                        <div class="row g-3 align-items-center justify-content-between">
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center gap-2">
                                                    <input type="checkbox" class="form-check-input rounded-circle mt-0 fs-xl" id="task5">
                                                    <a href="#!" data-bs-toggle="offcanvas" role="button" class="link-reset fw-medium">Conduct competitor analysis report</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center gap-3 justify-content-md-end">
                                                    <div class="d-flex align-items-center gap-1">
                                                        <div class="avatar avatar-xs">
                                                            <img src="/images/users/user-6.jpg" alt="avatar-6" class="img-fluid rounded-circle">
                                                        </div>
                                                        <div>
                                                            <h5 class="text-nowrap mb-0 lh-base"><a href="{{ route('second', ['pages', 'profile'])}}" class="link-reset">Emily Davis</a></h5>
                                                        </div>
                                                    </div>

                                                    <div class="flex-shrink-0">
                                                        <span class="badge text-bg-warning badge-label">In Progress</span>
                                                    </div>

                                                    <ul class="list-inline fs-base text-end flex-shrink-0 mb-0">
                                                        <li class="list-inline-item">
                                                            <i class="ti ti-calendar text-muted fs-lg me-1 align-middle"></i>
                                                            <span class="fw-semibold">Next Week</span>
                                                        </li>
                                                        <li class="list-inline-item ms-1">
                                                            <i class="ti ti-list-details text-muted fs-lg me-1 align-middle"></i>
                                                            <span class="fw-medium">1/6</span>
                                                        </li>
                                                        <li class="list-inline-item ms-1">
                                                            <i class="ti ti-message text-muted fs-lg me-1 align-middle"></i>
                                                            <span class="fw-medium">5</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-1">
                                    <div class="card-body p-2">
                                        <div class="row g-3 align-items-center justify-content-between">
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center gap-2">
                                                    <input type="checkbox" class="form-check-input rounded-circle mt-0 fs-xl" id="task6">
                                                    <a href="#!" data-bs-toggle="offcanvas" role="button" class="link-reset fw-medium">Implement API for mobile integration</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center gap-3 justify-content-md-end">
                                                    <div class="d-flex align-items-center gap-1">
                                                        <div class="avatar avatar-xs">
                                                            <img src="/images/users/user-7.jpg" alt="avatar-7" class="img-fluid rounded-circle">
                                                        </div>
                                                        <div>
                                                            <h5 class="text-nowrap mb-0 lh-base"><a href="{{ route('second', ['pages', 'profile'])}}" class="link-reset">Lucas White</a></h5>
                                                        </div>
                                                    </div>

                                                    <div class="flex-shrink-0">
                                                        <span class="badge text-bg-info badge-label">Review</span>
                                                    </div>

                                                    <ul class="list-inline fs-base text-end flex-shrink-0 mb-0">
                                                        <li class="list-inline-item">
                                                            <i class="ti ti-calendar text-muted fs-lg me-1 align-middle"></i>
                                                            <span class="fw-semibold">Today</span>
                                                        </li>
                                                        <li class="list-inline-item ms-1">
                                                            <i class="ti ti-list-details text-muted fs-lg me-1 align-middle"></i>
                                                            <span class="fw-medium">6/6</span>
                                                        </li>
                                                        <li class="list-inline-item ms-1">
                                                            <i class="ti ti-message text-muted fs-lg me-1 align-middle"></i>
                                                            <span class="fw-medium">10</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-1">
                                    <div class="card-body p-2">
                                        <div class="row g-3 align-items-center justify-content-between">
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center gap-2">
                                                    <input type="checkbox" class="form-check-input rounded-circle mt-0 fs-xl" id="task7">
                                                    <a href="#!" data-bs-toggle="offcanvas" role="button" class="link-reset fw-medium">QA testing for billing module</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center gap-3 justify-content-md-end">
                                                    <div class="d-flex align-items-center gap-1">
                                                        <div class="avatar avatar-xs">
                                                            <img src="/images/users/user-8.jpg" alt="avatar-8" class="img-fluid rounded-circle">
                                                        </div>
                                                        <div>
                                                            <h5 class="text-nowrap mb-0 lh-base"><a href="{{ route('second', ['pages', 'profile'])}}" class="link-reset">Olivia Martin</a></h5>
                                                        </div>
                                                    </div>

                                                    <div class="flex-shrink-0">
                                                        <span class="badge text-bg-warning badge-label">In Progress</span>
                                                    </div>

                                                    <ul class="list-inline fs-base text-end flex-shrink-0 mb-0">
                                                        <li class="list-inline-item">
                                                            <i class="ti ti-calendar text-muted fs-lg me-1 align-middle"></i>
                                                            <span class="fw-semibold">Monday</span>
                                                        </li>
                                                        <li class="list-inline-item ms-1">
                                                            <i class="ti ti-list-details text-muted fs-lg me-1 align-middle"></i>
                                                            <span class="fw-medium">4/8</span>
                                                        </li>
                                                        <li class="list-inline-item ms-1">
                                                            <i class="ti ti-message text-muted fs-lg me-1 align-middle"></i>
                                                            <span class="fw-medium">14</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-1">
                                    <div class="card-body p-2">
                                        <div class="row g-3 align-items-center justify-content-between">
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center gap-2">
                                                    <input type="checkbox" class="form-check-input rounded-circle mt-0 fs-xl" id="task8">
                                                    <a href="#!" data-bs-toggle="offcanvas" role="button" class="link-reset fw-medium">Schedule product roadmap presentation</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center gap-3 justify-content-md-end">
                                                    <div class="d-flex align-items-center gap-1">
                                                        <div class="avatar avatar-xs">
                                                            <img src="/images/users/user-9.jpg" alt="avatar-9" class="img-fluid rounded-circle">
                                                        </div>
                                                        <div>
                                                            <h5 class="text-nowrap mb-0 lh-base"><a href="{{ route('second', ['pages', 'profile'])}}" class="link-reset">Ethan Moore</a></h5>
                                                        </div>
                                                    </div>

                                                    <div class="flex-shrink-0">
                                                        <span class="badge text-bg-secondary badge-label">Planned</span>
                                                    </div>

                                                    <ul class="list-inline fs-base text-end flex-shrink-0 mb-0">
                                                        <li class="list-inline-item">
                                                            <i class="ti ti-calendar text-muted fs-lg me-1 align-middle"></i>
                                                            <span class="fw-semibold">Next Month</span>
                                                        </li>
                                                        <li class="list-inline-item ms-1">
                                                            <i class="ti ti-list-details text-muted fs-lg me-1 align-middle"></i>
                                                            <span class="fw-medium">0/1</span>
                                                        </li>
                                                        <li class="list-inline-item ms-1">
                                                            <i class="ti ti-message text-muted fs-lg me-1 align-middle"></i>
                                                            <span class="fw-medium">0</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="activity" role="tabpanel">

                                <div class="d-flex gap-1 border-bottom border-dashed pb-3">
                                    <div class="me-2 flex-shrink-0">
                                        <img src="/images/users/user-1.jpg" class="avatar-md rounded-circle" alt="">
                                    </div>
                                    <div class="flex-grow-1 text-muted">
                                        <span class="fw-medium text-body">Daniel Martinez</span> uploaded a revised contract file.
                                        <p class="fs-xs mb-0 text-body-secondary">Today 10:15 am - 24 Apr, 2025</p>
                                    </div>
                                    <p class="fs-xs text-body-secondary">5m ago</p>
                                </div>

                                <div class="d-flex gap-1 border-bottom border-dashed py-3">
                                    <div class="me-2 flex-shrink-0">
                                        <img src="/images/users/user-2.jpg" class="avatar-md rounded-circle" alt="">
                                    </div>
                                    <div class="flex-grow-1 text-muted">
                                        <span class="fw-medium text-body">Nina Patel</span> commented on your design update.
                                        <p class="fs-xs mb-0 text-body-secondary">Today 8:00 am - 24 Apr, 2025</p>
                                    </div>
                                    <p class="fs-xs text-body-secondary">2h ago</p>
                                </div>

                                <div class="d-flex gap-1 border-bottom border-dashed py-3">
                                    <div class="me-2 flex-shrink-0">
                                        <img src="/images/users/user-3.jpg" class="avatar-md rounded-circle" alt="">
                                    </div>
                                    <div class="flex-grow-1 text-muted">
                                        <span class="fw-medium text-body">Jason Lee</span> completed the feedback review.
                                        <p class="fs-xs mb-0 text-body-secondary">Yesterday 6:10 pm - 23 Apr, 2025</p>
                                    </div>
                                    <p class="fs-xs text-body-secondary">16h ago</p>
                                </div>

                                <div class="d-flex gap-1 border-bottom border-dashed py-3">
                                    <div class="me-2 flex-shrink-0">
                                        <img src="/images/users/user-4.jpg" class="avatar-md rounded-circle" alt="">
                                    </div>
                                    <div class="flex-grow-1 text-muted">
                                        <span class="fw-medium text-body">Emma Davis</span> shared a link in the marketing group chat.
                                        <p class="fs-xs mb-2 text-body-secondary">Yesterday 3:25 pm - 23 Apr, 2025</p>
                                        <a href="#!" class="btn btn-default border px-1 py-0"><i class="ti ti-link me-1"></i> View</a>
                                    </div>
                                    <p class="fs-xs text-body-secondary">19h ago</p>
                                </div>

                                <div class="d-flex gap-1 border-bottom border-dashed py-3">
                                    <div class="me-2 flex-shrink-0">
                                        <img src="/images/users/user-5.jpg" class="avatar-md rounded-circle" alt="">
                                    </div>
                                    <div class="flex-grow-1 text-muted position-relative">
                                        <span class="fw-medium text-body">Leo Zhang</span> sent you a private message.
                                        <p class="fs-xs text-body-secondary">2 days ago 11:45 am - 22 Apr, 2025</p>

                                        <div class="py-2 px-3 bg-light bg-opacity-50">
                                            "Let’s sync up on the product roadmap tomorrow afternoon, does 2 PM work for you?"
                                        </div>
                                    </div>
                                    <p class="fs-xs flex-shrink-0 text-body-secondary">30h ago</p>
                                </div>

                                <div class="d-flex align-items-center justify-content-center gap-2 p-3">
                                    <strong>Loading...</strong>
                                    <div class="spinner-border spinner-border-sm text-danger" role="status" aria-hidden="true"></div>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col-xl-9 -->

            <!-- Team Sidebar -->
            <div class="col-xl-3">
                <div class="card card-h-100 rounded-0 rounded-end">
                    <div class="card-body p-0">
                        <div class="p-3 border-bottom border-dashed">
                            <h5 class="mb-2">Status</h5>
                            <div class="app-search">
                                <select class="form-select form-control my-1 my-md-0">
                                    <option>Status</option>
                                    <option selected value="On Track">On Track</option>
                                    <option value="Delayed">Delayed</option>
                                    <option value="At Risk">At Risk</option>
                                    <option value="Completed">Completed</option>
                                </select>
                                <i data-lucide="calendar-clock" class="app-search-icon text-muted"></i>
                            </div>
                        </div>

                        <div class="p-3 border-bottom border-dashed">
                            <div class="d-flex mb-3 justify-content-between align-items-center">
                                <h5 class="mb-0">Team Members:</h5>
                                <a href="javascript: void(0);" class="btn btn-light btn-sm btn-icon rounded-circle"><i class="ti ti-plus"></i></a>
                            </div>

                            <!-- team member -->
                            <div class="d-flex justify-content-between align-items-center pb-2">
                                <div class="d-flex align-items-center py-1 gap-2">
                                    <div class="avatar avatar-sm">
                                        <img src="/images/users/user-3.jpg" alt="avatar-3" class="img-fluid rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-nowrap mb-0 lh-base"><a href="{{ route('second', ['pages', 'profile'])}}" class="link-reset">Ava Brooks</a></h5>
                                        <p class="text-muted fs-xxs mb-0">UI/UX Designer</p>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-sm btn-icon btn-default" title="Message"><i class="ti ti-message fs-lg"></i></a>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center pb-2">
                                <div class="d-flex align-items-center py-1 gap-2">
                                    <div class="avatar avatar-sm">
                                        <img src="/images/users/user-4.jpg" alt="avatar-4" class="img-fluid rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-nowrap mb-0 lh-base"><a href="{{ route('second', ['pages', 'profile'])}}" class="link-reset">Liam Carter</a></h5>
                                        <p class="text-muted fs-xxs mb-0">Frontend Developer</p>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-sm btn-icon btn-default" title="Message"><i class="ti ti-message fs-lg"></i></a>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center pb-2">
                                <div class="d-flex align-items-center py-1 gap-2">
                                    <div class="avatar avatar-sm">
                                        <img src="/images/users/user-5.jpg" alt="avatar-5" class="img-fluid rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-nowrap mb-0 lh-base"><a href="{{ route('second', ['pages', 'profile'])}}" class="link-reset">Sophia Lee</a></h5>
                                        <p class="text-muted fs-xxs mb-0">Project Manager</p>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-sm btn-icon btn-default" title="Message"><i class="ti ti-message fs-lg"></i></a>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center pb-2">
                                <div class="d-flex align-items-center py-1 gap-2">
                                    <div class="avatar avatar-sm">
                                        <img src="/images/users/user-6.jpg" alt="avatar-6" class="img-fluid rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-nowrap mb-0 lh-base"><a href="{{ route('second', ['pages', 'profile'])}}" class="link-reset">Noah Kim</a></h5>
                                        <p class="text-muted fs-xxs mb-0">Backend Developer</p>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-sm btn-icon btn-default" title="Message"><i class="ti ti-message fs-lg"></i></a>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center pb-2">
                                <div class="d-flex align-items-center py-1 gap-2">
                                    <div class="avatar avatar-sm">
                                        <img src="/images/users/user-7.jpg" alt="avatar-7" class="img-fluid rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-nowrap mb-0 lh-base"><a href="{{ route('second', ['pages', 'profile'])}}" class="link-reset">Emma Watson</a></h5>
                                        <p class="text-muted fs-xxs mb-0">QA Engineer</p>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-sm btn-icon btn-default" title="Message"><i class="ti ti-message fs-lg"></i></a>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center pb-2">
                                <div class="d-flex align-items-center py-1 gap-2">
                                    <div class="avatar avatar-sm">
                                        <img src="/images/users/user-8.jpg" alt="avatar-8" class="img-fluid rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-nowrap mb-0 lh-base"><a href="{{ route('second', ['pages', 'profile'])}}" class="link-reset">James Nolan</a></h5>
                                        <p class="text-muted fs-xxs mb-0">DevOps Engineer</p>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-sm btn-icon btn-default" title="Message"><i class="ti ti-message fs-lg"></i></a>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center pb-2">
                                <div class="d-flex align-items-center py-1 gap-2">
                                    <div class="avatar avatar-sm">
                                        <img src="/images/users/user-9.jpg" alt="avatar-9" class="img-fluid rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-nowrap mb-0 lh-base"><a href="{{ route('second', ['pages', 'profile'])}}" class="link-reset">Olivia Reed</a></h5>
                                        <p class="text-muted fs-xxs mb-0">Product Owner</p>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-sm btn-icon btn-default" title="Message"><i class="ti ti-message fs-lg"></i></a>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar avatar-sm">
                                        <img src="/images/users/user-10.jpg" alt="avatar-10" class="img-fluid rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-nowrap mb-0 lh-base"><a href="{{ route('second', ['pages', 'profile'])}}" class="link-reset">Daniel Craig</a></h5>
                                        <p class="text-muted fs-xxs mb-0">Data Scientist</p>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-sm btn-icon btn-default" title="Message"><i class="ti ti-message fs-lg"></i></a>
                                </div>
                            </div>

                            <!-- End -->
                        </div>

                        <div class="px-3 pt-3 border-bottom border-dashed">
                            <div class="d-flex mb-3 justify-content-between align-items-center">
                                <h5 class="mb-0">Files:</h5>
                                <a href="javascript: void(0);" class="btn btn-light btn-sm btn-icon rounded-circle"><i class="ti ti-plus"></i></a>
                            </div>

                            <!-- Download Files -->
                            <div class="d-flex justify-content-between align-items-center pb-2">
                                <div class="d-flex align-items-center py-1 gap-2">
                                    <div class="flex-shrink-0 avatar-md bg-light bg-opacity-50 text-muted rounded-2">
                                        <i class="ti ti-file-text fs-xl avatar-title"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 fs-base"><a href="#!" class="link-reset">Project-Brief.pdf</a></h5>
                                        <p class="text-muted mb-0 fs-xs">2.1MB</p>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-sm btn-icon btn-default" title="Download"><i class="ti ti-download fs-lg"></i></a>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center pb-2">
                                <div class="d-flex align-items-center py-1 gap-2">
                                    <div class="flex-shrink-0 avatar-md bg-light bg-opacity-50 text-muted rounded-2">
                                        <i class="ti ti-file-music fs-xl avatar-title"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 fs-base"><a href="#!" class="link-reset">Team-Intro.mp3</a></h5>
                                        <p class="text-muted mb-0 fs-xs">5.6MB</p>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-sm btn-icon btn-default" title="Download"><i class="ti ti-download fs-lg"></i></a>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center pb-2">
                                <div class="d-flex align-items-center py-1 gap-2">
                                    <div class="flex-shrink-0 avatar-md bg-light bg-opacity-50 text-muted rounded-2">
                                        <i class="ti ti-file-zip fs-xl avatar-title"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 fs-base"><a href="#!" class="link-reset">UI-Kit.zip</a></h5>
                                        <p class="text-muted mb-0 fs-xs">42MB</p>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-sm btn-icon btn-default" title="Download"><i class="ti ti-download fs-lg"></i></a>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center pb-2">
                                <div class="d-flex align-items-center py-1 gap-2">
                                    <div class="flex-shrink-0 avatar-md bg-light bg-opacity-50 text-muted rounded-2">
                                        <i class="ti ti-file-type-png fs-xl avatar-title"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 fs-base"><a href="#!" class="link-reset">Brand-Logo.png</a></h5>
                                        <p class="text-muted mb-0 fs-xs">1.2MB</p>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-sm btn-icon btn-default" title="Download"><i class="ti ti-download fs-lg"></i></a>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center pb-2">
                                <div class="d-flex align-items-center py-1 gap-2">
                                    <div class="flex-shrink-0 avatar-md bg-light bg-opacity-50 text-muted rounded-2">
                                        <i class="ti ti-video fs-xl avatar-title"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 fs-base"><a href="#!" class="link-reset">Promo-Video.mp4</a></h5>
                                        <p class="text-muted mb-0 fs-xs">78MB</p>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-sm btn-icon btn-default" title="Download"><i class="ti ti-download fs-lg"></i></a>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center pb-2">
                                <div class="d-flex align-items-center py-1 gap-2">
                                    <div class="flex-shrink-0 avatar-md bg-light bg-opacity-50 text-muted rounded-2">
                                        <i class="ti ti-file-code fs-xl avatar-title"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 fs-base"><a href="#!" class="link-reset">dashboard-config.json</a></h5>
                                        <p class="text-muted mb-0 fs-xs">524KB</p>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-sm btn-icon btn-default" title="Download"><i class="ti ti-download fs-lg"></i></a>
                                </div>
                            </div>

                            <div class="d-flex align-items-center justify-content-center gap-2 p-3">
                                <strong>Loading...</strong>
                                <div class="spinner-border spinner-border-sm text-danger" role="status" aria-hidden="true"></div>
                            </div>

                        </div>

                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col-xl-3 -->
        </div> <!-- end row -->
    </div> <!-- end col-xxl-10 -->
</div> <!-- end row -->

@endsection

@section('scripts')
@endsection