<?php
/*
 * Plugin Name: WP Cron Force HTTP
 * Plugin URI:  https://github.com/cyberhobo/wp-cron-force-http
 * Description: A tiny WordPress plugin for the rare case when a site uses HTTPS but wp-cron only works over HTTP. May require an accompanying exception to external rules to force HTTPS.
 * Version:     0.1.0
 * Author:      Dylan Kuhn
 * Author URI:  http://cyberhobo.net/
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: cyberhobo/wp-cron-force-http
 */
 
add_filter( 'cron_request', 'fch_set_cron_scheme' );

function fch_set_cron_scheme( $args ) {
	$args['url'] = str_replace( 'https://', 'http://', $args['url'] );
	return $args;
}
