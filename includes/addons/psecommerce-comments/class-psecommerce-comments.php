<?php
/*
Plugin Name: PSeCommerce Allow Comments
Version: 0.3
Plugin URI: http://wordpress.org/extend/plugins/wpmu-psecommerce-allow-comments-addon/
Description: A simple addon that will allow comments to be added to product listing.
Author: Alex (Shurf) Frenkel
Author URI: http://alex.frenkel-online.com/
*/

add_action('init', 'shurf_wpml_psecommerce_init');

function shurf_wpml_psecommerce_init() {
	add_post_type_support( 'product', 'comments' );
}

