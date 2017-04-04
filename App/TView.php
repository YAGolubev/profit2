<?php
namespace App;


trait TView
{
    /**
     * Метод __set() будет выполнен при записи данных в недоступные свойства.
     *
     * @param $name имя вызываемого свойства
     * @param $value значение, которое будет записано в свойство с именем $name
     */
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    /**
     * Проверяет установлено ли '$name'
     *
     * Метод __get() будет выполнен при чтении данных из недоступных свойств.
     *
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->data[$name];
    }

    /**
     *
     * Метод __isset() будет выполнен при использовании isset() или empty() на недоступных свойствах.
     *
     * @param $name
     * @return bool
     */
    public function __isset($name)
    {
        return isset($this->data[$name]);
    }
}