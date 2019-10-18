<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    protected $fillable = [
        'id',
        'name',
        'chefId',
    ];

    public function Chef()
    {
        return $this->hasOne('App/Chef');
    }
}
