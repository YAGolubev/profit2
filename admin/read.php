<?php
$id = null;

if ( !empty($_GET['id'])) {
    $id = (int) $_GET['id'];
    require_once __DIR__ . '/../autoload.php';
    $article = App\Models\Article::findById($id);
    if(!$article){
        header('Location: /admin/index.php');
    }else{
        include __DIR__ . '/templates/read.php';
    }
}

if ( null == $id ) {
    header('Location: /admin/index.php');
}