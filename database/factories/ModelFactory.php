<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name'           => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'password'       => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(\App\Product::class, function (Faker\Generator $faker) {
    return [
        'photo'  => '/images/products/pd1.jpg',
        'tag_id' => function () {
            return \App\Tag::inRandomOrder()->first()->id;
        },
        'images' => '/images/products/pd2.jpg,/images/products/pd3.jpg,/images/products/pd4.jpg',
        'text'   => $faker->text($maxNbChars = 200),
        'title'  => $faker->text($maxNbChars = 6),
        'price'  => $faker->randomFloat($nbMaxDecimals = null, $min = 0, $max = 500),
    ];
});

