<?php
function zoryana_setup(){
    
    load_theme_textdomain('filipovs-consulting');
    
    add_theme_support('title-tag');
    
     add_theme_support('post-thumbnails');
     set_post_thumbnail_size(528,327);
     //розмір картинки до посту блогу
     
      add_theme_support('html5', array(
          'search_form',
          'comment-form',
          'comment-list',
          'gallery',
          'caption'
          ));
        
     add_theme_support('post-formats', array(
         'image',
         'video',
         'gallery'
         ));      
    
    register_nav_menu('primary', 'Primary menu');
}





function zoryana_assets(){
    
    wp_enquaue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css'); 
 wp_enquaue_style('style', get_template_directory_uri() . '/style.css'); 
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min');
}


add_action ('wp_enqueue_scripts', 'zoryana_assets');


?>



<!--add_action('wp_head', 'add_custom_styles'); -->
