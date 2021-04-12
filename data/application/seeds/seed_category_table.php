<?php

require "../libs/bootstrap.php";
use \Faker\Factory;
use Illuminate\Database\Capsule\Manager as Capsule;

$faker = Factory::create('ru_RU');
$faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($faker));

for ($i = 0; $i < 15; $i++) {
    Capsule::table('categories')->insert([
        'title' => $faker->department,
        'description' => $faker->sentence(5, true),
        'parent_id' => $faker->biasedNumberBetween(0, 3)
    ]);
}