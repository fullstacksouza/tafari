<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => "Matheus Souza",
        'email' => 'matheus.kruzsouza@gmail.com',
        'password' => bcrypt('05092013'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Painel\Event::class, function (Faker $faker) {
    static $password;

    return [
        'title' => $faker->sentence(2),
        'start_date' => $faker->dateTimeThisMonth(),
        'end_date' => $faker->dateTimeThisMonth(),
       
    ];
});


