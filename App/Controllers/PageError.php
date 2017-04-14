<?php

namespace App\Controllers;

class PageError
    extends \App\Controller
{
    protected function actionError()
    {
        $this->view->pageTitle = 'Ошибка!';
        $this->view->msg = $this->msg;
        $this->view->display(__DIR__ . '/../../templates/error.php');
    }
}