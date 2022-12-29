@extends('dashboard.user.layouts.dashboard_app')


@section('title')
    Finance Details | Cars Around
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
                                Finance
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <!-- Details Title -->
        <h2 class="details__title pt-16 px-5 md:px-10 font-roboto font-medium text-3xl text-primary uppercase flex items-center gap-4">
            <span class="icon">
                <svg width="50" height="51" viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M27.6853 28.1433C25.8853 28.1425 24.1167 28.6153 22.5572 29.5141C22.4683 29.5655 22.3904 29.6339 22.3279 29.7154C22.2654 29.7969 22.2196 29.8898 22.193 29.989C22.1665 30.0882 22.1597 30.1917 22.1731 30.2935C22.1866 30.3953 22.2199 30.4935 22.2713 30.5824C22.3226 30.6713 22.391 30.7492 22.4725 30.8117C22.554 30.8742 22.647 30.92 22.7462 30.9466C22.8454 30.9731 22.9488 30.9799 23.0506 30.9665C23.1524 30.953 23.2506 30.9197 23.3395 30.8683C25.2546 29.761 27.5194 29.424 29.674 29.9257C31.8285 30.4274 33.7114 31.7302 34.9405 33.5696C36.1695 35.409 36.6525 37.6471 36.2914 39.8297C35.9304 42.0122 34.7523 43.9756 32.9964 45.3212C31.2404 46.6667 29.0383 47.2937 26.8369 47.0748C24.6356 46.8559 22.6 45.8075 21.1435 44.1424C19.687 42.4773 18.9187 40.3204 18.9946 38.1095C19.0704 35.8986 19.9848 33.7994 21.552 32.2381C21.6268 32.1662 21.6865 32.0801 21.7276 31.9849C21.7688 31.8897 21.7906 31.7873 21.7917 31.6835C21.7928 31.5798 21.7733 31.4769 21.7343 31.3808C21.6952 31.2847 21.6374 31.1974 21.5642 31.1238C21.491 31.0503 21.404 30.9921 21.3081 30.9526C21.2122 30.9131 21.1093 30.8931 21.0056 30.8937C20.9019 30.8944 20.7993 30.9157 20.7039 30.9564C20.6085 30.9971 20.5222 31.0564 20.4499 31.1308C18.767 32.8055 17.7171 35.012 17.4793 37.3742C17.2415 39.7364 17.8305 42.108 19.1459 44.0845C20.4612 46.061 22.4215 47.5199 24.6923 48.2126C26.9632 48.9053 29.404 48.7888 31.5985 47.883C33.7931 46.9772 35.6055 45.3382 36.7266 43.2454C37.8478 41.1527 38.2082 38.7358 37.7465 36.407C37.2848 34.0781 36.0296 31.9816 34.1948 30.4748C32.3601 28.9681 30.0595 28.1444 27.6853 28.1444V28.1433Z" fill="#242634"/>
                    <path d="M28.5344 41.4891H26.5729C26.4213 41.4894 26.271 41.4598 26.1308 41.402C25.9906 41.3442 25.8632 41.2593 25.7558 41.1522C25.6484 41.0451 25.5632 40.9179 25.505 40.7778C25.4468 40.6378 25.4168 40.4877 25.4167 40.336C25.4167 40.1288 25.3344 39.9301 25.1878 39.7836C25.0413 39.6371 24.8426 39.5547 24.6354 39.5547C24.4282 39.5547 24.2295 39.6371 24.083 39.7836C23.9365 39.9301 23.8542 40.1288 23.8542 40.336C23.855 41.056 24.1414 41.7462 24.6505 42.2553C25.1596 42.7644 25.8498 43.0508 26.5698 43.0516H26.7708V44.5495C26.7708 44.7567 26.8531 44.9555 26.9997 45.102C27.1462 45.2485 27.3449 45.3308 27.5521 45.3308C27.7593 45.3308 27.958 45.2485 28.1045 45.102C28.251 44.9555 28.3333 44.7567 28.3333 44.5495V43.0516H28.5323C29.2525 43.0516 29.9432 42.7655 30.4525 42.2562C30.9618 41.747 31.2479 41.0562 31.2479 40.336C31.2479 39.6158 30.9618 38.925 30.4525 38.4158C29.9432 37.9065 29.2525 37.6204 28.5323 37.6204H26.5729C26.273 37.6114 25.9883 37.4859 25.7793 37.2705C25.5703 37.0551 25.4534 36.7668 25.4534 36.4667C25.4534 36.1666 25.5703 35.8783 25.7793 35.663C25.9883 35.4476 26.273 35.3221 26.5729 35.3131H28.5344C28.8401 35.3134 29.1333 35.4349 29.3495 35.6511C29.5656 35.8673 29.6872 36.1605 29.6875 36.4662C29.6875 36.6734 29.7698 36.8721 29.9163 37.0186C30.0628 37.1651 30.2615 37.2475 30.4687 37.2475C30.6759 37.2475 30.8747 37.1651 31.0212 37.0186C31.1677 36.8721 31.25 36.6734 31.25 36.4662C31.2492 35.7462 30.9628 35.056 30.4537 34.5469C29.9446 34.0378 29.2543 33.7514 28.5344 33.7506H28.3333V32.2516C28.3333 32.0444 28.251 31.8457 28.1045 31.6992C27.958 31.5527 27.7593 31.4704 27.5521 31.4704C27.3449 31.4704 27.1462 31.5527 26.9997 31.6992C26.8531 31.8457 26.7708 32.0444 26.7708 32.2516V33.7506H26.5729C25.8618 33.7645 25.1844 34.0568 24.6864 34.5647C24.1884 35.0725 23.9094 35.7554 23.9094 36.4667C23.9094 37.178 24.1884 37.8609 24.6864 38.3688C25.1844 38.8767 25.8618 39.1689 26.5729 39.1829H28.5344C28.8402 39.1829 29.1335 39.3044 29.3498 39.5206C29.566 39.7369 29.6875 40.0302 29.6875 40.336C29.6875 40.6418 29.566 40.9351 29.3498 41.1514C29.1335 41.3676 28.8402 41.4891 28.5344 41.4891ZM46.2677 16.8735C46.0704 16.8251 45.8619 16.8555 45.6866 16.9583C45.5113 17.061 45.383 17.228 45.3287 17.4239C45.2745 17.6197 45.2988 17.8289 45.3963 18.0072C45.4938 18.1855 45.6569 18.3187 45.851 18.3787C47.9646 18.9662 48.4406 19.6287 48.4406 19.8079C48.4406 20.46 45.3833 21.9891 39.4562 21.9891C33.5292 21.9891 30.4708 20.46 30.4708 19.8079C30.4708 19.1558 33.5271 17.6266 39.4562 17.6266C40.8585 17.6216 42.2592 17.7201 43.6469 17.9214C43.849 17.9455 44.0524 17.8898 44.2142 17.7663C44.3759 17.6427 44.4831 17.461 44.5131 17.2598C44.543 17.0585 44.4934 16.8534 44.3746 16.6882C44.2559 16.5229 44.0774 16.4104 43.8771 16.3745C42.4131 16.1627 40.9355 16.0582 39.4562 16.062C34.376 16.062 28.9083 17.2339 28.9083 19.8058V25.8839C28.9083 28.4558 34.376 29.6277 39.4562 29.6277C42.8708 29.6277 46.4542 29.0954 48.4406 27.9662V28.9225C48.4406 29.5745 45.3833 31.1037 39.4562 31.1037C38.776 31.1037 38.1135 31.0829 37.4771 31.0412C37.2703 31.0291 37.0671 31.0988 36.9112 31.2352C36.7553 31.3716 36.6592 31.5638 36.6437 31.7704C36.6365 31.873 36.6497 31.9761 36.6825 32.0737C36.7153 32.1713 36.7671 32.2614 36.8349 32.3388C36.9027 32.4163 36.9851 32.4796 37.0774 32.525C37.1698 32.5705 37.2702 32.5972 37.3729 32.6037C38.0448 32.6475 38.7417 32.6704 39.4562 32.6704C42.8708 32.6704 46.4542 32.1381 48.4406 31.0037V31.96C48.4406 32.612 45.3833 34.1475 39.4562 34.1475H39.199C39.1552 34.1475 39.1302 34.1475 38.9906 34.1475C38.7857 34.1488 38.589 34.2277 38.4398 34.3681C38.2906 34.5086 38.2001 34.7003 38.1865 34.9047C38.1806 35.112 38.2571 35.3131 38.3992 35.4641C38.5414 35.615 38.7376 35.7034 38.9448 35.71C39.049 35.71 39.1146 35.71 39.1583 35.71H39.2625H39.4646C42.8792 35.71 46.4625 35.1766 48.449 34.0433V34.9995C48.449 35.6516 45.3917 37.1808 39.4646 37.1808C39.2574 37.1808 39.0587 37.2631 38.9122 37.4096C38.7656 37.5561 38.6833 37.7548 38.6833 37.962C38.6833 38.1692 38.7656 38.368 38.9122 38.5145C39.0587 38.661 39.2574 38.7433 39.4646 38.7433C42.8792 38.7433 46.4625 38.21 48.449 37.0818V38.1141C48.449 38.7662 45.3917 40.2954 39.4646 40.2954H39.1844C38.9806 40.3042 38.7873 40.388 38.6416 40.5306C38.4958 40.6733 38.408 40.8648 38.3948 41.0683C38.3928 41.2754 38.4731 41.4748 38.618 41.6229C38.7629 41.7709 38.9606 41.8554 39.1677 41.8579H39.4646C44.5323 41.861 50 40.6891 50 38.1172V19.8079C50 18.9433 49.3521 17.7329 46.2677 16.8735ZM39.4531 23.5516C42.8677 23.5516 46.451 23.0193 48.4375 21.8902V22.8464C48.4375 23.4985 45.3802 25.0339 39.4531 25.0339C33.526 25.0339 30.4677 23.5037 30.4677 22.8464V21.8902C32.4542 23.0193 36.0417 23.5516 39.4531 23.5516ZM39.4531 28.0672C33.524 28.0672 30.4677 26.5381 30.4677 25.886V24.9297C32.4542 26.0589 36.0365 26.5964 39.4531 26.5964C42.8698 26.5964 46.451 26.0641 48.4375 24.9297V25.886C48.4375 26.5381 45.3802 28.0672 39.4531 28.0672ZM16.4583 42.5433C16.1833 42.5537 15.9062 42.56 15.625 42.56C7.34375 42.56 1.5625 37.8089 1.5625 31.0068C1.5625 25.46 5.3125 17.2568 10.9052 13.887C10.9812 13.8402 11.0448 13.7829 11.1135 13.7308H17.5C17.7072 13.7308 17.9059 13.6485 18.0524 13.502C18.1989 13.3555 18.2812 13.1567 18.2812 12.9495C18.2812 12.7423 18.1989 12.5436 18.0524 12.3971C17.9059 12.2506 17.7072 12.1683 17.5 12.1683H12.099C12.2055 11.5811 12.0841 10.9753 11.7594 10.4745C9.11875 6.38392 8.60521 4.54329 8.70104 4.06621C8.7111 4.0721 8.72277 4.07465 8.73438 4.0735C9.90755 4.08167 11.0734 4.2592 12.1958 4.60058C13.2818 4.93065 14.4088 5.10599 15.5437 5.12141C16.8268 5.08994 18.1012 4.90174 19.3385 4.561C20.3191 4.29098 21.326 4.12753 22.3417 4.0735C22.3135 4.66204 21.7302 6.40058 19.7125 9.84433H13.75C13.5428 9.84433 13.3441 9.92664 13.1976 10.0732C13.0511 10.2197 12.9687 10.4184 12.9687 10.6256C12.9687 10.8328 13.0511 11.0315 13.1976 11.178C13.3441 11.3245 13.5428 11.4068 13.75 11.4068H19.0229C18.9844 11.698 19.0014 11.9938 19.0729 12.2787C19.1566 12.6023 19.3041 12.9059 19.5068 13.1718C19.7095 13.4376 19.9632 13.6602 20.2531 13.8266C23.0654 15.6582 25.346 18.1978 26.8656 21.1902C26.9132 21.2829 26.9788 21.3653 27.0586 21.4323C27.1385 21.4993 27.2309 21.5497 27.3305 21.5805C27.4301 21.6112 27.5349 21.6217 27.6386 21.6114C27.7423 21.601 27.8429 21.57 27.9345 21.5201C28.0261 21.4703 28.1067 21.4026 28.1717 21.3211C28.2367 21.2396 28.2848 21.1459 28.313 21.0456C28.3412 20.9452 28.3491 20.8402 28.3361 20.7368C28.3232 20.6334 28.2896 20.5336 28.2375 20.4433C26.5835 17.2035 24.1043 14.4573 21.05 12.4818C20.938 12.4196 20.8396 12.3357 20.7603 12.235C20.6811 12.1343 20.6227 12.0189 20.5885 11.8954C20.5619 11.7917 20.5566 11.6837 20.5728 11.5778C20.5891 11.472 20.6267 11.3706 20.6833 11.2797C24.6042 4.75683 23.9708 3.63704 23.7042 3.15475C23.5854 2.94928 23.4128 2.78008 23.2051 2.66537C22.9973 2.55065 22.7622 2.49476 22.525 2.50371C21.3273 2.53815 20.1382 2.71687 18.9833 3.036C17.8629 3.34863 16.7086 3.52353 15.5458 3.55683C14.5459 3.53906 13.5534 3.3802 12.5979 3.08496C11.3445 2.71067 10.0445 2.51568 8.73646 2.50579C8.45703 2.48769 8.17818 2.549 7.93212 2.68263C7.68605 2.81626 7.4828 3.01677 7.34583 3.261C7.08333 3.74329 6.38542 5.02454 10.449 11.3183C10.5101 11.409 10.5517 11.5113 10.5713 11.6189C10.5908 11.7265 10.5878 11.8369 10.5625 11.9433C10.5302 12.0701 10.4726 12.1891 10.3931 12.2931C10.3136 12.3972 10.2139 12.484 10.1 12.5485C4.0625 16.1912 0 25.0339 0 31.0068C0 38.6058 6.57292 44.1266 15.625 44.1266C15.925 44.1266 16.2229 44.1204 16.5187 44.1079C16.6213 44.1038 16.7221 44.0796 16.8154 44.0366C16.9086 43.9937 16.9925 43.9327 17.0622 43.8573C17.1319 43.7819 17.186 43.6935 17.2216 43.5972C17.2571 43.5009 17.2733 43.3985 17.2693 43.2959C17.2652 43.1933 17.241 43.0925 17.198 42.9993C17.1551 42.906 17.0941 42.8222 17.0187 42.7525C16.9433 42.6828 16.8549 42.6286 16.7586 42.5931C16.6623 42.5575 16.5599 42.5413 16.4573 42.5454L16.4583 42.5433Z" fill="#242634"/>
                </svg>
            </span>
            Vehicle Finance
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
                    <div class="item__checkbox w-[50px] h-[50px] flex justify-center items-center {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'assessment') ? 'bg-blue' : '' }} border-blue border-2 rounded-full z-50">
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
                    <div class="item__checkbox w-[50px] h-[50px] flex justify-center items-center {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'pre_approval') ? 'bg-blue' : '' }} border-blue border-2 rounded-full z-50">
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
                    <div class="item__checkbox w-[50px] h-[50px] flex justify-center items-center {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'final_Approval') ? 'bg-blue' : '' }} border-blue border-2 rounded-full z-50">
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
                    <div class="item__checkbox w-[50px] h-[50px] flex justify-center items-center {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'contract_Execution') ? 'bg-blue' : '' }} border-blue border-2 rounded-full z-50">
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
                    <div class="item__checkbox w-[50px] h-[50px] flex justify-center items-center {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'settlement') ? 'bg-blue' : '' }} border-blue border-2 rounded-full z-50">
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
                        Application
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
                        Assesment
                    </h2>
                    <!-- Item date -->
                    <span class="font-roboto font-light text-sm text-primary">
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'assessment') ? $trade->get_service_status_date($trade->service_statuses, 'assessment') : '' }}
                        <br>
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'assessment') ? $trade->get_service_status_time($trade->service_statuses, 'assessment') : '' }}
                    </span>
                </div>
                <!-- List Item 3 -->
                <div class="list__item">
                    <!-- Item Title -->
                    <h2 class="item__title font-roboto font-medium text-sm text-primary mt-7 mb-9">
                        Pre-approval
                    </h2>
                    <!-- Item date -->
                    <span class="font-roboto font-light text-sm text-primary">
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'pre_approval') ? $trade->get_service_status_date($trade->service_statuses, 'pre_approval') : '' }}
                        <br>
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'pre_approval') ? $trade->get_service_status_time($trade->service_statuses, 'pre_approval') : '' }}
                    </span>
                </div>
                <!-- List Item 4 -->
                <div class="list__item">
                    <!-- Item Title -->
                    <h2 class="item__title font-roboto font-medium text-sm text-primary mt-7 mb-9">
                        Final approval
                    </h2>
                    <!-- Item date -->
                    <span class="font-roboto font-light text-sm text-primary">
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'final_Approval') ? $trade->get_service_status_date($trade->service_statuses, 'final_Approval') : '' }}
                        <br>
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'final_Approval') ? $trade->get_service_status_time($trade->service_statuses, 'final_Approval') : '' }}
                    </span>
                </div>
                <!-- List Item 5 -->
                <div class="list__item">
                    <!-- Item Title -->
                    <h2 class="item__title font-roboto font-medium text-sm text-primary flex mt-7 mb-9">
                        Contract execution
                    </h2>
                    <!-- Item date -->
                    <span class="font-roboto font-light text-sm text-primary">
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'contract_Execution') ? $trade->get_service_status_date($trade->service_statuses, 'contract_Execution') : '' }}
                        <br>
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'contract_Execution') ? $trade->get_service_status_time($trade->service_statuses, 'contract_Execution') : '' }}
                    </span>
                </div>
                <!-- List Item 6 -->
                <div class="list__item">
                    <!-- Item Title -->
                    <h2 class="item__title font-roboto font-medium text-sm text-primary flex mt-7 mb-9">
                        Settlement
                    </h2>
                    <!-- Item date -->
                    <span class="font-roboto font-light text-sm text-primary">
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'settlement') ? $trade->get_service_status_date($trade->service_statuses, 'settlement') : '' }}
                        <br>
                        {{ isset($trade->service_statuses) && $trade->has_service_status($trade->service_statuses, 'settlement') ? $trade->get_service_status_time($trade->service_statuses, 'settlement') : '' }}
                    </span>
                </div>
            </div>
        </div>
        <!-- Vehicle Information -->
        <div class="vehicle__info border rounded p-3 sm:p-5 mb-16 mx-5 md:mx-10">
            <table>
                <tbody>
                    <tr class="">
                        <th class="w-3/12 text-start font-roboto font-medium text-base text-primary leading-6 py-2">Amount Applied</th>
                        <td class="px-2 sm:px-8">:</td>
                        <td class="w-9/12 font-roboto font-normal text-base text-primary"> ${{ $trade->trade_finances->borrow_amount }}</td>
                    </tr>
                    <tr class="">
                        <th class="w-3/12 text-start font-roboto font-medium text-base text-primary leading-6 py-2">Amount Approved</th>
                        <td class="px-2 sm:px-8">:</td>
                        <td class="w-9/12 font-roboto font-normal text-base text-primary">${{ $trade->trade_finances->approved_amount }}</td>
                    </tr>
                    <tr class="">
                        <th class="w-3/12 text-start font-roboto font-medium text-base text-primary leading-6 py-2">Service Charge</th>
                        <td class="px-2 sm:px-8">:</td>
                        <td class="w-9/12 font-roboto font-normal text-base text-primary">${{ $trade->trade_finances->service_charge }}</td>
                    </tr>
                    <tr class="">
                        <th class="w-3/12 text-start font-roboto font-medium text-base text-primary leading-6 py-2">Current Status</th>
                        <td class="px-2 sm:px-8">:</td>
                        <td class="w-9/12 font-roboto font-normal text-base text-primary">{{ ucfirst(str_replace('_', ' ', $trade->trade_finances->status)) }}</td>
                    </tr>
                    <tr class="">
                        <th class="w-3/12 text-start font-roboto font-medium text-base text-primary leading-6 py-2">Instruction</th>
                        <td class="px-2 sm:px-8">:</td>
                        <td class="w-9/12 font-roboto font-normal text-base text-primary">{{ isset($trade->trade_finances->instruction) ? $trade->trade_finances->instruction->note : '' }}</td>
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
