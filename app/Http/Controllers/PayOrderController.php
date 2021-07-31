<?php

namespace App\Http\Controllers;

use App\Billing\BankPaymentGateway;
use App\Billing\CreditPaymentGateway;
use App\Billing\PaymentGateway;
use App\Orders\OrderDetails;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    public function store()
    {
        $paymentGateway = new PaymentGateway('usd');
        dd($paymentGateway->charge(2500));
    }

    public function store1(OrderDetails $orderDetails, PaymentGateway $paymentGateway, Request $request)
    {
        $paymentMethod = $request->method ?: 'bank';
        if ($paymentMethod == 'bank') {
            app()->singleton(PaymentGateway::class, function ($app) {
                return new BankPaymentGateway('usd');
            });
        } else {
            app()->singleton(PaymentGateway::class, function ($app) {
                return new CreditPaymentGateway('usd');
            });
        }

        $paymentGateway = app()->make(PaymentGateway::class);
        $order = $orderDetails->all();
        dd($paymentGateway->charge(2500));
    }
}
