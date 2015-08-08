<?php

/**
 * @file
 * Contains Drupal\d8training\CourseAccessControlHandler.
 */

namespace Drupal\d8training;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Course entity.
 *
 * @see \Drupal\d8training\Entity\Course.
 */
class CourseAccessControlHandler extends EntityAccessControlHandler {
  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, $langcode, AccountInterface $account) {

    switch ($operation) {
      case 'view':
        return AccessResult::allowedIfHasPermission($account, 'view course entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit course entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete course entities');
    }

    return AccessResult::allowed();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add course entities');
  }

}
