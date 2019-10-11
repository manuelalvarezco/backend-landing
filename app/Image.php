<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
    'titulo','url','url_enlace','titulo_enlace'
    ];
}
