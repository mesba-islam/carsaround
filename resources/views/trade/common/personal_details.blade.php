@include('trade.common.nav')

<div x-data="{
    user_info: {
        first_name: '',
        middle_name: '',
        last_name: '',
        date_of_birth: '',
        driving_license: '',
        user_state: '',
        address: '',
        driving_license_expire_date: '',
    }
}">






     <!-- Back Section Starts -->
     <div class="pt-10 back">
        <div class="px-5 mx-auto lg:container lg:max-w-screen-2xl md:px-8 lg:px-15">
            <!-- Back Page -->
            <div class="btn__back">
                <!-- Back Icon -->
                <button @click.prevent="tab = 'start'; window.location.hash = 'start'"
                    class="back__icon h-[46px] w-[46px] text-blue bg-secondary justify-center flex items-center rounded-full opacity-70 hover:opacity-100">
                    <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M22.2482 8.94576H5.28176L10.4747 2.70851C10.7175 2.41636 10.8343 2.03972 10.7995 1.66145C10.7646 1.28317 10.5809 0.934238 10.2887 0.691416C9.99658 0.448595 9.61994 0.331772 9.24166 0.366649C8.86338 0.401526 8.51445 0.585245 8.27163 0.877389L1.11882 9.46076C1.0707 9.52903 1.02767 9.60075 0.990073 9.67534C0.990073 9.74687 0.990074 9.78979 0.889934 9.86132C0.825092 10.0253 0.791141 10.1999 0.789795 10.3763C0.791141 10.5527 0.825092 10.7273 0.889934 10.8913C0.889934 10.9628 0.889934 11.0058 0.990073 11.0773C1.02767 11.1519 1.0707 11.2236 1.11882 11.2919L8.27163 19.8752C8.40614 20.0367 8.57457 20.1666 8.76495 20.2556C8.95534 20.3446 9.163 20.3906 9.37316 20.3902C9.70742 20.3909 10.0313 20.2745 10.2887 20.0612C10.4336 19.9411 10.5533 19.7936 10.6411 19.6272C10.7289 19.4607 10.7829 19.2786 10.8002 19.0913C10.8175 18.9039 10.7976 18.7149 10.7418 18.5353C10.6859 18.3556 10.5952 18.1887 10.4747 18.0441L5.28176 11.8069H22.2482C22.6276 11.8069 22.9915 11.6562 23.2598 11.3879C23.5281 11.1196 23.6788 10.7557 23.6788 10.3763C23.6788 9.99691 23.5281 9.63304 23.2598 9.36476C22.9915 9.09648 22.6276 8.94576 22.2482 8.94576Z"
                            fill="#242634" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Back Section Ends -->




    <!-- File-Upload Conditions Starts -->
    <div class="py-8 file-upload__conditions">
        <div class="px-5 mx-auto lg:container lg:max-w-screen-2xl md:px-8 lg:px-15">
            <!-- Conditions Title -->
            <h2 class="conditions__title font-roboto text-2xl font-medium tracking-[0.25px] text-blue">
                Please upload 2 forms of Australian IDs (e.g. Driver License, Medicare or Passport)
            </h2>
        </div>
    </div>
    <!-- File-Upload Conditions Ends -->
    <!-- Drop-down Starts -->
    <div class="pt-5 drop-down">
        <div class="px-5 mx-auto lg:container lg:max-w-screen-2xl md:px-8 lg:px-15">
            <label class="justify-center items-center flex h-[294px] bg-card hover:bg-opacity-50 cursor-pointer border-dashed border-2 border-transparent hover:border-secondaryDark rounded-md transition-all ease-in-out duration-300">
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
                        Drag & Drop, instant pic
                    </h4>
                    <!-- or -->
                    <span class="font-roboto text-base font-semibold tracking-[0.25px] text-primary">
                        or
                    </span>
                    <!-- Select file -->
                    <h3 class="py-1 text-white rounded-lg file-upload bg-bgc">
                        <!-- Select Files To Upload -->
                        <input type="file" class="px-6" hidden accept=".jpg,.png,.pdf" id="fileID" style="display:none;">
                        <button class="px-6">Select files to upload</button>
                    </h3>
                    <!-- <input type="file" name="file_upload" class=""> -->
                </div>
            </label>
        </div>
    </div>
    <!-- Drop-down Ends -->
    <!-- Personal Details Starts -->
    <div class="personal-details py-[106px]">
        <div class="px-5 mx-auto lg:container lg:max-w-screen-2xl md:px-8 lg:px-15">
            <!-- Form -->
            <div class="flex flex-wrap items-center gap-y-8">
                <!-- First Name -->
                <div class="flex flex-wrap justify-start w-full fname-field md:w-1/2 order-1">
                    <div class="name-field__inner w-full md:w-[95%] lg:w-4/5">
                        <label for="name"
                            class="w-auto name font-roboto text-sm leading-6 tracking-[0.25px] text-primary font-light">
                            First Name *
                        </label>
                        <input
                            class="w-full h-16 p-2 pl-6 text-sm leading-6 border border-transparent rounded-md bg-card font-roboto focus:outline-none focus:bg-transparent focus:border-secondaryDark text-primary"
                            type="text" x-model="user_info.first_name" id="name" placeholder="Cameron" required>
                            @error('first_name') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <!-- Current Address -->
                <div class="flex flex-wrap justify-start w-full current-address-field md:w-1/2 order-5">
                    <div class="current-address-field__inner w-full md:w-[95%] lg:w-4/5">
                        <label for="current-address"
                            class="w-4/5 current-address font-roboto text-sm leading-6 tracking-[0.25px] text-primary font-light">
                            Current Address*
                        </label>
                        <input
                            class="w-full h-16 p-2 pl-6 text-sm leading-6 border border-transparent rounded-md bg-card font-roboto focus:outline-none focus:bg-transparent focus:border-secondaryDark text-primary"
                            type="text" x-model="user_info.address" id="current-address" placeholder="Cameron" required>
                            @error('address') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <!-- Middle Name -->
                <div class="flex flex-wrap justify-start w-full mfname-field md:w-1/2 order-2">
                    <div class="mfname-field__inner w-full md:w-[95%] lg:w-4/5">
                        <label for="mfname"
                            class="w-4/5 mfname font-roboto text-sm leading-6 tracking-[0.25px] text-primary font-light">
                            Middle Name*
                        </label>
                        <input
                            class="w-full h-16 p-2 pl-6 mt-1 text-sm leading-6 border border-transparent rounded-md bg-card font-roboto focus:outline-none focus:bg-transparent focus:border-secondaryDark text-primary"
                            type="text" x-model="user_info.middle_name" name="mfname" id="mfname"
                            placeholder="Middle name" required>
                            @error('middle_name') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <!-- Driver Licence -->
                <div class="flex flex-wrap justify-start w-full driver-licence-field md:w-1/2 order-6">
                    <div class="driver-licence-field__inner w-full md:w-[95%] lg:w-4/5">
                        <label for="licence"
                            class="w-4/5 licence font-roboto text-sm leading-6 tracking-[0.25px] text-primary font-light">
                            Driver Licence Number*
                        </label>
                        <input
                            class="w-full h-16 p-2 pl-6 mt-1 text-sm leading-6 border border-transparent rounded-md bg-card font-roboto focus:outline-none focus:bg-transparent focus:border-secondaryDark text-primary"
                            type="text" x-model="user_info.driving_license" name="driver-licence" id="licence" placeholder="A25 4152" required>
                            @error('driving_license') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <!-- Last Name -->
                <div class="flex flex-wrap justify-start w-full lname-field md:w-1/2 order-3">
                    <div class="lname-field__inner w-full md:w-[95%] lg:w-4/5">
                        <label for="lname"
                            class="w-4/5 lname font-roboto text-sm leading-6 tracking-[0.25px] text-primary font-light">
                            Last Name*
                        </label>
                        <input
                            class="w-full h-16 p-2 pl-6 mt-1 text-sm leading-6 border border-transparent rounded-md bg-card font-roboto focus:outline-none focus:bg-transparent focus:border-secondaryDark text-primary"
                            type="text" x-model="user_info.last_name" name="lname" id="lname"
                            placeholder="Last name" required>
                            @error('last_name') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <!-- State -->
                <div class="flex flex-wrap justify-start w-full state-field md:w-1/2 order-7">
                    <div class="state-field__inner w-full md:w-[95%] lg:w-4/5">
                        <label for="per-state"
                            class="w-4/5 state font-roboto text-sm leading-6 tracking-[0.25px] text-primary font-light">
                            State or Territory Issued*
                        </label>
                        <br>
                        <select x-model="user_info.user_state" class="w-full h-16 p-2 px-6 mt-1 text-sm leading-6 border border-transparent rounded-md bg-card font-roboto focus:outline-none focus:bg-transparent focus:border-secondaryDark text-primary" name="per-state" id="per-state">
                            <option value="default">Select state or territory</option>
                            <option value="Australian Capital Territory">Australian Capital Territory</option>
                            <option value="New South Wales">New South Wales</option>
                            <option value="Northern Territory">Northern Territory</option>
                            <option value="Queensland">Queensland</option>
                            <option value="South Australia">South Australia</option>
                            <option value="Tasmania">Tasmania</option>
                            <option value="Victoria">Victoria</option>
                            <option value="Western Australia">Western Australia</option>
                        </select>

                        @error('user_state') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <!-- Date of Birth -->
                <div class="flex flex-wrap justify-start w-full date-birth__field md:w-1/2 order-4">
                    <div class="date-birth__inner w-full md:w-[95%] lg:w-4/5">
                        <label for="date-birth"
                            class="w-4/5 date-birth font-roboto text-sm leading-6 tracking-[0.25px] text-primary font-light">
                            Date of Birth*
                        </label>
                        <input
                            class="w-full h-16 p-2 pl-6 mt-1 text-sm leading-6 border border-transparent rounded-md bg-card font-roboto focus:outline-none focus:bg-transparent focus:border-secondaryDark text-primary"
                            type="date" x-model="user_info.date_of_birth" name="date-birth" id="date-birth"  placeholder="08/10/2022" required>
                            @error('date_of_birth') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <!-- Driver license Expiry Date -->
                <div class="flex flex-wrap justify-start w-full driver-license-expiry__field md:w-1/2 order-8">
                    <div class="license-expiry__inner w-full md:w-[95%] lg:w-4/5">
                        <label for="driver-license-expiry"
                            class="w-4/5 driver-license-expiry font-roboto text-sm leading-6 tracking-[0.25px] text-primary font-light">
                            Driver Licence Expiry Date*
                        </label>
                        <input
                            class="w-full h-16 p-2 pl-6 mt-1 text-sm leading-6 border border-transparent rounded-md bg-card font-roboto focus:outline-none focus:bg-transparent focus:border-secondaryDark text-primary"
                            type="date" x-model="user_info.driving_license_expire_date" name="driver-license-expiry" id="driver-license-expiry" placeholder="08/10/2022"
                            required>
                            @error('driving_license_expire_date') <span class="text-xs text-red-600 error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
                <!-- Contact Button -->
                <div class="flex justify-end">
                    <!-- Button Item -->
                    <button
                        @click="validateAndGoNextStep('personal_details', user_info)"
                        x-on:notify-user-info.window="tab = 'send_otp'; window.location.hash = 'send_otp';  completed_tabs.push('personal_details');"
                        class="buyer__btn-started group flex justify-center items-center text-center w-[140px] py-3 mt-20 text-primary bg-transparent font-sans text-base leading-[18px] font-semibold rounded border-2 border-primary capitalize hover:text-white hover:bg-primary transition-all ease-in-out duration-500">
                        Next Step
                        <span class="inline-block pl-1 icon">
                            <svg width="21" height="21" class="fill-primary group-hover:fill-secondary"
                                viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.0128 3.76384L16.0132 3.76381L16.0118 3.75366C15.9604 3.37524 15.6363 3.08364 15.2438 3.08364C14.8158 3.08364 14.4688 3.43062 14.4688 3.85864V17.6086H14.4685L14.4691 17.6186L14.4748 17.7035L14.4745 17.7035L14.4758 17.7137C14.5272 18.092 14.8513 18.3836 15.2438 18.3836C15.6718 18.3836 16.0188 18.0367 16.0188 17.6086V3.85864H16.0191L16.0185 3.84864L16.0128 3.76384ZM5.29701 3.24264L5.29728 3.24233L5.28837 3.23572C4.98486 3.01053 4.55438 3.0354 4.27914 3.31064C3.97649 3.61329 3.97649 4.104 4.27914 4.40665L10.6061 10.7336L4.27914 17.0607L4.27886 17.0604L4.27167 17.0687L4.21116 17.1388L4.21085 17.1385L4.20423 17.1474C3.97904 17.4509 4.00389 17.8814 4.27915 18.1566C4.58181 18.4593 5.07251 18.4593 5.37516 18.1566L12.2501 11.2816L12.2504 11.2819L12.2576 11.2736L12.3181 11.2035L12.3184 11.2038L12.325 11.1949C12.5503 10.8914 12.5254 10.4609 12.2501 10.1857C12.2501 10.1857 12.2501 10.1856 12.2501 10.1856L5.37516 3.31064L5.37544 3.31035L5.36711 3.30316L5.29701 3.24264Z"
                                    stroke="#231F20" stroke-width="0.3" />
                            </svg>
                        </span>
                    </button>
                </div>
        </div>
    </div>
    <!-- Personal Details Ends -->
</div>


    <!-- File Upload JS -->
    <script>
        const dropArea = document.querySelector(".file-upload"),
        button = dropArea.querySelector("button"),
        input = dropArea.querySelector("input");
        let file;
        var filename;

        button.onclick = () => {
        input.click();
        };

        input.addEventListener("change", function (e) {
        var fileName = e.target.files[0].name;
        let filedata = `
            <form action="" method="post">
            <div class="form">
            <h4 class="px-6">${fileName}</h4>

            </div>
            </form>`;
        dropArea.innerHTML = filedata;
        });
    </script>


