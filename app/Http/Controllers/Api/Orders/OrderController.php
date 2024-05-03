<?php

namespace App\Http\Controllers\Api\Orders;

use App\Http\Controllers\Controller;
use Braintree\Gateway;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function generate(Request $request, Gateway $gateway)
    {
        dd($gateway->clientToken());
        return 'generate';
    }

    public function makePayment(Request $request)
    {
        return 'make payment';
    }
}
