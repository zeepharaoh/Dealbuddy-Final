<!-- Section -->
<section id="who" class="who section-padding">
    <header class="section-header">
        <h2>Who we are</h2>
    </header>

    <div class="flex-items who-container">
        <?php 
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'AI Content',
                'posts_per_page' => 3,
            );
            $arr_posts = new WP_Query($args);

            if ($arr_posts->have_posts()) :
                while ($arr_posts->have_posts()) :
                    $arr_posts->the_post();
        ?>
        <div>
            <?php
                if ( has_post_thumbnail()){
                    the_post_thumbnail('thumb-medium');
                }
            ?>
            <div class="ai-content" style="height: 300px;">
                <?php the_title('<h2 style="font-weight: 500;">', '</h2>'); ?>
                <?php echo get_the_content(); ?>
            </div>
        </div>
    
    <?php
        endwhile;
        wp_reset_postdata();
        endif;
    ?>
    </div> <!-- flex-items end -->
</section> <!-- Section end -->
