
@extends('layouts.front_app')


@section('title')
    Support - Request | Cars Around
@endsection

@section('content')




    <!-- Channel Section Starts -->
    <div class="channel__status mt-[52px] pt-[87px]">
        <div class="lg:container mx-auto px-5 md:px-8 lg:px-15">
            <!-- Status Heading -->
            <div class="status__heading">
                <!-- Status Title -->
                <h2 class="status__title font-roboto text-3xl font-semibold text-blue">
                    What describes you?
                </h2>
            </div>
            <!-- Status Card -->
            <div class="status__card grid pt-4">
                <!-- Card List -->
                <ul class="card__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-[30px]">
                    <!-- Card Item -->
                    <li class="card__item relative flex flex-col items-center">
                        <input class="sr-only peer" type="radio" name="channel" id="buyer" value="buyer">
                        <!--  Buyer Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-semibold text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white flex-1 transition-all ease-in-out duration-300"
                            for="buyer">
                            Buyer
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="card__item relative flex flex-col">
                        <input class="sr-only peer" type="radio" name="channel" id="seller" value="seller">
                        <!-- Seller Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-semibold text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white flex-1 transition-all ease-in-out duration-300"
                            for="seller">
                            Seller
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="card__item relative flex flex-col">
                        <input class="sr-only peer" type="radio" name="channel" id="media" value="media">
                        <!-- Media Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-semibold text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white flex-1 transition-all ease-in-out duration-300"
                            for="media">
                            Media
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="card__item relative flex flex-col">
                        <input class="sr-only peer" type="radio" name="channel" id="other" value="other">
                        <!-- Other Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-semibold text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white flex-1 transition-all ease-in-out duration-300"
                            for="other">
                            Other
                        </label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Channel Section Ends -->

    <!-- Channel Category Section Starts -->
    <div class="channel__category pt-16">
        <div class="lg:container mx-auto px-5 md:px-8 lg:px-15">
            <!-- Category Heading -->
            <div class="category__heading">
                <!-- Heading Title -->
                <h2 class="heading__title font-roboto text-3xl font-semibold  text-blue">
                    Please select the category
                </h2>

            </div>
            <!-- Category Card -->
            <div class="address__card grid pt-4">
                <!-- Card List -->
                <ul class="card__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-[30px]">
                    <!-- Card Item -->
                    <li class="card__item relative flex flex-col items-center">
                        <input class="sr-only peer" type="radio" name="channel-category" id="safe-settlement" value="">
                        <!--  Safe Settlement Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-semibold text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="safe-settlement">
                            Safe Settlement
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="card__item relative flex flex-col">
                        <input class="sr-only peer" type="radio" name="channel-category" id="pre-purchase" value="">
                        <!-- Pre-Purchase Inspection Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-semibold text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="pre-purchase">
                            Pre-Purchase Inspection
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="card__item relative flex flex-col">
                        <input class="sr-only peer" type="radio" name="channel-category" id="vehicle-finance" value="">
                        <!-- Vehicle Finance Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-semibold text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="vehicle-finance">
                            Vehicle Finance
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="card__item relative flex flex-col">
                        <input class="sr-only peer" type="radio" name="channel-category" id="vehicle-transport" value="">
                        <!-- vehicle Transport Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-semibold text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="vehicle-transport">
                            Vehicle Transport
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="card__item relative flex flex-col">
                        <input class="sr-only peer" type="radio" name="channel-category" id="payment-refund" value="">
                        <!-- payment & Refund Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-semibold text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="payment-refund">
                            Payment & Refund
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="card__item relative flex flex-col">
                        <input class="sr-only peer" type="radio" name="channel-category" id="account-profile" value="">
                        <!-- Account & profile Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-semibold text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="account-profile">
                            Account & Profile
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="card__item relative flex flex-col">
                        <input class="sr-only peer" type="radio" name="channel-category" id="understanding-carsaround" value="">
                        <!-- Understanding carsaround Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-semibold text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="understanding-carsaround">
                            Understanding Carsaround
                        </label>
                    </li>
                    <!-- Card Item -->
                    <li class="card__item relative flex flex-col">
                        <input class="sr-only peer" type="radio" name="channel-category" id="other-category" value="">
                        <!-- Other Section -->
                        <label
                            class="flex items-center justify-center text-center font-roboto font-semibold text-primary text-lg bg-white peer-hover:bg-primary peer-hover:text-secondary p-5 peer-checked:bg-primary border-[1px] border-primary cursor-pointer w-full rounded-md peer-checked:text-white  flex-1 transition-all ease-in-out duration-300"
                            for="other-category">
                            Other
                        </label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Channel Category Section Ends -->


    <!-- Form Section Starts -->
    <div class="form pt-16">
        <div class="lg:container mx-auto px-5 md:px-8 lg:px-15">
            <!-- Form -->
            <div class=" items-center grid grid-cols-1 md:grid-cols-2 md:gap-8 lg:gap-18 xl:gap-48">
                <div class="w-full space-y-6">
                    <!-- Name -->
                    <div class="name-field w-full flex flex-wrap justify-start">
                        <label for="name"
                            class="name font-roboto text-sm  text-primary font-light pb-1">
                            Full Name *
                        </label>
                        <input
                            class="pl-6 w-full h-16 bg-card p-2 font-roboto border-2 border-transparent text-sm focus:outline-none focus:bg-white focus:border-2 border-card rounded"
                            type="text" name="Name" id="name" placeholder="Cameron" required>
                    </div>
                    <!-- Contact -->
                    <div class="contact-field w-full flex flex-wrap justify-start">
                        <label for="contact"
                            class=" contact font-roboto text-sm  text-primary font-light pb-1">
                            Contact Number *
                        </label>
                        <input
                            class="pl-6 w-full h-16 bg-card p-2 font-roboto border-2 border-transparent text-sm focus:outline-none focus:bg-white focus:border-2 border-card rounded"
                            type="number" name="contact" id="contact" placeholder="04  123 456 789" required>
                    </div>
                    <!-- Email -->
                    <div class="email-field w-full flex flex-wrap justify-start">
                        <label for="email"
                            class=" email font-roboto text-sm  text-primary font-light pb-1">
                            Email*
                        </label>
                        <input
                            class="pl-6 w-full h-16 bg-card p-2 font-roboto border-2 border-transparent text-sm focus:outline-none focus:bg-white focus:border-2 border-card rounded"
                            type="email" name="email" id="email" placeholder="debra.holt@example.com" required>
                    </div>
                    <!-- Attachments -->
                    <div class="attachments-field w-full flex flex-wrap justify-start">
                        <label for="attachments"
                            class=" attachments font-roboto text-sm  text-primary font-light pb-1">
                            Attachments (optional)
                        </label>
                        <label class="justify-center items-center h-24 w-full flex bg-card hover:bg-opacity-50 cursor-pointer border-dashed border-2 border-transparent hover:border-secondaryDark rounded transition-all ease-in-out duration-300">
                            <!-- Drop-down File -->
                            <div class="drop-down__file text-center">
                                <!-- Cloud Icon -->
                                <span class="icon justify-center flex">
                                    <svg width="35" height="25" viewBox="0 0 99 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1060_5823)">
                                            <path
                                                d="M80.0439 30.5347C79.0374 15.2445 68.1992 0.5 48.3214 0.5C30.1408 0.5 16.1205 13.7576 15.378 31.4505C5.43086 34.4868 0 44.9301 0 52.5312C0 64.2348 9.91414 74.5 21.2143 74.5H36.5357C36.8483 74.5 37.1481 74.3782 37.3691 74.1613C37.5901 73.9445 37.7143 73.6504 37.7143 73.3438C37.7143 73.0371 37.5901 72.743 37.3691 72.5262C37.1481 72.3093 36.8483 72.1875 36.5357 72.1875H21.2143C11.1681 72.1875 2.35714 63.0023 2.35714 52.5312C2.35714 45.4758 8.66014 32.875 21.2143 32.875H24.75C25.0626 32.875 25.3624 32.7532 25.5834 32.5363C25.8044 32.3195 25.9286 32.0254 25.9286 31.7188C25.9286 31.4121 25.8044 31.118 25.5834 30.9012C25.3624 30.6843 25.0626 30.5625 24.75 30.5625H21.2143C20.0145 30.5625 18.8807 30.6943 17.7752 30.8839C18.6992 17.0321 29.4313 2.8125 48.3214 2.8125C68.5646 2.8125 77.7857 18.3964 77.7857 32.875V36.3438C77.7857 36.6504 77.9099 36.9445 78.1309 37.1613C78.3519 37.3782 78.6517 37.5 78.9643 37.5C79.2769 37.5 79.5766 37.3782 79.7977 37.1613C80.0187 36.9445 80.1429 36.6504 80.1429 36.3438V32.8542C87.2591 33.6196 96.6429 41.1121 96.6429 52.5312C96.6429 61.3789 87.9426 72.1875 77.7857 72.1875H60.1071C52.4747 72.1875 49.5 69.2691 49.5 61.7812V30.0607L59.1124 39.4726C59.221 39.5831 59.3509 39.6714 59.4946 39.7322C59.6383 39.793 59.7929 39.8251 59.9494 39.8266C60.1059 39.8282 60.2611 39.7991 60.406 39.7412C60.551 39.6833 60.6827 39.5976 60.7935 39.4892C60.9043 39.3808 60.992 39.2518 61.0514 39.1098C61.1109 38.9678 61.1409 38.8156 61.1398 38.6621C61.1387 38.5085 61.1064 38.3568 61.0448 38.2156C60.9833 38.0745 60.8937 37.9468 60.7813 37.8399L50.2661 27.5447C48.8659 26.1757 47.7793 26.1757 46.3815 27.5447L35.8663 37.8399C35.6516 38.058 35.5328 38.3501 35.5355 38.6532C35.5382 38.9564 35.6621 39.2464 35.8806 39.4608C36.0992 39.6752 36.3948 39.7968 36.7038 39.7994C37.0128 39.802 37.3105 39.6855 37.5328 39.4749L47.1429 30.0607V61.7812C47.1429 70.578 51.1406 74.5 60.1071 74.5H77.7857C89.2108 74.5 99 62.4195 99 52.5312C99 40.5826 89.0458 31.2377 80.0439 30.5347Z"
                                                fill="#242634" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1060_5823">
                                                <rect width="99" height="74" fill="white" transform="translate(0 0.5)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <!-- Drag & Drop -->
                                <h4 class="font-roboto text-[10px] font-light  text-primary pt-2">
                                    Drag & Drop, instant pic or upload
                                </h4>
                                <input type="file" name="file_upload" class="" placeholder="drag">
                            </div>
                        </label>
                    </div>
                </div>
                <div class="w-full space-y-6 mt-6 md:mt-0">
                    <!--  Main Concern -->
                    <div class="concern-field w-full flex flex-wrap justify-start">
                        <label for="concern"
                            class=" concern font-roboto text-sm  text-primary font-light pb-1">
                            Main Concern
                        </label>
                        <input
                            class="block pl-6 w-full h-16 bg-card p-2 font-roboto border-2 border-transparent text-sm focus:outline-none focus:bg-white focus:border-2 border-card rounded"
                            type="text" name="concern" id="concern" placeholder="Please summarize your concern within a few words...">
                    </div>
                    <!-- Message -->
                    <div class="message-field w-full flex flex-wrap justify-start">
                        <label for="message"
                            class=" message font-roboto text-sm  text-primary font-light pb-1">
                            Full details
                        </label>
                        <div class="bg-[#F0EEE6] w-full border-b-2 border-white grid grid-cols-4 mt-2 rounded-t">
                            <ul class="flex justify-center items-center gap-2 lg:gap-4 xl:gap-5 px-2 md:px-3 2xl:px-8 py-4 m-0 border-r-2 border-white">
                                <!-- Bold Icon -->
                                <li class="bold-icon">
                                    <button>
                                        <svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.8" d="M5.61383 13.5719C8.32112 13.5719 10 12.1745 10 9.94289C10 8.26402 8.73506 7.00807 7.01247 6.87566V6.80496C7.67215 6.70564 8.27462 6.37382 8.71118 5.86937C9.14774 5.36493 9.38964 4.72107 9.39324 4.05396C9.39324 2.11284 7.89947 0.891602 5.5187 0.891602H0V13.5719H5.61383ZM2.65458 2.86872H4.83481C6.07276 2.86872 6.78493 3.44849 6.78493 4.4679C6.78493 5.54001 5.97635 6.16477 4.561 6.16477H2.65458V2.86743V2.86872ZM2.65458 11.5948V7.91307H4.87852C6.44299 7.91307 7.29528 8.54554 7.29528 9.73207C7.29528 10.9443 6.4687 11.5948 4.94022 11.5948H2.6533H2.65458Z" fill="#242634"/>
                                        </svg>
                                    </button>
                                </li>
                                <!-- Italic Icon -->
                                <li class="italic-icon">
                                    <button>
                                        <svg width="10" height="13" viewBox="0 0 10 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.8" d="M10 2.78544V0.642578H2.85714V2.78544H4.90571L2.86571 9.92829H0V12.0711H7.14286V9.92829H5.09429L7.13429 2.78544H10Z" fill="#242634"/>
                                        </svg>
                                    </button>
                                </li>
                                <!-- Underline Icon -->
                                <li class="underline-icon">
                                    <button>
                                        <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.8" d="M0 12.4998H12V14.214H0V12.4998ZM0.857143 0.499756V5.64261C0.857143 8.4789 3.16371 10.7855 6 10.7855C8.83629 10.7855 11.1429 8.4789 11.1429 5.64261V0.499756H9.42857V5.64261C9.42857 7.53347 7.89086 9.07119 6 9.07119C4.10914 9.07119 2.57143 7.53347 2.57143 5.64261V0.499756H0.857143Z" fill="#242634"/>
                                        </svg>
                                    </button>
                                </li>
                            </ul>
                            <ul class="flex justify-center items-center gap-2 lg:gap-4 xl:gap-5 px-2 md:px-3 2xl:px-8 py-4 m-0 border-r-2 border-white">
                                <!-- Ordered list of item Icon -->
                                <li class="ordered-list-icon">
                                    <button>
                                        <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.55664 0.756761C2.55653 0.621368 2.51 0.490106 2.42483 0.38486C2.33966 0.279614 2.22098 0.206744 2.08859 0.178401C1.95619 0.150057 1.81809 0.167953 1.69729 0.229103C1.57649 0.290254 1.48031 0.390964 1.42477 0.514442L1.42319 0.51681C1.35293 0.658233 1.27247 0.794354 1.18245 0.924094C1.01117 1.17115 0.768853 1.44741 0.467336 1.63605C0.399183 1.67613 0.339747 1.72944 0.292537 1.79286C0.245326 1.85628 0.211296 1.92851 0.192456 2.00529C0.173616 2.08207 0.170346 2.16185 0.182842 2.23992C0.195337 2.31799 0.223342 2.39276 0.265207 2.45983C0.307071 2.5269 0.361945 2.5849 0.426591 2.63041C0.491237 2.67592 0.564344 2.70803 0.6416 2.72483C0.718855 2.74163 0.798693 2.74278 0.876401 2.72822C0.95411 2.71366 1.02811 2.68368 1.09405 2.64006C1.19271 2.57849 1.28585 2.51298 1.37268 2.44431V4.30866C1.37268 4.46566 1.43505 4.61624 1.54606 4.72726C1.65708 4.83827 1.80766 4.90064 1.96466 4.90064C2.12166 4.90064 2.27224 4.83827 2.38325 4.72726C2.49427 4.61624 2.55664 4.46566 2.55664 4.30866V0.756761ZM13.2123 12.7938H6.5032L6.41085 12.7993C6.21108 12.823 6.02792 12.9222 5.89879 13.0765C5.76967 13.2307 5.70433 13.4285 5.71612 13.6293C5.72791 13.8302 5.81594 14.0189 5.96223 14.157C6.10852 14.2951 6.30202 14.3722 6.5032 14.3724H13.2123L13.3039 14.3669C13.5036 14.3431 13.6867 14.244 13.8158 14.0898C13.945 13.9356 14.0104 13.738 13.9987 13.5372C13.987 13.3364 13.8991 13.1477 13.753 13.0095C13.6068 12.8714 13.4135 12.7942 13.2123 12.7938ZM13.2123 7.66323H6.5032L6.41085 7.66876C6.21108 7.69252 6.02792 7.79167 5.89879 7.94594C5.76967 8.10021 5.70433 8.29797 5.71612 8.4988C5.72791 8.69964 5.81594 8.88839 5.96223 9.02649C6.10852 9.1646 6.30202 9.24163 6.5032 9.24185H13.2123L13.3039 9.23633C13.5036 9.21258 13.6867 9.11349 13.8158 8.9593C13.945 8.80511 14.0104 8.60745 13.9987 8.40668C13.987 8.20591 13.8991 8.01717 13.753 7.879C13.6068 7.74083 13.4135 7.66365 13.2123 7.66323ZM13.2123 2.53271H6.5032L6.41085 2.53824C6.21108 2.562 6.02792 2.66114 5.89879 2.81542C5.76967 2.96969 5.70433 3.16745 5.71612 3.36828C5.72791 3.56911 5.81594 3.75787 5.96223 3.89597C6.10852 4.03408 6.30202 4.11111 6.5032 4.11133H13.2123L13.3039 4.10581C13.5036 4.08206 13.6867 3.98297 13.8158 3.82878C13.945 3.67459 14.0104 3.47693 13.9987 3.27616C13.987 3.07538 13.8991 2.88664 13.753 2.74847C13.6068 2.61031 13.4135 2.53313 13.2123 2.53271ZM1.88573 6.88971C1.64893 6.84788 1.35215 6.9418 1.19903 7.09493C1.08681 7.1995 0.93838 7.25642 0.785016 7.25372C0.631652 7.25101 0.485325 7.18888 0.376864 7.08042C0.268402 6.97196 0.206274 6.82563 0.203568 6.67227C0.200862 6.51891 0.25779 6.37048 0.362357 6.25826C0.801214 5.8194 1.49107 5.61734 2.09253 5.7239C2.40588 5.77915 2.72792 5.92438 2.97261 6.20143C3.22203 6.484 3.34595 6.85261 3.34595 7.26858C3.34595 7.75795 3.13205 8.12103 2.86763 8.3894C2.6482 8.61277 2.37037 8.79274 2.15252 8.93323L2.08937 8.97349C1.95841 9.05655 1.8317 9.14611 1.70971 9.24185H2.75397C2.91097 9.24185 3.06155 9.30422 3.17257 9.41524C3.28358 9.52626 3.34595 9.67683 3.34595 9.83384C3.34595 9.99084 3.28358 10.1414 3.17257 10.2524C3.06155 10.3635 2.91097 10.4258 2.75397 10.4258H0.780692C0.623689 10.4258 0.473115 10.3635 0.362097 10.2524C0.251078 10.1414 0.188709 9.99084 0.188709 9.83384C0.188709 8.79747 0.965391 8.29231 1.43187 7.98922L1.47923 7.95765C1.73023 7.79584 1.89994 7.68533 2.02386 7.55983C2.12963 7.45249 2.16199 7.37198 2.16199 7.26858C2.16199 7.09256 2.11384 7.01758 2.08463 6.98443C2.03127 6.93126 1.96061 6.89786 1.88573 6.88971ZM0.16503 15.3827C0.16503 15.3827 0.238436 15.449 0.168187 15.3866L0.172923 15.3906L0.183184 15.4008C0.22032 15.4364 0.259881 15.4694 0.30158 15.4995C0.376565 15.5556 0.480754 15.6242 0.614937 15.6913C0.884092 15.8255 1.27007 15.9518 1.76733 15.9518C2.27249 15.9518 2.71135 15.8081 3.03102 15.5256C3.35306 15.2414 3.5125 14.8483 3.50066 14.4521C3.49083 14.1328 3.3722 13.8265 3.16441 13.5839C3.36884 13.3423 3.48961 13.0424 3.50066 12.714C3.50694 12.5115 3.46806 12.31 3.38683 12.1244C3.3056 11.9387 3.18405 11.7734 3.03102 11.6406C2.71135 11.3588 2.27249 11.2151 1.76733 11.2151C1.27007 11.2151 0.884092 11.3398 0.614937 11.4756C0.470851 11.5473 0.335734 11.6358 0.212388 11.7392C0.202503 11.7477 0.192767 11.7564 0.183184 11.7653L0.172923 11.7755L0.168187 11.7795L0.166608 11.7819H0.16503L0.16424 11.7834C0.05807 11.8944 -0.000819094 12.0423 8.6084e-06 12.1959C0.000836311 12.3494 0.061316 12.4967 0.168676 12.6065C0.276037 12.7163 0.421874 12.7801 0.575392 12.7844C0.728911 12.7887 0.878094 12.7332 0.991439 12.6296C1.03853 12.5926 1.08931 12.5606 1.14299 12.5341C1.26849 12.4709 1.4745 12.3999 1.76654 12.3999C2.05069 12.3999 2.18961 12.478 2.24644 12.5285C2.26873 12.546 2.28662 12.5685 2.29869 12.5941C2.31075 12.6197 2.31664 12.6478 2.3159 12.6761C2.31314 12.7115 2.30308 12.7458 2.28637 12.7771C2.26966 12.8083 2.24666 12.8358 2.21882 12.8577C2.14857 12.9193 2.01123 12.9919 1.76654 12.9919C1.60954 12.9919 1.45896 13.0542 1.34795 13.1653C1.23693 13.2763 1.17456 13.4269 1.17456 13.5839C1.17456 13.7409 1.23693 13.8914 1.34795 14.0025C1.45896 14.1135 1.60954 14.1758 1.76654 14.1758C2.01123 14.1758 2.14857 14.2469 2.21882 14.3077C2.29064 14.3708 2.31432 14.4387 2.3159 14.49C2.31664 14.5184 2.31075 14.5466 2.29869 14.5724C2.28664 14.5981 2.26875 14.6207 2.24644 14.6384C2.18961 14.6881 2.05148 14.767 1.76654 14.767C1.55107 14.7716 1.33752 14.7256 1.14299 14.6328C1.08928 14.6061 1.03849 14.5738 0.991439 14.5366C0.878094 14.4329 0.728911 14.3774 0.575392 14.3817C0.421874 14.386 0.276037 14.4498 0.168676 14.5596C0.061316 14.6694 0.000836311 14.8167 8.6084e-06 14.9703C-0.000819094 15.1238 0.0588593 15.2717 0.16503 15.3827ZM0.16503 11.7819C0.322892 11.6508 0.170555 11.7779 0.16503 11.7819Z" fill="#242634"/>
                                        </svg>
                                    </button>
                                </li>
                                <!-- Unordered list of item Icon -->
                                <li class="unordered-list-icon">
                                    <button>
                                        <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.44444 0.836372H13.2222C13.4285 0.836372 13.6263 0.918316 13.7722 1.06418C13.9181 1.21004 14 1.40787 14 1.61415C14 1.82043 13.9181 2.01826 13.7722 2.16412C13.6263 2.30998 13.4285 2.39193 13.2222 2.39193H5.44444C5.23816 2.39193 5.04033 2.30998 4.89447 2.16412C4.74861 2.01826 4.66667 1.82043 4.66667 1.61415C4.66667 1.40787 4.74861 1.21004 4.89447 1.06418C5.04033 0.918316 5.23816 0.836372 5.44444 0.836372ZM5.44444 6.28082H13.2222C13.4285 6.28082 13.6263 6.36276 13.7722 6.50862C13.9181 6.65448 14 6.85231 14 7.05859C14 7.26487 13.9181 7.4627 13.7722 7.60857C13.6263 7.75443 13.4285 7.83637 13.2222 7.83637H5.44444C5.23816 7.83637 5.04033 7.75443 4.89447 7.60857C4.74861 7.4627 4.66667 7.26487 4.66667 7.05859C4.66667 6.85231 4.74861 6.65448 4.89447 6.50862C5.04033 6.36276 5.23816 6.28082 5.44444 6.28082ZM5.44444 11.7253H13.2222C13.4285 11.7253 13.6263 11.8072 13.7722 11.9531C13.9181 12.0989 14 12.2968 14 12.503C14 12.7093 13.9181 12.9071 13.7722 13.053C13.6263 13.1989 13.4285 13.2808 13.2222 13.2808H5.44444C5.23816 13.2808 5.04033 13.1989 4.89447 13.053C4.74861 12.9071 4.66667 12.7093 4.66667 12.503C4.66667 12.2968 4.74861 12.0989 4.89447 11.9531C5.04033 11.8072 5.23816 11.7253 5.44444 11.7253ZM1.55556 3.1697C1.143 3.1697 0.747335 3.00582 0.455612 2.71409C0.163888 2.42237 0 2.02671 0 1.61415C0 1.20159 0.163888 0.805929 0.455612 0.514205C0.747335 0.222482 1.143 0.0585938 1.55556 0.0585938C1.96811 0.0585938 2.36378 0.222482 2.6555 0.514205C2.94722 0.805929 3.11111 1.20159 3.11111 1.61415C3.11111 2.02671 2.94722 2.42237 2.6555 2.71409C2.36378 3.00582 1.96811 3.1697 1.55556 3.1697ZM1.55556 8.61415C1.143 8.61415 0.747335 8.45026 0.455612 8.15854C0.163888 7.86681 0 7.47115 0 7.05859C0 6.64603 0.163888 6.25037 0.455612 5.95865C0.747335 5.66693 1.143 5.50304 1.55556 5.50304C1.96811 5.50304 2.36378 5.66693 2.6555 5.95865C2.94722 6.25037 3.11111 6.64603 3.11111 7.05859C3.11111 7.47115 2.94722 7.86681 2.6555 8.15854C2.36378 8.45026 1.96811 8.61415 1.55556 8.61415ZM1.55556 14.0586C1.143 14.0586 0.747335 13.8947 0.455612 13.603C0.163888 13.3113 0 12.9156 0 12.503C0 12.0905 0.163888 11.6948 0.455612 11.4031C0.747335 11.1114 1.143 10.9475 1.55556 10.9475C1.96811 10.9475 2.36378 11.1114 2.6555 11.4031C2.94722 11.6948 3.11111 12.0905 3.11111 12.503C3.11111 12.9156 2.94722 13.3113 2.6555 13.603C2.36378 13.8947 1.96811 14.0586 1.55556 14.0586Z" fill="#242634"/>
                                        </svg>
                                    </button>
                                </li>
                                <!--  Icon -->
                                <li class="icon">
                                    <button>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.75 2.64193H2.58333V0.808594C1.575 0.808594 0.75 1.63359 0.75 2.64193ZM0.75 9.97526H2.58333V8.14193H0.75V9.97526ZM4.41667 17.3086H6.25V15.4753H4.41667V17.3086ZM0.75 6.30859H2.58333V4.47526H0.75V6.30859ZM9.91667 0.808594H8.08333V2.64193H9.91667V0.808594ZM15.4167 0.808594V2.64193H17.25C17.25 1.63359 16.425 0.808594 15.4167 0.808594ZM2.58333 17.3086V15.4753H0.75C0.75 16.4836 1.575 17.3086 2.58333 17.3086ZM0.75 13.6419H2.58333V11.8086H0.75V13.6419ZM6.25 0.808594H4.41667V2.64193H6.25V0.808594ZM8.08333 17.3086H9.91667V15.4753H8.08333V17.3086ZM15.4167 9.97526H17.25V8.14193H15.4167V9.97526ZM15.4167 17.3086C16.425 17.3086 17.25 16.4836 17.25 15.4753H15.4167V17.3086ZM15.4167 6.30859H17.25V4.47526H15.4167V6.30859ZM15.4167 13.6419H17.25V11.8086H15.4167V13.6419ZM11.75 17.3086H13.5833V15.4753H11.75V17.3086ZM11.75 2.64193H13.5833V0.808594H11.75V2.64193ZM5.33333 13.6419H12.6667C13.1708 13.6419 13.5833 13.2294 13.5833 12.7253V5.39193C13.5833 4.88776 13.1708 4.47526 12.6667 4.47526H5.33333C4.82917 4.47526 4.41667 4.88776 4.41667 5.39193V12.7253C4.41667 13.2294 4.82917 13.6419 5.33333 13.6419ZM6.25 6.30859H11.75V11.8086H6.25V6.30859Z" fill="#242634"/>
                                        </svg>
                                    </button>
                                </li>
                            </ul>
                            <ul class="flex justify-center items-center gap-2 lg:gap-4 xl:gap-5 px-2 md:px-3 2xl:px-8 py-4 m-0 border-r-2 border-white">
                                <!-- Link Icon -->
                                <li class="link-icon">
                                    <button>
                                        <svg width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.2 2.09976H4C3.36348 2.09976 2.75303 2.35261 2.30294 2.8027C1.85286 3.25279 1.6 3.86324 1.6 4.49976C1.6 5.13628 1.85286 5.74673 2.30294 6.19681C2.75303 6.6469 3.36348 6.89976 4 6.89976H7.2V8.49976H4C2.93913 8.49976 1.92172 8.07833 1.17157 7.32818C0.421427 6.57804 0 5.56062 0 4.49976C0 3.43889 0.421427 2.42147 1.17157 1.67133C1.92172 0.921183 2.93913 0.499756 4 0.499756H7.2V2.09976ZM8.8 6.89976H12C12.6365 6.89976 13.247 6.6469 13.6971 6.19681C14.1471 5.74673 14.4 5.13628 14.4 4.49976C14.4 3.86324 14.1471 3.25279 13.6971 2.8027C13.247 2.35261 12.6365 2.09976 12 2.09976H8.8V0.499756H12C13.0609 0.499756 14.0783 0.921183 14.8284 1.67133C15.5786 2.42147 16 3.43889 16 4.49976C16 5.56062 15.5786 6.57804 14.8284 7.32818C14.0783 8.07833 13.0609 8.49976 12 8.49976H8.8V6.89976ZM5.6 3.69976H10.4C10.6122 3.69976 10.8157 3.78404 10.9657 3.93407C11.1157 4.0841 11.2 4.28758 11.2 4.49976C11.2 4.71193 11.1157 4.91541 10.9657 5.06544C10.8157 5.21547 10.6122 5.29976 10.4 5.29976H5.6C5.38783 5.29976 5.18434 5.21547 5.03431 5.06544C4.88429 4.91541 4.8 4.71193 4.8 4.49976C4.8 4.28758 4.88429 4.0841 5.03431 3.93407C5.18434 3.78404 5.38783 3.69976 5.6 3.69976Z" fill="#242634"/>
                                        </svg>
                                    </button>
                                </li>
                                <!-- Text cross Icon -->
                                <li class="text-cross-icon">
                                    <button>
                                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.39992 10.8995H8.12067L8.35217 10.2053L6.67493 8.90955L6.01218 10.8995H5.19993C5.09384 10.8995 4.9921 10.9417 4.91709 11.0167C4.84207 11.0917 4.79993 11.1935 4.79993 11.2995V12.0995C4.79993 12.2056 4.84207 12.3074 4.91709 12.3824C4.9921 12.4574 5.09384 12.4995 5.19993 12.4995H8.39992C8.50601 12.4995 8.60775 12.4574 8.68276 12.3824C8.75778 12.3074 8.79992 12.2056 8.79992 12.0995V11.2995C8.79992 11.1935 8.75778 11.0917 8.68276 11.0167C8.60775 10.9417 8.50601 10.8995 8.39992 10.8995ZM15.8454 11.952L9.42492 6.9893L10.6542 3.29956H13.5999V4.09956C13.5999 4.20565 13.642 4.30739 13.7171 4.3824C13.7921 4.45742 13.8938 4.49956 13.9999 4.49956H14.7999C14.906 4.49956 15.0077 4.45742 15.0827 4.3824C15.1578 4.30739 15.1999 4.20565 15.1999 4.09956V1.69957C15.1999 1.59348 15.1578 1.49174 15.0827 1.41673C15.0077 1.34171 14.906 1.29957 14.7999 1.29957H4.39993C4.29385 1.29957 4.1921 1.34171 4.11709 1.41673C4.04208 1.49174 3.99993 1.59348 3.99993 1.69957V2.79706L1.13644 0.584071C1.09497 0.551798 1.04754 0.528014 0.996871 0.514078C0.946201 0.500141 0.893282 0.496326 0.841137 0.50285C0.788992 0.509374 0.738644 0.526109 0.692969 0.552099C0.647295 0.578089 0.607189 0.612825 0.574944 0.654321L0.0841957 1.28607C0.0190955 1.36981 -0.0100755 1.47599 0.00309852 1.58124C0.0162725 1.68649 0.0707126 1.7822 0.154445 1.84732L14.8634 13.2153C14.9049 13.2476 14.9523 13.2713 15.003 13.2853C15.0536 13.2992 15.1066 13.303 15.1587 13.2965C15.2109 13.29 15.2612 13.2732 15.3069 13.2473C15.3525 13.2213 15.3927 13.1865 15.4249 13.145L15.9159 12.5133C15.981 12.4295 16.0101 12.3233 15.9969 12.2181C15.9837 12.1128 15.9292 12.0171 15.8454 11.952ZM7.74767 5.69356L5.59993 4.03356V3.29956H8.54567L7.74767 5.69356Z" fill="#242634"/>
                                        </svg>
                                    </button>
                                </li>
                            </ul>
                            <ul class="flex justify-center items-center gap-2 lg:gap-4 xl:gap-5 px-2 md:px-3 2xl:px-8 py-4 m-0">
                                <!-- Translate Icon -->
                                <li class="link-icon">
                                    <button>
                                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.1094 3.35693H10.1094L9.10938 0.356934H2.10938C1.00937 0.356934 0.109375 1.25693 0.109375 2.35693V17.3569C0.109375 18.4569 1.00937 19.3569 2.10938 19.3569H10.1094L11.1094 22.3569H20.1094C21.2094 22.3569 22.1094 21.4569 22.1094 20.3569V5.35693C22.1094 4.25693 21.2094 3.35693 20.1094 3.35693ZM6.10938 15.3569C3.34938 15.3569 1.10938 13.1169 1.10938 10.3569C1.10938 7.59693 3.34938 5.35693 6.10938 5.35693C7.45937 5.35693 8.58938 5.85693 9.45938 6.65693L8.13937 7.92693C7.75937 7.56693 7.09937 7.14693 6.10938 7.14693C4.36938 7.14693 2.95937 8.58693 2.95937 10.3569C2.95937 12.1269 4.36938 13.5669 6.10938 13.5669C8.11938 13.5669 8.94938 12.1269 9.02938 11.1569H6.10938V9.44693H10.7894C10.8594 9.75693 10.9094 10.0569 10.9094 10.4669C10.9094 13.3269 8.99938 15.3569 6.10938 15.3569ZM12.2794 9.93693H15.9794C15.5494 11.1869 14.8694 12.3669 13.9294 13.4069C13.6194 13.0569 13.3294 12.6869 13.0694 12.3069L12.2794 9.93693ZM20.6094 19.8569C20.6094 20.4069 20.1594 20.8569 19.6094 20.8569H13.1094L15.1094 18.3569L14.0694 15.2569L17.1694 18.3569L18.0894 17.4369L14.7894 14.1869L14.8094 14.1669C15.9394 12.9169 16.7394 11.4769 17.2094 9.94693H19.1094V8.64693H14.5794V7.35693H13.2894V8.64693H11.8494L10.5694 4.85693H19.6094C20.1594 4.85693 20.6094 5.30693 20.6094 5.85693V19.8569Z" fill="#242634"/>
                                        </svg>
                                    </button>
                                </li>
                                <!-- Text cross Icon -->
                                <li class="text-cross-icon text-center">
                                    <button class="flex justify-between items-center gap-2">
                                        <span class="font-roboto font-normal text-[8px] text-primaryDark">
                                            Text
                                        </span>
                                        <span>
                                            <svg width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.5" d="M15.055 0.679998C15.2748 0.898477 15.2948 1.24035 15.115 1.48126L15.055 1.55028L8.24545 8.3195C8.02573 8.538 7.68179 8.55786 7.43945 8.37907L7.37004 8.3195L0.560505 1.55028C0.318746 1.30996 0.318746 0.920318 0.560505 0.679998C0.780226 0.461519 1.12417 0.441663 1.36651 0.620412L1.43592 0.679998L7.80775 7.01406L14.1795 0.679998C14.4213 0.439678 14.8133 0.439678 15.055 0.679998Z" fill="#242634"/>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="flex justify-between items-center gap-2">
                                        <span  class="font-roboto font-normal text-[8px] text-primaryDark">
                                            Translate
                                        </span>
                                        <span>
                                            <svg width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.5" d="M15.055 0.679998C15.2748 0.898477 15.2948 1.24035 15.115 1.48126L15.055 1.55028L8.24545 8.3195C8.02573 8.538 7.68179 8.55786 7.43945 8.37907L7.37004 8.3195L0.560505 1.55028C0.318746 1.30996 0.318746 0.920318 0.560505 0.679998C0.780226 0.461519 1.12417 0.441663 1.36651 0.620412L1.43592 0.679998L7.80775 7.01406L14.1795 0.679998C14.4213 0.439678 14.8133 0.439678 15.055 0.679998Z" fill="#242634"/>
                                            </svg>
                                        </span>
                                    </button>
                                </li>
                            </ul>
                        </div>

                        <textarea name="text" id="" cols="" rows="" placeholder="Please provide the Full details of  your concern..." class="pl-6 w-full h-[350px] bg-card p-2 font-roboto text-sm leading-6 focus:outline-none focus:bg-white border-2 border-transparent focus:border-card rounded-b resize-none"></textarea>
                    </div>
                </div>
            </div>
            <!-- Button -->
            <div class="button text-center pt-14 pb-[87px]">
                <button
                    class="inline-block w-[140px] text-center card__btn text-primary bg-transparent font-roboto text-base leading-sm font-semibold py-[11px] rounded border-2 border-primary hover:bg-primary hover:text-white transition ease-in-out duration-500 ">
                    Submit
                </button>
            </div>
        </div>
    </div>
    <!-- Form Section Ends -->


@endsection
