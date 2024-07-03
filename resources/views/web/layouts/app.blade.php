<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/images/favicon.ico') }}">
    <title>@yield('title')</title>

    @include('web.layouts.partials.header')

</head>

<body>

    <!-- ==============================================
    ** Preloader **
    =================================================== -->
    <!--<div id="loading">
        <div class="element">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div>-->

    <!-- ==============================================
    ** Header **
    =================================================== -->
    <header>
        <!-- Start Header top Bar -->
        @include('web.layouts.partials.top-header')
        <!-- End Header Middle -->
        <!-- Start Navigation -->
        @include('web.layouts.partials.nav-menu')
        <!-- End Navigation -->
    </header>

    @yield('content')

    @include('web.layouts.partials.footer')

    <!-- Scroll to top -->
    <a href="#" class="scroll-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>

    @include('web.layouts.partials.footer-script')

    
</body>

</html>
