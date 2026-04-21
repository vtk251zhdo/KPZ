<?php

spl_autoload_register(function ($class) {
    $directories = [
        __DIR__ . "/",
        __DIR__ . "/Handlers/"
    ];

    foreach ($directories as $dir) {
        $file = $dir . $class . '.php';

        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});