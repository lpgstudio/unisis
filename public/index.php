<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once(dirname(__FILE__, 2) . '/src/config/config.php');

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

if($uri === '/' || $uri === '' || $uri === '/index.php'){
    $uri = '/dashboard.php';
}

require_once(CONTROLLER_PATH . "/{$uri}");