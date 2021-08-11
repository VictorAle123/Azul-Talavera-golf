<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\partida;
use App\Models\StrokeModel;

class PartidaController extends Controller
{
    //
    public function store(Request $request)
    {

    $request->validate([
        // 'file' => 'required|image|max:2048',
        // 'name' => 'min:3',
        // 'description' => 'min:10',
        // 'price' => 'min:2'
    ]);

    // $photo = $request->file('file')->store('/images');
   
        // dd("tentacles$i");
        
        $partidaa = partida::create([

        
            'id_jugador' => auth()->id(),
              
              ]) ;

             $partidas = partida::get()->find('id', $partidaa->id);
            //  dd($partida);

            return view ('interfaz.createuser.stroke', compact ('partidas'));

}
}
