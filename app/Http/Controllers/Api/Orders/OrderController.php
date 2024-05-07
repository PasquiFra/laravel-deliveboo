<?php

namespace App\Http\Controllers\Api\Orders;

use App\Http\Controllers\Controller;
use App\Http\Requests\Orders\OrderRequest;
use App\Models\Dish;
use Braintree\Gateway;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function generate(Request $request, Gateway $gateway)
    {
        //Generazione del token da restituire al Client
        $token = $gateway->clientToken()->generate();
        $data = [
            'token' => $token
        ];
        return response()->json($data, 200);
    }

    public function makePayment(Request $request, Gateway $gateway)
    {
        // Valido i campi che mi arrivano dal frontend nella request
        $request->validate(
            [
                'restaurant_id' => 'required|string',
                'name' => 'required|string|min:3',
                'lastname' => 'required|string|min:3',
                'address' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|min:10|max:10',
                'cart_dishes' => 'required|array',
                'payment_method_nonce' => 'required',
                'card_number' => 'required|string|digits:16',
                'card_expire_date' => 'required|string'
            ],
            [
                'restaurant_id.required' => 'Campo obbligatorio',
                'name.required' => 'Campo obbligatorio',
                'name.min' => 'Il nome deve avere almeno :min caratteri',
                'lastname.required' => 'Campo obbligatorio',
                'lastname.min' => 'Il nome deve avere almeno :min caratteri',
                'address.required' => 'Campo obbligatorio',
                'email.required' => 'Campo obbligatorio',
                'email.email' => 'Inserire una mail valida',
                'phone_number.required' => 'Campo obbligatorio',
                'phone_number.min' => 'Il numero avere :min cifre',
                'phone_number.max' => 'Il numero avere :max cifre',
                'card_number.required' => 'Campo obbligatorio',
                'card_number.digits' => 'Il numero carta deve essere di :digits cifre',
                'card_expire_date.required' => 'Campo obbligatorio',
            ]
        );

        // Elaborazione e validazione dei parametri dell'ordine
        $result = $gateway->transaction()->sale([
            'amount' => $request->total, //! DA INSERIRE IL TOTALE DELL'ORDINE (possibilmente calcolato nel back)
            'paymentMethodNonce' => $request->token,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        //Restituzione dell'esito della transazione
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
