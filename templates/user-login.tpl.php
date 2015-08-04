<?php
/*print '<pre>';
print_r($variables);
print '</pre>';*/
//dpm($variables);
?>
<p><?php print render($intro_text); ?></p>
<div class="ztrix-user-login-form-wrapper">
  <?php //print drupal_render_children($form); ?>
  <?php print drupal_render($form['name']); ?>
  <?php print drupal_render($form['pass']); ?>
  <?php print drupal_render($form['form_build_id']); ?>
  <?php print drupal_render($form['form_id']); ?>
  <?php print drupal_render($form['actions']); ?>
  <?php print $password_reset_link; ?>
</div>