<?php
 /**
 *
 * @package   StepUp4Earth Projects
 * @author    Hillary McLean <hilldmc@gmail.com>
 * @license   GPL-2.0+
 * @copyright 2020 Hillary McLean
 *
 * @wordpress-plugin
 * Plugin Name: Projects
 * Description: This plugin adds projects to the StepUp4Earth website.
 * Version:     1.0.0
 * Author:      Hillary
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Define plugin directory
 *
 * @since 1.0.0
 */
define( 'SUP_DIR', dirname( __FILE__ ) );

/**
 * General housekeeping and plugin activation tasks
 *
 * @since 1.0.0
 */
include_once( SUP_DIR . '/lib/functions/general.php' );
register_activation_hook( __FILE__, array( 'SUP_General', 'plugin_activation' ) );

/**
 * Post types
 *
 * @since 1.0.0
 */
include_once( SUP_DIR . '/lib/functions/post-types.php' );

/**
 * Taxonomies
 *
 * @since 1.0.0
 */
include_once( SUP_DIR . '/lib/functions/taxonomies.php' );
