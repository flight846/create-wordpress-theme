<?php get_header();

    while (have_posts()) {
        the_post(); ?>
        <!-- Output post title -->
        <h2>
            <?php the_title(); ?>        
        </h2>
        <!-- Output post content -->
        <?php the_content(); ?>
    <?php } 

    get_footer();
?>