<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . '/resources/config.php');

    $router = new Router($_SERVER['REQUEST_URI']);
    $router->route();
?>