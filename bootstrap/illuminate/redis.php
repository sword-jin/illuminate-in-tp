<?php 

use Illuminate\Redis\Database as Redis;

$app->singleton('redis', function ($app) {
    return new Redis([
    	'default' => getenv('DEFAULT_REDIS_HOST'),
    	'port' => getenvt('DEFAULT_REDIS_PORT', 6379),
    	'database' => getenvt('DEFAULT_REDIS_DATABASE', 0),
	]);
});
