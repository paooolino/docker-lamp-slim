<?php
return [
  'settings' => [
    // Slim settings
    'displayErrorDetails' => true,
    'addContentLengthHeader' => false,
    'determineRouteBeforeAppMiddleware' => true,

    // Custom App settings
    'app' => [
      'templateName' => 'default',
    ],
    
    // View settings
    'view' => [
      'templatePath' => __DIR__ . '/../templates/',
    ],

    // Database settings
    'DB' => [
      "HOST" => 'db',
      "USER" => 'app',
      "PASS" => 'app',
      "DBNAME" => 'app',
    ],
  ],
];
