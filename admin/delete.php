<?php
$id = null;

if ( !empty($_GET['id'])) {
    $id = $_GET['id'];
    include __DIR__ . '/templates/delete.php';
}

if ( null == $id ) {
    header('Location: /admin/index.php');
}

if ( !empty($_POST)) {
    require_once __DIR__ . '/../autoload.php';
    $article = App\Models\Article::findById((int) $_POST['id']);
    $article->delete();
    header('Location: /admin/index.php');
}