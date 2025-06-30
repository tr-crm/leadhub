<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Login with Pin']) ?>

    <?= $this->element('head_css') ?>
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
                                        <a href="/" class="logo-dark">
                                            <img src="/images/logo-black.png" alt="dark logo" height="32">
                                        </a>
                                        <a href="/" class="logo-light">
                                            <img src="/images/logo.png" alt="logo" height="32">
                                        </a>
                                        <h4 class="fw-bold mt-4">Welcome to IN+</h4>
                                        <p class="text-muted w-lg-75 mx-auto">This screen is locked. Enter your PIN to continue.</p>
                                    </div>

                                    <div class="text-center mb-4">
                                        <img src="/images/users/user-1.jpg" class="rounded-circle img-thumbnail avatar-xxl mb-2" alt="thumbnail">
                                        <h5 class="fs-md">Damian D.</h5>
                                    </div>

                                    <form>
                                        <label class="form-label">Enter your 6-digit code <span class="text-danger">*</span></label>
                                        <div class="d-flex gap-2 mb-3 two-factor">
                                            <input type="text" class="form-control text-center" required>
                                            <input type="text" class="form-control text-center" required>
                                            <input type="text" class="form-control text-center" required>
                                            <input type="text" class="form-control text-center" required>
                                            <input type="text" class="form-control text-center" required>
                                            <input type="text" class="form-control text-center" required>
                                        </div>

                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary fw-semibold py-2">Confirm</button>
                                        </div>
                                    </form>

                                    <p class="text-muted text-center mt-4 mb-0">
                                        Not you? Return to <a href="auth-2-sign-in" class="text-decoration-underline link-offset-3 fw-semibold">Sign in</a>
                                    </p>

                                    <p class="text-center text-muted mt-4 mb-0">
                                        © 2014 -
                                        <script>document.write(new Date().getFullYear())</script> INSPINIA — by <span class="fw-semibold">WebAppLayers</span>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-6 d-none d-lg-block">
                                <div class="h-100 position-relative card-side-img rounded-end-4 rounded-end rounded-0 overflow-hidden">
                                    <div class="p-4 card-img-overlay rounded-4 rounded-start-0 auth-overlay d-flex align-items-end justify-content-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end auth-fluid-->

    <?= $this->element('footer_scripts') ?>

    <!-- Two Factor Validator Js -->
    <script src="/js/pages/auth-two-factor.js"></script>

</body>

</html>