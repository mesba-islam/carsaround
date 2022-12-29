<div x-data="{
    vehicle_info: {
        type: '',
        make: '',
        odometer: '',
        model: '',
        registration_number: '',
        year: '',
        registered_state: '',
        vehicle_price: '',
        seller_name: '',
        seller_email: '',
        seller_number: '',
        registered_state: '',
        registered_state: '',
    },
}">


     <!-- Back Section Starts -->
     <div class="pt-24 back">
        <div class="px-5 mx-auto lg:container lg:max-w-screen-2xl md:px-8 lg:px-15">
            <!-- Back Page -->
            <div class="btn__back">
                <!-- Back Icon -->
                <button @click.prevent="tab = 'start'; window.location.hash = 'start'"
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




    <!-- Vehicle  Info Section Starts -->
    <div class="vehicle-info mt-[52px] pb-20">
        <div class="px-5 mx-auto lg:container lg:max-w-screen-2xl md:px-8 lg:px-15">
            <!-- Form -->

            {{-- <form wire:submit.prevent="submit"> --}}
            <!-- Vehicle Heading -->
            <div class="vehicle__heading">
                <!-- Vehicle Title -->
                <h2 class="text-2xl font-medium vehicle__title font-roboto text-blue">
                    Please enter the vehicle info:
                </h2>
                <!-- Vehicle Sub-title -->
                <h5 class="pt-6 text-base font-normal vehicle__sub-title font-roboto text-blue">
                    Please select the vehicle type
                </h5>
            </div>
            <!-- Vehicle Card -->
            <div class="grid pt-4 vehicle__card">
                <!-- Vehicle List -->
                <ul
                    class="vehicle__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-x-[30px]">
                    <!-- Vehicle Item -->
                    <li class="relative flex flex-col items-center vehicle__item">
                        <input class="sr-only peer" type="radio" x-model="vehicle_info.type" id="manual-car" value="car">

                        <!-- Car Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg  bg-white p-5 peer-checked:bg-primary border border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 peer-hover:bg-primary peer-hover:text-secondary  transition-all ease-in-out duration-300"
                            for="manual-car">
                            Car
                        </label>
                    </li>
                    <!-- Vehicle Item -->
                    <li class="relative flex flex-col vehicle__item">
                        <input class="sr-only peer" type="radio" x-model="vehicle_info.type" id="manual-bike" value="bike">

                        <!-- Bike Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg  bg-white p-5 peer-checked:bg-primary border border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 peer-hover:bg-primary peer-hover:text-secondary  transition-all ease-in-out duration-300"
                            for="manual-bike">
                            Bike
                        </label>
                    </li>
                    <!-- Vehicle Item -->
                    <li class="relative flex flex-col vehicle__item">
                        <input class="sr-only peer" type="radio" x-model="vehicle_info.type" id="manual-boat" value="boat">

                        <!-- Boat Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg  bg-white p-5 peer-checked:bg-primary border border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 peer-hover:bg-primary peer-hover:text-secondary  transition-all ease-in-out duration-300"
                            for="manual-boat">
                            Boat
                        </label>
                    </li>
                    <!-- Vehicle Item -->
                    <li class="relative flex flex-col vehicle__item">
                        <input class="sr-only peer" type="radio" x-model="vehicle_info.type" id="manual-caravan" value="caravan">

                        <!-- Caravan Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg  bg-white p-5 peer-checked:bg-primary border border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 peer-hover:bg-primary peer-hover:text-secondary  transition-all ease-in-out duration-300"
                            for="manual-caravan">
                            Caravan
                        </label>
                    </li>
                    @error('type') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                </ul>
            </div>
        </div>
    </div>
    <!-- Vehicle  Info Section Ends -->

    <!-- Personal Details Starts -->
    <div class="personal-details pb-[106px]">
        <div class="px-5 mx-auto lg:container lg:max-w-screen-2xl md:px-8 lg:px-15">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-8 gap-x-[30px] lg:gap-x-20">
                    <!-- Make -->
                    <div class="flex flex-wrap justify-start w-full make-field">
                        <label for="make"
                            class="make font-roboto text-sm leading-6  tracking-[0.25px] text-primary font-light">
                            Make*
                        </label>
                        <input
                            class="w-full h-16 p-2 pl-6 text-sm leading-6 border border-transparent rounded-md bg-card font-roboto focus:outline-none focus:bg-transparent focus:border-secondaryDark text-primary"
                            type="text" x-model="vehicle_info.make" id="make" placeholder="Mercedes-Benz" required>
                            @error('make') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror

                        </div>
                    <!-- Odometer -->
                    <div class="flex flex-wrap justify-start w-full odometer-field">
                        <label for="odometer"
                            class="odometer font-roboto text-sm leading-6 tracking-[0.25px] text-primary font-light">
                            Odometer
                        </label>
                        <input
                            class="w-full h-16 p-2 pl-6 text-sm leading-6 border border-transparent rounded-md bg-card font-roboto focus:outline-none focus:bg-transparent focus:border-secondaryDark text-primary"
                            type="number" x-model="vehicle_info.odometer" id="odometer" placeholder="19,525 km">
                            @error('odometer') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        </div>
                    <!-- Model -->
                    <div class="flex flex-wrap justify-start w-full model-field">
                        <label for="model"
                            class="model font-roboto text-sm leading-6 tracking-[0.25px] text-primary font-light">
                            Model*
                        </label>
                        <input
                            class="w-full h-16 p-2 pl-6 text-sm leading-6 border border-transparent rounded-md bg-card font-roboto focus:outline-none focus:bg-transparent focus:border-secondaryDark text-primary"
                            type="text" x-model="vehicle_info.model" id="model" placeholder="E-Class" required>
                            @error('model') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror

                        </div>
                    <!-- Registration Number/VIN -->
                    <div class="flex flex-wrap justify-start w-full registration-field">
                        <label for="registration"
                            class="registration font-roboto text-sm leading-6 tracking-[0.25px] text-primary font-light">
                            Registration Number/VIN
                        </label>
                        <input
                            class="w-full h-16 p-2 pl-6 text-sm leading-6 border border-transparent rounded-md bg-card font-roboto focus:outline-none focus:bg-transparent focus:border-secondaryDark text-primary"
                            type="text" x-model="vehicle_info.registration_number" id="registration" placeholder="2HKRM4H78EH668417">
                            @error('registration_number') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        </div>
                    <!-- Year -->
                    <div class="flex flex-wrap justify-start w-full year__field">
                        <label for="year"
                            class="year font-roboto text-sm leading-6 tracking-[0.25px] text-primary font-light">
                            Year*
                        </label>
                        <input
                            class="w-full h-16 p-2 pl-6 text-sm leading-6 border border-transparent rounded-md bg-card font-roboto focus:outline-none focus:bg-transparent focus:border-secondaryDark text-primary"
                            type="year" x-model="vehicle_info.year" id="year" placeholder="2020" required>
                            @error('year') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror

                        </div>
                    <!-- State or Territory Registered -->
                    <div class="flex flex-wrap justify-start w-full state__field">
                        <label for="state"
                            class="w-4/5 state font-roboto text-sm leading-6 tracking-[0.25px] text-primary font-light">
                            State or Territory Registered
                        </label>

                        <select x-model="vehicle_info.registered_state" class="w-full h-16 p-2 px-6 mt-1 text-sm leading-6 border border-transparent rounded-md bg-card font-roboto focus:outline-none focus:bg-transparent focus:border-secondaryDark text-primary" name="per-state" id="per-state">
                            <option value="">Select state or territory</option>
                            <option value="Australian Capital Territory">Australian Capital Territory</option>
                            <option value="New South Wales">New South Wales</option>
                            <option value="Northern Territory">Northern Territory</option>
                            <option value="Queensland">Queensland</option>
                            <option value="South Australia">South Australia</option>
                            <option value="Tasmania">Tasmania</option>
                            <option value="Victoria">Victoria</option>
                            <option value="Western Australia">Western Australia</option>
                        </select>

                        @error('registered_state') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                    </div>
                    <!-- Vehicle Price -->
                    <div class="flex flex-wrap justify-start w-full state__field">
                        <label for="vehicle_price"
                            class="w-4/5 vehicle_price font-roboto text-sm leading-6 tracking-[0.25px] text-primary font-light">
                            Vehicle Price*
                        </label>
                        <input
                            class="w-full h-16 p-2 pl-6 text-sm leading-6 border border-transparent rounded-md bg-card font-roboto focus:outline-none focus:bg-transparent focus:border-secondaryDark text-primary"
                            type="number" x-model="vehicle_info.vehicle_price" id="vehicle_price" placeholder="20000">
                            @error('vehicle_price') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
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
                    <div class="flex flex-wrap justify-start w-full full__name-field">
                        <label for="full__name"
                            class="full__name font-roboto text-sm leading-6  tracking-[0.25px] text-primary font-light">
                            Full Name/Company Name*
                        </label>
                        <input
                            class="w-full h-16 p-2 pl-6 text-sm leading-6 border border-transparent rounded-md bg-card font-roboto focus:outline-none focus:bg-transparent focus:border-secondaryDark text-primary"
                            type="text" x-model="vehicle_info.seller_name" name="seller_name" id="full__name" placeholder="Cameron Williamson">
                            @error('seller_name') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        </div>
                    <!-- Email address -->
                    <div class="flex flex-wrap justify-start w-full email-field">
                        <label for="email"
                            class="email font-roboto text-sm leading-6 tracking-[0.25px] text-primary font-light">
                            Email address
                        </label>
                        <input
                            class="w-full h-16 p-2 pl-6 text-sm leading-6 border border-transparent rounded-md bg-card font-roboto focus:outline-none focus:bg-transparent focus:border-secondaryDark text-primary"
                            type="text" x-model="vehicle_info.seller_email" name="seller_email" id="email" placeholder="debbie.baker@example.com">
                            @error('seller_email') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        </div>
                    <!-- Contact Number -->
                    <div class="flex flex-wrap justify-start w-full contact__number-field">
                        <label for="contact__number"
                            class="contact__number font-roboto text-sm leading-6 tracking-[0.25px] text-primary font-light">
                            Contact Number*
                        </label>
                        <input
                            class="w-full h-16 p-2 pl-6 text-sm leading-6 border border-transparent rounded-md bg-card font-roboto focus:outline-none focus:bg-transparent focus:border-secondaryDark text-primary"
                            type="number" x-model="vehicle_info.seller_number" name="seller_number" id="contact__number" placeholder="04 123 456 789"
                            required>
                           @error('seller_number') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <!-- Contact Button -->
                <div class="flex justify-end">
                    <!-- Button Item -->
                    <button
                        @click="validateAndGoNextStep('vehicle_manual_info', vehicle_info)"
                        x-on:notify-manual-vehicle-info.window="tab = 'personal_details'; window.location.hash = 'personal_details';"
                        class="buyer__btn-started group flex justify-center items-center text-center w-[140px] py-3 mt-20 text-primary bg-transparent font-sans text-base leading-[18px] font-semibold rounded border-2 border-primary capitalize hover:text-white hover:bg-primary transition-all ease-in-out duration-300">
                        next step
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
    <!-- Personal Details Ends -->
</div>
