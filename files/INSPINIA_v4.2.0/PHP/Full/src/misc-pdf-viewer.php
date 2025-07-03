<?php include 'partials/html.php' ?>

<head>
    <?php $title = "PDF Viewer"; include 'partials/title-meta.php' ?>

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
                
                <?php $subtitle = "Miscellaneous"; $title = "PDF Viewer"; include 'partials/page-title.php' ?>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="btn-group text-nowrap">
                                        <button id="prev" class="btn btn-dark">
                                            <i class="ti ti-arrow-left"></i>
                                            <span class="d-none d-sm-inline ms-2">Previous</span>
                                        </button>
                
                                        <button id="next" class="btn btn-dark">
                                            <i class="ti ti-arrow-right"></i>
                                            <span class="d-none d-sm-inline ms-2">Next</span>
                                        </button>
                
                                        <button id="zoomin" class="btn btn-dark">
                                            <i class="ti ti-zoom-in"></i>
                                            <span class="d-none d-sm-inline ms-2">Zoom In</span>
                                        </button>
                
                                        <button id="zoomout" class="btn btn-dark">
                                            <i class="ti ti-zoom-out"></i>
                                            <span class="d-none d-sm-inline ms-2">Zoom Out</span>
                                        </button>
                
                                        <button id="zoomfit" class="btn btn-dark rounded-end-3">
                                            100%
                                        </button>

                                        <input type="text" class="form-control rounded-end-0 ms-1" id="page_num" style="width: 50px;">
                                        <span class="input-group-text rounded-start-0 border-start-0" id="page_count">/ 00</span>
                                    </div>
                                </div>
                
                                <div class="text-center overflow-auto mt-3">
                                    <canvas id="the-canvas" class="pdfcanvas border rounded-3"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <?php include 'partials/footer.php' ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?php include 'partials/customizer.php' ?>

    <?php include 'partials/footer-scripts.php' ?>

    <!-- PDF Plugin Js-->
    <script src="assets/plugins/pdfjs/pdf.min.js"></script>

    <!-- PDF Viewer Page Js-->
    <script src="assets/js/pages/misc-pdf-viewer.js"></script>

</body>

</html>