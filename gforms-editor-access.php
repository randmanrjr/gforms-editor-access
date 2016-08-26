<?php
/*
Plugin Name: Gravity Forms Editor Access
Description: Add all Gravity Forms capabilities to Editor role.
Version: 1.0
Author: randmanrjr
Author URI: https://github.com/randmanrjr
*/
if ( ! defined( 'ABSPATH' ) ) {
    exit; // disable direct access
}

/**
 * Add all Gravity Forms capabilities to Editor role.
 * Runs during plugin activation.
 *
 * @access public
 * @return void
 */
function activate_gform_editor_access() {

  $role = get_role( 'editor' );
  $role->add_cap( 'gform_full_access' );
}
// Register our activation hook
register_activation_hook( __FILE__, 'activate_gform_editor_access' );

/**
 * Remove Gravity Forms capabilities from Editor role.
 * Runs during plugin deactivation.
 *
 * @access public
 * @return void
 */
function deactivate_gform_editor_access() {

 $role = get_role( 'editor' );
 $role->remove_cap( 'gform_full_access' );
}
// Register our de-activation hook
register_deactivation_hook( __FILE__, 'deactivate_gform_editor_access' );
