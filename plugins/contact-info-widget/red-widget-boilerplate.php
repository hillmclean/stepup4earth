<?php
/**
 * Contact Info Widget
 *
 *
 * Lightly forked from the WordPress Widget Boilerplate by @tommcfarlin.
 *
 * @package   Contact-Info-Widget
 * @author    Sofonias Yohanes & Hillary McLean
 * @license   GPL-2.0+
 * @link      https://github.com/sofonias101
 * @copyright 2020 Sofonias Yohanes & Hillary McLean
 *
 * @wordpress-plugin
 * Plugin Name:       Contact Info Widget
 * Plugin URI:        https://github.com/sofonias101
 * Description:       A widget for displaying the organization's contact information on the website.
 * Version:           1.0.0
 * Author:            Sofonias & Hillary
 * Author URI:        https://github.com/sofonias101
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
	exit;
}

// Contact Info Widget: change 'Widget_Name' to the name of your plugin
class Contact_Info_Widget extends WP_Widget {

    /**
     * Contact Info Widget - Rename "widget-name" to the name your your widget
     *
     * Unique identifier for your widget.
     *
     * @since    1.0.0
     *
     * @var      string
     */
    protected $widget_slug = 'Contact-Info';

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/

	/**
	 * Specifies the classname and description, and instantiates the widget.
	 */
	public function __construct() {

		// Contact Info: update description
		parent::__construct(
			$this->get_widget_slug(),
			'Contact-Info',
			array(
				'classname'  => $this->get_widget_slug().'-class',
				'description' => 'Short description of the widget goes here.'
			)
		);

	} // end constructor

    /**
     * Return the widget slug.
     *
     * @since    1.0.0
     *
     * @return    Plugin slug variable.
     */
    public function get_widget_slug() {
        return $this->widget_slug;
    }

	/*--------------------------------------------------*/
	/* Widget API Functions
	/*--------------------------------------------------*/

	/**
	 * Outputs the content of the widget.
	 *
	 * @param array $args     The array of form elements
	 * @param array $instance The current instance of the widget
	 */
	public function widget( $args, $instance ) {

		if ( ! isset ( $args['widget_id'] ) ) {
         $args['widget_id'] = $this->id;
      }

		// go on with your widget logic, put everything into a string and …

		extract( $args, EXTR_SKIP );

		$widget_string = $before_widget;

		// Manipulate the widget's values based on their input fields
		$title = empty( $instance['title'] ) ? '' : apply_filters( 'widget_title', $instance['title'] );
		$address = empty( $instance['address'] ) ? '' : apply_filters( 'address', $instance['address'] );
		$city = empty( $instance['city'] ) ? '' : apply_filters( 'city', $instance['city'] );
		$province = empty( $instance['province'] ) ? '' : apply_filters( 'province', $instance['province'] );
		$postal = empty( $instance['postal'] ) ? '' : apply_filters( 'postal', $instance['postal'] );
		$phone = empty( $instance['phone'] ) ? '' : apply_filters( 'phone', $instance['phone'] );
		$email = empty( $instance['email'] ) ? '' : apply_filters( 'email', $instance['email'] );
		// TODO: other fields go here...

		ob_start();

		if ( $title ){
			$widget_string .= $before_title;
			$widget_string .= $title;
			$widget_string .= $after_title;
		}

		include( plugin_dir_path( __FILE__ ) . 'views/widget.php' );
		$widget_string .= ob_get_clean();
		$widget_string .= $after_widget;

		print $widget_string;

	} // end widget

	/**
	 * Processes the widget's options to be saved.
	 *
	 * @param array $new_instance The new instance of values to be generated via the update.
	 * @param array $old_instance The previous instance of values before the update.
	 */
	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['address'] = strip_tags( $new_instance['address'] );
		$instance['city'] = strip_tags( $new_instance['city'] );
		$instance['province'] = strip_tags( $new_instance['province'] );
		$instance['postal'] = strip_tags( $new_instance['postal'] );
		$instance['phone'] = strip_tags( $new_instance['phone'] );
		$instance['email'] = strip_tags( $new_instance['email'] );
		// TODO: Here is where you update the rest of your widget's old values with the new, incoming values

		return $instance;

	} // end widget

	/**
	 * Generates the administration form for the widget.
	 *
	 * @param array $instance The array of keys and values for the widget.
	 */
	public function form( $instance ) {

		// TODO: Define default values for your variables, create empty value if no default
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => 'Contact-Info',
				'address' => '',
				'city' => '',
				'province' => '',
				'postal' => '',
				'phone' => '',
				'email' => '',

			)
		);

		$title = strip_tags( $instance['title'] );
		$address = strip_tags( $instance['address'] );
		$city = strip_tags( $instance['city'] );
		$province = strip_tags( $instance['province'] );
		$postal = strip_tags( $instance['postal'] );
		$phone = strip_tags( $instance['phone'] );
		$email = strip_tags( $instance['email'] );
		// TODO: Store the rest of values of the widget in their own variables

		// Display the admin form
		include( plugin_dir_path( __FILE__ ) . 'views/admin.php' );

	} // end form

} // end class

// TODO: Remember to change 'Widget_Name' to match the class name definition
add_action( 'widgets_init', function(){
     register_widget( 'Contact_Info_Widget' );
});
