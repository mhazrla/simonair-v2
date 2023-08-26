<?php

namespace App\Providers;

use App\Models\Dashboard;
use App\Models\Logdata;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        view()->composer(
            'components.sidebar.content',
            function ($view) {
                $view->with('dashboard', Logdata::with('dashboard')->distinct()->get('alat_id'));
            }
        );
    }
}
