<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    // public function scopeSearch($query, $s) {
    //     return $query->where('experience', 'like', '%' .$s. '%')
    //         ->orWhere('description', 'like', '%' .$s. '%')
    //         ->orWhere('address', 'like', '%' .$s. '%');
    // }

    protected $table = 'appointments';
    // protected $primaryKey = 'advertisement_id';
    // public $timestamps = false;
    protected $fillable = [
        'petOwnerName', 'ReasonForAppointment', 'dateAndTime', 'address', 'status', 'mobile_num'
    ];
}
