<?php get_header();

/**
 * Template Name: Archive
 *
 * */?>
<?php get_template_part('module') ?>

<?php
// wp-query to get all published posts without pagination
$allPostsWPQuery = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
<?php if ( $allPostsWPQuery->have_posts() ) : ?>
    <div class="container">
        <ul class="col-12">
            <?php while ( $allPostsWPQuery->have_posts() ) : $allPostsWPQuery->the_post(); ?>
            <li class="col-lg-4 col-md-6 col-sm-12">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
                <div class="info">
                    <p><?php the_author()?></p>
                    <p><?php the_date()?></p>
                </div>
                <a class="titel" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
     <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <p><?php _e( 'There no posts to display.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>