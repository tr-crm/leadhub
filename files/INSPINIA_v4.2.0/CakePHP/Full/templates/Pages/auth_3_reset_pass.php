<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Reset Password']) ?>

    <?= $this->element('head_css') ?>
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
                            <a href="/" class="logo-dark">
                                <img src="/images/logo-black.png" alt="dark logo" height="32">
                            </a>
                            <a href="/" class="logo-light">
                                <img src="/images/logo.png" alt="logo" height="32">
                            </a>
                        </div>

                        <div class="mt-auto text-center">
                            <h4 class="fw-bold">Forgot Password ? | IN++</h4>
                            <p class="text-muted auth-sub-text mx-auto">Enter your email address and we'll send you a link to reset your password.</p>

                            <form class="mt-4">
                                <div class="mb-3">
                                    <div class="input-group">
                                        <input type="email" class="form-control py-2 px-3 bg-light bg-opacity-40 border-light" id="userEmail" placeholder="Enter email" required>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input form-check-input-light fs-14" type="checkbox" id="termAndPolicy">
                                        <label class="form-check-label" for="termAndPolicy">Agree the Terms & Policy</label>
                                    </div>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary fw-semibold py-2">Send Request</button>
                                </div>
                            </form>
                        </div>

                        <p class="text-muted text-center mt-4 mb-0">
                            Return to <a href="auth-3-sign-in" class="text-decoration-underline link-offset-3 fw-semibold">Sign in</a>
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

    <?= $this->element('footer_scripts') ?>

</body>

</html>