<?php

namespace Drupal\d8training\Controller;

use Drupal\Component\Utility\Xss;
use Drupal\Core\Controller\ControllerBase;
use Drupal\user\UserInterface;
use Symfony\Component\HttpFoundation\Request;

class D8TrainingController extends ControllerBase {

  /**
   * 
   * @param \Symfony\Component\HttpFoundation\Request $request
   */
  public function contentHello(Request $request) {

    return array(
      '#markup' => t('Hello Drupal 8!'),
    );
  }
  
  /**
   * 
   * @param \Symfony\Component\HttpFoundation\Request $request
   */
  public function contentHelloWorld(Request $request) {

    return array(
      '#markup' => t('Hello World!'),
    );
  }
  
  public function d8trainingTitle() {
    return $this->t('Drupal 8 Form');
  }
  
  /**
   * Demo for d8 form page
   */
  public function d8trainingFormPage() {
    return \Drupal::formBuilder()->getForm('Drupal\d8training\Form\D8TrainingForm');
  }
  
  public function contentUser(UserInterface $user = NULL) {
    $name = $user ? Xss::filter($user->getUsername()) : '';
    
    return array(
      '#markup' => t('Hello %name', array('%name' => $name)),
    );
  }

}
