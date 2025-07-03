<?php include 'partials/html.php' ?>

<head>
    <?php $title = "Lock Screen"; include 'partials/title-meta.php' ?>

    <?php include 'partials/head-css.php' ?>
</head>

<body>

    <div class="auth-box overflow-hidden align-items-center d-flex">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-md-6 col-sm-8">
                    <div class="auth-brand text-center mb-4">
                        <a href="index.php" class="logo-dark">
                            <img src="assets/images/logo-black.png" alt="dark logo" height="32">
                        </a>
                        <a href="index.php" class="logo-light">
                            <img src="assets/images/logo.png" alt="logo" height="32">
                        </a>
                        <h4 class="fw-bold mt-3">Lock Screen! | IN+</h4>
                        <p class="text-muted w-lg-75 mx-auto">This screen is locked. Enter your password to continue</p>
                    </div>

                    <div class="card p-4 rounded-4">
                        <div class="text-center mb-4">
                            <img src="assets/images/users/user-1.jpg" class="rounded-circle img-thumbnail avatar-xxl mb-2" alt="thumbnail">
                            <h5 class="fs-md">Damian D.</h5>
                        </div>

                        <form>

                            <div class="mb-3">
                                <label for="userPassword" class="form-label">Password <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="userPassword" placeholder="••••••••" required>
                                </div>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary fw-semibold py-2">Unlock</button>
                            </div>
                        </form>

                        <p class="text-muted text-center mt-4 mb-0">
                            Not you? Return to <a href="auth-sign-in.php" class="text-decoration-underline link-offset-3 fw-semibold">Sign in</a>
                        </p>
                    </div>

                    <p class="text-center text-muted mt-4 mb-0">
                        © 2014 -
                        <script>document.write(new Date().getFullYear())</script> INSPINIA — by <span class="fw-semibold">WebAppLayers</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- end auth-fluid-->

    <?php include 'partials/footer-scripts.php' ?>

</body>

</html>