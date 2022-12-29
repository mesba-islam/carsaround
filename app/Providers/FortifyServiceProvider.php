<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Models\PinToken;
use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for('login', function (Request $request) {
            $phone_no = (string) $request->phone_no;

            return Limit::perMinute(5)->by($phone_no.$request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });

        Fortify::loginView(function () {
            return view('dashboard.user.auth.login');
        });




        Fortify::authenticateUsing(function (Request $request) {
            $user = User::where('phone_no', $request->phone_no)->first();

            if ($user) {
                if ($request->password == env('TEST_OTP')) {

                    $user->phone_verified_at = now();
                    $user->save();

                    return $user;
                } else {

                    $token_info = PinToken::where('phone_no', $request->phone_no)
                            ->whereDate('expired_at', '>=', now())
                            ->where('has_used', 0)
                            ->latest('expired_at')
                            ->first();

                    // has token action
                    if ($token_info) {

                        $token_info->has_used = 1;
                        $token_info->save();

                        $user->phone_verified_at = now();
                        $user->save();

                        return $user;
                    }
                }
            }

            // if ($user && ($request->password == env('TEST_OTP')) ) {
            //     return $user;
            // }
        });
    }
}
