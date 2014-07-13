<?php

/**
 * @file
 * Contains Drupal\d8route\D8RouteServiceProvider
 */

namespace Drupal\d8route;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;

/**
 *
 */
class D8RouteServiceProvider extends ServiceProviderBase {

  /**
   * {@inheritdoc}
   */
  public function register(ContainerBuilder $container) {
    
  }

  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container) {
    $definition = $container->getDefinition('d8route.route_subscriber');
    $definition->setClass('Drupal\d8route\Routing\RouteSubscriberAlter');
  }

}
