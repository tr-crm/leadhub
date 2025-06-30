<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Pagination']) ?>

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
                <?= $this->element('page_title', ['subtitle' => 'UI', 'title' => 'Pagination']) ?>
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
                                    Documentation and examples for showing pagination to indicate a series of related content exists across multiple pages.
                                </p>

                                <a class="btn btn-link p-0 fw-semibold" href="https://getbootstrap.com/docs/5.3/components/pagination/" target="_blank">
                                    Pagination on Bootstrap
                                    <i class="ti ti-chevron-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Default Pagination</h4>
                                </div>

                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;nav aria-label=&quot;Page navigation example&quot;&gt;
                                            &lt;ul class=&quot;pagination mb-0&quot;&gt;
                                            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Previous&lt;/a&gt;&lt;/li&gt;
                                            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
                                            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/nav&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted fs-sm">Use <code>.pagination</code> inside <code>&lt;nav&gt;</code> for accessible, easy-to-click page links.</p>

                                <nav aria-label="Page navigation example">
                                    <ul class="pagination mb-0">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Alignment</h4>
                                </div>

                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;nav aria-label=&quot;Page navigation example&quot;&gt;
                                            &lt;ul class=&quot;pagination justify-content-center&quot;&gt;
                                                &lt;li class=&quot;page-item disabled&quot;&gt;
                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; tabindex=&quot;-1&quot;&gt;Previous&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;
                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;Next&lt;/a&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/nav&gt;
                                   
                                        &lt;nav aria-label=&quot;Page navigation example&quot;&gt;
                                            &lt;ul class=&quot;pagination justify-content-end&quot;&gt;
                                                &lt;li class=&quot;page-item disabled&quot;&gt;
                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; tabindex=&quot;-1&quot;&gt;Previous&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;
                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;Next&lt;/a&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/nav&gt;
                                    </code>         
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted fs-sm">Align pagination using flexbox utilities, such as <code>.justify-content-center</code> to center it.</p>


                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="javascript: void(0);" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);">Next</a>
                                        </li>
                                    </ul>
                                </nav>

                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="javascript: void(0);" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div> <!-- end card body-->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Custom Color Pagination</h4>
                                </div>

                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;nav&gt;
                                            &lt;ul class=&quot;pagination pagination-boxed pagination-info&quot;&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;
                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;Previous&quot;&gt;
                                                        &lt;i class=&quot;ti ti-chevron-left&quot;&gt;&lt;/i&gt;
                                                    &lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;
                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;Next&quot;&gt;
                                                        &lt;i class=&quot;ti ti-chevron-right align-middle&quot;&gt;&lt;/i&gt;
                                                    &lt;/a&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/nav&gt;
                               
                                        &lt;nav&gt;
                                            &lt;ul class=&quot;pagination pagination-boxed pagination-secondary&quot;&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;
                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;Previous&quot;&gt;
                                                        &lt;i data-lucide=&quot;arrow-left&quot;&gt;&lt;/i&gt;
                                                    &lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;
                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;Next&quot;&gt;
                                                        &lt;i data-lucide=&quot;arrow-right&quot;&gt;&lt;/i&gt;
                                                    &lt;/a&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/nav&gt;
                                    </code>             
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted fs-sm">Add classes like <code>.pagination-primary</code>, <code>.pagination-info</code>, or <code>.pagination-secondary</code> to customize pagination color.</p>

                                <nav>
                                    <ul class="pagination pagination-boxed pagination-info">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                <i class="ti ti-chevron-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="javascript: void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                <i class="ti ti-chevron-right align-middle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>

                                <nav>
                                    <ul class="pagination pagination-boxed pagination-secondary mb-0">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                <i data-lucide="arrow-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                        <li class="page-item active"><a class="page-link" href="javascript: void(0);">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                <i data-lucide="arrow-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div> <!-- end card body-->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Disabled and active states</h4>
                                </div>

                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;nav aria-label=&quot;...&quot;&gt;
                                            &lt;ul class=&quot;pagination mb-0&quot;&gt;
                                                &lt;li class=&quot;page-item disabled&quot;&gt;
                                                    &lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Previous&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
                                                    &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;
                                                    &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/nav&gt;
                                    </code>            
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted fs-sm">Add <code>.disabled</code> and <code>tabindex="-1"</code> to <code>.page-item</code> to make it non-interactive.</p>

                                <nav aria-label="...">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div> <!-- end card body-->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Custom Icon Pagination</h4>
                                </div>

                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;nav&gt;
                                            &lt;ul class=&quot;pagination pagination-boxed&quot;&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;
                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;Previous&quot;&gt;
                                                        &lt;i class=&quot;ti ti-chevron-left&quot;&gt;&lt;/i&gt;
                                                    &lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;
                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;Next&quot;&gt;
                                                        &lt;i class=&quot;ti ti-chevron-right align-middle&quot;&gt;&lt;/i&gt;
                                                    &lt;/a&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/nav&gt;
                                
                                        &lt;nav&gt;
                                            &lt;ul class=&quot;pagination pagination-boxed&quot;&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;
                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;Previous&quot;&gt;
                                                        &lt;i data-lucide=&quot;arrow-left&quot;&gt;&lt;/i&gt;
                                                    &lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;
                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;Next&quot;&gt;
                                                        &lt;i data-lucide=&quot;arrow-right&quot;&gt;&lt;/i&gt;
                                                    &lt;/a&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/nav&gt;
                                    </code>  
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted fs-sm">Add icons like <code>&lt;i class="ti ti-chevron-**"&gt;&lt;/i&gt;</code> or SVGs inside <code>.page-link</code> for custom pagination arrows.</p>

                                <nav>
                                    <ul class="pagination pagination-boxed">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                <i class="ti ti-chevron-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="javascript: void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                <i class="ti ti-chevron-right align-middle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>

                                <nav>
                                    <ul class="pagination pagination-boxed mb-0">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                <i data-lucide="arrow-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                        <li class="page-item active"><a class="page-link" href="javascript: void(0);">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                <i data-lucide="arrow-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div> <!-- end card body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-6">
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
                                        &lt;nav&gt;
                                            &lt;ul class=&quot;pagination pagination-lg&quot;&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;
                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;Previous&quot;&gt;
                                                        &lt;span aria-hidden=&quot;true&quot;&gt;&amp;laquo;&lt;/span&gt;
                                                    &lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;
                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;Next&quot;&gt;
                                                        &lt;span aria-hidden=&quot;true&quot;&gt;&amp;raquo;&lt;/span&gt;
                                                    &lt;/a&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/nav&gt;
                               
                                        &lt;nav&gt;
                                            &lt;ul class=&quot;pagination pagination-sm mb-0&quot;&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;
                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;Previous&quot;&gt;
                                                        &lt;span aria-hidden=&quot;true&quot;&gt;&amp;laquo;&lt;/span&gt;
                                                    &lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;
                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;Next&quot;&gt;
                                                        &lt;span aria-hidden=&quot;true&quot;&gt;&amp;raquo;&lt;/span&gt;
                                                    &lt;/a&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/nav&gt;
                                    </code>        
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted fs-sm">Use <code>.pagination-lg</code> or <code>.pagination-sm</code> to change pagination size.</p>

                                <nav>
                                    <ul class="pagination pagination-lg">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>

                                <nav>
                                    <ul class="pagination pagination-sm mb-0">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div> <!-- end card body-->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Boxed Pagination</h4>
                                </div>

                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body" id="boxed-pagination-code">
                                <pre>
                                    <code class="language-markup">  
                                        &lt;ul class=&quot;pagination pagination-boxed&quot;&gt;
                                            &lt;li class=&quot;page-item&quot;&gt;
                                                &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;Previous&quot;&gt;
                                                    &lt;span aria-hidden=&quot;true&quot;&gt;&amp;laquo;&lt;/span&gt;
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
                                            &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
                                            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
                                            &lt;li class=&quot;page-item&quot;&gt;
                                                &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;Next&quot;&gt;
                                                    &lt;span aria-hidden=&quot;true&quot;&gt;&amp;raquo;&lt;/span&gt;
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                            
                                        &lt;ul class=&quot;pagination pagination-lg pagination-boxed&quot;&gt;
                                            &lt;li class=&quot;page-item&quot;&gt;
                                                &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;Previous&quot;&gt;
                                                    &lt;span aria-hidden=&quot;true&quot;&gt;&amp;laquo;&lt;/span&gt;
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
                                            &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
                                            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
                                            &lt;li class=&quot;page-item&quot;&gt;
                                                &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;Next&quot;&gt;
                                                    &lt;span aria-hidden=&quot;true&quot;&gt;&amp;raquo;&lt;/span&gt;
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                   
                                        &lt;ul class=&quot;pagination pagination-sm pagination-boxed mb-0&quot;&gt;
                                            &lt;li class=&quot;page-item&quot;&gt;
                                                &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;Previous&quot;&gt;
                                                    &lt;span aria-hidden=&quot;true&quot;&gt;&amp;laquo;&lt;/span&gt;
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
                                            &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
                                            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
                                            &lt;li class=&quot;page-item&quot;&gt;
                                                &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;Next&quot;&gt;
                                                    &lt;span aria-hidden=&quot;true&quot;&gt;&amp;raquo;&lt;/span&gt;
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                                    </code>        
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted fs-sm">Use <code>.pagination-boxed</code> with <code>.pagination</code> to give pagination items a boxed appearance.</p>

                                <nav>
                                    <ul class="pagination pagination-boxed">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                        <li class="page-item active"><a class="page-link" href="javascript: void(0);">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <ul class="pagination pagination-lg pagination-boxed">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                        <li class="page-item active"><a class="page-link" href="javascript: void(0);">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <ul class="pagination pagination-sm pagination-boxed mb-0">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                        <li class="page-item active"><a class="page-link" href="javascript: void(0);">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div> <!-- end preview code -->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Rounded Pagination</h4>
                                </div>

                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;nav&gt;
                                            &lt;ul class=&quot;pagination pagination-rounded pagination-boxed mb-0&quot;&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;
                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;Previous&quot;&gt;
                                                        &lt;span aria-hidden=&quot;true&quot;&gt;&amp;laquo;&lt;/span&gt;
                                                    &lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;
                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;Next&quot;&gt;
                                                        &lt;span aria-hidden=&quot;true&quot;&gt;&amp;raquo;&lt;/span&gt;
                                                    &lt;/a&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/nav&gt;
                                    </code>        
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted fs-sm">Use <code>.pagination-rounded</code> with <code>.pagination</code> to create rounded pagination links.</p>

                                <nav>
                                    <ul class="pagination pagination-rounded pagination-boxed mb-0">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                        <li class="page-item active"><a class="page-link" href="javascript: void(0);">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div> <!-- end card body-->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Soft Pagination</h4>
                                </div>

                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;nav&gt;
                                            &lt;ul class=&quot;pagination pagination-soft-danger pagination-boxed mb-0&quot;&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;
                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;Previous&quot;&gt;
                                                        &lt;i class=&quot;ti ti-chevron-left&quot;&gt;&lt;/i&gt;
                                                    &lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
                                                &lt;li class=&quot;page-item&quot;&gt;
                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;Next&quot;&gt;
                                                        &lt;i class=&quot;ti ti-chevron-right&quot;&gt;&lt;/i&gt;
                                                    &lt;/a&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/nav&gt;
                                    </code>        
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted fs-sm">Use <code>.pagination-soft-**</code> with <code>.pagination</code> for a soft-colored pagination style.</p>

                                <nav>
                                    <ul class="pagination pagination-soft-danger pagination-boxed mb-0">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                <i class="ti ti-chevron-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                        <li class="page-item active"><a class="page-link" href="javascript: void(0);">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                <i class="ti ti-chevron-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div> <!-- end card body-->
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