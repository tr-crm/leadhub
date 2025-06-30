<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Editors']) ?>

    <!-- Quill Plugin CSS -->
    <link href="/plugins/quill/quill.core.css" rel="stylesheet" type="text/css">
    <link href="/plugins/quill/quill.snow.css" rel="stylesheet" type="text/css">
    <link href="/plugins/quill/quill.bubble.css" rel="stylesheet" type="text/css">

    <!-- Summernote Plugin CSS -->
    <link href="/plugins/summernote/summernote-bs5.min.css" rel="stylesheet">

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

            <div class="container">

                <div class="row mt-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Quilljs</h4>
                            </div>

                            <div class="card-body">
                                <p class="text-muted mb-2">
                                    Quill is a modern WYSIWYG editor built for compatibility and extensibility
                                </p>

                                <a class="btn btn-link p-0 fw-semibold" href="https://quilljs.com/" target="_blank">
                                    Quilljs on View Official Website
                                    <i class="ti ti-chevron-right ms-1"></i>
                                </a>
                            </div>

                            <div class="border-top border-dashed"></div>

                            <div class="card-body">
                                <h5 class="card-title mb-2">Snow Editor</h5>
                                <p class="text-muted">Snow is a clean, flat toolbar theme.</p>


                                <div id="snow-editor" style="height: 300px;">
                                    <h3>A powerful and responsive admin dashboard template built on Bootstrap.</h3>
                                    <p><br></p>
                                    <ul>
                                        <li>
                                            Fully responsive layout with a sleek and modern design.
                                        </li>
                                        <li>
                                            Multiple pre-built pages such as login, registration, dashboard, charts, tables, and more.
                                        </li>
                                        <li>
                                            Includes various components like modals, alerts, navigation menus, etc.
                                        </li>
                                        <li>
                                            Easy to customize and extend to suit your project’s needs.
                                        </li>
                                        <li>
                                            Built with Bootstrap 5x, ensuring compatibility with a wide range of devices.
                                        </li>
                                    </ul>
                                    <p><br></p>
                                    <p>
                                        Inspinia Admin is the perfect choice for your next admin project. Get started today and create a stunning interface for your application.
                                    </p>
                                </div>

                            </div>

                            <div class="border-top border-dashed"></div>

                            <div class="card-body">
                                <h5 class="card-title mb-2">Bubble Editor</h5>

                                <p class="text-muted">Bubble is a simple tooltip based theme.</p>

                                <div id="bubble-editor" style="height: 300px;">
                                    <h3>A powerful and responsive admin dashboard template built on Bootstrap.</h3>
                                    <p><br></p>
                                    <ul>
                                        <li>
                                            Fully responsive layout with a sleek and modern design.
                                        </li>
                                        <li>
                                            Multiple pre-built pages such as login, registration, dashboard, charts, tables, and more.
                                        </li>
                                        <li>
                                            Includes various components like modals, alerts, navigation menus, etc.
                                        </li>
                                        <li>
                                            Easy to customize and extend to suit your project’s needs.
                                        </li>
                                        <li>
                                            Built with Bootstrap 5x, ensuring compatibility with a wide range of devices.
                                        </li>
                                    </ul>
                                    <p><br></p>
                                    <p>
                                        Inspinia Admin is the perfect choice for your next admin project. Get started today and create a stunning interface for your application.
                                    </p>
                                </div> <!-- end Snow-editor-->

                            </div>
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Summernote</h4>
                            </div>

                            <div class="card-body">
                                <p class="text-muted mb-2">
                                    Summernote is a JavaScript library that helps you create WYSIWYG editors with a simple and easy-to-use interface. Summernote is licensed under MIT and maintained by the community.
                                </p>

                                <a class="btn btn-link p-0 fw-semibold mb-3" href="https://summernote.org/" target="_blank">
                                    Summernote on View Official Website
                                    <i class="ti ti-chevron-right ms-1"></i>
                                </a>

                                <div class="summernote">
                                    <h4>Inspinia Admin - Modern Admin Dashboard</h4>
                                    Inspinia Admin is a powerful and feature-rich Bootstrap-based admin template designed to help you build stunning and functional dashboards. It provides a clean, responsive, and easy-to-use interface for managing data and providing insights. With numerous components and options, it is perfect for building any type of web application.
                                    <strong>Inspinia Admin</strong> includes everything you need to start building your next project, from user management to charts, tables, and much more. It’s optimized for performance and mobile responsiveness, ensuring a smooth experience on any device.
                                    <br>
                                    <br>
                                    <ul>
                                        <li>Fully responsive layout</li>
                                        <li>Customizable UI components</li>
                                        <li>Built on Bootstrap 4</li>
                                        <li>Multiple ready-to-use pages</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end col -->
                </div>

            </div> <!-- container -->

            <?= $this->element('footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?= $this->element('customizer') ?>

    <?= $this->element('footer_scripts') ?>

    <!-- Summernote Plugin Js -->
    <script src="/plugins/summernote/summernote-bs5.min.js"></script>

    <!-- Summernote Demo Js -->
    <script src="/js/pages/form-summernote.js"></script>

    <!-- Quill Editor Js -->
    <script src="/plugins/quill/quill.js"></script>

    <!-- Quill Demo Js -->
    <script src="/js/pages/form-quilljs.js"></script>

</body>

</html>