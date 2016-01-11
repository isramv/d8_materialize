<?php
/**
 * @param $form
 * @param $form_state
 * @param null $form_id
 *
 * Sets the configuration for the color schema.
 *
 */
function d8_materialize_form_system_theme_settings_alter(&$form, $form_state, $form_id = NULL)
{
  $colors = array(
    'materialize-red' => 'materialize-red',
    'red' => 'red',
    'pink' => 'pink',
    'purple' => 'purple',
    'deep-purple' => 'deep-purple',
    'indigo' => 'indigo',
    'blue' => 'blue',
    'light-blue' => 'light-blue',
    'cyan' => 'cyan',
    'teal' => 'teal',
    'green' => 'green',
    'light-green' => 'light-green',
    'lime' => 'lime',
    'yellow' => 'yellow',
    'amber' => 'amber',
    'orange' => 'orange',
    'deep-orange' => 'deep-orange',
    'brown' => 'brown',
    'blue-grey' => 'blue-grey',
    'grey' => 'grey',
  );
  $intensity = array(
    "lighten-5" => "lighten-5",
    "lighten-4" => "lighten-4",
    "lighten-3" => "lighten-3",
    "lighten-2" => "lighten-2",
    "lighten-1" => "lighten-1",
    "base" => "base",
    "darken-1" => "darken-1",
    "darken-2" => "darken-2",
    "darken-3" => "darken-3",
    "darken-4" => "darken-4",
  );
  $form['primary'] = array(
    '#type' => 'details',
    '#title' => \Drupal::translation()->translate('Primary color schema selector'),
    '#wight' => -10,
    '#open' => TRUE,
  );
  $form['primary']['primary_color'] = array(
    '#type' => 'select',
    '#title' => \Drupal::translation()->translate('Primary color selector'),
    '#default_value' => theme_get_setting('primary_color'),
    '#description' => \Drupal::translation()->translate('Please select the primary color'),
    '#options' => $colors,
    '#weight' => -10,
  );
  $form['primary']['primary_color_intensity'] = array(
    '#type' => 'select',
    '#title' => \Drupal::translation()->translate('Primary color intensity selector'),
    '#default_value' => theme_get_setting('primary_color_intensity'),
    '#description' => \Drupal::translation()->translate('Select the intensity of the primary color'),
    '#options' => $intensity,
    '#weight' => -10,
  );
  $form['secondary'] = array(
    '#type' => 'details',
    '#title' => \Drupal::translation()->translate('Secondary color schema selector'),
    '#wight' => -10,
    '#open' => TRUE,
  );
  $form['secondary']['secondary_color'] = array(
    '#type' => 'select',
    '#title' => \Drupal::translation()->translate('Secondary color selector'),
    '#default_value' => theme_get_setting('secondary_color'),
    '#description' => \Drupal::translation()->translate('Please select the secondary color'),
    '#options' => $colors,
    '#weight' => -10,
  );
  $form['secondary']['secondary_color_intensity'] = array(
    '#type' => 'select',
    '#title' => \Drupal::translation()->translate('Secondary color intensity selector'),
    '#default_value' => theme_get_setting('secondary_color_intensity'),
    '#description' => \Drupal::translation()->translate('Select the intensity of the secondary color'),
    '#options' => $intensity,
    '#weight' => -10,
  );
  $form['form_color'] = array(
    '#type' => 'details',
    '#title' => \Drupal::translation()->translate('Form color schema selector'),
    '#wight' => -10,
    '#open' => TRUE,
  );
  $form['form_color']['form_color'] = array(
    '#type' => 'select',
    '#title' => \Drupal::translation()->translate('Form color selector'),
    '#default_value' => theme_get_setting('form_color'),
    '#description' => \Drupal::translation()->translate('Please select the form elements color'),
    '#options' => $colors,
    '#weight' => -10,
  );
  $form['form_color']['form_color_intensity'] = array(
    '#type' => 'select',
    '#title' => \Drupal::translation()->translate('Form color intensity selector'),
    '#default_value' => theme_get_setting('form_color_intensity'),
    '#description' => \Drupal::translation()->translate('Select the intensity of the form elements color'),
    '#options' => $intensity,
    '#weight' => -10,
  );
  // Template settings test.
  $template_options = array(
    'default' => 'default',
    'single_page' => 'single_page', // This template will remove all the container from the page template.
    'blog' => 'blog' // This is going to create a page post template and add padding and shadow to the page container.
  );
  $form['page_twig_template'] = array(
    '#type' => 'details',
    '#title' => \Drupal::translation()->translate('Chose template'),
    '#wight' => -9,
    '#open' => TRUE,
  );
  $form['page_twig_template']['d8_template'] = array(
    '#type' => 'select',
    '#title' => \Drupal::translation()->translate('Form color selector'),
    '#default_value' => theme_get_setting('d8_template'),
    '#description' => \Drupal::translation()->translate('Please select the form elements color'),
    '#options' => $template_options,
  );

}

