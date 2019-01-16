<?php get_header();

    while (have_posts()) {
        the_post(); ?>
        <!-- Output post title -->
        <h1>This is a page. Not a post</h1>
        <h2>
            <?php the_title(); ?>        
        </h2>
        <!-- Output post content -->
        <?php the_content(); ?>
    <?php } 

    get_footer();
?>