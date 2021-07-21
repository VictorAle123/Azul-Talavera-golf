<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImagenController extends Controller
{
    //
    public function store(Request $request)
    {
    if($request->hasfile('image')) {

        $path = $request->image->store('public');
        Image::create(['path => $path']);

    }


}


}