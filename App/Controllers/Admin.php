<?php

namespace App\Controllers;

class Admin
    extends \App\Controller
{
    protected function actionDefault()
    {
        $this->view->pageTitle = 'Админка';
        $this->view->news = \App\Models\Article::findAll();
        $this->view->display(__DIR__ . '/../../admin/templates/default.php');
    }

    protected function actionRead()
    {
        $this->view->pageTitle = 'Просмотр статьи | Админка';
        $this->view->article = \App\Models\Article::findById((int) $_GET['id']);
        if(!$this->view->article){
            header('Location: /admin/');
            die;
        }else{
            $this->view->display(__DIR__ . '/../../admin/templates/read.php');
        }
    }

    protected function actionAdd()
    {
        $this->view->pageTitle = 'Добавление статьи | Админка';
        $this->view->author = '';
        $this->view->title = '';
        $this->view->lead = '';
        $this->view->display(__DIR__ . '/../../admin/templates/add.php');
    }

    protected function actionEdit()
    {
        $this->view->pageTitle = 'Редактирование статьи | Админка';
        $this->view->article = \App\Models\Article::findById((int) $_GET['id']);
        if(!$this->view->article){
            header('Location: /admin/');
            die;
        }else {
            $this->view->display(__DIR__ . '/../../admin/templates/edit.php');
        }
    }

    protected function actionDelete()
    {
        $this->view->pageTitle = 'Удаление статьи | Админка';;
        $this->view->article = \App\Models\Article::findById((int) $_GET['id']);
        if(!$this->view->article){
            header('Location: /admin/');
            die;
        }else{
            $this->view->display(__DIR__ . '/../../admin/templates/delete.php');
        }
    }
}