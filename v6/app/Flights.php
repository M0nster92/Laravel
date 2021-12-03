<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Flights extends Model
{
    //
    /*public static function boot()
    {
        parent::boot();
        static::addGlobalScope('price', function (Builder $builder) {
            $builder->where('price', '>', 200);
        });
    } */

    public function scopeLower($query)
    {
        return $query->where('price', '<', 200);
    }
}
