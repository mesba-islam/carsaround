
/*
*
*
* Buyer Channel will conduct from here.
*
*/




// Add disabled attribute
$('.add-next-btn').prop("disabled", true);


// SAFE SETTLEMENT PAGE

// Calculate fees
function calculateFees(){
    var requireAmount = document.getElementById('safe-settlement-amount').value;
    var feesAmount = document.querySelector('.fees-check__fild');
    var feesSection = document.getElementById('safeSettlementFees');

    // Error Message
    var errorMsg = document.getElementById('error-msg');


    var regex=/^[0-9]+$/;
    errorMsg.classList.remove('block');
    errorMsg.classList.add('hidden');

    if (!requireAmount.match(regex) || requireAmount.length == 0 || requireAmount == 0){
        errorMsg.innerHTML = 'Must contains a valid number';
        errorMsg.classList.remove('hidden');
        errorMsg.classList.add('block');

        feesSection.classList.remove('block');
        feesSection.classList.add('hidden');


        // Add disabled attribute
        $('.add-next-btn').prop("disabled", true);
    }
    else if(requireAmount >= 1 && requireAmount <= 10000){

        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$195';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", false);
    }
    else if(requireAmount >= 10001 && requireAmount <= 20000){
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$295';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", false);
    }
    else if(requireAmount >= 20001 && requireAmount <= 30000){
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$395';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", false);
    }
    else if(requireAmount >= 30001 && requireAmount <= 40000){
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$495';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", false);
    }
    else if(requireAmount >= 40001 && requireAmount <= 50000){
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$595';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", false);
    }
    else if(requireAmount >= 50001 && requireAmount <= 60000){
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$695';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", false);
    }
    else if(requireAmount >= 60001 && requireAmount <= 70000){
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$795';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", false);
    }
    else if(requireAmount >= 70001 && requireAmount <= 80000){
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$895';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", false);
    }
    else if(requireAmount >= 80001 && requireAmount <= 100000){
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$995';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", false);
    }
    else if(requireAmount >= 100001 && requireAmount <= 125000){
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$1195';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", false);
    }
    else if(requireAmount >= 125001 && requireAmount <= 150000){
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$1495';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", false);
    }
    else if(requireAmount >= 151001 && requireAmount <= 200000){
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$1795';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", false);
    }
    else if(requireAmount >= 200001 && requireAmount <= 250000){
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$1995';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", false);
    }
    else if(requireAmount >= 250001 && requireAmount <= 300000){
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$2495';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", false);
    }
    else if(requireAmount >= 350001 && requireAmount <= 400000){
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$3995';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", false);
    }
    else if(requireAmount >= 400001 && requireAmount <= 500000){
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$5495';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", false);
    }
    else if(requireAmount >= 500001 && requireAmount <= 600000){
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$6995';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", false);
    }
    else if(requireAmount >= 600001 && requireAmount <= 700000){
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$7995';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", false);
    }
    else if(requireAmount >= 700001 && requireAmount <= 800000){
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$8995';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", false);
    }
    else if(requireAmount >= 800,001 && requireAmount <= 800000){
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$9995';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", false);
    }
    else if(requireAmount >= 900001 && requireAmount <= 1000000){
        feesSection.classList.remove('hidden');
        feesSection.classList.add('block');
        feesAmount.value = '$11995';

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", false);
    }
    else{
        errorMsg.innerHTML = 'Transaction range $1 - $1M';

        errorMsg.classList.remove('hidden');
        errorMsg.classList.add('block');

        feesSection.classList.remove('block');
        feesSection.classList.add('hidden');

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", true);
    }

}






/*
*
*
* Inspection functionality will conduct from here.
*
*/

$('input[name=vehicle-type]').prop("checked", false);

