<?php

namespace App\Models;

require_once __DIR__ . '/../autoload.php';

if (!empty($_POST)) {
    $article = Article::findById((int) $_POST['id']);
    $article->delete();
}
header('Location: /admin/'); die;