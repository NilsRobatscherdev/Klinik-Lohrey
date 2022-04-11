<?php $grid = get_sub_field('option-grid'); ?>
<?php $breite = get_sub_field('option-breite'); ?>
<?php $aos = get_sub_field('option_aos'); ?>
<div class="section section-bild">
    <div class="<?php if($grid == "Innerhalb"): ?> container<?php elseif($grid == "Außerhalb"): ?>container-fluid<?php endif; ?>">
        <div class="row" data-aos="fade-up">
            <div class="<?php if($breite == "volle Breite"): ?> col-lg-12 p-0<?php elseif($breite == "dreiviertel"): ?>col-lg-8 col-8 p-0<?php elseif($breite == "hälfte"): ?>col-lg-6 p-0<?php endif; ?> col-lg-12 bild">
            <?php 
                $image = get_sub_field('bild');
                if( !empty( $image ) ): ?>
                     <img src="<?php echo esc_url($image['sizes']['xxx_large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>
