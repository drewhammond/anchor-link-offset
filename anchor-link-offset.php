<?php
/**
 * Anchor Link Offset
 *
 * This plugin resolves the conflicts between a fixed navigation bar and
 * same-page anchor "jump-to" links.
 *
 * @package   Anchor_Link_Offset
 * @author    Drew Hammond <drew@marketwarp.com>
 * @license   GPL-2.0+
 * @link      http://www.marketwarp.com
 * @copyright 2014 Drew Hammond
 *
 * @wordpress-plugin
 * Plugin Name:       Anchor Link Offset
 * Plugin URI:        http://www.marketwarp.com/plugins/anchor-link-offset/
 * Description:       Plugin to correct the offset caused by using a fixed navigation bar and jump-to anchor links
 * Version:           1.0.0
 * Author:            Drew Hammond
 * Author URI:        http://www.marketwarp.com
 * Text Domain:       anchor-link-offset
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/drewhammond/anchor-link-offset
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `class-plugin-name.php` with the name of the plugin's class file
 *
 */
require_once( plugin_dir_path( __FILE__ ) . 'public/class-anchor-link-offset.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 *
 * @TODO:
 *
 * - replace Anchor_Link_Offset with the name of the class defined in
 *   `class-plugin-name.php`
 */
register_activation_hook( __FILE__, array( 'Anchor_Link_Offset', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Anchor_Link_Offset', 'deactivate' ) );

/*
 * @TODO:
 *
 * - replace Anchor_Link_Offset with the name of the class defined in
 *   `class-plugin-name.php`
 */
add_action( 'plugins_loaded', array( 'Anchor_Link_Offset', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `class-plugin-name-admin.php` with the name of the plugin's admin file
 * - replace Anchor_Link_Offset_Admin with the name of the class defined in
 *   `class-plugin-name-admin.php`
 *
 * If you want to include Ajax within the dashboard, change the following
 * conditional to:
 *
 * if ( is_admin() ) {
 *   ...
 * }
 *
 * The code below is intended to to give the lightest footprint possible.
 */
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-anchor-link-offset-admin.php' );
	add_action( 'plugins_loaded', array( 'Anchor_Link_Offset_Admin', 'get_instance' ) );

}
