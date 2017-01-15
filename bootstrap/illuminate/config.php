<?php

$app->config = [

    'cache.default' => getenv('CACHE_DEFAULT'),

    'cache.prefix' => getenv('CACHE_PREFIX'),

    'cache.stores.file' => [
        'driver' => 'file',
        'path'   => getenv('CACHE_FILE_PATH'),
    ],

    'cache.stores.redis' => [
        'driver' => 'redis',
    ],

];
