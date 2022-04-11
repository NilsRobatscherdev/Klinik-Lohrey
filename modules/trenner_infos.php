<?php $grid = get_sub_field('option-grid'); ?>
    <?php
        $image = get_sub_field('bild');
        $size = 'xxx_large'; // (thumbnail, medium, large, full or custom size)
    ?>
<div class="section section-trenner_infos" style="background-image:url(<?php echo get_sub_field('bild') ?>);">

    <div class="<?php if($grid == "Innerhalb"): ?> container<?php elseif($grid == "Außerhalb"): ?>container-fluid<?php endif; ?>">
        <div class="col-lg-12">
            <div>
                <?php if( have_rows('text') ): ?>
                    <?php while( have_rows('text') ): the_row(); 

                        // Get sub field values.
                        $headline = get_sub_field('headline');
                        ?>
                        <div>
                            <div class="col-lg-12 content">
                                <h2 class="h1"><?php the_sub_field('headline',false,false); ?></h2>
                                <div class="list">
                                <?php if( have_rows('content') ): ?>
                                    <ul class="">
                                    <?php while( have_rows('content') ): the_row();
                                        $icon = get_sub_field('icon');
                                        $icon_headline = get_sub_field('icon_headline');
                                        $icon_copytext = get_sub_field('icon_copytext');
                                        ?>
                                        <li class="col-lg-3">
                                            <?php echo wp_get_attachment_image( $icon, 'full' ); ?>
                                            <p class="h1"><?php the_sub_field('icon_headline',false,false); ?></p>
                                            <p class=""><?php the_sub_field('icon_copytext',false,false); ?></p>
                                        </li>
                                    <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>