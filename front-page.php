<?php get_header() ?>
    <!-- Hero Content -->
        <?php 
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'Hero Content',
            'posts_per_page' => 1,
        );
        $arr_posts = new WP_Query($args);

        if ($arr_posts->have_posts()) :
            while ($arr_posts->have_posts()) :
                $arr_posts->the_post();
            ?>
        <!-- The article -->
        <div class="content">
            <?php echo get_the_content(); ?>
            <a href="#cases" class="btn"><i class="fas fa-chevron-right"></i>Read More</a>
        </div>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </header>
    <main>    
    <?php include 'includes/cases-section.php' ?>
    <?php include 'includes/request-section.php' ?>
    <?php include 'includes/how-section.php' ?>
    <?php include 'includes/results-section.php' ?>
    <?php include 'includes/who-section.php' ?>
    <?php include 'includes/contact-section.php' ?>
<?php get_footer() ?>