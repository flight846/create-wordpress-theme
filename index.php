<?php get_header();

    while (have_posts()) {
        the_post(); ?>
        <!-- Output post title -->
        <h2>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <!-- Output post content -->
        <?php the_content(); ?>
        <hr>
    <?php } 
    
    get_footer();
?>