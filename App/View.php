<?php

namespace App;

/**
 * Class View
 * @package App
 * @property array $articles
 */
class View implements \Countable, \Iterator
{
    /**  Место хранения перегружаемых данных.  */
    protected $data = [];

    use TView;

    public function count()
    {
        return count($this->data);
    }

    /**
     * Возвращает данные работы шаблона
     *
     * @param $templates
     * @return string
     */
    public function render($templates)
    {
        ob_start();
        foreach ($this as $key => $value){
            $$key = $value;
        }
        include $templates;
        //return ob_get_clean();
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    /**
     * Показывает результат работы шаблона
     * @param $templates
     */
    public function display($templates)
    {
        echo $this->render($templates);
    }

    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     * @since 5.0.0
     */
    public function current()
    {
        return current($this->data);
    }

    /**
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function next()
    {
        next($this->data);
    }

    /**
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    public function key()
    {
        return key($this->data);
    }

    /**
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid()
    {
        return null !== key($this->data);
    }

    /**
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function rewind()
    {
        reset($this->data);
    }
}