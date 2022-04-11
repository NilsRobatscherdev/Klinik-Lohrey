<?php get_header();
/*
Template Name: Mehrwertgespräche
*/
 ?>

<div class="intro container section">
    <?php /** <h1 class="headline col-11" data-aos="fade-up"><?php the_field('headline'); ?></h1>*/?>
    <h3 class="col-12 col-md-9 col-lg-9  col-lg-xl-6 subline" data-aos="fade-up"><?php the_field('subline'); ?></h3>
    <div class="punkte col-12">
        <?php the_field('punkte'); ?>
    </div>
</div>
<div class="container-fluid negativ section grey_bg">
    <div class="container">
        <h3 data-aos="fade-up" class="h3 col-12"><?php the_field('headline_graue_box'); ?></h3>
        <div class="copytext" data-aos="fade-up">
            <?php the_field('copytext_graue_box'); ?>
        </div>
    </div>
</div>


<div class="container kundenbewertungen section">
    <?php 
    $images = get_field('kundenbewertungen');
    if( $images ): ?>
        <div>
            <ul>
                <?php foreach( $images as $image ): ?>
                    <li class="col-12" data-aos="fade-up">
                        <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="Thumbnail of <?php echo esc_url($image['alt']); ?>" />
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    <div class="copytext col-md-12 col-lg-12" data-aos="fade-up">
            <?php the_field('copytext_blaue_box'); ?>
        </div>
</div>


<div class="container erfolg section">
    <div class="col-md-12" data-aos="fade-up">
        <div class="copytext">
        <?php the_field('uber_headline_erfolg'); ?>
        </div></div>
    <?php /*<h2 class="h1 col-lg-9 col-md-12" data-aos="fade-up"><?php the_field('headline_erfolg'); ?></h2>
    <div class="copytext col-12" data-aos="fade-up"><?php the_field('copytext_erfolg'); ?></div>
    */
    ?>
</div>
<!--
<div class="container-fluid section grey_bg">
    <div class="container releasing">
        <h2 class="col-12 col-lg-10 textRightAlign" data-aos="fade-up"><?php the_field('headline_releasing'); ?></h2>
        <div class="col-12 col-md-8 col-lg-8  copytext textRightAlign" data-aos="fade-up"><?php the_field('copytext_releasing'); ?></div>
       
    </div>
</div>
                -->
<div class="container section teilnahmebedingungen">
                    <div class="content">
                        <div class="img col-12 col-md-6 ">
                            <?php 
                            $image = get_field('teilnahmebedingungen_bild');
                            if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>

                        <a href="https://calendly.com/raphaelgrasser/meeting"><div class="button" data-aos="fade-up">MEHRWERT</div></a>
                    </div>
</div>
<?php /* <div class="container section contactMe">
    <h2 class="h1 col-12 col-md-10" data-aos="fade-up"><?php the_field('grose_headline'); ?></h2>
    <a href="https://wa.me/+491708624175?text=Raphael,%20ich%20bin%20bereit%20für%20dein%20Mehrwertgespräch!"><div class="button" data-aos="fade-up"><?php the_field('grose_headline_button'); ?></div></a>
</div>*/?>

<div class="container-fluid section clienten blue_bg">
    <div class="container clienten-content">
        <h2 class="h1"  data-aos="fade-up"><?php the_field('clienten_headline'); ?></h2>
        <div class="embed-container col-12" data-aos="fade-up">
            <?php the_field('clienten_video'); ?>
        </div>
        <!--<div class="videotext col-10 col-md-7" data-aos="fade-up"><?php the_field('clienten_video_text'); ?></div>-->
    </div>
</div>

<div class="container-fluid section aboutme">
    <div class="container aboutme-content">
        <!--<h2 class="h1" data-aos="fade-up"><?php the_field('aboutme_headline'); ?></h2>-->
        <div class="embed-container about_me_video col-12" data-aos="fade-up">
            <?php the_field('ueber_mich_video'); ?>
        </div>
        <!--<div class="videotext col-10 col-md-7" data-aos="fade-up"><?php the_field('clienten_video_text'); ?></div>-->
    </div>
</div>


<?php get_template_part('module') ?>
<?php get_footer(); ?>