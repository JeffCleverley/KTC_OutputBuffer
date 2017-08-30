<?php
/**
 * Example Infobox shortcode.
 *
 * @package     KnowTheCode\PHPOutputBuffer
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://KnowTheCode.io
 * @license     GNU-2.0+
 */
namespace KnowTheCode\PHPOutputBuffer;

add_shortcode( 'infobox', __NAMESPACE__ . '\process_infobox_shortcode' );
/**
 * Process the infobox shortcode and return the HTML.
 *
 * @since 1.0.0
 *
 * @param string|array $attributes User-defined attributes
 * @param string $content Content to be displayed within the container.
 *
 * @return string
 */
function process_infobox_shortcode( $attributes, $content ) {
	if ( ! $content ) {
		return '';
	}

	$attributes = shortcode_atts(
		array(
			'type' => '',
		),
		$attributes,
		'sandbox'
	);

	$classes = array('infobox');
	if ( $attributes['type'] ) {
		$classes[] = $attributes['type'];
	}

	$classes = join(' ', $classes);
	$content = do_shortcode( $content );
	$content = wpautop( $content );


	ob_start();
	include __DIR__ . '/views/shortcode.php';
	return ob_get_clean();
}
