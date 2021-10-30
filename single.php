<!-- this is a single post  -->

<?php 

get_header();

while(have_posts()) {
    the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <?php }

get_footer();

?>

<!-- have_posts() - used in the wordpress loop to indicate while you have posts.. do this
the_post() - grabs a single post
the_title() - grabs the title of the post
the_content() - grabs the content of the post -->