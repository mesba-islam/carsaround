@extends('layouts.front_app')

@section('title')
Home | Cars Around
@endsection


@section('content')

    <!-- Banner Section Starts -->
    <div class="banner h-[500px] md:h-[750px] md:py-10 lg:h-screen bg-hero bg-cover bg-center bg-no-repeat items-center justify-center bg-blend-multiply bg-[#231F20] bg-opacity-80 rounded-b-[10px] sm:rounded-none hidden md:flex">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
            <div class="banner__heading text-center">
                <!-- Hero Title -->
                <h2
                    class="heading__title text-white font-roboto font-semibold text-3xl md:text-4xl lg:text-5xl uppercase pt-6">
                    one-stop vehicle trading solution
                </h2>
            </div>
            <!-- Tab Section -->
            <div class="mt-4 lg:w-[922px] mx-auto block">
                <!-- Tabs -->
                <ul id="tabs" class="flex justify-evenly items-center border-b-2 border-[#e5e5e5]" id="moveCarOnNavItem">
                    <li
                        class="bg-white text-gray-800 text-xs font-semibold  text-center py-2 w-full border-r-[1px] border-primary border-opacity-50 inline-block  rounded-tl-md animate-active">
                        <a id="default-tab" class="move-car block" href="#first">Buyer</a>
                    </li>
                    <li
                        class="bg-white opacity-30 text-black text-xs font-semibold  text-center py-2 w-full border-r-[1px] border-primary border-opacity-50 inline-blockz animate-active">
                        <a class="move-car block" href="#second">Safe Settlement</a>
                    </li>
                    <li
                        class="bg-white opacity-30 text-black text-xs font-semibold  text-center py-2 w-full border-r-[1px] border-primary border-opacity-50 inline-block animate-active">
                        <a class="move-car block" href="#third">Inspection</a>
                    </li>
                    <li
                        class="bg-white opacity-30 text-black text-xs font-semibold  text-center py-2 w-full border-r-[1px] border-primary border-opacity-50 inline-block animate-active">
                        <a class="move-car block" href="#fourth">Finance</a>
                    </li>
                    <li
                        class="bg-white opacity-30 text-black text-xs font-semibold  text-center py-2 w-full border-r-[1px] border-primary border-opacity-50 inline-block animate-active">
                        <a class="move-car block" href="#five">Transport</a>
                    </li>
                    <li
                        class="bg-white opacity-30 text-black text-xs font-semibold  text-center py-2 w-full inline-block rounded-tr-md animate-active">
                        <a class="move-car block" href="#six">Seller</a>
                    </li>
                </ul>

                                <!-- Tab Contents -->
                                <div id="tab-contents"
                                class="lg:w-[922px] text-black bg-white min-h-[300px] rounded-bl-md rounded-br-md">
                                <!-- First Tab -->
                                <div id="first" class="py-6 px-10">
                                    <!-- Buyer Tab -->
                                    <div class="buyer flex flex-wrap justify-start">
                                        <div class="buyer__img w-1/4 items-center justify-center flex pr-10">
                                            <img class="w-24 h-auto" src="{{ ('/assets/img/1.png') }}" alt="">
                                        </div>
                                        <div class="buyer__text w-3/4">
                                            <h2 class="buyer__title font-inter font-bold text-2xl text-primary">
                                                Buyer
                                            </h2>
                                            <p class="buyer__doc font-inter text-base font-normal text-primary py-4 opacity-50">
                                                If you are a buyer, paste the vehicle link below or enter info manually to get started
                                            </p>
                                            <div class="buyer__link pb-4">
                                                <input class="w-full border p-4 outline-none" type="text" name="" id=""
                                                    placeholder="Vehicle link">
                                            </div>
                                            <!-- Buyer Buttons -->
                                            <div class="buyer__buttons flex justify-between items-center ">
                                                <div class="group">
                                                    <!-- Button Item -->
                                                    <a @click.prevent="tab = 'manual_info'; window.location.hash = 'manual_info'" href="{{ url('/trade/create?user_type=buyer#manual_info') }}"
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
                                                <a href="{{ url('/trade/create?user_type=buyer#start') }}"
                                                    class="buyer__btn-started inline-block text-center w-[140px] py-3 text-white bg-primary font-sans text-base leading-[18px] font-semibold rounded border-2 border-primary hover:text-primary hover:bg-transparent transition-all ease-in-out duration-500">
                                                    Get started
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Secend Tab -->
                                <div id="second" class="hidden py-6 px-10">
                                    <!-- Safe Settlement -->
                                    <div class="buyer flex flex-wrap justify-start">
                                        <div class="buyer__img w-1/4 items-center justify-center flex pr-10">
                                            <img class="w-20 h-auto" src="{{ ('/assets/img/2.png') }}" alt="">
                                        </div>
                                        <div class="buyer__text w-3/4">
                                            <h2 class="buyer__title font-inter font-bold text-2xl text-primary">
                                                Safe Settlement
                                            </h2>
                                            <p class="buyer__doc font-inter text-base font-normal text-primary py-4 opacity-50">
                                                For making your settlement safe and secure, paste the vehicle link below or enter info manually to get started
                                            </p>
                                            <div class="buyer__link pb-4">
                                                <input class="w-full border p-4 outline-none" type="text" name="" id=""
                                                    placeholder="Vehicle link">
                                            </div>
                                            <!-- Buyer Buttons -->
                                            <div class="buyer__buttons flex justify-between items-center ">
                                                <div class="group">
                                                    <!-- Button Item -->
                                                    <a @click.prevent="tab = 'manual_info'; window.location.hash = 'manual_info'" href="{{ url('/trade/create?user_type=buyer#manual_info') }}"
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
                                                <a href="{{ url('/trade/create?user_type=buyer#start') }}"
                                                    class="buyer__btn-started inline-block text-center w-[140px] py-3 text-white bg-primary font-sans text-base leading-[18px] font-semibold rounded border-2 border-primary hover:text-primary hover:bg-transparent transition-all ease-in-out duration-500">
                                                    Get started
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Third Tab -->
                                <div id="third" class="hidden py-6 px-10">
                                    <!-- Inspection -->
                                    <div class="buyer flex flex-wrap justify-start">
                                        <div class="buyer__img w-1/4 items-center justify-center flex pr-10">
                                            <img class="w-20 h-auto" src="{{ ('/assets/img/3.png') }}" alt="">
                                        </div>
                                        <div class="buyer__text w-3/4">
                                            <h2 class="buyer__title font-inter font-bold text-2xl text-primary">
                                                Pre-Purchase Inspection
                                            </h2>
                                            <p class="buyer__doc font-inter text-base font-normal text-primary py-4 opacity-50">
                                                For getting a pre-purchase inspection report, paste the vehicle link below or enter info manually to get started
                                            </p>
                                            <div class="buyer__link pb-4">
                                                <input class="w-full border p-4 outline-none" type="text" name="" id=""
                                                    placeholder="Vehicle link">
                                            </div>
                                            <!-- Buyer Buttons -->
                                            <div class="buyer__buttons flex justify-between items-center ">
                                                <div class="group">
                                                    <!-- Button Item -->
                                                    <a @click.prevent="tab = 'manual_info'; window.location.hash = 'manual_info'" href="{{ url('/trade/create?user_type=buyer#manual_info') }}"
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
                                                <a href="{{ url('/trade/create?user_type=buyer#start') }}"
                                                    class="buyer__btn-started inline-block text-center w-[140px] py-3 text-white bg-primary font-sans text-base leading-[18px] font-semibold rounded border-2 border-primary hover:text-primary hover:bg-transparent transition-all ease-in-out duration-500">
                                                    Get started
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fourth Tab -->
                                <div id="fourth" class="hidden py-6 px-10">
                                    <!-- Finance -->
                                    <div class="buyer flex flex-wrap justify-start">
                                        <div class="buyer__img w-1/4 items-center justify-center flex pr-10">
                                            <img class="w-20 h-auto" src="{{ ('/assets/img/4.png') }}" alt="">
                                        </div>
                                        <div class="buyer__text w-3/4">
                                            <h2 class="buyer__title font-inter font-bold text-2xl text-primary">
                                                Vehicle Finance
                                            </h2>
                                            <p class="buyer__doc font-inter text-base font-normal text-primary py-4 opacity-50">
                                                If you need to finance your vehicle, paste the vehicle link below or enter info manually to get started
                                            </p>
                                            <div class="buyer__link pb-4">
                                                <input class="w-full border p-4 outline-none" type="text" name="" id=""
                                                    placeholder="Vehicle link">
                                            </div>
                                            <!-- Buyer Buttons -->
                                            <div class="buyer__buttons flex justify-between items-center ">
                                                <div class="group">
                                                    <!-- Button Item -->
                                                    <a @click.prevent="tab = 'manual_info'; window.location.hash = 'manual_info'" href="{{ url('/trade/create?user_type=buyer#manual_info') }}"
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
                                                <a href="{{ url('/trade/create?user_type=buyer#start') }}"
                                                    class="buyer__btn-started inline-block text-center w-[140px] py-3 text-white bg-primary font-sans text-base leading-[18px] font-semibold rounded border-2 border-primary hover:text-primary hover:bg-transparent transition-all ease-in-out duration-500">
                                                    Get started
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Five Tab -->
                                <div id="five" class="hidden py-6 px-10">
                                    <!-- Transport -->
                                    <div class="buyer flex flex-wrap justify-start">
                                        <div class="buyer__img w-1/4 items-center justify-center flex pr-10">
                                            <img class="w-20 h-auto" src="{{ ('/assets/img/5.png') }}" alt="">
                                        </div>
                                        <div class="buyer__text w-3/4">
                                            <h2 class="buyer__title font-inter font-bold text-2xl text-primary">
                                                Vehicle Transport
                                            </h2>
                                            <p class="buyer__doc font-inter text-base font-normal text-primary py-4 opacity-50">
                                                If you need the vehicle to be delivered to the doorstep or nearby depo, paste the vehicle link below or enter info manually to get started
                                            </p>
                                            <div class="buyer__link pb-4">
                                                <input class="w-full border p-4 outline-none" type="text" name="" id=""
                                                    placeholder="Vehicle link">
                                            </div>
                                            <!-- Buyer Buttons -->
                                            <div class="buyer__buttons flex justify-between items-center ">
                                                <div class="group">
                                                    <!-- Button Item -->
                                                    <a @click.prevent="tab = 'manual_info'; window.location.hash = 'manual_info'" href="{{ url('/trade/create?user_type=buyer#manual_info') }}"
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
                                                <a href="{{ url('/trade/create?user_type=buyer#start') }}"
                                                    class="buyer__btn-started inline-block text-center w-[140px] py-3 text-white bg-primary font-sans text-base leading-[18px] font-semibold rounded border-2 border-primary hover:text-primary hover:bg-transparent transition-all ease-in-out duration-500">
                                                    Get started
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Six Tab -->
                                <div id="six" class="hidden py-6 px-10">
                                    <!-- Seller -->
                                    <div class="buyer flex flex-wrap justify-start">
                                        <div class="buyer__img w-1/4 items-center justify-center flex pr-10">
                                            <img class="w-20 h-auto" src="{{ ('/assets/img/6.png') }}" alt="">
                                        </div>
                                        <div class="buyer__text w-3/4">
                                            <h2 class="buyer__title font-inter font-bold text-2xl text-primary">
                                                Seller
                                            </h2>
                                            <p class="buyer__doc font-inter text-base font-normal text-primary py-4 opacity-50">
                                                If you are a seller, paste the vehicle link below or enter info manually to get started
                                            </p>
                                            <div class="buyer__link pb-4">
                                                <input class="w-full border p-4 outline-none" type="text" name="" id=""
                                                    placeholder="Vehicle link">
                                            </div>
                                            <!-- Buyer Buttons -->
                                            <div class="buyer__buttons flex justify-between items-center ">
                                                <div class="group">
                                                    <!-- Button Item -->
                                                    <a @click.prevent="tab = 'manual_info'; window.location.hash = 'manual_info'" href="{{ url('/trade/create?user_type=seller#manual_info') }}"
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
                                                <a href="{{ url('/trade/create?user_type=seller#start') }}"
                                                    class="buyer__btn-started inline-block text-center w-[140px] py-3 text-white bg-primary font-sans text-base leading-[18px] font-semibold rounded border-2 border-primary hover:text-primary hover:bg-transparent transition-all ease-in-out duration-500">
                                                    Get started
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                <!-- Animate Car -->
                <div class="animate-car absolute z-50 left-[14%] bottom-0 transition-all ease-linear duration-1000">
                    <div class="car" id="animate--car">
                        <svg width="177" height="64" viewBox="0 0 177 64" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.0941 21.5421C18.6119 19.033 23.884 14.7656 27.8999 8.48983L26.3933 7.23467C50.24 0.206713 74.0876 0.456961 92.6625 4.9758C106.467 8.48968 113.495 13.0085 128.306 19.0328C141.862 21.2917 170.728 22.7984 174.995 37.8592C175.247 41.3733 172.736 47.6491 175.247 50.4097L175.247 53.1704C171.733 55.1779 158.177 56.433 155.918 54.1741L155.917 54.174L156.169 52.4169C156.169 44.3842 149.642 37.858 141.861 37.858C133.829 37.858 127.553 44.3842 127.553 52.4169L127.805 55.4291L39.697 55.9309C39.9474 54.6757 40.1988 53.1702 40.1988 51.6636C40.1988 43.6309 33.924 37.1046 25.8913 37.1046C18.1101 37.1046 11.5838 43.6309 11.5838 51.6636C11.5838 52.9188 11.8342 54.174 12.0857 55.1777C9.32475 55.1777 0.538761 54.676 1.29203 50.4086L1.29204 35.3479L5.81086 31.8338M14.0941 21.5421C7.06607 22.044 4.55566 28.8216 5.81086 31.8338M14.0941 21.5421L19.3625 25.3066L19.614 27.315C14.343 28.3197 12.8374 29.8242 12.586 32.3346L5.81086 31.8338M14.0941 21.5421C7.21415 22.0334 4.46693 28.6087 5.81086 31.8338M69.0655 6.22979L71.0739 21.542L30.6618 19.2831C32.6702 14.2626 35.9329 10.4972 42.7104 7.73628C51.4963 6.48112 60.2815 5.97927 69.067 6.22971L69.0655 6.22979ZM76.5965 22.044L74.3376 6.48128C84.6293 7.23455 94.9209 8.74015 104.208 12.5056L105.715 23.2992L76.5965 22.044ZM109.479 23.2991L108.224 14.5132C111.738 16.0198 115.252 18.2786 119.269 21.0395C119.77 22.0432 119.52 22.7965 118.515 23.2984L109.479 23.2991ZM173.738 37.6067C169.47 37.6067 164.952 37.1048 160.182 35.5982C157.672 32.5861 154.41 30.5777 150.894 29.3225L164.008 26.7873C170.284 29.7994 173.666 34.0928 174.921 37.6067L173.738 37.6067Z"
                                stroke="white" stroke-width="2" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M132 52.8004C132 58.213 136.477 62.6008 142 62.6008C147.523 62.6008 152 58.213 152 52.8004C152 47.3878 147.523 43 142 43C136.477 43 132 47.3878 132 52.8004Z"
                                stroke="white" stroke-width="2" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M16 52.6075C16 57.914 20.4768 62.2157 25.9996 62.2157C31.523 62.2157 36 57.914 36 52.6075C36 47.3017 31.5232 43 25.9996 43C20.477 43 16 47.3017 16 52.6075Z"
                                stroke="white" stroke-width="2" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section Starts -->

    <!-- Mobile Banner -->
    <div class="banner h-screen bg-hero bg-cover bg-center bg-no-repeat items-center justify-center bg-blend-multiply bg-[#231F20] bg-opacity-80 rounded-b-[10px] sm:rounded-none flex md:hidden">
        <div class="lg:container mx-auto px-5 md:px-8 lg:px-15">
            <div class="banner__heading text-center">
                <!-- Hero Title -->
                <h2
                    class="heading__title text-white font-roboto font-semibold text-3xl md:text-4xl lg:text-5xl uppercase">
                    one-stop vehicle trading solution
                </h2>
            </div>
            <!-- Mobile hero -->
            <div class="text-center">
                <a href="{{ route('trade.create') }}"
                    class="hero-btn mt-8 w-40 text-center text-primary bg-white  text-base leading-[18px] font-semibold px-6 py-[14px] border-2 border-white hover:bg-transparent hover:text-white transition ease-in-out duration-500 rounded inline-block">
                    Get started
                </a>
            </div>
        </div>
    </div>


    <!-- Extra Tabs -->
    <!-- Tabs -->
    <div class="lg:container mx-auto px-5 md:px-8 lg:px-15 relative hidden sm:block">
        <ul id="tabs" class="flex justify-evenly items-center">
            <li
                class="view-tab-item text-gray-800 font-sans text-[22px] font-semibold  text-center py-2 w-full inline-block">
                Buyer
            </li>
            <li
                class="view-tab-item opacity-30 text-black font-sans text-lg font-normal text-center py-2 w-full inline-block">
                Safe Settlement
            </li>
            <li
                class="view-tab-item opacity-30 text-black font-sans text-lg font-normal text-center py-2 w-full inline-block">
                Inspection
            </li>
            <li
                class="view-tab-item opacity-30 text-black font-sans text-lg font-normal text-center py-2 w-full inline-block">
                Finance
            </li>
            <li
                class="view-tab-item opacity-30 text-black font-sans text-lg font-normal text-center py-2 w-full inline-block">
                Transport
            </li>
            <li
                class="view-tab-item opacity-30 text-black font-sans text-lg font-normal text-center py-2 w-full inline-block">
                Seller
            </li>
        </ul>

    </div>


    <!-- Services Section Starts -->
    <div class="services py-10 md:py-20">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-14">
            <div class="news__heading py-5 md:py-10">
                <h2 class="news__title text-primary text-3xl font-bold">
                    How it works
                </h2>
            </div>
            <div class="services__card flex flex-wrap justify-evenly items-center lg:gap-5">
                <!-- Service Description -->
                <div class="services__card flex flex-wrap justify-around items-center gap-5">
                    <!-- Services Video -->
                    <div class="card__video w-full md:w-[49%]">
                        <!-- <img class="rounded-3xl w-full h-fit object-cover object-center"
                            src="../public/assets/img/services/services.png" alt="Video"> -->
                            <iframe class="w-full h-auto  aspect-video rounded-sm pt-4" src="https://www.youtube.com/embed/_bkX5VkZg8U" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope;"></iframe>
                    </div>
                    <!-- Service Description -->
                    <div class="services__description w-full md:w-[48%] order-2">
                        <p class="card__decription  text-base text-primary pt-5  opacity-70">
                            We are an integrated platform that facilitates several interconnected services to provide you with a unique and secure vehicle buying and selling opportunity. A pre-purchase inspection helps to evaluate the vehicle’s condition prior to the purchase. Vehicle finance can help you with the required fund. Safe settlement ensures the transaction is fraudulence free. Vehicle transport can deliver the vehicle to the buyer’s doorstep or nearby depo.
                        </p>
                        <!-- Card Buttons -->
                        <div
                            class="card-buttons mt-8 xxs:mt-4 space-y-4 space-x-0 xsm:space-x-6 md:space-x-3 lg:space-x-6">
                            <a href="{{ route('services') }}" class="footer__cta--btn  w-40 text-center text-white bg-primary f text-base leading-[18px] font-semibold px-6 py-[14px] border-2 border-primary hover:bg-white hover:text-primary transition ease-in-out duration-500 rounded inline-block">
                                Learn More
                            </a>
                            <a href="{{ route('about_us') }}"
                                class="work__btn w-40 text-center text-primary bg-white f text-base leading-[18px] font-semibold px-6 py-[14px] border-2 border-primary hover:bg-primary hover:text-white transition ease-in-out duration-500 rounded inline-block">
                                About Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section Ends -->

    <!-- Vehicle Slider Section Strats -->
    <div class="bg-home-slider hidden md:block">
        <!-- Vehicle Body -->
        <div class="vehicle__body lg:h-[1000px] bg-center bg-cover pt-12">
            <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
                <!-- Vehicle Heading -->
                <div class="vehicle__heading -mb-20">
                    <h2
                        class="vehicle__title font-inter text-white text-[40px] leading-[52px] font-extrabold text-center">
                        Connecting sellers and buyers with <br> one-stop services
                    </h2>
                </div>
                <!-- Vehicle Text Slider -->
                <div class="swiper vehicle-slider">
                    <div class="swiper-wrapper">
                        <!-- Slider Item -->
                        <div class="swiper-slide w-full h-full">
                            <h3
                                class="vehicle__bg font-inter text-white text-[160px] xl:text-[360px] leading-[300px] font-semibold text-center uppercase opacity-10 tracking-[30px] z-30">
                                Car
                            </h3>
                        </div>
                        <!-- Slider Item -->
                        <div class="swiper-slide w-full h-full">
                            <h3
                                class="vehicle__bg font-inter text-white text-[160px] xl:text-[360px] leading-[300px] font-semibold text-center uppercase opacity-10 tracking-[30px] z-30">
                                Bike
                            </h3>
                        </div>
                        <!-- Slider Item -->
                        <div class="swiper-slide w-full h-full">
                            <h3
                                class="vehicle__bg font-inter text-white text-[160px] xl:text-[360px] leading-[300px] font-semibold text-center uppercase opacity-10 tracking-[30px] z-30">
                                Boat
                            </h3>
                        </div>
                        <!-- Slider Item -->
                        <div class="swiper-slide w-full h-full">
                            <h3
                                class="vehicle__bg font-inter text-white text-8xl xl:text-[250px] leading-[300px] font-semibold text-center uppercase opacity-10 tracking-[30px] z-30">
                                Caravan
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- Vehicle Info -->
                <div class="vehicle__info flex gap-5 lg:gap-8 xl:gap-10 items-center -mt-28">
                    <!-- Vehicle Info Item -->
                    <div class="vehicle__info__text w-1/3 text-right">
                        <!-- Info First -->
                        <div class="info__first py-20">
                            <a href="{{ route('vehicle_finance') }}" class="hover:opacity-60">
                                <h4
                                    class="text__title uppercase font-inter font-semibold text-3xl text-white">
                                    Vehicle Finance
                                </h4>
                            </a>
                            <p class="text__description font-inter text-base text-white opacity-50 py-3">
                                We can help you finance your vehicle so that money doesn’t stop you from your desired purchase
                            </p>
                        </div>
                        <!-- Info Secend -->
                        <div class="info__secend">
                            <a href="{{ route('safe_settlement') }}" class="hover:opacity-60">
                                <h4
                                    class="text__title uppercase font-inter font-semibold text-3xl text-white">
                                    Safe settlement
                                </h4>
                            </a>
                            <p class="text__description font-inter text-base text-white opacity-50 py-3 ">
                                We can make the transaction safe and secure so that you don’t need to worry about fraudulency
                            </p>
                        </div>
                    </div>
                    <!-- Vehicle Slider -->
                    <div class="swiper vehicle-slider w-1/3">
                        <div class="swiper-wrapper">
                            <!-- Slider Item -->
                            <div class="swiper-slide">
                                <div class="vehicle__info__img text-center z-40">
                                    <img class="w-fit h-fit" src="{{ asset('/assets/img/car.png') }}" alt="Vehicle Photo">
                                </div>
                            </div>
                            <!-- Slider Item -->
                            <div class="swiper-slide">
                                <div class="vehicle__info__img text-center z-40">
                                    <img class="w-fit h-fit" src="{{ asset('/assets/img/bike.png') }}" alt="Vehicle Photo">
                                </div>
                            </div>
                            <!-- Slider Item -->
                            <div class="swiper-slide">
                                <div class="vehicle__info__img text-center z-40">
                                    <img class="w-fit h-fit" src="{{ asset('/assets/img/boat.png') }}" alt="Vehicle Photo">
                                </div>
                            </div>
                            <!-- Slider Item -->
                            <div class="swiper-slide">
                                <div class="vehicle__info__img text-center z-40">
                                    <img class="w-fit h-fit" src="{{ asset('/assets/img/caravan.png') }}" alt="Vehicle Photo">
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Vehicle Info Item -->
                    <div class="vehicle__info__text w-1/3 text-left">
                        <!-- Info First -->
                        <div class="info__first py-20">
                            <a href="{{ route('pre_purchase_inspection') }}" class="hover:opacity-60">
                                <h4
                                    class="text__title uppercase font-inter font-semibold text-3xl text-white">
                                    Pre-purchase Inspection
                                </h4>
                            </a>
                            <p class="text__description font-inter text-base text-white opacity-50 py-3 ">
                                A pre-purchase inspection can help to ensure that you are getting exactly what you needed
                            </p>
                        </div>
                        <!-- Info Secend -->
                        <div class="info__secend">
                            <a href="{{ route('vehicle_tranport') }}" class="hover:opacity-60">
                                <h4
                                    class="text__title uppercase font-inter font-semibold text-3xl text-white">
                                    Vehicle Transport
                                </h4>
                            </a>
                            <p class="text__description font-inter text-base text-white opacity-50 py-3">
                                Get the vehicle delivered to the doorstep or nearby depo without any hassle
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vehicle Slider Section Ends -->


    <!-- Counter section Starts -->
    <div class="counter py-10 md:py-20">
        <div class="lg:container mx-auto lg:max-w-screen-2xl  px-5 md:px-8 lg:px-15 flex flex-wrap justify-start">
            <!-- Counter Work -->
            <div class="counter__work w-full lg:w-1/2">
                <div class="">
                    <h2 class="news__title text-primary text-3xl font-bold">
                        How much we’ve done so far
                    </h2>

                    <p class="work__text pt-3 pb-6 font-roboto text-base lg:w-4/5 font-normal text-primary opacity-75">
                        Carsaround aims to connect buyers and sellers countrywide and make vehicle trading easier
                    </p>
                </div>
                <a href="{{ route('services') }}"
                    class="footer__cta--btn  w-40 text-center text-white bg-primary f text-base leading-[18px] font-semibold px-6 py-[14px] border-2 border-primary hover:bg-white hover:text-primary transition ease-in-out duration-500 rounded hidden lg:inline-block">
                    Get Started
                </a>
            </div>
            <!-- Counter Body -->
            <div class="counter__body w-full lg:w-1/2">
                <!-- Counter Item -->
                <div class="counter__item grid grid-cols-1 xxs:grid-cols-2 gap-10">
                    <!-- Counter List -->
                    <div class="counter__list">
                        <img class="lsit__img" src="{{ asset('/assets/img/icon/square.png') }}" alt="Icon">
                        <h3 class="list__title font-poppins text-xl font-semibold py-2">
                            100+


                        </h3>
                        <p class="list__text font-roboto text-sm text-primary opacity-75">
                            Buyers and Sellers are connected
                        </p>
                    </div>
                    <!-- Counter List -->
                    <div class="counter__list">
                        <img class="lsit__img" src="{{ asset('/assets/img/icon/circle.png') }}" alt="Icon">
                        <h3 class="list__title font-poppins text-xl font-semibold py-2">
                            200+


                        </h3>
                        <p class="list__text font-roboto text-sm text-primary opacity-75">
                            Trades are successfully facilitated via Carsaround
                        </p>
                    </div>
                    <!-- Counter List -->
                    <div class="counter__list">
                        <img class="lsit__img" src="{{ asset('/assets/img/icon/half_circle.png') }}" alt="Icon">
                        <h3 class="list__title font-poppins text-xl font-semibold py-2">
                            4


                        </h3>
                        <p class="list__text font-roboto text-sm text-primary opacity-75">
                            Services added to provide secured transaction
                        </p>
                    </div>
                    <!-- Counter List -->
                    <div class="counter__list ">
                        <img class="lsit__img" src="{{ asset('/assets/img/icon/pyramid.png') }}" alt="Icon">
                        <h3 class="list__title font-poppins text-xl font-semibold py-2">
                            4

                        </h3>
                        <p class="list__text font-roboto text-sm text-primary opacity-75">
                            Types of vehicles are eligible for the trade facilities
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter section Ends -->


    <!-- News section Starts -->
    <div class="news py-16 md:pb-32">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
            <!-- News Body -->
            <div class="news__body">
                <!-- News Heading -->
                <div class="news__heading">
                    <div class="flex flex-wrap justify-between">
                        <div class="">
                            <h2 class="news__title text-primary text-3xl font-bold">
                                News and Research
                            </h2>

                            <p
                                class="work__text pt-3 pb-6 font-roboto text-base  font-normal text-primary opacity-75">
                                Find out the latest news & research regarding vehicle buying & selling
                            </p>
                        </div>
                        <div class="hidden md:block">
                            <a href="{{ route('news_research') }}"
                                class="work__btn w-40 text-center text-primary bg-white f text-base leading-[18px] font-semibold px-6 py-[14px] border-2 border-primary hover:bg-primary hover:text-white transition ease-in-out duration-500 rounded inline-block">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Desktop Grid -->
                <div class="grid-cols-4 gap-x-6 hidden md:grid pt-2">
                    <div class="col-span-2 md:col-span-2 shadow-sm p-4 rounded-md order-1">
                        <!-- Card List -->
                        <div class="card__list">
                            <!-- Card Item -->
                            <div class="card__item">
                                <img class="card__img rounded-md w-full lg:w-[651px] h-[448px] object-cover object-center"
                                    src="{{ asset('/assets/img/news/1.png') }}" alt="Post Image">
                                <p class="card__text  text-xs text-primary opacity-75 pt-4 pb-1">
                                    News - June 20, 2022
                                </p>
                                <h3 class="card__title  text-primary  text-xl hover:opacity-80% font-bold">
                                    <a href="{{ route('news_details') }}" class="hover:opacity-80">
                                        Tesla Recalls More Vehicles as US Agency Increases Scrutiny
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1 space-y-6 order-2">
                        <!-- Card List -->
                        <div class="card__list col-span-6 shadow-sm p-4 rounded-md order-1">
                            <!-- Card Item -->
                            <div class="card__item">
                                <img class="card__img rounded-md w-full lg:w-[651px] h-40 object-cover object-center"
                                    src="{{ asset('/assets/img/news/2.png') }}" alt="Post Image">
                                <p class="card__text  text-xs text-primary opacity-75 pt-4 pb-1">
                                    Research - June 20, 2022
                                </p>
                                <h3 class="card__title text-primary  text-base hover:opacity-80% font-bold">
                                    <a href="{{ route('news_details') }}" class="hover:opacity-80">
                                        4 Mistakes to Avoid When Buying a Car
                                    </a>
                                </h3>
                            </div>
                        </div>
                        <!-- Card List -->
                        <div class="card__list col-span-6 shadow-sm p-4 rounded-md order-2">
                            <!-- Card Item -->
                            <div class="card__item">
                                <img class="card__img rounded-md w-full lg:w-[651px] h-40 object-cover object-center"
                                    src="{{ asset('/assets/img/news/3.png') }}" alt="Post Image">
                                <p class="card__text  text-xs text-primary opacity-75 pt-4 pb-1">
                                    News - June 20, 2022
                                </p>
                                <h3 class="card__title  text-primary  text-base hover:opacity-80% font-bold">
                                    <a href="{{ route('news_details') }}" class="hover:opacity-80">
                                        2023 Cupra Born EV pricing announced
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 hidden lg:block lg:col-span-1 space-y-6 order-3">
                        <!-- Card List -->
                        <div class="card__list col-span-6 shadow-sm p-4 rounded-md order-1">
                            <!-- Card Item -->
                            <div class="card__item">
                                <img class="card__img rounded-md w-full lg:w-[651px] h-40 object-cover object-center"
                                    src="{{ asset('/assets/img/news/4.png') }}" alt="Post Image">
                                <p class="card__text  text-xs text-primary opacity-75 pt-4 pb-1">
                                    Research - June 20, 2022
                                </p>
                                <h3 class="card__title text-primary  text-base hover:opacity-80% font-bold">
                                    <a href="{{ route('news_details') }}" class="hover:opacity-80">
                                        Types of Electric Vehicles (EVs) hitting Australia in 2022
                                    </a>
                                </h3>
                            </div>
                        </div>
                        <!-- Card List -->
                        <div class="card__list col-span-6 shadow-sm p-4 rounded-md order-2">
                            <!-- Card Item -->
                            <div class="card__item">
                                <img class="card__img rounded-md w-full lg:w-[651px] h-40 object-cover object-center"
                                    src="{{ asset('/assets/img/news/5.png') }}" alt="Post Image">
                                <p class="card__text  text-xs text-primary opacity-75 pt-4 pb-1">
                                    Research - June 20, 2022
                                </p>
                                <h3 class="card__title  text-primary  text-base hover:opacity-80% font-bold">
                                    <a href="{{ route('news_details') }}" class="hover:opacity-80">
                                        Australia’s Top 20 Choice of Cars
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile Grid -->
                <div class="block md:hidden">
                    <div class="grid grid-cols-2 gap-4">
                        <div
                            class="card__list col-span-2 xxs:col-span-1 shadow-sm sm:shadow-sm p-2 xsm:p-4 sm:py-6 rounded-md">
                            <!-- Card Item -->
                            <div class="card__item">
                                <img class="card__img rounded-md w-full lg:w-[651px] h-36 xxs:h-24 xsm:h-36 sm:h-44 object-cover object-center"
                                    src="{{ asset('/assets/img/news/1.png') }}" alt="Post Image">
                                <p class="card__text text-xs text-primary opacity-75 pt-4 pb-1">
                                    News - June 20, 2022
                                </p>
                                <h3 class="card__title  text-primary  text-xs sm:text-sm hover:opacity-80% font-bold">
                                    <a href="{{ route('news_details') }}" class="hover:opacity-80">
                                        Tesla Recalls More Vehicles as US Agency Increases Scrutiny
                                    </a>
                                </h3>
                            </div>
                        </div>
                        <div
                            class="card__list col-span-2 xxs:col-span-1 shadow-sm sm:shadow-sm p-2 xsm:p-4 sm:py-6 rounded-md">
                            <!-- Card Item -->
                            <div class="card__item">
                                <img class="card__img rounded-md w-full lg:w-[651px] h-36 xxs:h-24 xsm:h-36 sm:h-44 object-cover object-center"
                                    src="{{ asset('/assets/img/news/2.png') }}" alt="Post Image">
                                <p class="card__text text-xs text-primary opacity-75 pt-4 pb-1">
                                    Research - June 20, 2022
                                </p>
                                <h3 class="card__title  text-primary  text-xs sm:text-sm hover:opacity-80% font-bold">
                                    <a href="{{ route('news_details') }}" class="hover:opacity-80">
                                        4 Mistakes to Avoid When Buying a Car
                                    </a>
                                </h3>
                            </div>
                        </div>
                        <div
                            class="card__list col-span-2 xxs:col-span-1 shadow-sm sm:shadow-sm p-2 xsm:p-4 sm:py-6 rounded-md">
                            <!-- Card Item -->
                            <div class="card__item">
                                <img class="card__img rounded-md w-full lg:w-[651px] h-36 xxs:h-24 xsm:h-36 sm:h-44 object-cover object-center"
                                    src="{{ asset('/assets/img/news/4.png') }}" alt="Post Image">
                                <p class="card__text text-xs text-primary opacity-75 pt-4 pb-1">
                                    News - June 20, 2022
                                </p>
                                <h3 class="card__title  text-primary  text-xs sm:text-sm hover:opacity-80% font-bold">
                                    <a href="{{ route('news_details') }}" class="hover:opacity-80">
                                        Types of Electric Vehicles (EVs) hitting Australia in 2022
                                    </a>
                                </h3>
                            </div>
                        </div>
                        <div
                            class="card__list col-span-2 xxs:col-span-1 shadow-sm sm:shadow-sm p-2 xsm:p-4 sm:py-6 rounded-md">
                            <!-- Card Item -->
                            <div class="card__item">
                                <img class="card__img rounded-md w-full lg:w-[651px] h-36 xxs:h-24 xsm:h-36 sm:h-44 object-cover object-center"
                                    src="{{ asset('/assets/img/news/5.png') }}" alt="Post Image">
                                <p class="card__text text-xs text-primary opacity-75 pt-4 pb-1">
                                    News - June 20, 2022
                                </p>
                                <h3 class="card__title  text-primary  text-xs sm:text-sm hover:opacity-80% font-bold">
                                    <a href="{{ route('news_details') }}" class="hover:opacity-80">
                                        Australia’s Top 20 Choice of Cars
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-10">
                        <a href="news.html"
                            class="work__btn w-40 text-center text-primary bg-white f text-base leading-[18px] font-semibold px-6 py-[14px] border-2 border-primary hover:bg-primary hover:text-white transition ease-in-out duration-500 rounded inline-block">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- News section Ends -->

@endsection
