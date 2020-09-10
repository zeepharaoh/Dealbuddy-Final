<section id="how" class="icons bg-light">
    <header class="section-header">
        <h2>How DealBuddy works on a retailer's website</h2>
      </header>
    <div class="flex-items">
    <?php 
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'About Content',
            'posts_per_page' => 3,
        );
        $arr_posts = new WP_Query($args);

        if ($arr_posts->have_posts()) :
            while ($arr_posts->have_posts()) :
                $arr_posts->the_post();
            ?>
        <!-- The article -->
      
        <div class="cases-content">
            <?php echo get_the_content(); ?>
        </div>

        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</section>