<?php

function needless_menus() {
  register_nav_menus(
    array(
    'header-menu' => __( 'Header Menü' ),
    'footer-menu' => __( 'Footer Menü' )
    )
  );
}
add_action( 'init', 'needless_menus' );

 ?>
