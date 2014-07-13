<?php

/**
 * @file
 * Contains \Drupal\d8route\Routing\RouteSubscriber.
 */

namespace Drupal\d8route\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Listens to the dynamic route events.
 */
class RouteSubscriberAlter extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  public function alterRoutes(RouteCollection $collection) {
    // Change path '/hello' to '/hello-alter'.
    if ($route = $collection->get('d8route.content')) {
      $route->setPath('/hello-alter-new');
    }
  }

}
