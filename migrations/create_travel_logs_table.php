<?php

require_once '../bootstrap.php';

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('travel_logs', function ($table) {
    $table->increments('id');
    $table->foreignid('user_id');
    $table->string('location');
    $table->string('body_temperature');
    $table->timestamps();
});