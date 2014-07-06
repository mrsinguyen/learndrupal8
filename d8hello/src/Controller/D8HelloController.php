<?php
 
namespace Drupal\d8hello\Controller;
 
use Drupal\Core\Controller\ControllerBase;
 
class D8HelloController extends ControllerBase {

  /**
   * Demo for d8 hello page
   */
  public function d8helloPage() {
    return 'Hello Drupal 8';
  }
 
}
