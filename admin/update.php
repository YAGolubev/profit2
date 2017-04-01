<?php
require_once __DIR__ . '/../autoload.php';

$id = null;

if ( !empty($_GET['id'])) {
    $id = $_GET['id'];
    $article = App\Models\Article::findById((int) $id);
    if(!$article){
        header('Location: /admin/index.php');
    }else{
        include __DIR__ . '/templates/update.php';
    }
}

if ( null == $id ) {
    header('Location: /admin/index.php');
}

if ( !empty($_POST)) {
    $authorError = null;
    $titleError = null;
    $leadError = null;

    $author = $_POST['inputAuthor'];
    $title = $_POST['inputTitle'];
    $lead = $_POST['textLead'];

    $valid = true;
    if (empty($author)) {
        $valid = false;
        $authorError = 'У публикации должен быть автор';
    }
    if (empty($title)) {
        $valid = false;
        $titleError = 'У статьи должен быть заголовок';
    }
    if (empty($lead)) {
        $valid = false;
        $leadError = 'У статьи должно быть содержание';
    }
    if ($valid) {
        $article = App\Models\Article::findById((int) $id);
        $article->author = $author;
        $article->title = $title;
        $article->lead = $lead;
        $article->save();
        header('Location: /admin/index.php');
    }
}