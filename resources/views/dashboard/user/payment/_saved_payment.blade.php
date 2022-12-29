

@extends('dashboard.user.layouts.dashboard_app')

@section('title')
    Payment | Cars Around
@endsection


@section('content')


            <!-- Dashboard Details -->
            <div class="dashboard__details px-10 w-5/6 ml-auto border-l">
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
                                        <svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.5" d="M0.225303 1.12093C0.498401 0.846208 0.925745 0.82124 1.22688 1.04601L1.31316 1.12093L9.77468 9.63288C10.0478 9.90753 10.0726 10.3375 9.84914 10.6404L9.77468 10.7272L1.31316 19.2391C1.01276 19.5413 0.525703 19.5413 0.225303 19.2391C-0.0477947 18.9644 -0.0726151 18.5345 0.150821 18.2316L0.225303 18.1448L8.14288 10.18L0.225303 2.21526C-0.0750973 1.91308 -0.0750973 1.42312 0.225303 1.12093Z" fill="#242634"/>
                                        </svg>
                                    </span>
                                    <span class="font-roboto font-medium text-lg text-primary opacity-50">
                                        Payment Method
                                    </span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
                <!-- Dashboard Title -->
                <h2 class="dashboard__title pt-16 pb-10 font-roboto font-medium text-2xl text-[#231F20]">
                    Payment Method
                </h2>
                <!-- Dashboard Card -->
                <div class="dashboard__card border rounded p-5">
                    <!-- Card Title -->
                    <h2 class="card__title font-roboto font-semibold text-base text-[#1D1D1F]">
                        Payment method
                    </h2>
                    <!-- Fild -->
                    <div class="flex justify-between pt-6">
                        <p class="font-roboto font-semibold text-sm text-[#9E9E9E]">
                            Saved method
                        </p>
                        <!-- Card Fild -->
                        <div class="card__fild">
                            <!-- Card Name -->
                            <p class="card__name font-roboto font-normal text-sm text-[#1D1D1F]">
                                Credit card
                            </p>
                            <!-- Card Number -->
                            <span class="card__num font-roboto font-normal text-sm text-[#1D1D1F]">
                                *** *** 4444
                            </span>
                        </div>
                        <div class="&nbsp"></div>
                        <!-- Card Update -->
                        <button onclick="window.location.href='{{ route('payment-update') }}'" class="card__update font-roboto font-medium text-base text-[#231F20] cursor-pointer">
                            Update
                        </button>
                    </div>
                </div>
            </div>

@endsection
