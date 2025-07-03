<?php include 'partials/html.php' ?>

<head>
    <?php $title = "Popovers"; include 'partials/title-meta.php' ?>

    <?php include 'partials/head-css.php' ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?php include 'partials/menu.php' ?>

        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->

        <div class="content-page">

            <div class="container-fluid">
                <?php $subtitle = "UI"; $title = "Popovers"; include 'partials/page-title.php';?>
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
                                    Documentation and examples for adding Bootstrap popovers, like those found in iOS, to any element on your site.
                                </p>
        
                                <a class="btn btn-link p-0 fw-semibold" href="https://getbootstrap.com/docs/5.3/components/popovers/" target="_blank">
                                    Popovers on Bootstrap
                                    <i class="ti ti-chevron-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div> <!-- edn col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Simple Popover</h4>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-toggle=&quot;popover&quot; title=&quot;Need Help?&quot; data-bs-content=&quot;Click here to get support from our team. We're here 24/7 to assist you.&quot;&gt;
                                            Get Support Info
                                        &lt;/button&gt;    
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <button type="button" class="btn btn-info" data-bs-toggle="popover" title="Need Help?" data-bs-content="Click here to get support from our team. We're here 24/7 to assist you.">
                                    Get Support Info
                                </button>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div>

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Dismiss on Next Click</h4>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; tabindex=&quot;0&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;popover&quot; data-bs-trigger=&quot;focus&quot; data-bs-content=&quot;Get quick tips and tricks to improve your workflow instantly.&quot; title=&quot;Quick Tips&quot;&gt;
                                            Show Tips
                                        &lt;/button&gt;      
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->


                            <div class="card-body">
                                <button type="button" tabindex="0" class="btn btn-primary" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="Get quick tips and tricks to improve your workflow instantly." title="Quick Tips">
                                    Show Tips
                                </button>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div>

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Hover</h4>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;button type=&quot;button&quot; tabindex=&quot;0&quot; class=&quot;btn btn-dark&quot; data-bs-toggle=&quot;popover&quot; data-bs-trigger=&quot;hover&quot; data-bs-content=&quot;Discover features you didn&rsquo;t know existed. Hover to explore more!&quot; title=&quot;Exciting Features!&quot;&gt;
                                            Please Hover Me
                                        &lt;/button&gt;  
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <button type="button" tabindex="0" class="btn btn-dark" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="Discover features you didn’t know existed. Hover to explore more!" title="Exciting Features!">
                                    Please Hover Me
                                </button>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Four Directions</h4>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;!-- Popover on top --&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;top&quot; title=&quot;Top Popover&quot; data-bs-content=&quot;This popover appears above the button. Great for tips or info.&quot;&gt;
                                            Popover on top
                                        &lt;/button&gt;
                                    
                                        &lt;!-- Popover on bottom --&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;bottom&quot; title=&quot;Bottom Popover&quot; data-bs-content=&quot;This popover shows below. Perfect for additional details.&quot;&gt;
                                            Popover on bottom
                                        &lt;/button&gt;
                                    
                                        &lt;!-- Popover on right --&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;right&quot; title=&quot;Right Popover&quot; data-bs-content=&quot;Slide in from the right to provide quick insights.&quot;&gt;
                                            Popover on right
                                        &lt;/button&gt;

                                        &lt;!-- Popover on left --&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;left&quot; title=&quot;Left Popover&quot; data-bs-content=&quot;Appears on the left side. Great for tooltips or notes.&quot;&gt;
                                            Popover on left
                                        &lt;/button&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <div class="d-flex flex-wrap gap-2">
                                    <!-- Popover on top -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="popover" data-bs-placement="top" title="Top Popover" data-bs-content="This popover appears above the button. Great for tips or info.">
                                        Popover on top
                                    </button>

                                    <!-- Popover on bottom -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="popover" data-bs-placement="bottom" title="Bottom Popover" data-bs-content="This popover shows below. Perfect for additional details.">
                                        Popover on bottom
                                    </button>

                                    <!-- Popover on right -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="popover" data-bs-placement="right" title="Right Popover" data-bs-content="Slide in from the right to provide quick insights.">
                                        Popover on right
                                    </button>

                                    <!-- Popover on left -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="popover" data-bs-placement="left" title="Left Popover" data-bs-content="Appears on the left side. Great for tooltips or notes.">
                                        Popover on left
                                    </button>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div>

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Custom Popovers </h4>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">                                                
                                        &lt;!-- Primary Popover --&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;right&quot; data-bs-custom-class=&quot;popover-primary&quot; data-bs-title=&quot;Primary Popover&quot; data-bs-content=&quot;This is a primary-themed popover styled using CSS variables.&quot;&gt;
                                            Primary Popover
                                        &lt;/button&gt;
                                    
                                        &lt;!-- Success Popover --&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;right&quot; data-bs-custom-class=&quot;popover-success&quot; data-bs-title=&quot;Success Popover&quot; data-bs-content=&quot;This is a success-themed popover styled using CSS variables.&quot;&gt;
                                            Success Popover
                                        &lt;/button&gt;
                                    
                                        &lt;!-- Danger Popover --&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;right&quot; data-bs-custom-class=&quot;popover-danger&quot; data-bs-title=&quot;Danger Popover&quot; data-bs-content=&quot;This is a danger-themed popover styled using CSS variables.&quot;&gt;
                                            Danger Popover
                                        &lt;/button&gt;
                                    
                                        &lt;!-- Info Popover --&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;right&quot; data-bs-custom-class=&quot;popover-info&quot; data-bs-title=&quot;Info Popover&quot; data-bs-content=&quot;This is an info-themed popover styled using CSS variables.&quot;&gt;
                                            Info Popover
                                        &lt;/button&gt;
                                    
                                        &lt;!-- Dark Popover --&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;right&quot; data-bs-custom-class=&quot;popover-dark&quot; data-bs-title=&quot;Dark Popover&quot; data-bs-content=&quot;This is a dark-themed popover styled using CSS variables.&quot;&gt;
                                            Dark Popover
                                        &lt;/button&gt;
                                    
                                        &lt;!-- Secondary Popover --&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;right&quot; data-bs-custom-class=&quot;popover-secondary&quot; data-bs-title=&quot;Secondary Popover&quot; data-bs-content=&quot;This is a secondary-themed popover styled using CSS variables.&quot;&gt;
                                            Secondary Popover
                                        &lt;/button&gt;
                                    
                                        &lt;!-- Purple Popover --&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-purple&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;right&quot; data-bs-custom-class=&quot;popover-purple&quot; data-bs-title=&quot;Purple Popover&quot; data-bs-content=&quot;This is a purple-themed popover styled using CSS variables.&quot;&gt;
                                            Purple Popover
                                        &lt;/button&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <div class="d-flex flex-wrap gap-2">
                                    <!-- Primary Popover -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="popover" data-bs-placement="right" data-bs-custom-class="popover-primary" data-bs-title="Primary Popover" data-bs-content="This is a primary-themed popover styled using CSS variables.">
                                        Primary Popover
                                    </button>

                                    <!-- Success Popover -->
                                    <button type="button" class="btn btn-success" data-bs-toggle="popover" data-bs-placement="right" data-bs-custom-class="popover-success" data-bs-title="Success Popover" data-bs-content="This is a success-themed popover styled using CSS variables.">
                                        Success Popover
                                    </button>

                                    <!-- Danger Popover -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="popover" data-bs-placement="right" data-bs-custom-class="popover-danger" data-bs-title="Danger Popover" data-bs-content="This is a danger-themed popover styled using CSS variables.">
                                        Danger Popover
                                    </button>

                                    <!-- Info Popover -->
                                    <button type="button" class="btn btn-info" data-bs-toggle="popover" data-bs-placement="right" data-bs-custom-class="popover-info" data-bs-title="Info Popover" data-bs-content="This is an info-themed popover styled using CSS variables.">
                                        Info Popover
                                    </button>

                                    <!-- Dark Popover -->
                                    <button type="button" class="btn btn-dark" data-bs-toggle="popover" data-bs-placement="right" data-bs-custom-class="popover-dark" data-bs-title="Dark Popover" data-bs-content="This is a dark-themed popover styled using CSS variables.">
                                        Dark Popover
                                    </button>

                                    <!-- Secondary Popover -->
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="popover" data-bs-placement="right" data-bs-custom-class="popover-secondary" data-bs-title="Secondary Popover" data-bs-content="This is a secondary-themed popover styled using CSS variables.">
                                        Secondary Popover
                                    </button>

                                    <!-- Purple Popover -->
                                    <button type="button" class="btn btn-purple" data-bs-toggle="popover" data-bs-placement="right" data-bs-custom-class="popover-purple" data-bs-title="Purple Popover" data-bs-content="This is a purple-themed popover styled using CSS variables.">
                                        Purple Popover
                                    </button>
                                </div>

                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div>

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Disabled Elements</h4>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;button class=&quot;btn btn-primary&quot; style=&quot;pointer-events: none;&quot; type=&quot;button&quot; disabled&gt;Disabled button&lt;/button&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <span class="d-inline-block" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="This button is disabled, but the popover still works.">
                                    <button class="btn btn-primary" type="button" disabled style="pointer-events: none;">
                                        Disabled Button
                                    </button>
                                </span>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- container -->

            <?php include 'partials/footer.php' ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?php include 'partials/customizer.php' ?>

    <?php include 'partials/footer-scripts.php' ?>

</body>

</html>