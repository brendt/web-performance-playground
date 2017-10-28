<?php

$env = new Dotenv\Dotenv(__DIR__ . '/../');
$env->load();

if (!function_exists('env')) {
    function env(string $key) {
        return getenv($key);
    }
}
