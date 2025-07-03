<?php include('partials/html.php'); ?>

<head>
    <?php
    $title = "Topbar with Sub Item";
    include('partials/title-meta.php');
    ?>

    <?php include('partials/head-css.php'); ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?php include('partials/menu.php'); ?>

        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="container-fluid">

                <div class="page-title-head py-2 d-flex align-items-sm-center flex-sm-row flex-column">
                    <div class="flex-grow-1">
                        <h4 class="fs-sm text-uppercase fw-bold mb-1">Hey Damian,</h4>
                        <ol class="breadcrumb mb-0 p-0 fs-xxs">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Topbar</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sub Items</li>
                        </ol>
                    </div>
                    <div class="d-flex">
                        <a href="javascript: void(0);" class="btn btn-primary flex-shrink-0 ms-2">
                            <i class="ti ti-circle-dashed-plus fs-lg me-1"></i> Add New
                        </a>
                        <a href="javascript: void(0);" class="btn btn-icon btn-secondary flex-shrink-0 ms-1">
                            <i class="ti ti-activity-heartbeat fs-lg"></i>
                        </a>
                    </div>
                </div>

            </div>
            <!-- container -->

            <?php include('partials/footer.php'); ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?php include('partials/footer-scripts.php'); ?>

</body>

</html>