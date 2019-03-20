<?php
namespace App\Model;

/**
 *  A generic class representing a database item that could be extended.
 */
class Item {

  private $tableName;
  
  public function __construct() {
    //
  }
  
  protected function get($uniqueFieldName, $uniqueFieldValue) {
    $sql = "SELECT * FROM " . $this->tableName . " WHERE " . $uniqueFieldName . " = ?";
    $data = [$uniqueFieldValue];
  }
}