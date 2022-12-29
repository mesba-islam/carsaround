    <!-- Contact-content Section Starts -->
    <div class="contact-content py-[106px]">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-10 lg:px-15">
            <!-- Contact Heading -->
            <div class="contact__heading">
                <h2 class="heading__title font-roboto text-3xl font-semibold text-blue">
                    Are you buying or selling?
                </h2>
            </div>
            <!-- Contact Card -->
            <div class="contact__card pt-[30px]">
                <ul class="grid grid-cols-1 gap-4 space-y-6 sm:grid-cols-2 sm:space-y-0 sm:gap-6 md:gap-14 xl:gap-44">
                    <li class="relative">
                        <input class="sr-only peer" x-model="user_type" type="radio" name="user_type" id="buying"
                            value="buyer">
                        <!-- Buying Section -->
                        <label
                            class="inline-block w-full border border-primary p-5 text-lg font-semibold text-center capitalize transition-all duration-300 ease-in-out rounded-md cursor-pointer font-roboto text-primary  peer-hover:bg-primary peer-hover:text-secondary peer-checked:bg-primary peer-checked:text-secondary"
                            for="buying">Buying</label>
                    </li>
                    <li class="relative flex md:justify-end">
                        <input class="sr-only peer" x-model="user_type" type="radio" name="user_type" id="selling"
                            value="seller">
                        <!-- Selling Section -->
                        <label
                            class="inline-block w-full border border-primary p-5 text-lg font-semibold text-center capitalize transition-all duration-300 ease-in-out rounded-md cursor-pointer font-roboto text-primary  peer-hover:bg-primary peer-hover:text-secondary peer-checked:bg-primary peer-checked:text-secondary"
                            for="selling">Selling
                        </label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Services Section Ends -->

    <div class="pb-24">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-10 lg:px-15">
            <div class="buyer__text">
                <h2 class="buyer__title font-roboto text-3xl font-bold text-blue">
                    Start by pasting vehicle link below
                </h2>
                <p class="buyer__doc font-roboto text-sm font-normal my-2 text-blue">
                    If you don’t have a link, enter info manually
                </p>
                <div class="py-4 buyer__link">
                    <input
                        class="w-full border-2 focus:border-[2px] focus:border-primary rounded-md  p-7 outline-none"
                        type="text" name="vehicle-link" id="" placeholder="Vehicle link" required>
                    {{-- @error('first_name') <span class="error text-xs text-red-600">{{ $message }}</span>
                    @enderror --}}
                </div>
                <!-- Buyer Buttons -->
                <div class="flex justify-between buyer__buttons">
                    <div class="group">
                        <!-- Button Item -->
                        <a @click.prevent="tab = 'manual_info'; window.location.hash = 'manual_info'" href="#"
                            class="flex flex-wrap items-center buyer__btn-info text-center w-[140px] my-3 text-primary font-roboto text-sm font-normal italic opacity-60 hover:transition-all ease-in-out duration-300 hover:opacity-100">
                            Enter Info Manually
                            <span class="pl-2 icon">
                                <svg width="7" height="7" viewBox="0 0 7 7" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.25632 2.45539L5.25632 6.14924C5.25632 6.47199 5.51798 6.73364 5.84073 6.73364C6.16348 6.73364 6.42514 6.47199 6.42514 6.14924L6.42514 1.08438C6.42514 0.761627 6.16348 0.499968 5.84073 0.499968L0.775868 0.499969C0.453112 0.499969 0.191461 0.761627 0.191461 1.08438C0.191461 1.40712 0.453112 1.66878 0.775868 1.66878L4.39031 1.66878L0.360573 5.73797C0.133456 5.9673 0.135257 6.33732 0.364594 6.56444C0.59393 6.79155 0.963946 6.78975 1.19106 6.56041L5.25632 2.45539Z"
                                        fill="#242634" />
                                </svg>
                            </span>
                        </a>
                    </div>
                    <!-- Button Item -->
                    <button
                        @click.prevent="tab = 'personal_details'; window.location.hash = 'personal_details';console.log(tab)"
                        class="buyer__btn-started group flex justify-center items-center text-center w-[140px] py-3 mt-20 text-primary bg-transparent font-sans text-base leading-[18px] font-semibold rounded border-2 border-primary capitalize hover:text-white hover:bg-primary transition-all ease-in-out duration-300">
                        Get started
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
    </div>
