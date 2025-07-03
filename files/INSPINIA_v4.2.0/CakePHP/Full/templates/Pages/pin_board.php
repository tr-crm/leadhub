<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Pin Board']) ?>

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

                <?= $this->element('page_title', ['subtitle' => 'Apps', 'title' => 'Pin Board']) ?>

                <div class="row">
                    <div class="col-12">
                        <div class="card bg-transparent">
                            <div class="card-header justify-content-between">
                                <h5 class="card-title">Manage Your Notes</h5>
                                <a href="#!" class="btn btn-success rounded-pill">Add New</a>
                            </div> <!-- end card-header-->

                            <div class="card-body">

                                <div class="pin-board d-flex flex-wrap">

                                    <div class="pin-board-item bg-primary-subtle" id="pin-1">
                                        <p class="text-end fs-10">14:22:07 08-04-2025</p>
                                        <h4 class="fs-md">Client feedback summary</h4>
                                        <p>Positive response on UI, requested dark mode toggle and faster load times.</p>
                                        <a href="#" class="pin-board-delete fs-lg" data-dismissible="#pin-1"><i class="ti ti-trash"></i></a>
                                    </div>

                                    <div class="pin-board-item bg-danger-subtle" id="pin-2">
                                        <p class="text-end fs-10">17:09:33 05-04-2025</p>
                                        <h4 class="fs-md">Blog content ideas</h4>
                                        <p>Write about upcoming trends in web design and practical CSS tips.</p>
                                        <a href="#" class="pin-board-delete fs-lg" data-dismissible="#pin-2"><i class="ti ti-trash"></i></a>
                                    </div>

                                    <div class="pin-board-item bg-warning-subtle" id="pin-3">
                                        <p class="text-end fs-10">10:55:10 02-04-2025</p>
                                        <h4 class="fs-md">Code optimization checklist</h4>
                                        <p>Refactor JS functions, minimize DOM manipulation, and lazy load .</p>
                                        <a href="#" class="pin-board-delete fs-lg" data-dismissible="#pin-3"><i class="ti ti-trash"></i></a>
                                    </div>

                                    <div class="pin-board-item bg-info-subtle" id="pin-4">
                                        <p class="text-end fs-10">09:30:44 30-03-2025</p>
                                        <h4 class="fs-md">Newsletter draft</h4>
                                        <p>Focus on April's product update, new feature highlights, and tutorials.</p>
                                        <a href="#" class="pin-board-delete fs-lg" data-dismissible="#pin-4"><i class="ti ti-trash"></i></a>
                                    </div>

                                    <div class="pin-board-item bg-dark-subtle" id="pin-5">
                                        <p class="text-end fs-10">16:47:25 28-03-2025</p>
                                        <h4 class="fs-md">Bug report log</h4>
                                        <p>Users reporting login timeout issues on mobile—investigate session handling.</p>
                                        <a href="#" class="pin-board-delete fs-lg" data-dismissible="#pin-5"><i class="ti ti-trash"></i></a>
                                    </div>

                                    <div class="pin-board-item bg-light-subtle" id="pin-6">
                                        <p class="text-end fs-10">11:18:03 26-03-2025</p>
                                        <h4 class="fs-md">Design review notes</h4>
                                        <p>Refine hero section spacing and use softer gradients for cards background.</p>
                                        <a href="#" class="pin-board-delete fs-lg" data-dismissible="#pin-6"><i class="ti ti-trash"></i></a>
                                    </div>

                                    <div class="pin-board-item bg-purple-subtle" id="pin-7">
                                        <p class="text-end fs-10">11:18:03 26-03-2025</p>
                                        <h4 class="fs-md">Design review notes</h4>
                                        <p>Refine hero section spacing and use softer gradients for cards background.</p>
                                        <a href="#" class="pin-board-delete fs-lg" data-dismissible="#pin-7"><i class="ti ti-trash"></i></a>
                                    </div>

                                    <div class="pin-board-item bg-success-subtle" id="pin-8">
                                        <p class="text-end fs-10">08:45:12 10-04-2025</p>
                                        <h4 class="fs-md">Team meeting recap</h4>
                                        <p>Discussed key milestones, delegated tasks, and set deadlines for the next sprint.</p>
                                        <a href="#" class="pin-board-delete fs-lg" data-dismissible="#pin-8"><i class="ti ti-trash"></i></a>
                                    </div>

                                </div>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row-->

            </div>
            <!-- container -->

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