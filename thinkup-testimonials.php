<?php
/*
Plugin Name: Think Up! Testimonials
Plugin URI:  http://www.thinkupdesign.ca/think-up-testimonials
Description: A responsive, easy to use testimonials plugin that doesn't require custom post types and uses simple text-widgets.
Version:     1.0
Author:      Andrew Sepic
Author URI:  http://www.thinkupdesign.ca
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

{Plugin Name} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {URI to Plugin License}.

*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
function tut_create_sidebars(){
  // Registers Sidebar for Testimonials
  register_sidebar(array(
  'name' => __('Think Up Testimonials'),
  'id' => 'thinkup-testimonials',
  'description' => __('Text widgets in this area will be shown as testimonials in your theme.'),
  'before_widget' => '<li>',
  'after_widget' => '</li>'
  ));
}

add_action( 'widgets_init', 'tut_create_sidebars' );

// Enqueues styles & Flexslider JS
function tut_load() {
  wp_enqueue_style( 'flex-styles', plugins_url('css/flexslider.css', __FILE__));
  wp_enqueue_style( 'tut-styles', plugins_url('css/tut-style.css', __FILE__));
  wp_enqueue_script( 'flexslider', plugins_url('js/jquery.flexslider.js', __FILE__), array('jquery') );
  wp_enqueue_script( 'tut-init', plugins_url('js/tut-init.js', __FILE__), array('jquery') );
}
add_action('wp_enqueue_scripts', 'tut_load');


// Plugin Setup
function tut_setup(){
}
register_activation_hook( __FILE__, 'tut_setup' );


// Creates Markup Function
function thinkup_testimonials(){
if ( is_active_sidebar( 'thinkup-testimonials' ) ) :
  echo '<!-- Testimonials -->
        <div id="thinkup-testimonials" class="flexslider">
        <ul class="testimonials slides">';
        dynamic_sidebar('thinkup-testimonials');
  echo'</ul></div><!-- testimonial section -->';
endif;
}

// add_shortcode('thinkup-testimonials','tut_display');

// Plugin Uninstall
function tut_uninstall () {
   unregister_sidebar( 'thinkup-testimonials' );
}
register_uninstall_hook( __FILE__, 'tut_uninstall' );




?>
