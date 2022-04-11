<?php $grid = get_sub_field('option-grid'); ?>
<?php $breite = get_sub_field('option-breite'); ?>
<?php $abstand = get_sub_field('abstand')?>
<?php $aos = get_sub_field('option_aos'); ?>
<div class="section section-parallax">
    <div class="parallax <?php if($grid == "innerhalb des Grids"): ?>container<?php elseif($grid == "außerhalb des Grids"): ?>container-fluid<?php endif; ?>">
            <div class="parallax-content">
                <div class="parallax-container" data-natural-width="1400" data-parallax="scroll" data-image-src="<?php $image = get_sub_field('bild'); echo esc_url($image['url']); ?>">
                    <div class="parallax-text">
                            <?php if( have_rows('text') ): ?>
                                <?php while( have_rows('text') ): the_row(); 

                                    // Get sub field values.
                                    $headline = get_sub_field('headline');

                                    ?>
                                        <div class="content">
                                            <h2 class="h1 white col-lg-8" data-aos="fade-up"><?php the_sub_field('headline') ?></h2>

                                            <?php if( have_rows('content') ): ?>
                                                <ul class="container">
                                                <?php while( have_rows('content') ): the_row(); 
                                                    $icon = get_sub_field('icon');
                                                    $icon_headline = get_sub_field('icon_headline');
                                                    $icon_copytext = get_sub_field('icon_copytext');
                                                    ?>
                                                    <li class="col-lg-4 col-6">
                                                        <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt'] ?>" data-aos="fade-up" />
                                                        <h2 class="h2 white" data-aos="fade-up"><?php the_sub_field('icon_headline',false,false) ?></h2>
                                                        <p class="white" data-aos="fade-up"><?php the_sub_field('icon_copytext',false,false) ?></p>
                                                    </li>
                                                <?php endwhile; ?>
                                                </ul>
                                            <?php endif; ?>
                                        </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                    </div>
                </div>
        </div>
    </div>
</div> 