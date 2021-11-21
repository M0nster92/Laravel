<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Posts;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        //
        'user_id' => factory(\App\User::class),
        'title' => $faker->sentence,
        'slug' => $faker->sentence,
        'body' => $faker->paragraph
    ];
});
