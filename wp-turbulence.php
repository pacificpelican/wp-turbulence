<?php
/*
Plugin Name: WP-turbulence
Plugin URI: https://yourwebsite.com/wp-turbulence
Description: A plugin that causes the page to come apart very slowly by making each element shake at slightly different speeds.
Version: 1.0
Author: Daniel J. McKeown
Author URI: https://danieljmckeown.com
License: GPL2
*/

function wp_turbulence_enqueue_scripts() {
    wp_enqueue_script('wp-turbulence', plugin_dir_url(__FILE__) . 'wp-turbulence.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'wp_turbulence_enqueue_scripts');

function wp_turbulence_enqueue_styles() {
  wp_enqueue_style('wp-turbulence', plugin_dir_url(__FILE__) . 'wp-turbulence.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'wp_turbulence_enqueue_styles');

?>