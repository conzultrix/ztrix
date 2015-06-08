<?php

/**
 * @file
 * Contains the theme function override for 'breadcrumb'.
 */

/**
 * Returns HTML for a breadcrumb trail.
 *
 * @ingroup themeable
 */
function ztrix_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];

  if (!empty($breadcrumb)) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
    $breadcrumb[] = drupal_get_title();

    // Override Drupal core breadcrumb item imploding (no arrow).
    $output .= '<ul class="breadcrumb"><li>' . implode(' &nbsp;&nbsp;/&nbsp;&nbsp;</li><li>', $breadcrumb) . '</li></ul>';
    return $output;
  }
}
