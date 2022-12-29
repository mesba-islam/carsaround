


@extends('layouts.front_app')


@section('title')
    Community Create Post | Cars Around
@endsection


@section('content')

            <!-- Banner Section Starts -->
            <div
            class="banner w-full h-[250px] md:h-[300px] lg:h-[400px] bg-dispute-hero bg-cover bg-center bg-no-repeat flex bg-blend-multiply bg-[#231F20] bg-opacity-80">
            <div class="lg:container mx-auto lg:max-w-screen-2xl w-full px-5 md:px-8 lg:px-15 relative">
                <div class="banner__heading bottom-0 absolute pb-12">
                    <!-- Hero Title -->
                    <h2
                        class="heading__title text-white  font-semibold text-3xl md:text-5xl uppercase">
                        Community Create Post
                    </h2>
                </div>
            </div>
        </div>
        <!-- Banner Section Ends -->




    <!-- Breadcrumb Section Starts -->
    <div class="breadcrumb pt-[30px] pb-[15px]">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
            <div class="justify-between flex flex-wrap gap-4">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2">
                        <li class="inline-flex items-center">
                            <a href="{{ route('home') }}" class="inline-flex items-center text-base font-roboto font-normal text-primary opacity-50 hover:opacity-100">
                                <span class="home-icon">
                                    <svg width="29" height="27" viewBox="0 0 29 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5" d="M27.4233 13.0102L15.4895 1.08258L14.6896 0.282671C14.5073 0.101615 14.2609 0 14.004 0C13.7471 0 13.5006 0.101615 13.3183 0.282671L0.584662 13.0102C0.397907 13.1962 0.250312 13.4177 0.150588 13.6617C0.0508636 13.9058 0.00103206 14.1673 0.00403427 14.4308C0.0163881 15.518 0.921303 16.3858 2.00844 16.3858H3.32103V26.4449H24.6869V16.3858H26.0273C26.5554 16.3858 27.0526 16.1789 27.4263 15.8052C27.6104 15.6218 27.7562 15.4037 27.8553 15.1635C27.9544 14.9234 28.0049 14.6659 28.0039 14.4061C28.0039 13.8811 27.797 13.3839 27.4233 13.0102ZM15.7335 24.2212H12.2744V17.9208H15.7335V24.2212ZM22.4632 14.1621V24.2212H17.7101V17.1796C17.7101 16.497 17.1573 15.9442 16.4747 15.9442H11.5332C10.8507 15.9442 10.2978 16.497 10.2978 17.1796V24.2212H5.54471V14.1621H2.5798L14.007 2.74416L14.7205 3.45759L25.4312 14.1621H22.4632Z" fill="#242634"/>
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <li aria-current="page">
                            <a href="{{ route('community') }}" class="flex items-center gap-2">
                                <span class="array-icon">
                                    <svg width="11" height="19" viewBox="0 0 11 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.5" d="M0.229209 0.226644C0.502307 -0.048079 0.929651 -0.0730475 1.23079 0.151719L1.31707 0.226644L9.77858 8.73859C10.0517 9.01324 10.0765 9.44317 9.85304 9.74609L9.77858 9.83286L1.31707 18.3448C1.01667 18.647 0.52961 18.647 0.229209 18.3448C-0.0438884 18.0701 -0.0687088 17.6402 0.154727 17.3373L0.229209 17.2505L8.14679 9.28573L0.229209 1.32098C-0.071191 1.01879 -0.071191 0.528833 0.229209 0.226644Z" fill="#242634"/>
                                    </svg>
                                </span>
                                <span class=" text-lg font-roboto font-normal text-primary opacity-50 hover:opacity-80">
                                    Community
                                </span>
                            </a>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center gap-2">
                                <span class="array-icon">
                                    <svg width="11" height="19" viewBox="0 0 11 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.5" d="M0.229209 0.226644C0.502307 -0.048079 0.929651 -0.0730475 1.23079 0.151719L1.31707 0.226644L9.77858 8.73859C10.0517 9.01324 10.0765 9.44317 9.85304 9.74609L9.77858 9.83286L1.31707 18.3448C1.01667 18.647 0.52961 18.647 0.229209 18.3448C-0.0438884 18.0701 -0.0687088 17.6402 0.154727 17.3373L0.229209 17.2505L8.14679 9.28573L0.229209 1.32098C-0.071191 1.01879 -0.071191 0.528833 0.229209 0.226644Z" fill="#242634"/>
                                    </svg>
                                </span>
                                <span class=" text-lg font-roboto font-normal text-primary opacity-50">
                                    Create post
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Ends -->


