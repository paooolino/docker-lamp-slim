<?php
require __DIR__ . '/vendor/autoload.php';

// Instantiate the Slim App
$settings = require __DIR__ . '/app/settings.php';
$app = new Slim\App($settings);

// Set up dependencies
require __DIR__ . '/app/dependencies.php';

// App routes
require __DIR__ . '/app/routes.php';

$app->run();
