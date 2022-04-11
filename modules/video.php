<?php $grid = get_sub_field('option-grid'); ?>
<?php $breite = get_sub_field('option-breite'); ?>
<?php $aos = get_sub_field('option_aos'); ?>

<?php

// Load value.
$iframe = get_sub_field('video');

// Use preg_match to find iframe src.
preg_match('/src="(.+?)"/', $iframe, $matches);
$src = $matches[1];

// Add extra parameters to src and replcae HTML.
$params = array(
    'controls'  => 1,
    'hd'        => 1,
    'autohide'  => 1
);
$new_src = add_query_arg($params, $src);
$iframe = str_replace($src, $new_src, $iframe);

// Add extra attributes to iframe HTML.
$attributes = 'frameborder="0"';
$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

// Display customized HTML.
?>
<div class="section section-video">
    <div class="<?php if($grid == "Innerhalb"): ?> container<?php elseif($grid == "Außerhalb"): ?>container-fluid<?php endif; ?>">
        <div class="<?php if($breite == "volle Breite"): ?> col-lg-12<?php elseif($breite == "dreiviertel"): ?>col-lg-8<?php elseif($breite == "hälfte"): ?>col-lg-6<?php endif; ?>" data-aos="fade-up">
                <div class="video"><?php echo $iframe;?></div>
        </div>
    </div>
</section>