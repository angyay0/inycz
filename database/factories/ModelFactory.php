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

$factory->define(YCZ\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(YCZ\Type::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->email,
    ];
});

$factory->define(YCZ\Operation::class, function (Faker\Generator $faker) {
  return [
      'name' => $faker->name,
      'description' => $faker->email,
  ];
});

$factory->define(YCZ\Property::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->email,
        'address' => bcrypt(str_random(10)),
        'price' => mt_rand(1000,9999),
        'type_id' => mt_rand (1,50),
        'operation_id' => mt_rand(1,50),
    ];
});
