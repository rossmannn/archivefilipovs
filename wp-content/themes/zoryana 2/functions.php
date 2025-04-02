<?php
// Хуки на які чіпляються функції по підключенню стилів та скриптів
add_action('wp_enqueue_scripts', 'theme_styles'); // Екшн який визиває функцію підключення стилів
add_action('wp_enqueue_scripts', 'theme_scripts'); // Екшн який визиває функцію підключення скриптів

// Функція яка підключає стилі
function theme_styles() {
    // Підключаємо головні стилі

    wp_enqueue_style('frontend', get_template_directory_uri() . '/assets/css/frontend.css', array('bootstrap-min'), '1.2');
    wp_enqueue_style('bootstrap-min', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '1.0', 'all');

	
    // Відключаємо зайві стилі вордпресс
	wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'global-styles' );
}

// Функція яка підключає скрипти
function theme_scripts() {
    // Підключаємо скрипти
   wp_enqueue_script('customJquery', get_template_directory_uri() . '/assets/js/jquery-1.12.4.min.js', array(), false, true);
    wp_enqueue_script('frontend', get_template_directory_uri() . '/assets/js/frontend.js', array(), '1.1', true);
    wp_localize_script('frontend', 'ajaxurl', admin_url('admin-ajax.php'));
    wp_enqueue_script('bootstrap-min', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '1.0', true);
}
// Підключення файлу class-wp-bootstrap-navwalker.php
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';


function zoryana_setup() {
    add_theme_support( 'post-thumbnails' );

//поруч з add_theme_support( 'post-thumbnails' ); задаємо і підтримку
//картинок установленого розробником розміру add_image_size();
add_image_size('post-thumbnails', 347, 215, true);
   
}
add_action( 'after_setup_theme', 'zoryana_setup' );


function custom_excerpt_length($length) {
    return 20; // Зміна кількості слів у витягу
}
add_filter('excerpt_length', 'custom_excerpt_length', 100);



function register_my_menus() {
  register_nav_menus(
    array(
      'first-menu' => __( 'First Menu' ),
      'second-menu' => __( 'Second Menu' )
    )
  ); 
}
add_action( 'init', 'register_my_menus' );



function theme_widgets_init() {
  register_sidebar( array(
    'name'          => 'Header Social Icons',
    'id'            => 'header-social-icons',
    'before_widget' => '<div class="header-social-icons">',
    'after_widget'  => '</div>',
  ) );

  register_sidebar( array(
    'name'          => 'Header Phone Number',
    'id'            => 'header-phone-number',
    'before_widget' => '<div class="header-phone-number">',
    'after_widget'  => '</div>',
  ) );
}
add_action( 'widgets_init', 'theme_widgets_init' );



// Функція для підключення скриптів і стилів modal
function enqueue_modal_assets() {
    // Підключення стилів
    wp_enqueue_style('modal-styles', get_template_directory_uri() . '/assets/css/modal.css', array(), '1.0');

}
add_action('wp_enqueue_scripts', 'enqueue_modal_assets');


