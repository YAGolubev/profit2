<?php
$id = null;

if ( !empty($_GET['id'])) {
    $id = (int) $_GET['id'];
    $controller = new \App\Controllers\Admin();
    $controller->action('Read');
}

if ( null == $id ) {
    header('Location: /admin/');
    die;
}