

@extends('layouts.front_app')


@section('title')
    Support - Category | Cars Around
@endsection

@section('content')


    <!-- Breadcrumb Section Starts -->
    <div class="breadcrumb mt-[52px] py-16">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
            <div class="lg:pl-[80px] justify-between flex flex-wrap gap-4">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2">
                        <li class="inline-flex items-center">
                            <a href="{{ route('support') }}" class="inline-flex items-center text-base font-roboto font-normal text-primary opacity-50">
                                Category
                            </a>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                            <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <span class=" text-base font-roboto font-normal text-primary">
                                {{$category->title}}
                            </span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <!-- Search Fild -->
                <div class="search__fild py-[2px] relative flex flex-wrap items-center">
                    <form action="">
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
                        <input type="search" name="search" id="search" placeholder="Seartch" class="py-3 px-14 w-full md:w-[400px] outline-none rounded-full border border-primary">
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
                <!-- Articles Title -->
                <h3 class="articles__title font-roboto font-medium text-xl text-primary">
                    Questions that you requires
                </h3>
                <!-- Articles Item -->
                <ul class="articles__item pt-4 grid grid-cols-1 md:grid-cols-2 gap-y-3">

            
                    <!-- Item List -->
                    @foreach($faq as $item)
                    <li class="item__list">
                        
                        <a href="{{ route('support-category-details',  [$category->id, $item->id]) }}" class="font-roboto font-normal text-base text-[#323647]  hover:text-primary hover:border-b border-[#323647] transition-all ease-in-out duration-300">
                            {{$item->title}}
                        </a>
                    </li>
                    @endforeach
                    {{-- <!-- Item List -->
                    <li class="item__list">
                        <a href="#" class="font-roboto font-normal text-base text-[#323647]  hover:text-primary hover:border-b border-[#323647] transition-all ease-in-out duration-300">
                            Creating your listings
                        </a>
                    </li>
                    <!-- Item List -->
                    <li class="item__list">
                        <a href="#" class="font-roboto font-normal text-base text-[#323647]  hover:text-primary hover:border-b border-[#323647] transition-all ease-in-out duration-300">
                            Which location should I set for my listing?
                        </a>
                    </li>
                    <!-- Item List -->
                    <li class="item__list">
                        <a href="#" class="font-roboto font-normal text-base text-[#323647]  hover:text-primary hover:border-b border-[#323647] transition-all ease-in-out duration-300">
                            Which location should I set for my listing?
                        </a>
                    </li>
                    <!-- Item List -->
                    <li class="item__list">
                        <a href="#" class="font-roboto font-normal text-base text-[#323647]  hover:text-primary hover:border-b border-[#323647] transition-all ease-in-out duration-300">
                            What is a listing?
                        </a>
                    </li>
                    <!-- Item List -->
                    <li class="item__list">
                        <a href="#" class="font-roboto font-normal text-base text-[#323647]  hover:text-primary hover:border-b border-[#323647] transition-all ease-in-out duration-300">
                            What is a Safe Settlement?
                        </a>
                    </li>
                    <!-- Item List -->
                    <li class="item__list">
                        <a href="#" class="font-roboto font-normal text-base text-[#323647]  hover:text-primary hover:border-b border-[#323647] transition-all ease-in-out duration-300">
                            How do I create a listing?
                        </a>
                    </li>
                    <!-- Item List -->
                    <li class="item__list">
                        <a href="#" class="font-roboto font-normal text-base text-[#323647]  hover:text-primary hover:border-b border-[#323647] transition-all ease-in-out duration-300">
                            How do I create a listing?
                        </a>
                    </li>
                    <!-- Item List -->
                    <li class="item__list">
                        <a href="#" class="font-roboto font-normal text-base text-[#323647]  hover:text-primary hover:border-b border-[#323647] transition-all ease-in-out duration-300">
                            How many listings can I create?
                        </a>
                    </li>
                    <!-- Item List -->
                    <li class="item__list">
                        <a href="#" class="font-roboto font-normal text-base text-[#323647]  hover:text-primary hover:border-b border-[#323647] transition-all ease-in-out duration-300">
                            How many listings can I create?
                        </a>
                    </li>
                    <!-- Item List -->
                    <li class="item__list">
                        <a href="#" class="font-roboto font-normal text-base text-[#323647]  hover:text-primary hover:border-b border-[#323647] transition-all ease-in-out duration-300">
                            What services can I create a listing for?
                        </a>
                    </li>
                    <!-- Item List -->
                    <li class="item__list">
                        <a href="#" class="font-roboto font-normal text-base text-[#323647]  hover:text-primary hover:border-b border-[#323647] transition-all ease-in-out duration-300">
                            What services can I create a listing for?
                        </a>
                    </li>
                    <!-- Item List -->
                    <li class="item__list">
                        <a href="#" class="font-roboto font-normal text-base text-[#323647]  hover:text-primary hover:border-b border-[#323647] transition-all ease-in-out duration-300">
                            Does it cost me money to set up a listing?
                        </a>
                    </li>
                    <!-- Item List -->
                    <li class="item__list">
                        <a href="#" class="font-roboto font-normal text-base text-[#323647]  hover:text-primary hover:border-b border-[#323647] transition-all ease-in-out duration-300">
                            Does it cost me money to set up a listing?
                        </a>
                    </li>
                    <!-- Item List -->
                    <li class="item__list">
                        <a href="#" class="font-roboto font-normal text-base text-[#323647]  hover:text-primary hover:border-b border-[#323647] transition-all ease-in-out duration-300">
                            What happens to my listing after I hit Publish?
                        </a>
                    </li>
                    <!-- Item List -->
                    <li class="item__list">
                        <a href="#" class="font-roboto font-normal text-base text-[#323647]  hover:text-primary hover:border-b border-[#323647] transition-all ease-in-out duration-300">
                            What happens to my listing after I hit Publish?
                        </a>
                    </li>
                    <!-- Item List -->
                    <li class="item__list">
                        <a href="#" class="font-roboto font-normal text-base text-[#323647]  hover:text-primary hover:border-b border-[#323647] transition-all ease-in-out duration-300">
                            What is a package?
                        </a>
                    </li>
                    <!-- Item List -->
                    <li class="item__list">
                        <a href="#" class="font-roboto font-normal text-base text-[#323647]  hover:text-primary hover:border-b border-[#323647] transition-all ease-in-out duration-300">
                            What is a package?
                        </a>
                    </li>
                    <!-- Item List -->
                    <li class="item__list">
                        <a href="#" class="font-roboto font-normal text-base text-[#323647]  hover:text-primary hover:border-b border-[#323647] transition-all ease-in-out duration-300">
                            How many packages can I create in a listing?
                        </a>
                    </li>
                    <!-- Item List -->
                    <li class="item__list">
                        <a href="#" class="font-roboto font-normal text-base text-[#323647]  hover:text-primary hover:border-b border-[#323647] transition-all ease-in-out duration-300">
                            How many packages can I create in a listing?
                        </a>
                    </li> --}}
                </ul>
                <!-- Qestions -->
            </div>
            <div class="question text-center pt-[64px]">
                <p class="font-roboto font-normal text-lg text-primary ">
                    Have more questions?
                    <a href="{{ route('support-request') }}" class="font-medium border-b border-primary opacity-70 hover:opacity-100 transition-all ease-in-out duration-300">
                        Submit a request
                    </a>
                </p>
            </div>
        </div>
    </div>
    <!--  Safe Settlement Section Ends -->


@endsection
