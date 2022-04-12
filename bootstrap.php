<?php

use Illuminate\Database\Capsule\Manager as Capsule;

session_start();

require_once 'vendor/autoload.php';

$capsule = new Capsule;

// Add a new connection
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'ukk_native',
    'username' => 'root',
    'password' => null,
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

// (optional) set as global
$capsule->setAsGlobal();
$capsule->bootEloquent();