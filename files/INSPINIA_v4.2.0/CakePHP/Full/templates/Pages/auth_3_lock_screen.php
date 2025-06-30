<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Lock Screen']) ?>

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
                            <h4 class="fw-bold">Lock Screen ! | IN+</h4>
                            <p class="text-muted mx-auto mb-5">Let’s get you signed in. Enter your PIN to continue</p>



                            <div class="text-center mb-4">
                                <img src="/images/users/user-1.jpg" class="rounded-circle img-thumbnail avatar-xxl mb-2" alt="thumbnail">
                                <h5 class="fs-md">Damian D.</h5>
                            </div>

                            <form>

                                <div class="mb-3">
                                    <div class="input-group">
                                        <input type="password" class="form-control py-2 px-3 bg-light bg-opacity-40 border-light" id="userPassword" placeholder="Enter password" required>
                                    </div>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary fw-semibold py-2">Unlock</button>
                                </div>
                            </form>

                            <p class="mt-4 text-muted text-center mb-4">
                                Not you? Return to <a href="auth-3-sign-in" class="text-decoration-underline link-offset-3 fw-semibold">Sign in</a>
                            </p>
                        </div>

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