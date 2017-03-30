<?php
namespace App;

class Config
{
    use Singleton;

    public $data;

    protected function __construct()
    {
        $config = include __DIR__ . '/../config.php';
        foreach ($config as $name => $value)
        {
            $this->data['db'][$name] = $value;
        }
    }
}