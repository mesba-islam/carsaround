

    @include('trade.common.nav')

    <div x-data="{
        inspection_data: {
            vehicle_type: '',
            boat_size: '',
            boat_engine: '',
            boat_ad_ons: '',
            boat_type: '',
            boat_fuel_type: '',
            will_boat_trailer_inspect: '',
            caravan_type: '',
            require_pre_purchase_inspection: '',
        }
    }">


        <!-- Back Section Starts -->
        <div class="pt-10 pb-4 back">
            <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
                <!-- Back Page -->
                <div class="btn__back">
                    <!-- Back Icon -->
                    <button @click.prevent="tab = 'safe_settlement'; window.location.hash = 'safe_settlement'"
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

        <!-- Purchase require Section Starts -->
        <div class="purchase__require">
            <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
                <!-- Require Heading -->
                <div class="require__heading">
                    <!-- Require Title -->
                    <h2 class="require__title font-roboto text-3xl font-semibold  text-blue">
                        Does this deal require pre-purchase inspection?
                    </h2>
                    <!-- Require Sub-title -->
                    <h5 class="require__sub-title font-roboto text-sm font-normal  text-blue ">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry
                    </h5>
                </div>
                <!-- Require Card -->
                <div class="require__card grid pt-4">
                    <!-- Require List -->
                    <ul
                        class="require__list grid grid-cols-1 sm:grid-cols-2 space-y-6 sm:space-y-0 sm:gap-[30px]">
                        <!-- Require Item -->
                        <li class="require__item relative flex flex-col items-center">
                            <input class="require-pre-purchase sr-only peer" type="radio" x-model="inspection_data.require_pre_purchase_inspection" name="require-pre-purchase" id="pre-purchase-yes" value="yes">
                            @error('require_pre_purchase_inspection') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                            <!-- Yes Section -->
                            <label
                                class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg  bg-white p-5 border-primary peer-checked:bg-primary border-[1px]  cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                for="pre-purchase-yes">
                                Yes
                            </label>
                        </li>
                        <!-- Require Item -->
                        <li class="require__item relative flex flex-col">
                            <input class="require-pre-purchase sr-only peer" type="radio" x-model="inspection_data.require_pre_purchase_inspection" name="require-pre-purchase" id="pre-purchase-no" value="no">
                            @error('require_pre_purchase_inspection') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                            <!-- No Section -->
                            <label
                                class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg  bg-white p-5 border-primary peer-checked:bg-primary border-[1px]  cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                for="pre-purchase-no">
                                No
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Prchase require Section Ends -->

        <!-- Vehicle  Info Section Starts -->
        <div class="vehicle-info  pt-16 hidden" id="inspectionVehicleType">
            <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
                <!-- Vehicle Heading -->
                <div class="vehicle__heading">
                    <!-- Vehicle Title -->
                    <h2 class="vehicle__title font-roboto text-3xl font-semibold  text-blue">
                        Select your vehicle type
                    </h2>
                    <!-- Vehicle Sub-title -->
                    <h5 class="vehicle__sub-title font-roboto text-sm font-normal  text-blue ">
                        If you do not want a pre-purchase inspection, select ‘Skip & Next’
                    </h5>
                </div>
                <!-- Vehicle Card -->
                <div class="vehicle__card grid pt-4">
                    <!-- Vehicle List -->
                    <ul
                        class="vehicle__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-[30px]">
                        <!-- Vehicle Item -->
                        <li class="vehicle__item relative flex flex-col items-center">
                            <input class="seller-vehicle-type sr-only peer" type="radio" x-model="inspection_data.vehicle_type" name="seller-vehicle-type" id="seller-car" value="car">
                            @error('vehicle_type') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                            <!-- Car Section -->
                            <label
                                class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg  bg-white p-5 peer-checked:bg-primary border border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                for="seller-car">
                                Car
                            </label>
                        </li>
                        <!-- Vehicle Item -->
                        <li class="vehicle__item relative flex flex-col">
                            <input class="seller-vehicle-type sr-only peer" type="radio" x-model="inspection_data.vehicle_type" name="seller-vehicle-type" id="seller-bike" value="bike">
                            @error('vehicle_type') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                            <!-- Bike Section -->
                            <label
                                class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg  bg-white p-5 peer-checked:bg-primary border border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                for="seller-bike">
                                Bike
                            </label>
                        </li>
                        <!-- Vehicle Item -->
                        <li class="vehicle__item relative flex flex-col">
                            <input class="seller-vehicle-type sr-only peer" type="radio" x-model="inspection_data.vehicle_type" name="seller-vehicle-type" id="seller-boat" value="boat">
                            @error('vehicle_type') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                            <!-- Boat Section -->
                            <label
                                class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg  bg-white p-5 peer-checked:bg-primary border border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                for="seller-boat">
                                Boat
                            </label>
                        </li>
                        <!-- Vehicle Item -->
                        <li class="vehicle__item relative flex flex-col">
                            <input class="seller-vehicle-type sr-only peer" type="radio" x-model="inspection_data.vehicle_type" name="seller-vehicle-type" id="seller-caravan"
                                value="caravan">
                                @error('vehicle_type') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                <!-- Caravan Section -->
                            <label
                                class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg  bg-white p-5 peer-checked:bg-primary border border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                for="seller-caravan">
                                Caravan
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Vehicle  Info Section Ends -->

        <!-- Inspection Form Starts -->
        <div class="instructions__form py-16">
            <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
                    <!-- Boat Size Section Starts -->
                    <!-- Boat less than 6 meters to less than 10 meters -->
                    <div class="boat__size hidden" id="seller-boat-size-section">
                        <!-- Boat Heading -->
                        <div class="boat__heading">
                            <!-- Boat Title -->
                            <h2 class="boat__title font-roboto text-3xl font-semibold  text-blue">
                                Select your boat size
                            </h2>
                            <!-- Boat Sub-title -->
                            <h5
                                class="boat__sub-title font-roboto text-sm font-normal  text-blue ">
                                Lorem Ipsum is simply dummy text
                            </h5>
                        </div>
                        <!-- Boat Card -->
                        <div class="boat__size grid pt-4">
                            <!-- Boat List -->
                            <ul
                                class="size__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-[30px]">
                                <!-- Vehicle Item -->
                                <li class="vehicle__item relative flex flex-col items-center">
                                    <input class="seller-boat-size sr-only peer" type="radio" x-model="inspection_data.boat_size" name="seller-boat-size" id="seller-6-meters"
                                        value="6-meters">
                                        @error('boat_size') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                        <!-- 6 meters Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-secondary  flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-6-meters">
                                        < 6 meters </label> </li> <!-- Vehicle Item -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="seller-boat-size sr-only peer" type="radio" x-model="inspection_data.boat_size" name="seller-boat-size" id="seller-6-8-meters"
                                        value="6-8-meters" >
                                        @error('boat_size') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                        <!-- 6-8 meters Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-secondary  flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-6-8-meters">
                                        6 - 8 meters
                                    </label>
                                </li>
                                <!-- Vehicle Item -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="seller-boat-size sr-only peer" type="radio" x-model="inspection_data.boat_size" name="seller-boat-size" id="seller-8-10-meters"
                                        value="8-10-meters">
                                        @error('boat_size') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                        <!-- 8 - 10 meters Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-8-10-meters">
                                        8 - 10 meters
                                    </label>
                                </li>
                                <!-- Vehicle Item -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="seller-boat-size sr-only peer" type="radio" x-model="inspection_data.boat_size" name="seller-boat-size" id="seller-10-meters"
                                        value="10-meters">
                                        @error('boat_size') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                        <!-- 10 meters Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-secondary  flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-10-meters">
                                        > 10 meters
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Boat Size Section Ends -->

                    <!-- Boat Engine Section Starts -->
                    <!-- Boat less than 6 meters to less than 10 meters -->
                    <div class="boat__engine pt-16 hidden" id="seller-small-boat-engine-section">
                        <!-- Boat Heading -->
                        <div class="boat__heading">
                            <!-- Boat Title -->
                            <h2 class="boat__title font-roboto text-3xl font-semibold  text-blue">
                                Select the engine type
                            </h2>
                            <!-- Boat Sub-title -->
                            <h5
                                class="boat__sub-title font-roboto text-sm font-normal  text-blue ">
                                Lorem Ipsum is simply dummy text
                            </h5>
                        </div>
                        <!-- Boat Card -->
                        <div class="boat__engine grid pt-4">
                            <!-- Boat List -->
                            <ul
                                class="engine__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-[30px]" id="engineTypeTest">
                                <!-- Vehicle Item -->
                                <li class="vehicle__item relative flex flex-col items-center" id="seller-single-outboard-list">
                                    <input class="engine-type sr-only peer" type="radio" x-model="inspection_data.boat_engine"
                                        value="single-outboard" name="engine-type" id="seller-single-outboard">
                                        @error('boat_engine') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                        <!-- Outboard Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white px-6 py-5 peer-checked:bg-primary border-primary border-[1px]  cursor-pointer w-full rounded-md peer-checked:text-secondary  flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-single-outboard">
                                        Single outboard
                                    </label>
                                </li>
                                <!-- Vehicle Item -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="engine-type sr-only peer" type="radio" x-model="inspection_data.boat_engine"
                                        value="single-inboard" name="engine-type" id="seller-single-inboard">
                                        @error('boat_engine') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                        <!-- Single Inboard Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white px-6 py-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-secondary  flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-single-inboard">
                                        Single inboard
                                    </label>
                                </li>
                                <!-- Vehicle Item -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="engine-type sr-only peer" type="radio" x-model="inspection_data.boat_engine"
                                        value="twin-outboards" name="engine-type" id="seller-twin-outboards">
                                        @error('boat_engine') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                        <!-- Twin Outboards Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white px-6 py-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-twin-outboards">
                                        Twin outboards
                                    </label>
                                </li>
                                <!-- Vehicle Item -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="engine-type sr-only peer" type="radio" x-model="inspection_data.boat_engine"
                                        value="twin-inboars" name="engine-type" id="seller-twin-inboars">
                                        @error('boat_engine') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                        <!-- Twin Inboars Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white px-6 py-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-secondary  flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-twin-inboars">
                                        Twin inboars
                                    </label>
                                </li>
                                <!-- Vehicle Item -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="engine-type sr-only peer" type="radio" x-model="inspection_data.boat_engine"
                                        value="engine-not-sure" name="engine-type" id="seller-engine-not-sure">
                                        @error('boat_engine') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                        <!-- Not Sure Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 border-primary peer-checked:bg-primary border-[1px]  cursor-pointer w-full rounded-md peer-checked:text-secondary  flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-engine-not-sure">
                                        Not sure
                                    </label>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- Boat Engine Section Ends -->

                    <!-- Boat Add-ons Section Starts -->
                    <div class="boat__add-ons pt-16 hidden" id="seller-small-boat-add-ons-section">
                        <!-- Boat Heading -->
                        <div class="boat__heading">
                            <!-- Boat Title -->
                            <h2 class="boat__title font-roboto text-3xl font-semibold  text-blue">
                                Select the add-ons
                            </h2>
                            <!-- Boat Sub-title -->
                            <h5
                                class="boat__sub-title font-roboto text-sm font-normal  text-blue ">
                                Lorem Ipsum is simply dummy text
                            </h5>
                        </div>
                        <!-- Boat Card -->
                        <div class="boat__add-ons grid pt-4">
                            <!-- Boat List -->
                            <ul
                                class="engine__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-[30px]" id="engineAddonsTest">
                                <!-- Vehicle Item -->
                                <li class="vehicle__item relative flex flex-col items-center">
                                    <input class="add-ons sr-only peer" type="radio" x-model="inspection_data.boat_ad_ons" value="do-not-trailer"
                                        name="add-ons" id="seller-do-not-trailer">
                                        @error('boat_ad_ons') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                    <!-- Do not inspect Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white px-6 py-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-secondary  flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-do-not-trailer">
                                        Do not inspect trailer
                                    </label>
                                </li>
                                <!-- Vehicle Item -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="add-ons sr-only peer" type="radio" x-model="inspection_data.boat_ad_ons" name="add-ons" id="seller-single-axle"
                                        value="single-axle">
                                        @error('boat_ad_ons') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                    <!-- Single Axle Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white px-6 py-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-secondary  flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-single-axle">
                                        Single axle trailer
                                    </label>
                                </li>
                                <!-- Vehicle Item -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="add-ons sr-only peer" type="radio" x-model="inspection_data.boat_ad_ons" name="add-ons" id="seller-dual-axle"
                                        value="dual-axle">
                                        @error('boat_ad_ons') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                    <!-- Dual axle Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white px-6 py-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-dual-axle">
                                        Dual axle trailer
                                    </label>
                                </li>
                                <!-- Vehicle Item -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="add-ons sr-only peer" type="radio" x-model="inspection_data.boat_ad_ons" name="add-ons" id="seller-triple-axle"
                                        value="triple-axle">
                                        @error('boat_ad_ons') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                        <!-- Triple Axle Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white px-6 py-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-secondary  flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-triple-axle">
                                        Triple axle trailer
                                    </label>
                                </li>
                                <!-- Vehicle Item -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="add-ons sr-only peer" type="radio" x-model="inspection_data.boat_ad_ons" name="add-ons" id="seller-add-ons-not-sure"
                                        value="add-ons-not-sure">
                                        @error('boat_ad_ons') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                        <!-- Not Sure Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 border-primary peer-checked:bg-primary border-[1px]  cursor-pointer w-full rounded-md peer-checked:text-secondary  flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-add-ons-not-sure">
                                        Not sure
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Boat Add-ons Section Ends -->


                    <!-- Larger than 10 meters -->
                    <!-- Boat Engine Type Section Starts -->
                    <div class="boat__tpye pt-16 hidden" id="sellerLargerBoatTypeSection">
                        <!-- Boat Heading -->
                        <div class="boat__heading">
                            <!-- Boat Title -->
                            <h2 class="boat__title font-roboto text-3xl font-semibold  text-blue">
                                Select The Boat Type
                            </h2>
                            <!-- Boat Sub-title -->
                            <h5
                                class="boat__sub-title font-roboto text-sm font-normal  text-blue ">
                                Lorem Ipsum is simply dummy text
                            </h5>
                        </div>
                        <!-- Boat Card -->
                        <div class="boat__card grid pt-4">
                            <!-- Boat List -->
                            <ul
                                class="card__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-[30px]">
                                <!-- Vehicle Item 1 -->
                                <li class="vehicle__item relative flex flex-col items-center">
                                    <input class="boat-type sr-only peer" type="radio" x-model="inspection_data.boat_type" value="pwc" name="boat-type" id="seller-pwc" onclick="largeBoatSize()">
                                    @error('boat_type') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                    <!-- PWC Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 border-primary peer-checked:bg-primary border-[1px]  cursor-pointer w-full rounded-md peer-checked:text-secondary   flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-pwc">
                                        PWC (Jetski)
                                    </label>
                                </li>
                                <!-- Vehicle Item 2 -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="boat-type sr-only peer" type="radio" x-model="inspection_data.boat_type" value="bowrider"
                                        name="boat-type" id="seller-bowrider" onclick="largeBoatSize()">
                                        @error('boat_type') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                        <!-- Bowrider Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 border-primary peer-checked:bg-primary border-[1px]  cursor-pointer w-full rounded-md peer-checked:text-secondary   flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-bowrider">
                                        Bowrider
                                    </label>
                                </li>
                                <!-- Vehicle Item 3 -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="boat-type sr-only peer" type="radio" x-model="inspection_data.boat_type"
                                        value="cabin-cruiser" name="boat-type" id="seller-cabin-cruiser" onclick="largeBoatSize()">
                                        @error('boat_type') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                        <!-- Cabin Cruiser Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 border-primary peer-checked:bg-primary border-[1px]  cursor-pointer w-full rounded-md peer-checked:text-white   flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-cabin-cruiser">
                                        Cabin cruiser
                                    </label>
                                </li>
                                <!-- Vehicle Item 4 -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="boat-type sr-only peer" type="radio" x-model="inspection_data.boat_type" value="catamaran"
                                        name="boat-type" id="seller-catamaran" onclick="largeBoatSize()">
                                        @error('boat_type') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                        <!-- Catamaran Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 border-primary peer-checked:bg-primary border-[1px]  cursor-pointer w-full rounded-md peer-checked:text-secondary   flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-catamaran">
                                        Catamaran
                                    </label>
                                </li>
                                <!-- Vehicle Item 5 -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="boat-type sr-only peer" type="radio" x-model="inspection_data.boat_type"
                                        value="centre-console" name="boat-type" id="seller-centre-console" onclick="largeBoatSize()">
                                        @error('boat_type') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                        <!-- Centre Console Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 border-primary peer-checked:bg-primary border-[1px]  cursor-pointer w-full rounded-md peer-checked:text-secondary   flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-centre-console">
                                        Centre console
                                    </label>
                                </li>
                                <!-- Vehicle Item 6 -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="boat-type sr-only peer" type="radio" x-model="inspection_data.boat_type" value="cuddy-cabin"
                                        name="boat-type" id="seller-cuddy-cabin" onclick="largeBoatSize()">
                                        @error('boat_type') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                        <!-- Cuddy Cabin Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 border-primary peer-checked:bg-primary border-[1px]  cursor-pointer w-full rounded-md peer-checked:text-secondary   flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-cuddy-cabin">
                                        Cuddy cabin
                                    </label>
                                </li>
                                <!-- Vehicle Item 7 -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="boat-type sr-only peer" type="radio" x-model="inspection_data.boat_type" value="dinghy"
                                        name="boat-type" id="seller-dinghy" onclick="largeBoatSize()">
                                        @error('boat_type') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                        <!-- Dinghy Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 border-primary peer-checked:bg-primary border-[1px]  cursor-pointer w-full rounded-md peer-checked:text-secondary   flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-dinghy">
                                        Dinghy
                                    </label>
                                </li>
                                <!-- Vehicle Item 8 -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="boat-type sr-only peer" type="radio" x-model="inspection_data.boat_type" value="fishing"
                                        name="boat-type" id="seller-fishing" onclick="largeBoatSize()">
                                        @error('boat_type') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                        <!-- Fishing Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 border-primary peer-checked:bg-primary border-[1px]  cursor-pointer w-full rounded-md peer-checked:text-secondary   flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-fishing">
                                        Fishing
                                    </label>
                                </li>
                                <!-- Vehicle Item 9 -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="boat-type sr-only peer" type="radio" x-model="inspection_data.boat_type" value="pontoon"
                                        name="boat-type" id="seller-pontoon" onclick="largeBoatSize()">
                                        @error('boat_type') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                        <!-- Pontoon Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 border-primary peer-checked:bg-primary border-[1px]  cursor-pointer w-full rounded-md peer-checked:text-secondary   flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-pontoon">
                                        Pontoon
                                    </label>
                                </li>
                                <!-- Vehicle Item 10-->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="boat-type sr-only peer" type="radio" x-model="inspection_data.boat_type" value="runabout"
                                        name="boat-type" id="seller-runabout" onclick="largeBoatSize()">
                                        @error('boat_type') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                        <!-- Runabout Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 border-primary peer-checked:bg-primary border-[1px]  cursor-pointer w-full rounded-md peer-checked:text-secondary   flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-runabout">
                                        Runabout
                                    </label>
                                </li>
                                <!-- Vehicle Item 11 -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="boat-type sr-only peer" type="radio" x-model="inspection_data.boat_type" value="ski" name="boat-type" id="seller-ski"
                                        onclick="largeBoatSize()">
                                        @error('boat_type') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                        <!-- Ski Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 border-primary peer-checked:bg-primary border-[1px]  cursor-pointer w-full rounded-md peer-checked:text-secondary   flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-ski">
                                        SKI
                                    </label>
                                </li>
                                <!-- Vehicle Item 12 -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="boat-type sr-only peer" type="radio" x-model="inspection_data.boat_type" value="yacht"
                                        name="boat-type" id="seller-yacht" onclick="largeBoatSize()">
                                        @error('boat_type') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                        <!-- Yacht Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 border-primary peer-checked:bg-primary border-[1px]  cursor-pointer w-full rounded-md peer-checked:text-secondary   flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-yacht">
                                        Yacht
                                    </label>
                                </li>
                                <!-- Vehicle Item 13-->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="boat-type sr-only peer" type="radio" x-model="inspection_data.boat_type" value="other"
                                        name="boat-type" id="seller-other" onclick="largeBoatSize()">
                                        @error('boat_type') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                        <!-- Other Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 border-primary peer-checked:bg-primary border-[1px]  cursor-pointer w-full rounded-md peer-checked:text-secondary   flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-other">
                                        Other
                                    </label>
                                </li>
                                <!-- Vehicle Item 14-->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="boat-type sr-only peer" type="radio" x-model="inspection_data.boat_type"
                                        value="boat-type-not-sure" name="boat-type" id="seller-boat-type-not-sure" onclick="largeBoatSize()">
                                        @error('boat_type') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                        <!-- Not Sure Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 border-primary peer-checked:bg-primary border-[1px]  cursor-pointer w-full rounded-md peer-checked:text-secondary   flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-boat-type-not-sure">
                                        Not sure
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Boat Type Section Ends -->


                    <!-- Boat Fuel Type Section Starts -->
                    <div class="boat__fuel-type pt-16 hidden" id="sellerFuelTypeSection">
                        <!-- Boat Heading -->
                        <div class="boat__heading">
                            <!-- Boat Title -->
                            <h2 class="boat__title font-roboto text-3xl font-semibold  text-blue">
                                Select The Fuel Type
                            </h2>
                            <!-- Boat Sub-title -->
                            <h5
                                class="boat__sub-title font-roboto text-sm font-normal  text-blue ">
                                Lorem Ipsum is simply dummy text
                            </h5>
                        </div>
                        <!-- Boat Card -->
                        <div class="boat__card grid pt-4">
                            <!-- Boat List -->
                            <ul
                                class="card__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-[30px]">
                                <!-- Vehicle Item 1 -->
                                <li class="vehicle__item relative flex flex-col items-center">
                                    <input class="fuel-type sr-only peer" type="radio" x-model="inspection_data.boat_fuel_type" value="petrol" name="fuel-type" id="seller-petrol" onclick="largeBoatSize()">
                                    @error('boat_fuel_type') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                    <!-- Petrol Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 border-primary peer-checked:bg-primary border-[1px]  cursor-pointer w-full rounded-md peer-checked:text-secondary   flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-petrol">
                                        Petrol
                                    </label>
                                </li>
                                <!-- Vehicle Item 2 -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="fuel-type sr-only peer" type="radio" x-model="inspection_data.boat_fuel_type" value="diesel" name="fuel-type" id="seller-diesel" onclick="largeBoatSize()">
                                    @error('boat_fuel_type') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                    <!-- Diesel Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 border-primary peer-checked:bg-primary border-[1px]  cursor-pointer w-full rounded-md peer-checked:text-secondary   flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-diesel">
                                        Diesel
                                    </label>
                                </li>
                                <!-- Vehicle Item 3 -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="fuel-type sr-only peer" type="radio" x-model="inspection_data.boat_fuel_type" value="other-fuel" name="fuel-type" id="seller-other-fuel" onclick="largeBoatSize()">
                                    @error('boat_fuel_type') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                    <!-- Other Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 border-primary peer-checked:bg-primary border-[1px]  cursor-pointer w-full rounded-md peer-checked:text-white   flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-other-fuel">
                                        Other
                                    </label>
                                </li>
                                <!-- Vehicle Item 4 -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="fuel-type sr-only peer" type="radio" x-model="inspection_data.boat_fuel_type" value="not-sure-fuel" name="fuel-type" id="seller-not-sure-fuel" onclick="largeBoatSize()">
                                    @error('boat_fuel_type') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                    <!-- Not sure Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 border-primary peer-checked:bg-primary border-[1px]  cursor-pointer w-full rounded-md peer-checked:text-secondary   flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-not-sure-fuel">
                                        Not sure
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Boat Fuel Type Section Ends -->

                    <!-- Inspected Section Starts -->
                    {{-- <div class="inspected pt-16 hidden" id="sellerInspectedSection">
                        <!-- Inspected Heading -->
                        <div class="inspected__heading">
                            <!-- Inspected Title -->
                            <h2 class="inspected__title font-roboto text-3xl font-semibold  text-blue">
                                Do you want the trailer to be inspected?
                            </h2>
                            <!-- Inspected Sub-title -->
                            <h5
                                class="inspected__sub-title font-roboto text-sm font-normal  text-blue ">
                                Lorem Ipsum is simply dummy text
                            </h5>
                        </div>
                        <!-- Inspected Card -->
                        <div class="inspected__card grid pt-4">
                            <!-- Inspected List -->
                            <ul
                                class="card__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-[30px]">
                                <!-- Inspected Item 1 -->
                                <li class="inspected__item relative flex flex-col items-center">
                                    <input class="sr-only peer" type="radio" name="inspect" id="yes">
                                    <!-- Yes Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 border-primary peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-secondary   flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="yes">
                                        Yes
                                    </label>
                                </li>
                                <!-- Inspected Item 2 -->
                                <li class="inspected__item relative flex flex-col">
                                    <input class="sr-only peer" type="radio" name="inspect" id="no">
                                    <!-- No Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white p-5 border-primary peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-secondary   flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="no">
                                        No
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                    <!-- Inspected Section Ends -->


                    <!-- Caravan -->
                    <!-- Vehicle  Info Section Starts -->
                    <div class="vehicle-info hidden"  id="sellerCaravanInspectionSection">
                        <!-- Vehicle Heading -->
                        <div class="vehicle__heading">
                            <!-- Vehicle Title -->
                            <h2 class="vehicle__title font-roboto text-3xl font-semibold  text-blue ">
                                Select an inspection
                            </h2>
                            <!-- Vehicle Sub-title -->
                            <h5 class="vehicle__sub-title font-roboto text-sm font-normal  text-blue ">
                                Lorem Ipsum is simply dummy text
                            </h5>
                        </div>
                            <!-- Vehicle Card -->
                        <div class="vehicle__card grid pt-4">
                            <!-- Vehicle List -->
                            <ul class="vehicle__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-[30px]">
                                <!-- Vehicle Item -->
                                <li class="vehicle__item relative flex flex-col items-center">
                                    <input class="caravan-inspection sr-only peer" type="radio" x-model="inspection_data.caravan_type" value="camper-tent-trailer" name="caravan-inspection" id="seller-camper">
                                    @error('caravan_type') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                    <!-- Camper Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg  bg-white p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white   flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-camper">
                                        Camper tent trailer
                                    </label>
                                </li>
                                <!-- Vehicle Item -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="caravan-inspection sr-only peer" type="radio" x-model="inspection_data.caravan_type" value="pop-top" name="caravan-inspection" id="seller-pop-top">
                                    @error('caravan_type') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                    <!-- Pop Top Section -->
                                    <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg  bg-white p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white   flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-pop-top">
                                        Caravan / Pop top
                                    </label>
                                </li>
                                <!-- Vehicle Item -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="caravan-inspection sr-only peer" type="radio" x-model="inspection_data.caravan_type" value="rv/motorhome" name="caravan-inspection" id="seller-rv/motor">
                                    @error('caravan_type') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                    <!-- RV / Motorhome Section -->
                                    <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg  bg-white p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white   flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-rv/motor">
                                        RV / Motorhome
                                    </label>
                                </li>
                                <!-- Vehicle Item -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="caravan-inspection sr-only peer" type="radio" x-model="inspection_data.caravan_type" value="caravan-not-sure" name="caravan-inspection" id="seller-caravan-not-sure">
                                    @error('caravan_type') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                    <!-- Not Sure Section -->
                                    <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg  bg-white p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white   flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="seller-caravan-not-sure">
                                        Not sure
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Additonal Inspection Information -->
                    <!-- Instructions Body -->
                    <div class="instructions__body flex flex-wrap justify-between pt-[70px] hidden" id="sellerAdditionalInsepectionInfo">
                        <!-- Instructions Item -->
                        <div class="instructions__item first-line w-full md:w-1/2">
                            <!-- Instructions Text -->
                            <p
                                class="fees-check__title font-roboto font-normal text-lg  text-blue  pb-2">
                                Any special instructions?
                            </p>
                            <!-- Instructions Input -->
                            <textarea name="" id="fees-check__fild--instruction"
                                class="bg-card w-full sm:w-[344px] font-roboto font-normal text-lg  text-[#231F20] rounded outline-none resize-none whitespace-normal p-2"></textarea>
                        </div>
                        <!-- Instructions Item -->
                        <div class="instructions__item w-full md:w-1/2 flex justify-start md:justify-end">
                            <div class="w-full md:w-auto">
                                <!-- Instructions Text -->
                                <p
                                    class="fees-check__title font-roboto font-normal text-lg  text-blue pb-2">
                                    Your fees for the inspection will be:
                                </p>
                                <!-- Instructions Input -->
                                <input type="text" class="fees-check__fild--amount bg-[#F4F4F4] w-full md:w-[344px] inline-block font-roboto font-normal text-lg  text-[#231F20] rounded outline-none p-4 focus:ring-0 focus:outline-none read-only" readonly name="" id="" value="395">
                                <p
                                    class="font-roboto italic text-[10px] leading-8  text-[#323647] opacity-50">
                                    * Price Includes TAX
                                </p>
                                <p class="font-roboto italic text-[10px]  text-[#323647] opacity-50">
                                    * Price may vary for prestige, older or regional based inspections.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Small Boat Inspection Fees -->
                    <!-- Instructions Body -->
                    <div class="instructions__body pt-[70px] hidden" id="sellerSmallBoatInspectionFee">
                        <!-- Instructions Item -->
                        <div class="instructions__item">
                            <!-- Instructions Text -->
                            <p class="fees-check__title font-roboto font-normal text-lg  text-blue pb-2">
                                Your fees for the inspection will be:
                            </p>
                            <!-- Instructions Input -->
                            <p
                                class="fees-check__fild--amount--smallBoat bg-[#F4F4F4] w-full sm:w-[344px] inline-block font-roboto font-normal text-lg  text-[#231F20] rounded outline-none p-4">
                                <span class="">$</span>hello
                            </p>
                            <p class="font-roboto italic text-[10px] leading-8  text-[#323647] opacity-50">
                                * Price Includes TAX
                            </p>
                        </div>
                    </div>

                    <!-- Larger Boat Inspection Fees -->
                    <!-- Instructions Body -->
                    <div class="instructions__body pt-[70px] hidden" id="sellerLargerBoatInspectionFeeSection">
                        <!-- Instructions Item -->
                        <div class="instructions__item">
                            <!-- Instructions Text -->
                            <p class="fees-check__title font-roboto font-normal text-lg  text-blue pb-2">
                                We will process the details and send you an email with the right price.
                            </p>
                            <!-- Instructions Input -->
                            <p class="fees-check__fild bg-[#F4F4F4] w-full sm:w-[344px] inline-block font-roboto font-normal text-lg  text-[#231F20] rounded outline-none p-4">$?</p>
                            <p class="font-roboto italic text-[10px] leading-8  text-[#323647] opacity-50">
                                * Price Includes TAX
                            </p>
                        </div>
                    </div>

                    <div class="pre-purchase-ins-fees pt-16 hidden" id="prePurchaseInspectionFees">
                        <!-- Vehicle Heading -->
                        <div class="vehicle__heading">
                            <!-- Vehicle Title -->
                            <h2 class="vehicle__title font-roboto text-3xl font-semibold  text-blue ">
                                Who will be paying pre-purchase inspection Fee?
                            </h2>
                            <!-- Vehicle Sub-title -->
                            <h5 class="vehicle__sub-title font-roboto text-sm font-normal  text-blue ">
                                If you do not wish to facilitate pre-purchase Inspection, select ‘Skip & Next’
                            </h5>
                        </div>
                        <!-- Vehicle Card -->
                        <div class="vehicle__card grid pt-4">
                            <!-- Vehicle List -->
                            <ul class="vehicle__list grid grid-cols-1 sm:grid-cols-2 space-y-6 sm:space-y-0 sm:gap-[30px]">
                                <!-- Vehicle Item -->
                                <li class="vehicle__item relative flex flex-col items-center">
                                    <input class="pre-inspection-fees-payer sr-only peer" type="radio" x-model="inspection_data.who_will_pay" value="inspection-buyer" name="pre-inspection-fees-payer" id="fees-payer-pre-inspection-buyer">
                                    @error('who_will_pay') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                    <!-- Drop Off to my door Section -->
                                    <label
                                    class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg  bg-white p-5 peer-checked:bg-primary border border-primary cursor-pointer w-full rounded-md peer-checked:text-white   flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                    for="fees-payer-pre-inspection-buyer">
                                Buyer
                                    </label>
                                </li>
                                <!-- Vehicle Item -->
                                <li class="vehicle__item relative flex flex-col">
                                    <input class="pre-inspection-fees-payer sr-only peer" type="radio" x-model="inspection_data.who_will_pay" value="inspection-seller" name="pre-inspection-fees-payer" id="fees-payer-pre-inspection-seller">
                                    @error('who_will_pay') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                    <!-- Drop Off to my nearby depo Section -->
                                    <label
                                        class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg  bg-white p-5 peer-checked:bg-primary border  border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 peer-hover:bg-primary peer-hover:text-secondary transition-all ease-in-out duration-300"
                                        for="fees-payer-pre-inspection-seller">
                                        Seller
                                    </label>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="button flex justify-end gap-4 sm:gap-10 pt-[70px]">
                        <!-- Skip & Next -->
                        <button @click.prevent="tab = 'finance'; window.location.hash = 'finance'; completed_tabs.push('inscpection');"
                    class="otp__btn-started group flex justify-center items-center text-center w-[137px] py-[10px] text-primary bg-transparent font-sans text-base leading-[18px] font-semibold rounded border-2 border-primary  hover:text-white hover:bg-primary transition-all ease-in-out duration-500">
                    <span class="inline-block pl-1 icon">
                        <svg width="21" height="21" class="rotate-180 fill-primary group-hover:fill-secondary"
                            viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.0128 3.76384L16.0132 3.76381L16.0118 3.75366C15.9604 3.37524 15.6363 3.08364 15.2438 3.08364C14.8158 3.08364 14.4688 3.43062 14.4688 3.85864V17.6086H14.4685L14.4691 17.6186L14.4748 17.7035L14.4745 17.7035L14.4758 17.7137C14.5272 18.092 14.8513 18.3836 15.2438 18.3836C15.6718 18.3836 16.0188 18.0367 16.0188 17.6086V3.85864H16.0191L16.0185 3.84864L16.0128 3.76384ZM5.29701 3.24264L5.29728 3.24233L5.28837 3.23572C4.98486 3.01053 4.55438 3.0354 4.27914 3.31064C3.97649 3.61329 3.97649 4.104 4.27914 4.40665L10.6061 10.7336L4.27914 17.0607L4.27886 17.0604L4.27167 17.0687L4.21116 17.1388L4.21085 17.1385L4.20423 17.1474C3.97904 17.4509 4.00389 17.8814 4.27915 18.1566C4.58181 18.4593 5.07251 18.4593 5.37516 18.1566L12.2501 11.2816L12.2504 11.2819L12.2576 11.2736L12.3181 11.2035L12.3184 11.2038L12.325 11.1949C12.5503 10.8914 12.5254 10.4609 12.2501 10.1857C12.2501 10.1857 12.2501 10.1856 12.2501 10.1856L5.37516 3.31064L5.37544 3.31035L5.36711 3.30316L5.29701 3.24264Z"
                                stroke="#231F20" stroke-width="0.3" />
                        </svg>
                    </span>
                    Skip & Next
                    </button>
                        <!-- Add & Next -->
                        <button
                            @click="validateAndGoNextStep('inspection', inspection_data)"
                            x-on:notify-inspection-seller.window="tab = 'transport'; window.location.hash = 'transport'; completed_tabs.push('inspection');"
                        {{-- @click.prevent="tab = 'finance'; window.location.hash = 'finance'; completed_tabs.push('inspection');" --}}
                        class="add-next-btn group flex justify-center items-center text-center w-[137px] py-[10px] text-primary bg-transparent font-sans text-base leading-[18px] font-semibold rounded border-2 border-primary  hover:text-white hover:bg-primary transition-all ease-in-out duration-500 disabled:opacity-30 disabled:cursor-not-allowed disabled:hover:bg-transparent disabled:hover:text-primary" disabled>
                        Add & Next
                        <span class="inline-block pl-1 icon">
                            <svg width="21" height="21" class="fill-primary group-hover:fill-secondary disabled:group-hover:rotate-90" disabled
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
        <!-- Inspection Form Ends -->
    </div>


@include('common_sections.common_faqs')
@include('common_sections.form_vehicle_info')

