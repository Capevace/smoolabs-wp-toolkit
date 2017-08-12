<?php

class SMMaintenance
{
  public static function redirect()
  {
    global $smt_settings;

    // Allow logged in users to see the site
    if ($smt_settings['maintenance-mode-enabled']) {
      if (!is_user_logged_in()) {
        include_once dirname(SM_WPT).'/public/maintenance/template.php';
        exit();
      }
    }
  }
}
