<?php 

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'sqlite',
    'database'  => WWW_ROOT . getenv('DB_DATABASE'),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
    'modes' => [],
], 'sqlite');

$capsule->setAsGlobal();
$capsule->bootEloquent();
