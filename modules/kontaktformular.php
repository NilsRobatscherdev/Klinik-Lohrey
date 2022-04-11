<?php $grid = get_sub_field('option-grid'); ?>
<?php $breite = get_sub_field('option-breite'); ?>
<?php $aos = get_sub_field('option_aos'); ?>
<div class="section section-kontaktformular">
    <div class="<?php if($grid == "Innerhalb"): ?>container<?php elseif($grid == "Außerhalb"): ?>container-fluid<?php endif; ?>">
        <div class="row">
            <div class="<?php if($breite == "volle Breite"): ?> col-lg-12<?php elseif($breite == "dreiviertel"): ?>col-lg-8<?php elseif($breite == "hälfte"): ?>col-lg-6<?php endif; ?>">
                    <div class="kontaktformular">
                    <h2 class="headline-kontaktformular h1 col-lg-6" data-aos="fade-up"><?php the_sub_field('headline_kontaktformular',false,false)?></h2>
                        <?php the_sub_field('kontaktformular_link') ?>
                    </div>
            </div>
        </div>
    </div>
</div>