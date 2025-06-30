<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Loading Button']) ?>

    <!-- Ladda style -->
    <link href="/plugins/ladda/ladda.min.css" rel="stylesheet">

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

                <?= $this->element('page_title', ['subtitle' => 'Miscellaneous', 'title' => 'Loading Button']) ?>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title mb-1">Ladda</h4>
                                <p class="text-muted mb-0">A UI concept which merges loading indicators into the action that invoked them. Primarily intended for use with forms where it gives users immediate feedback upon submit rather than leaving them wondering while the browser does its thing.</p>
                            </div>

                            <div class="card-body">

                                <div class="table-responsive-sm">
                                    <table class="table mb-0">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%;">
                                                    <h5 class="mb-0">Expand Left</h5>
                                                </td>
                                                <td><button class="ladda-button btn btn-primary" data-style="expand-left">Submit</button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="mb-0">Expand Right</h5>
                                                </td>
                                                <td><button class="ladda-button btn btn-primary" data-style="expand-right">Submit</button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="mb-0">Expand Up</h5>
                                                </td>
                                                <td><button class="ladda-button btn btn-primary" data-style="expand-up">Submit</button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="mb-0">Expand Down</h5>
                                                </td>
                                                <td><button class="ladda-button btn btn-primary" data-style="expand-down">Submit</button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="mb-0">Contract</h5>
                                                </td>
                                                <td><button class="ladda-button btn btn-warning" data-style="contract">Submit</button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="mb-0">Zoom In</h5>
                                                </td>
                                                <td><button class="ladda-button btn btn-warning" data-style="zoom-in">Submit</button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="mb-0">Zoom Out</h5>
                                                </td>
                                                <td><button class="ladda-button btn btn-warning" data-style="zoom-out">Submit</button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="mb-0">Slide Left</h5>
                                                </td>
                                                <td><button class="ladda-button btn btn-info" data-style="slide-left">Submit</button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="mb-0">Slide Right</h5>
                                                </td>
                                                <td><button class="ladda-button btn btn-info" data-style="slide-right">Submit</button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="mb-0">Slide Up</h5>
                                                </td>
                                                <td><button class="ladda-button btn btn-info" data-style="slide-up">Submit</button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="mb-0">Slide Down</h5>
                                                </td>
                                                <td><button class="ladda-button btn btn-info" data-style="slide-down">Submit</button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="mb-0">Expand Right (Progress)</h5>
                                                </td>
                                                <td><button class="ladda-button btn btn-danger" data-style="expand-right">Submit</button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="mb-0">Contract (Progress)</h5>
                                                </td>
                                                <td><button class="ladda-button btn btn-danger" data-style="contract">Submit</button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="mb-0">Zoom In (API demo)</h5>
                                                </td>
                                                <td><button class="ladda-button ladda-button-demo btn btn-primary" data-style="zoom-in">Submit</button></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div> <!-- end table-resp.-->
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

    <!-- Ladda Plugin Js-->
    <script src="/plugins/ladda/spin.min.js"></script>
    <script src="/plugins/ladda/ladda.min.js"></script>
    <script src="/plugins/ladda/ladda.jquery.min.js"></script>

    <!-- Loading Buttons Page Js-->
    <script src="/js/pages/misc-loading-button.js"></script>

</body>

</html>