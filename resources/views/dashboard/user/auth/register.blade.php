

@extends('dashboard.user.layouts.dashboard_app')

@section('title')
    Register | Cars Around
@endsection

{{-- @section('custom_stylesheets_library')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
@endsection --}}


@section('content')

        <!-- Sign up Slider Section -->
        <div class="flex flex-wrap">
            <div class="swiper signup-slider w-full md:w-1/2">
                <div class="swiper-wrapper">
                    <!-- Slider Item -->
                    <div class="swiper-slide">
                        <!-- Sign Up -->
                        <div class="sign-up text-center py-20 px-5">
                            <div class="sign-up__logo pb-12 md:pb-[100px]">
                                <img src="{{ asset('/assets/img/logo/signup-logo.png') }}" alt="Logo" class="inline-block">
                                <p class="font-sans font-light text-sm text-[#9CA1AC] pt-7 w-full sm:w-[400px] md:w-[350px] lg:w-[380px] mx-auto">
                                    Carsaround.com is vel risus quis lorem accumsan volutpat ac quis felis. Quisque et pellentesque massa, et iaculis lacus.
                                </p>
                            </div>
                            <!-- Finance Image -->
                            <div class="finance-img">
                                <img src="{{ asset('/assets/img/finance.png') }}" alt="img" class="inline-block">
                            </div>
                            <h2 class=" font-normal text-2xl text-primary tracking-[1px] pt-12 md:pt-20 pb-8">
                                Lorem ipsum is a placeholder Text
                            </h2>
                            <p class="font-sans font-light text-sm text-[#9CA1AC] w-full sm:w-[500px] md:w-[350px] xl:w-[500px] mx-auto">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut auctor purus a tortor aliquet, sit amet pellentesque neque fringilla.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                    <!-- Slider Item -->
                    <div class="swiper-slide">
                        <!-- Sign Up -->
                        <div class="sign-up text-center py-20 px-5">
                            <div class="sign-up__logo pb-12 md:pb-[100px]">
                                <img src="{{ asset('/assets/img/logo/signup-logo.png') }}" alt="Logo" class="inline-block">
                                <p class="font-sans font-light text-sm text-[#9CA1AC] pt-7 w-full sm:w-[400px] md:w-[350px] lg:w-[380px] mx-auto">
                                    Carsaround.com is vel risus quis lorem accumsan volutpat ac quis felis. Quisque et pellentesque massa, et iaculis lacus.
                                </p>
                            </div>
                            <!-- Finance Image -->
                            <div class="finance-img">
                                <img src="{{ asset('/assets/img/finance.png') }}" alt="img" class="inline-block">
                            </div>
                            <h2 class=" font-normal text-2xl text-primary tracking-[1px] pt-12 md:pt-20 pb-8">
                                Lorem ipsum is a placeholder Text
                            </h2>
                            <p class="font-sans font-light text-sm text-[#9CA1AC] w-full sm:w-[500px] md:w-[350px] xl:w-[500px] mx-auto">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut auctor purus a tortor aliquet, sit amet pellentesque neque fringilla.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                    <!-- Slider Item -->
                    <div class="swiper-slide">
                        <!-- Sign Up -->
                        <div class="sign-up text-center py-20 px-5">
                            <div class="sign-up__logo pb-12 md:pb-[100px]">
                                <img src="{{ asset('/assets/img/logo/signup-logo.png') }}" alt="Logo" class="inline-block">
                                <p class="font-sans font-light text-sm text-[#9CA1AC] pt-7 w-full sm:w-[400px] md:w-[350px] lg:w-[380px] mx-auto">
                                    Carsaround.com is vel risus quis lorem accumsan volutpat ac quis felis. Quisque et pellentesque massa, et iaculis lacus.
                                </p>
                            </div>
                            <!-- Finance Image -->
                            <div class="finance-img">
                                <img src="{{ asset('/assets/img/finance.png') }}" alt="img" class="inline-block">
                            </div>
                            <h2 class=" font-normal text-2xl text-primary tracking-[1px] pt-12 md:pt-20 pb-8">
                                Lorem ipsum is a placeholder Text
                            </h2>
                            <p class="font-sans font-light text-sm text-[#9CA1AC] w-full sm:w-[500px] md:w-[350px] xl:w-[500px] mx-auto">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut auctor purus a tortor aliquet, sit amet pellentesque neque fringilla.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                    <!-- Slider Item -->
                    <div class="swiper-slide">
                        <!-- Sign Up -->
                        <div class="sign-up text-center py-20 px-5">
                            <div class="sign-up__logo pb-12 md:pb-[100px]">
                                <img src="{{ asset('/assets/img/logo/signup-logo.png') }}" alt="Logo" class="inline-block">
                                <p class="font-sans font-light text-sm text-[#9CA1AC] pt-7 w-full sm:w-[400px] md:w-[350px] lg:w-[380px] mx-auto">
                                    Carsaround.com is vel risus quis lorem accumsan volutpat ac quis felis. Quisque et pellentesque massa, et iaculis lacus.
                                </p>
                            </div>
                            <!-- Finance Image -->
                            <div class="finance-img">
                                <img src="{{ asset('/assets/img/finance.png') }}" alt="img" class="inline-block">
                            </div>
                            <h2 class=" font-normal text-2xl text-primary tracking-[1px] pt-12 md:pt-20 pb-8">
                                Lorem ipsum is a placeholder Text
                            </h2>
                            <p class="font-sans font-light text-sm text-[#9CA1AC] w-full sm:w-[500px] md:w-[350px] xl:w-[500px] mx-auto">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut auctor purus a tortor aliquet, sit amet pellentesque neque fringilla.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <!-- Sign Up Form -->
            <div class="signup-form w-full md:w-1/2">
                <div class="bg-secondary">
                    <div class="sign-up text-center py-20 px-5 w-full sm:w-[525px] md:w-full lg:w-[525px] xl:w-[570px] mx-auto">
                        <h2 class="text-center  font-semibold text-3xl tracking-[1px] pb-4">
                            Registration to <span><img class="inline-block" src="../../public/assets/img/logo/signup-text.png" alt="img"></span>
                        </h2>
                        <form action="#" class="login-form py-5">
                            <!-- Form field -->
                            <div class="form__field w-full flex flex-wrap justify-start">
                                <!-- First Name -->
                                <label for="first-name" class="font-roboto font-normal text-sm text-blue">
                                    First Name*
                                </label>
                                <input type="text" name="signup-form" id="first-name" value="" placeholder="Darlene" required checked class="w-full py-2 px-4 rounded bg-transparent border border-[#9CA1AC] outline-none focus:bg-white mt-1 mb-4">
                                <!-- Last Name -->
                                <label for="last-name" class="font-roboto font-normal text-sm text-blue">
                                    Last Name*
                                </label>
                                <input type="text" name="signup-form" id="last-name" value="" placeholder="Robertson" required checked class="w-full py-2 px-4 rounded bg-transparent border border-[#9CA1AC] outline-none focus:bg-white mt-1 mb-4">
                                <!-- Contact Number -->
                                <label for="contact-number" class="font-roboto font-normal text-sm text-blue">
                                    Contact Number*
                                </label>
                                <input type="number" name="signup-form" id="contact-number" value="" placeholder="04 55550118" required checked class="w-full py-2 px-4 rounded bg-transparent border border-[#9CA1AC] outline-none focus:bg-white mt-1 mb-4 appearance-none">
                                <!-- E-mail Address -->
                                <label for="e-mail" class="font-roboto font-normal text-sm text-blue">
                                    E-mail Address
                                </label>
                                <input type="text" name="signup-form" id="e-mail" value="" placeholder="darlene.robertson@example.com" checked class="w-full py-2 px-4 rounded bg-transparent border border-[#9CA1AC] outline-none focus:bg-white mt-1 mb-4">
                                <!-- Current Address -->
                                <label for="address" class="font-roboto font-normal text-sm text-blue">
                                    Current Address
                                </label>
                                <input type="text" name="signup-form" id="address" value="" placeholder="14 Teme Street, Tenbury Wells, WR15 8BA" checked class="w-full py-2 px-4 rounded bg-transparent border border-[#9CA1AC] outline-none focus:bg-white mt-1 mb-4">
                                <!-- Driver license number -->
                                <label for="license-number" class="font-roboto font-normal text-sm text-blue">
                                    Driver license number
                                </label>
                                <input type="number" name="signup-form" id="license-number" value="" placeholder="040812345" checked class="w-full py-2 px-4 rounded bg-transparent border border-[#9CA1AC] outline-none focus:bg-white mt-1 mb-4 appearance-none">
                                <!-- State/Territory Registered -->
                                <label for="registered" class="font-roboto font-normal text-sm text-blue">
                                    State/Territory Registered
                                </label>
                                <input type="text" name="signup-form" id="registered" value="" placeholder="Victoria Australia" checked class="w-full py-2 px-4 rounded bg-transparent border border-[#9CA1AC] outline-none focus:bg-white mt-1 mb-4">
                                <!-- Driver License Expiry Date -->
                                <label for="expiry-date" class="font-roboto font-normal text-sm text-blue">
                                    Driver License Expiry Date
                                </label>
                                <input type="number" name="signup-form" id="expiry-date" value="" placeholder="17-05-2024" checked class="w-full py-2 px-4 rounded bg-transparent border border-[#9CA1AC] outline-none focus:bg-white mt-1 mb-4 appearance-none">
                                <!-- Date Of Birth -->
                                <label for="birth" class="font-roboto font-normal text-sm text-blue">
                                    Date Of Birth
                                </label>
                                <input type="date" name="signup-form" id="birth" value="" placeholder="19/03/1989" checked class="w-full py-2 px-4 rounded bg-transparent border border-[#9CA1AC] outline-none focus:bg-white mt-1 mb-4 appearance-none">


                                <!-- Form Button -->
                                <button onclick="window.location.href='otp.html';"  class="form__btn  font-medium text-base text-[#F0EEE6] bg-[#212935] tracking-[1px] border-2 py-3 border-[#212935] hover:bg-[#F0EEE6] hover:text-[#212935] w-[150px] mx-auto rounded transition-all ease-in-out duration-300 mt-10">
                                    Send OTP
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



@endsection

@section('custom_scripts')

    <!-- Dashboard JS -->
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
@endsection
