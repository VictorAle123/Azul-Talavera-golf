<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\Models\AdminModel;




class AdminController extends Controller

{
    //

    

    public function index()
    {
        //

        $usuarios = User::all();

        return view ("interfaz.createuser.admin", compact('usuarios','usuarios'));

        // dd($usuarios);

        // $partidasJugadas = StrokeModel::get();


    }

    public function usuarios()
    {
        //

        

        // $jugadorees = AdminModel::get()->where('users.id', $Partida->id)->first();
        

    }

   


}
