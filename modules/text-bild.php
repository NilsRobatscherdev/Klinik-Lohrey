<?php $grid = get_sub_field('option-grid'); ?>
<?php $aos = get_sub_field('option_aos'); ?>

<div class="section section-bild-text">
    <div class="bild-text <?php if($grid == "Innerhalb"): ?>container<?php elseif($grid == "Außerhalb"): ?>container-fluid<?php endif; ?> text-bild">
        <div class="row" >
            <?php if( have_rows('text-bild') ): ?>
            <?php while( have_rows('text-bild') ): the_row();
                $image = get_sub_field('bild');
                $anordnung = get_sub_field('option-anordnung');
                ?>
                <div class="content col-lg-12 <?php if($anordnung == "Text links"): ?>normal<?php elseif($anordnung == "Text rechts"): ?>gespiegelt<?php endif; ?>">
                    <div class="img">
                        <?php if( have_rows('bilder') ): ?>
                            <ul class="slides">
                            <?php while( have_rows('bilder') ): the_row(); 
                                $image = get_sub_field('bild');
                                ?>
                                <li data-aos="fade-up">
                                    <?php echo wp_get_attachment_image( $image, 'large' ); ?>
                                </li>
                            <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                    <div class="text">
                        <h2 class="h2" data-aos="fade-up"><?php the_sub_field('headline',false,false) ?></h2>
                        <div class="copytext" data-aos="fade-up">
                            <?php the_sub_field('copytext',false,false); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>