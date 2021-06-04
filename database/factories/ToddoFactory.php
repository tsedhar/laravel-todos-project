<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::App\Todo, function (Faker $faker) {
    return [
		'name'=>$faker->sentence(3),
		'description'=>$faker->paragraph(4),
		'completed'=>false
        //
    ];
});
