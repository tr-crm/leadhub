<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Embed Videos']) ?>

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
                <?= $this->element('page_title', ['subtitle' => 'UI', 'title' => 'Videos']) ?>
            </div>
            <!-- container -->

            <div class="container-xl">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Embed Videos</h4>
                            </div>

                            <div class="card-body">
                                <p class="text-muted mb-2">
                                    Use generated pseudo elements to make an element maintain the aspect ratio of your choosing. Perfect for responsively handling video or slideshow embeds based on the width of the parent.
                                </p>

                                <a class="btn btn-link p-0 fw-semibold" href="https://getbootstrap.com/docs/5.3/helpers/ratio/" target="_blank">
                                    Ratios on Bootstrap
                                    <i class="ti ti-chevron-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Responsive embed video 21:9</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                                </div>
                            </div>
                            <div class="code-body">
                                <pre class="language-markup">
                                    <code class="language-markup">
                                        &lt;div class=&quot;ratio ratio-21x9&quot;&gt;
                                            &lt;iframe src=&quot;https://www.youtube.com/embed/PrUxWZiQfy4?autohide=0&amp;showinfo=0&amp;controls=0&quot;&gt;&lt;/iframe&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->
                            <div class="card-body">
                                <!-- 21:9 aspect ratio -->
                                <div class="ratio ratio-21x9">
                                    <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"></iframe>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Responsive embed video 1:1</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                                </div>
                            </div>
                            <div class="code-body">
                                <pre class="language-markup">
                                    <code class="language-markup">
                                        &lt;div class=&quot;ratio ratio-1x1&quot;&gt;
                                            &lt;iframe src=&quot;https://www.youtube.com/embed/PrUxWZiQfy4?autohide=0&amp;showinfo=0&amp;controls=0&quot;&gt;&lt;/iframe&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->
                            <div class="card-body">
                                <!-- 21:9 aspect ratio -->
                                <div class="ratio ratio-1x1">
                                    <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"></iframe>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Responsive embed video 16:9</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                                </div>
                            </div>
                            <div class="code-body">
                                <pre class="language-markup">
                                    <code class="language-markup">
                                        &lt;div class=&quot;ratio ratio-16x9&quot;&gt;
                                            &lt;iframe src=&quot;https://www.youtube.com/embed/PrUxWZiQfy4?autohide=0&amp;showinfo=0&amp;controls=0&quot;&gt;&lt;/iframe&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->
                            <div class="card-body">
                                <!-- 21:9 aspect ratio -->
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"></iframe>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Responsive embed video 4:3</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                                </div>
                            </div>
                            <div class="code-body" id="embed-1-code">
                                <pre class="language-markup">
                                    <code class="language-markup">
                                        &lt;div class=&quot;ratio ratio-4x3&quot;&gt;
                                            &lt;iframe src=&quot;https://www.youtube.com/embed/PrUxWZiQfy4?autohide=0&amp;showinfo=0&amp;controls=0&quot;&gt;&lt;/iframe&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->
                            <div class="card-body">
                                <!-- 21:9 aspect ratio -->
                                <div class="ratio ratio-4x3">
                                    <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"></iframe>
                                </div>
                            </div> <!-- end card-body-->
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