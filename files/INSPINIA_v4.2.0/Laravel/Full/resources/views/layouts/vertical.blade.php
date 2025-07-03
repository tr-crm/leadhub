<!DOCTYPE html>
<html @yield('html_attribute')>

<head>
    @include('layouts.partials/title-meta')

    @include('layouts.partials/head-css')
</head>

<body>

    <!-- Begin page -->
    <div class="wrapper">

        @include('layouts.partials/menu')

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
        
    </div>
    
    @include('layouts.partials/footer-scripts')

</body>

</html>