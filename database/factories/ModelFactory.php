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
$factory->define(Couchcat\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Couchcat\License::class, function (Faker\Generator $faker) {

	return [
		'vendor' => $faker->company,
		'license-stub' => $faker->slug,
		'starts' => $faker->date,
		'expires' => $faker->date('Y-m-d','10 years'),
		'public' => $faker->boolean(2),
	];

});
