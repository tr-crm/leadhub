<!DOCTYPE html>
<html @yield('html_attribute')>

<head>
    @include('layouts.partials/title-meta')

    @include('layouts.partials/head-css')
</head>

<body>

    <div class="wrapper">

        @include('layouts.partials/menu')

        <div class="content-page">

            @yield('content')

            @include('layouts.partials/footer')

        </div>

        @include('layouts.partials/footer-scripts')

    </div>

</body>

</html>
