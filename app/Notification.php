<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notifications';
 
    protected $fillable = [
        'notifiable_id', 'notifiable_type'
    ];
}
