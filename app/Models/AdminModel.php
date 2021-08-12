<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    //

    protected $fillable = [
        'id','name','apellido','email','foto', 'password',
       
    ];

}
