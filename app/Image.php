<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    // Migracion
    //Schema::create('taras', function (Blueprint $table)
    //$table->string('path');

    protected $fillable = ['path'];

    public function getUrlPathAttribute()
    {
        return \Storage::url($this->path);


    }


}
