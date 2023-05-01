<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@lang('frontend.site_name')</title>

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/Normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nanoscroller.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flexslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animation.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/header.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/pages.css') }}" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />


    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}" />
    @if  (app() ->getLocale()=='en')

        <link rel="stylesheet" href="{{asset('frontend/assets/css/ltr.css')}}" />
    @endif

    @yield('css')
</head>

<body class="has-header-search">



        @include('frontend.includes.header')

        @yield('content')


        @include('frontend.includes.footer')



    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.nanoscroller.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/acmeticker.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.easy-ticker.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.easy-ticker.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js.map') }}"></script>

    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>

    @if (app()->getLocale() == 'en')
        <script src="{{ asset('frontend/assets/js/ltr.js') }}"></script>
    @endif

    @yield('js')
</body>

</html>
