<?php
$container = $app->getContainer();

// -----------------------------------------------------------------------------
// Services
// -----------------------------------------------------------------------------
$container['view'] = function ($c) {
  $templatePath = $c->settings['view']['templatePath'] 
    . $c->settings['app']['templateName'];
    
  $view = new \Slim\Views\Twig($templatePath, [
    'cache' => false
  ]);

  // Instantiate and add Slim specific extension
  $router = $c->router;
  $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
  $view->addExtension(new Slim\Views\TwigExtension($router, $uri));

  return $view;
};

// -----------------------------------------------------------------------------
// Middleware factories
// -----------------------------------------------------------------------------
/*
$container['App\Middleware\MiddlewareClassName'] = function ($c) {
  return new App\Middleware\MiddlewareClassName($c->service1, $c->service2, ...);
};
*/

// -----------------------------------------------------------------------------
// Controller factories
// -----------------------------------------------------------------------------
$container['App\Controller\RouteHome'] = function ($c) {
  return new App\Controller\RouteHome($c->view);
};
