<?php
/*
Template Name: Portfolio Page
Template Post Type: page
*/
?>


<!-- Підключаємо файл header.php -->
<?php get_header(); ?>

<?php
echo '<br/>';

 get_bloginfo('name'); // Виводимо назву сайту

echo '<br/>';

echo get_bloginfo('description'); // Виводимо опис сайту

?>
<div class="container">

    <!-- Начинаємо цикл -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- Відкриваємо блок div для кожного запису -->
        <div class="post">
            <!-- Виводимо заголовок посту з посиланням -->
            <h1><a class='titleofpost' href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
           
            <!-- Виводимо вміст посту -->
            <div class="entry">
                <?php the_content(); ?>
              <div class="row">
                    <?php
                foreach(CFS()->get('portfolio_page') as $portfolio) {  ?>
                  <div class="col-lg-4 col-md-12 portfolioblock">  
                     <?php  echo $portfolio['portfolio_video']; ?><br>
                    <p><?php  echo $portfolio['potrfolio_page_description']; ?></p>
                  </div> 
                   <?php   } 
        ?>  
             </div>
       </div>

            
        </div> <!-- Закриваємо блок div -->
    <?php endwhile; else: ?>
        <!-- Виводимо повідомлення, якщо немає постів -->
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</div>

</div>



<?php get_footer(); ?>