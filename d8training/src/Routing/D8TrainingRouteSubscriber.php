<?php

/**
 * @file
 * Contains \Drupal\d8route\Routing\RouteSubscriber.
 */

namespace Drupal\d8training\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Listens to the dynamic route events.
 */
class D8TrainingRouteSubscriber extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  public function alterRoutes(RouteCollection $collection) {
    // Change path 'd8training/hello-world' to 'd8training/hello-world-alter'.
    if ($route = $collection->get('d8training.content')) {
      $route->setPath('d8training/hello-world-alter');
    }
  }

}
