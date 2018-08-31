<?php

use Faker\Generator as Faker;
use App\Comment;

$factory->define( Comment::class, function (Faker $faker) {
    return [
        'parent_id'     => $faker->numberBetween( 0 , Comment::count() ),
        'author'        => $faker->name,
        'content'       => $faker->text,
    ];
});
