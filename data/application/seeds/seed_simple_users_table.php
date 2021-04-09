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
        'password' => password_hash(str_shuffle('$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'), PASSWORD_DEFAULT),
        'is_admin' => 'no',
    ]);
}