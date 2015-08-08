<?php

/**
 * @file
 * Contains Drupal\d8training\Entity\Workshop.
 */

namespace Drupal\d8training\Entity;

use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\d8training\WorkshopInterface;
use Drupal\user\UserInterface;

/**
 * Defines the Workshop entity.
 *
 * @ingroup d8training
 *
 * @ContentEntityType(
 *   id = "workshop",
 *   label = @Translation("Workshop"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\d8training\Entity\Controller\WorkshopListController",
 *     "views_data" = "Drupal\d8training\Entity\WorkshopViewsData",
 *
 *     "form" = {
 *       "default" = "Drupal\d8training\Entity\Form\WorkshopForm",
 *       "add" = "Drupal\d8training\Entity\Form\WorkshopForm",
 *       "edit" = "Drupal\d8training\Entity\Form\WorkshopForm",
 *       "delete" = "Drupal\d8training\Entity\Form\WorkshopDeleteForm",
 *     },
 *     "access" = "Drupal\d8training\WorkshopAccessControlHandler",
 *   },
 *   base_table = "workshop",
 *   admin_permission = "administer Workshop entity",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "name",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/workshop/{workshop}",
 *     "edit-form" = "/admin/workshop/{workshop}/edit",
 *     "delete-form" = "/admin/workshop/{workshop}/delete"
 *   },
 *   field_ui_base_route = "workshop.settings"
 * )
 */
class Workshop extends ContentEntityBase implements WorkshopInterface {
  /**
   * {@inheritdoc}
   */
  public static function preCreate(EntityStorageInterface $storage_controller, array &$values) {
    parent::preCreate($storage_controller, $values);
    $values += array(
      'user_id' => \Drupal::currentUser()->id(),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getCreatedTime() {
    return $this->get('created')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function getChangedTime() {
    return $this->get('changed')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function getOwner() {
    return $this->get('user_id')->entity;
  }

  /**
   * {@inheritdoc}
   */
  public function getOwnerId() {
    return $this->get('user_id')->target_id;
  }

  /**
   * {@inheritdoc}
   */
  public function setOwnerId($uid) {
    $this->set('user_id', $uid);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function setOwner(UserInterface $account) {
    $this->set('user_id', $account->id());
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    $fields['id'] = BaseFieldDefinition::create('integer')
      ->setLabel(t('ID'))
      ->setDescription(t('The ID of the Workshop entity.'))
      ->setReadOnly(TRUE);

    $fields['uuid'] = BaseFieldDefinition::create('uuid')
      ->setLabel(t('UUID'))
      ->setDescription(t('The UUID of the Workshop entity.'))
      ->setReadOnly(TRUE);

    $fields['name'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Name'))
      ->setDescription(t('The name of the Workshop entity.'))
      ->setSettings(array(
        'max_length' => 50,
        'text_processing' => 0,
      ))
      ->setDefaultValue('')
      ->setDisplayOptions('view', array(
        'label' => 'above',
        'type' => 'string',
        'weight' => -4,
      ))
      ->setDisplayOptions('form', array(
        'type' => 'string_textfield',
        'weight' => -4,
      ))
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE);

    $fields['location'] = BaseFieldDefinition::create('string')
        ->setLabel(t('Location'))
        ->setDescription(t('The location of the Workshop entity.'))
        ->setSettings(array(
          'max_length' => 50,
          'text_processing' => 0,
        ))
        ->setDefaultValue('')
        ->setDisplayOptions('view', array(
          'label' => 'above',
          'type' => 'string',
          'weight' => -4,
        ))
        ->setDisplayOptions('form', array(
          'type' => 'string_textfield',
          'weight' => -4,
        ))
        ->setDisplayConfigurable('form', TRUE)
        ->setDisplayConfigurable('view', TRUE);

        $fields['start_date'] = BaseFieldDefinition::create('created')
            ->setLabel(t('Start Date'))
            ->setDisplayConfigurable('form', TRUE)
            ->setDisplayConfigurable('view', TRUE);

      $fields['min_score'] = BaseFieldDefinition::create('float')
        ->setLabel(t('Min Score'))
        ->setDescription(t('The min score to pass the Workshop entity.'))
        ->setDefaultValue(5)
        ->setDisplayOptions('view', array(
          'label' => 'above',
          'type' => 'number',
          'weight' => -4,
        ))
        ->setDisplayOptions('form', array(
          'type' => 'number',
          'weight' => -4,
        ))
        ->setDisplayConfigurable('form', TRUE)
        ->setDisplayConfigurable('view', TRUE);

    $fields['langcode'] = BaseFieldDefinition::create('language')
      ->setLabel(t('Language code'))
      ->setDescription(t('The language code for the Workshop entity.'));

    $fields['created'] = BaseFieldDefinition::create('created')
      ->setLabel(t('Created'))
      ->setDescription(t('The time that the entity was created.'));

    $fields['changed'] = BaseFieldDefinition::create('changed')
      ->setLabel(t('Changed'))
      ->setDescription(t('The time that the entity was last edited.'));

    return $fields;
  }

}
