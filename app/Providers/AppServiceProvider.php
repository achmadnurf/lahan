<?php

namespace App\Providers;

use Auth;
use Blade;
use Illuminate\Support\ServiceProvider;
use URL;

class AppServiceProvider extends ServiceProvider
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
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }
        Blade::directive('rp', function ($garis_bujur){
            return "Rp. <?php echo number_format($garis_bujur,0,',','.'); ?>";
        });

        Blade::if('role', function ($value){
            $roles = explode("|", $value);
            return in_array(Auth::user()->role, $roles);
        });
    }
}
