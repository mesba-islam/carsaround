<!DOCTYPE html>
<html lang="en">

<head>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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


<!-- Header Section Starts -->
<nav class="header fixed top-0 left-0 right-0 z-[9999]">
    <div
        class="container mx-auto px-5 md:px-8 lg:px-15 p-2 bg-transparent lg:flex lg:items-center lg:justify-between">

        <div class="lg:w-1/3 flex justify-between items-center">
            <!-- Site Logo -->
            <div class="header__logo justify-start text-xl">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('/assets/img/logo/logo.png') }}" alt="Logo">
                </a>
            </div>
            <!-- Humbergar Button -->
            <span class="text-white text-3xl cursor-pointer  lg:hidden block">
                <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
            </span>
        </div>

        <!-- Menu -->
        <div class="w-[60%]">
            <ul
                class="lg:flex justify-between lg:items-center  lg:z-auto lg:static absolute bg-black lg:bg-transparent w-full left-0 lg:w-auto lg:py-0 py-4 lg:pl-0 pl-7 lg:opacity-100 opacity-100 top-[-400px] transition-all ease-in duration-500 z-[9999] text-secondary text-sm font-sans font-normal">
                <div class="lg:flex flex-wrap justify-start items-center">

                    <li class="mx-4 my-6 lg:my-0">
                        <a href="{{ route('services') }}" class=" hover:opacity-80 duration-500">Services</a>
                    </li>
                    <!-- Menu Item -->
                    <li class="menu__item mx-4 my-6 lg:my-0">
                        <a href="{{ url('pricing') }}" class=" hover:opacity-80 duration-500">Pricing</a>
                    </li>
                    <li class="mx-4 my-6 lg:my-0">
                        <a href="{{ route('contact_us') }}" class=" hover:opacity-80 duration-500">Contact Us</a>
                    </li>
                </div>
                <!-- Navabr Button -->
                <div class="pl-4">
                    <div class="header__btn justify-end">
                        <a href="{{ route('login') }}"
                            class="text-sm font-sans font-normal bg-white text-black inline-block text-center py-2 w-[91px] border-[1px] leading-6 rounded transition-all ease-in-out duration-500">
                            Login
                        </a>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</nav>
