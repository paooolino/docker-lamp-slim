<?php
namespace App\Model;

class Page extends Item {

  public function __construct() {
    $this->tableName = "pages";
  }

}