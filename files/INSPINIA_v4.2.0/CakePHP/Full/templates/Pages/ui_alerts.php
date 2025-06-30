<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Alerts']) ?>

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
                <?= $this->element('page_title', ['subtitle' => 'UI', 'title' => 'Alerts']) ?>
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
                                    Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.
                                </p>

                                <a class="btn btn-link p-0 fw-semibold" href="https://getbootstrap.com/docs/5.3/components/alerts/" target="_blank">
                                    Alerts on Bootstrap
                                    <i class="ti ti-chevron-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title mb-0">Default Alert</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;div class=&quot;alert alert-primary&quot; role=&quot;alert&quot;&gt;
                                            This is a primary alert&mdash;something important you should know!
                                        &lt;/div&gt;

                                        &lt;div class=&quot;alert alert-secondary&quot; role=&quot;alert&quot;&gt;
                                            This is a secondary alert&mdash;some additional context.
                                        &lt;/div&gt;

                                        &lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;
                                            Success! Your operation was completed successfully.
                                        &lt;/div&gt;
                                        
                                        &lt;div class=&quot;alert alert-danger&quot; role=&quot;alert&quot;&gt;
                                            Error! Something went wrong&mdash;please try again.
                                        &lt;/div&gt;

                                        &lt;div class=&quot;alert alert-warning&quot; role=&quot;alert&quot;&gt;
                                            Warning! Please double-check your inputs.
                                        &lt;/div&gt;

                                        &lt;div class=&quot;alert alert-info&quot; role=&quot;alert&quot;&gt;
                                            Info: Here's something you might find useful.
                                        &lt;/div&gt;

                                        &lt;div class=&quot;alert alert-light&quot; role=&quot;alert&quot;&gt;
                                            Light alert&mdash;just a subtle notification.
                                        &lt;/div&gt;

                                        &lt;div class=&quot;alert alert-dark&quot; role=&quot;alert&quot;&gt;
                                            Dark alert&mdash;use for general-purpose messages.
                                        &lt;/div&gt;

                                        &lt;div class=&quot;alert alert-purple mb-0&quot; role=&quot;alert&quot;&gt;
                                            Purple alert&mdash;use for general-purpose messages.
                                        &lt;/div&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <div class="alert alert-primary" role="alert">
                                    This is a primary alert—something important you should know!
                                </div>

                                <div class="alert alert-secondary" role="alert">
                                    This is a secondary alert—some additional context.
                                </div>

                                <div class="alert alert-success" role="alert">
                                    Success! Your operation was completed successfully.
                                </div>

                                <div class="alert alert-danger" role="alert">
                                    Error! Something went wrong—please try again.
                                </div>

                                <div class="alert alert-warning" role="alert">
                                    Warning! Please double-check your inputs.
                                </div>

                                <div class="alert alert-info" role="alert">
                                    Info: Here's something you might find useful.
                                </div>

                                <div class="alert alert-light" role="alert">
                                    Light alert—just a subtle notification.
                                </div>

                                <div class="alert alert-dark" role="alert">
                                    Dark alert—use for general-purpose messages.
                                </div>

                                <div class="alert alert-purple mb-0" role="alert">
                                    Purple alert—use for general-purpose messages.
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Dismissing Alert with Solid Colors</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                                </div>
                            </div>

                            <div class="code-body">
                                <div class="highlight">
                                    <pre>
                                        <code class="language-markup">
                                            &lt;div class=&quot;alert alert-primary text-bg-primary alert-dismissible&quot; role=&quot;alert&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                &lt;div&gt;Heads up! This is a primary alert with important information.&lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div class=&quot;alert alert-secondary text-bg-secondary alert-dismissible&quot; role=&quot;alert&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                &lt;div&gt;Notice: This is a secondary alert with supporting details.&lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div class=&quot;alert alert-success text-bg-success alert-dismissible&quot; role=&quot;alert&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                &lt;div&gt;Success! Your action was completed successfully.&lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div class=&quot;alert alert-danger text-bg-danger alert-dismissible&quot; role=&quot;alert&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                &lt;div&gt;Error! Something went wrong&mdash;please try again later.&lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div class=&quot;alert alert-warning text-bg-warning alert-dismissible&quot; role=&quot;alert&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                &lt;div&gt;Warning! Please review your input before proceeding.&lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div class=&quot;alert alert-info text-bg-info alert-dismissible&quot; role=&quot;alert&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                &lt;div&gt;Info: Here&rsquo;s something you might find helpful.&lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div class=&quot;alert alert-light text-bg-light alert-dismissible&quot; role=&quot;alert&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                &lt;div&gt;Note: This is a light alert with a subtle message.&lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div class=&quot;alert alert-dark text-bg-dark alert-dismissible&quot; role=&quot;alert&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                &lt;div&gt;Notice: This dark alert is great for general messages.&lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div class=&quot;alert alert-purple text-bg-purple alert-dismissible mb-0&quot; role=&quot;alert&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                &lt;div&gt;Heads up: This purple alert is perfect for catching attention with general information.&lt;/div&gt;
                                            &lt;/div&gt;
                                        </code>
                                    </pre> <!-- end pre -->
                                </div> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <div class="alert alert-primary text-bg-primary alert-dismissible" role="alert">
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <div>Heads up! This is a primary alert with important information.</div>
                                </div>

                                <div class="alert alert-secondary text-bg-secondary alert-dismissible" role="alert">
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <div>Notice: This is a secondary alert with supporting details.</div>
                                </div>

                                <div class="alert alert-success text-bg-success alert-dismissible" role="alert">
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <div>Success! Your action was completed successfully.</div>
                                </div>

                                <div class="alert alert-danger text-bg-danger alert-dismissible" role="alert">
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <div>Error! Something went wrong—please try again later.</div>
                                </div>

                                <div class="alert alert-warning text-bg-warning alert-dismissible" role="alert">
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <div>Warning! Please review your input before proceeding.</div>
                                </div>

                                <div class="alert alert-info text-bg-info alert-dismissible" role="alert">
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <div>Info: Here’s something you might find helpful.</div>
                                </div>

                                <div class="alert alert-light text-bg-light alert-dismissible" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <div>Note: This is a light alert with a subtle message.</div>
                                </div>

                                <div class="alert alert-dark text-bg-dark alert-dismissible" role="alert">
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <div>Notice: This dark alert is great for general messages.</div>
                                </div>

                                <div class="alert alert-purple text-bg-purple alert-dismissible mb-0" role="alert">
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <div>Heads up: This purple alert is perfect for catching attention with general information.</div>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Link Color</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <div class="highlight">
                                    <pre>
                                        <code class="language-markup">
                                            &lt;div class=&quot;alert alert-primary&quot; role=&quot;alert&quot;&gt;
                                                Need more info? Check out &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;this primary link&lt;/a&gt; for important details.
                                            &lt;/div&gt;

                                            &lt;div class=&quot;alert alert-secondary&quot; role=&quot;alert&quot;&gt;
                                                Here's a secondary message with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;a helpful link&lt;/a&gt; for additional context.
                                            &lt;/div&gt;

                                            &lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;
                                                Operation successful! View the results &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;by clicking here&lt;/a&gt;.
                                            &lt;/div&gt;

                                            &lt;div class=&quot;alert alert-danger&quot; role=&quot;alert&quot;&gt;
                                                Something went wrong. Learn more &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;through this alert link&lt;/a&gt;.
                                            &lt;/div&gt;

                                            &lt;div class=&quot;alert alert-warning&quot; role=&quot;alert&quot;&gt;
                                                Heads up! You might want to check &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;this warning link&lt;/a&gt;.
                                            &lt;/div&gt;

                                            &lt;div class=&quot;alert alert-info&quot; role=&quot;alert&quot;&gt;
                                                Here&rsquo;s some information that may help&mdash;click &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;this link&lt;/a&gt; to read more.
                                            &lt;/div&gt;

                                            &lt;div class=&quot;alert alert-light&quot; role=&quot;alert&quot;&gt;
                                                Just a light reminder with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;a gentle link&lt;/a&gt; to explore.
                                            &lt;/div&gt;

                                            &lt;div class=&quot;alert alert-dark&quot; role=&quot;alert&quot;&gt;
                                                This is a general dark alert. Find out more &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;by clicking here&lt;/a&gt;.
                                            &lt;/div&gt;
                                            
                                            &lt;div class=&quot;alert alert-purple mb-0&quot; role=&quot;alert&quot;&gt;
                                                Important notice: For more information, &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;click here&lt;/a&gt;.
                                            &lt;/div&gt;
                                        </code>
                                    </pre> <!-- end pre -->
                                </div> <!-- end highlight-->
                            </div> <!--end preview code-->

                            <div class="card-body">
                                <div class="alert alert-primary" role="alert">
                                    Need more info? Check out <a href="#" class="alert-link">this primary link</a> for important details.
                                </div>

                                <div class="alert alert-secondary" role="alert">
                                    Here's a secondary message with <a href="#" class="alert-link">a helpful link</a> for additional context.
                                </div>

                                <div class="alert alert-success" role="alert">
                                    Operation successful! View the results <a href="#" class="alert-link">by clicking here</a>.
                                </div>

                                <div class="alert alert-danger" role="alert">
                                    Something went wrong. Learn more <a href="#" class="alert-link">through this alert link</a>.
                                </div>

                                <div class="alert alert-warning" role="alert">
                                    Heads up! You might want to check <a href="#" class="alert-link">this warning link</a>.
                                </div>

                                <div class="alert alert-info" role="alert">
                                    Here’s some information that may help—click <a href="#" class="alert-link">this link</a> to read more.
                                </div>

                                <div class="alert alert-light" role="alert">
                                    Just a light reminder with <a href="#" class="alert-link">a gentle link</a> to explore.
                                </div>

                                <div class="alert alert-dark" role="alert">
                                    This is a general dark alert. Find out more <a href="#" class="alert-link">by clicking here</a>.
                                </div>

                                <div class="alert alert-purple mb-0" role="alert">
                                    Important notice: For more information, <a href="#" class="alert-link">click here</a>.
                                </div>

                            </div> <!-- end card-body -->

                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Additional Content</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                                </div>
                            </div>

                            <div class="code-body">
                                <div class="highlight">
                                    <pre>
                                        <code class="language-markup">
                                            &lt;div class=&quot;alert alert-success p-3&quot; role=&quot;alert&quot;&gt;
                                                &lt;h4 class=&quot;alert-heading&quot;&gt;Great job!&lt;/h4&gt;
                                                &lt;p&gt;You&rsquo;ve successfully read this important alert message. The text is intentionally a bit longer to demonstrate how spacing behaves in this kind of layout.&lt;/p&gt;
                                                &lt;hr class=&quot;border-success border-opacity-25&quot;&gt;
                                                &lt;p class=&quot;mb-0&quot;&gt;Use margin utilities to keep your content clean and organized.&lt;/p&gt;
                                            &lt;/div&gt;

                                            &lt;div class=&quot;alert alert-secondary p-3 d-flex&quot; role=&quot;alert&quot;&gt;
                                                &lt;i class=&quot;ti ti-alarm-average fs-1 me-2&quot;&gt;&lt;/i&gt;
                                                &lt;div&gt;
                                                    &lt;h4 class=&quot;alert-heading&quot;&gt;Heads up!&lt;/h4&gt;
                                                    &lt;p&gt;This alert message gives additional information with a longer message to show content spacing within an alert.&lt;/p&gt;
                                                    &lt;hr class=&quot;border-secondary border-opacity-25&quot;&gt;
                                                    &lt;p class=&quot;mb-0&quot;&gt;Apply spacing classes wisely to maintain structure and clarity.&lt;/p&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div class=&quot;alert alert-purple d-flex p-3 mb-0&quot; role=&quot;alert&quot;&gt;
                                                &lt;i class=&quot;ti ti-phone-ringing fs-1 me-2&quot;&gt;&lt;/i&gt;
                                                &lt;div&gt;
                                                    &lt;h4 class=&quot;alert-heading&quot;&gt;Notice!&lt;/h4&gt;
                                                    &lt;p&gt;You&rsquo;ve just read through a primary alert message. The extra length helps show how well the layout handles content spacing.&lt;/p&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-sm&quot;&gt;Got it&lt;/button&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        </code>
                                    </pre> <!-- end pre -->
                                </div> <!-- end highlight-->
                            </div> <!--end preview code-->

                            <div class="card-body">
                                <div class="alert alert-success p-3" role="alert">
                                    <h4 class="alert-heading">Great job!</h4>
                                    <p>You’ve successfully read this important alert message. The text is intentionally a bit longer to demonstrate how spacing behaves in this kind of layout.</p>
                                    <hr class="border-success border-opacity-25">
                                    <p class="mb-0">Use margin utilities to keep your content clean and organized.</p>
                                </div>

                                <div class="alert alert-secondary p-3 d-flex" role="alert">
                                    <i class="ti ti-alarm-average fs-1 me-2"></i>
                                    <div>
                                        <h4 class="alert-heading">Heads up!</h4>
                                        <p>This alert message gives additional information with a longer message to show content spacing within an alert.</p>
                                        <hr class="border-secondary border-opacity-25">
                                        <p class="mb-0">Apply spacing classes wisely to maintain structure and clarity.</p>
                                    </div>
                                </div>

                                <div class="alert alert-purple d-flex p-3 mb-0" role="alert">
                                    <i class="ti ti-phone-ringing fs-1 me-2"></i>
                                    <div>
                                        <h4 class="alert-heading">Notice!</h4>
                                        <p>You’ve just read through a primary alert message. The extra length helps show how well the layout handles content spacing.</p>
                                        <button type="button" class="btn btn-primary btn-sm">Got it</button>
                                    </div>
                                </div>
                            </div> <!-- end card-body -->

                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Custom Alerts</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                                </div>
                            </div>

                            <div class="code-body">
                                <div class="highlight">
                                    <pre>
                                        <code class="language-markup">
                                            &lt;div class=&quot;alert alert-primary alert-dismissible border border-primary&quot; role=&quot;alert&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                &lt;div&gt;A primary alert with a full border!&lt;/div&gt;
                                            &lt;/div&gt;
            
                                            &lt;div class=&quot;alert alert-secondary alert-bordered alert-dismissible border-start border-secondary&quot; role=&quot;alert&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                &lt;div&gt;A secondary alert with a left border only!&lt;/div&gt;
                                            &lt;/div&gt;
            
                                            &lt;div class=&quot;alert alert-dark alert-bordered alert-dismissible border-bottom border-dark&quot; role=&quot;alert&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                &lt;div&gt;A dark alert with a bottom border!&lt;/div&gt;
                                            &lt;/div&gt;
            
                                            &lt;div class=&quot;alert alert-purple alert-dismissible border-2 border border-dashed border-purple&quot; role=&quot;alert&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                &lt;div&gt;A purple alert with a dashed border!&lt;/div&gt;
                                            &lt;/div&gt;
            
                                            &lt;div class=&quot;alert alert-danger alert-dismissible border-2  border-danger&quot; role=&quot;alert&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                &lt;div&gt;A danger alert with a thick border!&lt;/div&gt;
                                            &lt;/div&gt;
            
                                            &lt;div class=&quot;alert alert-warning d-flex align-items-center&quot; role=&quot;alert&quot;&gt;
                                                &lt;div&gt;A warning alert with a custom close button!&lt;/div&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;ms-auto btn btn-sm btn-warning btn-icon rounded-circle&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;
                                                    &lt;i class=&quot;ti ti-x fs-lg&quot;&gt;&lt;/i&gt;
                                                &lt;/button&gt;
                                            &lt;/div&gt;
            
                                            &lt;div class=&quot;alert alert-info alert-dismissible d-flex align-items-center gap-2&quot; role=&quot;alert&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                &lt;i class=&quot;ti ti-alert-octagon fs-xl&quot;&gt;&lt;/i&gt; An info alert with a custom icon!
                                            &lt;/div&gt;
            
                                            &lt;div class=&quot;alert alert-light border-2 d-flex align-items-center p-3 mb-0&quot; role=&quot;alert&quot;&gt;
                                                &lt;i class=&quot;ti ti-phone-ringing text-success fs-2 me-3&quot;&gt;&lt;/i&gt;
                                                &lt;div&gt;
                                                    &lt;h4 class=&quot;alert-heading&quot;&gt;Notice!&lt;/h4&gt;
                                                    &lt;p class=&quot;m-0&quot;&gt;You&rsquo;ve just read through a primary alert message. The extra length helps show how well the layout handles content spacing.&lt;/p&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        </code>
                                    </pre> <!-- end pre -->
                                </div> <!-- end highlight-->
                            </div> <!--end preview code-->

                            <div class="card-body">
                                <div class="alert alert-primary alert-dismissible border border-primary" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <div>A primary alert with a full border!</div>
                                </div>

                                <div class="alert alert-secondary alert-bordered alert-dismissible border-start border-secondary" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <div>A secondary alert with a left border only!</div>
                                </div>

                                <div class="alert alert-dark alert-bordered alert-dismissible border-bottom border-dark" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <div>A dark alert with a bottom border!</div>
                                </div>

                                <div class="alert alert-purple alert-dismissible border-2 border border-dashed border-purple" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <div>A purple alert with a dashed border!</div>
                                </div>

                                <div class="alert alert-danger alert-dismissible border-2  border-danger" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <div>A danger alert with a thick border!</div>
                                </div>

                                <div class="alert alert-warning d-flex align-items-center" role="alert">
                                    <div>A warning alert with a custom close button!</div>
                                    <button type="button" class="ms-auto btn btn-sm btn-warning btn-icon rounded-circle" data-bs-dismiss="alert" aria-label="Close">
                                        <i class="ti ti-x fs-lg"></i>
                                    </button>
                                </div>

                                <div class="alert alert-info alert-dismissible d-flex align-items-center gap-2" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <i class="ti ti-alert-octagon fs-xl"></i> An info alert with a custom icon!
                                </div>

                                <div class="alert alert-light border-2 d-flex align-items-center p-3 mb-0" role="alert">
                                    <i class="ti ti-phone-ringing text-success fs-2 me-3"></i>
                                    <div>
                                        <h4 class="alert-heading">Notice!</h4>
                                        <p class="m-0">You’ve just read through a primary alert message. The extra length helps show how well the layout handles content spacing.</p>
                                    </div>
                                </div>

                            </div> <!-- end card-body -->

                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Live Alert</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <div class="highlight">
                                    <pre>
                                        <code class="language-markup">
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; id=&quot;liveAlertBtn&quot;&gt;Show live alert&lt;/button&gt;
                                        </code>
                                    </pre> <!-- end pre -->
                                </div> <!-- end highlight-->
                            </div> <!--end preview code-->

                            <div class="card-body">
                                <div id="liveAlertPlaceholder"></div>
                                <button type="button" class="btn btn-primary" id="liveAlertBtn">Show live alert</button>
                            </div> <!--end card body-->
                        </div>
                    </div>
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