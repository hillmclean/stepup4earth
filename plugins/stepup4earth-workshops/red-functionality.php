<?php
 /**
 *
 * @package   EcoFair Workshops
 * @author    DCCA <dcca12@gmail.comment>
 * @license   GPL-2.0+
 * @copyright 2020 Daniel Andrade
 *
 * @wordpress-plugin
 * Plugin Name: Workshops
 * Description: This plugins add the workshops post type to the Step Up 4 Earth website.
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
define( 'EW_DIR', dirname( __FILE__ ) );

/**
 * General housekeeping and plugin activation tasks
 *
 * @since 1.0.0
 */
include_once( EW_DIR . '/lib/functions/general.php' );
register_activation_hook( __FILE__, array( 'EW_General', 'plugin_activation' ) );

/**
 * Post types
 *
 * @since 1.0.0
 */
include_once( EW_DIR . '/lib/functions/post-types.php' );

/**
 * Taxonomies
 *
 * @since 1.0.0
 */
include_once( EW_DIR . '/lib/functions/taxonomies.php' );
