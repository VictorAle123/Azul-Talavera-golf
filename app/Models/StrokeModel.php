<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StrokeModel extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','id_hoyo','id_partida','golpe'
        
    ];

    // protected $table = '_hoyos_partida';


    public function partida()
	{
		return $this->belongsTo('App\Models\partida','id');
	}

    
    public function Hoyos()
	{
		return $this->belongsTo('App\Models\hoyos','id');
	}

}
