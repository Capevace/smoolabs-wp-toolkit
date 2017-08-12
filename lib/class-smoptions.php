<?php

class SMOptions {
  public static function init_options()
  {
    global $opt_name;

    $args = array(
      'opt_name' => 'smoolabs_toolkit_settings',
      'use_cdn' => TRUE,
      'display_name' => 'smoolabs WordPress Toolkit',
      'page_slug' => 'smoolabs_toolkit_settings',
      'page_title' => 'Smoolabs WordPress Toolkit',
      'update_notice' => TRUE,
      'intro_text' => "Using these settings is only recommended, if you know what you're doing.",
      'menu_type' => 'submenu',
      'menu_title' => 'smoolabs Toolkit',
      'allow_sub_menu' => TRUE,
      'page_parent' => 'tools.php',
      'page_parent_post_type' => 'your_post_type',
      'default_mark' => '*',
      'hints' => array(
        'icon_position' => 'right',
        'icon_color' => 'lightgray',
        'icon_size' => 'normal',
        'tip_style' => array(
          'color' => 'light',
        ),
        'tip_position' => array(
          'my' => 'top left',
          'at' => 'bottom right',
        ),
        'tip_effect' => array(
          'show' => array(
            'duration' => '500',
            'event' => 'mouseover',
          ),
          'hide' => array(
            'duration' => '500',
            'event' => 'mouseleave unfocus',
          ),
        ),
      ),
      'output' => TRUE,
      'output_tag' => TRUE,
      'settings_api' => TRUE,
      'cdn_check_time' => '1440',
      'compiler' => TRUE,
      'page_permissions' => 'manage_options',
      'save_defaults' => TRUE,
      'show_import_export' => TRUE,
      'database' => 'options',
      'transient_time' => '3600',
      'network_sites' => TRUE,
      'hide_reset' => TRUE,
      'global_variable' => 'smt_settings',
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
      'url'   => 'https://github.com/Capevace',
      'title' => 'Visit us on GitHub',
      'icon'  => 'el el-github'
      //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );

    Redux::setArgs( $opt_name, $args );

    // $tabs = array();
    // Redux::setHelpTab( $opt_name, $tabs );

    /* Login Page Section */
    Redux::setSection( $opt_name, array(
      'title'      => 'Login Page',
      'desc'       => 'Settings for a customized login page.',
      'id'         => 'login-page',
      'fields'     => array(
        array(
          'id'       => 'custom-login-enabled',
          'type'     => 'checkbox',
          'title'    => 'Custom Login Enabled',
          'subtitle' => 'Enable the custom login screen.',
          // 'desc'     => __( 'Field Description', 'redux-framework-demo' ),
          'default'  => '1',
        ),
        array(
          'id'       => 'custom-login-logo-url',
          'type'     => 'media',
          'title'    => 'Login Logo',
          'subtitle' => 'Set a custom logo.',
        ),
        array(
          'id'       => 'custom-login-logo-size',
          'type'     => 'text',
          'title'    => 'Login Logo Size',
          'subtitle' => 'Set the size of the logo.',
          'default'  => '100%'
        ),
        array(
          'id'       => 'custom-login-custom-style',
          'type'     => 'ace_editor',
          'title'    => 'Custom CSS',
          'subtitle' => 'Set some custom css to style the rest.',
          'default'  => "/* Style the login button */\n#login .button {\n\n}\n\n/* Style the login inputs */\n#login .input {\n\n}\n\n/* Style the login labels */\n#login label {\n\n}\n\n/* Style the 'Remember me' checkbox\n * (this is the surrounding <p>)\n */\n#login .forgetmenot {\n\n}\n\n/* Style the login box */\n#loginform {}\n",
          'mode'     => 'css',
          'theme'    => 'chrome'
        ),
      )
    ));

    /* Maintenance Mode Section */
    Redux::setSection( $opt_name, array(
      'title'      => 'Maintenance Mode',
      'desc'       => 'Settings for the maintenance mode.',
      'id'         => 'maintenance-page',
      'fields'     => array(
        array(
          'id'       => 'maintenance-mode-enabled',
          'type'     => 'checkbox',
          'title'    => 'Maintenance Mode Enabled',
          'subtitle' => 'Enable maintenance mode.',
          'default'  => '0',
        ),
        array(
          'id'       => 'maintenance-mode-text',
          'type'     => 'textarea',
          'title'    => 'Maintenance Mode Message',
          'subtitle' => 'The message displayed in maintenance mode.',
          'default'  => 'This page is currently in maintenance mode. We\'ll be back with you shortly.',
        ),
      )
    ));
  }
}
