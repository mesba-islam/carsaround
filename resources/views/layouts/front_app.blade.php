<!DOCTYPE html>
<html lang="en">

<head>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta name="csrf-token-front" description="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('/assets/img/logo/favicon.png') }}" type="image/x-icon">
    <title>@yield('title')</title>


    <!-- Ion Icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Fontawesome Icons -->
    <link rel="stylesheet" href="{{ asset('/assets/node_modules/@fortawesome/fontawesome-free/css/all.min.css') }}">

    <!-- SwiperJS Slider -->
    <link rel="stylesheet" href="{{ asset('/assets/node_modules/swiper/swiper-bundle.min.css') }}">

    @yield('single_page_style')

    <!-- TailwindCSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/output.css') }}">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('/assets/css/custom.css') }}">


</head>

<body class="">

    @include('layouts.front.nav')

    @yield('content')

    @include('layouts.front.footer')

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>




        <!-- SwiperJS Slider -->
        <script src="{{ asset('/assets/node_modules/swiper/swiper-bundle.min.js') }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        {{-- Customer JS --}}
        {{-- <script src="{{ asset('assets/js/alpine.js') }}"></script> --}}
        <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>

        <!-- Custom JS -->
        <script src="{{ asset('/assets/js/main.js') }}"></script>

        @yield('single_page_script')

</body>

</html>
