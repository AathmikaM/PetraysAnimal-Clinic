<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    //Clients DB Relation
    public function clients(){
        return $this->belongsTo('App\PetOwner');
    }

    public function pets(){
        return $this->hasMany('App\Treatment');
    }
}
