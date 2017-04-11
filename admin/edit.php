<?php

if ( !empty($_GET['id'])) {
    $controller = new \App\Controllers\Admin();
    $controller->action('Edit');
}


/*
if ( !empty($_GET['id'])) {
    //$id = (int) $_GET['id'];
    //$article = App\Models\Article::findById($id);
    if(!$article){
        header('Location: /admin/');
    }else{
        include __DIR__ . '/templates/update/';
    }
}

if ( null == $id ) {
    header('Location: /admin/');
}
*/
/*
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
*/