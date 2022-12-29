

@extends('layouts.front_app')

@section('title')
    Services | Cars Around
@endsection


@section('content')


    <!-- Banner Section Starts -->
    <div
        class="banner w-full h-[250px] md:h-[300px] lg:h-[400px] bg-services-hero bg-cover bg-center bg-no-repeat flex bg-blend-multiply bg-[#231F20] bg-opacity-80">
        <div class="lg:container mx-auto lg:max-w-screen-2xl w-full px-5 md:px-8 lg:px-15 relative">
            <div class="banner__heading bottom-0 absolute pb-12">
                <!-- Hero Title -->
                <h2
                    class="heading__title text-white  font-semibold text-3xl md:text-5xl uppercase">
                    Our Services
                </h2>
            </div>
        </div>
    </div>
    <!-- Banner Section Ends -->

    <!-- Animate Section Starts -->
    <div class="animate bg-[#F0EEE6] pt-16 pb-12 mt-10">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
            <!-- Animate Title -->
            <h2 class="animate__title  font-semibold text-3xl text-[#161616] text-center">
                We Facilitate Secured Transection Nationwide
            </h2>
            <!-- Animate Description -->
            <p class="animate__desc  font-normal text-base text-primaryDark  text-center w-full md:w-[700px] lg:w-[900px] xl:w-[1100px] mx-auto mt-9">
                Etiam ut lectus at mauris congue posuere quis at augue. Integer a eros hendrerit, blandit lorem quis, semper massa. Quisque varius rutrum tortor, ut congue turpis venenatis lobortis. Nullam a aliquet massa. Etiam ullamcorper placerat leo ac ullamcorper. Fusce convallis, lectus eu hendrerit pellentesque, ante lectus mollis libero, ut blandit tortor arcu et ante. Vivamus condimentum quis sem sit amet tempus.
            </p>
            <!-- Animate car -->
            <div class="animate__car pt-24  hidden md:block">
                <svg width="175" height="64" viewBox="0 0 175 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M156.182 51.4937L156.008 52.7084C156.163 52.7868 156.369 52.8693 156.635 52.949C157.155 53.105 157.823 53.2255 158.612 53.3065C160.188 53.4681 162.149 53.4625 164.173 53.3235C166.194 53.1847 168.249 52.9149 170.006 52.5589C171.477 52.261 172.675 51.9149 173.469 51.5641L173.469 49.6843C172.834 48.856 172.533 47.8551 172.413 46.8328C172.278 45.6953 172.359 44.4588 172.503 43.259C172.593 42.5065 172.715 41.7229 172.832 40.9746C172.898 40.5462 172.963 40.1293 173.019 39.7365C173.173 38.6576 173.268 37.7216 173.226 36.9631C172.22 33.512 169.806 30.7818 166.437 28.5845C163.031 26.3633 158.701 24.7227 154.023 23.4636C147.354 21.669 140.143 20.685 134.058 19.8547C131.573 19.5157 129.276 19.2023 127.281 18.8698L127.182 18.8534L127.089 18.8157C122.118 16.7937 118.043 14.9525 114.312 13.267C106.827 9.88555 100.729 7.13054 91.5679 4.79839C73.5672 0.420123 50.5423 0.078965 27.3967 6.57923L27.5988 6.74757L28.2085 7.2556L27.7807 7.92414C23.6912 14.3151 18.7328 18.6865 14.0822 21.272L14.0778 21.2746C14.0683 21.2803 14.0528 21.2896 14.0318 21.3025C13.9896 21.3284 13.9251 21.3686 13.8407 21.423C13.6719 21.5319 13.4239 21.6976 13.1171 21.919C12.5029 22.3623 11.6561 23.0266 10.7373 23.9032C8.89396 25.6619 6.79641 28.2414 5.67408 31.5713L5.57788 31.8567L5.32925 32.0267L1.31483 34.772L1.31483 49.3578L1.31483 49.4367L1.30113 49.5143C1.17862 50.2084 1.41224 50.7362 1.97837 51.2177C2.58941 51.7374 3.55224 52.1571 4.72778 52.4736C6.52905 52.9585 8.60446 53.1436 10.0797 53.2029C9.92494 52.4052 9.80661 51.5146 9.80661 50.6128C9.80661 42.0932 16.7257 35.1538 25.0141 35.1538C33.5643 35.1538 40.2216 42.1036 40.2216 50.6128C40.2216 51.7819 40.0792 52.9393 39.9035 53.974L125.95 53.4839L125.779 51.441L125.776 51.4037L125.776 51.3662C125.776 42.857 132.435 35.9072 140.984 35.9072C149.272 35.9072 156.191 42.8466 156.191 51.3662L156.191 51.4302L156.182 51.4937ZM68.2154 4.2793L68.2254 5.17415L69.0807 5.06196L71.0891 20.3742L71.2302 21.4504L70.1465 21.3898L29.7344 19.1309L28.4838 19.061L28.949 17.8981C31.0497 12.6469 34.4937 8.70354 41.4937 5.852L41.5963 5.81021L41.7059 5.79454C50.542 4.53222 59.3784 4.02738 68.2154 4.2793ZM75.6283 21.6387L74.8868 21.6032L74.7807 20.8684L72.5697 5.55914L72.4096 4.45118L73.5261 4.5329C83.8996 5.29216 94.454 7.57359 103.838 11.3784L104.315 11.5718L104.391 12.0808L105.859 22.0129L106.019 23.096L104.926 23.0436L75.6283 21.6387ZM110.066 23.1476L109.283 23.1476L109.174 22.373L108.073 14.5448L107.85 12.9626L109.319 13.5922C112.921 15.1366 114.883 16.4851 118.892 19.2409L118.901 19.247L119.093 19.3785L119.196 19.5862C119.509 20.2121 119.661 20.908 119.434 21.5909C119.206 22.2739 118.667 22.7397 118.04 23.0527L117.85 23.1476L117.638 23.1476L110.066 23.1476Z" stroke="#231F20" stroke-width="1.8"/>
                    <path d="M129.177 51.1155C129.177 57.3946 134.376 62.5156 140.828 62.5156C147.28 62.5156 152.478 57.3946 152.478 51.1155C152.478 44.8364 147.28 39.7154 140.828 39.7154C134.376 39.7154 129.177 44.8364 129.177 51.1155Z" stroke="#231F20" stroke-width="1.8"/>
                    <path d="M12.958 50.3626C12.958 56.6251 18.2519 61.7626 24.8591 61.7626C31.467 61.7626 36.7611 56.6251 36.7611 50.3626C36.7611 44.101 31.4673 38.9635 24.8591 38.9635C18.2521 38.9635 12.958 44.101 12.958 50.3626Z" stroke="#231F20" stroke-width="1.8"/>
                    <circle cx="24.8597" cy="50.3631" r="1.44064" fill="#D9D9D9" stroke="#231F20" stroke-width="2.8"/>
                    <circle cx="140.828" cy="51.1151" r="1.44064" fill="#D9D9D9" stroke="#231F20" stroke-width="2.8"/>
                    <path d="M165.699 32.605C165.699 32.6051 165.697 32.6055 165.693 32.606C165.697 32.6052 165.699 32.6049 165.699 32.605ZM164.311 32.4212C164.188 32.3994 164.063 32.3776 163.939 32.3573C163.659 32.3114 163.359 32.2685 163.08 32.2529C162.805 32.1048 162.516 31.9869 162.232 31.8906C162.465 31.8616 162.699 31.8271 162.926 31.7845C163.046 31.7974 163.243 31.8503 163.511 31.9705C163.769 32.0864 164.046 32.2442 164.311 32.4212ZM165.334 33.3263C165.334 33.3263 165.332 33.3228 165.329 33.3162C165.333 33.3231 165.334 33.3264 165.334 33.3263Z" fill="#D9D9D9" stroke="#231F20" stroke-width="1.5"/>
                    <path d="M69.9201 3.40655L68.1925 3.38184L68.2281 5.23767L69.974 5.03909L69.9201 3.40655Z" fill="#231F20"/>
                    <path d="M12.0648 32.2027L5.52747 31.8028C6.04578 27.7786 10.6949 23.7665 13.1667 22.2168L18.4668 24.0664L18.906 27.0416C15.4745 27.4877 12.0648 29.0169 12.0648 32.2027Z" stroke="#231F20" stroke-width="1.5"/>
                    <path d="M159.557 28.7815L163.001 27.2715C168.602 29.2994 171.662 33.7122 172.284 36.1455C169.121 37.7744 160.917 35.2894 159.22 34.4972C150.998 34.2719 149.756 29.9028 149.81 29.9028L159.557 28.7815Z" stroke="#231F20" stroke-width="2"/>
                    <path d="M10.202 29.115C11.0675 26.7888 12.8548 25.4953 14.4427 25.6064" stroke="#231F20" stroke-width="1.4" stroke-linecap="round"/>
                </svg>
            </div>
            <!-- Animate Tab -->
            <div class="animate__tab hidden md:block">
                <hr class="bg-[#231F20] h-[2px]">
                <!-- Tab Item -->
                <ul class="tab__item pt-4 flex justify-around items-center">
                    <!-- Item List -->
                    <li class="item__list font-medium text-2xl text-[#231F20]   text-center">
                        Seller
                    </li>
                    <!-- Item List -->
                    <li class="item__list font-medium text-2xl text-[#231F20] text-opacity-50  ">
                        Finance
                    </li>
                    <!-- Item List -->
                    <li class="item__list font-medium text-2xl text-[#231F20] text-opacity-50  ">
                        Inspection
                    </li>
                    <!-- Item List -->
                    <li class="item__list font-medium text-2xl text-[#231F20] text-opacity-50  ">
                        Safe Settlement
                    </li>
                    <!-- Item List -->
                    <li class="item__list font-medium text-2xl text-[#231F20] text-opacity-50  ">
                        Transport
                    </li>
                    <!-- Item List -->
                    <li class="item__list font-medium text-2xl text-[#231F20] text-opacity-50  ">
                        Buyer
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Animate Section Starts -->

    <!-- Services-content Section Starts -->
    <div class="services-content py-[106px]">
        <div class="lg:container mx-auto px-5 md:px-8 lg:px-15">
            <!-- Service Card 1 -->
            <div class="services__card flex flex-wrap justify-evenly items-center lg:gap-5">
                <!-- Service Description -->
                <div class="services__card flex flex-wrap justify-around items-center gap-5">
                    <!-- Services Video -->
                    <div class="card__video w-full md:w-[49%] order-2 md:order-1 hidden md:block">
                        <!-- <img class="rounded-3xl w-full h-fit object-cover object-center"
                            src="../public/assets/img/services/services.png" alt="Video"> -->
                            <iframe class="hidden md:block w-full h-auto  aspect-video rounded-sm pt-4" src="https://www.youtube.com/embed/_bkX5VkZg8U" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope;"></iframe>
                    </div>
                    <!-- Service Description -->
                    <div class="services__description w-full md:w-[48%] order-1 md:order-2">
                        <h2 class="card__title  text-3xl font-extrabold text-primary">
                            <span class="text-secondaryDark">
                                One-stop
                            </span>
                            trade facilitating services
                        </h2>
                        <iframe class="block md:hidden w-full h-auto  aspect-video rounded-sm pt-4" src="https://www.youtube.com/embed/_bkX5VkZg8U" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope;"></iframe>

                        <p class="card__decription  text-base text-primary pt-5  opacity-70">
                            We are an integrated platform that facilitates several interconnected services to provide you with a unique and secure vehicle buying and selling opportunity. A pre-purchase inspection helps to evaluate the vehicle’s condition prior to the purchase. Vehicle finance can help you with the required fund. Safe settlement ensures the transaction is fraudulence free. Vehicle transport can deliver the vehicle to the buyer’s doorstep or nearby depo.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Service Card 2 -->
            <div class="services__card grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-[117px] pt-14 lg:pt-[106px]">
                <!-- Services Image -->
                <div class="card__img md:order-1">
                    <!-- Card Image -->
                    <img class="rounded-md w-full sm:w-[720px] h-[280px] md:h-[400px] object-cover object-center"
                        src="{{ asset('/assets/img/services/1.png') }}" alt="Services Image">
                </div>
                <!-- Service Description -->
                <div class="services__description">
                    <!-- Card Title -->
                    <h2 class="card__title text-3xl font-semibold text-primary pb-[10px]">
                        Safe Settlement
                    </h2>
                    <!-- Card Description -->
                    <p class="card__description text-base text-primary opacity-70 py-[10px]">
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution.
                    </p>
                    <!-- Card Description -->
                    <p class="card__description  text-base text-primary opacity-70 py-[10px]">
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution...
                    </p>
                    <!-- Card Description -->
                    <p class="card__description  text-base text-primary opacity-70 py-[10px]">
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution...
                    </p>
                    <!-- Card Buttons -->

                    <div class="card-buttons space-y-4 space-x-0 sm:space-x-4 pt-10">
                        <a href="{{ route('safe_settlement') }}" class="footer__cta--btn  w-40 text-center text-white bg-primary f text-base leading-[18px] font-semibold px-6 py-[14px] border-2 border-primary hover:bg-white hover:text-primary transition ease-in-out duration-500 rounded inline-block">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
            <!-- Service Card 3 -->
            <div class="services__card grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-[117px] pt-14 lg:pt-[106px]">
                <!-- Services Image -->
                <div class="card__img">
                    <img class="rounded-md w-full sm:w-[720px] h-[280px] md:h-[400px] object-cover object-center"
                        src="{{ asset('/assets/img/services/2.png') }}" alt="Services Image">
                </div>
                <!-- Service Description -->
                <div class="services__description">
                    <!-- Card Title -->
                    <h2 class="card__title  text-3xl font-semibold text-primary pb-[10px]">
                        Pre-Purchase Inspection
                    </h2>
                    <!-- Card Description -->
                    <p class="card__description  text-base text-primary opacity-70 py-[10px]">
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution.
                    </p>
                    <!-- Card Description -->
                    <p class="card__description  text-base text-primary opacity-70 py-[10px]">
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution...
                    </p>
                    <!-- Card Description -->
                    <p class="card__description  text-base text-primary opacity-70 py-[10px]">
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout.
                    </p>
                    <!-- Card Button -->
                    <div class="card-buttons space-y-4 space-x-0 sm:space-x-4 pt-10">
                        <a href="{{ route('pre_purchase_inspection') }}" class="footer__cta--btn  w-40 text-center text-white bg-primary f text-base leading-[18px] font-semibold px-6 py-[14px] border-2 border-primary hover:bg-white hover:text-primary transition ease-in-out duration-500 rounded inline-block">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
            <!-- Service Card 4 -->
            <div class="services__card grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-[117px]  pt-14 lg:pt-[106px]">
                <!-- Services Image -->
                <div class="card__img md:order-1">
                    <!-- Card Image -->
                    <img class="rounded-md w-full sm:w-[720px] h-[280px] md:h-[400px] object-cover object-center"
                        src="{{ asset('/assets/img/services/3.png') }}" alt="Video">
                </div>
                <!-- Service Description -->
                <div class="services__description">
                    <!-- Card Title -->
                    <h2 class="card__title  text-3xl font-semibold text-primary pb-[10px]">
                        Vehicle Finance
                    </h2>
                    <!-- Card Description -->
                    <p class="card__description  text-base text-primary opacity-70 py-[10px]">
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution.
                    </p>
                    <!-- Card Description -->
                    <p class="card__description  text-base text-primary opacity-70 py-[10px]">
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution...
                    </p>
                    <!-- Card Description -->
                    <p class="card__description  text-base text-primary opacity-70 py-[10px]">
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution...
                    </p>
                    <!-- Card Buttons -->
                    <div class="card-buttons space-y-4 space-x-0 sm:space-x-4 pt-10">
                        <a href="{{ route('vehicle_finance') }}" class="footer__cta--btn  w-40 text-center text-white bg-primary f text-base leading-[18px] font-semibold px-6 py-[14px] border-2 border-primary hover:bg-white hover:text-primary transition ease-in-out duration-500 rounded inline-block">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
            <!-- Service Card 5 -->
            <div class="services__card grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-[117px] pt-14 lg:pt-[106px]">
                <!-- Services Image -->
                <div class="card__img">
                    <!-- Card Image -->
                    <img class="rounded-md w-full sm:w-[720px] h-[280px] md:h-[400px] object-cover object-center"
                        src="{{ asset('/assets/img/services/4.png') }}" alt="Video">
                </div>
                <!-- Service Description -->
                <div class="services__description">
                    <!-- Card Title -->
                    <h2 class="card__title  text-3xl font-semibold text-primary pb-[10px]">
                        Vehicle Transport
                    </h2>
                    <!-- Card Description -->
                    <p class="card__description  text-base text-primary opacity-70 py-[10px]">
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution.
                    </p>
                    <!-- Card Description -->
                    <p class="card__description  text-base text-primary opacity-70 py-[10px]">
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution...
                    </p>
                    <!-- Card Description -->
                    <p class="card__description  text-base text-primary opacity-70 py-[10px]">
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution...
                    </p>
                    <!-- Card Button -->
                    <div class="card-buttons space-y-4 space-x-0 sm:space-x-4 pt-10">
                        <a href="{{ route('vehicle_tranport') }}" class="footer__cta--btn  w-40 text-center text-white bg-primary f text-base leading-[18px] font-semibold px-6 py-[14px] border-2 border-primary hover:bg-white hover:text-primary transition ease-in-out duration-500 rounded inline-block">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section Ends -->

@endsection
