<?php

function ztrix_preprocess_user_login(&$vars) { 
  $vars['password_reset_link'] = l(t('Forgot your password?'), 'user/password');
}