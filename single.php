<?php get_header(); ?>


<div class="container">
    <h3><?php wp_title(false); ?></h3>
</div>


        <?php
            if(have_posts()):
                while(have_posts()): the_post();
                    get_template_part('module',get_post_format());

                    if(comments_open()):
                        comments_template();
                    endif;
                endwhile;
            endif;
            ?>


<?php get_footer(); ?>

