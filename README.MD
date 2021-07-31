1.SERVICE CONTAINER

2.MACRO https://www.youtube.com/watch?v=S8nz1JqbT9M
    check web.php and appserviceprovide boot
3.MIXINS https://www.youtube.com/watch?v=S8nz1JqbT9M
    check web.php and appserviceprovide boot

3.Service Container single and bind and interface
-----------------------------------------------

php artisan make:controller PayOrderController

https://www.youtube.com/watch?v=_z9nzEUgro4
https://www.youtube.com/watch?v=EuhpCA9x-Po for app()->singleton(PaymentGateway::class, function ($app) {
                return new CreditPaymentGateway('usd');
            });

check Appserviceprovider register method uncomment those check passing class for first single tons closure function we can pass BankPaymentGateway/CreditPaymentGateway