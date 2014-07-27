<?php

/**
 * @file
 * Contains \Drupal\d8training\Routing\D8TrainingRoutes.
 */

namespace Drupal\d8training\Routing;

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

class D8TrainingRoutes {

  /**
   * {@inheritdoc}
   */
  public function routes() {
    $route_collection = new RouteCollection();
    $route = new Route(
        'd8training/hello-world', 
        array(
          '_content' => '\Drupal\d8training\Controller\D8TrainingController::contentHelloWorld',
          '_title' => 'Hello World'
        ), 
        array(
          '_permission' => 'TRUE',
        )
    );
    $route_collection->add('d8training.content', $route);

    return $route_collection;
  }

}
