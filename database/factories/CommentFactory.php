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

$factory->define(App\Models\Comment::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
		'email' => $faker->unique()->safeEmail,
		'content' => $faker->paragraph,
		'post_id' => rand(1, 10),
		'created_at' => \Carbon\Carbon::now(),
     ];
});
