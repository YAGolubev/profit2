<?php

$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/', $uri);

require_once __DIR__ . '/autoload.php';

if(!empty($parts[1])){
    $controllerName = $parts[1];
}else{
    $controllerName = 'Index';
}
$controllerClassName = '\\App\\Controllers\\' . $controllerName;
$controller = new $controllerClassName;

try {
    if(!empty($parts[2])){
        $controller->action($parts[2]);
    }else{
        $controller->action('Default');
    }
} catch (\App\Exceptions\Core $e){
    $controller = new \App\Controllers\PageError('Возникло исключение приложения. ' . $e->getMessage());
    $controller->action('Error');
} catch (\App\Exceptions\Db $e){
    $controller = new \App\Controllers\PageError('Возникло исключение БД. ' . $e->getMessage());
    $controller->action('Error');
} catch (\App\Exceptions\PageNotFound $e){
    $controller = new \App\Controllers\Page404('Страница не найдена. ' . $e->getMessage());
    $controller->action('404');
} catch (Throwable $e) {
    echo $e->getMessage(), "\n";
    $controller = new \App\Controllers\PageError('Продолжение работы невозможно. ' . $e->getMessage());
    $controller->action('Error');
} finally {
    //log
}