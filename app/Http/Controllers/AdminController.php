<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Patch;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\AddPhotoRequest;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class AdminController extends Controller
{
    protected $layout = 'pages/admin';

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return $this->displayAllPatches();
    }

    public function create()
    {
        return view('patches.create');
    }


    //Using Laravel 5.2 implicit route model binding.
    public function show(Patch $patch)
    {
        return view ('patches.show', compact(''));
    }

    public function update(Patch $patch, Request $request)
    {


        $patch->update($request->all());

        return $this->displayAllPatches();

    }

    public function store(AddPhotoRequest $request)
    {

        $photo = Photo::fromFile($request->file('file'));

        dd($photo);
    }


    public function storePatch(Request $request)
    {
        $patch = new Patch();

        $patch->create($request->all());

        return $this->displayAllPatches();



    }
    public function edit(Patch $patch)
    {
        return view('patches.edit', compact('patch'));
    }

    public function destroy(Patch $patch)
    {
        $patch->delete();

        return $this->displayAllPatches();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    protected function displayAllPatches()
    {
        $patches = Patch::latest('updated_at')->get();

        return view($this->layout, compact('patches'));
    }


}
