<?php $grid = get_sub_field('option-grid'); ?>
<?php $aos = get_sub_field('option_aos'); ?>
<div class=" container-subline <?php if($grid == "Innerhalb"): ?>container<?php elseif($grid == "Außerhalb"): ?>container-fluid<?php endif; ?>">
    <div class="row" data-aos="fade-up">
        <div class="col-lg-12">
            <h2 class="h2"><?php echo the_sub_field('subline',false,false) ?></h2>
        </div>
    </div>
</div>