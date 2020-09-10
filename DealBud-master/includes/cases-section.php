<!-- Section -->
<section id="cases" class="cases flex-columns section-padding bg-light">
    <header class="section-header">
        <h4>Read more about how DealBuddy can be used</h4>
        <h2>Use Cases</h2>
    </header>

    <div class="flex-items">
        <?php 
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'Cases Content',
                'posts_per_page' => 3,
            );
            $arr_posts = new WP_Query($args);

            if ($arr_posts->have_posts()) :
                while ($arr_posts->have_posts()) :
                    $arr_posts->the_post();
        ?>
        <div class="cases-content">
            <?php the_title('<h3>', '</h3>'); ?>
            <?php echo get_the_content(); ?>
        </div>
    
    <?php
        endwhile;
        wp_reset_postdata();
        endif;
    ?>
    </div>
</section>
<!-- Section end -->
