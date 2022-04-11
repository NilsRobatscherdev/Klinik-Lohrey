<?php $grid = get_sub_field('option-grid'); ?>
<?php $breite = get_sub_field('option-breite'); ?>
<?php $aos = get_sub_field('option_aos'); ?>
<div class="section section-zitatbox">
    <div class="<?php if($grid == "innerhalb des Grids"): ?>container<?php elseif($grid == "außerhalb des Grids"): ?>container-fluid<?php endif; ?> zitatbox">
        <div class="row">
            <div class="<?php if($breite == "volle Breite"): ?> col-lg-12<?php elseif($breite == "dreiviertel"): ?>col-lg-8<?php elseif($breite == "hälfte"): ?>col-lg-6<?php endif; ?>">
                <?php if( have_rows('zitatbox') ): ?>
                    <?php while( have_rows('zitatbox') ): the_row();
                        $image = get_sub_field('portrait');
                        $copytext = get_sub_field('copytext');
                        ?>
                        <div class="content">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"/>
                            <div class="text">
                                <?php the_sub_field('copytext') ?>
                                <?php the_sub_field('person') ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>