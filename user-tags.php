<?php
/**
 * Plugin Name: User Taxonomy & Directory
 * Author: Umesh Kumar<umeshsingla05@gmail.com>
 * Author URI:https://codechutney.com
 * Description: Provides user-friendly interface to register user taxonomies and a User directory block with Search, Filter, Sort functionality.
 * Version: 2.0
 * Reference :  http://justintadlock.com/archives/2011/10/20/custom-user-taxonomies-in-wordpress
 * Text Domain : user_taxonomy
 */

define( 'UT_URL', plugins_url( '', __FILE__ ) );
define( 'UT_DIR', trailingslashit( __DIR__ ) );

define( 'UT_VERSION', '2.0' );

// Includes necessary files.
require_once UT_DIR . 'inc/functions.php';
require_once UT_DIR . 'inc/class-usertags.php';
require_once UT_DIR . 'user-directory/class-user-tags-user-directory.php';
require_once UT_DIR . 'admin/taxonomies/class-user-tags-taxonomies.php';
require_once UT_DIR . 'admin/taxonomies/class-user-tags-taxonomy-list.php';
require_once UT_DIR . 'admin/user-profile/class-user-tags-profile.php';

// Register plugin activation hook, Set/update plugin version.
register_activation_hook( __FILE__, 'ut_activated' );

/**
 * Store plugin version
 *
 * @return void
 */
function ut_activated() {

	$version = get_option( 'ut_version' );
	if ( ! $version || UT_VERSION !== $version ) {
		update_option( 'ut_version', UT_VERSION );
	}
}
