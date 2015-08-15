<?php

/**
 * @file
 * Contains Drupal\d8training\WorkshopInterface.
 */

namespace Drupal\d8training;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Workshop entities.
 *
 * @ingroup d8training
 */
interface WorkshopInterface extends ContentEntityInterface, EntityOwnerInterface {
  // Add get/set methods for your configuration properties here.

}
