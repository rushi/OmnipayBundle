<?php

call_user_func(function () {
    if(!is_file($file = __DIR__ . '/../vendor/autoload.php')) {
        throw new \RuntimeException('Did not find vendor/autoload.php. Did you run "composer install --dev"?');
    }

    require_once $file;
});
