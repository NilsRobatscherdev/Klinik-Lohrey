<?php $grid = get_sub_field('option-grid'); ?>
<?php $breite = get_sub_field('option-breite'); ?>
<?php $abstand = get_sub_field('abstand')?>
<?php $aos = get_sub_field('option_aos'); ?>
<div class="section">
    <div class="header <?php if($grid == "Innerhalb"): ?>container<?php elseif($grid == "Außerhalb"): ?>container-fluid<?php endif; ?>">
    <?php if( have_rows('slider') ): ?>
        <ul class="slides <?php if($breite == "volle Breite"): ?> col-lg-12<?php elseif($breite == "dreiviertel"): ?>col-lg-8<?php elseif($breite == "hälfte"): ?>col-lg-6<?php endif; ?>">
        <?php while( have_rows('slider') ): the_row(); 
            $image = get_sub_field('bilder');
            ?>
            <li class="" data-aos="fade-up">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
            </li>
        <?php endwhile; ?>
        </ul>
    <?php endif; ?>
    </div>
</div>