<?php
$id = null;

if ( !empty($_GET['id'])) {
    $id = $_GET['id'];
    require_once __DIR__ . '/../autoload.php';
    $article = App\Models\Article::findById((int) $id);
    include __DIR__ . '/templates/read.php';
}

if ( null == $id ) {
    header('Location: /admin/index.php');
}