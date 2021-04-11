<?php

require "../libs/bootstrap.php";

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

Capsule::schema()->create('subcategories', function (Blueprint $table) {
    $table->increments('id')->comment('Идентификатор дочерней категории');
    $table->string('title')->nullable()->comment('Название дочерней категории');
    $table->string('description')->nullable()->comment('Описание дочерней категории');

    $table->integer('parent_category_id')->nullable();

    $table->timestamp('created_at')->useCurrent()->comment('Дата создания записи');
    $table->timestamp('updated_at')->useCurrent()->comment('Дата обновления записи');
    $table->engine = 'InnoDB';
    $table->charset = 'utf8';
});