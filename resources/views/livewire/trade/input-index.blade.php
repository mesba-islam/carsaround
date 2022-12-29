<div class="pt-head" x-data="{
        tab: window.location.hash ? window.location.hash.substring(1) : 'start',
        completed_tabs: [],
        unselected_tabs: [],
        user_type: @entangle('user_type'),
        has_error: @entangle('has_error'),

        validateAndGoNextStep(from_location, data) {

            switch(from_location) {
                case 'vehicle_manual_info':
                    $wire.getManuallyVehicleInfo(data);
                    break;
                case 'personal_details':
                    $wire.getUserInfo(data);
                    break;
                case 'send_otp':
                    $wire.getUserPhoneAndEmail(data);
                    break;
                case 'verify_otp':
                    $wire.verifyOTP(data);
                    break;
                case 'safe_settlement':
                    $wire.getSafeSettlementInfo(data);
                    break;
                case 'inspection':
                    $wire.getInspectionInfo(data);
                    break;
                case 'finance':
                    $wire.getFinanceInfo(data);
                    break;
                case 'transport':
                    $wire.getTransportData(data);
                    break;
                default:
                    break;
            }

        }
    }" x-init="completed_tabs.length == 0 ? tab = 'start' : tab = tab; window.location.hash = tab" id="tab_wrapper">


    <div x-show="tab === 'start'" x-cloak>
        @include('trade.common.start')
    </div>


    {{-- Buyer pages --}}

        <div x-show="tab === 'manual_info' && user_type === 'buyer'" x-cloak>
            @include('trade.buyer.manual_info')
        </div>

        <div x-show="tab === 'personal_details'  && user_type === 'buyer'" x-cloak>
            @include('trade.common.personal_details')
        </div>

        <div x-show="tab === 'send_otp' && user_type === 'buyer'" x-cloak>
            @include('trade.common.send_otp')
          </div>

        <div x-show="tab === 'verify_otp' && user_type === 'buyer'" x-cloak>
            @include('trade.common.verify_otp')
        </div>

        <div x-show="tab === 'safe_settlement' && user_type === 'buyer'" x-cloak>
            @include('trade.buyer.safe_settlement')
        </div>

        <div x-show="tab === 'inspection' && user_type === 'buyer'" x-cloak>
            @include('trade.buyer.inspection')
        </div>

        <div x-show="tab === 'finance' && user_type === 'buyer'" x-cloak>
            @include('trade.buyer.finance')
        </div>

        <div x-show="tab === 'transport' && user_type === 'buyer'" x-cloak>
            @include('trade.buyer.transport')
        </div>



    {{-- Seller pages --}}

        <div x-show="tab === 'manual_info' && user_type === 'seller'" x-cloak>
            @include('trade.seller.manual_info')
        </div>

        <div x-show="tab === 'personal_details'  && user_type === 'seller'" x-cloak>
            @include('trade.common.personal_details')
        </div>

        <div x-show="tab === 'send_otp' && user_type === 'seller'" x-cloak>
            @include('trade.common.send_otp')
          </div>

        <div x-show="tab === 'verify_otp' && user_type === 'seller'" x-cloak>
            @include('trade.common.verify_otp')
        </div>

        <div x-show="tab === 'safe_settlement' && user_type === 'seller'" x-cloak>
            @include('trade.seller.safe_settlement')
        </div>

        <div x-show="tab === 'inspection' && user_type === 'seller'" x-cloak>
            @include('trade.seller.inspection')
        </div>

        <div x-show="tab === 'finance' && user_type === 'seller'" x-cloak>
            @include('trade.seller.finance')
        </div>

        <div x-show="tab === 'transport' && user_type === 'seller'" x-cloak>
            @include('trade.seller.transport')
        </div>

    </div>
