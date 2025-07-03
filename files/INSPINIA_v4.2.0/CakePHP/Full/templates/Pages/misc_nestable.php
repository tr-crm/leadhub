<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Nestable List']) ?>

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

                <?= $this->element('page_title', ['subtitle' => 'Miscellaneous', 'title' => 'Nestable List']) ?>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Nested Sortables List</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <p class="text-muted">
                                    Use <code>nested-sortable</code> classes on the <code>list-group</code> element to enable drag-and-drop sorting of hierarchical task items.
                                </p>

                                <div class="list-group fw-medium nested-sortable">
                                    <div class="list-group-item">Design Phase</div>
                                    <div class="list-group-item">Development Phase
                                        <div class="list-group nested-sortable">
                                            <div class="list-group-item">Frontend Implementation</div>
                                            <div class="list-group-item">Backend API Setup
                                                <div class="list-group nested-sortable">
                                                    <div class="list-group-item">Authentication Module</div>
                                                    <div class="list-group-item">Database Schema</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item">Testing Phase
                                        <div class="list-group nested-sortable">
                                            <div class="list-group-item">Unit Tests</div>
                                            <div class="list-group-item">Integration Tests</div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Nested Sortables List with Handle</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <p class="text-muted">Use <code>nested-sortable-handle</code> class to list-group class to set a nested list with sortable items.</p>

                                <div class="list-group fw-medium nested-sortable-handle">
                                    <div class="list-group-item nested-1"><i class="ti ti-grip-horizontal align-middle sort-handle"></i>Project Alpha
                                        <div class="list-group nested-sortable-handle">
                                            <div class="list-group-item nested-2"><i class="ti ti-grip-horizontal align-middle sort-handle"></i>Design Phase</div>
                                            <div class="list-group-item nested-2"><i class="ti ti-grip-horizontal align-middle sort-handle"></i>Development Phase
                                                <div class="list-group nested-sortable-handle">
                                                    <div class="list-group-item nested-3"><i class="ti ti-grip-horizontal align-middle sort-handle"></i>Frontend Module</div>
                                                    <div class="list-group-item nested-3"><i class="ti ti-grip-horizontal align-middle sort-handle"></i>Backend Module</div>
                                                    <div class="list-group-item nested-3"><i class="ti ti-grip-horizontal align-middle sort-handle"></i>API Integration</div>
                                                    <div class="list-group-item nested-3"><i class="ti ti-grip-horizontal align-middle sort-handle"></i>Unit Testing</div>
                                                </div>
                                            </div>
                                            <div class="list-group-item nested-2"><i class="ti ti-grip-horizontal align-middle sort-handle"></i>QA Review</div>
                                            <div class="list-group-item nested-2"><i class="ti ti-grip-horizontal align-middle sort-handle"></i>Deployment</div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Sortable with Icons</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <p class="text-muted">Use <code>nested-sortable</code> class to list-group class to set a nested list with sortable items where icons are given within list-group-item.</p>

                                <div class="list-group border-dashed">
                                    <div class="list-group-item">
                                        <div class="d-flex align-items-center gap-2 mb-2">
                                            <div class="avatar-xs flex-shrink-0">
                                                <span class="avatar-title text-bg-light rounded-circle">
                                                    <i class="ti ti-layout-kanban fs-sm text-primary"></i> <!-- Projects -->
                                                </span>
                                            </div>
                                            <div>
                                                <h5 class="mb-0">Tasks</h5>
                                            </div>
                                        </div>

                                        <div class="list-group nested-sortable border-0">
                                            <div class="list-group-item"><i class="ti ti-check fs-sm me-2 text-muted"></i>To Do</div>
                                            <div class="list-group-item"><i class="ti ti-progress fs-sm me-2 text-muted"></i>In Progress</div>
                                            <div class="list-group-item"><i class="ti ti-checklist fs-sm me-2 text-muted"></i>Completed</div>
                                        </div>
                                    </div>

                                    <div class="list-group-item">
                                        <div class="d-flex align-items-center gap-2 mb-2">
                                            <div class="avatar-xs flex-shrink-0">
                                                <span class="avatar-title text-bg-light rounded-circle">
                                                    <i class="ti ti-flag fs-sm text-primary"></i> <!-- Projects -->
                                                </span>
                                            </div>
                                            <div>
                                                <h5 class="mb-0">Milestones</h5>
                                            </div>
                                        </div>
                                        <div class="list-group nested-sortable border-0">
                                            <div class="list-group-item"><i class="ti ti-flag fs-sm me-2 text-muted"></i>Project Kickoff</div>
                                            <div class="list-group-item"><i class="ti ti-flag fs-sm me-2 text-muted"></i>Phase 1 Completion</div>
                                            <div class="list-group-item"><i class="ti ti-flag fs-sm me-2 text-muted"></i>Final Delivery</div>
                                        </div>
                                    </div>

                                    <div class="list-group-item">
                                        <div class="d-flex align-items-center gap-2 mb-2">
                                            <div class="avatar-xs flex-shrink-0">
                                                <span class="avatar-title text-bg-light rounded-circle">
                                                    <i class="ti ti-users fs-sm text-primary"></i> <!-- Projects -->
                                                </span>
                                            </div>
                                            <div>
                                                <h5 class="mb-0">Teams</h5>
                                            </div>
                                        </div>
                                        <div class="list-group nested-sortable border-0">
                                            <div class="list-group-item"><i class="ti ti-user fs-sm me-2 text-muted"></i>Development Team</div>
                                            <div class="list-group-item"><i class="ti ti-user fs-sm me-2 text-muted"></i>Design Team</div>
                                            <div class="list-group-item"><i class="ti ti-user fs-sm me-2 text-muted"></i>QA Team</div>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>

            <?= $this->element('footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?= $this->element('customizer') ?>

    <?= $this->element('footer_scripts') ?>

    <!-- sortablejs -->
    <script src="/plugins/sortablejs/Sortable.min.js"></script>

    <!-- nestable init js -->
    <script src="/js/pages/misc-nestable.js"></script>

</body>

</html>