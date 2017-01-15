<?php

use Illuminate\Cache\CacheManager;

$app->singleton('cache', function ($app) {
    return new CacheManager($app);
});

$app->singleton('cache.store', function ($app) {
    return $app['cache']->driver();
});