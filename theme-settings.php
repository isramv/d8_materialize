<?php

function d8_materialize_form_system_theme_settings_alter(&$form, $form_state, $form_id = NULL) {
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
        'shades' => 'shades',
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
    $form['d8_settings'] = array(
        '#type' => 'details',
        '#title' => \Drupal::translation()->translate('Primary color schema selector'),
        '#wight' => -10,
        '#open' => TRUE,
    );
    $form['d8_settings']['primary_color'] = array(
        '#type' => 'select',
        '#title' => t('Primary color selector'),
        '#default_value' => theme_get_setting('primary_color'),
        '#description' => t('Please select the primary color'),
        '#options' => $colors,
        '#weight' => -10,
    );
    $form['d8_settings']['primary_color_intensity'] = array(
        '#type' => 'select',
        '#title' => t('Primary color intensity selector'),
        '#default_value' => theme_get_setting('primary_color_intensity'),
        '#description' => t('Select the intensity of the primary color'),
        '#options' => $intensity,
        '#weight' => -10,
    );
    $form['d8_settings']['secondary_color'] = array(
        '#type' => 'select',
        '#title' => t('Secondary color selector'),
        '#default_value' => theme_get_setting('secondary_color'),
        '#description' => t('Please select the secondary color'),
        '#options' => $colors,
        '#weight' => -10,
    );
    $form['d8_settings']['secondary_color_intensity'] = array(
        '#type' => 'select',
        '#title' => t('Secondary color intensity selector'),
        '#default_value' => theme_get_setting('secondary_color_intensity'),
        '#description' => t('Select the intensity of the secondary color'),
        '#options' => $intensity,
        '#weight' => -10,
    );
}