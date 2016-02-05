<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Patches;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PatchesController extends Controller
{

    public function index()
    {
        $patches = Patches::all()->get();
    }

    public function contact(Request $request)
    {
        if (Auth::guest())
        {
            flash()->overlay('Hi', 'You might have to sign up');
        }


    }

}