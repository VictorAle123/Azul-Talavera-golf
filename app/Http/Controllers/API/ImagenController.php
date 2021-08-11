<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class ImagenController extends Controller
{
    //
    public function store(Request $request)
    {
        $input = $request->all();
    if($request->hasfile('image')) {

        $path = $request->image->store('public');
        Image::create(['path => $path']);

    }
    

}


    // public function postNewImage(Request $request)
    // {

    //     $this->validate($request, [
    //         'foto'=> 'required|image'
    //     ]);
    //     $user = Auth::user();
    //     $extension = $request->file('foto') ->getClienteOrigianExtension();
    //     $file_name = $user->id . '.' . $extension;

    //     Image::make($request->file('foto'))
    //     ->resize(114, 144)
    //     ->save('imagenes/' . $file_name);

    //     $user->foto = $extension;
    //     $user->save();

    //     return back()-> with('notification', 'se ha actualizar tu foto de perfil' );

    // }

    public function subir(Request $request)
    {

        $input = $request->all();
        if($request->hasfile('image'))
        {
            $destination_path = 'public/storage/avatars';
            $image = $request->file('imge');
            $image_name = $image->getClienteOName();
            $path = $request->file ('image')->storeAs($destination_path,$image_name);
            $input['image'] = $image_name;

        }

        User::create($input);
    session()->flash('message',$input['title'].'succesfully saved');

    return redirec('/');



        

        $this->validate($request, [
            'foto'=> 'required|image'
        ]);
        $user = Auth::user();
        $extension = $request->file('foto') ->getClienteOrigianExtension();
        $file_name = $user->id . '.' . $extension;

        Image::make($request->file('foto'))
        ->resize(114, 144)
        ->save('imagenes/' . $file_name);

        $user->foto = $extension;
        $user->save();

        return back()-> with('notification', 'se ha actualizar tu foto de perfil' );

    }


    public function getPhotoRouteAttribute()
    {
        if (auth()->foto() != null) 
        
        
        return 'imagenes/sta.jpg'.$this->id.'.'.$this->foto;
        

        return 'imagenes/sta.jpg';

    }

}