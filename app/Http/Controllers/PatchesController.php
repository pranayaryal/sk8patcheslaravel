<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Patches;
use App\Http\Controllers\Controller;

class PatchesController extends Controller
{

    public function index()
    {
        $patches = Patches::all()->get();
    }
}
