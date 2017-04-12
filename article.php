<?php

if(empty($_GET['id'])){
    header("Location: /"); die;
}
require_once __DIR__ . '/autoload.php';

$controller = new \App\Controllers\Index();
$controller->action('One');