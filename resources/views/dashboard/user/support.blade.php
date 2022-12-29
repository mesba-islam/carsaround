

@extends('dashboard.user.layouts.dashboard_app')


@section('title')
    Notifications | Cars Around
@endsection


@section('content')


            <!-- Dashboard Details -->
            <div class="dashboard__details px-5 md:px-10 w-5/6 ml-auto border-l">
                <!-- Breadcrumb section -->
                <div class="breadcrumb pt-[30px]">
                    <!-- Breadcrumb Item -->
                    <nav class="breadcrumb__item flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 md:space-x-2">
                            <!-- Breadcrumb List -->
                            <li class="breadcrumb__list inline-flex items-center">
                                <a href="orders-buying-dashboard.html"
                                    class="inline-flex items-center text-base font-roboto font-normal text-primary opacity-50">
                                    <span class="home__icon">
                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.5"
                                                d="M27.4194 13.9677L15.4856 2.0401L14.6857 1.24019C14.5034 1.05913 14.257 0.95752 14.0001 0.95752C13.7432 0.95752 13.4967 1.05913 13.3144 1.24019L0.580756 13.9677C0.394001 14.1537 0.246405 14.3753 0.146681 14.6193C0.0469573 14.8633 -0.00287419 15.1248 0.000128015 15.3884C0.0124818 16.4755 0.917397 17.3433 2.00453 17.3433H3.31712V27.4024H24.683V17.3433H26.0234C26.5515 17.3433 27.0487 17.1364 27.4224 16.7627C27.6065 16.5793 27.7522 16.3612 27.8514 16.121C27.9505 15.8809 28.001 15.6235 28 15.3637C28 14.8386 27.7931 14.3414 27.4194 13.9677ZM15.7296 25.1787H12.2705V18.8783H15.7296V25.1787ZM22.4593 15.1197V25.1787H17.7062V18.1371C17.7062 17.4545 17.1534 16.9017 16.4708 16.9017H11.5293C10.8468 16.9017 10.2939 17.4545 10.2939 18.1371V25.1787H5.5408V15.1197H2.57589L14.0031 3.70168L14.7166 4.41511L25.4273 15.1197H22.4593Z"
                                                fill="#242634" />
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            <!-- Breadcrumb List -->
                            <li class="breadcrumb__list" aria-current="page">
                                <div class="flex items-center">
                                    <span class="array__icon mr-2">
                                        <svg width="10" height="20" viewBox="0 0 10 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.5"
                                                d="M0.225303 1.12093C0.498401 0.846208 0.925745 0.82124 1.22688 1.04601L1.31316 1.12093L9.77468 9.63288C10.0478 9.90753 10.0726 10.3375 9.84914 10.6404L9.77468 10.7272L1.31316 19.2391C1.01276 19.5413 0.525703 19.5413 0.225303 19.2391C-0.0477947 18.9644 -0.0726151 18.5345 0.150821 18.2316L0.225303 18.1448L8.14288 10.18L0.225303 2.21526C-0.0750973 1.91308 -0.0750973 1.42312 0.225303 1.12093Z"
                                                fill="#242634" />
                                        </svg>
                                    </span>
                                    <span class="font-roboto font-medium text-lg text-primary opacity-50">
                                        Contact Support
                                    </span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
                <!-- Dashboard Data Table -->
                <div class="dashboard__data-table pt-16">
                    <!-- Contact-content Section Starts -->
                    <div class="contact-content pb-16">
                        {{-- <div class="lg:container mx-auto px-5 md:px-8 lg:px-15"> --}}
                            <!-- Contact Heading -->
                            <div class="contact__heading text-blue">
                                <h2 class="heading__title font-sans text-lg font-semibold">
                                    Are you buying or selling?
                                </h2>
                            </div>
                            <!-- Contact Card -->
                            <div class="contact__card pt-4">
                                <ul class="grid grid-cols-1 sm:grid-cols-2 space-y-6 sm:space-y-0 sm:gap-10 md:gap-8">
                                    <li class="relative">
                                        <input class="sr-only peer" type="radio" name="selling" id="buyer">
                                        <!-- Buying Section -->
                                        <label
                                            class="text-center font-roboto font-semibold text-primary capitalize text-lg p-5 peer-hover:bg-primary peer-hover:text-secondary peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full inline-block rounded-md peer-checked:text-secondary"
                                            for="buyer">Buying</label>
                                    </li>
                                    <li class="relative flex md:justify-end">
                                        <input class="sr-only peer" type="radio" name="selling" id="seller">
                                        <!-- Selling Section -->
                                        <label
                                            class="text-center font-roboto font-semibold text-primary capitalize text-lg p-5 peer-hover:bg-primary peer-hover:text-secondary peer-checked:bg-primary border-[1px] border-primary cursor-pointer  w-full inline-block rounded-md peer-checked:text-secondary"
                                            for="seller">Selling</label>
                                    </li>
                                </ul>
                            </div>
                        {{-- </div> --}}
                    </div>
                    <!-- Services Section Ends -->



                    <!-- Form Section Starts -->
                    <div class="form">
                        {{-- <div class="lg:container mx-auto px-5 md:px-8 lg:px-15"> --}}

                                <ul class="grid grid-cols-1 sm:grid-cols-2 space-y-6 sm:space-y-0 sm:gap-10 md:gap-8">
                                    <li class="relative">
                                        <label for="main-concern"class="font-roboto text-sm text-primary">
                                            Main Concern*
                                        </label>
                                        <input class="pl-6 w-full h-16 bg-card p-2 font-roboto text-sm leading-6 focus:outline-none focus:bg-white border-2 border-transparent focus:border-card rounded"
                                            type="text" name="Name" id="main-concern"
                                            placeholder="Summarize your concern within a few words..." required>
                                    </li>
                                    <li class="relative">
                                        <label for="trade-key"class="font-roboto text-sm text-primary">
                                            Select The Trade Key
                                        </label>
                                        <select name="" id="trade-key" class="pl-6 w-full h-16 bg-[#F0EEE6] p-2 font-roboto text-sm leading-6 focus:outline-none focus:bg-white border-2 border-transparent focus:border-card rounded">
                                            <option value="default">(none)</option>
                                            <option value="b3228938291">b3228938291</option>
                                            <option value="b3228938291">b3228938291</option>
                                            <option value="b3228938291">b3228938291</option>
                                            <option value="b3228938291">b3228938291</option>
                                            <option value="b3228938291">b3228938291</option>
                                        </select>
                                    </li>
                                </ul>
                                <div class="message-support pt-6">
                                    <label for="message"class="font-roboto text-sm leading-6  text-primary">
                                        Message*
                                    </label>
                                    <div class="bg-[#F0EEE6] w-fu border-b-2 border-white flex rounded-t">
                                        <ul
                                            class="flex justify-center items-center gap-3 sm:gap-5 px-4 sm:px-8 py-4 sm:py-6 m-0 border-r-2 border-white">
                                            <!-- Bold Icon -->
                                            <li class="bold-icon">
                                                <button>
                                                    <svg class="xs:w-4 xs:h-4" width="18" height="22"
                                                        viewBox="0 0 18 22" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.8"
                                                            d="M10.2278 22.0006C14.919 22.0006 17.8282 19.5822 17.8282 15.72C17.8282 12.8144 15.6363 10.6408 12.6513 10.4116V10.2892C13.7945 10.1174 14.8384 9.54309 15.5949 8.67006C16.3514 7.79703 16.7705 6.68272 16.7768 5.52818C16.7768 2.16873 14.1884 0.0551758 10.0629 0.0551758H0.5V22.0006H10.2278ZM5.09991 3.47691H8.87785C11.023 3.47691 12.2571 4.4803 12.2571 6.24456C12.2571 8.10005 10.8559 9.1813 8.40338 9.1813H5.09991V3.47469V3.47691ZM5.09991 18.5788V12.207H8.95359C11.6645 12.207 13.1414 13.3016 13.1414 15.3551C13.1414 17.4531 11.7091 18.5788 9.06051 18.5788H5.09768H5.09991Z"
                                                            fill="#242634" />
                                                    </svg>
                                                </button>
                                            </li>
                                            <!-- Italic Icon -->
                                            <li class="italic-icon">
                                                <button>
                                                    <svg class="xs:w-4 xs:h-4" width="19" height="20"
                                                        viewBox="0 0 19 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.8"
                                                            d="M18.1563 3.84701V0.138428H5.77904V3.84701H9.32884L5.79389 16.2089H0.828125V19.9175H13.2054V16.2089H9.6556L13.1905 3.84701H18.1563Z"
                                                            fill="#242634" />
                                                    </svg>
                                                </button>
                                            </li>
                                            <!-- Underline Icon -->
                                            <li class="underline-icon">
                                                <button>
                                                    <svg class="xs:w-5 xs:h-4" width="23" height="26"
                                                        viewBox="0 0 23 26" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.8"
                                                            d="M0.15625 22.6134H22.5501V25.8085H0.15625V22.6134ZM1.75581 0.247314V9.83277C1.75581 15.1191 6.06022 19.4182 11.3532 19.4182C16.6461 19.4182 20.9505 15.1191 20.9505 9.83277V0.247314H17.7514V9.83277C17.7514 13.357 14.8818 16.2231 11.3532 16.2231C7.82453 16.2231 4.95493 13.357 4.95493 9.83277V0.247314H1.75581Z"
                                                            fill="#242634" />
                                                    </svg>
                                                </button>
                                            </li>
                                        </ul>
                                        <ul
                                            class="flex justify-center items-center gap-3 sm:gap-5 px-4 sm:px-8 py-4 sm:py-6 m-0 border-r-2 border-white">
                                            <!-- Ordered list of item Icon -->
                                            <li class="ordered-list-icon">
                                                <button>
                                                    <svg class="xs:w-5 xs:h-4" width="28" height="30"
                                                        viewBox="0 0 28 30" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.38283 1.24468C5.38262 0.989105 5.29469 0.741327 5.13371 0.542659C4.97273 0.343991 4.74843 0.206438 4.49821 0.152936C4.24799 0.0994328 3.98696 0.133213 3.75866 0.248644C3.53035 0.364075 3.34856 0.554181 3.2436 0.787266L3.24061 0.791736C3.10782 1.05869 2.95576 1.31564 2.78561 1.56055C2.46189 2.0269 2.00391 2.54838 1.43405 2.90448C1.30524 2.98012 1.1929 3.08077 1.10368 3.20048C1.01445 3.32019 0.950131 3.45654 0.914523 3.60148C0.878915 3.74642 0.872736 3.89701 0.896352 4.04438C0.919967 4.19174 0.972898 4.33289 1.05202 4.45949C1.13114 4.58609 1.23486 4.69557 1.35704 4.78149C1.47922 4.8674 1.61739 4.928 1.7634 4.95971C1.90942 4.99142 2.06031 4.9936 2.20718 4.96612C2.35405 4.93864 2.49392 4.88205 2.61853 4.7997C2.80501 4.68348 2.98104 4.55981 3.14514 4.43019V7.94945C3.14514 8.24582 3.26302 8.53005 3.47284 8.73961C3.68267 8.94918 3.96725 9.06691 4.26399 9.06691C4.56072 9.06691 4.84531 8.94918 5.05513 8.73961C5.26496 8.53005 5.38283 8.24582 5.38283 7.94945V1.24468ZM25.5221 23.9664H12.8418L12.6673 23.9768C12.2897 24.0217 11.9435 24.2088 11.6995 24.5C11.4555 24.7913 11.332 25.1646 11.3542 25.5437C11.3765 25.9228 11.5429 26.2791 11.8194 26.5398C12.0959 26.8005 12.4616 26.9459 12.8418 26.9463H25.5221L25.6952 26.9359C26.0726 26.891 26.4187 26.704 26.6627 26.4129C26.9067 26.1219 27.0303 25.7488 27.0083 25.3698C26.9862 24.9908 26.8201 24.6345 26.5439 24.3737C26.2677 24.1129 25.9022 23.9672 25.5221 23.9664ZM25.5221 14.2817H12.8418L12.6673 14.2922C12.2897 14.337 11.9435 14.5242 11.6995 14.8154C11.4555 15.1066 11.332 15.4799 11.3542 15.859C11.3765 16.2381 11.5429 16.5944 11.8194 16.8551C12.0959 17.1158 12.4616 17.2612 12.8418 17.2616H25.5221L25.6952 17.2512C26.0726 17.2064 26.4187 17.0193 26.6627 16.7283C26.9067 16.4372 27.0303 16.0641 27.0083 15.6851C26.9862 15.3061 26.8201 14.9498 26.5439 14.689C26.2677 14.4282 25.9022 14.2825 25.5221 14.2817ZM25.5221 4.59706H12.8418L12.6673 4.60749C12.2897 4.65235 11.9435 4.8395 11.6995 5.13071C11.4555 5.42193 11.332 5.79523 11.3542 6.17433C11.3765 6.55344 11.5429 6.90974 11.8194 7.17043C12.0959 7.43113 12.4616 7.57654 12.8418 7.57696H25.5221L25.6952 7.56653C26.0726 7.5217 26.4187 7.33466 26.6627 7.0436C26.9067 6.75254 27.0303 6.37943 27.0083 6.00043C26.9862 5.62144 26.8201 5.26517 26.5439 5.00435C26.2677 4.74354 25.9022 4.59786 25.5221 4.59706ZM4.11481 12.8216C3.66727 12.7426 3.10635 12.9199 2.81694 13.209C2.60485 13.4064 2.32432 13.5138 2.03446 13.5087C1.7446 13.5036 1.46805 13.3863 1.26305 13.1816C1.05806 12.9768 0.940639 12.7006 0.935524 12.4111C0.93041 12.1216 1.038 11.8415 1.23564 11.6296C2.06508 10.8012 3.36891 10.4198 4.50566 10.6209C5.0979 10.7252 5.70656 10.9994 6.16901 11.5223C6.64042 12.0557 6.87463 12.7516 6.87463 13.5368C6.87463 14.4605 6.47036 15.1459 5.9706 15.6525C5.55588 16.0741 5.03077 16.4138 4.61903 16.6791L4.49969 16.755C4.25218 16.9118 4.0127 17.0809 3.78214 17.2616H5.75578C6.05252 17.2616 6.3371 17.3794 6.54693 17.5889C6.75675 17.7985 6.87463 18.0827 6.87463 18.3791C6.87463 18.6755 6.75675 18.9597 6.54693 19.1692C6.3371 19.3788 6.05252 19.4965 5.75578 19.4965H2.02629C1.72955 19.4965 1.44497 19.3788 1.23514 19.1692C1.02532 18.9597 0.907441 18.6755 0.907441 18.3791C0.907441 16.4228 2.37537 15.4692 3.25702 14.8971L3.34653 14.8375C3.82092 14.532 4.14166 14.3234 4.37587 14.0865C4.57577 13.8839 4.63694 13.7319 4.63694 13.5368C4.63694 13.2045 4.54594 13.063 4.49074 13.0004C4.38989 12.9 4.25783 12.837 4.1163 12.8216H4.11481ZM0.862687 28.8534C0.862687 28.8534 1.00142 28.9786 0.868654 28.8609L0.877605 28.8683L0.896999 28.8877C0.967187 28.9549 1.04196 29.0171 1.12077 29.0739C1.26249 29.1797 1.45941 29.3093 1.71301 29.436C2.22172 29.6893 2.9512 29.9277 3.89104 29.9277C4.84579 29.9277 5.67523 29.6565 6.27941 29.1231C6.88806 28.5867 7.1894 27.8447 7.16703 27.0968C7.14846 26.4941 6.92423 25.9158 6.53152 25.4578C6.91789 25.0019 7.14614 24.4357 7.16703 23.8159C7.1789 23.4335 7.10541 23.0533 6.95188 22.7028C6.79836 22.3523 6.56864 22.0404 6.27941 21.7896C5.67523 21.2577 4.84579 20.9865 3.89104 20.9865C2.9512 20.9865 2.22172 21.2219 1.71301 21.4782C1.44069 21.6136 1.18532 21.7806 0.952195 21.9758C0.933512 21.9919 0.915111 22.0083 0.896999 22.025L0.877605 22.0444L0.868654 22.0518L0.865671 22.0563H0.862687L0.861196 22.0593C0.660534 22.2687 0.549233 22.5479 0.550798 22.8378C0.552362 23.1277 0.666668 23.4056 0.86958 23.6129C1.07249 23.8202 1.34812 23.9407 1.63827 23.9488C1.92842 23.9569 2.21038 23.8521 2.4246 23.6565C2.5136 23.5867 2.60958 23.5263 2.71102 23.4762C2.94822 23.357 3.33758 23.2229 3.88955 23.2229C4.42659 23.2229 4.68915 23.3704 4.79656 23.4658C4.83869 23.4988 4.8725 23.5411 4.8953 23.5895C4.91809 23.6379 4.92924 23.6909 4.92784 23.7444C4.92261 23.8111 4.9036 23.8759 4.87202 23.9349C4.84044 23.9939 4.79697 24.0457 4.74435 24.0871C4.61158 24.2033 4.352 24.3404 3.88955 24.3404C3.59281 24.3404 3.30822 24.4581 3.0984 24.6677C2.88858 24.8772 2.7707 25.1615 2.7707 25.4578C2.7707 25.7542 2.88858 26.0384 3.0984 26.248C3.30822 26.4576 3.59281 26.5753 3.88955 26.5753C4.352 26.5753 4.61158 26.7094 4.74435 26.8241C4.8801 26.9433 4.92485 27.0714 4.92784 27.1683C4.92924 27.222 4.9181 27.2752 4.89531 27.3238C4.87253 27.3724 4.83872 27.4151 4.79656 27.4484C4.68915 27.5423 4.42808 27.6913 3.88955 27.6913C3.4823 27.6998 3.0787 27.6131 2.71102 27.438C2.60952 27.3874 2.51353 27.3265 2.4246 27.2562C2.21038 27.0606 1.92842 26.9558 1.63827 26.9639C1.34812 26.972 1.07249 27.0924 0.86958 27.2997C0.666668 27.507 0.552362 27.785 0.550798 28.0749C0.549233 28.3648 0.660534 28.6439 0.861196 28.8534H0.862687ZM0.865671 22.0563H0.862687C0.87313 22.0488 1.16105 21.8089 0.862687 22.0563H0.865671Z"
                                                            fill="#242634" />
                                                    </svg>
                                                </button>
                                            </li>
                                            <!-- Unordered list of item Icon -->
                                            <li class="unordered-list-icon">
                                                <button>
                                                    <svg class="xs:w-5 xs:h-4" width="27" height="28"
                                                        viewBox="0 0 27 28" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M10.3017 2.28251H25.0017C25.3916 2.28251 25.7655 2.43719 26.0412 2.71253C26.3168 2.98786 26.4717 3.3613 26.4717 3.75069C26.4717 4.14007 26.3168 4.51351 26.0412 4.78884C25.7655 5.06418 25.3916 5.21886 25.0017 5.21886H10.3017C9.91185 5.21886 9.53795 5.06418 9.26227 4.78884C8.98659 4.51351 8.83172 4.14007 8.83172 3.75069C8.83172 3.3613 8.98659 2.98786 9.26227 2.71253C9.53795 2.43719 9.91185 2.28251 10.3017 2.28251ZM10.3017 12.5598H25.0017C25.3916 12.5598 25.7655 12.7144 26.0412 12.9898C26.3168 13.2651 26.4717 13.6385 26.4717 14.0279C26.4717 14.4173 26.3168 14.7907 26.0412 15.0661C25.7655 15.3414 25.3916 15.4961 25.0017 15.4961H10.3017C9.91185 15.4961 9.53795 15.3414 9.26227 15.0661C8.98659 14.7907 8.83172 14.4173 8.83172 14.0279C8.83172 13.6385 8.98659 13.2651 9.26227 12.9898C9.53795 12.7144 9.91185 12.5598 10.3017 12.5598ZM10.3017 22.837H25.0017C25.3916 22.837 25.7655 22.9917 26.0412 23.267C26.3168 23.5423 26.4717 23.9158 26.4717 24.3052C26.4717 24.6946 26.3168 25.068 26.0412 25.3433C25.7655 25.6187 25.3916 25.7733 25.0017 25.7733H10.3017C9.91185 25.7733 9.53795 25.6187 9.26227 25.3433C8.98659 25.068 8.83172 24.6946 8.83172 24.3052C8.83172 23.9158 8.98659 23.5423 9.26227 23.267C9.53795 22.9917 9.91185 22.837 10.3017 22.837ZM2.95172 6.68704C2.17198 6.68704 1.42418 6.37768 0.872825 5.827C0.321468 5.27633 0.0117188 4.52946 0.0117188 3.75069C0.0117188 2.97192 0.321468 2.22504 0.872825 1.67437C1.42418 1.1237 2.17198 0.814331 2.95172 0.814331C3.73146 0.814331 4.47926 1.1237 5.03061 1.67437C5.58197 2.22504 5.89172 2.97192 5.89172 3.75069C5.89172 4.52946 5.58197 5.27633 5.03061 5.827C4.47926 6.37768 3.73146 6.68704 2.95172 6.68704ZM2.95172 16.9643C2.17198 16.9643 1.42418 16.6549 0.872825 16.1042C0.321468 15.5536 0.0117188 14.8067 0.0117188 14.0279C0.0117188 13.2492 0.321468 12.5023 0.872825 11.9516C1.42418 11.4009 2.17198 11.0916 2.95172 11.0916C3.73146 11.0916 4.47926 11.4009 5.03061 11.9516C5.58197 12.5023 5.89172 13.2492 5.89172 14.0279C5.89172 14.8067 5.58197 15.5536 5.03061 16.1042C4.47926 16.6549 3.73146 16.9643 2.95172 16.9643ZM2.95172 27.2415C2.17198 27.2415 1.42418 26.9322 0.872825 26.3815C0.321468 25.8308 0.0117188 25.0839 0.0117188 24.3052C0.0117188 23.5264 0.321468 22.7795 0.872825 22.2289C1.42418 21.6782 2.17198 21.3688 2.95172 21.3688C3.73146 21.3688 4.47926 21.6782 5.03061 22.2289C5.58197 22.7795 5.89172 23.5264 5.89172 24.3052C5.89172 25.0839 5.58197 25.8308 5.03061 26.3815C4.47926 26.9322 3.73146 27.2415 2.95172 27.2415Z"
                                                            fill="#242634" />
                                                    </svg>
                                                </button>
                                            </li>
                                        </ul>
                                        <ul
                                            class="flex justify-center items-center gap-3 sm:gap-5 px-4 sm:px-8 py-4 sm:py-6 m-0 border-r-2 border-white">
                                            <!-- Link Icon -->
                                            <li class="link-icon">
                                                <button>
                                                    <svg class="xs:w-5 xs:h-4" width="44" height="22"
                                                        viewBox="0 0 44 22" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20.059 4.50727H11.3539C9.6224 4.50727 7.96178 5.19427 6.7374 6.41713C5.51302 7.63999 4.82517 9.29855 4.82517 11.0279C4.82517 12.7573 5.51302 14.4159 6.7374 15.6387C7.96178 16.8616 9.6224 17.5486 11.3539 17.5486H20.059V21.8957H11.3539C8.46804 21.8957 5.70034 20.7507 3.65971 18.7126C1.61907 16.6745 0.472656 13.9103 0.472656 11.0279C0.472656 8.14562 1.61907 5.38136 3.65971 3.34326C5.70034 1.30515 8.46804 0.160156 11.3539 0.160156H20.059V4.50727ZM24.4115 17.5486H33.1165C34.848 17.5486 36.5086 16.8616 37.733 15.6387C38.9574 14.4159 39.6452 12.7573 39.6452 11.0279C39.6452 9.29855 38.9574 7.63999 37.733 6.41713C36.5086 5.19427 34.848 4.50727 33.1165 4.50727H24.4115V0.160156H33.1165C36.0024 0.160156 38.7701 1.30515 40.8107 3.34326C42.8513 5.38136 43.9978 8.14562 43.9978 11.0279C43.9978 13.9103 42.8513 16.6745 40.8107 18.7126C38.7701 20.7507 36.0024 21.8957 33.1165 21.8957H24.4115V17.5486ZM15.7064 8.85438H28.764C29.3412 8.85438 29.8947 9.08338 30.3028 9.491C30.7109 9.89862 30.9402 10.4515 30.9402 11.0279C30.9402 11.6044 30.7109 12.1573 30.3028 12.5649C29.8947 12.9725 29.3412 13.2015 28.764 13.2015H15.7064C15.1293 13.2015 14.5757 12.9725 14.1676 12.5649C13.7595 12.1573 13.5302 11.6044 13.5302 11.0279C13.5302 10.4515 13.7595 9.89862 14.1676 9.491C14.5757 9.08338 15.1293 8.85438 15.7064 8.85438Z"
                                                            fill="#242634" />
                                                    </svg>
                                                </button>
                                            </li>
                                            <!-- Image Icon -->
                                            <li class="image-icon">
                                                <button>
                                                    <svg class="xs:w-5 xs:h-4" width="35" height="32"
                                                        viewBox="0 0 35 32" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M4.33138 3.82805H25.9981V15.028H29.3314V3.82805C29.3314 2.06325 27.8364 0.628052 25.9981 0.628052H4.33138C2.49305 0.628052 0.998047 2.06325 0.998047 3.82805V23.028C0.998047 24.7928 2.49305 26.228 4.33138 26.228H17.6647V23.028H4.33138V3.82805Z"
                                                            fill="#242634" />
                                                        <path
                                                            d="M10.998 13.428L5.99805 19.828H24.3314L17.6647 10.228L12.6647 16.628L10.998 13.428Z"
                                                            fill="#242634" />
                                                        <path
                                                            d="M29.3314 18.228H25.998V23.028H20.998V26.228H25.998V31.028H29.3314V26.228H34.3314V23.028H29.3314V18.228Z"
                                                            fill="#242634" />
                                                    </svg>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <textarea name="text" id="mess" cols="" rows="" placeholder="Please type your message here" class="pl-6 w-full h-[300px] md:h-[400px] bg-card p-2 font-roboto text-sm leading-6 focus:outline-none focus:bg-white border-2 border-transparent focus:border-card rounded-b resize-none"></textarea>
                                </div>
                                <!-- Contact Button -->
                                <div class="contact__button text-center p-16">
                                    <button
                                        class="inline-block w-40 text-center  card__btn text-primary bg-transparent font-sans text-base leading-sm font-semibold py-[14px] rounded border-2 border-primary hover:bg-primary hover:text-white transition ease-in-out duration-500 uppercase">
                                        Submit
                                    </button>
                                </div>
                        {{-- </div> --}}
                    </div>
                    <!-- Form Section Ends -->

                        <!-- Contact Card Section Starts -->
    <div class="contact__card md:pb-32">
        {{-- <div class="lg:container mx-auto lg:max-w-screen-lg px-5 md:px-8 lg:px-15"> --}}
            <!-- Card Item -->
            <div class="flex flex-wrap justify-between items-center gap-y-5 md:gap-y-0">
                <a href="mailto:ratib@carsaround.com.au" class="group w-full sm:w-[48%] md:w-[30%] py-10 bg-card hover:bg-secondaryDark text-center rounded-md transition-all ease-in-out duration-300">
                    <div class="flex justify-center items-center w-full ">
                        <div class="list-icon inline-flex justify-center border-2 w-24 h-24 rounded-full items-center mb-5 border-secondaryDark group-hover:border-primary">
                            <div class="list-icon--inner flex justify-center items-center bg-transparent group-hover:bg-primary w-20 h-20 rounded-full">
                                <svg width="52" height="41" class="fill-secondaryDark group-hover:fill-white"
                                    viewBox="0 0 52 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M33.7267 25.0951L44.3419 35.725H7.49977L17.7817 25.0905L18.06 24.8027L17.7719 24.5247L15.5219 22.3528L15.2343 22.0752L14.9565 22.3626L4.36289 33.3231V8.21239L23.1026 26.8617L23.1028 26.8618C23.7632 27.5183 24.6566 27.8869 25.5879 27.8869C26.5191 27.8869 27.4126 27.5183 28.073 26.8618L28.0731 26.8617L47.3129 7.72756V33.1437L36.4957 22.3265L36.2129 22.0437L35.93 22.3265L33.7269 24.5297L33.4443 24.8123L33.7267 25.0951ZM47.7129 1.35H3.96289C3.028 1.35 2.1314 1.72138 1.47034 2.38245C0.809273 3.04351 0.437891 3.94011 0.437891 4.875V36.125C0.437891 37.0599 0.809273 37.9565 1.47034 38.6175C2.1314 39.2786 3.028 39.65 3.96289 39.65H47.7129C48.6478 39.65 49.5444 39.2786 50.2054 38.6175C50.8665 37.9565 51.2379 37.0599 51.2379 36.125V4.875C51.2379 3.94011 50.8665 3.04351 50.2054 2.38245C49.5444 1.72138 48.6478 1.35 47.7129 1.35ZM25.588 23.7952L6.97874 5.275H44.2121L25.588 23.7952Z"
                                        stroke="white" stroke-width="0.8" />
                                </svg>

                            </div>
                        </div>
                    </div>
                    <p class="block font-roboto text-xl px-4 font-normal text-blue group-hover:font-medium tracking-[0.25px] break-all">ratib@carsaround.com.au</p>
                </a>
                <a href="tel:1800 010 001" class="group w-full sm:w-[48%] md:w-[30%] py-10 bg-card hover:bg-secondaryDark text-center rounded-md transition-all ease-in-out duration-300">
                    <div class="flex justify-center items-center w-full ">
                        <div class="list-icon inline-flex justify-center border-2 w-24 h-24 rounded-full items-center mb-5 border-secondaryDark group-hover:border-primary">
                            <div class="list-icon--inner flex justify-center items-center bg-transparent group-hover:bg-primary w-20 h-20 rounded-full">
                                <svg width="51" height="50" viewBox="0 0 51 50" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M37.2591 49.9999C37.923 50.0037 38.581 49.8753 39.1948 49.6221C39.8085 49.3689 40.3657 48.9959 40.8337 48.5251L47.608 41.7508C48.0736 41.2824 48.3349 40.6489 48.3349 39.9885C48.3349 39.3281 48.0736 38.6945 47.608 38.2262L37.6091 28.2272C37.1407 27.7617 36.5071 27.5003 35.8467 27.5003C35.1864 27.5003 34.5528 27.7617 34.0844 28.2272L30.0849 32.2018C27.3158 31.4635 24.7512 30.1043 22.5857 28.2272C20.7137 26.0582 19.3551 23.4949 18.6111 20.728L22.5857 16.7285C23.0512 16.2601 23.3126 15.6265 23.3126 14.9661C23.3126 14.3058 23.0512 13.6722 22.5857 13.2038L12.5867 3.2049C12.1184 2.73932 11.4848 2.47799 10.8244 2.47799C10.164 2.47799 9.53045 2.73932 9.0621 3.2049L2.31282 10.0042C1.84195 10.4722 1.46902 11.0294 1.2158 11.6431C0.96258 12.2569 0.834139 12.9149 0.837974 13.5788C1.06476 23.1835 4.90273 32.35 11.5868 39.2511C18.4879 45.9352 27.6544 49.7731 37.2591 49.9999V49.9999ZM10.8369 8.52933L17.3112 15.0036L14.0866 18.2283C13.7811 18.5144 13.5524 18.8726 13.4214 19.27C13.2904 19.6675 13.2612 20.0914 13.3366 20.5031C14.271 24.6785 16.2491 28.5488 19.086 31.7519C22.2866 34.5924 26.1579 36.5711 30.3348 37.5012C30.7402 37.586 31.1603 37.5687 31.5574 37.4509C31.9545 37.3331 32.316 37.1185 32.6096 36.8263L35.8342 33.5267L42.3086 40.001L37.3091 45.0004C29.0193 44.787 21.1096 41.4786 15.1365 35.7264C9.36935 29.7508 6.05144 21.8307 5.83744 13.5288L10.8369 8.52933ZM45.8332 22.5028H50.8327C50.8975 19.5307 50.3598 16.5761 49.2522 13.8173C48.1445 11.0584 46.4898 8.55244 44.3876 6.45029C42.2854 4.34814 39.7794 2.69336 37.0206 1.5857C34.2618 0.478036 31.3072 -0.0595853 28.335 0.00523602V5.0047C30.6546 4.92447 32.9658 5.3222 35.1251 6.17316C37.2843 7.02413 39.2455 8.31015 40.8866 9.95128C42.5277 11.5924 43.8138 13.5536 44.6647 15.7128C45.5157 17.8721 45.9134 20.1833 45.8332 22.5028Z"
                                        fill="#D6D3C7" />
                                </svg>

                            </div>
                        </div>
                    </div>
                    <p class="block font-roboto text-xl px-4 font-normal text-blue group-hover:font-medium tracking-[0.25px] break-all">1800 010 001</p>
                </a>
                <a href="https://www.google.com/maps/place/carsaround/@-37.8142431,144.9380891,17z/data=!3m2!4b1!5s0x6b27c1ba28273d99:0x37944fe5e25a0576!4m5!3m4!1s0x6ad65d5290ba4e99:0xf3f3affa04883870!8m2!3d-37.8142474!4d144.9402778?coh=164777&entry=tt&shorturl=1" target="_blank" class="group w-full sm:w-[48%] md:w-[30%] py-10 bg-card hover:bg-secondaryDark text-center rounded-md transition-all ease-in-out duration-300">
                    <div class="flex justify-center items-center w-full ">
                        <div class="list-icon inline-flex justify-center border-2 w-24 h-24 rounded-full items-center mb-5 border-secondaryDark group-hover:border-primary">
                            <div class="list-icon--inner flex justify-center items-center bg-transparent group-hover:bg-primary w-20 h-20 rounded-full">
                                <svg width="56" height="68" viewBox="0 0 56 68" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M27.8379 37.125C33.0156 37.125 37.2129 32.9277 37.2129 27.75C37.2129 22.5723 33.0156 18.375 27.8379 18.375C22.6602 18.375 18.4629 22.5723 18.4629 27.75C18.4629 32.9277 22.6602 37.125 27.8379 37.125Z"
                                        stroke="#D6D3C7" stroke-width="5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M27.8379 2.75C21.2075 2.75 14.8486 5.38392 10.1602 10.0723C5.47181 14.7607 2.83789 21.1196 2.83789 27.75C2.83789 33.6625 4.09414 37.5312 7.52539 41.8125L27.8379 65.25L48.1504 41.8125C51.5816 37.5312 52.8379 33.6625 52.8379 27.75C52.8379 21.1196 50.204 14.7607 45.5156 10.0723C40.8272 5.38392 34.4683 2.75 27.8379 2.75Z"
                                        stroke="#D6D3C7" stroke-width="5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <p class="block font-roboto text-xl px-4 font-normal text-blue group-hover:font-medium tracking-[0.25px] break-words">1327/401 Docklands Drive, Docklands, Melbourne Victoria 3008</p>
                </a>
            </div>
        {{-- </div> --}}
    </div>
    <!-- Contact Card Section Ends -->
                </div>
            </div>

@endsection
