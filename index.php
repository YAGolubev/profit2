<?php
require_once __DIR__ . '/autoload.php';

$controller = new \App\Controllers\Index();
$controller->actionDefault();