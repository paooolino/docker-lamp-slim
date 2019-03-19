<?php
namespace App\Controller;

final class RouteHome {
  private $view;
  
  public function __construct($view) {
    $this->view = $view;
  }
  
  public function __invoke($request, $response, $args) {
    return $this->view->render($response, 'home.html', [
      'greeting' => "Hello, World!"
    ]);
  }
}