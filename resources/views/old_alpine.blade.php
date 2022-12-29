<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
        .pt-head{
            padding-top:200px;
        }
    </style>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alpine.js Tab Component</title>
    <script defer src="https://unpkg.com/alpinejs"></script>
  </head>
  <body>
    <!-- alpine.js tab component -->
    <div class="pt-head" x-data="{ tab: 'description' }">
        <nav>
            <a :class="{ 'active': tab === 'description' }" x-on:click.prevent="tab = 'description'" href="#">Description</a>
            <a :class="{ 'active': tab === 'dimensions' }" x-on:click.prevent="tab = 'dimensions'" href="#">Dimensions</a>
            <a :class="{ 'active': tab === 'reviews' }" x-on:click.prevent="tab = 'reviews'" href="#">Reviews</a>
          </nav>

          <div x-show="tab === 'description'">
            <h3>Description</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus
              facilisis tristique. Lorem ipsum dolor sit amet, consectetur adipiscing
              elit.
            </p>

          </div>
          <div x-show="tab === 'dimensions'">




@section('content')

    <!-- Vehicle  Info Section Starts -->
    <div class="vehicle-info mt-[52px] py-[106px]">
        <div class="lg:container mx-auto  lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
            <form action="" method="POST">
            <!-- Vehicle Heading -->
            <div class="vehicle__heading">
                <!-- Vehicle Title -->
                <h2 class="vehicle__title font-roboto text-2xl font-medium tracking-[0.25px] text-blue">
                    Please enter the vehicle info:
                </h2>
                <!-- Vehicle Sub-title -->
                <h5 class="vehicle__sub-title font-roboto text-lg font-normal tracking-[0.25px] text-blue pt-5">
                    Please Select The Vehicle Type
                </h5>
            </div>
            <!-- Vehicle Card -->
            <div class="vehicle__card grid pt-[30px]">
                <!-- Vehicle List -->
                <ul
                    class="vehicle__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-[30px]">
                    <!-- Vehicle Item -->
                    <li class="vehicle__item relative flex flex-col items-center">
                        <input value="{{ session()->get('buyer.manual_veh') }}" class="sr-only peer" type="radio" name="manual_veh" id="car" value="car" checked>
                        <!-- Car Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-2xl tracking-[5px] bg-white px-6 py-4 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-white uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary  transition-all ease-in-out duration-300"
                            for="car">
                            Car
                        </label>
                    </li>
                    <!-- Vehicle Item -->
                    <li class="vehicle__item relative flex flex-col">
                        <input value="{{ session()->get('buyer.manual_veh') }}" class="sr-only peer" type="radio" name="manual_veh" id="bike" value="bike">
                        <!-- Bike Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-2xl tracking-[5px] bg-white px-6 py-4 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-white uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary  transition-all ease-in-out duration-300"
                            for="bike">
                            bike
                        </label>
                    </li>
                    <!-- Vehicle Item -->
                    <li class="vehicle__item relative flex flex-col">
                        <input value="{{ session()->get('buyer.manual_veh') }}" class="sr-only peer" type="radio" name="manual_veh" id="boat" value="boat">
                        <!-- Boat Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-2xl tracking-[5px] bg-white px-6 py-4 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-white uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary  transition-all ease-in-out duration-300"
                            for="boat">
                            boat
                        </label>
                    </li>
                    <!-- Vehicle Item -->
                    <li class="vehicle__item relative flex flex-col">
                        <input value="{{ session()->get('buyer.manual_veh') }}" class="sr-only peer" type="radio" name="manual_veh" id="caravan" value="caravan">
                        <!-- Caravan Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-2xl tracking-[5px] bg-white px-6 py-4 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-white uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary  transition-all ease-in-out duration-300"
                            for="caravan">
                            Caravan
                        </label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Vehicle  Info Section Ends -->

    <!-- Personal Details Starts -->
    <div class="personal-details pb-[106px]">
        <div class="lg:container mx-auto  lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-8 gap-x-[30px] lg:gap-x-20">
                    <!-- Make -->
                    <div class="make-field w-full flex flex-wrap justify-start">
                        <label for="make"
                            class="make font-roboto text-lg leading-6  tracking-[0.25px] text-primary font-light pb-1">
                            Make*
                        </label>
                        <input value="{{ session()->get('buyer.manual_make') }}"
                            class="pl-6 w-full h-[64px] bg-card p-2 font-roboto text-[18px] leading-6 focus:outline-none border border-transparent focus:bg-transparent focus:border-secondaryDark rounded-md text-primary"
                            type="text" name="manual_make" id="make" placeholder="Mercedes-Benz" value="" required>
                    </div>
                    <!-- Odometer -->
                    <div class="odometer-field w-full  flex flex-wrap justify-start">
                        <label for="odometer"
                            class="odometer font-roboto text-[18px] leading-6 tracking-[0.25px] text-primary font-light pb-1">
                            Odometer
                        </label>
                        <input value="{{ session()->get('buyer.manual_odometer') }}"
                            class="pl-6 w-full h-[64px] bg-card p-2 font-roboto text-[18px] leading-6 focus:outline-none border border-transparent focus:bg-transparent focus:border-secondaryDark rounded-md text-primary"
                            type="text" name="manual_odometer" id="odometer" placeholder="19,525 km">
                    </div>
                    <!-- Model -->
                    <div class="model-field w-full flex flex-wrap justify-start">
                        <label for="model"
                            class="model font-roboto text-[18px] leading-6 tracking-[0.25px] text-primary font-light pb-1">
                            Model*
                        </label>
                        <input value="{{ session()->get('buyer.manual_model') }}"
                            class="pl-6 w-full h-[64px] bg-card p-2 font-roboto text-[18px] leading-6 focus:outline-none border border-transparent focus:bg-transparent focus:border-secondaryDark rounded-md text-primary"
                            type="text" name="manual_model" id="model" placeholder="E-Class" required>
                    </div>
                    <!-- Registration Number/VIN -->
                    <div class="registration-field w-full flex flex-wrap justify-start">
                        <label for="registration"
                            class="registration font-roboto text-[18px] leading-6 tracking-[0.25px] text-primary font-light pb-1">
                            Registration Number/VIN
                        </label>
                        <input value="{{ session()->get('buyer.manual_regi') }}"
                            class="pl-6 w-full h-[64px] bg-card p-2 font-roboto text-[18px] leading-6 focus:outline-none border border-transparent focus:bg-transparent focus:border-secondaryDark rounded-md text-primary"
                            type="text" name="manual_regi" id="registration" placeholder="2HKRM4H78EH668417">
                    </div>
                    <!-- Year -->
                    <div class="year__field w-full flex flex-wrap justify-start">
                        <label for="year"
                            class="year font-roboto text-[18px] leading-6 tracking-[0.25px] text-primary font-light pb-1">
                            Year*
                        </label>
                        <input value="{{ session()->get('buyer.manual_year') }}"
                            class="pl-6 w-full h-[64px] bg-card p-2 font-roboto text-[18px] leading-6 focus:outline-none border border-transparent focus:bg-transparent focus:border-secondaryDark rounded-md text-primary"
                            type="text" name="manual_year" id="year" placeholder="2020" required>
                    </div>
                    <!-- State or Territory Registered -->
                    <div class="state__field w-full flex flex-wrap justify-start">
                        <label for="state"
                            class="w-4/5 state font-roboto text-[18px] leading-6 tracking-[0.25px] text-primary font-light pb-1">
                            State or Territory Registered
                        </label>
                        <input value="{{ session()->get('buyer.manual_state') }}"
                            class="pl-6 w-full h-[64px] bg-card p-2 font-roboto text-[18px] leading-6 focus:outline-none border border-transparent focus:bg-transparent focus:border-secondaryDark rounded-md text-primary"
                            type="text" name="manual_state" id="state" placeholder="2HKRM4H78EH668417">
                    </div>
                </div>
                <!-- Seller Info -->
                <div class="seller-info pt-[106px]">
                    <h2 class="seller__title font-roboto text-2xl font-medium tracking-[0.25px] text-blue pb-6">
                        Please enter the seller’s info:
                    </h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-8 gap-x-[30px] lg:gap-x-20">
                    <!-- Full Name/Company Name -->
                    <div class="full__name-field w-full flex flex-wrap justify-start">
                        <label for="full__name"
                            class="full__name font-roboto text-lg leading-6  tracking-[0.25px] text-primary font-light pb-1">
                            Full Name/Company Name
                        </label>
                        <input value="{{ session()->get('buyer.manual_seller_n') }}"
                            class="pl-6 w-full h-[64px] bg-card p-2 font-roboto text-[18px] leading-6 focus:outline-none border border-transparent focus:bg-transparent focus:border-secondaryDark rounded-md text-primary"
                            type="text" name="manual_seller_n" id="full__name" placeholder="Cameron Williamson">
                    </div>
                    <!-- Email address -->
                    <div class="email-field w-full flex flex-wrap justify-start">
                        <label for="email"
                            class="email font-roboto text-[18px] leading-6 tracking-[0.25px] text-primary font-light pb-1">
                            Email address
                        </label>
                        <input value="{{ session()->get('buyer.manual_seller_email') }}"
                            class="pl-6 w-full h-[64px] bg-card p-2 font-roboto text-[18px] leading-6 focus:outline-none border border-transparent focus:bg-transparent focus:border-secondaryDark rounded-md text-primary"
                            type="text" name="manual_seller_email" id="email" placeholder="debbie.baker@example.com">
                    </div>
                    <!-- Contact Number -->
                    <div class="contact__number-field w-full flex flex-wrap justify-start">
                        <label for="contact__number"
                            class="contact__number font-roboto text-[18px] leading-6 tracking-[0.25px] text-primary font-light pb-1">
                            Contact Number*
                        </label>
                        <input value="{{ session()->get('buyer.manual_seller_contact') }}"
                            class="pl-6 w-full h-[64px] bg-card p-2 font-roboto text-[18px] leading-6 focus:outline-none border border-transparent focus:bg-transparent focus:border-secondaryDark rounded-md text-primary"
                            type="text" name="manual_seller_contact" id="contact__number" placeholder="04 123 456 789"
                            required>
                    </div>
                </div>
                <!-- Contact Button -->
                <div class="justify-end flex">
                    <!-- Button Item -->
                    <button type="submit"
                            class="buyer__btn-started group flex justify-center items-center text-center w-[140px] py-3 mt-20 text-primary bg-transparent font-sans text-base leading-[18px] font-semibold rounded border-2 border-primary capitalize hover:text-white hover:bg-primary transition-all ease-in-out duration-300">
                            next step
                            <span class="icon pl-1 inline-block">
                                <svg width="21" height="21" class="fill-primary group-hover:fill-secondary"
                                    viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.0128 3.76384L16.0132 3.76381L16.0118 3.75366C15.9604 3.37524 15.6363 3.08364 15.2438 3.08364C14.8158 3.08364 14.4688 3.43062 14.4688 3.85864V17.6086H14.4685L14.4691 17.6186L14.4748 17.7035L14.4745 17.7035L14.4758 17.7137C14.5272 18.092 14.8513 18.3836 15.2438 18.3836C15.6718 18.3836 16.0188 18.0367 16.0188 17.6086V3.85864H16.0191L16.0185 3.84864L16.0128 3.76384ZM5.29701 3.24264L5.29728 3.24233L5.28837 3.23572C4.98486 3.01053 4.55438 3.0354 4.27914 3.31064C3.97649 3.61329 3.97649 4.104 4.27914 4.40665L10.6061 10.7336L4.27914 17.0607L4.27886 17.0604L4.27167 17.0687L4.21116 17.1388L4.21085 17.1385L4.20423 17.1474C3.97904 17.4509 4.00389 17.8814 4.27915 18.1566C4.58181 18.4593 5.07251 18.4593 5.37516 18.1566L12.2501 11.2816L12.2504 11.2819L12.2576 11.2736L12.3181 11.2035L12.3184 11.2038L12.325 11.1949C12.5503 10.8914 12.5254 10.4609 12.2501 10.1857C12.2501 10.1857 12.2501 10.1856 12.2501 10.1856L5.37516 3.31064L5.37544 3.31035L5.36711 3.30316L5.29701 3.24264Z"
                                        stroke="#231F20" stroke-width="0.3" />
                                </svg>
                            </span>
                        </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Personal Details Ends -->

