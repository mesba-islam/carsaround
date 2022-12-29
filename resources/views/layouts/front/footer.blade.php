        <!-- Footer Section Starts -->
        <footer class="footer bg-primary">
            <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 lg:px-14">
                <!-- Footer Call to Action -->
                <div class="footer__cta text-center py-10">
                    <h2 class="footer__cta--title text-3xl f font-bold text-white lg:px-20 xl:px-56">Anything around a vehicle’s need, it’s us
                    </h2>
                    <p
                        class="footer__cta--decs text-white font-roboto font-normal text-base pt-2 pb-6 lg:px-36 xl:px-96">
                        Get started now to initiate your trade
                    </p>
                    <a href="{{ route('trade.create') }}"
                        class="footer__cta--btn inline-block w-40 text-center text-white bg-transparent f text-base leading-[18px] font-semibold px-6 py-[14px] border-2 border-white hover:bg-white hover:text-primary rounded transition ease-in-out duration-500">
                        Get Started
                    </a>
                </div>
            </div>
            <!-- hr -->
            <hr class="opacity-40">
            <div class="lg:container mx-auto lg:max-w-screen-2xl py-10 px-5 lg:px-14">
                <!-- Footer Menu -->
                <div class="footer__menu flex flex-wrap text-white">
                    <!-- Footer Menu Description -->
                    <div class="footer__menu--decs w-full lg:w-1/4 mb-6 lg:mb-0">
                        <!-- Footer Logo -->
                        <a class="footer--logo" href="{{ url('/') }}">
                            <img src="{{ asset('/assets/img/logo/logo_footer.png') }}" alt="Logo">
                        </a>
                        <!-- Footer Text -->
                        <p class="footer--text py-6 f text-sm leading-[20px] lg:pr-20">Carsaround is an all in all platform for everything around a vehicle’s needs, securely connecting buyers and sellers.</p>
                        <!-- Footer Social Icon -->
                        <ul class="footer--social flex flex-wrap gap-5">
                            <li class="social--list">
                                <a href="https://www.facebook.com/carsaroundau" target="_blank" class="list--item hover:opacity-50"><i
                                        class="fa-brands fa-facebook-square"></i></a>
                            </li>
                            <li class="social--list">
                                <a href="https://twitter.com/carsaround_au" target="_blank" class="list--item hover:opacity-50"><i
                                        class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li class="social--list">
                                <a href="https://www.instagram.com/carsaround_au/" target="_blank" class="list--item hover:opacity-50"><i
                                        class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li class="social--list">
                                <a href="https://www.linkedin.com/company/carsaround" target="_blank" class="list--item hover:opacity-50"><i
                                        class="fa-brands fa-linkedin"></i></a>
                            </li>
                        </ul>
                        <!-- Footer Button -->
                    </div>
                    <!-- Footer Middle Box -->
                    <div class="footer__menu__box w-full xxs:w-1/2 sm:w-1/3 lg:w-1/4">
                        <div class="footer__menu--inner">
                            <h5 class="box-title font-roboto font-medium leading-[20px]">Services</h5>
                            <ul class="box__list pt-6 text-sm leading-[22px] space-y-1">
                                <li class="list__item"><a href="{{ route('safe_settlement') }}"
                                        class="hover:opacity-50">Safe Settlement</a></li>
                                <li class="list__item"><a
                                        href="{{ route('pre_purchase_inspection') }}"
                                        class="hover:opacity-50">Pre-Purchase Inspection</a></li>
                                <li class="list__item"><a href="{{ route('vehicle_finance') }}"
                                        class="hover:opacity-50">Vehicle Finance</a></li>
                                <li class="list__item"><a href="{{ route('vehicle_tranport') }}"
                                        class="hover:opacity-50">Vehicle Transport</a></li>
                                <li class="list__item"><a href="{{ route('pricing') }}"
                                        class="hover:opacity-50">Pricing</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Last Box -->
                    <div class="footer__menu__box mt-6 xxs:mt-0 w-full xxs:w-1/2 sm:w-1/3 lg:w-1/4">
                        <div class="footer__menu--inner">
                            <h5 class="box-title font-roboto font-medium leading-[20px]">About Us</h5>
                            <ul class="box__list pt-6 text-sm leading-[22px] space-y-1">
                                <li class="list__item"><a href="{{ route('about_us') }}"
                                        class="hover:opacity-50">About
                                        Carsaround</a></li>
                                <li class="list__item"><a href="{{ route('contact_us') }}"
                                        class="hover:opacity-50">Contact Us</a></li>
                                <li class="list__item"><a href="{{ route('support') }}"
                                        class="hover:opacity-50">Support</a></li>

                                <li class="list__item"><a href="{{ route('legal') }}"
                                        class="hover:opacity-50">Legal</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer__menu__box mt-6 sm:mt-0 w-full xxs:w-1/2 sm:w-1/3 lg:w-1/4">
                        <div class="footer__menu--inner">
                            <h5 class="box-title font-roboto font-medium leading-[20px]">More From Us</h5>
                            <ul class="box__list pt-6 text-sm leading-[22px] space-y-1">
                                <li class="list__item"><a href="{{ route('community') }}"
                                        class="hover:opacity-50">Carsaround Community</a></li>
                                <li class="list__item"><a href="{{ route('news_research') }}"
                                        class="hover:opacity-50">News & Research</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Copyright -->
            <div class="copyright  text-center  text-secondary text-sm">
                <hr class="opacity-30">
                <p class="py-4">&copy; 2022 All Rights Reserved by
                    <a href="{{ url('/') }}" class="hover:opacity-80">Carsaround</a>
                </p>
            </div>
        </footer>
        <!-- Footer Section Ends -->
