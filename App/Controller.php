<?php

namespace App;

abstract class Controller //4 урок 34:00
{
    protected $view;

    public function __construct()
    {
        $this->view = new \App\View(); //внедрение зависимости - 4 урок 41:00
    }

    protected function access($action)
    {
        // if (isUserRegistred){
        return true;
        // } else { return false; }
    }

    public function action($name)
    {
        if($this->access($name)){
            $name = 'action' . $name;
            $this->$name(); //у объекта this вызывать метод, чье имя содержится в преременной $name()
        } else {
            die('Access denied!'); //throw exception
        }
    }
}