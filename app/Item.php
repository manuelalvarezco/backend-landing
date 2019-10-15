<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'contenido','section_id'
        ];

    public function section(){
        return $this->belongsTo(Section::class);
    }
}
