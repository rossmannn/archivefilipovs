<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<!-- для модального вікна -->   
 <!-- Стилі Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Скрипти Bootstrap (для роботи модальних вікон) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<style>figure { margin: 0 10% !important;}
.wp-block-image img {
    max-width: 100%;
    height: auto;
}
</style>
<!-- end для модального вікна -->   
<title>Filipov’s Consulting</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
  <div class="container menu1">
     <div class="row">
    
          <?php 
          if ( has_nav_menu( 'first-menu' ) ) {
              wp_nav_menu( array( 
                  'theme_location' => 'first-menu',
                  'menu_class'     => 'first-menu',
              ) ); 
          }
          ?>

        <div class="col-md-3 sm_block">
                <?php if ( is_active_sidebar( 'header-social-icons' ) ) : ?>
                    <?php dynamic_sidebar( 'header-social-icons' ); ?>
                <?php endif; ?>
        </div>
        <div class="col-md-6 col-sm-12">
                <h2 class="site-name-header-first"><?php bloginfo( 'name' ); ?></h2>
        </div>
      <div class="col-md-3 col-sm-12 text-center">
          <?php if ( is_active_sidebar( 'header-phone-number' ) ) : ?>
              <?php dynamic_sidebar( 'header-phone-number' ); ?>
          <?php endif; ?>
      </div>
     
    </div><!-- row -->

</div><!-- container -->
    <div class="separator"></div>

  
<div class="container secondmenu ">
<nav class="navbar navbar-expand-lg bg-white navbar-light">
  <div class="container-fluid">
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
   
    <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'second-menu',  // Використовуємо зареєстроване меню 'second-menu'
          'container' => false,
          'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0 second-menu-ul',
          'fallback_cb' => '__return_false',
          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth' => 2,
          'walker' => new WP_Bootstrap_Navwalker()
        ));
      ?> 
    </div>
  </div>
</nav>
</div> 

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VJBZGEHGXY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VJBZGEHGXY');
</script>


</header>

<?php wp_body_open(); ?>