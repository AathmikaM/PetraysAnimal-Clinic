<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    public function pets(){
        return $this->belongsTo('App\Pet');
    }

    public function issuedmedicine(){
        return $this->hasMany('App\IssuedMedicine');
    }
}
