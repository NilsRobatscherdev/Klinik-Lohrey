<?php $grid = get_sub_field('option-grid'); ?>
<?php $breite = get_sub_field('option-breite'); ?>
<?php $aos = get_sub_field('option_aos'); ?>

<div class="section section-slider">
    <div  class="slider-with-content <?php if($grid == "Innerhalb"): ?>container<?php elseif($grid == "Außerhalb"): ?>container-fluid<?php endif; ?>">
    <?php if( have_rows('slider_bild_content') ): ?>
        <ul class="slides <?php if($breite == "volle Breite"): ?> col-lg-12<?php elseif($breite == "dreiviertel"): ?>col-lg-8<?php elseif($breite == "hälfte"): ?>col-lg-6<?php endif; ?>">
            <?php while( have_rows('slider_bild_content') ): the_row();?>
                <?php $image = get_sub_field('bilder'); ?>
                <li data-aos="fade-up">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" data-aos="fade-up" />
                    <div class="above-content">
                        <?php if (get_sub_field('headline')):?>
                            <div class="headline">
                                <h2 class="h1"><?php the_sub_field('headline',false,false); ?></h2>
                                </div>
                        <?php endif; ?>
                        <?php if (get_sub_field('copytext')):?>
                            <div class="copytext">
                                <?php the_sub_field('copytext', false,false) ?>
                                </div>
                        <?php endif; ?>
                        <div class="button_content">
                            <?php
                            $button = get_sub_field('button');
                            if( $button ):
                                $button_url = $button['url'];
                                $button_title = $button['title'];
                                $button_target = $button['target'] ? $button['target'] : '_self';
                                ?>
                                <button><a class="" href="<?php echo esc_url( $button_url ); ?>" target="<?php echo esc_attr( $button_target ); ?>"><?php echo esc_html( $button_title ); ?></a></button>
                            <?php endif; ?>
                        </div>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
    </div>
</div>