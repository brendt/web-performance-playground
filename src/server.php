<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../config/config.php';

$host = (new Aerys\Host())
    ->expose(env('HOST_IP'), env('PORT'))
    ->name(env('HOST_NAME'))
    ->encrypt(env('SSL_CERTIFICATE'), env('SSL_KEY'))
    ->use(Aerys\root(__DIR__.'/../public'));

return $host;
