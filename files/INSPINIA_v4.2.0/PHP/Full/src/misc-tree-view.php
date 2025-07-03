<?php include 'partials/html.php' ?>

<head>
    <?php $title = "Treeview"; include 'partials/title-meta.php' ?>

    <!-- Treeview css-->
    <link href="assets/plugins/jstree/style.min.css" rel="stylesheet" type="text/css">

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

                <?php $subtitle = "Miscellaneous"; $title = "Treeview"; include 'partials/page-title.php' ?>
                
                <div class="row">
                    <div class="col-md-6">

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Treeview</h4>
                            </div>
                            <div class="card-body">
                                <div id="jstree-1">
                                    <ul>
                                        <li>
                                            Dashboard
                                            <ul>
                                                <li data-jstree='{ "selected": true }'>
                                                    <a href="javascript:;">Overview</a>
                                                </li>
                                                <li>Analytics</li>
                                                <li data-jstree='{ "opened": true }'>
                                                    Reports
                                                    <ul>
                                                        <li data-jstree='{ "disabled": true }'>Archived Report</li>
                                                        <li data-jstree='{ "type": "file" }'>Current Report</li>
                                                    </ul>
                                                </li>
                                                <li>Settings</li>
                                            </ul>
                                        </li>

                                        <li>
                                            Users
                                            <ul>
                                                <li>New Users</li>
                                                <li>Active Users</li>
                                                <li>Banned Users</li>
                                                <li data-jstree='{ "opened": true }'>
                                                    Teams
                                                    <ul>
                                                        <li>Admin Team</li>
                                                        <li>Marketing Team</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            Files
                                            <ul>
                                                <li>Documents</li>
                                                <li>Images</li>
                                                <li>Audio</li>
                                                <li>Videos</li>
                                                <li>Archives</li>
                                            </ul>
                                        </li>

                                        <li>
                                            Settings
                                            <ul>
                                                <li>System Settings</li>
                                                <li>Security</li>
                                                <li>Languages</li>
                                            </ul>
                                        </li>

                                        <li data-jstree='{ "type": "link" }'>
                                            <a href="https://www.example.com" target="_blank">External Resource</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Custom Icons & Clickable Nodes</h4>
                            </div>

                            <div class="card-body">

                                <div id="jstree-2">
                                    <ul>
                                        <li>
                                            Main Category
                                            <ul>
                                                <li data-jstree='{ "selected" : true, "icon": "ti ti-star text-primary fs-lg" }'>
                                                    <a href="javascript:;"> Favorite Item </a>
                                                </li>
                                                <li data-jstree='{ "icon" : "ti ti-file-text text-success fs-lg" }'>
                                                    Documentation Files
                                                </li>
                                                <li data-jstree='{ "opened" : true, "icon" : "ti ti-folder-open text-warning fs-lg" }'>
                                                    Project Resources
                                                    <ul>
                                                        <li data-jstree='{ "disabled" : true, "icon": "ti ti-ban text-muted fs-lg" }'>
                                                            Restricted Access
                                                        </li>
                                                        <li data-jstree='{ "type" : "file", "icon": "ti ti-file fs-lg" }'>
                                                            Final Report.pdf
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li data-jstree='{ "icon" : "ti ti-user text-danger fs-lg" }'>
                                                    Team Member Info
                                                </li>
                                            </ul>
                                        </li>
                                        <li data-jstree='{ "type" : "link", "icon": "ti ti-link text-info" }'>
                                            <a href="https://wrapbootstrap.com/theme/inspinia-multipurpose-admin-dashboard-template-WB0R5L90S?ref=inspinia"> Buy <span class="text-danger fw-semibold fst-italic">INSPINIA</span> - Click here</a>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Checkable Tree</h4>
                            </div>

                            <div class="card-body">
                                <div>
                                    <div id="jstree-3"></div>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title mb-1">Context Menu</h4>
                                <p class="text-muted mb-0">Right-click on any tree item to access options like create, rename, edit, copy, cut, and more.</p>
                            </div>                            
                            <div class="card-body">
                                <div>
                                    <div id="jstree-4"></div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Drag & Drop</h4>
                            </div>

                            <div class="card-body">
                                <div id="jstree-5"></div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ajax Data</h4>
                            </div>

                            <div class="card-body">
                                <div id="jstree-6"></div>
                            </div>
                        </div>
                    </div>
                </div>

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

    <!-- jstree plugin Js-->
    <script src="assets/plugins/jstree/jstree.min.js"></script>

    <!-- Treeviw Page Js -->
    <script src="assets/js/pages/misc-treeview.js"></script>

</body>

</html>