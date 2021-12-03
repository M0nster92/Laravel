<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    public function airport()
    {
        return $this->hasOne('App\Airport');
    }
}
