@extends('layouts.front_app')


@section('title')
    Support | Cars Around
@endsection

@section('content')



    <!-- Banner Section Starts -->
    {{-- <div
        class="banner w-full h-[250px] md:h-[300px] lg:h-[400px] bg-dispute-hero bg-cover bg-center bg-no-repeat flex bg-blend-multiply bg-[#231F20] bg-opacity-80">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15 relative">
            <div class="banner__heading bottom-0 absolute pb-12 w-full">
                <div class="grid grid-cols-1 sm:grid-cols-2">
                    <!-- Hero Title -->
                    <h2
                        class="heading__title bg-red-700 text-white font-inter font-semibold text-3xl md:text-5xl uppercase">
                        support
                    </h2>
                    <!-- Search Fild -->
                    <div class="search__fild bg-red-900 py-[2px] relative flex items-center justify-end">
                        <form action="">
                            <label for="search" class="absolute p-3">
                                <span class="search__icon items-center">
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M23 23.2682L18.6292 18.6447C20.3677 16.8441 21.3875 14.4698 21.4964 11.9693C21.6053 9.46875 20.7958 7.01475 19.2205 5.06981C17.6452 3.12487 15.4128 1.82332 12.9442 1.41048C10.4756 0.997647 7.94126 1.50204 5.81884 2.8286C3.69641 4.15515 2.13252 6.21223 1.42192 8.61213C0.711317 11.012 0.903097 13.589 1.96111 15.8572C3.01912 18.1255 4.87029 19.9284 7.1657 20.9262C9.4611 21.924 12.0422 22.0477 14.4225 21.274"
                                            stroke="#D6D3C7" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </label>
                            <input type="search" name="search" id="search" placeholder="Seartch" class="py-3 pl-12 pr-2 outline-none rounded-full w-full">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Banner Section Starts -->



        <!-- Banner Section Starts -->
        <div
        class="banner w-full h-[250px] md:h-[300px] lg:h-[400px] bg-dispute-hero bg-cover bg-center bg-no-repeat flex bg-blend-multiply bg-[#231F20] bg-opacity-80">
        <div class="lg:container mx-auto lg:max-w-screen-2xl w-full px-5 md:px-8 lg:px-15 relative">
            <div class="banner__heading bottom-0 absolute pb-12">
                <!-- Hero Title -->
                <h2
                    class="heading__title text-white  font-semibold text-3xl md:text-5xl uppercase">
                    Support
                </h2>
            </div>
        </div>
    </div>
    <!-- Banner Section Ends -->


    <!-- Dispute Section Starts -->
    <div class="dispute pb-16 pt-10">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
            <!-- Breadcrumb section -->
            <div class="breadcrumb pt-[30px]">
                <!-- Breadcrumb Item -->
                <nav class="breadcrumb__item flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2">
                        <!-- Breadcrumb List -->
                        <li class="breadcrumb__list inline-flex items-center">
                            <a href="{{ route('home') }}"
                                class="inline-flex items-center text-base font-roboto font-normal text-primary opacity-50 hover:opacity-100">
                                <span class="home__icon">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.5"
                                            d="M27.4194 13.9677L15.4856 2.0401L14.6857 1.24019C14.5034 1.05913 14.257 0.95752 14.0001 0.95752C13.7432 0.95752 13.4967 1.05913 13.3144 1.24019L0.580756 13.9677C0.394001 14.1537 0.246405 14.3753 0.146681 14.6193C0.0469573 14.8633 -0.00287419 15.1248 0.000128015 15.3884C0.0124818 16.4755 0.917397 17.3433 2.00453 17.3433H3.31712V27.4024H24.683V17.3433H26.0234C26.5515 17.3433 27.0487 17.1364 27.4224 16.7627C27.6065 16.5793 27.7522 16.3612 27.8514 16.121C27.9505 15.8809 28.001 15.6235 28 15.3637C28 14.8386 27.7931 14.3414 27.4194 13.9677ZM15.7296 25.1787H12.2705V18.8783H15.7296V25.1787ZM22.4593 15.1197V25.1787H17.7062V18.1371C17.7062 17.4545 17.1534 16.9017 16.4708 16.9017H11.5293C10.8468 16.9017 10.2939 17.4545 10.2939 18.1371V25.1787H5.5408V15.1197H2.57589L14.0031 3.70168L14.7166 4.41511L25.4273 15.1197H22.4593Z"
                                            fill="#242634" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <!-- Breadcrumb List -->
                        <li class="breadcrumb__list inline-flex items-center">
                            <a href="{{ route('support') }}"
                                class="inline-flex items-center text-base font-roboto font-normal text-primary opacity-50">
                                <span class="array__icon mr-2">
                                    <svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.5" d="M0.225303 1.12093C0.498401 0.846208 0.925745 0.82124 1.22688 1.04601L1.31316 1.12093L9.77468 9.63288C10.0478 9.90753 10.0726 10.3375 9.84914 10.6404L9.77468 10.7272L1.31316 19.2391C1.01276 19.5413 0.525703 19.5413 0.225303 19.2391C-0.0477947 18.9644 -0.0726151 18.5345 0.150821 18.2316L0.225303 18.1448L8.14288 10.18L0.225303 2.21526C-0.0750973 1.91308 -0.0750973 1.42312 0.225303 1.12093Z" fill="#242634"/>
                                    </svg>
                                </span>
                                <span class="font-roboto font-medium text-lg text-primary opacity-50 hover:opacity-100">
                                    Category
                                </span>
                            </a>
                        </li>
                    </ol>
                </nav>
            </div>
            <!-- Dispute Document -->
            <div class="dispute__document pt-[41px]">
                <!-- Dispute Item -->
                <div
                    class="dispute__item grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-8 md:gap-4 lg:gap-10">
                    <!-- Dispute List 1 -->
                    @foreach($faqcat as $item)

                    <div class="dispute__list w-full flex flex-col">
                        <a href="{{ route('support-category', $item->id) }}"
                            class="group flex justify-center items-center w-full text-center text-primary bg-transparent font-roboto text-lg font-semibold p-5 21 rounded border-2 border-primary hover:bg-primary hover:text-secondary transition-all ease-in-out duration-500 flex-1">
                            {{$item->title}}
                            <span class="icon inline-block pl-[10px]">
                                <svg width="12" height="23" class="fill-primary group-hover:fill-secondary"
                                    viewBox="0 0 16 21" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.270364 0.424172C0.598081 0.0964552 1.11089 0.0666703 1.47226 0.334794L1.57579 0.424172L11.7296 10.5781C12.0574 10.9057 12.0872 11.4186 11.819 11.7799L11.7296 11.8834L1.57579 22.0373C1.21531 22.3978 0.630844 22.3978 0.270364 22.0373C-0.0573536 21.7096 -0.0871381 21.1968 0.180985 20.8354L0.270364 20.7319L9.77146 11.2307L0.270364 1.7296C-0.0901167 1.36912 -0.0901167 0.784653 0.270364 0.424172Z" />
                                </svg>
                            </span>
                        </a>
                    </div>

                    @endforeach
                    
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Dispute Section Ends -->


    <!-- Dispute Articles Section Ends -->
    <div class="dispute__articles pb-16">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
            <!-- articles Title -->
            <h4 class="articles__title font-roboto font-semibold text-[22px] text-primary uppercase pb-4">
                Promoted articles
            </h4>
            <!-- Articles Item -->
            <div class="articles__item grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-y-3">
                <!-- Item List 1 -->
                <div class="item__list">
                    <a href="#" class="font-roboto font-normal text-base text-[#323647] hover:text-primary hover:border-b hover:border-primary transition-all ease-in-out duration-300">
                        How to get started on Carsaround?
                    </a>
                </div>
                <!-- Item List 2 -->
                <div class="item__list">
                    <a href="#" class="font-roboto font-normal text-base text-[#323647] hover:text-primary hover:border-b hover:border-primary transition-all ease-in-out duration-300">
                        How many services should i Purchase?
                    </a>
                </div>
                <!-- Item List 3 -->
                <div class="item__list">
                    <a href="#" class="font-roboto font-normal text-base text-[#323647] hover:text-primary hover:border-b hover:border-primary transition-all ease-in-out duration-300">
                        how does carsround ensure safety?
                    </a>
                </div>
                <!-- Item List 4 -->
                <div class="item__list">
                    <a href="#" class="font-roboto font-normal text-base text-[#323647] hover:text-primary hover:border-b hover:border-primary transition-all ease-in-out duration-300">
                        How can i cancel a service and get a refund?
                    </a>
                </div>
                <!-- Item List 5 -->
                <div class="item__list">
                    <a href="#" class="font-roboto font-normal text-base text-[#323647] hover:text-primary hover:border-b hover:border-primary transition-all ease-in-out duration-300">
                        What documents are needed?
                    </a>
                </div>
                <!-- Item List 6 -->
                <div class="item__list">
                    <a href="#" class="font-roboto font-normal text-base text-[#323647] hover:text-primary hover:border-b hover:border-primary transition-all ease-in-out duration-300">
                        See more
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Dispute Articles Section Ends -->


@endsection
