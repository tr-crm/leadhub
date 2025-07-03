<?php include('partials/html.php'); ?>

<head>
    <?php
    $title = "Success Mail";
    include('partials/title-meta.php');
    ?>

    <?php include('partials/head-css.php'); ?>
</head>

<body>
    <div class="auth-box p-0 w-100">
        <div class="row w-100 g-0">
            <div class="col">
                <div class="h-100 position-relative card-side-img rounded-0 overflow-hidden">
                    <div class="p-4 card-img-overlay auth-overlay d-flex align-items-end justify-content-center">
                    </div>
                </div>
            </div>

            <div class="col-xl-auto">
                <!--Auth Box content -->
                <div class="card auth-box-form border-0 mb-0">
                    <div class="card-body min-vh-100 d-flex flex-column justify-content-center">
                        <div class="auth-brand mb-0 text-center">
                            <a href="index.php" class="logo-dark">
                                <img src="assets/images/logo-black.png" alt="dark logo" height="32">
                            </a>
                            <a href="index.php" class="logo-light">
                                <img src="assets/images/logo.png" alt="logo" height="32">
                            </a>
                        </div>

                        <div class="mt-auto text-center">
                            <form>
                                <div class="mb-4">
                                    <div class="avatar-xxl mx-auto mt-2">
                                        <div class="avatar-title bg-light-subtle border border-light border-dashed rounded-circle">
                                            <img src="assets/images/checkmark.png" alt="dark logo" height="64">
                                        </div>
                                    </div>
                                </div>

                                <h4 class="fw-bold text-center mb-4">Well Done! Email verified Successfully</h4>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary fw-semibold py-2">Bake to Dashboard</button>
                                </div>
                            </form>
                        </div>

                        <p class="text-muted text-center mt-4 mb-0">
                            Return to <a href="auth-3-sign-in.php" class="text-decoration-underline link-offset-3 fw-semibold">Sign in</a>
                        </p>

                        <p class="text-center text-muted mt-auto mb-0">
                            © 2014 -
                            <script>document.write(new Date().getFullYear())</script> INSPINIA — by <span class="fw-semibold">WebAppLayers</span>
                        </p>
                    </div>
                </div>
                <!-- End Auth Box Content -->
            </div>
        </div>
    </div>

    <?php include('partials/footer-scripts.php'); ?>

</body>

</html>