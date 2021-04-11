<?php

require "../libs/bootstrap.php";
use \Faker\Factory;
use Illuminate\Database\Capsule\Manager as Capsule;

$faker = Factory::create('ru_RU');
$faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($faker));

for ($i = 0; $i < 10; $i++) {
    Capsule::table('subcategories')->insert([
        'subcategory_title' => $faker->department,
        'subcategory_description' => $faker->sentence(3, true),
        'parent_category_id' => $faker->biasedNumberBetween(1, 5)
    ]);
}