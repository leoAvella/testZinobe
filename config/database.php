<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$cap = new Capsule;

$cap->addConnection([
    'driver'     => 'mysql',
    'host'       => 'localhost',
    'database'   => 'localhost',
    'username'   => 'root',
    'password'   => '192.168.0.36',
    'charset'    => 'utf8',
    'collation'  => 'utf8_unicode_ci',
    'prefix'     => '',
]);

$cap->bootEloquent();


?>