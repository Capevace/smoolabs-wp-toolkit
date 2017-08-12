<?php

/**
* For full documentation, please visit: http://docs.reduxframework.com/
* For a more extensive sample-config file, you may look at:
* https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
*/

if ( ! class_exists( 'Redux' ) ) {
  return;
}

// This is your option name where all the Redux data is stored.
$opt_name = "smt_settings";

/**
* ---> SET ARGUMENTS
* All the possible arguments for Redux.
* For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
* */

$theme = wp_get_theme(); // For use with some settings. Not necessary.

SMOptions::init_options();
