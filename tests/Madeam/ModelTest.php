<?php

require_once 'Bootstrap.php';


class Model_Test extends Madeam_Model_ActiveRecord {
  
}

class ModelTest extends PHPUnit_Framework_TestCase {
  
  public function testConnectionConnects() {
    $model = new Model_Test('test');
  }
  
}