<?php

namespace App\Models;

use App\Model;

/**
 * Class Article
 * @package App\Models
 *
 * @property \App\Models\Author $author
 */
class Article extends Model
{
    protected const TABLE = 'news';

    public $title;
    public $lead;
    public $author_id;

    /**
     * Если запрашивается поле ->author, то сначала проверяем поле ->author_id
     *
     * @param $name
     * @return bool|null
     */
    public function __get($name)
    {
        switch ($name){
            case 'author':
                return Author::findById($this->author_id);
                break;
            default:
                return null;
        }
    }

    /**
     * Если оно не пусто - делаем запрос к таблице authors и возвращаем результат в виде объекта класса Author
     *
     * @param $name
     * @return bool|null
     */
    public function __isset($name)
    {
        switch ($name){
            case 'author':
                return !empty($this->author_id);
                break;
            default:
                return null;
        }
    }
}