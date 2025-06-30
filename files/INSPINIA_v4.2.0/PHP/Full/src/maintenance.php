<?php include 'partials/html.php' ?>

<head>
    <?php $title = "Maintenance"; include 'partials/title-meta.php' ?>

    <?php include 'partials/head-css.php' ?>
</head>

<body>

    <div class="auth-box d-flex align-items-center">
        <div class="container-xxl">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6">
                    <div class="card mb-0 rounded-4">
                        <div class="card-body">
                            <div class="auth-brand text-center mb-0">
                                <a href="index.php" class="logo-dark">
                                    <img src="assets/images/logo-black.png" alt="dark logo" height="32">
                                </a>
                                <a href="index.php" class="logo-light">
                                    <img src="assets/images/logo.png" alt="logo" height="32">
                                </a>
                            </div>

                            <div class="p-2 text-center">
                                <div class="w-md-50 mx-auto">
                                    <img src="assets/images/svg/maintenance.svg" alt="Maintenance" class="img-fluid">
                                </div>

                                <h3 class="fw-bold text-uppercase">Site Under Maintenance</h3>
                                <p class="text-muted">We’re currently performing scheduled maintenance.  
                                    <br>Please check back soon.</p>

                                <button class="btn btn-primary mt-3 rounded-pill me-1">Call Now</button>
                                <button class="btn btn-info mt-3 rounded-pill">Email Us</button>
                            </div>

                            <p class="text-center text-muted mt-5 mb-0">
                                © 2014 - <script>document.write(new Date().getFullYear())</script> INSPINIA — by <span class="fw-bold">WebAppLayers</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- end auth-fluid-->
    <?php include 'partials/footer-scripts.php' ?>

</body>

</html>