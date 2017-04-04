<?php

namespace App;

/**
 * Class View
 * @package App
 * @property array $articles
 */
class View implements \Countable
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
}