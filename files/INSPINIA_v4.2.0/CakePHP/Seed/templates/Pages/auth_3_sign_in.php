<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Sign In']) ?>

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
            <div class="col-md-auto">
                <!--Auth Box content -->
                <div class="card auth-box-form border-0 mb-0">
                    <div class="card-body min-vh-100 d-flex flex-column justify-content-center">
                        <div class="auth-brand mb-0 text-center">
                            <a href="index" class="logo-dark">
                                <img src="/images/logo-black.png" alt="dark logo" height="32">
                            </a>
                            <a href="index" class="logo-light">
                                <img src="/images/logo.png" alt="logo" height="32">
                            </a>
                        </div>

                        <div class="mt-auto text-center">
                            <h4 class="fw-bold">Welcome to IN+</h4>
                            <p class="text-muted auth-sub-text mx-auto">Let’s get you signed in. Enter your email and password to continue.</p>

                            <form class="mt-4">
                                <div class="mb-3">
                                    <div class="input-group">
                                        <input type="email" class="form-control py-2 px-3 bg-light bg-opacity-40 border-light" id="userEmail" placeholder="Enter username or email" required>
                                    </div>
                                </div>
        
                                <div class="mb-3">
                                    <div class="input-group">
                                        <input type="password" class="form-control py-2 px-3 bg-light bg-opacity-40 border-light" id="userPassword" placeholder="Enter password" required>
                                    </div>
                                </div>
        
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input form-check-input-light fs-14" type="checkbox" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Keep me signed in</label>
                                    </div>
                                   
                                    <a href="auth-3-reset-pass" class="text-decoration-underline link-offset-3 text-muted">Forgot Password?</a>
                                </div>
        
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary fw-bold py-2">Sign In</button>
                                </div>
                            </form>
                        </div>
    
                        <p class="text-muted text-center mt-4 mb-0">
                            New here? <a href="auth-3-sign-up" class="text-decoration-underline link-offset-3 fw-semibold">Create an account</a>
                        </p>
        
                        <p class="text-center text-muted mt-auto mb-0">
                            © 2014 - <script>document.write(new Date().getFullYear())</script> INSPINIA — by <span class="fw-semibold">WebAppLayers</span>
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