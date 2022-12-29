@extends('dashboard.user.layouts.dashboard_app')


@section('title')
    Order Details | Cars Around
@endsection


@section('custom_stylesheets_library')
    <link rel="stylesheet" href="{{ asset('/assets/css/dropzone.css') }}">
@endsection


@section('custom_scripts')
    <script src="{{ asset('assets/js/dropzone.min.js') }}"></script>
    <script>
        Dropzone.autoDiscover = false;
        var dropzone = new Dropzone("#mydropzone", {
            url: "#"
        });

        var minSteps = 6,
        maxSteps = 60,
        timeBetweenSteps = 100,
        bytesPerStep = 100000;

        dropzone.uploadFiles = function(files) {
            var self = this;

            for (var i = 0; i < files.length; i++) {

                var file = files[i];
                totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));

                for (var step = 0; step < totalSteps; step++) {
                    var duration = timeBetweenSteps * (step + 1);
                    setTimeout(function(file, totalSteps, step) {
                        return function() {
                            file.upload = {
                                progress: 100 * (step + 1) / totalSteps,
                                total: file.size,
                                bytesSent: (step + 1) * file.size / totalSteps
                            };

                            self.emit('uploadprogress', file, file.upload.progress, file.upload.bytesSent);
                            if (file.upload.progress == 100) {
                                file.status = Dropzone.SUCCESS;
                                self.emit("success", file, 'success', null);
                                self.emit("complete", file);
                                self.processQueue();
                            }
                        };
                    }(file, totalSteps, step), duration);
                }
            }
        }
    </script>
@endsection




