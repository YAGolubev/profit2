<?php

function __autoload($class)
{
    $path = str_replace('\\', '/', $class);
    require __DIR__ . '/' . $path . '.php';
}