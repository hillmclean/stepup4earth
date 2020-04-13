<?php
 /**
 *
 * @package   EcoFair Community Programs
 * @author    DCCA <dcca12@gmail.com>
 * @license   GPL-2.0+
 * @copyright 2020 Daniel Andrade
 *
 * @wordpress-plugin
 * Plugin Name: Community Programs
 * Description: This plugins add the community program post type to the Step Up 4 Earth website.
 * Version:     1.0.0
 * Author:      DCCA
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
define( 'ECP_DIR', dirname( __FILE__ ) );

/**
 * General housekeeping and plugin activation tasks
 *
 * @since 1.0.0
 */
include_once( ECP_DIR . '/lib/functions/general.php' );
register_activation_hook( __FILE__, array( 'RF_General', 'plugin_activation' ) );

/**
 * Post types
 *
 * @since 1.0.0
 */
include_once( ECP_DIR . '/lib/functions/post-types.php' );

/**
 * Taxonomies
 *
 * @since 1.0.0
 */
include_once( ECP_DIR . '/lib/functions/taxonomies.php' );
