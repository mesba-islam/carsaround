

@extends('layouts.front_app')

@section('title')
    Vehicle Transport | Cars Around
@endsection


@section('content')


    <!-- Banner Section Starts -->
    <div
        class="banner w-full h-[250px] md:h-[300px] lg:h-[400px] bg-transporations-hero bg-cover bg-center bg-no-repeat flex bg-blend-multiply bg-[#231F20] bg-opacity-80">
        <div class="lg:container mx-auto lg:max-w-screen-2xl w-full px-5 md:px-8 lg:px-15 relative">
            <div class="banner__heading bottom-0 absolute pb-12">
                <!-- Hero Title -->
                <h2
                    class="heading__title text-white  font-semibold text-3xl md:text-5xl uppercase">
                    Vehicle Transport
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
                            Transport
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
                    <h3 class="text-primary text-xl font-bold mt-4">What is vehicle transport?</h3>
                    <p class="description__item text-base text-primary leading-7 opacity-70 py-2">Vehicle transport refers to the movement of a vehicle, which is usually a motor vehicle or a passenger automobile, on a car transporter. Typically, the transporter is a specifically built truck. The best thing about vehicle transport is that for long distances, the vehicle of interest doesn’t have to be driven.
                    </p>
                    <h3 class="text-primary text-xl font-bold mt-4">Why do you need vehicle transport?</h3>
                    <ul class="ml-4 list-none text-base text-primary opacity-70 space-y-1 py-2">
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            Saves time
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            Requires little to no planning
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            Protection of your vehicle
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            Safety of individuals
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            Saves money
                        </li>
                    </ul>
                    <h3 class="text-primary text-xl font-bold mt-4">Why choose carsaround?</h3>
                    <ul class="ml-4 list-none text-base text-primary opacity-70 space-y-1 py-2">
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            We ship all around Australia
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            Real-time update on your dashboard
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            Personalized services
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            Easy Application
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            Integrated Facilities
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            Fast Delivery
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            24/7 Support
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            Customers First
                        </li>
                    </ul>
                    <h3 class="text-primary text-xl font-bold mt-4">Types of services we provide:</h3>
                    <p class="ml-4 description__item text-base text-primary leading-7 py-2">
                        <span class="font-semibold !opacity-100">Drop off to door:</span>
                        <span class="opacity-70">The vehicle will be delivered to your doorstep. You don’t have to leave your home for receiving the vehicle.</span>
                    </p>
                    <p class="ml-4 description__item text-base text-primary leading-7 py-2">
                        <span class="font-semibold !opacity-100">Drop off to nearby depo:</span>
                        <span class="opacity-70">The vehicle will be transported to your nearby depo. You can collect it from there.
                        </span>
                    </p>
                    <h3 class="text-primary text-xl font-bold mt-4">Special services to be provided if required:</h3>
                    <p class="ml-4 description__item text-base text-primary leading-7 py-2">
                        <span class="font-semibold !opacity-100">Enclosed vehicle:</span>
                        <span class="opacity-70">Carsaround provides interstate vehicle transport with products inside your car in case you need to move your personal possessions along with your vehicle</span>
                    </p>
                    <p class="ml-4 description__item text-base text-primary leading-7 py-2">
                        <span class="font-semibold !opacity-100">Goods in car:</span>
                        <span class="opacity-70">Carsaround provides interstate vehicle transport with products inside your car in case you need to move your personal possessions along with your vehicle
                        </span>
                    </p>
                    <p class="ml-4 description__item text-base text-primary leading-7 py-2">
                        <span class="font-semibold !opacity-100">Guaranteed delivery: </span>
                        <span class="opacity-70">We can certainly provide it if you require urgent transportation with delivery assurance
                        </span>
                    </p>
                    <h3 class="text-primary text-xl font-bold mt-4">How to get a vehicle transport service?</h3>
                    <ul class="ml-4 list-none text-base text-primary opacity-70 space-y-1 py-2">
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            Apply for the vehicle transport service via carsaround
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            Our team will assess the information
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            A suitable partner will be booked by us
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            The representative will receive the vehicle from the seller
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            Both the buyer and the seller will be updated in real-time
                        </li>
                        <li class="">
                            <img class="inline h-6 w-6" src="{{ asset('/assets/img/icon/tick.svg') }}" alt="Icon">
                            The vehicle will be delivered to your destination
                        </li>
                    </ul>
                    <p class="description__item text-base text-primary leading-7 opacity-70 py-2">We understand the value of time and urgency. Receiving or delivering your vehicle can be time-consuming and a hassle for you. That is where vehicle transport comes in to make it easier for you.
                    </p>

                </div>
                <!-- Card Button -->
                <div class="card__button text-center mt-10">
                    <p class="py-2 text-base text-primary text-opacity-70">Get started now for a hassle-free delivery</p>
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
                    <a href="{{ route('pre_purchase_inspection') }}" class=" flex-col flex w-full sm:w-[48%] lg:w-[32%] group hover:bg-primary rounded-md shadow-sm  transition-all ease-in-out duration-300">
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
                    <a href="{{ route('vehicle_finance') }}" class=" flex-col flex w-full sm:w-[48%] lg:w-[32%] group hover:bg-primary rounded-md shadow-sm  transition-all ease-in-out duration-300">
                        <div class="p-6 ">
                            <!-- Card Image -->
                            <div class="card__img">
                                <img class="w-full min-h-[180px] md:min-h-[220px] rounded-sm object-cover object-center"
                                    src="{{ asset('/assets/img/services/3.png') }}" alt="Services Image">
                            </div>
                            <!-- Card Description -->
                            <div class="card__description flex flex-col">
                                <!-- Card Title -->
                                <h2
                                    class="card__title font-inter text-xl font-semibold capitalize text-primary pt-5  group-hover:text-secondary">

                                    Vehicle Finance

                                </h2>
                                <!-- Card Description -->
                                <p
                                    class="card__description font-inter text-base text-primary group-hover:text-secondary py-2  flex-1">
                                    Money shouldn’t be an obstacle in your path to owning your desired vehicles. We are here to assist with a finance solution that’s most suitable for you, with special rates
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
