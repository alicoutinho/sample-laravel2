<?php

use App\Product;
use App\User;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'user_id' => $faker->numberBetween($min=1,$max=3),
        'brand' => $faker->name,
        'body' => $faker->text($maxNbChars=150),
        'price' => $faker->randomDigitNotNull,
        'discount' => $faker->numberBetween($min=0,$max=60),
        'image' => $faker->imageUrl($width=500,$height=500,'sports')
    ];
});



