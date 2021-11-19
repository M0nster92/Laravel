<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function path()
    {
        return route('posts.show', $this);
    }
}
