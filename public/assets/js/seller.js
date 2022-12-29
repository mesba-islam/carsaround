/*=============================================
*
*   Seller Channel will conduct from here.
*
===============================================*/




/*======================
*
*   SAFE SETTLEMENT PAGE
*
=======================*/

// Add disabled attribute
$('.add-next-btn').prop("disabled", true);


$('input[name=safe-fees-payer]').prop("checked", false);

// Calculate fees
function sellerCalculateFees() {
    var requireAmount = document.getElementById('seller-safe-settlement-amount').value;
    var feesAmount = document.querySelector('.seller-fees-check__fild');
    var feesSection = document.getElementById('seller-safeSettlementFees');
    var settlementPaymentSection = document.getElementById('seller-settlementFessPaySection');

    // Error Message
    var errorMsg = document.getElementById('seller-error-msg');


    var regex = /^[0-9]+$/;
    errorMsg.classList.remove('block');
    errorMsg.classList.add('hidden');

    if (!requireAmount.match(regex) || requireAmount.length == 0 || requireAmount == 0) {
        errorMsg.innerHTML = 'Must contains a valid number';
        errorMsg.classList.remove('hidden');
        errorMsg.classList.add('block');

        feesSection.classList.remove('block');
        feesSection.classList.add('hidden');


        // Clear Fees Payer
        $('input[name=safe-fees-payer]').prop("checked", false);

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", true);
    } else if (requireAmount >= 1 && requireAmount <= 10000) {

        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$195';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", true);
    } else if (requireAmount >= 10001 && requireAmount <= 20000) {
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$295';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", true);
    } else if (requireAmount >= 20001 && requireAmount <= 30000) {
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$395';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", true);
    } else if (requireAmount >= 30001 && requireAmount <= 40000) {
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$495';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", true);
    } else if (requireAmount >= 40001 && requireAmount <= 50000) {
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$595';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", true);
    } else if (requireAmount >= 50001 && requireAmount <= 60000) {
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$695';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", true);
    } else if (requireAmount >= 60001 && requireAmount <= 70000) {
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$795';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", true);
    } else if (requireAmount >= 70001 && requireAmount <= 80000) {
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$895';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", true);
    } else if (requireAmount >= 80001 && requireAmount <= 100000) {
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$995';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", true);
    } else if (requireAmount >= 100001 && requireAmount <= 125000) {
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$1195';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", true);
    } else if (requireAmount >= 125001 && requireAmount <= 150000) {
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$1495';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", true);
    } else if (requireAmount >= 151001 && requireAmount <= 200000) {
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$1795';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", true);
    } else if (requireAmount >= 200001 && requireAmount <= 250000) {
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$1995';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", true);
    } else if (requireAmount >= 250001 && requireAmount <= 300000) {
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$2495';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", true);
    } else if (requireAmount >= 350001 && requireAmount <= 400000) {
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$3995';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", true);
    } else if (requireAmount >= 400001 && requireAmount <= 500000) {
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$5495';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", true);
    } else if (requireAmount >= 500001 && requireAmount <= 600000) {
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$6995';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", true);
    } else if (requireAmount >= 600001 && requireAmount <= 700000) {
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$7995';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", true);
    } else if (requireAmount >= 700001 && requireAmount <= 800000) {
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$8995';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", true);
    } else if (requireAmount >= 800, 001 && requireAmount <= 800000) {
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$9995';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", true);
    } else if (requireAmount >= 900001 && requireAmount <= 1000000) {
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$11995';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", true);
    } else {
        errorMsg.innerHTML = 'Transaction range $1 - $1M';

        errorMsg.classList.remove('hidden');
        errorMsg.classList.add('block');

        feesSection.classList.remove('block');
        feesSection.classList.add('hidden');

        // Clear Fees Payer
        $('input[name=safe-fees-payer]').prop("checked", false);

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", true);
    }


    // Safe settlement fees payment option
    if ((feesSection.classList.contains('block') && settlementPaymentSection.classList.contains('hidden')) || (feesSection.classList.contains('block') && settlementPaymentSection.classList.contains('block'))) {
        settlementPaymentSection.classList.remove('hidden');
        settlementPaymentSection.classList.add('block');
    } else {
        settlementPaymentSection.classList.remove('block');
        settlementPaymentSection.classList.add('hidden');


    }


    // Settlement Fees
    $('input[type=radio][name=safe-fees-payer]').on('change', function () {

        // Remove disabled attribute
        $('.add-next-btn').prop("disabled", false);

    });



}


