<?php

function d8_materialize_form_system_theme_settings_alter(&$form, $form_state, $form_id = NULL) {
    $form['dark_theme'] = array(
        '#type' => 'checkbox',
        '#title' => t('Dark theme'),
        '#default_value' => theme_get_setting('dark_theme'),
        '#description' => t('Use the dark theme settings'),
        '#weight' => -10,
    );
}