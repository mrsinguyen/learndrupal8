<?php

/**
 * @file
 * Contains \Drupal\d8route\Routing\D8RouteRoutes.
 */

namespace Drupal\d8route\Routing;

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

class D8RouteRoutes {

  /**
   * {@inheritdoc}
   */
  public function routes() {
    $route_collection = new RouteCollection();
    $route = new Route(
        '/hello', 
        array(
          '_content' => '\Drupal\d8route\Controller\D8RouteController::content',
          '_title' => 'Hello'
        ), 
        array(
          '_permission' => 'TRUE',
        )
    );
    $route_collection->add('d8route.content', $route);

    return $route_collection;
  }

}
