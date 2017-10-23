<?php

/**

 * @file

 * Contains \Drupal\umd_schoolwide_header\Utility\UmdHeaderConfigForm.

 */

namespace Drupal\umd_schoolwide_header\Utility;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class UmdHeaderConfigForm extends ConfigFormBase {

  /**

   * {@inheritdoc}

   */

  public function getFormId() {

    return 'umd_schoolwide_header_config_form';

  }

  /**

   * {@inheritdoc}

   */

  public function buildForm(array $form, FormStateInterface $form_state) {

    $form = parent::buildForm($form, $form_state);

    $config = $this->config('umd_schoolwide_header.settings');

    $form['help_text'] = array(
      '#markup' => '
      <p>If you wish to customize the UMD Header, paste the embed code generated from the <a href="https://umd-header.umd.edu/generator/">UMD Header Generator</a> here. You will also need to clear caches for the site in order to show changes.</p>
      ',
    );

    // General settings.
    $form['umd_schoolwide_header_settings'] = array(
      '#type' => 'details',
      '#title' => 'Settings',
      '#open' => TRUE
    );

    // URL of the API.
    $form['umd_schoolwide_header_settings']['embed'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Embed Code'),
      '#default_value' => $config->get('umd_schoolwide_header.embed'),
      '#required' => FALSE,
      '#description' => 'Snippet from UMD Schoolwide Header Generator.',
    );

    return $form;

  }

  /**

   * {@inheritdoc}

   */

  public function submitForm(array &$form, FormStateInterface $form_state) {

    $config = $this->config('umd_schoolwide_header.settings');

    $config->set('umd_schoolwide_header.embed', $form_state->getValue('embed'));

    $config->save();

    return parent::submitForm($form, $form_state);

  }

  /**

   * {@inheritdoc}

   */

  protected function getEditableConfigNames() {

    return [

      'umd_schoolwide_header.settings',

    ];

  }

}
