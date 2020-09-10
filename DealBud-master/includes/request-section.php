<!-- Section -->
<section id="request-demo" class="request-demo">
    <div class="bg-primary">

        <?php 
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'Request Content',
                'posts_per_page' => 1,
            );
            $arr_posts = new WP_Query($args);

            if ($arr_posts->have_posts()) :
                while ($arr_posts->have_posts()) :
                    $arr_posts->the_post();
        ?>
            <header class="section-header">
                <?php the_title('<h2>', '</h2>'); ?>
            </header>
            <?php echo get_the_content(); ?>

        <?php
            endwhile;
            wp_reset_postdata();
            endif;
        ?>
        <div class="demo-btn">
            <a href="demo" class="btn btn-outline">
                <i class="fas fa-chevron-right"></i>
                Request A Demo
            </a>
        </div>
    </div> <!-- bg primary -->
</section> <!-- Section end -->
