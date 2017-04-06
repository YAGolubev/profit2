<?php

// $_GET['ctrl']=54
// $_GET['act]

require_once __DIR__ . '/autoload.php';

$controllerName = $_GET['ctrl'] ?? 'Index'; // if (isset($_GET['ctrl'])){ $controllerName = $_GET['ctrl']; } else { $controllerName = 'Index'; }
$controllerClassName = '\\App\\Controllers\\' . $controllerName;

//$controller = new \App\Controllers\Index();
$controller = new $controllerClassName;

$controller->action('Default');
