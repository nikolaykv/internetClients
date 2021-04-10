<?php

require "../libs/bootstrap.php";
use \Faker\Factory;
use Illuminate\Database\Capsule\Manager as Capsule;

$faker = Factory::create('ru_RU');

for ($i = 0; $i < 5; $i++) {
    Capsule::table('users')->insert([
        'name' => $faker->unique()->firstName,
        'surname' => $faker->unique()->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => md5($faker->regexify('[A-Za-z0-9]{20}')),
        'is_admin' => 'no',
    ]);
}

// crete admin
Capsule::table('users')->insert([
    'name' => 'admin',
    'surname' => 'Admin',
    'email' => 'admin@admin.com',
    'password' => md5('admin'),
    'is_admin' => 'yes',
]);