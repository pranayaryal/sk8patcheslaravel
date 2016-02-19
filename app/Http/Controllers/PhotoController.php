<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddPhotoRequest;
class PhotoController extends Controller
{
    public function store($id, AddPhotoRequest $request)
    {

        $photo = Photo::fromFile($request->file('file'));

        //$photo = $this->makePhoto($request->file('file'));
//        Flyer::locatedAt($id)->addPhotos($photo);

    }
}
