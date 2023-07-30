<?php

namespace Exporter;

spl_autoload_register(static function ($class) {
    $class_file = __DIR__ . "/$class.php";
    if (file_exists($class_file) and is_readable($class_file)) {
        include $class_file;
    }else{
        die("Could not load class");
    }
});