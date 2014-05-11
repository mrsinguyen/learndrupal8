<?php
 
namespace Drupal\d8form\Controller;
 
use Drupal\Core\Controller\ControllerBase;
 
class D8FormController extends ControllerBase {

  /**
   * Demo for d8 form page
   */
  public function d8formPage() {
    return \Drupal::formBuilder()->getForm('Drupal\d8form\Form\D8Form');
  }
 
}
