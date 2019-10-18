<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    protected $fillable = [
        'id',
        'name',
    ];

    public function Recettes()
    {
        return $this->hasOne('App/Recettes');
    }
}
