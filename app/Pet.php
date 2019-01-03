<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    //Clients DB Relation
    public function clients(){
        return $this->belongsTo('App\PetOwner');
    }

    public function treatments(){
        return $this->hasMany('App\Treatment');
    }

     protected $fillable = ['name','age','weight','species','colour','special_note', 'pet_owner_id'];

}
