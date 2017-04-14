<?php

include __DIR__ . '/../autoload.php';
/*
$data = App\Models\Article::findAll();
var_dump($data);

$data = App\Models\Article::findTopN(2);
var_dump($data);
*/

//$obj = (new \App\FluentClass())->setFoo(1)->setBar(-1)->setBaz(0); // all values is valid
try{
    $obj = new \App\FluentClass();
    $obj->fill([
        'foo' => 1,
        'bar' => -1,
        'baz' => 1,
    ]);
    /*
    $obj->setFoo(1); // 1
    $obj->setBar(1); // -1
    $obj->setBaz(1); // 1
    */
//} catch (Throwable $e){
} catch (\App\Errors $errors){
//    echo $e->getMessage();
    //foreach ($e->getErrors() as $error) {
    foreach ($errors as $error) {
        echo $error->getMessage();
    }
}

var_dump($obj->getValues());