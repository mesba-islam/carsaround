@extends('dashboard.user.layouts.dashboard_app')


@section('title')
    Order - Buying | Cars Around
@endsection


@section('content')

    <!-- Dashboard section Starts -->

            <!-- Dashboard Details -->
            <div class="w-5/6 px-10 ml-auto border-l dashboard__details">
                <!-- Breadcrumb section -->
                <div class="breadcrumb pt-[30px]">
                    <!-- Breadcrumb Item -->
                    <nav class="flex breadcrumb__item" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 md:space-x-2">
                            <!-- Breadcrumb List -->
                            <li class="inline-flex items-center breadcrumb__list">
                                <a href="{{ route('dashboard') }}"
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
                            <li class="breadcrumb__list" aria-current="page">
                                <div class="flex items-center">
                                    <span class="mr-2 array__icon">
                                        <svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.5" d="M0.225303 1.12093C0.498401 0.846208 0.925745 0.82124 1.22688 1.04601L1.31316 1.12093L9.77468 9.63288C10.0478 9.90753 10.0726 10.3375 9.84914 10.6404L9.77468 10.7272L1.31316 19.2391C1.01276 19.5413 0.525703 19.5413 0.225303 19.2391C-0.0477947 18.9644 -0.0726151 18.5345 0.150821 18.2316L0.225303 18.1448L8.14288 10.18L0.225303 2.21526C-0.0750973 1.91308 -0.0750973 1.42312 0.225303 1.12093Z" fill="#242634"/>
                                        </svg>
                                    </span>
                                    <span class="text-lg font-medium opacity-50 font-roboto text-primary">
                                        Buying
                                    </span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
                <!-- Details & Update -->
                <div class="flex flex-wrap items-center justify-between w-full pt-16 pb-10 details-update">
                    <!-- Details Info -->
                    <div class="details__info">
                        <!-- Info Title -->
                        <h2 class="text-2xl font-medium info__title font-roboto text-primary">
                            Buying
                        </h2>
                        <!-- Info Sub Title -->
                        <p class="info__sub-title font-sans font-normal text-[12px] leading-6 text-[#4E484A]">
                            Vehicles that you are buying
                        </p>
                    </div>
                    <!-- Select -->
                    <form>
                        <div class="details__select">
                            <select name="search" id="" onchange="this.form.submit()" class="bg-transparent border py-3 px-5 w-[250px] rounded-full font-roboto font-light text-[12px] text-primary">
                                <option value="last_updated" @if ($searched == 'last_updated') selected @endif>Last Updated</option>
                                <option value="date_new_to_old" @if ($searched == 'date_new_to_old') selected @endif>Date (New to Old)</option>
                                <option value="date_old_to_new" @if ($searched == 'date_old_to_new') selected @endif>Date (Old to New)</option>
                                <option value="make_a_to_z" @if ($searched == 'make_a_to_z') selected @endif>Make (A-Z)</option>
                                <option value="make_z_to_a" @if ($searched == 'make_z_to_a') selected @endif>Make (Z-A)</option>
                                <option value="price_high_to_low" @if ($searched == 'price_high_to_low') selected @endif>Price (High to Low)</option>
                                <option value="price_low_to_high" @if ($searched == 'price_low_to_high') selected @endif>Price (Low to high)</option>
                                <option value="year_high_to_low" @if ($searched == 'year_high_to_low') selected @endif>Year Made (High to Low)</option>
                                <option value="year_low_to_high" @if ($searched == 'year_low_to_high') selected @endif>Year Made (Low to high)</option>
                            </select>
                        </div>
                    </form>
                </div>
                <!-- Dashboard Data Table -->
                <div class="dashboard__data-table">
                    <table class="w-full table-fixed">
                        <thead>
                            <tr class="border-b">
                                <th class="w-1/4 py-4 font-roboto font-semibold text-base text-[#242634]">Trade key</th>
                                <th class="w-1/4 py-4 font-roboto font-semibold text-base text-[#242634]">Vehicle</th>
                                <th class="w-1/4 py-4 font-roboto font-semibold text-base text-[#242634]">Seller</th>
                                <th class="w-1/4 py-4 font-roboto font-semibold text-base text-[#242634] hidden xsm:table-cell">Started on</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trades as $trade)
                                <tr class="border-b">
                                    <td class="w-1/4 py-4 text-center font-sans font-normal text-sm text-[#4E484A]"><a class="transition-all duration-300 ease-in-out hover:font-semibold" href="{{ route('order.trade.show', ['trade' => $trade->key]) }}">b{{ $trade->key }}</a></td>
                                    <td class="w-1/4 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">{{ $trade->trade_vehicle->model ?? '' }}</td>
                                    <td class="w-1/4 py-4 text-center font-sans font-normal text-sm text-[#4E484A]">{{ isset($trade->seller) ? $nameConversionHelper->generateFullName($trade->seller) : '' }}</td>
                                    <td class="w-1/4 py-4 text-center font-sans font-normal text-sm text-[#4E484A] hidden xsm:table-cell">{{ $trade->created_at->format('d F, Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Pagination -->
                    {{ $trades->links() }}
                    <nav aria-label="page navigation" class="pb-24 pt-14">
                        <ul class="flex items-center justify-end gap-2">
                            <li class="hidden sm:block">
                                <a href="#" class="block px-3 py-2 ml-0 group">
                                <span class="sr-only">Previous</span>
                                <svg width="15" height="19" viewBox="0 0 15 19" fill="none" class="fill-[#9CA1AC] group-hover:fill-primary" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.15674 0.402344C0.975501 0.402351 0.800396 0.467986 0.663807 0.587111C0.527218 0.706235 0.438387 0.87079 0.413738 1.05034L0.406738 1.15234V17.6523C0.406796 17.8424 0.478983 18.0253 0.608711 18.1641C0.73844 18.303 0.916036 18.3874 1.10562 18.4004C1.2952 18.4133 1.48263 18.3538 1.63004 18.2339C1.77744 18.114 1.87384 17.9426 1.89974 17.7543L1.90674 17.6523V1.15234C1.90674 0.953431 1.82772 0.762666 1.68707 0.622014C1.54642 0.481361 1.35565 0.402344 1.15674 0.402344ZM14.1867 0.622344C14.0598 0.495326 13.8914 0.418098 13.7123 0.404701C13.5332 0.391305 13.3552 0.44263 13.2107 0.549344L13.1267 0.622344L4.87674 8.87234C4.74972 8.99933 4.67249 9.16769 4.6591 9.3468C4.6457 9.5259 4.69702 9.70387 4.80374 9.84834L4.87674 9.93234L13.1267 18.1823C13.2607 18.3153 13.4399 18.3928 13.6286 18.3995C13.8173 18.4061 14.0015 18.3414 14.1445 18.2182C14.2875 18.095 14.3788 17.9224 14.4002 17.7348C14.4215 17.5473 14.3714 17.3586 14.2597 17.2063L14.1867 17.1223L6.46674 9.40234L14.1867 1.68234C14.3272 1.54172 14.4061 1.35109 14.4061 1.15234C14.4061 0.953593 14.3272 0.762969 14.1867 0.622344Z" fill=""/>
                                </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block px-3 py-2 ml-0 group">
                                <span class="sr-only">Previous</span>
                                <svg width="11" height="19" viewBox="0 0 11 19" fill="none" class="fill-[#9CA1AC] group-hover:fill-primary" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.93642 0.622076C9.80943 0.495059 9.64108 0.41783 9.46197 0.404434C9.28286 0.391037 9.10489 0.442362 8.96042 0.549076L8.87642 0.622076L0.626422 8.87208C0.499404 8.99906 0.422175 9.16742 0.408779 9.34653C0.395383 9.52564 0.446708 9.70361 0.553422 9.84808L0.626422 9.93208L8.87642 18.1821C9.01042 18.315 9.18963 18.3926 9.37828 18.3992C9.56693 18.4059 9.75115 18.3411 9.89417 18.2179C10.0372 18.0947 10.1285 17.9221 10.1499 17.7346C10.1712 17.547 10.1211 17.3583 10.0094 17.2061L9.93642 17.1221L2.21642 9.40208L9.93642 1.68208C10.0769 1.54145 10.1558 1.35083 10.1558 1.15208C10.1558 0.953326 10.0769 0.762702 9.93642 0.622076Z" fill=""/>
                                </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-current="page" class="z-10 px-4 py-3 text-base font-semibold leading-tight bg-transparent rounded shadow font-roboto text-primary hover:bg-primary hover:text-white">1</a>
                            </li>
                            <li>
                                <a href="#" class="z-10 px-4 py-3 text-base font-semibold leading-tight bg-transparent rounded shadow font-roboto text-primary hover:bg-primary hover:text-white">2</a>
                            </li>
                            <li class="hidden xsm:block">
                                <a href="#" class="z-10 px-4 py-3 text-base font-semibold leading-tight bg-transparent rounded shadow font-roboto text-primary hover:bg-primary hover:text-white">3</a>
                            </li>
                            <li class="hidden xsm:block">
                                <a href="#" class="z-10 px-4 py-3 text-base font-semibold leading-tight bg-transparent rounded shadow font-roboto text-primary hover:bg-primary hover:text-white">...</a>
                            </li>
                            <li>
                                <a href="#" class="block px-3 py-2 group">
                                <span class="sr-only">Next</span>
                                <svg width="10" height="19" viewBox="0 0 10 19" fill="none" class="fill-[#9CA1AC] group-hover:fill-primary" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.218363 0.622076C0.345352 0.495059 0.513706 0.41783 0.692815 0.404434C0.871924 0.391037 1.04989 0.442362 1.19436 0.549076L1.27836 0.622076L9.52836 8.87208C9.65538 8.99906 9.73261 9.16742 9.74601 9.34653C9.7594 9.52564 9.70808 9.70361 9.60136 9.84808L9.52836 9.93208L1.27836 18.1821C1.14436 18.315 0.965155 18.3926 0.776503 18.3992C0.587851 18.4059 0.403632 18.3411 0.260612 18.2179C0.117592 18.0947 0.0262888 17.9221 0.0049262 17.7346C-0.0164364 17.547 0.0337122 17.3583 0.145363 17.2061L0.218363 17.1221L7.93836 9.40208L0.218363 1.68208C0.0779128 1.54145 -0.000976562 1.35083 -0.000976562 1.15208C-0.000976562 0.953326 0.0779128 0.762702 0.218363 0.622076Z" fill=""/>
                                </svg>
                                </a>
                            </li>
                            <li class="hidden sm:block">
                                <a href="#" class="block px-3 py-2 group">
                                <span class="sr-only">Next</span>
                                <svg width="15" height="19" viewBox="0 0 15 19" fill="none" class="fill-[#9CA1AC] group-hover:fill-primary" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.9985 0.402344C14.1798 0.402351 14.3549 0.467986 14.4915 0.587111C14.6281 0.706235 14.7169 0.87079 14.7415 1.05034L14.7485 1.15234V17.6523C14.7485 17.8424 14.6763 18.0253 14.5466 18.1641C14.4168 18.303 14.2392 18.3874 14.0497 18.4004C13.8601 18.4133 13.6726 18.3538 13.5252 18.2339C13.3778 18.114 13.2814 17.9426 13.2555 17.7543L13.2485 17.6523V1.15234C13.2485 0.953431 13.3276 0.762666 13.4682 0.622014C13.6089 0.481361 13.7996 0.402344 13.9985 0.402344ZM0.968535 0.622344C1.09552 0.495326 1.26388 0.418098 1.44299 0.404701C1.6221 0.391305 1.80007 0.44263 1.94454 0.549344L2.02854 0.622344L10.2785 8.87234C10.4056 8.99933 10.4828 9.16769 10.4962 9.3468C10.5096 9.5259 10.4582 9.70387 10.3515 9.84834L10.2785 9.93234L2.02854 18.1823C1.89454 18.3153 1.71533 18.3928 1.52667 18.3995C1.33802 18.4061 1.1538 18.3414 1.01078 18.2182C0.867763 18.095 0.77646 17.9224 0.755098 17.7348C0.733735 17.5473 0.783884 17.3586 0.895535 17.2063L0.968535 17.1223L8.68853 9.40234L0.968535 1.68234C0.828084 1.54172 0.749195 1.35109 0.749195 1.15234C0.749195 0.953593 0.828084 0.762969 0.968535 0.622344Z" fill=""/>
                                </svg>
                                </a>
                            </li>
                            <li class="">
                                <a href="#" class="z-10 flex items-center justify-center gap-2 px-4 py-3 ml-8 text-base font-semibold leading-tight bg-transparent rounded shadow font-roboto text-primary hover:bg-primary hover:text-white group">109
                                    <span class="">
                                        <svg width="7" height="14" viewBox="0 0 7 14"  class="fill-primary group-hover:fill-white" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.15749 0.560115C0.248669 0.468915 0.369551 0.413463 0.498154 0.403845C0.626757 0.394226 0.754542 0.431078 0.858275 0.5077L0.918588 0.560115L6.84223 6.48376C6.93343 6.57493 6.98888 6.69582 6.9985 6.82442C7.00812 6.95302 6.97127 7.08081 6.89464 7.18454L6.84223 7.24485L0.918588 13.1685C0.822374 13.264 0.693699 13.3196 0.558244 13.3244C0.422788 13.3292 0.290516 13.2827 0.187825 13.1942C0.0851339 13.1058 0.019577 12.9818 0.00423829 12.8472C-0.0111004 12.7125 0.0249071 12.577 0.105075 12.4677L0.15749 12.4074L5.70058 6.8643L0.15749 1.32121C0.0566439 1.22024 0 1.08337 0 0.940664C0 0.797958 0.0566439 0.661087 0.15749 0.560115Z"/>
                                        </svg>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

    <!-- Dashboard Menu section Ends -->

@endsection
