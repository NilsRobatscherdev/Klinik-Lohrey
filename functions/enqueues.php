<?php
function enqueue_styles(){
  wp_enqueue_style("style", get_template_directory_uri() . "/dist/css/style.css?v=".time(), [], false, 'all');
}

function enqueue_scripts(){
  wp_deregister_script("jquery");
  wp_enqueue_script("jquery", get_template_directory_uri() . "/js/vendor/jquery.min.js", [], '', true);
  wp_enqueue_script("google-maps", "https://maps.googleapis.com/maps/api/js?key=AIzaSyCvEvXuwQLYtl_p5LROFO3q7F2xeaWejd4", [], '', true);
  #wp_enqueue_script("bootstrap", get_template_directory_uri() . "/js/vendor/bootstrap.js", ["jquery"], '', true);
  wp_enqueue_script("slick", get_template_directory_uri() . "/js/vendor/slick.min.js", ["jquery"], '', true);
  wp_enqueue_script("aos", get_template_directory_uri() . "/js/vendor/aos.js", ["jquery"], '', true);
  wp_enqueue_script("app", get_template_directory_uri() . "/js/app.js?v=".time(), ["jquery"], '', true);
  wp_enqueue_script("google-map-js", get_template_directory_uri() . "/js/google-maps.js?v=".time(), ["jquery"], '', true);
  wp_enqueue_script("slider", get_template_directory_uri() . "/js/slider.js?v=".time(), ["jquery"], '', true);
  wp_enqueue_script("parallax-min", get_template_directory_uri() . "/js/vendor/parallax.min.js?v=".time(), ["jquery"], '', true);
  wp_enqueue_script("parallax", get_template_directory_uri() . "/js/parallax.js?v=".time(), ["jquery"], '', true);
  wp_enqueue_script("aufklappboxen", get_template_directory_uri() . "/js/aufklappboxen.js?v=".time(), ["jquery"], '', true);
}

if(!is_admin()){
  //is frontend
  add_action("wp_enqueue_scripts", "enqueue_styles");
  add_action("wp_enqueue_scripts", "enqueue_scripts");
}

?>