/*======================
*
*   INSPECTION PAGE
*
=======================*/


$('input[name=require-pre-purchase]').prop("checked", false);

$('input[type=radio][name=require-pre-purchase]').on('change', function () {

    // Remove disabled attribute
    $('.add-next-btn').prop("disabled", true);

    if ($('input[type=radio][name=require-pre-purchase]:checked').val() === 'yes') {
        $('#inspectionVehicleType').removeClass('hidden');
        $('#inspectionVehicleType').addClass('block').slideDown();

    } else {
        // Vehicle type
        $('input[name=seller-vehicle-type]').prop("checked", false);


        // Inspection vehicle type
        $('#inspectionVehicleType').removeClass('block');
        $('#inspectionVehicleType').addClass('hidden');

        // Inspection fees
        $('#sellerAdditionalInsepectionInfo').removeClass('block');
        $('#sellerAdditionalInsepectionInfo').addClass('hidden');

        // Boat size
        $('#seller-boat-size-section').removeClass('block');
        $('#seller-boat-size-section').addClass('hidden');

        // Small engine type
        $('#seller-small-boat-engine-section').removeClass('block');
        $('#seller-small-boat-engine-section').addClass('hidden');

        // Small boat add ons
        $('#seller-small-boat-add-ons-section').removeClass('block');
        $('#seller-small-boat-add-ons-section').addClass('hidden');

        // Small boat inspection fees
        $('#sellerSmallBoatInspectionFee').removeClass('block');
        $('#sellerSmallBoatInspectionFee').addClass('hidden');

        // Larger boat type
        $('#sellerLargerBoatTypeSection').removeClass('block');
        $('#sellerLargerBoatTypeSection').addClass('hidden');

        // Larger boat fuel type
        $('#sellerFuelTypeSection').removeClass('block');
        $('#sellerFuelTypeSection').addClass('hidden');

        // Caravan
        $('input[name=caravan-inspection]').prop("checked", false);
        $('#sellerCaravanInspectionSection').removeClass('block');
        $('#sellerCaravanInspectionSection').addClass('hidden');
        $('#sellerAdditionalInsepectionInfo').removeClass('block');
        $('#sellerAdditionalInsepectionInfo').addClass('hidden');


        // Inspection fees
        $('input[name=pre-inspection-fees-payer]').prop("checked", false);
        $('#prePurchaseInspectionFees').removeClass('block');
        $('#prePurchaseInspectionFees').addClass('hidden');

        // Remove disabled attribute
        $('.add-next-btn').prop("disabled", false);
    }
});


/*
 *
 *
 * Inspection functionality will conduct from here.
 *
 */

$('input[name=seller-vehicle-type]').prop("checked", false);
// Inspection fees
$('input[name=pre-inspection-fees-payer]').prop("checked", false);

