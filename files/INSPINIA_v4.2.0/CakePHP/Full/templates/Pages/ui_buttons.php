<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Buttons']) ?>

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
                <?= $this->element('page_title', ['subtitle' => 'UI', 'title' => 'Buttons']) ?>
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
                                    Use Bootstrap’s custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.
                                </p>

                                <a class="btn btn-link p-0 fw-semibold" href="https://getbootstrap.com/docs/5.3/components/buttons/" target="_blank">
                                    Buttons on Bootstrap
                                    <i class="ti ti-chevron-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Default Buttons</h4>
                                </div>

                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-default&quot;&gt;Default&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Primary&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Secondary&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;Success&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;Danger&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;Warning&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;Info&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-purple&quot;&gt;Purple&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Light&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot;&gt;Dark&lt;/button&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">Use any of the available <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> classes <code>.btn</code> to quickly create a styled button.</p>

                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-default">Default</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-secondary">Secondary</button>
                                    <button type="button" class="btn btn-success">Success</button>
                                    <button type="button" class="btn btn-danger">Danger</button>
                                    <button type="button" class="btn btn-warning">Warning</button>
                                    <button type="button" class="btn btn-info">Info</button>
                                    <button type="button" class="btn btn-purple">Purple</button>
                                    <button type="button" class="btn btn-light">Light</button>
                                    <button type="button" class="btn btn-dark">Dark</button>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Button Rounded</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-default rounded-pill&quot;&gt;Default&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary rounded-pill&quot;&gt;Primary&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary rounded-pill&quot;&gt;Secondary&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-success rounded-pill&quot;&gt;Success&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-danger rounded-pill&quot;&gt;Danger&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-warning rounded-pill&quot;&gt;Warning&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info rounded-pill&quot;&gt;Info&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-purple rounded-pill&quot;&gt;Purple&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light rounded-pill&quot;&gt;Light&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-dark rounded-pill&quot;&gt;Dark&lt;/button&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">Use <code>.rounded-pill</code> with a default button to give it pill-shaped rounded corners.</p>

                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-default rounded-pill">Default</button>
                                    <button type="button" class="btn btn-primary rounded-pill">Primary</button>
                                    <button type="button" class="btn btn-secondary rounded-pill">Secondary</button>
                                    <button type="button" class="btn btn-success rounded-pill">Success</button>
                                    <button type="button" class="btn btn-danger rounded-pill">Danger</button>
                                    <button type="button" class="btn btn-warning rounded-pill">Warning</button>
                                    <button type="button" class="btn btn-info rounded-pill">Info</button>
                                    <button type="button" class="btn btn-purple rounded-pill">Purple</button>
                                    <button type="button" class="btn btn-light rounded-pill">Light</button>
                                    <button type="button" class="btn btn-dark rounded-pill">Dark</button>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Button Outline</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Primary&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;Secondary&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success&quot;&gt; Success&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger&quot;&gt;Danger&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning&quot;&gt;Warning&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info&quot;&gt;Info&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-purple&quot;&gt;Purple&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-light&quot;&gt;Light&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark&quot;&gt;Dark&lt;/button&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">Use the <code>.btn-outline-**</code> classes to quickly create buttons with borders.</p>

                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-outline-primary">Primary</button>
                                    <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                    <button type="button" class="btn btn-outline-success"> Success</button>
                                    <button type="button" class="btn btn-outline-danger">Danger</button>
                                    <button type="button" class="btn btn-outline-warning">Warning</button>
                                    <button type="button" class="btn btn-outline-info">Info</button>
                                    <button type="button" class="btn btn-outline-purple">Purple</button>
                                    <button type="button" class="btn btn-outline-light">Light</button>
                                    <button type="button" class="btn btn-outline-dark">Dark</button>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Button Outline Rounded</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary rounded-pill&quot;&gt;Primary&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary rounded-pill&quot;&gt;Secondary&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success rounded-pill&quot;&gt;Success&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger rounded-pill&quot;&gt;Danger&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning rounded-pill&quot;&gt;Warning&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info rounded-pill&quot;&gt;Info&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-purple rounded-pill&quot;&gt;Purple&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-light rounded-pill&quot;&gt;Light&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark rounded-pill&quot;&gt;Dark&lt;/button&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">Use <code>.rounded-pill</code> with an outline button to give it pill-shaped rounded corners.</p>

                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-outline-primary rounded-pill">Primary</button>
                                    <button type="button" class="btn btn-outline-secondary rounded-pill">Secondary</button>
                                    <button type="button" class="btn btn-outline-success rounded-pill">Success</button>
                                    <button type="button" class="btn btn-outline-danger rounded-pill">Danger</button>
                                    <button type="button" class="btn btn-outline-warning rounded-pill">Warning</button>
                                    <button type="button" class="btn btn-outline-info rounded-pill">Info</button>
                                    <button type="button" class="btn btn-outline-purple rounded-pill">Purple</button>
                                    <button type="button" class="btn btn-outline-light rounded-pill">Light</button>
                                    <button type="button" class="btn btn-outline-dark rounded-pill">Dark</button>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Soft Buttons</h4>
                                </div>

                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body" id="soft-buttons-code">
                                <pre>
                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-primary&quot;&gt;Primary&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-secondary&quot;&gt;Secondary&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-success&quot;&gt;Success&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-danger&quot;&gt;Danger&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-warning&quot;&gt;Warning&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-info&quot;&gt;Info&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-purple&quot;&gt;Purple&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-dark&quot;&gt;Dark&lt;/button&gt;
                                    </code>

                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">Use <code>btn-soft-**</code> class with the below-mentioned variation to create a button with the soft background.</p>
                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-soft-primary">Primary</button>
                                    <button type="button" class="btn btn-soft-secondary">Secondary</button>
                                    <button type="button" class="btn btn-soft-success">Success</button>
                                    <button type="button" class="btn btn-soft-danger">Danger</button>
                                    <button type="button" class="btn btn-soft-warning">Warning</button>
                                    <button type="button" class="btn btn-soft-info">Info</button>
                                    <button type="button" class="btn btn-soft-purple">Purple</button>
                                    <button type="button" class="btn btn-soft-dark">Dark</button>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Soft Rounded Buttons</h4>
                                </div>

                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-primary rounded-pill&quot;&gt;Primary&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-secondary rounded-pill&quot;&gt;Secondary&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-success rounded-pill&quot;&gt;Success&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-danger rounded-pill&quot;&gt;Danger&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-warning rounded-pill&quot;&gt;Warning&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-info rounded-pill&quot;&gt;Info&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-purple rounded-pill&quot;&gt;Purple&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-dark rounded-pill&quot;&gt;Dark&lt;/button&gt;
                                    </code>
                                </pre>
                            </div>

                            <div class="card-body">
                                <p class="text-muted">Use the <code>btn-soft-**</code> class along with <code>.rounded-pill</code> to create a softly styled button with rounded corners.</p>

                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-soft-primary rounded-pill">Primary</button>
                                    <button type="button" class="btn btn-soft-secondary rounded-pill">Secondary</button>
                                    <button type="button" class="btn btn-soft-success rounded-pill">Success</button>
                                    <button type="button" class="btn btn-soft-danger rounded-pill">Danger</button>
                                    <button type="button" class="btn btn-soft-warning rounded-pill">Warning</button>
                                    <button type="button" class="btn btn-soft-info rounded-pill">Info</button>
                                    <button type="button" class="btn btn-soft-purple rounded-pill">Purple</button>
                                    <button type="button" class="btn btn-soft-dark rounded-pill">Dark</button>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Ghost Buttons</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-ghost-primary&quot;&gt;Primary&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-ghost-secondary&quot;&gt;Secondary&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-ghost-success&quot;&gt;Success&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-ghost-danger&quot;&gt;Danger&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-ghost-warning&quot;&gt;Warning&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-ghost-info&quot;&gt;Info&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-ghost-purple&quot;&gt;Purple&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-ghost-dark&quot;&gt;Dark&lt;/button&gt;
                                    </code>

                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">Use the <code>btn-ghost-**</code> class to create buttons with a transparent background that highlight with color on hover.</p>

                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-ghost-primary">Primary</button>
                                    <button type="button" class="btn btn-ghost-secondary">Secondary</button>
                                    <button type="button" class="btn btn-ghost-success">Success</button>
                                    <button type="button" class="btn btn-ghost-danger">Danger</button>
                                    <button type="button" class="btn btn-ghost-warning">Warning</button>
                                    <button type="button" class="btn btn-ghost-info">Info</button>
                                    <button type="button" class="btn btn-ghost-purple">Purple</button>
                                    <button type="button" class="btn btn-ghost-dark">Dark</button>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Ghost Rounded Buttons</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-ghost-primary rounded-pill&quot;&gt;Primary&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-ghost-secondary rounded-pill&quot;&gt;Secondary&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-ghost-success rounded-pill&quot;&gt;Success&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-ghost-danger rounded-pill&quot;&gt;Danger&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-ghost-warning rounded-pill&quot;&gt;Warning&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-ghost-info rounded-pill&quot;&gt;Info&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-ghost-purple rounded-pill&quot;&gt;Purple&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-ghost-dark rounded-pill&quot;&gt;Dark&lt;/button&gt;
                                    </code>

                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">Combine <code>btn-ghost-**</code> with <code>.rounded-pill</code> to create ghost-style buttons with rounded corners that highlight on hover.</p>

                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-ghost-primary rounded-pill">Primary</button>
                                    <button type="button" class="btn btn-ghost-secondary rounded-pill">Secondary</button>
                                    <button type="button" class="btn btn-ghost-success rounded-pill">Success</button>
                                    <button type="button" class="btn btn-ghost-danger rounded-pill">Danger</button>
                                    <button type="button" class="btn btn-ghost-warning rounded-pill">Warning</button>
                                    <button type="button" class="btn btn-ghost-info rounded-pill">Info</button>
                                    <button type="button" class="btn btn-ghost-purple rounded-pill">Purple</button>
                                    <button type="button" class="btn btn-ghost-dark rounded-pill">Dark</button>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Button Sizes</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-lg&quot;&gt;Large&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;Normal&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-purple btn-sm&quot;&gt;Small&lt;/button&gt;
                                    </code>

                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">Want larger or smaller buttons? Use <code>.btn-lg</code> or <code>.btn-sm</code> to adjust the button size.</p>

                                <div class="d-flex flex-wrap align-items-center gap-2">
                                    <button type="button" class="btn btn-primary btn-lg">Large</button>
                                    <button type="button" class="btn btn-info">Normal</button>
                                    <button type="button" class="btn btn-purple btn-sm">Small</button>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Disabled Buttons</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; disabled&gt;Info&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-purple&quot; disabled&gt;Purple&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot; disabled&gt;Danger&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot; disabled&gt;Dark&lt;/button&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">Use the <code>disabled</code> attribute on a <code>&lt;button&gt;</code> to make it inactive and non-interactive.</p>

                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-info" disabled>Info</button>
                                    <button type="button" class="btn btn-purple" disabled>Purple</button>
                                    <button type="button" class="btn btn-danger" disabled>Danger</button>
                                    <button type="button" class="btn btn-dark" disabled>Dark</button>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Block Button</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                                </div>
                            </div>

                            <div class="code-body" id="block-buttons-code">
                                <pre>
                                    <code class="language-markup">
                                        &lt;div class=&quot;d-grid gap-2&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-primary&quot;&gt;Block Button&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-lg btn-success&quot;&gt;Block Button&lt;/button&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted font-14">To create block-level buttons, add the <code>.d-grid</code> class to the parent <code>&lt;div&gt;</code>.</p>

                                <div class="d-grid gap-2">
                                    <button type="button" class="btn btn-sm btn-primary">Block Button</button>
                                    <button type="button" class="btn btn-lg btn-success">Block Button</button>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Toggle Button</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                                </div>
                            </div>

                            <div class="code-body" id="button-toggle-code">
                                <pre>
                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;button&quot;&gt;Toggle button&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary active&quot; data-bs-toggle=&quot;button&quot; aria-pressed=&quot;true&quot;&gt;Active toggle button&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; disabled data-bs-toggle=&quot;button&quot;&gt;Disabled toggle button&lt;/button&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">Add <code>data-bs-toggle="button"</code> to toggle a button’s <code>active</code> state. For pre-toggled buttons, also add <code>.active</code> and <code>aria-pressed="true"</code>.</p>

                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="button">Toggle button</button>
                                    <button type="button" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">Active toggle button</button>
                                    <button type="button" class="btn btn-primary" disabled data-bs-toggle="button">Disabled toggle button</button>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div><!--end col-->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Button Tags</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot; role=&quot;button&quot;&gt;Link&lt;/a&gt;
                                        &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Button&lt;/button&gt;
                                        &lt;input class=&quot;btn btn-primary&quot; type=&quot;button&quot; value=&quot;Input&quot;&gt;
                                        &lt;input class=&quot;btn btn-primary&quot; type=&quot;submit&quot; value=&quot;Submit&quot;&gt;
                                        &lt;input class=&quot;btn btn-primary&quot; type=&quot;reset&quot; value=&quot;Reset&quot;&gt;
                                    </code>

                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">Use <code>.btn</code> classes with <code>&lt;button&gt;</code>, <code>&lt;a&gt;</code>, or <code>&lt;input&gt;</code> elements, though rendering may vary slightly across browsers.</p>

                                <div class="d-flex flex-wrap gap-2">
                                    <a class="btn btn-primary" href="#" role="button">Link</a>
                                    <button class="btn btn-primary" type="submit">Button</button>
                                    <input class="btn btn-primary" type="button" value="Input">
                                    <input class="btn btn-primary" type="submit" value="Submit">
                                    <input class="btn btn-primary" type="reset" value="Reset">
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div>

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Focus Ring Utilities</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body" id="focus-ring-utilities-code">
                                <pre>
                                    <code class="language-markup">
                                        &lt;a href=&quot;#!&quot; class=&quot;d-inline-flex focus-ring focus-ring-primary py-1 px-2 text-decoration-none border rounded-2&quot;&gt;Primary focus&lt;/a&gt;
                                        &lt;a href=&quot;#!&quot; class=&quot;d-inline-flex focus-ring focus-ring-secondary py-1 px-2 text-decoration-none border rounded-2&quot;&gt;Secondary focus&lt;/a&gt;
                                        &lt;a href=&quot;#!&quot; class=&quot;d-inline-flex focus-ring focus-ring-success py-1 px-2 text-decoration-none border rounded-2&quot;&gt;Success focus&lt;/a&gt;
                                        &lt;a href=&quot;#!&quot; class=&quot;d-inline-flex focus-ring focus-ring-danger py-1 px-2 text-decoration-none border rounded-2&quot;&gt;Danger focus&lt;/a&gt;
                                        &lt;a href=&quot;#!&quot; class=&quot;d-inline-flex focus-ring focus-ring-warning py-1 px-2 text-decoration-none border rounded-2&quot;&gt;Warning focus&lt;/a&gt;
                                        &lt;a href=&quot;#!&quot; class=&quot;d-inline-flex focus-ring focus-ring-info py-1 px-2 text-decoration-none border rounded-2&quot;&gt;Info focus&lt;/a&gt;
                                        &lt;a href=&quot;#!&quot; class=&quot;d-inline-flex focus-ring focus-ring-purple py-1 px-2 text-decoration-none border rounded-2&quot;&gt;Purple focus&lt;/a&gt;
                                        &lt;a href=&quot;#!&quot; class=&quot;d-inline-flex focus-ring focus-ring-light py-1 px-2 text-decoration-none border rounded-2&quot;&gt;Light focus&lt;/a&gt;
                                        &lt;a href=&quot;#!&quot; class=&quot;d-inline-flex focus-ring focus-ring-dark py-1 px-2 text-decoration-none border rounded-2&quot;&gt;Dark focus&lt;/a&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">Click directly on the link below to see the focus ring in action, or into the example below and then press <kbd>Tab</kbd>.</p>
                                <div class="d-flex flex-wrap gap-2">
                                    <a href="#!" class="d-inline-flex focus-ring focus-ring-primary py-1 px-2 text-decoration-none border rounded-2">Primary focus</a>
                                    <a href="#!" class="d-inline-flex focus-ring focus-ring-secondary py-1 px-2 text-decoration-none border rounded-2">Secondary focus</a>
                                    <a href="#!" class="d-inline-flex focus-ring focus-ring-success py-1 px-2 text-decoration-none border rounded-2">Success focus</a>
                                    <a href="#!" class="d-inline-flex focus-ring focus-ring-danger py-1 px-2 text-decoration-none border rounded-2">Danger focus</a>
                                    <a href="#!" class="d-inline-flex focus-ring focus-ring-warning py-1 px-2 text-decoration-none border rounded-2">Warning focus</a>
                                    <a href="#!" class="d-inline-flex focus-ring focus-ring-info py-1 px-2 text-decoration-none border rounded-2">Info focus</a>
                                    <a href="#!" class="d-inline-flex focus-ring focus-ring-purple py-1 px-2 text-decoration-none border rounded-2">Purple focus</a>
                                    <a href="#!" class="d-inline-flex focus-ring focus-ring-light py-1 px-2 text-decoration-none border rounded-2">Light focus</a>
                                    <a href="#!" class="d-inline-flex focus-ring focus-ring-dark py-1 px-2 text-decoration-none border rounded-2">Dark focus</a>
                                </div>

                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Icon Buttons</h4>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-icon&quot;&gt;
                                            &lt;i class=&quot;ti ti-star fs-lg&quot;&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-purple btn-icon&quot;&gt;
                                            &lt;i data-lucide=&quot;leaf&quot; class=&quot;avatar-xxs&quot;&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-warning btn-icon&quot;&gt;
                                            &lt;i class=&quot;ti ti-settings fs-xl&quot;&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-info rounded-circle btn-icon&quot;&gt;
                                            &lt;i class=&quot;ti ti-bell fs-xxl&quot;&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary rounded-circle btn-icon&quot;&gt;
                                            &lt;i class=&quot;ti ti-rocket fs-xxl&quot;&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark rounded-circle btn-icon&quot;&gt;
                                            &lt;i class=&quot;ti ti-plane fs-xl&quot;&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-secondary btn-icon&quot;&gt;
                                            &lt;i class=&quot;ti ti-microphone fs-xl&quot;&gt;&lt;/i&gt;
                                        &lt;/button&gt;

                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;
                                            &lt;i class=&quot;ti ti-hand-stop align-middle me-1 fs-xl&quot;&gt;&lt;/i&gt; Stop
                                        &lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot;&gt;
                                            &lt;i data-lucide=&quot;zap&quot; class=&quot;avatar-xxs me-1&quot;&gt;&lt;/i&gt; Boost
                                        &lt;/button&gt;

                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info&quot;&gt;
                                            &lt;i class=&quot;ti ti-credit-card align-middle me-1 fs-xl&quot;&gt;&lt;/i&gt; Payment
                                        &lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning&quot;&gt;
                                            &lt;i class=&quot;ti ti-brand-stripe align-middle me-1 fs-xl&quot;&gt;&lt;/i&gt; Stripe
                                        &lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;
                                            &lt;i class=&quot;ti ti-tools fs-xl me-1&quot;&gt;&lt;/i&gt; &lt;span&gt;Tools&lt;/span&gt;
                                        &lt;/button&gt;    
                                        
                                        &lt;button class=&quot;btn btn-sm btn-outline-secondary btn-icon&quot; type=&quot;button&quot;&gt;
                                            &lt;i class=&quot;ti ti-user&quot;&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                        &lt;button class=&quot;btn btn-sm btn-primary btn-icon&quot; type=&quot;button&quot;&gt;
                                            &lt;i class=&quot;ti ti-message-circle&quot;&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                        &lt;button class=&quot;btn btn-sm btn-success btn-icon rounded-circle&quot; type=&quot;button&quot;&gt;
                                            &lt;i class=&quot;ti ti-share&quot;&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                        &lt;button class=&quot;btn btn-info btn-icon rounded-circle&quot; type=&quot;button&quot;&gt;
                                            &lt;i class=&quot;ti ti-bell&quot;&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                        &lt;button class=&quot;btn btn-warning btn-icon&quot; type=&quot;button&quot;&gt;
                                            &lt;i class=&quot;ti ti-alert-triangle&quot;&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                        &lt;button class=&quot;btn btn-outline-danger btn-icon&quot; type=&quot;button&quot;&gt;
                                            &lt;i class=&quot;ti ti-trash&quot;&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                        &lt;button class=&quot;btn btn-outline-purple btn-icon rounded-circle&quot; type=&quot;button&quot;&gt;
                                            &lt;i class=&quot;ti ti-star&quot;&gt;&lt;/i&gt;
                                        &lt;/button&gt;

                                        &lt;!-- Large buttons --&gt;
                                        &lt;button class=&quot;btn btn-outline-secondary btn-icon btn-lg&quot; type=&quot;button&quot;&gt;
                                            &lt;i class=&quot;ti ti-user&quot;&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                        &lt;button class=&quot;btn btn-primary btn-icon btn-lg rounded-circle&quot; type=&quot;button&quot;&gt;
                                            &lt;i class=&quot;ti ti-message-circle&quot;&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                        &lt;button class=&quot;btn btn-success btn-icon btn-lg rounded-circle&quot; type=&quot;button&quot;&gt;
                                            &lt;i class=&quot;ti ti-share&quot;&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                        &lt;button class=&quot;btn btn-info btn-icon btn-lg&quot; type=&quot;button&quot;&gt;
                                            &lt;i class=&quot;ti ti-bell&quot;&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                        &lt;button class=&quot;btn btn-warning btn-icon btn-lg&quot; type=&quot;button&quot;&gt;
                                            &lt;i class=&quot;ti ti-alert-triangle&quot;&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                        &lt;button class=&quot;btn btn-danger btn-icon btn-lg&quot; type=&quot;button&quot;&gt;
                                            &lt;i class=&quot;ti ti-trash&quot;&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                        &lt;button class=&quot;btn btn-outline-danger btn-icon btn-lg&quot; type=&quot;button&quot;&gt;
                                            &lt;i class=&quot;ti ti-star&quot;&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">Icon only button. Use it when you want a button with just an icon and no text, ideal for compact UI elements or toolbars.</p>

                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-primary btn-icon">
                                        <i class="ti ti-star fs-lg"></i>
                                    </button>
                                    <button type="button" class="btn btn-purple btn-icon">
                                        <i data-lucide="leaf" class="avatar-xxs"></i>
                                    </button>
                                    <button type="button" class="btn btn-warning btn-icon">
                                        <i class="ti ti-settings fs-xl"></i>
                                    </button>
                                    <button type="button" class="btn btn-soft-info rounded-circle btn-icon">
                                        <i class="ti ti-bell fs-xxl"></i>
                                    </button>
                                    <button type="button" class="btn btn-secondary rounded-circle btn-icon">
                                        <i class="ti ti-rocket fs-xxl"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-dark rounded-circle btn-icon">
                                        <i class="ti ti-plane fs-xl"></i>
                                    </button>
                                    <button type="button" class="btn btn-soft-secondary btn-icon">
                                        <i class="ti ti-microphone fs-xl"></i>
                                    </button>

                                    <button type="button" class="btn btn-light">
                                        <i class="ti ti-hand-stop align-middle me-1 fs-xl"></i> Stop
                                    </button>
                                    <button type="button" class="btn btn-dark">
                                        <i data-lucide="zap" class="avatar-xxs me-1"></i> Boost
                                    </button>

                                    <button type="button" class="btn btn-outline-info">
                                        <i class="ti ti-credit-card align-middle me-1 fs-xl"></i> Payment
                                    </button>
                                    <button type="button" class="btn btn-outline-warning">
                                        <i class="ti ti-brand-stripe align-middle me-1 fs-xl"></i> Stripe
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                        <i class="ti ti-tools fs-xl me-1"></i> <span>Tools</span>
                                    </button>
                                </div>

                                <div class="d-flex flex-wrap gap-2 mt-3">
                                    <button class="btn btn-sm btn-outline-secondary btn-icon" type="button">
                                        <i class="ti ti-user"></i>
                                    </button>
                                    <button class="btn btn-sm btn-primary btn-icon" type="button">
                                        <i class="ti ti-message-circle"></i>
                                    </button>
                                    <button class="btn btn-sm btn-success btn-icon rounded-circle" type="button">
                                        <i class="ti ti-share"></i>
                                    </button>
                                    <button class="btn btn-info btn-icon rounded-circle" type="button">
                                        <i class="ti ti-bell"></i>
                                    </button>
                                    <button class="btn btn-warning btn-icon" type="button">
                                        <i class="ti ti-alert-triangle"></i>
                                    </button>
                                    <button class="btn btn-outline-danger btn-icon" type="button">
                                        <i class="ti ti-trash"></i>
                                    </button>
                                    <button class="btn btn-outline-purple btn-icon rounded-circle" type="button">
                                        <i class="ti ti-star"></i>
                                    </button>

                                    <!-- Large buttons -->
                                    <button class="btn btn-outline-secondary btn-icon btn-lg" type="button">
                                        <i class="ti ti-user"></i>
                                    </button>
                                    <button class="btn btn-primary btn-icon btn-lg rounded-circle" type="button">
                                        <i class="ti ti-message-circle"></i>
                                    </button>
                                    <button class="btn btn-success btn-icon btn-lg rounded-circle" type="button">
                                        <i class="ti ti-share"></i>
                                    </button>
                                    <button class="btn btn-info btn-icon btn-lg" type="button">
                                        <i class="ti ti-bell"></i>
                                    </button>
                                    <button class="btn btn-warning btn-icon btn-lg" type="button">
                                        <i class="ti ti-alert-triangle"></i>
                                    </button>
                                    <button class="btn btn-danger btn-icon btn-lg" type="button">
                                        <i class="ti ti-trash"></i>
                                    </button>
                                    <button class="btn btn-outline-danger btn-icon btn-lg" type="button">
                                        <i class="ti ti-star"></i>
                                    </button>
                                </div>

                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Button Group</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body" id="button-group-code">
                                <pre class="language-markup">
                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Left&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Middle&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Right&lt;/button&gt;

                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;1&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;2&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;3&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;4&lt;/button&gt;

                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;5&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;6&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;7&lt;/button&gt;

                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;8&lt;/button&gt;

                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;1&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;2&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;3&lt;/button&gt;
                                        &lt;div class=&quot;btn-group&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt; Dropdown &lt;span class=&quot;caret&quot;&gt;&lt;/span&gt; &lt;/button&gt;
                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;
                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;

                                        &lt;div class=&quot;btn-group-vertical mb-2&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Top&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Middle&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Bottom&lt;/button&gt;
                                        &lt;/div&gt;

                                        &lt;div class=&quot;btn-group-vertical mb-2&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Button 1&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Button 2&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt; Button 3 &lt;span class=&quot;caret&quot;&gt;&lt;/span&gt; &lt;/button&gt;
                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;
                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">Group multiple buttons together by wrapping them with the <code>.btn</code> class inside a <code>.btn-group</code> container. This helps align buttons side by side with consistent spacing and styling.</p>

                                <div class="btn-group mb-2">
                                    <button type="button" class="btn btn-light">Left</button>
                                    <button type="button" class="btn btn-light">Middle</button>
                                    <button type="button" class="btn btn-light">Right</button>
                                </div>

                                <br>

                                <div class="btn-group mb-2">
                                    <button type="button" class="btn btn-light">1</button>
                                    <button type="button" class="btn btn-light">2</button>
                                    <button type="button" class="btn btn-light">3</button>
                                    <button type="button" class="btn btn-light">4</button>
                                </div>

                                <div class="btn-group mb-2">
                                    <button type="button" class="btn btn-light">5</button>
                                    <button type="button" class="btn btn-light">6</button>
                                    <button type="button" class="btn btn-light">7</button>
                                </div>

                                <div class="btn-group mb-2">
                                    <button type="button" class="btn btn-light">8</button>
                                </div>

                                <br>

                                <div class="btn-group mb-2">
                                    <button type="button" class="btn btn-light">1</button>
                                    <button type="button" class="btn btn-primary">2</button>
                                    <button type="button" class="btn btn-light">3</button>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> Dropdown <span class="caret"></span> </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="btn-group-vertical mb-2">
                                            <button type="button" class="btn btn-light">Top</button>
                                            <button type="button" class="btn btn-light">Middle</button>
                                            <button type="button" class="btn btn-light">Bottom</button>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="btn-group-vertical mb-2">
                                            <button type="button" class="btn btn-light">Button 1</button>
                                            <button type="button" class="btn btn-light">Button 2</button>
                                            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> Button 3 <span class="caret"></span> </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                </div> <!-- end row -->

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