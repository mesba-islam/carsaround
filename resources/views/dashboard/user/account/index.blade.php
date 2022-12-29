

@extends('dashboard.user.layouts.dashboard_app')


@section('title')
    Account Settings | Cars Around
@endsection


@section('content')



            <!-- Dashboard Details -->
            <div class="dashboard__details px-5 md:px-10 w-5/6 ml-auto border-l">
                <!-- Breadcrumb section -->
                <div class="breadcrumb pt-[30px]">
                    <!-- Breadcrumb Item -->
                    <nav class="breadcrumb__item flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 md:space-x-2">
                            <!-- Breadcrumb List -->
                            <li class="breadcrumb__list inline-flex items-center">
                                <a href="{{ route('dashboard') }}"
                                    class="inline-flex items-center text-base font-roboto font-normal text-primary opacity-50">
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
                            <li class="breadcrumb__list" aria-current="page">
                                <div class="flex items-center">
                                    <span class="array__icon mr-2">
                                        <svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.5" d="M0.225303 1.12093C0.498401 0.846208 0.925745 0.82124 1.22688 1.04601L1.31316 1.12093L9.77468 9.63288C10.0478 9.90753 10.0726 10.3375 9.84914 10.6404L9.77468 10.7272L1.31316 19.2391C1.01276 19.5413 0.525703 19.5413 0.225303 19.2391C-0.0477947 18.9644 -0.0726151 18.5345 0.150821 18.2316L0.225303 18.1448L8.14288 10.18L0.225303 2.21526C-0.0750973 1.91308 -0.0750973 1.42312 0.225303 1.12093Z" fill="#242634"/>
                                        </svg>
                                    </span>
                                    <span class="font-roboto font-medium text-lg text-primary opacity-50">
                                        Account settings
                                    </span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="flex flex-wrap justify-start gap-x-5 items-center mt-16 mb-6">
                    <div class="">
                        <!-- Dashboard Title -->
                        <h2 class="dashboard__title font-roboto font-bold text-base text-[#231F20]">
                            Account settings
                        </h2>
                    </div>
                    <div class="">
                        <button onclick="window.location.href='{{ route('account_update') }}'" class="text-center text-primary bg-white text-sm leading-[18px] font-semibold px-4 py-1 border-2 border-primary hover:bg-primary hover:text-white transition ease-in-out duration-500 rounded inline-block">Edit</button>
                    </div>
                </div>
                <!-- Dashboard Profile -->
                <div class="dashboard__profile border py-3 px-4 mb-[30px]">
                    <!-- Profile Title -->
                    <div class="flex flex-wrap justify-start md:justify-start items-center">
                        <table class="table-fixed w-full md:w-[70%] lg:w-3/5 xl:w-2/4 order-2 md:order-1">
                            <tbody>
                                <tr class="">
                                    <td class="w-full sm:table-cell sm:w-1/4 py-4 font-roboto font-semibold text-sm text-[#9E9E9E]">Name</td>
                                    <td class="w-full sm:w-3/4 py-4 font-roboto font-normal text-sm text-[#1D1D1F] break-words">{{ App\Helpers\NameConversionHelper::generateAuthUserFullName() }}</td>
                                    <!-- <td class="w-0 sm:w-1/4 py-4">&nbsp;</td> -->
                                </tr>
                                <tr class="">
                                    <td class="w-full sm:table-cell sm:w-1/4 py-4 font-roboto font-semibold text-sm text-[#9E9E9E]">Date of birth</td>
                                    <td class="w-full sm:w-3/4 py-4 font-roboto font-normal text-sm text-[#1D1D1F]">{{ auth()->user()->date_of_birth }}</td>
                                    <!-- <td class="w-0 sm:w-1/4 py-4">&nbsp;</td> -->
                                </tr>
                                <tr class="">
                                    <td class="w-full sm:w-1/4 py-4 font-roboto font-semibold text-sm text-[#9E9E9E]">Current address</td>
                                    <td class="w-full sm:w-3/4 py-4 font-roboto font-normal text-sm text-[#1D1D1F]">{{ auth()->user()->address }}</td>
                                    <!-- <td class="w-0 sm:w-1/4 py-4">&nbsp;</td> -->
                                </tr>

                                <tr class="">
                                    <td class="w-full sm:w-1/4 py-4 font-roboto font-semibold text-sm text-[#9E9E9E]">Email address</td>
                                    <td class="w-full sm:w-3/4 py-4 font-roboto font-normal text-sm text-[#1D1D1F]">{{ auth()->user()->email }}</td>
                                    <!-- <td class="w-0 sm:w-1/4 py-4">&nbsp;</td> -->
                                </tr>
                                <tr class="">
                                    <td class="w-full sm:w-1/4 py-4 font-roboto font-semibold text-sm text-[#9E9E9E] ">Phone number</td>
                                    <td class="w-full sm:w-3/4 py-4 font-roboto font-normal text-sm text-[#1D1D1F]">{{ auth()->user()->phone_no }}</td>
                                    <!-- <td class="w-0 sm:w-1/4 py-4">&nbsp;</td> -->
                                </tr>
                            </tbody>
                        </table>
                        <div class="profile-img text-center lg:text-left w-full md:w-1/4 lg:w-1/4 xl:w-2/5 order-1 md:order-2">
                            <img src="{{ asset('/assets/img/default.png') }}" class="inline-block w-28 h-28 md:w-40 xl:w-60 md:h-40 xl:h-60 rounded-full border object-cover object-center" alt="profile-img">
                        </div>
                    </div>
                </div>
                <!-- Authorized ID Cards -->
                <div class="dashboard__authorized border pt-3 px-4 mb-[30px] rounded hidden">
                    <!-- Authorized Title -->
                    <h2 class="authorized__title font-roboto font-semibold text-base text-[#1D1D1F] pb-6">
                        Authorized ID Cards
                    </h2>
                    <table class="table-fixed w-full">
                        <tbody>
                            <tr class="border-b">
                                <td class="w-full sm:w-1/4 py-4 font-roboto font-semibold text-sm text-[#9E9E9E]">Driver License</td>
                                <td class="w-full sm:w-2/4 py-4 font-roboto font-normal text-sm text-[#1D1D1F]">
                                    <button class="preview">
                                        <span class="preview-icon">
                                            <svg class="w-5 h-auto fill-[#9CA1AC] hover:fill-[#1D1D1F]" viewBox="0 0 19 22" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.5 18.5C13.3284 18.5 14 17.8284 14 17C14 16.1716 13.3284 15.5 12.5 15.5C11.6716 15.5 11 16.1716 11 17C11 17.8284 11.6716 18.5 12.5 18.5Z" />
                                                <path d="M18.3328 16.6093C17.8693 15.4287 17.0697 14.41 16.0329 13.6796C14.9961 12.9491 13.7677 12.539 12.5 12.5C11.2323 12.539 10.0039 12.9491 8.96714 13.6796C7.93033 14.41 7.13066 15.4287 6.66725 16.6093L6.5 17L6.66725 17.3907C7.13066 18.5713 7.93033 19.59 8.96714 20.3204C10.0039 21.0509 11.2323 21.461 12.5 21.5C13.7677 21.461 14.9961 21.0509 16.0329 20.3204C17.0697 19.59 17.8693 18.5713 18.3328 17.3907L18.5 17L18.3328 16.6093ZM12.5 20C11.9067 20 11.3266 19.8241 10.8333 19.4944C10.3399 19.1648 9.95542 18.6962 9.72836 18.148C9.5013 17.5999 9.44189 16.9967 9.55764 16.4147C9.6734 15.8328 9.95912 15.2982 10.3787 14.8787C10.7982 14.4591 11.3328 14.1734 11.9147 14.0576C12.4967 13.9419 13.0999 14.0013 13.648 14.2284C14.1962 14.4554 14.6648 14.8399 14.9944 15.3333C15.3241 15.8266 15.5 16.4067 15.5 17C15.499 17.7953 15.1826 18.5578 14.6202 19.1202C14.0578 19.6826 13.2953 19.999 12.5 20Z" />
                                                <path d="M5 20H2V2.00001H8V6.50001C8.00119 6.89747 8.1596 7.27831 8.44065 7.55936C8.7217 7.84041 9.10254 7.99882 9.5 8.00001H14V11H15.5V6.50001C15.5026 6.40144 15.4839 6.30347 15.4451 6.21284C15.4062 6.12221 15.3482 6.04107 15.275 5.97501L10.025 0.725011C9.95897 0.651769 9.87784 0.593724 9.7872 0.554879C9.69656 0.516034 9.59857 0.497314 9.5 0.500011H2C1.60254 0.501198 1.2217 0.659614 0.940651 0.940662C0.659604 1.22171 0.501187 1.60255 0.5 2.00001V20C0.501187 20.3975 0.659604 20.7783 0.940651 21.0594C1.2217 21.3404 1.60254 21.4988 2 21.5H5V20ZM9.5 2.30001L13.7 6.50001H9.5V2.30001Z" />
                                            </svg>
                                        </span>
                                    </button>
                                </td>
                                <td class="w-0  py-4 font-sans font-normal text-sm text-[#4E484A]">&nbsp;</td>
                                <td class="w-full sm:w-1/4 py-4 text-end font-roboto font-medium text-base text-[#231F20]">
                                    <button onclick="window.location.href='linke-heare';">
                                        Update
                                        <span class="right-array">
                                            <svg class="inline" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.58984 16.34L13.1698 11.75L8.58984 7.16L9.99984 5.75L15.9998 11.75L9.99984 17.75L8.58984 16.34Z" fill="#1D1D1F"/>
                                            </svg>
                                        </span>
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="w-full sm:w-1/4 py-4 font-roboto font-semibold text-sm text-[#9E9E9E]">Medicare</td>
                                <td class="w-full sm:w-1/4 py-4 font-roboto font-normal text-sm text-[#1D1D1F]">
                                    <button class="preview">
                                        <span class="preview-icon">
                                            <svg class="w-5 h-auto fill-[#9CA1AC] hover:fill-[#1D1D1F]" viewBox="0 0 19 22" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.5 18.5C13.3284 18.5 14 17.8284 14 17C14 16.1716 13.3284 15.5 12.5 15.5C11.6716 15.5 11 16.1716 11 17C11 17.8284 11.6716 18.5 12.5 18.5Z" />
                                                <path d="M18.3328 16.6093C17.8693 15.4287 17.0697 14.41 16.0329 13.6796C14.9961 12.9491 13.7677 12.539 12.5 12.5C11.2323 12.539 10.0039 12.9491 8.96714 13.6796C7.93033 14.41 7.13066 15.4287 6.66725 16.6093L6.5 17L6.66725 17.3907C7.13066 18.5713 7.93033 19.59 8.96714 20.3204C10.0039 21.0509 11.2323 21.461 12.5 21.5C13.7677 21.461 14.9961 21.0509 16.0329 20.3204C17.0697 19.59 17.8693 18.5713 18.3328 17.3907L18.5 17L18.3328 16.6093ZM12.5 20C11.9067 20 11.3266 19.8241 10.8333 19.4944C10.3399 19.1648 9.95542 18.6962 9.72836 18.148C9.5013 17.5999 9.44189 16.9967 9.55764 16.4147C9.6734 15.8328 9.95912 15.2982 10.3787 14.8787C10.7982 14.4591 11.3328 14.1734 11.9147 14.0576C12.4967 13.9419 13.0999 14.0013 13.648 14.2284C14.1962 14.4554 14.6648 14.8399 14.9944 15.3333C15.3241 15.8266 15.5 16.4067 15.5 17C15.499 17.7953 15.1826 18.5578 14.6202 19.1202C14.0578 19.6826 13.2953 19.999 12.5 20Z" />
                                                <path d="M5 20H2V2.00001H8V6.50001C8.00119 6.89747 8.1596 7.27831 8.44065 7.55936C8.7217 7.84041 9.10254 7.99882 9.5 8.00001H14V11H15.5V6.50001C15.5026 6.40144 15.4839 6.30347 15.4451 6.21284C15.4062 6.12221 15.3482 6.04107 15.275 5.97501L10.025 0.725011C9.95897 0.651769 9.87784 0.593724 9.7872 0.554879C9.69656 0.516034 9.59857 0.497314 9.5 0.500011H2C1.60254 0.501198 1.2217 0.659614 0.940651 0.940662C0.659604 1.22171 0.501187 1.60255 0.5 2.00001V20C0.501187 20.3975 0.659604 20.7783 0.940651 21.0594C1.2217 21.3404 1.60254 21.4988 2 21.5H5V20ZM9.5 2.30001L13.7 6.50001H9.5V2.30001Z" />
                                            </svg>
                                        </span>
                                    </button>
                                </td>
                                <td class="w-0 sm:w-1/4 py-4 font-sans font-normal text-sm text-[#4E484A]">&nbsp;</td>
                                <td class="w-full sm:w-1/4 py-4 text-end font-roboto font-medium text-base text-[#231F20]">
                                    <button onclick="window.location.href='linke-heare';">
                                        Update
                                        <span class="right-array">
                                            <svg class="inline" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.58984 16.34L13.1698 11.75L8.58984 7.16L9.99984 5.75L15.9998 11.75L9.99984 17.75L8.58984 16.34Z" fill="#1D1D1F"/>
                                            </svg>
                                        </span>
                                    </button>
                                </td>
                            </tr>
                            <tr class="">
                                <td class="w-full sm:w-1/4 py-4 font-roboto font-semibold text-sm text-[#9E9E9E]">Passport</td>
                                <td class="w-full sm:w-1/4 py-4 font-roboto font-normal text-sm text-[#1D1D1F]">
                                    <button class="preview">
                                        <span class="preview-icon">
                                            <svg class="w-5 h-auto fill-[#9CA1AC] hover:fill-[#1D1D1F]" viewBox="0 0 19 22" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.5 18.5C13.3284 18.5 14 17.8284 14 17C14 16.1716 13.3284 15.5 12.5 15.5C11.6716 15.5 11 16.1716 11 17C11 17.8284 11.6716 18.5 12.5 18.5Z" />
                                                <path d="M18.3328 16.6093C17.8693 15.4287 17.0697 14.41 16.0329 13.6796C14.9961 12.9491 13.7677 12.539 12.5 12.5C11.2323 12.539 10.0039 12.9491 8.96714 13.6796C7.93033 14.41 7.13066 15.4287 6.66725 16.6093L6.5 17L6.66725 17.3907C7.13066 18.5713 7.93033 19.59 8.96714 20.3204C10.0039 21.0509 11.2323 21.461 12.5 21.5C13.7677 21.461 14.9961 21.0509 16.0329 20.3204C17.0697 19.59 17.8693 18.5713 18.3328 17.3907L18.5 17L18.3328 16.6093ZM12.5 20C11.9067 20 11.3266 19.8241 10.8333 19.4944C10.3399 19.1648 9.95542 18.6962 9.72836 18.148C9.5013 17.5999 9.44189 16.9967 9.55764 16.4147C9.6734 15.8328 9.95912 15.2982 10.3787 14.8787C10.7982 14.4591 11.3328 14.1734 11.9147 14.0576C12.4967 13.9419 13.0999 14.0013 13.648 14.2284C14.1962 14.4554 14.6648 14.8399 14.9944 15.3333C15.3241 15.8266 15.5 16.4067 15.5 17C15.499 17.7953 15.1826 18.5578 14.6202 19.1202C14.0578 19.6826 13.2953 19.999 12.5 20Z" />
                                                <path d="M5 20H2V2.00001H8V6.50001C8.00119 6.89747 8.1596 7.27831 8.44065 7.55936C8.7217 7.84041 9.10254 7.99882 9.5 8.00001H14V11H15.5V6.50001C15.5026 6.40144 15.4839 6.30347 15.4451 6.21284C15.4062 6.12221 15.3482 6.04107 15.275 5.97501L10.025 0.725011C9.95897 0.651769 9.87784 0.593724 9.7872 0.554879C9.69656 0.516034 9.59857 0.497314 9.5 0.500011H2C1.60254 0.501198 1.2217 0.659614 0.940651 0.940662C0.659604 1.22171 0.501187 1.60255 0.5 2.00001V20C0.501187 20.3975 0.659604 20.7783 0.940651 21.0594C1.2217 21.3404 1.60254 21.4988 2 21.5H5V20ZM9.5 2.30001L13.7 6.50001H9.5V2.30001Z" />
                                            </svg>
                                        </span>
                                    </button>
                                </td>
                                <td class="w-0 sm:w-1/4 py-4 font-sans font-normal text-sm text-[#4E484A]">&nbsp;</td>
                                <td class="w-full sm:w-1/4 py-4 text-end font-roboto font-medium text-base text-[#231F20]">
                                    <button onclick="window.location.href='linke-heare';">
                                        Update
                                        <span class="right-array">
                                            <svg class="inline" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.58984 16.34L13.1698 11.75L8.58984 7.16L9.99984 5.75L15.9998 11.75L9.99984 17.75L8.58984 16.34Z" fill="#1D1D1F"/>
                                            </svg>
                                        </span>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Dashboard Notification -->
                <div class="dashboard__notification border pt-3 px-4 mb-[30px] rounded hidden">
                    <!-- Notification Title -->
                    <h2 class="notification__title font-roboto font-semibold text-base text-[#1D1D1F] pb-6">
                        Notification settings
                    </h2>
                    <table class="table-fixed w-full">
                        <tbody>
                            <tr class="border-b">
                                <td class="w-full sm:w-1/4 py-4 font-roboto font-semibold text-sm text-[#9E9E9E]">Desktop notification</td>
                                <td class="w-full sm:w-2/4 py-4 font-roboto font-normal text-sm text-[#1D1D1F]">Private messages, Service updates</td>
                                <td class="w-0  py-4 font-sans font-normal text-sm text-[#4E484A]">&nbsp;</td>
                                <td class="w-full sm:w-1/4 py-4 text-end font-roboto font-medium text-base text-[#231F20]">
                                    <button onclick="window.location.href='linke-heare';">
                                        Update
                                        <span class="right-array">
                                            <svg class="inline" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.58984 16.34L13.1698 11.75L8.58984 7.16L9.99984 5.75L15.9998 11.75L9.99984 17.75L8.58984 16.34Z" fill="#1D1D1F"/>
                                            </svg>
                                        </span>
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="w-full sm:w-1/4 py-4 font-roboto font-semibold text-sm text-[#9E9E9E]">In-app notification</td>
                                <td class="w-full sm:w-1/4 py-4 font-roboto font-normal text-sm text-[#1D1D1F]">Private message, Service updates</td>
                                <td class="w-0 sm:w-1/4 py-4 font-sans font-normal text-sm text-[#4E484A]">&nbsp;</td>
                                <td class="w-full sm:w-1/4 py-4 text-end font-roboto font-medium text-base text-[#231F20]">
                                    <button onclick="window.location.href='linke-heare';">
                                        Update
                                        <span class="right-array">
                                            <svg class="inline" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.58984 16.34L13.1698 11.75L8.58984 7.16L9.99984 5.75L15.9998 11.75L9.99984 17.75L8.58984 16.34Z" fill="#1D1D1F"/>
                                            </svg>
                                        </span>
                                    </button>
                                </td>
                            </tr>
                            <tr class="">
                                <td class="w-full sm:w-1/4 py-4 font-roboto font-semibold text-sm text-[#9E9E9E]">Email notification</td>
                                <td class="w-full sm:w-1/4 py-4 font-roboto font-normal text-sm text-[#1D1D1F]">Private messages, Service updates, Promo ...</td>
                                <td class="w-0 sm:w-1/4 py-4 font-sans font-normal text-sm text-[#4E484A]">&nbsp;</td>
                                <td class="w-full sm:w-1/4 py-4 text-end font-roboto font-medium text-base text-[#231F20]">
                                    <button onclick="window.location.href='linke-heare';">
                                        Update
                                        <span class="right-array">
                                            <svg class="inline" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.58984 16.34L13.1698 11.75L8.58984 7.16L9.99984 5.75L15.9998 11.75L9.99984 17.75L8.58984 16.34Z" fill="#1D1D1F"/>
                                            </svg>
                                        </span>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


@endsection
