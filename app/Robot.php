<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Robot extends Model{
    use Notifiable;
    public $timestamps = false;
    protected $fillable = [
        'nro_serie','name','status'
    ];

    protected $hidden = [

    ];
}
