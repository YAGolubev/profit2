<?php

namespace App\Controllers;

class News
    extends \App\Controller
{
    protected function actionOne()
    {
        $this->view->title = 'Новости';
        $this->view->article = \App\Models\Article::findById($_GET['id']);
        $this->view->display(__DIR__ . '/../../templates/article.php');
    }
}