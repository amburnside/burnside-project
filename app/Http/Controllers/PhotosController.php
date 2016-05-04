<?php

namespace App\Http\Controllers;

use App\Flyer;
use App\Http\Requests;
use App\AddPhotoToFlyer;
use App\Http\Requests\AddPhotoRequest;

class PhotosController extends Controller
{
    /**
     * @param $postcode
     * @param $street
     * @param AddPhotoRequest $request
     */
    public function store($postcode, $street, AddPhotoRequest $request) {

        $flyer = Flyer::locatedAt($postcode, $street);
        $photo = $request->file('photo');

        (new AddPhotoToFlyer($flyer, $photo))->save();
    }
}
