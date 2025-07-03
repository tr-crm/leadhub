<?php include('partials/html.php'); ?>

<head>
    <?php
    $title = "Success Mail";
    include('partials/title-meta.php');
    ?>

    <?php include('partials/head-css.php'); ?>
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
                        <h4 class="fw-bold mt-3">Welcome to IN+</h4>
                        <p class="text-muted w-lg-75 mx-auto">Awesome! You’ve read the important message like a pro.</p>
                    </div>

                    <div class="card p-4 rounded-4">
                        <form>
                            <div class="mb-4">
                                <div class="avatar-xxl mx-auto mt-2">
                                    <div class="avatar-title bg-light-subtle border border-light border-dashed rounded-circle">
                                        <img src="assets/images/checkmark.png" alt="dark logo" height="64">
                                    </div>
                                </div>
                            </div>

                            <h4 class="fw-bold text-center mb-4">Well Done! Email verified Successfully</h4>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary fw-semibold py-2">Bake to Dashboard</button>
                            </div>
                        </form>
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
    <?php include('partials/footer-scripts.php'); ?>

</body>

</html>