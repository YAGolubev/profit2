<?php

namespace App\Controllers;

use App\Models\Article;

class News
    extends \App\Controller
{
    protected function actionOne()
    {
        $this->view->pageTitle = 'Новость';
        $this->view->article = Article::findById((int) $_GET['id']);
        if(!$this->view->article){
            throw new \App\Exceptions\PageNotFound('Такой новости не существует.');
        }else{
            $this->view->display(__DIR__ . '/../../templates/article.php');
        }
    }
}