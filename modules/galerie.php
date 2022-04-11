<?php $grid = get_sub_field('option-grid'); ?>
<?php $breite = get_sub_field('option-breite'); ?>
<?php $aos = get_sub_field('option_aos'); ?>

<div class="section section-galerie">


    <div class="<?php if($grid == "Innerhalb"): ?>container<?php elseif($grid == "Außerhalb"): ?>container-fluid<?php endif; ?>">
        <div class="row" >
            <div class="gal">
            <?php 
                $images = get_sub_field('Galerie');
                if( $images ): ?>
                    <ul class="<?php if($breite == "volle Breite"): ?> col-lg-12<?php elseif($breite == "dreiviertel"): ?>col-lg-8 <?php elseif($breite == "hälfte"): ?>col-lg-6<?php endif; ?>">
                        <?php foreach( $images as $image ): ?>
                            <li class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-up">
                                <a href="<?php echo esc_url($image['url']); ?>">
                                    <img src="<?php echo esc_url($image['sizes']['small']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </a>
                                <p><?php echo esc_html($image['caption']); ?></p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>