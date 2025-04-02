<?php get_header(); ?>

<div class="container">
 <h2><?php single_cat_title(); ?></h2>
    <div class="row rowfreespace">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $category = get_queried_object(); // Отримання поточної категорії
        $blog = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 9,
            'orderby' => 'date',
            'order' => 'DESC',
            'paged' => $paged,
            'cat' => $category->term_id // Фільтр за поточною категорією
        ));

        if($blog->have_posts()){
            while($blog->have_posts()) { 
                $blog->the_post();
                ?>
            <div class="col-lg-4 col-sm-12 colpost">
                
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail postpicture">
                        <?php the_post_thumbnail(array(347, 215)); ?>
                    </div>
                <?php endif; ?>
                
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
                
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                
                <p><?php the_excerpt(); ?></p>
                
                <a  style='text-decoration: underline;' href="<?php the_permalink(); ?>">Читати далі</a>
                
                <!-- Виводимо дату публікації -->
                <div class='mydatabox'>
                    <div class='mydatasvg'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                        </svg>
                    </div>
                    <div>
                        <p class='mydatapost'><?php the_time('d.m.Y'); ?></p>
                    </div>
                </div>
            </div>
            <?php
            }
        }
        ?>
    </div>
    <div class="justify-content-center pagination mypagination">
        <?php
        // Виведення посторінкової навігації
        echo paginate_links(array(
            'total' => $blog->max_num_pages,
            'prev_text' => '&laquo;',
            'next_text' => '&raquo;'
        ));
        ?>
    </div>
</div>



<?php get_footer(); ?>