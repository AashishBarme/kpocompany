<?php
/**
*Plugin Name: Wordpress Redirect to LogIn
*/
function kpocompany_forcelogin() {

	// Exceptions for AJAX, Cron, or WP-CLI requests
	if ( ( defined( 'DOING_AJAX' ) && DOING_AJAX ) || ( defined( 'DOING_CRON' ) && DOING_CRON ) || ( defined( 'WP_CLI' ) && WP_CLI ) ) {
		return;
	}

	// Redirect unauthorized visitors
	if ( ! is_user_logged_in() ) {
		// Get visited URL
		$schema = isset( $_SERVER['HTTPS'] ) && 'on' === $_SERVER['HTTPS'] ? 'https://' : 'http://';
		$url = $schema . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];


		if ( preg_replace( '/\?.*/', '', $url ) !== preg_replace( '/\?.*/', '', wp_login_url() ) ) {
			// Determine redirect URL
			$redirect_url = apply_filters( 'kpocompany_forcelogin_redirect', $url );
			// Set the headers to prevent caching
			nocache_headers();
			// Redirect
			wp_safe_redirect( wp_login_url( $redirect_url ), 302 );
			exit;
		}
	} elseif ( function_exists( 'is_multisite' ) && is_multisite() ) {
		// Only allow Multisite users access to their assigned sites
		if ( ! is_user_member_of_blog() && ! current_user_can( 'setup_network' ) ) {
			wp_die( __( "You're not authorized to access this site.", 'wp-force-login' ), get_option( 'blogname' ) . ' &rsaquo; ' . __( 'Error', 'wp-force-login' ) );
		}
	}
}
add_action( 'template_redirect', 'kpocompany_forcelogin' );
