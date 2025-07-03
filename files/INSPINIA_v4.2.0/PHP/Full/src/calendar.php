<?php include 'partials/html.php' ?>

<head>
    <?php $title = "Calendar"; include 'partials/title-meta.php' ?>

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
                
                <?php $subtitle = "Apps"; $title = "Calendar"; include 'partials/page-title.php';?>

                <div class="outlook-box">
                    <div class="card h-100 mb-0 d-none d-lg-flex rounded-end-0">
                        <div class="card-body">
                            <button class="btn btn-primary w-100 btn-new-event">
                                <i class="ti ti-plus me-2 align-middle"></i>
                                Create New Event
                            </button>

                            <div id="external-events">
                                <p class="text-muted mt-2 fst-italic fs-xs mb-3">Drag and drop your event or click in the calendar</p>
                                <div class="external-event fc-event bg-primary-subtle text-primary border-start border-3 border-primary fw-semibold" data-class="bg-primary-subtle text-primary border-start border-3 border-primary">
                                    <i class="ti ti-circle-filled me-2"></i>Project Kickoff
                                </div>
                                <div class="external-event fc-event bg-secondary-subtle text-secondary border-start border-3 border-secondary fw-semibold" data-class="bg-secondary-subtle text-secondary border-start border-3 border-secondary">
                                    <i class="ti ti-circle-filled me-2"></i>Team Sync-up
                                </div>
                                <div class="external-event fc-event bg-success-subtle text-success border-start border-3 border-success fw-semibold" data-class="bg-success-subtle text-success border-start border-3 border-success">
                                    <i class="ti ti-circle-filled me-2"></i>Client Meeting
                                </div>
                                <div class="external-event fc-event bg-danger-subtle text-danger border-start border-3 border-danger fw-semibold" data-class="bg-danger-subtle text-danger border-start border-3 border-danger">
                                    <i class="ti ti-circle-filled me-2"></i>Product Launch
                                </div>
                                <div class="external-event fc-event bg-info-subtle text-info border-start border-3 border-info fw-semibold" data-class="bg-info-subtle text-info border-start border-3 border-info">
                                    <i class="ti ti-circle-filled me-2"></i>Internal Review
                                </div>
                                <div class="external-event fc-event bg-warning-subtle text-warning border-start border-3 border-warning fw-semibold" data-class="bg-warning-subtle text-warning border-start border-3 border-warning">
                                    <i class="ti ti-circle-filled me-2"></i>Quarterly Planning
                                </div>
                                <div class="external-event fc-event bg-dark-subtle text-dark border-start border-3 border-dark fw-semibold" data-class="bg-dark-subtle text-dark border-start border-3 border-dark">
                                    <i class="ti ti-circle-filled me-2"></i>Year-End Celebration
                                </div>
                                <div class="external-event fc-event bg-purple-subtle text-purple border-start border-3 border-purple fw-semibold" data-class="bg-purple-subtle text-purple border-start border-3 border-purple">
                                    <i class="ti ti-circle-filled me-2"></i>Annual Conference
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-->

                    <div class="card h-100 mb-0 rounded-start-0 flex-grow-1 border-start-0">
                        <div class="d-lg-none d-inline-flex card-header">
                            <button class="btn btn-primary btn-new-event">
                                <i class="ti ti-plus me-2 align-middle"></i>
                                Create New Event
                            </button>
                        </div>

                        <div class="card-body" style="height: calc(100% - 350px);" data-simplebar data-simplebar-md>
                            <div id="calendar"></div>
                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div> <!-- end row-->

                <!-- Modal Add/Edit -->
                <div class="modal fade" id="event-modal" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form class="needs-validation" name="event-form" id="forms-event" novalidate>
                                <div class="modal-header">
                                    <h4 class="modal-title" id="modal-title">
                                        Create Event
                                    </h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="control-label form-label" for="event-title">Event Name</label>
                                                <input class="form-control" placeholder="Insert Event Name" type="text" name="title" id="event-title" required>
                                                <div class="invalid-feedback">Please provide a valid event name</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="control-label form-label" for="event-category">Category</label>
                                                <select class="form-select" name="category" id="event-category" required>
                                                    <option value="" disabled>Select a category</option>
                                                    <option value="bg-primary-subtle text-primary border-start border-3 border-primary" selected>Primary</option>
                                                    <option value="bg-secondary-subtle text-secondary border-start border-3 border-secondary">Secondary</option>
                                                    <option value="bg-success-subtle text-success border-start border-3 border-success">Success</option>
                                                    <option value="bg-info-subtle text-info border-start border-3 border-info">Info</option>
                                                    <option value="bg-warning-subtle text-warning border-start border-3 border-warning">Warning</option>
                                                    <option value="bg-danger-subtle text-danger border-start border-3 border-danger">Danger</option>
                                                    <option value="bg-dark-subtle text-dark border-start border-3 border-dark">Dark</option>
                                                    <option value="bg-purple-subtle text-purple border-start border-3 border-purple">Purple</option>
                                                </select>

                                                <div class="invalid-feedback">Please select a valid event category</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-wrap align-items-center gap-2">
                                        <button type="button" class="btn btn-danger" id="btn-delete-event">
                                            Delete
                                        </button>

                                        <button type="button" class="btn btn-light ms-auto" data-bs-dismiss="modal">
                                            Close
                                        </button>

                                        <button type="submit" class="btn btn-primary" id="btn-save-event">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end modal-content-->
                    </div>
                    <!-- end modal dialog-->
                </div>
                <!-- end modal-->

            </div>
            <!-- container -->

            <?php include 'partials/footer.php' ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?php include 'partials/customizer.php' ?>

    <?php include 'partials/footer-scripts.php' ?>

    <!-- Fullcalendar js -->
    <script src="assets/plugins/fullcalendar/index.global.min.js"></script>

    <!-- Calendar App Demo js -->
    <script src="assets/js/pages/apps-calendar.js"></script>

</body>

</html>