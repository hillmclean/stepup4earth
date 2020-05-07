<?php
/**
 * Step Up 4 Earth Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package StepUp4Earth_Theme
 */

if ( ! function_exists( 'stepup4earth_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function stepup4earth_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // stepup4earth_setup
add_action( 'after_setup_theme', 'stepup4earth_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function stepup4earth_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'stepup4earth_content_width', 640 );
}
add_action( 'after_setup_theme', 'stepup4earth_content_width', 0 );

function pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}




/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function stepup4earth_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html( 'Footer' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html( 'Event Features' ),
		'id'            => 'event-features',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="features-widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html( 'Banner' ),
		'id'            => 'banner-widgets',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="banner-widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'stepup4earth_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function stepup4earth_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'stepup4earth_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function stepup4earth_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style('flickity-css', 'https://unpkg.com/flickity@2/dist/flickity.min.css');
	
	if( is_page('ecofair') || is_home() || is_archive('workshop') || is_archive('volunteer')) {
	    wp_enqueue_script( 'flickity-js', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array(), false, true );
	    wp_enqueue_script( 'flickity-hash-js', 'https://unpkg.com/flickity-hash@1/hash.js', array(), false, true );
	    wp_enqueue_script( 'flickity-start-js', get_template_directory_uri() . '/build/js/start-carousel.min.js', array('flickity-js'), false, true );
	} elseif ( is_page('volunteer') ) {
	    wp_enqueue_script( 'volunteer-dropdown-start-js', get_template_directory_uri() . '/build/js/volunteer-dropdown.min.js', array(), false, true );
	    wp_localize_script('volunteer-dropdown-start-js', 'projectsListVolunteer', array(
		'projectsList' => get_posts(array(
		    'post_type'       => 'community_programs', 
		    'posts_per_page'  => -1,
		    'orderby'         => 'date',
		    'order'           => 'ASC',
		    'tag'             => 'volunteer'
		)),
	    ));
	    wp_enqueue_script( 'volunteer-success-start-js', get_template_directory_uri() . '/build/js/volunteer-success-submit.min.js', array(), false, true );
	    wp_localize_script('volunteer-success-start-js', 'homeUrl', array(
		'url' => get_permalink( get_page_by_title( 'Submitted!' ) )
	    ));
	} 

	wp_enqueue_script( 'menu-js', get_template_directory_uri() . '/build/js/menu.min.js', array(), false, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'stepup4earth_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

function my_theme_archive_title( $title ) {
	if ( is_category() ) {
			$title = single_cat_title();
	} elseif ( is_tag() ) {
			$title = single_tag_title();
	} elseif ( is_author() ) {
			$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif ( is_post_type_archive() ) {
			$title = post_type_archive_title();
	} elseif ( is_tax() ) {
			$title = single_term_title();
	}

	return $title;
}

add_filter( 'get_the_archive_title', 'my_theme_archive_title' );

// function wpse214084_max_post_queries( $query ) {

// 	if(is_tax('product_category')){ // change genre into your taxonomy or leave out for all
// 	  // show 20 posts
// 	  $query->set('posts_per_page', 5);
// 	}
//  }
//  add_action( 'pre_get_posts', 'wpse214084_max_post_queries' );

add_action( 'pre_get_posts',  'set_posts_per_page'  );
function set_posts_per_page( $query ) {

  if ( ( ! is_admin() ) && ( $query === $GLOBALS['wp_query'] ) && ( $query->is_search() ) ) {
    $query->set( 'posts_per_page', 10 );
  }
  elseif ( ( ! is_admin() ) && ( $query === $GLOBALS['wp_the_query'] ) && ( $query->is_archive() ) ) {
    $query->set( 'posts_per_page', 1 );
  }

  return $query;
}

function custom_search_form( $form, $value = "Search", $post_type = 'post' ) {
    $form_value = (isset($value)) ? $value : attribute_escape(apply_filters('the_search_query', get_search_query()));
    $form = '<form class="search-form" method="get" id="searchform" action="' . get_option('home') . '/" >
	<fieldset>
		<label>
        <input type="hidden" name="post_type" value="'.$post_type.'" />
        <input type="text" value="' . $form_value . '" name="s" id="s" />
		<button class="search-submit">
		<i class="fa fa-search"></i>
	</button>
		</label>
    </fieldset>
    </form>';
    return $form;
}
