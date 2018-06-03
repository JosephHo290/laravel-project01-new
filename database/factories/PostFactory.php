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

$factory->define(App\Models\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
		'sub_title' => $faker->sentence,
		'content' => $faker->paragraph,
		'is_feature' => rand(0,1),
		'page_view' => rand(1, 20),
		'created_at' => \Carbon\Carbon::now(),
     ];
});
