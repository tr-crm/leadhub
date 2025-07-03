<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'PDF Viewer']) ?>

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

                <?= $this->element('page_title', ['subtitle' => 'Miscellaneous', 'title' => 'PDF Viewer']) ?>

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

            <?= $this->element('footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?= $this->element('customizer') ?>

    <?= $this->element('footer_scripts') ?>

    <!-- PDF Plugin Js-->
    <script src="/plugins/pdfjs/pdf.min.js"></script>

    <!-- PDF Viewer Page Js-->
    <script src="/js/pages/misc-pdf-viewer.js"></script>

</body>

</html>