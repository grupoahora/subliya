<?php

namespace App\Providers;

use App\Models\Design;
use Illuminate\Support\ServiceProvider;

class DesignsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            "*",
            function ($view) {
                /* $designsweb = Design::paginate(15);
                $view->with('designsweb', $designsweb); */
            }
        );
    }
}
