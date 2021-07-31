<?php

namespace App\Providers;

use App\Billing\BankPaymentGateway;
use App\Billing\CreditPaymentGateway;
use App\Billing\PaymentGateway;
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
        // $this->app->bind(PaymentGateway::class, function ($app) {
        //     return new PaymentGateway('usd');
        // });
        // $this->app->singleton(PaymentGateway::class, function ($app) {
        //     return new PaymentGateway('usd');
        // });
        // $this->app->singleton(PaymentGateway::class, function ($app) {
        //     return new BankPaymentGateway('usd');
        // });
        $this->app->singleton(PaymentGateway::class, function ($app) {
            return new CreditPaymentGateway('usd');
        });
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
