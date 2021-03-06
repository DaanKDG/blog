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

$factory->define(App\User::class, function (Faker\Generator $faker) {

    return [
        'email' => "dax@cc.com",
        'username' => "Dax18",
        'password' => bcrypt('123123'),
        'name' => "Daan Boschmans",
        'remember_token' => str_random(10),
    ];
});
