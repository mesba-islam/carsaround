<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Humbergar icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Fontawesome Icons -->
    <link rel="stylesheet" href="{{ asset('/assets/node_modules/@fortawesome/fontawesome-free/css/all.min.css') }}">

    <!-- SwiperJS Slider -->
    <link rel="stylesheet" href="{{ asset('/assets/node_modules/swiper/swiper-bundle.min.css') }}">


    @yield('dash_single_page_style')
    <script src="{{ asset('assets/js/alpine.js') }}"></script>



    <!-- TailwindCSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/output.css') }}">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('/assets/css/custom.css') }}">


    <style>
        [x-cloak] {
            display: none;
        }
    </style>





</head>

<body class="">

    @include('dashboard.user.layouts.front.dashboard_nav')

    <div class="dashboard mt-14">
        <div class="flex">
            @include('dashboard.user.layouts.front.dashboard_sidebar')

            @yield('content')
        </div>
    </div>



    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    {{-- Alpine JS --}}
    {{-- <script src="{{ asset('assets/js/alpine.js') }}"></script> --}}

    <!-- SwiperJS Slider -->
    <script src="{{ asset('/assets/node_modules/swiper/swiper-bundle.min.js') }}"></script>


    @yield('dash_single_page_script')

    <!-- Custom JS -->
    <script src="{{ asset('/assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('/assets/js/main.js') }}"></script>

    <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>




</body>

</html>
