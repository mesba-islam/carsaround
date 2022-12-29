


@extends('layouts.front_app')


@section('title')
    Legal | Cars Around
@endsection


@section('content')


    <!-- Banner Section Starts -->
    <div class="banner w-full h-[250px] md:h-[300px] lg:h-[400px] bg-legal-hero bg-cover bg-center bg-no-repeat flex bg-blend-multiply bg-[#231F20] bg-opacity-80">
        <div class="lg:container mx-auto lg:max-w-screen-2xl w-full px-5 md:px-8 lg:px-15 relative">
            <div class="banner__heading bottom-0 absolute pb-12">
                <!-- Hero Title -->
                <h2
                    class="heading__title text-white  font-semibold text-3xl md:text-5xl uppercase">
                    legal
                </h2>
            </div>
        </div>
    </div>
    <!-- Banner Section Starts -->



    <!-- Legal Section Starts -->
    <div class="legal py-16">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
            <!-- Legal Document -->
            <div class="legal__document">
                <!-- Legal Item -->
                <div class="legal__item grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 md:gap-4 lg:gap-10">
                    <!-- Legal List 1 -->
                    <div class="legal__list w-full flex flex-col">
                        <a href="{{ route('legal-safe-settlement') }}"
                            class="group flex justify-center items-center w-full text-center text-primary bg-transparent font-roboto text-lg font-semibold p-5 rounded border-2 border-primary hover:bg-primary hover:text-secondary transition-all ease-in-out duration-500  flex-1">
                            Safe Settlement
                            <span class="icon inline-block pl-[10px]">
                                <svg width="12" height="23" class="fill-primary group-hover:fill-secondary" viewBox="0 0 16 21"  xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.270364 0.424172C0.598081 0.0964552 1.11089 0.0666703 1.47226 0.334794L1.57579 0.424172L11.7296 10.5781C12.0574 10.9057 12.0872 11.4186 11.819 11.7799L11.7296 11.8834L1.57579 22.0373C1.21531 22.3978 0.630844 22.3978 0.270364 22.0373C-0.0573536 21.7096 -0.0871381 21.1968 0.180985 20.8354L0.270364 20.7319L9.77146 11.2307L0.270364 1.7296C-0.0901167 1.36912 -0.0901167 0.784653 0.270364 0.424172Z"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                    <!-- Legal List 2 -->
                    <div class="legal__list w-full flex flex-col">
                        <a href="#"
                            class="group flex justify-center items-center w-full text-center text-primary bg-transparent font-roboto text-lg font-semibold p-5 rounded border-2 border-primary hover:bg-primary hover:text-secondary transition-all ease-in-out duration-500  flex-1">
                            Pre-Purchase Inspection
                            <span class="icon inline-block pl-[10px]">
                                <svg class="fill-primary group-hover:fill-secondary w-3 h-auto" viewBox="0 0 16 21"  xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.270364 0.424172C0.598081 0.0964552 1.11089 0.0666703 1.47226 0.334794L1.57579 0.424172L11.7296 10.5781C12.0574 10.9057 12.0872 11.4186 11.819 11.7799L11.7296 11.8834L1.57579 22.0373C1.21531 22.3978 0.630844 22.3978 0.270364 22.0373C-0.0573536 21.7096 -0.0871381 21.1968 0.180985 20.8354L0.270364 20.7319L9.77146 11.2307L0.270364 1.7296C-0.0901167 1.36912 -0.0901167 0.784653 0.270364 0.424172Z"/>
                                    </svg>
                            </span>
                        </a>
                    </div>
                    <!-- Legal List 3 -->
                    <div class="legal__list w-full  flex flex-col">
                        <a href="#"
                            class="group flex justify-center items-center w-full text-center text-primary bg-transparent font-roboto text-lg font-semibold p-5 rounded border-2 border-primary hover:bg-primary hover:text-secondary transition-all ease-in-out duration-500  flex-1">
                            Vehicle Finance
                            <span class="icon inline-block pl-[10px]">
                                <svg width="12" height="23" class="fill-primary group-hover:fill-secondary" viewBox="0 0 16 21"  xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.270364 0.424172C0.598081 0.0964552 1.11089 0.0666703 1.47226 0.334794L1.57579 0.424172L11.7296 10.5781C12.0574 10.9057 12.0872 11.4186 11.819 11.7799L11.7296 11.8834L1.57579 22.0373C1.21531 22.3978 0.630844 22.3978 0.270364 22.0373C-0.0573536 21.7096 -0.0871381 21.1968 0.180985 20.8354L0.270364 20.7319L9.77146 11.2307L0.270364 1.7296C-0.0901167 1.36912 -0.0901167 0.784653 0.270364 0.424172Z"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                    <!-- Legal List 4 -->
                    <div class="legal__list w-full  flex flex-col">
                        <a href="#"
                            class="group flex justify-center items-center w-full text-center text-primary bg-transparent font-roboto text-lg font-semibold p-5 rounded border-2 border-primary hover:bg-primary hover:text-secondary transition-all ease-in-out duration-500  flex-1">
                            Transport
                            <span class="icon inline-block pl-[10px]">
                                <svg width="12" height="23" class="fill-primary group-hover:fill-secondary" viewBox="0 0 16 21"  xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.270364 0.424172C0.598081 0.0964552 1.11089 0.0666703 1.47226 0.334794L1.57579 0.424172L11.7296 10.5781C12.0574 10.9057 12.0872 11.4186 11.819 11.7799L11.7296 11.8834L1.57579 22.0373C1.21531 22.3978 0.630844 22.3978 0.270364 22.0373C-0.0573536 21.7096 -0.0871381 21.1968 0.180985 20.8354L0.270364 20.7319L9.77146 11.2307L0.270364 1.7296C-0.0901167 1.36912 -0.0901167 0.784653 0.270364 0.424172Z"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                    <!-- Legal List 5 -->
                    <div class="legal__list w-full  flex flex-col">
                        <a href="#"
                            class="group flex justify-center items-center w-full text-center text-primary bg-transparent font-roboto text-lg font-semibold p-5 rounded border-2 border-primary hover:bg-primary hover:text-secondary transition-all ease-in-out duration-500  flex-1">
                            Privacy Policy
                            <span class="icon inline-block pl-[10px]">
                                <svg width="12" height="23" class="fill-primary group-hover:fill-secondary" viewBox="0 0 16 21"  xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.270364 0.424172C0.598081 0.0964552 1.11089 0.0666703 1.47226 0.334794L1.57579 0.424172L11.7296 10.5781C12.0574 10.9057 12.0872 11.4186 11.819 11.7799L11.7296 11.8834L1.57579 22.0373C1.21531 22.3978 0.630844 22.3978 0.270364 22.0373C-0.0573536 21.7096 -0.0871381 21.1968 0.180985 20.8354L0.270364 20.7319L9.77146 11.2307L0.270364 1.7296C-0.0901167 1.36912 -0.0901167 0.784653 0.270364 0.424172Z"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                    <!-- Legal List 6 -->
                    <div class="legal__list w-full  flex flex-col">
                        <a href="#"
                            class="group flex justify-center items-center w-full text-center text-primary bg-transparent font-roboto text-lg font-semibold p-5 rounded border-2 border-primary hover:bg-primary hover:text-secondary transition-all ease-in-out duration-500  flex-1">
                            Cookies Policy
                            <span class="icon inline-block pl-[10px]">
                                <svg width="12" height="23" class="fill-primary group-hover:fill-secondary" viewBox="0 0 16 21"  xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.270364 0.424172C0.598081 0.0964552 1.11089 0.0666703 1.47226 0.334794L1.57579 0.424172L11.7296 10.5781C12.0574 10.9057 12.0872 11.4186 11.819 11.7799L11.7296 11.8834L1.57579 22.0373C1.21531 22.3978 0.630844 22.3978 0.270364 22.0373C-0.0573536 21.7096 -0.0871381 21.1968 0.180985 20.8354L0.270364 20.7319L9.77146 11.2307L0.270364 1.7296C-0.0901167 1.36912 -0.0901167 0.784653 0.270364 0.424172Z"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                    <!-- Legal List 7 -->
                    <div class="legal__list w-full  flex flex-col">
                        <a href="#"
                            class="group flex justify-center items-center w-full text-center text-primary bg-transparent font-roboto text-lg font-semibold p-5 rounded border-2 border-primary hover:bg-primary hover:text-secondary transition-all ease-in-out duration-500  flex-1">
                            User Terms & Conditions
                            <span class="icon inline-block pl-[10px]">
                                <svg width="12" height="23" class="fill-primary group-hover:fill-secondary" viewBox="0 0 16 21"  xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.270364 0.424172C0.598081 0.0964552 1.11089 0.0666703 1.47226 0.334794L1.57579 0.424172L11.7296 10.5781C12.0574 10.9057 12.0872 11.4186 11.819 11.7799L11.7296 11.8834L1.57579 22.0373C1.21531 22.3978 0.630844 22.3978 0.270364 22.0373C-0.0573536 21.7096 -0.0871381 21.1968 0.180985 20.8354L0.270364 20.7319L9.77146 11.2307L0.270364 1.7296C-0.0901167 1.36912 -0.0901167 0.784653 0.270364 0.424172Z"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                    <!-- Legal List 8 -->
                    <div class="legal__list w-full  flex flex-col">
                        <a href="#"
                            class="group flex justify-center items-center w-full text-center text-primary bg-transparent font-roboto text-lg font-semibold p-5 rounded border-2 border-primary hover:bg-primary hover:text-secondary transition-all ease-in-out duration-500  flex-1">
                            Privacy Consent
                            <span class="icon inline-block pl-[10px]">
                                <svg width="12" height="23" class="fill-primary group-hover:fill-secondary" viewBox="0 0 16 21"  xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.270364 0.424172C0.598081 0.0964552 1.11089 0.0666703 1.47226 0.334794L1.57579 0.424172L11.7296 10.5781C12.0574 10.9057 12.0872 11.4186 11.819 11.7799L11.7296 11.8834L1.57579 22.0373C1.21531 22.3978 0.630844 22.3978 0.270364 22.0373C-0.0573536 21.7096 -0.0871381 21.1968 0.180985 20.8354L0.270364 20.7319L9.77146 11.2307L0.270364 1.7296C-0.0901167 1.36912 -0.0901167 0.784653 0.270364 0.424172Z"/>
                                    </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Legal Section Ends -->


@endsection
