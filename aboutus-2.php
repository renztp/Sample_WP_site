<?php 
/*
* Template Name: About us page
*/
?>
<?php get_header(); ?>



        <?php 
            if(have_posts()):
                while(have_posts()) : the_post();
                    get_template_part('content', 'none'); 
                    endwhile; 
                endif;
        ?>

asdfasf
<?php get_footer(); ?>