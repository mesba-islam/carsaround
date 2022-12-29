
    <nav x-data="accordion(6)" class="fixed top-0 z-[9999]  shadow-lg  w-full px-4 tracking-wide bg-primary py-4 md:px-8 ">

        <div class="lg:container mx-auto lg:max-w-screen-2xl flex flex-wrap items-center justify-between lg:px-15">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="text-3xl tracking-wide">
                    <img src="{{ ('/assets/img/logo/logo.png') }}" alt="logo">
                </a>
            </div>
            <div @click="handleClick()" x-data="{open : false}" class="block text-white cursor-pointer lg:hidden">
                <button @click="open = ! open" class="w-6 h-6 text-lg">
                    <svg x-show="! open" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"
                        :clas="{'transition-full each-in-out transform duration-500':! open}">
                        <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect>
                        <path d="M7.94977 11.9498H39.9498" stroke="currentColor" stroke-width="4" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path d="M7.94977 23.9498H39.9498" stroke="currentColor" stroke-width="4" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path d="M7.94977 35.9498H39.9498" stroke="currentColor" stroke-width="4" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>

                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>

            <div x-ref="tab" :style="handleToggle()"
                class="relative w-full overflow-hidden transition-all duration-700 lg:hidden max-h-0">
                <div class="flex flex-col my-4 pt-4 space-y-4 text-lg  text-white">
                    <a href="{{ route('services') }}" class="text-sm text-white hover:opacity-80 duration-500">Services</a>
                    <a href="{{ route('pricing') }}" class="text-sm text-white hover:opacity-80 duration-500">Pricing</a>
                    <a href="{{ route('contact_us') }}" class="text-sm text-white hover:opacity-80 duration-500">Contact Us</a>
                    <a href="{{ route('community') }}" class="text-sm text-white hover:opacity-80 duration-500">Community</a>
                    <a href="{{ route('login') }}"
                        class="text-sm f font-normal bg-white hover:bg-opacity-80 text-black inline-block text-center py-2 w-[91px] border-[1px] leading-6 rounded transition-all ease-in-out duration-500">
                        Login
                    </a>
                </div>

            </div>

            <div class="hidden w-full lg:flex lg:items-center lg:w-auto">
                <div class="items-center flex-1 pt-6 justify-center text-lg text-gray-500 lg:pt-0 list-reset lg:flex">
                    <div class="mr-8">
                        <a href="{{ route('services') }}" class="text-sm text-white hover:opacity-80 duration-500">Services</a>
                    </div>
                    <div class="mr-8">
                        <a href="{{ route('pricing') }}" class="text-sm text-white hover:opacity-80 duration-500">Pricing</a>
                    </div>
                    <div class="mr-8">
                        <a href="{{ route('contact_us') }}" class="text-sm text-white hover:opacity-80 duration-500">Contact Us</a>
                    </div>
                    <div class="mr-8">
                        <a href="{{ route('community') }}" class="text-sm text-white hover:opacity-80 duration-500">Community</a>
                    </div>
                </div>
            </div>
            <div class="hidden w-full lg:flex lg:items-center lg:w-auto">
                <div class="items-center flex-1 pt-6 justify-center text-lg text-gray-500 lg:pt-0 list-reset lg:flex">
                    <a href="{{ route('login') }}"
                        class="text-sm f font-normal bg-white hover:bg-opacity-80 text-black inline-block text-center py-2 w-[91px] border-[1px] leading-6 rounded transition-all ease-in-out duration-500">
                        Login
                    </a>
                </div>
            </div>
        </div>
    </nav>
