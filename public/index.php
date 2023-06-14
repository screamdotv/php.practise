<?php

define("ROOT", dirname(__DIR__)); // "D:\programs\OSPanel\domains\php.practise"
define("PUBLIC", ROOT . '/public');
define("CORE", ROOT . '/core');
define("APP", ROOT . '/app');
define("CONTROLLERS", APP . '/controllers');
define("VIEWS", APP . '/views');
define("PATH", 'http://php.practise');


require_once CORE . '/functions.php';

$uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');

if ($uri === ''){
    require_once CONTROLLERS . '/index.php';
} elseif ($uri == 'about') {
    require_once CONTROLLERS . '/about.php';
} elseif ($uri == 'post') {
    
} else {
    abort();
}

