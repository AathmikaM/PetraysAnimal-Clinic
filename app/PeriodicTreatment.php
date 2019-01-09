<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeriodicTreatment extends Model
{
    public function pets(){
        return $this->belongsTo('App\Pet');
    }
}
