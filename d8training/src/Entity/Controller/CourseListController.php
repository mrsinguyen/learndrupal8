<?php

/**
 * @file
 * Contains Drupal\d8training\Entity\Controller\CourseListController.
 */

namespace Drupal\d8training\Entity\Controller;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Url;

/**
 * Provides a list controller for the Course entity.
 *
 * @ingroup d8training
 */
class CourseListController extends EntityListBuilder {
  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Course ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\d8training\Entity\Course */
    $row['id'] = $entity->id();
    $row['name'] = \Drupal::l(
      $this->getLabel($entity),
      new Url(
        'entity.course.edit_form', array(
          'course' => $entity->id(),
        )
      )
    );
    return $row + parent::buildRow($entity);
  }

}
