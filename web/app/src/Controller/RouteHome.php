<?php
namespace App\Controller;

use \App\Models\Page;

final class Home {
  private $view;
  
  public function __construct($view) {
    $this->view = $view;
  }
  
  public function __invoke($request, $response, $args) {
    
    $page = new Page();
    $page->get("slug", $args["slug"]);
    
    return $this->view->render($response, 'home.html', [
      $page => $page,
      'greeting' => "Hello, World!"
    ]);
  }
}