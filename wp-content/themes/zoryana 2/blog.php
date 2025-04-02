<?php
/*
Template Name: Blog Page
Template Post Type: page
*/
?>

<?php get_header(); ?>
<div class="container">
 <h1>Cтатті</h1>
    <div class="row mytag rowfreespace">
        <?php
        // Виведення всіх категорій, крім виключених
        $excluded_slugs = array('granty', 'investytsiyi', 'kredyty');

        $categories = get_categories(array(
            'exclude' => get_categories(array(
                'slug' => $excluded_slugs,
                'fields' => 'ids'
            )),
        ));

        if ($categories) {
            foreach ($categories as $category) {
                ?>
                <div class="col-md-auto category">
                    <a class='tag-link' href="<?php echo get_category_link($category->term_id); ?>">
                        <?php echo esc_html($category->name); ?>
                    </a>
                </div>
                <?php
            }
        }
        ?>
    </div>
    <div class="row rowfreespace">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        // Отримуємо ID категорій, які треба виключити
        $excluded_category_ids = get_categories(array(
            'slug' => $excluded_slugs,
            'fields' => 'ids'
        ));

        $blog = new WP_Query(array(
            'post_type'      => 'post',
            'posts_per_page' => 9,
            'orderby'        => 'date',
            'order'          => 'DESC',
            'paged'          => $paged,
            'category__not_in' => $excluded_category_ids, // Виключаємо категорії
        ));

        if ($blog->have_posts()) {
            while ($blog->have_posts()) {
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
                                $post_categories = get_the_category();
                                if ($post_categories) {
                                    foreach ($post_categories as $category) {
                                        ?>
                                        <a class='tag-link' href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
                                            <?php echo esc_html($category->name); ?>
                                        </a>
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
                    
                    <a href="<?php the_permalink(); ?>">Читати далі</a>
                    
                    <!-- Виведення дати публікації -->
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
        } else {
            echo '<p>Немає записів у вибраних категоріях.</p>';
        }
        ?>
    </div>

    <div class="justify-content-center pagination mypagination">
        <?php
        echo paginate_links(array(
            'total'     => $blog->max_num_pages,
            'prev_text' => '&laquo;',
            'next_text' => '&raquo;',
        ));
        ?>
    </div>
</div>

<?php get_footer(); ?>
