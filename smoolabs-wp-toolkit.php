<?php

/**
 * Plugin Name: Smoolabs WP Toolkit
 * Version: 1.0.0
 * Plugin URI: http://mateffy.me/smoolabs-wp-toolkit
 * Description: Wordpress utilities for our digital agency.
 * Author: Lukas von Mateffy
 * Author URI: https://mateffy.me
 * Text Domain: smoolabs-wp-toolkit
 * License: GPLv2 or later
 */

if (!defined('ABSPATH')) {
  die('-1');
}

if (!defined('SM_WPT')) {
  define('SM_WPT', __FILE__);
}

if (!defined('SM_WPT_VERSION')) {
  define('SM_WPT_VERSION', '1.0.0');
}

require_once dirname(SM_WPT).'/vendor/plugin-update-checker/plugin-update-checker.php';
$ymme_updates = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/Capevace/smoolabs-wp-toolkit',
	__FILE__,
	'smoolabs-wp-toolkit',
  12
);

require_once dirname(SM_WPT).'/lib/includes.php';
require_once dirname(SM_WPT).'/admin/admin-init.php';

require_once dirname(SM_WPT).'/hooks.php';
