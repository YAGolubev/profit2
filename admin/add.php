<?php
$author = '';
$title = '';
$lead = '';

if ( !empty($_POST)){
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
        //require_once __DIR__ . '/../autoload.php';
        $article = new \App\Models\Article();
        $article->id = null;
        $article->author = $author;
        $article->title = $title;
        $article->lead = $lead;
        $article->save();
        header('Location: /admin/');
        die;
    }
}
//include __DIR__ . '/templates/create/';
$controller = new \App\Controllers\Admin();
$controller->action('Add');