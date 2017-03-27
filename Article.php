<?php

if(empty($_GET['id'])){
    header("Location: /");
}

require_once __DIR__ . '/autoload.php';
$article = \App\Models\Article::findById($_GET['id']);
include __DIR__ . '/templates/article.php';
