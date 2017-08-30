<?php
/**
 * Demonstrate adding HTML markup and returning it back.
 *
 * @package     KnowTheCode\PHPOutputBuffer
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://KnowTheCode.io
 * @license     GNU-2.0+
 */
namespace KnowTheCode\PHPOutputBuffer;

add_filter('the_content', __NAMESPACE__ . '\add_markup_to_content' );
function add_markup_to_content( $content ) {
	ob_start();
	include __DIR__ . '/views/the-content.php';
	return ob_get_clean();
}