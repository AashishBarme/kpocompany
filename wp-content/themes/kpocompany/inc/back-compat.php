<?php
/**
 * Kpo Company back compat functionality
 *
 * Prevents Kpo Company from running on WordPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.7.
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Kpo Company 1.0.0
 */

/**
 * Prevent switching to Kpo Company on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Kpo Company 1.0.0
 */
function kpocompany_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'kpocompany_upgrade_notice' );
}
add_action( 'after_switch_theme', 'kpocompany_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Kpo Company on WordPress versions prior to 4.7.
 *
 * @since Kpo Company 1.0.0
 *
 * @global string $wp_version WordPress version.
 */
function kpocompany_upgrade_notice() {
	/* translators: %s: WordPress version. */
	$message = sprintf( __( 'Kpo Company requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'kpocompany' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
 *
 * @since Kpo Company 1.0.0
 *
 * @global string $wp_version WordPress version.
 */
function kpocompany_customize() {
	wp_die(
		sprintf(
			/* translators: %s: WordPress version. */
			__( 'Kpo Company requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'kpocompany' ),
			$GLOBALS['wp_version']
		),
		'',
		array(
			'back_link' => true,
		)
	);
}
add_action( 'load-customize.php', 'kpocompany_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
 *
 * @since Kpo Company 1.0.0
 *
 * @global string $wp_version WordPress version.
 */
function kpocompany_preview() {
	if ( isset( $_GET['preview'] ) ) {
		/* translators: %s: WordPress version. */
		wp_die( sprintf( __( 'Kpo Company requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'kpocompany' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'kpocompany_preview' );