<!-- Form -->
<div x-data="{ category: '' }">

    <!-- Category -->
    <div class="category pt-16">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
            <!-- Category Title -->
            <h2 class="category__title font-inter font-bold text-3xl text-primaryDark pb-4">
                Select a category
            </h2>
            <!-- Category Card -->
            <div class="category__card grid">
                <!-- Card List -->
                <ul class="card__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-[30px] xl:gap-[37px]">
                    <!-- List Item -->
                    <li class="list__item relative flex flex-col items-center">
                        <input class="sr-only peer" x-model="category" type="radio" value="qa" name="category" id="qa">
                        <!-- Car Section -->
                        <label
                            class="flex items-center justify-center text-center font-inter font-medium text-primary  text-lg bg-white p-5 peer-checked:bg-primary cursor-pointer w-full border border-primary rounded-md peer-checked:text-white peer-checked:text-opacity-100 peer-hover:bg-primary peer-hover:text-secondary flex-1"
                            for="qa">
                            Questions & Answers
                        </label>
                    </li>
                    <!-- List Item -->
                    <li class="list__item relative flex flex-col items-center">
                        <input class="sr-only peer" x-model="category" type="radio" value="review" name="category" id="re">
                        <!-- Car Section -->
                        <label
                            class="flex items-center justify-center text-center font-inter font-medium text-primary  text-lg bg-white p-5 peer-checked:bg-primary border border-primary cursor-pointer w-full rounded-md peer-checked:text-white peer-hover:bg-primary peer-hover:text-secondary flex-1"
                            for="re">
                            Reviews & Experiences
                        </label>
                    </li>
                    <!-- List Item -->
                    <li class="list__item relative flex flex-col items-center">
                        <input class="sr-only peer" x-model="category" type="radio" value="suggestion" name="category" id="is">
                        <!-- Car Section -->
                        <label
                            class="flex items-center justify-center text-center font-inter font-medium text-primary  text-lg bg-white p-5 peer-checked:bg-primary border border-primary cursor-pointer w-full rounded-md peer-checked:text-white peer-hover:bg-primary peer-hover:text-secondary flex-1"
                            for="is">
                            Ideas & Suggestions
                        </label>
                    </li>
                    <!-- List Item -->
                    <li class="list__item relative flex flex-col items-center">
                        <input  class="sr-only peer" x-model="category" type="radio" value="newsresearch" name="category" id="nr">
                        <!-- Car Section -->
                        <label
                            class="flex items-center justify-center text-center font-inter font-medium text-primary  text-lg bg-white p-5 peer-checked:bg-primary border border-primary cursor-pointer w-full rounded-md peer-checked:text-white peer-hover:bg-primary peer-hover:text-secondary flex-1"
                            for="nr">
                            News & Research
                        </label>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Topic -->
    <div class="topic pt-16">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
            <!-- Topic Title -->
            <h2 class="topic__title font-inter font-bold text-3xl text-primaryDark pb-4">
                Select a topic
            </h2>
            <!-- Topic Card -->
            <div class="topic__card grid">
                <!-- Card List -->
                <ul class="card__list grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 space-y-6 sm:space-y-0 sm:gap-[30px] xl:gap-[37px]">
                    <!-- List Item -->
                    <li class="list__item relative flex flex-col items-center">
                        <input class="sr-only peer" type="radio" name="topic" id="os">
                        <!-- Car Section -->
                        <label
                            class="flex items-center justify-center text-center font-inter font-medium text-primary  text-lg bg-white p-5 peer-checked:bg-primary cursor-pointer w-full border border-primary rounded-md peer-checked:text-white peer-checked:text-opacity-100 peer-hover:bg-primary peer-hover:text-secondary flex-1"
                            for="os">
                            Overall Service
                        </label>
                    </li>
                    <!-- List Item -->
                    <li class="list__item relative flex flex-col items-center">
                        <input class="sr-only peer" type="radio" name="topic" id="ss">
                        <!-- Car Section -->
                        <label
                            class="flex items-center justify-center text-center font-inter font-medium text-primary  text-lg bg-white p-5 peer-checked:bg-primary border border-primary cursor-pointer w-full rounded-md peer-checked:text-white peer-hover:bg-primary peer-hover:text-secondary flex-1"
                            for="ss">
                            Safe Settlement
                        </label>
                    </li>
                    <!-- List Item -->
                    <li class="list__item relative flex flex-col items-center">
                        <input class="sr-only peer" type="radio" name="topic" id="pi">
                        <!-- Car Section -->
                        <label
                            class="flex items-center justify-center text-center font-inter font-medium text-primary  text-lg bg-white p-5 peer-checked:bg-primary border border-primary cursor-pointer w-full rounded-md peer-checked:text-white peer-hover:bg-primary peer-hover:text-secondary flex-1"
                            for="pi">
                            Pre-Purchase Inspection
                        </label>
                    </li>
                    <!-- List Item -->
                    <li class="list__item relative flex flex-col items-center">
                        <input class="sr-only peer" type="radio" name="topic" id="vf">
                        <!-- Car Section -->
                        <label
                            class="flex items-center justify-center text-center font-inter font-medium text-primary  text-lg bg-white p-5 peer-checked:bg-primary border border-primary cursor-pointer w-full rounded-md peer-checked:text-white peer-hover:bg-primary peer-hover:text-secondary flex-1"
                            for="vf">
                            Vehicle Finance
                        </label>
                    </li>
                    <!-- List Item -->
                    <li class="list__item relative flex flex-col items-center">
                        <input class="sr-only peer" type="radio" name="topic" id="vt">
                        <!-- Car Section -->
                        <label
                            class="flex items-center justify-center text-center font-inter font-medium text-primary  text-lg bg-white p-5 peer-checked:bg-primary border border-primary cursor-pointer w-full rounded-md peer-checked:text-white peer-hover:bg-primary peer-hover:text-secondary flex-1"
                            for="vt">
                            Vehicle Transport
                        </label>
                    </li>
                    <!-- List Item -->
                    <li class="list__item relative flex flex-col items-center">
                        <input class="sr-only peer" type="radio" name="topic" id="pay">
                        <!-- Car Section -->
                        <label
                            class="flex items-center justify-center text-center font-inter font-medium text-primary  text-lg bg-white p-5 peer-checked:bg-primary border border-primary cursor-pointer w-full rounded-md peer-checked:text-white peer-hover:bg-primary peer-hover:text-secondary flex-1"
                            for="pay">
                            Payment
                        </label>
                    </li>
                    <!-- List Item -->
                    <li class="list__item relative flex flex-col items-center">
                        <input class="sr-only peer" type="radio" name="topic" id="sec">
                        <!-- Car Section -->
                        <label
                            class="flex items-center justify-center text-center font-inter font-medium text-primary  text-lg bg-white p-5 peer-checked:bg-primary border border-primary cursor-pointer w-full rounded-md peer-checked:text-white peer-hover:bg-primary peer-hover:text-secondary flex-1"
                            for="sec">
                            Security
                        </label>
                    </li>
                    <!-- List Item -->
                    <li class="list__item relative flex flex-col items-center">
                        <input class="sr-only peer" type="radio" name="topic" id="other">
                        <!-- Car Section -->
                        <label
                            class="flex items-center justify-center text-center font-inter font-medium text-primary  text-lg bg-white p-5 peer-checked:bg-primary border border-primary cursor-pointer w-full rounded-md peer-checked:text-white peer-hover:bg-primary peer-hover:text-secondary flex-1"
                            for="other">
                            Other
                        </label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Post -->
    <div class="post pt-16">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
            <!-- Post Title -->
            <h2 class="post__title font-inter font-bold text-3xl text-primaryDark pb-4">
                Please enter the headline of the post
            </h2>
            <!-- Post Field -->
            <input type="text" name="" id="" placeholder="Type the headline here." class="w-full bg-secondary outline-none px-5 py-8 border rounded focus:border focus:border-primary focus:bg-transparent">
        </div>
    </div>

    <!-- Drop Down -->
    <div  x-show="category == 'newsresearch'"  class="drop-down pt-16">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
            <!-- Drop Down Title -->
            <h2 class="drop-down__title font-inter font-bold text-3xl text-primaryDark pb-4">
                Please upload your document in pdf or doc format
            </h2>
            <div class="drop-down">
                <label class="justify-center items-center flex h-[190px] bg-card hover:bg-opacity-50 cursor-pointer border-dashed border-2 border-transparent hover:border-secondaryDark rounded-md transition-all ease-in-out duration-300">
                    <!-- Drop-down File -->
                    <div class="drop-down__file text-center">
                        <!-- Cloud Icon -->
                        <span class="icon justify-center flex">
                            <svg width="73" height="55" viewBox="0 0 73 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M58.8072 22.1766C58.0721 11.0095 50.1565 0.240967 35.6389 0.240967C22.3608 0.240967 12.1212 9.92354 11.5789 22.8455C4.31405 25.063 0.347656 32.6902 0.347656 38.2416C0.347656 46.7893 7.58838 54.2864 15.8414 54.2864H27.0313C27.2596 54.2864 27.4785 54.1974 27.6399 54.039C27.8013 53.8807 27.892 53.6659 27.892 53.4419C27.892 53.218 27.8013 53.0032 27.6399 52.8448C27.4785 52.6864 27.2596 52.5975 27.0313 52.5975H15.8414C8.50424 52.5975 2.06918 45.8891 2.06918 38.2416C2.06918 33.0888 6.67253 23.8858 15.8414 23.8858H18.4237C18.6519 23.8858 18.8709 23.7969 19.0323 23.6385C19.1937 23.4801 19.2844 23.2653 19.2844 23.0414C19.2844 22.8174 19.1937 22.6026 19.0323 22.4443C18.8709 22.2859 18.6519 22.1969 18.4237 22.1969H15.8414C14.9651 22.1969 14.1371 22.2932 13.3297 22.4317C14.0045 12.315 21.8426 1.92989 35.6389 1.92989C50.4233 1.92989 57.1579 13.3115 57.1579 23.8858V26.4192C57.1579 26.6432 57.2486 26.858 57.41 27.0163C57.5715 27.1747 57.7904 27.2637 58.0187 27.2637C58.247 27.2637 58.4659 27.1747 58.6273 27.0163C58.7888 26.858 58.8795 26.6432 58.8795 26.4192V23.8706C64.0767 24.4297 70.9301 29.9018 70.9301 38.2416C70.9301 44.7034 64.576 52.5975 57.1579 52.5975H44.2465C38.6722 52.5975 36.4997 50.466 36.4997 44.9973V21.8304L43.52 28.7043C43.5993 28.7851 43.6942 28.8495 43.7992 28.8939C43.9041 28.9383 44.017 28.9618 44.1313 28.9629C44.2456 28.964 44.359 28.9428 44.4648 28.9005C44.5706 28.8582 44.6668 28.7956 44.7478 28.7165C44.8287 28.6373 44.8927 28.5431 44.9362 28.4394C44.9796 28.3357 45.0015 28.2245 45.0007 28.1124C44.9999 28.0002 44.9763 27.8894 44.9313 27.7863C44.8864 27.6832 44.821 27.59 44.7389 27.5119L37.0592 19.9929C36.0366 18.993 35.2429 18.993 34.2221 19.9929L26.5424 27.5119C26.3856 27.6712 26.2988 27.8845 26.3008 28.1059C26.3027 28.3274 26.3933 28.5392 26.5528 28.6957C26.7124 28.8523 26.9283 28.9411 27.154 28.943C27.3797 28.945 27.5971 28.8598 27.7595 28.706L34.7781 21.8304V44.9973C34.7781 51.422 37.6978 54.2864 44.2465 54.2864H57.1579C65.5022 54.2864 72.6516 45.4635 72.6516 38.2416C72.6516 29.515 65.3817 22.6901 58.8072 22.1766Z" fill="#242634"/>
                            </svg>
                        </span>
                        <!-- Drag & Drop -->
                        <h4 class="font-roboto text-sm font-light tracking-[0.25px] text-primary pt-3">
                            Drag & Drop
                        </h4>
                        <!-- or -->
                        <span class="font-roboto text-base font-semibold tracking-[0.25px] text-primary">
                            or
                        </span>
                        <!-- Select file -->
                        <h3 class="file-upload bg-bgc text-white rounded-lg py-1 px-3">
                            <!-- Select Files To Upload -->
                            <input type="file" hidden accept=".jpg,.png,.pdf" id="fileID" style="">
                            <button class="">
                                Select Files To Upload
                            </button>
                        </h3>
                        <!-- <input type="file" name="file_upload" class=""> -->
                    </div>
                </label>
            </div>
        </div>
    </div>
     <!-- Body -->
     <div class="body pt-16">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
            <!-- Body Title -->
            <h2 class="body__title font-inter font-bold text-3xl text-primaryDark pb-4">
                Body
            </h2>
            <!-- Comment Fild -->
            <div class="comment-fild">
                <form>
                    <div class="bg-secondary border-b-2 border-white flex mt-2 rounded-t">
                        <ul class="flex justify-center items-center gap-3 sm:gap-5 px-4 sm:px-8 py-4 sm:py-6 m-0 border-r-2 border-white">
                            <!-- Bold Icon -->
                            <li class="bold-icon">
                                <button>
                                    <svg class="w-5 sm:w-6 h-4 sm:h-5" width="" height="" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.8" d="M10.2278 22.0006C14.919 22.0006 17.8282 19.5822 17.8282 15.72C17.8282 12.8144 15.6363 10.6408 12.6513 10.4116V10.2892C13.7945 10.1174 14.8384 9.54309 15.5949 8.67006C16.3514 7.79703 16.7705 6.68272 16.7768 5.52818C16.7768 2.16873 14.1884 0.0551758 10.0629 0.0551758H0.5V22.0006H10.2278ZM5.09991 3.47691H8.87785C11.023 3.47691 12.2571 4.4803 12.2571 6.24456C12.2571 8.10005 10.8559 9.1813 8.40338 9.1813H5.09991V3.47469V3.47691ZM5.09991 18.5788V12.207H8.95359C11.6645 12.207 13.1414 13.3016 13.1414 15.3551C13.1414 17.4531 11.7091 18.5788 9.06051 18.5788H5.09768H5.09991Z" fill="#242634"/>
                                    </svg>
                                </button>
                            </li>
                            <!-- Italic Icon -->
                            <li class="italic-icon">
                                <button>
                                    <svg class="w-5 sm:w-6 h-4 sm:h-5" width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.8" d="M18.1563 3.84701V0.138428H5.77904V3.84701H9.32884L5.79389 16.2089H0.828125V19.9175H13.2054V16.2089H9.6556L13.1905 3.84701H18.1563Z" fill="#242634"/>
                                    </svg>
                                </button>
                            </li>
                            <!-- Underline Icon -->
                            <li class="underline-icon">
                                <button>
                                    <svg class="w-5 sm:w-6 h-4 sm:h-5" width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.8" d="M0.15625 22.6134H22.5501V25.8085H0.15625V22.6134ZM1.75581 0.247314V9.83277C1.75581 15.1191 6.06022 19.4182 11.3532 19.4182C16.6461 19.4182 20.9505 15.1191 20.9505 9.83277V0.247314H17.7514V9.83277C17.7514 13.357 14.8818 16.2231 11.3532 16.2231C7.82453 16.2231 4.95493 13.357 4.95493 9.83277V0.247314H1.75581Z" fill="#242634"/>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                        <ul class="flex justify-center items-center gap-3 sm:gap-5 px-4 sm:px-8 py-4 sm:py-6 m-0 border-r-2 border-white">
                            <!-- Ordered list of item Icon -->
                            <li class="ordered-list-icon">
                                <button>
                                    <svg class="w-5 sm:w-6 h-4 sm:h-5" width="28" height="30" viewBox="0 0 28 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.38283 1.24468C5.38262 0.989105 5.29469 0.741327 5.13371 0.542659C4.97273 0.343991 4.74843 0.206438 4.49821 0.152936C4.24799 0.0994328 3.98696 0.133213 3.75866 0.248644C3.53035 0.364075 3.34856 0.554181 3.2436 0.787266L3.24061 0.791736C3.10782 1.05869 2.95576 1.31564 2.78561 1.56055C2.46189 2.0269 2.00391 2.54838 1.43405 2.90448C1.30524 2.98012 1.1929 3.08077 1.10368 3.20048C1.01445 3.32019 0.950131 3.45654 0.914523 3.60148C0.878915 3.74642 0.872736 3.89701 0.896352 4.04438C0.919967 4.19174 0.972898 4.33289 1.05202 4.45949C1.13114 4.58609 1.23486 4.69557 1.35704 4.78149C1.47922 4.8674 1.61739 4.928 1.7634 4.95971C1.90942 4.99142 2.06031 4.9936 2.20718 4.96612C2.35405 4.93864 2.49392 4.88205 2.61853 4.7997C2.80501 4.68348 2.98104 4.55981 3.14514 4.43019V7.94945C3.14514 8.24582 3.26302 8.53005 3.47284 8.73961C3.68267 8.94918 3.96725 9.06691 4.26399 9.06691C4.56072 9.06691 4.84531 8.94918 5.05513 8.73961C5.26496 8.53005 5.38283 8.24582 5.38283 7.94945V1.24468ZM25.5221 23.9664H12.8418L12.6673 23.9768C12.2897 24.0217 11.9435 24.2088 11.6995 24.5C11.4555 24.7913 11.332 25.1646 11.3542 25.5437C11.3765 25.9228 11.5429 26.2791 11.8194 26.5398C12.0959 26.8005 12.4616 26.9459 12.8418 26.9463H25.5221L25.6952 26.9359C26.0726 26.891 26.4187 26.704 26.6627 26.4129C26.9067 26.1219 27.0303 25.7488 27.0083 25.3698C26.9862 24.9908 26.8201 24.6345 26.5439 24.3737C26.2677 24.1129 25.9022 23.9672 25.5221 23.9664ZM25.5221 14.2817H12.8418L12.6673 14.2922C12.2897 14.337 11.9435 14.5242 11.6995 14.8154C11.4555 15.1066 11.332 15.4799 11.3542 15.859C11.3765 16.2381 11.5429 16.5944 11.8194 16.8551C12.0959 17.1158 12.4616 17.2612 12.8418 17.2616H25.5221L25.6952 17.2512C26.0726 17.2064 26.4187 17.0193 26.6627 16.7283C26.9067 16.4372 27.0303 16.0641 27.0083 15.6851C26.9862 15.3061 26.8201 14.9498 26.5439 14.689C26.2677 14.4282 25.9022 14.2825 25.5221 14.2817ZM25.5221 4.59706H12.8418L12.6673 4.60749C12.2897 4.65235 11.9435 4.8395 11.6995 5.13071C11.4555 5.42193 11.332 5.79523 11.3542 6.17433C11.3765 6.55344 11.5429 6.90974 11.8194 7.17043C12.0959 7.43113 12.4616 7.57654 12.8418 7.57696H25.5221L25.6952 7.56653C26.0726 7.5217 26.4187 7.33466 26.6627 7.0436C26.9067 6.75254 27.0303 6.37943 27.0083 6.00043C26.9862 5.62144 26.8201 5.26517 26.5439 5.00435C26.2677 4.74354 25.9022 4.59786 25.5221 4.59706ZM4.11481 12.8216C3.66727 12.7426 3.10635 12.9199 2.81694 13.209C2.60485 13.4064 2.32432 13.5138 2.03446 13.5087C1.7446 13.5036 1.46805 13.3863 1.26305 13.1816C1.05806 12.9768 0.940639 12.7006 0.935524 12.4111C0.93041 12.1216 1.038 11.8415 1.23564 11.6296C2.06508 10.8012 3.36891 10.4198 4.50566 10.6209C5.0979 10.7252 5.70656 10.9994 6.16901 11.5223C6.64042 12.0557 6.87463 12.7516 6.87463 13.5368C6.87463 14.4605 6.47036 15.1459 5.9706 15.6525C5.55588 16.0741 5.03077 16.4138 4.61903 16.6791L4.49969 16.755C4.25218 16.9118 4.0127 17.0809 3.78214 17.2616H5.75578C6.05252 17.2616 6.3371 17.3794 6.54693 17.5889C6.75675 17.7985 6.87463 18.0827 6.87463 18.3791C6.87463 18.6755 6.75675 18.9597 6.54693 19.1692C6.3371 19.3788 6.05252 19.4965 5.75578 19.4965H2.02629C1.72955 19.4965 1.44497 19.3788 1.23514 19.1692C1.02532 18.9597 0.907441 18.6755 0.907441 18.3791C0.907441 16.4228 2.37537 15.4692 3.25702 14.8971L3.34653 14.8375C3.82092 14.532 4.14166 14.3234 4.37587 14.0865C4.57577 13.8839 4.63694 13.7319 4.63694 13.5368C4.63694 13.2045 4.54594 13.063 4.49074 13.0004C4.38989 12.9 4.25783 12.837 4.1163 12.8216H4.11481ZM0.862687 28.8534C0.862687 28.8534 1.00142 28.9786 0.868654 28.8609L0.877605 28.8683L0.896999 28.8877C0.967187 28.9549 1.04196 29.0171 1.12077 29.0739C1.26249 29.1797 1.45941 29.3093 1.71301 29.436C2.22172 29.6893 2.9512 29.9277 3.89104 29.9277C4.84579 29.9277 5.67523 29.6565 6.27941 29.1231C6.88806 28.5867 7.1894 27.8447 7.16703 27.0968C7.14846 26.4941 6.92423 25.9158 6.53152 25.4578C6.91789 25.0019 7.14614 24.4357 7.16703 23.8159C7.1789 23.4335 7.10541 23.0533 6.95188 22.7028C6.79836 22.3523 6.56864 22.0404 6.27941 21.7896C5.67523 21.2577 4.84579 20.9865 3.89104 20.9865C2.9512 20.9865 2.22172 21.2219 1.71301 21.4782C1.44069 21.6136 1.18532 21.7806 0.952195 21.9758C0.933512 21.9919 0.915111 22.0083 0.896999 22.025L0.877605 22.0444L0.868654 22.0518L0.865671 22.0563H0.862687L0.861196 22.0593C0.660534 22.2687 0.549233 22.5479 0.550798 22.8378C0.552362 23.1277 0.666668 23.4056 0.86958 23.6129C1.07249 23.8202 1.34812 23.9407 1.63827 23.9488C1.92842 23.9569 2.21038 23.8521 2.4246 23.6565C2.5136 23.5867 2.60958 23.5263 2.71102 23.4762C2.94822 23.357 3.33758 23.2229 3.88955 23.2229C4.42659 23.2229 4.68915 23.3704 4.79656 23.4658C4.83869 23.4988 4.8725 23.5411 4.8953 23.5895C4.91809 23.6379 4.92924 23.6909 4.92784 23.7444C4.92261 23.8111 4.9036 23.8759 4.87202 23.9349C4.84044 23.9939 4.79697 24.0457 4.74435 24.0871C4.61158 24.2033 4.352 24.3404 3.88955 24.3404C3.59281 24.3404 3.30822 24.4581 3.0984 24.6677C2.88858 24.8772 2.7707 25.1615 2.7707 25.4578C2.7707 25.7542 2.88858 26.0384 3.0984 26.248C3.30822 26.4576 3.59281 26.5753 3.88955 26.5753C4.352 26.5753 4.61158 26.7094 4.74435 26.8241C4.8801 26.9433 4.92485 27.0714 4.92784 27.1683C4.92924 27.222 4.9181 27.2752 4.89531 27.3238C4.87253 27.3724 4.83872 27.4151 4.79656 27.4484C4.68915 27.5423 4.42808 27.6913 3.88955 27.6913C3.4823 27.6998 3.0787 27.6131 2.71102 27.438C2.60952 27.3874 2.51353 27.3265 2.4246 27.2562C2.21038 27.0606 1.92842 26.9558 1.63827 26.9639C1.34812 26.972 1.07249 27.0924 0.86958 27.2997C0.666668 27.507 0.552362 27.785 0.550798 28.0749C0.549233 28.3648 0.660534 28.6439 0.861196 28.8534H0.862687ZM0.865671 22.0563H0.862687C0.87313 22.0488 1.16105 21.8089 0.862687 22.0563H0.865671Z" fill="#242634"/>
                                    </svg>
                                </button>
                            </li>
                            <!-- Unordered list of item Icon -->
                            <li class="unordered-list-icon">
                                <button>
                                    <svg class="w-5 sm:w-6 h-4 sm:h-5" width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3017 2.28251H25.0017C25.3916 2.28251 25.7655 2.43719 26.0412 2.71253C26.3168 2.98786 26.4717 3.3613 26.4717 3.75069C26.4717 4.14007 26.3168 4.51351 26.0412 4.78884C25.7655 5.06418 25.3916 5.21886 25.0017 5.21886H10.3017C9.91185 5.21886 9.53795 5.06418 9.26227 4.78884C8.98659 4.51351 8.83172 4.14007 8.83172 3.75069C8.83172 3.3613 8.98659 2.98786 9.26227 2.71253C9.53795 2.43719 9.91185 2.28251 10.3017 2.28251ZM10.3017 12.5598H25.0017C25.3916 12.5598 25.7655 12.7144 26.0412 12.9898C26.3168 13.2651 26.4717 13.6385 26.4717 14.0279C26.4717 14.4173 26.3168 14.7907 26.0412 15.0661C25.7655 15.3414 25.3916 15.4961 25.0017 15.4961H10.3017C9.91185 15.4961 9.53795 15.3414 9.26227 15.0661C8.98659 14.7907 8.83172 14.4173 8.83172 14.0279C8.83172 13.6385 8.98659 13.2651 9.26227 12.9898C9.53795 12.7144 9.91185 12.5598 10.3017 12.5598ZM10.3017 22.837H25.0017C25.3916 22.837 25.7655 22.9917 26.0412 23.267C26.3168 23.5423 26.4717 23.9158 26.4717 24.3052C26.4717 24.6946 26.3168 25.068 26.0412 25.3433C25.7655 25.6187 25.3916 25.7733 25.0017 25.7733H10.3017C9.91185 25.7733 9.53795 25.6187 9.26227 25.3433C8.98659 25.068 8.83172 24.6946 8.83172 24.3052C8.83172 23.9158 8.98659 23.5423 9.26227 23.267C9.53795 22.9917 9.91185 22.837 10.3017 22.837ZM2.95172 6.68704C2.17198 6.68704 1.42418 6.37768 0.872825 5.827C0.321468 5.27633 0.0117188 4.52946 0.0117188 3.75069C0.0117188 2.97192 0.321468 2.22504 0.872825 1.67437C1.42418 1.1237 2.17198 0.814331 2.95172 0.814331C3.73146 0.814331 4.47926 1.1237 5.03061 1.67437C5.58197 2.22504 5.89172 2.97192 5.89172 3.75069C5.89172 4.52946 5.58197 5.27633 5.03061 5.827C4.47926 6.37768 3.73146 6.68704 2.95172 6.68704ZM2.95172 16.9643C2.17198 16.9643 1.42418 16.6549 0.872825 16.1042C0.321468 15.5536 0.0117188 14.8067 0.0117188 14.0279C0.0117188 13.2492 0.321468 12.5023 0.872825 11.9516C1.42418 11.4009 2.17198 11.0916 2.95172 11.0916C3.73146 11.0916 4.47926 11.4009 5.03061 11.9516C5.58197 12.5023 5.89172 13.2492 5.89172 14.0279C5.89172 14.8067 5.58197 15.5536 5.03061 16.1042C4.47926 16.6549 3.73146 16.9643 2.95172 16.9643ZM2.95172 27.2415C2.17198 27.2415 1.42418 26.9322 0.872825 26.3815C0.321468 25.8308 0.0117188 25.0839 0.0117188 24.3052C0.0117188 23.5264 0.321468 22.7795 0.872825 22.2289C1.42418 21.6782 2.17198 21.3688 2.95172 21.3688C3.73146 21.3688 4.47926 21.6782 5.03061 22.2289C5.58197 22.7795 5.89172 23.5264 5.89172 24.3052C5.89172 25.0839 5.58197 25.8308 5.03061 26.3815C4.47926 26.9322 3.73146 27.2415 2.95172 27.2415Z" fill="#242634"/>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                        <ul class="flex justify-center items-center gap-3 sm:gap-5 px-4 sm:px-8 py-4 sm:py-6 m-0 border-r-2 border-white">
                            <!-- Link Icon -->
                            <li class="link-icon">
                                <button>
                                    <svg class="w-5 sm:w-6 h-4 sm:h-5" width="44" height="22" viewBox="0 0 44 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.059 4.50727H11.3539C9.6224 4.50727 7.96178 5.19427 6.7374 6.41713C5.51302 7.63999 4.82517 9.29855 4.82517 11.0279C4.82517 12.7573 5.51302 14.4159 6.7374 15.6387C7.96178 16.8616 9.6224 17.5486 11.3539 17.5486H20.059V21.8957H11.3539C8.46804 21.8957 5.70034 20.7507 3.65971 18.7126C1.61907 16.6745 0.472656 13.9103 0.472656 11.0279C0.472656 8.14562 1.61907 5.38136 3.65971 3.34326C5.70034 1.30515 8.46804 0.160156 11.3539 0.160156H20.059V4.50727ZM24.4115 17.5486H33.1165C34.848 17.5486 36.5086 16.8616 37.733 15.6387C38.9574 14.4159 39.6452 12.7573 39.6452 11.0279C39.6452 9.29855 38.9574 7.63999 37.733 6.41713C36.5086 5.19427 34.848 4.50727 33.1165 4.50727H24.4115V0.160156H33.1165C36.0024 0.160156 38.7701 1.30515 40.8107 3.34326C42.8513 5.38136 43.9978 8.14562 43.9978 11.0279C43.9978 13.9103 42.8513 16.6745 40.8107 18.7126C38.7701 20.7507 36.0024 21.8957 33.1165 21.8957H24.4115V17.5486ZM15.7064 8.85438H28.764C29.3412 8.85438 29.8947 9.08338 30.3028 9.491C30.7109 9.89862 30.9402 10.4515 30.9402 11.0279C30.9402 11.6044 30.7109 12.1573 30.3028 12.5649C29.8947 12.9725 29.3412 13.2015 28.764 13.2015H15.7064C15.1293 13.2015 14.5757 12.9725 14.1676 12.5649C13.7595 12.1573 13.5302 11.6044 13.5302 11.0279C13.5302 10.4515 13.7595 9.89862 14.1676 9.491C14.5757 9.08338 15.1293 8.85438 15.7064 8.85438Z" fill="#242634"/>
                                    </svg>
                                </button>
                            </li>
                            <!-- Image Icon -->
                            <li class="image-icon">
                                <button>
                                    <svg class="w-5 sm:w-6 h-4 sm:h-5" width="35" height="32" viewBox="0 0 35 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.33138 3.82805H25.9981V15.028H29.3314V3.82805C29.3314 2.06325 27.8364 0.628052 25.9981 0.628052H4.33138C2.49305 0.628052 0.998047 2.06325 0.998047 3.82805V23.028C0.998047 24.7928 2.49305 26.228 4.33138 26.228H17.6647V23.028H4.33138V3.82805Z" fill="#242634"/>
                                        <path d="M10.998 13.428L5.99805 19.828H24.3314L17.6647 10.228L12.6647 16.628L10.998 13.428Z" fill="#242634"/>
                                        <path d="M29.3314 18.228H25.998V23.028H20.998V26.228H25.998V31.028H29.3314V26.228H34.3314V23.028H29.3314V18.228Z" fill="#242634"/>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <textarea name="text" id="mess" cols="" rows="" placeholder="Please type your message here" class="pl-6 w-full  h-[250px] bg-card p-2 font-roboto text-sm leading-6 focus:outline-none focus:bg-white border-2 border-transparent focus:border-card rounded-b resize-none"></textarea>
                </form>
            </div>
        </div>
    </div>
    <!-- Submit -->
    <div class="submit text-center py-16">
        <div class="lg:container mx-auto lg:max-w-screen-2xl px-5 md:px-8 lg:px-15">
            <button class="inline-block text-center w-[140px] py-3 text-primary bg-white font-sans text-base leading-[18px] font-semibold rounded border-2 border-primary hover:text-white hover:bg-primary transition-all ease-in-out duration-500">
                Submit
            </button>
        </div>
    </div>
</div>




@endsection
