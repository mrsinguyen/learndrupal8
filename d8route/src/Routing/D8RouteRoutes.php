<?php

/**
 * @file
 * Contains \Drupal\d8route\Routing\D8RouteRoutes.
 */

namespace Drupal\d8route\Routing;

use Symfony\Component\Routing\Route;


class D8RouteRoutes {

  /**
   * {@inheritdoc}
   */
  public function routes() {
    $routes = array();
    $routes['d8route.content'] = new Route(
        '/hello', array(
      '_content' => '\Drupal\d8route\Controller\D8RouteController::content',
      '_title' => 'Hello'
        ), array(
      '_permission' => 'TRUE',
        )
    );
    return $routes;
  }

}
