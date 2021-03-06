<?php
/**
 * Customizer functionality for the Blog settings panel.
 *
 * @package Hestia
 * @since Hestia 1.1.10
 */

if ( ! class_exists( 'WP_Customize_Control' ) ) {
	return null;
}

/**
 * A custom text control for Subscribe info.
 *
 * @since Hestia 1.0
 */
class Hestia_Subscribe_Info extends WP_Customize_Control {

	/**
	 * Control id
	 *
	 * @var string $id Control id.
	 */
	public $id = '';

	/**
	 * Hestia_Subscribe_Info constructor.
	 *
	 * @param WP_Customize_Manager $manager Customizer manager.
	 * @param string               $id Control id.
	 * @param array                $args Argument.
	 */
	public function __construct( $manager, $id, $args = array() ) {
		parent::__construct( $manager, $id, $args );
		$this->id = $id;
	}

	/**
	 * Render content for the control.
	 *
	 * @since Hestia 1.0
	 */
	public function render_content() {
		$path = '';
		$filenme = '';
		if ( $this->id === 'hestia_subscribe_info' ) {
			$path =
				/* translators: %s is Path */
				sprintf( '<b>%s</b>',
					esc_html__( 'Customize > Widgets > Subscribe Section', 'hestia' )
				);
			$filenme = 'blog-subscribe-textarea-content.php';
		}
		if ( $this->id === 'hestia_blog_subscribe_info' ) {
			$path =
				/* translators: %s is Path */
				sprintf( '<b>%s</b>',
				esc_html__( 'Customize > Widgets > Blog Subscribe Section', 'hestia' ) );
			$filenme = 'subscribe-textarea-content.php';
		}

		/* translators: %1$s is Path wrapped in <b>, %2$s is Plugin link */
		printf( esc_html__( 'The main content of this section is customizable in: %1$s. There you must add the "SendinBlue Newsletter" widget. But first you will need to install %2$s.', 'hestia' ),
			$path,
			/* translators: %s is Plugin name */
			sprintf( '<a href="https://wordpress.org/plugins/mailin/" target="_blank">%s</a>',
				esc_html__( 'SendinBlue plugin', 'hestia' )
			)
		);
		echo '<hr/>';
		/* translators: %s Path in plugin wrapped*/
		printf( esc_html__( 'After installing the plugin, you need to navigate to %s, and configure the plugin.', 'hestia' ),
			/* translators: %s Path in plugin*/
			sprintf( '<b>%s</b>',
				esc_html( 'Sendinblue > Home', 'hestia-pro' )
			)
		);
		echo '<br/><br/>';
		echo esc_html__( 'And then you need to navigate to its Settings, and use the following in Subscription form:', 'hestia' );
		echo '<br/><br/>';
		echo '<textarea style="width:100%;height:180px;font-size:12px;" readonly="">';
		$template_path = get_template_directory() . '/inc/customizer-subscribe-info/templates/' . $filenme;
		if ( file_exists( $template_path ) ) {
			require $template_path;
		}
		echo '</textarea>';
	}
}
