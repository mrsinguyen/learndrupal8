<?php

namespace Drupal\d8route\Controller;

use Drupal\Component\Utility\Xss;
use Drupal\Core\Controller\ControllerBase;
use Drupal\user\UserInterface;
use Symfony\Component\HttpFoundation\Request;

class D8RouteController extends ControllerBase {

  /**
   * 
   * @param \Symfony\Component\HttpFoundation\Request $request
   */
  public function content(Request $request) {

    return array(
      '#markup' => t('Hello Drupal 8!'),
    );
  }

  public function contentUser(UserInterface $user = NULL) {
    $name = $user ? Xss::filter($user->getUsername()) : '';
    
    return array(
      '#markup' => t('Hello %name', array('%name' => $name)),
    );
  }

}
