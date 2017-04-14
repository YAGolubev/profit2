<?php

namespace App\Controllers;

class Page404
    extends \App\Controller
{
    protected function action404()
    {
        $this->view->pageTitle = '404 - Страница не найдена';
        $this->view->msg = $this->msg;
        $this->view->display(__DIR__ . '/../../templates/404.php');
    }
}