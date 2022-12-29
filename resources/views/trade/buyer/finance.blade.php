@include('trade.common.nav')

<div x-data="{
    finance_data: {
        borrow_amount: '',
        residential_status: '',
        time_at_current_address: '',
        employment_status: '',
        residency_status: '',
        credit_score: '',
    }
}">
     <!-- Back Section Starts -->
     <div class="pt-10 pb-2 back">
        <div class="px-5 mx-auto lg:container lg:max-w-screen-2xl md:px-8 lg:px-15">
            <!-- Back Page -->
            <div class="btn__back">
                <!-- Back Icon -->
                <button @click.prevent="tab = 'inspection'; window.location.hash = 'inspection'"
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



    <!-- Purchase Section Starts -->
    <div class="pb-16 purchase__body">
        <div class="px-5 mx-auto lg:container lg:max-w-screen-2xl md:px-8 lg:px-15">
            <!-- Purchase Heading -->
            <div class="purchase__heading pb-[30px]">
                <h2 class="text-3xl font-semibold purchase__title font-roboto text-blue">
                    How much are you looking to borrow for this purchase?
                </h2>
                <!-- Purchase Sub Title -->
                <h5 class="pt-1 text-sm font-normal purchase__sub-title font-roboto text-blue">
                    Lorem ipsum is simply dummy text
                </h5>
            </div>
            <!-- Purchase Form -->
            <div class="purchase__form">

                <div class="relative flex flex-wrap items-center border rounded bg-card border-primary">
                    <!-- Dolor Sign -->
                    <label for="amount" class="absolute top-0 left-0 px-3 py-4 text-3xl font-semibold font-roboto text-secondary bg-primary">
                        $
                    </label>
                    <!-- Amount Fild -->
                    <input x-model="finance_data.borrow_amount" class="w-full py-4 text-3xl font-normal rounded-md outline-none font-roboto px-14 placeholder:text-blue placeholder:opacity-30" type="number" name="amount" id="amount" placeholder="50,655">
                </div>
                @error('borrow_amount') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>
    <!-- Purchase Section Ends -->

    <!-- Residential Status Section Starts -->
    <div class="residential__status" id="residentialStatusSection">
        <div class="px-5 mx-auto lg:container lg:max-w-screen-2xl md:px-8 lg:px-15">
            <!-- Status Heading -->
            <div class="status__heading">
                <!-- Status Title -->
                <h2 class="text-3xl font-semibold status__title font-roboto text-blue">
                    How’s your residential status?
                </h2>
                <!-- Status Sub-title -->
                <h5 class="text-sm font-normal status__sub-title font-roboto text-blue">
                    Lorem ipsum is simply dummy text
                </h5>
            </div>
            <!-- Status Card -->
            <div class="status__card grid pt-[30px]">
                <!-- Card List -->
                <ul class="card__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-[30px]">
                    <!-- Card Item -->
                    <li class="relative flex flex-col items-center card__item">
                        <input class="sr-only residential-status peer" type="radio" name="residential-status" x-model="finance_data.residential_status"  id="home-outright" value="10">
                        @error('residential_status') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        <!--  Own home outright Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="home-outright">
                            Own home outright
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="relative flex flex-col card__item">
                        <input class="sr-only residential-status peer" type="radio" name="residential-status" x-model="finance_data.residential_status"  id="mortgage" value="8">
                        @error('residential_status') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        <!-- Own with a mortgage Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="mortgage">
                            Own with a mortgage
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="relative flex flex-col card__item">
                        <input class="sr-only residential-status peer" type="radio" name="residential-status" x-model="finance_data.residential_status"  id="renting" value="6">
                        @error('residential_status') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        <!-- Renting Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="renting">
                            Renting
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="relative flex flex-col card__item">
                        <input class="sr-only residential-status peer" type="radio" name="residential-status" x-model="finance_data.residential_status"  id="parents" value="4">
                        @error('residential_status') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        <!-- With parents Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="parents">
                            With parents
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="relative flex flex-col card__item">
                        <input class="sr-only residential-status peer" type="radio" name="residential-status" x-model="finance_data.residential_status"  id="boarding" value="3">
                        @error('residential_status') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        <!-- Boarding Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="boarding">
                            Boarding
                        </label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Residential Status Section Ends -->

    <!-- Current Address Section Starts -->
    <div class="hidden pt-16 current__address" id="currentAddressSection">
        <div class="px-5 mx-auto lg:container lg:max-w-screen-2xl md:px-8 lg:px-15">
            <!-- Address Heading -->
            <div class="address__heading">
                <!-- Heading Title -->
                <h2 class="text-3xl font-semibold heading__title font-roboto text-blue">
                    Time at the current address?
                </h2>
                <!-- Heading Sub-title -->
                <h5 class="text-sm font-normal heading__sub-title font-roboto text-blue">
                    Lorem ipsum is simply dummy text
                </h5>
            </div>
            <!-- Address Card -->
            <div class="address__card grid pt-[30px]">
                <!-- Card List -->
                <ul class="card__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-[30px]">
                    <!-- Card Item -->
                    <li class="relative flex flex-col items-center card__item">
                        <input class="sr-only current-address peer" type="radio" name="current-address" x-model="finance_data.time_at_current_address" id="less-12-months" value="3">
                        @error('time_at_current_address') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        <!--  Less than 12 months Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="less-12-months">
                            Less than 12 months
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="relative flex flex-col card__item">
                        <input class="sr-only current-address peer" type="radio" name="current-address" x-model="finance_data.time_at_current_address" id="1-year" value="4">
                        @error('time_at_current_address') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        <!-- 1 year Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="1-year">
                            1 year
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="relative flex flex-col card__item">
                        <input class="sr-only current-address peer" type="radio" name="current-address" x-model="finance_data.time_at_current_address" id="2-year" value="6">
                        @error('time_at_current_address') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        <!-- 2 year Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="2-year">
                            2 year
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="relative flex flex-col card__item">
                        <input class="sr-only current-address peer" type="radio" name="current-address" x-model="finance_data.time_at_current_address" id="3-year" value="8">
                        @error('time_at_current_address') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        <!-- 3 year Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="3-year">
                            3 year
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="relative flex flex-col card__item">
                        <input class="sr-only current-address peer" type="radio" name="current-address" x-model="finance_data.time_at_current_address" id="3+year" value="10">
                        @error('time_at_current_address') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        <!-- 3+ year Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="3+year">
                            3+ year
                        </label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Current Address Section Ends -->

    <!-- Employment status Section Starts -->
    <div class="hidden pt-16 employment__status" id="employmentStatusSection">
        <div class="px-5 mx-auto lg:container lg:max-w-screen-2xl md:px-8 lg:px-15">
            <!-- Status Heading -->
            <div class="status__heading">
                <!-- Heading Title -->
                <h2 class="text-3xl font-semibold heading__title font-roboto text-blue">
                    Your employment status?
                </h2>
                <!-- Heading Sub-title -->
                <h5 class="text-sm font-normal heading__sub-title font-roboto text-blue">
                    Lorem epsum is simply dummy text
                </h5>
            </div>
            <!-- Status Card -->
            <div class="status__card grid pt-[30px]">
                <!-- Card List -->
                <ul class="card__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-[30px]">
                    <!-- Card Item -->
                    <li class="relative flex flex-col items-center card__item">
                        <input class="sr-only employment-status peer" type="radio" name="employment-status" x-model="finance_data.employment_status" id="full" value="10">
                        @error('employment_status') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        <!--   Full time Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="full">
                            Full time
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="relative flex flex-col card__item">
                        <input class="sr-only employment-status peer" type="radio" name="employment-status" x-model="finance_data.employment_status" id="part" value="8">
                        @error('employment_status') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        <!-- Part time Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="part">
                            Part time
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="relative flex flex-col card__item">
                        <input class="sr-only employment-status peer" type="radio" name="employment-status" x-model="finance_data.employment_status" id="self" value="6">
                        @error('employment_status') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        <!-- Self-employed Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="self">
                            Self-employed
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="relative flex flex-col card__item">
                        <input class="sr-only employment-status peer" type="radio" name="employment-status" x-model="finance_data.employment_status" id="casual" value="4">
                        @error('employment_status') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        <!-- Casual Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="casual">
                            Casual
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="relative flex flex-col card__item">
                        <input class="sr-only employment-status peer" type="radio" name="employment-status" x-model="finance_data.employment_status" id="centrallink" value="3">
                        @error('employment_status') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        <!-- Centrallink Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="centrallink">
                            Centrallink
                        </label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Employment status Section Ends -->

    <!-- Residency status Section Starts -->
    <div class="hidden pt-16 residency__status" id="residencyStatusSection">
        <div class="px-5 mx-auto lg:container lg:max-w-screen-2xl md:px-8 lg:px-15">
            <!-- Status Heading -->
            <div class="status__heading">
                <!-- Heading Title -->
                <h2 class="text-3xl font-semibold heading__title font-roboto text-blue">
                    Your residency status?
                </h2>
                <!-- Heading Sub-title -->
                <h5 class="text-sm font-normal heading__sub-title font-roboto text-blue">
                    Lorem ipsum is simply dummy text
                </h5>
            </div>
            <!-- Status Card -->
            <div class="status__card grid pt-[30px]">
                <!-- Card List -->
                <ul class="card__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-[30px]">
                    <!-- Card Item -->
                    <li class="relative flex flex-col items-center card__item">
                        <input class="sr-only residency-status peer" type="radio" name="residency-status" x-model="finance_data.residency_status" id="australian" value="10">
                        @error('residency_status') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        <!--   Australian Citizen Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="australian">
                            Australian citizen
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="relative flex flex-col card__item">
                        <input class="sr-only residency-status peer" type="radio" name="residency-status" x-model="finance_data.residency_status" id="permanent" value="10">
                        @error('residency_status') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        <!-- Permanent residents Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="permanent">
                            Permanent residents
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="relative flex flex-col card__item">
                        <input class="sr-only residency-status peer" type="radio" name="residency-status" x-model="finance_data.residency_status" id="working" value="7">
                        @error('residency_status') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        <!-- Working Visa Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="working">
                            Working visa
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="relative flex flex-col card__item">
                        <input class="sr-only residency-status peer" type="radio" name="residency-status" x-model="finance_data.residency_status" id="student" value="3">
                        @error('residency_status') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        <!-- Student Visa Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="student">
                            Student visa
                        </label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Residency status Section Ends -->

    <!-- Credit Score Section Starts -->
    <div class="hidden pt-16 credit__score" id="creditScoreSection">
        <div class="px-5 mx-auto lg:container lg:max-w-screen-2xl md:px-8 lg:px-15">
            <!-- Score Heading -->
            <div class="score__heading">
                <!-- Heading Title -->
                <h2 class="text-3xl font-semibold heading__title font-roboto text-blue">
                    What would be your credit score (Best guess)?
                </h2>
                <!-- Heading Sub-title -->
                <h5 class="text-sm font-normal heading__sub-title font-roboto text-blue">
                    Lorem ipsum is simply dummy text
                </h5>
            </div>
            <!-- Score Card -->
            <div class="score__card grid pt-[30px]">
                <!-- Card List -->
                <ul class="card__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-[30px]">
                    <!-- Card Item -->
                    <li class="relative flex flex-col card__item">
                        <input class="sr-only credit-score peer" type="radio" name="credit-score" x-model="finance_data.credit_score" id="excellent" value="10">
                        @error('credit_score') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        <!-- Excellent Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="excellent">
                            Excellent
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="relative flex flex-col card__item">
                        <input class="sr-only credit-score peer" type="radio" name="credit-score" x-model="finance_data.credit_score" id="good" value="8">
                        @error('credit_score') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        <!-- Good Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="good">
                            Good
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="relative flex flex-col card__item">
                        <input class="sr-only credit-score peer" type="radio" name="credit-score" x-model="finance_data.credit_score" id="average" value="5">
                        @error('credit_score') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        <!-- Average Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="average">
                            Average
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="relative flex flex-col card__item">
                        <input class="sr-only credit-score peer" type="radio" name="credit-score" x-model="finance_data.credit_score" id="poor" value="2">
                        @error('credit_score') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        <!-- Poor Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="poor">
                            Poor
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="relative flex flex-col card__item">
                        <input class="sr-only credit-score peer" type="radio" name="credit-score" x-model="finance_data.credit_score" id="not-sure" value="8">
                        @error('credit_score') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                        <!-- Not sure Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-medium text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="not-sure">
                            Not sure
                        </label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Credit Score Section Ends -->


    <!-- Estimated Form Starts -->
    <div class="estimated__form pt-[106px]">
        <div class="px-5 mx-auto lg:container lg:max-w-screen-2xl md:px-8 lg:px-15">
            <!-- Estimated Body -->
            <div class="estimated__body pb-[70px] hidden" id="estimatedSection">
                <!-- Body Item -->
                <div class="body__item">
                    <!-- Body Text -->
                    <p class="pb-2 text-lg font-normal fees-check__title font-roboto text-blue">
                        Based on information provided, your estimated rate would be:
                    </p>
                    <!-- Body Input -->
                    <span class="percentage-fees-check__fild bg-[#F4F4F4] w-full sm:w-[344px] inline-block font-roboto font-semibold text-lg  text-[#231F20] rounded outline-none p-4">
                        2.99%-4.49%
                    </span>
                    <!-- Body TAX -->
                    <p class="font-roboto italic text-[10px] leading-8  text-blue opacity-50">
                        * Our team would try to get better than this but we need more information
                    </p>
                </div>
            </div>
            <!-- Button -->
            <div class="button pb-[106px] flex justify-end gap-4 sm:gap-10">
                <!-- Skip & Next -->
                <button @click.prevent="tab = 'transport'; window.location.hash = 'transport'; completed_tabs.push('finance');"
                class="otp__btn-started group flex justify-center items-center text-center w-[137px] py-[10px] text-primary bg-transparent font-sans text-base leading-[18px] font-semibold rounded border-2 border-primary capitalize hover:text-white hover:bg-primary transition-all ease-in-out duration-500">
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
                    {{-- @click.prevent="tab = 'transport'; window.location.hash = 'transport'; completed_tabs.push('finance');" --}}
                    @click="validateAndGoNextStep('finance', finance_data)"
                    x-on:notify-finance.window="tab = 'transport'; window.location.hash = 'transport'; completed_tabs.push('finance');"
                    class="add-next-btn group flex justify-center items-center text-center w-[137px] py-[10px] text-primary bg-transparent font-sans text-base leading-[18px] font-semibold rounded border-2 border-primary capitalize hover:text-white hover:bg-primary transition-all ease-in-out duration-500 disabled:opacity-30 disabled:cursor-not-allowed disabled:hover:bg-transparent disabled:hover:text-primary" disabled>
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
            <!-- Button -->
        </div>
    </div>
    <!-- Estimated Form Ends -->

</div>

@include('common_sections.common_faqs')
@include('common_sections.form_vehicle_info')
