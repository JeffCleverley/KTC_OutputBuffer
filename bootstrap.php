<?php
/**
 * PHP Output Buffering Lab Plugin
 *
 * @package     KnowTheCode\PHPOutputBuffer
 * @author      hellofromTonya
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: PHP Output Buffering Lab Plugin
 * Plugin URI:  https://github.com/KnowTheCode/php-output-buffer-lab
 * Description: Companion plugin for the PHP Output Control and Buffer Basics lab
 * Version:     1.0.0
 * Author:      hellofromTonya
 * Author URI:  https://KnowTheCode.io
 * Text Domain: sandbox
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */
namespace KnowTheCode\PHPOutputBuffer;

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Cheatin&#8217; uh?' );
}

// add your cool testing and playing code here.  Have fun!
include __DIR__ . '/src/markup.php';
include __DIR__ . '/src/shortcode.php';
