<?php

/**
 * @file
 * Contains Drupal\d8training\D8RouteServiceProvider
 */

namespace Drupal\d8training;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;

/**
 *
 */
class D8TrainingServiceProvider extends ServiceProviderBase {

  /**
   * {@inheritdoc}
   */
  public function register(ContainerBuilder $container) {
    
  }

  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container) {
    $definition = $container->getDefinition('d8training.route_subscriber');
    $definition->setClass('Drupal\d8training\Routing\D8TrainingRouteSubscriberAlter');
  }

}
