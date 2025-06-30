@extends('layouts.vertical', ['title' => 'Dashboard 3'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['title' => 'Dashboard 3'])

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="row g-0">
                    <!-- Left Stats Section -->
                    <div class="col-xxl-3 order-2 order-xxl-1">
                        <div class="row g-0">
                            <!-- Views -->
                            <div class="col-lg-6 col-xl-6 col-xxl-12">
                                <div class="p-3 rounded m-1 border border-dashed">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h3 class="mb-1"><span data-target="14.59">0</span>M <span class="text-success fs-base">+5.2% <i class="ti ti-trending-up"></i></span></h3>
                                            <p class="mb-0 text-muted">Total Views</p>
                                        </div>
                                        <div class="avatar-xl">
                                            <span class="avatar-title text-bg-light rounded-circle">
                                                <i class="ti ti-eye fs-2 text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Sessions -->
                            <div class="col-lg-6 col-xl-6 col-xxl-12">
                                <div class="p-3 rounded m-1 mt-xxl-0 border border-dashed">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h3 class="mb-1"><span data-target="815.58">0</span>k <span class="text-success fs-base">+3.9% <i class="ti ti-activity"></i></span></h3>
                                            <p class="mb-0 text-muted">Sessions</p>
                                        </div>
                                        <div class="avatar-xl">
                                            <span class="avatar-title text-bg-light rounded-circle">
                                                <i class="ti ti-clock fs-2 text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Bounce Rate -->
                            <div class="col-lg-6 col-xl-6 col-xxl-12">
                                <div class="p-3 rounded m-1 mt-xxl-0 border border-dashed">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h3 class="mb-1"><span data-target="41.3">0</span>% <span class="text-danger fs-base">-1.1% <i class="ti ti-arrow-down-left"></i></span></h3>
                                            <p class="mb-0 text-muted">Bounce Rate</p>
                                        </div>
                                        <div class="avatar-xl">
                                            <span class="avatar-title text-bg-light rounded-circle">
                                                <i class="ti ti-repeat-once fs-2 text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Active Users -->
                            <div class="col-lg-6 col-xl-6 col-xxl-12">
                                <div class="p-3 rounded m-1 mt-xxl-0 border border-dashed">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h3 class="mb-1"><span data-target="56.39">0</span>k <span class="text-success fs-base">+2.3% <i class="ti ti-users"></i></span></h3>
                                            <p class="mb-0 text-muted">Active Users</p>
                                        </div>
                                        <div class="avatar-xl">
                                            <span class="avatar-title text-bg-light rounded-circle">
                                                <i class="ti ti-user fs-2 text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->
                        </div> <!-- end row-->
                    </div> <!-- end col-->

                    <!-- Right Chart Section -->
                    <div class="col-xxl-9 order-1 order-xxl-2 border-start border-dashed">
                        <div class="card-header justify-content-between border-dashed">
                            <h4 class="card-title mb-0">Analytics Overview</h4>
                            <div class="d-flex flex-wrap gap-1">
                                <a href="javascript:void(0);" class="btn btn-sm btn-primary">
                                    <i class="ti ti-download me-1"></i> Export CSV
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div dir="ltr">
                                <div id="analytics-overview-chart" class="apex-charts"></div>
                            </div>
                        </div>
                    </div> <!-- end col-->
                </div> <!-- end row-->
            </div> <!-- end card-body-->
        </div> <!-- end card-->

        <div class="row">
            <div class="col-xxl-4">
                <div class="card">
                    <div class="card-header justify-content-between align-items-center">
                        <h4 class="card-title">Sessions Device</h4>
                        <div class="card-action">
                            <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                            <a href="#!" class="card-action-item" data-action="card-refresh"><i class="ti ti-refresh"></i></a>
                            <a href="#!" class="card-action-item" data-action="card-close"><i class="ti ti-x"></i></a>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div id="devices-chart" class="apex-chart"></div>
                    </div> <!-- end card-body-->

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-custom table-nowrap table-hover table-centered mb-0">
                                <thead class="bg-light align-middle bg-opacity-25 thead-sm">
                                    <tr class="text-uppercase fs-xxs">
                                        <th class="text-muted">Device</th>
                                        <th class="text-muted">Sessions</th>
                                        <th class="text-muted">Change</th>
                                        <th class="text-muted text-end">Traffic %</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h5 class="fs-base lh-base mb-0">Mobile</h5>
                                            <p class="fs-xxs mb-0 text-body-secondary">- Android / iOS</p>
                                        </td>
                                        <td>4620</td>
                                        <td class="text-success">+3.4%</td>
                                        <td class="text-end">58%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="fs-base lh-base mb-0">Desktop</h5>
                                            <p class="fs-xxs mb-0 text-body-secondary">- Windows / Mac</p>
                                        </td>
                                        <td>2510</td>
                                        <td class="text-success">+1.9%</td>
                                        <td class="text-end">32%</td>
                                    </tr>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h5 class="fs-base lh-base mb-0">Tablet</h5>
                                            <p class="fs-xxs mb-0 text-body-secondary">- iPad / Android Tabs</p>
                                        </td>
                                        <td class="border-bottom-0">820</td>
                                        <td class="text-danger border-bottom-0">-0.8%</td>
                                        <td class="text-end border-bottom-0">10%</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div> <!-- end table-responsive-->
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xxl-4 col-lg-6">
                <div class="card">
                    <div class="card-header justify-content-between align-items-center">
                        <h5 class="card-title">Traffic Sources</h5>
                        <div class="card-action">
                            <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                            <a href="#!" class="card-action-item" data-action="card-refresh"><i class="ti ti-refresh"></i></a>
                            <a href="#!" class="card-action-item" data-action="card-close"><i class="ti ti-x"></i></a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-lg">
                                <h3 class="mb-2 fw-bold" id="live-visitors">0</h3>
                                <p class="mb-2 fw-semibold text-muted">Right Now</p>
                            </div><!--end col-->
                            <div class="col-lg-auto align-self-center">
                                <ul class="list-unstyled mb-0 lh-lg">
                                    <li>
                                        <i class="ti ti-caret-right-filled fs-lg align-middle text-primary"></i>
                                        <span class="text-muted">Organic</span>
                                    </li>
                                    <li>
                                        <i class="ti ti-caret-right-filled fs-lg align-middle text-success"></i>
                                        <span class="text-muted">Direct</span>
                                    </li>
                                    <li>
                                        <i class="ti ti-caret-right-filled fs-lg align-middle"></i>
                                        <span class="text-muted">Campaign</span>
                                    </li>
                                </ul>
                            </div><!--end col-->
                        </div><!--end row-->
                        <div class="progress mb-3" style="height: 20px;">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-info" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-sm table-custom table-nowrap table-hover table-centered mb-0">
                                <thead class="bg-light align-middle bg-opacity-25 thead-sm">
                                    <tr class="text-uppercase fs-xxs">
                                        <th class="text-muted">URL</th>
                                        <th class="text-muted text-end">Views</th>
                                        <th class="text-muted text-end">Uniques</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-decoration-underline">/dashboard</td>
                                        <td class="text-end">9.8k</td>
                                        <td class="text-end">8.5k</td>
                                    </tr>
                                    <tr>
                                        <td class="text-decoration-underline">/ecommerce-index</td>
                                        <td class="text-end">8.2k</td>
                                        <td class="text-end">7.1k</td>
                                    </tr>
                                    <tr>
                                        <td class="text-decoration-underline">/apps/projects-overview</td>
                                        <td class="text-end">7.6k</td>
                                        <td class="text-end">6.2k</td>
                                    </tr>
                                    <tr>
                                        <td class="text-decoration-underline">/pages/contact</td>
                                        <td class="text-end">5.9k</td>
                                        <td class="text-end">4.8k</td>
                                    </tr>
                                    <tr>
                                        <td class="text-decoration-underline">/support/faq</td>
                                        <td class="text-end">5.2k</td>
                                        <td class="text-end">4.3k</td>
                                    </tr>
                                    <tr>
                                        <td class="text-decoration-underline">/login</td>
                                        <td class="text-end">4.7k</td>
                                        <td class="text-end">3.9k</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- ed .table-responsive-->
                        <div class="text-end mt-3">
                            <a href="{{ route('second', ['apps', 'chat'])}}" class="link-reset text-decoration-underline fw-semibold link-offset-3">
                                View all Links <i class="ti ti-link"></i>
                            </a>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->

            </div> <!-- end col-->

            <div class="col-xxl-4 col-lg-6">
                <div class="card">
                    <div class="card-header justify-content-between align-items-center">
                        <h4 class="card-title">Top 10 Countries</h4>
                        <div class="card-action">
                            <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                            <a href="#!" class="card-action-item" data-action="card-refresh"><i class="ti ti-refresh"></i></a>
                            <a href="#!" class="card-action-item" data-action="card-close"><i class="ti ti-x"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="fs-sm fw-medium fst-italic text-muted">01.</span>
                            <img src="/images/flags/de.svg" alt="Germany" class="avatar-xxs rounded">
                            <h5 class="mb-0 fw-medium"><a href="#!" class="link-reset">Germany</a></h5>
                            <div class="ms-auto">
                                <div class="d-flex align-items-center gap-3">
                                    <p class="mb-0 fw-medium">10,412</p>
                                    <p class="badge badge-label fs-xxs badge-soft-success mb-0">+1.5%</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="fs-sm fw-medium fst-italic text-muted">02.</span>
                            <img src="/images/flags/fr.svg" alt="France" class="avatar-xxs rounded">
                            <h5 class="mb-0 fw-medium"><a href="#!" class="link-reset">France</a></h5>
                            <div class="ms-auto">
                                <div class="d-flex align-items-center gap-3">
                                    <p class="mb-0 fw-medium">8,934</p>
                                    <p class="badge badge-label fs-xxs badge-soft-danger mb-0">-0.8%</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="fs-sm fw-medium fst-italic text-muted">03.</span>
                            <img src="/images/flags/in.svg" alt="India" class="avatar-xxs rounded">
                            <h5 class="mb-0 fw-medium"><a href="#!" class="link-reset">India</a></h5>
                            <div class="ms-auto">
                                <div class="d-flex align-items-center gap-3">
                                    <p class="mb-0 fw-medium">14,217</p>
                                    <p class="badge badge-label fs-xxs badge-soft-success mb-0">+3.2%</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="fs-sm fw-medium fst-italic text-muted">04.</span>
                            <img src="/images/flags/us.svg" alt="United States" class="avatar-xxs rounded">
                            <h5 class="mb-0 fw-medium"><a href="#!" class="link-reset">United States</a>
                            </h5>
                            <div class="ms-auto">
                                <div class="d-flex align-items-center gap-3">
                                    <p class="mb-0 fw-medium">18,522</p>
                                    <p class="badge badge-label fs-xxs badge-soft-success mb-0">+2.1%</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="fs-sm fw-medium fst-italic text-muted">05.</span>
                            <img src="/images/flags/gb.svg" alt="United Kingdom" class="avatar-xxs rounded">
                            <h5 class="mb-0 fw-medium"><a href="#!" class="link-reset">United Kingdom</a>
                            </h5>
                            <div class="ms-auto">
                                <div class="d-flex align-items-center gap-3">
                                    <p class="mb-0 fw-medium">7,614</p>
                                    <p class="badge badge-label fs-xxs badge-soft-danger mb-0">-1.2%</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="fs-sm fw-medium fst-italic text-muted">06.</span>
                            <img src="/images/flags/ca.svg" alt="Canada" class="avatar-xxs rounded">
                            <h5 class="mb-0 fw-medium"><a href="#!" class="link-reset">Canada</a></h5>
                            <div class="ms-auto">
                                <div class="d-flex align-items-center gap-3">
                                    <p class="mb-0 fw-medium">6,221</p>
                                    <p class="badge badge-label fs-xxs badge-soft-success mb-0">+0.9%</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="fs-sm fw-medium fst-italic text-muted">07.</span>
                            <img src="/images/flags/jp.svg" alt="Japan" class="avatar-xxs rounded">
                            <h5 class="mb-0 fw-medium"><a href="#!" class="link-reset">Japan</a></h5>
                            <div class="ms-auto">
                                <div class="d-flex align-items-center gap-3">
                                    <p class="mb-0 fw-medium">5,785</p>
                                    <p class="badge badge-label fs-xxs badge-soft-warning mb-0">0.0%</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="fs-sm fw-medium fst-italic text-muted">08.</span>
                            <img src="/images/flags/au.svg" alt="Australia" class="avatar-xxs rounded">
                            <h5 class="mb-0 fw-medium"><a href="#!" class="link-reset">Australia</a></h5>
                            <div class="ms-auto">
                                <div class="d-flex align-items-center gap-3">
                                    <p class="mb-0 fw-medium">4,918</p>
                                    <p class="badge badge-label fs-xxs badge-soft-success mb-0">+1.1%</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="fs-sm fw-medium fst-italic text-muted">09.</span>
                            <img src="/images/flags/br.svg" alt="Brazil" class="avatar-xxs rounded">
                            <h5 class="mb-0 fw-medium"><a href="#!" class="link-reset">Brazil</a></h5>
                            <div class="ms-auto">
                                <div class="d-flex align-items-center gap-3">
                                    <p class="mb-0 fw-medium">3,874</p>
                                    <p class="badge badge-label fs-xxs badge-soft-danger mb-0">-0.5%</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <span class="fs-sm fw-medium fst-italic text-muted">10.</span>
                            <img src="/images/flags/it.svg" alt="Italy" class="avatar-xxs rounded">
                            <h5 class="mb-0 fw-medium"><a href="#!" class="link-reset">Italy</a></h5>
                            <div class="ms-auto">
                                <div class="d-flex align-items-center gap-3">
                                    <p class="mb-0 fw-medium">4,105</p>
                                    <p class="badge badge-label fs-xxs badge-soft-success mb-0">+0.7%</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-2">
                            <a href="{{ route('second', ['apps', 'chat'])}}" class="link-reset text-decoration-underline fw-semibold link-offset-3">
                                View all Countries <i class="ti ti-world"></i>
                            </a>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div><!--end row-->
        <div class="row">
            <div class="col-12">
                <div data-table data-table-rows-per-page="5" class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title">Top Campaign Performance</h5>
                        <div class="card-action">
                            <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                            <a href="#!" class="card-action-item" data-action="card-refresh"><i class="ti ti-refresh"></i></a>
                            <a href="#!" class="card-action-item" data-action="card-close"><i class="ti ti-x"></i></a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-custom table-nowrap table-hover table-centered mb-0">
                                <thead class="bg-light align-middle bg-opacity-25 thead-sm">
                                    <tr class="text-uppercase fs-xxs">
                                        <th class="text-muted">Campaign</th>
                                        <th data-table-sort class="text-muted">Visitors</th>
                                        <th data-table-sort class="text-muted">New Users</th>
                                        <th data-table-sort class="text-muted">Sessions</th>
                                        <th data-table-sort class="text-muted">Bounce Rate</th>
                                        <th data-table-sort class="text-muted">Pages/Visit</th>
                                        <th data-table-sort class="text-muted">Avg. Duration</th>
                                        <th data-table-sort class="text-muted">Leads</th>
                                        <th data-table-sort class="text-muted">Revenue</th>
                                        <th data-table-sort class="text-muted">Conversion</th>
                                    </tr>
                                </thead>
                                <tbody class="text-sm">
                                    <tr>
                                        <td><i class="ti ti-rocket text-primary me-1 fs-lg"></i> Spring Launch
                                        </td>
                                        <td>502</td>
                                        <td>260</td>
                                        <td>6,845</td>
                                        <td><span class="text-success">18.22%</span></td>
                                        <td>3.15</td>
                                        <td>01:40</td>
                                        <td>432</td>
                                        <td><span class="text-success">$3.64M</span></td>
                                        <td>6.15%</td>
                                    </tr>
                                    <tr>
                                        <td><i class="ti ti-brand-facebook text-info fs-lg me-1"></i> Facebook
                                            Push
                                        </td>
                                        <td>478</td>
                                        <td>245</td>
                                        <td>6,120</td>
                                        <td><span class="text-warning">21.03%</span></td>
                                        <td>2.87</td>
                                        <td>01:28</td>
                                        <td>398</td>
                                        <td>$3.10M</td>
                                        <td>5.65%</td>
                                    </tr>
                                    <tr>
                                        <td><i class="ti ti-speakerphone text-success fs-lg me-1"></i> Holiday
                                            Buzz
                                        </td>
                                        <td>445</td>
                                        <td>230</td>
                                        <td>5,710</td>
                                        <td>23.12%</td>
                                        <td>2.45</td>
                                        <td>01:22</td>
                                        <td>372</td>
                                        <td>$2.86M</td>
                                        <td>5.12%</td>
                                    </tr>
                                    <tr>
                                        <td><i class="ti ti-mail-fast text-warning fs-lg me-1"></i> Email
                                            Reconnect
                                        </td>
                                        <td>392</td>
                                        <td>190</td>
                                        <td>5,210</td>
                                        <td>25.74%</td>
                                        <td>2.18</td>
                                        <td>01:50</td>
                                        <td>340</td>
                                        <td>$2.45M</td>
                                        <td>4.88%</td>
                                    </tr>
                                    <tr>
                                        <td><i class="ti ti-broadcast text-muted fs-lg me-1"></i> Display
                                            Retarget
                                        </td>
                                        <td>338</td>
                                        <td>160</td>
                                        <td>4,670</td>
                                        <td>19.88%</td>
                                        <td>1.92</td>
                                        <td>02:05</td>
                                        <td>298</td>
                                        <td>$1.95M</td>
                                        <td>4.62%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end .table-responsive-->
                    </div> <!-- end card-body-->
                    <div class="card-footer border-0">
                        <div class="align-items-center justify-content-between row text-center text-sm-start">
                            <div class="col-sm">
                                <div data-table-pagination-info></div>
                            </div>
                            <div class="col-sm-auto mt-3 mt-sm-0">
                                <div data-table-pagination></div>
                            </div> <!-- end col-->
                        </div> <!-- end row-->
                    </div> <!-- end card-footer-->
                </div> <!-- end card-->

            </div> <!-- end col-->
        </div><!--end row-->
    </div><!--end col-->
</div> <!-- end row-->

<!-- Right Sidebar -->
<div class="asidebar-button d-xl-none d-flex">
    <button class="btn btn-danger btn-icon rounded-end-0" data-bs-toggle="offcanvas" data-bs-target="#asidebar-offcanvas">
        <i class="ti ti-adjustments-horizontal fs-xl"></i>
    </button>
</div>

<div class="asidebar border-start offcanvas-xl offcanvas-end overflow-hidden" tabindex="-1" id="asidebar-offcanvas">
    <div class="offcanvas-body p-0 h-100" data-simplebar>
        <div class="d-block">
            <div class="p-3 border-bottom">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <p class="mb-0 fw-semibold fs-sm">Quick Message</p>
                    <p class="fw-semibold text-success mb-0 fs-xs"><i class="ti ti-circle-filled"></i> Online</p>
                </div>
                <a href="#" class="d-block py-2">
                    <span class="badge text-bg-danger rounded-circle float-end">5</span>
                    <span class="d-flex align-items-center">
                        <span class="flex-shrink-0">
                            <img src="/images/users/user-3.jpg" alt="Lucas Miller" class="avatar-sm rounded-circle">
                        </span>
                        <span class="flex-grow-1 ms-2 text-truncate">
                            <span class="mb-0 lh-base d-block fw-medium text-body fs-base">Lucas Miller</span>
                            <span class="text-success fs-xxs mb-0">active now</span>
                        </span>
                    </span>
                </a>
                <a href="#" class="d-block py-2">
                    <span class="text-muted float-end fs-10">25min ago</span>
                    <span class="d-flex align-items-center">
                        <span class="flex-shrink-0">
                            <img src="/images/users/user-4.jpg" alt="Amelia Green" class="avatar-sm rounded-circle">
                        </span>
                        <span class="flex-grow-1 ms-2 text-truncate">
                            <span class="mb-0 lh-base d-block fw-medium text-body fs-base">Amelia Green</span>
                            <span class="text-muted fs-xxs mb-0">See you soon!</span>
                        </span>
                    </span>
                </a>

                <a href="#" class="d-block py-2">
                    <span class="badge text-bg-success rounded-circle float-end">1</span>
                    <span class="d-flex align-items-center">
                        <span class="flex-shrink-0">
                            <span class="avatar avatar-sm d-block">
                                <span class="avatar-title bg-info-subtle text-info rounded-circle fw-bold">
                                    S
                                </span>
                            </span>
                        </span>
                        <span class="flex-grow-1 ms-2 text-truncate">
                            <span class="mb-0 lh-base d-block fw-medium text-body fs-base">Sophia Turner</span>
                            <span class="text-muted fs-xxs mb-0">Good Morning! 👋</span>
                        </span>
                    </span>
                </a>
                <a href="#" class="d-block py-2">
                    <span class="text-muted float-end fs-10">1h ago</span>
                    <span class="d-flex align-items-center">
                        <span class="flex-shrink-0">
                            <img src="/images/users/user-6.jpg" alt="Noah Smith" class="avatar-sm rounded-circle">
                        </span>
                        <span class="flex-grow-1 ms-2 text-truncate">
                            <span class="mb-0 lh-base d-block fw-medium text-body fs-base">Noah Smith</span>
                            <span class="text-muted fs-xxs mb-0">Let's catch up later.</span>
                        </span>
                    </span>
                </a>
                <a href="#" class="d-block py-2">
                    <span class="text-muted float-end fs-10">3h ago</span>
                    <span class="d-flex align-items-center">
                        <span class="flex-shrink-0">
                            <img src="/images/users/user-7.jpg" alt="Emma Johnson" class="avatar-sm rounded-circle">
                        </span>
                        <span class="flex-grow-1 ms-2 text-truncate">
                            <span class="mb-0 lh-base d-block fw-medium text-body fs-base">Emma Johnson</span>
                            <span class="text-muted fs-xxs mb-0">Sent you the files.</span>
                        </span>
                    </span>
                </a>

                <div class="text-center mt-2">
                    <a href="{{ route('second', ['apps', 'chat'])}}" class="link-reset text-decoration-underline fw-semibold link-offset-3">
                        Go to Chat <i class="ti ti-message"></i>
                    </a>
                </div>
            </div> <!-- end Quick Message-->

            <div class="border-bottom">
                <ul class="nav nav-tabs nav-justified nav-bordered nav-bordered-secondary mb-0">
                    <li class="nav-item">
                        <a href="#Posts" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                            <i class="ti ti-cards fs-xl me-md-1"></i>
                            <span class="d-none d-md-inline-block">Posts</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#Orders" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                            <i class="ti ti-truck-delivery fs-xl me-md-1"></i>
                            <span class="d-none d-md-inline-block">Orders</span>
                        </a>
                    </li>
                </ul>
                <div class="p-3">
                    <div class="tab-content">
                        <div class="tab-pane" id="Posts">
                            <h4 class="mb-2">260<span class="text-muted ms-1 fs-sm">Posts</span></h4>
                            <p class="fs-xs mb-0">
                                You have published 260 posts this month, showing strong content activity across all
                                categories.
                            </p>

                            <div class="card-body">
                                <div id="posts-chart" class="apex-chart"></div>
                            </div>
                        </div>
                        <div class="tab-pane show active" id="Orders">
                            <h4 class="mb-2">421<span class="text-muted ms-1 fs-sm">Orders</span></h4>
                            <p class="fs-xs mb-0">
                                A total of 421 orders have been placed, reflecting consistent demand for your
                                products.
                            </p>
                            <div class="card-body">
                                <div id="orders-chart" class="apex-chart"></div>
                            </div>
                        </div>
                    </div> <!-- end .tab-content-->
                </div> <!-- end .p-3-->
            </div> <!-- end Posts & Orders -->

            <div class="p-3">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <p class="mb-0 fw-semibold fs-sm">Today's Schedule </p>
                    <a href="#" class="text-muted d-flex align-items-center fs-xs fw-semibold">
                        <i class="ti ti-calendar me-1"></i><span>Invite</span>
                    </a>
                </div>
                <div class="pb-2 border-bottom border-light border-dashed">
                    <div class="mb-2">
                        <p class="mb-0 text-truncate fs-base fw-medium">Design Review Meeting</p>
                        <span class="text-warning fs-xs">30 minute session with UI/UX team</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="avatar-group avatar-group-xs">
                            <div class="avatar">
                                <img src="/images/users/user-5.jpg" alt="Liam Carter" class="avatar-xs rounded-circle">
                            </div>
                            <div class="avatar">
                                <img src="/images/users/user-6.jpg" alt="Zoe Miles" class="avatar-xs rounded-circle">
                            </div>
                            <div class="avatar avatar-xs">
                                <span class="avatar-title bg-primary-subtle text-primary rounded-circle fw-bold">
                                    D
                                </span>
                            </div>
                        </div>
                        <button type="button" class="btn btn-sm btn-soft-secondary rounded-circle btn-icon">
                            <i class="ti ti-brand-figma fs-lg"></i>
                        </button>
                    </div>
                </div>

                <div class="py-2 border-bottom border-light border-dashed">
                    <div class="mb-2">
                        <p class="mb-0 text-truncate fs-base fw-medium">Sprint Planning Session</p>
                        <span class="text-success fs-xs">1 hour agile team meeting</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="avatar-group avatar-group-xs">
                            <div class="avatar">
                                <img src="/images/users/user-7.jpg" alt="Ava Lee" class="avatar-xs rounded-circle">
                            </div>
                            <div class="avatar">
                                <img src="/images/users/user-8.jpg" alt="Ethan King" class="avatar-xs rounded-circle">
                            </div>
                            <div class="avatar">
                                <img src="/images/users/user-9.jpg" alt="Lucas White" class="avatar-xs rounded-circle">
                            </div>
                        </div>
                        <button type="button" class="btn btn-sm btn-soft-secondary rounded-circle btn-icon">
                            <i class="ti ti-calendar-event fs-lg"></i>
                        </button>
                    </div>
                </div>
            </div> <!-- end Today's Schedule-->
        </div><!--end card-body-->
    </div> <!-- end offcanvas-body-->
</div> <!-- end offcanvas-->

@endsection

@section('scripts')
@vite(['resources/js/pages/custom-table.js','resources/js/pages/dashboard-3.js'])
@endsection