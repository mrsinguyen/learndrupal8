<?php

/**
 * @file
 * Contains Drupal\d8training\CourseInterface.
 */

namespace Drupal\d8training;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Course entities.
 *
 * @ingroup d8training
 */
interface CourseInterface extends ContentEntityInterface, EntityOwnerInterface {
  // Add get/set methods for your configuration properties here.

}
