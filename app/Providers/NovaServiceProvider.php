<?php

namespace App\Providers;

use App\Nova\Post;
use App\Nova\Category;
use App\Nova\Tag;
use App\Nova\Faq;
use App\Nova\CategoryFaq;
use App\Nova\Trade;
use App\Nova\User;
use Illuminate\Http\Request;
use Laravel\Nova\Dashboards\Main;
use Laravel\Nova\Menu\Menu;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Nova::createUserUsing(function ($command) {
            return [
                $command->ask('Name'),
                $command->ask('Email Address'),
                $command->secret('Password'),
            ];
        }, function ($name, $email, $password) {
            (new User())->forceFill([
                'name'              => $name,
                'email'             => $email,
                'password'          => Hash::make($password),
                'email_verified_at' => now(),
                'phone_no'          => now(),
            ])->save();
        });

        Nova::userTimezone(function (Request $request) {
            return $request->user()->timezone;
        });

        Nova::mainMenu(function (Request $request) {
            return [
                MenuSection::dashboard(Main::class)->icon('server'),
                // MenuSection::resources(Resource::class)->icon('chart-bar'),

                MenuSection::make('Resources', [
                    MenuItem::resource(User::class),
                    MenuItem::resource(Trade::class),
                ])->icon('user')->collapsable(),

                MenuSection::make('News & Research', [
                    MenuItem::resource(Post::class),
                    MenuItem::resource(Category::class),
                    MenuItem::resource(Tag::class),
                ])->icon('document-text')->collapsable(),

                MenuSection::make('Support', [
                    MenuItem::resource(Faq::class),
                    MenuItem::resource(CategoryFaq::class),
                    // MenuItem::resource(Tag::class),
                ])->icon('document-text')->collapsable(),
            ];
        });
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            \Vyuldashev\NovaPermission\NovaPermissionTool::make(),
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
