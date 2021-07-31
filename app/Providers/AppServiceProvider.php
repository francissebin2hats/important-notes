<?php

namespace App\Providers;

use App\Mixins\StrMixins;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

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
        Str::macro('preFIxTest', function ($string) {
            return 'From AppServiceProvider Test-' . $string;
        });

        Str::macro('preFIxTestOne', function ($string) {
            return 'From AppServiceProvider Test-' . $string;
        });

        Str::macro('preFIxTestTwo', function ($string) {
            return 'From AppServiceProvider Test-' . $string;
        });

        Str::mixin(new StrMixins());
        // Str::mixin(new StrMixins(), false); //CHECK THIS OUT
    }
}
