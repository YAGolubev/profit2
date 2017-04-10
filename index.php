<?php

require_once __DIR__ . '/autoload.php';

$controllerName = $_GET['ctrl'] ?? 'Index'; // http://php.net/manual/ru/migration70.new-features.php#migration70.new-features.null-coalesce-op
$controllerClassName = '\\App\\Controllers\\' . $controllerName;
$controller = new $controllerClassName;

$controller->action($_GET['act'] ?? 'Default');