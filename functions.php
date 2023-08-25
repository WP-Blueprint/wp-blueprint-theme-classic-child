<?php
/**
 * Contains the core functionalities and definitions for WP Blueprint. It checks for necessary files and classes, initializes core services, and integrates with any vendor dependencies.
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/classic/theme-structure/template-files/
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit();

/**
 * Initializes the WP Blueprint Theme Classic Child Theme.
 */
function init() {
	define( 'IS_CHILD', true );

	if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
		require_once dirname( __FILE__ ) . '/vendor/autoload.php';
	}

	if ( class_exists( 'WPBlueprint\\Theme\Block\Child\Initializer' ) ) {
		WPBlueprint\Theme\Block\Child\Initializer::register_services();
	}
}

add_action( 'after_setup_theme', 'init' );
