<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Badges']) ?>

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
                <?= $this->element('page_title', ['subtitle' => 'UI', 'title' => 'Badges']) ?>
            </div>
            <!-- container -->

            <div class="container-xl">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Examples</h4>
                            </div>

                            <div class="card-body">
                                <p class="text-muted mb-2">
                                    Documentation and examples for badges, our small count and labeling component.
                                </p>

                                <a class="btn btn-link p-0 fw-semibold" href="https://getbootstrap.com/docs/5.3/components/badge/" target="_blank">
                                    Badges on Bootstrap
                                    <i class="ti ti-chevron-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Badges</h4>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;span class=&quot;badge badge-default&quot;&gt;Default&lt;/span&gt;
                                        &lt;span class=&quot;badge text-bg-primary&quot;&gt;Primary&lt;/span&gt;
                                        &lt;span class=&quot;badge text-bg-secondary&quot;&gt;Secondary&lt;/span&gt;
                                        &lt;span class=&quot;badge text-bg-success&quot;&gt;Success&lt;/span&gt;
                                        &lt;span class=&quot;badge text-bg-danger&quot;&gt;Danger&lt;/span&gt;
                                        &lt;span class=&quot;badge text-bg-warning&quot;&gt;Warning&lt;/span&gt;
                                        &lt;span class=&quot;badge text-bg-info&quot;&gt;Info&lt;/span&gt;
                                        &lt;span class=&quot;badge text-bg-light&quot;&gt;Light&lt;/span&gt;
                                        &lt;span class=&quot;badge text-bg-dark&quot;&gt;Dark&lt;/span&gt;
                                        &lt;span class=&quot;badge text-bg-purple&quot;&gt;Purple&lt;/span&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">
                                    Use the <code>.badge</code> & <code>.text-bg-*</code> classes to make badges.
                                </p>

                                <span class="badge badge-default">Default</span>
                                <span class="badge text-bg-primary">Primary</span>
                                <span class="badge text-bg-secondary">Secondary</span>
                                <span class="badge text-bg-success">Success</span>
                                <span class="badge text-bg-danger">Danger</span>
                                <span class="badge text-bg-warning">Warning</span>
                                <span class="badge text-bg-info">Info</span>
                                <span class="badge text-bg-light">Light</span>
                                <span class="badge text-bg-dark">Dark</span>
                                <span class="badge text-bg-purple">Purple</span>
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div> <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Pill Badges</h4>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;span class=&quot;badge badge-default rounded-pill&quot;&gt;Default&lt;/span&gt;
                                        &lt;span class=&quot;badge text-bg-primary rounded-pill&quot;&gt;Primary&lt;/span&gt;
                                        &lt;span class=&quot;badge text-bg-secondary rounded-pill&quot;&gt;Secondary&lt;/span&gt;
                                        &lt;span class=&quot;badge text-bg-success rounded-pill&quot;&gt;Success&lt;/span&gt;
                                        &lt;span class=&quot;badge text-bg-danger rounded-pill&quot;&gt;Danger&lt;/span&gt;
                                        &lt;span class=&quot;badge text-bg-warning rounded-pill&quot;&gt;Warning&lt;/span&gt;
                                        &lt;span class=&quot;badge text-bg-info rounded-pill&quot;&gt;Info&lt;/span&gt;
                                        &lt;span class=&quot;badge text-bg-light rounded-pill&quot;&gt;Light&lt;/span&gt;
                                        &lt;span class=&quot;badge text-bg-dark rounded-pill&quot;&gt;Dark&lt;/span&gt;
                                        &lt;span class=&quot;badge text-bg-purple rounded-pill&quot;&gt;Purple&lt;/span&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">
                                    Use the <code>.rounded-pill</code> modifier class to make badges more rounded.
                                </p>

                                <span class="badge badge-default rounded-pill">Default</span>
                                <span class="badge text-bg-primary rounded-pill">Primary</span>
                                <span class="badge text-bg-secondary rounded-pill">Secondary</span>
                                <span class="badge text-bg-success rounded-pill">Success</span>
                                <span class="badge text-bg-danger rounded-pill">Danger</span>
                                <span class="badge text-bg-warning rounded-pill">Warning</span>
                                <span class="badge text-bg-info rounded-pill">Info</span>
                                <span class="badge text-bg-light rounded-pill">Light</span>
                                <span class="badge text-bg-dark rounded-pill">Dark</span>
                                <span class="badge text-bg-purple rounded-pill">Purple</span>
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div> <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Outline Badges</h4>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;span class=&quot;badge badge-outline-primary&quot;&gt;Primary&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-outline-secondary&quot;&gt;Secondary&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-outline-success&quot;&gt;Success&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-outline-danger&quot;&gt;Danger&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-outline-warning&quot;&gt;Warning&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-outline-info&quot;&gt;Info&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-outline-dark&quot;&gt;Dark&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-outline-purple&quot;&gt;Purple&lt;/span&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">
                                    Using the <code>.badge-outline-*</code> to quickly create a bordered badges.
                                </p>

                                <span class="badge badge-outline-primary">Primary</span>
                                <span class="badge badge-outline-secondary">Secondary</span>
                                <span class="badge badge-outline-success">Success</span>
                                <span class="badge badge-outline-danger">Danger</span>
                                <span class="badge badge-outline-warning">Warning</span>
                                <span class="badge badge-outline-info">Info</span>
                                <span class="badge badge-outline-dark">Dark</span>
                                <span class="badge badge-outline-purple">Purple</span>
                            </div> <!-- end card body -->
                        </div>
                    </div> <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Outline Pill Badges</h4>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;span class=&quot;badge badge-outline-primary rounded-pill&quot;&gt;Primary&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-outline-secondary rounded-pill&quot;&gt;Secondary&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-outline-success rounded-pill&quot;&gt;Success&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-outline-danger rounded-pill&quot;&gt;Danger&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-outline-warning rounded-pill&quot;&gt;Warning&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-outline-info rounded-pill&quot;&gt;Info&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-outline-dark rounded-pill&quot;&gt;Dark&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-outline-purple rounded-pill&quot;&gt;Purple&lt;/span&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">
                                    Use the <code>.rounded-pill</code> modifier class to make badges more rounded.
                                </p>

                                <span class="badge badge-outline-primary rounded-pill">Primary</span>
                                <span class="badge badge-outline-secondary rounded-pill">Secondary</span>
                                <span class="badge badge-outline-success rounded-pill">Success</span>
                                <span class="badge badge-outline-danger rounded-pill">Danger</span>
                                <span class="badge badge-outline-warning rounded-pill">Warning</span>
                                <span class="badge badge-outline-info rounded-pill">Info</span>
                                <span class="badge badge-outline-dark rounded-pill">Dark</span>
                                <span class="badge badge-outline-purple rounded-pill">Purple</span>
                            </div> <!-- end card body-->
                        </div>
                    </div> <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Lighten Badges</h4>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;span class=&quot;badge badge-soft-primary&quot;&gt;Primary&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-soft-secondary&quot;&gt;Secondary&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-soft-success&quot;&gt;Success&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-soft-danger&quot;&gt;Danger&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-soft-warning&quot;&gt;Warning&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-soft-info&quot;&gt;Info&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-soft-dark&quot;&gt;Dark&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-soft-purple&quot;&gt;Purple&lt;/span&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">
                                    Use the <code>.badge-soft--*</code> modifier class to make badges lighten.
                                </p>

                                <span class="badge badge-soft-primary">Primary</span>
                                <span class="badge badge-soft-secondary">Secondary</span>
                                <span class="badge badge-soft-success">Success</span>
                                <span class="badge badge-soft-danger">Danger</span>
                                <span class="badge badge-soft-warning">Warning</span>
                                <span class="badge badge-soft-info">Info</span>
                                <span class="badge badge-soft-dark">Dark</span>
                                <span class="badge badge-soft-purple">Purple</span>
                            </div> <!-- end card body-->
                        </div>
                    </div> <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Lighten Pill Badges</h4>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;span class=&quot;badge badge-soft-primary rounded-pill&quot;&gt;Primary&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-soft-secondary rounded-pill&quot;&gt;Secondary&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-soft-success rounded-pill&quot;&gt;Success&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-soft-danger rounded-pill&quot;&gt;Danger&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-soft-warning rounded-pill&quot;&gt;Warning&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-soft-info rounded-pill&quot;&gt;Info&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-soft-dark rounded-pill&quot;&gt;Dark&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-soft-purple rounded-pill&quot;&gt;Purple&lt;/span&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">
                                    Use the <code>.badge-soft--*</code> modifier class to make badges lighten.
                                </p>

                                <span class="badge badge-soft-primary rounded-pill">Primary</span>
                                <span class="badge badge-soft-secondary rounded-pill">Secondary</span>
                                <span class="badge badge-soft-success rounded-pill">Success</span>
                                <span class="badge badge-soft-danger rounded-pill">Danger</span>
                                <span class="badge badge-soft-warning rounded-pill">Warning</span>
                                <span class="badge badge-soft-info rounded-pill">Info</span>
                                <span class="badge badge-soft-dark rounded-pill">Dark</span>
                                <span class="badge badge-soft-purple rounded-pill">Purple</span>
                            </div> <!-- end card body -->
                        </div>
                    </div> <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Label Badges</h4>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;span class=&quot;badge badge-label badge-default&quot;&gt;Default&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-label text-bg-primary&quot;&gt;Primary&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-label text-bg-secondary&quot;&gt;Secondary&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-label text-bg-success&quot;&gt;Success&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-label text-bg-danger&quot;&gt;Danger&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-label text-bg-warning&quot;&gt;Warning&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-label text-bg-info&quot;&gt;Info&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-label text-bg-light&quot;&gt;Light&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-label text-bg-dark&quot;&gt;Dark&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-label text-bg-purple&quot;&gt;Purple&lt;/span&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">
                                    Using the <code>.badge-label</code> to quickly create a square based badges.
                                </p>

                                <span class="badge badge-label badge-default">Default</span>
                                <span class="badge badge-label text-bg-primary">Primary</span>
                                <span class="badge badge-label text-bg-secondary">Secondary</span>
                                <span class="badge badge-label text-bg-success">Success</span>
                                <span class="badge badge-label text-bg-danger">Danger</span>
                                <span class="badge badge-label text-bg-warning">Warning</span>
                                <span class="badge badge-label text-bg-info">Info</span>
                                <span class="badge badge-label text-bg-light">Light</span>
                                <span class="badge badge-label text-bg-dark">Dark</span>
                                <span class="badge badge-label text-bg-purple">Purple</span>
                            </div> <!-- end card body -->
                        </div>
                    </div> <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Square Badges</h4>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;span class=&quot;badge badge-square badge-default&quot;&gt;0&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-square text-bg-primary&quot;&gt;1&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-square text-bg-secondary&quot;&gt;2&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-square text-bg-success&quot;&gt;3&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-square text-bg-danger&quot;&gt;4&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-square text-bg-warning&quot;&gt;5&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-square text-bg-info&quot;&gt;6&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-square text-bg-light&quot;&gt;7&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-square text-bg-dark&quot;&gt;8&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-square text-bg-purple&quot;&gt;9&lt;/span&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">
                                    Using the <code>.badge-square</code> to quickly create a square based badges.
                                </p>

                                <span class="badge badge-square badge-default">0</span>
                                <span class="badge badge-square text-bg-primary">1</span>
                                <span class="badge badge-square text-bg-secondary">2</span>
                                <span class="badge badge-square text-bg-success">3</span>
                                <span class="badge badge-square text-bg-danger">4</span>
                                <span class="badge badge-square text-bg-warning">5</span>
                                <span class="badge badge-square text-bg-info">6</span>
                                <span class="badge badge-square text-bg-light">7</span>
                                <span class="badge badge-square text-bg-dark">8</span>
                                <span class="badge badge-square text-bg-purple">9</span>
                            </div> <!-- end  card body-->
                        </div>
                    </div> <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Circle Badges</h4>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;span class=&quot;badge badge-circle badge-default&quot;&gt;0&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-circle text-bg-primary&quot;&gt;1&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-circle text-bg-secondary&quot;&gt;2&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-circle text-bg-success&quot;&gt;3&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-circle text-bg-danger&quot;&gt;4&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-circle text-bg-warning&quot;&gt;5&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-circle text-bg-info&quot;&gt;6&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-circle text-bg-light&quot;&gt;7&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-circle text-bg-dark&quot;&gt;8&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-circle text-bg-purple&quot;&gt;9&lt;/span&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">
                                    Using the <code>.badge-circle</code> to quickly create a circle based badges.
                                </p>

                                <span class="badge badge-circle badge-default">0</span>
                                <span class="badge badge-circle text-bg-primary">1</span>
                                <span class="badge badge-circle text-bg-secondary">2</span>
                                <span class="badge badge-circle text-bg-success">3</span>
                                <span class="badge badge-circle text-bg-danger">4</span>
                                <span class="badge badge-circle text-bg-warning">5</span>
                                <span class="badge badge-circle text-bg-info">6</span>
                                <span class="badge badge-circle text-bg-light">7</span>
                                <span class="badge badge-circle text-bg-dark">8</span>
                                <span class="badge badge-circle text-bg-purple">9</span>
                            </div> <!-- end card body -->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Positioned</h4>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary position-relative&quot;&gt;
                                            Inbox
                                            &lt;span class=&quot;position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger&quot;&gt;
                                                99+
                                                &lt;span class=&quot;visually-hidden&quot;&gt;unread messages&lt;/span&gt;
                                            &lt;/span&gt;
                                        &lt;/button&gt;

                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary position-relative&quot;&gt;
                                            Profile
                                            &lt;span class=&quot;position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle&quot;&gt;
                                                &lt;span class=&quot;visually-hidden&quot;&gt;New alerts&lt;/span&gt;
                                            &lt;/span&gt;
                                        &lt;/button&gt;

                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;
                                            Notifications &lt;span class=&quot;badge text-bg-light ms-1&quot;&gt;4&lt;/span&gt;
                                        &lt;/button&gt;
                                    </code>
                                </pre>
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted">
                                    Use utilities to modify a <code>.badge</code> and position it in the corner of a
                                    link or button.
                                </p>

                                <div class="d-flex flex-wrap gap-3">
                                    <button type="button" class="btn btn-primary position-relative">
                                        Inbox
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            99+
                                            <span class="visually-hidden">unread messages</span>
                                        </span>
                                    </button>

                                    <button type="button" class="btn btn-primary position-relative">
                                        Profile
                                        <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                                            <span class="visually-hidden">New alerts</span>
                                        </span>
                                    </button>

                                    <button type="button" class="btn btn-success">
                                        Notifications <span class="badge text-bg-light ms-1">4</span>
                                    </button>
                                </div>
                            </div> <!-- end card body -->
                        </div>

                    </div> <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Headings with Badges</h4>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                                </div>
                            </div>

                            <div class="code-body" id="default-sizes-code">
                                <pre>
                                    <code class="language-markup">
                                        &lt;h1&gt;h1.Example heading &lt;span class=&quot;badge text-bg-primary&quot;&gt;New&lt;/span&gt;&lt;/h1&gt;
                                        &lt;h2&gt;h2.Example heading &lt;span class=&quot;badge text-bg-primary&quot;&gt;New&lt;/span&gt;&lt;/h2&gt;
                                        &lt;h3&gt;h3.Example heading &lt;span class=&quot;badge text-bg-primary&quot;&gt;New&lt;/span&gt;&lt;/h3&gt;
                                        &lt;h4&gt;h4.Example heading &lt;span class=&quot;badge text-bg-primary&quot;&gt;New&lt;/span&gt;&lt;/h4&gt;
                                        &lt;h5&gt;h5.Example heading &lt;span class=&quot;badge text-bg-primary&quot;&gt;New&lt;/span&gt;&lt;/h5&gt;
                                        &lt;h6&gt;h6.Example heading &lt;span class=&quot;badge text-bg-primary&quot;&gt;New&lt;/span&gt;&lt;/h6&gt;
                                    </code>
  
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <h1>h1.Example heading <span class="badge text-bg-primary">New</span></h1>
                                <h2>h2.Example heading <span class="badge text-bg-primary">New</span></h2>
                                <h3>h3.Example heading <span class="badge text-bg-primary">New</span></h3>
                                <h4>h4.Example heading <span class="badge text-bg-primary">New</span></h4>
                                <h5>h5.Example heading <span class="badge text-bg-primary">New</span></h5>
                                <h6>h6.Example heading <span class="badge text-bg-primary">New</span></h6>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row-->

            </div> <!-- container -->

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