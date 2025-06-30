<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-skin="saas">

<head>
    <meta charset="utf-8">
    <title>INSPINIA - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Inspinia is the #1 best-selling admin dashboard template on WrapBootstrap. Perfect for building CRM, CMS, project management tools, and custom web apps with clean UI, responsive design, and powerful features.">
    <meta name="keywords" content="Inspinia, admin dashboard, WrapBootstrap, HTML template, Bootstrap admin, CRM template, CMS template, responsive admin, web app UI, admin theme, best admin template">
    <meta name="author" content="WebAppLayers">

    <!-- App favicon -->
    <link rel="shortcut icon" href="/images/favicon.ico">

    <style>
        .ani-menu-item {
            background: linear-gradient(to right, #cd537f 20%, #00affa 30%, #0190cd 70%, #da4a7e 80%) !important;
            -webkit-background-clip: text !important;
            background-clip: text !important;
            -webkit-text-fill-color: transparent !important;
        }
    </style>

    <!-- Theme Config Js -->
    <script src="/js/config.js"></script>

    <!-- Vendor css -->
    <link href="/css/vendors.min.css" rel="stylesheet" type="text/css">

    <!-- App css -->
    <link href="/css/app.min.css" rel="stylesheet" type="text/css" id="app-style">

</head>

<body class="bg-body-secondary" data-bs-spy="scroll" data-bs-target="#navbar-example">
    <!-- Top Alert -->
    <div class="alert alert-primary top-alert text-center mb-0 rounded-0 alert-dismissible" role="alert">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        <div class="fst-italic fw-medium">🚀 INSPINIA 4.x is here! Now with Bootstrap 5, dark mode, and a refreshed UI. Upgrade today for the best experience! <a href="https://wrapbootstrap.com/theme/inspinia-multipurpose-admin-dashboard-template-WB0R5L90S?ref=inspinia" target="_blank" class="fw-semibold fst-normal text-white text-decoration-underline link-offset-3 ms-2">Buy Now!</a></div>
    </div>

    <!-- Header START -->
    <header>
        <!-- Nav START -->
        <nav class="navbar navbar-expand-lg py-3 sticky-top" id="landing-navbar">
            <div class="container">
                <div class="auth-brand mb-0">
                    <a href="/" class="logo-dark">
                        <img src="/images/logo-black.png" alt="dark logo" height="32">
                    </a>
                    <a href="/" class="logo-light">
                        <img src="/images/logo.png" alt="logo" height="32">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav fw-medium gap-2 fs-sm ms-auto mt-2 mt-lg-0" id="navbar-example">
                        <li class="nav-item">
                            <a class="nav-link active" href="#demos">Check Demos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ani-menu-item fs-15 fw-semibold" href="#upcoming">Upcoming</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#github">Github Access</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="inspinia-3">Inspinia 3x</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="https://forms.gle/9fTs13TPUFPjNWgn6">Suggestions?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="https://wrapbootstrap.com/user/WebAppLayers/message">Get Support</a>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-link btn-icon fw-semibold text-body me-2" type="button" id="theme-toggle"> <i class="ti ti-contrast fs-22"></i> </button>
                        </li>
                    </ul>
                </div> <!-- end .navbar-collapse-->

            </div> <!-- end container-->
        </nav>
        <!-- Nav END -->
    </header>
    <!-- Header END -->


    <!-- =======================
            HERO SECTION
    ======================= -->
    <section class="bg-light bg-opacity-50 border-top border-light position-relative" id="hero">

        <!-- Background Pattern -->
        <div class="position-absolute top-0 start-50 translate-middle-x mt-5">
            <img src="/images/bg-pattern.png" alt="">
        </div>

        <div class="container pt-5 position-relative">
            <!-- Hero Content Row -->
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">

                    <!-- Pre Info Text -->
                    <span class="fw-semibold text-muted fst-italic">Trusted by 51k+ happy customers</span>

                    <!-- Avatar Group -->
                    <div class="avatar-group avatar-group-sm justify-content-center mt-2">
                        <div class="avatar">
                            <img src="/images/users/user-7.jpg" alt="Ava Lee" class="avatar-sm rounded-circle">
                        </div>
                        <div class="avatar">
                            <img src="/images/users/user-8.jpg" alt="Ethan King" class="avatar-sm rounded-circle">
                        </div>
                        <div class="avatar">
                            <img src="/images/users/user-9.jpg" alt="Lucas White" class="avatar-sm rounded-circle">
                        </div>
                        <div class="avatar">
                            <img src="/images/users/user-1.jpg" alt="Lucas White" class="avatar-sm rounded-circle">
                        </div>
                        <div class="avatar">
                            <img src="/images/users/user-2.jpg" alt="Lucas White" class="avatar-sm rounded-circle">
                        </div>
                    </div>

                    <!-- Hero Title -->
                    <h1 class="my-4 fs-36 fw-bold lh-base">
                        The #1 <span class="text-primary">Admin Dashboard</span> Template on WrapBootstrap –
                        <span class="fst-italic text-muted">Trusted by Thousands</span>
                    </h1>

                    <!-- Hero Description -->
                    <p class="mb-4 fs-15 text-muted lh-lg">
                        Build powerful, modern web applications with our top-rated Admin Dashboard Template.
                        Designed for performance, flexibility, and ease of customization, it’s the perfect solution
                        for startups, agencies, and enterprise teams.
                    </p>

                    <!-- Call to Action Buttons -->
                    <div class="d-flex gap-1 gap-sm-2 flex-wrap justify-content-center">
                        <a class="btn btn-danger py-2 fw-semibold" href="https://wrapbootstrap.com/theme/inspinia-multipurpose-admin-dashboard-template-WB0R5L90S?ref=inspinia" target="_blank">
                            <i class="ti ti-basket fs-xl me-2"></i>Buy Now! - $49
                        </a>
                        <a class="btn btn-light py-2 fw-semibold" href="https://wrapbootstrap.com/user/WebAppLayers/message" target="_blank">
                            <i class="ti ti-confetti fs-xl me-2"></i>Contact Us
                        </a>
                    </div>
                </div>
            </div>

            <!-- Images & Clients Section -->
            <div class="container position-relative">
                <!-- Hero Illustration Image Row -->
                <div class="row">
                    <div class="col-md-8 mx-auto position-relative">

                        <!-- Decorative SVG Element -->
                        <figure class="position-absolute top-0 start-0 translate-middle mt-5 opacity-50">
                            <svg width="111" height="170" viewBox="0 0 111 170" fill="#1ab394" xmlns="http://www.w3.org/2000/svg">
                                <path d="M99.2319 7.37436C100.054 7.30936 101.638 15.7474 102.856 26.059C104.147 36.3089 105.01 48.3589 105.287 55.3911C105.778 69.3822 104.459 80.6992 102.753 80.7559C100.986 80.7391 99.5737 69.5262 99.0765 55.6027C98.7941 48.638 98.612 36.5788 98.4807 26.2931C98.3494 16.0074 98.3422 7.43353 99.2319 7.37436Z" />
                                <path d="M80.3888 75.0118C79.555 75.2119 77.8208 71.6599 75.6665 67.4591C73.5063 63.3259 70.8525 58.6057 69.3802 55.9609C66.4471 50.5361 64.4804 45.7392 65.8687 44.6345C67.1836 43.5915 71.6484 47.0394 74.8842 52.8986C76.5416 55.7636 78.7318 61.1241 79.8822 65.9185C81.0327 70.7128 81.2226 74.8118 80.3888 75.0118Z" />
                                <path d="M61.7883 89.4615C61.3805 90.2428 54.8078 87.5652 47.1688 83.8428C39.5297 80.1205 30.9035 75.2241 26.0659 72.1522C16.3908 66.0084 9.53733 59.4962 10.5438 58.0863C11.5502 56.6764 19.903 60.8007 29.4489 66.8652C34.2189 69.9313 42.3932 75.3329 49.4043 80.0217C56.4097 84.7779 62.1902 88.7478 61.7883 89.4615Z" />
                                <path d="M46.1586 113.626C46.0151 114.498 42.6533 114.82 38.7186 114.684C34.7105 114.609 30.1297 114.077 27.4574 113.506C22.1804 112.369 18.3033 109.993 18.7195 108.328C19.1356 106.663 23.5897 106.299 28.7317 107.424C31.2689 107.984 35.6563 109.18 39.43 110.39C43.2037 111.601 46.2962 112.821 46.1586 113.626Z" />
                                <path d="M52.2364 144.838C52.4365 145.672 46.3447 147.663 39.1256 150.101C31.9065 152.538 23.5601 155.423 18.719 157.114C9.04856 160.36 0.851466 162.305 0.169487 160.749C-0.512493 159.193 6.75837 154.583 16.7107 151.225C21.6868 149.545 30.3976 147.169 38.0635 145.858C45.6002 144.469 52.0363 144.005 52.2364 144.838Z" />
                            </svg>
                        </figure>

                        <!-- Hero Main Image -->
                        <img src="/images/dashboard-1.png" class="rounded-top-4 shadow-lg img-fluid mt-5" alt="saas-img">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
            HERO SECTION END
    ======================= -->


    <!-- =======================
        Demos SECTION
    ======================= -->
    <section class="section-custom bg-light bg-opacity-30 border-top border-light border-bottom" id="demos">
        <div class="container">

            <div class="row">
                <div class="col-12 text-center">
                    <span class="text-muted rounded-3 d-inline-block">📊 Explore feature-rich and customizable dashboards</span>
                    <h2 class="mt-3 fw-bold mb-5">Choose the <mark class="fst-italic">Admin Demo</mark> That Suits Your Project</h2>
                </div>
            </div> <!-- end row -->


            <div class="row align-items-center justify-content-center pb-5 gx-5">
                <div class="col-lg-4">
                    <div class="position-relative">
                        <figure class="position-absolute top-0 start-0 translate-middle mt-5 opacity-25">
                            <svg width="55" height="85" viewBox="0 0 111 170" fill="#1ab394" xmlns="http://www.w3.org/2000/svg">
                                <path d="M99.2319 7.37436C100.054 7.30936 101.638 15.7474 102.856 26.059C104.147 36.3089 105.01 48.3589 105.287 55.3911C105.778 69.3822 104.459 80.6992 102.753 80.7559C100.986 80.7391 99.5737 69.5262 99.0765 55.6027C98.7941 48.638 98.612 36.5788 98.4807 26.2931C98.3494 16.0074 98.3422 7.43353 99.2319 7.37436Z" />
                                <path d="M80.3888 75.0118C79.555 75.2119 77.8208 71.6599 75.6665 67.4591C73.5063 63.3259 70.8525 58.6057 69.3802 55.9609C66.4471 50.5361 64.4804 45.7392 65.8687 44.6345C67.1836 43.5915 71.6484 47.0394 74.8842 52.8986C76.5416 55.7636 78.7318 61.1241 79.8822 65.9185C81.0327 70.7128 81.2226 74.8118 80.3888 75.0118Z" />
                                <path d="M61.7883 89.4615C61.3805 90.2428 54.8078 87.5652 47.1688 83.8428C39.5297 80.1205 30.9035 75.2241 26.0659 72.1522C16.3908 66.0084 9.53733 59.4962 10.5438 58.0863C11.5502 56.6764 19.903 60.8007 29.4489 66.8652C34.2189 69.9313 42.3932 75.3329 49.4043 80.0217C56.4097 84.7779 62.1902 88.7478 61.7883 89.4615Z" />
                                <path d="M46.1586 113.626C46.0151 114.498 42.6533 114.82 38.7186 114.684C34.7105 114.609 30.1297 114.077 27.4574 113.506C22.1804 112.369 18.3033 109.993 18.7195 108.328C19.1356 106.663 23.5897 106.299 28.7317 107.424C31.2689 107.984 35.6563 109.18 39.43 110.39C43.2037 111.601 46.2962 112.821 46.1586 113.626Z" />
                                <path d="M52.2364 144.838C52.4365 145.672 46.3447 147.663 39.1256 150.101C31.9065 152.538 23.5601 155.423 18.719 157.114C9.04856 160.36 0.851466 162.305 0.169487 160.749C-0.512493 159.193 6.75837 154.583 16.7107 151.225C21.6868 149.545 30.3976 147.169 38.0635 145.858C45.6002 144.469 52.0363 144.005 52.2364 144.838Z" />
                            </svg>
                        </figure>

                        <a href="classic/index" target="_blank">
                            <img src="/images/demos/classic.png" class="rounded-3 shadow-lg img-fluid mt-5 z-1 position-relative" alt="saas-img">
                        </a>
                    </div> <!-- end position relative -->

                    <div class="text-center py-3">
                        <h4 class="mb-0">Classic</h4>
                    </div>
                </div> <!-- end col-->

                <div class="col-lg-4">
                    <div class="position-relative">
                        <figure class="position-absolute top-0 start-0 translate-middle mt-5 opacity-25">
                            <svg width="55" height="85" viewBox="0 0 111 170" fill="#1ab394" xmlns="http://www.w3.org/2000/svg">
                                <path d="M99.2319 7.37436C100.054 7.30936 101.638 15.7474 102.856 26.059C104.147 36.3089 105.01 48.3589 105.287 55.3911C105.778 69.3822 104.459 80.6992 102.753 80.7559C100.986 80.7391 99.5737 69.5262 99.0765 55.6027C98.7941 48.638 98.612 36.5788 98.4807 26.2931C98.3494 16.0074 98.3422 7.43353 99.2319 7.37436Z" />
                                <path d="M80.3888 75.0118C79.555 75.2119 77.8208 71.6599 75.6665 67.4591C73.5063 63.3259 70.8525 58.6057 69.3802 55.9609C66.4471 50.5361 64.4804 45.7392 65.8687 44.6345C67.1836 43.5915 71.6484 47.0394 74.8842 52.8986C76.5416 55.7636 78.7318 61.1241 79.8822 65.9185C81.0327 70.7128 81.2226 74.8118 80.3888 75.0118Z" />
                                <path d="M61.7883 89.4615C61.3805 90.2428 54.8078 87.5652 47.1688 83.8428C39.5297 80.1205 30.9035 75.2241 26.0659 72.1522C16.3908 66.0084 9.53733 59.4962 10.5438 58.0863C11.5502 56.6764 19.903 60.8007 29.4489 66.8652C34.2189 69.9313 42.3932 75.3329 49.4043 80.0217C56.4097 84.7779 62.1902 88.7478 61.7883 89.4615Z" />
                                <path d="M46.1586 113.626C46.0151 114.498 42.6533 114.82 38.7186 114.684C34.7105 114.609 30.1297 114.077 27.4574 113.506C22.1804 112.369 18.3033 109.993 18.7195 108.328C19.1356 106.663 23.5897 106.299 28.7317 107.424C31.2689 107.984 35.6563 109.18 39.43 110.39C43.2037 111.601 46.2962 112.821 46.1586 113.626Z" />
                                <path d="M52.2364 144.838C52.4365 145.672 46.3447 147.663 39.1256 150.101C31.9065 152.538 23.5601 155.423 18.719 157.114C9.04856 160.36 0.851466 162.305 0.169487 160.749C-0.512493 159.193 6.75837 154.583 16.7107 151.225C21.6868 149.545 30.3976 147.169 38.0635 145.858C45.6002 144.469 52.0363 144.005 52.2364 144.838Z" />
                            </svg>
                        </figure>

                        <a href="saas/index" target="_blank">
                            <img src="/images/demos/saas.png" class="rounded-3 shadow-lg img-fluid mt-5 z-1 position-relative" alt="saas-img">
                        </a>
                    </div> <!-- end position relative -->

                    <div class="text-center py-3">
                        <h4 class="mb-0">SaaS</h4>
                    </div>
                </div> <!-- end col-->

                <div class="col-lg-4">
                    <div class="position-relative">
                        <figure class="position-absolute top-0 start-0 translate-middle mt-5 opacity-25">
                            <svg width="55" height="85" viewBox="0 0 111 170" fill="#1ab394" xmlns="http://www.w3.org/2000/svg">
                                <path d="M99.2319 7.37436C100.054 7.30936 101.638 15.7474 102.856 26.059C104.147 36.3089 105.01 48.3589 105.287 55.3911C105.778 69.3822 104.459 80.6992 102.753 80.7559C100.986 80.7391 99.5737 69.5262 99.0765 55.6027C98.7941 48.638 98.612 36.5788 98.4807 26.2931C98.3494 16.0074 98.3422 7.43353 99.2319 7.37436Z" />
                                <path d="M80.3888 75.0118C79.555 75.2119 77.8208 71.6599 75.6665 67.4591C73.5063 63.3259 70.8525 58.6057 69.3802 55.9609C66.4471 50.5361 64.4804 45.7392 65.8687 44.6345C67.1836 43.5915 71.6484 47.0394 74.8842 52.8986C76.5416 55.7636 78.7318 61.1241 79.8822 65.9185C81.0327 70.7128 81.2226 74.8118 80.3888 75.0118Z" />
                                <path d="M61.7883 89.4615C61.3805 90.2428 54.8078 87.5652 47.1688 83.8428C39.5297 80.1205 30.9035 75.2241 26.0659 72.1522C16.3908 66.0084 9.53733 59.4962 10.5438 58.0863C11.5502 56.6764 19.903 60.8007 29.4489 66.8652C34.2189 69.9313 42.3932 75.3329 49.4043 80.0217C56.4097 84.7779 62.1902 88.7478 61.7883 89.4615Z" />
                                <path d="M46.1586 113.626C46.0151 114.498 42.6533 114.82 38.7186 114.684C34.7105 114.609 30.1297 114.077 27.4574 113.506C22.1804 112.369 18.3033 109.993 18.7195 108.328C19.1356 106.663 23.5897 106.299 28.7317 107.424C31.2689 107.984 35.6563 109.18 39.43 110.39C43.2037 111.601 46.2962 112.821 46.1586 113.626Z" />
                                <path d="M52.2364 144.838C52.4365 145.672 46.3447 147.663 39.1256 150.101C31.9065 152.538 23.5601 155.423 18.719 157.114C9.04856 160.36 0.851466 162.305 0.169487 160.749C-0.512493 159.193 6.75837 154.583 16.7107 151.225C21.6868 149.545 30.3976 147.169 38.0635 145.858C45.6002 144.469 52.0363 144.005 52.2364 144.838Z" />
                            </svg>
                        </figure>

                        <a href="material/index" target="_blank">
                            <img src="/images/demos/material.png" class="rounded-3 shadow-lg img-fluid mt-5 z-1 position-relative" alt="saas-img">
                        </a>
                    </div> <!-- end position relative -->

                    <div class="text-center py-3">
                        <h4 class="mb-0">Material</h4>
                    </div>
                </div> <!-- end col-->

                <div class="col-lg-4">
                    <div class="position-relative">
                        <figure class="position-absolute top-0 start-0 translate-middle mt-5 opacity-25">
                            <svg width="55" height="85" viewBox="0 0 111 170" fill="#1ab394" xmlns="http://www.w3.org/2000/svg">
                                <path d="M99.2319 7.37436C100.054 7.30936 101.638 15.7474 102.856 26.059C104.147 36.3089 105.01 48.3589 105.287 55.3911C105.778 69.3822 104.459 80.6992 102.753 80.7559C100.986 80.7391 99.5737 69.5262 99.0765 55.6027C98.7941 48.638 98.612 36.5788 98.4807 26.2931C98.3494 16.0074 98.3422 7.43353 99.2319 7.37436Z" />
                                <path d="M80.3888 75.0118C79.555 75.2119 77.8208 71.6599 75.6665 67.4591C73.5063 63.3259 70.8525 58.6057 69.3802 55.9609C66.4471 50.5361 64.4804 45.7392 65.8687 44.6345C67.1836 43.5915 71.6484 47.0394 74.8842 52.8986C76.5416 55.7636 78.7318 61.1241 79.8822 65.9185C81.0327 70.7128 81.2226 74.8118 80.3888 75.0118Z" />
                                <path d="M61.7883 89.4615C61.3805 90.2428 54.8078 87.5652 47.1688 83.8428C39.5297 80.1205 30.9035 75.2241 26.0659 72.1522C16.3908 66.0084 9.53733 59.4962 10.5438 58.0863C11.5502 56.6764 19.903 60.8007 29.4489 66.8652C34.2189 69.9313 42.3932 75.3329 49.4043 80.0217C56.4097 84.7779 62.1902 88.7478 61.7883 89.4615Z" />
                                <path d="M46.1586 113.626C46.0151 114.498 42.6533 114.82 38.7186 114.684C34.7105 114.609 30.1297 114.077 27.4574 113.506C22.1804 112.369 18.3033 109.993 18.7195 108.328C19.1356 106.663 23.5897 106.299 28.7317 107.424C31.2689 107.984 35.6563 109.18 39.43 110.39C43.2037 111.601 46.2962 112.821 46.1586 113.626Z" />
                                <path d="M52.2364 144.838C52.4365 145.672 46.3447 147.663 39.1256 150.101C31.9065 152.538 23.5601 155.423 18.719 157.114C9.04856 160.36 0.851466 162.305 0.169487 160.749C-0.512493 159.193 6.75837 154.583 16.7107 151.225C21.6868 149.545 30.3976 147.169 38.0635 145.858C45.6002 144.469 52.0363 144.005 52.2364 144.838Z" />
                            </svg>
                        </figure>

                        <a href="modern/index" target="_blank">
                            <img src="/images/demos/modern.png" class="rounded-3 shadow-lg img-fluid mt-5 z-1 position-relative" alt="saas-img">
                        </a>
                    </div> <!-- end position relative -->

                    <div class="text-center py-3">
                        <h4 class="mb-0">Modern</h4>
                    </div>
                </div> <!-- end col-->

                <div class="col-lg-4">
                    <div class="position-relative">
                        <figure class="position-absolute top-0 start-0 translate-middle mt-5 opacity-25">
                            <svg width="55" height="85" viewBox="0 0 111 170" fill="#1ab394" xmlns="http://www.w3.org/2000/svg">
                                <path d="M99.2319 7.37436C100.054 7.30936 101.638 15.7474 102.856 26.059C104.147 36.3089 105.01 48.3589 105.287 55.3911C105.778 69.3822 104.459 80.6992 102.753 80.7559C100.986 80.7391 99.5737 69.5262 99.0765 55.6027C98.7941 48.638 98.612 36.5788 98.4807 26.2931C98.3494 16.0074 98.3422 7.43353 99.2319 7.37436Z" />
                                <path d="M80.3888 75.0118C79.555 75.2119 77.8208 71.6599 75.6665 67.4591C73.5063 63.3259 70.8525 58.6057 69.3802 55.9609C66.4471 50.5361 64.4804 45.7392 65.8687 44.6345C67.1836 43.5915 71.6484 47.0394 74.8842 52.8986C76.5416 55.7636 78.7318 61.1241 79.8822 65.9185C81.0327 70.7128 81.2226 74.8118 80.3888 75.0118Z" />
                                <path d="M61.7883 89.4615C61.3805 90.2428 54.8078 87.5652 47.1688 83.8428C39.5297 80.1205 30.9035 75.2241 26.0659 72.1522C16.3908 66.0084 9.53733 59.4962 10.5438 58.0863C11.5502 56.6764 19.903 60.8007 29.4489 66.8652C34.2189 69.9313 42.3932 75.3329 49.4043 80.0217C56.4097 84.7779 62.1902 88.7478 61.7883 89.4615Z" />
                                <path d="M46.1586 113.626C46.0151 114.498 42.6533 114.82 38.7186 114.684C34.7105 114.609 30.1297 114.077 27.4574 113.506C22.1804 112.369 18.3033 109.993 18.7195 108.328C19.1356 106.663 23.5897 106.299 28.7317 107.424C31.2689 107.984 35.6563 109.18 39.43 110.39C43.2037 111.601 46.2962 112.821 46.1586 113.626Z" />
                                <path d="M52.2364 144.838C52.4365 145.672 46.3447 147.663 39.1256 150.101C31.9065 152.538 23.5601 155.423 18.719 157.114C9.04856 160.36 0.851466 162.305 0.169487 160.749C-0.512493 159.193 6.75837 154.583 16.7107 151.225C21.6868 149.545 30.3976 147.169 38.0635 145.858C45.6002 144.469 52.0363 144.005 52.2364 144.838Z" />
                            </svg>
                        </figure>

                        <a href="minimal/index" target="_blank">
                            <img src="/images/demos/minimal.png" class="rounded-3 shadow-lg img-fluid mt-5 z-1 position-relative" alt="saas-img">
                        </a>
                    </div> <!-- end position relative -->

                    <div class="text-center py-3">
                        <h4 class="mb-0">Minimal</h4>
                    </div>
                </div> <!-- end col-->

                <div class="col-lg-4">
                    <div class="position-relative">
                        <figure class="position-absolute top-0 start-0 translate-middle mt-5 opacity-25">
                            <svg width="55" height="85" viewBox="0 0 111 170" fill="#1ab394" xmlns="http://www.w3.org/2000/svg">
                                <path d="M99.2319 7.37436C100.054 7.30936 101.638 15.7474 102.856 26.059C104.147 36.3089 105.01 48.3589 105.287 55.3911C105.778 69.3822 104.459 80.6992 102.753 80.7559C100.986 80.7391 99.5737 69.5262 99.0765 55.6027C98.7941 48.638 98.612 36.5788 98.4807 26.2931C98.3494 16.0074 98.3422 7.43353 99.2319 7.37436Z" />
                                <path d="M80.3888 75.0118C79.555 75.2119 77.8208 71.6599 75.6665 67.4591C73.5063 63.3259 70.8525 58.6057 69.3802 55.9609C66.4471 50.5361 64.4804 45.7392 65.8687 44.6345C67.1836 43.5915 71.6484 47.0394 74.8842 52.8986C76.5416 55.7636 78.7318 61.1241 79.8822 65.9185C81.0327 70.7128 81.2226 74.8118 80.3888 75.0118Z" />
                                <path d="M61.7883 89.4615C61.3805 90.2428 54.8078 87.5652 47.1688 83.8428C39.5297 80.1205 30.9035 75.2241 26.0659 72.1522C16.3908 66.0084 9.53733 59.4962 10.5438 58.0863C11.5502 56.6764 19.903 60.8007 29.4489 66.8652C34.2189 69.9313 42.3932 75.3329 49.4043 80.0217C56.4097 84.7779 62.1902 88.7478 61.7883 89.4615Z" />
                                <path d="M46.1586 113.626C46.0151 114.498 42.6533 114.82 38.7186 114.684C34.7105 114.609 30.1297 114.077 27.4574 113.506C22.1804 112.369 18.3033 109.993 18.7195 108.328C19.1356 106.663 23.5897 106.299 28.7317 107.424C31.2689 107.984 35.6563 109.18 39.43 110.39C43.2037 111.601 46.2962 112.821 46.1586 113.626Z" />
                                <path d="M52.2364 144.838C52.4365 145.672 46.3447 147.663 39.1256 150.101C31.9065 152.538 23.5601 155.423 18.719 157.114C9.04856 160.36 0.851466 162.305 0.169487 160.749C-0.512493 159.193 6.75837 154.583 16.7107 151.225C21.6868 149.545 30.3976 147.169 38.0635 145.858C45.6002 144.469 52.0363 144.005 52.2364 144.838Z" />
                            </svg>
                        </figure>

                        <a href="flat/index" target="_blank">
                            <img src="/images/demos/flat.png" class="rounded-3 shadow-lg img-fluid mt-5 z-1 position-relative" alt="saas-img">
                        </a>
                    </div> <!-- end position relative -->

                    <div class="text-center py-3">
                        <h4 class="mb-0">Flat</h4>
                    </div>
                </div> <!-- end col-->

                <div class="col-lg-4">
                    <div class="position-relative">
                        <figure class="position-absolute top-0 start-0 translate-middle mt-5 opacity-25">
                            <svg width="55" height="85" viewBox="0 0 111 170" fill="#1ab394" xmlns="http://www.w3.org/2000/svg">
                                <path d="M99.2319 7.37436C100.054 7.30936 101.638 15.7474 102.856 26.059C104.147 36.3089 105.01 48.3589 105.287 55.3911C105.778 69.3822 104.459 80.6992 102.753 80.7559C100.986 80.7391 99.5737 69.5262 99.0765 55.6027C98.7941 48.638 98.612 36.5788 98.4807 26.2931C98.3494 16.0074 98.3422 7.43353 99.2319 7.37436Z" />
                                <path d="M80.3888 75.0118C79.555 75.2119 77.8208 71.6599 75.6665 67.4591C73.5063 63.3259 70.8525 58.6057 69.3802 55.9609C66.4471 50.5361 64.4804 45.7392 65.8687 44.6345C67.1836 43.5915 71.6484 47.0394 74.8842 52.8986C76.5416 55.7636 78.7318 61.1241 79.8822 65.9185C81.0327 70.7128 81.2226 74.8118 80.3888 75.0118Z" />
                                <path d="M61.7883 89.4615C61.3805 90.2428 54.8078 87.5652 47.1688 83.8428C39.5297 80.1205 30.9035 75.2241 26.0659 72.1522C16.3908 66.0084 9.53733 59.4962 10.5438 58.0863C11.5502 56.6764 19.903 60.8007 29.4489 66.8652C34.2189 69.9313 42.3932 75.3329 49.4043 80.0217C56.4097 84.7779 62.1902 88.7478 61.7883 89.4615Z" />
                                <path d="M46.1586 113.626C46.0151 114.498 42.6533 114.82 38.7186 114.684C34.7105 114.609 30.1297 114.077 27.4574 113.506C22.1804 112.369 18.3033 109.993 18.7195 108.328C19.1356 106.663 23.5897 106.299 28.7317 107.424C31.2689 107.984 35.6563 109.18 39.43 110.39C43.2037 111.601 46.2962 112.821 46.1586 113.626Z" />
                                <path d="M52.2364 144.838C52.4365 145.672 46.3447 147.663 39.1256 150.101C31.9065 152.538 23.5601 155.423 18.719 157.114C9.04856 160.36 0.851466 162.305 0.169487 160.749C-0.512493 159.193 6.75837 154.583 16.7107 151.225C21.6868 149.545 30.3976 147.169 38.0635 145.858C45.6002 144.469 52.0363 144.005 52.2364 144.838Z" />
                            </svg>
                        </figure>

                        <img src="/images/demos/galaxy.png" class="rounded-3 shadow-lg img-fluid mt-5 z-1 position-relative" alt="saas-img">

                    </div> <!-- end position relative -->

                    <div class="text-center py-3">
                        <h4 class="mb-0">Galaxy <span class="badge badge-soft-warning">Coming Soon!</span></h4>
                    </div>
                </div> <!-- end col-->


            </div> <!-- end row-->

        </div> <!-- end container-->
    </section>
    <!-- =======================
        Features SECTION END
    ======================= -->

    <!-- =======================
        PLANS SECTION
    ======================= -->
    <section class="section-custom" id="upcoming">
        <div class="container">

            <div class="row">
                <div class="col-12 text-center">
                    <span class="text-muted rounded-3 d-inline-block">🚀 React, Angular, ASP.NET, Laravel, Django & More Coming Soon</span>
                    <h2 class="mt-3 fw-bold mb-5">
                        <mark class="fst-italic">Multiple Frameworks</mark>, One Powerful Template — Coming Soon!
                    </h2>
                </div>
            </div> <!-- end row -->

            <div class="table-responsive">
                <table class="table table-bordered table-custom table-striped align-middle mb-0">
                    <thead class="bg-light-subtle text-center align-middle">
                        <tr class="fs-14">
                            <th scope="col">No.</th>
                            <th scope="col">Framework Name</th>
                            <th scope="col">Seed Project<br><small class="text-muted fw-normal fst-italic fs-12">Estimated Date</small></th>
                            <th scope="col">Full Version<br><small class="text-muted fw-normal fst-italic fs-12">Estimated Date</small></th>
                        </tr>
                    </thead>
                    <tbody class="text-center fs-15">
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 128 128">
                                            <linearGradient id="deviconAngular0" x1="14.704" x2="110.985" y1="46.27" y2="92.024" gradientTransform="matrix(1 0 0 -1 0 130)" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#e40035" />
                                                <stop offset=".24" stop-color="#f60a48" />
                                                <stop offset=".352" stop-color="#f20755" />
                                                <stop offset=".494" stop-color="#dc087d" />
                                                <stop offset=".745" stop-color="#9717e7" />
                                                <stop offset="1" stop-color="#6c00f5" />
                                            </linearGradient>
                                            <path fill="url(#deviconAngular0)" d="m124.5 21.3l-4.4 68.6L78.3 0zm-29 88.7L64 128l-31.5-18l6.4-15.5h50.3zM64 34.1l16.5 40.2h-33zM7.9 89.9L3.5 21.3L49.7 0z" />
                                            <linearGradient id="deviconAngular1" x1="28.733" x2="91.742" y1="117.071" y2="45.195" gradientTransform="matrix(1 0 0 -1 0 130)" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#ff31d9" />
                                                <stop offset="1" stop-color="#ff5be1" stop-opacity="0" />
                                            </linearGradient>
                                            <path fill="url(#deviconAngular1)" d="m124.5 21.3l-4.4 68.6L78.3 0zm-29 88.7L64 128l-31.5-18l6.4-15.5h50.3zM64 34.1l16.5 40.2h-33zM7.9 89.9L3.5 21.3L49.7 0z" />
                                        </svg>
                                    </span>
                                    Angular 19x
                                </div>
                            </td>
                            <td>1st June 2025</td>
                            <td>1st July 2025</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 128 128">
                                            <g fill="#61dafb">
                                                <circle cx="64" cy="64" r="11.4" />
                                                <path d="M107.3 45.2c-2.2-.8-4.5-1.6-6.9-2.3c.6-2.4 1.1-4.8 1.5-7.1c2.1-13.2-.2-22.5-6.6-26.1c-1.9-1.1-4-1.6-6.4-1.6c-7 0-15.9 5.2-24.9 13.9c-9-8.7-17.9-13.9-24.9-13.9c-2.4 0-4.5.5-6.4 1.6c-6.4 3.7-8.7 13-6.6 26.1c.4 2.3.9 4.7 1.5 7.1c-2.4.7-4.7 1.4-6.9 2.3C8.2 50 1.4 56.6 1.4 64s6.9 14 19.3 18.8c2.2.8 4.5 1.6 6.9 2.3c-.6 2.4-1.1 4.8-1.5 7.1c-2.1 13.2.2 22.5 6.6 26.1c1.9 1.1 4 1.6 6.4 1.6c7.1 0 16-5.2 24.9-13.9c9 8.7 17.9 13.9 24.9 13.9c2.4 0 4.5-.5 6.4-1.6c6.4-3.7 8.7-13 6.6-26.1c-.4-2.3-.9-4.7-1.5-7.1c2.4-.7 4.7-1.4 6.9-2.3c12.5-4.8 19.3-11.4 19.3-18.8s-6.8-14-19.3-18.8M92.5 14.7c4.1 2.4 5.5 9.8 3.8 20.3c-.3 2.1-.8 4.3-1.4 6.6c-5.2-1.2-10.7-2-16.5-2.5c-3.4-4.8-6.9-9.1-10.4-13c7.4-7.3 14.9-12.3 21-12.3c1.3 0 2.5.3 3.5.9M81.3 74c-1.8 3.2-3.9 6.4-6.1 9.6c-3.7.3-7.4.4-11.2.4c-3.9 0-7.6-.1-11.2-.4q-3.3-4.8-6-9.6c-1.9-3.3-3.7-6.7-5.3-10c1.6-3.3 3.4-6.7 5.3-10c1.8-3.2 3.9-6.4 6.1-9.6c3.7-.3 7.4-.4 11.2-.4c3.9 0 7.6.1 11.2.4q3.3 4.8 6 9.6c1.9 3.3 3.7 6.7 5.3 10c-1.7 3.3-3.4 6.6-5.3 10m8.3-3.3c1.5 3.5 2.7 6.9 3.8 10.3c-3.4.8-7 1.4-10.8 1.9c1.2-1.9 2.5-3.9 3.6-6c1.2-2.1 2.3-4.2 3.4-6.2M64 97.8c-2.4-2.6-4.7-5.4-6.9-8.3c2.3.1 4.6.2 6.9.2s4.6-.1 6.9-.2c-2.2 2.9-4.5 5.7-6.9 8.3m-18.6-15c-3.8-.5-7.4-1.1-10.8-1.9c1.1-3.3 2.3-6.8 3.8-10.3c1.1 2 2.2 4.1 3.4 6.1c1.2 2.2 2.4 4.1 3.6 6.1m-7-25.5c-1.5-3.5-2.7-6.9-3.8-10.3c3.4-.8 7-1.4 10.8-1.9c-1.2 1.9-2.5 3.9-3.6 6c-1.2 2.1-2.3 4.2-3.4 6.2M64 30.2c2.4 2.6 4.7 5.4 6.9 8.3c-2.3-.1-4.6-.2-6.9-.2s-4.6.1-6.9.2c2.2-2.9 4.5-5.7 6.9-8.3m22.2 21l-3.6-6c3.8.5 7.4 1.1 10.8 1.9c-1.1 3.3-2.3 6.8-3.8 10.3c-1.1-2.1-2.2-4.2-3.4-6.2M31.7 35c-1.7-10.5-.3-17.9 3.8-20.3c1-.6 2.2-.9 3.5-.9c6 0 13.5 4.9 21 12.3c-3.5 3.8-7 8.2-10.4 13c-5.8.5-11.3 1.4-16.5 2.5c-.6-2.3-1-4.5-1.4-6.6M7 64c0-4.7 5.7-9.7 15.7-13.4c2-.8 4.2-1.5 6.4-2.1c1.6 5 3.6 10.3 6 15.6c-2.4 5.3-4.5 10.5-6 15.5C15.3 75.6 7 69.6 7 64m28.5 49.3c-4.1-2.4-5.5-9.8-3.8-20.3c.3-2.1.8-4.3 1.4-6.6c5.2 1.2 10.7 2 16.5 2.5c3.4 4.8 6.9 9.1 10.4 13c-7.4 7.3-14.9 12.3-21 12.3c-1.3 0-2.5-.3-3.5-.9M96.3 93c1.7 10.5.3 17.9-3.8 20.3c-1 .6-2.2.9-3.5.9c-6 0-13.5-4.9-21-12.3c3.5-3.8 7-8.2 10.4-13c5.8-.5 11.3-1.4 16.5-2.5c.6 2.3 1 4.5 1.4 6.6m9-15.6c-2 .8-4.2 1.5-6.4 2.1c-1.6-5-3.6-10.3-6-15.6c2.4-5.3 4.5-10.5 6-15.5c13.8 4 22.1 10 22.1 15.6c0 4.7-5.8 9.7-15.7 13.4" />
                                            </g>
                                        </svg>
                                    </span>
                                    React 19x
                                </div>
                            </td>
                            <td>1st June 2025</td>
                            <td>5th July 2025</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 128 128">
                                        <circle cx="64" cy="64" r="64" />
                                        <path fill="url(#deviconNextjs0)" d="M106.317 112.014L49.167 38.4H38.4v51.179h8.614v-40.24l52.54 67.884a64 64 0 0 0 6.763-5.209" />
                                        <path fill="url(#deviconNextjs1)" d="M81.778 38.4h8.533v51.2h-8.533z" />
                                        <defs>
                                            <linearGradient id="deviconNextjs0" x1="109" x2="144.5" y1="116.5" y2="160.5" gradientTransform="scale(.71111)" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#fff" />
                                                <stop offset="1" stop-color="#fff" stop-opacity="0" />
                                            </linearGradient>
                                            <linearGradient id="deviconNextjs1" x1="121" x2="120.799" y1="54" y2="106.875" gradientTransform="scale(.71111)" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#fff" />
                                                <stop offset="1" stop-color="#fff" stop-opacity="0" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    Next.js 15x
                                </div>
                            </td>
                            <td>1st June 2025</td>
                            <td>5th July 2025</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 128 128">
                                            <g fill="#623697">
                                                <path d="M61.195 0h4.953c12.918.535 25.688 4.89 36.043 12.676c9.809 7.289 17.473 17.437 21.727 28.906c2.441 6.387 3.664 13.18 4.082 19.992v4.211c-.414 11.293-3.664 22.52-9.73 32.082c-6.801 10.895-16.922 19.73-28.727 24.828A64.4 64.4 0 0 1 65.082 128h-2.144c-11.735-.191-23.41-3.66-33.297-9.992c-11.196-7.113-20.114-17.785-25.028-30.117C1.891 81.19.441 74.02 0 66.812v-4.957c.504-14.39 5.953-28.609 15.41-39.496C23.168 13.31 33.5 6.48 44.887 2.937C50.172 1.27 55.676.41 61.195 0M25.191 37.523c-.03 12.153-.011 24.305-.011 36.454c1.43.011 2.86.011 4.293.011c-.075-10.433.101-20.863-.106-31.293c.48.907.918 1.84 1.465 2.707C37.035 54.91 43.105 64.5 49.309 74q2.607-.035 5.214.004c-.003-12.16-.007-24.32.004-36.48a308 308 0 0 0-4.25-.012c.075 10.32-.136 20.64.125 30.949c-6.507-10.352-13.101-20.645-19.695-30.945a371 371 0 0 0-5.516.007m38.844-.011c-.129 12.16-.004 24.32-.047 36.476c6.469-.015 12.938.024 19.41-.02a83 83 0 0 1 .024-3.952c-5.012-.016-10.027.007-15.043-.02c-.074-4.21-.004-8.426-.04-12.637c4.395-.078 8.79.012 13.18-.047c-.011-1.277-.011-2.554-.019-3.832c-4.387.141-8.773-.054-13.164.012q.019-6.035.02-12.078c4.699 0 9.398-.02 14.093.012c-.008-1.301 0-2.606.016-3.906c-6.145-.016-12.29-.008-18.43-.008m22.602.054c.004 1.266.004 2.528.008 3.79c3.488-.04 6.972.109 10.46.035c-.023 10.863.004 21.718-.011 32.574c1.46.043 2.93.035 4.39-.09c-.12-5.992.118-11.988-.156-17.977c.067-2.699-.07-5.394.117-8.09c.106-2.14-.277-4.277-.035-6.417c3.516.047 7.035.015 10.55.015a60 60 0 0 1 .075-3.832c-8.469-.105-16.937-.094-25.398-.008M13.55 69.094c-1.977.91-2.106 4.023-.149 5.027c1.72 1.18 4.305-.371 4.227-2.41c.133-2.004-2.29-3.688-4.078-2.617m29.23 15.289c-4.277 3.469-4.226 11.195.5 14.25c2.668 1.695 6.102 1.344 8.922.215q.017-.93.05-1.86c-2.671 1.395-6.41 1.68-8.675-.61c-2.965-3.237-2.297-9.269 1.613-11.476c2.211-1.164 4.907-.824 7.086.239c-.007-.66-.004-1.32 0-1.98c-3.097-1.099-6.922-1.04-9.496 1.222m17.207 2.71c-1.89.22-3.758 1.22-4.633 2.966c-1.253 2.496-1.109 5.867.864 7.96c2.035 2.297 5.945 2.32 8.18.297c2.425-2.308 2.699-6.468.757-9.164c-1.148-1.629-3.273-2.183-5.168-2.058m17.887 2.722c-1.66 2.883-1.332 7.25 1.598 9.211c2.183 1.22 4.933.832 7.074-.308q-.008-.927.031-1.848c-1.687 1.07-3.937 1.856-5.812.777c-1.309-.722-1.704-2.257-1.914-3.625c2.875-.039 5.746-.082 8.625-.074c-.075-1.828-.118-3.894-1.45-5.308c-2.199-2.43-6.644-1.657-8.152 1.175M69.46 87.48v12.008q.98-.001 1.973.004c.023-2.195-.04-4.394.023-6.594c.016-1.27.527-2.558 1.484-3.414c.801-.605 1.883-.27 2.801-.246q-.018-.954-.023-1.902c-1.793-.398-3.336.652-4.242 2.117c-.02-.633-.04-1.266-.051-1.894q-.986-.037-1.965-.079m0 0" />
                                                <path d="M58.758 89.223c1.652-.805 4.023-.41 4.945 1.3c1.05 1.887 1.027 4.383-.137 6.211c-1.52 2.286-5.527 1.786-6.523-.742c-1.008-2.258-.617-5.484 1.715-6.77zm20.282 3.191c.046-1.574 1.144-3.137 2.726-3.48c.976-.164 2.097.007 2.773.793c.672.714.813 1.714.98 2.64c-2.16.012-4.32-.031-6.48.047zm0 0" />
                                            </g>
                                        </svg>
                                    </span>
                                    ASP.NET Core 9x
                                </div>
                            </td>
                            <td>1st June 2025</td>
                            <td>15th June 2025</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 128 128">
                                            <linearGradient id="deviconDotNet0" x1="61.631" x2="62.022" y1="563.347" y2="563.347" gradientTransform="matrix(0 149.735 149.735 0 -84296.266 -9188.014)" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#0994dc" />
                                                <stop offset=".35" stop-color="#66cef5" />
                                                <stop offset=".35" stop-color="#66cef5" />
                                                <stop offset=".846" stop-color="#127bca" />
                                                <stop offset=".846" stop-color="#127bca" />
                                                <stop offset="1" stop-color="#127bca" />
                                            </linearGradient>
                                            <path fill="url(#deviconDotNet0)" d="M45.288 49.559c4.417 13.507 6.09 37.601 19.006 37.601c.982 0 1.977-.096 2.974-.286c-11.74-2.737-13.132-26.569-20.297-38.912a62 62 0 0 0-1.683 1.597" />
                                            <linearGradient id="deviconDotNet1" x1="61.705" x2="62.095" y1="563.34" y2="563.34" gradientTransform="matrix(0 153.551 153.551 0 -86442.719 -9435.969)" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#0e76bc" />
                                                <stop offset=".36" stop-color="#36aee8" />
                                                <stop offset=".36" stop-color="#36aee8" />
                                                <stop offset=".846" stop-color="#00adef" />
                                                <stop offset=".846" stop-color="#00adef" />
                                                <stop offset="1" stop-color="#00adef" />
                                            </linearGradient>
                                            <path fill="url(#deviconDotNet1)" d="M46.971 47.962c7.165 12.342 8.557 36.174 20.297 38.912a18.6 18.6 0 0 0 2.773-.749C59.502 80.961 56.59 57.819 48.453 46.678q-.739.616-1.482 1.284" />
                                            <path fill="#14559a" d="M57.294 40.623c-.98 0-1.977.096-2.977.286c-2.612.493-5.268 1.618-7.944 3.321c.73.722 1.427 1.547 2.081 2.448c2.723-2.259 5.427-3.928 8.12-4.932a18 18 0 0 1 3.029-.842a9.4 9.4 0 0 0-2.309-.281" />
                                            <linearGradient id="deviconDotNet2" x1="67.486" x2="67.876" y1="564.985" y2="564.985" gradientTransform="matrix(0 -122.178 -122.178 0 69099.289 8331.043)" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#1c63b7" />
                                                <stop offset=".5" stop-color="#33bdf2" />
                                                <stop offset="1" stop-color="#33bdf2" stop-opacity="0.42" />
                                            </linearGradient>
                                            <path fill="url(#deviconDotNet2)" d="M78.268 81.366a47 47 0 0 0 3.24-2.84c-4.488-13.443-6.095-37.883-19.101-37.883c-.93 0-1.868.087-2.804.26C71.45 43.85 72.968 69.625 78.268 81.366" />
                                            <path fill="#3092c4" d="M59.604 40.904a9.4 9.4 0 0 0-2.311-.282l5.114.019c-.929 0-1.867.086-2.803.263" />
                                            <path fill="#1969bc" d="M78.04 84.221a19 19 0 0 1-1.466-1.584c-2.188 1.549-4.368 2.724-6.533 3.489c.771.376 1.578.656 2.436.829c.664.136 1.353.206 2.075.206c2.431 0 4.353-.288 5.987-1.072c-.9-.488-1.726-1.118-2.499-1.868" />
                                            <linearGradient id="deviconDotNet3" x1="61.852" x2="62.243" y1="563.281" y2="563.281" gradientTransform="matrix(0 159.425 159.425 0 -89733.742 -9828.116)" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#166ab8" />
                                                <stop offset=".4" stop-color="#36aee8" />
                                                <stop offset=".4" stop-color="#36aee8" />
                                                <stop offset=".846" stop-color="#0798dd" />
                                                <stop offset=".846" stop-color="#0798dd" />
                                                <stop offset="1" stop-color="#0798dd" />
                                            </linearGradient>
                                            <path fill="url(#deviconDotNet3)" d="M56.573 41.748c10.611 5.55 11.534 30.684 20.001 40.889q.85-.6 1.691-1.271c-5.3-11.741-6.815-37.519-18.66-40.463q-1.515.282-3.032.845" />
                                            <linearGradient id="deviconDotNet4" x1="61.975" x2="62.366" y1="563.367" y2="563.367" gradientTransform="matrix(0 169.528 169.528 0 -95443.742 -10473.372)" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#124379" />
                                                <stop offset=".39" stop-color="#1487cb" />
                                                <stop offset=".39" stop-color="#1487cb" />
                                                <stop offset=".78" stop-color="#165197" />
                                                <stop offset=".78" stop-color="#165197" />
                                                <stop offset="1" stop-color="#165197" />
                                            </linearGradient>
                                            <path fill="url(#deviconDotNet4)" d="M48.453 46.678c8.137 11.141 11.049 34.284 21.588 39.448c2.166-.765 4.346-1.939 6.533-3.489c-8.467-10.205-9.39-35.338-20.001-40.889c-2.693 1.002-5.397 2.671-8.12 4.93" />
                                            <linearGradient id="deviconDotNet5" x1="1006.454" x2="1008.771" y1="-1412.08" y2="-1412.08" gradientTransform="matrix(4.038 0 0 -4.038 -4028.633 -5649.283)" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#33bdf2" stop-opacity="0.698" />
                                                <stop offset="1" stop-color="#1dacd8" />
                                            </linearGradient>
                                            <path fill="url(#deviconDotNet5)" d="M40.083 49.234c-1.275 2.883-2.578 6.674-4.152 11.621c3.131-4.413 6.253-8.214 9.357-11.295a34 34 0 0 0-1.382-3.606a46 46 0 0 0-3.823 3.28" />
                                            <path fill="#2b74b1" d="M45.037 45.121c-.374.268-.751.542-1.13.832c.495 1.08.953 2.292 1.38 3.607a67 67 0 0 1 1.684-1.597a22.4 22.4 0 0 0-1.934-2.842" />
                                            <path fill="#125a9e" d="M46.373 44.229q-.666.424-1.337.891c.695.855 1.333 1.81 1.936 2.844q.742-.673 1.482-1.287c-.654-.9-1.35-1.726-2.081-2.448" />
                                            <linearGradient id="deviconDotNet6" x1="67.564" x2="67.954" y1="565.48" y2="565.48" gradientTransform="scale(119.018 -119.018)rotate(90 317.323 249.05)" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#136ab4" />
                                                <stop offset=".6" stop-color="#59caf5" stop-opacity="0.549" />
                                                <stop offset="1" stop-color="#59caf5" stop-opacity="0.235" />
                                            </linearGradient>
                                            <path fill="url(#deviconDotNet6)" d="M118.751 39.594c-6.001 23.144-18.536 41.734-29.044 46.42h-.021l-.567.243l-.069.027l-.161.062l-.072.03l-.263.093l-.108.038l-.131.043l-.126.044l-.112.038l-.224.068l-.096.025l-.151.041l-.103.028l-.165.043l-.201.044c.475.175.97.264 1.503.264c9.965 0 20.013-17.858 36.638-47.556h-6.528z" />
                                            <linearGradient id="deviconDotNet7" x1="998.231" x2="1006.826" y1="-1414.829" y2="-1414.829" gradientTransform="matrix(4.038 0 0 -4.038 -4028.633 -5649.283)" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#05a1e6" stop-opacity="0.247" />
                                                <stop offset="1" stop-color="#05a1e6" />
                                            </linearGradient>
                                            <path fill="url(#deviconDotNet7)" d="m33.766 41.563l.019-.016l.023-.015h.013l.161-.062l.032-.016l.042-.017l.173-.062h.009l.383-.134l.057-.015l.164-.049l.075-.024l.165-.049l.063-.017l.548-.142l.075-.017l.16-.031l.078-.024l.161-.03h.038l.333-.062h.066l.154-.027l.087-.015l.147-.022l.081-.016l.358-.032a12 12 0 0 0-1.061-.054c-11.223 0-26.685 20.822-33.649 47.788h1.343a390 390 0 0 0 6.062-11.266c4.879-19.1 14.814-32.126 23.64-35.577" />
                                            <path fill="#0d82ca" d="M40.083 49.234a47 47 0 0 1 3.823-3.281a18 18 0 0 0-.911-1.761c-1.026 1.246-1.964 2.89-2.912 5.042" />
                                            <path fill="#0d82ca" d="M41.005 41.72c.733.614 1.39 1.46 1.99 2.473q.282-.347.58-.649a11.3 11.3 0 0 0-2.712-1.897l.12.057z" />
                                            <linearGradient id="deviconDotNet8" x1="67.491" x2="67.881" y1="564.359" y2="564.359" gradientTransform="matrix(0 -121.865 -121.865 0 68797.742 8310.488)" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#318ed5" />
                                                <stop offset="1" stop-color="#38a7e4" />
                                            </linearGradient>
                                            <path fill="url(#deviconDotNet8)" d="M10.127 77.138c10.233-19.719 15.081-32.199 23.64-35.577c-8.825 3.454-18.762 16.479-23.64 35.577" />
                                            <path fill="#127bca" d="M43.574 43.544c-.199.204-.389.417-.58.649c.322.538.621 1.124.913 1.76c.378-.29.756-.563 1.129-.832a15 15 0 0 0-1.462-1.577" />
                                            <linearGradient id="deviconDotNet9" x1="67.593" x2="67.984" y1="564.41" y2="564.41" gradientTransform="scale(118.46 -118.46)rotate(90 316.469 248.15)" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#05a1e6" />
                                                <stop offset="1" stop-color="#05a1e6" stop-opacity="0.549" />
                                            </linearGradient>
                                            <path fill="url(#deviconDotNet9)" d="m14.773 88.315l-.186.022h-.035l-.158.016h-.026l-.376.025h-.039c10.356-.29 15.091-5.475 17.44-12.997c1.785-5.701 3.252-10.505 4.537-14.535c-4.338 6.106-8.696 13.384-13.077 21.539c-2.112 3.93-5.325 5.572-8.08 5.922" />
                                            <linearGradient id="deviconDotNeta" x1="68.291" x2="68.682" y1="564.525" y2="564.525" gradientTransform="matrix(0 -100.1 -100.1 0 56536.551 6924.301)" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#1959a6" />
                                                <stop offset=".5" stop-color="#05a1e6" />
                                                <stop offset=".5" stop-color="#05a1e6" />
                                                <stop offset=".918" stop-color="#7ec5ea" />
                                                <stop offset="1" stop-color="#7ec5ea" />
                                            </linearGradient>
                                            <path fill="url(#deviconDotNeta)" d="M14.773 88.311c2.755-.351 5.968-1.991 8.08-5.923c4.381-8.151 8.741-15.431 13.075-21.538c1.577-4.949 2.878-8.737 4.154-11.621c-8.639 8.223-17.311 21.896-25.31 39.077" />
                                            <path fill="#05a1e6" d="M10.127 77.139a388 388 0 0 1-6.063 11.266h3.904a96 96 0 0 1 2.158-11.264" />
                                            <linearGradient id="deviconDotNetb" x1="67.892" x2="68.282" y1="563.82" y2="563.82" gradientTransform="scale(-110.211 110.211)rotate(-80 -301.688 322.91)" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#165096" />
                                                <stop offset="1" stop-color="#0d82ca" />
                                            </linearGradient>
                                            <path fill="url(#deviconDotNetb)" d="m37.073 40.709l-.083.016l-.146.021l-.086.015l-.154.027l-.066.016l-.333.058h-.038l-.162.032l-.081.022l-.157.031l-.074.018l-.549.142l-.063.018l-.166.049l-.075.021l-.163.049l-.06.016l-.381.134l-.173.06l-.072.03l-.161.06l-.054.026c-8.558 3.377-13.406 15.857-23.639 35.576A95 95 0 0 0 7.979 88.41h.547l3.755-.016h1.723l.375-.025h.024l.158-.016h.037l.186-.022c8-17.182 16.672-30.854 25.31-39.077c.95-2.152 1.887-3.796 2.911-5.04c-.6-1.013-1.256-1.861-1.988-2.476l-.021-.016l-.122-.059l-.121-.061l-.117-.057l-.139-.058l-.108-.047l-.227-.095l-.097-.036l-.169-.068l-.091-.03l-.235-.081h-.019l-.272-.077l-.061-.019l-.229-.064l-.053-.015a8 8 0 0 0-.569-.125l-.059-.016l-.247-.04l-.049-.015l-.292-.039h-.051l-.226-.025l-.358.033" />
                                            <linearGradient id="deviconDotNetc" x1="70.847" x2="71.237" y1="566.882" y2="566.882" gradientTransform="matrix(0 -56.721 -56.721 0 32252.127 4080.282)" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#05a1e6" />
                                                <stop offset=".874" stop-color="#0495d6" />
                                                <stop offset="1" stop-color="#0495d6" />
                                            </linearGradient>
                                            <path fill="url(#deviconDotNetc)" d="M95.311 52.407c-1.97 6.307-3.563 11.51-4.952 15.791c5.403-7.435 10.725-16.787 15.792-27.579c-5.913 1.857-9.065 6.107-10.84 11.788" />
                                            <linearGradient id="deviconDotNetd" x1="61.634" x2="62.024" y1="562.213" y2="562.213" gradientTransform="scale(-132.813 132.813)rotate(80 365.248 244.034)" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#38a7e4" stop-opacity="0.329" />
                                                <stop offset=".962" stop-color="#0e88d3" />
                                                <stop offset=".962" stop-color="#0e88d3" />
                                                <stop offset="1" stop-color="#0e88d3" />
                                            </linearGradient>
                                            <path fill="url(#deviconDotNetd)" d="M90.53 85.621c-.275.14-.552.273-.823.394c10.508-4.687 23.044-23.277 29.044-46.421h-1.216c-13.788 24.631-18.222 41.12-27.005 46.027" />
                                            <path fill="#079ae1" d="M83.668 83.552c2.287-2.791 4.148-7.535 6.691-15.354c-2.933 4.029-5.885 7.492-8.84 10.316l-.015.025c.645 1.931 1.352 3.636 2.158 5.012" />
                                            <path fill="#1969bc" d="M83.668 83.552c-.778.95-1.603 1.673-2.519 2.209q-.3.176-.61.327a8.8 8.8 0 0 0 3.206 1.011l.524.046h.031l.252.016h.855l.097-.016l.189-.016h.092l.205-.022h.017l.063-.015l.219-.034h.064l.246-.041h.04l.491-.104c-1.357-.496-2.492-1.667-3.469-3.334" />
                                            <path fill="#1e5cb3" d="M64.295 87.161c.982 0 1.976-.096 2.973-.288a18 18 0 0 0 2.773-.747c.771.376 1.579.656 2.435.831q.994.204 2.077.205H64.295zm10.258 0c2.429 0 4.353-.288 5.986-1.073a8.8 8.8 0 0 0 3.206 1.012l.524.045h.031l.252.016h.302z" />
                                            <path fill="#1d60b5" d="M84.854 87.161h.561l.097-.016l.191-.016h.092l.204-.022h.017l.062-.016l.219-.033l.067-.015l.247-.04h.039l.491-.104c.475.175.97.264 1.503.264l-3.788.016z" />
                                            <path fill="#175fab" d="M81.511 78.54v-.016a47 47 0 0 1-3.24 2.84a37 37 0 0 1-1.693 1.271c.476.568.959 1.1 1.468 1.585c.772.749 1.597 1.38 2.498 1.867q.309-.152.609-.327c.918-.536 1.741-1.26 2.52-2.209c-.806-1.376-1.513-3.082-2.157-5.012" />
                                            <linearGradient id="deviconDotNete" x1="61.149" x2="61.539" y1="562.654" y2="562.654" gradientTransform="matrix(0 123.742 123.742 0 -69523.625 -7527.189)" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#168cd4" />
                                                <stop offset=".5" stop-color="#1c87cc" />
                                                <stop offset="1" stop-color="#154b8d" />
                                            </linearGradient>
                                            <path fill="url(#deviconDotNete)" d="M113.685 39.594h-6.121l-.97.047l-.451.966c-5.068 10.793-10.388 20.145-15.791 27.58c-2.54 7.818-4.404 12.563-6.69 15.353c.977 1.668 2.114 2.84 3.466 3.337l.106-.023h.022l.075-.016l.17-.042l.101-.029l.151-.039l.094-.027l.226-.068l.112-.038l.126-.046l.13-.041l.106-.04l.264-.093l.073-.027l.162-.063l.068-.025l.568-.243h.02c.271-.119.547-.254.821-.394c8.785-4.908 13.22-21.396 27.008-46.026h-3.851z" />
                                            <path fill="#7dcbec" d="m37.433 40.677l.063.016l.16.017h.054l.292.038l.049.016l.246.041l.062.015l.567.126l.052.016l.228.064l.063.019l.271.077l.021.016l.237.081l.09.029l.17.069l.096.034l.226.094l.11.047l.136.059l.12.057l.119.062c.979.48 1.879 1.121 2.713 1.898q.461-.483.962-.874c-1.823-1.293-3.89-2.03-6.271-2.03c-.276 0-.552.016-.832.037" />
                                            <path fill="#5ec5ed" d="M43.574 43.544c.511.475 1 1.005 1.462 1.577c.448-.311.892-.611 1.337-.891a14 14 0 0 0-1.839-1.56q-.499.39-.96.874" />
                                            <g transform="matrix(5.048 0 0 -5.048 -9064.26 2270.61)">
                                                <linearGradient id="deviconDotNetf" x1="1806.96" x2="1807.35" y1="336.158" y2="336.158" gradientTransform="scale(30.857 -30.857)rotate(22.527 1812.675 -4228.953)" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#97d6ee" />
                                                    <stop offset=".703" stop-color="#55c1ea" />
                                                    <stop offset="1" stop-color="#55c1ea" />
                                                </linearGradient>
                                                <path fill="url(#deviconDotNetf)" d="m1802.977 441.733l.165.007c.472 0 .881-.146 1.242-.402c.381.301.842.406 1.482.406h-3.099z" />
                                            </g>
                                            <g transform="matrix(5.048 0 0 -5.048 -9064.26 2270.61)">
                                                <linearGradient id="deviconDotNetg" x1="1808.848" x2="1809.238" y1="335.171" y2="335.171" gradientTransform="scale(24.717 -24.717)rotate(-24.385 124.122 4175.416)" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#7accec" />
                                                    <stop offset="1" stop-color="#3fb7ed" />
                                                </linearGradient>
                                                <path fill="url(#deviconDotNetg)" d="M1805.866 441.744c-.64 0-1.1-.105-1.482-.406q.19-.134.364-.309c.531.337 1.056.561 1.574.658q.297.056.589.056h-1.045z" />
                                            </g>
                                            <linearGradient id="deviconDotNeth" x1="61.049" x2="61.439" y1="562.706" y2="562.706" gradientTransform="matrix(0 121.032 121.032 0 -68011.711 -7346.748)" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#1da7e7" />
                                                <stop offset="1" stop-color="#37abe7" stop-opacity="0" />
                                            </linearGradient>
                                            <path fill="url(#deviconDotNeth)" d="M90.359 68.202c1.391-4.284 2.98-9.485 4.954-15.794c1.777-5.684 4.925-9.934 10.835-11.788l.456-.966c-9.636.577-14.14 5.479-16.405 12.738c-3.964 12.673-6.365 20.888-8.677 26.123c2.952-2.823 5.904-6.288 8.837-10.313" />
                                        </svg>
                                    </span>
                                    MVC 5
                                </div>
                            </td>
                            <td>1st June 2025</td>
                            <td>15th June 2025</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 128 128">
                                        <path fill="#5c2d91" d="M127.352 43.199c-5.727 35.891-36.562 62.379-72.902 62.633a54 54 0 0 1-10.656-.648c-15.18-2.574-26.496-15.402-27.16-30.785c.125-17.336 14.148-31.359 31.488-31.484S79.68 56.617 80.047 73.953c.129 5.254-2.145 9.871-6.824 10c-5 0-7.344-3.57-7.344-8.379V62.215a8.183 8.183 0 0 0-8.117-8.191H46.559c-8.977-.062-16.832 6.012-19.035 14.715s1.824 17.781 9.75 21.996a19.5 19.5 0 0 0 23.688-4.223l.391-.582l.391.645a13.8 13.8 0 0 0 11.762 5.602A15.54 15.54 0 0 0 87.902 75.93a42.2 42.2 0 0 0-1.16-10.328a39.57 39.57 0 0 0-42.969-30.926C23.645 36.879 8.43 53.922 8.512 74.168c.262 21.543 17.512 39.023 39.047 39.566c0 0 2.93.266 6.242.195a84.5 84.5 0 0 0 45.289-13.516c.191-.125.383.129.254.328a66.49 66.49 0 0 1-51.785 21.18A46.734 46.734 0 0 1 0 73.977a48.37 48.37 0 0 1 19.426-38.73a47.38 47.38 0 0 1 27.941-9.223h15.031a42.3 42.3 0 0 0 31.203-13.777a.59.59 0 0 1 .68-.141a.6.6 0 0 1 .359.598a42.4 42.4 0 0 1-6.562 18.969a.58.58 0 0 0 .051.633a.58.58 0 0 0 .598.215a45.45 45.45 0 0 0 31.602-26.055a.8.8 0 0 1 1.367 0a57.58 57.58 0 0 1 5.656 36.734zM46.52 61.824c-6.422 0-11.633 5.207-11.633 11.633A11.64 11.64 0 0 0 46.52 85.09c6.426 0 11.633-5.211 11.633-11.633V62.602a.84.84 0 0 0-.801-.801zm0 0" />
                                    </svg>
                                    Blazor
                                </div>
                            </td>
                            <td>1st June 2025</td>
                            <td>15th June 2025</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 128 128">
                                            <g fill="#61dafb">
                                                <circle cx="64" cy="64" r="11.4" />
                                                <path d="M107.3 45.2c-2.2-.8-4.5-1.6-6.9-2.3c.6-2.4 1.1-4.8 1.5-7.1c2.1-13.2-.2-22.5-6.6-26.1c-1.9-1.1-4-1.6-6.4-1.6c-7 0-15.9 5.2-24.9 13.9c-9-8.7-17.9-13.9-24.9-13.9c-2.4 0-4.5.5-6.4 1.6c-6.4 3.7-8.7 13-6.6 26.1c.4 2.3.9 4.7 1.5 7.1c-2.4.7-4.7 1.4-6.9 2.3C8.2 50 1.4 56.6 1.4 64s6.9 14 19.3 18.8c2.2.8 4.5 1.6 6.9 2.3c-.6 2.4-1.1 4.8-1.5 7.1c-2.1 13.2.2 22.5 6.6 26.1c1.9 1.1 4 1.6 6.4 1.6c7.1 0 16-5.2 24.9-13.9c9 8.7 17.9 13.9 24.9 13.9c2.4 0 4.5-.5 6.4-1.6c6.4-3.7 8.7-13 6.6-26.1c-.4-2.3-.9-4.7-1.5-7.1c2.4-.7 4.7-1.4 6.9-2.3c12.5-4.8 19.3-11.4 19.3-18.8s-6.8-14-19.3-18.8M92.5 14.7c4.1 2.4 5.5 9.8 3.8 20.3c-.3 2.1-.8 4.3-1.4 6.6c-5.2-1.2-10.7-2-16.5-2.5c-3.4-4.8-6.9-9.1-10.4-13c7.4-7.3 14.9-12.3 21-12.3c1.3 0 2.5.3 3.5.9M81.3 74c-1.8 3.2-3.9 6.4-6.1 9.6c-3.7.3-7.4.4-11.2.4c-3.9 0-7.6-.1-11.2-.4q-3.3-4.8-6-9.6c-1.9-3.3-3.7-6.7-5.3-10c1.6-3.3 3.4-6.7 5.3-10c1.8-3.2 3.9-6.4 6.1-9.6c3.7-.3 7.4-.4 11.2-.4c3.9 0 7.6.1 11.2.4q3.3 4.8 6 9.6c1.9 3.3 3.7 6.7 5.3 10c-1.7 3.3-3.4 6.6-5.3 10m8.3-3.3c1.5 3.5 2.7 6.9 3.8 10.3c-3.4.8-7 1.4-10.8 1.9c1.2-1.9 2.5-3.9 3.6-6c1.2-2.1 2.3-4.2 3.4-6.2M64 97.8c-2.4-2.6-4.7-5.4-6.9-8.3c2.3.1 4.6.2 6.9.2s4.6-.1 6.9-.2c-2.2 2.9-4.5 5.7-6.9 8.3m-18.6-15c-3.8-.5-7.4-1.1-10.8-1.9c1.1-3.3 2.3-6.8 3.8-10.3c1.1 2 2.2 4.1 3.4 6.1c1.2 2.2 2.4 4.1 3.6 6.1m-7-25.5c-1.5-3.5-2.7-6.9-3.8-10.3c3.4-.8 7-1.4 10.8-1.9c-1.2 1.9-2.5 3.9-3.6 6c-1.2 2.1-2.3 4.2-3.4 6.2M64 30.2c2.4 2.6 4.7 5.4 6.9 8.3c-2.3-.1-4.6-.2-6.9-.2s-4.6.1-6.9.2c2.2-2.9 4.5-5.7 6.9-8.3m22.2 21l-3.6-6c3.8.5 7.4 1.1 10.8 1.9c-1.1 3.3-2.3 6.8-3.8 10.3c-1.1-2.1-2.2-4.2-3.4-6.2M31.7 35c-1.7-10.5-.3-17.9 3.8-20.3c1-.6 2.2-.9 3.5-.9c6 0 13.5 4.9 21 12.3c-3.5 3.8-7 8.2-10.4 13c-5.8.5-11.3 1.4-16.5 2.5c-.6-2.3-1-4.5-1.4-6.6M7 64c0-4.7 5.7-9.7 15.7-13.4c2-.8 4.2-1.5 6.4-2.1c1.6 5 3.6 10.3 6 15.6c-2.4 5.3-4.5 10.5-6 15.5C15.3 75.6 7 69.6 7 64m28.5 49.3c-4.1-2.4-5.5-9.8-3.8-20.3c.3-2.1.8-4.3 1.4-6.6c5.2 1.2 10.7 2 16.5 2.5c3.4 4.8 6.9 9.1 10.4 13c-7.4 7.3-14.9 12.3-21 12.3c-1.3 0-2.5-.3-3.5-.9M96.3 93c1.7 10.5.3 17.9-3.8 20.3c-1 .6-2.2.9-3.5.9c-6 0-13.5-4.9-21-12.3c3.5-3.8 7-8.2 10.4-13c5.8-.5 11.3-1.4 16.5-2.5c.6 2.3 1 4.5 1.4 6.6m9-15.6c-2 .8-4.2 1.5-6.4 2.1c-1.6-5-3.6-10.3-6-15.6c2.4-5.3 4.5-10.5 6-15.5c13.8 4 22.1 10 22.1 15.6c0 4.7-5.8 9.7-15.7 13.4" />
                                            </g>
                                        </svg>
                                    </span>
                                    Laravel 12x
                                </div>
                            </td>
                            <td>May 2025</td>
                            <td>June 2025</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 128 128">
                                            <g fill="#61dafb">
                                                <circle cx="64" cy="64" r="11.4" />
                                                <path d="M107.3 45.2c-2.2-.8-4.5-1.6-6.9-2.3c.6-2.4 1.1-4.8 1.5-7.1c2.1-13.2-.2-22.5-6.6-26.1c-1.9-1.1-4-1.6-6.4-1.6c-7 0-15.9 5.2-24.9 13.9c-9-8.7-17.9-13.9-24.9-13.9c-2.4 0-4.5.5-6.4 1.6c-6.4 3.7-8.7 13-6.6 26.1c.4 2.3.9 4.7 1.5 7.1c-2.4.7-4.7 1.4-6.9 2.3C8.2 50 1.4 56.6 1.4 64s6.9 14 19.3 18.8c2.2.8 4.5 1.6 6.9 2.3c-.6 2.4-1.1 4.8-1.5 7.1c-2.1 13.2.2 22.5 6.6 26.1c1.9 1.1 4 1.6 6.4 1.6c7.1 0 16-5.2 24.9-13.9c9 8.7 17.9 13.9 24.9 13.9c2.4 0 4.5-.5 6.4-1.6c6.4-3.7 8.7-13 6.6-26.1c-.4-2.3-.9-4.7-1.5-7.1c2.4-.7 4.7-1.4 6.9-2.3c12.5-4.8 19.3-11.4 19.3-18.8s-6.8-14-19.3-18.8M92.5 14.7c4.1 2.4 5.5 9.8 3.8 20.3c-.3 2.1-.8 4.3-1.4 6.6c-5.2-1.2-10.7-2-16.5-2.5c-3.4-4.8-6.9-9.1-10.4-13c7.4-7.3 14.9-12.3 21-12.3c1.3 0 2.5.3 3.5.9M81.3 74c-1.8 3.2-3.9 6.4-6.1 9.6c-3.7.3-7.4.4-11.2.4c-3.9 0-7.6-.1-11.2-.4q-3.3-4.8-6-9.6c-1.9-3.3-3.7-6.7-5.3-10c1.6-3.3 3.4-6.7 5.3-10c1.8-3.2 3.9-6.4 6.1-9.6c3.7-.3 7.4-.4 11.2-.4c3.9 0 7.6.1 11.2.4q3.3 4.8 6 9.6c1.9 3.3 3.7 6.7 5.3 10c-1.7 3.3-3.4 6.6-5.3 10m8.3-3.3c1.5 3.5 2.7 6.9 3.8 10.3c-3.4.8-7 1.4-10.8 1.9c1.2-1.9 2.5-3.9 3.6-6c1.2-2.1 2.3-4.2 3.4-6.2M64 97.8c-2.4-2.6-4.7-5.4-6.9-8.3c2.3.1 4.6.2 6.9.2s4.6-.1 6.9-.2c-2.2 2.9-4.5 5.7-6.9 8.3m-18.6-15c-3.8-.5-7.4-1.1-10.8-1.9c1.1-3.3 2.3-6.8 3.8-10.3c1.1 2 2.2 4.1 3.4 6.1c1.2 2.2 2.4 4.1 3.6 6.1m-7-25.5c-1.5-3.5-2.7-6.9-3.8-10.3c3.4-.8 7-1.4 10.8-1.9c-1.2 1.9-2.5 3.9-3.6 6c-1.2 2.1-2.3 4.2-3.4 6.2M64 30.2c2.4 2.6 4.7 5.4 6.9 8.3c-2.3-.1-4.6-.2-6.9-.2s-4.6.1-6.9.2c2.2-2.9 4.5-5.7 6.9-8.3m22.2 21l-3.6-6c3.8.5 7.4 1.1 10.8 1.9c-1.1 3.3-2.3 6.8-3.8 10.3c-1.1-2.1-2.2-4.2-3.4-6.2M31.7 35c-1.7-10.5-.3-17.9 3.8-20.3c1-.6 2.2-.9 3.5-.9c6 0 13.5 4.9 21 12.3c-3.5 3.8-7 8.2-10.4 13c-5.8.5-11.3 1.4-16.5 2.5c-.6-2.3-1-4.5-1.4-6.6M7 64c0-4.7 5.7-9.7 15.7-13.4c2-.8 4.2-1.5 6.4-2.1c1.6 5 3.6 10.3 6 15.6c-2.4 5.3-4.5 10.5-6 15.5C15.3 75.6 7 69.6 7 64m28.5 49.3c-4.1-2.4-5.5-9.8-3.8-20.3c.3-2.1.8-4.3 1.4-6.6c5.2 1.2 10.7 2 16.5 2.5c3.4 4.8 6.9 9.1 10.4 13c-7.4 7.3-14.9 12.3-21 12.3c-1.3 0-2.5-.3-3.5-.9M96.3 93c1.7 10.5.3 17.9-3.8 20.3c-1 .6-2.2.9-3.5.9c-6 0-13.5-4.9-21-12.3c3.5-3.8 7-8.2 10.4-13c5.8-.5 11.3-1.4 16.5-2.5c.6 2.3 1 4.5 1.4 6.6m9-15.6c-2 .8-4.2 1.5-6.4 2.1c-1.6-5-3.6-10.3-6-15.6c2.4-5.3 4.5-10.5 6-15.5c13.8 4 22.1 10 22.1 15.6c0 4.7-5.8 9.7-15.7 13.4" />
                                            </g>
                                        </svg>
                                    </span>
                                    PHP 8x
                                </div>
                            </td>
                            <td>Available</td>
                            <td>June 2025</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 128 128">
                                            <g fill="#61dafb">
                                                <circle cx="64" cy="64" r="11.4" />
                                                <path d="M107.3 45.2c-2.2-.8-4.5-1.6-6.9-2.3c.6-2.4 1.1-4.8 1.5-7.1c2.1-13.2-.2-22.5-6.6-26.1c-1.9-1.1-4-1.6-6.4-1.6c-7 0-15.9 5.2-24.9 13.9c-9-8.7-17.9-13.9-24.9-13.9c-2.4 0-4.5.5-6.4 1.6c-6.4 3.7-8.7 13-6.6 26.1c.4 2.3.9 4.7 1.5 7.1c-2.4.7-4.7 1.4-6.9 2.3C8.2 50 1.4 56.6 1.4 64s6.9 14 19.3 18.8c2.2.8 4.5 1.6 6.9 2.3c-.6 2.4-1.1 4.8-1.5 7.1c-2.1 13.2.2 22.5 6.6 26.1c1.9 1.1 4 1.6 6.4 1.6c7.1 0 16-5.2 24.9-13.9c9 8.7 17.9 13.9 24.9 13.9c2.4 0 4.5-.5 6.4-1.6c6.4-3.7 8.7-13 6.6-26.1c-.4-2.3-.9-4.7-1.5-7.1c2.4-.7 4.7-1.4 6.9-2.3c12.5-4.8 19.3-11.4 19.3-18.8s-6.8-14-19.3-18.8M92.5 14.7c4.1 2.4 5.5 9.8 3.8 20.3c-.3 2.1-.8 4.3-1.4 6.6c-5.2-1.2-10.7-2-16.5-2.5c-3.4-4.8-6.9-9.1-10.4-13c7.4-7.3 14.9-12.3 21-12.3c1.3 0 2.5.3 3.5.9M81.3 74c-1.8 3.2-3.9 6.4-6.1 9.6c-3.7.3-7.4.4-11.2.4c-3.9 0-7.6-.1-11.2-.4q-3.3-4.8-6-9.6c-1.9-3.3-3.7-6.7-5.3-10c1.6-3.3 3.4-6.7 5.3-10c1.8-3.2 3.9-6.4 6.1-9.6c3.7-.3 7.4-.4 11.2-.4c3.9 0 7.6.1 11.2.4q3.3 4.8 6 9.6c1.9 3.3 3.7 6.7 5.3 10c-1.7 3.3-3.4 6.6-5.3 10m8.3-3.3c1.5 3.5 2.7 6.9 3.8 10.3c-3.4.8-7 1.4-10.8 1.9c1.2-1.9 2.5-3.9 3.6-6c1.2-2.1 2.3-4.2 3.4-6.2M64 97.8c-2.4-2.6-4.7-5.4-6.9-8.3c2.3.1 4.6.2 6.9.2s4.6-.1 6.9-.2c-2.2 2.9-4.5 5.7-6.9 8.3m-18.6-15c-3.8-.5-7.4-1.1-10.8-1.9c1.1-3.3 2.3-6.8 3.8-10.3c1.1 2 2.2 4.1 3.4 6.1c1.2 2.2 2.4 4.1 3.6 6.1m-7-25.5c-1.5-3.5-2.7-6.9-3.8-10.3c3.4-.8 7-1.4 10.8-1.9c-1.2 1.9-2.5 3.9-3.6 6c-1.2 2.1-2.3 4.2-3.4 6.2M64 30.2c2.4 2.6 4.7 5.4 6.9 8.3c-2.3-.1-4.6-.2-6.9-.2s-4.6.1-6.9.2c2.2-2.9 4.5-5.7 6.9-8.3m22.2 21l-3.6-6c3.8.5 7.4 1.1 10.8 1.9c-1.1 3.3-2.3 6.8-3.8 10.3c-1.1-2.1-2.2-4.2-3.4-6.2M31.7 35c-1.7-10.5-.3-17.9 3.8-20.3c1-.6 2.2-.9 3.5-.9c6 0 13.5 4.9 21 12.3c-3.5 3.8-7 8.2-10.4 13c-5.8.5-11.3 1.4-16.5 2.5c-.6-2.3-1-4.5-1.4-6.6M7 64c0-4.7 5.7-9.7 15.7-13.4c2-.8 4.2-1.5 6.4-2.1c1.6 5 3.6 10.3 6 15.6c-2.4 5.3-4.5 10.5-6 15.5C15.3 75.6 7 69.6 7 64m28.5 49.3c-4.1-2.4-5.5-9.8-3.8-20.3c.3-2.1.8-4.3 1.4-6.6c5.2 1.2 10.7 2 16.5 2.5c3.4 4.8 6.9 9.1 10.4 13c-7.4 7.3-14.9 12.3-21 12.3c-1.3 0-2.5-.3-3.5-.9M96.3 93c1.7 10.5.3 17.9-3.8 20.3c-1 .6-2.2.9-3.5.9c-6 0-13.5-4.9-21-12.3c3.5-3.8 7-8.2 10.4-13c5.8-.5 11.3-1.4 16.5-2.5c.6 2.3 1 4.5 1.4 6.6m9-15.6c-2 .8-4.2 1.5-6.4 2.1c-1.6-5-3.6-10.3-6-15.6c2.4-5.3 4.5-10.5 6-15.5c13.8 4 22.1 10 22.1 15.6c0 4.7-5.8 9.7-15.7 13.4" />
                                            </g>
                                        </svg>
                                    </span>
                                    Ruby on Rails
                                </div>
                            </td>
                            <td>July 2025</td>
                            <td>August 2025</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 128 128">
                                            <g fill="#61dafb">
                                                <circle cx="64" cy="64" r="11.4" />
                                                <path d="M107.3 45.2c-2.2-.8-4.5-1.6-6.9-2.3c.6-2.4 1.1-4.8 1.5-7.1c2.1-13.2-.2-22.5-6.6-26.1c-1.9-1.1-4-1.6-6.4-1.6c-7 0-15.9 5.2-24.9 13.9c-9-8.7-17.9-13.9-24.9-13.9c-2.4 0-4.5.5-6.4 1.6c-6.4 3.7-8.7 13-6.6 26.1c.4 2.3.9 4.7 1.5 7.1c-2.4.7-4.7 1.4-6.9 2.3C8.2 50 1.4 56.6 1.4 64s6.9 14 19.3 18.8c2.2.8 4.5 1.6 6.9 2.3c-.6 2.4-1.1 4.8-1.5 7.1c-2.1 13.2.2 22.5 6.6 26.1c1.9 1.1 4 1.6 6.4 1.6c7.1 0 16-5.2 24.9-13.9c9 8.7 17.9 13.9 24.9 13.9c2.4 0 4.5-.5 6.4-1.6c6.4-3.7 8.7-13 6.6-26.1c-.4-2.3-.9-4.7-1.5-7.1c2.4-.7 4.7-1.4 6.9-2.3c12.5-4.8 19.3-11.4 19.3-18.8s-6.8-14-19.3-18.8M92.5 14.7c4.1 2.4 5.5 9.8 3.8 20.3c-.3 2.1-.8 4.3-1.4 6.6c-5.2-1.2-10.7-2-16.5-2.5c-3.4-4.8-6.9-9.1-10.4-13c7.4-7.3 14.9-12.3 21-12.3c1.3 0 2.5.3 3.5.9M81.3 74c-1.8 3.2-3.9 6.4-6.1 9.6c-3.7.3-7.4.4-11.2.4c-3.9 0-7.6-.1-11.2-.4q-3.3-4.8-6-9.6c-1.9-3.3-3.7-6.7-5.3-10c1.6-3.3 3.4-6.7 5.3-10c1.8-3.2 3.9-6.4 6.1-9.6c3.7-.3 7.4-.4 11.2-.4c3.9 0 7.6.1 11.2.4q3.3 4.8 6 9.6c1.9 3.3 3.7 6.7 5.3 10c-1.7 3.3-3.4 6.6-5.3 10m8.3-3.3c1.5 3.5 2.7 6.9 3.8 10.3c-3.4.8-7 1.4-10.8 1.9c1.2-1.9 2.5-3.9 3.6-6c1.2-2.1 2.3-4.2 3.4-6.2M64 97.8c-2.4-2.6-4.7-5.4-6.9-8.3c2.3.1 4.6.2 6.9.2s4.6-.1 6.9-.2c-2.2 2.9-4.5 5.7-6.9 8.3m-18.6-15c-3.8-.5-7.4-1.1-10.8-1.9c1.1-3.3 2.3-6.8 3.8-10.3c1.1 2 2.2 4.1 3.4 6.1c1.2 2.2 2.4 4.1 3.6 6.1m-7-25.5c-1.5-3.5-2.7-6.9-3.8-10.3c3.4-.8 7-1.4 10.8-1.9c-1.2 1.9-2.5 3.9-3.6 6c-1.2 2.1-2.3 4.2-3.4 6.2M64 30.2c2.4 2.6 4.7 5.4 6.9 8.3c-2.3-.1-4.6-.2-6.9-.2s-4.6.1-6.9.2c2.2-2.9 4.5-5.7 6.9-8.3m22.2 21l-3.6-6c3.8.5 7.4 1.1 10.8 1.9c-1.1 3.3-2.3 6.8-3.8 10.3c-1.1-2.1-2.2-4.2-3.4-6.2M31.7 35c-1.7-10.5-.3-17.9 3.8-20.3c1-.6 2.2-.9 3.5-.9c6 0 13.5 4.9 21 12.3c-3.5 3.8-7 8.2-10.4 13c-5.8.5-11.3 1.4-16.5 2.5c-.6-2.3-1-4.5-1.4-6.6M7 64c0-4.7 5.7-9.7 15.7-13.4c2-.8 4.2-1.5 6.4-2.1c1.6 5 3.6 10.3 6 15.6c-2.4 5.3-4.5 10.5-6 15.5C15.3 75.6 7 69.6 7 64m28.5 49.3c-4.1-2.4-5.5-9.8-3.8-20.3c.3-2.1.8-4.3 1.4-6.6c5.2 1.2 10.7 2 16.5 2.5c3.4 4.8 6.9 9.1 10.4 13c-7.4 7.3-14.9 12.3-21 12.3c-1.3 0-2.5-.3-3.5-.9M96.3 93c1.7 10.5.3 17.9-3.8 20.3c-1 .6-2.2.9-3.5.9c-6 0-13.5-4.9-21-12.3c3.5-3.8 7-8.2 10.4-13c5.8-.5 11.3-1.4 16.5-2.5c.6 2.3 1 4.5 1.4 6.6m9-15.6c-2 .8-4.2 1.5-6.4 2.1c-1.6-5-3.6-10.3-6-15.6c2.4-5.3 4.5-10.5 6-15.5c13.8 4 22.1 10 22.1 15.6c0 4.7-5.8 9.7-15.7 13.4" />
                                            </g>
                                        </svg>
                                    </span>
                                    Django 5x
                                </div>
                            </td>
                            <td>June 2025</td>
                            <td>July 2025</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 128 128">
                                            <g fill="#61dafb">
                                                <circle cx="64" cy="64" r="11.4" />
                                                <path d="M107.3 45.2c-2.2-.8-4.5-1.6-6.9-2.3c.6-2.4 1.1-4.8 1.5-7.1c2.1-13.2-.2-22.5-6.6-26.1c-1.9-1.1-4-1.6-6.4-1.6c-7 0-15.9 5.2-24.9 13.9c-9-8.7-17.9-13.9-24.9-13.9c-2.4 0-4.5.5-6.4 1.6c-6.4 3.7-8.7 13-6.6 26.1c.4 2.3.9 4.7 1.5 7.1c-2.4.7-4.7 1.4-6.9 2.3C8.2 50 1.4 56.6 1.4 64s6.9 14 19.3 18.8c2.2.8 4.5 1.6 6.9 2.3c-.6 2.4-1.1 4.8-1.5 7.1c-2.1 13.2.2 22.5 6.6 26.1c1.9 1.1 4 1.6 6.4 1.6c7.1 0 16-5.2 24.9-13.9c9 8.7 17.9 13.9 24.9 13.9c2.4 0 4.5-.5 6.4-1.6c6.4-3.7 8.7-13 6.6-26.1c-.4-2.3-.9-4.7-1.5-7.1c2.4-.7 4.7-1.4 6.9-2.3c12.5-4.8 19.3-11.4 19.3-18.8s-6.8-14-19.3-18.8M92.5 14.7c4.1 2.4 5.5 9.8 3.8 20.3c-.3 2.1-.8 4.3-1.4 6.6c-5.2-1.2-10.7-2-16.5-2.5c-3.4-4.8-6.9-9.1-10.4-13c7.4-7.3 14.9-12.3 21-12.3c1.3 0 2.5.3 3.5.9M81.3 74c-1.8 3.2-3.9 6.4-6.1 9.6c-3.7.3-7.4.4-11.2.4c-3.9 0-7.6-.1-11.2-.4q-3.3-4.8-6-9.6c-1.9-3.3-3.7-6.7-5.3-10c1.6-3.3 3.4-6.7 5.3-10c1.8-3.2 3.9-6.4 6.1-9.6c3.7-.3 7.4-.4 11.2-.4c3.9 0 7.6.1 11.2.4q3.3 4.8 6 9.6c1.9 3.3 3.7 6.7 5.3 10c-1.7 3.3-3.4 6.6-5.3 10m8.3-3.3c1.5 3.5 2.7 6.9 3.8 10.3c-3.4.8-7 1.4-10.8 1.9c1.2-1.9 2.5-3.9 3.6-6c1.2-2.1 2.3-4.2 3.4-6.2M64 97.8c-2.4-2.6-4.7-5.4-6.9-8.3c2.3.1 4.6.2 6.9.2s4.6-.1 6.9-.2c-2.2 2.9-4.5 5.7-6.9 8.3m-18.6-15c-3.8-.5-7.4-1.1-10.8-1.9c1.1-3.3 2.3-6.8 3.8-10.3c1.1 2 2.2 4.1 3.4 6.1c1.2 2.2 2.4 4.1 3.6 6.1m-7-25.5c-1.5-3.5-2.7-6.9-3.8-10.3c3.4-.8 7-1.4 10.8-1.9c-1.2 1.9-2.5 3.9-3.6 6c-1.2 2.1-2.3 4.2-3.4 6.2M64 30.2c2.4 2.6 4.7 5.4 6.9 8.3c-2.3-.1-4.6-.2-6.9-.2s-4.6.1-6.9.2c2.2-2.9 4.5-5.7 6.9-8.3m22.2 21l-3.6-6c3.8.5 7.4 1.1 10.8 1.9c-1.1 3.3-2.3 6.8-3.8 10.3c-1.1-2.1-2.2-4.2-3.4-6.2M31.7 35c-1.7-10.5-.3-17.9 3.8-20.3c1-.6 2.2-.9 3.5-.9c6 0 13.5 4.9 21 12.3c-3.5 3.8-7 8.2-10.4 13c-5.8.5-11.3 1.4-16.5 2.5c-.6-2.3-1-4.5-1.4-6.6M7 64c0-4.7 5.7-9.7 15.7-13.4c2-.8 4.2-1.5 6.4-2.1c1.6 5 3.6 10.3 6 15.6c-2.4 5.3-4.5 10.5-6 15.5C15.3 75.6 7 69.6 7 64m28.5 49.3c-4.1-2.4-5.5-9.8-3.8-20.3c.3-2.1.8-4.3 1.4-6.6c5.2 1.2 10.7 2 16.5 2.5c3.4 4.8 6.9 9.1 10.4 13c-7.4 7.3-14.9 12.3-21 12.3c-1.3 0-2.5-.3-3.5-.9M96.3 93c1.7 10.5.3 17.9-3.8 20.3c-1 .6-2.2.9-3.5.9c-6 0-13.5-4.9-21-12.3c3.5-3.8 7-8.2 10.4-13c5.8-.5 11.3-1.4 16.5-2.5c.6 2.3 1 4.5 1.4 6.6m9-15.6c-2 .8-4.2 1.5-6.4 2.1c-1.6-5-3.6-10.3-6-15.6c2.4-5.3 4.5-10.5 6-15.5c13.8 4 22.1 10 22.1 15.6c0 4.7-5.8 9.7-15.7 13.4" />
                                            </g>
                                        </svg>
                                    </span>
                                    Spring Boot 3x
                                </div>
                            </td>
                            <td>July 2025</td>
                            <td>August 2025</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 128 128">
                                            <g fill="#61dafb">
                                                <circle cx="64" cy="64" r="11.4" />
                                                <path d="M107.3 45.2c-2.2-.8-4.5-1.6-6.9-2.3c.6-2.4 1.1-4.8 1.5-7.1c2.1-13.2-.2-22.5-6.6-26.1c-1.9-1.1-4-1.6-6.4-1.6c-7 0-15.9 5.2-24.9 13.9c-9-8.7-17.9-13.9-24.9-13.9c-2.4 0-4.5.5-6.4 1.6c-6.4 3.7-8.7 13-6.6 26.1c.4 2.3.9 4.7 1.5 7.1c-2.4.7-4.7 1.4-6.9 2.3C8.2 50 1.4 56.6 1.4 64s6.9 14 19.3 18.8c2.2.8 4.5 1.6 6.9 2.3c-.6 2.4-1.1 4.8-1.5 7.1c-2.1 13.2.2 22.5 6.6 26.1c1.9 1.1 4 1.6 6.4 1.6c7.1 0 16-5.2 24.9-13.9c9 8.7 17.9 13.9 24.9 13.9c2.4 0 4.5-.5 6.4-1.6c6.4-3.7 8.7-13 6.6-26.1c-.4-2.3-.9-4.7-1.5-7.1c2.4-.7 4.7-1.4 6.9-2.3c12.5-4.8 19.3-11.4 19.3-18.8s-6.8-14-19.3-18.8M92.5 14.7c4.1 2.4 5.5 9.8 3.8 20.3c-.3 2.1-.8 4.3-1.4 6.6c-5.2-1.2-10.7-2-16.5-2.5c-3.4-4.8-6.9-9.1-10.4-13c7.4-7.3 14.9-12.3 21-12.3c1.3 0 2.5.3 3.5.9M81.3 74c-1.8 3.2-3.9 6.4-6.1 9.6c-3.7.3-7.4.4-11.2.4c-3.9 0-7.6-.1-11.2-.4q-3.3-4.8-6-9.6c-1.9-3.3-3.7-6.7-5.3-10c1.6-3.3 3.4-6.7 5.3-10c1.8-3.2 3.9-6.4 6.1-9.6c3.7-.3 7.4-.4 11.2-.4c3.9 0 7.6.1 11.2.4q3.3 4.8 6 9.6c1.9 3.3 3.7 6.7 5.3 10c-1.7 3.3-3.4 6.6-5.3 10m8.3-3.3c1.5 3.5 2.7 6.9 3.8 10.3c-3.4.8-7 1.4-10.8 1.9c1.2-1.9 2.5-3.9 3.6-6c1.2-2.1 2.3-4.2 3.4-6.2M64 97.8c-2.4-2.6-4.7-5.4-6.9-8.3c2.3.1 4.6.2 6.9.2s4.6-.1 6.9-.2c-2.2 2.9-4.5 5.7-6.9 8.3m-18.6-15c-3.8-.5-7.4-1.1-10.8-1.9c1.1-3.3 2.3-6.8 3.8-10.3c1.1 2 2.2 4.1 3.4 6.1c1.2 2.2 2.4 4.1 3.6 6.1m-7-25.5c-1.5-3.5-2.7-6.9-3.8-10.3c3.4-.8 7-1.4 10.8-1.9c-1.2 1.9-2.5 3.9-3.6 6c-1.2 2.1-2.3 4.2-3.4 6.2M64 30.2c2.4 2.6 4.7 5.4 6.9 8.3c-2.3-.1-4.6-.2-6.9-.2s-4.6.1-6.9.2c2.2-2.9 4.5-5.7 6.9-8.3m22.2 21l-3.6-6c3.8.5 7.4 1.1 10.8 1.9c-1.1 3.3-2.3 6.8-3.8 10.3c-1.1-2.1-2.2-4.2-3.4-6.2M31.7 35c-1.7-10.5-.3-17.9 3.8-20.3c1-.6 2.2-.9 3.5-.9c6 0 13.5 4.9 21 12.3c-3.5 3.8-7 8.2-10.4 13c-5.8.5-11.3 1.4-16.5 2.5c-.6-2.3-1-4.5-1.4-6.6M7 64c0-4.7 5.7-9.7 15.7-13.4c2-.8 4.2-1.5 6.4-2.1c1.6 5 3.6 10.3 6 15.6c-2.4 5.3-4.5 10.5-6 15.5C15.3 75.6 7 69.6 7 64m28.5 49.3c-4.1-2.4-5.5-9.8-3.8-20.3c.3-2.1.8-4.3 1.4-6.6c5.2 1.2 10.7 2 16.5 2.5c3.4 4.8 6.9 9.1 10.4 13c-7.4 7.3-14.9 12.3-21 12.3c-1.3 0-2.5-.3-3.5-.9M96.3 93c1.7 10.5.3 17.9-3.8 20.3c-1 .6-2.2.9-3.5.9c-6 0-13.5-4.9-21-12.3c3.5-3.8 7-8.2 10.4-13c5.8-.5 11.3-1.4 16.5-2.5c.6 2.3 1 4.5 1.4 6.6m9-15.6c-2 .8-4.2 1.5-6.4 2.1c-1.6-5-3.6-10.3-6-15.6c2.4-5.3 4.5-10.5 6-15.5c13.8 4 22.1 10 22.1 15.6c0 4.7-5.8 9.7-15.7 13.4" />
                                            </g>
                                        </svg>
                                    </span>
                                    Flask 3x
                                </div>
                            </td>
                            <td>July 2025</td>
                            <td>August 2025</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 128 128">
                                            <g fill="#61dafb">
                                                <circle cx="64" cy="64" r="11.4" />
                                                <path d="M107.3 45.2c-2.2-.8-4.5-1.6-6.9-2.3c.6-2.4 1.1-4.8 1.5-7.1c2.1-13.2-.2-22.5-6.6-26.1c-1.9-1.1-4-1.6-6.4-1.6c-7 0-15.9 5.2-24.9 13.9c-9-8.7-17.9-13.9-24.9-13.9c-2.4 0-4.5.5-6.4 1.6c-6.4 3.7-8.7 13-6.6 26.1c.4 2.3.9 4.7 1.5 7.1c-2.4.7-4.7 1.4-6.9 2.3C8.2 50 1.4 56.6 1.4 64s6.9 14 19.3 18.8c2.2.8 4.5 1.6 6.9 2.3c-.6 2.4-1.1 4.8-1.5 7.1c-2.1 13.2.2 22.5 6.6 26.1c1.9 1.1 4 1.6 6.4 1.6c7.1 0 16-5.2 24.9-13.9c9 8.7 17.9 13.9 24.9 13.9c2.4 0 4.5-.5 6.4-1.6c6.4-3.7 8.7-13 6.6-26.1c-.4-2.3-.9-4.7-1.5-7.1c2.4-.7 4.7-1.4 6.9-2.3c12.5-4.8 19.3-11.4 19.3-18.8s-6.8-14-19.3-18.8M92.5 14.7c4.1 2.4 5.5 9.8 3.8 20.3c-.3 2.1-.8 4.3-1.4 6.6c-5.2-1.2-10.7-2-16.5-2.5c-3.4-4.8-6.9-9.1-10.4-13c7.4-7.3 14.9-12.3 21-12.3c1.3 0 2.5.3 3.5.9M81.3 74c-1.8 3.2-3.9 6.4-6.1 9.6c-3.7.3-7.4.4-11.2.4c-3.9 0-7.6-.1-11.2-.4q-3.3-4.8-6-9.6c-1.9-3.3-3.7-6.7-5.3-10c1.6-3.3 3.4-6.7 5.3-10c1.8-3.2 3.9-6.4 6.1-9.6c3.7-.3 7.4-.4 11.2-.4c3.9 0 7.6.1 11.2.4q3.3 4.8 6 9.6c1.9 3.3 3.7 6.7 5.3 10c-1.7 3.3-3.4 6.6-5.3 10m8.3-3.3c1.5 3.5 2.7 6.9 3.8 10.3c-3.4.8-7 1.4-10.8 1.9c1.2-1.9 2.5-3.9 3.6-6c1.2-2.1 2.3-4.2 3.4-6.2M64 97.8c-2.4-2.6-4.7-5.4-6.9-8.3c2.3.1 4.6.2 6.9.2s4.6-.1 6.9-.2c-2.2 2.9-4.5 5.7-6.9 8.3m-18.6-15c-3.8-.5-7.4-1.1-10.8-1.9c1.1-3.3 2.3-6.8 3.8-10.3c1.1 2 2.2 4.1 3.4 6.1c1.2 2.2 2.4 4.1 3.6 6.1m-7-25.5c-1.5-3.5-2.7-6.9-3.8-10.3c3.4-.8 7-1.4 10.8-1.9c-1.2 1.9-2.5 3.9-3.6 6c-1.2 2.1-2.3 4.2-3.4 6.2M64 30.2c2.4 2.6 4.7 5.4 6.9 8.3c-2.3-.1-4.6-.2-6.9-.2s-4.6.1-6.9.2c2.2-2.9 4.5-5.7 6.9-8.3m22.2 21l-3.6-6c3.8.5 7.4 1.1 10.8 1.9c-1.1 3.3-2.3 6.8-3.8 10.3c-1.1-2.1-2.2-4.2-3.4-6.2M31.7 35c-1.7-10.5-.3-17.9 3.8-20.3c1-.6 2.2-.9 3.5-.9c6 0 13.5 4.9 21 12.3c-3.5 3.8-7 8.2-10.4 13c-5.8.5-11.3 1.4-16.5 2.5c-.6-2.3-1-4.5-1.4-6.6M7 64c0-4.7 5.7-9.7 15.7-13.4c2-.8 4.2-1.5 6.4-2.1c1.6 5 3.6 10.3 6 15.6c-2.4 5.3-4.5 10.5-6 15.5C15.3 75.6 7 69.6 7 64m28.5 49.3c-4.1-2.4-5.5-9.8-3.8-20.3c.3-2.1.8-4.3 1.4-6.6c5.2 1.2 10.7 2 16.5 2.5c3.4 4.8 6.9 9.1 10.4 13c-7.4 7.3-14.9 12.3-21 12.3c-1.3 0-2.5-.3-3.5-.9M96.3 93c1.7 10.5.3 17.9-3.8 20.3c-1 .6-2.2.9-3.5.9c-6 0-13.5-4.9-21-12.3c3.5-3.8 7-8.2 10.4-13c5.8-.5 11.3-1.4 16.5-2.5c.6 2.3 1 4.5 1.4 6.6m9-15.6c-2 .8-4.2 1.5-6.4 2.1c-1.6-5-3.6-10.3-6-15.6c2.4-5.3 4.5-10.5 6-15.5c13.8 4 22.1 10 22.1 15.6c0 4.7-5.8 9.7-15.7 13.4" />
                                            </g>
                                        </svg>
                                    </span>
                                    CodeIgniter 4x
                                </div>
                            </td>
                            <td>June 2025</td>
                            <td>July 2025</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 128 128">
                                            <g fill="#61dafb">
                                                <circle cx="64" cy="64" r="11.4" />
                                                <path d="M107.3 45.2c-2.2-.8-4.5-1.6-6.9-2.3c.6-2.4 1.1-4.8 1.5-7.1c2.1-13.2-.2-22.5-6.6-26.1c-1.9-1.1-4-1.6-6.4-1.6c-7 0-15.9 5.2-24.9 13.9c-9-8.7-17.9-13.9-24.9-13.9c-2.4 0-4.5.5-6.4 1.6c-6.4 3.7-8.7 13-6.6 26.1c.4 2.3.9 4.7 1.5 7.1c-2.4.7-4.7 1.4-6.9 2.3C8.2 50 1.4 56.6 1.4 64s6.9 14 19.3 18.8c2.2.8 4.5 1.6 6.9 2.3c-.6 2.4-1.1 4.8-1.5 7.1c-2.1 13.2.2 22.5 6.6 26.1c1.9 1.1 4 1.6 6.4 1.6c7.1 0 16-5.2 24.9-13.9c9 8.7 17.9 13.9 24.9 13.9c2.4 0 4.5-.5 6.4-1.6c6.4-3.7 8.7-13 6.6-26.1c-.4-2.3-.9-4.7-1.5-7.1c2.4-.7 4.7-1.4 6.9-2.3c12.5-4.8 19.3-11.4 19.3-18.8s-6.8-14-19.3-18.8M92.5 14.7c4.1 2.4 5.5 9.8 3.8 20.3c-.3 2.1-.8 4.3-1.4 6.6c-5.2-1.2-10.7-2-16.5-2.5c-3.4-4.8-6.9-9.1-10.4-13c7.4-7.3 14.9-12.3 21-12.3c1.3 0 2.5.3 3.5.9M81.3 74c-1.8 3.2-3.9 6.4-6.1 9.6c-3.7.3-7.4.4-11.2.4c-3.9 0-7.6-.1-11.2-.4q-3.3-4.8-6-9.6c-1.9-3.3-3.7-6.7-5.3-10c1.6-3.3 3.4-6.7 5.3-10c1.8-3.2 3.9-6.4 6.1-9.6c3.7-.3 7.4-.4 11.2-.4c3.9 0 7.6.1 11.2.4q3.3 4.8 6 9.6c1.9 3.3 3.7 6.7 5.3 10c-1.7 3.3-3.4 6.6-5.3 10m8.3-3.3c1.5 3.5 2.7 6.9 3.8 10.3c-3.4.8-7 1.4-10.8 1.9c1.2-1.9 2.5-3.9 3.6-6c1.2-2.1 2.3-4.2 3.4-6.2M64 97.8c-2.4-2.6-4.7-5.4-6.9-8.3c2.3.1 4.6.2 6.9.2s4.6-.1 6.9-.2c-2.2 2.9-4.5 5.7-6.9 8.3m-18.6-15c-3.8-.5-7.4-1.1-10.8-1.9c1.1-3.3 2.3-6.8 3.8-10.3c1.1 2 2.2 4.1 3.4 6.1c1.2 2.2 2.4 4.1 3.6 6.1m-7-25.5c-1.5-3.5-2.7-6.9-3.8-10.3c3.4-.8 7-1.4 10.8-1.9c-1.2 1.9-2.5 3.9-3.6 6c-1.2 2.1-2.3 4.2-3.4 6.2M64 30.2c2.4 2.6 4.7 5.4 6.9 8.3c-2.3-.1-4.6-.2-6.9-.2s-4.6.1-6.9.2c2.2-2.9 4.5-5.7 6.9-8.3m22.2 21l-3.6-6c3.8.5 7.4 1.1 10.8 1.9c-1.1 3.3-2.3 6.8-3.8 10.3c-1.1-2.1-2.2-4.2-3.4-6.2M31.7 35c-1.7-10.5-.3-17.9 3.8-20.3c1-.6 2.2-.9 3.5-.9c6 0 13.5 4.9 21 12.3c-3.5 3.8-7 8.2-10.4 13c-5.8.5-11.3 1.4-16.5 2.5c-.6-2.3-1-4.5-1.4-6.6M7 64c0-4.7 5.7-9.7 15.7-13.4c2-.8 4.2-1.5 6.4-2.1c1.6 5 3.6 10.3 6 15.6c-2.4 5.3-4.5 10.5-6 15.5C15.3 75.6 7 69.6 7 64m28.5 49.3c-4.1-2.4-5.5-9.8-3.8-20.3c.3-2.1.8-4.3 1.4-6.6c5.2 1.2 10.7 2 16.5 2.5c3.4 4.8 6.9 9.1 10.4 13c-7.4 7.3-14.9 12.3-21 12.3c-1.3 0-2.5-.3-3.5-.9M96.3 93c1.7 10.5.3 17.9-3.8 20.3c-1 .6-2.2.9-3.5.9c-6 0-13.5-4.9-21-12.3c3.5-3.8 7-8.2 10.4-13c5.8-.5 11.3-1.4 16.5-2.5c.6 2.3 1 4.5 1.4 6.6m9-15.6c-2 .8-4.2 1.5-6.4 2.1c-1.6-5-3.6-10.3-6-15.6c2.4-5.3 4.5-10.5 6-15.5c13.8 4 22.1 10 22.1 15.6c0 4.7-5.8 9.7-15.7 13.4" />
                                            </g>
                                        </svg>
                                    </span>
                                    Symfony 7x
                                </div>
                            </td>
                            <td>July 2025</td>
                            <td>August 2025</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 128 128">
                                            <g fill="#61dafb">
                                                <circle cx="64" cy="64" r="11.4" />
                                                <path d="M107.3 45.2c-2.2-.8-4.5-1.6-6.9-2.3c.6-2.4 1.1-4.8 1.5-7.1c2.1-13.2-.2-22.5-6.6-26.1c-1.9-1.1-4-1.6-6.4-1.6c-7 0-15.9 5.2-24.9 13.9c-9-8.7-17.9-13.9-24.9-13.9c-2.4 0-4.5.5-6.4 1.6c-6.4 3.7-8.7 13-6.6 26.1c.4 2.3.9 4.7 1.5 7.1c-2.4.7-4.7 1.4-6.9 2.3C8.2 50 1.4 56.6 1.4 64s6.9 14 19.3 18.8c2.2.8 4.5 1.6 6.9 2.3c-.6 2.4-1.1 4.8-1.5 7.1c-2.1 13.2.2 22.5 6.6 26.1c1.9 1.1 4 1.6 6.4 1.6c7.1 0 16-5.2 24.9-13.9c9 8.7 17.9 13.9 24.9 13.9c2.4 0 4.5-.5 6.4-1.6c6.4-3.7 8.7-13 6.6-26.1c-.4-2.3-.9-4.7-1.5-7.1c2.4-.7 4.7-1.4 6.9-2.3c12.5-4.8 19.3-11.4 19.3-18.8s-6.8-14-19.3-18.8M92.5 14.7c4.1 2.4 5.5 9.8 3.8 20.3c-.3 2.1-.8 4.3-1.4 6.6c-5.2-1.2-10.7-2-16.5-2.5c-3.4-4.8-6.9-9.1-10.4-13c7.4-7.3 14.9-12.3 21-12.3c1.3 0 2.5.3 3.5.9M81.3 74c-1.8 3.2-3.9 6.4-6.1 9.6c-3.7.3-7.4.4-11.2.4c-3.9 0-7.6-.1-11.2-.4q-3.3-4.8-6-9.6c-1.9-3.3-3.7-6.7-5.3-10c1.6-3.3 3.4-6.7 5.3-10c1.8-3.2 3.9-6.4 6.1-9.6c3.7-.3 7.4-.4 11.2-.4c3.9 0 7.6.1 11.2.4q3.3 4.8 6 9.6c1.9 3.3 3.7 6.7 5.3 10c-1.7 3.3-3.4 6.6-5.3 10m8.3-3.3c1.5 3.5 2.7 6.9 3.8 10.3c-3.4.8-7 1.4-10.8 1.9c1.2-1.9 2.5-3.9 3.6-6c1.2-2.1 2.3-4.2 3.4-6.2M64 97.8c-2.4-2.6-4.7-5.4-6.9-8.3c2.3.1 4.6.2 6.9.2s4.6-.1 6.9-.2c-2.2 2.9-4.5 5.7-6.9 8.3m-18.6-15c-3.8-.5-7.4-1.1-10.8-1.9c1.1-3.3 2.3-6.8 3.8-10.3c1.1 2 2.2 4.1 3.4 6.1c1.2 2.2 2.4 4.1 3.6 6.1m-7-25.5c-1.5-3.5-2.7-6.9-3.8-10.3c3.4-.8 7-1.4 10.8-1.9c-1.2 1.9-2.5 3.9-3.6 6c-1.2 2.1-2.3 4.2-3.4 6.2M64 30.2c2.4 2.6 4.7 5.4 6.9 8.3c-2.3-.1-4.6-.2-6.9-.2s-4.6.1-6.9.2c2.2-2.9 4.5-5.7 6.9-8.3m22.2 21l-3.6-6c3.8.5 7.4 1.1 10.8 1.9c-1.1 3.3-2.3 6.8-3.8 10.3c-1.1-2.1-2.2-4.2-3.4-6.2M31.7 35c-1.7-10.5-.3-17.9 3.8-20.3c1-.6 2.2-.9 3.5-.9c6 0 13.5 4.9 21 12.3c-3.5 3.8-7 8.2-10.4 13c-5.8.5-11.3 1.4-16.5 2.5c-.6-2.3-1-4.5-1.4-6.6M7 64c0-4.7 5.7-9.7 15.7-13.4c2-.8 4.2-1.5 6.4-2.1c1.6 5 3.6 10.3 6 15.6c-2.4 5.3-4.5 10.5-6 15.5C15.3 75.6 7 69.6 7 64m28.5 49.3c-4.1-2.4-5.5-9.8-3.8-20.3c.3-2.1.8-4.3 1.4-6.6c5.2 1.2 10.7 2 16.5 2.5c3.4 4.8 6.9 9.1 10.4 13c-7.4 7.3-14.9 12.3-21 12.3c-1.3 0-2.5-.3-3.5-.9M96.3 93c1.7 10.5.3 17.9-3.8 20.3c-1 .6-2.2.9-3.5.9c-6 0-13.5-4.9-21-12.3c3.5-3.8 7-8.2 10.4-13c5.8-.5 11.3-1.4 16.5-2.5c.6 2.3 1 4.5 1.4 6.6m9-15.6c-2 .8-4.2 1.5-6.4 2.1c-1.6-5-3.6-10.3-6-15.6c2.4-5.3 4.5-10.5 6-15.5c13.8 4 22.1 10 22.1 15.6c0 4.7-5.8 9.7-15.7 13.4" />
                                            </g>
                                        </svg>
                                    </span>
                                    CakePHP 5x
                                </div>
                            </td>
                            <td>July 2025</td>
                            <td>August 2025</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 128 128">
                                            <g fill="#61dafb">
                                                <circle cx="64" cy="64" r="11.4" />
                                                <path d="M107.3 45.2c-2.2-.8-4.5-1.6-6.9-2.3c.6-2.4 1.1-4.8 1.5-7.1c2.1-13.2-.2-22.5-6.6-26.1c-1.9-1.1-4-1.6-6.4-1.6c-7 0-15.9 5.2-24.9 13.9c-9-8.7-17.9-13.9-24.9-13.9c-2.4 0-4.5.5-6.4 1.6c-6.4 3.7-8.7 13-6.6 26.1c.4 2.3.9 4.7 1.5 7.1c-2.4.7-4.7 1.4-6.9 2.3C8.2 50 1.4 56.6 1.4 64s6.9 14 19.3 18.8c2.2.8 4.5 1.6 6.9 2.3c-.6 2.4-1.1 4.8-1.5 7.1c-2.1 13.2.2 22.5 6.6 26.1c1.9 1.1 4 1.6 6.4 1.6c7.1 0 16-5.2 24.9-13.9c9 8.7 17.9 13.9 24.9 13.9c2.4 0 4.5-.5 6.4-1.6c6.4-3.7 8.7-13 6.6-26.1c-.4-2.3-.9-4.7-1.5-7.1c2.4-.7 4.7-1.4 6.9-2.3c12.5-4.8 19.3-11.4 19.3-18.8s-6.8-14-19.3-18.8M92.5 14.7c4.1 2.4 5.5 9.8 3.8 20.3c-.3 2.1-.8 4.3-1.4 6.6c-5.2-1.2-10.7-2-16.5-2.5c-3.4-4.8-6.9-9.1-10.4-13c7.4-7.3 14.9-12.3 21-12.3c1.3 0 2.5.3 3.5.9M81.3 74c-1.8 3.2-3.9 6.4-6.1 9.6c-3.7.3-7.4.4-11.2.4c-3.9 0-7.6-.1-11.2-.4q-3.3-4.8-6-9.6c-1.9-3.3-3.7-6.7-5.3-10c1.6-3.3 3.4-6.7 5.3-10c1.8-3.2 3.9-6.4 6.1-9.6c3.7-.3 7.4-.4 11.2-.4c3.9 0 7.6.1 11.2.4q3.3 4.8 6 9.6c1.9 3.3 3.7 6.7 5.3 10c-1.7 3.3-3.4 6.6-5.3 10m8.3-3.3c1.5 3.5 2.7 6.9 3.8 10.3c-3.4.8-7 1.4-10.8 1.9c1.2-1.9 2.5-3.9 3.6-6c1.2-2.1 2.3-4.2 3.4-6.2M64 97.8c-2.4-2.6-4.7-5.4-6.9-8.3c2.3.1 4.6.2 6.9.2s4.6-.1 6.9-.2c-2.2 2.9-4.5 5.7-6.9 8.3m-18.6-15c-3.8-.5-7.4-1.1-10.8-1.9c1.1-3.3 2.3-6.8 3.8-10.3c1.1 2 2.2 4.1 3.4 6.1c1.2 2.2 2.4 4.1 3.6 6.1m-7-25.5c-1.5-3.5-2.7-6.9-3.8-10.3c3.4-.8 7-1.4 10.8-1.9c-1.2 1.9-2.5 3.9-3.6 6c-1.2 2.1-2.3 4.2-3.4 6.2M64 30.2c2.4 2.6 4.7 5.4 6.9 8.3c-2.3-.1-4.6-.2-6.9-.2s-4.6.1-6.9.2c2.2-2.9 4.5-5.7 6.9-8.3m22.2 21l-3.6-6c3.8.5 7.4 1.1 10.8 1.9c-1.1 3.3-2.3 6.8-3.8 10.3c-1.1-2.1-2.2-4.2-3.4-6.2M31.7 35c-1.7-10.5-.3-17.9 3.8-20.3c1-.6 2.2-.9 3.5-.9c6 0 13.5 4.9 21 12.3c-3.5 3.8-7 8.2-10.4 13c-5.8.5-11.3 1.4-16.5 2.5c-.6-2.3-1-4.5-1.4-6.6M7 64c0-4.7 5.7-9.7 15.7-13.4c2-.8 4.2-1.5 6.4-2.1c1.6 5 3.6 10.3 6 15.6c-2.4 5.3-4.5 10.5-6 15.5C15.3 75.6 7 69.6 7 64m28.5 49.3c-4.1-2.4-5.5-9.8-3.8-20.3c.3-2.1.8-4.3 1.4-6.6c5.2 1.2 10.7 2 16.5 2.5c3.4 4.8 6.9 9.1 10.4 13c-7.4 7.3-14.9 12.3-21 12.3c-1.3 0-2.5-.3-3.5-.9M96.3 93c1.7 10.5.3 17.9-3.8 20.3c-1 .6-2.2.9-3.5.9c-6 0-13.5-4.9-21-12.3c3.5-3.8 7-8.2 10.4-13c5.8-.5 11.3-1.4 16.5-2.5c.6 2.3 1 4.5 1.4 6.6m9-15.6c-2 .8-4.2 1.5-6.4 2.1c-1.6-5-3.6-10.3-6-15.6c2.4-5.3 4.5-10.5 6-15.5c13.8 4 22.1 10 22.1 15.6c0 4.7-5.8 9.7-15.7 13.4" />
                                            </g>
                                        </svg>
                                    </span>
                                    Node.js
                                </div>
                            </td>
                            <td>July 2025</td>
                            <td>August 2025</td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td><strong>More Coming Soon</strong></td>
                            <td colspan="2">Stay tuned...</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div> <!-- end container-->
    </section>
    <!-- =======================
        PLANS SECTION END
    ======================= -->

    <!-- =======================
        CTA SECTION
    ======================= -->

    <section id="github">
        <div class="section-cta position-relative card-side-img overflow-hidden" style="background-image: url(/images/landing-cta.jpg);">
            <div class="card-img-overlay d-flex align-items-center flex-column gap-3 justify-content-center auth-overlay text-center">
                <h3 class="text-white fs-24 mb-0 fw-bold">
                    Get Access to Our <i class="ti ti-brand-github text-primary"></i> GitHub Repository
                </h3>
                <p class="text-white text-opacity-75 fs-md">
                    We offer GitHub access to verified customers of the Inspinia admin template.<br>
                    To request access and receive support, please contact us through our official support channel.
                </p>
                <a href="https://wrapbootstrap.com/user/WebAppLayers/message" target="_blank" class="btn btn-light rounded-pill">
                    Contact Support
                </a>
            </div>
        </div>
    </section>

    <!-- =======================
        CTA SECTION END
    ======================= -->

    <!-- =======================
        FOOTER SECTION
    ======================= -->
    <footer class="section-custom section-footer py-4">

        <div class="container">
            <div class="row">
                <div class="col-12 fs-15 text-center">
                    <p class="mb-0">© 2014 -
                        <script>document.write(new Date().getFullYear())</script> Inspinia By <span class="fw-semibold">WebAppLayers</span>
                    </p>
                </div>
            </div> <!-- end row-->
        </div> <!-- end container-->
    </footer>
    <!-- =======================
        FOOTER SECTION END
    ======================= -->

    <!-- Vendor js -->
    <script src="/js/vendors.min.js"></script>

    <!-- App js -->
    <script src="/js/app.js"></script>

    <!-- Landing Page js -->
    <script src="/js/pages/landing.js"></script>

</body>

</html>