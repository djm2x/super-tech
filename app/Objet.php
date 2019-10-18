<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objet extends Model
{
    protected $fillable = [
        'name',
        'imei',
        'model',
        'vin',
        'plateNumber',
        'device',
        'simNumber',
        'idManager',
        'active',
        'expireOn',
    ];
}
