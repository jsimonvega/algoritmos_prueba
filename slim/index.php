<?php
if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}
ini_set('display_errors', 'On');
ini_set("soap.wsdl_cache_enabled", "0");

require __DIR__ . '\vendor\autoload.php';

session_start();

// Instantiate the app
$settings = require __DIR__ . '/vendor/slim/slim-skeleton/src/settings.php';
$app = new \Slim\App($settings);

// Set up dependencies
require __DIR__ . '/vendor/slim/slim-skeleton/src/dependencies.php';

// Register middleware
require __DIR__ . '/vendor/slim/slim-skeleton/src/middleware.php';

// Register routes
require __DIR__ . '/vendor/slim/slim-skeleton/src/routes.php';

// Run app
$app->run();
