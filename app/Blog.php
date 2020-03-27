<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    protected $fillable = [
        'titulo', 'slug', 'descripcion', 'content'
    ];
}
