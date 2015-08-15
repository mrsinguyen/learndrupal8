<?php

/**
 * @file
 * Contains Drupal\d8training\Entity\Course.
 */

namespace Drupal\d8training\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for Course entities.
 */
class CourseViewsData extends EntityViewsData implements EntityViewsDataInterface {
  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['course']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('Course'),
      'help' => $this->t('The Course ID.'),
    );

    return $data;
  }

}
