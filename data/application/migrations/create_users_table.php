<?php

require "../libs/bootstrap.php";

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

Capsule::schema()->create('users', function (Blueprint $table) {
    $table->increments('id')->comment('Идентификатор пользователя');
    $table->string('name')->nullable()->comment('Имя пользователя');
    $table->string('surname')->nullable()->comment('Фамилия пользователя');
    $table->string('email')->unique()->comment('E-mail пользователя');
    $table->string('password')->comment('Пароль пользователя');
    $table->enum('is_admin', ['yes', 'no'])->comment('Этот пользователь админ');
    $table->timestamp('created_at')->useCurrent()->comment('Дата создания записи');
    $table->timestamp('updated_at')->useCurrent()->comment('Дата обновления записи');
    $table->engine = 'InnoDB';
    $table->charset = 'utf8';
});