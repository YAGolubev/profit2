<?php

namespace App;


abstract class Controller //4 урок 34:00
{
    protected $view;
    protected $msg;

    public function __construct(string $msg = '')
    {
        $this->view = new \App\View(); //внедрение зависимости - 4 урок 41:00
        $this->msg = $msg;
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
            throw new \App\Exceptions\Core('Access denied!');
        }
    }

    public function fill(array $data)
    {
        $errors = new Errors;
        foreach ($data as $key=>$val){
            try{
                $method = 'set' . ucfirst($key);
                $this->$method($val);
            }catch (\Exception $e){
                $errors->add($e);
            }
        }
        if(!empty($errors->getErrors())){
            throw $errors;
        }
    }
}