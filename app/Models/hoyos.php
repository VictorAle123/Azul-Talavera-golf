<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class hoyos extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','hoyo'


    ];

    // public function Zones()
	// {
	// 	return $this->belongsTo('App\Models\Zone','id');
	// }

    // public function States()
	// {
	// 	return $this->belongsTo('App\Models\States','id');
	// }



}
