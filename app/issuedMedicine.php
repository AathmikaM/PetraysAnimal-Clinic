<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IssuedMedicine extends Model
{
    public function treatments(){
        return $this->belongsTo('App\Treatment');
    }
    protected $fillable = ['treatments_id','type','price'];
}
