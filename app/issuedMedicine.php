<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class issuedMedicine extends Model
{
    public function treatments(){
        return $this->belongsTo('App\Treatment');
    }
}
