<?php
/**
 * Plugin Name: Wordpress Admin Themes
 * Plugin URI: https://github.com/bilalvirgo10/wp-admin-color-themes
 * Description: A little plugin to add your own color schemes to Wordpress. The corresponding tutorial has been written on WpTuts+.
 * Version: 1.0
 * Author: Bilal Shahid
 * Author URI: http://imbilal.com
 * License: GPL2
 */

define( 'PATH', plugins_url( '', __FILE__ ) );

function add_custom_admin_themes() {

	$suffix = is_rtl() ? '-rtl' : '';

	wp_admin_css_color( 
	    'late-summer', 
	    __( 'Late Summer' ),
	    PATH . "/css/late-summer$suffix.css",
	    array( '#421F22', '#FFC042', '#114F3F' )
	);

	wp_admin_css_color(
		'desert-for-dessert',
		__( 'Desert for Dessert' ),
		PATH . "/css/desert-for-dessert$suffix.css",
		array( '#326773', '#568C87', '#F2EEB3', '#A67C6D' )
	);

	wp_admin_css_color(
		'forest-afternoon',
		__( 'Forest Afternoon' ),
		PATH . "/css/forest-afternoon$suffix.css",
		array( '#314029', '#4D5C2E', '#8F9137', '#CCBC39' )
	);
}

add_action( 'admin_init', 'add_custom_admin_themes' );
