<?php
require_once 'Bootstrap.php';

class Controller_Tests extends Madeam_Controller {
  
  public function beforeFilter_name($include = array(), $exclude = array()) {
    
  }
  
  public function indexAction($search = null, $limit = 10, $offset = 0) {
    
  }
  
  public function returnAction() {
    return 'string';
  }
  
}

class TestController extends PHPUnit_Framework_TestCase {
  
  protected $params;
  
  public function setUp() {
    $this->params = array(
      '_controller' => 'tests',
      '_action'     => 'index',
      '_layout'     => 1,
      '_method'     => 'get'
    );
  }
  
  public function testControllerThrowsExceptionWhenMissingExpectedParams() {
    $caught = false;

    try {
      $params = array();
      $controller = new Controller_Tests($params);
    } catch (Madeam_Controller_Exception_MissingExpectedParam $e) {
      $caught = true;
    }
    
    $this->assertTrue($caught);
  }
  
}