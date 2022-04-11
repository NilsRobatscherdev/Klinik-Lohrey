<?php $grid = get_sub_field('option-grid'); ?>
<?php $breite = get_sub_field('option-breite'); ?>
<?php $zweispaltig = get_sub_field('option-zweispaltig'); ?>
<?php $aos = get_sub_field('option_aos'); ?>

<div class="<?php if($grid == "Innerhalb"): ?>container<?php elseif($grid == "Außerhalb"): ?>container-fluid<?php endif; ?>">
    <div class="row">
        <div class="<?php if($breite == "volle Breite"): ?> col-lg-12 p-0<?php elseif($breite == "dreiviertel"): ?>col-lg-8 col-8 p-0<?php elseif($breite == "hälfte"): ?>col-lg-6 p-0<?php endif; ?>">
            <div class="copytext" data-aos="fade-up">
                <div class="<?php if($zweispaltig == "zweispaltig"): ?>twocol col-lg-12<?php elseif($zweispaltig == "einspaltig"): ?>col-lg-12<?php endif; ?>"><?php the_sub_field('copytext') ?></div>
            </div>
        </div>
    </div>
</div>

