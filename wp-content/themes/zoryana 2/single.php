<?php get_header(); ?>


<div class="container">
    <!-- Виведення категорій посту -->
    <div class="row tags">
                    <div class="col" style='margin-right: 30px;'>
                        <p class="postmetadata">
                            <?php
                            // Отримання категорій для конкретного посту
                            $categories = get_the_category();
                            if ($categories) {
                                foreach ($categories as $category) {
                                    ?>
                                    <a class='tag-link' href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo esc_html($category->name); ?></a>
                                    <?php
                                }
                            }
                            ?>
                        </p>
                    </div>
                </div>
  <!-- Кінець виведення категорій посту -->
  

    <!-- Начинаємо цикл -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- Відкриваємо блок div для кожного запису -->
        <div class="post">
            <!-- Виводимо заголовок посту з посиланням -->
            <h2><a class='titleofpost' href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <!-- Виводимо дату публікації -->
            <div class='mydatabox'>
                <div class='mydatasvg'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                     <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                    </svg>
                </div>
                <div>
                     <p class='mydatapost'> <?php the_time('d.m.Y'); ?></p>
                 </div>
            </div>
            <!-- Виводимо вміст посту -->
            <div class="entry">
                <?php the_content(); ?>
           

              <div class="row">
       
            <?php
                foreach(CFS()->get('part_of_the_article') as $subtitle_posts) {  ?>
                  <div class="row">  
                        <h3><?php  echo $subtitle_posts['subtitle_post'];?></h3>
                        <p><?php  echo $subtitle_posts['description_parts_of_article'];?></p> 
                        <img src=" <?php  echo $subtitle_posts['image_parts_of_article'];?>" alt="">
                        <div class="row">
                         <?php  echo $subtitle_posts['video_parts_of_article']; ?>
                         </div>
                  </div> 
                   <?php   } 
            ?>
     </div>
 </div>

            <!-- Виводимо категорії, до яких відноситься пост -->
            <p class="postmetadata"> #<?php the_category(',   #'); ?></p>
            
        </div> <!-- Закриваємо блок div -->
    <?php endwhile; else: ?>
        <!-- Виводимо повідомлення, якщо немає постів -->
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</div>


<?php get_footer(); ?>