@section('content')

    <!-- Dashboard Details -->
    <div class="w-5/6 ml-auto border-l dashboard__details">
        <!-- Breadcrumb section -->
        <div class="breadcrumb pt-[30px] px-5 md:px-10">
            <!-- Breadcrumb Item -->
            <nav class="flex breadcrumb__item" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2">
                    <!-- Breadcrumb List -->
                    <li class="inline-flex items-center breadcrumb__list">
                        <a href="orders-buying-dashboard.html"
                            class="inline-flex items-center text-base font-normal opacity-50 font-roboto text-primary">
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
                    <li class="inline-flex items-center breadcrumb__list">
                        <a href="orders-buying-dashboard.html"
                            class="inline-flex items-center text-base font-normal opacity-50 font-roboto text-primary">
                            <span class="mr-2 array__icon">
                                <svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5" d="M0.225303 1.12093C0.498401 0.846208 0.925745 0.82124 1.22688 1.04601L1.31316 1.12093L9.77468 9.63288C10.0478 9.90753 10.0726 10.3375 9.84914 10.6404L9.77468 10.7272L1.31316 19.2391C1.01276 19.5413 0.525703 19.5413 0.225303 19.2391C-0.0477947 18.9644 -0.0726151 18.5345 0.150821 18.2316L0.225303 18.1448L8.14288 10.18L0.225303 2.21526C-0.0750973 1.91308 -0.0750973 1.42312 0.225303 1.12093Z" fill="#242634"/>
                                </svg>
                            </span>
                            <span class="text-lg font-medium opacity-50 font-roboto text-primary">
                                Buying
                            </span>
                        </a>
                    </li>
                    <!-- Breadcrumb List -->
                    <li class="breadcrumb__list" aria-current="page">
                        <div class="flex items-center">
                            <span class="mr-2 array__icon">
                                <svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5" d="M0.225303 1.12093C0.498401 0.846208 0.925745 0.82124 1.22688 1.04601L1.31316 1.12093L9.77468 9.63288C10.0478 9.90753 10.0726 10.3375 9.84914 10.6404L9.77468 10.7272L1.31316 19.2391C1.01276 19.5413 0.525703 19.5413 0.225303 19.2391C-0.0477947 18.9644 -0.0726151 18.5345 0.150821 18.2316L0.225303 18.1448L8.14288 10.18L0.225303 2.21526C-0.0750973 1.91308 -0.0750973 1.42312 0.225303 1.12093Z" fill="#242634"/>
                                </svg>
                            </span>
                            <span class="text-lg font-medium opacity-50 font-roboto text-primary">
                                b{{ $trade->key }}
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <!-- Details & Id -->
        <div class="details-id pt-16 md:flex md:gap-8 lg:gap-[60px] xl:gap-[120px] px-5 md:px-10">
            <!-- Id Vehicle -->
            <div class="w-full id__vehicle md:w-1/2">
                <!-- Image -->
                <img class="w-full rounded-md" src="{{ asset('/assets/img/dashboard/b3228938291.jpg') }}" alt="img">
                <!-- Vehicle Title -->
                <div class="relative mt-[80px] mb-[100px]">
                    <p class="absolute w-1/6 h-[3px] bg-[#9CA1AC] bottom-4 after:absolute after:content'' after:w-4 after:h-4 after:bg-[#9CA1AC] after:left-0 after:top-[-7px] after:rounded-full"></p>

                    <h2 class="absolute bottom-0 left-0 right-0 flex items-center justify-center w-4/6 mx-auto text-3xl font-medium text-center vehicle__title font-roboto text-primary">
                        {{ $trade->trade_vehicle->year . ' '. $trade->trade_vehicle->make. ' '. $trade->trade_vehicle->model }}
                    </h2>

                    <p class="absolute w-1/6 h-[3px] bg-[#9CA1AC] right-0 bottom-4 after:absolute after:content'' after:w-4 after:h-4 after:bg-[#9CA1AC] after:right-0 after:top-[-7px] after:rounded-full"></p>
                </div>

            </div>
            <!-- Id Details -->
            <div class="w-full id__details md:w-1/2">
                <table>
                    <tbody>
                        <tr class="py-4">
                            <th class="w-1/2 pb-5 text-base font-semibold text-start font-roboto text-primary">Trade Key</th>
                            <td class="px-4">:</td>
                            <td class="w-1/2 text-base font-normal font-roboto text-primary">b{{ $trade->key }}</td>
                        </tr>
                        <tr class="py-4">
                            <th class="w-1/2 pb-5 text-base font-semibold text-start font-roboto text-primary">Vehicle Type</th>
                            <td class="px-4">:</td>
                            <td class="w-1/2 text-base font-normal font-roboto text-primary">{{ ucfirst($trade->trade_vehicle->type ?? '') }}</td>
                        </tr>
                        <tr class="py-4">
                            <th class="w-1/2 pb-5 text-base font-semibold text-start font-roboto text-primary">Make</th>
                            <td class="px-4">:</td>
                            <td class="w-1/2 text-base font-normal font-roboto text-primary">{{ $trade->trade_vehicle->make ?? '' }}</td>
                        </tr>
                        <tr class="py-4">
                            <th class="w-1/2 pb-5 text-base font-semibold text-start font-roboto text-primary">Model</th>
                            <td class="px-4">:</td>
                            <td class="w-1/2 text-base font-normal font-roboto text-primary">{{ $trade->trade_vehicle->model ?? '' }}</td>
                        </tr>
                        <tr class="py-4">
                            <th class="w-1/2 pb-5 text-base font-semibold text-start font-roboto text-primary">Year</th>
                            <td class="px-4">:</td>
                            <td class="w-1/2 text-base font-normal font-roboto text-primary">{{ $trade->trade_vehicle->year ?? '' }}</td>
                        </tr>
                        <tr class="py-4">
                            <th class="w-1/2 pb-5 text-base font-semibold text-start font-roboto text-primary">Odometer</th>
                            <td class="px-4">:</td>
                            <td class="w-1/2 text-base font-normal font-roboto text-primary">{{ $trade->trade_vehicle->odometer ?? '' }} km</td>
                        </tr>
                        <tr class="py-4">
                            <th class="w-1/2 pb-5 text-base font-semibold text-start font-roboto text-primary">Registration no./VIN</th>
                            <td class="px-4">:</td>
                            <td class="w-1/2 text-base font-normal font-roboto text-primary">{{ $trade->trade_vehicle->registration_number ?? '' }}</td>
                        </tr>
                        <tr class="py-4">
                            <th class="w-1/2 pb-5 text-base font-semibold text-start font-roboto text-primary">Territory Registered</th>
                            <td class="px-4">:</td>
                            <td class="w-1/2 text-base font-normal font-roboto text-primary">{{ $trade->trade_vehicle->registered_state ?? '' }}</td>
                        </tr>
                        <tr class="py-4">
                            <th class="w-1/2 pb-5 text-base font-semibold text-start font-roboto text-primary">Seller</th>
                            <td class="px-4">:</td>
                            <td class="w-1/2 text-base font-normal font-roboto text-primary">{{ isset($trade->seller) ? $nameConversionHelper->generateFullName($trade->seller) : '' }}</td>
                        </tr>
                        <tr class="py-4">
                            <th class="w-1/2 pb-5 text-base font-semibold text-start font-roboto text-primary">Buyer</th>
                            <td class="px-4">:</td>
                            <td class="w-1/2 text-base font-normal font-roboto text-primary">{{ isset($trade->buyer) ? $nameConversionHelper->generateFullName($trade->buyer) : '' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Vehicle Status -->
        <div class="px-5 pb-20 vehicle__status md:px-10">
            <!-- Status Checkbox -->
            <div class="flex justify-center mt-10 status__checkbox">
                <!-- Item Checkbox -->
                <div class="w-.75/12">
                    <div class="item__checkbox w-[50px] h-[50px] flex justify-center items-center {{ isset($trade->trade_inspections) && $trade->trade_inspections->status == 'inspection_completed' ? 'bg-blue' : '' }} border-blue border-2 rounded-full z-50">
                        <svg class="@if (!(isset($trade->trade_inspections) && $trade->trade_inspections->status == 'inspection_completed'))
                            hidden
                        @endif" width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.9585 0.63764C22.4078 0.224133 23.0057 -0.0044712 23.626 6.62771e-05C24.2463 0.00460376 24.8406 0.241928 25.2833 0.661961C25.7261 1.08199 25.9828 1.65188 25.9992 2.25137C26.0156 2.85086 25.7904 3.43307 25.3712 3.87513L12.6453 19.2609C12.4265 19.4888 12.1623 19.6716 11.8687 19.7985C11.5751 19.9255 11.2581 19.9938 10.9365 19.9996C10.615 20.0054 10.2955 19.9484 9.99725 19.832C9.69899 19.7157 9.42806 19.5424 9.20066 19.3226L0.761351 11.1641C0.52633 10.9524 0.337826 10.6971 0.207084 10.4134C0.0763413 10.1298 0.00603925 9.82356 0.000372273 9.51306C-0.00529471 9.20256 0.0537896 8.89413 0.174099 8.60619C0.294409 8.31824 0.47348 8.05667 0.700629 7.83708C0.927778 7.61749 1.19835 7.44438 1.49621 7.32807C1.79407 7.21177 2.11311 7.15465 2.43429 7.16013C2.75548 7.16561 3.07224 7.23357 3.36567 7.35996C3.65909 7.48635 3.92318 7.66858 4.14218 7.89578L10.8209 14.3492L21.8979 0.705474C21.9178 0.681735 21.9391 0.659088 21.9617 0.63764H21.9585Z" fill="white"/>
                        </svg>
                    </div>
                </div>
                <div class="relative w-4/12">
                    <div class="inline-block w-full absolute top-6 h-1 bg-[#9CA1AC]">
                    </div>
                </div>
                <!-- Item Checkbox -->
                <div class="w-.75/12">
                    <div class="item__checkbox w-[50px] h-[50px] flex justify-center items-center {{ isset($trade->trade_finances) && $trade->trade_finances->status == 'settlement' ? 'bg-blue' : '' }} border-blue border-2 rounded-full z-50">
                        <svg class="@if (!(isset($trade->trade_finances) && $trade->trade_finances->status == 'settlement'))
                            hidden
                        @endif" width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.9585 0.63764C22.4078 0.224133 23.0057 -0.0044712 23.626 6.62771e-05C24.2463 0.00460376 24.8406 0.241928 25.2833 0.661961C25.7261 1.08199 25.9828 1.65188 25.9992 2.25137C26.0156 2.85086 25.7904 3.43307 25.3712 3.87513L12.6453 19.2609C12.4265 19.4888 12.1623 19.6716 11.8687 19.7985C11.5751 19.9255 11.2581 19.9938 10.9365 19.9996C10.615 20.0054 10.2955 19.9484 9.99725 19.832C9.69899 19.7157 9.42806 19.5424 9.20066 19.3226L0.761351 11.1641C0.52633 10.9524 0.337826 10.6971 0.207084 10.4134C0.0763413 10.1298 0.00603925 9.82356 0.000372273 9.51306C-0.00529471 9.20256 0.0537896 8.89413 0.174099 8.60619C0.294409 8.31824 0.47348 8.05667 0.700629 7.83708C0.927778 7.61749 1.19835 7.44438 1.49621 7.32807C1.79407 7.21177 2.11311 7.15465 2.43429 7.16013C2.75548 7.16561 3.07224 7.23357 3.36567 7.35996C3.65909 7.48635 3.92318 7.66858 4.14218 7.89578L10.8209 14.3492L21.8979 0.705474C21.9178 0.681735 21.9391 0.659088 21.9617 0.63764H21.9585Z" fill="white"/>
                        </svg>
                    </div>
                </div>
                <div class="relative w-4/12">
                    <div class="inline-block w-full absolute top-6 h-1 bg-[#9CA1AC]">
                    </div>
                </div>
                <!-- Item Checkbox -->
                <div class="w-.75/12">
                    <div class="item__checkbox w-[50px] h-[50px] flex justify-center items-center {{ isset($trade->trade_safe_settlements) && $trade->trade_safe_settlements->status == 'seller_received_the_money' ? 'bg-blue' : '' }} border-blue border-2 rounded-full z-50">
                        <svg class="@if (!(isset($trade->trade_safe_settlements) && $trade->trade_safe_settlements->status == 'seller_received_the_money'))
                            hidden
                        @endif" width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.9585 0.63764C22.4078 0.224133 23.0057 -0.0044712 23.626 6.62771e-05C24.2463 0.00460376 24.8406 0.241928 25.2833 0.661961C25.7261 1.08199 25.9828 1.65188 25.9992 2.25137C26.0156 2.85086 25.7904 3.43307 25.3712 3.87513L12.6453 19.2609C12.4265 19.4888 12.1623 19.6716 11.8687 19.7985C11.5751 19.9255 11.2581 19.9938 10.9365 19.9996C10.615 20.0054 10.2955 19.9484 9.99725 19.832C9.69899 19.7157 9.42806 19.5424 9.20066 19.3226L0.761351 11.1641C0.52633 10.9524 0.337826 10.6971 0.207084 10.4134C0.0763413 10.1298 0.00603925 9.82356 0.000372273 9.51306C-0.00529471 9.20256 0.0537896 8.89413 0.174099 8.60619C0.294409 8.31824 0.47348 8.05667 0.700629 7.83708C0.927778 7.61749 1.19835 7.44438 1.49621 7.32807C1.79407 7.21177 2.11311 7.15465 2.43429 7.16013C2.75548 7.16561 3.07224 7.23357 3.36567 7.35996C3.65909 7.48635 3.92318 7.66858 4.14218 7.89578L10.8209 14.3492L21.8979 0.705474C21.9178 0.681735 21.9391 0.659088 21.9617 0.63764H21.9585Z" fill="white"/>
                        </svg>
                    </div>
                </div>
                <div class="relative w-4/12">
                    <div class="inline-block w-full  absolute top-6 h-1 bg-[#9CA1AC]">
                    </div>
                </div>
                <!-- Item Checkbox -->
                <div class="w-.75/12">
                    <div class="item__checkbox w-[50px] h-[50px] flex justify-center items-center {{ isset($trade->trade_transports) && $trade->trade_transports->status == 'buyer_received_the_vehicle' ? 'bg-blue' : '' }} border-blue border-2 rounded-full z-50">
                        <svg class="@if (!(isset($trade->trade_transports) && $trade->trade_transports->status == 'buyer_received_the_vehicle'))
                            hidden
                        @endif" width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.9585 0.63764C22.4078 0.224133 23.0057 -0.0044712 23.626 6.62771e-05C24.2463 0.00460376 24.8406 0.241928 25.2833 0.661961C25.7261 1.08199 25.9828 1.65188 25.9992 2.25137C26.0156 2.85086 25.7904 3.43307 25.3712 3.87513L12.6453 19.2609C12.4265 19.4888 12.1623 19.6716 11.8687 19.7985C11.5751 19.9255 11.2581 19.9938 10.9365 19.9996C10.615 20.0054 10.2955 19.9484 9.99725 19.832C9.69899 19.7157 9.42806 19.5424 9.20066 19.3226L0.761351 11.1641C0.52633 10.9524 0.337826 10.6971 0.207084 10.4134C0.0763413 10.1298 0.00603925 9.82356 0.000372273 9.51306C-0.00529471 9.20256 0.0537896 8.89413 0.174099 8.60619C0.294409 8.31824 0.47348 8.05667 0.700629 7.83708C0.927778 7.61749 1.19835 7.44438 1.49621 7.32807C1.79407 7.21177 2.11311 7.15465 2.43429 7.16013C2.75548 7.16561 3.07224 7.23357 3.36567 7.35996C3.65909 7.48635 3.92318 7.66858 4.14218 7.89578L10.8209 14.3492L21.8979 0.705474C21.9178 0.681735 21.9391 0.659088 21.9617 0.63764H21.9585Z" fill="white"/>
                        </svg>
                    </div>
                </div>
            </div>
            <!-- Status List -->
            <div class="flex items-center justify-between text-center status__list">
                <!-- List Item 1 -->
                <div class="list__item">
                    <!-- Item Title -->
                    <h2 class="mt-5 mb-3 text-base font-medium item__title font-roboto text-primary">
                        Inspection
                    </h2>
                    <!-- Item Btn -->
                    <button onclick="window.location.href='{{ route('order.trade.inspection.show', ['trade' => $trade->key]) }}'" class="px-4 h-10 bg-primary font-roboto font-semibold text-sm text-white tracking-[.25px] rounded">
                        {{ isset($trade->trade_inspections) ? 'Track' : 'Apply Now' }}
                    </button>
                </div>
                <!-- List Item 2 -->
                <div class="list__item">
                    <!-- Item Title -->
                    <h2 class="mt-5 mb-3 text-base font-medium item__title font-roboto text-primary">
                        Finance
                    </h2>
                    <!-- Item Btn -->
                    <button onclick="window.location.href='{{ route('order.trade.finance.show', ['trade' => $trade->key]) }}'" class="px-4 h-10 bg-primary font-roboto font-semibold text-sm text-white tracking-[.25px] rounded">
                        {{ isset($trade->trade_finances) ? 'Track' : 'Apply Now' }}
                    </button>
                </div>
                <!-- List Item 3 -->
                <div class="list__item">
                    <!-- Item Title -->
                    <h2 class="mt-5 mb-3 text-base font-medium item__title font-roboto text-primary">
                        Safe Settlement
                    </h2>
                    <!-- Item Btn -->
                    <button onclick="window.location.href='{{ route('order.trade.safe-settlement.show', ['trade' => $trade->key]) }}'" class="px-4 h-10 bg-primary font-roboto font-semibold text-sm text-white tracking-[.25px] rounded">
                        {{ isset($trade->safe_settlements) ? 'Track' : 'Apply Now' }}
                    </button>
                </div>
                <!-- List Item 4  -->
                <div class="list__item">
                    <!-- Item Title -->
                    <h2 class="mt-5 mb-3 text-base font-medium item__title font-roboto text-primary">
                        Transport
                    </h2>
                    <!-- Item Btn -->
                    <button onclick="window.location.href='{{ route('order.trade.transport.show', ['trade' => $trade->key]) }}'" class="px-4 h-10 bg-primary font-roboto font-semibold text-sm text-white tracking-[.25px] rounded">
                        {{ isset($trade->trade_transports) ? 'Track' : 'Apply Now' }}
                    </button>
                </div>
            </div>
        </div>
        <!-- Drop-down Section -->
        <div class="px-5 pt-5 mb-10 drop-down md:px-10">
            <!-- Drop down Title -->
            <h2 class="drop-down__title font-roboto font-medium text-2xl text-[#231F20]">
                Upload Documents
            </h2>
            <!-- Drop Down Text -->
            <p class="drop-down__text font-sans font-normal text-xs text-[#4E484A]">
                Upload the required documents here.
            </p>
            <div class="pt-6">
                {{-- <label class="justify-center items-center flex h-[294px] bg-card hover:bg-opacity-50 cursor-pointer border-dashed border-2 border-transparent hover:border-secondaryDark rounded-md transition-all ease-in-out duration-300">
                    <!-- Drop-down File -->
                    <div class="text-center drop-down__file">
                        <!-- Cloud Icon -->
                        <span class="flex justify-center icon">
                            <svg width="99" height="75" viewBox="0 0 99 75" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                        <h4 class="font-roboto text-sm font-light tracking-[0.25px] text-primary pt-8">
                            Drag & Drop, instant pic or upload
                        </h4>
                        <!-- or -->
                        <span class="font-roboto text-base font-semibold tracking-[0.25px] text-primary">
                            or
                        </span>
                        <!-- Select file -->
                        <h3 class="py-1 text-white rounded-lg file-upload bg-bgc">
                            <!-- Select Files To Upload -->
                            <input type="file" hidden accept=".jpg,.png,.pdf" id="fileID" style="display:none;">
                            <button class="">Select Files To Upload</button>
                        </h3>
                        <!-- <input type="file" name="file_upload" class=""> -->
                    </div>
                </label> --}}

                <form action="#" class="dropzone" id="mydropzone">
                    <div class="fallback">
                    <input name="file" type="file" multiple />
                    </div>
                </form>
            </div>
        </div>
        <!-- Note Section -->
        <div class="px-5 pt-5 mb-10 note md:px-10">
            <!-- Drop down Title -->
            <h2 class="note__title font-roboto font-medium text-2xl text-[#231F20]">
                Leave A Note
            </h2>
            <!-- Drop Down Text -->
            <p class="note__text font-sans font-normal text-xs text-[#4E484A]">
                You can leave a note to Carsaround team.
            </p>
            <form action="#" class="pt-6 text-end">
                <textarea name="Message" id="" cols="30" rows="10" placeholder="Type your note here..." class="w-full p-4 sm:px-8 sm:py-6 rounded bg-[#F9F9F9] appearance-none outline-none border-2 border-[#F9F9F9] focus:bg-transparent focus:border-2 focus:border-[#F9F9F9]">
                </textarea>
                <button class="px-6 py-2 mt-6 text-sm font-semibold text-white transition-all duration-300 ease-in-out border-2 rounded border-primary font-roboto bg-primary hover:bg-transparent hover:text-primary">
                    Submit
                </button>
            </form>
        </div>
        <!-- Documents Section -->
        <div class="px-5 pt-5 mb-10 documents md:px-10">
            <!-- Documents Title -->
            <h2 class="documents__title font-roboto font-medium text-2xl text-[#231F20]">
                Documents
            </h2>
            <!-- Documents Text -->
            <p class="documents__text font-sans font-normal text-xs text-[#4E484A]">
                Contracts and other documents can be found here.
            </p>
            <!-- Documents Table -->
            <div class="documents__table mt-8 overflow-y-scroll h-[500px]">
                <table class="w-full border-2 rounded-full table-fixed">
                    <thead>
                        <tr class="border-b-2">
                            <th class="w-2/6 py-4 font-roboto font-semibold text-base text-[#242634]">Title</th>
                            <th class="w-2/6 py-4 font-roboto font-semibold text-base text-[#242634]">Date</th>
                            <th class="w-2/6 py-4 font-roboto font-semibold text-base text-[#242634]">Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b-2">
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">Payment invoice</td>
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">20 February, 2022</td>
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">
                                <a href="#" target="_blank" class="inline-block">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1589 4.10552V6.10552H9.15894V5.10552H6.15894C5.89396 5.10474 5.64006 4.99913 5.45269 4.81176C5.26532 4.6244 5.15971 4.3705 5.15894 4.10552V1.10552H1.15894V13.1055H9.15894V14.1055H1.15894C0.893719 14.1055 0.639365 14.0002 0.451829 13.8126C0.264292 13.6251 0.158936 13.3707 0.158936 13.1055V1.10552C0.159714 0.840541 0.265321 0.586639 0.452688 0.399271C0.640056 0.211904 0.893958 0.106297 1.15894 0.105519H6.15894C6.22465 0.103711 6.28998 0.116186 6.35041 0.142083C6.41084 0.16798 6.46492 0.206683 6.50894 0.255518L10.0089 3.75552C10.0578 3.79954 10.0965 3.85363 10.1223 3.91406C10.1482 3.97448 10.1607 4.0398 10.1589 4.10552ZM6.15894 1.30552V4.10552H8.95894L6.15894 1.30552ZM14.1589 7.10535V8.10535H12.1589V9.10535H13.6589V10.1053H12.1589V12.1053H11.1589V7.10535H14.1589ZM6.65894 12.1053H8.65894C9.05663 12.1049 9.4379 11.9467 9.71911 11.6655C10.0003 11.3843 10.1585 11.003 10.1589 10.6053V8.60535C10.1585 8.20766 10.0003 7.82638 9.71911 7.54517C9.4379 7.26396 9.05663 7.10578 8.65894 7.10535H6.65894V12.1053ZM8.65894 11.1053H7.65894V8.10535H8.65894C8.7915 8.10549 8.91859 8.15822 9.01233 8.25195C9.10606 8.34569 9.15879 8.47278 9.15894 8.60535V10.6053C9.15879 10.7379 9.10606 10.865 9.01233 10.9587C8.91859 11.0525 8.7915 11.1052 8.65894 11.1053ZM2.15894 7.10535H4.65894C4.92406 7.10565 5.17824 7.21111 5.36571 7.39858C5.55318 7.58605 5.65863 7.84022 5.65894 8.10535V9.60535C5.65858 9.87045 5.55311 10.1246 5.36565 10.3121C5.17819 10.4995 4.92404 10.605 4.65894 10.6053H3.15894V12.1053H2.15894V7.10535ZM3.15894 8.10535V9.60535H4.65944L4.65894 8.10535H3.15894Z" fill="#231F20"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b-2">
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">Payment invoice</td>
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">20 February, 2022</td>
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">
                                <a href="#" target="_blank" class="inline-block">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1589 4.10552V6.10552H9.15894V5.10552H6.15894C5.89396 5.10474 5.64006 4.99913 5.45269 4.81176C5.26532 4.6244 5.15971 4.3705 5.15894 4.10552V1.10552H1.15894V13.1055H9.15894V14.1055H1.15894C0.893719 14.1055 0.639365 14.0002 0.451829 13.8126C0.264292 13.6251 0.158936 13.3707 0.158936 13.1055V1.10552C0.159714 0.840541 0.265321 0.586639 0.452688 0.399271C0.640056 0.211904 0.893958 0.106297 1.15894 0.105519H6.15894C6.22465 0.103711 6.28998 0.116186 6.35041 0.142083C6.41084 0.16798 6.46492 0.206683 6.50894 0.255518L10.0089 3.75552C10.0578 3.79954 10.0965 3.85363 10.1223 3.91406C10.1482 3.97448 10.1607 4.0398 10.1589 4.10552ZM6.15894 1.30552V4.10552H8.95894L6.15894 1.30552ZM14.1589 7.10535V8.10535H12.1589V9.10535H13.6589V10.1053H12.1589V12.1053H11.1589V7.10535H14.1589ZM6.65894 12.1053H8.65894C9.05663 12.1049 9.4379 11.9467 9.71911 11.6655C10.0003 11.3843 10.1585 11.003 10.1589 10.6053V8.60535C10.1585 8.20766 10.0003 7.82638 9.71911 7.54517C9.4379 7.26396 9.05663 7.10578 8.65894 7.10535H6.65894V12.1053ZM8.65894 11.1053H7.65894V8.10535H8.65894C8.7915 8.10549 8.91859 8.15822 9.01233 8.25195C9.10606 8.34569 9.15879 8.47278 9.15894 8.60535V10.6053C9.15879 10.7379 9.10606 10.865 9.01233 10.9587C8.91859 11.0525 8.7915 11.1052 8.65894 11.1053ZM2.15894 7.10535H4.65894C4.92406 7.10565 5.17824 7.21111 5.36571 7.39858C5.55318 7.58605 5.65863 7.84022 5.65894 8.10535V9.60535C5.65858 9.87045 5.55311 10.1246 5.36565 10.3121C5.17819 10.4995 4.92404 10.605 4.65894 10.6053H3.15894V12.1053H2.15894V7.10535ZM3.15894 8.10535V9.60535H4.65944L4.65894 8.10535H3.15894Z" fill="#231F20"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b-2">
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">Payment invoice</td>
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">20 February, 2022</td>
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">
                                <a href="#" target="_blank" class="inline-block">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1589 4.10552V6.10552H9.15894V5.10552H6.15894C5.89396 5.10474 5.64006 4.99913 5.45269 4.81176C5.26532 4.6244 5.15971 4.3705 5.15894 4.10552V1.10552H1.15894V13.1055H9.15894V14.1055H1.15894C0.893719 14.1055 0.639365 14.0002 0.451829 13.8126C0.264292 13.6251 0.158936 13.3707 0.158936 13.1055V1.10552C0.159714 0.840541 0.265321 0.586639 0.452688 0.399271C0.640056 0.211904 0.893958 0.106297 1.15894 0.105519H6.15894C6.22465 0.103711 6.28998 0.116186 6.35041 0.142083C6.41084 0.16798 6.46492 0.206683 6.50894 0.255518L10.0089 3.75552C10.0578 3.79954 10.0965 3.85363 10.1223 3.91406C10.1482 3.97448 10.1607 4.0398 10.1589 4.10552ZM6.15894 1.30552V4.10552H8.95894L6.15894 1.30552ZM14.1589 7.10535V8.10535H12.1589V9.10535H13.6589V10.1053H12.1589V12.1053H11.1589V7.10535H14.1589ZM6.65894 12.1053H8.65894C9.05663 12.1049 9.4379 11.9467 9.71911 11.6655C10.0003 11.3843 10.1585 11.003 10.1589 10.6053V8.60535C10.1585 8.20766 10.0003 7.82638 9.71911 7.54517C9.4379 7.26396 9.05663 7.10578 8.65894 7.10535H6.65894V12.1053ZM8.65894 11.1053H7.65894V8.10535H8.65894C8.7915 8.10549 8.91859 8.15822 9.01233 8.25195C9.10606 8.34569 9.15879 8.47278 9.15894 8.60535V10.6053C9.15879 10.7379 9.10606 10.865 9.01233 10.9587C8.91859 11.0525 8.7915 11.1052 8.65894 11.1053ZM2.15894 7.10535H4.65894C4.92406 7.10565 5.17824 7.21111 5.36571 7.39858C5.55318 7.58605 5.65863 7.84022 5.65894 8.10535V9.60535C5.65858 9.87045 5.55311 10.1246 5.36565 10.3121C5.17819 10.4995 4.92404 10.605 4.65894 10.6053H3.15894V12.1053H2.15894V7.10535ZM3.15894 8.10535V9.60535H4.65944L4.65894 8.10535H3.15894Z" fill="#231F20"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b-2">
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">Payment invoice</td>
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">20 February, 2022</td>
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">
                                <a href="#" target="_blank" class="inline-block">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1589 4.10552V6.10552H9.15894V5.10552H6.15894C5.89396 5.10474 5.64006 4.99913 5.45269 4.81176C5.26532 4.6244 5.15971 4.3705 5.15894 4.10552V1.10552H1.15894V13.1055H9.15894V14.1055H1.15894C0.893719 14.1055 0.639365 14.0002 0.451829 13.8126C0.264292 13.6251 0.158936 13.3707 0.158936 13.1055V1.10552C0.159714 0.840541 0.265321 0.586639 0.452688 0.399271C0.640056 0.211904 0.893958 0.106297 1.15894 0.105519H6.15894C6.22465 0.103711 6.28998 0.116186 6.35041 0.142083C6.41084 0.16798 6.46492 0.206683 6.50894 0.255518L10.0089 3.75552C10.0578 3.79954 10.0965 3.85363 10.1223 3.91406C10.1482 3.97448 10.1607 4.0398 10.1589 4.10552ZM6.15894 1.30552V4.10552H8.95894L6.15894 1.30552ZM14.1589 7.10535V8.10535H12.1589V9.10535H13.6589V10.1053H12.1589V12.1053H11.1589V7.10535H14.1589ZM6.65894 12.1053H8.65894C9.05663 12.1049 9.4379 11.9467 9.71911 11.6655C10.0003 11.3843 10.1585 11.003 10.1589 10.6053V8.60535C10.1585 8.20766 10.0003 7.82638 9.71911 7.54517C9.4379 7.26396 9.05663 7.10578 8.65894 7.10535H6.65894V12.1053ZM8.65894 11.1053H7.65894V8.10535H8.65894C8.7915 8.10549 8.91859 8.15822 9.01233 8.25195C9.10606 8.34569 9.15879 8.47278 9.15894 8.60535V10.6053C9.15879 10.7379 9.10606 10.865 9.01233 10.9587C8.91859 11.0525 8.7915 11.1052 8.65894 11.1053ZM2.15894 7.10535H4.65894C4.92406 7.10565 5.17824 7.21111 5.36571 7.39858C5.55318 7.58605 5.65863 7.84022 5.65894 8.10535V9.60535C5.65858 9.87045 5.55311 10.1246 5.36565 10.3121C5.17819 10.4995 4.92404 10.605 4.65894 10.6053H3.15894V12.1053H2.15894V7.10535ZM3.15894 8.10535V9.60535H4.65944L4.65894 8.10535H3.15894Z" fill="#231F20"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b-2">
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">Payment invoice</td>
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">20 February, 2022</td>
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">
                                <a href="#" target="_blank" class="inline-block">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1589 4.10552V6.10552H9.15894V5.10552H6.15894C5.89396 5.10474 5.64006 4.99913 5.45269 4.81176C5.26532 4.6244 5.15971 4.3705 5.15894 4.10552V1.10552H1.15894V13.1055H9.15894V14.1055H1.15894C0.893719 14.1055 0.639365 14.0002 0.451829 13.8126C0.264292 13.6251 0.158936 13.3707 0.158936 13.1055V1.10552C0.159714 0.840541 0.265321 0.586639 0.452688 0.399271C0.640056 0.211904 0.893958 0.106297 1.15894 0.105519H6.15894C6.22465 0.103711 6.28998 0.116186 6.35041 0.142083C6.41084 0.16798 6.46492 0.206683 6.50894 0.255518L10.0089 3.75552C10.0578 3.79954 10.0965 3.85363 10.1223 3.91406C10.1482 3.97448 10.1607 4.0398 10.1589 4.10552ZM6.15894 1.30552V4.10552H8.95894L6.15894 1.30552ZM14.1589 7.10535V8.10535H12.1589V9.10535H13.6589V10.1053H12.1589V12.1053H11.1589V7.10535H14.1589ZM6.65894 12.1053H8.65894C9.05663 12.1049 9.4379 11.9467 9.71911 11.6655C10.0003 11.3843 10.1585 11.003 10.1589 10.6053V8.60535C10.1585 8.20766 10.0003 7.82638 9.71911 7.54517C9.4379 7.26396 9.05663 7.10578 8.65894 7.10535H6.65894V12.1053ZM8.65894 11.1053H7.65894V8.10535H8.65894C8.7915 8.10549 8.91859 8.15822 9.01233 8.25195C9.10606 8.34569 9.15879 8.47278 9.15894 8.60535V10.6053C9.15879 10.7379 9.10606 10.865 9.01233 10.9587C8.91859 11.0525 8.7915 11.1052 8.65894 11.1053ZM2.15894 7.10535H4.65894C4.92406 7.10565 5.17824 7.21111 5.36571 7.39858C5.55318 7.58605 5.65863 7.84022 5.65894 8.10535V9.60535C5.65858 9.87045 5.55311 10.1246 5.36565 10.3121C5.17819 10.4995 4.92404 10.605 4.65894 10.6053H3.15894V12.1053H2.15894V7.10535ZM3.15894 8.10535V9.60535H4.65944L4.65894 8.10535H3.15894Z" fill="#231F20"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b-2">
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">Payment invoice</td>
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">20 February, 2022</td>
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">
                                <a href="#" target="_blank" class="inline-block">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1589 4.10552V6.10552H9.15894V5.10552H6.15894C5.89396 5.10474 5.64006 4.99913 5.45269 4.81176C5.26532 4.6244 5.15971 4.3705 5.15894 4.10552V1.10552H1.15894V13.1055H9.15894V14.1055H1.15894C0.893719 14.1055 0.639365 14.0002 0.451829 13.8126C0.264292 13.6251 0.158936 13.3707 0.158936 13.1055V1.10552C0.159714 0.840541 0.265321 0.586639 0.452688 0.399271C0.640056 0.211904 0.893958 0.106297 1.15894 0.105519H6.15894C6.22465 0.103711 6.28998 0.116186 6.35041 0.142083C6.41084 0.16798 6.46492 0.206683 6.50894 0.255518L10.0089 3.75552C10.0578 3.79954 10.0965 3.85363 10.1223 3.91406C10.1482 3.97448 10.1607 4.0398 10.1589 4.10552ZM6.15894 1.30552V4.10552H8.95894L6.15894 1.30552ZM14.1589 7.10535V8.10535H12.1589V9.10535H13.6589V10.1053H12.1589V12.1053H11.1589V7.10535H14.1589ZM6.65894 12.1053H8.65894C9.05663 12.1049 9.4379 11.9467 9.71911 11.6655C10.0003 11.3843 10.1585 11.003 10.1589 10.6053V8.60535C10.1585 8.20766 10.0003 7.82638 9.71911 7.54517C9.4379 7.26396 9.05663 7.10578 8.65894 7.10535H6.65894V12.1053ZM8.65894 11.1053H7.65894V8.10535H8.65894C8.7915 8.10549 8.91859 8.15822 9.01233 8.25195C9.10606 8.34569 9.15879 8.47278 9.15894 8.60535V10.6053C9.15879 10.7379 9.10606 10.865 9.01233 10.9587C8.91859 11.0525 8.7915 11.1052 8.65894 11.1053ZM2.15894 7.10535H4.65894C4.92406 7.10565 5.17824 7.21111 5.36571 7.39858C5.55318 7.58605 5.65863 7.84022 5.65894 8.10535V9.60535C5.65858 9.87045 5.55311 10.1246 5.36565 10.3121C5.17819 10.4995 4.92404 10.605 4.65894 10.6053H3.15894V12.1053H2.15894V7.10535ZM3.15894 8.10535V9.60535H4.65944L4.65894 8.10535H3.15894Z" fill="#231F20"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b-2">
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">Payment invoice</td>
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">20 February, 2022</td>
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">
                                <a href="#" target="_blank" class="inline-block">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1589 4.10552V6.10552H9.15894V5.10552H6.15894C5.89396 5.10474 5.64006 4.99913 5.45269 4.81176C5.26532 4.6244 5.15971 4.3705 5.15894 4.10552V1.10552H1.15894V13.1055H9.15894V14.1055H1.15894C0.893719 14.1055 0.639365 14.0002 0.451829 13.8126C0.264292 13.6251 0.158936 13.3707 0.158936 13.1055V1.10552C0.159714 0.840541 0.265321 0.586639 0.452688 0.399271C0.640056 0.211904 0.893958 0.106297 1.15894 0.105519H6.15894C6.22465 0.103711 6.28998 0.116186 6.35041 0.142083C6.41084 0.16798 6.46492 0.206683 6.50894 0.255518L10.0089 3.75552C10.0578 3.79954 10.0965 3.85363 10.1223 3.91406C10.1482 3.97448 10.1607 4.0398 10.1589 4.10552ZM6.15894 1.30552V4.10552H8.95894L6.15894 1.30552ZM14.1589 7.10535V8.10535H12.1589V9.10535H13.6589V10.1053H12.1589V12.1053H11.1589V7.10535H14.1589ZM6.65894 12.1053H8.65894C9.05663 12.1049 9.4379 11.9467 9.71911 11.6655C10.0003 11.3843 10.1585 11.003 10.1589 10.6053V8.60535C10.1585 8.20766 10.0003 7.82638 9.71911 7.54517C9.4379 7.26396 9.05663 7.10578 8.65894 7.10535H6.65894V12.1053ZM8.65894 11.1053H7.65894V8.10535H8.65894C8.7915 8.10549 8.91859 8.15822 9.01233 8.25195C9.10606 8.34569 9.15879 8.47278 9.15894 8.60535V10.6053C9.15879 10.7379 9.10606 10.865 9.01233 10.9587C8.91859 11.0525 8.7915 11.1052 8.65894 11.1053ZM2.15894 7.10535H4.65894C4.92406 7.10565 5.17824 7.21111 5.36571 7.39858C5.55318 7.58605 5.65863 7.84022 5.65894 8.10535V9.60535C5.65858 9.87045 5.55311 10.1246 5.36565 10.3121C5.17819 10.4995 4.92404 10.605 4.65894 10.6053H3.15894V12.1053H2.15894V7.10535ZM3.15894 8.10535V9.60535H4.65944L4.65894 8.10535H3.15894Z" fill="#231F20"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b-2">
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">Payment invoice</td>
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">20 February, 2022</td>
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">
                                <a href="#" target="_blank" class="inline-block">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1589 4.10552V6.10552H9.15894V5.10552H6.15894C5.89396 5.10474 5.64006 4.99913 5.45269 4.81176C5.26532 4.6244 5.15971 4.3705 5.15894 4.10552V1.10552H1.15894V13.1055H9.15894V14.1055H1.15894C0.893719 14.1055 0.639365 14.0002 0.451829 13.8126C0.264292 13.6251 0.158936 13.3707 0.158936 13.1055V1.10552C0.159714 0.840541 0.265321 0.586639 0.452688 0.399271C0.640056 0.211904 0.893958 0.106297 1.15894 0.105519H6.15894C6.22465 0.103711 6.28998 0.116186 6.35041 0.142083C6.41084 0.16798 6.46492 0.206683 6.50894 0.255518L10.0089 3.75552C10.0578 3.79954 10.0965 3.85363 10.1223 3.91406C10.1482 3.97448 10.1607 4.0398 10.1589 4.10552ZM6.15894 1.30552V4.10552H8.95894L6.15894 1.30552ZM14.1589 7.10535V8.10535H12.1589V9.10535H13.6589V10.1053H12.1589V12.1053H11.1589V7.10535H14.1589ZM6.65894 12.1053H8.65894C9.05663 12.1049 9.4379 11.9467 9.71911 11.6655C10.0003 11.3843 10.1585 11.003 10.1589 10.6053V8.60535C10.1585 8.20766 10.0003 7.82638 9.71911 7.54517C9.4379 7.26396 9.05663 7.10578 8.65894 7.10535H6.65894V12.1053ZM8.65894 11.1053H7.65894V8.10535H8.65894C8.7915 8.10549 8.91859 8.15822 9.01233 8.25195C9.10606 8.34569 9.15879 8.47278 9.15894 8.60535V10.6053C9.15879 10.7379 9.10606 10.865 9.01233 10.9587C8.91859 11.0525 8.7915 11.1052 8.65894 11.1053ZM2.15894 7.10535H4.65894C4.92406 7.10565 5.17824 7.21111 5.36571 7.39858C5.55318 7.58605 5.65863 7.84022 5.65894 8.10535V9.60535C5.65858 9.87045 5.55311 10.1246 5.36565 10.3121C5.17819 10.4995 4.92404 10.605 4.65894 10.6053H3.15894V12.1053H2.15894V7.10535ZM3.15894 8.10535V9.60535H4.65944L4.65894 8.10535H3.15894Z" fill="#231F20"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b-2">
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">Payment invoice</td>
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">20 February, 2022</td>
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">
                                <a href="#" target="_blank" class="inline-block">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1589 4.10552V6.10552H9.15894V5.10552H6.15894C5.89396 5.10474 5.64006 4.99913 5.45269 4.81176C5.26532 4.6244 5.15971 4.3705 5.15894 4.10552V1.10552H1.15894V13.1055H9.15894V14.1055H1.15894C0.893719 14.1055 0.639365 14.0002 0.451829 13.8126C0.264292 13.6251 0.158936 13.3707 0.158936 13.1055V1.10552C0.159714 0.840541 0.265321 0.586639 0.452688 0.399271C0.640056 0.211904 0.893958 0.106297 1.15894 0.105519H6.15894C6.22465 0.103711 6.28998 0.116186 6.35041 0.142083C6.41084 0.16798 6.46492 0.206683 6.50894 0.255518L10.0089 3.75552C10.0578 3.79954 10.0965 3.85363 10.1223 3.91406C10.1482 3.97448 10.1607 4.0398 10.1589 4.10552ZM6.15894 1.30552V4.10552H8.95894L6.15894 1.30552ZM14.1589 7.10535V8.10535H12.1589V9.10535H13.6589V10.1053H12.1589V12.1053H11.1589V7.10535H14.1589ZM6.65894 12.1053H8.65894C9.05663 12.1049 9.4379 11.9467 9.71911 11.6655C10.0003 11.3843 10.1585 11.003 10.1589 10.6053V8.60535C10.1585 8.20766 10.0003 7.82638 9.71911 7.54517C9.4379 7.26396 9.05663 7.10578 8.65894 7.10535H6.65894V12.1053ZM8.65894 11.1053H7.65894V8.10535H8.65894C8.7915 8.10549 8.91859 8.15822 9.01233 8.25195C9.10606 8.34569 9.15879 8.47278 9.15894 8.60535V10.6053C9.15879 10.7379 9.10606 10.865 9.01233 10.9587C8.91859 11.0525 8.7915 11.1052 8.65894 11.1053ZM2.15894 7.10535H4.65894C4.92406 7.10565 5.17824 7.21111 5.36571 7.39858C5.55318 7.58605 5.65863 7.84022 5.65894 8.10535V9.60535C5.65858 9.87045 5.55311 10.1246 5.36565 10.3121C5.17819 10.4995 4.92404 10.605 4.65894 10.6053H3.15894V12.1053H2.15894V7.10535ZM3.15894 8.10535V9.60535H4.65944L4.65894 8.10535H3.15894Z" fill="#231F20"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b-2">
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">Payment invoice</td>
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">20 February, 2022</td>
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">
                                <a href="#" target="_blank" class="inline-block">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1589 4.10552V6.10552H9.15894V5.10552H6.15894C5.89396 5.10474 5.64006 4.99913 5.45269 4.81176C5.26532 4.6244 5.15971 4.3705 5.15894 4.10552V1.10552H1.15894V13.1055H9.15894V14.1055H1.15894C0.893719 14.1055 0.639365 14.0002 0.451829 13.8126C0.264292 13.6251 0.158936 13.3707 0.158936 13.1055V1.10552C0.159714 0.840541 0.265321 0.586639 0.452688 0.399271C0.640056 0.211904 0.893958 0.106297 1.15894 0.105519H6.15894C6.22465 0.103711 6.28998 0.116186 6.35041 0.142083C6.41084 0.16798 6.46492 0.206683 6.50894 0.255518L10.0089 3.75552C10.0578 3.79954 10.0965 3.85363 10.1223 3.91406C10.1482 3.97448 10.1607 4.0398 10.1589 4.10552ZM6.15894 1.30552V4.10552H8.95894L6.15894 1.30552ZM14.1589 7.10535V8.10535H12.1589V9.10535H13.6589V10.1053H12.1589V12.1053H11.1589V7.10535H14.1589ZM6.65894 12.1053H8.65894C9.05663 12.1049 9.4379 11.9467 9.71911 11.6655C10.0003 11.3843 10.1585 11.003 10.1589 10.6053V8.60535C10.1585 8.20766 10.0003 7.82638 9.71911 7.54517C9.4379 7.26396 9.05663 7.10578 8.65894 7.10535H6.65894V12.1053ZM8.65894 11.1053H7.65894V8.10535H8.65894C8.7915 8.10549 8.91859 8.15822 9.01233 8.25195C9.10606 8.34569 9.15879 8.47278 9.15894 8.60535V10.6053C9.15879 10.7379 9.10606 10.865 9.01233 10.9587C8.91859 11.0525 8.7915 11.1052 8.65894 11.1053ZM2.15894 7.10535H4.65894C4.92406 7.10565 5.17824 7.21111 5.36571 7.39858C5.55318 7.58605 5.65863 7.84022 5.65894 8.10535V9.60535C5.65858 9.87045 5.55311 10.1246 5.36565 10.3121C5.17819 10.4995 4.92404 10.605 4.65894 10.6053H3.15894V12.1053H2.15894V7.10535ZM3.15894 8.10535V9.60535H4.65944L4.65894 8.10535H3.15894Z" fill="#231F20"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr class="">
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">Payment invoice</td>
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">20 February, 2022</td>
                            <td class="w-2/6 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">
                                <a href="#" target="_blank" class="inline-block">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1589 4.10552V6.10552H9.15894V5.10552H6.15894C5.89396 5.10474 5.64006 4.99913 5.45269 4.81176C5.26532 4.6244 5.15971 4.3705 5.15894 4.10552V1.10552H1.15894V13.1055H9.15894V14.1055H1.15894C0.893719 14.1055 0.639365 14.0002 0.451829 13.8126C0.264292 13.6251 0.158936 13.3707 0.158936 13.1055V1.10552C0.159714 0.840541 0.265321 0.586639 0.452688 0.399271C0.640056 0.211904 0.893958 0.106297 1.15894 0.105519H6.15894C6.22465 0.103711 6.28998 0.116186 6.35041 0.142083C6.41084 0.16798 6.46492 0.206683 6.50894 0.255518L10.0089 3.75552C10.0578 3.79954 10.0965 3.85363 10.1223 3.91406C10.1482 3.97448 10.1607 4.0398 10.1589 4.10552ZM6.15894 1.30552V4.10552H8.95894L6.15894 1.30552ZM14.1589 7.10535V8.10535H12.1589V9.10535H13.6589V10.1053H12.1589V12.1053H11.1589V7.10535H14.1589ZM6.65894 12.1053H8.65894C9.05663 12.1049 9.4379 11.9467 9.71911 11.6655C10.0003 11.3843 10.1585 11.003 10.1589 10.6053V8.60535C10.1585 8.20766 10.0003 7.82638 9.71911 7.54517C9.4379 7.26396 9.05663 7.10578 8.65894 7.10535H6.65894V12.1053ZM8.65894 11.1053H7.65894V8.10535H8.65894C8.7915 8.10549 8.91859 8.15822 9.01233 8.25195C9.10606 8.34569 9.15879 8.47278 9.15894 8.60535V10.6053C9.15879 10.7379 9.10606 10.865 9.01233 10.9587C8.91859 11.0525 8.7915 11.1052 8.65894 11.1053ZM2.15894 7.10535H4.65894C4.92406 7.10565 5.17824 7.21111 5.36571 7.39858C5.55318 7.58605 5.65863 7.84022 5.65894 8.10535V9.60535C5.65858 9.87045 5.55311 10.1246 5.36565 10.3121C5.17819 10.4995 4.92404 10.605 4.65894 10.6053H3.15894V12.1053H2.15894V7.10535ZM3.15894 8.10535V9.60535H4.65944L4.65894 8.10535H3.15894Z" fill="#231F20"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Vehicle Footer Section Starts -->
        <div class="vehicle__footer py-9 bg-[#E6E6E6]">
            <div class="">
                <div class="flex items-center justify-center gap-6">
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

@endsection
