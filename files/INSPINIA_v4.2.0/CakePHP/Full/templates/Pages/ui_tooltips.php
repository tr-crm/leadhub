<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Tooltips']) ?>

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
                <?= $this->element('page_title', ['subtitle' => 'UI', 'title' => 'Tooltips']) ?>
            </div>
            <!-- container -->

            <div class="container-xl">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Examples</h4>
                            </div>

                            <div class="card-body">
                                <p class="text-muted mb-2">
                                    Documentation and examples for adding custom Bootstrap tooltips with CSS and JavaScript using CSS3 for animations and data-bs-attributes for local title storage.
                                </p>

                                <a class="btn btn-link p-0 fw-semibold" href="https://getbootstrap.com/docs/5.3/components/tooltips/" target="_blank">
                                    Tooltips on Bootstrap
                                    <i class="ti ti-chevron-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Basic</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                        <code class="language-markup">
                                            &lt;p class=&quot;mb-0&quot;&gt;
                                                Powerful admin features like &lt;a href=&quot;#&quot; class=&quot;fw-medium&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-title=&quot;Manage your dashboard easily&quot;&gt;custom dashboards&lt;/a&gt; and UI components help you build scalable web applications efficiently. 
                                                This template includes pre-built pages, clean layouts, and reusable code blocks to boost your development workflow. 
                                                From user management to analytics and settings, everything is modular and developer-friendly. 
                                                Create modern admin panels with &lt;a href=&quot;#&quot; class=&quot;fw-medium&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-title=&quot;Built with Bootstrap 5&quot;&gt;responsive design&lt;/a&gt; and seamless UX. 
                                                Get started quickly with a professional-grade &lt;a href=&quot;#&quot; class=&quot;fw-medium&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-title=&quot;Tailored for developers&quot;&gt;UI toolkit&lt;/a&gt; and supercharge your app with &lt;a href=&quot;#&quot; class=&quot;fw-medium&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-title=&quot;Includes charts, tables, forms and more&quot;&gt;powerful components&lt;/a&gt; and flexible layouts.
                                            &lt;/p&gt;
                                        </code>
                                    </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">Hover over the links below to see tooltips.</p>

                                <p class="mb-0">
                                    Powerful admin features like <a href="#" class="fw-medium" data-bs-toggle="tooltip" data-bs-title="Manage your dashboard easily">custom dashboards</a> and UI components help you build scalable web applications efficiently.
                                    This template includes pre-built pages, clean layouts, and reusable code blocks to boost your development workflow.
                                    From user management to analytics and settings, everything is modular and developer-friendly.
                                    Create modern admin panels with <a href="#" class="fw-medium" data-bs-toggle="tooltip" data-bs-title="Built with Bootstrap 5">responsive design</a> and seamless UX.
                                    Get started quickly with a professional-grade <a href="#" class="fw-medium" data-bs-toggle="tooltip" data-bs-title="Tailored for developers">UI toolkit</a> and supercharge your app with <a href="#" class="fw-medium" data-bs-toggle="tooltip" data-bs-title="Includes charts, tables, forms and more">powerful components</a> and flexible layouts.
                                </p>

                            </div> <!-- end card-body -->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Disabled Elements</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body" id="disabled-tooltips-code">
                                <pre>
                                    <code class="language-markup">
                                        &lt;p class=&quot;text-muted&quot;&gt;Elements with the &lt;code&gt;disabled&lt;/code&gt; attribute
                                            aren&rsquo;t interactive, meaning users cannot focus, hover, or click them to trigger
                                            a tooltip (or popover). As a workaround, you&rsquo;ll want to trigger the tooltip from
                                            a wrapper &lt;code&gt;&amp;lt;div&amp;gt;&lt;/code&gt; or &lt;code&gt;&amp;lt;span&amp;gt;&lt;/code&gt;, ideally made
                                            keyboard-focusable using &lt;code&gt;tabindex=&quot;0&quot;&lt;/code&gt;, and override the
                                            &lt;code&gt;pointer-events&lt;/code&gt; on the disabled element.
                                        &lt;/p&gt;

                                        &lt;span class=&quot;d-inline-block&quot; tabindex=&quot;0&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-title=&quot;Disabled tooltip&quot;&gt;
                                            &lt;button class=&quot;btn btn-primary pe-none&quot; type=&quot;button&quot; disabled&gt;Disabled Button&lt;/button&gt;
                                        &lt;/span&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">Elements with the <code>disabled</code> attribute
                                    aren’t interactive, meaning users cannot focus, hover, or click them to trigger
                                    a tooltip (or popover). As a workaround, you’ll want to trigger the tooltip from
                                    a wrapper <code>&lt;div&gt;</code> or <code>&lt;span&gt;</code>, ideally made
                                    keyboard-focusable using <code>tabindex="0"</code>, and override the
                                    <code>pointer-events</code> on the disabled element.
                                </p>

                                <span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip" data-bs-title="Disabled tooltip">
                                    <button class="btn btn-primary pe-none" type="button" disabled>Disabled Button</button>
                                </span>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Hover Elements</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;p class=&quot;text-muted&quot;&gt;Elements with the &lt;code&gt;disabled&lt;/code&gt; attribute
                                            aren&rsquo;t interactive, meaning users cannot focus, hover, or click them to trigger
                                            a tooltip (or popover). As a workaround, you&rsquo;ll want to trigger the tooltip from
                                            a wrapper &lt;code&gt;&amp;lt;div&amp;gt;&lt;/code&gt; or &lt;code&gt;&amp;lt;span&amp;gt;&lt;/code&gt;, ideally made
                                            keyboard-focusable using &lt;code&gt;tabindex=&quot;0&quot;&lt;/code&gt;, and override the
                                            &lt;code&gt;pointer-events&lt;/code&gt; on the disabled element.
                                        &lt;/p&gt;
    
                                    &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-trigger=&quot;hover&quot; data-bs-title=&quot;Tooltip appears on hover only&quot;&gt;Hover to See Info&lt;/button&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">Elements with the <code>disabled</code> attribute
                                    aren’t interactive, meaning users cannot focus, hover, or click them to trigger
                                    a tooltip (or popover). As a workaround, you’ll want to trigger the tooltip from
                                    a wrapper <code>&lt;div&gt;</code> or <code>&lt;span&gt;</code>, ideally made
                                    keyboard-focusable using <code>tabindex="0"</code>, and override the
                                    <code>pointer-events</code> on the disabled element.
                                </p>

                                <button class="btn btn-primary" type="button" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-title="Tooltip appears on hover only">Hover to See Info</button>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Four Directions</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; data-bs-title=&quot;Tooltip on top&quot;&gt;Tooltip ontop&lt;/button&gt;
                                    </code>

                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;bottom&quot; data-bs-title=&quot;Tooltip on bottom&quot;&gt;Tooltip on bottom&lt;/button&gt;
                                    </code>

                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;left&quot; data-bs-title=&quot;Tooltip on left&quot;&gt;Tooltip on left&lt;/button&gt;
                                    </code>

                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;right&quot; data-bs-title=&quot;Tooltip on right&quot;&gt;Tooltip on right&lt;/button&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">Hover over the buttons below to see the four tooltips
                                    directions: top, right, bottom, and left.</p>

                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">Tooltip ontop</button>
                                    <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Tooltip on bottom">Tooltip on bottom</button>
                                    <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Tooltip on left">Tooltip on left</button>
                                    <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Tooltip on right">Tooltip on right</button>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">HTML Tags</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-html=&quot;true&quot; data-bs-title=&quot;&lt;em&gt;New&lt;/em&gt; &lt;u&gt;Tooltip&lt;/u&gt; &lt;b&gt;with&lt;/b&gt; &lt;i&gt;HTML&lt;/i&gt; &lt;br&gt;Custom message here!&quot;&gt;
                                            Tooltip with HTML
                                        &lt;/button&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">And with custom HTML added:</p>

                                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-html="true" data-bs-title="<em>New</em> <u>Tooltip</u> <b>with</b> <i>HTML</i> <br>Custom message here!">
                                    Tooltip with HTML
                                </button>

                            </div> <!-- end card-body -->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Color Tooltips</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        
                                    </code>

                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; data-bs-custom-class=&quot;tooltip-primary&quot; data-bs-title=&quot;This is a primary tooltip with a custom style.&quot;&gt;
                                            Primary tooltip
                                        &lt;/button&gt;
                                    </code>

                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; data-bs-custom-class=&quot;tooltip-danger&quot; data-bs-title=&quot;This is a danger tooltip with a custom warning message.&quot;&gt;
                                            Danger tooltip
                                        &lt;/button&gt;
                                    </code>

                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; data-bs-custom-class=&quot;tooltip-info&quot; data-bs-title=&quot;This is an info tooltip that provides extra details.&quot;&gt;
                                            Info tooltip
                                        &lt;/button&gt;
                                    </code>
                                                                            
                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; data-bs-custom-class=&quot;tooltip-success&quot; data-bs-title=&quot;This is a success tooltip to indicate completion.&quot;&gt;
                                            Success tooltip
                                        &lt;/button&gt;
                                    </code>

                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; data-bs-custom-class=&quot;tooltip-secondary&quot; data-bs-title=&quot;This is a secondary tooltip that gives additional information.&quot;&gt;
                                            Secondary tooltip
                                        &lt;/button&gt;
                                    </code>

                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; data-bs-custom-class=&quot;tooltip-warning&quot; data-bs-title=&quot;This is a warning tooltip to alert you.&quot;&gt;
                                            Warning tooltip
                                        &lt;/button&gt;
                                    </code>

                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; data-bs-custom-class=&quot;tooltip-dark&quot; data-bs-title=&quot;This is a dark tooltip with important information.&quot;&gt;
                                            Dark tooltip
                                        &lt;/button&gt;
                                    </code>

                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-purple&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; data-bs-custom-class=&quot;tooltip-purple&quot; data-bs-title=&quot;This is a purple tooltip with a vibrant style.&quot;&gt;
                                            Purple tooltip
                                        &lt;/button&gt;  
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">We set a custom class with ex.
                                    <code>data-bs-custom-class="primary-tooltip"</code> to scope our background-color
                                    primary appearance and use
                                    it to override a local CSS
                                    variable.
                                </p>

                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-primary" data-bs-title="This is a primary tooltip with a custom style.">
                                        Primary tooltip
                                    </button>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-danger" data-bs-title="This is a danger tooltip with a custom warning message.">
                                        Danger tooltip
                                    </button>
                                    <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-info" data-bs-title="This is an info tooltip that provides extra details.">
                                        Info tooltip
                                    </button>
                                    <button type="button" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success" data-bs-title="This is a success tooltip to indicate completion.">
                                        Success tooltip
                                    </button>
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-secondary" data-bs-title="This is a secondary tooltip that gives additional information.">
                                        Secondary tooltip
                                    </button>
                                    <button type="button" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-warning" data-bs-title="This is a warning tooltip to alert you.">
                                        Warning tooltip
                                    </button>
                                    <button type="button" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-dark" data-bs-title="This is a dark tooltip with important information.">
                                        Dark tooltip
                                    </button>
                                    <button type="button" class="btn btn-purple" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-purple" data-bs-title="This is a purple tooltip with a vibrant style.">
                                        Purple tooltip
                                    </button>
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