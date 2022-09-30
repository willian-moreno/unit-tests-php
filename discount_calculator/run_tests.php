<?php

declare(strict_types=1);

require('./autoloader.php');

function filterMethods($item)
{
    return substr($item, -4) == 'Test';
}

$files = new DirectoryIterator(__DIR__);
foreach ($files as $file) {
    if (substr($file->getFilename(), -8) !== 'Test.php') continue;

    $className = str_replace('.php', '', $file->getFilename());
    $testClass = new $className;

    $methods = get_class_methods($testClass);
    $methods = array_filter($methods, 'filterMethods');

    foreach ($methods as $method) {
        $testClass->$method();
    }
}