// Get vehicle type
$('input[type=radio][name=seller-vehicle-type]').on('change', function () {

    // Inspection fees

    $('input[name=pre-inspection-fees-payer]').prop("checked", false);
    switch ($(this).val()) {
        case 'car':

            // Inspection fees

            $('input[name=pre-inspection-fees-payer]').prop("checked", false);
            $('#sellerAdditionalInsepectionInfo').removeClass('hidden');
            $('#sellerAdditionalInsepectionInfo').addClass('block');

            $(".fees-check__fild--amount").val("$300");


            // Inspection fees
            $('#prePurchaseInspectionFees').removeClass('hidden');
            $('#prePurchaseInspectionFees').addClass('block');

            $('.add-next-btn').prop("disabled", true);

            $('input[type=radio][name=pre-inspection-fees-payer]').on('change', function () {

                $('.add-next-btn').prop("disabled", false);

            });


            // Boat Size Section
            $('#seller-boat-size-section').removeClass('block');
            $('#seller-boat-size-section').addClass('hidden');

            // Boat Engine Section
            $('#seller-small-boat-engine-section').removeClass('block');
            $('#seller-small-boat-engine-section').addClass('hidden');

            // Boat Add Ons Section
            $('#seller-small-boat-add-ons-section').removeClass('block');
            $('#seller-small-boat-add-ons-section').addClass('hidden');

            // Inspection Fees
            $('#sellerSmallBoatInspectionFee').removeClass('block');
            $('#sellerSmallBoatInspectionFee').addClass('hidden');


            // Remove Larger Boat Type
            $('input[name=boat-type]').prop("checked", false);
            $('input[name=fuel-type]').prop("checked", false);

            $('#sellerLargerBoatTypeSection').removeClass('block');
            $('#sellerLargerBoatTypeSection').addClass('hidden');
            $('#sellerFuelTypeSection').removeClass('block');
            $('#sellerFuelTypeSection').addClass('hidden');
            $('#sellerLargerBoatInspectionFeeSection').removeClass('block');
            $('#sellerLargerBoatInspectionFeeSection').addClass('hidden');

            // Caravan
            $('input[name=caravan-inspection]').prop("checked", false);
            $('#sellerCaravanInspectionSection').removeClass('block');
            $('#sellerCaravanInspectionSection').addClass('hidden');


            // Clear Boat/Caravan checked values
            $('input[name=seller-boat-size]').prop("checked", false);
            $('input[name=engine-type]').prop("checked", false);
            $('input[name=add-ons]').prop("checked", false);

            break;

        case 'bike':
            $('#sellerAdditionalInsepectionInfo').removeClass('hidden');
            $('#sellerAdditionalInsepectionInfo').addClass('block');


            // Inspection fees

            $('input[name=pre-inspection-fees-payer]').prop("checked", false);

            $(".fees-check__fild--amount").val("$100");

            // Inspection fees
            $('#prePurchaseInspectionFees').removeClass('hidden');
            $('#prePurchaseInspectionFees').addClass('block');

            $('.add-next-btn').prop("disabled", true);

            $('input[type=radio][name=pre-inspection-fees-payer]').on('change', function () {

                $('.add-next-btn').prop("disabled", false);

            });


            // Boat Size Section
            $('#seller-boat-size-section').removeClass('block');
            $('#seller-boat-size-section').addClass('hidden');

            // Boat Engine Section
            $('#seller-small-boat-engine-section').removeClass('block');
            $('#seller-small-boat-engine-section').addClass('hidden');

            // Boat Add Ons Section
            $('#seller-small-boat-add-ons-section').removeClass('block');
            $('#seller-small-boat-add-ons-section').addClass('hidden');

            // Inspection Fees
            $('#sellerSmallBoatInspectionFee').removeClass('block');
            $('#sellerSmallBoatInspectionFee').addClass('hidden');

            // Remove Larger Boat Type
            $('input[name=boat-type]').prop("checked", false);
            $('input[name=fuel-type]').prop("checked", false);

            $('#sellerLargerBoatTypeSection').removeClass('block');
            $('#sellerLargerBoatTypeSection').addClass('hidden');
            $('#sellerFuelTypeSection').removeClass('block');
            $('#sellerFuelTypeSection').addClass('hidden');
            $('#sellerLargerBoatInspectionFeeSection').removeClass('block');
            $('#sellerLargerBoatInspectionFeeSection').addClass('hidden');

            // Caravan
            $('input[name=caravan-inspection]').prop("checked", false);
            $('#sellerCaravanInspectionSection').removeClass('block');
            $('#sellerCaravanInspectionSection').addClass('hidden');


            // Clear Boat checked values
            $('input[name=seller-boat-size]').prop("checked", false);
            $('input[name=engine-type]').prop("checked", false);
            $('input[name=add-ons]').prop("checked", false);


            break;

        case 'boat':

            $('input[name=seller-boat-size]').prop("checked", false);
            $('#sellerAdditionalInsepectionInfo').removeClass('block');
            $('#sellerAdditionalInsepectionInfo').addClass('hidden');

            // Caravan
            $('input[name=caravan-inspection]').prop("checked", false);
            $('#sellerCaravanInspectionSection').removeClass('block');
            $('#sellerCaravanInspectionSection').addClass('hidden');

            $('#seller-boat-size-section').removeClass('hidden');
            $('#seller-boat-size-section').addClass('block');


            // Inspection fees

            $('input[name=pre-inspection-fees-payer]').prop("checked", false);
            $('#prePurchaseInspectionFees').removeClass('block');
            $('#prePurchaseInspectionFees').addClass('hidden');




            // Displaying Boat Size
            $('input[type=radio][name=seller-boat-size]').on('change', function () {
                // Inspection fees
                $('#prePurchaseInspectionFees').removeClass('block');
                $('#prePurchaseInspectionFees').addClass('hidden');
                switch ($(this).val()) {

                    case '6-meters':
                    case '6-8-meters':

                        // Inspection fees
                        $('#prePurchaseInspectionFees').removeClass('block');
                        $('#prePurchaseInspectionFees').addClass('hidden');

                        $('#seller-single-outboard-list').show();

                        // Remove Larger Boat Type
                        $('input[name=boat-type]').prop("checked", false);
                        $('input[name=fuel-type]').prop("checked", false);

                        $('#sellerLargerBoatTypeSection').removeClass('block');
                        $('#sellerLargerBoatTypeSection').addClass('hidden');
                        $('#sellerFuelTypeSection').removeClass('block');
                        $('#sellerFuelTypeSection').addClass('hidden');
                        $('#sellerLargerBoatInspectionFeeSection').removeClass('block');
                        $('#sellerLargerBoatInspectionFeeSection').addClass('hidden');

                        //alert($("input[type='radio'][name='seller-boat-size']:checked").val());


                        $('#seller-small-boat-engine-section').removeClass('hidden');
                        $('#seller-small-boat-engine-section').addClass('block');


                        //$('input[name=engine-type]').prop("checked", false);

                        $('input[type=radio][name=engine-type]').on('change', function () {

                            //alert($("input[type='radio'][name='engine-type']:checked").val());

                            $('#seller-small-boat-add-ons-section').removeClass('hidden');
                            $('#seller-small-boat-add-ons-section').addClass('block');

                            $('input[type=radio][name=add-ons]').on('change', function () {

                                //alert($("input[type='radio'][name='add-ons']:checked").val());

                                $('#sellerSmallBoatInspectionFee').removeClass('hidden');
                                $('#sellerSmallBoatInspectionFee').addClass('block');

                                // $('.add-next-btn').prop("disabled", false);

                                $('.fees-check__fild--amount--smallBoat').val($("input[type='radio'][name='engine-type']:checked").val() + $("input[type='radio'][name='add-ons']:checked").val());

                                // Inspection fees
                                $('#prePurchaseInspectionFees').removeClass('hidden');
                                $('#prePurchaseInspectionFees').addClass('block');

                                $('input[type=radio][name=pre-inspection-fees-payer]').on('change', function () {

                                    $('.add-next-btn').prop("disabled", false);

                                });

                            });

                            // $('#seller-small-boat-add-ons-section').removeClass('block');
                            // $('#seller-small-boat-add-ons-section').addClass('hidden');

                            $('input[name=add-ons]').prop("checked", false);


                            $('#sellerSmallBoatInspectionFee').removeClass('block');
                            $('#sellerSmallBoatInspectionFee').addClass('hidden');

                            // Inspection fees
                            $('#prePurchaseInspectionFees').removeClass('block');
                            $('#prePurchaseInspectionFees').addClass('hidden');

                        });

                        $('input[name=engine-type]').prop("checked", false);
                        $('input[name=add-ons]').prop("checked", false);


                        $('#sellerSmallBoatInspectionFee').removeClass('block');
                        $('#sellerSmallBoatInspectionFee').addClass('hidden');

                        $('#seller-small-boat-add-ons-section').removeClass('block');
                        $('#seller-small-boat-add-ons-section').addClass('hidden');


                        // Inspection fees
                        $('#prePurchaseInspectionFees').removeClass('block');
                        $('#prePurchaseInspectionFees').addClass('hidden');

                        $('.add-next-btn').prop("disabled", true);




                        break;
                    case '8-10-meters':


                        // if ($("input[type='radio'][name='engine-type']:checked").val() === 'single-outboard') {
                        //     $("input[type='radio'][name='engine-type']:checked").val().css('display', 'none');
                        // }

                        $('#seller-single-outboard-list').hide();


                        // Remove Larger Boat Type
                        $('input[name=boat-type]').prop("checked", false);
                        $('input[name=fuel-type]').prop("checked", false);

                        $('#sellerLargerBoatTypeSection').removeClass('block');
                        $('#sellerLargerBoatTypeSection').addClass('hidden');
                        $('#sellerFuelTypeSection').removeClass('block');
                        $('#sellerFuelTypeSection').addClass('hidden');
                        $('#sellerLargerBoatInspectionFeeSection').removeClass('block');
                        $('#sellerLargerBoatInspectionFeeSection').addClass('hidden');

                        $('#seller-small-boat-engine-section').removeClass('hidden');
                        $('#seller-small-boat-engine-section').addClass('block');

                        // Inspection fees
                        $('input[name=pre-inspection-fees-payer]').prop("checked", false);
                        $('#prePurchaseInspectionFees').removeClass('block');
                        $('#prePurchaseInspectionFees').addClass('hidden');


                        //$('input[name=engine-type]').prop("checked", false);

                        $('input[type=radio][name=engine-type]').on('change', function () {

                            //alert($("input[type='radio'][name='engine-type']:checked").val());

                            $('#seller-small-boat-add-ons-section').removeClass('hidden');
                            $('#seller-small-boat-add-ons-section').addClass('block');

                            $('input[type=radio][name=add-ons]').on('change', function () {

                                //alert($("input[type='radio'][name='add-ons']:checked").val());


                                $('#sellerSmallBoatInspectionFee').removeClass('hidden');
                                $('#sellerSmallBoatInspectionFee').addClass('block');

                                // Inspection fees
                                $('#prePurchaseInspectionFees').removeClass('hidden');
                                $('#prePurchaseInspectionFees').addClass('block');

                                // $('.add-next-btn').prop("disabled", false);

                                $('.fees-check__fild--amount--smallBoat').val($("input[type='radio'][name='engine-type']:checked").val() + $("input[type='radio'][name='add-ons']:checked").val());


                                $('.add-next-btn').prop("disabled", true);

                                // Inspection fees
                                $('input[name=pre-inspection-fees-payer]').prop("checked", false);


                                $('.add-next-btn').prop("disabled", true);

                                $('input[type=radio][name=pre-inspection-fees-payer]').on('change', function () {

                                    $('.add-next-btn').prop("disabled", false);

                                });


                            });


                            $('input[name=add-ons]').prop("checked", false);

                            // Inspection fees

                            $('input[name=pre-inspection-fees-payer]').prop("checked", false);

                            $('#sellerSmallBoatInspectionFee').removeClass('block');
                            $('#sellerSmallBoatInspectionFee').addClass('hidden');

                            $('.add-next-btn').prop("disabled", true);

                        });
                        $('input[name=engine-type]').prop("checked", false);

                        $('#seller-small-boat-add-ons-section').removeClass('block');
                        $('#seller-small-boat-add-ons-section').addClass('hidden');

                        $('#sellerSmallBoatInspectionFee').removeClass('block');
                        $('#sellerSmallBoatInspectionFee').addClass('hidden');


                        $('.add-next-btn').prop("disabled", true);
                        break;


                    case '10-meters':

                        // Boat Engine Section
                        $('#seller-small-boat-engine-section').removeClass('block');
                        $('#seller-small-boat-engine-section').addClass('hidden');

                        // Boat Add Ons Section
                        $('#seller-small-boat-add-ons-section').removeClass('block');
                        $('#seller-small-boat-add-ons-section').addClass('hidden');

                        // Inspection Fees
                        $('#sellerSmallBoatInspectionFee').removeClass('block');
                        $('#sellerSmallBoatInspectionFee').addClass('hidden');

                        $('#sellerLargerBoatTypeSection').removeClass('hidden');
                        $('#sellerLargerBoatTypeSection').addClass('block');


                        $('input[type=radio][name=boat-type]').on('change', function () {

                            //alert($("input[type='radio'][name='boat-type']:checked").val());

                            $('#sellerFuelTypeSection').removeClass('hidden');
                            $('#sellerFuelTypeSection').addClass('block');

                            // $('.fees-check__fild--amount--smallBoat').html($("input[type='radio'][name='engine-type']:checked").val() + $("input[type='radio'][name='add-ons']:checked").val());
                        });

                        $('input[type=radio][name=fuel-type]').on('change', function () {

                            //alert($("input[type='radio'][name='fuel-type']:checked").val());

                            $('#sellerLargerBoatInspectionFeeSection').removeClass('hidden');
                            $('#sellerLargerBoatInspectionFeeSection').addClass('block');

                            // $('.add-next-btn').prop("disabled", false);

                            // Inspection fees
                            $('input[name=pre-inspection-fees-payer]').prop("checked", false);
                            $('#prePurchaseInspectionFees').removeClass('hidden');
                            $('#prePurchaseInspectionFees').addClass('block');

                            $('.add-next-btn').prop("disabled", true);

                            $('input[type=radio][name=pre-inspection-fees-payer]').on('change', function () {

                                $('.add-next-btn').prop("disabled", false);

                            });



                            // $('.fees-check__fild--amount--smallBoat').html($("input[type='radio'][name='engine-type']:checked").val() + $("input[type='radio'][name='add-ons']:checked").val());
                        });

                        $('.add-next-btn').prop("disabled", true);
                        break;

                }
                $('.add-next-btn').prop("disabled", true);
            });

            $('.add-next-btn').prop("disabled", true);
            break;

        case 'caravan':

            $('#sellerAdditionalInsepectionInfo').removeClass('block');
            $('#sellerAdditionalInsepectionInfo').addClass('hidden');

            $('#sellerCaravanInspectionSection').removeClass('hidden');
            $('#sellerCaravanInspectionSection').addClass('block');

            // Boat Size Section
            $('#seller-boat-size-section').removeClass('block');
            $('#seller-boat-size-section').addClass('hidden');

            // Boat Engine Section
            $('#seller-small-boat-engine-section').removeClass('block');
            $('#seller-small-boat-engine-section').addClass('hidden');

            // Boat Add Ons Section
            $('#seller-small-boat-add-ons-section').removeClass('block');
            $('#seller-small-boat-add-ons-section').addClass('hidden');

            // Inspection Fees
            $('#sellerSmallBoatInspectionFee').removeClass('block');
            $('#sellerSmallBoatInspectionFee').addClass('hidden');


            // Clear Boat checked values
            $('input[name=seller-boat-size]').prop("checked", false);
            $('input[name=engine-type]').prop("checked", false);
            $('input[name=add-ons]').prop("checked", false);


            // Remove Larger Boat Type
            $('input[name=boat-type]').prop("checked", false);
            $('input[name=fuel-type]').prop("checked", false);

            $('#sellerLargerBoatTypeSection').removeClass('block');
            $('#sellerLargerBoatTypeSection').addClass('hidden');
            $('#sellerFuelTypeSection').removeClass('block');
            $('#sellerFuelTypeSection').addClass('hidden');
            $('#sellerLargerBoatInspectionFeeSection').removeClass('block');
            $('#sellerLargerBoatInspectionFeeSection').addClass('hidden');


            // Inspection fees
            $('input[name=pre-inspection-fees-payer]').prop("checked", false);
            $('#prePurchaseInspectionFees').removeClass('block');
            $('#prePurchaseInspectionFees').addClass('hidden');


            $('input[type=radio][name=caravan-inspection]').on('change', function () {

                $('#sellerAdditionalInsepectionInfo').removeClass('hidden');
                $('#sellerAdditionalInsepectionInfo').addClass('block');

                // $('.add-next-btn').prop("disabled", false);

                $(".fees-check__fild--amount").val($("input[type='radio'][name='caravan-inspection']:checked").val());


                // Inspection fees
                $('#prePurchaseInspectionFees').removeClass('hidden');
                $('#prePurchaseInspectionFees').addClass('block');

                $('input[type=radio][name=pre-inspection-fees-payer]').on('change', function () {

                    $('.add-next-btn').prop("disabled", false);

                });

            });
            $('.add-next-btn').prop("disabled", true);
            break;

            // default:
            //     $('input[name=seller-boat-size]').prop("checked", false);
            //     $('input[name=engine-type]').prop("checked", false);
    }
});





