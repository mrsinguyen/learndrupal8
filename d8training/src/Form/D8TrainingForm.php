<?php

/**
 * @file
 * Contains \Drupal\d8training\Form\D8TrainingForm.
 */

namespace Drupal\d8training\Form;

use Drupal\Core\Form\FormBase;

/**
 * Provides a d8form form.
 */
class D8TrainingForm extends FormBase {

  /**
   * {@inheritdoc}.
   */
  public function getFormID() {
    return 'd8training_form';
  }

  /**
   * {@inheritdoc}.
   */
  public function buildForm(array $form, array &$form_state) {
    // Create a $form API array.
    $form['phone_number'] = array(
      '#type' => 'tel',
      '#title' => $this->t('Your phone number')
    );
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
      '#button_type' => 'primary',
    );

    return $form;
  }

  /**
   * {@inheritdoc}.
   */
  public function validateForm(array &$form, array &$form_state) {
    if (strlen($form_state['values']['phone_number']) < 3) {
      $this->setFormError('phone_number', $form_state, $this->t('The phone number is too short. Please enter a full phone number.'));
    }
  }

  /**
   * {@inheritdoc}.
   */
  public function submitForm(array &$form, array &$form_state) {
    drupal_set_message($this->t('Your phone number is @number', array('@number' => $form_state['values']['phone_number'])));
  }

}
