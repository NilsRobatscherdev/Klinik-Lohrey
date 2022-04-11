<?php $grid = get_sub_field('option-grid'); ?>
<?php $aos = get_sub_field('option_aos'); ?>
<div class=" container-headline <?php if($grid == "Innerhalb"): ?>container<?php elseif($grid == "Außerhalb"): ?>container-fluid<?php endif; ?>">
    <div class="row" data-aos="fade-up">
        <div class="col-lg-12">
            <h1 class="h1" ><?php echo the_sub_field('headline',false,false) ?></h1>
        </div>
    </div>
</div>