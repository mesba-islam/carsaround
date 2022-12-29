@extends('layouts.front_app')


@section('title')
    About Us | Cars Around
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
                    About Carsaround
                </h2>
            </div>
        </div>
    </div>
    <!-- Banner Section Ends -->

<!-- Services-content Section Starts -->
<div class="about-content py-16 md:pb-24">
    <div class="lg:container mx-auto lg:max-w-screen-2xl w-full px-5 md:px-8 lg:px-15">
        <!-- About Heading -->
        <div class="about__heading text-center">
            <h2 class="heading__title font-sans text-3xl font-bold">
                Anything around a car’s need, it’s us
            </h2>
            <p class="heading__description font-sans text-base font-normal my-2">
                Ouwens Casserly is a automotive dealing platform based in Australia, selling more than...
            </p>
            <!-- About Button -->
            <a href="{{ route('trade.create') }}" class="mt-6  w-40 text-center text-white bg-primary f text-base leading-[18px] font-semibold px-6 py-[14px] border-2 border-primary hover:bg-white hover:text-primary transition ease-in-out duration-500 rounded inline-block">
                    Get Started
            </a>
        </div>
        <!-- Service Card 1 -->
        <div class="about__card grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-24 pt-10 md:pt-24">
            <!-- Services Image -->
            <div class="card__img md:order-1">
                <!-- Card Image -->
                <img class="rounded-md w-[720px] min-h-[180px] h-[180px] xsm:h-[280px] md:h-[320px] lg:h-[400px] object-cover object-center" src="{{asset('/assets/img/about/2.png')}}" alt="Services Image">
            </div>
            <!-- Service Description -->
            <div class="card__description">
                <!-- Card Title -->
                <h2 class="card__title font-roboto text-3xl font-semibold text-primary pb-3">
                    Who we are
                </h2>
                <!-- Card Description -->
                <p class="card__description font-roboto text-base text-primary opacity-70 py-2">
                    Carsaround is a team of highly professionals who work to make vehicle buying-selling easier and more secure. We are based in Australia working with vehicle trading facilities.
                </p>
                <p class="card__description font-roboto text-base text-primary opacity-70 py-2">
                    Buying a vehicle can be risky, with chances of fraudulence. With carsaround, you don’t have to worry about the whole process of vehicle purchase. We have integrated several key services which can help you to buy your desired vehicle without any hassle.

                </p>

            </div>
        </div>
        <!-- Service Card 2 -->
        <div class="about__card grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-24 pt-10 md:pt-24">
            <!-- Services Image -->
            <div class="card__img">
                <!-- Card Image -->
                <img class="rounded-md w-[720px] min-h-[180px] h-[180px] xsm:h-[280px] md:h-[320px] lg:h-[400px] object-cover object-center" src="{{asset('/assets/img/about/2.png')}}" alt="Services Image">
            </div>
            <!-- Service Description -->
            <div class="card__description md:order-1">
                <!-- Card Title -->
                <h2 class="card__title font-roboto text-3xl font-semibold text-primary pb-3">
                    How Carsaround started
                </h2>
                <!-- Card Description -->
                <p class="card__description font-roboto text-base text-primary opacity-70 py-2">
                    We identified that for vehicle trade there is a significant hollow to fill. The conventional way of buying-selling vehicles brings a considerable risk factor for both parties. False advertisement, inconvenience of receiving or dispatching the vehicle, and transaction insecurity are some of the many.
                </p>
                <p class="card__description font-roboto text-base text-primary opacity-70 py-2">
                    A desire to resolve these issues led to an idea. The idea led to market research. Combining that with technology, we came up with a solution: Carsaround.
                </p>
            </div>
        </div>
        <!-- Service Card 3 -->
        <div class="about__card grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-24 pt-10 md:pt-24">
            <!-- Services Image -->
            <div class="card__img md:order-1">
                <!-- Card Image -->
                <img class="rounded-md w-[720px] min-h-[180px] h-[180px] xsm:h-[280px] md:h-[320px] lg:h-[400px] object-cover object-center" src="{{asset('/assets/img/about/2.png')}}" alt="Services Image">
            </div>
            <!-- Service Description -->
            <div class="card__description">
                <!-- Card Title -->
                <h2 class="card__title font-roboto text-3xl font-semibold text-primary pb-3">
                    How Carsaround works
                </h2>
                <!-- Card Description -->
                <p class="card__description font-roboto text-base text-primary opacity-70 py-2">
                    We can help with your purchase or sale of cars, bikes, boats, and caravans. We offer pre-purchase inspection, vehicle finance, safe settlement, and vehicle transport services. All of these services can be a complete solution for you.
                </p>
                <p class="card__description font-roboto text-base text-primary opacity-70 py-2">
                    A buyer or a seller can apply through our website adding all four of the services, or the ones they require. Our executives will work on the application and facilitate the trade. Both the buyer and the seller will be updated on the status dynamically. Head to our services section to learn more.
                </p>
            </div>
        </div>

    </div>
</div>
<!-- Services Section Ends -->

@endsection
