<?php

/**
 * @file
 * Contains Drupal\d8training\Entity\Controller\WorkshopListController.
 */

namespace Drupal\d8training\Entity\Controller;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Url;

/**
 * Provides a list controller for the Workshop entity.
 *
 * @ingroup d8training
 */
class WorkshopListController extends EntityListBuilder {
  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Workshop ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\d8training\Entity\Workshop */
    $row['id'] = $entity->id();
    $row['name'] = \Drupal::l(
      $this->getLabel($entity),
      new Url(
        'entity.workshop.edit_form', array(
          'workshop' => $entity->id(),
        )
      )
    );
    return $row + parent::buildRow($entity);
  }

}
