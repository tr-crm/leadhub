<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'New Password']) ?>

    <?= $this->element('head_css') ?>
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
                        <h4 class="fw-bold mt-3">Setup New Password ! | IN+</h4>
                        <p class="text-muted w-lg-75 mx-auto">We've emailed you a 6-digit verification code. Please enter it below to confirm your email address</p>
                    </div>

                    <div class="card p-4 rounded-4">
                        <form>
                            <div class="mb-3">
                                <label for="userEmail" class="form-label">Email address <span class="text-danger">*</span></label>
                                <div class="input-group">
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
                                    <input type="password" class="form-control" id="userPassword" placeholder="••••••••" required>
                                </div>

                                <div class="password-bar my-2"></div>
                                <p class="text-muted fs-xs mb-0">Use 8+ characters with letters, numbers & symbols.</p>
                            </div>

                            <div class="mb-3">
                                <label for="userNewPassword" class="form-label">Confirm New Password <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="userNewPassword" placeholder="••••••••" required>
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

    <?= $this->element('footer_scripts') ?>

    <!-- Two Factor Validator Js -->
    <script src="/js/pages/auth-two-factor.js"></script>

    <!-- Password Suggestion Js -->
    <script src="/js/pages/auth-password.js"></script>

</body>

</html>