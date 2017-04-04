<?php
require_once __DIR__ . '/autoload.php';

$view = new App\View();
$view->title = 'Новости';
//$view->news = App\Models\Article::findTopN(2);
$view->news = App\Models\Article::findAll();
$view->display(__DIR__ . '/templates/index.php');