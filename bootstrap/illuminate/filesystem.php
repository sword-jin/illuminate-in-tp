<?php 

use Illuminate\Filesystem\Filesystem;

$app->singleton('files', function () {
    return new Filesystem;
});
