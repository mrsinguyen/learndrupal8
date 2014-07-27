<?php

/**
 * @file
 * Contains \Drupal\d8training\Routing\RouteSubscriber.
 */

namespace Drupal\d8training\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Listens to the dynamic route events.
 */
class D8TrainingRouteSubscriberAlter extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  public function alterRoutes(RouteCollection $collection) {
    // Change path 'd8training/hello-world-alter' to 'd8training/hello-world-alter-new'.
    if ($route = $collection->get('d8training.content')) {
      $route->setPath('d8training/hello-world-alter-new');
    }
  }

}
