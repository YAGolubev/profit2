<?php

namespace App;

class Db
{
    use Singleton;

    protected $dbh;

    protected function __construct()
    {
        $config = \App\Config::instance();
        try {
            $this->dbh = new \PDO($config->data['driver'] . ':host=' . $config->data['db']['host'] . ';dbname=' .
                            $config->data['db']['dbname'], $config->data['db']['user'], $config->data['db']['pass']);
        } catch (\PDOException $e){
            throw new \App\Exceptions\Db('Ошибка соединения с БД. ' . $e->getMessage());
        }
    }

    public function query(string $sql, string $class = stdClass::class, array $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        if ($res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        } else {
            return false;
        }
    }

    public function execute(string $query, array $params = [])
    {
        $sth = $this->dbh->prepare($query);
        $res = $sth->execute($params);
        if($res){
            return $res;
        }else{
            throw new \App\Exceptions\Db('Ошибка в SQL-запросе. ');
        }
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }
}