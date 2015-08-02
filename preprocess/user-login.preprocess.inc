<?php

function ztrix_preprocess_user_login(&$vars) { 
  $vars['intro_text'] = t('This is my awesome login form');
}