// Get vehicle type
$('input[type=radio][name=vehicle-type]').on('change', function () {
    switch ($(this).val()) {
        case 'car':

            $('#additionalInsepectionInfo').removeClass('hidden');
            $('#additionalInsepectionInfo').addClass('block');

            $(".fees-check__fild--amount").val("$300");


            // Boat Size Section
            $('#boat-size-section').removeClass('block');
            $('#boat-size-section').addClass('hidden');

            // Boat Engine Section
            $('#small-boat-engine-section').removeClass('block');
            $('#small-boat-engine-section').addClass('hidden');

            // Boat Add Ons Section
            $('#small-boat-add-ons-section').removeClass('block');
            $('#small-boat-add-ons-section').addClass('hidden');

            // Inspection Fees
            $('#smallBoatInspectionFee').removeClass('block');
            $('#smallBoatInspectionFee').addClass('hidden');


            // Remove Larger Boat Type
            $('input[name=boat-type]').prop("checked", false);
            $('input[name=fuel-type]').prop("checked", false);

            $('#largerBoatTypeSection').removeClass('block');
            $('#largerBoatTypeSection').addClass('hidden');
            $('#fuelTypeSection').removeClass('block');
            $('#fuelTypeSection').addClass('hidden');
            $('#largerBoatInspectionFeeSection').removeClass('block');
            $('#largerBoatInspectionFeeSection').addClass('hidden');

            // Caravan
            $('input[name=caravan-inspection]').prop("checked", false);
            $('#caravanInspectionSection').removeClass('block');
            $('#caravanInspectionSection').addClass('hidden');


            // Clear Boat/Caravan checked values
            $('input[name=boat-size]').prop("checked", false);
            $('input[name=engine-type]').prop("checked", false);
            $('input[name=add-ons]').prop("checked", false);

            // Add disabled attribute
            $('.add-next-btn').prop("disabled", false);

            break;
        case 'bike':
            $('#additionalInsepectionInfo').removeClass('hidden');
            $('#additionalInsepectionInfo').addClass('block');

            $(".fees-check__fild--amount").val("$100");


            // Boat Size Section
            $('#boat-size-section').removeClass('block');
            $('#boat-size-section').addClass('hidden');

            // Boat Engine Section
            $('#small-boat-engine-section').removeClass('block');
            $('#small-boat-engine-section').addClass('hidden');

            // Boat Add Ons Section
            $('#small-boat-add-ons-section').removeClass('block');
            $('#small-boat-add-ons-section').addClass('hidden');

            // Inspection Fees
            $('#smallBoatInspectionFee').removeClass('block');
            $('#smallBoatInspectionFee').addClass('hidden');

            // Remove Larger Boat Type
            $('input[name=boat-type]').prop("checked", false);
            $('input[name=fuel-type]').prop("checked", false);

            $('#largerBoatTypeSection').removeClass('block');
            $('#largerBoatTypeSection').addClass('hidden');
            $('#fuelTypeSection').removeClass('block');
            $('#fuelTypeSection').addClass('hidden');
            $('#largerBoatInspectionFeeSection').removeClass('block');
            $('#largerBoatInspectionFeeSection').addClass('hidden');

            // Caravan
            $('input[name=caravan-inspection]').prop("checked", false);
            $('#caravanInspectionSection').removeClass('block');
            $('#caravanInspectionSection').addClass('hidden');


            // Clear Boat checked values
            $('input[name=boat-size]').prop("checked", false);
            $('input[name=engine-type]').prop("checked", false);
            $('input[name=add-ons]').prop("checked", false);

            // Add disabled attribute
            $('.add-next-btn').prop("disabled", false);

            break;

        case 'boat':

            $('input[name=boat-size]').prop("checked", false);
            $('#additionalInsepectionInfo').removeClass('block');
            $('#additionalInsepectionInfo').addClass('hidden');

            // Caravan
            $('input[name=caravan-inspection]').prop("checked", false);
            $('#caravanInspectionSection').removeClass('block');
            $('#caravanInspectionSection').addClass('hidden');

            $('#boat-size-section').removeClass('hidden');
            $('#boat-size-section').addClass('block');




            // Displaying Boat Size
            $('input[type=radio][name=boat-size]').on('change', function () {
                switch ($(this).val()) {
                    case '6-meters':
                    case '6-8-meters':

                        $('#single-outboard-list').show();

                        // Remove Larger Boat Type
                        $('input[name=boat-type]').prop("checked", false);
                        $('input[name=fuel-type]').prop("checked", false);

                        $('#largerBoatTypeSection').removeClass('block');
                        $('#largerBoatTypeSection').addClass('hidden');
                        $('#fuelTypeSection').removeClass('block');
                        $('#fuelTypeSection').addClass('hidden');
                        $('#largerBoatInspectionFeeSection').removeClass('block');
                        $('#largerBoatInspectionFeeSection').addClass('hidden');

                        //alert($("input[type='radio'][name='boat-size']:checked").val());


                        $('#small-boat-engine-section').removeClass('hidden');
                        $('#small-boat-engine-section').addClass('block');


                        //$('input[name=engine-type]').prop("checked", false);

                        $('input[type=radio][name=engine-type]').on('change', function () {

                            //alert($("input[type='radio'][name='engine-type']:checked").val());

                            $('#small-boat-add-ons-section').removeClass('hidden');
                            $('#small-boat-add-ons-section').addClass('block');

                            $('input[type=radio][name=add-ons]').on('change', function () {

                                //alert($("input[type='radio'][name='add-ons']:checked").val());

                                $('#smallBoatInspectionFee').removeClass('hidden');
                                $('#smallBoatInspectionFee').addClass('block');

                                // Add disabled attribute
                                $('.add-next-btn').prop("disabled", false);

                                $('.fees-check__fild--amount--smallBoat').val($("input[type='radio'][name='engine-type']:checked").val() + $("input[type='radio'][name='add-ons']:checked").val());
                            });

                            // $('#small-boat-add-ons-section').removeClass('block');
                            // $('#small-boat-add-ons-section').addClass('hidden');

                            $('input[name=add-ons]').prop("checked", false);


                            $('#smallBoatInspectionFee').removeClass('block');
                            $('#smallBoatInspectionFee').addClass('hidden');

                        });

                        $('input[name=engine-type]').prop("checked", false);
                        $('input[name=add-ons]').prop("checked", false);


                        $('#smallBoatInspectionFee').removeClass('block');
                        $('#smallBoatInspectionFee').addClass('hidden');

                        $('#small-boat-add-ons-section').removeClass('block');
                        $('#small-boat-add-ons-section').addClass('hidden');

                        // Add disabled attribute
                        $('.add-next-btn').prop("disabled", true);



                        break;
                    case '8-10-meters':


                        // if ($("input[type='radio'][name='engine-type']:checked").val() === 'single-outboard') {
                        //     $("input[type='radio'][name='engine-type']:checked").val().css('display', 'none');
                        // }

                        $('#single-outboard-list').hide();


                        // Remove Larger Boat Type
                        $('input[name=boat-type]').prop("checked", false);
                        $('input[name=fuel-type]').prop("checked", false);

                        $('#largerBoatTypeSection').removeClass('block');
                        $('#largerBoatTypeSection').addClass('hidden');
                        $('#fuelTypeSection').removeClass('block');
                        $('#fuelTypeSection').addClass('hidden');
                        $('#largerBoatInspectionFeeSection').removeClass('block');
                        $('#largerBoatInspectionFeeSection').addClass('hidden');

                        $('#small-boat-engine-section').removeClass('hidden');
                        $('#small-boat-engine-section').addClass('block');


                        //$('input[name=engine-type]').prop("checked", false);

                        $('input[type=radio][name=engine-type]').on('change', function () {

                            //alert($("input[type='radio'][name='engine-type']:checked").val());

                            $('#small-boat-add-ons-section').removeClass('hidden');
                            $('#small-boat-add-ons-section').addClass('block');

                            $('input[type=radio][name=add-ons]').on('change', function () {

                                //alert($("input[type='radio'][name='add-ons']:checked").val());

                                $('#smallBoatInspectionFee').removeClass('hidden');
                                $('#smallBoatInspectionFee').addClass('block');

                                // Add disabled attribute
                                $('.add-next-btn').prop("disabled", false);

                                $('.fees-check__fild--amount--smallBoat').val($("input[type='radio'][name='engine-type']:checked").val() + $("input[type='radio'][name='add-ons']:checked").val());
                            });

                            // $('#small-boat-add-ons-section').removeClass('block');
                            // $('#small-boat-add-ons-section').addClass('hidden');

                            $('input[name=add-ons]').prop("checked", false);


                            $('#smallBoatInspectionFee').removeClass('block');
                            $('#smallBoatInspectionFee').addClass('hidden');
                            // Add disabled attribute
                            $('.add-next-btn').prop("disabled", true);

                        });
                        $('input[name=engine-type]').prop("checked", false);

                        $('#small-boat-add-ons-section').removeClass('block');
                        $('#small-boat-add-ons-section').addClass('hidden');

                        $('#smallBoatInspectionFee').removeClass('block');
                        $('#smallBoatInspectionFee').addClass('hidden');

                        // Add disabled attribute
                        $('.add-next-btn').prop("disabled", true);

                        break;




                    case '10-meters':

                        // Boat Engine Section
                        $('#small-boat-engine-section').removeClass('block');
                        $('#small-boat-engine-section').addClass('hidden');

                        // Boat Add Ons Section
                        $('#small-boat-add-ons-section').removeClass('block');
                        $('#small-boat-add-ons-section').addClass('hidden');

                        // Inspection Fees
                        $('#smallBoatInspectionFee').removeClass('block');
                        $('#smallBoatInspectionFee').addClass('hidden');


                        // // Clear Boat checked values
                        // $('input[name=boat-size]').prop("checked", false);
                        // $('input[name=engine-type]').prop("checked", false);
                        // $('input[name=add-ons]').prop("checked", false);



                        //alert($("input[type='radio'][name='boat-size']:checked").val());

                        $('#largerBoatTypeSection').removeClass('hidden');
                        $('#largerBoatTypeSection').addClass('block');


                        $('input[type=radio][name=boat-type]').on('change', function () {

                            //alert($("input[type='radio'][name='boat-type']:checked").val());

                            $('#fuelTypeSection').removeClass('hidden');
                            $('#fuelTypeSection').addClass('block');

                            // $('.fees-check__fild--amount--smallBoat').html($("input[type='radio'][name='engine-type']:checked").val() + $("input[type='radio'][name='add-ons']:checked").val());
                        });

                        $('input[type=radio][name=fuel-type]').on('change', function () {

                            //alert($("input[type='radio'][name='fuel-type']:checked").val());

                            $('#largerBoatInspectionFeeSection').removeClass('hidden');
                            $('#largerBoatInspectionFeeSection').addClass('block');

                            // Add disabled attribute
                            $('.add-next-btn').prop("disabled", false);

                            // $('.fees-check__fild--amount--smallBoat').html($("input[type='radio'][name='engine-type']:checked").val() + $("input[type='radio'][name='add-ons']:checked").val());
                        });

                        // Add disabled attribute
                        $('.add-next-btn').prop("disabled", true);

                        break;

                    }
                    // Add disabled attribute
                    $('.add-next-btn').prop("disabled", true);

            });
                            // Add disabled attribute
                            $('.add-next-btn').prop("disabled", true);
            break;

        case 'caravan':

            $('#additionalInsepectionInfo').removeClass('block');
            $('#additionalInsepectionInfo').addClass('hidden');

            $('#caravanInspectionSection').removeClass('hidden');
            $('#caravanInspectionSection').addClass('block');

            // Boat Size Section
            $('#boat-size-section').removeClass('block');
            $('#boat-size-section').addClass('hidden');

            // Boat Engine Section
            $('#small-boat-engine-section').removeClass('block');
            $('#small-boat-engine-section').addClass('hidden');

            // Boat Add Ons Section
            $('#small-boat-add-ons-section').removeClass('block');
            $('#small-boat-add-ons-section').addClass('hidden');

            // Inspection Fees
            $('#smallBoatInspectionFee').removeClass('block');
            $('#smallBoatInspectionFee').addClass('hidden');


            // Clear Boat checked values
            $('input[name=boat-size]').prop("checked", false);
            $('input[name=engine-type]').prop("checked", false);
            $('input[name=add-ons]').prop("checked", false);


            // Remove Larger Boat Type
            $('input[name=boat-type]').prop("checked", false);
            $('input[name=fuel-type]').prop("checked", false);

            $('#largerBoatTypeSection').removeClass('block');
            $('#largerBoatTypeSection').addClass('hidden');
            $('#fuelTypeSection').removeClass('block');
            $('#fuelTypeSection').addClass('hidden');
            $('#largerBoatInspectionFeeSection').removeClass('block');
            $('#largerBoatInspectionFeeSection').addClass('hidden');


            $('input[type=radio][name=caravan-inspection]').on('change', function () {

                $('#additionalInsepectionInfo').removeClass('hidden');
                $('#additionalInsepectionInfo').addClass('block');

                // Add disabled attribute
                $('.add-next-btn').prop("disabled", false);

                $(".fees-check__fild--amount").val($("input[type='radio'][name='caravan-inspection']:checked").val());

            });
            // Add disabled attribute
            $('.add-next-btn').prop("disabled", true);
            break;

    }
    // // Add disabled attribute
    // $('.add-next-btn').prop("disabled", true);
});











