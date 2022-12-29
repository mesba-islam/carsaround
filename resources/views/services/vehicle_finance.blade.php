

@extends('layouts.front_app')

@section('title')
    Vehicle Finance | Cars Around
@endsection


@section('content')


    <!-- Banner Section Starts -->
    <div
        class="banner w-full h-[250px] md:h-[300px] lg:h-[400px] bg-car-finance-hero bg-cover bg-center bg-no-repeat flex bg-blend-multiply bg-[#231F20] bg-opacity-80">
        <div class="lg:container mx-auto lg:max-w-screen-2xl w-full px-5 md:px-8 lg:px-15 relative">
            <div class="banner__heading bottom-0 absolute pb-12">
                <!-- Hero Title -->
                <h2
                    class="heading__title text-white  font-semibold text-3xl md:text-5xl uppercase">
                    Vehicle Finance
                </h2>
            </div>
        </div>
    </div>
    <!-- Banner Section Ends -->

    <!-- Services-content Section Starts -->
    <div class="services-content py-16 md:pb-24">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
            <!-- Services Body -->
            <div class="services__body">
                <!-- Service Card 1 -->
                <div class="services__card grid grid-cols-1 md:grid-cols-2 md:gap-5 lg:gap-10 xl:gap-20">
                    <!-- Services Video -->
                    <div class="card__video order-2 md:order-1">
                        <!-- Card Video -->
                            <iframe class="block w-full h-auto  aspect-video rounded-sm pt-4"
                            src="https://www.youtube.com/embed/_bkX5VkZg8U" title="YouTube video player" frameborder="0"
                            allow="accelerometer; clipboard-write; encrypted-media; gyroscope;"></iframe>
                    </div>
                    <!-- Service Description -->
                    <div class="services__description order-1 md:order-2">
                        <!-- Card Title -->
                        <h2 class="card__title font-inter text-3xl font-extrabold text-primary">
                            <span class="text-secondaryDark">
                                Vehicle
                            </span>
                            Finance
                        </h2>
                        <!-- Card List -->
                        <ul
                            class="card__list font-inter text-base space-y-0 leading-10 text-primary opacity-70 py-5">
                            <li class="inline-flex items-start justify-start gap-x-2">
                                <img class="inline-block h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                                <span class="py-0 my-0 leading-6">Lorem ipsum dolor sit amet, consectetu</span>
                            </li>
                            <li class="inline-flex items-start justify-start gap-x-2">
                                <img class="inline-block h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                                <span class="py-0 my-0 leading-6">Lorem ipsum dolor sit amet, consectetu</span>
                            </li>
                            <li class="inline-flex items-start justify-start gap-x-2">
                                <img class="inline-block h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                                <span class="py-0 my-0 leading-6">Lorem ipsum dolor sit amet, consectetu</span>
                            </li>
                            <li class="inline-flex items-start justify-start gap-x-2">
                                <img class="inline-block h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                                <span class="py-0 my-0 leading-6">Lorem ipsum dolor sit amet, consectetu</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Card Description -->
                <div class="card__description pt-4">
                    <!-- Description Item -->
                    <h3 class="text-primary text-xl font-bold mt-4">What is vehicle finance?</h3>
                    <p class="description__item text-base text-primary leading-7 opacity-70 py-2">Vehicle finance in simple words refers to a contract offering you a multitude of options that include borrowing money to buy a brand new or a used car- or rent it for a specific period. The buyer has to pay an initial deposit and regular installments with the option of buying it outright. That being said, it is a great way to get behind the wheel without having to go through the hassle of dealing with a lot of cash in one go.
                    </p>
                    <h3 class="text-primary text-xl font-bold mt-4">Things to consider in vehicle finance</h3>
                    <ul class="ml-4 list-none text-base text-primary opacity-70 space-y-1 py-2">
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            The condition of the vehicle. It can be a brand new one or pre-used
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            A better credit score offers you better finance deals at lower interest rates
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            The type of vehicle financing will determine whether you will own the car from day one or have higher monthly repayments
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            You may consider the possibility of selling the car at the end of your deal
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            The finance plan you select may have some usage restrictions.
                        </li>
                    </ul>
                    <h3 class="text-primary text-xl font-bold mt-4">Why choose carsaround?</h3>
                    <p class="description__item text-base text-primary leading-7 opacity-70 py-2">Carsaround features an experienced team comprising skilled dealers adept at providing viable financial solutions for cars, bikes, boats, and caravans. Whether it’s for an individual or a small business owner, our expertise in channeling vehicle finance involving both conventional and alternative lenders will always serve the purpose.
                    </p>
                    <ul class="ml-4 list-none text-base text-primary opacity-70 space-y-1 py-2">
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            We are paperless and the entire process is completed online
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            100% online meaning no need to leave the comfort of your couch
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            You will be updated in real-time from the application to the settlement
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            Getting your quote with oxcel doesn't impact your credit score
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            We will match the suitable product from our wide range of panel
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            We work with number of lenders you can not apply directly, usually, you will get a better rate
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            We work for you & your interest, not. lenders and not owned by any lenders
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            Integrated facilities for a complete solution
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            24/7 support to help and guide you through the process
                        </li>
                    </ul>
                    <p class="description__item text-base text-primary leading-7 opacity-70 py-2">Money shouldn’t be an obstacle in your path to owning your desired vehicles. We are here to assist with a finance solution that’s most suitable for you, with special rates.
                    </p>

                </div>
                <!-- Card Button -->
                <div class="card__button text-center mt-10">
                    <p class="py-2 text-base text-primary text-opacity-70">Get started now to let us provide you with a suitable finance solution</p>
                    <a href="{{ route('trade.create') }}"
                    class="footer__cta--btn  w-40 text-center text-white bg-primary f text-base leading-[18px] font-semibold px-6 py-[14px] border-2 border-primary hover:bg-white hover:text-primary transition ease-in-out duration-500 rounded inline-block">
                    Get Started
                    </a>
                </div>

            </div>
            <!-- Services body -->
            <div class="services__body pt-24">
                <!-- Card Heading -->
                <h2 class="card__heading font-inter text-2xl font-semibold">
                    Other Services
                </h2>
                 <div class="services__card flex flex-wrap justify-between gap-y-5 mt-6">
                    <!-- Card Item 1 -->
                    <a href="{{ route('safe_settlement') }}" class=" flex-col flex w-full sm:w-[48%] lg:w-[32%] group hover:bg-primary rounded-md shadow-sm  transition-all ease-in-out duration-300">
                        <div class="p-6 ">
                            <!-- Card Image -->
                            <div class="card__img">
                                <img class="w-full min-h-[180px] md:min-h-[220px] rounded-sm object-cover object-center"
                                    src="{{ asset('/assets/img/services/1.png') }}" alt="Services Image">
                            </div>
                            <!-- Card Description -->
                            <div class="card__description flex flex-col">
                                <!-- Card Title -->
                                <h2
                                    class="card__title font-inter text-xl font-semibold capitalize text-primary pt-5  group-hover:text-secondary">

                                    Safe Settlement

                                </h2>
                                <!-- Card Description -->
                                <p
                                    class="card__description font-inter text-base text-primary group-hover:text-secondary py-2  flex-1">
                                    Buying or selling used vehicles involves considerable risks in transactions. We are here with our unique safe settlement service to sort out the problems and make the transactions smooth, safe, and secure
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('vehicle_finance') }}" class=" flex-col flex w-full sm:w-[48%] lg:w-[32%] group hover:bg-primary rounded-md shadow-sm  transition-all ease-in-out duration-300">
                        <div class="p-6 ">
                            <!-- Card Image -->
                            <div class="card__img">
                                <img class="w-full min-h-[180px] md:min-h-[220px] rounded-sm object-cover object-center"
                                    src="{{ asset('/assets/img/services/2.png') }}" alt="Services Image">
                            </div>
                            <!-- Card Description -->
                            <div class="card__description flex flex-col">
                                <!-- Card Title -->
                                <h2
                                    class="card__title font-inter text-xl font-semibold capitalize text-primary pt-5  group-hover:text-secondary">

                                    Pre-Purchase Inspection

                                </h2>
                                <!-- Card Description -->
                                <p
                                    class="card__description font-inter text-base text-primary group-hover:text-secondary py-2  flex-1">
                                    Purchasing a used vehicle is harder than buying a new one. By getting yourself a pre-purchase inspector, you will have a thorough report on where you are putting your money
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('vehicle_tranport') }}" class=" flex-col flex w-full sm:w-[48%] lg:w-[32%] group hover:bg-primary rounded-md shadow-sm  transition-all ease-in-out duration-300">
                        <div class="p-6 ">
                            <!-- Card Image -->
                            <div class="card__img">
                                <img class="w-full min-h-[180px] md:min-h-[220px] rounded-sm object-cover object-center"
                                    src="{{ asset('/assets/img/services/4.png') }}" alt="Services Image">
                            </div>
                            <!-- Card Description -->
                            <div class="card__description flex flex-col">
                                <!-- Card Title -->
                                <h2
                                    class="card__title font-inter text-xl font-semibold capitalize text-primary pt-5  group-hover:text-secondary">

                                    Vehicle Transport

                                </h2>
                                <!-- Card Description -->
                                <p
                                    class="card__description font-inter text-base text-primary group-hover:text-secondary py-2  flex-1">
                                    We understand the value of time and urgency. Receiving or delivering your vehicle can be time-consuming and a hassle for you. That is where vehicle transport comes in to make it easier for you
                                </p>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Services Section Ends -->



@endsection
