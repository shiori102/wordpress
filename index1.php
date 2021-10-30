<!-- inserting header from header.php -->
<?php get_header(); 


while(have_posts()){
    the_post(); ?>
    //creating a hyper link to the post with a wp function
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
    <hr>
}


// inserting header from footer.php
<?php get_footer();

?>

<!-- inserting images into wp
the function - get_theme_file_uri('file path of img') -->

