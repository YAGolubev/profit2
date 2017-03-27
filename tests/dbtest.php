<?php

include __DIR__ . '/../autoload.php';

$db = new \App\Db();
assert(true == $db->execute('UPDATE `news` SET title=:title WHERE id=:id',
                            [':title' => 'First title updated', ':id' => 1])
);
var_dump($db->query('SELECT * FROM `news`'));


assert(false === \App\Models\Article::findById(999999999999999));
var_dump(\App\Models\Article::findById(3));
var_dump(\App\Models\Article::findTopN(2));
