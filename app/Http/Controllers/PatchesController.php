<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Patch;
use App\User;
use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PatchesController extends Controller
{

    public function index()
    {
        $patches = Patch::all()->get();
    }

    public function contact(Request $request)
    {
//        if (Auth::guest())
//        {
//            flash()->overlay('Hi', 'You might have to sign up');
//        }



        Mail::send('emails.contact',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('comments')
            ), function($message)
            {
                $message->from('drpranayaryal@gmail.com');
                $message->to('drpranayaryal@gmail.com', 'Admin')->subject('Feedback from a customer');
            });

        flash()->overlay('Thanks', 'Your message was sent');

        return view('home');






    }

    public function paypal(Request $request)
    {
        dd($request->all());
        dd($request['hosted_button_id']);
        Session::get('values');

    }

    public function products()
    {
        $product_array = [];
    }

}
