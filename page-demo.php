<?php get_header() ?>
    </header>
    </main>
    <!-- Section -->
    <section id="contact" class="contact flex-columns">
        <div class="row">

        <?php 
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'Request Demo Content',
                'posts_per_page' => 1,
            );
            $arr_posts = new WP_Query($args);

            if ($arr_posts->have_posts()) :
                while ($arr_posts->have_posts()) :
                    $arr_posts->the_post();
        ?>

        <!-- Image box to the left -->
        <div class="column">
            <div class="column-1 demo-content">
                <h2>Schedule your demo to find out how <span class="text-primary">Deal</span>Buddy can:</h2>
                <?php the_content(); ?>
            </div>
        </div>

         <?php
            endwhile;
            wp_reset_postdata();
            endif;
        ?>


        <!-- Contact form to the right -->
        <?php 
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'Request Demo Contact',
            'posts_per_page' => 1,
        );
        $arr_posts = new WP_Query($args);

        if ($arr_posts->have_posts()) :
            while ($arr_posts->have_posts()) :
                $arr_posts->the_post();
        ?>

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

<?php get_footer() ?>