/*======================
*
*   TRANSPORT PAGE
*
=======================*/


$('input[name=seller-transport-service]').prop("checked", false);
$('input[name=seller-require-service]').prop("checked", false);
$('input[name=seller-settlement-fees-payer').prop("checked", false);



$(document).ready(function () {

    // Add disabled attribute to the payment button
    $('.add-next-btn').prop("disabled", true);

    $('input[type=radio][name=seller-transport-service]').click('change', function () {
        //alert($('input[type=radio][name=seller-transport-service]:checked').val());

        $('#sellerRequireServiceSection').removeClass('hidden');
        $('#sellerRequireServiceSection').addClass('block');

        //$('input[name=seller-require-service]').prop("checked", false);

        // $('#sellerThanksSection').removeClass('block');
        // $('#sellerThanksSection').addClass('hidden');

        // Add disabled attribute to the payment button
        //$('.proceed-payment').prop("disabled", true);
    });


    $('input[type=radio][name=seller-require-service]').on('change', function () {

        //alert($('input[type=radio][name=seller-require-service]:checked').val());

        $('#transportSafeSettlementFees').removeClass('hidden');
        $('#transportSafeSettlementFees').addClass('block');

    });

    $('input[type=radio][name=seller-settlement-fees-payer]').on('change', function () {

        $('#sellerThanksSection').removeClass('hidden');
        $('#sellerThanksSection').addClass('block');

        // Remove disabled attribute from next button
        $('.add-next-btn').prop("disabled", false);
    });

});




/*======================
*
*   FINANCE PAGE
*
=======================*/

$('input[name=vechicle-finance]').prop("checked", false);
// Add disabled attribute to the proceed button
$('.proceed__btn').prop("disabled", true);


$(document).ready(function () {
    $('input[type=radio][name=vechicle-finance]').click('change', function () {

        // Remove disabled attribute to the proceed button
        $('.proceed__btn').prop("disabled", false);

    });
});
