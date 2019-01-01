<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    public function treatments(){
        return $this->belongsTo('App\Pet');
    }
}
