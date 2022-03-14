<?php

/*
Plugin Name: Wide Editor
Plugin URI: https://scottsaunders.design
Description: Makes the default WordPress Gutenberg editor wider.
Version: 1.0
Author: Scott Saunders
Author URI: https://scottsaunders.design
License: GPLv2 or later
Text Domain: scottsaunders.design
*/


function wide_editor_js() {
	wp_enqueue_style( 'wide_editor', plugins_url( 'wide_admin.css', __FILE__ ) );
	}
add_action('admin_footer', 'wide_editor_js');
