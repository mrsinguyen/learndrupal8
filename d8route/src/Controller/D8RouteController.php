<?php

namespace Drupal\d8route\Controller;

use Drupal\Core\Controller\ControllerBase;
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

}
