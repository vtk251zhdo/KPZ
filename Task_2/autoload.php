<?php

spl_autoload_register(function ($class) {
    $directories = [
        __DIR__ . '/Contracts/',
        __DIR__ . '/Devices/',
        __DIR__ . '/Factories/',
    ];

    foreach ($directories as $dir) {
        $file = $dir . $class . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});