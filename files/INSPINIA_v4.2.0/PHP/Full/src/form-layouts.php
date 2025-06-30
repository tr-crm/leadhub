<?php include 'partials/html.php' ?>

<head>
    <?php $title = "Forms Layout"; include 'partials/title-meta.php' ?>

    <?php include 'partials/head-css.php' ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?php include 'partials/menu.php' ?>

        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->

        <div class="content-page">

            <div class="container-fluid">
                <?php $subtitle = "Forms"; $title = "Layouts"; include 'partials/page-title.php' ?>
            </div>

            <div class="container">

                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Form</h4>
                            </div>

                            <div class="card-body">
                                <div class="row g-4 align-items-center">
                                    <div class="col-sm-6 border-end border-dashed">
                                        <div class="p-4">
                                            <h4 class="mb-1 fw-bold text-uppercase">Sign in</h4>
                                            <p class="text-muted mb-4">Let’s get you signed in. Enter your email and password to continue.</p>

                                            <form>
                                                <div class="mb-3">
                                                    <label for="userEmail" class="form-label">Email address <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <input type="email" class="form-control" id="userEmail" placeholder="you@example.com" required>
                                                    </div>
                                                </div>
                        
                                                <div class="mb-3">
                                                    <label for="userPassword" class="form-label">Password <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <input type="password" class="form-control" id="userPassword" placeholder="••••••••" required>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-wrap justify-content-between">
                                                    <div class="form-check fs-sm">
                                                        <input class="form-check-input form-check-input-light" type="checkbox" id="rememberMe1">
                                                        <label class="form-check-label fw-semibold fst-italic text-muted fs-base" for="rememberMe1">Keep me signed in</label>
                                                    </div>

                                                    <button class="btn btn-primary rounded-pill" type="submit"><strong>Log in</strong></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 text-center">
                                        <div class="avatar avatar-xl mx-auto">
                                            <span class="avatar-title bg-purple-subtle text-purple rounded-circle fw-bold">
                                                <i data-lucide="shield-user" class="text-purple fs-28 fill-purple"></i>
                                            </span>
                                        </div>
                                        <h4 class="mt-3">Don't Have an Account Yet?</h4>
                                        <p class="text-muted mb-3">Join us today and unlock access to personalized features, updates, and more!</p>
                                        <a href="auth-sign-up.php" class="link-primary text-decoration-underline fw-semibold link-offset-3">Create Your Account</a>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Modal Form</h4>
                            </div>

                            <div class="card-body">
                                <div class="text-center">
                                    <a data-bs-toggle="modal" class="btn btn-primary" href="#modal-form">Form in simple modal box</a>
                                </div>
                                <div id="modal-form" class="modal fade" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="row g-4 align-items-center">
                                                    <div class="col-sm-6 border-end border-dashed">
                                                        <div class="p-4">
                                                            <h4 class="mb-1 fw-bold text-uppercase">Sign in</h4>
                                                            <p class="text-muted mb-4">Let’s get you signed in. Enter your email and password to continue.</p>

                                                            <form>
                                                                <div class="mb-3">
                                                                    <label for="userEmail1" class="form-label">Email address <span class="text-danger">*</span></label>
                                                                    <div class="input-group">
                                                                        <input type="email" class="form-control" id="userEmail1" placeholder="you@example.com" required>
                                                                    </div>
                                                                </div>
                                        
                                                                <div class="mb-3">
                                                                    <label for="userPassword1" class="form-label">Password <span class="text-danger">*</span></label>
                                                                    <div class="input-group">
                                                                        <input type="password" class="form-control" id="userPassword1" placeholder="••••••••" required>
                                                                    </div>
                                                                </div>

                                                                <div class="d-flex flex-wrap justify-content-between">
                                                                    <div class="form-check fs-sm">
                                                                        <input class="form-check-input form-check-input-light" type="checkbox" id="rememberMe">
                                                                        <label class="form-check-label fw-semibold fst-italic text-muted fs-base" for="rememberMe">Keep me signed in</label>
                                                                    </div>

                                                                    <button class="btn btn-primary rounded-pill" type="submit"><strong>Log in</strong></button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 text-center">
                                                        <div class="avatar avatar-xl mx-auto">
                                                            <span class="avatar-title bg-purple-subtle text-purple rounded-circle fw-bold">
                                                                <i data-lucide="shield-user" class="text-purple fs-28 fill-purple"></i>
                                                            </span>
                                                        </div>
                                                        <h4 class="mt-3">Don't Have an Account Yet?</h4>
                                                        <p class="text-muted mb-3">Join us today and unlock access to personalized features, updates, and more!</p>
                                                        <a href="auth-sign-up.php" class="link-primary text-decoration-underline fw-semibold link-offset-3">Create Your Account</a>
                                                    </div>
                                                </div> <!-- end row-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Example</h4>
                            </div>

                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class=" mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkmeout0">
                                            <label class="form-check-label" for="checkmeout0">Check me out !</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Horizontal Form</h4>
                            </div>


                            <div class="card-body">
                                <form class="form-horizontal">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Email</label>
                                        <div class="col-9">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-3 col-form-label">Password</label>
                                        <div class="col-9">
                                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword5" class="col-3 col-form-label">Re Password</label>
                                        <div class="col-9">
                                            <input type="password" class="form-control" id="inputPassword5" placeholder="Retype Password">
                                        </div>
                                    </div>
                                    <div class="row mb-3 justify-content-end">
                                        <div class="col-9">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="checkmeout">
                                                <label class="form-check-label" for="checkmeout">Check me out !</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="justify-content-end row">
                                        <div class="col-9">
                                            <button type="submit" class="btn btn-info">Sign in</button>
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Horizontal Form Label Sizing</h4>
                            </div>

                            <div class="card-body">
                                <form>
                                    <div class="mb-2 row">
                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
                                        </div>
                                    </div>
                                    <div class="mb-2 row">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Inline Form</h4>
                            </div>

                            <div class="card-body">
                                <form class="row row-cols-lg-auto g-3 align-items-center">
                                    <div class="col-12">
                                        <label for="staticEmail2" class="visually-hidden">Email</label>
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputPassword2" class="visually-hidden">Password</label>
                                        <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Confirm identity</button>
                                    </div>
                                </form>

                                <h6 class="fs-base mt-3">Auto-sizing</h6>
                                <form>
                                    <div class="row gy-2 gx-2 align-items-center">
                                        <div class="col-auto">
                                            <label class="visually-hidden" for="inlineFormInput">Name</label>
                                            <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
                                        </div>
                                        <div class="col-auto">
                                            <label class="visually-hidden" for="inlineFormInputGroup">Username</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-text">@</div>
                                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" id="autoSizingCheck">
                                                <label class="form-check-label" for="autoSizingCheck">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form Row</h4>
                            </div>

                            <div class="card-body">
                                <form>
                                    <div class="row g-2">
                                        <div class="mb-3 col-md-6">
                                            <label for="inputEmail4" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputPassword4" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputAddress" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputAddress2" class="form-label">Address 2</label>
                                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                    </div>

                                    <div class="row g-2">
                                        <div class="mb-3 col-md-6">
                                            <label for="inputCity" class="form-label">City</label>
                                            <input type="text" class="form-control" id="inputCity">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label for="inputState" class="form-label">State</label>
                                            <select id="inputState" class="form-select">
                                                <option>Choose</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-2">
                                            <label for="inputZip" class="form-label">Zip</label>
                                            <input type="text" class="form-control" id="inputZip">
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck11">
                                            <label class="form-check-label" for="customCheck11">Check this custom checkbox</label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </form>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Floating Labels</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <form action="#">
                                    <div class="row g-3">
                                        <!-- Username -->
                                        <div class="col-lg-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="usernameInput" placeholder="Enter username">
                                                <label for="usernameInput">Username</label>
                                            </div>
                                        </div>

                                        <!-- Full Name -->
                                        <div class="col-lg-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="fullnameInput" placeholder="Enter full name">
                                                <label for="fullnameInput">Full Name</label>
                                            </div>
                                        </div>

                                        <!-- Phone Number -->
                                        <div class="col-lg-4">
                                            <div class="form-floating">
                                                <input type="tel" class="form-control" id="phoneInput" placeholder="Enter phone number">
                                                <label for="phoneInput">Phone Number</label>
                                            </div>
                                        </div>

                                        <!-- Date of Birth -->
                                        <div class="col-lg-4">
                                            <div class="form-floating">
                                                <input type="date" class="form-control" id="dobInput">
                                                <label for="dobInput">Date of Birth</label>
                                            </div>
                                        </div>

                                        <!-- Gender -->
                                        <div class="col-lg-4">
                                            <div class="form-floating">
                                                <select class="form-select" id="genderSelect" aria-label="Select gender">
                                                    <option selected>Choose...</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                    <option value="3">Other</option>
                                                </select>
                                                <label for="genderSelect">Gender</label>
                                            </div>
                                        </div>

                                        <!-- Address -->
                                        <div class="col-lg-8">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="addressInput" placeholder="Enter your address">
                                                <label for="addressInput">Street Address</label>
                                            </div>
                                        </div>

                                        <!-- State -->
                                        <div class="col-lg-4">
                                            <div class="form-floating">
                                                <select class="form-select" id="stateSelect" aria-label="Select state">
                                                    <option selected>Choose...</option>
                                                    <option value="1">California</option>
                                                    <option value="2">Texas</option>
                                                    <option value="3">Florida</option>
                                                </select>
                                                <label for="stateSelect">State</label>
                                            </div>
                                        </div>

                                        <!-- Website -->
                                        <div class="col-lg-6">
                                            <div class="form-floating">
                                                <input type="url" class="form-control" id="websiteInput" placeholder="Enter website URL">
                                                <label for="websiteInput">Website (optional)</label>
                                            </div>
                                        </div>

                                        <!-- Bio -->
                                        <div class="col-lg-6">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Tell us about yourself" id="bioTextarea" style="height: 100px"></textarea>
                                                <label for="bioTextarea">Short Bio</label>
                                            </div>
                                        </div>

                                        <!-- Submit -->
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-success">Create Account</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- container -->

            <?php include 'partials/footer.php' ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?php include 'partials/customizer.php' ?>

    <?php include 'partials/footer-scripts.php' ?>

</body>

</html>