<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Stripe\Stripe;
use Stripe\Charge;
use App;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StripeChargesController extends Controller
{

    protected function charge(Request $request)
    {


//        Stripe::setApiKey("sk_test_kgqSnqchn19Vya946n5TZDkp");
        $user = App\User::find(1);

        $creditCardToken = $request['stripeToken'];

        $user->charge(100);

        dd('user was charged');





        $user->newSubscription('main', 'monthly')->create($creditCardToken);
//
       dd($user->invoice());
//
//
//        // Get the credit card details submitted by the form
//        $creditCardToken = $request['_token'];




// Create the charge on Stripe's servers - this will charge the user's card
        try {
            $charge = Charge::create(array(
                "amount" => 1000, // amount in cents, again
                "currency" => "usd",
                "source" => $creditCardToken,
                "description" => "Example charge"
            ));
        } catch(\Stripe\Error\Card $e) {
            // The card has been declined
        }

        return view('charging');
    }
}
