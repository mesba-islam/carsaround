
@extends('layouts.front_app')


@section('title')
    Support - Category Details | Cars Around
@endsection


@section('content')


    <!-- Breadcrumb Section Starts -->
    <div class="breadcrumb mt-[52px] py-16">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
            <div class="lg:pl-[80px] justify-between flex flex-wrap sm:gap-4">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2">
                        <li class="inline-flex items-center">
                            <a href="{{ route('support') }}" class="inline-flex items-center text-base font-roboto font-normal text-primary opacity-50">
                                Category
                            </a>
                        </li>
                        <li class="inline-flex items-center">
                            <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <a href="{{ route('support-category', $category->id) }}" class="inline-flex items-center text-base font-roboto font-normal text-primary opacity-50">
                                {{$category->title}}
                            </a>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                            <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <span class=" text-base font-roboto font-normal text-primary">
                                {{$faqdet->title}}
                            </span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <!-- Search Fild -->
                <div class="search__fild py-[2px] flex flex-wrap items-center mt-6 sm:mt-0">
                    <form action="" class="">
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
                        <input type="search" name="search" id="search" placeholder="Seartch" class="py-3 px-14 w-full md:w-[250px] lg:w-[350px] xl:w-[400px] outline-none rounded-full border border-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Ends -->


    <!--  Safe Settlement Section Ends -->
    <div class="safe-settlement__articles pb-16">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
            <div class="lg:pl-[80px]">
                <div class="flex flex-wrap">
                    <div class="md:w-2/3 w-full">
                        <!-- Articles -->
                        <div class="articles">
                            <!-- Articles Title -->
                            <h3 class="articles__title font-roboto font-medium text-xl text-primary mb-2">
                                {{$faqdet->title}}
                            </h3>
                            <p class="articles__date font-roboto font-normal text-xs text-blue mb-4">
                                Last Updated  On <span> {{Carbon\Carbon::parse($faqdet->created_at)->diffForHumans()}}</span>
                            </p>
                            <div class="articles__des">
                                <p class="font-roboto font-normal text-base leading-7 text-blue md:pr-[60px] lg:pr-[120px] py-2">
                                    {!! $faqdet->description !!}
                                </p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/3 w-full lg:pl-[40px] mt-10 md:mt-0">
                        <!-- Articles Category -->
                        <div class="articles__category pb-10">
                            <!-- Category Title -->
                            <h4 class="category__title font-roboto font-medium text-lg text-primary">
                                More articles in this category
                            </h4>
                            <!-- Category Item -->
                            <div class="category__item pt-4 gap-y-3 grid">
                                <!-- Item List -->
                                
                                
                                
                                

                                @foreach( $category_posts as $related_faq)
                                <div class="item__list">

                                    @if($faqdet->id != $related_faq->id)
                                        <a href="{{ route('support-category-details',  [$category->id, $related_faq->id]) }}" class="font-roboto font-normal text-base text-blue capitalize hover:text-primary hover:border-b border-primary transition-all ease-in-out duration-300">
                                            {{ $related_faq->title }}
                                        </a>
                                
                                    @else
                                        You have seen it all

                                    @endif
                                
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                        <!-- Articles Viewed -->
                        <div class="articles__recently-viewed pt-5">
                            <!-- recently-viewed Title -->
                            <h4 class="recently-viewed__title font-roboto font-medium text-lg text-primary">
                                Recently viewed articles
                            </h4>
                            <!-- recently-viewed Item -->
                            <div class="recently-viewed__item pt-4 gap-y-3 grid">
                                <!-- Item List -->
                                <div class="item__list">
                                    <a href="#" class="font-roboto font-normal text-base text-blue capitalize hover:text-primary hover:border-b border-primary transition-all ease-in-out duration-300">
                                        Creating your listings
                                    </a>
                                </div>
                                <!-- Item List -->
                                <div class="item__list">
                                    <a href="#" class="font-roboto font-normal text-base text-blue capitalize hover:text-primary hover:border-b border-primary transition-all ease-in-out duration-300">
                                        Which location should I set for my listing?
                                    </a>
                                </div>
                                <!-- Item List -->
                                <div class="item__list">
                                    <a href="#" class="font-roboto font-normal text-base text-blue capitalize hover:text-primary hover:border-b border-primary transition-all ease-in-out duration-300">
                                        Which location should I set for my listing?
                                    </a>
                                </div>
                                <!-- Item List -->
                                <div class="item__list">
                                    <a href="#" class="font-roboto font-normal text-base text-blue capitalize hover:text-primary hover:border-b border-primary transition-all ease-in-out duration-300">
                                        What is a Safe Settlement?
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Articles Social -->
                <div class="articles__social">
                    <!-- Social Item -->
                    <ul class="social__item flex gap-[10px] text-primary">
                        <!-- Twiter Social List -->
                        <li class="item__list">
                            <a href="#" class="">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="0.203613" width="13.74" height="13.5479" rx="1" fill="#242634"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.69276 11.7514C6.51348 11.7628 8.26295 11.044 9.55042 9.75548C10.8379 8.46693 11.5561 6.71601 11.5447 4.89377V4.57866C12.0119 4.23604 12.4163 3.81502 12.74 3.33425C12.3 3.52684 11.8345 3.65457 11.3579 3.71345C11.8632 3.41211 12.2423 2.93779 12.4252 2.37825C11.9542 2.66101 11.4378 2.8598 10.899 2.96574C10.1528 2.17008 8.96621 1.97426 8.00437 2.48809C7.04254 3.00191 6.54468 4.0976 6.78995 5.16081C4.85382 5.0657 3.04942 4.1511 1.82714 2.64529C1.19476 3.74378 1.5214 5.14483 2.57423 5.84978C2.19994 5.83533 1.83432 5.73287 1.50695 5.55069V5.5774C1.5001 6.71736 2.28929 7.70746 3.40136 7.95406C3.05324 8.04777 2.68858 8.06236 2.33409 7.99678C2.65424 8.96354 3.54732 9.62429 4.56469 9.64709C3.71579 10.331 2.66073 10.7074 1.57099 10.7153C1.37992 10.7097 1.18931 10.6937 1 10.6672C2.103 11.3705 3.38493 11.7413 4.69276 11.7354" fill="white"/>
                                </svg>
                            </a>
                        </li>
                        <!-- Facebook Social List -->
                        <li class="item__list">
                            <a href="#" class="">
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7188 0H1.50166C1.08243 0.00311964 0.743351 0.342485 0.740234 0.76206V12.9894C0.743351 13.409 1.08243 13.7483 1.50166 13.7515H8.07968V8.43422H6.29348V6.35432H8.07968V4.82447C8.07968 3.04824 9.16171 2.07991 10.7533 2.07991C11.2857 2.07991 11.8181 2.07991 12.3505 2.16012V4.01084H11.2571C10.3926 4.01084 10.2266 4.42338 10.2266 5.02501V6.34859H12.2876L12.0185 8.42849H10.2266V13.7515H13.7188C14.138 13.7483 14.4771 13.409 14.4802 12.9894V0.76206C14.4771 0.342485 14.138 0.00311964 13.7188 0Z" fill="#242634"/>
                                </svg>
                            </a>
                        </li>
                        <!-- Linkdin Social List -->
                        <li class="item__list">
                            <a href="#" class="">
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.1957 0.0399561H1.50524C0.951208 0.0366223 0.496022 0.476918 0.480469 1.03121V12.76C0.492981 13.3157 0.949977 13.7577 1.50524 13.7513H13.1957C13.751 13.7577 14.208 13.3157 14.2205 12.76V1.03121C14.2049 0.476918 13.7497 0.0366223 13.1957 0.0399561ZM4.55122 11.7344H2.53602V5.19671H4.55122V11.7344ZM3.56605 4.28569C2.92257 4.28588 2.39652 3.77211 2.38097 3.12828C2.36965 2.81037 2.49086 2.50206 2.71561 2.27713C2.94036 2.05219 3.24841 1.93088 3.56605 1.94221C4.1871 1.98549 4.66881 2.50234 4.66881 3.12541C4.66881 3.74848 4.1871 4.26533 3.56605 4.30861V4.28569ZM12.2057 11.6943H10.2134V8.49709C10.2134 7.73503 10.2134 6.74378 9.14851 6.74378C8.08365 6.74378 7.92335 7.58033 7.92335 8.42261V11.6599H5.88525V5.19675H7.78595V6.05621H7.82603C8.22317 5.36594 8.97173 4.95488 9.76681 4.99047C11.8221 4.99047 12.2057 6.36562 12.2057 8.1132V11.6943Z" fill="#242634"/>
                                </svg>
                            </a>
                        </li>
                        <!-- Pinterest Social List -->
                        <li class="item__list">
                            <a href="#" class="">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.9597 1.48362V12.2793C13.9597 13.0921 13.3003 13.7515 12.4876 13.7515H4.95512C5.25568 13.2485 5.64212 12.5247 5.79547 11.9328C5.88748 11.5801 6.26471 10.1417 6.26471 10.1417C6.51007 10.6109 7.22774 11.0065 7.99141 11.0065C10.264 11.0065 11.8987 8.91794 11.8987 6.32329C11.8987 3.83598 9.8684 1.97433 7.25534 1.97433C4.00436 1.97433 2.28073 4.15494 2.28073 6.53184C2.28073 7.63595 2.86958 9.00995 3.80807 9.44852C3.95222 9.516 4.02583 9.48533 4.05957 9.34731C4.0841 9.24304 4.21291 8.73085 4.26812 8.4947C4.28652 8.41802 4.27732 8.35362 4.21598 8.28001C3.90622 7.90277 3.65473 7.20964 3.65473 6.56251C3.65473 4.90022 4.91218 3.29313 7.05599 3.29313C8.90537 3.29313 10.2027 4.55365 10.2027 6.35702C10.2027 8.39349 9.17526 9.80429 7.835 9.80429C7.09586 9.80429 6.54381 9.19397 6.71862 8.44256C6.93024 7.54701 7.34122 6.58091 7.34122 5.93378C7.34122 4.30829 5.02566 4.53218 5.02566 6.70052C5.02566 7.36606 5.24955 7.81997 5.24955 7.81997C4.28652 11.8929 4.14237 11.945 4.34173 13.7269L4.4092 13.7515H1.69187C0.879124 13.7515 0.219727 13.0921 0.219727 12.2793V1.48362C0.219727 0.670872 0.879124 0.0114746 1.69187 0.0114746H12.4876C13.3003 0.0114746 13.9597 0.670872 13.9597 1.48362Z" fill="#242634"/>
                                </svg>
                            </a>
                        </li>
                        <!-- Instagram Social List -->
                        <li class="item__list">
                            <a href="#" class="">
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.82996 5.24556C7.50643 5.24568 7.19021 5.34173 6.92126 5.52156C6.65232 5.70139 6.44273 5.95692 6.31901 6.25586C6.19528 6.5548 6.16297 6.88371 6.22616 7.201C6.28936 7.5183 6.44521 7.80973 6.67402 8.03846C6.90283 8.26719 7.19433 8.42293 7.51165 8.486C7.82897 8.54908 8.15787 8.51664 8.45675 8.39281C8.75564 8.26897 9.0111 8.05929 9.19083 7.79028C9.37056 7.52127 9.46649 7.205 9.46649 6.88147C9.46617 6.4476 9.29362 6.03159 8.98677 5.72485C8.67991 5.41811 8.26384 5.24572 7.82996 5.24556ZM11.6548 3.9881C11.5715 3.77705 11.4457 3.58535 11.2853 3.42492C11.1249 3.26448 10.9332 3.13872 10.7221 3.05544C10.078 2.80119 8.54456 2.85823 7.82996 2.85823C7.11536 2.85823 5.58341 2.79904 4.93751 3.05544C4.72645 3.13872 4.53476 3.26448 4.37432 3.42492C4.21388 3.58535 4.08812 3.77705 4.00484 3.9881C3.7509 4.63216 3.80764 6.16718 3.80764 6.88117C3.80764 7.59516 3.7509 9.12833 4.00607 9.77454C4.08935 9.9856 4.21511 10.1773 4.37555 10.3377C4.53599 10.4982 4.72768 10.6239 4.93873 10.7072C5.5828 10.9615 7.11628 10.9044 7.83119 10.9044C8.5461 10.9044 10.0774 10.9636 10.7233 10.7072C10.9344 10.6239 11.1261 10.4982 11.2865 10.3377C11.447 10.1773 11.5727 9.9856 11.656 9.77454C11.9121 9.13048 11.8532 7.59546 11.8532 6.88147C11.8532 6.16749 11.9121 4.63462 11.656 3.98841L11.6548 3.9881ZM7.82996 9.39639C7.33256 9.39639 6.84633 9.24889 6.43275 8.97255C6.01918 8.6962 5.69683 8.30343 5.50649 7.84389C5.31614 7.38435 5.26634 6.87868 5.36337 6.39084C5.46041 5.903 5.69993 5.45488 6.05165 5.10316C6.40337 4.75145 6.85148 4.51193 7.33933 4.41489C7.82717 4.31785 8.33284 4.36765 8.79238 4.558C9.25191 4.74835 9.64469 5.07069 9.92103 5.48426C10.1974 5.89784 10.3449 6.38407 10.3449 6.88147C10.3453 7.21185 10.2805 7.53906 10.1543 7.84437C10.028 8.14967 9.84278 8.42707 9.60917 8.66069C9.37556 8.8943 9.09816 9.07953 8.79285 9.20577C8.48755 9.33201 8.16034 9.39679 7.82996 9.39639ZM10.4485 4.84808C10.3324 4.84814 10.2189 4.81376 10.1223 4.7493C10.0257 4.68483 9.95046 4.59317 9.90598 4.48591C9.86151 4.37866 9.84984 4.26062 9.87245 4.14673C9.89507 4.03284 9.95095 3.92821 10.033 3.84609C10.1151 3.76396 10.2197 3.70802 10.3336 3.68534C10.4475 3.66267 10.5655 3.67428 10.6728 3.7187C10.7801 3.76312 10.8718 3.83836 10.9363 3.9349C11.0008 4.03144 11.0352 4.14495 11.0352 4.26106C11.0356 4.33817 11.0207 4.41458 10.9914 4.48592C10.9621 4.55725 10.919 4.6221 10.8646 4.67675C10.8103 4.73141 10.7456 4.77478 10.6744 4.80439C10.6032 4.834 10.5269 4.84926 10.4498 4.8493L10.4485 4.84808ZM13.2278 0.0114746H2.4321C2.04167 0.0114746 1.66722 0.166575 1.39114 0.442655C1.11506 0.718736 0.959961 1.09318 0.959961 1.48362L0.959961 12.2793C0.959961 12.6698 1.11506 13.0442 1.39114 13.3203C1.66722 13.5964 2.04167 13.7515 2.4321 13.7515H13.2278C13.6183 13.7515 13.9927 13.5964 14.2688 13.3203C14.5449 13.0442 14.7 12.6698 14.7 12.2793V1.48362C14.7 1.09318 14.5449 0.718736 14.2688 0.442655C13.9927 0.166575 13.6183 0.0114746 13.2278 0.0114746ZM12.7028 8.90567C12.6632 9.69173 12.4838 10.3882 11.9099 10.9605C11.3361 11.5328 10.6402 11.7159 9.85508 11.7533C9.04509 11.799 6.61667 11.799 5.80668 11.7533C5.02062 11.7138 4.32657 11.5341 3.75182 10.9605C3.17707 10.387 2.99643 9.6902 2.95901 8.90567C2.91331 8.09538 2.91331 5.66665 2.95901 4.85728C2.99857 4.07122 3.17584 3.37471 3.75182 2.80241C4.32779 2.23012 5.02369 2.04917 5.80668 2.01175C6.61667 1.96605 9.04509 1.96605 9.85508 2.01175C10.6411 2.05131 11.3373 2.23104 11.9099 2.80456C12.4825 3.37808 12.6653 4.0749 12.7028 4.86096C12.7485 5.66818 12.7485 8.09477 12.7028 8.90567Z" fill="#242634"/>
                                </svg>
                            </a>
                        </li>
                        <!-- Reddit Social List -->
                        <li class="item__list">
                            <a href="#" class="">
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.38584 9.62641C9.46865 9.70922 9.46865 9.83496 9.38584 9.90857C8.63443 10.66 6.50903 10.663 5.75455 9.90857C5.67174 9.83496 5.67174 9.70922 5.75455 9.62641C5.82816 9.5528 5.95391 9.5528 6.02751 9.62641C6.60103 10.2153 8.51175 10.2275 9.10981 9.62641C9.18342 9.55587 9.31223 9.55587 9.38584 9.62641ZM6.5857 7.97638C6.5857 7.5194 6.22073 7.15443 5.77295 7.15443C5.31598 7.15443 4.95101 7.5194 4.95101 7.97638C4.95101 8.42416 5.31598 8.78913 5.77295 8.78913C6.22073 8.78913 6.5857 8.42416 6.5857 7.97638ZM9.36744 7.15443C8.91966 7.15443 8.55469 7.5194 8.55469 7.97638C8.55469 8.42416 8.91966 8.78913 9.36744 8.78913C9.82441 8.78913 10.1894 8.42416 10.1894 7.97638C10.1894 7.5194 9.82441 7.15443 9.36744 7.15443ZM14.4402 1.48362V12.2793C14.4402 13.0921 13.7808 13.7515 12.9681 13.7515H2.17234C1.35959 13.7515 0.700195 13.0921 0.700195 12.2793V1.48362C0.700195 0.670872 1.35959 0.0114746 2.17234 0.0114746H12.9681C13.7808 0.0114746 14.4402 0.670872 14.4402 1.48362ZM11.3824 5.79577C11.0727 5.79577 10.7997 5.92458 10.5973 6.12393C9.85815 5.61175 8.86445 5.28359 7.76035 5.24678L8.33387 2.6644L10.1587 3.07537C10.1587 3.52315 10.5237 3.88812 10.9715 3.88812C11.4284 3.88812 11.7934 3.51395 11.7934 3.06617C11.7934 2.61839 11.4284 2.24422 10.9715 2.24422C10.6525 2.24422 10.3795 2.43438 10.2415 2.7012L8.22653 2.25343C8.12532 2.22582 8.02717 2.29943 7.99957 2.40064L7.37084 5.24678C6.27594 5.29279 5.29144 5.62095 4.5523 6.13314C4.35295 5.92458 4.06772 5.79577 3.75796 5.79577C2.60785 5.79577 2.23061 7.34152 3.28258 7.86597C3.24578 8.03159 3.22737 8.20334 3.22737 8.37815C3.22737 10.111 5.18103 11.5157 7.5794 11.5157C9.98696 11.5157 11.9406 10.111 11.9406 8.37815C11.9406 8.20334 11.9222 8.02238 11.8762 7.85677C12.9067 7.32925 12.5264 5.79577 11.3824 5.79577Z" fill="#242634"/>
                                </svg>
                            </a>
                        </li>
                        <!-- Mail Social List -->
                        <li class="item__list">
                            <a href="#" class="">
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.0404 12.1265H11.6404V5.01709L7.44043 8.06396L3.24043 5.01709V12.1265H1.84043V2.37646H2.68043L7.44043 5.82959L12.2004 2.37646H13.0404V12.1265ZM13.0404 0.751465H1.84043C1.06343 0.751465 0.44043 1.47459 0.44043 2.37646V12.1265C0.44043 12.5574 0.587929 12.9708 0.85048 13.2755C1.11303 13.5803 1.46913 13.7515 1.84043 13.7515H13.0404C13.4117 13.7515 13.7678 13.5803 14.0304 13.2755C14.2929 12.9708 14.4404 12.5574 14.4404 12.1265V2.37646C14.4404 1.94549 14.2929 1.53216 14.0304 1.22742C13.7678 0.92267 13.4117 0.751465 13.0404 0.751465Z" fill="#242634"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--  Safe Settlement Section Ends -->

    <!-- Articles Helpful Section Starts -->
    <div class="articles__helpful  py-10  border-y-2">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
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
                        27 out of 33 found this helpful
                    </span>
                </div>
                <!-- Content Questions -->
                <div class="content__questions pt-10">
                    <p class="font-roboto font-normal text-base text-primary">
                        Have more questions?
                        <a href="{{ route('support-request') }}" class="font-medium border-b border-primary opacity-70 hover:opacity-100 transition-all ease-in-out duration-300">
                            Submit a request
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Articles Helpful Section Ends -->


    <!-- Articles Comments Section Starts -->
    <div class="articles__comments py-16">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
            <!-- Comments Body -->
            <div class="comments__body lg:pl-[80px]">
                <!-- Comments Title -->
                <h2 class="comments__title font-roboto font-medium text-xl text-primary">
                    Comments
                    <span class="title__number text-secondaryDark">
                        (17)
                    </span>
                </h2>
                <!-- Avator -->
                <div class="avator pt-[61px] pb-[46px] flex gap-4 sm:gap-8 md:gap-[67px]">
                    <!-- Avator Image -->
                    <div class="avator__img relative">
                        <img class="w-[50px] h-[50px]" src="{{ asset('/assets/img/avator.png') }}" alt="Image">
                        <!-- Active Icon -->
                        <div class="avator__active-icon absolute h-3 w-3 bg-[#00AB11] rounded-full right-0 bottom-1 border border:bg-white"></div>
                    </div>
                    <!-- Avator Form -->
                    <div class="avator__form w-full">
                        <form action="">
                            <input type="text" name="" id="" placeholder="Add a comment..." class="w-full sm:w-[500px] md:w-[600px] lg:w-[700px] 2xl:w-[1116px] py-4 px-5 font-roboto font-normal text-sm text-primary bg-[#F9F9F9] rounded-lg focus:outline-none border border-transparent focus:bg-transparent focus:border-secondaryDark">
                        </form>
                    </div>
                </div>
                <!-- Avator Comments -->
                <div class="avator__comments pl-8 sm:pl-14 flex gap-5 sm:gap-10">
                    <!-- Avator Image -->
                    <div class="avator__img w-5/6 sm:w-auto">
                        <img src="{{ asset('/assets/img/avator-comment.png') }}" alt="Image" class="h-6 w-6">
                    </div>
                    <!-- Avator Info -->
                    <div class="avator__info w-5/6 sm:w-auto">
                        <ul class="flex gap-5">
                            <li>
                                <!-- Info Title -->
                                <h4 class="info__title font-roboto font-medium text-sm text-primary">
                                    Cameron Williamson
                                </h4>
                            </li>
                            <li class="font-light text-[12px] text-blue relative before:content-[''] before:w-2 before:h-2 before:bg-secondaryDark before:rounded-full before:absolute before:top-1 before:left-[-10px]">
                                4h ago
                            </li>
                        </ul>

                        <!-- Info message -->
                        <p class="info__message w-full sm:w-[470px] font-roboto font-normal text-sm text-primary py-6">
                            Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                        </p>
                        <!-- Info Replay -->
                        <p class="info__reply flex items-center gap-2 font-roboto font-light text-[12px] text-blue">
                            <span>
                                Reply
                            </span>
                            <span>
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
            </div>
        </div>
    </div>
    <!-- Articles Comments Section Ends -->

@endsection


