<?php

require "../libs/bootstrap.php";

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

Capsule::schema()->create('categories', function (Blueprint $table) {
    $table->increments('id')->comment('Идентификатор родительской категории');
    $table->string('title')->nullable()->comment('Название родительской категории');
    $table->string('description')->nullable()->comment('Описание родительской категории');
    $table->timestamp('created_at')->useCurrent()->comment('Дата создания записи');
    $table->timestamp('updated_at')->useCurrent()->comment('Дата обновления записи');
    $table->engine = 'InnoDB';
    $table->charset = 'utf8';
});