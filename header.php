<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="wrapper">
            <?php $header_style = get_theme_mod('header_styles', 'style_1'); get_template_part('partials/php/header_'.$header_style); ?>
        <div class="content-area">
