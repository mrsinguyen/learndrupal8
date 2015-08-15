<?php

/**
 * @file
 * Contains Drupal\d8training\Entity\Workshop.
 */

namespace Drupal\d8training\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for Workshop entities.
 */
class WorkshopViewsData extends EntityViewsData implements EntityViewsDataInterface {
  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['workshop']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('Workshop'),
      'help' => $this->t('The Workshop ID.'),
    );

    return $data;
  }

}
