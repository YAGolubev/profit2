<?php

namespace App;

abstract class Model
{
    protected const TABLE = null;

    public $id;

    public static function findAll()
    {
        $db = \App\Db::instance();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, static::class);
    }

    public static function findById($id)
    {
        $db = \App\Db::instance();
        $res = $db->query('SELECT * FROM ' . static::TABLE . ' WHERE id=:id', static::class, [':id' => $id]);
        if(!empty($res)){
            return $res[0];
        }
        return false;
    }

    public static function findByName($id)
    {
        $db = \App\Db::instance();
        $res = $db->query('SELECT * FROM ' . static::TABLE . ' WHERE id=:id', static::class, [':id' => $id]);
        if(!empty($res)){
            return $res[0];
        }
        return false;
    }

    public static function findTopN(int $top)
    {
        $db = \App\Db::instance();
        return $db->query('SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' .$top, static::class);
    }

    // метод insert(). Он вставляет в базу данных новую запись, основываясь на данных объекта. Не забудьте, что после успешной вставки вы должны заполнить свойство id объекта!
    public function insert()
    {
        if (!empty($this->id)){ // isNewModel
            return; //не новые объекты вставлять нельзя
        }
        $columns = [];
        $params = [];
        $data = [];
        foreach ($this as $name => $value) {
            if ('id' == $name){
                continue;
            }
            $columns[] = $name;
            $params[] = ':'.$name;
            $data[':'.$name] = $value;
            $values[':'.$name] = $value;
        }
        $sql = 'INSERT INTO ' . static::TABLE . ' (' . implode(', ', $columns) . ') VALUES (' . implode(', ', $params) . ')';
        $db = \App\Db::instance();
        return $db->execute($sql, $data);

    }

    // реализуйте метод update(). Его задача - обновить поля модели, которая ранее была получена из базы данных. Используйте поле id для понимания того, какую запись нужно обновлять!
    public function update()
    {
        $keys = [];
        $values = [];
        foreach ($this as $name => $value) {
            if ('id' == $name){
                $id = $value;
            }
            $keys[] = $name . '=:' . $name;
            $values[':'.$name] = $value;
        }
        $sql = 'UPDATE ' . static::TABLE . ' SET ' . implode(', ', $keys) . ' WHERE id='.$id;
        $db = \App\Db::instance();
        return $db->execute($sql, $values);
    }

    // метод save(), который решит - "новая" модель или нет и, в зависимости от этого, вызовет либо insert(), либо update().
    public function save()
    {
        if (empty($this->id)){
            $this->insert();
        }else{
            $this->update();
        }
    }

    public function delete()// https://github.com/Edline/PHPcoursess/blob/master/HW_2/classes/models/Model.php
    {
        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id = :id';
        $db = \App\Db::instance();
        return $db->execute($sql, [':id' => $this->id]);
    }
}