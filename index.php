<?php get_header(); ?>



<div class="container blog_posts pl-4 pr-4">
            <h1 class="mt-4 pt-4">Events and announcements</h1>
            <?php 
            if(have_posts()):
                while(have_posts()) : the_post();
                    get_template_part('content', get_post_format()); 
                endwhile; 
            endif;
            ?>
</div>



<?php get_footer(); ?>