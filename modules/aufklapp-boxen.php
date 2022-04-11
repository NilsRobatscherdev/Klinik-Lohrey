<?php $grid = get_sub_field('option-grid'); ?>
<?php $breite = get_sub_field('option-breite'); ?>
<?php $aos = get_sub_field('option_aos'); ?>

<div class="section section-aufklappboxen">
    <div class="aufklapp-boxen <?php if($grid == "innerhalb des Grids"): ?>container<?php elseif($grid == "außerhalb des Grids"): ?>container-fluid<?php endif; ?>">
        <div class="row">
            <div class="aufklapp-boxen-container<?php if($breite == "volle Breite"): ?> col-lg-12<?php elseif($breite == "dreiviertel"): ?>col-lg-8<?php elseif($breite == "hälfte"): ?>col-lg-6<?php endif; ?>">
                <?php if( have_rows('aufklapp-boxen') ): ?>
                    <ul>
                        <?php while( have_rows('aufklapp-boxen') ): the_row();
                        $headline_aufklappboxen = get_sub_field('titel');
                        $copytext_aufklapper = get_sub_field('copytext');
                        ?>
                        <li class="col-lg-6 col-sm-12" data-aos="fade-up">
                            <h3 class="h3m"><?php echo $headline_aufklappboxen; ?></h3>
                            <div class="content">
                                <?php echo $copytext_aufklapper; ?>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>