<!-- Header section Ends -->


    <!-- alpine.js tab component -->
    <div class="pt-head" x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'start' }" id="tab_wrapper">
        <nav>
                <!-- Loan Tab Section Starts -->
    <div class="loan__tab bg-[#E6E6E6] mt-[52px] py-12">
        <div class="lg:container mx-auto px-5 md:px-8 lg:px-15">
            <!-- Tab Body -->
            <div class="tab__body">
                <!-- Tab List -->
                <div
                    class="tab__list grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 space-y-6 xs:space-y-0 sm:space-y-0 gap-4 sm:gap-6 md:gap-20">
                    <!-- Tab Item 1 -->
                    <div class="tab__item">
                        <!-- Item Name -->
                        <div class="item__name pb-1">
                            <h2
                                class="font-inter font-medium text-xl text-[#242634] opacity-50 tracking-[0.25px] uppercase">
                                <a :class="{ 'active': tab === 'personal_details' }" x-on:click.prevent="tab = 'personal_details'" href="#">Personal Details</a>
                            </h2>
                        </div>
                        <!-- Item Bar -->
                        <div class="item__bar h-2 w-full rounded-2xl bg-[#231F20] opacity-50">
                        </div>
                    </div>
                    <!-- Tab Item 2 -->
                    <div class="tab__item">
                        <!-- Item Name -->
                        <div class="item__name pb-1">
                            <h2
                                class="font-inter font-medium text-xl text-[#242634] opacity-50 tracking-[0.25px] uppercase">
                                <a :class="{ 'active': tab === 'safe_settlement' }" x-on:click.prevent="tab = 'safe_settlement'" href="#">Safe Settlement</a>
                            </h2>
                        </div>
                        <!-- Item Bar -->
                        <div class="item__bar h-2 w-full rounded-2xl bg-[#f5144c] opacity-50">
                        </div>
                    </div>
                    <!-- Tab Item 3 -->
                    <div class="tab__item">
                        <!-- Item Name -->
                        <div class="item__name pb-1">
                            <h2 class="font-inter font-semibold text-xl text-primary tracking-[0.25px] uppercase">
                                <a :class="{ 'active': tab === 'inspection' }" x-on:click.prevent="tab = 'inspection'" href="#">Inspection</a>
                            </h2>
                        </div>
                        <!-- Item Bar -->
                        <div class="item__bar h-2 w-full rounded-2xl bg-[#231F20]">
                        </div>
                    </div>
                    <!-- Tab Item 4 -->
                    <div class="tab__item">
                        <!-- Item Name -->
                        <div class="item__name pb-1">
                            <h2
                                class="font-inter font-normal text-xl text-primary opacity-50 tracking-[0.25px] uppercase">
                                <a :class="{ 'active': tab === 'finance' }" x-on:click.prevent="tab = 'finance'" href="#">Finance</a>
                            </h2>
                        </div>
                        <!-- Item Bar -->
                        <div class="item__bar h-2 w-full rounded-2xl bg-white">
                        </div>
                    </div>
                    <!-- Tab Item 5 -->
                    <div class="tab__item">
                        <!-- Item Name -->
                        <div class="item__name pb-1">
                            <h2
                                class="font-inter font-normal text-xl text-primary opacity-50 tracking-[0.25px] uppercase">
                                <a :class="{ 'active': tab === 'transport' }" x-on:click.prevent="tab = 'transport'" href="#">Transport</a>
                            </h2>
                        </div>
                        <!-- Item Bar -->
                        <div class="item__bar h-2 w-full rounded-2xl bg-white">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Loan Tab Section Ends -->
            <a :class="{ 'active': tab === 'start' }" x-on:click.prevent="tab = 'start'" href="#">start</a>
            <a :class="{ 'active': tab === 'personal_details' }" x-on:click.prevent="tab = 'personal_details'" href="#">personal details</a>
            <a :class="{ 'active': tab === 'safe_settlement' }" x-on:click.prevent="tab = 'safe_settlement'" href="#">safe settlement</a>
            <a :class="{ 'active': tab === 'inspection' }" x-on:click.prevent="tab = 'inspection'" href="#">inspection</a>
            <a :class="{ 'active': tab === 'finance' }" x-on:click.prevent="tab = 'finance'" href="#">finance</a>
            <a :class="{ 'active': tab === 'transport' }" x-on:click.prevent="tab = 'transport'" href="#">transport</a>
        </nav>

          <div x-show="tab === 'start'">
            @include('buyers.start');
          </div>

          <div x-show="tab === 'personal_details'">
            @include('buyers.personal_details');
          </div>

          <div x-show="tab === 'safe_settlement'">
            @include('buyers.safe_settlement');
          </div>

          <div x-show="tab === 'inspection'">
            @include('buyers.inspection');
          </div>

          <div x-show="tab === 'finance'">
            @include('buy.finance');
          </div>

          <div x-show="tab === 'transport'">
            @include('buyers.transport');
          </div>

    </div>
    {{-- <div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'description' }" id="tab_wrapper">
        <!-- The tabs navigation -->
        <nav>
          <a :class="{ 'active': tab === 'description' }" @click.prevent="tab = 'description'; window.location.hash = 'description'" href="#">Description</a>
          <a :class="{ 'active': tab === 'reviews' }" @click.prevent="tab = 'reviews'; window.location.hash = 'reviews'" href="#">Reviews</a>
        </nav>

        <!-- The tabs content -->
        <div x-show="tab === 'description'">
            @include('buyer.start');
        </div>
        <div x-show="tab === 'reviews'">
            @include('about_us');
         </div>

      </div> --}}


    <!-- Buyer Channel JS -->
    <script src="{{ asset('/assets/js/buyer.js') }}"></script>

    <!-- Inspection JS -->
    <script src="{{ asset('/assets/js/inspection.js') }}"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- SwiperJS Slider -->
    <script src="../../node_modules/swiper/swiper-bundle.min.js"></script>

    <!-- Custom JS -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- SwiperJS Slider -->
    <script src="{{ asset('/assets/node_modules/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('/assets/js/main.js') }}"></script>






    <script src="{{ asset('/assets/js/buyer.js') }}"></script>

<!-- Inspection JS -->
<script src="{{ asset('/assets/js/inspection.js') }}"></script>


  </body>

</html>
