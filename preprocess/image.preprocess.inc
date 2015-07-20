<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * Ztrix theme.
 */

// Remove Height and Width from Drupal Images
function ztrix_preprocess_image(&$variables) {
  foreach (array('width', 'height') as $key) {
    unset($variables[$key]);
  }
}