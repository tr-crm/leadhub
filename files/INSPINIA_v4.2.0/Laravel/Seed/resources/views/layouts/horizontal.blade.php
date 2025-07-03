<!DOCTYPE html>
<html data-layout="topnav" data-topbar-color="dark" data-menu-color="light" @yield('html_attribute')>

<head>
    @include('layouts.partials/title-meta')

    @include('layouts.partials/head-css')
</head>

<body>


    <div class="wrapper">

        @include('layouts.partials/topbar')

        @include('layouts.partials/horizontal-nav')

        <div class="content-page">


            @yield('content')


            @include('layouts.partials/footer')

        </div>

        @include('layouts.partials/footer-scripts')

    </div>

</body>

</html>
