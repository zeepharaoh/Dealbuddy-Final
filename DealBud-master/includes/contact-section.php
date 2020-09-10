<!-- Section -->
<section id="contact" class="contact flex-columns">
    <div class="row">

    <?php 
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'Callback Content',
            'posts_per_page' => 1,
        );
        $arr_posts = new WP_Query($args);

        if ($arr_posts->have_posts()) :
            while ($arr_posts->have_posts()) :
                $arr_posts->the_post();
    ?>

    <!-- Image box to the left -->
    <div class="column">
        <div class="column-1">
            <?php
            if ( has_post_thumbnail()){
                the_post_thumbnail('thumb-medium');
            }
            ?>
        </div>
    </div>

    <!-- Contact form to the right -->
    <div class="column">
        <div class="column-2 bg-light">
            <?php the_title('<h2>', '</h2>'); ?>
            <?php the_content(); ?>
        </div>
    </div>
    
    <?php
        endwhile;
        wp_reset_postdata();
        endif;
    ?>

    </div> <!-- row end --> 
</section> <!-- Section end -->
