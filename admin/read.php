<?php
if ( !empty($_GET['id'])) {
    $controller = new \App\Controllers\Admin();
    $controller->action('Read');
}