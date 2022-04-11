<?php

add_theme_support('post-thumbnails');

add_image_size('large', 720, 540, true); // Large Thumbnail
add_image_size('medium', 255, 340, true); // Medium Thumbnail
add_image_size('small', 120, '', true); // Small Thumbnail
add_image_size('xxx_large', 1100, 764, true);
add_image_size('square', 300, 300, true);

//Allow SVG through WordPress Media Uploader
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

?>
