

@extends('dashboard.user.layouts.dashboard_app')


@section('title')
    Inspection Details | Cars Around
@endsection


@section('content')

    <!-- Dashboard section Starts -->
    <div class="dashboard mt-10">
        <div class="flex">
            @include('dashboard.user.layouts.front.dashboard_sidebar')
            <!-- Dashboard Details -->
            <div class="dashboard__details w-5/6 ml-auto border-l">
                <!-- Breadcrumb section -->
                <div class="breadcrumb pt-[30px] px-5 md:px-10">
                    <!-- Breadcrumb Item -->
                    <nav class="breadcrumb__item flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 md:space-x-2">
                            <!-- Breadcrumb List -->
                            <li class="breadcrumb__list inline-flex items-center">
                                <a href="orders-buying-dashboard.html"
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
                            <li class="breadcrumb__list inline-flex items-center">
                                <a href="orders-buying-dashboard.html"
                                    class="inline-flex items-center text-base font-roboto font-normal text-primary opacity-50">
                                    <span class="array__icon mr-2">
                                        <svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.5" d="M0.225303 1.12093C0.498401 0.846208 0.925745 0.82124 1.22688 1.04601L1.31316 1.12093L9.77468 9.63288C10.0478 9.90753 10.0726 10.3375 9.84914 10.6404L9.77468 10.7272L1.31316 19.2391C1.01276 19.5413 0.525703 19.5413 0.225303 19.2391C-0.0477947 18.9644 -0.0726151 18.5345 0.150821 18.2316L0.225303 18.1448L8.14288 10.18L0.225303 2.21526C-0.0750973 1.91308 -0.0750973 1.42312 0.225303 1.12093Z" fill="#242634"/>
                                        </svg>
                                    </span>
                                    <span class="font-roboto font-medium text-lg text-primary opacity-50">
                                        Buying
                                    </span>
                                </a>
                            </li>
                            <!-- Breadcrumb List -->
                            <li class="breadcrumb__list inline-flex items-center">
                                <a href="orders-buying-detals.html"
                                    class="inline-flex items-center text-base font-roboto font-normal text-primary opacity-50">
                                    <span class="array__icon mr-2">
                                        <svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.5" d="M0.225303 1.12093C0.498401 0.846208 0.925745 0.82124 1.22688 1.04601L1.31316 1.12093L9.77468 9.63288C10.0478 9.90753 10.0726 10.3375 9.84914 10.6404L9.77468 10.7272L1.31316 19.2391C1.01276 19.5413 0.525703 19.5413 0.225303 19.2391C-0.0477947 18.9644 -0.0726151 18.5345 0.150821 18.2316L0.225303 18.1448L8.14288 10.18L0.225303 2.21526C-0.0750973 1.91308 -0.0750973 1.42312 0.225303 1.12093Z" fill="#242634"/>
                                        </svg>
                                    </span>
                                    <span class="font-roboto font-medium text-lg text-primary opacity-50">
                                        b3228938291
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
                                        Inspection
                                    </span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
                <!-- Details Title -->
                <h2 class="details__title pt-16 px-5 md:px-10 font-roboto font-medium text-3xl text-primary uppercase flex items-center gap-4">
                    <span class="icon">
                        <svg width="50" height="51" viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2254_12522)">
                            <path d="M26.5625 37.2275L28.125 33.3213L28.7579 25.7189C28.7999 25.0787 29.0542 24.4709 29.4805 23.9915C29.9068 23.5121 30.4809 23.1885 31.1118 23.0721C31.4533 22.9698 31.8211 23.0037 32.1382 23.1667C32.4552 23.3297 32.6969 23.609 32.8125 23.9463L33.5938 29.415C33.5938 29.415 40.625 30.9775 42.1875 33.3213C43.75 35.665 42.1875 43.4775 42.1875 43.4775L46.0938 46.6025M23.4375 34.1025V41.1931C23.4375 42.0763 23.7252 42.9355 24.2571 43.6406C24.7889 44.3457 25.536 44.8583 26.3852 45.101L28.9063 45.8213L31.25 48.165M28.125 15.3525C28.1266 17.1181 27.7534 18.864 27.0302 20.4747C26.307 22.0853 25.2502 23.5242 23.9297 24.6963C23.1499 25.3932 22.2833 25.9867 21.3516 26.4619C18.9284 27.7107 16.1634 28.133 13.478 27.6646C10.7925 27.1961 8.33381 25.8626 6.47653 23.8672C4.61925 21.8718 3.46523 19.3239 3.19032 16.6118C2.91541 13.8996 3.53469 11.172 4.95379 8.84449C6.37289 6.51697 8.51399 4.7172 11.0508 3.71942C13.5877 2.72164 16.3812 2.58056 19.0057 3.31769C21.6301 4.05481 23.9417 5.62972 25.588 7.80242C27.2344 9.97513 28.1253 12.6265 28.125 15.3525V15.3525Z" stroke="#242634" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M25.5157 32.5401L21.3516 26.462C22.2833 25.9868 23.1499 25.3933 23.9297 24.6964L26.6274 28.6339M12.5 16.9151L17.1875 12.2276M17.9688 15.3526L19.5313 13.7901M25 15.3526C25.0012 16.6768 24.7214 17.9861 24.1791 19.1942C23.6367 20.4022 22.8442 21.4814 21.8539 22.3604C21.269 22.8832 20.6191 23.3282 19.9203 23.6846C18.103 24.6213 16.0294 24.9381 14.0153 24.5868C12.0012 24.2356 10.1572 23.2355 8.76421 21.739C7.37122 20.2426 6.50566 18.3317 6.29942 16.2977C6.09317 14.2636 6.55755 12.2179 7.62179 10.4723C8.68604 8.72665 10.2918 7.3768 12.1944 6.62841C14.0969 5.88003 16.192 5.77415 18.1603 6.32692C20.1287 6.87968 21.8623 8.06078 23.0971 9.69023C24.3319 11.3197 25.0002 13.3081 25 15.3526V15.3526Z" stroke="#242634" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_2254_12522">
                            <rect width="50" height="50" fill="white" transform="translate(0 0.508789)"/>
                            </clipPath>
                            </defs>
                        </svg>
                    </span>
                    Pre-purchase Inspection
                </h2>
                <!-- Vehicle Status -->
                <div class="vehicle__status py-20 px-5 md:px-10">
                    <!-- Status Checkbox -->
                    <div class="status__checkbox flex justify-center mt-10">
                        <!-- Item Checkbox -->
                        <div class="w-.75/12">
                            <div class="item__checkbox w-[50px] h-[50px] flex justify-center items-center bg-blue border-blue border-2 rounded-full z-50">
                                <svg width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.9585 0.63764C22.4078 0.224133 23.0057 -0.0044712 23.626 6.62771e-05C24.2463 0.00460376 24.8406 0.241928 25.2833 0.661961C25.7261 1.08199 25.9828 1.65188 25.9992 2.25137C26.0156 2.85086 25.7904 3.43307 25.3712 3.87513L12.6453 19.2609C12.4265 19.4888 12.1623 19.6716 11.8687 19.7985C11.5751 19.9255 11.2581 19.9938 10.9365 19.9996C10.615 20.0054 10.2955 19.9484 9.99725 19.832C9.69899 19.7157 9.42806 19.5424 9.20066 19.3226L0.761351 11.1641C0.52633 10.9524 0.337826 10.6971 0.207084 10.4134C0.0763413 10.1298 0.00603925 9.82356 0.000372273 9.51306C-0.00529471 9.20256 0.0537896 8.89413 0.174099 8.60619C0.294409 8.31824 0.47348 8.05667 0.700629 7.83708C0.927778 7.61749 1.19835 7.44438 1.49621 7.32807C1.79407 7.21177 2.11311 7.15465 2.43429 7.16013C2.75548 7.16561 3.07224 7.23357 3.36567 7.35996C3.65909 7.48635 3.92318 7.66858 4.14218 7.89578L10.8209 14.3492L21.8979 0.705474C21.9178 0.681735 21.9391 0.659088 21.9617 0.63764H21.9585Z" fill="white"/>
                                </svg>
                            </div>
                        </div>
                        <div class="w-3/12 relative">
                            <div class="inline-block w-full absolute top-6 h-1 bg-[#9CA1AC]">
                            </div>
                        </div>
                        <!-- Item Checkbox -->
                        <div class="w-.75/12">
                            <div class="item__checkbox w-[50px] h-[50px] flex justify-center items-center bg-blue border-blue border-2 rounded-full z-50">
                                <svg width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.9585 0.63764C22.4078 0.224133 23.0057 -0.0044712 23.626 6.62771e-05C24.2463 0.00460376 24.8406 0.241928 25.2833 0.661961C25.7261 1.08199 25.9828 1.65188 25.9992 2.25137C26.0156 2.85086 25.7904 3.43307 25.3712 3.87513L12.6453 19.2609C12.4265 19.4888 12.1623 19.6716 11.8687 19.7985C11.5751 19.9255 11.2581 19.9938 10.9365 19.9996C10.615 20.0054 10.2955 19.9484 9.99725 19.832C9.69899 19.7157 9.42806 19.5424 9.20066 19.3226L0.761351 11.1641C0.52633 10.9524 0.337826 10.6971 0.207084 10.4134C0.0763413 10.1298 0.00603925 9.82356 0.000372273 9.51306C-0.00529471 9.20256 0.0537896 8.89413 0.174099 8.60619C0.294409 8.31824 0.47348 8.05667 0.700629 7.83708C0.927778 7.61749 1.19835 7.44438 1.49621 7.32807C1.79407 7.21177 2.11311 7.15465 2.43429 7.16013C2.75548 7.16561 3.07224 7.23357 3.36567 7.35996C3.65909 7.48635 3.92318 7.66858 4.14218 7.89578L10.8209 14.3492L21.8979 0.705474C21.9178 0.681735 21.9391 0.659088 21.9617 0.63764H21.9585Z" fill="white"/>
                                </svg>
                            </div>
                        </div>
                        <div class="w-3/12 relative">
                            <div class="inline-block w-full absolute top-6 h-1 bg-[#9CA1AC]">
                            </div>
                        </div>
                        <!-- Item Checkbox -->
                        <div class="w-.75/12">
                            <div class="item__checkbox w-[50px] h-[50px] flex justify-center items-center bg-blue border-blue border-2 rounded-full z-50">
                                <svg width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.9585 0.63764C22.4078 0.224133 23.0057 -0.0044712 23.626 6.62771e-05C24.2463 0.00460376 24.8406 0.241928 25.2833 0.661961C25.7261 1.08199 25.9828 1.65188 25.9992 2.25137C26.0156 2.85086 25.7904 3.43307 25.3712 3.87513L12.6453 19.2609C12.4265 19.4888 12.1623 19.6716 11.8687 19.7985C11.5751 19.9255 11.2581 19.9938 10.9365 19.9996C10.615 20.0054 10.2955 19.9484 9.99725 19.832C9.69899 19.7157 9.42806 19.5424 9.20066 19.3226L0.761351 11.1641C0.52633 10.9524 0.337826 10.6971 0.207084 10.4134C0.0763413 10.1298 0.00603925 9.82356 0.000372273 9.51306C-0.00529471 9.20256 0.0537896 8.89413 0.174099 8.60619C0.294409 8.31824 0.47348 8.05667 0.700629 7.83708C0.927778 7.61749 1.19835 7.44438 1.49621 7.32807C1.79407 7.21177 2.11311 7.15465 2.43429 7.16013C2.75548 7.16561 3.07224 7.23357 3.36567 7.35996C3.65909 7.48635 3.92318 7.66858 4.14218 7.89578L10.8209 14.3492L21.8979 0.705474C21.9178 0.681735 21.9391 0.659088 21.9617 0.63764H21.9585Z" fill="white"/>
                                </svg>
                            </div>
                        </div>
                        <div class="w-3/12 relative">
                            <div class="inline-block w-full  absolute top-6 h-1 bg-[#9CA1AC]">
                            </div>
                        </div>
                        <!-- Item Checkbox -->
                        <div class="w-.75/12">
                            <div class="item__checkbox w-[50px] h-[50px] flex justify-center items-center border-blue border-2 rounded-full z-50">
                                <svg class="hidden" width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.9585 0.63764C22.4078 0.224133 23.0057 -0.0044712 23.626 6.62771e-05C24.2463 0.00460376 24.8406 0.241928 25.2833 0.661961C25.7261 1.08199 25.9828 1.65188 25.9992 2.25137C26.0156 2.85086 25.7904 3.43307 25.3712 3.87513L12.6453 19.2609C12.4265 19.4888 12.1623 19.6716 11.8687 19.7985C11.5751 19.9255 11.2581 19.9938 10.9365 19.9996C10.615 20.0054 10.2955 19.9484 9.99725 19.832C9.69899 19.7157 9.42806 19.5424 9.20066 19.3226L0.761351 11.1641C0.52633 10.9524 0.337826 10.6971 0.207084 10.4134C0.0763413 10.1298 0.00603925 9.82356 0.000372273 9.51306C-0.00529471 9.20256 0.0537896 8.89413 0.174099 8.60619C0.294409 8.31824 0.47348 8.05667 0.700629 7.83708C0.927778 7.61749 1.19835 7.44438 1.49621 7.32807C1.79407 7.21177 2.11311 7.15465 2.43429 7.16013C2.75548 7.16561 3.07224 7.23357 3.36567 7.35996C3.65909 7.48635 3.92318 7.66858 4.14218 7.89578L10.8209 14.3492L21.8979 0.705474C21.9178 0.681735 21.9391 0.659088 21.9617 0.63764H21.9585Z" fill="white"/>
                                </svg>
                            </div>
                        </div>
                        <div class="w-3/12 relative">
                            <div class="inline-block w-full  absolute top-6 h-1 bg-[#9CA1AC]">
                            </div>
                        </div>
                        <!-- Item Checkbox -->
                        <div class="w-.75/12">
                            <div class="item__checkbox w-[50px] h-[50px] flex justify-center items-center border-blue border-2 rounded-full z-50">
                                <svg class="hidden" width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.9585 0.63764C22.4078 0.224133 23.0057 -0.0044712 23.626 6.62771e-05C24.2463 0.00460376 24.8406 0.241928 25.2833 0.661961C25.7261 1.08199 25.9828 1.65188 25.9992 2.25137C26.0156 2.85086 25.7904 3.43307 25.3712 3.87513L12.6453 19.2609C12.4265 19.4888 12.1623 19.6716 11.8687 19.7985C11.5751 19.9255 11.2581 19.9938 10.9365 19.9996C10.615 20.0054 10.2955 19.9484 9.99725 19.832C9.69899 19.7157 9.42806 19.5424 9.20066 19.3226L0.761351 11.1641C0.52633 10.9524 0.337826 10.6971 0.207084 10.4134C0.0763413 10.1298 0.00603925 9.82356 0.000372273 9.51306C-0.00529471 9.20256 0.0537896 8.89413 0.174099 8.60619C0.294409 8.31824 0.47348 8.05667 0.700629 7.83708C0.927778 7.61749 1.19835 7.44438 1.49621 7.32807C1.79407 7.21177 2.11311 7.15465 2.43429 7.16013C2.75548 7.16561 3.07224 7.23357 3.36567 7.35996C3.65909 7.48635 3.92318 7.66858 4.14218 7.89578L10.8209 14.3492L21.8979 0.705474C21.9178 0.681735 21.9391 0.659088 21.9617 0.63764H21.9585Z" fill="white"/>
                                </svg>
                            </div>
                        </div>
                        <div class="w-3/12 relative">
                            <div class="inline-block w-full  absolute top-6 h-1 bg-[#9CA1AC]">
                            </div>
                        </div>
                        <!-- Item Checkbox -->
                        <div class="w-.75/12">
                            <div class="item__checkbox w-[50px] h-[50px] flex justify-center items-center border-blue border-2 rounded-full z-50">
                                <svg class="hidden" width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.9585 0.63764C22.4078 0.224133 23.0057 -0.0044712 23.626 6.62771e-05C24.2463 0.00460376 24.8406 0.241928 25.2833 0.661961C25.7261 1.08199 25.9828 1.65188 25.9992 2.25137C26.0156 2.85086 25.7904 3.43307 25.3712 3.87513L12.6453 19.2609C12.4265 19.4888 12.1623 19.6716 11.8687 19.7985C11.5751 19.9255 11.2581 19.9938 10.9365 19.9996C10.615 20.0054 10.2955 19.9484 9.99725 19.832C9.69899 19.7157 9.42806 19.5424 9.20066 19.3226L0.761351 11.1641C0.52633 10.9524 0.337826 10.6971 0.207084 10.4134C0.0763413 10.1298 0.00603925 9.82356 0.000372273 9.51306C-0.00529471 9.20256 0.0537896 8.89413 0.174099 8.60619C0.294409 8.31824 0.47348 8.05667 0.700629 7.83708C0.927778 7.61749 1.19835 7.44438 1.49621 7.32807C1.79407 7.21177 2.11311 7.15465 2.43429 7.16013C2.75548 7.16561 3.07224 7.23357 3.36567 7.35996C3.65909 7.48635 3.92318 7.66858 4.14218 7.89578L10.8209 14.3492L21.8979 0.705474C21.9178 0.681735 21.9391 0.659088 21.9617 0.63764H21.9585Z" fill="white"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <!-- Status List -->
                    <div class="status__list flex justify-between items-center text-center">
                        <!-- List Item 1 -->
                        <div class="list__item">
                            <!-- Item Title -->
                            <h2 class="item__title font-roboto font-medium text-sm text-primary mt-7 mb-9">
                                Applied
                            </h2>
                            <!-- Item date -->
                            <span class="font-roboto font-light text-sm text-primary">
                                21 Aug 2022 <br> 12:45 pm
                            </span>
                        </div>
                        <!-- List Item 2 -->
                        <div class="list__item">
                            <!-- Item Title -->
                            <h2 class="item__title font-roboto font-medium text-sm text-primary mt-7 mb-9">
                                Both parties agreed
                            </h2>
                            <!-- Item date -->
                            <span class="font-roboto font-light text-sm text-primary">
                                21 Aug 2022 <br> 12:45 pm
                            </span>
                        </div>
                        <!-- List Item 3 -->
                        <div class="list__item">
                            <!-- Item Title -->
                            <h2 class="item__title font-roboto font-medium text-sm text-primary mt-7 mb-9">
                                Inspector assigned
                            </h2>
                            <!-- Item date -->
                            <span class="font-roboto font-light text-sm text-primary">
                                21 Aug 2022 <br> 12:45 pm
                            </span>
                        </div>
                        <!-- List Item 4 -->
                        <div class="list__item">
                            <!-- Item Title -->
                            <h2 class="item__title font-roboto font-medium text-sm text-primary mt-7 mb-9">
                                Date of inspection <br> finalized
                            </h2>
                            <!-- Item date -->
                            <span class="font-roboto font-light text-sm text-primary">
                                 <br>
                            </span>
                        </div>
                        <!-- List Item 5 -->
                        <div class="list__item">
                            <!-- Item Title -->
                            <h2 class="item__title font-roboto font-medium text-sm text-primary flex mt-7 mb-9">
                                Generating <br> inspection report
                            </h2>
                            <!-- Item date -->
                            <span class="font-roboto font-light text-sm text-primary">
                                 <br>
                            </span>
                        </div>
                        <!-- List Item 6 -->
                        <div class="list__item">
                            <!-- Item Title -->
                            <h2 class="item__title font-roboto font-medium text-sm text-primary flex mt-7 mb-9">
                                Inspection <br> completed
                            </h2>
                            <!-- Item date -->
                            <span class="font-roboto font-light text-sm text-primary">
                                 <br>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Vehicle Information -->
                <div class="vehicle__info border rounded p-3 sm:p-5 mb-16 mx-5 md:mx-10">
                    <table>
                        <tbody>
                            <tr class="">
                                <th class="w-3/12 text-start font-roboto font-medium text-base text-primary leading-6 py-2">Location</th>
                                <td class="px-2 sm:px-8">:</td>
                                <td class="w-9/12 font-roboto font-normal text-base text-primary">66b Regent St, Redfern NSW 2016</td>
                            </tr>
                            <tr class="">
                                <th class="w-3/12 text-start font-roboto font-medium text-base text-primary leading-6 py-2">Inspector</th>
                                <td class="px-2 sm:px-8">:</td>
                                <td class="w-9/12 font-roboto font-normal text-base text-primary">Redbook Inspection</td>
                            </tr>
                            <tr class="">
                                <th class="w-3/12 text-start font-roboto font-medium text-base text-primary leading-6 py-2">Service Charge</th>
                                <td class="px-2 sm:px-8">:</td>
                                <td class="w-9/12 font-roboto font-normal text-base text-primary">$200</td>
                            </tr>
                            <tr class="">
                                <th class="w-3/12 text-start font-roboto font-medium text-base text-primary leading-6 py-2">Current Status</th>
                                <td class="px-2 sm:px-8">:</td>
                                <td class="w-9/12 font-roboto font-normal text-base text-primary">Inspector assigned</td>
                            </tr>
                            <tr class="">
                                <th class="w-3/12 text-start font-roboto font-medium text-base text-primary leading-6 py-2">Payment Status</th>
                                <td class="px-2 sm:px-8">:</td>
                                <td class="w-9/12 font-roboto font-normal text-base text-primary">Service Charge paid</td>
                            </tr>
                            <tr class="">
                                <th class="w-3/12 text-start font-roboto font-medium text-base text-primary leading-6 py-2">Instruction</th>
                                <td class="px-2 sm:px-8">:</td>
                                <td class="w-9/12 font-roboto font-normal text-base text-primary">Please wait for the date of inspection to be finalized.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Vehicle Footer Section Starts -->
                <div class="vehicle__footer py-9 bg-[#E6E6E6]">
                    <div class="">
                        <div class="flex gap-6 justify-center items-center">
                            <!-- Vehicle Image -->
                            <div class="footer__vehicle-img">
                                <img src="{{ asset('/assets/img/car-footer.png') }}" alt="Image">
                            </div>
                            <!-- Vehicle Info -->
                            <div class="footer__vehicle-info">
                                <!-- Vehicle Info Title -->
                                <h2 class="vehicle-info__title font-roboto font-semibold text-3xl tracking-[0.25px] text-blue">
                                    <span class="font-extralight">
                                        2018
                                    </span>
                                    Toyota RAV4
                                </h2>
                                <!-- Vehicle Info ABN -->
                                <p class="vehicle-info__abn font-roboto font-normal text-[12px] tracking-[0.25px] text-blue opacity-50">
                                    JTMZDREV10J185318
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard Menu section Ends -->

@endsection
