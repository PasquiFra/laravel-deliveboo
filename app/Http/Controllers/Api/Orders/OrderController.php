<?php

namespace App\Http\Controllers\Api\Orders;

use App\Http\Controllers\Controller;
use Braintree\Gateway;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function generate(Request $request, Gateway $gateway)
    {
        $token = $gateway->clientToken()->generate();
        $data = [
            'token' => $token
        ];
        return response()->json($data, 200);
    }

    public function makePayment(Request $request, Gateway $gateway)
    {
        $result = $gateway->transaction()->sale([
            'amount' => '10.00',
            'paymentMethodNonce' => '$request->token',
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        if ($result->success) {
            $data = [
                'success' => true,
                'message' => 'Transazione eseguita con successo'
            ];
            return response()->json($data, 200);
        } else {
            $data = [
                'success' => false,
                'message' => 'Transazione fallita'
            ];
            return response()->json($data, 401);
        }
    }
}