@endsection

@section('custom_scripts')
    <!-- Buyer Channel JS -->
    <script src="{{ asset('/assets/js/buyer.js') }}"></script>

    <!-- Inspection JS -->
    <script src="{{ asset('/assets/js/inspection.js') }}"></script>
@endsection

          </div>
          <div x-show="tab === 'reviews'">


    @extends('layouts.front_app')

    @section('title', 'Inspection')

    @section('custom_stylesheets')
    <link rel="stylesheet" href="{{ asset('/assets/css/form.css') }}">
    @endsection


    @section('content')

    <!-- Loan Tab Section Starts -->
    <div class="loan__tab bg-[#E6E6E6] mt-[52px] py-12">
        <div class="lg:container mx-auto px-5 md:px-8 lg:px-15">
            <!-- Tab Body -->
            <div class="tab__body">
                <!-- Tab List -->
                <div
                    class="tab__list grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 space-y-6 xs:space-y-0 sm:space-y-0 gap-4 sm:gap-6 md:gap-20">
                    <!-- Tab Item 1 -->
                    <div class="tab__item">
                        <!-- Item Name -->
                        <div class="item__name pb-1">
                            <h2
                                class="font-inter font-medium text-xl text-[#242634] opacity-50 tracking-[0.25px] uppercase">
                                Personal Details
                            </h2>
                        </div>
                        <!-- Item Bar -->
                        <div class="item__bar h-2 w-full rounded-2xl bg-[#231F20] opacity-50">
                        </div>
                    </div>
                    <!-- Tab Item 2 -->
                    <div class="tab__item">
                        <!-- Item Name -->
                        <div class="item__name pb-1">
                            <h2
                                class="font-inter font-medium text-xl text-[#242634] opacity-50 tracking-[0.25px] uppercase">
                                Safe Settlement
                            </h2>
                        </div>
                        <!-- Item Bar -->
                        <div class="item__bar h-2 w-full rounded-2xl bg-[#231F20] opacity-50">
                        </div>
                    </div>
                    <!-- Tab Item 3 -->
                    <div class="tab__item">
                        <!-- Item Name -->
                        <div class="item__name pb-1">
                            <h2 class="font-inter font-semibold text-xl text-primary tracking-[0.25px] uppercase">
                                Inspection
                            </h2>
                        </div>
                        <!-- Item Bar -->
                        <div class="item__bar h-2 w-full rounded-2xl bg-[#231F20]">
                        </div>
                    </div>
                    <!-- Tab Item 4 -->
                    <div class="tab__item">
                        <!-- Item Name -->
                        <div class="item__name pb-1">
                            <h2
                                class="font-inter font-normal text-xl text-primary opacity-50 tracking-[0.25px] uppercase">
                                Finance
                            </h2>
                        </div>
                        <!-- Item Bar -->
                        <div class="item__bar h-2 w-full rounded-2xl bg-white">
                        </div>
                    </div>
                    <!-- Tab Item 5 -->
                    <div class="tab__item">
                        <!-- Item Name -->
                        <div class="item__name pb-1">
                            <h2
                                class="font-inter font-normal text-xl text-primary opacity-50 tracking-[0.25px] uppercase">
                                Transport
                            </h2>
                        </div>
                        <!-- Item Bar -->
                        <div class="item__bar h-2 w-full rounded-2xl bg-white">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Loan Tab Section Ends -->

    <!-- Back Section Starts -->
    <div class="back py-10">
        <div class="lg:container mx-auto px-5 md:px-8 lg:px-15">
            <!-- Back Page -->
            <div class="inspection__back">
                <!-- Back Icon -->
                <button
                    class="back__icon h-[46px] w-[46px] text-blue bg-secondary justify-center flex items-center rounded-full">
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

    <!-- Vehicle  Info Section Starts -->
    <div class="vehicle-info">
        <div class="lg:container mx-auto px-5 md:px-8 lg:px-15">
            <!-- Vehicle Heading -->
            <div class="vehicle__heading">
                <!-- Vehicle Title -->
                <h2 class="vehicle__title font-roboto text-[40px] font-semibold tracking-[0.25px] text-blue">
                    Select Your Vehicle Type
                </h2>
                <!-- Vehicle Sub-title -->
                <h5 class="vehicle__sub-title font-roboto text-base font-light tracking-[1px] text-blue capitalize">
                    If you do not want a pre-purchase inspection, select ‘Skip & Next’
                </h5>
            </div>
            <!-- Vehicle Card -->
            <div class="vehicle__card grid pt-[30px]">
                <!-- Vehicle List -->
                <ul
                    class="vehicle__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-[30px]">
                    <!-- Vehicle Item -->
                    <li class="vehicle__item relative flex flex-col items-center">
                        <input class="vehicle_type sr-only peer" type="radio" name="vehicle_type" id="car" value="car">
                        <!-- Car Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-2xl tracking-[5px] bg-white px-6 py-10 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-white uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                            for="car">
                            Car
                        </label>
                    </li>
                    <!-- Vehicle Item -->
                    <li class="vehicle__item relative flex flex-col">
                        <input class="vehicle_type sr-only peer" type="radio" name="vehicle_type" id="bike" value="bike">
                        <!-- Bike Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-2xl tracking-[5px] bg-white px-6 py-10 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-white uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                            for="bike">
                            bike
                        </label>
                    </li>
                    <!-- Vehicle Item -->
                    <li class="vehicle__item relative flex flex-col">
                        <input class="vehicle_type sr-only peer" type="radio" name="vehicle_type" id="boat" value="boat">
                        <!-- Boat Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-2xl tracking-[5px] bg-white px-6 py-10 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-white uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                            for="boat">
                            boat
                        </label>
                    </li>
                    <!-- Vehicle Item -->
                    <li class="vehicle__item relative flex flex-col">
                        <input class="vehicle_type sr-only peer" type="radio" name="vehicle_type" id="caravan"
                            value="caravan">
                        <!-- Caravan Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-2xl tracking-[5px] bg-white px-6 py-10 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-white uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                            for="caravan">
                            Caravan
                        </label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Vehicle  Info Section Ends -->

    <!-- Inspection Form Starts -->
    <div class="instructions__form py-[106px]">
        <div class="lg:container mx-auto px-5 md:px-8 lg:px-15">
            <form action="" method="POST" class="">

                <!-- Boat Size Section Starts -->
                <!-- Boat less than 6 meters to less than 10 meters -->
                <div class="boat__size hidden" id="boat_size-section">
                    <!-- Boat Heading -->
                    <div class="boat__heading">
                        <!-- Boat Title -->
                        <h2 class="boat__title font-roboto text-[40px] font-semibold tracking-[0.25px] text-blue">
                            Select your boat size
                        </h2>
                        <!-- Boat Sub-title -->
                        <h5
                            class="boat__sub-title font-roboto text-base font-light tracking-[1px] text-blue capitalize">
                            Lorem Ipsum is simply dummy text
                        </h5>
                    </div>
                    <!-- Boat Card -->
                    <div class="boat__size grid pt-[30px]">
                        <!-- Boat List -->
                        <ul
                            class="size__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-[30px]">
                            <!-- Vehicle Item -->
                            <li class="vehicle__item relative flex flex-col items-center">
                                <input class="boat_size sr-only peer" type="radio" name="boat_size" id="6-meters"
                                    value="6-meters">
                                <!-- 6 meters Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-3xl bg-white px-6 py-9 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="6-meters">
                                    < 6 meters </label> </li> <!-- Vehicle Item -->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="boat_size sr-only peer" type="radio" name="boat_size" id="6-8-meters"
                                    value="6-8-meters" >
                                <!-- 6-8 meters Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-3xl bg-white px-6 py-9 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="6-8-meters">
                                    6 - 8 meters
                                </label>
                            </li>
                            <!-- Vehicle Item -->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="boat_size sr-only peer" type="radio" name="boat_size" id="8-10-meters"
                                    value="8-10-meters">
                                <!-- 8 - 10 meters Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-3xl bg-white px-6 py-9 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-white uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="8-10-meters">
                                    8 - 10 meters
                                </label>
                            </li>
                            <!-- Vehicle Item -->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="boat_size sr-only peer" type="radio" name="boat_size" id="10-meters"
                                    value="10-meters">
                                <!-- 10 meters Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-3xl bg-white px-6 py-9 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="10-meters">
                                    > 10 meters
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Boat Size Section Ends -->

                <!-- Boat Engine Section Starts -->
                <!-- Boat less than 6 meters to less than 10 meters -->
                <div class="boat__engine pt-[87px] hidden" id="small-boat-engine-section">
                    <!-- Boat Heading -->
                    <div class="boat__heading">
                        <!-- Boat Title -->
                        <h2 class="boat__title font-roboto text-[40px] font-semibold tracking-[0.25px] text-blue">
                            Select The Engine Type
                        </h2>
                        <!-- Boat Sub-title -->
                        <h5
                            class="boat__sub-title font-roboto text-base font-light tracking-[1px] text-blue capitalize">
                            Lorem Ipsum is simply dummy text
                        </h5>
                    </div>
                    <!-- Boat Card -->
                    <div class="boat__engine grid pt-[30px]">
                        <!-- Boat List -->
                        <ul
                            class="engine__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-[30px]" id="engineTypeTest">
                            <!-- Vehicle Item -->
                            <li class="vehicle__item relative flex flex-col items-center" id="single-outboard-list">
                                <input class="engine_type sr-only peer" type="radio" name="engine_type"
                                    value="single-outboard" id="single-outboard">
                                <!-- Outboard Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-5 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="single-outboard">
                                    Single <br> Outboard
                                </label>
                            </li>
                            <!-- Vehicle Item -->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="engine_type sr-only peer" type="radio" name="engine_type"
                                    value="single-inboard" id="single-inboard">
                                <!-- Single Inboard Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-5 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="single-inboard">
                                    Single <br> Inboard
                                </label>
                            </li>
                            <!-- Vehicle Item -->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="engine_type sr-only peer" type="radio" name="engine_type"
                                    value="twin-outboards" id="twin-outboards">
                                <!-- Twin Outboards Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-5 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-white uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="twin-outboards">
                                    Twin <br> Outboards
                                </label>
                            </li>
                            <!-- Vehicle Item -->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="engine_type sr-only peer" type="radio" name="engine_type"
                                    value="twin-inboars" id="twin-inboars">
                                <!-- Twin Inboars Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-5 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="twin-inboars">
                                    Twin <br> Inboars
                                </label>
                            </li>
                            <!-- Vehicle Item -->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="engine_type sr-only peer" type="radio" name="engine_type"
                                    value="engine-not-sure" id="engine-not-sure">
                                <!-- Not Sure Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-10 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="engine-not-sure">
                                    Not Sure
                                </label>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- Boat Engine Section Ends -->

                <!-- Boat add_ons Section Starts -->
                <div class="boat__add_ons pt-[87px] hidden" id="small-boat-add_ons-section">
                    <!-- Boat Heading -->
                    <div class="boat__heading">
                        <!-- Boat Title -->
                        <h2 class="boat__title font-roboto text-[40px] font-semibold tracking-[0.25px] text-blue">
                            Select The add-ons
                        </h2>
                        <!-- Boat Sub-title -->
                        <h5
                            class="boat__sub-title font-roboto text-base font-light tracking-[1px] text-blue capitalize">
                            Lorem Ipsum is simply dummy text
                        </h5>
                    </div>
                    <!-- Boat Card -->
                    <div class="boat__add_ons grid pt-[30px]">
                        <!-- Boat List -->
                        <ul
                            class="engine__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-[30px]" id="engineAddonsTest">
                            <!-- Vehicle Item -->
                            <li class="vehicle__item relative flex flex-col items-center">
                                <input class="add_ons sr-only peer" type="radio" name="add_ons" value="do-not-trailer"
                                    id="do-not-trailer">
                                <!-- Do not inspect Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-5 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="do-not-trailer">
                                    Do not inspect <br> trailer
                                </label>
                            </li>
                            <!-- Vehicle Item -->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="add_ons sr-only peer" type="radio" name="add_ons" id="single-axle"
                                    value="single-axle">
                                <!-- Single Axle Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-5 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="single-axle">
                                    Single axle <br> trailer
                                </label>
                            </li>
                            <!-- Vehicle Item -->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="add_ons sr-only peer" type="radio" name="add_ons" id="dual-axle"
                                    value="dual-axle">
                                <!-- Dual axle Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-5 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-white uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="dual-axle">
                                    Dual axle <br> trailer
                                </label>
                            </li>
                            <!-- Vehicle Item -->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="add_ons sr-only peer" type="radio" name="add_ons" id="triple-axle"
                                    value="triple-axle">
                                <!-- Triple Axle Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-5 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="triple-axle">
                                    Triple axle <br> trailer
                                </label>
                            </li>
                            <!-- Vehicle Item -->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="add_ons sr-only peer" type="radio" name="add_ons" id="add_ons-not-sure"
                                    value="add_ons-not-sure">
                                <!-- Not Sure Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-10 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="add_ons-not-sure">
                                    Not Sure
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Boat add_ons Section Ends -->


                <!-- Larger than 10 meters -->
                <!-- Boat Engine Type Section Starts -->
                <div class="boat__tpye pt-[87px] hidden" id="largerBoatTypeSection">
                    <!-- Boat Heading -->
                    <div class="boat__heading">
                        <!-- Boat Title -->
                        <h2 class="boat__title font-roboto text-[40px] font-semibold tracking-[0.25px] text-blue">
                            Select The Boat Type
                        </h2>
                        <!-- Boat Sub-title -->
                        <h5
                            class="boat__sub-title font-roboto text-base font-light tracking-[1px] text-blue capitalize">
                            Lorem Ipsum is simply dummy text
                        </h5>
                    </div>
                    <!-- Boat Card -->
                    <div class="boat__card grid pt-[30px]">
                        <!-- Boat List -->
                        <ul
                            class="card__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-[30px]">
                            <!-- Vehicle Item 1 -->
                            <li class="vehicle__item relative flex flex-col items-center">
                                <input class="boat_type sr-only peer" type="radio" name="boat_type" value="pwc" id="pwc" onclick="largeBoatSize()">
                                <!-- PWC Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-10 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary  uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="pwc">
                                    PWC (Jetski)
                                </label>
                            </li>
                            <!-- Vehicle Item 2 -->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="boat_type sr-only peer" type="radio" name="boat_type" value="bowrider"
                                    id="bowrider" onclick="largeBoatSize()">
                                <!-- Bowrider Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-10 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary  uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="bowrider">
                                    Bowrider
                                </label>
                            </li>
                            <!-- Vehicle Item 3 -->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="boat_type sr-only peer" type="radio" name="boat_type"
                                    value="cabin-cruiser" id="cabin-cruiser" onclick="largeBoatSize()">
                                <!-- Cabin Cruiser Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-10 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-white  uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="cabin-cruiser">
                                    Cabin Cruiser
                                </label>
                            </li>
                            <!-- Vehicle Item 4 -->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="boat_type sr-only peer" type="radio" name="boat_type" value="catamaran"
                                    id="catamaran" onclick="largeBoatSize()">
                                <!-- Catamaran Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-10 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary  uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="catamaran">
                                    Catamaran
                                </label>
                            </li>
                            <!-- Vehicle Item 5 -->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="boat_type sr-only peer" type="radio" name="boat_type"
                                    value="centre-console" id="centre-console" onclick="largeBoatSize()">
                                <!-- Centre Console Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-10 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary  uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="centre-console">
                                    Centre Console
                                </label>
                            </li>
                            <!-- Vehicle Item 6 -->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="boat_type sr-only peer" type="radio" name="boat_type" value="cuddy-cabin"
                                    id="cuddy-cabin" onclick="largeBoatSize()">
                                <!-- Cuddy Cabin Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-10 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary  uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="cuddy-cabin">
                                    Cuddy Cabin
                                </label>
                            </li>
                            <!-- Vehicle Item 7 -->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="boat_type sr-only peer" type="radio" name="boat_type" value="dinghy"
                                    id="dinghy" onclick="largeBoatSize()">
                                <!-- Dinghy Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-10 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary  uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="dinghy">
                                    Dinghy
                                </label>
                            </li>
                            <!-- Vehicle Item 8 -->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="boat_type sr-only peer" type="radio" name="boat_type" value="fishing"
                                    id="fishing" onclick="largeBoatSize()">
                                <!-- Fishing Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-10 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary  uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="fishing">
                                    Fishing
                                </label>
                            </li>
                            <!-- Vehicle Item 9 -->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="boat_type sr-only peer" type="radio" name="boat_type" value="pontoon"
                                    id="pontoon" onclick="largeBoatSize()">
                                <!-- Pontoon Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-10 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary  uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="pontoon">
                                    Pontoon
                                </label>
                            </li>
                            <!-- Vehicle Item 10-->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="boat_type sr-only peer" type="radio" name="boat_type" value="runabout"
                                    id="runabout" onclick="largeBoatSize()">
                                <!-- Runabout Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-10 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary  uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="runabout">
                                    Runabout
                                </label>
                            </li>
                            <!-- Vehicle Item 11 -->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="boat_type sr-only peer" type="radio" name="boat_type" value="ski" id="ski"
                                    onclick="largeBoatSize()">
                                <!-- Ski Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-10 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary  uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="ski">
                                    Ski
                                </label>
                            </li>
                            <!-- Vehicle Item 12 -->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="boat_type sr-only peer" type="radio" name="boat_type" value="yacht"
                                    id="yacht" onclick="largeBoatSize()">
                                <!-- Yacht Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-10 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary  uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="yacht">
                                    Yacht
                                </label>
                            </li>
                            <!-- Vehicle Item 13-->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="boat_type sr-only peer" type="radio" name="boat_type" value="other"
                                    id="other" onclick="largeBoatSize()">
                                <!-- Other Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-10 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary  uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="other">
                                    Other
                                </label>
                            </li>
                            <!-- Vehicle Item 14-->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="boat_type sr-only peer" type="radio" name="boat_type"
                                    value="boat_type-not-sure" id="boat_type-not-sure" onclick="largeBoatSize()">
                                <!-- Not Sure Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-10 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary  uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="boat_type-not-sure">
                                    Not Sure
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Boat Type Section Ends -->


                <!-- Boat Fuel Type Section Starts -->
                <div class="boat__fuel_type pt-[87px] hidden" id="fuelTypeSection">
                    <!-- Boat Heading -->
                    <div class="boat__heading">
                        <!-- Boat Title -->
                        <h2 class="boat__title font-roboto text-[40px] font-semibold tracking-[0.25px] text-blue">
                            Select The Fuel Type
                        </h2>
                        <!-- Boat Sub-title -->
                        <h5
                            class="boat__sub-title font-roboto text-base font-light tracking-[1px] text-blue capitalize">
                            Lorem Ipsum is simply dummy text
                        </h5>
                    </div>
                    <!-- Boat Card -->
                    <div class="boat__card grid pt-[30px]">
                        <!-- Boat List -->
                        <ul
                            class="card__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-[30px]">
                            <!-- Vehicle Item 1 -->
                            <li class="vehicle__item relative flex flex-col items-center">
                                <input class="fuel_type sr-only peer" type="radio" name="fuel_type" value="petrol" id="petrol" onclick="largeBoatSize()">
                                <!-- Petrol Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-10 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary  uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="petrol">
                                    Petrol
                                </label>
                            </li>
                            <!-- Vehicle Item 2 -->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="fuel_type sr-only peer" type="radio" name="fuel_type" value="diesel" id="diesel" onclick="largeBoatSize()">
                                <!-- Diesel Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-10 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary  uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="diesel">
                                    Diesel
                                </label>
                            </li>
                            <!-- Vehicle Item 3 -->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="fuel_type sr-only peer" type="radio" name="fuel_type" value="other-fuel" id="other-fuel" onclick="largeBoatSize()">
                                <!-- Other Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-10 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-white  uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="other-fuel">
                                    Other
                                </label>
                            </li>
                            <!-- Vehicle Item 4 -->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="fuel_type sr-only peer" type="radio" name="fuel_type" value="not-sure-fuel" id="not-sure-fuel" onclick="largeBoatSize()">
                                <!-- Not sure Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-10 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary  uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="not-sure-fuel">
                                    Not sure
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Boat Fuel Type Section Ends -->

                <!-- Inspected Section Starts -->
                <div class="inspected pt-[87px] hidden" id="inspectedSection">
                    <!-- Inspected Heading -->
                    <div class="inspected__heading">
                        <!-- Inspected Title -->
                        <h2 class="inspected__title font-roboto text-[40px] font-semibold tracking-[0.25px] text-blue">
                            Do you want the trailer to be inspected?
                        </h2>
                        <!-- Inspected Sub-title -->
                        <h5
                            class="inspected__sub-title font-roboto text-base font-light tracking-[1px] text-blue capitalize">
                            Lorem Ipsum is simply dummy text
                        </h5>
                    </div>
                    <!-- Inspected Card -->
                    <div class="inspected__card grid pt-[30px]">
                        <!-- Inspected List -->
                        <ul
                            class="card__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-[30px]">
                            <!-- Inspected Item 1 -->
                            <li class="inspected__item relative flex flex-col items-center">
                                <input class="sr-only peer" type="radio" name="inspect" id="yes">
                                <!-- Yes Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-10 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary  uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="yes">
                                    Yes
                                </label>
                            </li>
                            <!-- Inspected Item 2 -->
                            <li class="inspected__item relative flex flex-col">
                                <input class="sr-only peer" type="radio" name="inspect" id="no">
                                <!-- No Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-[22px] bg-white px-6 py-10 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-secondary  uppercase flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="no">
                                    No
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Inspected Section Ends -->


                <!-- Caravan -->
                <!-- Vehicle  Info Section Starts -->
                <div class="vehicle-info hidden"  id="caravanInspectionSection">
                    <!-- Vehicle Heading -->
                    <div class="vehicle__heading">
                        <!-- Vehicle Title -->
                        <h2 class="vehicle__title font-roboto text-[40px] font-semibold tracking-[0.25px] text-blue capitalize">
                            Select an inspection
                        </h2>
                        <!-- Vehicle Sub-title -->
                        <h5 class="vehicle__sub-title font-roboto text-base font-light tracking-[1px] text-blue capitalize">
                            Lorem Ipsum is simply dummy text
                        </h5>
                    </div>
                        <!-- Vehicle Card -->
                    <div class="vehicle__card grid pt-[30px]">
                        <!-- Vehicle List -->
                        <ul class="vehicle__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-[30px]">
                            <!-- Vehicle Item -->
                            <li class="vehicle__item relative flex flex-col items-center">
                                <input class="caravan_inspection sr-only peer" type="radio" name="caravan_inspection" value="camper-tent-trailer" id="camper">
                                <!-- Camper Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-3xl tracking-[0.25px] bg-white px-6 py-9 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-white  capitalize flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="camper">
                                    Camper Tent Trailer
                                </label>
                            </li>
                            <!-- Vehicle Item -->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="caravan_inspection sr-only peer" type="radio" name="caravan_inspection" value="pop-top" id="pop-top">
                                <!-- Pop Top Section -->
                                <label
                                class="flex items-center justify-center text-center font-roboto font-medium text-primary text-3xl tracking-[0.25px] bg-white px-6 py-9 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-white  capitalize flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="pop-top">
                                    Caravan / Pop Top
                                </label>
                            </li>
                            <!-- Vehicle Item -->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="caravan_inspection sr-only peer" type="radio" name="caravan_inspection" value="rv/motorhome" id="rv/motor">
                                <!-- RV / Motorhome Section -->
                                <label
                                class="flex items-center justify-center text-center font-roboto font-medium text-primary text-3xl tracking-[0.25px] bg-white px-6 py-9 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-white  capitalize flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="rv/motor">
                                    RV / Motorhome
                                </label>
                            </li>
                            <!-- Vehicle Item -->
                            <li class="vehicle__item relative flex flex-col">
                                <input class="caravan_inspection sr-only peer" type="radio" name="caravan_inspection" value="caravan-not-sure" id="caravan-not-sure">
                                <!-- Not Sure Section -->
                                <label
                                class="flex items-center justify-center text-center font-roboto font-medium text-primary text-3xl tracking-[0.25px] bg-white px-6 py-9 peer-checked:bg-primary border-[1px] cursor-pointer w-full rounded-md peer-checked:text-white  capitalize flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="caravan-not-sure">
                                    Not Sure
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>



                <!-- Additonal Inspection Information -->
                <!-- Instructions Body -->
                <div class="instructions__body flex flex-wrap justify-between pt-[70px] hidden" id="additionalInsepectionInfo">
                    <!-- Instructions Item -->
                    <div class="instructions__item first-line w-full md:w-1/2">
                        <!-- Instructions Text -->
                        <p
                            class="fees-check__title font-roboto font-normal text-lg tracking-[0.25px] text-blue capitalize pb-2">
                            Any special instructions?
                        </p>
                        <!-- Instructions Input -->
                        <!-- <input
                            class="fees-check__fild bg-[#F4F4F4] w-full sm:w-[344px] inline-block font-roboto font-normal text-lg tracking-[0.25px] text-[#231F20] rounded outline-none p-4" type="text"> -->
                        <textarea name="" id="fees-check__fild--instruction"
                            class="bg-card w-full sm:w-[344px] font-roboto font-normal text-lg tracking-[0.25px] text-[#231F20] rounded outline-none resize-none whitespace-normal p-2"></textarea>
                    </div>
                    <!-- Instructions Item -->
                    <div class="instructions__item w-full md:w-1/2 flex justify-start md:justify-end">
                        <div class="w-full md:w-auto">
                            <!-- Instructions Text -->
                            <p
                                class="fees-check__title font-roboto font-normal text-lg tracking-[0.25px] text-blue pb-2">
                                Your fees for the inspection will be:
                            </p>
                            <!-- Instructions Input -->
                            <p
                                class="fees-check__fild--amount bg-[#F4F4F4] w-full md:w-[344px] inline-block font-roboto font-normal text-lg tracking-[0.25px] text-[#231F20] rounded outline-none p-4">
                                <span class="">$</span>
                                309
                            </p>
                            <p
                                class="font-roboto italic text-[10px] leading-8 tracking-[0.25px] text-[#323647] opacity-50">
                                * Price Includes TAX
                            </p>
                            <p class="font-roboto italic text-[10px] tracking-[0.25px] text-[#323647] opacity-50">
                                * Price may vary for prestige, older or regional based inspections.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Small Boat Inspection Fees -->
                <!-- Instructions Body -->
                <div class="instructions__body pt-[70px] hidden" id="smallBoatInspectionFee">
                    <!-- Instructions Item -->
                    <div class="instructions__item">
                        <!-- Instructions Text -->
                        <p class="fees-check__title font-roboto font-normal text-lg tracking-[0.25px] text-blue pb-2">
                            Your fees for the inspection will be:
                        </p>
                        <!-- Instructions Input -->
                        <p
                            class="fees-check__fild--amount--smallBoat bg-[#F4F4F4] w-full sm:w-[344px] inline-block font-roboto font-normal text-lg tracking-[0.25px] text-[#231F20] rounded outline-none p-4">
                            <span class="">$</span>hello
                        </p>
                        <p class="font-roboto italic text-[10px] leading-8 tracking-[0.25px] text-[#323647] opacity-50">
                            * Price Includes TAX
                        </p>
                    </div>
                </div>

                <!-- Larger Boat Inspection Fees -->
                <!-- Instructions Body -->
                <div class="instructions__body pt-[70px] hidden" id="largerBoatInspectionFeeSection">
                    <!-- Instructions Item -->
                    <div class="instructions__item">
                        <!-- Instructions Text -->
                        <p class="fees-check__title font-roboto font-normal text-lg tracking-[0.25px] text-blue pb-2">
                            We will process the details and send you an email with the right price.
                        </p>
                        <!-- Instructions Input -->
                        <p class="fees-check__fild bg-[#F4F4F4] w-full sm:w-[344px] inline-block font-roboto font-normal text-lg tracking-[0.25px] text-[#231F20] rounded outline-none p-4">$?</p>
                        <p class="font-roboto italic text-[10px] leading-8 tracking-[0.25px] text-[#323647] opacity-50">
                            * Price Includes TAX
                        </p>
                    </div>
                </div>

                <!-- Button -->
                <div class="button flex justify-end gap-4 sm:gap-10 pt-[70px]">
                    <!-- Skip & Next -->
                    <button
                        class="otp__btn-started group flex justify-center items-center text-center w-[137px] py-[10px] text-primary bg-transparent font-sans text-base leading-[18px] font-semibold rounded border-2 border-primary capitalize hover:text-white hover:bg-primary transition-all ease-in-out duration-500">
                        <span class="icon pl-1 inline-block">
                            <svg width="21" height="21" class="fill-primary group-hover:fill-secondary rotate-180"
                                viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.0128 3.76384L16.0132 3.76381L16.0118 3.75366C15.9604 3.37524 15.6363 3.08364 15.2438 3.08364C14.8158 3.08364 14.4688 3.43062 14.4688 3.85864V17.6086H14.4685L14.4691 17.6186L14.4748 17.7035L14.4745 17.7035L14.4758 17.7137C14.5272 18.092 14.8513 18.3836 15.2438 18.3836C15.6718 18.3836 16.0188 18.0367 16.0188 17.6086V3.85864H16.0191L16.0185 3.84864L16.0128 3.76384ZM5.29701 3.24264L5.29728 3.24233L5.28837 3.23572C4.98486 3.01053 4.55438 3.0354 4.27914 3.31064C3.97649 3.61329 3.97649 4.104 4.27914 4.40665L10.6061 10.7336L4.27914 17.0607L4.27886 17.0604L4.27167 17.0687L4.21116 17.1388L4.21085 17.1385L4.20423 17.1474C3.97904 17.4509 4.00389 17.8814 4.27915 18.1566C4.58181 18.4593 5.07251 18.4593 5.37516 18.1566L12.2501 11.2816L12.2504 11.2819L12.2576 11.2736L12.3181 11.2035L12.3184 11.2038L12.325 11.1949C12.5503 10.8914 12.5254 10.4609 12.2501 10.1857C12.2501 10.1857 12.2501 10.1856 12.2501 10.1856L5.37516 3.31064L5.37544 3.31035L5.36711 3.30316L5.29701 3.24264Z"
                                    stroke="#231F20" stroke-width="0.3" />
                            </svg>
                        </span>
                        Skip & Next
                    </button>
                    <!-- Add & Next -->
                    <button type="submit" value=""
                        class="otp__btn-started group flex justify-center items-center text-center w-[137px] py-[10px] text-primary bg-transparent font-sans text-base leading-[18px] font-semibold rounded border-2 border-primary capitalize hover:text-white hover:bg-primary transition-all ease-in-out duration-500">
                        Add & Next
                        <span class="icon pl-1 inline-block">
                            <svg width="21" height="21" class="fill-primary group-hover:fill-secondary"
                                viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.0128 3.76384L16.0132 3.76381L16.0118 3.75366C15.9604 3.37524 15.6363 3.08364 15.2438 3.08364C14.8158 3.08364 14.4688 3.43062 14.4688 3.85864V17.6086H14.4685L14.4691 17.6186L14.4748 17.7035L14.4745 17.7035L14.4758 17.7137C14.5272 18.092 14.8513 18.3836 15.2438 18.3836C15.6718 18.3836 16.0188 18.0367 16.0188 17.6086V3.85864H16.0191L16.0185 3.84864L16.0128 3.76384ZM5.29701 3.24264L5.29728 3.24233L5.28837 3.23572C4.98486 3.01053 4.55438 3.0354 4.27914 3.31064C3.97649 3.61329 3.97649 4.104 4.27914 4.40665L10.6061 10.7336L4.27914 17.0607L4.27886 17.0604L4.27167 17.0687L4.21116 17.1388L4.21085 17.1385L4.20423 17.1474C3.97904 17.4509 4.00389 17.8814 4.27915 18.1566C4.58181 18.4593 5.07251 18.4593 5.37516 18.1566L12.2501 11.2816L12.2504 11.2819L12.2576 11.2736L12.3181 11.2035L12.3184 11.2038L12.325 11.1949C12.5503 10.8914 12.5254 10.4609 12.2501 10.1857C12.2501 10.1857 12.2501 10.1856 12.2501 10.1856L5.37516 3.31064L5.37544 3.31035L5.36711 3.30316L5.29701 3.24264Z"
                                    stroke="#231F20" stroke-width="0.3" />
                            </svg>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Inspection Form Ends -->


        @include('common_sections.common_faqs')
        @include('common_sections.form_vehicle_info')
        @endsection

        @section('custom_scripts')
            <!-- Buyer Channel JS -->
            <script src="{{ asset('/assets/js/buyer.js') }}"></script>

            <!-- Inspection JS -->
            <script src="{{ asset('/assets/js/inspection.js') }}"></script>
            @endsection


          </div>

       </div>
  </body>
</html>
