<?php

require_once CONFIG . '/routes.php';

$uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');

if (array_key_exists($uri, $routes)) {
    if (file_exists(require_once CONTROLLERS . "/{$routes[$uri]}")) {
        require_once CONTROLLERS . "/{$routes[$uri]}";
    } else {
        abort();
    }
} else {
    abort();
}