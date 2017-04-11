<?php

use App\Models\Article;

if (!empty($_POST)) {
    require_once __DIR__ . '/../autoload.php';
    $article = Article::findById((int) $_POST['id']);
    if(!$article){
        $article-> //delete();
    }
}
header('Location: /admin/'); die;