

@extends('dashboard.user.layouts.dashboard_app')

@section('title')
    Login | Cars Around
@endsection

@section('custom_stylesheets_library')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
@endsection


@section('content')


    <!-- Login Section Starts -->
    <div class="login py-10 px-5 sm:px-10 md:px-20 bg-secondary w-[90%] md:w-[660px] mx-auto rounded mb-[200px] mt-[100px]">
        <!-- Login Title -->
        <h2 class="login__title font-rhat font-semibold text-3xl sm:text-[40px] sm:leading-[48px] tracking-[1px] text-[#212935]">
            Great! Now enter the 6 digit code we’ve send to <span>+61 4 8882 4684</span>
        </h2>
        <!-- Login Form Section -->
        <form action="#" class="login-form py-5">
            <!-- Form field -->
            <div class="form__field w-full flex flex-wrap justify-start">
                <input type="text" name="number" id="number" value="" placeholder="******" checked class="w-full py-[22px] px-4 rounded bg-transparent border border-[#9CA1AC] outline-none focus:bg-white mt-1 mb-6">
                <!-- Form Button -->
                <button class="form__btn font-rhat font-medium text-base text-[#F0EEE6] bg-[#212935] tracking-[1px] border-2 py-5 border-[#212935] hover:bg-[#F0EEE6] hover:text-[#212935] w-full rounded transition-all ease-in-out duration-300">
                    Login
                </button>
            </div>
        </form>
        <p class="text-center font-rhat font-normal text-sm text-[#212935] tracking-[1px]">
            haven’t received the code?
            <button href="" class="text-[#9CA1AC] hover:text-[#212935] border-b border-[#9CA1AC] hover:border-none transition-all ease-in-out duration-300">
                Resend  it now
            </button>
        </p>
    </div>
    <!-- Login Section Ends -->

@endsection

@section('custom_scripts')
    <!-- Flowbite JS -->
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
@endsection
