@extends('dashboard.user.layouts.dashboard_app')


@section('title')
    Safe Settlement Details | Cars Around
@endsection


@section('content')

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
                                b{{ $trade->key }}
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
                                Safe Settlement
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <!-- Details Title -->
        <h2 class="details__title pt-16 px-5 md:px-10 font-roboto font-medium text-3xl text-primary uppercase flex items-center gap-4">
            <span class="icon">
                <svg width="50" height="43" viewBox="0 0 50 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M37.9547 18.9227C37.7122 18.4982 37.3888 18.1162 36.9846 17.7767C36.5804 17.4795 36.0549 17.1824 35.4486 16.9702C34.9231 16.8004 34.3573 16.6306 33.751 16.4609V12.9379C34.0743 13.0228 34.3168 13.1076 34.5189 13.2774C34.8423 13.5745 35.1252 13.9566 35.3678 14.5083C35.5699 14.8904 35.7316 15.145 35.8932 15.2724C36.0549 15.4422 36.2974 15.527 36.5804 15.527C36.9037 15.527 37.1867 15.3997 37.4292 15.145C37.6717 14.8904 37.7526 14.5932 37.7526 14.2537C37.7526 13.8717 37.6717 13.5321 37.4696 13.1501C37.2675 12.7681 37.025 12.3861 36.6208 12.0465C36.2166 11.7069 35.7316 11.4098 35.1657 11.1976C34.7615 11.0702 34.2764 10.9854 33.751 10.9429V9.66954C33.751 9.24508 33.4276 8.90552 33.0234 8.90552C32.6192 8.90552 32.2958 9.24508 32.2958 9.66954V10.9429C31.6087 10.9854 31.0024 11.1551 30.4365 11.3674C29.7089 11.6645 29.1026 12.1314 28.7388 12.7256C28.3346 13.3199 28.1325 13.999 28.1325 14.763C28.1325 15.5695 28.3346 16.2062 28.6984 16.758C29.0622 17.3098 29.5877 17.7342 30.194 18.0313C30.7598 18.3285 31.447 18.5407 32.2958 18.7529V23.0399C32.0533 22.9975 31.8108 22.9126 31.6491 22.8277C31.2853 22.6155 31.0428 22.4033 30.8407 22.1061C30.6386 21.809 30.4769 21.427 30.3152 21.0025C30.194 20.6205 30.0323 20.3659 29.8302 20.1536C29.6281 19.9838 29.3856 19.8565 29.1026 19.8565C28.7388 19.8565 28.4559 19.9838 28.2538 20.2385C28.0113 20.4932 27.9304 20.7479 27.9304 21.0874C27.9304 21.6817 28.1325 22.2759 28.4963 22.8702C28.8601 23.5068 29.3451 23.9737 29.9514 24.3558C30.5982 24.7378 31.4066 24.9924 32.3362 25.0773V27.5392C32.3362 27.9636 32.6596 28.3032 33.0638 28.3032C33.468 28.3032 33.7914 27.9636 33.7914 27.5392V25.0773C34.5998 25.0349 35.3273 24.8227 35.9337 24.5255C36.7016 24.1435 37.3079 23.6342 37.7122 22.955C38.1164 22.2759 38.3185 21.5543 38.3185 20.7054C38.3185 20.0263 38.1972 19.4321 37.9547 18.9227ZM32.2958 16.0788C32.2554 16.0364 32.215 16.0364 32.1746 16.0364C31.932 15.9515 31.6491 15.8242 31.4066 15.6968C31.164 15.5695 30.9619 15.3997 30.8003 15.1875C30.6386 14.9753 30.5982 14.763 30.5982 14.4659C30.5982 14.0414 30.8003 13.6594 31.2449 13.3199C31.5278 13.1076 31.8916 12.9803 32.2958 12.8954V16.0788ZM34.9636 22.4881C34.6402 22.7428 34.236 22.9126 33.751 22.9975V19.1349C33.9531 19.1774 34.1147 19.2623 34.2764 19.3047C34.6806 19.4745 35.0444 19.6867 35.2869 19.9414C35.5699 20.2385 35.6911 20.5781 35.6911 21.045C35.6911 21.5968 35.4486 22.1061 34.9636 22.4881Z" fill="#242634"/>
                    <path d="M33.0234 0.756104C23.6863 0.756104 16.0469 8.7359 16.0469 18.5833C16.0469 28.4307 23.6459 36.4105 33.0234 36.4105C42.401 36.4105 50 28.4307 50 18.5833C50 8.7359 42.3605 0.756104 33.0234 0.756104ZM33.0234 34.8824C24.4543 34.8824 17.502 27.5818 17.502 18.5833C17.502 9.58481 24.4543 2.28415 33.0234 2.28415C41.5926 2.28415 48.5449 9.58481 48.5449 18.5833C48.5449 27.5818 41.5926 34.8824 33.0234 34.8824Z" fill="#242634"/>
                    <path d="M33.0234 4.15186C25.4648 4.15186 19.2805 10.646 19.2805 18.5834C19.2805 26.5207 25.4648 33.0149 33.0234 33.0149C40.5821 33.0149 46.7664 26.5207 46.7664 18.5834C46.7664 10.646 40.5821 4.15186 33.0234 4.15186ZM33.0234 31.4869C26.2328 31.4869 20.7357 25.7143 20.7357 18.5834C20.7357 11.4525 26.2328 5.6799 33.0234 5.6799C39.8141 5.6799 45.3112 11.4525 45.3112 18.5834C45.3112 25.7143 39.8141 31.4869 33.0234 31.4869Z" fill="#242634"/>
                    <path d="M27.5869 17.2463H15.7639V37.7264H27.5869V17.2463Z" fill="white"/>
                    <path d="M25.0104 42.0768H24.9902C24.0807 42.0237 23.3835 41.2491 23.3936 40.3047V37.949H9.7416V40.2941C9.75171 41.2491 9.02414 42.045 8.12479 42.0556H2.43562C1.52616 42.0344 0.798593 41.2491 0.808698 40.2835V28.8868C0.808698 27.4649 1.39479 26.1278 2.4053 25.194L3.13287 24.4725L5.26504 18.3921C5.80061 16.8959 7.18501 15.8878 8.70078 15.8772H24.8386C26.3948 15.8878 27.7388 16.8747 28.2743 18.3921L30.457 24.6104L30.932 25.1516C31.8414 26.0854 32.3467 27.3269 32.3467 28.6534V40.3047C32.3568 41.2703 31.6292 42.0556 30.7198 42.0768H30.7097H25.0104ZM29.012 38.5963V37.949H26.7081V38.5963H29.012ZM6.42713 38.5963V37.949H4.12317V38.5963H6.42713ZM29.012 34.479V28.664C29.012 28.282 28.8604 27.9106 28.5977 27.6453L28.5371 27.5816L28.244 27.2526H5.19431L4.54758 27.8681L4.49706 27.8999C4.25453 28.1546 4.11306 28.5048 4.11306 28.8868V34.4684H29.012V34.479ZM26.6171 23.7827L25.1519 19.6124C25.1013 19.4639 24.97 19.3684 24.8184 19.3577H8.71088C8.56941 19.3577 8.43804 19.4745 8.38752 19.6336L6.92228 23.7827H26.6171Z" fill="#242634"/>
                    <path d="M24.8285 16.7157C26.031 16.7263 27.0921 17.5009 27.5064 18.6788L29.7497 25.0562L30.3459 25.7354C31.0937 26.4994 31.5282 27.5499 31.5282 28.6535V40.3049C31.5383 40.8036 31.1644 41.2174 30.6996 41.2174H25.0407C24.5759 41.1962 24.2121 40.793 24.2121 40.3049V37.0896H8.93321V40.2942C8.94331 40.7824 8.57953 41.1962 8.10459 41.2068H2.44574C1.9809 41.1962 1.60701 40.7824 1.61712 40.2942V28.887C1.61712 27.7197 2.10216 26.5949 2.95099 25.8203L3.82003 24.9501L6.02294 18.6788C6.44735 17.5115 7.50839 16.7263 8.70079 16.7157H24.8285ZM5.76021 24.6318H27.7691L25.9098 19.3261C25.7481 18.8379 25.3237 18.5196 24.8386 18.4984H8.70079C8.21574 18.509 7.79133 18.8485 7.62965 19.3261L5.76021 24.6318ZM3.30467 35.3281H29.8204V35.3387H29.8305V35.3281H29.8204V28.6641C29.8204 28.0487 29.588 27.4544 29.1535 27.03C29.1333 27.0087 29.1333 27.0087 29.1232 26.9981L28.5876 26.4145H4.88106L4.09287 27.1679C4.07266 27.1785 4.07266 27.1679 4.06255 27.1785C3.57751 27.603 3.31477 28.229 3.31477 28.8976V35.3281M25.8997 39.4453H29.8204V37.1002H25.8997V39.4453ZM3.31477 39.4453H7.23555V37.1002H3.31477V39.4453ZM24.8386 15.0178H8.70079H8.69068H8.68058C6.83135 15.0284 5.1539 16.2594 4.49707 18.0845V18.0951V18.1057L2.43563 23.9951L1.85964 24.5681C0.677345 25.6505 0.000303558 27.2316 0.000303558 28.887V40.2836C-0.00980153 40.9628 0.232721 41.6101 0.677345 42.1088C1.13207 42.6181 1.75859 42.9046 2.41542 42.9153H2.42553H2.43563H8.09448H8.10459H8.11469C8.78163 42.9046 9.39804 42.6181 9.85277 42.1088C10.2974 41.6207 10.5399 40.9734 10.5298 40.2942V38.798H22.5953V40.3049C22.5852 41.7056 23.6159 42.8516 24.9498 42.9259H24.9902H25.0306H30.6895H30.6996H30.7097C32.0638 42.9046 33.145 41.7268 33.1349 40.3049V28.6535C33.1349 27.1042 32.5488 25.6505 31.4979 24.5575L31.1442 24.1543L29.012 18.0951C28.6988 17.1932 28.1329 16.4291 27.375 15.8773C26.6474 15.3256 25.7582 15.0284 24.8386 15.0178ZM9.04436 20.2068H24.5052L25.4651 22.9339H8.08438L9.04436 20.2068ZM5.50758 28.1123H27.9005L27.9611 28.176L27.9712 28.1866L27.9813 28.1972L28.0116 28.229L28.0318 28.2503L28.052 28.2715C28.1531 28.367 28.2036 28.5156 28.2036 28.6641V33.6303H4.92148V28.8976C4.92148 28.7808 4.9518 28.6747 5.00232 28.5898H5.01243L5.17411 28.4307L5.50758 28.1123Z" fill="white"/>
                    <path d="M7.49834 28.5154H7.01329C5.639 28.5154 4.51733 29.6826 4.51733 31.1364C4.51733 32.5796 5.62889 33.7574 7.01329 33.7574H7.49834C8.87263 33.7574 9.9943 32.5902 9.9943 31.1364C9.98419 29.7039 8.87263 28.5154 7.49834 28.5154ZM7.49834 31.9747H7.01329C6.57877 31.9747 6.22509 31.6033 6.22509 31.147C6.22509 30.6907 6.57877 30.3193 7.01329 30.3193H7.49834C7.93286 30.3193 8.28653 30.6907 8.28653 31.147C8.28653 31.6033 7.94296 31.9747 7.49834 31.9747Z" fill="#242634"/>
                    <path d="M26.122 28.5154H25.637C24.2627 28.5154 23.141 29.6826 23.141 31.1364C23.141 32.5796 24.2526 33.7574 25.637 33.7574H26.122C27.4963 33.7574 28.618 32.5902 28.618 31.1364C28.6281 29.7039 27.5064 28.5154 26.122 28.5154ZM26.122 31.9747H25.637C25.2024 31.9747 24.8488 31.6033 24.8488 31.147C24.8488 30.6907 25.2024 30.3193 25.637 30.3193H26.122C26.5565 30.3193 26.9102 30.6907 26.9102 31.147C26.9203 31.6033 26.5666 31.9747 26.122 31.9747Z" fill="#242634"/>
                    <path d="M21.6656 29.5342C21.6656 29.0461 21.2817 28.6428 20.8168 28.6428H12.2275C11.7627 28.6428 11.3787 29.0461 11.3787 29.5342V32.8768C11.3787 33.3649 11.7627 33.7681 12.2275 33.7681H20.8168C21.2817 33.7681 21.6656 33.3649 21.6656 32.8768V29.5342ZM20.069 31.9748H13.0662V30.4149H20.069V31.9748Z" fill="#242634"/>
                </svg>
            </span>
            safe settlement
        </h2>
        <!-- Vehicle Status -->
        <div class="vehicle__status py-20 px-5 md:px-10">
            <!-- Status Checkbox -->
            <div class="status__checkbox flex justify-center mt-10">
                <!-- Item Checkbox -->
                <div class="w-.75/12">
                    <div class="item__checkbox w-[50px] h-[50px] flex justify-center items-center {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'applied') ? 'bg-blue' : '' }} border-blue border-2 rounded-full z-50">
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
                    <div class="item__checkbox w-[50px] h-[50px] flex justify-center items-center {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'both_parties_agreed') ? 'bg-blue' : '' }} border-blue border-2 rounded-full z-50">
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
                    <div class="item__checkbox w-[50px] h-[50px] flex justify-center items-center {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'carsaround_received_the_money') ? 'bg-blue' : '' }} border-blue border-2 rounded-full z-50">
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
                    <div class="item__checkbox w-[50px] h-[50px] flex justify-center items-center {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'vehicle_ready_to_be_dispatched') ? 'bg-blue' : '' }} border-blue border-2 rounded-full z-50">
                        <svg class="" width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <div class="item__checkbox w-[50px] h-[50px] flex justify-center items-center {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'vehicle_has_been_received') ? 'bg-blue' : '' }} border-blue border-2 rounded-full z-50">
                        <svg class="" width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <div class="item__checkbox w-[50px] h-[50px] flex justify-center items-center {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'seller_received_the_money') ? 'bg-blue' : '' }} border-blue border-2 rounded-full z-50">
                        <svg class="" width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'applied') ? $trade->get_service_status_date($trade->service_statuses, 'applied') : '' }}
                        <br>
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'applied') ? $trade->get_service_status_time($trade->service_statuses, 'applied') : '' }}
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
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'both_parties_agreed') ? $trade->get_service_status_date($trade->service_statuses, 'both_parties_agreed') : '' }}
                        <br>
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'both_parties_agreed') ? $trade->get_service_status_time($trade->service_statuses, 'both_parties_agreed') : '' }}
                    </span>
                </div>
                <!-- List Item 3 -->
                <div class="list__item">
                    <!-- Item Title -->
                    <h2 class="item__title font-roboto font-medium text-sm text-primary mt-7 mb-9">
                        Carsaround Received <br> the money
                    </h2>
                    <!-- Item date -->
                    <span class="font-roboto font-light text-sm text-primary">
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'carsaround_received_the_money') ? $trade->get_service_status_date($trade->service_statuses, 'carsaround_received_the_money') : '' }}
                        <br>
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'carsaround_received_the_money') ? $trade->get_service_status_time($trade->service_statuses, 'carsaround_received_the_money') : '' }}
                    </span>
                </div>
                <!-- List Item 4 -->
                <div class="list__item">
                    <!-- Item Title -->
                    <h2 class="item__title font-roboto font-medium text-sm text-primary mt-7 mb-9">
                        Vehicle ready to be <br> dispatched
                    </h2>
                    <!-- Item date -->
                    <span class="font-roboto font-light text-sm text-primary">
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'vehicle_ready_to_be_dispatched') ? $trade->get_service_status_date($trade->service_statuses, 'vehicle_ready_to_be_dispatched') : '' }}
                        <br>
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'vehicle_ready_to_be_dispatched') ? $trade->get_service_status_time($trade->service_statuses, 'vehicle_ready_to_be_dispatched') : '' }}
                    </span>
                </div>
                <!-- List Item 5 -->
                <div class="list__item">
                    <!-- Item Title -->
                    <h2 class="item__title font-roboto font-medium text-sm text-primary flex mt-7 mb-9">
                        Vehicle has been <br> received
                    </h2>
                    <!-- Item date -->
                    <span class="font-roboto font-light text-sm text-primary">
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'vehicle_has_been_received') ? $trade->get_service_status_date($trade->service_statuses, 'vehicle_has_been_received') : '' }}
                        <br>
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'vehicle_has_been_received') ? $trade->get_service_status_time($trade->service_statuses, 'vehicle_has_been_received') : '' }}
                    </span>
                </div>
                <!-- List Item 6 -->
                <div class="list__item">
                    <!-- Item Title -->
                    <h2 class="item__title font-roboto font-medium text-sm text-primary flex mt-7 mb-9">
                        Seller received the <br> money
                    </h2>
                    <!-- Item date -->
                    <span class="font-roboto font-light text-sm text-primary">
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'seller_received_the_money') ? $trade->get_service_status_date($trade->service_statuses, 'seller_received_the_money') : '' }}
                        <br>
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'seller_received_the_money') ? $trade->get_service_status_time($trade->service_statuses, 'seller_received_the_money') : '' }}
                    </span>
                </div>
            </div>
        </div>
        <!-- Vehicle Information -->
        <div class="vehicle__info border rounded p-3 sm:p-5 mb-16 mx-5 md:mx-10">
            <table>
                <tbody>
                    <tr class="">
                        <th class="w-3/12 text-start font-roboto font-medium text-base text-primary leading-6 py-2">Amount</th>
                        <td class="px-2 sm:px-8">:</td>
                        <td class="w-9/12 font-roboto font-normal text-base text-primary">${{ $trade->safe_settlements->price }}</td>
                    </tr>
                    <tr class="">
                        <th class="w-3/12 text-start font-roboto font-medium text-base text-primary leading-6 py-2">Current Status</th>
                        <td class="px-2 sm:px-8">:</td>
                        <td class="w-9/12 font-roboto font-normal text-base text-primary">{{ ucfirst(str_replace('_', ' ', $trade->safe_settlements->status)) }}</td>
                    </tr>
                    <tr class="">
                        <th class="w-3/12 text-start font-roboto font-medium text-base text-primary leading-6 py-2">Service Charge</th>
                        <td class="px-2 sm:px-8">:</td>
                        <td class="w-9/12 font-roboto font-normal text-base text-primary">${{ $trade->safe_settlements->service_charge }}</td>
                    </tr>
                    <tr class="">
                        <th class="w-3/12 text-start font-roboto font-medium text-base text-primary leading-6 py-2">Payment Status</th>
                        <td class="px-2 sm:px-8">:</td>
                        <td class="w-9/12 font-roboto font-normal text-base text-primary">{{ ucfirst(str_replace('_', ' ', $trade->safe_settlements->payment_status)) }}</td>
                    </tr>
                    <tr class="">
                        <th class="w-3/12 text-start font-roboto font-medium text-base text-primary leading-6 py-2">Instruction</th>
                        <td class="px-2 sm:px-8">:</td>
                        <td class="w-9/12 font-roboto font-normal text-base text-primary">{{ isset($trade->safe_settlements->instruction) ? $trade->safe_settlements->instruction->note : '' }}</td>
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
    <!-- Dashboard Menu section Ends -->

@endsection
