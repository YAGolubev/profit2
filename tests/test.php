<?php

include __DIR__ . '/../autoload.php';

$data = App\Models\Article::findAll();
var_dump($data);

$data = App\Models\Article::findTopN(2);
var_dump($data);