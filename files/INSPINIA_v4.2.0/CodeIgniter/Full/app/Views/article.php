<?= $this->include('./partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Blog Article")) ?>

    <?= $this->include('./partials/head-css') ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?= $this->include('./partials/menu') ?>

        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->

        <div class="content-page">

            <div class="container-fluid">
                
                <?php echo view("./partials/page-title", array("subtitle" => "Apps", "title" => "Article")) ?>

                <div class="row justify-content-center">
                    <div class="col-xxl-10">
                        <div class="card">
                            <div class="card-body p-lg-5">
                
                                <div class="row g-5">
                                    <!-- Main content START -->
                                    <div class="col-lg-8">
                                        <!-- Title -->
                                        <h1 class="h3 mb-0">Mastering the Art of Focus: Tools & Strategies for Deep Work</h1>
                                    
                                        <!-- Action -->
                                        <p class="d-flex flex-wrap gap-3 text-muted mb-0 mt-3 align-items-center fs-base">
                                            <span class="badge text-bg-dark badge-label">Productivity</span>
                                            <span><i class="ti ti-calendar fs-md"></i> Mar 18, 2025</span>
                                            <span><i class="ti ti-message-circle fs-md"></i> <a href="#!" class="link-reset">42</a></span>
                                            <span><i class="ti ti-eye fs-md"></i> 982</span>
                                        </p>
                                    
                                        <!-- Image -->
                                        <img src="/images/blog/blog-post.jpg" class="img-fluid rounded mt-4" alt="blog-img">
                                    
                                        <div class="fs-md">
                                            <!-- Content -->
                                            <p class="mt-4">In a world full of constant notifications and distractions, developing the ability to focus has become a superpower. This article dives into proven methods for cultivating deep work and staying productive in a digital age.</p>
                                            <p>Eliminating distractions and building a workflow that encourages uninterrupted focus can drastically improve your efficiency. Whether you're coding, writing, or designing — deep work leads to higher quality output and greater satisfaction.</p>
                                            <p>Some effective strategies include time-blocking your calendar, using tools like Pomodoro timers, and creating a distraction-free workspace. Even just 90 minutes of intentional, focused work per day can compound into massive progress over time.</p>
                                            <p class="mb-0">By embracing stillness and training your attention, <mark>you’ll uncover a new level of clarity and creativity</mark> that transforms how you work and what you’re capable of achieving.</p>
                                        </div>
                                    
                                        <!-- Helpful box -->
                                        <div class="bg-light-subtle border border-light rounded d-md-flex justify-content-between align-items-center text-center p-3 mt-5">
                                            <!-- Title -->
                                            <h5 class="mb-0">Was this article helpful?</h5>
                                            <p class="py-3 p-md-0 mb-0"><b>41</b> out of <b>72</b> found this helpful</p>
                                            <!-- Check buttons -->
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                <!-- Yes button -->
                                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1">
                                                <label class="btn btn-soft-success btn-sm mb-0" for="btnradio1"><i class="ti ti-thumb-up me-1"></i> Yes</label>
                                                <!-- No button -->
                                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                                <label class="btn btn-soft-danger btn-sm mb-0" for="btnradio2"> No <i class="ti ti-thumb-down ms-1"></i></label>
                                            </div>
                                        </div>
                                    
                                        <div class="d-flex align-items-center gap-4 border mt-4 border-dashed p-4 rounded mb-14">
                                            <div class="text-center flex-shrink-0 me-7 me-lg-13">
                                                <div class="mb-2">
                                                    <img src="/images/users/user-1.jpg" class="avatar-xl rounded-circle" alt=""> 
                                                </div>
                                                <div class="mb-0">
                                                    <a href="#!" class="fw-bold fs-sm">Nathan Brooks</a>
                                                    <span class="text-muted fs-6 fw-semibold d-block mt-1">Productivity Coach</span>                   
                                                </div>                
                                            </div>
                                            <div class="mb-0"> 
                                                <div class="text-muted fw-medium lh-base mb-2">
                                                    Nathan is passionate about helping creators, developers, and entrepreneurs reclaim their time and do meaningful work. He writes regularly about mindful productivity and digital wellness.
                                                </div>
                                    
                                                <a href="#!" class="fw-semibold link-primary">Author’s Profile</a>              
                                            </div>
                                        </div>

                                        <div class="my-4 text-center">
                                            <h5 class="mb-3 text-uppercase fw-bold">Share This:</h5>

                                            <div class="d-flex justify-content-center gap-2">
                                                <a href="#!" class="btn btn-icon rounded-circle btn-purple" title="Facebook">
                                                    <i data-lucide="facebook" class="fs-xl"></i>
                                                </a>
                                                <a href="#!" class="btn btn-icon rounded-circle btn-info" title="Twitter-x">
                                                    <i class="ti ti-brand-x fs-xl"></i>
                                                </a>
                                                <a href="#!" class="btn btn-icon rounded-circle btn-danger" title="Instagram">
                                                    <i data-lucide="instagram" class="fs-xl"></i>
                                                </a>
                                                <a href="#!" class="btn btn-icon rounded-circle btn-success" title="WhatsApp">
                                                    <i data-lucide="dribbble" class="fs-xl"></i>
                                                </a>
                                                <a href="#!" class="btn btn-icon rounded-circle btn-secondary" title="LinkedIn">
                                                    <i data-lucide="linkedin" class="fs-xl"></i>
                                                </a>
                                                <a href="#!" class="btn btn-icon rounded-circle btn-danger" title="YouTube">
                                                    <i data-lucide="youtube" class="fs-xl"></i>
                                                </a>                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Main content END -->
                        
                                    <!-- Sidebar START -->
                                    <div class="col-lg-4">

                                        <h5 class="mb-3 text-uppercase fw-bold">Search</h5>

                                        <div class="app-search">
                                            <input type="text" class="form-control bg-light-subtle border-light" placeholder="Search post...">
                                            <i data-lucide="search" class="app-search-icon text-muted"></i>
                                        </div> 
                                        
                                        <!-- Related post -->
                                        <div class="align-items-center mt-5">
                                            <h5 class="mb-3 text-uppercase fw-bold">Related post:</h5>
                        
                                            <ul class="list-group list-group-flush fs-sm">
                                                <li class="list-group-item ps-0"><a href="#" class="link-reset fw-medium">Unlocking the Secrets of Modern UI Design</a></li>
                                                <li class="list-group-item ps-0"><a href="#" class="link-reset fw-medium">How to Build a Portfolio with Tailwind CSS</a></li>
                                                <li class="list-group-item ps-0"><a href="#" class="link-reset fw-medium">Boost Productivity with These Web Dev Tools</a></li>
                                                <li class="list-group-item ps-0"><a href="#" class="link-reset fw-medium">The Future of Frontend: Trends to Watch in 2025</a></li>
                                                <li class="list-group-item ps-0"><a href="#" class="link-reset fw-medium">Essential Tips for Clean and Maintainable Code</a></li>
                                            </ul>
                                            
                                        </div>
                        
                                        <!-- Popular tags -->
                                        <div class="align-items-center mt-5">
                                            <h5 class="mb-3 text-uppercase fw-bold">Popular Tags:</h5>
                                            <div class="d-flex flex-wrap gap-1">
                                                <a class="btn btn-light btn-sm" href="#">Web Design</a>
                                                <a class="btn btn-light btn-sm" href="#">Frontend</a>
                                                <a class="btn btn-light btn-sm" href="#">Tailwind CSS</a>
                                                <a class="btn btn-light btn-sm" href="#">JavaScript</a>
                                                <a class="btn btn-light btn-sm" href="#">React</a>
                                                <a class="btn btn-light btn-sm" href="#">Startup</a>
                                                <a class="btn btn-light btn-sm" href="#">DevTools</a>
                                                <a class="btn btn-light btn-sm" href="#">Open Source</a>
                                                <a class="btn btn-light btn-sm" href="#">Performance</a>
                                                <a class="btn btn-light btn-sm" href="#">UX/UI</a>
                                                <a class="btn btn-light btn-sm" href="#">SEO</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row-->

            </div>
            <!-- container -->

            <?= $this->include('./partials/footer') ?>

        </div>
        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    <?= $this->include('./partials/customizer') ?>

    <?= $this->include('./partials/footer-scripts') ?>

</body>

</html>