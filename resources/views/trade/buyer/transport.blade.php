@include('trade.common.nav')
     <!-- Back Section Starts -->
     <div class="pt-10 pb-2 back">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
            <!-- Back Page -->
            <div class="btn__back">
                <!-- Back Icon -->
                <button @click.prevent="tab = 'finance'; window.location.hash = 'finance'"
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

<div x-data="{
    transport_data: {
        drop_off_location: '',
        type_of_service: '',
        special_service: '',
    }
}">

    <!-- Postcode/Suburb Section Starts -->
    <div class="postcode-suburb">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
            <div class="address__text">
                <h2 class="address_title font-roboto text-3xl font-bold text-blue">
                    Please provide the drop-off postcode/suburb
                </h2>
                <p class="address_doc font-roboto text-sm font-normal my-2 text-blue">
                    Lorem ipsum is simply dummy text
                </p>
                <div class="pt-4 address__link">
                    <input
                        class="w-full border-2 focus:border-[2px] focus:border-primary rounded  p-7 outline-none"
                        type="text" x-model="transport_data.drop_off_location" id="" placeholder="Your drop-off address" required>
                        @error('drop_off_location') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
    </div>
    <!-- Postcode/Suburb Section Ends -->

    <!-- Vehicle  Info Section Starts -->
    <div class="vehicle-info pt-16">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
                <div class="services-info" id="servicesInfoSection">
                    <!-- Vehicle Heading -->
                    <div class="vehicle__heading">
                        <!-- Vehicle Title -->
                        <h2 class="vehicle__title font-roboto text-3xl font-semibold text-blue">
                            Select the type of service
                        </h2>
                        <!-- Vehicle Sub-title -->
                        <h5 class="vehicle__sub-title font-roboto text-sm font-normal text-blue ">
                            Lorem ipsum is simply dummy text
                        </h5>
                    </div>
                    <!-- Vehicle Card -->
                    <div class="vehicle__card grid pt-[30px]">
                        <!-- Vehicle List -->
                        <ul class="vehicle__list grid grid-cols-1 sm:grid-cols-2 space-y-6 sm:space-y-0 sm:gap-[30px]">
                            <!-- Vehicle Item -->
                            <li class="relative flex flex-col items-center vehicle__item">
                                <input class="sr-only transport-service peer" type="radio" name="transport-service" x-model="transport_data.type_of_service" value="drop-door" id="drop-door">
                                @error('type_of_service') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                <!-- Drop Off to my door Section -->
                                <label
                                class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 peer-checked:bg-primary border border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                for="drop-door">
                                Drop off to my door
                                </label>
                            </li>
                        <!-- Vehicle Item -->
                        <li class="relative flex flex-col vehicle__item">
                            <input class="sr-only transport-service peer" type="radio" name="transport-service" x-model="transport_data.type_of_service" value="nearby-depo" id="nearby-depo">
                            @error('type_of_service') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                            <!-- Drop Off to my nearby depo Section -->
                            <label
                                class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 peer-checked:bg-primary border  border-primary cursor-pointer w-full rounded-md peer-checked:text-white flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                for="nearby-depo">
                                Drop off to my nearby depo
                            </label>
                        </li>
                    </ul>
                </div>
                </div>
                <div class="require__service pt-16 hidden" id="requireServiceSection">
                    <!-- Require Heading -->
                    <div class="require__heading">
                        <!-- Require Title -->
                        <h2 class="require__title font-roboto text-3xl font-semibold text-blue">
                            Select the special services if you require any
                        </h2>
                        <!-- Require Sub-title -->
                        <h5 class="require__sub-title font-roboto text-sm font-normal text-blue ">
                            Lorem ipsum is simply dummy text
                        </h5>
                    </div>
                    <!-- Require Card -->
                    <div class="require__card grid pt-[30px]">
                        <!-- Require List -->
                        <ul
                        class="require__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-[30px]">
                        <!-- Require Item -->
                            <li class="relative flex flex-col items-center require__item">
                            <input class="sr-only peer" type="radio" x-model="transport_data.special_service" name="require-service" value="general" id="general">
                            @error('special_service') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                <!-- General Section -->
                                <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 peer-checked:bg-primary border border-primary cursor-pointer w-full rounded-md peer-checked:text-white flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="general">
                                    General
                                </label>
                                <small>&nbsp;</small>
                            </li>
                            <!-- Require Item -->
                            <li class="relative flex flex-col require__item">
                                <input class="sr-only peer" type="radio" x-model="transport_data.special_service" name="require-service" value="enclosed" id="enclosed">
                                @error('special_service') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                <!-- Enclosed Vehicle Section -->
                                <label
                                class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 peer-checked:bg-primary border border-primary cursor-pointer w-full rounded-md peer-checked:text-white flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                for="enclosed">
                                Enclosed vehicle
                            </label>
                            <small class="font-roboto text-[10px] italic text-primary opacity-50 pt-2">
                                *Enclose your vehicles for peace of mind.
                            </small>
                            </li>
                            <!-- Require Item -->
                            <li class="relative flex flex-col require__item">
                            <input class="sr-only peer" type="radio" x-model="transport_data.special_service" name="require-service" value="good-car" id="good-car">
                            @error('special_service') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                            <!-- Goods in Car Section -->
                            <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 peer-checked:bg-primary border border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                            for="good-car">
                            Goods in car
                            </label>
                            <small class="font-roboto text-[10px] italic text-primary opacity-50 pt-2">
                                *Transport your goods inside your vehicle.
                            </small>
                            </li>
                            <!-- Require Item -->
                            <li class="relative flex flex-col require__item">
                                    <input class="sr-only peer" type="radio" x-model="transport_data.special_service" name="require-service" value="guaranteed-delivery" id="guaranteed-delivery">
                                    @error('special_service') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                    <!-- Guaranteed Delivery Section -->
                                    <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 peer-checked:bg-primary border border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="guaranteed-delivery">
                                        Guaranteed delivery
                                    </label>
                                    <small class="font-roboto text-[10px] italic text-primary opacity-50 pt-2">
                                        *Vehicles delivered on your specified date, guaranteed!
                                    </small>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Thanks -->
                <div class="hidden py-2" id="thanksSection">
                        <p class="font-roboto text-lg italic text-blue">
                            Thanks! The quote will be emailed to you asap.
                        </p>
                </div>

        </div>
    </div>
    <!-- Vehicle  Info Section Ends -->

    <!-- Require  Info Section Starts -->
    <div class="require__body pt-16">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
            <!-- Button -->
            <div class="flex justify-end button">
                <!-- Add & Next -->
                <button
                    {{-- @click="completed_tabs.push('transport');console.log(completed_tabs);$wire.getTestData(transport_data)" --}}
                    @click="validateAndGoNextStep('transport', transport_data)"
                    x-on:notify-payment.window="tab = 'safe_settlement'; window.location.hash = 'safe_settlement'; completed_tabs.push('transport');"
                    class="proceed-payment group flex justify-center items-center text-center w-[187px] py-[10px] text-primary bg-transparent font-roboto text-base leading-[18px] font-semibold rounded border-2 border-primary capitalize hover:text-white hover:bg-primary transition-all ease-in-out duration-500 disabled:opacity-30 disabled:cursor-not-allowed disabled:hover:bg-transparent disabled:hover:text-primary">
                    Proceed to payment
                </button>

            </div>
        </div>
    </div>
</div>


<!-- Require  Info Section Ends -->
@include('common_sections.common_faqs')
@include('common_sections.form_vehicle_info')
