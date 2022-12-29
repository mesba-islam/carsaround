@include('trade.common.nav')
<div x-data="{
    otp: {
        first: '',
        second: '',
        third: '',
        fourth: '',
        fifth: '',
        sixth: '',
    }
}">

     <!-- Back Section Starts -->
     <div class="pt-10 back">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
            <!-- Back Page -->
            <div class="btn__back">
                <!-- Back Icon -->
                <button @click.prevent="tab = 'send_otp'; window.location.hash = 'send_otp'"
                    class="back__icon h-[46px] w-[46px] text-blue bg-secondary justify-center flex items-center rounded-full opacity-70 hover:opacity-100">
                    <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M22.2482 8.94576H5.28176L10.4747 2.70851C10.7175 2.41636 10.8343 2.03972 10.7995 1.66145C10.7646 1.28317 10.5809 0.934238 10.2887 0.691416C9.99658 0.448595 9.61994 0.331772 9.24166 0.366649C8.86338 0.401526 8.51445 0.585245 8.27163 0.877389L1.11882 9.46076C1.0707 9.52903 1.02767 9.60075 0.990073 9.67534C0.990073 9.74687 0.990074 9.78979 0.889934 9.86132C0.825092 10.0253 0.791141 10.1999 0.789795 10.3763C0.791141 10.5527 0.825092 10.7273 0.889934 10.8913C0.889934 10.9628 0.889934 11.0058 0.990073 11.0773C1.02767 11.1519 1.0707 11.2236 1.11882 11.2919L8.27163 19.8752C8.40614 20.0367 8.57457 20.1666 8.76495 20.2556C8.95534 20.3446 9.163 20.3906 9.37316 20.3902C9.70742 20.3909 10.0313 20.2745 10.2887 20.0612C10.4336 19.9411 10.5533 19.7936 10.6411 19.6272C10.7289 19.4607 10.7829 19.2786 10.8002 19.0913C10.8175 18.9039 10.7976 18.7149 10.7418 18.5353C10.6859 18.3556 10.5952 18.1887 10.4747 18.0441L5.28176 11.8069H22.2482C22.6276 11.8069 22.9915 11.6562 23.2598 11.3879C23.5281 11.1196 23.6788 10.7557 23.6788 10.3763C23.6788 9.99691 23.5281 9.63304 23.2598 9.36476C22.9915 9.09648 22.6276 8.94576 22.2482 8.94576Z"
                            fill="#242634" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Back Section Ends -->

    <!-- OTP Section Starts -->
    <div class="otp__body py-[50px] sm:py-20">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
            <!-- OTP Item -->
                <div class="flex justify-center">
                    <div class="">
                        <!-- OTP Title -->
                        <div class="flex justify-start">
                            <span class="text-sm font-normal otp__title font-roboto py-2">
                                OTP*
                            </span>
                        </div>
                        <div id="otp" class="otp__item flex-row justify-center text-center bg-[#f4f4f4] px-2 xs:px-6 sm:px-6 py-2 rounded-md">
                            <input x-model="otp.first" class="m-2 border-b-2 border-[#000] bg-transparent text-[#000] text-3xl font-roboto font-medium h-10 w-8 sm:w-14 text-center form-control outline-none" type="text" id="first" maxlength="1" placeholder="*"/>
                            <input x-model="otp.second" class="m-2 border-b-2 border-[#000] bg-transparent text-[#000] text-3xl font-roboto font-medium h-10 w-8 sm:w-14 text-center form-control outline-none" type="text" id="second" maxlength="1" placeholder="*" />
                            <input x-model="otp.third" class="m-2 border-b-2 border-[#000] bg-transparent text-[#000] text-3xl font-roboto font-medium h-10 w-8 sm:w-14 text-center form-control outline-none" type="text" id="third" maxlength="1" placeholder="*" />
                            <input x-model="otp.fourth" class="m-2 border-b-2 border-[#000] bg-transparent text-[#000] text-3xl font-roboto font-medium h-10 w-8 sm:w-14 text-center form-control outline-none" type="text" id="fourth" maxlength="1" placeholder="*" />
                            <input x-model="otp.fifth" class="m-2 border-b-2 border-[#000] bg-transparent text-[#000] text-3xl font-roboto font-medium h-10 w-8 sm:w-14 text-center form-control outline-none" type="text" id="fifth" maxlength="1" placeholder="*" />
                            <input x-model="otp.sixth" class="m-2 border-b-2 border-[#000] bg-transparent text-[#000] text-3xl font-roboto font-medium h-10 w-8 sm:w-14 text-center form-control outline-none" type="text" id="sixth" maxlength="1" placeholder="*" />
                        </div>
                        <span class="error text-xs text-red-600">{{ $otp_error_message }}</span>
                        <!-- OTP Resend -->
                        <div class="flex justify-end">
                            <button
                                class="otp__btn-resend group flex justify-center items-center text-center py-[10px] mt-1 text-primary bg-transparent underline font-roboto italic text-xs leading-[18px] font-light capitalize hover:no-underline transition-all ease-in-out duration-500">
                                Resend OTP
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Button Item -->
                <div class="flex justify-end">
                    <button
                        @click="validateAndGoNextStep('verify_otp', otp)"
                        x-on:notify-verify-otp.window="tab = 'safe_settlement'; window.location.hash = 'safe_settlement';"
                        class="otp__btn-started group flex justify-center items-center text-center w-[137px] py-[10px] mt-8 sm:mt-16 text-primary bg-transparent font-sans text-base leading-[18px] font-semibold rounded border-2 border-primary capitalize hover:text-white hover:bg-primary transition-all ease-in-out duration-500">
                        Next Step
                        <span class="inline-block pl-1 icon">
                            <svg width="21" height="21" class="fill-primary group-hover:fill-secondary"
                                viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.0128 3.76384L16.0132 3.76381L16.0118 3.75366C15.9604 3.37524 15.6363 3.08364 15.2438 3.08364C14.8158 3.08364 14.4688 3.43062 14.4688 3.85864V17.6086H14.4685L14.4691 17.6186L14.4748 17.7035L14.4745 17.7035L14.4758 17.7137C14.5272 18.092 14.8513 18.3836 15.2438 18.3836C15.6718 18.3836 16.0188 18.0367 16.0188 17.6086V3.85864H16.0191L16.0185 3.84864L16.0128 3.76384ZM5.29701 3.24264L5.29728 3.24233L5.28837 3.23572C4.98486 3.01053 4.55438 3.0354 4.27914 3.31064C3.97649 3.61329 3.97649 4.104 4.27914 4.40665L10.6061 10.7336L4.27914 17.0607L4.27886 17.0604L4.27167 17.0687L4.21116 17.1388L4.21085 17.1385L4.20423 17.1474C3.97904 17.4509 4.00389 17.8814 4.27915 18.1566C4.58181 18.4593 5.07251 18.4593 5.37516 18.1566L12.2501 11.2816L12.2504 11.2819L12.2576 11.2736L12.3181 11.2035L12.3184 11.2038L12.325 11.1949C12.5503 10.8914 12.5254 10.4609 12.2501 10.1857C12.2501 10.1857 12.2501 10.1856 12.2501 10.1856L5.37516 3.31064L5.37544 3.31035L5.36711 3.30316L5.29701 3.24264Z"
                                    stroke="#231F20" stroke-width="0.3" />
                            </svg>
                        </span>
                    </button>
                </div>
        </div>
    </div>
    <!-- OTP Section Ends -->
</div>
