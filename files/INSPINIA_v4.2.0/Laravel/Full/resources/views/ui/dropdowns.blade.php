@extends('layouts.vertical', ['title' => 'Dropdowns'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'UI', 'title' => 'Dropdowns'])

<div class="container-xl">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Examples</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        Toggle contextual overlays for displaying lists of links and more with the Bootstrap dropdown plugin.
                    </p>

                    <a class="btn btn-link p-0 fw-semibold" href="https://getbootstrap.com/docs/5.3/components/dropdowns/" target="_blank">
                        Dropdowns on Bootstrap
                        <i class="ti ti-chevron-right ms-1"></i>
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Single Button Dropdowns</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;!-- Choose Option --&gt;
                            &lt;div class=&quot;dropdown&quot;&gt;
                                &lt;button class=&quot;btn btn-light dropdown-toggle&quot; type=&quot;button&quot; id=&quot;dropdownMenuButton&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                    Choose Option
                                &lt;/button&gt;
                                &lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuButton&quot;&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Profile Settings&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Notifications&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Logout&lt;/a&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;

                            &lt;!-- Quick Actions --&gt;
                            &lt;div class=&quot;dropdown&quot;&gt;
                                &lt;a class=&quot;btn btn-primary dropdown-toggle&quot; href=&quot;#&quot; role=&quot;button&quot; id=&quot;dropdownMenuLink&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                    Quick Actions
                                &lt;/a&gt;
                                &lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuLink&quot;&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Create New&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Upload File&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;View Reports&lt;/a&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        </code>

                    </pre> <!-- end highlight-->
                </div> <!-- end preview code-->

                <div class="card-body">

                    <p class="text-muted">
                        Any single <code>.btn</code> can be turned into a dropdown
                        toggle with some markup changes. Here’s how you can put them to work
                        with either <code>&lt;button&gt;</code>
                        elements:
                    </p>

                    <div class="row">
                        <div class="col-auto">
                            <!-- Choose Option -->
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Choose Option
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Profile Settings</a>
                                    <a class="dropdown-item" href="#">Notifications</a>
                                    <a class="dropdown-item" href="#">Logout</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-auto">
                            <!-- Quick Actions -->
                            <div class="dropdown">
                                <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Quick Actions
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Create New</a>
                                    <a class="dropdown-item" href="#">Upload File</a>
                                    <a class="dropdown-item" href="#">View Reports</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Menu Alignment</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>


                <div class="code-body">

                    <pre>
                        <code class="language-markup">
                            &lt;div class=&quot;dropdown&quot;&gt;
                                &lt;button type=&quot;button&quot; class=&quot;btn btn-light dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                    Right-aligned menu
                                &lt;/button&gt;
                                &lt;div class=&quot;dropdown-menu dropdown-menu-end&quot;&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">
                        Add <code>.dropdown-menu-end</code>
                        to a <code>.dropdown-menu</code> to right
                        align the dropdown menu.
                    </p>

                    <div class="dropdown">
                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Right-aligned menu
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Custom Dropdown Arrow</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;!-- Without Arrow --&gt;
                            &lt;div class=&quot;dropdown&quot;&gt;
                                &lt;button class=&quot;btn btn-primary dropdown-toggle drop-arrow-none&quot; type=&quot;button&quot; id=&quot;dropdownMenuButton1&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                    Without Arrow
                                &lt;/button&gt;
                                &lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuButton1&quot;&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Download Report&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;View Analytics&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Export Data&lt;/a&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;

                            &lt;!-- Tabler Icon  --&gt;
                            &lt;div class=&quot;dropdown&quot;&gt;
                                &lt;button class=&quot;btn btn-outline-primary dropdown-toggle drop-arrow-none&quot; type=&quot;button&quot; id=&quot;dropdownMenuButton2&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                    Tabler Icon &lt;i class=&quot;ti ti-chevron-down align-middle ms-1&quot;&gt;&lt;/i&gt;
                                &lt;/button&gt;
                                &lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuButton2&quot;&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Edit Profile&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Account Settings&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Sign Out&lt;/a&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;

                            &lt;!-- Lucide Icon  --&gt;
                            &lt;div class=&quot;dropdown&quot;&gt;
                                &lt;button class=&quot;btn btn-primary dropdown-toggle drop-arrow-none&quot; type=&quot;button&quot; id=&quot;dropdownMenuButton3&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                    Lucide Icon &lt;i data-lucide=&quot;square-chevron-down&quot; class=&quot;avatar-xxs ms-2&quot;&gt;&lt;/i&gt;
                                &lt;/button&gt;
                                &lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuButton3&quot;&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;New Project&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Manage Team&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Billing Info&lt;/a&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">

                    <p class="text-muted">
                        Any single <code>.btn</code> can be turned into a dropdown
                        toggle with some markup changes. Here’s how you can put them to work
                        with either <code>&lt;button&gt;</code>
                        elements:
                    </p>

                    <div class="row">
                        <div class="col-auto">
                            <!-- Without Arrow -->
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle drop-arrow-none" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Without Arrow
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item" href="#">Download Report</a>
                                    <a class="dropdown-item" href="#">View Analytics</a>
                                    <a class="dropdown-item" href="#">Export Data</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-auto">
                            <!-- Tabler Icon  -->
                            <div class="dropdown">
                                <button class="btn btn-outline-primary dropdown-toggle drop-arrow-none" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tabler Icon <i class="ti ti-chevron-down align-middle ms-1"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <a class="dropdown-item" href="#">Edit Profile</a>
                                    <a class="dropdown-item" href="#">Account Settings</a>
                                    <a class="dropdown-item" href="#">Sign Out</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-auto">
                            <!-- Lucide Icon  -->
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle drop-arrow-none" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Lucide Icon <i data-lucide="square-chevron-down" class="avatar-xxs ms-2"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                    <a class="dropdown-item" href="#">New Project</a>
                                    <a class="dropdown-item" href="#">Manage Team</a>
                                    <a class="dropdown-item" href="#">Billing Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Split Button Dropdowns</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">

                    <pre>
                        <code class="language-markup">
                            &lt;!-- Primary --&gt;
                            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Primary&lt;/button&gt;
                            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle dropdown-toggle-split drop-arrow-none&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                &lt;i class=&quot;ti ti-chevron-down align-middle&quot;&gt;&lt;/i&gt;
                            &lt;/button&gt;
                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
                            &lt;/div&gt;

                            &lt;!-- Secondary --&gt;
                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Secondary&lt;/button&gt;
                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                &lt;span class=&quot;visually-hidden&quot;&gt;Toggle Dropdown&lt;/span&gt;
                            &lt;/button&gt;
                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
                            &lt;/div&gt;

                            &lt;!-- Success --&gt;
                            &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-success&quot;&gt;Success&lt;/button&gt;
                            &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-success dropdown-toggle dropdown-toggle-split drop-arrow-none&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                &lt;i class=&quot;ti ti-chevron-down align-middle&quot;&gt;&lt;/i&gt;
                            &lt;/button&gt;
                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
                            &lt;/div&gt;

                            &lt;!-- Info --&gt;
                            &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;Info&lt;/button&gt;
                            &lt;button type=&quot;button&quot; class=&quot;btn btn-info dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                &lt;span class=&quot;visually-hidden&quot;&gt;Toggle Dropdown&lt;/span&gt;
                            &lt;/button&gt;
                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
                            &lt;/div&gt;

                            &lt;!-- Warning --&gt;
                            &lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;Warning&lt;/button&gt;
                            &lt;button type=&quot;button&quot; class=&quot;btn btn-warning dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                &lt;span class=&quot;visually-hidden&quot;&gt;Toggle Dropdown&lt;/span&gt;
                            &lt;/button&gt;
                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
                            &lt;/div&gt;

                            &lt;!-- Danger --&gt;
                            &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;Danger&lt;/button&gt;
                            &lt;button type=&quot;button&quot; class=&quot;btn btn-danger dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                &lt;span class=&quot;visually-hidden&quot;&gt;Toggle Dropdown&lt;/span&gt;
                            &lt;/button&gt;
                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">
                        Similarly, create split button dropdowns with virtually the same markup as single
                        button dropdowns, but with the addition of <code>.dropdown-toggle-split</code> for
                        proper spacing around the dropdown caret.
                    </p>

                    <div class="d-flex flex-wrap gap-2">
                        <div class="btn-group">
                            <!-- Primary -->
                            <button type="button" class="btn btn-primary">Primary</button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split drop-arrow-none" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti ti-chevron-down align-middle"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->

                        <div class="btn-group">
                            <!-- Secondary -->
                            <button type="button" class="btn btn-light">Secondary</button>
                            <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->

                        <div class="btn-group">
                            <!-- Success -->
                            <button type="button" class="btn btn-soft-success">Success</button>
                            <button type="button" class="btn btn-soft-success dropdown-toggle dropdown-toggle-split drop-arrow-none" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti ti-chevron-down align-middle"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->

                        <div class="btn-group">
                            <!-- Info -->
                            <button type="button" class="btn btn-info">Info</button>
                            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->

                        <div class="btn-group">
                            <!-- Warning -->
                            <button type="button" class="btn btn-warning">Warning</button>
                            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->

                        <div class="btn-group">
                            <!-- Danger -->
                            <button type="button" class="btn btn-danger">Danger</button>
                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                    </div>

                </div> <!-- end card body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Variant</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body" id="variant-code">
                    <pre>
                        <code class="language-markup">
                            &lt;!-- Primary --&gt;
                            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Primary&lt;/button&gt;
                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Create New&lt;/a&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Save Changes&lt;/a&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Publish Now&lt;/a&gt;
                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;View Drafts&lt;/a&gt;
                            &lt;/div&gt;

                            &lt;!-- Secondary --&gt;
                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Secondary&lt;/button&gt;
                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Settings&lt;/a&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Preferences&lt;/a&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Account Info&lt;/a&gt;
                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Logout&lt;/a&gt;
                            &lt;/div&gt;

                            &lt;!-- Success --&gt;
                            &lt;button type=&quot;button&quot; class=&quot;btn btn-success dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Success&lt;/button&gt;
                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Mark as Complete&lt;/a&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Download Report&lt;/a&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Submit Review&lt;/a&gt;
                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Archive Task&lt;/a&gt;
                            &lt;/div&gt;

                            &lt;!-- Info --&gt;
                            &lt;button type=&quot;button&quot; class=&quot;btn btn-info dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Info&lt;/button&gt;
                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;View Logs&lt;/a&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;System Info&lt;/a&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Help Center&lt;/a&gt;
                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Contact Support&lt;/a&gt;
                            &lt;/div&gt;

                            &lt;!-- Warning --&gt;
                            &lt;button type=&quot;button&quot; class=&quot;btn btn-warning dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Warning&lt;/button&gt;
                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Pending Approvals&lt;/a&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Overdue Tasks&lt;/a&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Subscription Expiring&lt;/a&gt;
                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Renew Plan&lt;/a&gt;
                            &lt;/div&gt;

                            &lt;!-- Danger --&gt;
                            &lt;button type=&quot;button&quot; class=&quot;btn btn-danger dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Danger&lt;/button&gt;
                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Delete Item&lt;/a&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Revoke Access&lt;/a&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Forgot Password&lt;/a&gt;
                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Permanently Remove&lt;/a&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">The best part is you can do this with any button variant, too:</p>

                    <div class="d-flex flex-wrap gap-2">
                        <div class="btn-group">
                            <!-- Primary -->
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Create New</a>
                                <a class="dropdown-item" href="#">Save Changes</a>
                                <a class="dropdown-item" href="#">Publish Now</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">View Drafts</a>
                            </div>
                        </div><!-- /btn-group -->

                        <div class="btn-group">
                            <!-- Secondary -->
                            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Secondary</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="#">Preferences</a>
                                <a class="dropdown-item" href="#">Account Info</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </div><!-- /btn-group -->

                        <div class="btn-group">
                            <!-- Success -->
                            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Mark as Complete</a>
                                <a class="dropdown-item" href="#">Download Report</a>
                                <a class="dropdown-item" href="#">Submit Review</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Archive Task</a>
                            </div>
                        </div><!-- /btn-group -->

                        <div class="btn-group">
                            <!-- Info -->
                            <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">View Logs</a>
                                <a class="dropdown-item" href="#">System Info</a>
                                <a class="dropdown-item" href="#">Help Center</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Contact Support</a>
                            </div>
                        </div><!-- /btn-group -->

                        <div class="btn-group">
                            <!-- Warning -->
                            <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warning</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Pending Approvals</a>
                                <a class="dropdown-item" href="#">Overdue Tasks</a>
                                <a class="dropdown-item" href="#">Subscription Expiring</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Renew Plan</a>
                            </div>
                        </div><!-- /btn-group -->

                        <div class="btn-group">
                            <!-- Danger -->
                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Delete Item</a>
                                <a class="dropdown-item" href="#">Revoke Access</a>
                                <a class="dropdown-item" href="#">Forgot Password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Permanently Remove</a>
                            </div>
                        </div><!-- /btn-group -->
                    </div>
                </div> <!-- end card body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Sizing</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">

                    <pre>
                        <code class="language-markup">
                            &lt;!-- Large button groups (default and split) --&gt;
                            &lt;div class=&quot;btn-group&quot;&gt;
                                &lt;button class=&quot;btn btn-light btn-lg dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                    Large button
                                &lt;/button&gt;
                                &lt;div class=&quot;dropdown-menu&quot;&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class=&quot;btn-group&quot;&gt;
                                &lt;button class=&quot;btn btn-light btn-lg&quot; type=&quot;button&quot;&gt;
                                    Large button
                                &lt;/button&gt;
                                &lt;button type=&quot;button&quot; class=&quot;btn btn-lg btn-light dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                    &lt;span class=&quot;visually-hidden&quot;&gt;Toggle Dropdown&lt;/span&gt;
                                &lt;/button&gt;
                                &lt;div class=&quot;dropdown-menu&quot;&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;

                            &lt;!-- Small button groups (default and split) --&gt;
                            &lt;div class=&quot;btn-group&quot;&gt;
                                &lt;button class=&quot;btn btn-light btn-sm dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                    Small button
                                &lt;/button&gt;
                                &lt;div class=&quot;dropdown-menu&quot;&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class=&quot;btn-group&quot;&gt;
                                &lt;button class=&quot;btn btn-light btn-sm&quot; type=&quot;button&quot;&gt;
                                    Small button
                                &lt;/button&gt;
                                &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-light dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                    &lt;span class=&quot;visually-hidden&quot;&gt;Toggle Dropdown&lt;/span&gt;
                                &lt;/button&gt;
                                &lt;div class=&quot;dropdown-menu&quot;&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;

                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">Button dropdowns work with buttons of all sizes, including default
                        and split dropdown buttons.</p>

                    <div class="d-flex flex-wrap gap-2">
                        <!-- Large button groups (default and split) -->
                        <div class="btn-group">
                            <button class="btn btn-light btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Large button
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>

                        <div class="btn-group">
                            <button class="btn btn-light btn-lg" type="button">
                                Large button
                            </button>
                            <button type="button" class="btn btn-lg btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>

                        <!-- Small button groups (default and split) -->
                        <div class="btn-group">
                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Small button
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>

                        <div class="btn-group">
                            <button class="btn btn-light btn-sm" type="button">
                                Small button
                            </button>
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Dropup Variation</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;!-- Default dropup button --&gt;
                            &lt;div class=&quot;btn-group dropup&quot;&gt;
                                &lt;button type=&quot;button&quot; class=&quot;btn btn-light dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropup&lt;/button&gt;
                                &lt;div class=&quot;dropdown-menu&quot;&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Upload File&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Sync Data&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Import from CSV&lt;/a&gt;
                                    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Advanced Settings&lt;/a&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;

                            &lt;!-- Split dropup button --&gt;
                            &lt;div class=&quot;btn-group dropup&quot;&gt;
                                &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;
                                    Split dropup
                                &lt;/button&gt;
                                &lt;button type=&quot;button&quot; class=&quot;btn btn-light dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                    &lt;span class=&quot;visually-hidden&quot;&gt;Toggle Dropdown&lt;/span&gt;
                                &lt;/button&gt;
                                &lt;div class=&quot;dropdown-menu&quot;&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;New Task&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Assign User&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Set Deadline&lt;/a&gt;
                                    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Project Settings&lt;/a&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">Trigger dropdown menus above elements
                        by adding <code>.dropup</code> to the parent
                        element.</p>

                    <div class="d-flex flex-wrap gap-2">
                        <!-- Default dropup button -->
                        <div class="btn-group dropup">
                            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropup</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Upload File</a>
                                <a class="dropdown-item" href="#">Sync Data</a>
                                <a class="dropdown-item" href="#">Import from CSV</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Advanced Settings</a>
                            </div>
                        </div>

                        <!-- Split dropup button -->
                        <div class="btn-group dropup">
                            <button type="button" class="btn btn-light">
                                Split dropup
                            </button>
                            <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">New Task</a>
                                <a class="dropdown-item" href="#">Assign User</a>
                                <a class="dropdown-item" href="#">Set Deadline</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Project Settings</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Dropstart Variation</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">

                    <pre>
                        <code class="language-markup">
                            &lt;!-- Default dropstart button --&gt;
                            &lt;div class=&quot;btn-group dropstart &quot;&gt;
                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                    Dropstart
                                &lt;/button&gt;
                                &lt;div class=&quot;dropdown-menu&quot;&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;

                            &lt;!-- Split dropstart button --&gt;
                            &lt;div class=&quot;btn-group&quot;&gt;
                                &lt;div class=&quot;btn-group dropstart&quot; role=&quot;group&quot;&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle dropdown-split dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                        &lt;span class=&quot;visually-hidden&quot;&gt;Toggle Dropstart&lt;/span&gt;
                                    &lt;/button&gt;
                                    &lt;div class=&quot;dropdown-menu&quot;&gt;
                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;
                                    Split dropstart
                                &lt;/button&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">Trigger dropdown menus at the right of the elements by adding
                        <code>.dropleft</code> to the parent element.
                    </p>

                    <div class="d-flex flex-wrap gap-2">
                        <!-- Default dropstart button -->
                        <div class="btn-group dropstart ">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropstart
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>

                        <!-- Split dropstart button -->
                        <div class="btn-group">
                            <div class="btn-group dropstart" role="group">
                                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-split dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropstart</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <button type="button" class="btn btn-secondary">
                                Split dropstart
                            </button>
                        </div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Dropend Variation</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body" id="dropend-code">

                    <pre>
                        <code class="language-markup">
                            &lt;!-- Default dropend button --&gt;
                            &lt;div class=&quot;btn-group dropend&quot;&gt;
                                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                    Dropend
                                &lt;/button&gt;
                                &lt;div class=&quot;dropdown-menu&quot;&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;View Profile&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Message User&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Report Issue&lt;/a&gt;
                                    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Block User&lt;/a&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;

                            &lt;!-- Split dropend button --&gt;
                            &lt;div class=&quot;btn-group dropend&quot;&gt;
                                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;
                                    Split Dropend
                                &lt;/button&gt;
                                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle-split dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                    &lt;span class=&quot;visually-hidden&quot;&gt;Toggle Dropright&lt;/span&gt;
                                &lt;/button&gt;
                                &lt;div class=&quot;dropdown-menu&quot;&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;New Invoice&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Send Reminder&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Duplicate&lt;/a&gt;
                                    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Delete Invoice&lt;/a&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">Trigger dropdown menus at the right of the elements by adding
                        <code>.dropend</code> to the parent element.
                    </p>

                    <div class="d-flex flex-wrap gap-2">
                        <!-- Default dropend button -->
                        <div class="btn-group dropend">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropend
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">View Profile</a>
                                <a class="dropdown-item" href="#">Message User</a>
                                <a class="dropdown-item" href="#">Report Issue</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Block User</a>
                            </div>
                        </div>

                        <!-- Split dropend button -->
                        <div class="btn-group dropend">
                            <button type="button" class="btn btn-primary">
                                Split Dropend
                            </button>
                            <button type="button" class="btn btn-primary dropdown-toggle-split dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropright</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">New Invoice</a>
                                <a class="dropdown-item" href="#">Send Reminder</a>
                                <a class="dropdown-item" href="#">Duplicate</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Delete Invoice</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Active Item</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">

                    <pre>
                        <code class="language-markup">
                            &lt;!-- Active Item --&gt;
                            &lt;div class=&quot;btn-group&quot;&gt;
                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                    Active Item
                                &lt;/button&gt;
                                &lt;div class=&quot;dropdown-menu&quot;&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Regular link&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item active&quot; href=&quot;#&quot;&gt;Active link&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another link&lt;/a&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">Add <code>.active</code> to item in the dropdown to <strong>style
                            them as active</strong>.</p>

                    <!-- Active Item -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Active Item
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Regular link</a>
                            <a class="dropdown-item active" href="#">Active link</a>
                            <a class="dropdown-item" href="#">Another link</a>
                        </div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Disabled Item</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body" id="disabled-code">

                    <pre>
                        <code class="language-markup">
                            &lt;!-- Disabled --&gt;
                            &lt;div class=&quot;btn-group&quot;&gt;
                                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary   dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                    Disabled
                                &lt;/button&gt;
                                &lt;div class=&quot;dropdown-menu&quot;&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Regular link&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item disabled&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Disabled link&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another link&lt;/a&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">Add <code>.disabled</code> to items in the dropdown to
                        <strong>style them as disabled</strong>.
                    </p>

                    <!-- Disabled -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary   dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Disabled
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Regular link</a>
                            <a class="dropdown-item disabled" href="#" tabindex="-1">Disabled link</a>
                            <a class="dropdown-item" href="#">Another link</a>
                        </div>
                    </div>

                </div> <!-- end card body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Headers</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">

                    <pre>
                        <code class="language-markup">
                            &lt;!-- Header Item --&gt;
                            &lt;div class=&quot;btn-group&quot;&gt;
                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                    Header
                                &lt;/button&gt;
                                &lt;div class=&quot;dropdown-menu&quot;&gt;
                                    &lt;h6 class=&quot;dropdown-header&quot;&gt;Dropdown header&lt;/h6&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->


                <div class="card-body">
                    <p class="text-muted">Add a header to label sections of actions in any dropdown menu.
                    </p>

                    <!-- Header Item -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Header
                        </button>
                        <div class="dropdown-menu">
                            <h6 class="dropdown-header">Dropdown header</h6>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                        </div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Dark Dropdowns</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>


                <div class="code-body">

                    <pre>
                        <code class="language-markup">
                            &lt;div class=&quot;dropdown&quot;&gt;
                                &lt;button class=&quot;btn btn-dark dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
                                    Dark Dropdown
                                &lt;/button&gt;
                                &lt;ul class=&quot;dropdown-menu&quot; data-bs-theme=&quot;dark&quot;&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item active&quot; href=&quot;#&quot;&gt;Dashboard&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;My Orders&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Billing Settings&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;hr class=&quot;dropdown-divider&quot;&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Logout&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->


                <div class="card-body">
                    <p class="text-muted">Opt into darker dropdowns to match a dark navbar or custom style
                        by adding <code>.dropdown-menu-dark</code> onto an existing
                        <code>.dropdown-menu</code>. No changes are required to the dropdown items.
                    </p>

                    <div class="dropdown">
                        <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dark Dropdown
                        </button>
                        <ul class="dropdown-menu" data-bs-theme="dark">
                            <li><a class="dropdown-item active" href="#">Dashboard</a></li>
                            <li><a class="dropdown-item" href="#">My Orders</a></li>
                            <li><a class="dropdown-item" href="#">Billing Settings</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Centered Dropdowns</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">

                    <pre>
                        <code class="language-markup">
                            &lt;div class=&quot;dropdown-center&quot;&gt;
                                &lt;button class=&quot;btn btn-secondary dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
                                    Centered dropdown
                                &lt;/button&gt;
                                &lt;ul class=&quot;dropdown-menu&quot;&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action two&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action three&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;

                            &lt;div class=&quot;dropup-center dropup&quot;&gt;
                                &lt;button class=&quot;btn btn-secondary dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
                                    Centered dropup
                                &lt;/button&gt;
                                &lt;ul class=&quot;dropdown-menu&quot;&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action two&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action three&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->


                <div class="card-body">
                    <p class="text-muted">Make the dropdown menu centered below the toggle with
                        <code>.dropdown-center</code> on the parent element.
                    </p>

                    <div class="hstack gap-2">
                        <div class="dropdown-center">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Centered dropdown
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Action two</a></li>
                                <li><a class="dropdown-item" href="#">Action three</a></li>
                            </ul>
                        </div>

                        <div class="dropup-center dropup">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Centered dropup
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Action two</a></li>
                                <li><a class="dropdown-item" href="#">Action three</a></li>
                            </ul>
                        </div>
                    </div>

                </div> <!-- end card body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Dropdown Options</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">

                    <pre>
                        <code class="language-markup">
                            &lt;div class=&quot;dropdown&quot;&gt;
                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot; data-bs-offset=&quot;10,20&quot;&gt;
                                    Offset
                                &lt;/button&gt;
                                &lt;ul class=&quot;dropdown-menu&quot;&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Profile Settings&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Privacy Settings&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Notification Preferences&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;

                            &lt;div class=&quot;btn-group&quot;&gt;
                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Reference&lt;/button&gt;
                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;
                                    &lt;span class=&quot;visually-hidden&quot;&gt;Toggle Dropdown&lt;/span&gt;
                                &lt;/button&gt;
                                &lt;ul class=&quot;dropdown-menu&quot;&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Manage Subscription&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Account Preferences&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Help &amp; Support&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;hr class=&quot;dropdown-divider&quot;&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Log Out&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">Use <code>data-bs-offset</code> or <code>data-bs-reference</code>
                        to change the location of the dropdown.</p>

                    <div class="d-flex flex-wrap gap-2">
                        <div class="dropdown">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                                Offset
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Profile Settings</a></li>
                                <li><a class="dropdown-item" href="#">Privacy Settings</a></li>
                                <li><a class="dropdown-item" href="#">Notification Preferences</a></li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary">Reference</button>
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Manage Subscription</a></li>
                                <li><a class="dropdown-item" href="#">Account Preferences</a></li>
                                <li><a class="dropdown-item" href="#">Help & Support</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Log Out</a></li>
                            </ul>
                        </div>
                    </div>

                </div> <!-- end card body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Auto Close Behavior</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;div class=&quot;btn-group&quot;&gt;
                                &lt;button class=&quot;btn btn-secondary dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-auto-close=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                    Default dropdown
                                &lt;/button&gt;
                                &lt;ul class=&quot;dropdown-menu&quot;&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;

                            &lt;div class=&quot;btn-group&quot;&gt;
                                &lt;button class=&quot;btn btn-secondary dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-auto-close=&quot;inside&quot; aria-expanded=&quot;false&quot;&gt;
                                    Clickable inside
                                &lt;/button&gt;
                                &lt;ul class=&quot;dropdown-menu&quot;&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;

                            &lt;div class=&quot;btn-group&quot;&gt;
                                &lt;button class=&quot;btn btn-secondary dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-auto-close=&quot;outside&quot; aria-expanded=&quot;false&quot;&gt;
                                    Clickable outside
                                &lt;/button&gt;
                                &lt;ul class=&quot;dropdown-menu&quot;&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;

                            &lt;div class=&quot;btn-group&quot;&gt;
                                &lt;button class=&quot;btn btn-secondary dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-auto-close=&quot;false&quot; aria-expanded=&quot;false&quot;&gt;
                                    Manual close
                                &lt;/button&gt;
                                &lt;ul class=&quot;dropdown-menu&quot;&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->


                <div class="card-body">
                    <p class="text-muted">By default, the dropdown menu is closed when clicking inside or
                        outside the dropdown menu. You can use the <code>autoClose</code> option to change
                        this behavior of the dropdown.</p>

                    <div class="hstack gap-2">
                        <div class="btn-group">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                Default dropdown
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false">
                                Clickable inside
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                Clickable outside
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                Manual close
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                            </ul>
                        </div>
                    </div>

                </div> <!-- end card body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Text</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;!-- Text Example --&gt;
                            &lt;div class=&quot;btn-group&quot;&gt;
                                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary   dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                    Text Dropdown
                                &lt;/button&gt;
                                &lt;div class=&quot;dropdown-menu p-3 text-muted&quot; style=&quot;max-width: 200px;&quot;&gt;
                                    &lt;p&gt;
                                        Some example text that's free-flowing within the dropdown menu.
                                    &lt;/p&gt;
                                    &lt;p class=&quot;mb-0&quot;&gt;
                                        And this is more example text.
                                    &lt;/p&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">Place any freeform text within a dropdown menu with text and use
                        spacing utilities. Note that you’ll likely need additional sizing styles to
                        constrain the menu width.</p>

                    <!-- Text Example -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary   dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Text Dropdown
                        </button>
                        <div class="dropdown-menu p-3 text-muted" style="max-width: 200px;">
                            <p>
                                Some example text that's free-flowing within the dropdown menu.
                            </p>
                            <p class="mb-0">
                                And this is more example text.
                            </p>
                        </div>
                    </div>

                </div> <!-- end card body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Forms</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">

                    <pre>
                        <code class="language-markup">
                            &lt;!-- Forms --&gt;
                            &lt;div class=&quot;dropdown&quot;&gt;
                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                    Form
                                &lt;/button&gt;
                                &lt;div class=&quot;dropdown-menu&quot;&gt;
                                    &lt;form class=&quot;px-4 py-3&quot;&gt;
                                        &lt;div class=&quot;mb-3&quot;&gt;
                                            &lt;label for=&quot;exampleDropdownFormEmail1&quot; class=&quot;form-label&quot;&gt;Email
                                                address&lt;/label&gt;
                                            &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleDropdownFormEmail1&quot; placeholder=&quot;email@example.com&quot;&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;mb-3&quot;&gt;
                                            &lt;label for=&quot;exampleDropdownFormPassword1&quot; class=&quot;form-label&quot;&gt;Password&lt;/label&gt;
                                            &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;exampleDropdownFormPassword1&quot; placeholder=&quot;Password&quot;&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;mb-2&quot;&gt;
                                            &lt;div class=&quot;form-check&quot;&gt;
                                                &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;dropdownCheck&quot;&gt;
                                                &lt;label class=&quot;form-check-label&quot; for=&quot;dropdownCheck&quot;&gt;
                                                    Remember me
                                                &lt;/label&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Sign in&lt;/button&gt;
                                    &lt;/form&gt;
                                    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;New around here? Sign up&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Forgot password?&lt;/a&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->


                <div class="card-body">
                    <p class="text-muted">Put a form within a dropdown menu, or make it into a dropdown
                        menu, and use margin or padding utilities to give it the negative space you require.
                    </p>

                    <!-- Forms -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Form
                        </button>
                        <div class="dropdown-menu">
                            <form class="px-4 py-3">
                                <div class="mb-3">
                                    <label for="exampleDropdownFormEmail1" class="form-label">Email
                                        address</label>
                                    <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                                </div>
                                <div class="mb-2">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                        <label class="form-check-label" for="dropdownCheck">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">New around here? Sign up</a>
                            <a class="dropdown-item" href="#">Forgot password?</a>
                        </div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div> <!-- end row -->

</div><!-- container -->

@endsection

@section('scripts')
@endsection

