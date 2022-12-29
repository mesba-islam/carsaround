<nav>
    <!-- Loan Tab Section Starts -->
    <div class="loan__tab bg-[#E6E6E6] mt-[52px] py-12">
        <div class="lg:container mx-auto px-5 md:px-8 lg:px-15">
            <!-- Tab Body -->
            <div class="tab__body">
                <!-- Tab List -->
                <div
                    class="grid grid-cols-1 gap-4 space-y-6 tab__list xs:grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 xs:space-y-0 sm:space-y-0 sm:gap-6 md:gap-20">
                    <!-- Tab Item 1 -->
                    <div class="tab__item">
                        <!-- Item Name -->
                        <div class="pb-1 item__name">
                            <h2
                                class="font-inter font-normal text-xl tracking-[0.25px] uppercase"
                                :class="{
                                    'text-[#242634]': completed_tabs.indexOf('personal_details') !== -1,
                                    'font-medium' : completed_tabs.indexOf('personal_details') !== -1,
                                    'opacity-50' : completed_tabs.indexOf('personal_details') !== -1 && tab !== 'personal_details',
                                }">
                                <a @click.prevent="tab = 'personal_details'; window.location.hash = 'personal_details';" href="#">Personal Details</a>
                            </h2>
                        </div>
                        <!-- Item Bar -->
                        <div class="w-full bg-white h-2 item__bar rounded-2xl" :class="{
                            'bg-[#231F20]': tab === 'personal_details' || tab === 'send_otp' || tab === 'verify_otp' || completed_tabs.indexOf('personal_details') !== -1,
                            'opacity-50' : completed_tabs.indexOf('personal_details') !== -1 && tab !== 'personal_details'
                        }">
                        </div>
                    </div>
                    <!-- Tab Item 2 -->
                    <div class="tab__item">
                        <!-- Item Name -->
                        <div class="pb-1 item__name">
                            <h2
                                class="font-inter font-normal text-xl tracking-[0.25px] uppercase"
                                :class="{
                                    'text-[#242634]': completed_tabs.indexOf('safe_settlement') !== -1,
                                    'font-medium' : completed_tabs.indexOf('safe_settlement') !== -1,
                                    'opacity-50' : completed_tabs.indexOf('safe_settlement') !== -1 && tab !== 'safe_settlement',
                                }">
                                <a @click.prevent="tab = 'safe_settlement'; window.location.hash = 'safe_settlement';" href="#">Safe Settlement</a>
                            </h2>
                        </div>
                        <!-- Item Bar -->
                        <div class="w-full bg-white h-2 item__bar rounded-2xl" :class="{
                            'bg-[#231F20]': tab === 'safe_settlement' || completed_tabs.indexOf('safe_settlement') !== -1,
                            'opacity-50' : completed_tabs.indexOf('safe_settlement') !== -1 && tab !== 'safe_settlement',
                        }">
                        </div>
                    </div>
                    <!-- Tab Item 3 -->
                    <div class="tab__item">
                        <!-- Item Name -->
                        <div class="pb-1 item__name">
                            <h2 class="font-inter font-normal text-xl text-primary tracking-[0.25px] uppercase"
                                :class="{
                                    'text-[#242634]': completed_tabs.indexOf('inspection') !== -1,
                                    'font-medium' : completed_tabs.indexOf('inspection') !== -1,
                                    'opacity-50' : completed_tabs.indexOf('inspection') !== -1 && tab !== 'inspection',
                                }">
                                <a @click.prevent="tab = 'inspection'; window.location.hash = 'inspection';" href="#">Inspection</a>
                            </h2>
                        </div>
                        <!-- Item Bar -->
                        <div class="w-full bg-white h-2 item__bar rounded-2xl" :class="{
                            'bg-[#231F20]': tab === 'inspection' || completed_tabs.indexOf('inspection') !== -1,
                            'opacity-50' : completed_tabs.indexOf('inspection') !== -1 && tab !== 'inspection',
                        }">
                        </div>
                    </div>
                    <!-- Tab Item 4 -->
                    <div x-show="user_type=='buyer'" class="tab__item">
                        <!-- Item Name -->
                        <div class="pb-1 item__name">
                            <h2
                                class="font-inter font-normal text-xl text-primary opacity-50 tracking-[0.25px] uppercase"
                                :class="{
                                    'text-[#242634]': completed_tabs.indexOf('finance') !== -1,
                                    'font-medium' : completed_tabs.indexOf('finance') !== -1,
                                    'opacity-50' : completed_tabs.indexOf('finance') !== -1 && tab !== 'finance',
                                }">
                                <a @click.prevent="tab = 'finance'; window.location.hash = 'finance';" href="#">Finance</a>
                            </h2>
                        </div>
                        <!-- Item Bar -->
                        <div class="w-full h-2 bg-white item__bar rounded-2xl" :class="{
                            'bg-[#231F20]': tab === 'finance' || completed_tabs.indexOf('finance') !== -1,
                            'opacity-50' : completed_tabs.indexOf('finance') !== -1 && tab !== 'finance',
                        }">
                        </div>
                    </div>
                    <!-- Tab Item 5 -->
                    <div class="tab__item">
                        <!-- Item Name -->
                        <div class="pb-1 item__name">
                            <h2
                                class="font-inter font-normal text-xl text-primary opacity-50 tracking-[0.25px] uppercase"
                                :class="{
                                    'text-[#242634]': completed_tabs.indexOf('transport') !== -1,
                                    'font-medium' : completed_tabs.indexOf('transport') !== -1,
                                    'opacity-50' : completed_tabs.indexOf('transport') !== -1 && tab !== 'transport',
                                }">
                                <a @click.prevent="tab = 'transport'; window.location.hash = 'transport';" href="#">Transport</a>
                            </h2>
                        </div>
                        <!-- Item Bar -->
                        <div class="w-full h-2 bg-white item__bar rounded-2xl" :class="{
                            'bg-[#231F20]': tab === 'transport' || completed_tabs.indexOf('transport') !== -1,
                            'opacity-50' : completed_tabs.indexOf('transport') !== -1 && tab !== 'transport',
                        }">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </nav>
