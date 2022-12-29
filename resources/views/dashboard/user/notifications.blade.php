
@extends('dashboard.user.layouts.dashboard_app')


@section('title')
    Notifications | Cars Around
@endsection


@section('content')


            <!-- Dashboard Details -->
            <div class="dashboard__details px-10 w-5/6 ml-auto border-l">
                <!-- Breadcrumb section -->
                <div class="breadcrumb pt-[30px]">
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
                            <li class="breadcrumb__list" aria-current="page">
                                <div class="flex items-center">
                                    <span class="array__icon mr-2">
                                        <svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.5" d="M0.225303 1.12093C0.498401 0.846208 0.925745 0.82124 1.22688 1.04601L1.31316 1.12093L9.77468 9.63288C10.0478 9.90753 10.0726 10.3375 9.84914 10.6404L9.77468 10.7272L1.31316 19.2391C1.01276 19.5413 0.525703 19.5413 0.225303 19.2391C-0.0477947 18.9644 -0.0726151 18.5345 0.150821 18.2316L0.225303 18.1448L8.14288 10.18L0.225303 2.21526C-0.0750973 1.91308 -0.0750973 1.42312 0.225303 1.12093Z" fill="#242634"/>
                                        </svg>
                                    </span>
                                    <span class="font-roboto font-medium text-lg text-primary opacity-50">
                                        Notifications
                                    </span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
                <!-- Dashboard Title -->
                <h2 class="dashboard__title pt-16 pb-10 font-roboto font-medium text-2xl text-[#231F20]">
                    Notifications
                </h2>
                <!-- Notifications Item -->
                <div class="notifications__item pb-16">
                    <!-- Item List 1 -->
                    <div class="item__list border shadow-sm py-6 px-10 bg-[#9CA1AC] bg-opacity-10 rounded mb-2">
                        <!-- List Inner -->
                        <div class="list__inner flex gap-6">
                            <!-- Inner Image -->
                            <div class="inner__img">
                                <img class="rounded-full max-w-[60px]" src="{{ asset('/assets/img/notifi (1).png') }}" alt="img">
                            </div>
                            <!-- Inner Document -->
                            <div class="inner__doc">
                                <p class="font-roboto font-normal text-base text-blue">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime excepturi laboriosam autem distinctio facere magni ullam recusandae. Magnam ea accusamus animi. Illo nam, voluptatum nostrum explicabo dolore voluptatibus, aspernatur quia id excepturi <strong>took a galley of type</strong> deserunt inventore eligendi commodi quae minus velit sit voluptatem doloribus soluta saepe possimus.
                                </p>
                                <!-- Inner Meta -->
                                <div class="inner__meta flex justify-between items-center pt-[30px]">
                                    <!-- Meta Id -->
                                    <a href="orders-buying-detals.html" class="meta__id font-roboto font-medium text-sm text-[#9CA1AC]">
                                        b329093273273
                                    </a>
                                    <!-- Meta Date -->
                                    <p class="meta__date font-roboto font-medium text-sm text-[#9CA1AC]">
                                        09 Oct 2022 1:11 pm
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item List 2 -->
                    <div class="item__list border shadow-sm py-6 px-10 bg-[#9CA1AC] bg-opacity-10 rounded mb-2">
                        <!-- List Inner -->
                        <div class="list__inner flex gap-6">
                            <!-- Inner Image -->
                            <div class="inner__img">
                                <img class="rounded-full max-w-[60px]" src="{{ asset('/assets/img/notifi (2).png') }}" alt="img">
                            </div>
                            <!-- Inner Document -->
                            <div class="inner__doc">
                                <p class="font-roboto font-normal text-base text-blue">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime excepturi laboriosam autem distinctio facere magni ullam recusandae. Magnam ea accusamus animi. Illo nam, voluptatum nostrum explicabo dolore voluptatibus, aspernatur quia id excepturi <strong>took a galley of type</strong> deserunt inventore eligendi commodi quae minus velit sit voluptatem doloribus soluta saepe possimus.
                                </p>
                                <!-- Inner Meta -->
                                <div class="inner__meta flex justify-between items-center pt-[30px]">
                                    <!-- Meta Id -->
                                    <a href="orders-buying-detals.html" class="meta__id font-roboto font-medium text-sm text-[#9CA1AC]">
                                        b329093273273
                                    </a>
                                    <!-- Meta Date -->
                                    <p class="meta__date font-roboto font-medium text-sm text-[#9CA1AC]">
                                        09 Oct 2022 1:11 pm
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item List 3 -->
                    <div class="item__list border shadow-sm py-6 px-10 rounded mb-2">
                        <!-- List Inner -->
                        <div class="list__inner flex gap-6">
                            <!-- Inner Image -->
                            <div class="inner__img">
                                <img class="rounded-full max-w-[60px]" src="{{ asset('/assets/img/notifi (3).png') }}" alt="img">
                            </div>
                            <!-- Inner Document -->
                            <div class="inner__doc">
                                <p class="font-roboto font-normal text-base text-blue">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime excepturi laboriosam autem distinctio facere magni ullam recusandae. Magnam ea accusamus animi. Illo nam, voluptatum nostrum explicabo dolore voluptatibus, aspernatur quia id excepturi <strong>took a galley of type</strong> deserunt inventore eligendi commodi quae minus velit sit voluptatem doloribus soluta saepe possimus.
                                </p>
                                <!-- Inner Meta -->
                                <div class="inner__meta flex justify-between items-center pt-[30px]">
                                    <!-- Meta Id -->
                                    <a href="orders-buying-detals.html" class="meta__id font-roboto font-medium text-sm text-[#9CA1AC]">
                                        b329093273273
                                    </a>
                                    <!-- Meta Date -->
                                    <p class="meta__date font-roboto font-medium text-sm text-[#9CA1AC]">
                                        09 Oct 2022 1:11 pm
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item List 4 -->
                    <div class="item__list border shadow-sm py-6 px-10 rounded mb-2">
                        <!-- List Inner -->
                        <div class="list__inner flex gap-6">
                            <!-- Inner Image -->
                            <div class="inner__img">
                                <img class="rounded-full max-w-[60px]" src="{{ asset('/assets/img/notifi (4).png') }}" alt="img">
                            </div>
                            <!-- Inner Document -->
                            <div class="inner__doc">
                                <p class="font-roboto font-normal text-base text-blue">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime excepturi laboriosam autem distinctio facere magni ullam recusandae. Magnam ea accusamus animi. Illo nam, voluptatum nostrum explicabo dolore voluptatibus, aspernatur quia id excepturi <strong>took a galley of type</strong> deserunt inventore eligendi commodi quae minus velit sit voluptatem doloribus soluta saepe possimus.
                                </p>
                                <!-- Inner Meta -->
                                <div class="inner__meta flex justify-between items-center pt-[30px]">
                                    <!-- Meta Id -->
                                    <a href="orders-buying-detals.html" class="meta__id font-roboto font-medium text-sm text-[#9CA1AC]">
                                        b329093273273
                                    </a>
                                    <!-- Meta Date -->
                                    <p class="meta__date font-roboto font-medium text-sm text-[#9CA1AC]">
                                        09 Oct 2022 1:11 pm
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item List 5 -->
                    <div class="item__list border shadow-sm py-6 px-10 rounded mb-2">
                        <!-- List Inner -->
                        <div class="list__inner flex gap-6">
                            <!-- Inner Image -->
                            <div class="inner__img">
                                <img class="rounded-full max-w-[60px]" src="{{ asset('/assets/img/notifi (5).png') }}" alt="img">
                            </div>
                            <!-- Inner Document -->
                            <div class="inner__doc">
                                <p class="font-roboto font-normal text-base text-blue">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime excepturi laboriosam autem distinctio facere magni ullam recusandae. Magnam ea accusamus animi. Illo nam, voluptatum nostrum explicabo dolore voluptatibus, aspernatur quia id excepturi <strong>took a galley of type</strong> deserunt inventore eligendi commodi quae minus velit sit voluptatem doloribus soluta saepe possimus.
                                </p>
                                <!-- Inner Meta -->
                                <div class="inner__meta flex justify-between items-center pt-[30px]">
                                    <!-- Meta Id -->
                                    <a href="orders-buying-detals.html" class="meta__id font-roboto font-medium text-sm text-[#9CA1AC]">
                                        b329093273273
                                    </a>
                                    <!-- Meta Date -->
                                    <p class="meta__date font-roboto font-medium text-sm text-[#9CA1AC]">
                                        09 Oct 2022 1:11 pm
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item List 6 -->
                    <div class="item__list border shadow-sm py-6 px-10 rounded mb-2">
                        <!-- List Inner -->
                        <div class="list__inner flex gap-6">
                            <!-- Inner Image -->
                            <div class="inner__img">
                                <img class="rounded-full max-w-[60px]" src="{{ asset('/assets/img/notifi (6).png') }}" alt="img">
                            </div>
                            <!-- Inner Document -->
                            <div class="inner__doc">
                                <p class="font-roboto font-normal text-base text-blue">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime excepturi laboriosam autem distinctio facere magni ullam recusandae. Magnam ea accusamus animi. Illo nam, voluptatum nostrum explicabo dolore voluptatibus, aspernatur quia id excepturi <strong>took a galley of type</strong> deserunt inventore eligendi commodi quae minus velit sit voluptatem doloribus soluta saepe possimus.
                                </p>
                                <!-- Inner Meta -->
                                <div class="inner__meta flex justify-between items-center pt-[30px]">
                                    <!-- Meta Id -->
                                    <a href="orders-buying-detals.html" class="meta__id font-roboto font-medium text-sm text-[#9CA1AC]">
                                        b329093273273
                                    </a>
                                    <!-- Meta Date -->
                                    <p class="meta__date font-roboto font-medium text-sm text-[#9CA1AC]">
                                        09 Oct 2022 1:11 pm
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item List 7 -->
                    <div class="item__list border shadow-sm py-6 px-10 rounded mb-2">
                        <!-- List Inner -->
                        <div class="list__inner flex gap-6">
                            <!-- Inner Image -->
                            <div class="inner__img">
                                <img class="rounded-full max-w-[60px]" src="{{ asset('/assets/img/notifi (2).png') }}" alt="img">
                            </div>
                            <!-- Inner Document -->
                            <div class="inner__doc">
                                <p class="font-roboto font-normal text-base text-blue">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime excepturi laboriosam autem distinctio facere magni ullam recusandae. Magnam ea accusamus animi. Illo nam, voluptatum nostrum explicabo dolore voluptatibus, aspernatur quia id excepturi <strong>took a galley of type</strong> deserunt inventore eligendi commodi quae minus velit sit voluptatem doloribus soluta saepe possimus.
                                </p>
                                <!-- Inner Meta -->
                                <div class="inner__meta flex justify-between items-center pt-[30px]">
                                    <!-- Meta Id -->
                                    <a href="orders-buying-detals.html" class="meta__id font-roboto font-medium text-sm text-[#9CA1AC]">
                                        b329093273273
                                    </a>
                                    <!-- Meta Date -->
                                    <p class="meta__date font-roboto font-medium text-sm text-[#9CA1AC]">
                                        09 Oct 2022 1:11 pm
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


@endsection
