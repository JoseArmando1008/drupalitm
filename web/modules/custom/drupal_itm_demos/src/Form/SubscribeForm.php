<?php

namespace Drupal\drupal_itm_demos\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class SubscribeForm.
 */
class SubscribeForm extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'subscribe_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['email'] = [
      '#type' => 'email',
      '#required' => TRUE,
      '#title' => $this->t('Email'),
      '#description' => $this->t('Enter your email'),
      '#weight' => '0',
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Display result.
    $email = $form_state->getValue('email');
    foreach ($form_state->getValues() as $key => $value) {
      drupal_set_message($this->t('Entered email was @email', ['@email' => $email]));
    }

  }

}
