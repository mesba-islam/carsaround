@extends('dashboard.user.layouts.dashboard_app')


@section('title')
    Dashboard | Cars Around
@endsection


@section('content')

            <!-- Dashboard Details -->
            <div class="w-5/6 px-10 ml-auto border-l dashboard__details">
                <!-- Dashboard Title -->
                <h2 class="dashboard__title pt-[122px] pb-10 font-roboto font-medium text-2xl text-primary">
                    Dashboard
                </h2>
                <!-- Dashboard Card -->
                <div class="dashboard__card">
                    <!-- Card Item -->
                    <div class="card__item grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-[54px]">
                        <!-- Card List -->
                        <a href="{{ route('order.buying') }}" class="card__list bg-[#F4F4F4] hover:bg-secondaryDark text-center w-full h-72 flex justify-center items-center group rounded-md px-3 transition-all ease-in-out duration-200">
                            <!-- Card List Inner -->
                            <div class="space-y-3 card__list-inner">
                                <!-- Inner Title -->
                                <h2 class="inner__title font-roboto font-semibold text-[20px] text-[#9CA1AC]">
                                    Vehicles Buying
                                </h2>
                                <!-- Inner Number -->
                                <p class="text-6xl font-normal inner__num font-roboto text-primary">
                                    02
                                </p>
                            </div>
                        </a>
                        <!-- Card List -->
                        <a href="{{ route('order.selling') }}" class="card__list bg-[#F4F4F4] hover:bg-secondaryDark text-center w-full h-72 flex justify-center items-center group rounded-md px-3 transition-all ease-in-out duration-200">
                            <!-- Card List Inner -->
                            <div class="space-y-3 card__list-inner">
                                <!-- Inner Title -->
                                <h2 class="inner__title font-roboto font-semibold text-[20px] text-[#9CA1AC]">
                                    Vehicles Selling
                                </h2>
                                <!-- Inner Number -->
                                <p class="text-6xl font-normal inner__num font-roboto text-primary">
                                    11
                                </p>
                            </div>
                        </a>
                        <!-- Card List -->
                        <a href="{{ route('order.archive') }}" class="card__list bg-[#F4F4F4] hover:bg-secondaryDark text-center w-full h-72 flex justify-center items-center group rounded-md px-3 transition-all ease-in-out duration-200">
                            <!-- Card List Inner -->
                            <div class="space-y-3 card__list-inner">
                                <!-- Inner Title -->
                                <h2 class="inner__title font-roboto font-semibold text-[20px] text-[#9CA1AC]">
                                    Vehicles Bought
                                </h2>
                                <!-- Inner Number -->
                                <p class="text-6xl font-normal inner__num font-roboto text-primary">
                                    20
                                </p>
                            </div>
                        </a>
                        <!-- Card List -->
                        <a href="{{ route('order.archive') }}" class="card__list bg-[#F4F4F4] hover:bg-secondaryDark text-center w-full h-72 flex justify-center items-center group rounded-md px-3 transition-all ease-in-out duration-200">
                            <!-- Card List Inner -->
                            <div class="space-y-3 card__list-inner">
                                <!-- Inner Title -->
                                <h2 class="inner__title font-roboto font-semibold text-[20px] text-[#9CA1AC]">
                                    Vehicles Sold
                                </h2>
                                <!-- Inner Number -->
                                <p class="text-6xl font-normal inner__num font-roboto text-primary">
                                    35
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


@endsection
