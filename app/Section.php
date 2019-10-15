<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'titulo'
        ];


        public function items()
        {
            return $this->hasMany(Item::class);
        }
}