// FINANCE PAGE
jQuery(document).ready(function($){
    $('input[name=residential-status]').prop("checked", false);


    $('input[type=radio][name=residential-status]').on('change', function () {
        //alert($('input[type=radio][name=residential-status]:checked').val());

        $('#currentAddressSection').removeClass('hidden');
        $('#currentAddressSection').addClass('block');


        $('input[name=current-address]').prop("checked", false);
        $('input[name=employment-status]').prop("checked", false);
        $('input[name=residency-status]').prop("checked", false);
        $('input[name=credit-score]').prop("checked", false);

        $('#residencyStatusSection').removeClass('block');
        $('#residencyStatusSection').addClass('hidden');
        $('#creditScoreSection').removeClass('block');
        $('#creditScoreSection').addClass('hidden');
        $('#estimatedSection').removeClass('block');
        $('#estimatedSection').addClass('hidden');

        // Add disabled attribute
        $('.add-next-btn').prop("disabled", true);

        $('input[type=radio][name=current-address]').on('change', function () {
            //alert($('input[type=radio][name=current-address]:checked').val());

            $('input[name=employment-status]').prop("checked", false);
            $('input[name=credit-score]').prop("checked", false);

            $('#employmentStatusSection').removeClass('hidden');
            $('#employmentStatusSection').addClass('block');



            $('#residencyStatusSection').removeClass('block');
            $('#residencyStatusSection').addClass('hidden');
            $('#creditScoreSection').removeClass('block');
            $('#creditScoreSection').addClass('hidden');
            $('#estimatedSection').removeClass('block');
            $('#estimatedSection').addClass('hidden');

            // Add disabled attribute
            $('.add-next-btn').prop("disabled", true);

        });

        $('#employmentStatusSection').removeClass('block');
        $('#employmentStatusSection').addClass('hidden');


        $('input[type=radio][name=employment-status]').on('change', function () {
            //alert($('input[type=radio][name=employment-status]:checked').val());

            $('input[name=residency-status]').prop("checked", false);
            $('input[name=credit-score]').prop("checked", false);

            $('#creditScoreSection').removeClass('block');
            $('#creditScoreSection').addClass('hidden');
            $('#estimatedSection').removeClass('block');
            $('#estimatedSection').addClass('hidden');

            $('#residencyStatusSection').removeClass('hidden');
            $('#residencyStatusSection').addClass('block');
            // Add disabled attribute
            $('.add-next-btn').prop("disabled", true);

        });


        $('input[type=radio][name=residency-status]').on('change', function () {
            //alert($('input[type=radio][name=residency-status]:checked').val());

            $('input[name=credit-score]').prop("checked", false);
            $('#estimatedSection').removeClass('block');
            $('#estimatedSection').addClass('hidden');

            $('#creditScoreSection').removeClass('hidden');
            $('#creditScoreSection').addClass('block');
            // Add disabled attribute
            $('.add-next-btn').prop("disabled", true);

        });


        $('input[type=radio][name=credit-score]').on('change', function () {
            //alert($('input[type=radio][name=credit-score]:checked').val());

            $('#estimatedSection').removeClass('hidden');
            $('#estimatedSection').addClass('block');



            // Calculating value depending on choosen answer
            var addResult = parseInt($('input[type=radio][name=residential-status]:checked').val()) + parseInt($('input[type=radio][name=current-address]:checked').val()) + parseInt($('input[type=radio][name=employment-status]:checked').val()) + parseInt($('input[type=radio][name=residency-status]:checked').val()) + parseInt($('input[type=radio][name=credit-score]:checked').val())


            //alert(addResult);


            // Estimated the loan percentage
            if (addResult >= 49) {
                $('.percentage-fees-check__fild').html('2.99%-4.49%');
            }
            else if (addResult >= 39 && addResult < 49) {
                $('.percentage-fees-check__fild').html('4.50%-6.95%');
            }
            else if (addResult >= 29 && addResult < 39) {
                $('.percentage-fees-check__fild').html('6.99%-9.99%');
            }
            else if (addResult >= 19 && addResult < 29) {
                $('.percentage-fees-check__fild').html('10.99%-14.95%');
            }
            else if (addResult >= 10 && addResult < 19) {
                $('.percentage-fees-check__fild').html('14.99%- 19.99%');
            }

            // Remove disabled attribute
            $('.add-next-btn').prop("disabled", false);

        });
    });

});



// TRANSPORT PAGE

$('input[name=transport-service]').prop("checked", false);
$('input[name=require-service]').prop("checked", false);

// Add disabled attribute to the payment button
$('.proceed-payment').prop("disabled", true);

$(document).ready(function () {

    $('input[type=radio][name=transport-service]').click('change', function () {
        //alert($('input[type=radio][name=transport-service]:checked').val());

        $('#requireServiceSection').removeClass('hidden');
        $('#requireServiceSection').addClass('block');

        //$('input[name=require-service]').prop("checked", false);

        // $('#thanksSection').removeClass('block');
        // $('#thanksSection').addClass('hidden');

        // Add disabled attribute to the payment button
        //$('.proceed-payment').prop("disabled", true);
    });


    $('input[type=radio][name=require-service]').on('change', function () {

        //alert($('input[type=radio][name=require-service]:checked').val());

        $('#thanksSection').removeClass('hidden');
        $('#thanksSection').addClass('block');

        // Remove disabled attribute from payment button
        // Make the button enable for the next step
        $('.proceed-payment').prop("disabled", false);

    });


});

