<?php

namespace App\Models;

abstract class Model
{
    protected const TABLE = null;

    public $id;

    public static function findAll()
    {
        $db = new \App\Db();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, static::class);
    }

    public static function findById(int $id)
    {
        $db = new \App\Db();
        $data = $db->query('SELECT * FROM ' . static::TABLE . ' WHERE id=:id', static::class, [':id' => $id]);
        if(!empty($data)){
            return $data[0];
        }
        return false;
    }

    public static function findTopN(int $top)
    {
        $db = new \App\Db();
        return $db->query('SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' .$top, static::class);
    }
}