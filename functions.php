<?php
/**
 * business-click functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package business-click
 */

require get_template_directory() . '/inc/init.php';

if ( ! function_exists( 'business_click_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function business_click_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on business-click, use a find and replace
		 * to change 'business-click' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'business-click', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'business-click' ),
			'menu-2' => esc_html__('Social',   'business-click'),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'business_click_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		/*image size*/
		add_image_size( 'slider-banner-image', 1600, 660, true );
		add_image_size( 'latebusiness-click-image', 500, 360, true );

		/*woocommerce support*/
		add_theme_support( 'woocommerce' );
	}
endif;
add_action( 'after_setup_theme', 'business_click_setup' );

if ( is_admin() ) {
	// Load about.
	require_once trailingslashit( get_template_directory() ) . 'inc/theme-info/class-about.php';
	require_once trailingslashit( get_template_directory() ) . 'inc/theme-info/about.php';

	// Load demo.
	require_once trailingslashit( get_template_directory() ) . 'inc/demo/class-demo.php';
	require_once trailingslashit( get_template_directory() ) . 'inc/demo/demo.php';
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function business_click_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'business_click_content_width', 640 );
}
add_action( 'after_setup_theme', 'business_click_content_width', 0 );


// google fonts function
function business_click_google_fonts()
{
	global $business_click_customizer_all_values;
	$fonts_url  = '';
	$fonts 		= array();

	$business_click_font_family_site_identity           = $business_click_customizer_all_values['business-click-font-family-site-identity'];
    $business_click_font_family_menu_text               = $business_click_customizer_all_values['business-click-font-family-menu'];
    $business_click_font_family_h1_h6                   = $business_click_customizer_all_values['business-click-font-family-h1-h6'];
    $business_click_font_family_body_paragraph          = $business_click_customizer_all_values['business-click-font-family-body-p'];
    $business_click_font_family_button_text             = $business_click_customizer_all_values['business-click-font-family-button-text'];
    $business_click_font_family_footer_copyright_text   = $business_click_customizer_all_values['business-click-footer-copy-right-text'];
	$business_click_fonts 	= array();
	$business_click_fonts[] = $business_click_font_family_site_identity;
	$business_click_fonts[] = $business_click_font_family_h1_h6;
	$business_click_fonts[] = $business_click_font_family_button_text;

	$business_click_fonts_stylesheet = '//fonts.googleapis.com/css?family=';

	$i  = 0;
	  for ($i=0; $i < count( $business_click_fonts ); $i++) { 

	    if ( 'off' !== sprintf( _x( 'on', '%s font: on or off', 'business-click' ), $business_click_fonts[$i] ) ) {
			$fonts[] = $business_click_fonts[$i];
		}

	  }

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urldecode( implode( '|', $fonts ) ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;

}


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

/**
 * Enqueue scripts and styles.
 */
function business_click_scripts() {
	global $business_click_customizer_all_values;
	$suffix = '';

	/*google font*/
	wp_enqueue_style( 'business-click-google-fonts',business_click_google_fonts() );
	// thirdparty style file
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/frameworks/bootstrap/bootstrap'.$suffix.'.css' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/frameworks/font-awesome/css/fontawesome-all'.$suffix.'.css' );
	wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/assets/frameworks/slick/slick'.$suffix.'.css' );
	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/frameworks/wow/css/animate'.$suffix.'.css' );

	//theme-style
	wp_enqueue_style( 'business-click-style', get_stylesheet_uri() );


	wp_enqueue_script( 'business-click-navigation', get_template_directory_uri() . '/assets/js/navigation'.$suffix.'.js', array(), '20151215', true );

	wp_enqueue_script( 'business-click-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix'.$suffix.'.js', array(), '20151215', true );
	

	// thirdparty assets
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/frameworks/bootstrap/bootstrap'.$suffix.'.js', array('jquery'), true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/frameworks/slick/slick'.$suffix.'.js', array('jquery'), true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/frameworks/wow/js/wow'.$suffix.'.js', array('jquery'), true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/frameworks/isotope/isotope.pkgd'.$suffix.'.js', array('jquery'), true );

	wp_enqueue_script( 'mobile-menu', get_template_directory_uri() . '/assets/custom/mobile-menu'.$suffix.'.js', array('jquery'), true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/custom/main'.$suffix.'.js', array('jquery'), true );

	wp_localize_script( 'main', 'customzier_values', $business_click_customizer_all_values);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'business_click_scripts', 99 );

/**
 * Customizer control styles and scripts.
 */
function evt_customizer_control_scripts()
{
    // for slider overlay
    wp_enqueue_style('jquery-ui-style', get_template_directory_uri() . '/assets/frameworks/jquery-ui/jquery-ui.css');

    wp_enqueue_style('evt-customize-controls-style', get_template_directory_uri() . '/editor-style.css');

    wp_enqueue_script('evt-customize-controls-scripts', get_template_directory_uri() . '/assets/custom/admin-script.js');

}

add_action('customize_controls_enqueue_scripts', 'evt_customizer_control_scripts', 0);


/*update to pro added*/
require_once( trailingslashit( get_template_directory() ) . 'trt-customize-pro/business-click/class-customize.php' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
// require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


if ( !function_exists('business_click_social_menu') ) :
/**
	 * Fallback menu to primary menu 
	 * 
	 * @since business-click 1.0.1
	 */
	function business_click_social_menu()
	{ ?>
		<ul id="menu" class="d-none">
			<li><a href="#" target="_tab"><?php echo esc_html_e('wordpress', 'business-click' );?></a></li>
		</ul>
		<?php
	}
endif;


/*breadcrum function*/

if ( ! function_exists( 'business_click_simple_breadcrumb' ) ) :

	/**
	 * Simple breadcrumb.
	 *
	 * @since 1.0.0
	 */
	function business_click_simple_breadcrumb() {

		if ( ! function_exists( 'breadcrumb_trail' ) ) {
			require_once get_template_directory() . '/assets/breadcrumbs/breadcrumbs.php';
		}

		$breadcrumb_args = array(
			'container'   => 'div',
			'show_browse' => false,
		);
		breadcrumb_trail( $breadcrumb_args );

	}

endif;