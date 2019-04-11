<?php 
define('WPCF7_AUTOP', false );
function theme_assets() {
  wp_deregister_script('jquery');
  wp_deregister_style('contact-form-7');
  
  wp_enqueue_script('js-file', get_theme_file_uri('/dist/bundled.js'), NULL, $appModTimestamp, true);
  wp_enqueue_style('style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'theme_assets' );
function add_menu_support() {
  register_nav_menu('main-menu', 'Main Menu');
}

add_action('after_setup_theme', 'add_menu_support');

add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);

function my_css_attributes_filter($var) {
  return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}

function chair_post_type() {
  register_post_type('krzesła', [
    'public' => true,
    'labels' => array(
      'name' => 'Krzesła',
      'add_new_item' => 'Dodaj nowe krzesło',
      'edit_item' => 'Edytuj krzesło',
      'all_items' => 'Wszystkie krzesła'
    ),
    'menu_icon' => 'dashicons-cart'
  ]);
}

function table_post_type() {
  register_post_type('stoły', [
    'public' => true,
    'labels' => array(
      'name' => 'Stoły',
      'add_new_item' => 'Dodaj nowy stół',
      'edit_item' => 'Edytuj stół',
      'all_items' => 'Wszystkie krzesła'
    ),
    'menu_icon' => 'dashicons-cart'
  ]);
}

function cupboard_post_type() {
  register_post_type('ławy', [
    'public' => true, 
    'labels' => array(
      'name' => 'Ławy',
      'add_new_item' => 'Dodaj nową ławę',
      'edit_item' => 'Edytuj ławę',
      'all_items' => 'Wszystkie krzesła'
    ),
    'menu_icon' => 'dashicons-cart'
  ]);
}

add_action('init', 'chair_post_type');
add_action('init', 'table_post_type');
add_action('init', 'cupboard_post_type');