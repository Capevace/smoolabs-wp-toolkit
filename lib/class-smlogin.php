<?php

class SMLogin
{
  public static function get_head()
  {
    global $smt_settings;

    // Skip if custom login is disabled
    if (!$smt_settings['custom-login-enabled']) {
      return;
    }

    $background_image_url = array_key_exists('custom-login-logo-url', $smt_settings)
      ? $smt_settings['custom-login-logo-url']['url']
      : 'none';

    $background_size = array_key_exists('custom-login-logo-size', $smt_settings)
      ? $smt_settings['custom-login-logo-size']
      : '100%';
    ?>
      <style>
        #login h1:first-of-type a {
          background-image: url(<?php echo $background_image_url; ?>);
          background-position: center;
          background-size: <?php echo $background_size; ?>;
          width: 100%;
        }

        <?php echo $smt_settings['custom-login-custom-style']; ?>
      </style>
      <script type="text/javascript">
        var smt_login = {

        };
      </script>
    <?php
  }
}
