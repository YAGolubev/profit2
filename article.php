<?php

if(empty($_GET['id'])){
    header("Location: /");
}
require_once __DIR__ . '/autoload.php';
/*
$view = new App\View();
$view->title = 'Статья';
$view->article = \App\Models\Article::findById((int) $_GET['id']);
$view->display(__DIR__ . '/templates/article.php');
*/

$controller = new \App\Controllers\Index();
$controller->action('One');