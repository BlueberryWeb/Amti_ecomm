<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use App\Models\Productos;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class checkoutController extends Controller
{
    public function __invoke($id){

        
        \Stripe\Stripe::setApiKey('sk_test_51Low5nJFjkWFGhqUuXrzObdBtNyb3hL21lv8WKULmm9pzg6RRJU1z2Ooz76E9TpuxYApRRGILvle12tW1Hj1Drp800zvT4vmTy');
        $pedido = Pedidos::where('id', $id)->first();
        $intent = \Stripe\PaymentIntent::create([

            // "amount" => $pedido->total * 100,
            "amount" => 3700 * 100,
            "currency" => "mxn",
            "payment_method_types" => ["oxxo"]
        ]);
        $secret = $intent->client_secret;


        return view('Flujo.checkout', compact('secret'));
    }
    public function payT(Request $request)
    {
        
            Stripe::setApiKey(config('services.stripe.secret'));
            $token = $request->stripeToken;
            $charge = Charge::create([
                "amount" => $request->total * 100,
                "currency" => "mxn",
                "source" => $request->stripeToken,
                "description" => "Test payment from amti.com."
            ]);
            
            return view('Flujo.success');

    }
}