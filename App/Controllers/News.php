<?php

namespace App\Controllers;

use App\Models\Article;

class News
    extends \App\Controller
{
    protected function actionOne()
    {
        $this->view->pageTitle = 'Новость';
        $this->view->article = Article::findById($_GET['id']);
        if(!$this->view->article){
            header('Location: /');
            die;
        }else{
            $this->view->display(__DIR__ . '/../../templates/article.php');
        }
    }
}