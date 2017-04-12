<?php

namespace App\Controllers;

class Index
    extends \App\Controller
{
    protected function actionDefault()
    {
        $this->view->pageTitle = 'Новости';
        $this->view->news = \App\Models\Article::findAll();
        $this->view->display(__DIR__ . '/../../templates/default.php');
    }
}