<?php 

use Illuminate\Support\Facades\Facade;
use Illuminate\Container\Container as App;

require_once __DIR__ . '/../vendor/autoload.php';

try {
    (new Dotenv\Dotenv(__DIR__.'/../'))->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
    //
}

if (getenv('APP_DEBUG', false)) {
	$whoops = new \Whoops\Run;
    $whoops->pushhandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
}


$app = new App;
Facade::setFacadeApplication($app);

require __DIR__ . '/illuminate/config.php';
require __DIR__ . '/illuminate/filesystem.php';
require __DIR__ . '/illuminate/eloquent.php';
require __DIR__ . '/illuminate/redis.php';
require __DIR__ . '/illuminate/cache.php';
require __DIR__ . '/illuminate/event.php';
