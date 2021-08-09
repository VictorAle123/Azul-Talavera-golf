<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class partida extends Model
{
    //
    protected $fillable = [

    'id','id_jugador','id_hoyos'

    ];

    public function usuario()
	{
		return $this->belongsTo('App\User','id');

	}

}
