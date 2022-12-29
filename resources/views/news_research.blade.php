@extends('layouts.front_app')


@section('title')
    News & Research | Cars Around
@endsection


@section('content')

    <!-- Breadcrumb section Starts -->
    <div class="breadcrumb mt-20 pt-8">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
            <!-- Breadcrumb Item -->
            <nav class="breadcrumb__item flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2">
                    <!-- Breadcrumb List -->
                    <li class="breadcrumb__list inline-flex items-center">
                        <a href="{{ route('home') }}" class="inline-flex items-center text-base font-roboto font-normal text-primary opacity-50">
                            <span class="home__icon">
                                <svg width="28" height="27" viewBox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5" d="M27.4194 13.0102L15.4856 1.08258L14.6857 0.282671C14.5034 0.101615 14.257 0 14.0001 0C13.7432 0 13.4967 0.101615 13.3144 0.282671L0.580756 13.0102C0.394001 13.1962 0.246405 13.4177 0.146681 13.6617C0.0469573 13.9058 -0.00287419 14.1673 0.000128015 14.4308C0.0124818 15.518 0.917397 16.3858 2.00453 16.3858H3.31712V26.4449H24.683V16.3858H26.0234C26.5515 16.3858 27.0487 16.1789 27.4224 15.8052C27.6065 15.6218 27.7522 15.4037 27.8514 15.1635C27.9505 14.9234 28.001 14.6659 28 14.4061C28 13.8811 27.7931 13.3839 27.4194 13.0102ZM15.7296 24.2212H12.2705V17.9208H15.7296V24.2212ZM22.4593 14.1621V24.2212H17.7062V17.1796C17.7062 16.497 17.1534 15.9442 16.4708 15.9442H11.5293C10.8468 15.9442 10.2939 16.497 10.2939 17.1796V24.2212H5.5408V14.1621H2.57589L14.0031 2.74416L14.7166 3.45759L25.4273 14.1621H22.4593Z" fill="#242634"/>
                                </svg>
                            </span>
                        </a>
                    </li>
                    <!-- Breadcrumb List -->
                    <li class="breadcrumb__list" aria-current="page">
                        <div class="flex items-center">
                            <span class="array__icon mr-2">
                                <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5" d="M0.315424 0.317302C0.697761 -0.0673107 1.29604 -0.102266 1.71764 0.212406L1.83843 0.317302L13.6845 12.234C14.0669 12.6185 14.1017 13.2204 13.7888 13.6445L13.6845 13.766L1.83843 25.6827C1.41786 26.1058 0.735985 26.1058 0.315424 25.6827C-0.0669125 25.2982 -0.101661 24.6963 0.211149 24.2722L0.315424 24.1507L11.4 13L0.315424 1.84937C-0.105136 1.42631 -0.105136 0.740366 0.315424 0.317302Z" fill="#242634"/>
                                </svg>
                            </span>
                            <span class="font-roboto font-medium text-lg text-primary opacity-50">
                                News & research
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Breadcrumb section Ends -->

    <!-- News Heading section Starts -->
    <div class="news__heading text-center pb-16">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
            <!-- Heading Title -->
            <div class="heading__title relative mt-[80px] mb-[100px] w-full sm:w-5/6 md:w-3/4 lg:w-4/6 xl:w-3/6 mx-auto">
                <p class="absolute w-1/6 h-[1px] bg-primary bottom-7 sm:bottom-5"></p>
                <!-- Title -->
                <h2 class="heading__title font-roboto font-medium text-3xl text-primary flex justify-center items-center left-0 right-0 absolute bottom-0 w-4/6 mx-auto">
                    News and Research
                </h2>
                <p class="absolute w-1/6 h-[1px] bg-primary right-0 bottom-7 sm:bottom-5"></p>
            </div>
            <div class="">
                <!-- Heading Title -->
                <!-- <h2 class="heading__title font-roboto font-medium text-[40px] text-primary tracking-[0.25px] before:content-[''] before:block before:w-[70px] before:h-[1px] before:bg-primary before:absolute before:left-[30%] before:top-7 after:content-[''] after:block after:w-[70px] after:h-[1px] after:bg-primary after:absolute after:right-[30%] after:top-7">
                    News and Research
                </h2> -->
                <!-- Heading Description -->
                <p class="heading__des pt-[20px] font-roboto font-normal text-blue text-base w-full md:w-[700px] lg:w-[829px] mx-auto">
                    Drive has Australia’s latest and most comprehensive automotive news bringing you the most up-to-date information on new models, recalls, technology, industry and motor shows.
                </p>
            </div>
        </div>
    </div>
    <!-- News Heading section Ends -->


    <!-- News Search Box section Starts -->
    <div class="news__search-box pb-10">
        <div class="lg:container mx-auto px-5 md:px-8 lg:px-15">
            <div class="flex flex-wrap">
                <!-- News Latest -->
                <div class="news__latest w-full sm:w-1/2">
                    <!-- <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select an option</label> -->
                    <select id="countries" class="w-full sm:w-[300px] md:w-[320px] lg:w-[400px] py-3 px-8 outline-none rounded-full border border-secondaryDark font-roboto font-light text-[12px] text-primary">
                        <option selected>Latest News & Research</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                </div>
                <!-- News Search -->
                <div class="news__search w-full sm:w-1/2 relative flex flex-wrap justify-end items-center mt-4 sm:mt-0">
                    <form action="" class="w-full sm:w-[300px] md:w-[320px] lg:w-[400px]">
                        <label for="search" class="absolute p-3 pl-5">
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
                        <input type="search" name="search" id="search" placeholder="Seartch" class="py-3 px-14 w-full outline-none rounded-full border border-secondaryDark focus:outline-none focus:ring-0 focus:ring-primary focus:border-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- News Search Box section Ends -->


    <!-- News Card section Starts -->
    <div class="news__card pb-16">
        <div class="lg:container mx-auto px-5 md:px-8 lg:px-15">
            <!-- Card Item -->
            <div class="card__item grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 sm:gap-10 gap-14">
               
                <!-- Card List 1 -->
                @foreach($news as $item)

                <a href="{{ route('news_details', $item->id) }}" class="group transition-all ease-in-out duration-300">
                    <div class="card__list shadow-sm rounded-md  group-hover:bg-primary transition-all ease-in-out duration-300">
                        <!-- List Image -->
                        <div class="list__img relative">
                            <!-- Image -->
                            <img class="w-full min-h-[260px] h-[260px] rounded-tr-md" src="{{ asset('/storage/' . $item->feature_image) }}" alt="Image">
                            <!-- Image Overlay -->
                            <span class="img__overlay absolute top-0 bg-white py-1 px-3 font-roboto font-medium text-lg text-black rounded-br-md">
                               {{-- News {{$news->category->id}} --}}
                            </span>
                        </div>
                        <!-- List Content -->
                        <div class="list__content px-5 pb-5 ">
                            <!-- List Avator -->
                            <div class="list__avator flex pt-[12px] pb-[15px] gap-[10px] items-center">
                                <!-- Avator Image -->
                                <div class="avator__img">
                                    <img class="w-[25px] h-[25px]" src="{{ asset('/assets/img/news/avator-1.png') }}" alt="Image">
                                </div>
                                <!-- Avator Info -->
                                <div class="avator__info">
                                    <!-- Avator Name -->
                                    <h5 class="avator__name font-roboto font-normal text-[12px] text-primary group-hover:text-white">
                                        {{isset($item->user) ? $item->user->name : ''}}
                                    </h5>
                                    <!-- Avator Post Date -->
                                    <span class="avator__post-date font-roboto font-normal text-[8px] text-primary group-hover:text-white opacity-50 absolute">
                                        {{$item->created_at}}
                                    </span>
                                </div>
                            </div>
                            <!-- List Description -->
                            <div class="list__description">
                                <!-- List Title -->
                                <h3 class="list__title font-roboto font-bold text-base text-primary group-hover:text-white group-hover:text-opacity-80">
                                     
                                        {{$item->title}}
                                     
                                </h3>
                                <!-- List Text  -->
                                <p class="list__text py-5 font-roboto font-normal text-sm text-primary group-hover:text-white opacity-80">
                                    {{-- {{ Str::words($item->description, 10)}} --}}
                                </p>
                            </div>
                            <!-- Post Meta -->
                            <div class="post__meta-wrapper flex justify-between items-center">
                                <ul class="flex gap-[10px]">
                                    <!-- Post Like -->
                                    <li class="post__like relative group ">
                                        <span class="like__icon flex items-center gap-1 font-roboto font-medium text-[12px] text-primary group-hover:text-white opacity-50">
                                            <svg width="16" height="15" viewBox="0 0 16 15" class="stroke-[#242634] group-hover:stroke-white" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.5" d="M4.5 1C2.5673 1 1 2.5512 1 4.465C1 6.0099 1.6125 9.6765 7.6416 13.383C7.7496 13.4487 7.87358 13.4835 8 13.4835C8.12642 13.4835 8.2504 13.4487 8.3584 13.383C14.3875 9.6765 15 6.0099 15 4.465C15 2.5512 13.4327 1 11.5 1C9.5673 1 8 3.1 8 3.1C8 3.1 6.4327 1 4.5 1Z"  stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            65
                                        </span>
                                        <span class="like__name font-roboto font-medium text-[8px] text-primary group-hover:text-white absolute opacity-0 group-hover:opacity-80">
                                            Like
                                        </span>
                                    </li>
                                    <!-- Seen -->
                                    <li class="seen relative group">
                                        <span class="seen__icon flex items-center gap-1 font-roboto font-medium text-[12px] text-primary group-hover:text-white opacity-50">
                                            <svg width="16" height="13" viewBox="0 0 16 13" class="stroke-[#242634] group-hover:stroke-white"  xmlns="http://www.w3.org/2000/svg">
                                                <g opacity="0.5">
                                                <path d="M14.7411 5.4861C15.0863 5.93759 15.0863 6.5471 14.7411 6.99786C13.6539 8.41713 11.0455 11.3394 8.00011 11.3394C4.95475 11.3394 2.34631 8.41713 1.2591 6.99786C1.09116 6.78168 1 6.51573 1 6.24198C1 5.96823 1.09116 5.70228 1.2591 5.4861C2.34631 4.06683 4.95475 1.14453 8.00011 1.14453C11.0455 1.14453 13.6539 4.06683 14.7411 5.4861V5.4861Z"  stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8.00005 8.42637C9.20658 8.42637 10.1847 7.44828 10.1847 6.24175C10.1847 5.03522 9.20658 4.05713 8.00005 4.05713C6.79352 4.05713 5.81543 5.03522 5.81543 6.24175C5.81543 7.44828 6.79352 8.42637 8.00005 8.42637Z"  stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                                </g>
                                            </svg>
                                            250
                                        </span>
                                        <span class="seen__name font-roboto font-medium text-[8px] text-primary group-hover:text-white opacity-0 absolute group-hover:opacity-80 transition-all ease-in-out duration-400">
                                            Seen
                                        </span>
                                    </li>
                                </ul>
                                <ul class="flex gap-[10px]">
                                    <!-- comments -->
                                    <li class="comments relative group">
                                        <span class="comments__icon flex items-center gap-1 font-roboto font-medium text-[12px] text-primary group-hover:text-white opacity-50">
                                            <svg width="14" height="14" viewBox="0 0 14 14" class="stroke-[#242634] group-hover:stroke-white" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.69995 5.7998H7.19995V6.2998V7.8998H6.79995V6.2998V5.7998H6.29995H4.69995V5.3998H6.29995H6.79995V4.8998V3.2998H7.19995V4.8998V5.3998H7.69995H9.29995V5.7998H7.69995Z"/>
                                                <path d="M3.7331 10.7H3.56643L3.43309 10.8L0.5 13V1.4C0.5 0.904042 0.904042 0.5 1.4 0.5H12.6C13.096 0.5 13.5 0.904042 13.5 1.4V9.8C13.5 10.296 13.096 10.7 12.6 10.7H3.7331ZM12.6 10.3H13.1V9.8V1.4V0.9H12.6H1.4H0.9V1.4V11.2V12.1999L1.69998 11.6L3.43355 10.3H12.6Z"/>
                                            </svg>
                                            85
                                        </span>
                                        <span class="comments__name font-roboto font-medium text-[8px] text-primary group-hover:text-white opacity-0 absolute group-hover:opacity-80">
                                            Comments
                                        </span>
                                    </li>
                                    <!-- Share -->
                                    <li class="share group relative">
                                        <span class="share__icon flex items-center gap-1 font-roboto font-medium text-[12px] text-primary group-hover:text-white opacity-50">
                                            <svg width="14" height="12" viewBox="0 0 14 12" class="stroke-[#242634] group-hover:stroke-white" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.5" d="M8.2017 3.22765V3.68355L7.74773 3.72553C6.75796 3.81705 4.92807 4.12632 3.35844 5.15546C1.81952 6.16447 0.500177 7.88173 0.500177 10.8942H0.500304L0.500051 10.9054C0.499091 10.948 0.511777 10.9899 0.53626 11.0248C0.56027 11.0591 0.594395 11.0849 0.633827 11.0987C0.672875 11.111 0.714753 11.1109 0.753811 11.0986C0.793651 11.0861 0.82856 11.0614 0.853648 11.028L0.86481 11.0131L0.877044 10.9991C1.65306 10.1117 2.61289 9.40384 3.68991 8.92459C4.76577 8.44586 5.93282 8.20672 7.11024 8.22373H7.7017H8.2017V8.72373V10.8928C8.202 10.9319 8.21375 10.9701 8.23549 11.0026C8.25737 11.0353 8.2884 11.0608 8.3247 11.0759C8.361 11.0911 8.40097 11.0952 8.43961 11.0878C8.47767 11.0805 8.51278 11.0623 8.54068 11.0354L13.4393 6.13674L13.4393 6.13674L13.4408 6.13529C13.4596 6.11669 13.4744 6.09455 13.4846 6.07016C13.4948 6.04578 13.5 6.01962 13.5 5.9932C13.5 5.96677 13.4948 5.94062 13.4846 5.91623C13.4744 5.89184 13.4596 5.8697 13.4408 5.8511L13.4408 5.8511L13.4393 5.84965L8.53983 0.950126C8.53966 0.94996 8.53949 0.949794 8.53933 0.949629C8.50235 0.913211 8.45267 0.892584 8.40078 0.892093C8.34808 0.892369 8.2976 0.913424 8.26032 0.950709C8.22278 0.988243 8.2017 1.03915 8.2017 1.09223V3.22765ZM7.10814 7.80947L7.10414 7.80945C5.24215 7.80035 3.42692 8.39228 1.92822 9.49725L0.808587 10.3227L1.14647 8.97336C1.74404 6.58694 3.43152 5.36098 5.00444 4.74281C6.56549 4.12931 8.05721 4.09292 8.40184 4.09292C8.45492 4.09292 8.50582 4.07183 8.54336 4.0343C8.58089 3.99677 8.60197 3.94586 8.60197 3.89278V2.77956V1.57059L9.45591 2.42639L12.6625 5.64003L13.0149 5.9932L12.6625 6.34636L9.45591 9.56L8.60197 10.4158V9.20683L8.60197 8.09361L8.60197 8.09295C8.60204 8.04503 8.5849 7.99868 8.55369 7.96232C8.52314 7.92675 8.48111 7.90305 8.43494 7.89531C7.99512 7.83675 7.55184 7.80806 7.10814 7.80947Z"/>
                                            </svg>
                                            35
                                        </span>
                                        <span class="share__name font-roboto font-medium text-[8px] text-primary group-hover:text-white opacity-0 absolute group-hover:opacity-80 transition-all ease-in-out duration-400">
                                            Share
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a>

                @endforeach
                


            </div>
            <!-- Card Button -->
            <div class="text-center pt-[64px]">
                <a href="{{ route('news_research') }}" class="work__btn w-40 text-center text-primary bg-white f text-base leading-[18px] font-semibold px-6 py-[14px] border-2 border-primary hover:bg-primary hover:text-white transition ease-in-out duration-500 rounded inline-block">
                    See More
                </a>
            </div>
        </div>
    </div>
    <!-- News Card section Ends -->

@endsection
