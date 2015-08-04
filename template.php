<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * Ztrix theme.
 */
function ztrix_theme() {
  $items = array();
  
  $items['user_login'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'ztrix') . '/templates',
    'template' => 'user-login',
    'preprocess functions' => array(
      'ztrix_preprocess_user_login',
    ),
  );
  
  $items['user_registration_form'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'ztrix') . '/templates',
    'template' => 'user-registration-form',
    'preprocess functions' => array(
      'ztrix_preprocess_user_registration_form',
    ),
  );
  
  $items['user_pass'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'ztrix') . '/templates',
    'template' => 'user-pass',
    'preprocess functions' => array(
      'ztrix_preprocess_user_pass',
    ),
  );
  
  return $items;
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function ztrix_form_user_login_alter(&$form, &$form_state) {
  unset($form['name']['#description']);
  unset($form['pass']['#description']);
  $form['actions']['submit']['#value'] = 'Sign In';
  $form['actions']['submit']['#attributes']['class'][] = 'btn';
}