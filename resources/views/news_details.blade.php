@extends('layouts.front_app')


@section('title')
    News Details | Cars Around
@endsection



@section('content')


    <!-- Breadcrumb section Starts -->
    <div class="breadcrumb mt-20 pt-8">
        <div class="lg:container mx-auto px-5 md:px-8 lg:px-[63px]">
            <!-- Breadcrumb Item -->
            <nav class="breadcrumb__item flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2">
                    <!-- Breadcrumb List -->
                    <li class="breadcrumb__list inline-flex items-center">
                        <a href="{{ route('home') }}" class="inline-flex items-center text-base font-roboto font-normal text-primary opacity-50 hover:opacity-100">
                            <span class="home__icon">
                                <svg width="28" height="27" viewBox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5" d="M27.4194 13.0102L15.4856 1.08258L14.6857 0.282671C14.5034 0.101615 14.257 0 14.0001 0C13.7432 0 13.4967 0.101615 13.3144 0.282671L0.580756 13.0102C0.394001 13.1962 0.246405 13.4177 0.146681 13.6617C0.0469573 13.9058 -0.00287419 14.1673 0.000128015 14.4308C0.0124818 15.518 0.917397 16.3858 2.00453 16.3858H3.31712V26.4449H24.683V16.3858H26.0234C26.5515 16.3858 27.0487 16.1789 27.4224 15.8052C27.6065 15.6218 27.7522 15.4037 27.8514 15.1635C27.9505 14.9234 28.001 14.6659 28 14.4061C28 13.8811 27.7931 13.3839 27.4194 13.0102ZM15.7296 24.2212H12.2705V17.9208H15.7296V24.2212ZM22.4593 14.1621V24.2212H17.7062V17.1796C17.7062 16.497 17.1534 15.9442 16.4708 15.9442H11.5293C10.8468 15.9442 10.2939 16.497 10.2939 17.1796V24.2212H5.5408V14.1621H2.57589L14.0031 2.74416L14.7166 3.45759L25.4273 14.1621H22.4593Z" fill="#242634"/>
                                </svg>
                            </span>
                        </a>
                    </li>
                    <!-- Breadcrumb List -->
                    <li class="breadcrumb__list inline-flex items-center">
                        <a href="{{ route('news_research') }}" class="inline-flex items-center text-base font-roboto font-normal text-primary opacity-50 hover:opacity-100">
                            <span class="array__icon mr-2">
                                <svg width="14" height="26" viewBox="0 0 20 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5" d="M0.315424 0.317302C0.697761 -0.0673107 1.29604 -0.102266 1.71764 0.212406L1.83843 0.317302L13.6845 12.234C14.0669 12.6185 14.1017 13.2204 13.7888 13.6445L13.6845 13.766L1.83843 25.6827C1.41786 26.1058 0.735985 26.1058 0.315424 25.6827C-0.0669125 25.2982 -0.101661 24.6963 0.211149 24.2722L0.315424 24.1507L11.4 13L0.315424 1.84937C-0.105136 1.42631 -0.105136 0.740366 0.315424 0.317302Z" fill="#242634"/>
                                </svg>
                            </span>
                            <span class="font-roboto font-medium text-lg text-primary opacity-50">
                                News & research
                            </span>
                        </a>
                    </li>
                    <!-- Breadcrumb List -->
                    <li class="breadcrumb__list" aria-current="page">
                        <div class="flex items-center">
                            <span class="array__icon mr-2">
                                <svg width="14" height="26" viewBox="0 0 20 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5" d="M0.315424 0.317302C0.697761 -0.0673107 1.29604 -0.102266 1.71764 0.212406L1.83843 0.317302L13.6845 12.234C14.0669 12.6185 14.1017 13.2204 13.7888 13.6445L13.6845 13.766L1.83843 25.6827C1.41786 26.1058 0.735985 26.1058 0.315424 25.6827C-0.0669125 25.2982 -0.101661 24.6963 0.211149 24.2722L0.315424 24.1507L11.4 13L0.315424 1.84937C-0.105136 1.42631 -0.105136 0.740366 0.315424 0.317302Z" fill="#242634"/>
                                </svg>
                            </span>
                            <span class="font-roboto font-medium text-lg text-primary opacity-50">
                                {{$news->title}}
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Breadcrumb section Ends -->


    <!-- Vehicle Section Starts -->
    <div class="vehicle">
        <div class="xl:container mx-auto px-5 md:px-8 lg:px-[63px]">
            <div class="grid grid-cols-1 lg:grid-cols-5 lg:gap-10 xl:gap-[118px] pt-[64px] pb-[57px]">
                <div class="col-span-3  w-full">
                    <!-- Vehicle Details -->
                    <div class="vehicle__details">
                        <!-- Vehicle Title -->
                        <h2 class="vehicle__title font-roboto font-medium text-xl md:text-3xl text-primary">
                            {{$news->title}}                       
                        </h2>
                        <!-- Vehicle Description -->
                        <p class="vehicle__des font-roboto font-normal text-base text-blue tracking-[0.25px] leading-[30px] py-5">
                            {{ Str::limit($news->description, 200)}}                        
                        </p>
                        <!-- Vehicle Avator -->
                        <div class="vehicle__avator border-y-2 py-4 flex flex-wrap gap-y-3 justify-between items-center">
                            <!-- Avator Info -->
                            <div class="avator__info flex items-center gap-3">
                                <!-- Avator Image -->
                                <div class="avator__img">
                                    <img src="{{ asset('/assets/img/avator.png') }}" alt="Image">
                                </div>
                                <!-- Avator Name -->
                                <div class="avator__name">
                                    <!-- Name Post -->
                                    <h4 class="name__post font-roboto font-medium text-base text-primary">
                                        {{isset($news->user) ? $news->user->name : ''}}
                                    </h4>
                                    <!-- Post Date -->
                                    <span class="name__post-date font-roboto font-normal text-[12px] text-primary opacity-50">
                                        {{$news->created_at}}
                                    </span>
                                </div>
                            </div>
                            <!-- Avator Meta box -->
                            <div class="avator__meta-box">
                                <ul class="flex justify-center items-center gap-x-4 xsm:gap-6">
                                    <li class="flex justify-center items-center gap-x-1 xsm:gap-x-3 font-roboto font-medium text-base text-primary opacity-70">
                                        <svg width="32" height="30" viewBox="0 0 32 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.7" d="M8 0.5C3.5824 0.5 0 4.10355 0 8.54945C0 12.1384 1.4 20.6561 15.1808 29.2666C15.4277 29.4193 15.711 29.5 16 29.5C16.289 29.5 16.5723 29.4193 16.8192 29.2666C30.6 20.6561 32 12.1384 32 8.54945C32 4.10355 28.4176 0.5 24 0.5C19.5824 0.5 16 5.37845 16 5.37845C16 5.37845 12.4176 0.5 8 0.5Z" fill="#242634"/>
                                        </svg>
                                        65
                                    </li>
                                    <li class="flex justify-center items-center gap-x-1 xsm:gap-x-3 font-roboto font-medium text-base text-primary opacity-70">
                                        <svg width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.7">
                                            <path d="M31.4083 10.2947C32.1972 11.3133 32.1972 12.6884 31.4083 13.7053C28.9232 16.9072 22.9611 23.5 16.0003 23.5C9.03943 23.5 3.07728 16.9072 0.592226 13.7053C0.208371 13.2176 0 12.6176 0 12C0 11.3824 0.208371 10.7824 0.592226 10.2947C3.07728 7.09279 9.03943 0.5 16.0003 0.5C22.9611 0.5 28.9232 7.09279 31.4083 10.2947Z" fill="#242634"/>
                                            <path d="M15.5 16.5C17.9853 16.5 20 14.2614 20 11.5C20 8.73858 17.9853 6.5 15.5 6.5C13.0147 6.5 11 8.73858 11 11.5C11 14.2614 13.0147 16.5 15.5 16.5Z" fill="#F0EEE6"/>
                                            </g>
                                        </svg>
                                        250
                                    </li>
                                    <li class="flex justify-center items-center gap-x-1 xsm:gap-x-3 font-roboto font-medium text-base text-primary opacity-70">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.7" d="M28.8 0H3.2C1.4352 0 0 1.4352 0 3.2V32L8.5328 25.6H28.8C30.5648 25.6 32 24.1648 32 22.4V3.2C32 1.4352 30.5648 0 28.8 0ZM28.8 22.4H7.4672L3.2 25.6V3.2H28.8V22.4Z" fill="#242634"/>
                                        </svg>
                                        85
                                    </li>
                                    <li class="flex justify-center items-center gap-x-1 xsm:gap-x-3 font-roboto font-medium text-base text-primary opacity-70">
                                        <svg width="32" height="26" viewBox="0 0 32 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.7" d="M17.6039 6.57328V1.62303C17.6039 1.19258 17.7725 0.779752 18.0726 0.475375C18.3727 0.170997 18.7798 0 19.2042 0C19.624 0.00179284 20.0263 0.170833 20.3244 0.470679L31.5266 11.8319C31.6766 11.9828 31.7957 12.1623 31.8769 12.3601C31.9582 12.5578 32 12.77 32 12.9842C32 13.1985 31.9582 13.4106 31.8769 13.6084C31.7957 13.8062 31.6766 13.9857 31.5266 14.1366L20.3244 25.4978C20.0998 25.7212 19.8152 25.8724 19.5062 25.9326C19.1973 25.9928 18.8777 25.9594 18.5874 25.8364C18.2972 25.7135 18.049 25.5065 17.8741 25.2413C17.6992 24.9761 17.6052 24.6645 17.6039 24.3455V19.3141H16.2436C13.7152 19.2758 11.2089 19.7961 8.89869 20.8387C6.58844 21.8813 4.52956 23.4213 2.86497 25.3517C2.66437 25.6226 2.38523 25.823 2.06668 25.9249C1.74813 26.0267 1.40613 26.025 1.08862 25.9198C0.765509 25.8092 0.485674 25.5968 0.289923 25.3136C0.0941696 25.0304 -0.007267 24.6912 0.000406265 24.3455C0.000406265 9.54342 12.931 7.01149 17.6039 6.57328ZM16.2436 16.0355C17.314 16.0322 18.3833 16.1026 19.4442 16.2465C19.8231 16.3048 20.1688 16.4991 20.4184 16.7939C20.668 17.0888 20.805 17.4647 20.8045 17.8533V20.434L28.134 12.9842L20.8045 5.53454V8.11516C20.8045 8.54561 20.6359 8.95843 20.3358 9.26281C20.0357 9.56719 19.6286 9.73819 19.2042 9.73819C17.7479 9.73819 6.22563 10.0628 3.72914 20.1743C7.35275 17.4647 11.7417 16.0132 16.2436 16.0355Z" fill="#242634"/>
                                        </svg>
                                        35
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Vehicle Image -->
                        <div class="vehicle__image py-[30px]">
                            <img class="w-full" src="{{ asset('/storage/' . $news->feature_image) }}" alt="Image">
                        </div>
                        <!-- Vehicle Description -->
                        <p class="vehicle__des font-roboto font-normal text-base text-blue tracking-[0.25px] leading-[30px] pb-5">
                            {!!$news->description!!}                        
                        </p>
                        
                    </div>
                </div>
                <div class="col-span-2 w-full pt-20 lg:pt-0">
                    <!-- Also Like -->
                    <div class="also__like">
                        <!-- Like Title -->
                        <h3 class="like__title font-roboto font-medium text-[22px] text-primary tracking-[0.25px] leading-[30px] pb-[30px]">
                            You May Also Like
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 md:gap-x-5 lg:gap-x-0 lg:grid-cols-1">
                            <!-- Blog Card 1 -->
                            <div class="blog__card flex shadow-sm mb-[10px]">
                                <!-- Card Image -->
                                <div class="card__image relative w-2/5">
                                    <img class="w-full h-full object-cover object-center" src="{{ asset('/assets/img/news/3.png') }}" alt="Image">
                                    <span class="overlay absolute top-0 py-1 px-2 bg-white font-roboto font-normal text-[12px] text-primary">
                                        News
                                    </span>
                                </div>
                                <!-- Card Info -->
                                <div class="card__info py-4 px-4 w-3/5">
                                    <!-- Info Title -->
                                    <h5 class="info__title font-roboto font-normal text-[12px] text-primary">
                                        <a href="#" class="hover:opacity-80">
                                            The new Hyundai N hot hatch, sedan, or SUV can now record lap Hyundai N hot hatch...
                                        </a>
                                    </h5>
                                    <!-- Blog Post -->
                                    <div class="blog__post pt-10">
                                        <!-- Post Avator -->
                                        <div class="post__avator flex justify-between items-center">
                                            <div class="flex items-center gap-1">
                                                <!-- Avator image -->
                                                <div class="avator__img">
                                                    <img class="w-[15px] h-[15px]" src="{{ asset('/assets/img/avator.png') }}" alt="Image">
                                                </div>
                                                <!-- Avator Name -->
                                                <h5 class="amator__name font-roboto font-normal text-[10px] text-primary opacity-50">
                                                    Eleanor Pena
                                                </h5>
                                            </div>
                                            <!-- Avator Meta box -->
                                            <ul class="flex justify-center items-center gap-3">
                                                <li class="flex justify-center items-center gap-1 font-roboto font-medium text-[10px] text-primary opacity-50">
                                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.5" d="M3.75 1C2.23145 1 1 2.2188 1 3.7225C1 4.93635 1.48125 7.81725 6.2184 10.7295C6.30326 10.7811 6.40067 10.8084 6.5 10.8084C6.59933 10.8084 6.69675 10.7811 6.7816 10.7295C11.5188 7.81725 12 4.93635 12 3.7225C12 2.2188 10.7686 1 9.25 1C7.73145 1 6.5 2.65 6.5 2.65C6.5 2.65 5.26855 1 3.75 1Z" stroke="#242634" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    65
                                                </li>
                                                <li class="flex justify-center items-center gap-1 font-roboto font-medium text-[10px] text-primary opacity-50">
                                                    <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.5" d="M7.15155 7.31796V6.61008L6.79761 6.96479L7.15155 7.31796ZM7.15155 7.31796L7.65155 6.81686V7.31796H7.15155ZM6.55133 2.62003V3.07593L6.09737 3.11791C5.32664 3.18917 3.90933 3.42981 2.69752 4.22434C1.58392 4.95449 0.616837 6.16669 0.509938 8.25436L0.796866 7.10849C1.27741 5.18941 2.63633 4.20462 3.89287 3.7108C5.13754 3.22163 6.32508 3.19274 6.60144 3.19274C6.61473 3.19274 6.62748 3.18746 6.63687 3.17806L6.99043 3.53162L6.63688 3.17806C6.64627 3.16867 6.65155 3.15592 6.65155 3.14263V2.26796V1.05899L7.50549 1.91479L10.025 4.43979L10.3774 4.79296L10.025 5.14613L7.50549 7.67112L6.65155 8.52693V7.31796L6.65155 6.44328L6.65155 6.44263C6.65157 6.43063 6.64728 6.41902 6.63946 6.40992C6.6321 6.40135 6.62207 6.39553 6.61102 6.39338C6.271 6.34821 5.92832 6.32609 5.58531 6.32718L5.5813 6.32716C4.14137 6.32012 2.7376 6.77787 1.57861 7.63238L0.503178 8.42528C0.501162 8.49709 0.500139 8.56989 0.500139 8.64372H0.500266L0.500012 8.65497C0.499772 8.66564 0.502949 8.67611 0.509077 8.68485L0.0996609 8.97187L0.50908 8.68486C0.514738 8.69293 0.522643 8.69914 0.531788 8.70273C0.541056 8.70526 0.550871 8.70508 0.560059 8.70218C0.570034 8.69904 0.578775 8.69285 0.585055 8.68449L0.596217 8.66963L0.608452 8.65564C1.22841 7.94671 1.99522 7.38118 2.85565 6.99831C3.71492 6.61595 4.64701 6.42491 5.58738 6.43838H6.05133H6.55133V6.93838V8.64213C6.55147 8.65181 6.5544 8.66125 6.55979 8.66931C6.56527 8.6775 6.57304 8.68389 6.58213 8.68768C6.59121 8.69148 6.60122 8.69251 6.6109 8.69065C6.62019 8.68886 6.62878 8.68448 6.63568 8.67803L10.4837 4.82998L10.4837 4.82998L10.4852 4.82854C10.4899 4.82388 10.4936 4.81834 10.4961 4.81223L10.9577 5.00452L10.4961 4.81223C10.4987 4.80612 10.5 4.79957 10.5 4.79296C10.5 4.78634 10.4987 4.77979 10.4961 4.77369L10.9573 4.58158L10.4961 4.77369C10.4936 4.76758 10.4899 4.76204 10.4852 4.75738L10.4852 4.75738L10.4837 4.75593L6.63441 0.906616C6.6343 0.906509 6.63419 0.906401 6.63409 0.906295C6.62504 0.897484 6.613 0.892419 6.60039 0.892101C6.58748 0.892372 6.57516 0.897618 6.56601 0.906766C6.55661 0.916164 6.55133 0.92891 6.55133 0.942198V2.62003Z" stroke="#242634"/>
                                                    </svg>
                                                    85
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Card 2 -->
                            <div class="blog__card flex shadow-sm mb-[10px]">
                                <!-- Card Image -->
                                <div class="card__image relative w-2/5">
                                    <img class="w-full h-full object-cover object-center" src="{{ asset('/assets/img/news/2.png') }}" alt="Image">
                                    <span class="overlay absolute top-0 py-1 px-2 bg-white font-roboto font-normal text-[12px] text-primary">
                                        News
                                    </span>
                                </div>
                                <!-- Card Info -->
                                <div class="card__info py-4 px-4 w-3/5">
                                    <!-- Info Title -->
                                    <h5 class="info__title font-roboto font-normal text-[12px] text-primary">
                                        <a href="#" class="hover:opacity-80">
                                            The new Hyundai N hot hatch, sedan, or SUV can now record lap Hyundai N hot hatch...
                                        </a>
                                    </h5>
                                    <!-- Blog Post -->
                                    <div class="blog__post pt-10">
                                        <!-- Post Avator -->
                                        <div class="post__avator flex justify-between items-center">
                                            <div class="flex items-center gap-1">
                                                <!-- Avator image -->
                                                <div class="avator__img">
                                                    <img class="w-[15px] h-[15px]" src="{{ asset('/assets/img/avator.png') }}" alt="Image">
                                                </div>
                                                <!-- Avator Name -->
                                                <h5 class="amator__name font-roboto font-normal text-[10px] text-primary opacity-50">
                                                    Eleanor Pena
                                                </h5>
                                            </div>
                                            <!-- Avator Meta box -->
                                            <ul class="flex justify-center items-center gap-3">
                                                <li class="flex justify-center items-center gap-1 font-roboto font-medium text-[10px] text-primary opacity-50">
                                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.5" d="M3.75 1C2.23145 1 1 2.2188 1 3.7225C1 4.93635 1.48125 7.81725 6.2184 10.7295C6.30326 10.7811 6.40067 10.8084 6.5 10.8084C6.59933 10.8084 6.69675 10.7811 6.7816 10.7295C11.5188 7.81725 12 4.93635 12 3.7225C12 2.2188 10.7686 1 9.25 1C7.73145 1 6.5 2.65 6.5 2.65C6.5 2.65 5.26855 1 3.75 1Z" stroke="#242634" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    65
                                                </li>
                                                <li class="flex justify-center items-center gap-1 font-roboto font-medium text-[10px] text-primary opacity-50">
                                                    <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.5" d="M7.15155 7.31796V6.61008L6.79761 6.96479L7.15155 7.31796ZM7.15155 7.31796L7.65155 6.81686V7.31796H7.15155ZM6.55133 2.62003V3.07593L6.09737 3.11791C5.32664 3.18917 3.90933 3.42981 2.69752 4.22434C1.58392 4.95449 0.616837 6.16669 0.509938 8.25436L0.796866 7.10849C1.27741 5.18941 2.63633 4.20462 3.89287 3.7108C5.13754 3.22163 6.32508 3.19274 6.60144 3.19274C6.61473 3.19274 6.62748 3.18746 6.63687 3.17806L6.99043 3.53162L6.63688 3.17806C6.64627 3.16867 6.65155 3.15592 6.65155 3.14263V2.26796V1.05899L7.50549 1.91479L10.025 4.43979L10.3774 4.79296L10.025 5.14613L7.50549 7.67112L6.65155 8.52693V7.31796L6.65155 6.44328L6.65155 6.44263C6.65157 6.43063 6.64728 6.41902 6.63946 6.40992C6.6321 6.40135 6.62207 6.39553 6.61102 6.39338C6.271 6.34821 5.92832 6.32609 5.58531 6.32718L5.5813 6.32716C4.14137 6.32012 2.7376 6.77787 1.57861 7.63238L0.503178 8.42528C0.501162 8.49709 0.500139 8.56989 0.500139 8.64372H0.500266L0.500012 8.65497C0.499772 8.66564 0.502949 8.67611 0.509077 8.68485L0.0996609 8.97187L0.50908 8.68486C0.514738 8.69293 0.522643 8.69914 0.531788 8.70273C0.541056 8.70526 0.550871 8.70508 0.560059 8.70218C0.570034 8.69904 0.578775 8.69285 0.585055 8.68449L0.596217 8.66963L0.608452 8.65564C1.22841 7.94671 1.99522 7.38118 2.85565 6.99831C3.71492 6.61595 4.64701 6.42491 5.58738 6.43838H6.05133H6.55133V6.93838V8.64213C6.55147 8.65181 6.5544 8.66125 6.55979 8.66931C6.56527 8.6775 6.57304 8.68389 6.58213 8.68768C6.59121 8.69148 6.60122 8.69251 6.6109 8.69065C6.62019 8.68886 6.62878 8.68448 6.63568 8.67803L10.4837 4.82998L10.4837 4.82998L10.4852 4.82854C10.4899 4.82388 10.4936 4.81834 10.4961 4.81223L10.9577 5.00452L10.4961 4.81223C10.4987 4.80612 10.5 4.79957 10.5 4.79296C10.5 4.78634 10.4987 4.77979 10.4961 4.77369L10.9573 4.58158L10.4961 4.77369C10.4936 4.76758 10.4899 4.76204 10.4852 4.75738L10.4852 4.75738L10.4837 4.75593L6.63441 0.906616C6.6343 0.906509 6.63419 0.906401 6.63409 0.906295C6.62504 0.897484 6.613 0.892419 6.60039 0.892101C6.58748 0.892372 6.57516 0.897618 6.56601 0.906766C6.55661 0.916164 6.55133 0.92891 6.55133 0.942198V2.62003Z" stroke="#242634"/>
                                                    </svg>
                                                    85
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Card 3 -->
                            <div class="blog__card flex shadow-sm mb-[10px]">
                                <!-- Card Image -->
                                <div class="card__image relative w-2/5">
                                    <img class="w-full h-full object-cover object-center" src="{{ asset('/assets/img/news/1.png') }}" alt="Image">
                                    <span class="overlay absolute top-0 py-1 px-2 bg-white font-roboto font-normal text-[12px] text-primary">
                                        News
                                    </span>
                                </div>
                                <!-- Card Info -->
                                <div class="card__info py-4 px-4 w-3/5">
                                    <!-- Info Title -->
                                    <h5 class="info__title font-roboto font-normal text-[12px] text-primary">
                                        <a href="#" class="hover:opacity-80">
                                            The new Hyundai N hot hatch, sedan, or SUV can now record lap Hyundai N hot hatch...
                                        </a>
                                    </h5>
                                    <!-- Blog Post -->
                                    <div class="blog__post pt-10">
                                        <!-- Post Avator -->
                                        <div class="post__avator flex justify-between items-center">
                                            <div class="flex items-center gap-1">
                                                <!-- Avator image -->
                                                <div class="avator__img">
                                                    <img class="w-[15px] h-[15px]" src="{{ asset('/assets/img/avator.png') }}" alt="Image">
                                                </div>
                                                <!-- Avator Name -->
                                                <h5 class="amator__name font-roboto font-normal text-[10px] text-primary opacity-50">
                                                    Eleanor Pena
                                                </h5>
                                            </div>
                                            <!-- Avator Meta box -->
                                            <ul class="flex justify-center items-center gap-3">
                                                <li class="flex justify-center items-center gap-1 font-roboto font-medium text-[10px] text-primary opacity-50">
                                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.5" d="M3.75 1C2.23145 1 1 2.2188 1 3.7225C1 4.93635 1.48125 7.81725 6.2184 10.7295C6.30326 10.7811 6.40067 10.8084 6.5 10.8084C6.59933 10.8084 6.69675 10.7811 6.7816 10.7295C11.5188 7.81725 12 4.93635 12 3.7225C12 2.2188 10.7686 1 9.25 1C7.73145 1 6.5 2.65 6.5 2.65C6.5 2.65 5.26855 1 3.75 1Z" stroke="#242634" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    65
                                                </li>
                                                <li class="flex justify-center items-center gap-1 font-roboto font-medium text-[10px] text-primary opacity-50">
                                                    <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.5" d="M7.15155 7.31796V6.61008L6.79761 6.96479L7.15155 7.31796ZM7.15155 7.31796L7.65155 6.81686V7.31796H7.15155ZM6.55133 2.62003V3.07593L6.09737 3.11791C5.32664 3.18917 3.90933 3.42981 2.69752 4.22434C1.58392 4.95449 0.616837 6.16669 0.509938 8.25436L0.796866 7.10849C1.27741 5.18941 2.63633 4.20462 3.89287 3.7108C5.13754 3.22163 6.32508 3.19274 6.60144 3.19274C6.61473 3.19274 6.62748 3.18746 6.63687 3.17806L6.99043 3.53162L6.63688 3.17806C6.64627 3.16867 6.65155 3.15592 6.65155 3.14263V2.26796V1.05899L7.50549 1.91479L10.025 4.43979L10.3774 4.79296L10.025 5.14613L7.50549 7.67112L6.65155 8.52693V7.31796L6.65155 6.44328L6.65155 6.44263C6.65157 6.43063 6.64728 6.41902 6.63946 6.40992C6.6321 6.40135 6.62207 6.39553 6.61102 6.39338C6.271 6.34821 5.92832 6.32609 5.58531 6.32718L5.5813 6.32716C4.14137 6.32012 2.7376 6.77787 1.57861 7.63238L0.503178 8.42528C0.501162 8.49709 0.500139 8.56989 0.500139 8.64372H0.500266L0.500012 8.65497C0.499772 8.66564 0.502949 8.67611 0.509077 8.68485L0.0996609 8.97187L0.50908 8.68486C0.514738 8.69293 0.522643 8.69914 0.531788 8.70273C0.541056 8.70526 0.550871 8.70508 0.560059 8.70218C0.570034 8.69904 0.578775 8.69285 0.585055 8.68449L0.596217 8.66963L0.608452 8.65564C1.22841 7.94671 1.99522 7.38118 2.85565 6.99831C3.71492 6.61595 4.64701 6.42491 5.58738 6.43838H6.05133H6.55133V6.93838V8.64213C6.55147 8.65181 6.5544 8.66125 6.55979 8.66931C6.56527 8.6775 6.57304 8.68389 6.58213 8.68768C6.59121 8.69148 6.60122 8.69251 6.6109 8.69065C6.62019 8.68886 6.62878 8.68448 6.63568 8.67803L10.4837 4.82998L10.4837 4.82998L10.4852 4.82854C10.4899 4.82388 10.4936 4.81834 10.4961 4.81223L10.9577 5.00452L10.4961 4.81223C10.4987 4.80612 10.5 4.79957 10.5 4.79296C10.5 4.78634 10.4987 4.77979 10.4961 4.77369L10.9573 4.58158L10.4961 4.77369C10.4936 4.76758 10.4899 4.76204 10.4852 4.75738L10.4852 4.75738L10.4837 4.75593L6.63441 0.906616C6.6343 0.906509 6.63419 0.906401 6.63409 0.906295C6.62504 0.897484 6.613 0.892419 6.60039 0.892101C6.58748 0.892372 6.57516 0.897618 6.56601 0.906766C6.55661 0.916164 6.55133 0.92891 6.55133 0.942198V2.62003Z" stroke="#242634"/>
                                                    </svg>
                                                    85
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Card 4 -->
                            <div class="blog__card flex shadow-sm mb-[10px]">
                                <!-- Card Image -->
                                <div class="card__image relative w-2/5">
                                    <img class="w-full h-full object-cover object-center" src="{{ asset('/assets/img/news/1.png') }}" alt="Image">
                                    <span class="overlay absolute top-0 py-1 px-2 bg-white font-roboto font-normal text-[12px] text-primary">
                                        News
                                    </span>
                                </div>
                                <!-- Card Info -->
                                <div class="card__info py-4 px-4 w-3/5">
                                    <!-- Info Title -->
                                    <h5 class="info__title font-roboto font-normal text-[12px] text-primary">
                                        <a href="#" class="hover:opacity-80">
                                            The new Hyundai N hot hatch, sedan, or SUV can now record lap Hyundai N hot hatch...
                                        </a>
                                    </h5>
                                    <!-- Blog Post -->
                                    <div class="blog__post pt-10">
                                        <!-- Post Avator -->
                                        <div class="post__avator flex justify-between items-center">
                                            <div class="flex items-center gap-1">
                                                <!-- Avator image -->
                                                <div class="avator__img">
                                                    <img class="w-[15px] h-[15px]" src="{{ asset('/assets/img/avator.png') }}" alt="Image">
                                                </div>
                                                <!-- Avator Name -->
                                                <h5 class="amator__name font-roboto font-normal text-[10px] text-primary opacity-50">
                                                    Eleanor Pena
                                                </h5>
                                            </div>
                                            <!-- Avator Meta box -->
                                            <ul class="flex justify-center items-center gap-3">
                                                <li class="flex justify-center items-center gap-1 font-roboto font-medium text-[10px] text-primary opacity-50">
                                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.5" d="M3.75 1C2.23145 1 1 2.2188 1 3.7225C1 4.93635 1.48125 7.81725 6.2184 10.7295C6.30326 10.7811 6.40067 10.8084 6.5 10.8084C6.59933 10.8084 6.69675 10.7811 6.7816 10.7295C11.5188 7.81725 12 4.93635 12 3.7225C12 2.2188 10.7686 1 9.25 1C7.73145 1 6.5 2.65 6.5 2.65C6.5 2.65 5.26855 1 3.75 1Z" stroke="#242634" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    65
                                                </li>
                                                <li class="flex justify-center items-center gap-1 font-roboto font-medium text-[10px] text-primary opacity-50">
                                                    <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.5" d="M7.15155 7.31796V6.61008L6.79761 6.96479L7.15155 7.31796ZM7.15155 7.31796L7.65155 6.81686V7.31796H7.15155ZM6.55133 2.62003V3.07593L6.09737 3.11791C5.32664 3.18917 3.90933 3.42981 2.69752 4.22434C1.58392 4.95449 0.616837 6.16669 0.509938 8.25436L0.796866 7.10849C1.27741 5.18941 2.63633 4.20462 3.89287 3.7108C5.13754 3.22163 6.32508 3.19274 6.60144 3.19274C6.61473 3.19274 6.62748 3.18746 6.63687 3.17806L6.99043 3.53162L6.63688 3.17806C6.64627 3.16867 6.65155 3.15592 6.65155 3.14263V2.26796V1.05899L7.50549 1.91479L10.025 4.43979L10.3774 4.79296L10.025 5.14613L7.50549 7.67112L6.65155 8.52693V7.31796L6.65155 6.44328L6.65155 6.44263C6.65157 6.43063 6.64728 6.41902 6.63946 6.40992C6.6321 6.40135 6.62207 6.39553 6.61102 6.39338C6.271 6.34821 5.92832 6.32609 5.58531 6.32718L5.5813 6.32716C4.14137 6.32012 2.7376 6.77787 1.57861 7.63238L0.503178 8.42528C0.501162 8.49709 0.500139 8.56989 0.500139 8.64372H0.500266L0.500012 8.65497C0.499772 8.66564 0.502949 8.67611 0.509077 8.68485L0.0996609 8.97187L0.50908 8.68486C0.514738 8.69293 0.522643 8.69914 0.531788 8.70273C0.541056 8.70526 0.550871 8.70508 0.560059 8.70218C0.570034 8.69904 0.578775 8.69285 0.585055 8.68449L0.596217 8.66963L0.608452 8.65564C1.22841 7.94671 1.99522 7.38118 2.85565 6.99831C3.71492 6.61595 4.64701 6.42491 5.58738 6.43838H6.05133H6.55133V6.93838V8.64213C6.55147 8.65181 6.5544 8.66125 6.55979 8.66931C6.56527 8.6775 6.57304 8.68389 6.58213 8.68768C6.59121 8.69148 6.60122 8.69251 6.6109 8.69065C6.62019 8.68886 6.62878 8.68448 6.63568 8.67803L10.4837 4.82998L10.4837 4.82998L10.4852 4.82854C10.4899 4.82388 10.4936 4.81834 10.4961 4.81223L10.9577 5.00452L10.4961 4.81223C10.4987 4.80612 10.5 4.79957 10.5 4.79296C10.5 4.78634 10.4987 4.77979 10.4961 4.77369L10.9573 4.58158L10.4961 4.77369C10.4936 4.76758 10.4899 4.76204 10.4852 4.75738L10.4852 4.75738L10.4837 4.75593L6.63441 0.906616C6.6343 0.906509 6.63419 0.906401 6.63409 0.906295C6.62504 0.897484 6.613 0.892419 6.60039 0.892101C6.58748 0.892372 6.57516 0.897618 6.56601 0.906766C6.55661 0.916164 6.55133 0.92891 6.55133 0.942198V2.62003Z" stroke="#242634"/>
                                                    </svg>
                                                    85
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Trending Articles -->
                    <div class="trending__articles pt-[100px]">
                        <!-- Articles Title -->
                        <h3 class="articles__title font-roboto font-medium text-[22px] text-primary tracking-[0.25px] leading-[30px] pb-[30px]">
                            Trending Articles
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 md:gap-x-5 lg:gap-x-0 lg:grid-cols-1">
                            <!-- Blog Card 1 -->
                            <div class="blog__card flex shadow-sm mb-[10px]">
                                <!-- Card Image -->
                                <div class="card__image relative w-2/5">
                                    <img class="w-full h-full object-cover object-center" src="{{ asset('/assets/img/news/2.png') }}" alt="Image">
                                    <span class="overlay absolute top-0 py-1 px-2 bg-white font-roboto font-normal text-[12px] text-primary">
                                        News
                                    </span>
                                </div>
                                <!-- Card Info -->
                                <div class="card__info py-4 px-4 w-3/5">
                                    <!-- Info Title -->
                                    <h5 class="info__title font-roboto font-normal text-[12px] text-primary">
                                        <a href="#" class="hover:opacity-80">
                                            The new Hyundai N hot hatch, sedan, or SUV can now record lap Hyundai N hot hatch...
                                        </a>
                                    </h5>
                                    <!-- Blog Post -->
                                    <div class="blog__post pt-10">
                                        <!-- Post Avator -->
                                        <div class="post__avator flex justify-between items-center">
                                            <div class="flex items-center gap-1">
                                                <!-- Avator image -->
                                                <div class="avator__img">
                                                    <img class="w-[15px] h-[15px]" src="{{ asset('/assets/img/avator.png') }}" alt="Image">
                                                </div>
                                                <!-- Avator Name -->
                                                <h5 class="amator__name font-roboto font-normal text-[10px] text-primary opacity-50">
                                                    Eleanor Pena
                                                </h5>
                                            </div>
                                            <!-- Avator Meta box -->
                                            <ul class="flex justify-center items-center gap-3">
                                                <li class="flex justify-center items-center gap-1 font-roboto font-medium text-[10px] text-primary opacity-50">
                                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.5" d="M3.75 1C2.23145 1 1 2.2188 1 3.7225C1 4.93635 1.48125 7.81725 6.2184 10.7295C6.30326 10.7811 6.40067 10.8084 6.5 10.8084C6.59933 10.8084 6.69675 10.7811 6.7816 10.7295C11.5188 7.81725 12 4.93635 12 3.7225C12 2.2188 10.7686 1 9.25 1C7.73145 1 6.5 2.65 6.5 2.65C6.5 2.65 5.26855 1 3.75 1Z" stroke="#242634" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    65
                                                </li>
                                                <li class="flex justify-center items-center gap-1 font-roboto font-medium text-[10px] text-primary opacity-50">
                                                    <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.5" d="M7.15155 7.31796V6.61008L6.79761 6.96479L7.15155 7.31796ZM7.15155 7.31796L7.65155 6.81686V7.31796H7.15155ZM6.55133 2.62003V3.07593L6.09737 3.11791C5.32664 3.18917 3.90933 3.42981 2.69752 4.22434C1.58392 4.95449 0.616837 6.16669 0.509938 8.25436L0.796866 7.10849C1.27741 5.18941 2.63633 4.20462 3.89287 3.7108C5.13754 3.22163 6.32508 3.19274 6.60144 3.19274C6.61473 3.19274 6.62748 3.18746 6.63687 3.17806L6.99043 3.53162L6.63688 3.17806C6.64627 3.16867 6.65155 3.15592 6.65155 3.14263V2.26796V1.05899L7.50549 1.91479L10.025 4.43979L10.3774 4.79296L10.025 5.14613L7.50549 7.67112L6.65155 8.52693V7.31796L6.65155 6.44328L6.65155 6.44263C6.65157 6.43063 6.64728 6.41902 6.63946 6.40992C6.6321 6.40135 6.62207 6.39553 6.61102 6.39338C6.271 6.34821 5.92832 6.32609 5.58531 6.32718L5.5813 6.32716C4.14137 6.32012 2.7376 6.77787 1.57861 7.63238L0.503178 8.42528C0.501162 8.49709 0.500139 8.56989 0.500139 8.64372H0.500266L0.500012 8.65497C0.499772 8.66564 0.502949 8.67611 0.509077 8.68485L0.0996609 8.97187L0.50908 8.68486C0.514738 8.69293 0.522643 8.69914 0.531788 8.70273C0.541056 8.70526 0.550871 8.70508 0.560059 8.70218C0.570034 8.69904 0.578775 8.69285 0.585055 8.68449L0.596217 8.66963L0.608452 8.65564C1.22841 7.94671 1.99522 7.38118 2.85565 6.99831C3.71492 6.61595 4.64701 6.42491 5.58738 6.43838H6.05133H6.55133V6.93838V8.64213C6.55147 8.65181 6.5544 8.66125 6.55979 8.66931C6.56527 8.6775 6.57304 8.68389 6.58213 8.68768C6.59121 8.69148 6.60122 8.69251 6.6109 8.69065C6.62019 8.68886 6.62878 8.68448 6.63568 8.67803L10.4837 4.82998L10.4837 4.82998L10.4852 4.82854C10.4899 4.82388 10.4936 4.81834 10.4961 4.81223L10.9577 5.00452L10.4961 4.81223C10.4987 4.80612 10.5 4.79957 10.5 4.79296C10.5 4.78634 10.4987 4.77979 10.4961 4.77369L10.9573 4.58158L10.4961 4.77369C10.4936 4.76758 10.4899 4.76204 10.4852 4.75738L10.4852 4.75738L10.4837 4.75593L6.63441 0.906616C6.6343 0.906509 6.63419 0.906401 6.63409 0.906295C6.62504 0.897484 6.613 0.892419 6.60039 0.892101C6.58748 0.892372 6.57516 0.897618 6.56601 0.906766C6.55661 0.916164 6.55133 0.92891 6.55133 0.942198V2.62003Z" stroke="#242634"/>
                                                    </svg>
                                                    85
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Card 2 -->
                            <div class="blog__card flex shadow-sm mb-[10px]">
                                <!-- Card Image -->
                                <div class="card__image relative w-2/5">
                                    <img class="w-full h-full object-cover object-center" src="{{ asset('/assets/img/news/3.png') }}" alt="Image">
                                    <span class="overlay absolute top-0 py-1 px-2 bg-white font-roboto font-normal text-[12px] text-primary">
                                        News
                                    </span>
                                </div>
                                <!-- Card Info -->
                                <div class="card__info py-4 px-4 w-3/5">
                                    <!-- Info Title -->
                                    <h5 class="info__title font-roboto font-normal text-[12px] text-primary">
                                        <a href="#" class="hover:opacity-80">
                                            The new Hyundai N hot hatch, sedan, or SUV can now record lap Hyundai N hot hatch...
                                        </a>
                                    </h5>
                                    <!-- Blog Post -->
                                    <div class="blog__post pt-10">
                                        <!-- Post Avator -->
                                        <div class="post__avator flex justify-between items-center">
                                            <div class="flex items-center gap-1">
                                                <!-- Avator image -->
                                                <div class="avator__img">
                                                    <img class="w-[15px] h-[15px]" src="{{ asset('/assets/img/avator.png') }}" alt="Image">
                                                </div>
                                                <!-- Avator Name -->
                                                <h5 class="amator__name font-roboto font-normal text-[10px] text-primary opacity-50">
                                                    Eleanor Pena
                                                </h5>
                                            </div>
                                            <!-- Avator Meta box -->
                                            <ul class="flex justify-center items-center gap-3">
                                                <li class="flex justify-center items-center gap-1 font-roboto font-medium text-[10px] text-primary opacity-50">
                                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.5" d="M3.75 1C2.23145 1 1 2.2188 1 3.7225C1 4.93635 1.48125 7.81725 6.2184 10.7295C6.30326 10.7811 6.40067 10.8084 6.5 10.8084C6.59933 10.8084 6.69675 10.7811 6.7816 10.7295C11.5188 7.81725 12 4.93635 12 3.7225C12 2.2188 10.7686 1 9.25 1C7.73145 1 6.5 2.65 6.5 2.65C6.5 2.65 5.26855 1 3.75 1Z" stroke="#242634" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    65
                                                </li>
                                                <li class="flex justify-center items-center gap-1 font-roboto font-medium text-[10px] text-primary opacity-50">
                                                    <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.5" d="M7.15155 7.31796V6.61008L6.79761 6.96479L7.15155 7.31796ZM7.15155 7.31796L7.65155 6.81686V7.31796H7.15155ZM6.55133 2.62003V3.07593L6.09737 3.11791C5.32664 3.18917 3.90933 3.42981 2.69752 4.22434C1.58392 4.95449 0.616837 6.16669 0.509938 8.25436L0.796866 7.10849C1.27741 5.18941 2.63633 4.20462 3.89287 3.7108C5.13754 3.22163 6.32508 3.19274 6.60144 3.19274C6.61473 3.19274 6.62748 3.18746 6.63687 3.17806L6.99043 3.53162L6.63688 3.17806C6.64627 3.16867 6.65155 3.15592 6.65155 3.14263V2.26796V1.05899L7.50549 1.91479L10.025 4.43979L10.3774 4.79296L10.025 5.14613L7.50549 7.67112L6.65155 8.52693V7.31796L6.65155 6.44328L6.65155 6.44263C6.65157 6.43063 6.64728 6.41902 6.63946 6.40992C6.6321 6.40135 6.62207 6.39553 6.61102 6.39338C6.271 6.34821 5.92832 6.32609 5.58531 6.32718L5.5813 6.32716C4.14137 6.32012 2.7376 6.77787 1.57861 7.63238L0.503178 8.42528C0.501162 8.49709 0.500139 8.56989 0.500139 8.64372H0.500266L0.500012 8.65497C0.499772 8.66564 0.502949 8.67611 0.509077 8.68485L0.0996609 8.97187L0.50908 8.68486C0.514738 8.69293 0.522643 8.69914 0.531788 8.70273C0.541056 8.70526 0.550871 8.70508 0.560059 8.70218C0.570034 8.69904 0.578775 8.69285 0.585055 8.68449L0.596217 8.66963L0.608452 8.65564C1.22841 7.94671 1.99522 7.38118 2.85565 6.99831C3.71492 6.61595 4.64701 6.42491 5.58738 6.43838H6.05133H6.55133V6.93838V8.64213C6.55147 8.65181 6.5544 8.66125 6.55979 8.66931C6.56527 8.6775 6.57304 8.68389 6.58213 8.68768C6.59121 8.69148 6.60122 8.69251 6.6109 8.69065C6.62019 8.68886 6.62878 8.68448 6.63568 8.67803L10.4837 4.82998L10.4837 4.82998L10.4852 4.82854C10.4899 4.82388 10.4936 4.81834 10.4961 4.81223L10.9577 5.00452L10.4961 4.81223C10.4987 4.80612 10.5 4.79957 10.5 4.79296C10.5 4.78634 10.4987 4.77979 10.4961 4.77369L10.9573 4.58158L10.4961 4.77369C10.4936 4.76758 10.4899 4.76204 10.4852 4.75738L10.4852 4.75738L10.4837 4.75593L6.63441 0.906616C6.6343 0.906509 6.63419 0.906401 6.63409 0.906295C6.62504 0.897484 6.613 0.892419 6.60039 0.892101C6.58748 0.892372 6.57516 0.897618 6.56601 0.906766C6.55661 0.916164 6.55133 0.92891 6.55133 0.942198V2.62003Z" stroke="#242634"/>
                                                    </svg>
                                                    85
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Card 3 -->
                            <div class="blog__card flex shadow-sm mb-[10px]">
                                <!-- Card Image -->
                                <div class="card__image relative w-2/5">
                                    <img class="w-full h-full object-cover object-center" src="{{ asset('/assets/img/news/4.png') }}" alt="Image">
                                    <span class="overlay absolute top-0 py-1 px-2 bg-white font-roboto font-normal text-[12px] text-primary">
                                        News
                                    </span>
                                </div>
                                <!-- Card Info -->
                                <div class="card__info py-4 px-4 w-3/5">
                                    <!-- Info Title -->
                                    <h5 class="info__title font-roboto font-normal text-[12px] text-primary">
                                        <a href="#" class="hover:opacity-80">
                                            The new Hyundai N hot hatch, sedan, or SUV can now record lap Hyundai N hot hatch...
                                        </a>
                                    </h5>
                                    <!-- Blog Post -->
                                    <div class="blog__post pt-10">
                                        <!-- Post Avator -->
                                        <div class="post__avator flex justify-between items-center">
                                            <div class="flex items-center gap-1">
                                                <!-- Avator image -->
                                                <div class="avator__img">
                                                    <img class="w-[15px] h-[15px]" src="{{ asset('/assets/img/avator.png') }}" alt="Image">
                                                </div>
                                                <!-- Avator Name -->
                                                <h5 class="amator__name font-roboto font-normal text-[10px] text-primary opacity-50">
                                                    Eleanor Pena
                                                </h5>
                                            </div>
                                            <!-- Avator Meta box -->
                                            <ul class="flex justify-center items-center gap-3">
                                                <li class="flex justify-center items-center gap-1 font-roboto font-medium text-[10px] text-primary opacity-50">
                                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.5" d="M3.75 1C2.23145 1 1 2.2188 1 3.7225C1 4.93635 1.48125 7.81725 6.2184 10.7295C6.30326 10.7811 6.40067 10.8084 6.5 10.8084C6.59933 10.8084 6.69675 10.7811 6.7816 10.7295C11.5188 7.81725 12 4.93635 12 3.7225C12 2.2188 10.7686 1 9.25 1C7.73145 1 6.5 2.65 6.5 2.65C6.5 2.65 5.26855 1 3.75 1Z" stroke="#242634" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    65
                                                </li>
                                                <li class="flex justify-center items-center gap-1 font-roboto font-medium text-[10px] text-primary opacity-50">
                                                    <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.5" d="M7.15155 7.31796V6.61008L6.79761 6.96479L7.15155 7.31796ZM7.15155 7.31796L7.65155 6.81686V7.31796H7.15155ZM6.55133 2.62003V3.07593L6.09737 3.11791C5.32664 3.18917 3.90933 3.42981 2.69752 4.22434C1.58392 4.95449 0.616837 6.16669 0.509938 8.25436L0.796866 7.10849C1.27741 5.18941 2.63633 4.20462 3.89287 3.7108C5.13754 3.22163 6.32508 3.19274 6.60144 3.19274C6.61473 3.19274 6.62748 3.18746 6.63687 3.17806L6.99043 3.53162L6.63688 3.17806C6.64627 3.16867 6.65155 3.15592 6.65155 3.14263V2.26796V1.05899L7.50549 1.91479L10.025 4.43979L10.3774 4.79296L10.025 5.14613L7.50549 7.67112L6.65155 8.52693V7.31796L6.65155 6.44328L6.65155 6.44263C6.65157 6.43063 6.64728 6.41902 6.63946 6.40992C6.6321 6.40135 6.62207 6.39553 6.61102 6.39338C6.271 6.34821 5.92832 6.32609 5.58531 6.32718L5.5813 6.32716C4.14137 6.32012 2.7376 6.77787 1.57861 7.63238L0.503178 8.42528C0.501162 8.49709 0.500139 8.56989 0.500139 8.64372H0.500266L0.500012 8.65497C0.499772 8.66564 0.502949 8.67611 0.509077 8.68485L0.0996609 8.97187L0.50908 8.68486C0.514738 8.69293 0.522643 8.69914 0.531788 8.70273C0.541056 8.70526 0.550871 8.70508 0.560059 8.70218C0.570034 8.69904 0.578775 8.69285 0.585055 8.68449L0.596217 8.66963L0.608452 8.65564C1.22841 7.94671 1.99522 7.38118 2.85565 6.99831C3.71492 6.61595 4.64701 6.42491 5.58738 6.43838H6.05133H6.55133V6.93838V8.64213C6.55147 8.65181 6.5544 8.66125 6.55979 8.66931C6.56527 8.6775 6.57304 8.68389 6.58213 8.68768C6.59121 8.69148 6.60122 8.69251 6.6109 8.69065C6.62019 8.68886 6.62878 8.68448 6.63568 8.67803L10.4837 4.82998L10.4837 4.82998L10.4852 4.82854C10.4899 4.82388 10.4936 4.81834 10.4961 4.81223L10.9577 5.00452L10.4961 4.81223C10.4987 4.80612 10.5 4.79957 10.5 4.79296C10.5 4.78634 10.4987 4.77979 10.4961 4.77369L10.9573 4.58158L10.4961 4.77369C10.4936 4.76758 10.4899 4.76204 10.4852 4.75738L10.4852 4.75738L10.4837 4.75593L6.63441 0.906616C6.6343 0.906509 6.63419 0.906401 6.63409 0.906295C6.62504 0.897484 6.613 0.892419 6.60039 0.892101C6.58748 0.892372 6.57516 0.897618 6.56601 0.906766C6.55661 0.916164 6.55133 0.92891 6.55133 0.942198V2.62003Z" stroke="#242634"/>
                                                    </svg>
                                                    85
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Card 4 -->
                            <div class="blog__card flex shadow-sm mb-[10px]">
                                <!-- Card Image -->
                                <div class="card__image relative w-2/5">
                                    <img class="w-full h-full object-cover object-center" src="{{ asset('/assets/img/news/5.png') }}" alt="Image">
                                    <span class="overlay absolute top-0 py-1 px-2 bg-white font-roboto font-normal text-[12px] text-primary">
                                        News
                                    </span>
                                </div>
                                <!-- Card Info -->
                                <div class="card__info py-4 px-4 w-3/5">
                                    <!-- Info Title -->
                                    <h5 class="info__title font-roboto font-normal text-[12px] text-primary">
                                        <a href="#" class="hover:opacity-80">
                                            The new Hyundai N hot hatch, sedan, or SUV can now record lap Hyundai N hot hatch...
                                        </a>
                                    </h5>
                                    <!-- Blog Post -->
                                    <div class="blog__post pt-10">
                                        <!-- Post Avator -->
                                        <div class="post__avator flex justify-between items-center">
                                            <div class="flex items-center gap-1">
                                                <!-- Avator image -->
                                                <div class="avator__img">
                                                    <img class="w-[15px] h-[15px]" src="{{ asset('/assets/img/avator.png') }}" alt="Image">
                                                </div>
                                                <!-- Avator Name -->
                                                <h5 class="amator__name font-roboto font-normal text-[10px] text-primary opacity-50">
                                                    Eleanor Pena
                                                </h5>
                                            </div>
                                            <!-- Avator Meta box -->
                                            <ul class="flex justify-center items-center gap-3">
                                                <li class="flex justify-center items-center gap-1 font-roboto font-medium text-[10px] text-primary opacity-50">
                                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.5" d="M3.75 1C2.23145 1 1 2.2188 1 3.7225C1 4.93635 1.48125 7.81725 6.2184 10.7295C6.30326 10.7811 6.40067 10.8084 6.5 10.8084C6.59933 10.8084 6.69675 10.7811 6.7816 10.7295C11.5188 7.81725 12 4.93635 12 3.7225C12 2.2188 10.7686 1 9.25 1C7.73145 1 6.5 2.65 6.5 2.65C6.5 2.65 5.26855 1 3.75 1Z" stroke="#242634" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    65
                                                </li>
                                                <li class="flex justify-center items-center gap-1 font-roboto font-medium text-[10px] text-primary opacity-50">
                                                    <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.5" d="M7.15155 7.31796V6.61008L6.79761 6.96479L7.15155 7.31796ZM7.15155 7.31796L7.65155 6.81686V7.31796H7.15155ZM6.55133 2.62003V3.07593L6.09737 3.11791C5.32664 3.18917 3.90933 3.42981 2.69752 4.22434C1.58392 4.95449 0.616837 6.16669 0.509938 8.25436L0.796866 7.10849C1.27741 5.18941 2.63633 4.20462 3.89287 3.7108C5.13754 3.22163 6.32508 3.19274 6.60144 3.19274C6.61473 3.19274 6.62748 3.18746 6.63687 3.17806L6.99043 3.53162L6.63688 3.17806C6.64627 3.16867 6.65155 3.15592 6.65155 3.14263V2.26796V1.05899L7.50549 1.91479L10.025 4.43979L10.3774 4.79296L10.025 5.14613L7.50549 7.67112L6.65155 8.52693V7.31796L6.65155 6.44328L6.65155 6.44263C6.65157 6.43063 6.64728 6.41902 6.63946 6.40992C6.6321 6.40135 6.62207 6.39553 6.61102 6.39338C6.271 6.34821 5.92832 6.32609 5.58531 6.32718L5.5813 6.32716C4.14137 6.32012 2.7376 6.77787 1.57861 7.63238L0.503178 8.42528C0.501162 8.49709 0.500139 8.56989 0.500139 8.64372H0.500266L0.500012 8.65497C0.499772 8.66564 0.502949 8.67611 0.509077 8.68485L0.0996609 8.97187L0.50908 8.68486C0.514738 8.69293 0.522643 8.69914 0.531788 8.70273C0.541056 8.70526 0.550871 8.70508 0.560059 8.70218C0.570034 8.69904 0.578775 8.69285 0.585055 8.68449L0.596217 8.66963L0.608452 8.65564C1.22841 7.94671 1.99522 7.38118 2.85565 6.99831C3.71492 6.61595 4.64701 6.42491 5.58738 6.43838H6.05133H6.55133V6.93838V8.64213C6.55147 8.65181 6.5544 8.66125 6.55979 8.66931C6.56527 8.6775 6.57304 8.68389 6.58213 8.68768C6.59121 8.69148 6.60122 8.69251 6.6109 8.69065C6.62019 8.68886 6.62878 8.68448 6.63568 8.67803L10.4837 4.82998L10.4837 4.82998L10.4852 4.82854C10.4899 4.82388 10.4936 4.81834 10.4961 4.81223L10.9577 5.00452L10.4961 4.81223C10.4987 4.80612 10.5 4.79957 10.5 4.79296C10.5 4.78634 10.4987 4.77979 10.4961 4.77369L10.9573 4.58158L10.4961 4.77369C10.4936 4.76758 10.4899 4.76204 10.4852 4.75738L10.4852 4.75738L10.4837 4.75593L6.63441 0.906616C6.6343 0.906509 6.63419 0.906401 6.63409 0.906295C6.62504 0.897484 6.613 0.892419 6.60039 0.892101C6.58748 0.892372 6.57516 0.897618 6.56601 0.906766C6.55661 0.916164 6.55133 0.92891 6.55133 0.942198V2.62003Z" stroke="#242634"/>
                                                    </svg>
                                                    85
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Latest Articles -->
                    <div class="latest__articles pt-[100px]">
                        <!-- Articles Title -->
                        <h3 class="latest__title font-roboto font-medium text-[22px] text-primary tracking-[0.25px] leading-[30px] pb-[30px]">
                            Latest Articles
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 md:gap-x-5 lg:gap-x-0 lg:grid-cols-1">
                            <!-- Blog Card 1 -->

                            @foreach($allnews as $all)

                            <div class="blog__card flex shadow-sm mb-[10px]">
                                <!-- Card Image -->
                                <div class="card__image relative w-2/5">
                                    <img class="w-full h-full object-cover object-center" src="{{ asset('/storage/' . $all->feature_image) }}" alt="Image">
                                    <span class="overlay absolute top-0 py-1 px-2 bg-white font-roboto font-normal text-[12px] text-primary">
                                       News{{-- {{$all['post_category']['category']}} --}}
                                    </span>
                                </div>
                                <!-- Card Info -->
                                <div class="card__info py-4 px-4 w-3/5">
                                    <!-- Info Title -->
                                    <h5 class="info__title font-roboto font-normal text-[12px] text-primary">
                                        <a href="{{ route('news_details', $all->id) }}" class="hover:opacity-80">
                                            {{$all->title}}                                        
                                        </a>
                                    </h5>
                                    <!-- Blog Post -->
                                    <div class="blog__post pt-10">
                                        <!-- Post Avator -->
                                        <div class="post__avator flex justify-between items-center">
                                            <div class="flex items-center gap-1">
                                                <!-- Avator image -->
                                                <div class="avator__img">
                                                    <img class="w-[15px] h-[15px]" src="{{ asset('/assets/img/avator.png') }}" alt="Image">
                                                </div>
                                                <!-- Avator Name -->
                                                <h5 class="amator__name font-roboto font-normal text-[10px] text-primary opacity-50">
                                                    {{isset($all->user) ? $all->user->name : ''}}
                                                </h5>
                                            </div>
                                            <!-- Avator Meta box -->
                                            <ul class="flex justify-center items-center gap-3">
                                                <li class="flex justify-center items-center gap-1 font-roboto font-medium text-[10px] text-primary opacity-50">
                                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.5" d="M3.75 1C2.23145 1 1 2.2188 1 3.7225C1 4.93635 1.48125 7.81725 6.2184 10.7295C6.30326 10.7811 6.40067 10.8084 6.5 10.8084C6.59933 10.8084 6.69675 10.7811 6.7816 10.7295C11.5188 7.81725 12 4.93635 12 3.7225C12 2.2188 10.7686 1 9.25 1C7.73145 1 6.5 2.65 6.5 2.65C6.5 2.65 5.26855 1 3.75 1Z" stroke="#242634" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    65
                                                </li>
                                                <li class="flex justify-center items-center gap-1 font-roboto font-medium text-[10px] text-primary opacity-50">
                                                    <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.5" d="M7.15155 7.31796V6.61008L6.79761 6.96479L7.15155 7.31796ZM7.15155 7.31796L7.65155 6.81686V7.31796H7.15155ZM6.55133 2.62003V3.07593L6.09737 3.11791C5.32664 3.18917 3.90933 3.42981 2.69752 4.22434C1.58392 4.95449 0.616837 6.16669 0.509938 8.25436L0.796866 7.10849C1.27741 5.18941 2.63633 4.20462 3.89287 3.7108C5.13754 3.22163 6.32508 3.19274 6.60144 3.19274C6.61473 3.19274 6.62748 3.18746 6.63687 3.17806L6.99043 3.53162L6.63688 3.17806C6.64627 3.16867 6.65155 3.15592 6.65155 3.14263V2.26796V1.05899L7.50549 1.91479L10.025 4.43979L10.3774 4.79296L10.025 5.14613L7.50549 7.67112L6.65155 8.52693V7.31796L6.65155 6.44328L6.65155 6.44263C6.65157 6.43063 6.64728 6.41902 6.63946 6.40992C6.6321 6.40135 6.62207 6.39553 6.61102 6.39338C6.271 6.34821 5.92832 6.32609 5.58531 6.32718L5.5813 6.32716C4.14137 6.32012 2.7376 6.77787 1.57861 7.63238L0.503178 8.42528C0.501162 8.49709 0.500139 8.56989 0.500139 8.64372H0.500266L0.500012 8.65497C0.499772 8.66564 0.502949 8.67611 0.509077 8.68485L0.0996609 8.97187L0.50908 8.68486C0.514738 8.69293 0.522643 8.69914 0.531788 8.70273C0.541056 8.70526 0.550871 8.70508 0.560059 8.70218C0.570034 8.69904 0.578775 8.69285 0.585055 8.68449L0.596217 8.66963L0.608452 8.65564C1.22841 7.94671 1.99522 7.38118 2.85565 6.99831C3.71492 6.61595 4.64701 6.42491 5.58738 6.43838H6.05133H6.55133V6.93838V8.64213C6.55147 8.65181 6.5544 8.66125 6.55979 8.66931C6.56527 8.6775 6.57304 8.68389 6.58213 8.68768C6.59121 8.69148 6.60122 8.69251 6.6109 8.69065C6.62019 8.68886 6.62878 8.68448 6.63568 8.67803L10.4837 4.82998L10.4837 4.82998L10.4852 4.82854C10.4899 4.82388 10.4936 4.81834 10.4961 4.81223L10.9577 5.00452L10.4961 4.81223C10.4987 4.80612 10.5 4.79957 10.5 4.79296C10.5 4.78634 10.4987 4.77979 10.4961 4.77369L10.9573 4.58158L10.4961 4.77369C10.4936 4.76758 10.4899 4.76204 10.4852 4.75738L10.4852 4.75738L10.4837 4.75593L6.63441 0.906616C6.6343 0.906509 6.63419 0.906401 6.63409 0.906295C6.62504 0.897484 6.613 0.892419 6.60039 0.892101C6.58748 0.892372 6.57516 0.897618 6.56601 0.906766C6.55661 0.916164 6.55133 0.92891 6.55133 0.942198V2.62003Z" stroke="#242634"/>
                                                    </svg>
                                                    85
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vehicle Section Ends -->


    <!-- Articles Helpful Section Starts -->
    <div class="articles__helpful py-10 border-y">
        <div class="xl:container mx-auto px-5 md:px-8 lg:px-[63px]">
            <!-- Helpful Content -->
            <div class="helpful__content text-center">
                <!-- Content Title -->
                <h3 class="content__title font-roboto font-normal text-base text-primary">
                    Was this article helpful?
                </h3>
                <!-- Content Button -->
                <div class="content__button gap-6 sm:gap-12 flex justify-center py-4">
                    <button class="ountline-none bg-secondary font-roboto font-normal text-base text-primary py-2 w-[86px] rounded-md hover:bg-primary hover:text-secondary transition-all ease-in-out duration-300">
                        Yes
                    </button>
                    <button class="ountline-none bg-secondary font-roboto font-normal text-base text-primary py-2 w-[86px] rounded-md hover:bg-primary hover:text-secondary transition-all ease-in-out duration-300">
                        No
                    </button>
                </div>
                <!-- Content User -->
                <div class="content__user">
                    <span class="font-roboto font-light text-[12px] text-primary">
                        65 people liked this
                    </span>
                </div>
                <!-- Content Questions -->
                <!-- Articles Social -->
                <div class="articles__social pt-[27px]">
                    <!-- Social Item -->
                    <ul class="social__item flex justify-center gap-[10px] text-secondary">
                        <!-- Twiter Social List -->
                        <li class="item__list">
                            <a href="#" class="text-secondary hover:text-primary">
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="18.5" height="17.4191" rx="1" fill="#D6D3C7"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.19 15.4189C8.74893 15.435 11.2077 14.4248 13.0172 12.6138C14.8267 10.8028 15.8361 8.34195 15.82 5.78089V5.33802C16.4767 4.85648 17.0451 4.26475 17.5 3.58906C16.8816 3.85973 16.2273 4.03925 15.5575 4.122C16.2677 3.69849 16.8006 3.03185 17.0575 2.24544C16.3956 2.64285 15.6699 2.92223 14.9125 3.07113C13.8639 1.95287 12.1961 1.67766 10.8443 2.39981C9.49249 3.12196 8.79278 4.6619 9.1375 6.1562C6.41635 6.02252 3.88036 4.7371 2.1625 2.62075C1.27372 4.16463 1.7328 6.13374 3.2125 7.12451C2.68646 7.1042 2.17259 6.9602 1.7125 6.70416V6.74169C1.70287 8.34386 2.81204 9.73539 4.375 10.082C3.88573 10.2137 3.37322 10.2342 2.875 10.142C3.32495 11.5007 4.58014 12.4294 6.01 12.4614C4.81691 13.4226 3.33407 13.9517 1.8025 13.9627C1.53396 13.9549 1.26606 13.9324 1 13.8951C2.55022 14.8836 4.3519 15.4048 6.19 15.3964" fill="white"/>
                                </svg>
                            </a>
                        </li>
                        <!-- Facebook Social List -->
                        <li class="item__list">
                            <a href="#" class="">
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.2569 0H1.48309C0.941821 0.00402784 0.504024 0.442189 0.5 0.983911V16.7709C0.504024 17.3126 0.941821 17.7508 1.48309 17.7548H9.97612V10.8896H7.66992V8.20419H9.97612V6.22897C9.97612 3.93564 11.3731 2.68541 13.428 2.68541C14.1154 2.68541 14.8029 2.68541 15.4903 2.78898V5.17848H14.0785C12.9623 5.17848 12.748 5.71112 12.748 6.48789V8.19679H15.409L15.0616 10.8822H12.748V17.7548H17.2569C17.7982 17.7508 18.236 17.3126 18.24 16.7709V0.983911C18.236 0.442189 17.7982 0.00402784 17.2569 0Z" fill="#D6D3C7"/>
                                </svg>
                            </a>
                        </li>
                        <!-- Linkdin Social List -->
                        <li class="item__list">
                            <a href="#" class="">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6571 4.45654e-05H1.56334C0.848016 -0.00425969 0.260315 0.564215 0.240234 1.27987V16.4232C0.256389 17.1406 0.846427 17.7113 1.56334 17.703H16.6571C17.374 17.7113 17.9641 17.1406 17.9802 16.4232V1.27987C17.9602 0.564215 17.3725 -0.00425969 16.6571 4.45654e-05ZM5.49558 15.0987H2.89372V6.65777H5.49558V15.0987ZM4.22396 5.48195C3.39315 5.48219 2.71395 4.81885 2.69389 3.98759C2.67926 3.57714 2.83577 3.17907 3.12594 2.88865C3.41612 2.59824 3.81385 2.4416 4.22396 2.45624C5.02581 2.51212 5.64775 3.17943 5.64775 3.98389C5.64775 4.78835 5.02581 5.45566 4.22396 5.51154V5.48195ZM15.3795 15.0472H12.8072V10.9192C12.8072 9.93527 12.8072 8.65545 11.4323 8.65545C10.0575 8.65545 9.85051 9.73553 9.85051 10.823V15.0028H7.21908V6.65803H9.67311V7.76771H9.72486C10.2376 6.87648 11.2041 6.34575 12.2306 6.39171C14.8842 6.39171 15.3795 8.16719 15.3795 10.4235V15.0472Z" fill="#D6D3C7"/>
                                </svg>
                            </a>
                        </li>
                        <!-- Pinterest Social List -->
                        <li class="item__list">
                            <a href="#" class="">
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.72 1.90071V15.8393C18.72 16.8886 17.8686 17.74 16.8193 17.74H7.09394C7.48201 17.0906 7.98095 16.1561 8.17894 15.3918C8.29773 14.9364 8.78479 13.0793 8.78479 13.0793C9.10157 13.6851 10.0282 14.196 11.0142 14.196C13.9484 14.196 16.059 11.4993 16.059 8.14931C16.059 4.9379 13.4376 2.53429 10.0638 2.53429C5.8664 2.53429 3.64098 5.34972 3.64098 8.41858C3.64098 9.84412 4.40127 11.6181 5.61297 12.1844C5.79908 12.2715 5.89412 12.2319 5.93768 12.0537C5.96936 11.9191 6.13567 11.2578 6.20694 10.9529C6.2307 10.8539 6.21882 10.7707 6.13963 10.6757C5.73969 10.1886 5.41498 9.2937 5.41498 8.45818C5.41498 6.31196 7.03851 4.23701 9.80642 4.23701C12.1942 4.23701 13.8692 5.8645 13.8692 8.19287C13.8692 10.8222 12.5427 12.6437 10.8122 12.6437C9.8579 12.6437 9.14513 11.8557 9.37084 10.8855C9.64407 9.72928 10.1747 8.48194 10.1747 7.64642C10.1747 5.54771 7.18502 5.83678 7.18502 8.63637C7.18502 9.49565 7.47409 10.0817 7.47409 10.0817C6.2307 15.3403 6.04459 15.4077 6.30198 17.7083L6.3891 17.74H2.88069C1.83134 17.74 0.97998 16.8886 0.97998 15.8393V1.90071C0.97998 0.851362 1.83134 0 2.88069 0H16.8193C17.8686 0 18.72 0.851362 18.72 1.90071Z" fill="#D6D3C7"/>
                                </svg>
                            </a>
                        </li>
                        <!-- Instagram Social List -->
                        <li class="item__list">
                            <a href="#" class="">
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.59022 6.75783C9.1725 6.75799 8.76421 6.882 8.41697 7.11418C8.06973 7.34636 7.79913 7.67629 7.63939 8.06226C7.47965 8.44822 7.43793 8.87288 7.51952 9.28255C7.60111 9.69222 7.80233 10.0685 8.09776 10.3638C8.39318 10.6591 8.76954 10.8602 9.17923 10.9416C9.58893 11.0231 10.0136 10.9812 10.3995 10.8213C10.7854 10.6614 11.1152 10.3907 11.3473 10.0434C11.5793 9.69605 11.7032 9.28771 11.7032 8.87C11.7028 8.30981 11.48 7.7727 11.0838 7.37666C10.6876 6.98061 10.1504 6.75804 9.59022 6.75783V6.75783ZM14.5285 5.1343C14.421 4.86181 14.2586 4.61431 14.0515 4.40716C13.8443 4.20002 13.5968 4.03765 13.3243 3.93012C12.4928 3.60185 10.5129 3.67551 9.59022 3.67551C8.66758 3.67551 6.68965 3.59908 5.85571 3.93012C5.58321 4.03765 5.33571 4.20002 5.12857 4.40716C4.92142 4.61431 4.75905 4.86181 4.65153 5.1343C4.32365 5.96587 4.39691 7.94776 4.39691 8.8696C4.39691 9.79145 4.32365 11.771 4.65311 12.6053C4.76064 12.8778 4.92301 13.1253 5.13015 13.3324C5.3373 13.5396 5.58479 13.702 5.85729 13.8095C6.68885 14.1378 8.66876 14.0641 9.5918 14.0641C10.5148 14.0641 12.492 14.1405 13.3259 13.8095C13.5984 13.702 13.8459 13.5396 14.0531 13.3324C14.2602 13.1253 14.4226 12.8778 14.5301 12.6053C14.8607 11.7737 14.7847 9.79185 14.7847 8.87C14.7847 7.94815 14.8607 5.96903 14.5301 5.1347L14.5285 5.1343ZM9.59022 12.1171C8.94801 12.1171 8.32022 11.9266 7.78625 11.5698C7.25227 11.213 6.83609 10.7059 6.59033 10.1126C6.34457 9.51927 6.28026 8.8664 6.40555 8.23653C6.53084 7.60666 6.84009 7.0281 7.2942 6.57399C7.74831 6.11988 8.32688 5.81063 8.95675 5.68534C9.58661 5.56005 10.2395 5.62435 10.8328 5.87011C11.4261 6.11588 11.9333 6.53206 12.29 7.06603C12.6468 7.60001 12.8373 8.22779 12.8373 8.87C12.8378 9.29656 12.7542 9.71902 12.5912 10.1132C12.4282 10.5074 12.189 10.8656 11.8874 11.1672C11.5858 11.4688 11.2276 11.708 10.8334 11.8709C10.4392 12.0339 10.0168 12.1176 9.59022 12.1171V12.1171ZM12.9711 6.24464C12.8212 6.24472 12.6746 6.20033 12.5499 6.1171C12.4252 6.03387 12.328 5.91553 12.2706 5.77704C12.2132 5.63856 12.1981 5.48616 12.2273 5.33911C12.2565 5.19206 12.3287 5.05698 12.4347 4.95095C12.5406 4.84491 12.6757 4.77269 12.8227 4.74341C12.9697 4.71413 13.1222 4.72912 13.2607 4.78647C13.3992 4.84383 13.5176 4.94097 13.6009 5.06562C13.6842 5.19026 13.7286 5.33681 13.7286 5.48673C13.729 5.58628 13.7098 5.68494 13.672 5.77704C13.6342 5.86915 13.5786 5.95288 13.5084 6.02344C13.4381 6.094 13.3547 6.15 13.2627 6.18824C13.1708 6.22647 13.0723 6.24617 12.9727 6.24622L12.9711 6.24464ZM16.5595 0H2.62093C2.11683 0 1.63337 0.200253 1.27692 0.556706C0.920468 0.913159 0.720215 1.39661 0.720215 1.90071L0.720215 15.8393C0.720215 16.3434 0.920468 16.8268 1.27692 17.1833C1.63337 17.5397 2.11683 17.74 2.62093 17.74H16.5595C17.0636 17.74 17.5471 17.5397 17.9035 17.1833C18.26 16.8268 18.4602 16.3434 18.4602 15.8393V1.90071C18.4602 1.39661 18.26 0.913159 17.9035 0.556706C17.5471 0.200253 17.0636 0 16.5595 0V0ZM15.8816 11.4835C15.8305 12.4984 15.5988 13.3977 14.858 14.1366C14.1171 14.8755 13.2186 15.1119 12.2049 15.1602C11.1591 15.2192 8.02371 15.2192 6.97792 15.1602C5.96302 15.1091 5.06691 14.877 4.32484 14.1366C3.58277 13.3961 3.34954 12.4964 3.30123 11.4835C3.24223 10.4373 3.24223 7.30151 3.30123 6.25652C3.35231 5.24162 3.58119 4.34234 4.32484 3.60344C5.06849 2.86453 5.96698 2.63091 6.97792 2.5826C8.02371 2.52359 11.1591 2.52359 12.2049 2.5826C13.2198 2.63368 14.1187 2.86572 14.858 3.60621C15.5973 4.3467 15.8333 5.24637 15.8816 6.26127C15.9406 7.30349 15.9406 10.4365 15.8816 11.4835Z" fill="#D6D3C7"/>
                                </svg>
                            </a>
                        </li>
                        <!-- Reddit Social List -->
                        <li class="item__list">
                            <a href="#" class="">
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.6742 12.414C11.7811 12.521 11.7811 12.6833 11.6742 12.7783C10.704 13.7485 7.95986 13.7525 6.98575 12.7783C6.87883 12.6833 6.87883 12.521 6.98575 12.414C7.08078 12.319 7.24314 12.319 7.33817 12.414C8.07866 13.1743 10.5456 13.1902 11.3178 12.414C11.4128 12.323 11.5791 12.323 11.6742 12.414ZM8.05886 10.2837C8.05886 9.69364 7.58764 9.22242 7.00951 9.22242C6.41949 9.22242 5.94827 9.69364 5.94827 10.2837C5.94827 10.8618 6.41949 11.333 7.00951 11.333C7.58764 11.333 8.05886 10.8618 8.05886 10.2837ZM11.6504 9.22242C11.0723 9.22242 10.6011 9.69364 10.6011 10.2837C10.6011 10.8618 11.0723 11.333 11.6504 11.333C12.2404 11.333 12.7116 10.8618 12.7116 10.2837C12.7116 9.69364 12.2404 9.22242 11.6504 9.22242ZM18.2 1.90071V15.8393C18.2 16.8886 17.3486 17.74 16.2992 17.74H2.36068C1.31132 17.74 0.459961 16.8886 0.459961 15.8393V1.90071C0.459961 0.851362 1.31132 0 2.36068 0H16.2992C17.3486 0 18.2 0.851362 18.2 1.90071ZM14.252 7.46822C13.8521 7.46822 13.4997 7.63454 13.2383 7.89192C12.284 7.23063 11.001 6.80693 9.57547 6.75942L10.316 3.42525L12.6721 3.95586C12.6721 4.534 13.1433 5.00521 13.7214 5.00521C14.3114 5.00521 14.7826 4.52212 14.7826 3.94398C14.7826 3.36585 14.3114 2.88275 13.7214 2.88275C13.3096 2.88275 12.9572 3.12826 12.779 3.47276L10.1774 2.89463C10.0467 2.85899 9.91997 2.95403 9.88434 3.0847L9.07257 6.75942C7.65892 6.81881 6.38781 7.24251 5.4335 7.9038C5.17611 7.63454 4.80784 7.46822 4.4079 7.46822C2.92297 7.46822 2.43591 9.46397 3.79413 10.1411C3.74661 10.3549 3.72285 10.5767 3.72285 10.8024C3.72285 13.0397 6.24526 14.8533 9.34184 14.8533C12.4503 14.8533 14.9727 13.0397 14.9727 10.8024C14.9727 10.5767 14.9489 10.3431 14.8896 10.1292C16.2201 9.44813 15.729 7.46822 14.252 7.46822V7.46822Z" fill="#D6D3C7"/>
                                </svg>
                            </a>
                        </li>
                        <!-- Mail List -->
                        <li class="item__list">
                            <a href="#" class="">
                                <svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.4002 14.625H14.6002V5.48438L9.2002 9.40179L3.8002 5.48438V14.625H2.0002V2.08929H3.0802L9.2002 6.52902L15.3202 2.08929H16.4002V14.625ZM16.4002 0H2.0002C1.0012 0 0.200195 0.929732 0.200195 2.08929V14.625C0.200195 15.1791 0.389838 15.7105 0.727403 16.1023C1.06497 16.4942 1.52281 16.7143 2.0002 16.7143H16.4002C16.8776 16.7143 17.3354 16.4942 17.673 16.1023C18.0106 15.7105 18.2002 15.1791 18.2002 14.625V2.08929C18.2002 1.53517 18.0106 1.00375 17.673 0.611938C17.3354 0.22012 16.8776 0 16.4002 0V0Z" fill="#D6D3C7"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Articles Helpful Section Ends -->


    <div class="pt-[24px] pb-[87px]">
        <div class="xl:container mx-auto px-5 md:px-8 lg:px-[63px]">
            <div class="">
                <h4 class="font-roboto font-medium text-[22px] text-primary">
                    Thanks for letting us know.
                </h4>
                <form action="">
                    <textarea name="" id="" cols="30" rows="6" placeholder="How can we make this article more helpful? (Optional)" class="w-full resize-none my-[18px] p-4 border border-secondaryDark focus:ring-0 rounded-md font-roboto font-light italic text-blue opacity-50"></textarea>
                    <p class="font-roboto font-normal text-base text-primary pb-[36px]">
                        *Please don’t include any personal information in your comment.
                    </p>
                    <button class="ountline-none bg-secondary font-roboto font-normal text-base text-primary py-2 w-[111px] rounded-md hover:bg-primary hover:text-secondary transition-all ease-in-out duration-300">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>


    <!-- Articles Comments Section Starts -->
    <div class="articles__comments pb-16">
        <div class="xl:container mx-auto px-5 md:px-8 lg:px-[63px]">
            <!-- Comments Body -->
            <div class="comments__body">
                <!-- Comments Title -->
                <h2 class="comments__title font-roboto font-medium text-[22px] text-primary">
                    Comments
                    <span class="title__number text-secondaryDark">
                        (10)
                    </span>
                </h2>
                <!-- Avator -->
                <div class="avator pt-16 pb-10 flex gap-4 sm:gap-[67px]">
                    <!-- Avator Image -->
                    <div class="avator__img relative hidden sm:block">
                        <img class="w-[50px] h-[50px] rounded-full" src="{{ asset('/assets/img/avator.png') }}" alt="Image">
                        <!-- Active Icon -->
                        <div class="avator__active-icon absolute h-3 w-3 bg-[#00AB11] rounded-full right-0 bottom-2 border border:bg-white"></div>
                    </div>
                    <!-- Avator Form -->
                    <div class="avator__form w-full">
                        <form action="">
                            <textarea name="text" id="" cols="" rows="" placeholder="Add a comment..." class="w-full xl:w-[100%] h-14 py-4 px-5 font-roboto font-normal text-sm text-primary resize-none bg-card focus:ring-0 border border-transparent focus:bg-transparent focus:border-secondaryDark rounded-md"></textarea>
                        </form>
                    </div>
                </div>
                <!-- Avator Comments -->
                <div class="avator__comments md:pl-14 pb-4 flex flex-wrap sm:gap-x-2 md:gap-10">
                    <!-- Avator Image -->
                    <div class="avator__img w-10 h-10 rounded-full hidden sm:block">
                        <img class="object-cover object-center w-10 h-10 rounded-full" src="{{ asset('/assets/img/avator-comment.png') }}" alt="Image">
                    </div>
                    <!-- Avator Info -->
                    <div class="avator__info">
                        <!-- Info Title -->
                        <h4 class="info__title font-roboto font-medium text-sm text-primary before:relative">
                            Cameron Williamson
                            <span class="font-light text-[12px] text-blue before:content-[''] before:block before:w-2 before:h-2 before:bg-secondaryDark before:rounded-full before:mx-1 before:absolute before:top-3">
                                Mar 20, 2019, 23:14pm
                            </span>
                        </h4>
                        <!-- Info message -->
                        <p class="info__message w-full sm:w-[470px] font-roboto font-normal text-sm text-primary py-6">
                            Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                        </p>
                        <!-- Info Replay -->
                        <p class="info__reply flex items-center gap-2 font-roboto font-normal text-[12px] text-blue">
                            <span>
                                Reply
                            </span>
                            <span class="font-light">
                                10 like
                            </span>
                            <span>
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 11.2325V5.60755C0 5.29689 0.251836 5.04505 0.562499 5.04505H2.4375C2.74816 5.04505 3 5.29689 3 5.60755V11.2325C3 11.5432 2.74816 11.795 2.4375 11.795H0.562499C0.251836 11.795 0 11.5432 0 11.2325ZM0.937499 6.54505C0.937499 6.85572 1.18933 7.10755 1.5 7.10755C1.81066 7.10755 2.0625 6.85572 2.0625 6.54505C2.0625 6.23439 1.81066 5.98255 1.5 5.98255C1.18933 5.98255 0.937499 6.23439 0.937499 6.54505ZM7.31249 0.54506C6.83945 0.54506 6.62144 1.46599 6.51723 1.89963C6.39522 2.40742 6.26905 2.93252 5.92209 3.28014C5.16109 4.04242 4.76186 5.01374 3.83341 5.93118C3.80699 5.95729 3.78601 5.98839 3.7717 6.02268C3.75738 6.05696 3.75002 6.09374 3.75002 6.13089V11.1411C3.75002 11.2944 3.8729 11.4195 4.02618 11.4223C4.39722 11.4291 4.8862 11.6351 5.26019 11.8015C6.00442 12.1326 6.93067 12.5446 8.06237 12.545H8.12903C9.13161 12.545 10.3172 12.5354 10.7956 11.8481C10.9923 11.5655 11.0404 11.2145 10.9397 10.802C11.322 10.4023 11.5271 9.6568 11.3236 9.04991C11.7348 8.50072 11.7723 7.73432 11.5418 7.18736L11.5444 7.18478C11.8231 6.90472 12.002 6.45215 12 6.03172C11.9963 5.32035 11.3869 4.67005 10.6042 4.67005H8.22006C8.39132 4.00584 8.99999 3.44821 8.99999 2.45409C8.99999 0.732559 7.87499 0.54506 7.31249 0.54506Z" fill="#323647"/>
                                </svg>
                            </span>
                            <span>
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 1.85754V7.48253C12 7.7932 11.7482 8.04503 11.4375 8.04503H9.5625C9.25184 8.04503 9 7.7932 9 7.48253V1.85754C9 1.54688 9.25184 1.29504 9.5625 1.29504H11.4375C11.7482 1.29504 12 1.54688 12 1.85754ZM11.0625 6.54504C11.0625 6.23437 10.8107 5.98254 10.5 5.98254C10.1893 5.98254 9.9375 6.23437 9.9375 6.54504C9.9375 6.8557 10.1893 7.10754 10.5 7.10754C10.8107 7.10754 11.0625 6.8557 11.0625 6.54504ZM4.68751 12.545C5.16055 12.545 5.37856 11.6241 5.48277 11.1905C5.60478 10.6827 5.73095 10.1576 6.07791 9.80995C6.83891 9.04767 7.23814 8.07635 8.16659 7.15891C8.19301 7.13279 8.21399 7.10169 8.2283 7.06741C8.24262 7.03313 8.24998 6.99635 8.24998 6.9592V1.94897C8.24998 1.79567 8.1271 1.67058 7.97382 1.66777C7.60278 1.66097 7.1138 1.45498 6.73981 1.2886C5.99558 0.957497 5.06933 0.545442 3.93763 0.545044H3.87097C2.86839 0.545044 1.68278 0.554724 1.2044 1.242C1.00771 1.52459 0.959571 1.87561 1.0603 2.28807C0.677993 2.68774 0.472891 3.43329 0.676352 4.04018C0.265164 4.58937 0.227689 5.35577 0.458197 5.90273L0.455617 5.90531C0.176875 6.18536 -0.00195217 6.63794 1.62125e-05 7.05836C0.0036726 7.76974 0.61307 8.42003 1.39579 8.42003H3.77994C3.60868 9.08425 3.00001 9.64188 3.00001 10.636C3.00001 12.3575 4.12501 12.545 4.68751 12.545Z" fill="#323647"/>
                                </svg>
                            </span>
                        </p>
                    </div>
                </div>
                <!-- Avator -->
                <div class="avator pt-3 pb-10 flex gap-4 sm:gap-[67px]">
                    <!-- Avator Image -->
                    <div class="avator__img relative hidden sm:block">
                        <img class="w-[50px] h-[50px] rounded-full" src="{{ asset('/assets/img/avator.png') }}" alt="Image">
                        <!-- Active Icon -->
                        <div class="avator__active-icon absolute h-3 w-3 bg-[#00AB11] rounded-full right-0 bottom-2 border border:bg-white"></div>
                    </div>
                    <!-- Avator Form -->
                    <div class="avator__form w-full">
                        <form action="">
                            <textarea name="text" id="" cols="" rows="" placeholder="Add a comment..." class="w-full xl:w-[100%] h-14 py-4 px-5 font-roboto font-normal text-sm text-primary resize-none bg-card focus:ring-0 border border-transparent focus:bg-transparent focus:border-secondaryDark rounded-md"></textarea>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Articles Comments Section Ends -->


@endsection
