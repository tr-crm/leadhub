<!DOCTYPE html>
<html data-layout="topnav" data-topbar-color="dark" data-menu-color="light">

<head>
    @include('layouts.partials/title-meta')

    @include('layouts.partials/head-css')
</head>

<body>

    <!-- Begin page -->
    <div class="wrapper">

        @include('layouts.partials/topbar')

        @include('layouts.partials/horizontal-nav')

        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->

        <div class="content-page">

            <div class="container-fluid">

                @yield('content')
                
            </div>
            
            @include('layouts.partials/footer')

        </div>

        @include('layouts.partials/customizer')

        @include('layouts.partials/footer-scripts')

    </div>

</body>

</html>