<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddStock extends Model
{
    protected $fillable = ['name','quantity','unit_price','expire_date','relevent_species','medcine_type','module'];
}
