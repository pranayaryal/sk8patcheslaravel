<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Stripe\Stripe;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StripeChargesController extends Controller
{

    protected function charge(Request $request)
    {
        dd($request->getSession());

        Stripe::setApiKey("sk_test_kgqSnqchn19Vya946n5TZDkp");

        // Get the credit card details submitted by the form
        $token = $request['stripeToken'];


// Create the charge on Stripe's servers - this will charge the user's card
        try {
            $charge = \Stripe\Charge::create(array(
                "amount" => 1000, // amount in cents, again
                "currency" => "usd",
                "source" => $token,
                "description" => "Example charge"
            ));
        } catch(\Stripe\Error\Card $e) {
            // The card has been declined
        }

        return view('charging');
    }
}
