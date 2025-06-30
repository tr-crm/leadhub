<?= $this->include('./partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Reset Password")) ?>

    <?= $this->include('./partials/head-css') ?>
</head>

<body>

    <div class="auth-box overflow-hidden align-items-center d-flex">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-md-6 col-sm-8">
                    <div class="auth-brand text-center mb-4">
                        <a href="/" class="logo-dark">
                            <img src="/images/logo-black.png" alt="dark logo" height="32">
                        </a>
                        <a href="/" class="logo-light">
                            <img src="/images/logo.png" alt="logo" height="32">
                        </a>
                        <h4 class="fw-bold mt-3">Forgot Password ? | IN+</h4>
                        <p class="text-muted w-lg-75 mx-auto">Enter your email address and we'll send you a link to reset your password.</p>
                    </div>

                    <div class="card p-4 rounded-4">
                        <form>
                            <div class="mb-3">
                                <label for="userEmail" class="form-label">Email address <span class="text-danger">*</span></label>
                                <div class="input-group">
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
                            Return to <a href="auth-sign-in" class="text-decoration-underline link-offset-3 fw-semibold">Sign in</a>
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
    <?= $this->include('./partials/footer-scripts') ?>

</body>

</html>