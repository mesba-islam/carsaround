@extends('dashboard.user.layouts.dashboard_app')


@section('title')
    Inspection Details | Cars Around
@endsection


@section('content')
    <!-- Dashboard Details -->
    <div class="dashboard__details w-5/6 border-l ml-auto">
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
                                <svg width="10" height="20" viewBox="0 0 10 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5"
                                        d="M0.225303 1.12093C0.498401 0.846208 0.925745 0.82124 1.22688 1.04601L1.31316 1.12093L9.77468 9.63288C10.0478 9.90753 10.0726 10.3375 9.84914 10.6404L9.77468 10.7272L1.31316 19.2391C1.01276 19.5413 0.525703 19.5413 0.225303 19.2391C-0.0477947 18.9644 -0.0726151 18.5345 0.150821 18.2316L0.225303 18.1448L8.14288 10.18L0.225303 2.21526C-0.0750973 1.91308 -0.0750973 1.42312 0.225303 1.12093Z"
                                        fill="#242634" />
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
                                <svg width="10" height="20" viewBox="0 0 10 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5"
                                        d="M0.225303 1.12093C0.498401 0.846208 0.925745 0.82124 1.22688 1.04601L1.31316 1.12093L9.77468 9.63288C10.0478 9.90753 10.0726 10.3375 9.84914 10.6404L9.77468 10.7272L1.31316 19.2391C1.01276 19.5413 0.525703 19.5413 0.225303 19.2391C-0.0477947 18.9644 -0.0726151 18.5345 0.150821 18.2316L0.225303 18.1448L8.14288 10.18L0.225303 2.21526C-0.0750973 1.91308 -0.0750973 1.42312 0.225303 1.12093Z"
                                        fill="#242634" />
                                </svg>
                            </span>
                            <span class="font-roboto font-medium text-lg text-primary opacity-50">
                                b{{ $trade->key }}
                            </span>
                        </a>
                    </li>
                    <!-- Breadcrumb List -->
                    <li class="breadcrumb__list" aria-current="page">
                        <div class="flex items-center">
                            <span class="array__icon mr-2">
                                <svg width="10" height="20" viewBox="0 0 10 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5"
                                        d="M0.225303 1.12093C0.498401 0.846208 0.925745 0.82124 1.22688 1.04601L1.31316 1.12093L9.77468 9.63288C10.0478 9.90753 10.0726 10.3375 9.84914 10.6404L9.77468 10.7272L1.31316 19.2391C1.01276 19.5413 0.525703 19.5413 0.225303 19.2391C-0.0477947 18.9644 -0.0726151 18.5345 0.150821 18.2316L0.225303 18.1448L8.14288 10.18L0.225303 2.21526C-0.0750973 1.91308 -0.0750973 1.42312 0.225303 1.12093Z"
                                        fill="#242634" />
                                </svg>
                            </span>
                            <span class="font-roboto font-medium text-lg text-primary opacity-50">
                                Transport
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <!-- Details Title -->
        <h2
            class="details__title pt-16 px-5 md:px-10 font-roboto font-medium text-3xl text-primary uppercase flex items-center gap-4">
            <span class="icon">
                <svg width="50" height="51" viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M39.768 29.7388C36.3075 29.7388 33.4916 32.5547 33.4916 36.0151C33.4916 39.4756 36.307 42.2915 39.768 42.2915C43.2289 42.2915 46.0443 39.4761 46.0443 36.0151C46.0443 32.5542 43.2284 29.7388 39.768 29.7388ZM39.768 39.1265C38.0518 39.1265 36.6562 37.7309 36.6562 36.0146C36.6562 34.2984 38.0518 32.9028 39.768 32.9028C41.4837 32.9028 42.8793 34.2984 42.8793 36.0146C42.8792 37.7309 41.4837 39.1265 39.768 39.1265ZM12.8164 29.7388C9.35547 29.7388 6.54004 32.5547 6.54004 36.0151C6.54004 39.4756 9.35547 42.2915 12.8164 42.2915C16.2773 42.2915 19.0928 39.4756 19.0928 36.0151C19.0928 32.5547 16.2774 29.7388 12.8164 29.7388ZM12.8164 39.1265C11.1002 39.1265 9.70459 37.7309 9.70459 36.0146C9.70459 34.2984 11.1007 32.9028 12.8164 32.9028C14.5321 32.9028 15.9282 34.2984 15.9282 36.0146C15.9282 37.7309 14.5327 39.1265 12.8164 39.1265Z"
                        fill="#242634" />
                    <path
                        d="M49.7838 22.1359L45.248 14.3828C45.1084 14.1444 44.9089 13.9467 44.6693 13.8093C44.4296 13.6719 44.1582 13.5996 43.8819 13.5996H30.2742V16.7642H42.9741L46.8355 23.3639V34.4329H44.462V37.5975H48.4177C49.2916 37.5975 50 36.8892 49.9999 36.0151V22.935C50.0002 22.6541 49.9256 22.3783 49.7838 22.1359ZM17.4578 34.4329H35.1266V37.5975H17.4578V34.4329Z"
                        fill="#242634" />
                    <path
                        d="M30.2742 8.3252H1.58232C0.708301 8.3252 0 9.0335 0 9.90742V36.015C0 36.889 0.708301 37.5974 1.58232 37.5974H7.48945V34.4328H3.16455V11.4897H28.692V36.015H31.8565V9.90742C31.8565 9.0335 31.1482 8.3252 30.2742 8.3252Z"
                        fill="#242634" />
                    <path
                        d="M30.2742 21.4581H48.4172V24.6227H30.2742V21.4581ZM23.9451 14.6016H14.7679C13.8939 14.6016 13.1855 15.3099 13.1855 16.1839C13.1855 17.0578 13.8938 17.7662 14.7679 17.7662H23.9451C24.819 17.7662 25.5274 17.0579 25.5274 16.1839C25.5274 15.3099 24.8191 14.6016 23.9451 14.6016ZM23.9451 20.245H7.85869C6.98477 20.245 6.27637 20.9533 6.27637 21.8273C6.27637 22.7014 6.98467 23.4097 7.85869 23.4097H23.9452C24.8191 23.4097 25.5275 22.7014 25.5275 21.8273C25.5275 20.9533 24.8191 20.245 23.9451 20.245ZM23.9451 25.8357H19.6202C18.7463 25.8357 18.0379 26.544 18.0379 27.4181C18.0379 28.292 18.7462 29.0004 19.6202 29.0004H23.9451C24.819 29.0004 25.5274 28.2921 25.5274 27.4181C25.5274 26.544 24.8191 25.8357 23.9451 25.8357Z"
                        fill="#242634" />
                </svg>
            </span>
            Vehicle Transport
        </h2>
        <!-- Vehicle Status -->
        <div class="vehicle__status py-20 px-5 md:px-10">
            <!-- Status Checkbox -->
            <div class="status__checkbox flex justify-center mt-10">
                <!-- Item Checkbox -->
                <div class="w-.75/12">
                    <div
                        class="item__checkbox w-[50px] h-[50px] flex justify-center items-center {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'applied') ? 'bg-blue' : '' }} border-blue border-2 rounded-full z-50">
                        <svg width="26" height="20" viewBox="0 0 26 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21.9585 0.63764C22.4078 0.224133 23.0057 -0.0044712 23.626 6.62771e-05C24.2463 0.00460376 24.8406 0.241928 25.2833 0.661961C25.7261 1.08199 25.9828 1.65188 25.9992 2.25137C26.0156 2.85086 25.7904 3.43307 25.3712 3.87513L12.6453 19.2609C12.4265 19.4888 12.1623 19.6716 11.8687 19.7985C11.5751 19.9255 11.2581 19.9938 10.9365 19.9996C10.615 20.0054 10.2955 19.9484 9.99725 19.832C9.69899 19.7157 9.42806 19.5424 9.20066 19.3226L0.761351 11.1641C0.52633 10.9524 0.337826 10.6971 0.207084 10.4134C0.0763413 10.1298 0.00603925 9.82356 0.000372273 9.51306C-0.00529471 9.20256 0.0537896 8.89413 0.174099 8.60619C0.294409 8.31824 0.47348 8.05667 0.700629 7.83708C0.927778 7.61749 1.19835 7.44438 1.49621 7.32807C1.79407 7.21177 2.11311 7.15465 2.43429 7.16013C2.75548 7.16561 3.07224 7.23357 3.36567 7.35996C3.65909 7.48635 3.92318 7.66858 4.14218 7.89578L10.8209 14.3492L21.8979 0.705474C21.9178 0.681735 21.9391 0.659088 21.9617 0.63764H21.9585Z"
                                fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="w-3/12 relative">
                    <div class="inline-block w-full absolute top-6 h-1 bg-[#9CA1AC]">
                    </div>
                </div>
                <!-- Item Checkbox -->
                <div class="w-.75/12">
                    <div
                        class="item__checkbox w-[50px] h-[50px] flex justify-center items-center {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'transport_team_assigned') ? 'bg-blue' : '' }} border-blue border-2 rounded-full z-50">
                        <svg width="26" height="20" viewBox="0 0 26 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21.9585 0.63764C22.4078 0.224133 23.0057 -0.0044712 23.626 6.62771e-05C24.2463 0.00460376 24.8406 0.241928 25.2833 0.661961C25.7261 1.08199 25.9828 1.65188 25.9992 2.25137C26.0156 2.85086 25.7904 3.43307 25.3712 3.87513L12.6453 19.2609C12.4265 19.4888 12.1623 19.6716 11.8687 19.7985C11.5751 19.9255 11.2581 19.9938 10.9365 19.9996C10.615 20.0054 10.2955 19.9484 9.99725 19.832C9.69899 19.7157 9.42806 19.5424 9.20066 19.3226L0.761351 11.1641C0.52633 10.9524 0.337826 10.6971 0.207084 10.4134C0.0763413 10.1298 0.00603925 9.82356 0.000372273 9.51306C-0.00529471 9.20256 0.0537896 8.89413 0.174099 8.60619C0.294409 8.31824 0.47348 8.05667 0.700629 7.83708C0.927778 7.61749 1.19835 7.44438 1.49621 7.32807C1.79407 7.21177 2.11311 7.15465 2.43429 7.16013C2.75548 7.16561 3.07224 7.23357 3.36567 7.35996C3.65909 7.48635 3.92318 7.66858 4.14218 7.89578L10.8209 14.3492L21.8979 0.705474C21.9178 0.681735 21.9391 0.659088 21.9617 0.63764H21.9585Z"
                                fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="w-3/12 relative">
                    <div class="inline-block w-full absolute top-6 h-1 bg-[#9CA1AC]">
                    </div>
                </div>
                <!-- Item Checkbox -->
                <div class="w-.75/12">
                    <div
                        class="item__checkbox w-[50px] h-[50px] flex justify-center items-center {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'transport_company_received_the_vehicle') ? 'bg-blue' : '' }} border-blue border-2 rounded-full z-50">
                        <svg width="26" height="20" viewBox="0 0 26 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21.9585 0.63764C22.4078 0.224133 23.0057 -0.0044712 23.626 6.62771e-05C24.2463 0.00460376 24.8406 0.241928 25.2833 0.661961C25.7261 1.08199 25.9828 1.65188 25.9992 2.25137C26.0156 2.85086 25.7904 3.43307 25.3712 3.87513L12.6453 19.2609C12.4265 19.4888 12.1623 19.6716 11.8687 19.7985C11.5751 19.9255 11.2581 19.9938 10.9365 19.9996C10.615 20.0054 10.2955 19.9484 9.99725 19.832C9.69899 19.7157 9.42806 19.5424 9.20066 19.3226L0.761351 11.1641C0.52633 10.9524 0.337826 10.6971 0.207084 10.4134C0.0763413 10.1298 0.00603925 9.82356 0.000372273 9.51306C-0.00529471 9.20256 0.0537896 8.89413 0.174099 8.60619C0.294409 8.31824 0.47348 8.05667 0.700629 7.83708C0.927778 7.61749 1.19835 7.44438 1.49621 7.32807C1.79407 7.21177 2.11311 7.15465 2.43429 7.16013C2.75548 7.16561 3.07224 7.23357 3.36567 7.35996C3.65909 7.48635 3.92318 7.66858 4.14218 7.89578L10.8209 14.3492L21.8979 0.705474C21.9178 0.681735 21.9391 0.659088 21.9617 0.63764H21.9585Z"
                                fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="w-3/12 relative">
                    <div class="inline-block w-full  absolute top-6 h-1 bg-[#9CA1AC]">
                    </div>
                </div>
                <!-- Item Checkbox -->
                <div class="w-.75/12">
                    <div
                        class="item__checkbox w-[50px] h-[50px] flex justify-center items-center {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'vehicle_on_the_way_to_nearby_depo') ? 'bg-blue' : '' }} border-blue border-2 rounded-full z-50">
                        <svg class="" width="26" height="20" viewBox="0 0 26 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21.9585 0.63764C22.4078 0.224133 23.0057 -0.0044712 23.626 6.62771e-05C24.2463 0.00460376 24.8406 0.241928 25.2833 0.661961C25.7261 1.08199 25.9828 1.65188 25.9992 2.25137C26.0156 2.85086 25.7904 3.43307 25.3712 3.87513L12.6453 19.2609C12.4265 19.4888 12.1623 19.6716 11.8687 19.7985C11.5751 19.9255 11.2581 19.9938 10.9365 19.9996C10.615 20.0054 10.2955 19.9484 9.99725 19.832C9.69899 19.7157 9.42806 19.5424 9.20066 19.3226L0.761351 11.1641C0.52633 10.9524 0.337826 10.6971 0.207084 10.4134C0.0763413 10.1298 0.00603925 9.82356 0.000372273 9.51306C-0.00529471 9.20256 0.0537896 8.89413 0.174099 8.60619C0.294409 8.31824 0.47348 8.05667 0.700629 7.83708C0.927778 7.61749 1.19835 7.44438 1.49621 7.32807C1.79407 7.21177 2.11311 7.15465 2.43429 7.16013C2.75548 7.16561 3.07224 7.23357 3.36567 7.35996C3.65909 7.48635 3.92318 7.66858 4.14218 7.89578L10.8209 14.3492L21.8979 0.705474C21.9178 0.681735 21.9391 0.659088 21.9617 0.63764H21.9585Z"
                                fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="w-3/12 relative">
                    <div class="inline-block w-full  absolute top-6 h-1 bg-[#9CA1AC]">
                    </div>
                </div>
                <!-- Item Checkbox -->
                <div class="w-.75/12">
                    <div
                        class="item__checkbox w-[50px] h-[50px] flex justify-center items-center {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'vehicle_in_the_nearby_depo') ? 'bg-blue' : '' }} border-blue border-2 rounded-full z-50">
                        <svg class="" width="26" height="20" viewBox="0 0 26 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21.9585 0.63764C22.4078 0.224133 23.0057 -0.0044712 23.626 6.62771e-05C24.2463 0.00460376 24.8406 0.241928 25.2833 0.661961C25.7261 1.08199 25.9828 1.65188 25.9992 2.25137C26.0156 2.85086 25.7904 3.43307 25.3712 3.87513L12.6453 19.2609C12.4265 19.4888 12.1623 19.6716 11.8687 19.7985C11.5751 19.9255 11.2581 19.9938 10.9365 19.9996C10.615 20.0054 10.2955 19.9484 9.99725 19.832C9.69899 19.7157 9.42806 19.5424 9.20066 19.3226L0.761351 11.1641C0.52633 10.9524 0.337826 10.6971 0.207084 10.4134C0.0763413 10.1298 0.00603925 9.82356 0.000372273 9.51306C-0.00529471 9.20256 0.0537896 8.89413 0.174099 8.60619C0.294409 8.31824 0.47348 8.05667 0.700629 7.83708C0.927778 7.61749 1.19835 7.44438 1.49621 7.32807C1.79407 7.21177 2.11311 7.15465 2.43429 7.16013C2.75548 7.16561 3.07224 7.23357 3.36567 7.35996C3.65909 7.48635 3.92318 7.66858 4.14218 7.89578L10.8209 14.3492L21.8979 0.705474C21.9178 0.681735 21.9391 0.659088 21.9617 0.63764H21.9585Z"
                                fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="w-3/12 relative">
                    <div class="inline-block w-full  absolute top-6 h-1 bg-[#9CA1AC]">
                    </div>
                </div>
                <!-- Item Checkbox -->
                <div class="w-.75/12">
                    <div
                        class="item__checkbox w-[50px] h-[50px] flex justify-center items-center {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'buyer_received_the_vehicle') ? 'bg-blue' : '' }} border-blue border-2 rounded-full z-50">
                        <svg class="" width="26" height="20" viewBox="0 0 26 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21.9585 0.63764C22.4078 0.224133 23.0057 -0.0044712 23.626 6.62771e-05C24.2463 0.00460376 24.8406 0.241928 25.2833 0.661961C25.7261 1.08199 25.9828 1.65188 25.9992 2.25137C26.0156 2.85086 25.7904 3.43307 25.3712 3.87513L12.6453 19.2609C12.4265 19.4888 12.1623 19.6716 11.8687 19.7985C11.5751 19.9255 11.2581 19.9938 10.9365 19.9996C10.615 20.0054 10.2955 19.9484 9.99725 19.832C9.69899 19.7157 9.42806 19.5424 9.20066 19.3226L0.761351 11.1641C0.52633 10.9524 0.337826 10.6971 0.207084 10.4134C0.0763413 10.1298 0.00603925 9.82356 0.000372273 9.51306C-0.00529471 9.20256 0.0537896 8.89413 0.174099 8.60619C0.294409 8.31824 0.47348 8.05667 0.700629 7.83708C0.927778 7.61749 1.19835 7.44438 1.49621 7.32807C1.79407 7.21177 2.11311 7.15465 2.43429 7.16013C2.75548 7.16561 3.07224 7.23357 3.36567 7.35996C3.65909 7.48635 3.92318 7.66858 4.14218 7.89578L10.8209 14.3492L21.8979 0.705474C21.9178 0.681735 21.9391 0.659088 21.9617 0.63764H21.9585Z"
                                fill="white" />
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
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'applied') ? $trade->get_service_status_date($trade->service_statuses, 'applied') : '' }}
                        <br>
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'applied') ? $trade->get_service_status_time($trade->service_statuses, 'applied') : '' }}
                    </span>
                </div>
                <!-- List Item 2 -->
                <div class="list__item">
                    <!-- Item Title -->
                    <h2 class="item__title font-roboto font-medium text-sm text-primary mt-7 mb-9">
                        Transport team <br> assigned
                    </h2>
                    <!-- Item date -->
                    <span class="font-roboto font-light text-sm text-primary">
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'transport_team_assigned') ? $trade->get_service_status_date($trade->service_statuses, 'transport_team_assigned') : '' }}
                        <br>
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'transport_team_assigned') ? $trade->get_service_status_time($trade->service_statuses, 'transport_team_assigned') : '' }}
                    </span>
                </div>
                <!-- List Item 3 -->
                <div class="list__item">
                    <!-- Item Title -->
                    <h2 class="item__title font-roboto font-medium text-sm text-primary mt-7 mb-9">
                        Transport team <br> received the vehicle
                    </h2>
                    <!-- Item date -->
                    <span class="font-roboto font-light text-sm text-primary">
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'transport_company_received_the_vehicle') ? $trade->get_service_status_date($trade->service_statuses, 'transport_company_received_the_vehicle') : '' }}
                        <br>
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'transport_company_received_the_vehicle') ? $trade->get_service_status_time($trade->service_statuses, 'transport_company_received_the_vehicle') : '' }}
                    </span>
                </div>
                <!-- List Item 4 -->
                <div class="list__item">
                    <!-- Item Title -->
                    <h2 class="item__title font-roboto font-medium text-sm text-primary mt-7 mb-9">
                        Vehicle on the way to <br> nearby depo
                    </h2>
                    <!-- Item date -->
                    <span class="font-roboto font-light text-sm text-primary">
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'vehicle_on_the_way_to_nearby_depo') ? $trade->get_service_status_date($trade->service_statuses, 'vehicle_on_the_way_to_nearby_depo') : '' }}
                        <br>
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'vehicle_on_the_way_to_nearby_depo') ? $trade->get_service_status_time($trade->service_statuses, 'vehicle_on_the_way_to_nearby_depo') : '' }}
                    </span>
                </div>
                <!-- List Item 5 -->
                <div class="list__item">
                    <!-- Item Title -->
                    <h2 class="item__title font-roboto font-medium text-sm text-primary flex mt-7 mb-9">
                        Vehicle in the <br> nearby depo
                    </h2>
                    <!-- Item date -->
                    <span class="font-roboto font-light text-sm text-primary">
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'vehicle_in_the_nearby_depo') ? $trade->get_service_status_date($trade->service_statuses, 'vehicle_in_the_nearby_depo') : '' }}
                        <br>
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'vehicle_in_the_nearby_depo') ? $trade->get_service_status_time($trade->service_statuses, 'vehicle_in_the_nearby_depo') : '' }}
                    </span>
                </div>
                <!-- List Item 6 -->
                <div class="list__item">
                    <!-- Item Title -->
                    <h2 class="item__title font-roboto font-medium text-sm text-primary flex mt-7 mb-9">
                        Buyer received the <br> vehicle
                    </h2>
                    <!-- Item date -->
                    <span class="font-roboto font-light text-sm text-primary">
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'buyer_received_the_vehicle') ? $trade->get_service_status_date($trade->service_statuses, 'buyer_received_the_vehicle') : '' }}
                        <br>
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'buyer_received_the_vehicle') ? $trade->get_service_status_time($trade->service_statuses, 'buyer_received_the_vehicle') : '' }}
                    </span>
                </div>
            </div>
        </div>
        <!-- Vehicle Information -->
        <div class="vehicle__info border rounded p-3 sm:p-5 mb-16 mx-5 md:mx-10">
            <table>
                <tbody>
                    <tr class="">
                        <th class="w-3/12 text-start font-roboto font-medium text-base text-primary leading-6 py-2">Pick-Up
                            Location</th>
                        <td class="px-2 sm:px-8">:</td>
                        <td class="w-9/12 font-roboto font-normal text-base text-primary">{{ $trade->trade_transports->pick_up_location }}
                        </td>
                    </tr>
                    <tr class="">
                        <th class="w-3/12 text-start font-roboto font-medium text-base text-primary leading-6 py-2">
                            Drop-Off Location</th>
                        <td class="px-2 sm:px-8">:</td>
                        <td class="w-9/12 font-roboto font-normal text-base text-primary">{{ $trade->trade_transports->drop_off_location }}
                            2017</td>
                    </tr>
                    <tr class="">
                        <th class="w-3/12 text-start font-roboto font-medium text-base text-primary leading-6 py-2">Service
                            Charge</th>
                        <td class="px-2 sm:px-8">:</td>
                        <td class="w-9/12 font-roboto font-normal text-base text-primary">${{ $trade->trade_transports->service_charge }}</td>
                    </tr>
                    <tr class="">
                        <th class="w-3/12 text-start font-roboto font-medium text-base text-primary leading-6 py-2">Type Of
                            Service</th>
                        <td class="px-2 sm:px-8">:</td>
                        <td class="w-9/12 font-roboto font-normal text-base text-primary">{{ ucfirst(str_replace('_', ' ', $trade->trade_transports->type_of_service)) }}</td>
                    </tr>
                    <tr class="">
                        <th class="w-3/12 text-start font-roboto font-medium text-base text-primary leading-6 py-2">Special
                            Services</th>
                        <td class="px-2 sm:px-8">:</td>
                        <td class="w-9/12 font-roboto font-normal text-base text-primary">{{ ucfirst(str_replace('_', ' ', $trade->trade_transports->special_service)) }}</td>
                    </tr>
                    <tr class="">
                        <th class="w-3/12 text-start font-roboto font-medium text-base text-primary leading-6 py-2">Current
                            Status</th>
                        <td class="px-2 sm:px-8">:</td>
                        <td class="w-9/12 font-roboto font-normal text-base text-primary">{{ ucfirst(str_replace('_', ' ', $trade->trade_transports->status)) }}</td>
                    </tr>
                    <tr class="">
                        <th class="w-3/12 text-start font-roboto font-medium text-base text-primary leading-6 py-2">Payment
                            Status</th>
                        <td class="px-2 sm:px-8">:</td>
                        <td class="w-9/12 font-roboto font-normal text-base text-primary">{{ ucfirst(str_replace('_', ' ', $trade->trade_transports->payment_status)) }}d</td>
                    </tr>
                    <tr class="">
                        <th class="w-3/12 text-start font-roboto font-medium text-base text-primary leading-6 py-2">
                            Instruction</th>
                        <td class="px-2 sm:px-8">:</td>
                        <td class="w-9/12 font-roboto font-normal text-base text-primary">{{ isset($trade->trade_transports->instruction) ? $trade->trade_transports->instruction->note : '' }}</td>
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
                        <img src="../../public/assets/img/car-footer.png" alt="Image">
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
                        <p
                            class="vehicle-info__abn font-roboto font-normal text-[12px] tracking-[0.25px] text-blue opacity-50">
                            JTMZDREV10J185318
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard Menu section Ends -->
@endsection
