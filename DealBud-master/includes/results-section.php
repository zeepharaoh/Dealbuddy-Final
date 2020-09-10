<?php 
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'Solutions Content',
    'posts_per_page' => 1,
);
$arr_posts = new WP_Query($args);

if ($arr_posts->have_posts()) :
    while ($arr_posts->have_posts()) :
        $arr_posts->the_post();
?>

<!-- Section -->
<section class="solutions flex-columns">
    <div class="row">
        <div class="column">
            <div class="column-1">
                <?php
                if ( has_post_thumbnail()){
                    the_post_thumbnail('thumb-medium');
                }
                ?>
            </div>
        </div>
    
        <div class="column">
            <div class="column-2 bg-primary">
                <?php the_title('<h2>', '</h2>'); ?>
                <?php echo get_the_content(); ?>
            </div>
        </div>
</section>
<!-- Section end -->

<?php
    endwhile;
    wp_reset_postdata();
endif;
?>