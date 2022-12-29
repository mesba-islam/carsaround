<?php

use App\Http\Controllers\Order\BuyingController;
use App\Http\Controllers\OTPController;
use App\Http\Controllers\Order\ArchiveController;
use App\Http\Controllers\Order\SellingController;
use App\Http\Controllers\Order\TradeDetailsController;
use App\Http\Controllers\TradeController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use Twilio\Rest\Voice\V1\ArchivedCallList;

/*
|----------------------------------------------------------
| Web Routes
|----------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




/*
|----------------------------------------------------------
| Main Pages
|----------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/about-us', function () {
    return view('about_us');
})->name('about_us');

Route::get('/contact-us', function () {
    return view('contact_us');
})->name('contact_us');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/privacy-policy', function () {
    return view('privacy_policy');
})->name('privacy_policy');


// News & Research

Route::controller(NewsController::class)->group(function (){

    Route::get('/news-research', 'NewsArc')->name('news_research');
    Route::get('/news_details/{id}', 'NewsDetails')->name('news_details');
});

// Route::get('/news-research', function () {
//     return view('news_research');
// })->name('news_research');

// Route::get('/news-details', function () {
//     return view('news_details');
// })->name('news_details');



// Service pages
Route::group(['prefix' => 'services'], function () {
    Route::view('/', 'services.index')->name('services');
    Route::view('/safe-settlement', 'services.safe_settlement')->name('safe_settlement');
    Route::view('/pre-purchase-inspection', 'services.pre_purchase_inspection')->name('pre_purchase_inspection');
    Route::view('/vehicle-finance', 'services.vehicle_finance')->name('vehicle_finance');
    Route::view('/vehicle-tranport', 'services.vehicle_tranport')->name('vehicle_tranport');
});



// Legal
Route::get('/legal', function () {
    return view('legal.index');
})->name('legal');

Route::get('/legal/safe-settlement', function () {
    return view('legal._legal_safe_settlement');
})->name('legal-safe-settlement');


// Support
// Route::get('/support', function () {
//     return view('support.index');
// })->name('support');

Route::controller(FaqController::class)->group(function (){
    Route::get('/support', 'Faqcat')->name('support');
    Route::get('/support/category/{id}', 'Allfaq')->name('support-category');
    Route::get('/support/category/{category_id}/details/{id}', 'Faqdetails')->name('support-category-details');
});

// Route::get('/support/category', function () {
//     return view('support._support_category');
// })->name('support-category');

// Route::get('/support/category/details', function () {
//     return view('support._support_details');
// })->name('support-category-details');

Route::get('/support/request', function () {
    return view('support._support_request');
})->name('support-request');



// Community
Route::get('/community', function () {
    return view('community.index');
})->name('community');

Route::get('/community-create', function () {
    return view('community.community_create');
})->name('community_create');

Route::get('/community-details', function () {
    return view('community.community_details');
})->name('community_details');




// Product Form Page
Route::get('product', function () {
    return view('product-form');
});





/*
|----------------------------------------------------------
| Login & Register
|----------------------------------------------------------
*/

Route::post('/get-otp', [OTPController::class, 'getOTP'])->name('get-otp');

Route::get('/verify-otp', function () {
    return view('dashboard.user.auth.auth_otp');
})->name('send_otp');

Route::get('/register', function () {
    return view('dashboard.user.auth.register');
})->name('register');


/*
|----------------------------------------------------------
| User Dashboard
|----------------------------------------------------------
*/
Route::group(['middleware' => ['auth', 'non-admin-user']], function () {

    Route::view('/dashboard', 'dashboard.user.index')->name('dashboard');

    Route::group(['prefix' => 'orders'], function () {

        Route::get('/buying', [BuyingController::class, 'index'])->name('order.buying');
        Route::get('/selling', [SellingController::class, 'index'])->name('order.selling');
        Route::get('/archive', [ArchiveController::class, 'index'])->name('order.archive');

        /*
        |----------------------------------------------------------
        | Trade details
        |----------------------------------------------------------
        */
        Route::get('/{trade:key}', [TradeDetailsController::class, 'show'])->name('order.trade.show');
        Route::get('/{trade:key}/inspection', [TradeDetailsController::class, 'showInspection'])->name('order.trade.inspection.show');
        Route::get('/{trade:key}/finance', [TradeDetailsController::class, 'showFinance'])->name('order.trade.finance.show');
        Route::get('/{trade:key}/safe-settlement', [TradeDetailsController::class, 'showSafeSettlement'])->name('order.trade.safe-settlement.show');
        Route::get('/{trade:key}/transport', [TradeDetailsController::class, 'showTransport'])->name('order.trade.transport.show');

    });

    // Payment
    Route::group(['prefix' => 'payment'], function () {
        Route::view('/', 'dashboard.user.payment._saved_payment')->name('payment');
        Route::view('/update', 'dashboard.user.payment._update_payment')->name('payment-update');
    });

    // Account Settings
    Route::group(['prefix' => 'account'], function () {
        Route::view('/', 'dashboard.user.account.index')->name('settings');
        Route::view('/update', 'dashboard.user.account.update_account')->name('account_update');
    });

    Route::view('/notifications', 'dashboard.user.notifications')->name('notifications');
    // Route::view('/account-settings', 'dashboard.user.account.index')->name('settings');
    Route::view('/faq', 'dashboard.user.faq')->name('faq');
    Route::view('/conact-support', 'dashboard.user.support')->name('conact_support');
});



// route written by Abd Maruf
Route::get('/trade/create', [TradeController::class, 'create'])->name('trade.create');



