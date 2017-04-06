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
        return !empty($res) ? $res[0] : false;
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
        $db->execute($sql, $data);
        $this->id = $db->lastInsertId();
    }

    // реализуйте метод update(). Его задача - обновить поля модели, которая ранее была получена из базы данных. Используйте поле id для понимания того, какую запись нужно обновлять!
    public function update()
    {
        $keys = [];
        $values = [];
        foreach ($this as $name => $value) {
            $values[':'.$name] = $value;
            if ('id' == $name){
                continue;
            }
            $keys[] = $name . '=:' . $name;
        }
        $sql = 'UPDATE ' . static::TABLE . ' SET ' . implode(', ', $keys) . ' WHERE id=:id';
        $db = \App\Db::instance();
        $db->execute($sql, $values);
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

    public function delete()
    {
        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id = :id';
        $db = \App\Db::instance();
        $db->execute($sql, [':id' => $this->id]);
    }
}