<?php

namespace App\Controllers;

class Admin
    extends \App\Controller
{
    protected function actionDefault()
    {
        $this->view->title = 'Админка';
        $this->view->news = \App\Models\Article::findAll();
        $this->view->display(__DIR__ . '/../../admin/templates/default.php');
    }

    protected function actionRead()
    {
        $this->view->title = 'Просмотр статьи | Админка';
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
        $this->view->title = 'Добавление статьи | Админка';
        $this->view->display(__DIR__ . '/../../admin/templates/create.php');
    }

    protected function actionEdit()
    {
        $this->view->title = 'Редактирование статьи | Админка';
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
        $this->view->title = 'Удаление статьи | Админка';;
        $this->view->article = \App\Models\Article::findById((int) $_GET['id']);
        if(!$this->view->article){
            header('Location: /admin/');
            die;
        }else{
            $this->view->display(__DIR__ . '/../../admin/templates/delete.php');
        }
    }
}