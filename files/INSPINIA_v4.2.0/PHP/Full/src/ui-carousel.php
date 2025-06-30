<?php include 'partials/html.php' ?>

<head>
    <?php $title = "Carousel"; include 'partials/title-meta.php' ?>

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
                <?php $subtitle = "UI"; $title = "Carousel"; include 'partials/page-title.php';?>
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
                                    A slideshow component for cycling through elements—images or slides of text—like a carousel.
                                </p>

                                <a class="btn btn-link p-0 fw-semibold" href="https://getbootstrap.com/docs/5.3/components/carousel/" target="_blank">
                                    Carousel on Bootstrap
                                    <i class="ti ti-chevron-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Slides Only</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;div id=&quot;carouselExampleSlidesOnly&quot; class=&quot;carousel slide&quot; data-bs-ride=&quot;carousel&quot;&gt;
                                            &lt;div class=&quot;carousel-inner&quot; role=&quot;listbox&quot;&gt;
                                                &lt;div class=&quot;carousel-item active&quot;&gt;
                                                    &lt;!-- First slide --&gt;
                                                    &lt;img class=&quot;d-block img-fluid&quot; src=&quot;assets/images/stock/small-1.jpg&quot; alt=&quot;First slide&quot;&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;carousel-item&quot;&gt;
                                                    &lt;!-- Second slide --&gt;
                                                    &lt;img class=&quot;d-block img-fluid&quot; src=&quot;assets/images/stock/small-2.jpg&quot; alt=&quot;Second slide&quot;&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;carousel-item&quot;&gt;
                                                    &lt;!-- Third slide --&gt;
                                                    &lt;img class=&quot;d-block img-fluid&quot; src=&quot;assets/images/stock/small-3.jpg&quot; alt=&quot;Third slide&quot;&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>    
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <!-- First slide -->
                                            <img class="d-block img-fluid" src="assets/images/stock/small-1.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <!-- Second slide -->
                                            <img class="d-block img-fluid" src="assets/images/stock/small-2.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <!-- Third slide -->
                                            <img class="d-block img-fluid" src="assets/images/stock/small-3.jpg" alt="Third slide">
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card body -->
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">With Controls</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body" id="with-controls-code">
                                <pre>
                                    <code class="language-markup">
                                        &lt;div id=&quot;carouselExampleControls&quot; class=&quot;carousel slide&quot; data-bs-ride=&quot;carousel&quot;&gt;
                                            &lt;div class=&quot;carousel-inner&quot; role=&quot;listbox&quot;&gt;
                                                &lt;div class=&quot;carousel-item active&quot;&gt;
                                                    &lt;!-- First slide --&gt;
                                                    &lt;img class=&quot;d-block img-fluid&quot; src=&quot;assets/images/stock/small-4.jpg&quot; alt=&quot;First slide&quot;&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;carousel-item&quot;&gt;
                                                    &lt;!-- Second slide --&gt;
                                                    &lt;img class=&quot;d-block img-fluid&quot; src=&quot;assets/images/stock/small-1.jpg&quot; alt=&quot;Second slide&quot;&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;carousel-item&quot;&gt;
                                                    &lt;!-- Third slide --&gt;
                                                    &lt;img class=&quot;d-block img-fluid&quot; src=&quot;assets/images/stock/small-2.jpg&quot; alt=&quot;Third slide&quot;&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleControls&quot; role=&quot;button&quot; data-bs-slide=&quot;prev&quot;&gt;
                                                &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;visually-hidden&quot;&gt;Previous&lt;/span&gt;
                                            &lt;/a&gt;
                                            &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleControls&quot; role=&quot;button&quot; data-bs-slide=&quot;next&quot;&gt;
                                                &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;visually-hidden&quot;&gt;Next&lt;/span&gt;
                                            &lt;/a&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <!-- START carousel-->
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <!-- First slide -->
                                            <img class="d-block img-fluid" src="assets/images/stock/small-4.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <!-- Second slide -->
                                            <img class="d-block img-fluid" src="assets/images/stock/small-1.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <!-- Third slide -->
                                            <img class="d-block img-fluid" src="assets/images/stock/small-2.jpg" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                            </div> <!-- end card body -->
                        </div>
                        <!-- END carousel-->
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">With Indicators</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;div id=&quot;carouselExampleIndicators&quot; class=&quot;carousel slide&quot; data-bs-ride=&quot;carousel&quot;&gt;
                                            &lt;ol class=&quot;carousel-indicators&quot;&gt;
                                                &lt;li data-bs-target=&quot;#carouselExampleIndicators&quot; data-bs-slide-to=&quot;0&quot; class=&quot;active&quot;&gt;&lt;/li&gt;
                                                &lt;li data-bs-target=&quot;#carouselExampleIndicators&quot; data-bs-slide-to=&quot;1&quot;&gt;&lt;/li&gt;
                                                &lt;li data-bs-target=&quot;#carouselExampleIndicators&quot; data-bs-slide-to=&quot;2&quot;&gt;&lt;/li&gt;
                                            &lt;/ol&gt;
                                            &lt;div class=&quot;carousel-inner&quot; role=&quot;listbox&quot;&gt;
                                                &lt;div class=&quot;carousel-item active&quot;&gt;
                                                    &lt;!-- First slide --&gt;
                                                    &lt;img class=&quot;d-block img-fluid&quot; src=&quot;assets/images/stock/small-3.jpg&quot; alt=&quot;First slide&quot;&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;carousel-item&quot;&gt;
                                                    &lt;!-- Second slide --&gt;
                                                    &lt;img class=&quot;d-block img-fluid&quot; src=&quot;assets/images/stock/small-2.jpg&quot; alt=&quot;Second slide&quot;&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;carousel-item&quot;&gt;
                                                    &lt;!-- Third slide --&gt;
                                                    &lt;img class=&quot;d-block img-fluid&quot; src=&quot;assets/images/stock/small-1.jpg&quot; alt=&quot;Third slide&quot;&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleIndicators&quot; role=&quot;button&quot; data-bs-slide=&quot;prev&quot;&gt;
                                                &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;visually-hidden&quot;&gt;Previous&lt;/span&gt;
                                            &lt;/a&gt;
                                            &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleIndicators&quot; role=&quot;button&quot; data-bs-slide=&quot;next&quot;&gt;
                                                &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;visually-hidden&quot;&gt;Next&lt;/span&gt;
                                            &lt;/a&gt;
                                        &lt;/div&gt;
                                    </code>           
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                      </div>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <!-- First slide -->
                                            <img class="d-block img-fluid" src="assets/images/stock/small-3.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <!-- Second slide -->
                                            <img class="d-block img-fluid" src="assets/images/stock/small-2.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <!-- Third slide -->
                                            <img class="d-block img-fluid" src="assets/images/stock/small-1.jpg" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                            </div> <!-- end card body -->
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">With Captions</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body" id="with-captions-code">
                                <pre>
                                    <code class="language-markup">
                                        &lt;div id=&quot;carouselExampleCaption&quot; class=&quot;carousel slide&quot; data-bs-ride=&quot;carousel&quot;&gt;
                                            &lt;div class=&quot;carousel-inner&quot; role=&quot;listbox&quot;&gt;
                                                &lt;div class=&quot;carousel-item active&quot;&gt;
                                                    &lt;!-- first slide  --&gt;
                                                    &lt;img src=&quot;assets/images/stock/small-1.jpg&quot; alt=&quot;...&quot; class=&quot;d-block img-fluid&quot;&gt;
                                                    &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                                                        &lt;h3 class=&quot;text-white&quot;&gt;First slide label&lt;/h3&gt;
                                                        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/p&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;carousel-item&quot;&gt;
                                                    &lt;!-- secound slide  --&gt;
                                                    &lt;img src=&quot;assets/images/stock/small-3.jpg&quot; alt=&quot;...&quot; class=&quot;d-block img-fluid&quot;&gt;
                                                    &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                                                        &lt;h3 class=&quot;text-white&quot;&gt;Second slide label&lt;/h3&gt;
                                                        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/p&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;carousel-item&quot;&gt;
                                                    &lt;!-- third slide  --&gt;
                                                    &lt;img src=&quot;assets/images/stock/small-2.jpg&quot; alt=&quot;...&quot; class=&quot;d-block img-fluid&quot;&gt;
                                                    &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                                                        &lt;h3 class=&quot;text-white&quot;&gt;Third slide label&lt;/h3&gt;
                                                        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/p&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleCaption&quot; role=&quot;button&quot; data-bs-slide=&quot;prev&quot;&gt;
                                                &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;visually-hidden&quot;&gt;Previous&lt;/span&gt;
                                            &lt;/a&gt;
                                            &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleCaption&quot; role=&quot;button&quot; data-bs-slide=&quot;next&quot;&gt;
                                                &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;visually-hidden&quot;&gt;Next&lt;/span&gt;
                                            &lt;/a&gt;
                                        &lt;/div&gt;
                                    </code>            
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <div id="carouselExampleCaption" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <!-- first slide  -->
                                            <img src="assets/images/stock/small-1.jpg" alt="..." class="d-block img-fluid">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h3 class="text-white">First slide label</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <!-- secound slide  -->
                                            <img src="assets/images/stock/small-3.jpg" alt="..." class="d-block img-fluid">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h3 class="text-white">Second slide label</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <!-- third slide  -->
                                            <img src="assets/images/stock/small-2.jpg" alt="..." class="d-block img-fluid">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h3 class="text-white">Third slide label</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleCaption" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleCaption" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                            </div> <!-- end card body -->
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Crossfade</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;div id=&quot;carouselExampleFade&quot; class=&quot;carousel slide carousel-fade&quot; data-bs-ride=&quot;carousel&quot;&gt;
                                            &lt;div class=&quot;carousel-inner&quot;&gt;
                                                &lt;div class=&quot;carousel-item active&quot;&gt;
                                                    &lt;!-- First slide --&gt;
                                                    &lt;img class=&quot;d-block img-fluid&quot; src=&quot;assets/images/stock/small-1.jpg&quot; alt=&quot;First slide&quot;&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;carousel-item&quot;&gt;
                                                    &lt;!-- Second slide --&gt;
                                                    &lt;img class=&quot;d-block img-fluid&quot; src=&quot;assets/images/stock/small-2.jpg&quot; alt=&quot;Second slide&quot;&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;carousel-item&quot;&gt;
                                                    &lt;!-- Third slide --&gt;
                                                    &lt;img class=&quot;d-block img-fluid&quot; src=&quot;assets/images/stock/small-3.jpg&quot; alt=&quot;Third slide&quot;&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleFade&quot; role=&quot;button&quot; data-bs-slide=&quot;prev&quot;&gt;
                                                &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;visually-hidden&quot;&gt;Previous&lt;/span&gt;
                                            &lt;/a&gt;
                                            &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleFade&quot; role=&quot;button&quot; data-bs-slide=&quot;next&quot;&gt;
                                                &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;visually-hidden&quot;&gt;Next&lt;/span&gt;
                                            &lt;/a&gt;
                                        &lt;/div&gt;
                                    </code>            
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code  -->

                            <div class="card-body">
                                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <!-- First slide -->
                                            <img class="d-block img-fluid" src="assets/images/stock/small-1.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <!-- Second slide -->
                                            <img class="d-block img-fluid" src="assets/images/stock/small-2.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <!-- Third slide -->
                                            <img class="d-block img-fluid" src="assets/images/stock/small-3.jpg" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                            </div> <!-- end card body -->
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Individual Interval</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;div id=&quot;carouselExampleInterval&quot; class=&quot;carousel slide&quot; data-bs-ride=&quot;carousel&quot;&gt;
                                            &lt;div class=&quot;carousel-inner&quot;&gt;
                                                &lt;div class=&quot;carousel-item active&quot; data-bs-interval=&quot;1000&quot;&gt;
                                                    &lt;!-- First slide --&gt;
                                                    &lt;img src=&quot;assets/images/stock/small-4.jpg&quot; class=&quot;img-fluid d-block w-100&quot; alt=&quot;First slide&quot;&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;carousel-item&quot; data-bs-interval=&quot;2000&quot;&gt;
                                                    &lt;!-- Second slide --&gt;
                                                    &lt;img src=&quot;assets/images/stock/small-2.jpg&quot; class=&quot;img-fluid d-block w-100&quot; alt=&quot;Second slide&quot;&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;carousel-item&quot;&gt;
                                                    &lt;!-- Third slide --&gt;
                                                    &lt;img src=&quot;assets/images/stock/small-1.jpg&quot; class=&quot;img-fluid d-block w-100&quot; alt=&quot;Third slide&quot;&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleInterval&quot; role=&quot;button&quot; data-bs-slide=&quot;prev&quot;&gt;
                                                &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;visually-hidden&quot;&gt;Previous&lt;/span&gt;
                                            &lt;/a&gt;
                                            &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleInterval&quot; role=&quot;button&quot; data-bs-slide=&quot;next&quot;&gt;
                                                &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;visually-hidden&quot;&gt;Next&lt;/span&gt;
                                            &lt;/a&gt;
                                        &lt;/div&gt;
                                    </code>            
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code  -->

                            <div class="card-body">
                                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="1000">
                                            <!-- First slide -->
                                            <img src="assets/images/stock/small-4.jpg" class="img-fluid d-block w-100" alt="First slide">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <!-- Second slide -->
                                            <img src="assets/images/stock/small-2.jpg" class="img-fluid d-block w-100" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <!-- Third slide -->
                                            <img src="assets/images/stock/small-1.jpg" class="img-fluid d-block w-100" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                            </div> <!-- end card body -->
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Dark Variant</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;div id=&quot;carouselExampleDark&quot; class=&quot;carousel carousel-dark slide&quot;&gt;
                                            &lt;div class=&quot;carousel-indicators&quot;&gt;
                                                &lt;button type=&quot;button&quot; data-bs-target=&quot;#carouselExampleDark&quot; data-bs-slide-to=&quot;0&quot; class=&quot;active&quot; aria-current=&quot;true&quot; aria-label=&quot;Slide 1&quot;&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; data-bs-target=&quot;#carouselExampleDark&quot; data-bs-slide-to=&quot;1&quot; aria-label=&quot;Slide 2&quot;&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; data-bs-target=&quot;#carouselExampleDark&quot; data-bs-slide-to=&quot;2&quot; aria-label=&quot;Slide 3&quot;&gt;&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;carousel-inner&quot;&gt;
                                                &lt;div class=&quot;carousel-item active&quot; data-bs-interval=&quot;10000&quot;&gt;
                                                    &lt;!-- first slide  --&gt;
                                                    &lt;img src=&quot;assets/images/stock/small-8.jpg&quot; class=&quot;img-fluid&quot; alt=&quot;Images&quot;&gt;
                                                    &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                                                        &lt;h4 class=&quot;fw-bold&quot;&gt;First slide label&lt;/h4&gt;
                                                        &lt;p&gt;Some representative placeholder content for the first slide.&lt;/p&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;carousel-item&quot; data-bs-interval=&quot;2000&quot;&gt;
                                                    &lt;!-- secound slide  --&gt;
                                                    &lt;img src=&quot;assets/images/stock/small-9.jpg&quot; class=&quot;img-fluid&quot; alt=&quot;Images&quot;&gt;
                                                    &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                                                        &lt;h4 class=&quot;fw-bold&quot;&gt;Second slide label&lt;/h4&gt;
                                                        &lt;p&gt;Some representative placeholder content for the second slide.&lt;/p&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;carousel-item&quot;&gt;
                                                    &lt;!-- third slide  --&gt;
                                                    &lt;img src=&quot;assets/images/stock/small-10.jpg&quot; class=&quot;img-fluid&quot; alt=&quot;Images&quot;&gt;
                                                    &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                                                        &lt;h4 class=&quot;fw-bold&quot;&gt;Third slide label&lt;/h4&gt;
                                                        &lt;p&gt;Some representative placeholder content for the third slide.&lt;/p&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;button class=&quot;carousel-control-prev&quot; type=&quot;button&quot; data-bs-target=&quot;#carouselExampleDark&quot; data-bs-slide=&quot;prev&quot;&gt;
                                                &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;visually-hidden&quot;&gt;Previous&lt;/span&gt;
                                            &lt;/button&gt;
                                            &lt;button class=&quot;carousel-control-next&quot; type=&quot;button&quot; data-bs-target=&quot;#carouselExampleDark&quot; data-bs-slide=&quot;next&quot;&gt;
                                                &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;visually-hidden&quot;&gt;Next&lt;/span&gt;
                                            &lt;/button&gt;
                                        &lt;/div&gt;
                                    </code>            
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <div id="carouselExampleDark" class="carousel carousel-dark slide">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="10000">
                                            <!-- first slide  -->
                                            <img src="assets/images/stock/small-8.jpg" class="img-fluid" alt="Images">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h4 class="fw-bold">First slide label</h4>
                                                <p>Some representative placeholder content for the first slide.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <!-- secound slide  -->
                                            <img src="assets/images/stock/small-9.jpg" class="img-fluid" alt="Images">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h4 class="fw-bold">Second slide label</h4>
                                                <p>Some representative placeholder content for the second slide.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <!-- third slide  -->
                                            <img src="assets/images/stock/small-10.jpg" class="img-fluid" alt="Images">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h4 class="fw-bold">Third slide label</h4>
                                                <p>Some representative placeholder content for the third slide.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div> <!-- end card body -->
                        </div>
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