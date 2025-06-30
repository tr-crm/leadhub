<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'New Password']) ?>

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
                                        <a href="index" class="logo-dark">
                                            <img src="/images/logo-black.png" alt="dark logo" height="32">
                                        </a>
                                        <a href="index" class="logo-light">
                                            <img src="/images/logo.png" alt="logo" height="32">
                                        </a>
                                        <h4 class="fw-bold mt-4">Setup New Password ! | IN+</h4>
                                        <p class="text-muted w-lg-75 mx-auto">We've emailed you a 6-digit verification code. Please enter it below to confirm your Email Address.</p>
                                    </div>

                                    <form>
                                        <div class="mb-3">
                                            <label for="userEmail" class="form-label">Email address <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-text bg-light"><i class="ti ti-mail text-muted fs-xl"></i></span>
                                                <input type="email" class="form-control" id="userEmail" placeholder="you@example.com" disabled>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Enter your 6-digit code <span class="text-danger">*</span></label>
                                            <div class="d-flex gap-2 two-factor">
                                                <input type="text" class="form-control text-center" required>
                                                <input type="text" class="form-control text-center" required>
                                                <input type="text" class="form-control text-center" required>
                                                <input type="text" class="form-control text-center" required>
                                                <input type="text" class="form-control text-center" required>
                                                <input type="text" class="form-control text-center" required>
                                            </div>
                                        </div>

                                        <div class="mb-3" data-password="bar">
                                            <label for="userPassword" class="form-label">Password <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-text bg-light"><i class="ti ti-password text-muted fs-xl"></i></span>
                                                <input type="password" class="form-control" id="userPassword" placeholder="••••••••" required>
                                            </div>
                                            <div class="password-bar my-2"></div>
                                            <p class="text-muted fs-xs mb-0">Use 8+ characters with letters, numbers & symbols.</p>
                                        </div>

                                        <div class="mb-3">
                                            <label for="confirmPassword" class="form-label">Confirm New Password <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-text bg-light"><i class="ti ti-password text-muted fs-xl"></i></span>
                                                <input type="password" class="form-control" id="confirmPassword" placeholder="••••••••" required>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input form-check-input-light fs-14" type="checkbox" id="termAndPolicy">
                                                <label class="form-check-label" for="termAndPolicy">Agree the Terms & Policy</label>
                                            </div>
                                        </div>

                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary fw-semibold py-2">Update Password</button>
                                        </div>
                                    </form>

                                    <p class="mt-4 text-muted text-center mb-4">Don’t have a code? <a href="#" class="text-decoration-underline link-offset-2 fw-semibold">Resend</a> or <a href="#" class="text-decoration-underline link-offset-2 fw-semibold">Call Us</a></p>
                                    <p class="text-muted text-center mb-0">
                                        Return to <a href="auth-2-sign-in" class="text-decoration-underline link-offset-3 fw-semibold">Sign in</a>
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

    <?= $this->element('footer_scripts') ?>

    <!-- Two Factor Validator Js -->
    <script src="/js/pages/auth-two-factor.js"></script>

    <!-- Password Suggestion Js -->
    <script src="/js/pages/auth-password.js"></script>

</body>

</html>