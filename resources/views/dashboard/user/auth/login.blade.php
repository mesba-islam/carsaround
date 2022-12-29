

@extends('layouts.front_app')

@section('title')
    Login | Cars Around
@endsection

@section('single_page_style')
<script src="{{ asset('assets/js/alpine.js') }}"></script>
@livewireStyles
<style>
    [x-cloak] {
        display: none;
    }
</style>
@endsection






@section('content')

    <!-- Login Section Starts -->
    <div class="login py-10 px-5 sm:px-10 md:px-20 bg-secondary w-[90%] md:w-[660px] mx-auto rounded mb-[200px] mt-[100px]">
        <!-- Login Title -->
        <h2 class="login__title  font-semibold text-3xl text-[#212935]">
            Log in to your account
        </h2>
        <!-- Login Form Section -->
        <form action="{{ route('login') }}" method="POST" class="py-5 login-form"
        x-data="{
            show_otp: false,
            has_credential_error: '<?php if ($errors->any()) echo true; else echo false; ?>',

            otp_request_data: {
                phone_no: '{{ old("phone_no") }}',
                _token: document.head.querySelector('meta[name=csrf-token-front]').content
            },

            async sendOTP() {

                let response = await fetch('/get-otp', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(this.otp_request_data)
                })
                .then((res) => console.log(res))
                .catch((res) => console.log(res));

                console.log(response);
            },
        }">
            @csrf


            @if ($errors->any())
                <div class="text-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form field -->
            <div class="flex flex-wrap justify-start w-full form__field">
                <label for="number" class=" font-medium text-base text-[#323647]">
                    Mobile number
                </label>
                <input type="number" name="phone_no" x-model="otp_request_data.phone_no" id="number" value="{{ old('phone_no') }}" placeholder="+61 4 8882 4684" checked class="w-full py-[22px] px-4 rounded bg-transparent border border-[#9CA1AC] outline-none focus:bg-white mt-1 mb-6">

            </div>
            <!-- Form Button -->
            <button x-show="!show_otp && !has_credential_error" @click="show_otp = true;" @click.prevent="sendOTP" class="form__btn  font-medium text-base text-[#F0EEE6] bg-[#212935] tracking-[1px] border-2 py-5 border-[#212935] hover:bg-[#F0EEE6] hover:text-[#212935] w-full rounded transition-all ease-in-out duration-300">
                Send OTP
            </button>

            <!-- Form field -->
            <div class="flex flex-wrap justify-start w-full form__field" x-show="show_otp || has_credential_error">
                <label for="number" class=" font-medium text-base text-[#323647]">
                    OTP
                </label>
                <input type="number" name="password" id="number" value="{{ old('password') }}" placeholder="888 684" checked class="w-full py-[22px] px-4 rounded bg-transparent border border-[#9CA1AC] outline-none focus:bg-white mt-1 mb-6">
            </div>

            <!-- Form Button -->
            <button x-show="show_otp || has_credential_error" class="form__btn  font-medium text-base text-[#F0EEE6] bg-[#212935] tracking-[1px] border-2 py-5 border-[#212935] hover:bg-[#F0EEE6] hover:text-[#212935] w-full rounded transition-all ease-in-out duration-300">
                Login
            </button>
        </form>
        <p class="text-center  font-normal text-sm text-[#212935] tracking-[1px]">
            New to Carsaround?
            <a href="{{ route('register') }}" class="text-[#9CA1AC] hover:text-[#212935] border-b border-[#9CA1AC] hover:border-none transition-all ease-in-out duration-300">
                Sign Up
            </a>
        </p>
    </div>
    <!-- Login Section Ends -->





        <!-- Legal Section Starts -->
        <div class="legal text-center">
            <!-- Legal Title -->
            <button onclick="legalMoreDetails()">
                <h2 class="legal__title font-rhat font-medium text-sm text-[#212935] flex justify-center items-center gap-1 bg-secondary w-[80px] py-1 mx-auto rounded-t-lg">
                    Legal
                    <span class="down-arrow" id="down-arrow">
                        <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.5 0.5L5.5 5.5L10.5 0.5H0.5Z" fill="#212935"/>
                        </svg>
                    </span>
                </h2>
            </button>

            <!-- Legal Body -->
            <div class="legal__body pt-8 pb-4 px-5 sm:px-10 md:px-16 bg-secondary text-start hidden" id="legal-details">
                <div class="lg:container mx-auto lg:max-w-screen-2xl lg:px-15">
                    <!-- Legal Text -->
                    <p class="legal__text font-rhat font-light font-sm text-[#212935]">
                        This insurance product is issued by Auto & General Insurance Company Limited (ACN 111 586 353, AFS Licence No 285571) and administered by Auto & General Services Pty Limited (ACN 003 617 909, AFS Licence No 241411). Because we don't know your financial needs, we can't advise if this insurance will suit you. You should consider your needs and read the PDS before making a decision to buy insurance. Click to view or download a copy of our <a href="key.html" class="font-normal text-[#9CA1AC] hover:text-[#212935]">Key Facts Sheet</a>, <a href="statement.html" class="font-normal text-[#9CA1AC] hover:text-[#212935]">Product Disclosure Statement</a>, <a href="target.html" class="font-normal text-[#9CA1AC] hover:text-[#212935]">Target Market Determination</a> or <a href="finance-guide.html" class="font-normal text-[#9CA1AC] hover:text-[#212935]">Financial Services Guide</a>. The price we quote is at the insurer's sole and unrestricted discretion. It is based on the profile of the risk to be covered and any other factors the insurer may choose. These factors may change at any time without notice, as may the prices. If the policy renews, the price may exceed the price paid for the previous policy. Home and contents insurance not available in NT, North Qld and Northern WA.
                    </p>
                    <!-- Legal Guide title -->
                    <h2 class="legal__guide-title pt-3 font-rhat font-medium text-sm text-[#212935]">
                        Online Discount Terms & Conditions
                    </h2>
                    <!-- Legal Guide Item -->
                    <ul class="legal__guide-item">
                        <!-- Item List 01 -->
                        <li class="item__list font-rhat font-light text-sm text-[#212935]">
                            <span class="font-normal">01.</span>
                            Discounts apply to the premium paid for a new Budget Direct Home & Contents, Home only, Contents only policy initiated online on or after 29 March 2017.
                        </li>
                        <!-- Item List 02 -->
                        <li class="item__list font-rhat font-light text-sm text-[#212935]">
                            <span class="font-normal">02.</span>
                            The new policy discount amount varies by product: 30% discount on combined Home & Contents Insurance (consisting of 15% discount for combining Home & Contents covers and 15% discount for policies 01. 03. initiated online), 15% for Home only or Contents only policies.
                        </li>
                        <!-- Item List 03 -->
                        <li class="item__list font-rhat font-light text-sm text-[#212935]">
                            <span class="font-normal">03.</span>
                            Discounts do not apply to any renewal offer of insurance.
                        </li>
                        <!-- Item List 04 -->
                        <li class="item__list font-rhat font-light text-sm text-[#212935]">
                            <span class="font-normal">04.</span>
                            Discounts only apply to the insurance portion of the premium. Discounts are applied before government charges, taxes, levies and fees, including instalment processing fees (as applicable). The full extent of 06. discounts may therefore be impacted.
                        </li>
                        <!-- Item List 05 -->
                        <li class="item__list font-rhat font-light text-sm text-[#212935]">
                            <span class="font-normal">05.</span>
                            We reserve the right to change the offer without notice.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Legal Section Ends -->


        <!-- Footer Section Starts -->
        <footer class=" footer text-center bg-secondary py-10 px-5">
            <!-- Copy Right -->
            <p class="lg:container mx-auto lg:max-w-screen-2xl lg:px-15 footer__copy-riht-title font-rhat font-light text-sm text-[#212935]">
                ©2006-2022 Auto & General Services Pty Ltd
                <a href="#" class="font-normal">ACN 003 617 909</a>.
                All rights reserved.
            </p>
            <!-- Footer menu -->
            <ul class="footer__menu pt-1">
                <li class="menu__item inline-block">
                    <a href="{{ route('privacy_policy') }}" class="item__list font-rhat font-medium text-sm text-[#9CA1AC] hover:text-[#212935] transition-all ease-in-out duration-300">
                        Privacy policy
                    </a>
                </li>
                |
                <li class="menu__item inline-block">
                    <a href="website-terms.html" class="item__list font-rhat font-medium text-sm text-[#9CA1AC] hover:text-[#212935] transition-all ease-in-out duration-300">
                        Website terms of use
                    </a>
                </li>
            </ul>
        </footer>
        <!-- Footer Section Ends -->





@endsection

@section('single_page_script')
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
@endsection
