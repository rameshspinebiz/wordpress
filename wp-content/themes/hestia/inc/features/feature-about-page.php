<?php
/**
 * Lite Manager
 *
 * @package Hestia
 * @since 1.0.12
 */


/**
 * About page class
 */
require_once get_template_directory() . '/ti-about-page/class-themeisle-about-page.php';

/*
* About page instance
*/
$config = array(
	// Menu name under Appearance.
	'menu_name'           => __( 'About Hestia', 'hestia' ),
	// Page title.
	'page_name'           => __( 'About Hestia', 'hestia' ),
	// Main welcome title
	/* translators: s - theme name */
	'welcome_title'       => sprintf( __( 'Welcome to %s! - Version ', 'hestia' ), 'Hestia' ),
	// Main welcome content
	'welcome_content'     => esc_html__( 'Hestia is a modern WordPress theme for professionals. It fits creative business, small businesses, startups, corporate businesses, online agencies and firms, portfolios, e-commerce (WooCommerce), and freelancers. It has a multipurpose one-page design, widgetized footer, and a clean look. The theme is responsive, WPML, Retina ready, SEO friendly, and uses Material Kit for design.', 'hestia' ),
	/**
	 * Tabs array.
	 *
	 * The key needs to be ONLY consisted from letters and underscores. If we want to define outside the class a function to render the tab,
	 * the will be the name of the function which will be used to render the tab content.
	 */
	'tabs'                => array(
		'getting_started'     => __( 'Getting Started', 'hestia' ),
		'recommended_actions' => __( 'Recommended Actions', 'hestia' ),
		'recommended_plugins' => __( 'Useful Plugins', 'hestia' ),
		'support'             => __( 'Support', 'hestia' ),
		'changelog'           => __( 'Changelog', 'hestia' ),
		'free_pro'            => __( 'Free VS PRO', 'hestia' ),
	),
	// Support content tab.
	'support_content'     => array(
		'first'  => array(
			'title'        => esc_html__( 'Contact Support', 'hestia' ),
			'icon'         => 'dashicons dashicons-sos',
			'text'         => esc_html__( 'We want to make sure you have the best experience using Hestia and that is why we gathered here all the necessary informations for you. We hope you will enjoy using Hestia, as much as we enjoy creating great products.', 'hestia' ),
			'button_label' => esc_html__( 'Contact Support', 'hestia' ),
			'button_link'  => esc_url( 'https://themeisle.com/contact/' ),
			'is_button'    => true,
			'is_new_tab'   => true,
		),
		'second' => array(
			'title'        => esc_html__( 'Documentation', 'hestia' ),
			'icon'         => 'dashicons dashicons-book-alt',
			'text'         => esc_html__( 'Need more details? Please check our full documentation for detailed information on how to use Hestia.', 'hestia' ),
			'button_label' => esc_html__( 'Read full documentation', 'hestia' ),
			'button_link'  => 'http://docs.themeisle.com/article/569-hestia-documentation',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		'third'  => array(
			'title'        => esc_html__( 'Changelog', 'hestia' ),
			'icon'         => 'dashicons dashicons-portfolio',
			'text'         => esc_html__( 'Want to get the gist on the latest theme changes? Just consult our changelog below to get a taste of the recent fixes and features implemented.', 'hestia' ),
			'button_label' => esc_html__( 'Changelog', 'hestia' ),
			'button_link'  => esc_url( admin_url( 'themes.php?page=hestia-welcome&tab=changelog&show=yes' ) ),
			'is_button'    => false,
			'is_new_tab'   => false,
		),
		'fourth' => array(
			'title'        => esc_html__( 'Create a child theme', 'hestia' ),
			'icon'         => 'dashicons dashicons-admin-customizer',
			'text'         => esc_html__( "If you want to make changes to the theme's files, those changes are likely to be overwritten when you next update the theme. In order to prevent that from happening, you need to create a child theme. For this, please follow the documentation below.", 'hestia' ),
			'button_label' => esc_html__( 'View how to do this', 'hestia' ),
			'button_link'  => 'http://docs.themeisle.com/article/14-how-to-create-a-child-theme',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		'fifth'  => array(
			'title'        => esc_html__( 'Speed up your site', 'hestia' ),
			'icon'         => 'dashicons dashicons-controls-skipforward',
			'text'         => esc_html__( 'If you find yourself in the situation where everything on your site is running very slow, you might consider having a look at the below documentation where you will find the most common issues causing this and possible solutions for each of the issues.', 'hestia' ),
			'button_label' => esc_html__( 'View how to do this', 'hestia' ),
			'button_link'  => 'http://docs.themeisle.com/article/63-speed-up-your-wordpress-site',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		'sixth'  => array(
			'title'        => esc_html__( 'Build a landing page with a drag-and-drop content builder', 'hestia' ),
			'icon'         => 'dashicons dashicons-images-alt2',
			'text'         => esc_html__( 'In the below documentation you will find an easy way to build a great looking landing page using a drag-and-drop content builder plugin.', 'hestia' ),
			'button_label' => esc_html__( 'View how to do this', 'hestia' ),
			'button_link'  => 'http://docs.themeisle.com/article/219-how-to-build-a-landing-page-with-a-drag-and-drop-content-builder',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
	),
	// Getting started tab
	'getting_started'     => array(
		'first'  => array(
			'title'               => esc_html__( 'Recommended actions', 'hestia' ),
			'text'                => esc_html__( 'We have compiled a list of steps for you, to take make sure the experience you will have using one of our products is very easy to follow.', 'hestia' ),
			'button_label'        => esc_html__( 'Recommended actions', 'hestia' ),
			'button_link'         => esc_url( admin_url( 'themes.php?page=hestia-welcome&tab=recommended_actions' ) ),
			'is_button'           => false,
			'recommended_actions' => true,
			'is_new_tab'          => false,
		),
		'second' => array(
			'title'               => esc_html__( 'Read full documentation', 'hestia' ),
			'text'                => esc_html__( 'Need more details? Please check our full documentation for detailed information on how to use Hestia.', 'hestia' ),
			'button_label'        => esc_html__( 'Documentation', 'hestia' ),
			'button_link'         => 'http://docs.themeisle.com/article/569-hestia-documentation',
			'is_button'           => false,
			'recommended_actions' => false,
			'is_new_tab'          => true,
		),
		'third'  => array(
			'title'               => esc_html__( 'Go to Customizer', 'hestia' ),
			'text'                => esc_html__( 'Using the WordPress Customizer you can easily customize every aspect of the theme.', 'hestia' ),
			'button_label'        => esc_html__( 'Go to Customizer', 'hestia' ),
			'button_link'         => esc_url( admin_url( 'customize.php' ) ),
			'is_button'           => true,
			'recommended_actions' => false,
			'is_new_tab'          => true,
		),
	),
	// Free vs pro array.
	'free_pro'            => array(
		'free_theme_name'     => 'Hestia',
		'pro_theme_name'      => 'Hestia Pro',
		'pro_theme_link'      => 'https://themeisle.com/themes/hestia-pro/',
		/* translators: s - theme name */
		'get_pro_theme_label' => sprintf( __( 'Get %s now!', 'hestia' ), 'Hestia Pro' ),
		'features'            => array(
			array(
				'title'       => __( 'Mobile friendly', 'hestia' ),
				'description' => __( 'Responsive layout. Works on every device.', 'hestia' ),
				'is_in_lite'  => 'true',
				'is_in_pro'   => 'true',
			),
			array(
				'title'       => __( 'WooCommerce Compatible', 'hestia' ),
				'description' => __( 'Ready for e-commerce. You can build an online store here.', 'hestia' ),
				'is_in_lite'  => 'true',
				'is_in_pro'   => 'true',
			),
			array(
				'title'       => __( 'Frontpage sections', 'hestia' ),
				'description' => __( 'Big title, Features, About, Team, Testimonials, Subscribe, Blog, Contact', 'hestia' ),
				'is_in_lite'  => 'true',
				'is_in_pro'   => 'true',
			),
			array(
				'title'       => __( 'Background image', 'hestia' ),
				'description' => __( 'You can use any background image you want.', 'hestia' ),
				'is_in_lite'  => 'true',
				'is_in_pro'   => 'true',
			),
			array(
				'title'       => __( 'Section Reordering', 'hestia' ),
				'description' => __( 'The ability to reorganize your front page sections easy and fast.', 'hestia' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),
			array(
				'title'       => __( 'Header Slider', 'hestia' ),
				'description' => __( 'You will be able to add more content to your site header with an awesome slider.', 'hestia' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),
			array(
				'title'       => __( 'Fully Customizable Colors', 'hestia' ),
				'description' => __( 'Change colors for the header overlay, header text and navbar.', 'hestia' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),
			array(
				'title'       => __( 'Jetpack Portfolio', 'hestia' ),
				'description' => __( 'Portfolio section with two possible layouts.', 'hestia' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),
			array(
				'title'       => __( 'Pricing Plans Section', 'hestia' ),
				'description' => __( 'A fully customizable pricing plans section.', 'hestia' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),
			array(
				'title'       => __( 'Quality Support', 'hestia' ),
				'description' => __( '24/7 HelpDesk Professional Support.', 'hestia' ),
				'is_in_lite'  => 'false',
				'is_in_pro'   => 'true',
			),
		),
	),
	// Plugins array.
	'recommended_plugins' => array(
		'already_activated_message' => esc_html__( 'Already activated', 'hestia' ),
		'version_label'             => esc_html__( 'Version: ', 'hestia' ),
		'install_label'             => esc_html__( 'Install and Activate', 'hestia' ),
		'activate_label'            => esc_html__( 'Activate', 'hestia' ),
		'deactivate_label'          => esc_html__( 'Deactivate', 'hestia' ),
		'content'                   => array(
			array(
				'slug' => 'siteorigin-panels',
			),
			array(
				'slug' => 'wp-product-review',
			),
			array(
				'slug' => 'intergeo-maps',
			),
			array(
				'slug' => 'visualizer',
			),
			array(
				'slug' => 'adblock-notify-by-bweb',
			),
			array(
				'slug' => 'nivo-slider-lite',
			),
		),
	),
	// Required actions array.
	'recommended_actions' => array(
		'install_label'    => esc_html__( 'Install and Activate', 'hestia' ),
		'activate_label'   => esc_html__( 'Activate', 'hestia' ),
		'deactivate_label' => esc_html__( 'Deactivate', 'hestia' ),
		'content'          => array(
			'themeisle-companion' => array(
				'title'       => 'ThemeIsle Companion',
				'description' => __( 'It is highly recommended that you install the companion plugin to have access to the frontpage features, team and testimonials sections.', 'hestia' ),
				'check'       => defined( 'THEMEISLE_COMPANION_VERSION' ),
				'plugin_slug' => 'themeisle-companion',
				'id'          => 'themeisle-companion',
			),
			'pirate-forms'        => array(
				'title'       => 'Pirate Forms',
				'description' => __( 'Makes your contact section more engaging by creating a good-looking contact form. The interaction with your visitors was never easier.', 'hestia' ),
				'check'       => defined( 'PIRATE_FORMS_VERSION' ),
				'plugin_slug' => 'pirate-forms',
				'id'          => 'pirate-forms',
			),

		),
	),
);
Themeisle_About_Page::init( apply_filters( 'hestia_about_page_array', $config ) );

/*
 * Notifications in customize
 */
require get_template_directory() . '/ti-customizer-notify/class-themeisle-customizer-notify.php';

$config_customizer = array(
	'recommended_plugins'       => array(
		'themeisle-companion' => array(
			'recommended' => true,
			/* translators: s - ThemeIsle Companion */
			'description' => sprintf( esc_html__( 'If you want to take full advantage of the options this theme has to offer, please install and activate %s', 'hestia' ), sprintf( '<strong>%s</strong>', 'ThemeIsle Companion' ) ),
		),
	),
	'recommended_actions'       => array(),
	'recommended_actions_title' => esc_html__( 'Recommended Actions', 'hestia' ),
	'recommended_plugins_title' => esc_html__( 'Recommended Plugins', 'hestia' ),
	'install_button_label'      => esc_html__( 'Install and Activate', 'hestia' ),
	'activate_button_label'     => esc_html__( 'Activate', 'hestia' ),
	'deactivate_button_label'   => esc_html__( 'Deactivate', 'hestia' ),
);
Themeisle_Customizer_Notify::init( apply_filters( 'hestia_customizer_notify_array', $config_customizer ) );

