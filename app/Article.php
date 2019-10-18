<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'reference',
        'designation',
        'qteE',
        'prixA',
        'prixV',
        'stockIntial',
        'stockFinal',
    ];
}
