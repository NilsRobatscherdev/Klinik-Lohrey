<?php 
$location = get_sub_field('google-map');
if( $location ): ?>
    <div class="acf-map" data-zoom="16">
        ad
        <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
    </div>
<?php endif; ?>