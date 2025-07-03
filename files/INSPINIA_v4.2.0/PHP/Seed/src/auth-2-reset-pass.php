<?php include('partials/html.php'); ?>

<head>
    <?php
    $title = "Reset Password";
    include('partials/title-meta.php');
    ?>

    <?php include('partials/head-css.php'); ?>
</head>

<body>

    <div class="auth-box d-flex align-items-center">
        <div class="container-xxl">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-10">
                    <div class="card rounded-4">
                        <div class="row justify-content-between g-0">
                            <div class="col-lg-6">
                                <div class="card-body">
                                    <div class="auth-brand text-center mb-4">
                                        <a href="index.php" class="logo-dark">
                                            <img src="assets/images/logo-black.png" alt="dark logo" height="32">
                                        </a>
                                        <a href="index.php" class="logo-light">
                                            <img src="assets/images/logo.png" alt="logo" height="32">
                                        </a>
                                        <h4 class="fw-bold mt-4">Forgot Password ? | IN+</h4>
                                        <p class="text-muted w-lg-75 mx-auto">Enter your email address and we'll send you a link to reset your password.</p>
                                    </div>

                                    <form>
                                        <div class="mb-3">
                                            <label for="userEmail" class="form-label">Email address <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-text bg-light"><i class="ti ti-mail text-muted fs-xl"></i></span>
                                                <input type="email" class="form-control" id="userEmail" placeholder="you@example.com" required>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input form-check-input-light fs-14" type="checkbox" id="termAndPolicy">
                                                <label class="form-check-label" for="termAndPolicy">Agree the Terms & Policy</label>
                                            </div>
                                        </div>

                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary fw-semibold py-2">Send Request</button>
                                        </div>
                                    </form>

                                    <p class="text-muted text-center mt-4 mb-0">
                                        Return to <a href="auth-2-sign-in.php" class="text-decoration-underline link-offset-3 fw-semibold"> Sign in</a>
                                    </p>

                                    <p class="text-center text-muted mt-4 mb-0">
                                        © 2014 -
                                        <script>document.write(new Date().getFullYear())</script> INSPINIA — by <span class="fw-semibold">WebAppLayers</span>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-6 d-none d-lg-block">
                                <div class="h-100 position-relative card-side-img rounded-end-4 rounded-end rounded-0 overflow-hidden">
                                    <div class="p-4 card-img-overlay rounded-4 rounded-start-0 auth-overlay d-flex align-items-end justify-content-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end auth-fluid-->
    <?php include('partials/footer-scripts.php'); ?>

</body>

</html>